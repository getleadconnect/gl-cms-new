<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Auth;

class FaqController extends Controller
{
    public function getFaqData(Request $request)
    {
        if ($request->ajax()) {
            $data = Faq::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('created_by',function($row){
                        $user = User::find($row->created_by);
                        return $user->name;
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
                        $route = route('edit-faq-page',$row->slug);
						
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
                            <a type="button" class="btn btn-primary btn-rounded editFAQ" href='.$route.'>
                                <i class="material-icons">&#xE254;</i>
                            </a>
                            <a type="button" class="btn btn-danger btn-rounded deleteFAQ" data-id="'.$row->slug.'">
                               <i class="material-icons">&#xE872;</i>
                            </a>';

                            return $btn;
                    })
                    ->rawColumns(['action','status'])
                    ->make(true);
        }

        return view('faq.faq');
    }

    public function getFaqAddPage()
    {
        return view('faq.add_faq');
    }

    public function storeFaqData(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = new Faq;
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->created_by = Auth::user()->id;
        $faq->save();

        return redirect('/admin/get-faq-data');
    }

    public function changeStatus(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
        ]);
        if ($validated) {
            $data = Faq::find(request('id'));
            if ($data->status == 1) {
                $data->status = 0;
                $message = 'FAQ Disabled';
                $status = 1;
            }else{
                $data->status = 1;
                $message = 'FAQ Enabled';
                $status = 1;
            }
            $data->save();
        }else{
            $message = 'Something went wrong!';
            $status = 0;
        }
        return response()->json(['message' => $message , 'status' => $status],200);
    }

    public function edit(Request $request,$slug)
    {
        $faq = Faq::where('slug',$slug)->first();
        return view('faq.edit_faq',compact('faq'));
    }

    public function updateFaq(Request $request)
    {
        $validated = $request->validate([
            'faq_id' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = Faq::find(request('faq_id'));
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->save();

        return redirect('/admin/get-faq-data');
    }

    public function deleteFaq(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required',
        ]);
        if ($validated) {
            $data = Faq::where('slug',request('slug'))->first();
            if($data)
            {
                $data->delete();
                $message = 'FAQ Deleted';
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
}
