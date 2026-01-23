<?php

namespace App\Http\Controllers;

use App\Mail\welcomeMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;
use Session;
use Illuminate\Support\Facades\Http;

class ContactUsController extends Controller
{
    public function storeContactUs(Request $request)
    {
  
        $validator = Validator::make(request()->all(),[
            'first_name' => 'required',
            // 'last_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'mobile_phoneCode' => 'required',
            // 'company_name' => 'required',
            'country' => 'required',
            // 'comments' => 'required',
        ]);

        if ($validator->fails())
        {
            return response(['status' => false,'message'=>$validator->errors()->all(),'data' => []], 422);
        }

        if ($request->mobile_phoneCode == "+91") {
            if(strlen($request->mobile) != 10){
                return redirect()->route('contact-us-page')->withErrors('Phone number should be 10 digits');
            };
        }

        $contact = new ContactUs;
        $contact->first_name = request('first_name');
        $contact->last_name = request('last_name');
        $contact->email = request('email');
        $contact->country_code = request('mobile_phoneCode');
        $contact->mobile = request('mobile');
        $contact->company_name = request('company_name');
        $contact->country = request('country');
        $contact->comments = request('comments');
        $contact->location = request('location');
        $contact->is_demo = request('demo')?'demo request':null;
        $contact->save();

        $mailData = [
            'title' => 'Welcome to Getlead CRM!
            ',
        ];
        Mail::to($contact->email)->send(new welcomeMail($mailData,$contact));
        $this->addLead($contact);
        
        Session::flash('message', 'Successfully Submit your Request'); 
        return back();
    }

    public function getContactUsData(Request $request)
    {
        if ($request->ajax()) {
            $data = ContactUs::select('*')->latest();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name',function($q){
                        return $q->first_name.' '.$q->last_name;
                    })
                    ->addColumn('mobile',function($row){
                        return $row->country_code.$row->mobile;
                    })
                    ->addColumn('company',function($row){
                        return $row->company_name;
                    })
                    ->addColumn('Isdemo',function($row){
                        return $row->is_demo;
                    })
                    ->addColumn('created_at',function($row){
                       return  Carbon::parse($row->created_at)->format('d-m-Y H:i A');

                    })
                    // ->rawColumns([])
                    ->make(true);
        }

        return view('contactUs.contactUs');
    }

    public static function addLead($contact)
    {
        try {
            $token = "gl_d52aa6241238b4e44d9b";

            // Create the payload array
            $data = [
                "token" => $token,
                "name" => $contact->first_name . ' ' . $contact->last_name,
                "countrycode" => $contact->country_code,
                "mobileno" => $contact->mobile,
                "email" => $contact->email,
                "source" => "Demo request",
                "City" => $contact->location,
                "lead_note" => $contact->comments ?? 'Request demo',
            ];
    
            // Make the POST request using Laravel's Http client
            $response = Http::withHeaders([
                'Authorization' => 'Token ' . $token,
                'Content-Type' => 'application/json',
            ])->post('https://app.getleadcrm.com/api/gl-website-contacts', $data);
    
            // Get the response body
            $responseBody = $response->body();
    
            // Check for response success or error
            if ($response->successful()) {
               \Log::info($response);
            } else {
               \Log::info($response);
            }
        } catch (\Exception $e) {
            \Log::info($e->getMessage());
        }
        
    }
}
