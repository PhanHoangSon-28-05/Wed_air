<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run()
    {
        $location = [
            ['1', 'Thành phố Hà Nội'],
            ['2', 'Tỉnh Hà Giang'],
            ['3', 'Tỉnh Cao Bằng'],
            ['4', 'Tỉnh Bắc Kạn'],
            ['5', 'Tỉnh Tuyên Quang'],
            ['6', 'Tỉnh Lào Cai'],
            ['7', 'Tỉnh Điện Biên'],
            ['8', 'Tỉnh Lai Châu'],
            ['9', 'Tỉnh Sơn La'],
            ['10', 'Tỉnh Yên Bái'],
            ['11', 'Tỉnh Hoà Bình'],
            ['12', 'Tỉnh Thái Nguyên'],
            ['13', 'Tỉnh Lạng Sơn'],
            ['14', 'Tỉnh Quảng Ninh'],
            ['15', 'Tỉnh Bắc Giang'],
            ['16', 'Tỉnh Phú Thọ'],
            ['17', 'Tỉnh Vĩnh Phúc'],
            ['18', 'Tỉnh Bắc Ninh'],
            ['19', 'Tỉnh Hải Dương'],
            ['20', 'Thành phố Hải Phòng'],
            ['21', 'Tỉnh Hưng Yên'],
            ['22', 'Tỉnh Thái Bình'],
            ['23', 'Tỉnh Hà Nam'],
            ['24', 'Tỉnh Nam Định'],
            ['25', 'Tỉnh Ninh Bình'],
            ['26', 'Tỉnh Thanh Hóa'],
            ['27', 'Tỉnh Nghệ An'],
            ['28', 'Tỉnh Hà Tĩnh'],
            ['29', 'Tỉnh Quảng Bình'],
            ['30', 'Tỉnh Quảng Trị'],
            ['31', 'Tỉnh Thừa Thiên Huế'],
            ['32', 'Thành phố Đà Nẵng'],
            ['33', 'Tỉnh Quảng Nam'],
            ['34', 'Tỉnh Quảng Ngãi'],
            ['35', 'Tỉnh Bình Định'],
            ['36', 'Tỉnh Phú Yên'],
            ['37', 'Tỉnh Khánh Hòa'],
            ['38', 'Tỉnh Ninh Thuận'],
            ['39', 'Tỉnh Bình Thuận'],
            ['40', 'Tỉnh Kon Tum'],
            ['41', 'Tỉnh Gia Lai'],
            ['42', 'Tỉnh Đắk Lắk'],
            ['43', 'Tỉnh Đắk Nông'],
            ['44', 'Tỉnh Lâm Đồng'],
            ['45', 'Tỉnh Bình Phước'],
            ['46', 'Tỉnh Tây Ninh'],
            ['47', 'Tỉnh Bình Dương'],
            ['48', 'Tỉnh Đồng Nai'],
            ['49', 'Thành phố Hồ Chí Minh'],
            ['50', 'Tỉnh Long An'],
            ['51', 'Tỉnh Tiền Giang'],
            ['52', 'Tỉnh Bến Tre'],
            ['53', 'Tỉnh Trà Vinh'],
            ['54','Tỉnh Vĩnh Long'],
            ['55','Tỉnh Đồng Tháp'],
            ['56','Tỉnh An Giang'],
            ['57','Tỉnh Kiên Giang'],
            ['58','Thành phố Cần Thơ'],
            ['59','Tỉnh Hậu Giang'],
            ['60','Tỉnh Sóc Trăng'],
            ['61','Tỉnh Bạc Liêu'],
            ['62','Tỉnh Cà Mau']
        ];
        DB::table('location')->insert($location);
    }
}
