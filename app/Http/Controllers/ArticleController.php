<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleDetail;
use App\Models\ArticleDetailsImage;
use App\Models\ArticleType;
use App\Models\User;
use App\Models\ArticleImage;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

use Validator;
use Session;
use Log;

class ArticleController extends Controller
{
    public function showArticlePage(Request $request)
    {
        if ($request->ajax()) {
            $data = Article::with('articleDetails','articleType')->get();
            // return $data;
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('plus',function($row){
                        return `<i class="material-icons">&#xe145;</i>`;
                    })
                    ->addColumn('name',function($row){
                       $article_detail = route('list-more-article-page',$row->id);
                    //    $btn= '<a type="button" class="btn btn-primary btn-rounded editArticle" href="'.$article_detail.'" title="View Details">
                    //     <i class="material-icons">remove_red_eye</i>  </a>';
                    //     return $btn;
                         return '<a href="'. $article_detail.'">'.$row->article_name.'</a>';
                    })
                    ->addColumn('article_title',function($row){
                       
                         return $row->article_title ?? 'No Title';
                    })
                    ->addColumn('article_description',function($row){
                        return $row->article_description ?? 'No Description';
                    })
                    ->addColumn('article_type',function($row){
                        return $row->articleType->name ?? 'No type';
                    })
                    ->addColumn('created_by',function($row){
                        $user = User::find($row->created_by);
                        return $user->name ?? $row->created_by;
                    })
                    ->addColumn('status',function($row){
                        if($row->status == 1 )
                        {
                            $label = '<label class="success">Enabled</label>';
                        }elseif($row->status == 0){
                            $label = '<label class="danger">Disabled</label>';
                        }
                        return $label;
                    })
                    ->addColumn('action', function($row){
                        $route = route('edit-article-page',$row->id);
                        $article = route('add-more-article-page',$row->id);
                        $article_detail = route('list-more-article-page',$row->id);
						
						if($row->status == 1 )
							{
								$btn = '<a type="button" class="btn btn-warning btn-rounded statusChange" data-id="'.$row->id.'" title="Deactivate">
								<i class="material-icons">&#xe5cd;</i></a>';
							}
							else
							{
								$btn = '<a type="button" class="btn btn-success btn-rounded statusChange" data-id="'.$row->id.'" title="Activate">
								<i class="material-icons">&#xe5ca;</i></a>';
							}
						
                           $btn .= '<a type="button" class="btn btn-primary btn-rounded editArticle" href="'.$route.'" title="Edit">
                                <i class="material-icons">&#xE254;</i>
                            </a>
                            <a type="button" class="btn btn-danger btn-rounded deleteArticle" data-id="'.$row->id.'" title="Delete">
                               <i class="material-icons">&#xE872;</i>
                            </a> ';
                        //     <a type="button" class="btn btn-info btn-rounded" href="'.$article.'" title="Add Details">
                        //     <i class="material-icons">&#xe145;</i>
                        //    </a>
                        //     <a type="button" class="btn btn-primary btn-rounded editArticle" href="'.$article_detail.'" title="View Details">
                        //     <i class="material-icons">remove_red_eye</i>  </a>
                           

                            return $btn;
                    })
                    ->rawColumns(['action','status','name','plus'])
                    ->make(true);
        }
        return view('article.article');
    }
    public function addArticlePage()
    {
        $types = ArticleType::orderby('priority','ASC')->get();
        return view('article.add_article',compact('types'));
    }
    public function addMoreArticlePage($id)
    {
        $articles = Article::where('id',$id)->first();
        $sub = ArticleDetail::where('article_id',$id)->whereNotNull('sub_id')->get();
         return view('article.add_more_article',compact('articles','sub'));
       
    }
    public function addArticleDetailPage($id)
    {
        $articles = Article::where('id',$id)->first();
        $sub = ArticleDetail::where('article_id',$id)->whereNotNull('sub_id')->get();
        // return view('article.add_more_article',compact('articles','sub'));
        return view('article.add_article_details',compact('articles','sub'));
    }
    public function storeArticleData(Request $request)
    {
        $imageName = '';
        $validator = Validator::make(request()->all(),[
            'name' => 'required',
            'article_type' => 'required',
            // 'article_title' => 'required',
            // 'article_description' => 'required',
        ]);

        if ($validator->fails())
        {
            return response(['status' => false,'message'=>$validator->errors()->all(),'data' => []], 422);
        }else 
		{
			try
			{
				$article = new Article;
				$article->article_name = request('name');
				$article->article_title = request('article_title');
				$article->article_description = request('article_description');
                
				// $article->article_image = $imageName;
				$article->type_id = request('article_type');
				$article->status = 1;
				$article->created_by = Auth::user()->id;
                $article->icon = request('icon');
				$article->save();

                if ($request->file('article_images')) {
                    foreach($request->file('article_images') as $image)
                    {
                        $imageName = time().rand(1,9).'.'.$image->extension();
                        $image->move(public_path('Article'),$imageName);
                    
                        // $imageName = time().rand(1,9).'.'.$request->article_images->extension();
                        // $request->article_images->move(public_path('Article'),$imageName);
                        $articleImg= new ArticleImage;
                        $articleImg->article_image= $imageName;
                        $articleImg->article_id=$article->id;
                        $articleImg->save();
                    }
				}
				Session::flash('success',"Article successfully added.");
			}
			catch(\Exception $e)
			{
				Session::flash('danger', $e->getMessage());
			}
		}
        return redirect('/admin/article-page');
    }

    public function storeArticleDetailsData(Request $request)
    {
        // dd(request()->all());
        $imageName = '';
        $validator = Validator::make(request()->all(),[
            // 'name' => 'required',
            // 'title' => 'required',
            // 'description' => 'required',
            // 'image' => 'required',
            // 'image.*' => 'mimes:jpg,png,jpeg,gif,svg',
        ]);
        if ($validator->fails())
        {
            return response(['status' => false,'message'=>$validator->errors()->all(),'data' => []], 422);
        }else 
		{

			try
			{
				$article = Article::find($request->article_id);

				$articleDetails = new ArticleDetail;
				$articleDetails->article_id = $article->id;
				$articleDetails->title = request('title');
				$articleDetails->description = request('description');
				$articleDetails->note = request('note');
				if ($request->file('image')) {
					$imageName = time().rand(1,9).'.'.$request->image->extension();
					$request->image->move(public_path('Article'),$imageName);
				}
				$articleDetails->image = $imageName;
				$articleDetails->status = 1;
                if(request('sub_id'))
                {
                    $articleDetails->sub_id = request('sub_id'); 
                }
                if(request('sub_head_id'))
                {
                    $articleDetails->sub_head_id = request('sub_head_id'); 
                }
				$articleDetails->save();

				Session::flash('success',"Article details successfully added.");
			}
			catch(\Exception $e)
			{
				Session::flash('danger', $e->getMessage());
			}

        }
        return redirect('/admin/article-page');
    }
    public function storeArticleDetailsImage(Request $request)
    {
        if ($request->file('image')) {
            $imageName = time().rand(1,9).'.'.$request->image->extension();
            $request->image->move(public_path('Article'),$imageName);
        }
        return response()->json(['message' => 'success' , 'data' => $imageName],200);
    }
    public function changeStatus(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
        ]);
        if ($validated) {
            $data = Article::find(request('id'));
            if ($data->status == 1) {
                $data->status = 0;
                $message = 'Article Detail Disabled';
                $status = 1;
            }else{
                $data->status = 1;
                $message = 'Article Detail Enabled';
                $status = 1;
            }
            $data->save();
        }else{
            $message = 'Something went wrong!';
            $status = 0;
        }
        return response()->json(['message' => $message , 'status' => $status],200);
    }

    public function deleteArticle(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required',
        ]);
        if ($validated) {
            $data = Article::where('id',request('slug'))->first();
            if($data)
            {
                $data->delete();
                $message = 'Article Deleted';
                $status = 1;
            }else{
                $message = 'Something went wrong!';
                $status = 0;
            }
        }else {
            $message = 'Something went wrong!';
            $status = 0;
        }
        return response()->json(['message' => $message , 'status' => $status],200);
    }

    public function detailStatusChange(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
        ]);
        if ($validated) {
            $data = ArticleDetail::find(request('id'));
            if ($data->status == 1) {
                $data->status = 0;
                $message = 'Article Disabled';
                $status = 1;
            }else{
                $data->status = 1;
                $message = 'Article Enabled';
                $status = 1;
            }
            $data->save();
        }else{
            $message = 'Something went wrong!';
            $status = 0;
        }
        return response()->json(['message' => $message , 'status' => $status],200);
    }

    public function deleteArticleDetails(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
        ]);
        if ($validated) {
            $data = ArticleDetail::find(request('id'));
            if($data)
            {
                $data->delete();
                $message = 'Article Detail Deleted';
                $status = 1;
            }else{
                $message = 'Something went wrong!';
                $status = 0;
            }
        }else {
            $message = 'Something went wrong!';
            $status = 0;
        }
        return response()->json(['message' => $message , 'status' => $status],200);
    }

    public function detailEditPage($slug)
    {
        $details = ArticleDetail::where('id',$slug)->first();
        $articles = Article::find($details->article_id);
        $sub = ArticleDetail::where('article_id',$details->article_id)->whereNotNull('sub_id')->get();
        return view('article.edit_details',compact('articles','details','sub'));
    }

    public function updateDetailsData(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'detail_id' => 'required',
            // 'title' => 'required',
            // 'image.*' => 'mimes:jpg,png,jpeg,gif,svg',
        ]);
        if ($validator->fails())
        {
            return response(['status' => false,'message'=>$validator->errors()->all(),'data' => []], 422);
        }

		try
		{
			
			$details = ArticleDetail::find(request('detail_id'));
			$details->title = request('title');
			$details->description = request('description');
			$details->note = request('note');
			if ($request->file('image')) {
				$imageName = time().rand(1,9).'.'.$request->image->extension();
				$request->image->move(public_path('Article'),$imageName);
				$details->image = $imageName;
			}
            if(request('sub_id'))
            {
                $details->sub_id = request('sub_id'); 
            }
            if(request('sub_head_id'))
            {
                $details->sub_head_id = request('sub_head_id'); 
            }
			$details->save();
		
			Session::flash('success',"Article details successfully updated.");
		}
		catch(\Exception $e)
		{
			Session::flash('danger', $e->getMessage());
		}

        return redirect()->route('list-more-article-page',$details->article_id);
    }

    public function editArticle($id)
    {
        $articles = Article::where('id',$id)->first();
        $types = ArticleType::orderBy('priority','ASC')->get();
        $images = ArticleImage::where('article_id',$id)->get();
        return view('article.edit_article',compact('articles','types','images'));
    }

    public function updateArticleData(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'article_id' => 'required',
            'article_type' => 'required',
            'name' => 'required',
            // 'article_title' => 'required',
            // 'article_description' =>'required',
        ]);
        if ($validator->fails())
        {
            return response(['status' => false,'message'=>$validator->errors()->all(),'data' => []], 422);
        }
		
		try
		{
			
			$article = Article::find(request('article_id'));
			$article->article_name = request('name');
			$article->article_title = request('article_title');
			$article->article_description = request('article_description');
			$article->type_id = request('article_type');
            $article->icon = request('icon');
			// if ($request->file('article_images')) {
			// 	$imageName = time().rand(1,9).'.'.$request->article_images->extension();
			// 	$request->article_images->move(public_path('Article'),$imageName);
			// 	$article->article_image = request('article_images');
			// }

			$article->save();

            if ($request->file('article_images')) {
                foreach($request->file('article_images') as $image)
                {
                    $imageName = time().rand(1,9).'.'.$image->extension();
                    $image->move(public_path('Article'),$imageName);
                
                    // $imageName = time().rand(1,9).'.'.$request->article_images->extension();
                    // $request->article_images->move(public_path('Article'),$imageName);
                    $articleImg= new ArticleImage;
                    $articleImg->article_image= $imageName;
                    $articleImg->article_id=$article->id;
                    $articleImg->save();
                }
            }
		
			Session::flash('success',"Article successfully updated.");
		}
		catch(\Exception $e)
		{
			Session::flash('danger', $e->getMessage());
		}

        return redirect()->route('article-page');
    }
    public function deleteArticleImage($id)
    {
       $image= ArticleImage::where('id',$id)->delete();
       return back();
    }

    public function listMoreArticlePageData(Request $request)
    {
       
        // if ($request->ajax()) {
            $data = ArticleDetail::where('article_id',request('id'))->get();
          
            // return $data;
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('plus',function($row){
                        return `<i class="material-icons">&#xe145;</i>`;
                    })
                    ->addColumn('name',function($row){
                        return $row->title;
                    })
                    // ->addColumn('article_title',function($row){
                    //     return $row->article->article_title ?? 'No Title';
                    // })
                    ->addColumn('description',function($row){
                        return $row->description ?? 'No Description';
                    })
                    // ->addColumn('article_type',function($row){
                    //     return $row->articleType->name ?? 'No type';
                    // })
                    // ->addColumn('created_by',function($row){
                    //     $user = User::find($row->created_by);
                    //     return $user->name ?? $row->created_by;
                    // })
                    ->addColumn('status',function($row){
                        if($row->status == 1 )
                        {
                            $label = '<label class="success">Enabled</label>';
                        }elseif($row->status == 0){
                            $label = '<label class="danger">Disabled</label>';
                        }
                        return $label;
                    })
                    ->addColumn('action', function($row){
                        $route = route('detail-edit-page',$row->id);
                        
						if($row->status == 1 )
							{
								$btn = '<a type="button" class="btn btn-warning btn-rounded statusChange" data-id="'.$row->id.'" title="Deactivate">
								<i class="material-icons">&#xe5cd;</i></a>';
							}
							else
							{
								$btn = '<a type="button" class="btn btn-success btn-rounded statusChange" data-id="'.$row->id.'" title="Activate">
								<i class="material-icons">&#xe5ca;</i></a>';
							}
						
                           $btn .= '
							<a type="button" class="btn btn-primary btn-rounded editArticle" href="'.$route.'" title="Edit">
                                <i class="material-icons">&#xE254;</i>
                            </a>
                            <a type="button" class="btn btn-danger btn-rounded deleteArticle" data-id="'.$row->id.'" title="Delete">
                               <i class="material-icons">&#xE872;</i>
                            </a>
                            ';

                            return $btn;
                    })
                    ->rawColumns(['action','status','plus'])
                    ->make(true);
        // }
        return view('article.article_details');
        // $details = ArticleDetail::where('article_id',request('id'))->get();
        // return view('article.article_details',compact('details'));
    }
    public function listMoreArticlePage($id)
    {
        return view('article.article_details',compact('id'));
    }
    public function listArticleDetailPageData(Request $request)
    {
      
        // if ($request->ajax()) {
            $data = Topic::where('article_id',request('id'))->get();
          
            // return $data;
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('plus',function($row){
                        return `<i class="material-icons">&#xe145;</i>`;
                    })
                   
                    // ->addColumn('article_title',function($row){
                    //     return $row->article->article_title ?? 'No Title';
                    // })
                    ->addColumn('description',function($row){
                        return $row->description ?? 'No Description';
                    })
                    // ->addColumn('article_type',function($row){
                    //     return $row->articleType->name ?? 'No type';
                    // })
                    // ->addColumn('created_by',function($row){
                    //     $user = User::find($row->created_by);
                    //     return $user->name ?? $row->created_by;
                    // })
                    ->addColumn('status',function($row){
                        if($row->status == 1 )
                        {
                            $label = '<label class="success">Enabled</label>';
                        }elseif($row->status == 0){
                            $label = '<label class="danger">Disabled</label>';
                        }
                        return $label;
                    })
                    ->addColumn('action', function($row){
                        $route = route('topic-edit-page',$row->id);
                        
						// if($row->status == 1 )
						// 	{
						// 		$btn = '<a type="button" class="btn btn-warning btn-rounded statusChange" data-id="'.$row->id.'" title="Deactivate">
						// 		<i class="material-icons">&#xe5cd;</i></a>';
						// 	}
						// 	else
						// 	{
						// 		$btn = '<a type="button" class="btn btn-success btn-rounded statusChange" data-id="'.$row->id.'" title="Activate">
						// 		<i class="material-icons">&#xe5ca;</i></a>';
						// 	}
						
                           $btn = '
							<a type="button" class="btn btn-primary btn-rounded editArticle" href="'.$route.'" title="Edit">
                                <i class="material-icons">&#xE254;</i>
                            </a>
                            <a type="button" class="btn btn-danger btn-rounded deleteATopic" data-id="'.$row->id.'" title="Delete">
                               <i class="material-icons">&#xE872;</i>
                            </a>
                            ';

                            return $btn;
                    })
                    ->rawColumns(['action','status','plus','description'])
                    ->make(true);
        // }
        return view('article.article_details');
        // $details = ArticleDetail::where('article_id',request('id'))->get();
        // return view('article.article_details',compact('details'));
    }
    public function storeTopicData(Request $request)
    {
        // dd(request()->all());
        $imageName = '';
        $validator = Validator::make(request()->all(),[
            // 'name' => 'required',
            // 'title' => 'required',
            // 'description' => 'required',
            // 'image' => 'required',
            // 'image.*' => 'mimes:jpg,png,jpeg,gif,svg',
        ]);
        if ($validator->fails())
        {
            return response(['status' => false,'message'=>$validator->errors()->all(),'data' => []], 422);
        }else 
		{

			try
			{
				$article = Article::find($request->article_id);

				$articleDetails = new Topic;
				$articleDetails->article_id = $article->id;
				$articleDetails->description = request('description');
				$articleDetails->status = 1;
               
				$articleDetails->save();

				Session::flash('success',"Article details successfully added.");
			}
			catch(\Exception $e)
			{
				Session::flash('danger', $e->getMessage());
			}

        }
        return redirect()->route('list-more-article-page',$request->article_id);
    }
    public function deleteArticleTopic(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
        ]);
        if ($validated) {
            $data = Topic::find(request('id'));
            if($data)
            {
                $data->delete();
                $message = 'Article Detail Deleted';
                $status = 1;
            }else{
                $message = 'Something went wrong!';
                $status = 0;
            }
        }else {
            $message = 'Something went wrong!';
            $status = 0;
        }
        return response()->json(['message' => $message , 'status' => $status],200);
    }

    public function topicEditPage($slug)
    {
        $details = Topic::where('id',$slug)->first();
        $articles = Article::find($details->article_id);
        $sub = Topic::where('article_id',$details->article_id)->get();
        return view('article.edit_topic',compact('articles','details','sub'));
    }

    public function updateTopicData(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'detail_id' => 'required',
            // 'title' => 'required',
            // 'image.*' => 'mimes:jpg,png,jpeg,gif,svg',
        ]);
        if ($validator->fails())
        {
            return response(['status' => false,'message'=>$validator->errors()->all(),'data' => []], 422);
        }

		try
		{
			
			$details = Topic::find(request('detail_id'));
		
			$details->description = request('description');
			
            if(request('sub_id'))
            {
                $details->sub_id = request('sub_id'); 
            }
            if(request('sub_head_id'))
            {
                $details->sub_head_id = request('sub_head_id'); 
            }
			$details->save();
		
			Session::flash('success',"Article details successfully updated.");
		}
		catch(\Exception $e)
		{
			Session::flash('danger', $e->getMessage());
		}

        return redirect()->route('list-more-article-page',$details->article_id);
    }
}
