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
            ['name' => 'An Giang', 'code' => 88],
            ['name' => 'Bà Rịa - Vũng Tàu', 'code' => 79],
            ['name' => 'Bạc Liêu', 'code' => 26],
            ['name' => 'Bắc Kạn', 'code' => 96],
            ['name' => 'Bắc Giang', 'code' => 22],
            ['name' => 'Bắc Ninh', 'code' => 79],
            ['name' => 'Bến Tre', 'code' => 93],
            ['name' => 'Bình Dương', 'code' => 59],
            ['name' => 'Bình Định', 'code' => 82],
            ['name' => 'Bình Phước', 'code' => 83],
            ['name' => 'Bình Thuận', 'code' => 80],
            ['name' => 'Cà Mau', 'code' => 97],
            ['name' => 'Cao Bằng', 'code' => 27],
            ['name' => 'Cần Thơ', 'code' => 90],
            ['name' => 'Đà Nẵng', 'code' => 55],
            ['name' => 'Đắk Nông', 'code' => 64],
            ['name' => 'Đắk Lắk', 'code' => 63],
            ['name' => 'Điện Biên', 'code' => 38],
            ['name' => 'Đồng Nai', 'code' => 81],
            ['name' => 'Đồng Tháp', 'code' => 87],
            ['name' => 'Gia Lai', 'code' => 60],
            ['name' => 'Hà Giang', 'code' => 31],
            ['name' => 'Hà Nam', 'code' => 40],
            ['name' => 'TP. Hà Nội', 'code' => 10],
            ['name' => 'Hà Tĩnh', 'code' => 48],
            ['name' => 'Hải Dương', 'code' => 17],
            ['name' => 'TP. Hải Phòng', 'code' => 18],
            ['name' => 'Hậu Giang', 'code' => 91],
            ['name' => 'Hòa Bình', 'code' => 35],
            ['name' => 'Hưng Yên', 'code' => 16],
            ['name' => 'TP. Hồ Chí Minh', 'code' => 70],
            ['name' => 'Khánh Hòa', 'code' => 65],
            ['name' => 'Kiên Giang', 'code' => 92],
            ['name' => 'Kon Tum', 'code' => 58],
            ['name' => 'Lai Châu - Điện Biên', 'code' => 39],
            ['name' => 'Lạng Sơn', 'code' => 24],
            ['name' => 'Lào Cai', 'code' => 33],
            ['name' => 'Lâm Đồng', 'code' => 67],
            ['name' => 'Long An', 'code' => 85],
            ['name' => 'Nam Định', 'code' => 42],
            ['name' => 'Nghệ An', 'code' => 46],
            ['name' => 'Ninh Bình', 'code' => 43],
            ['name' => 'Ninh Thuận', 'code' => 66],
            ['name' => 'Phú Thọ', 'code' => 29],
            ['name' => 'Phú Yên', 'code' => 62],
            ['name' => 'Quảng Bình', 'code' => 51],
            ['name' => 'Quảng Nam', 'code' => 56],
            ['name' => 'Quảng Ngãi', 'code' => 57],
            ['name' => 'Quảng Ninh', 'code' => 20],
            ['name' => 'Quảng Trị', 'code' => 52],
            ['name' => 'Sóc Trăng', 'code' => 95],
            ['name' => 'Sơn La', 'code' => 36],
            ['name' => 'Tây Ninh', 'code' => 84],
            ['name' => 'Thái Bình', 'code' => 41],
            ['name' => 'Thái Nguyên', 'code' => 25],
            ['name' => 'Thanh Hóa', 'code' => 44],
            ['name' => 'Thừa Thiên Huế', 'code' => 53],
            ['name' => 'Tiền Giang', 'code' => 86],
            ['name' => 'Trà Vinh', 'code' => 94],
            ['name' => 'Tuyên Quang', 'code' => 30],
            ['name' => 'Vĩnh Long', 'code' => 89],
            ['name' => 'Vĩnh Phúc', 'code' => 28],
            ['name' => 'Yên Bái', 'code' => 32]
        ]);
    }
}
