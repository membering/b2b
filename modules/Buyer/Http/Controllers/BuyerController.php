<?php namespace Modules\Buyer\Http\Controllers;

use App\Province;
use Maatwebsite\Excel\Facades\Excel;
use Pingpong\Modules\Routing\Controller;

class BuyerController extends Controller {

	/**
	 *
     */
	public function index()
	{
		$provinceModel = new Province();
		$file = storage_path('app/boundaries_vn.xls');
		Excel::load($file, function($reader) use ($provinceModel) {
			$data = [];
			$sheet0 = $reader->getSheet(0)->toArray();
			$sheet1 = $reader->getSheet(1)->toArray();
			foreach($sheet0 as $key => $value) {
				if ($key == 0) continue;
				foreach($sheet1 as $k => $val) {
					if ($k == 0) continue;
					if ($val[4] == $value[0])
						array_push($data, [
							'name' => $val[1],
							'code' => $val[0],
							'province_id' => $provinceModel->getIdByName($sheet0[$key][1])
						]);
				}
			}
			dd($data);
		});
	}
	
}