<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\MyApp\NumConverter;

class DashboardController extends Controller
{

	public function index()
    {
    	return view('home');
    }
}
