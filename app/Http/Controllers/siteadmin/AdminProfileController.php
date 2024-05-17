<?php

namespace App\Http\Controllers\siteadmin;

use App\Http\Controllers\Controller;
use App\Models\siteadmin\ProfileModel;
use Illuminate\Http\Request;
class AdminProfileController extends Controller
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
    }
    public function index()
    {
        $data['profile'] = $this->ProfileModel->getprofiledata();
        return view('siteadmin/Profile', $data);
    }
    public function UpdateProfile(Request $request)
    {
        $data = $this->ProfileModel->UpdateProfile($request);
        return redirect('siteadmin/profile');
    }

}
