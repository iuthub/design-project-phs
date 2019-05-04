<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title='WElcome home !!';
    	//return view('pages.index', compact('title'));
    	return view('pages.index')->with('title', $title);
    }

      public function pricing(){
    	return view('pages.pricing');
    }

      public function about(){
    	return view('pages.about');
    }

       public function services(){
       	$data= array('title' =>'Services' ,
       					'services'=> ['Web design', 'Programming']);
    	return view('pages.services')->with($data);
    }
}
