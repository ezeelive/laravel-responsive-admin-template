<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Validator;
use Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
	
	public function profile()
    {
        $users = User::all();
        return view('user.profile',  compact('users'));
    }
	
	public function changepassword()
    {
        $users = User::all();
        return view('user.changepassword', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function updateprofile(Request $request, $user_id)
    {
        $Usr = User::find($user_id);
        $Usr->name = $request->input('name');
        $Usr->username = $request->input('username');
        $Usr->email = $request->input('email');
        $Usr->contact_no = $request->input('contact_no');
        $Usr->profile_summary = $request->input('profile_summary');
        if($request->hasFile('profile_image')){
                $image = $request->file('profile_image');
                $filename = time(). '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(128,128)->save(public_path('/upload/profileimage/'.$filename));
                $Usr->profile_image = $filename;
            }
        $Usr->save();
        //User::find($user_id)->update($request->all());
        return redirect('user/profile')->with('success','Profile updated successfully');
    }
   
    public function updatePassword(Request $request, $user_id)
    {
        $rules = array(
                    'old_password'       =>  'required|string|min:6',
                    'new_password'       =>  'required|string|min:6',
                    'confirm_password'       =>  'required|same:new_password'
                    );

        $validator = Validator::make(Input::only('old_password', 'new_password', 'confirm_password'), $rules);

        if($validator->fails())
        {
             return redirect('changepassword')->with('error', 'new password & confirm Password must be 6 Characters !');
        } else
            {
                $users = User::where('user_id', '=', $user_id)->first();
                if (Hash::check(Input::get('old_password'), $users->password))
                {
                    if(Input::get('new_password') == Input::get('confirm_password'))
                    {
                        $users->password =Hash::make(Input::get('new_password'));
                        $users->save();
                        return redirect('changepassword')->with('success' , 'Password changed Successfully !');    
                    }else
                    {
                        return redirect('changepassword')->with('error', 'New password and Confirm password did not match !');
                    }
                }else
                {
                    return redirect('changepassword')->with('error','Current password is incorrect !');
                }
            }
         
    }
}
