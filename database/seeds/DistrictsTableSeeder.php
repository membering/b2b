<?php

use App\Province;
use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
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
            $provinceModel = new Province();
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
            foreach(array_chunk($data, 100) as $value) {
                DB::table('districts')->insert($value);
            }
            unset($data);
        });
        unset($file);
        unset($excel);
    }
}
