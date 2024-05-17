<?php

namespace App\Http\Controllers\siteadmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function __construct()
    {
    }
    public function index()
    {
        $userlist=DB::table('users as t1')->select('t1.*','t2.role_name')->leftjoin('tbl_role as t2','t1.role_id','t2.id')->where('t1.isdelete',0)->get();
        return view('siteadmin.User.index',['userlist'=>$userlist]);
    }
    public function add($id='')
    {
        $user=array();
        $rolelist=DB::table('tbl_role')->where('isdelete',0)->where('id', '>', '1')->get();
        if($id!='')
        {
            $user=DB::table('users')->where('id',$id)->first();
        }
    
        return view('siteadmin.User.add',['id'=>$id,'user'=>$user,'rolelist'=>$rolelist]);
    }
    public function save(Request $request)
    {
        $username=$request->uname;
        $email=$request->email;
        $password=$request->password;
        $role=$request->role;
        $id=$request->id;
        if($id!='')
        {
            $user=DB::table('users')->where('email',$email)->where('id','!=',$id)->first();
            if($user!='')
            {
                request()->session()->put('error_msg', 'User Allready Exists');
                return redirect('siteadmin/User');
            }
            if(DB::table('users')->where('id',$id)->update(['name'=>$username,'email'=>$email,'role_id'=>$role]))
            {
                if($password!='')
                {
                    DB::table('users')->where('id',$id)->update(['password'=>Hash::make($password)]);
                }
                request()->session()->put('success_msg', 'User Updated Successfully');
            } else {
                request()->session()->put('error_msg', 'Failed To Update User');
            }
        }
        else{
            $user=DB::table('users')->where('email',$email)->first();
            if($user!='')
            {
                request()->session()->put('error_msg', 'User Allready Exists');
                return redirect('siteadmin/User');
            }
            if(DB::table('users')->insert(['name'=>$username,'email'=>$email,'role_id'=>$role,'password'=>Hash::make($password)]))
            {
                request()->session()->put('success_msg', 'User Added Successfully');
            } else {
                request()->session()->put('error_msg', 'Failed To Add User');
            }
        }
        return redirect('siteadmin/User');
    }
    public function delete($id)
    {
        if(DB::table('users')->where('id',$id)->update(['isdelete'=>1]))
        {
            request()->session()->put('success_msg', 'User Deleted Successfully');
        } else {
            request()->session()->put('error_msg', 'Failed To Delete User');
        }
        return redirect('siteadmin/User');
    }
}
