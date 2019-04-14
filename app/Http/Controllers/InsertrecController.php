<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Addrec;



class InsertrecController extends Controller
{
     public function ind(Request $request) {
		//return $request->stud_name;
		
		// Method 1
		$user = new Addrec;
		$user->name = $request->stud_name;
		$user->save();
		 die('here');
	 }
}
