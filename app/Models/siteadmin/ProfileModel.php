<?php

namespace App\Models;

namespace App\Models\siteadmin;

use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    public $table = "users";
    public $timestamps = false;

    public function getprofiledata()
    {
        $profiledata = DB::table('users')->select('*')
            ->where('id', Auth::Guard('admin')->user()->id)
            ->get();
        return $profiledata;
    }

    public function UpdateProfile($request)
    {
        $id = $request->id;
       if($request->hasFile('pimg')){
           $filename = time() . '.' . $request->pimg = $request->pimg->extension();
           $request->file('pimg')->move(public_path('pimage'),$filename);
           
           DB::table('users')->where('id', $id)->update([
               'profile' => $filename,
           ]);
       } 

        DB::table('users')->where('id', $id)->update([
            'name' => $request->user,
            'email' => $request->email,
            
        ]);
    }
}
