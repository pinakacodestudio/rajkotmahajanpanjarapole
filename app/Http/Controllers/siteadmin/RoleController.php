<?php

namespace App\Http\Controllers\siteadmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Users;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    //
    public function __construct()
    {
    }
    public function index()
    {
        $rolelist=DB::table('tbl_role')->where('isdelete',0)->get();
        return view('siteadmin.Role.index',['rolelist'=>$rolelist]);
    }
    public function add($id='')
    {
        $role=array();
        if($id!='')
        {
            $role=DB::table('tbl_role')->where('id',$id)->first();
        }
        $sidebar_menu = array(
			array("name" => "<span class='fa fa-home'></span> Dashboard", "role" => "dashboard", "role_type" => "view"),
            array("name" => "<span class='fa fa-home'></span> Company Setting", "role" => "company", "role_type" => "view"),
			array("name" => "<span class='fa fa-user'></span> Customer", "role" => "customer", "role_type" => "view,add,edit,delete"),
			array("name" => "<span class='fa fa-gift'></span> Order", "role" => "order", "role_type" => "view,add,edit,delete"),
            array("name" => "<span class='fa fa-user'></span> OutBound Rate", "role" => "outboundrate", "role_type" => "view,add,edit,delete"),
            array("name" => "<span class='fa fa-inr'></span> Free Credit", "role" => "freecredit", "role_type" => "view,add,edit,delete"),
            array("name" => "<span class='fa fa-file'></span> Master", "role" => "master", "role_type" => "view"),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Document", "role" => "document", "role_type" => "view,add,edit,delete "),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Country", "role" => "country", "role_type" => "view,add,edit,delete"),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> IP Info", "role" => "ipinfo", "role_type" => "view,add,edit,delete"),
            array("name" => "<span class='fa fa-file'></span> Web", "role" => "web", "role_type" => "view"),
            // array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Banner", "role" => "banner", "role_type" => "view,add,edit,delete "),
            // array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Blog", "role" => "blog", "role_type" => "view,add,edit,delete "),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Home Page", "role" => "homepage", "role_type" => "view,add,edit,delete"),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> About Page", "role" => "aboutpage", "role_type" => "view,add,edit,delete"),
            // array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Team Intigration Page", "role" => "teamintigration", "role_type" => "view,add,edit,delete"),
            // array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Testimonials", "role" => "testimonials", "role_type" => "view,add,edit,delete"),
            
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Contact Review", "role" => "contactreview", "role_type" => "view,add,edit,delete"),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Service Enquiry", "role" => "serviceenquiry", "role_type" => "view,add,edit,delete"),
            array("name" => "<span class='fa fa-file'></span> HRMS", "role" => "hrms", "role_type" => "view"),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-user'></span> User", "role" => "user", "role_type" => "view,add,edit,delete "),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Role", "role" => "role", "role_type" => "view,add,edit,delete"),
            array("name" => "<span class='fa fa-file'></span> Report", "role" => "report", "role_type" => "view"),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Customer Report", "role" => "customerreport", "role_type" => "view"),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Sales Report", "role" => "salesreport", "role_type" => "view"),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> outbound Report", "role" => "outboundreport", "role_type" => "view"),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Inbound Report", "role" => "inboundreport", "role_type" => "view"),
            array("name" => "&nbsp;&nbsp;<span class='fa fa-file'></span> Free Credit Report", "role" => "freecreditreport", "role_type" => "view"),
		);
		define("MENU_LIST_JSON", json_encode($sidebar_menu));
        return view('siteadmin.Role.add',['id'=>$id,'role'=>$role]);
    }
    public function save(Request $request)
    {
        $role=$request->role;
        $role_name=$request->role_name;
        $id=$request->id;
        if($id!='')
        {
            if(DB::table('tbl_role')->where('id',$id)->update(['role_name'=>$role_name,'role'=>json_encode($role)]))
            {
                request()->session()->put('success_msg', 'Role Updated Successfully');
            } else {
                request()->session()->put('error_msg', 'Failed To Update Role');
            }
        }
        else{
            if(DB::table('tbl_role')->insert(['role_name'=>$role_name,'role'=>json_encode($role)]))
            {
                request()->session()->put('success_msg', 'Role Added Successfully');
            } else {
                request()->session()->put('error_msg', 'Failed To Add Role');
            }
        }
        return redirect('siteadmin/Role');
    }
    public function delete($id)
    {
        if(DB::table('tbl_role')->where('id',$id)->update(['isdelete'=>1]))
        {
            request()->session()->put('success_msg', 'Role Deleted Successfully');
        } else {
            request()->session()->put('error_msg', 'Failed To Delete Role');
        }
        return redirect('siteadmin/Role');
    }
}
