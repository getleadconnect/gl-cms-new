<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Auth;

class ClientController extends Controller
{
    public function getClientData(Request $request)
    {
        if ($request->ajax()) {
            $data = Client::select('*')->orderBy('updated_at','DESC');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('image',function($data){
                        $img='<img src="'.url("Clients/".$data->image).'" style="width:50px;height:50px;" >';
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
                        $route = route('edit.client-page',$row->slug);
						
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
						
						
                           $btn.= '
                            <a type="button" class="btn btn-primary btn-rounded editClient" href='.$route.'>
                                <i class="material-icons">&#xE254;</i>
                            </a>
                            <a type="button" class="btn btn-danger btn-rounded deleteClient" data-id="'.$row->slug.'">
                               <i class="material-icons">&#xE872;</i>
                            </a>';

                            return $btn;
                    })
                    ->rawColumns(['action','image','status'])
                    ->make(true);
        }

        return view('client.client');
    }

    public function getClientAddPage()
    {
        return view('client.add_client');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|dimensions:max_width=100px,max_height=100px',
        ]);

        if($validated)
        {
            $client = new Client;
            $client->name = request('name');
            if($request->file('image'))
            {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('Clients'), $imageName);
            }
            $client->image = $imageName;
            $client->created_by = Auth::user()->id;
            $client->save();
        }
        return redirect('/admin/get-client-data');
    }

    public function changeStatus(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
        ]);
        if ($validated) {
            $data = Client::find(request('id'));
            if ($data->status == 1) {
                $data->status = 0;
                $message = 'Client Disabled';
                $status = 1;
            }else{
                $data->status = 1;
                $message = 'Client Enabled';
                $status = 1;
            }
            $data->save();
        }else{
            $message = 'Something went wrong!';
            $status = 0;
        }
        return response()->json(['message' => $message , 'status' => $status],200);
    }

    public function deleteClient(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required',
        ]);
        if ($validated) {
            $data = Client::where('slug',request('slug'))->first();
            if($data)
            {
                $data->delete();
                $message = 'Client Deleted';
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

    public function edit(Request $request,$slug)
    {
        $client = Client::where('slug',$slug)->first();
        return view('client.edit_client',compact('client'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required',
            'name' => 'required',
        ]);
        if ($request->file('image')) {
            $validated = $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|dimensions:max_width=100px,max_height=100px',
            ]);
        }
        if ($validated) {
            if($request->file('image'))
            {
                $imageName = time().'.'.$request->image->extension();

                $request->image->move(public_path('Clients'), $imageName);
            }

            $client = Client::find(request('client_id'));
            $client->name = request('name');
            if ($request->file('image')) {
                $client->image = $imageName;
            }
            $client->created_by = Auth::user()->id;
            $client->save();
        }
        return redirect('/admin/get-client-data');
    }
}
