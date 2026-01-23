<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogDetail;
use App\Models\BlogType;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Validator;
use Auth;
use Session;
use Log;

class BlogController extends Controller
{
   
   public function getBlogData(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::with('blogDetails','blogType')->get();
            // return $data;
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('plus',function($row){
                        return `<i class="material-icons">&#xe145;</i>`;
                    })
                    ->addColumn('name',function($row){
                        return $row->blog_name;
                    })
                    ->addColumn('blog_title',function($row){
                        return $row->blog_title ?? 'No Title';
                    })
                    ->addColumn('blog_type',function($row){
                        return $row->blogType->name ?? 'No type';
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
                        $route = route('edit-blog-page',$row->slug);
                        $blog = route('add-blog-details-page',$row->slug);
						
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
                           <a type="button" class="btn btn-info btn-rounded" href='.$blog.' title="View Details">
                               <i class="material-icons">&#xe873;</i>
                            </a>

                            <a type="button" class="btn btn-primary btn-rounded editblog" href='.$route.' title="Edit">
                                <i class="material-icons">&#xE254;</i>
                            </a>
                            <a type="button" class="btn btn-danger btn-rounded deleteBlog" data-id="'.$row->slug.'" title="Delete">
                               <i class="material-icons">&#xE872;</i>
                            </a>';

                            return $btn;
                    })
                    ->rawColumns(['action','status','plus'])
                    ->make(true);
        }
        return view('blog.blog');
    }

    public function addBlogPage()
    {
        $types = BlogType::orderBy('id','ASC')->get();
        return view('blog.add_blog',compact('types'));
    }

    public function storeBlogData(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'blog_type' => 'required',
            'name' => 'required',
            'blog_title' => 'required',
            'description' => 'required',
            'blog_images' => 'required|dimensions:max_width=1200px,max_height=630px'
        ]);
        if ($validator->fails()) {
            return response(['status' => false,'message' => $validator->errors()->all(),'data'=>[]],422);
        }

		try{
			
			$blog = new Blog;
			$blog->blog_name = request('name');
			$blog->blog_title = request('blog_title');
			$blog->blog_description = request('description');
			$blog->status = 1;
			$blog->featured = request('featured');
			$blog->blog_type = request('blog_type');
			if (request()->file('blog_images')) {
				$imageName = time().'.'.$request->blog_images->extension();
				$request->blog_images->move(public_path('Blog'), $imageName);
			}
			$blog->blog_images = $imageName;
			$blog->created_by = Auth::user()->id;
			$blog->save();
			
			Session::flash('success',"Blog successfully added.");
		}
		catch(\Exception $e)
		{
			Session::flash('danger', $e->getMessage());
		}
        return redirect('/admin/get-blog-page');
    }

    public function changeBlogStatus(Request $request)
    {
        $validated = Validator::make(request()->all(),[
            'id' => 'required',
        ]);
		
        if ($validated->fails()) {
            return response()->json(['message' => $validated->errors()->all() , 'status' => false],200);
        }
            $data = Blog::find(request('id'));
            if ($data->status == 1) {
                $data->status = 0;
                $message = 'Blog  Disabled';
                $status = 1;
            }else{
                $data->status = 1;
                $message = 'Blog Enabled';
                $status = 1;
            }
            $data->save();

        return response()->json(['message' => $message , 'status' => $status],200);
    }

    public function deleteBlog(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'slug' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->all() , 'status' => false],422);
        }
            $data = Blog::where('slug',request('slug'))->first();
            if($data)
            {
                $data->delete();
                $message = 'Blog Deleted';
                $status = 1;
            }else{
                $message = 'Something went wrong!';
                $status = 0;
            }
        return response()->json(['message' => $message , 'status' => $status],200);
    }

    public function addBlogDetailsPage($slug)
    {

        $blogs = Blog::with('blogType')->where('slug',$slug)->first();
        return view('blog.add_blog_details',compact('blogs'));
    }

    public function storeBlogDetailsData(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'blog_id' => 'required',
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message'=> $validator->errors()->all()],422);
        }

		try
		{
			$details = new BlogDetail;
			$details->blog_id = request('blog_id');
			$details->title = request('title');
			$details->note = request('note');
			$details->description = request('description');
			$details->status = 1;
			$details->created_by = Auth::user()->id;
			if (request()->file('image')) {
				$imageName = time().'.'.$request->image->extension();
				$request->image->move(public_path('Blog'), $imageName);
				$details->images = $imageName;
			}
			$details->save();
			Session::flash('success', 'Blog details successfully added.');
		}
		catch(\Exception $e)
		{
			Session::flash('danger', $e->getMessage());
		}
		
        return redirect('/admin/get-blog-page');
    }

    public function editBlogPage($slug)
    {
        $blogs = Blog::where('slug',$slug)->first();
        $types = BlogType::orderBy('id','ASC')->get();
        return view('blog.edit_blog',compact('blogs','types'));
    }

    public function updateBlogData(Request $request)
    {

        $validator = Validator::make(request()->all(),[
            'blog_id' => 'required',
            'blog_type' => 'required',
            'blog_images' => 'dimensions:max_width=1200px,max_height=630px'
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->all(),'status' => false],422);
        }

		try
		{
			$blog = Blog::find(request('blog_id'));
			$blog->blog_type = request('blog_type');
			$blog->blog_name = request('name');
			$blog->blog_title = request('blog_title');
			$blog->blog_description = request('blog_description');
			if(request()->file('blog_images'))
			{
				$imageName = time().'.'.$request->blog_images->extension();
				$request->blog_images->move(public_path('Blog'), $imageName);
				$blog->blog_images = $imageName;
			}
			$blog->featured = request('featured');
			$blog->save();
			Session::flash('success', 'Blog details successfully updated.');
		}
		catch(\Exception $e)
		{
			Session::flash('danger', $e->getMessage());
		}
		
        return redirect()->route('get-blog-page');
    }

    public function blogDetailEditPage($slug)
    {
        $details = BlogDetail::where('slug',$slug)->first();
        $blogs = Blog::where('id',$details->blog_id)->first();
        return view('blog.edit_blog_details',compact('details','blogs'));
    }

    public function updateBlogDetailsData(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'detail_id' => 'required',
            'blog_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->all(),'status' => false,'data'=>[]],422);
        }

        $details = BlogDetail::find(request('detail_id'));
        $details->blog_id = request('blog_id');
        $details->title = request('title');
        $details->note = request('note');
        $details->description = request('description');
        $details->status = 1;
        $details->created_by = Auth::user()->id;
        if(request()->file('image'))
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('Blog'), $imageName);
            $details->images = $imageName;
        }
        $details->save();

        return redirect('/admin/get-blog-page');
    }

    public function detailStatusChange(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->all(),'status'=>false],422);
        }
        $data = BlogDetail::find(request('id'));
        if ($data->status == 1) {
            $data->status = 0;
            $message = 'Blog Details Disabled';
            $status = 1;
        }else{
            $data->status = 1;
            $message = 'Blog Details Enabled';
            $status = 1;
        }
        $data->save();

        return response()->json(['message' => $message , 'status' => $status],200);
    }

    public function blogDetailDelete(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->all(),'status' => false,'data'=>[]],422);
        }

        $data = BlogDetail::find(request('id'));
        if($data)
        {
            $data->delete();
            $message = 'Blog Detail Deleted';
            $status = 1;
        }else{
            $message = 'Something went wrong!';
            $status = 0;
        }

        return response()->json(['message' => $message , 'status' => $status],200);
    }
}
