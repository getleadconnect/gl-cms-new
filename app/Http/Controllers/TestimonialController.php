<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User;
use Validator;
use Auth;

class TestimonialController extends Controller
{
    public function index()
    {
        return view('testimonial.add_testimonial');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if ($validated) {
            if($request->file('image'))
            {
                $imageName = time().'.'.$request->image->extension();

                $request->image->move(public_path('images'), $imageName);
            }
            $testimonial = new Testimonial;
            $testimonial->name = request('name');
            $testimonial->designation = request('designation');
            $testimonial->description = request('description');
            $testimonial->image = $imageName;
            $testimonial->created_by = Auth::user()->id;
            $testimonial->save();
        }
        return redirect('/admin/get-testimonial-data');
    }

    public function getTestimonialData(Request $request)
    {
        if ($request->ajax()) 
		{
            $data = Testimonial::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('description',function($data){
                        return $data->description;
                    })
                    ->addColumn('image',function($data)
					{ 
						$img='<img src="'.url("images/".$data->image).'" style="width:50px;height:50px;" >';
						return $img;
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
                        $route = route('edit.testimonial-page',$row->slug);
						$btn="";
							if($row->status == 1 )
							{
								$btn = '<a type="button" class="btn btn-warning btn-rounded statusChange" data-id="'.$row->id.'">
								<i class="material-icons">&#xe5cd;</i></a>';
							}
							else
							{
								$btn = '<a type="button" class="btn btn-success btn-rounded statusChange" data-id="'.$row->id.'">
								<i class="material-icons">&#xe5ca;</i></a>';
							}
						
                           $btn .= ' <a type="button" class="btn btn-primary btn-rounded" href="'.$route.'">
                                <i class="material-icons">&#xE254;</i>
                            </a>
                           <a type="button" class="btn btn-danger btn-rounded deleteTestimonial" data-id="'.$row->slug.'">
                               <i class="material-icons">&#xE872;</i>
                           </a>';

                            return $btn;
                    })
                    ->rawColumns(['action','description','image','status'])
                    ->make(true);
        }

        return view('testimonial.testimonial');
    }

    public function changeStatus(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
        ]);
        if ($validated) {
            $data = Testimonial::find(request('id'));
            if ($data->status == 1) {
                $data->status = 0;
                $message = 'Testimonial Disabled';
                $status = 1;
            }else{
                $data->status = 1;
                $message = 'Testimonial Enabled';
                $status = 1;
            }
            $data->save();
        }else{
            $message = 'Something went wrong!';
            $status = 0;
        }
        return response()->json(['message' => $message , 'status' => $status],200);
    }


    public function deleteTestimonial(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required',
        ]);
        if ($validated) {
            $data = Testimonial::where('slug',request('slug'))->first();
            if($data)
            {
                $data->delete();
                $message = 'Testimonial Delete';
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

    public function edit(Request $request)
    {
        $testimonial = Testimonial::where('slug',request('slug'))->first();
        return view('testimonial.edit_testimonial',compact('testimonial'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'testimonial_id' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails())
        {
            return response(['status' => false,'message'=>$validator->errors()->all(),'data' => []], 422);
        }
		
        $testimonial = Testimonial::find(request('testimonial_id'));
        $testimonial->name = request('name');
        $testimonial->designation = request('designation');
        $testimonial->description = request('description');
        if($request->file('image'))
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $testimonial->image = $imageName;
        }
        $testimonial->created_by = Auth::user()->id;
        $testimonial->save();

        return redirect('/admin/get-testimonial-data');
    }
}
