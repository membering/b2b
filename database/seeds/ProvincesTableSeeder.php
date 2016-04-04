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
        DB::table('provinces')->insert([
            ['country_id' => '235', 'name' => 'An Giang', 'code' => 88],
            ['country_id' => '235', 'name' => 'Bà Rịa - Vũng Tàu', 'code' => 79],
            ['country_id' => '235', 'name' => 'Bạc Liêu', 'code' => 26],
            ['country_id' => '235', 'name' => 'Bắc Kạn', 'code' => 96],
            ['country_id' => '235', 'name' => 'Bắc Giang', 'code' => 22],
            ['country_id' => '235', 'name' => 'Bắc Ninh', 'code' => 79],
            ['country_id' => '235', 'name' => 'Bến Tre', 'code' => 93],
            ['country_id' => '235', 'name' => 'Bình Dương', 'code' => 59],
            ['country_id' => '235', 'name' => 'Bình Định', 'code' => 82],
            ['country_id' => '235', 'name' => 'Bình Phước', 'code' => 83],
            ['country_id' => '235', 'name' => 'Bình Thuận', 'code' => 80],
            ['country_id' => '235', 'name' => 'Cà Mau', 'code' => 97],
            ['country_id' => '235', 'name' => 'Cao Bằng', 'code' => 27],
            ['country_id' => '235', 'name' => 'Cần Thơ', 'code' => 90],
            ['country_id' => '235', 'name' => 'Đà Nẵng', 'code' => 55],
            ['country_id' => '235', 'name' => 'Đắk Nông', 'code' => 64],
            ['country_id' => '235', 'name' => 'Đắk Lắk', 'code' => 63],
            ['country_id' => '235', 'name' => 'Điện Biên', 'code' => 38],
            ['country_id' => '235', 'name' => 'Đồng Nai', 'code' => 81],
            ['country_id' => '235', 'name' => 'Đồng Tháp', 'code' => 87],
            ['country_id' => '235', 'name' => 'Gia Lai', 'code' => 60],
            ['country_id' => '235', 'name' => 'Hà Giang', 'code' => 31],
            ['country_id' => '235', 'name' => 'Hà Nam', 'code' => 40],
            ['country_id' => '235', 'name' => 'TP. Hà Nội', 'code' => 10],
            ['country_id' => '235', 'name' => 'Hà Tĩnh', 'code' => 48],
            ['country_id' => '235', 'name' => 'Hải Dương', 'code' => 17],
            ['country_id' => '235', 'name' => 'TP. Hải Phòng', 'code' => 18],
            ['country_id' => '235', 'name' => 'Hậu Giang', 'code' => 91],
            ['country_id' => '235', 'name' => 'Hòa Bình', 'code' => 35],
            ['country_id' => '235', 'name' => 'Hưng Yên', 'code' => 16],
            ['country_id' => '235', 'name' => 'TP. Hồ Chí Minh', 'code' => 70],
            ['country_id' => '235', 'name' => 'Khánh Hòa', 'code' => 65],
            ['country_id' => '235', 'name' => 'Kiên Giang', 'code' => 92],
            ['country_id' => '235', 'name' => 'Kon Tum', 'code' => 58],
            ['country_id' => '235', 'name' => 'Lai Châu - Điện Biên', 'code' => 39],
            ['country_id' => '235', 'name' => 'Lạng Sơn', 'code' => 24],
            ['country_id' => '235', 'name' => 'Lào Cai', 'code' => 33],
            ['country_id' => '235', 'name' => 'Lâm Đồng', 'code' => 67],
            ['country_id' => '235', 'name' => 'Long An', 'code' => 85],
            ['country_id' => '235', 'name' => 'Nam Định', 'code' => 42],
            ['country_id' => '235', 'name' => 'Nghệ An', 'code' => 46],
            ['country_id' => '235', 'name' => 'Ninh Bình', 'code' => 43],
            ['country_id' => '235', 'name' => 'Ninh Thuận', 'code' => 66],
            ['country_id' => '235', 'name' => 'Phú Thọ', 'code' => 29],
            ['country_id' => '235', 'name' => 'Phú Yên', 'code' => 62],
            ['country_id' => '235', 'name' => 'Quảng Bình', 'code' => 51],
            ['country_id' => '235', 'name' => 'Quảng Nam', 'code' => 56],
            ['country_id' => '235', 'name' => 'Quảng Ngãi', 'code' => 57],
            ['country_id' => '235', 'name' => 'Quảng Ninh', 'code' => 20],
            ['country_id' => '235', 'name' => 'Quảng Trị', 'code' => 52],
            ['country_id' => '235', 'name' => 'Sóc Trăng', 'code' => 95],
            ['country_id' => '235', 'name' => 'Sơn La', 'code' => 36],
            ['country_id' => '235', 'name' => 'Tây Ninh', 'code' => 235],
            ['country_id' => '235', 'name' => 'Thái Bình', 'code' => 41],
            ['country_id' => '235', 'name' => 'Thái Nguyên', 'code' => 25],
            ['country_id' => '235', 'name' => 'Thanh Hóa', 'code' => 44],
            ['country_id' => '235', 'name' => 'Thừa Thiên Huế', 'code' => 53],
            ['country_id' => '235', 'name' => 'Tiền Giang', 'code' => 86],
            ['country_id' => '235', 'name' => 'Trà Vinh', 'code' => 94],
            ['country_id' => '235', 'name' => 'Tuyên Quang', 'code' => 30],
            ['country_id' => '235', 'name' => 'Vĩnh Long', 'code' => 89],
            ['country_id' => '235', 'name' => 'Vĩnh Phúc', 'code' => 28],
            ['country_id' => '235', 'name' => 'Yên Bái', 'code' => 32]
        ]);
    }
}
