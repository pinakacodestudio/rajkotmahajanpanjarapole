<?php

namespace App\Http\Controllers\siteadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
class LogoutController extends Controller
{
    //
    public function perform()
    {
        Auth::guard('admin')->logout();
        return redirect('siteadmin/login');
    }
}
