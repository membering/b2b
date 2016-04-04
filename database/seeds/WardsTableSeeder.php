<?php

use App\District;
use Illuminate\Database\Seeder;

class WardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = storage_path('app/boundaries_vn.xls');
        $excel = Excel::load($file, function($reader) {
            $data = [];
            $districtModel = new District();
            $sheet1 = $reader->getSheet(1)->toArray();
            $sheet2 = $reader->getSheet(2)->toArray();
            foreach($sheet1 as $key => $value) {
                if ($key == 0) continue;
                foreach($sheet2 as $k => $val) {
                    if ($k == 0) continue;
                    if ($val[4] == $value[0])
                        array_push($data, [
                            'name' => $val[1],
                            'code' => $val[0],
                            'district_id' => $districtModel->getIdByName($sheet1[$key][1])
                        ]);
                }
            }
            foreach(array_chunk($data, 100) as $value) {
                DB::table('wards')->insert($value);
            }
            unset($data);
        });
        unset($file);
        unset($excel);
    }
}
