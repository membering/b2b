<?php namespace Modules\Buyer\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Pingpong\Modules\Routing\Controller;

class BuyerController extends Controller {
	
	public function index()
	{
		$file = storage_path('app/countrycode.csv');
		$excel = Excel::load($file)->get()->toArray();
		dd($excel);
		return view('buyer::index');
	}
	
}