<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class HomeController extends Controller
{
    
    public function __construct() {
    	$this->middleware('auth',['except' => 'getLogout']);
    }

    public function getLogout() {
        Auth::logout();
        return redirect(\URL::previous());
    }
}
