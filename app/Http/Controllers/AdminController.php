<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Registration;
use App\Models\Program;
use App\Models\District;
use App\Models\Consultancy;
use App\Models\Advocancy;
use App\Models\Contact;
use App\Models\NewsLetter;
use App\Models\CoreValue;
use App\Models\About;
use App\Models\Home;
use Image;

class AdminController extends Controller
{
    // Show Login Form
    public function login() {
        return view('backend.login');
    }

    // Show Register/Create Form
    public function create() {
        return view('backend.register');
    }
    
    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'address' => 'required',
            'phone_number' => 'required',
            'image' => 'required|image|max:5000'
        ]);
        if($request->isMethod('post')){
            $data = $request->all();
            $User = new User;
            $User->name  = $data['name'];
            $User->email  = $data['email'];
            $User->phone_number  = $data['phone_number'];
            $User->address = $data['address'];
            $User->password = bcrypt($data['password']);



            // Upload Image
            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                    $filename=time().'-'.str_slug($data['name'],"-").'.'.$image_tmp->getClientOriginalExtension();
                    $large_image_path = public_path('images/admins/').$filename;
                    Image::make($image_tmp)->save($large_image_path);
                    $User->image = $filename;
                }
            }

            $User->save();
            // Login
            //auth()->login($User);
            return redirect('/admin/login')->with('success', 'You Have Registered Successfully, Wait for the Administrator to Approve!');
            
        }


    }

    // Create New User
    public function viewReset(Request $request) {
        return view('front.users.reset');
    }

    // forgot password
    public function resetPassword(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            $userCount = User::where('email',$data['email'])->count();
            if($userCount == 0){
                return redirect()->back()->with('message','Email does not exists!');
            }
            //Get User Details
            $userDetails = User::where('email',$data['email'])->first();
            //Update Password
            User::where('email',$data['email'])->update(['password' => bcrypt($data['password'])]);
            return redirect('/login')->with('message','Your Password Has Been Reset Successfully, Login Now');
        }
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login')->with('success', 'You have been logged out!');

    }

    // Authenticate User
    public function authenticate(Request $request) {
        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
            
        ]);

        $user = User::where(['email' => $fields['email'], 'status' => 1])->first();
        // Check Password
        if(!$user || !Hash::check($fields['password'], $user->password)){
            return redirect('/admin/login')->with('error', 'Invalid Credentials or You Have Been Blocked');
        }else if(auth()->attempt($fields)){
            $request->session()->regenerate();
            return redirect('/dashboard')->with('success', 'You are now logged in!');
        }else{
            return "something went wrong";
        }

    }

    // get forms
    public function getForms(){
        $menu_active=3;
        $i=0;
        $districts = District::get();
        $programs = Program::get();
        $forms = Registration::orderBy('created_at','asc')->get();
        return view('backend.forms.manage')->with(compact('districts','programs','forms','menu_active','i'));
    }

    // get programs
    public function getPrograms(){
        $menu_active=3;
        $i=0;
        $programs = Program::orderBy('created_at', 'asc')->get();
        return view('backend.programs.manage')->with(compact('programs','menu_active','i'));
    }
    // Program Store
    public function programStore(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'audience' => 'required',
            'requirement' => 'required',
            'introduction' => 'required',
        ]);
        if($request->isMethod('post')){
            $data = $request->all();
            $Program = new Program;
            $Program->name  = $data['name'];
            $Program->audience  = $data['audience'];
            $Program->requirement  = $data['requirement'];
            $Program->introduction = $data['introduction'];

            $Program->save();
            return redirect()->back()->with('success', 'Program Registered Successfully');
            
        }
    }

    // Delete program
    public function deleteProgram(Request $request, $id = null){
        if(!empty($id)){
            Program::where(['id'=>$id])->delete();
            return redirect()->back()->with('success','Home Details Deleted Successfully');
        }
    } 

    //editing program details
    public function editProgram(Request $request, $id){
        //validate

        $program = Program::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'introduction' => 'required',
            'audience' => 'required',
            'requirement' => 'required',
        ]);

        $program->update([
            'name' => $request->name,
            'requirement' => $request->requirement,
            'introduction' => $request->introduction,
            'audience' => $request->audience,
        ]);


        return redirect()->back()->with('success','Program Updated Successfully');
    }
    


    // get teams
    public function getTeams(){
        $menu_active=3;
        $i=0;
        $teams = User::orderBy('created_at', 'desc')->get();
        return view('backend.staffs.manage')->with(compact('teams','menu_active','i'));
    }
    // team Store
    public function teamStore(Request $request) {
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'position' => 'required',
            'email' => 'required|string|unique:users,email',
        ]);
        if($request->isMethod('post')){
            $data = $request->all();
            if(empty($data['password'])){
                $data['password'] = 'sdi123456' ;
            }
            if(empty($data['address'])){
                $data['address'] = 'Not Available' ;
            }
            if(empty($data['phone_number'])){
                $data['phone_number'] = '0' ;
            }
            
            $User = new User;
            $User->name  = $data['name'];
            $User->email  = $data['email'];
            $User->phone_number  = $data['phone_number'];
            $User->position  = $data['position'];
            $User->address = $data['address'];
            $User->password = bcrypt($data['password']);


            // Upload Image
            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                    $filename=time().'-'.str_slug($data['name'],"-").'.'.$image_tmp->getClientOriginalExtension();
                    $large_image_path = public_path('images/admins/').$filename;
                    Image::make($image_tmp)->save($large_image_path);
                    $User->image = $filename;
                }
            }

            $User->save();
            return redirect()->back()->with('success','Team Member Added Successfully');
        }
    }
    // delete team
    public function deleteTeam(Request $request, $id = null){
        if(!empty($id)){
            User::where(['id'=>$id])->delete();
            return redirect()->back()->with('success','Home Details Deleted Successfully');
        }
    } 
    //editing team details
    public function editTeam(Request $request, $id){
        //validate

        $program = Program::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'introduction' => 'required',
            'audience' => 'required',
            'requirement' => 'required',
        ]);

        $program->update([
            'name' => $request->name,
            'requirement' => $request->requirement,
            'introduction' => $request->introduction,
            'audience' => $request->audience,
        ]);


        return redirect()->back()->with('success','Program Updated Successfully');
    }


    // get consultancies
    public function getConsultancy(){
        $menu_active=3;
        $i=0;
        $cons = Consultancy::orderBy('created_at', 'asc')->get();
        return view('backend.consulties.manage')->with(compact('cons','menu_active','i'));
    }
    // consultancy Store
    public function consultancyStore(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        if($request->isMethod('post')){
            $data = $request->all();
            $Consultancy = new Consultancy;
            $Consultancy->name  = $data['name'];
            $Consultancy->description  = $data['description'];
            $Consultancy->save();
            return redirect()->back()->with('success', 'Consultancy Registered Successfully');
            
        }
    }

    // delete consultancy
    public function deleteConsultancy(Request $request, $id = null){
        if(!empty($id)){
            Consultancy::where(['id'=>$id])->delete();
            return redirect()->back()->with('success','Consultancy Details Deleted Successfully');
        }
    } 

    // editing consultancy details
    public function editConsultancy(Request $request, $id){
        //validate

        $cons = Consultancy::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $cons->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success','Consultancy Updated Successfully');
    }


    // get advocancy 
    public function getAdvocancy(){
        $menu_active=3;
        $i=0;
        $advocancies = Advocancy::orderBy('created_at', 'asc')->get();
        return view('backend.advocancies.manage')->with(compact('advocancies','menu_active','i'));
    }
    // advocancy Store
    public function advocancyStore(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        if($request->isMethod('post')){
            $data = $request->all();
            $Advocancy = new Advocancy;
            $Advocancy->name  = $data['name'];
            $Advocancy->description  = $data['description'];
            $Advocancy->save();
            return redirect()->back()->with('success', 'Advocancy Registered Successfully');
            
        }
    }

    // delete advocancy
    public function deleteAdvocancy(Request $request, $id = null){
        if(!empty($id)){
            Advocancy::where(['id'=>$id])->delete();
            return redirect()->back()->with('success','Advocancy Details Deleted Successfully');
        }
    } 

    //editing advocancy details
    public function editAdvocancy(Request $request, $id){
        //validate
        $advocancy = Advocancy::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $advocancy->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success','Advocancy Updated Successfully');
    }


    // get contact us
    public function getContactUs(){
        $menu_active=3;
        $i=0;
        $contacts = Contact::orderBy('created_at', 'asc')->get();
        return view('backend.contacts.contact')->with(compact('contacts','menu_active','i'));
    }    

    // delete contact
    public function deleteContactUs(Request $request, $id = null){
        if(!empty($id)){
            Contact::where(['id'=>$id])->delete();
            return redirect()->back()->with('success','Contact Details Deleted Successfully');
        }
    } 
    

    // newsletter
    public function getNewsLetter(){
        $menu_active=3;
        $i=0;
        $newsletters = NewsLetter::orderBy('created_at', 'asc')->get();
        return view('backend.contacts.newsletter')->with(compact('newsletters','menu_active','i'));
    }    

    // delete contact
    public function deleteNewsLetter(Request $request, $id = null){
        if(!empty($id)){
            NewsLetter::where(['id'=>$id])->delete();
            return redirect()->back()->with('success','NewsLetter Details Deleted Successfully');
        }
    } 
    

    // get core values 
    public function getCoreValue(){
        $menu_active=3;
        $i=0;
        $values = CoreValue::orderBy('created_at', 'asc')->get();
        return view('backend.cms.values')->with(compact('values','menu_active','i'));
    }
    // core values Store
    public function coreValueStore(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        if($request->isMethod('post')){
            $data = $request->all();
            $CoreValue = new CoreValue;
            $CoreValue->name  = $data['name'];
            $CoreValue->description  = $data['description'];
            $CoreValue->fa_icon  = $data['fa_icon'];
            $CoreValue->save();
            return redirect()->back()->with('success', 'Core Value Registered Successfully');
            
        }
    }

    // delete core values
    public function deleteCoreValue(Request $request, $id = null){
        if(!empty($id)){
            CoreValue::where(['id'=>$id])->delete();
            return redirect()->back()->with('success','Core Value Details Deleted Successfully');
        }
    } 

    //editing core values details
    public function editCoreValue(Request $request, $id){
        //validate
        $values = CoreValue::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $values->update([
            'name' => $request->name,
            'description' => $request->description,
            'fa_icon' => $request->fa_icon,
        ]);

        return redirect()->back()->with('success','Core Value Updated Successfully');
    }

    // get about 
    public function getAbout(){
        $menu_active=3;
        $i=0;
        $abouts = About::orderBy('created_at', 'asc')->get();
        return view('backend.cms.abouts')->with(compact('abouts','menu_active','i'));
    }
    // about Store
    public function aboutStore(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $tableCount = About::count();
        if($tableCount >= 1){
            return redirect()->back()->with('error', 'You Can Only Have One Item In This Table, Edit or Delete The Current One');
        }else{

            if($request->isMethod('post')){
                $data = $request->all();
                $About = new About;
                $About->name  = $data['name'];
                $About->description  = $data['description'];
                $About->save();
                return redirect()->back()->with('success', 'About Details Registered Successfully');
                
            }
        }

    }

    // delete about
    public function deleteAbout(Request $request, $id = null){
        if(!empty($id)){
            About::where(['id'=>$id])->delete();
            return redirect()->back()->with('success','About Details Deleted Successfully');
        }
    } 

    //editing about details
    public function editAbout(Request $request, $id){
        //validate
        $about = About::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $about->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success','About Updated Successfully');
    }


    // get home 
    public function getHome(){
        $menu_active=3;
        $i=0;
        $homes = Home::orderBy('created_at', 'asc')->get();
        return view('backend.cms.homes')->with(compact('homes','menu_active','i'));
    }
    // home Store
    public function homeStore(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);


        $tableCount = Home::count();
        if($tableCount >= 1){
            return redirect()->back()->with('error', 'You Can Only Have One Item In This Table, Edit or Delete The Current One');
        }else{

            if($request->isMethod('post')){
                $data = $request->all();
                $Home = new Home;
                $Home->name  = $data['name'];
                $Home->description  = $data['description'];
                $Home->save();
                return redirect()->back()->with('success', 'Home Details Registered Successfully');
                
            }
        }


    }

    // delete home
    public function deleteHome(Request $request, $id = null){
        if(!empty($id)){
            Home::where(['id'=>$id])->delete();
            return redirect()->back()->with('success','Home Details Deleted Successfully');
        }
    } 

    //editing home details
    public function editHome(Request $request, $id){
        //validate
        $home = Home::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $home->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success','Home Details Updated Successfully');
    }



}
