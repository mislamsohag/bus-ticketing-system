<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    function Sales(){
        return view('Backend.Pages.Management.sales');
    }
    function ParcelDetails(){
        return view('Backend.Pages.Management.parcels');
    }
    function Passagers(){
        return view('Backend.Pages.Management.passagers');
    }
   
    function Profiles(){
        return view('Backend.Pages.Management.profiles');
    }
}
