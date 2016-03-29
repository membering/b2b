<?php namespace Modules\Buyer\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class BuyerController extends Controller {
	
	public function index()
	{
		return view('buyer::index');
	}
	
}