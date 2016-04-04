<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
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
            $sheet0 = $reader->getSheet(0)->toArray();
            foreach($sheet0 as $key => $value) {
                if ($key == 0) continue;
                array_push($data, [
                    'country_id' => '235',
                    'name' => $value[1],
                    'code' => $value[0]
                ]);
            }
            foreach(array_chunk($data, 100) as $value) {
                DB::table('provinces')->insert($value);
            }
            unset($data);
        });
        unset($file);
        unset($excel);
    }
}
