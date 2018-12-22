<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request;
use DB;

class DownloadController extends Controller
{
    public function downfun()
    {
    	$downloads = DB::table('downloadpdf')->get();
    	return view('download.viewfile',compact('downloads'));
    }
}
