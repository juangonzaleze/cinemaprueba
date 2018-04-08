<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
	public function index(){
		return view ('pages.index');
	}
	public function contacto(){
		return view ('pages.contact');
	}
	public function reviews(){
		return view ('pages.reviews');
	}
}
