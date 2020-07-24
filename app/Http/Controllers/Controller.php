<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $date_now, $date_time, $id_time;

    public function __construct(){
    	setlocale(LC_TIME, 'id');
    	$this->date_now        = Carbon::now()->formatLocalized('%A, %d %B %Y - %H:%M:%S');
        $this->date_time       = Carbon::now()->formatLocalized('%Y-%m-%d %H:%M:%S');
        $this->id_time         = Carbon::now()->formatLocalized('%Y%m%d%H%M%S');
    }
}
