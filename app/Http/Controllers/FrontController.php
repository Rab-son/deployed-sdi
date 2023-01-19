<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Program;
use App\Models\Registration;
use App\Models\NewsLetter;
use App\Models\Contact;
use App\Models\Donation;
use App\Models\User;
use Image;

class FrontController extends Controller
{
    // register form
    public function viewRegister(){
        $districts = District::all();
        $programs = Program::all();
        return view('frontend.apply')->with(compact('districts','programs'));;
    }

    // apply
    public function store(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'district_id' => 'required',
            'program_id' => 'required',
            'traditional_authority' => 'required',
            'dob' => 'required',
            'id_number' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'cv' => 'required|image|max:5000',
            'certificate' => 'required|image|max:5000',
            'proof_of_payment' => 'required|image|max:5000'
        ]);
        if($request->isMethod('post')){
            $data = $request->all();

            if(empty($data['employement'])){
                $data['employment'] = 'Not Employed' ;
                $data['position'] = 'Not Employed' ;
            }
            if(empty($data['position'])){
                $data['position'] = 'Not Employed' ;
                $data['employment'] = 'Not Employed' ;
            }
            if(empty($data['alt_number'])){
                $data['alt_number'] = 'Not Available' ;
            }

            $User = new Registration;
            $User->first_name  = $data['first_name'];
            $User->last_name  = $data['last_name'];
            $User->district_id  = $data['district_id'];
            $User->program_id  = $data['program_id'];
            $User->traditional_authority  = $data['traditional_authority'];
            $User->dob  = $data['dob'];
            $User->id_number  = $data['id_number'];
            $User->email  = $data['email'];
            $User->phone_number  = $data['phone_number'];
            $User->alt_number  = $data['alt_number'];
            $User->employment  = $data['employment'];
            $User->position  = $data['position'];
            

            // Upload Image
            if($request->hasFile('cv')){
                $image_tmp = $request->file('cv');
                if($image_tmp->isValid()){
                    $filename=time().'-'.str_slug($data['phone_number'],"-").'.'.$image_tmp->getClientOriginalExtension();
                    $large_image_path = public_path('images/registrations/').$filename;
                    Image::make($image_tmp)->save($large_image_path);
                    $User->cv = $filename;
                }
            }

            if($request->hasFile('certificate')){
                $image_tmp = $request->file('certificate');
                if($image_tmp->isValid()){
                    $filename=time().'-'.str_slug($data['phone_number'],"-").'.'.$image_tmp->getClientOriginalExtension();
                    $large_image_path = public_path('images/registrations/').$filename;
                    Image::make($image_tmp)->save($large_image_path);
                    $User->certificate = $filename;
                }
            }

            if($request->hasFile('proof_of_payment')){
                $image_tmp = $request->file('proof_of_payment');
                if($image_tmp->isValid()){
                    $filename=time().'-'.str_slug($data['phone_number'],"-").'.'.$image_tmp->getClientOriginalExtension();
                    $large_image_path = public_path('images/registrations/').$filename;
                    Image::make($image_tmp)->save($large_image_path);
                    $User->proof_of_payment = $filename;
                }
            }


            $User->save();
            // Login
            //auth()->login($User);
            return redirect('/')->with('success', 'You Details Have Been Sent Successfully');
            
        }


    }

    // newsletter subscription
    public function subscribe(Request $request) {
        $formFields = $request->validate([
            'email'=> 'email|required|string',
        ]);
        if($request->isMethod('post')){
            $data = $request->all();
            $userCount = NewsLetter::where(['email' => $data['email']])->count();
            
            if($userCount > 0){
                NewsLetter::where(['email'=>$data['email']])->delete();
                return redirect('/')->with('success', 
                'You Have Unsubscribed from our services. You will no longer hear any updates from Us');
            }else{
                $User = new NewsLetter;
                $User->email  = $data['email'];
    
                $User->save();
                return redirect('/')->with('success', 
                'Thank you for subscribing to our newsletter, you will be receiving updates from Skills Initiative Development');

            }
            
        }
        
    }

    // contact us
    public function contact(Request $request) {
        $formFields = $request->validate([
            'email'=> 'email|required|string',
            'subject'=> 'required',
            'message'=> 'required',
            'name'=> 'required',
        ]);
        if($request->isMethod('post')){
            $data = $request->all();
            
            $User = new Contact;
            $User->email  = $data['email'];
            $User->subject  = $data['subject'];
            $User->message  = $data['message'];
            $User->name  = $data['name'];

            $User->save();
            return redirect('/')->with('success', 
            'Thank you for contacting us. We will reach out to you soon');
            
        }
        
    }

    // donation
    public function donation(Request $request) {
        $formFields = $request->validate([
            'email'=> 'email|required|string',
            'message'=> 'required',
            'phone_number'=> 'required',
            'location'=> 'required',
            'name'=> 'required',
        ]);
        if($request->isMethod('post')){
            $data = $request->all();
            
            $User = new Donation;
            $User->email  = $data['email'];
            $User->message  = $data['message'];
            $User->name  = $data['name'];
            $User->location  = $data['location'];
            $User->phone_number  = $data['phone_number'];

            $User->save();
            return redirect('/')->with('success', 
            'Thank you for helping out Skills Development Initiative. Your Help Means A lot to us');
            
        }
        
    }    

    //listing teams
    public function team(){
        $teams = User::where(['type'=> 'regular'])->get();
        return view('frontend.team')->with(compact('teams'));
    }

    //listing programs
    public function program(){
        $programs = Program::all();
        return view('frontend.program')->with(compact('programs'));
    }

    //listing program details
    public function programDetails(Request $request, $id){
        $programDetails = Program::where(['id'=>$id])->first();
        $districts = District::all();
        return view('frontend.single_application')->with(compact('programDetails','districts'));
    }

    //listing program info
    public function programInformation(Request $request, $id){
        $programDetails = Program::where(['id'=>$id])->first();
        $districts = District::all();
        return view('frontend.program_info')->with(compact('programDetails','districts'));
    }

    //listing homes
    public function home(){
        $programs = Program::all();
        $firstThree = $programs->shuffle()->take(3);
        $teams = User::where(['type'=> 'regular'])->get();
        return view('frontend.index')->with(compact('teams','firstThree'));
    }


}
