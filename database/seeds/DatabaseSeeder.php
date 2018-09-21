<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	DB::table('sanpham')->insert([
    		['ten' => 'Che Ngoc Thach','gia' => '50000','thumbnail' => 'https://znews-photo-td.zadn.vn/w660/Uploaded/jaroin/2017_05_18/6.jpg'],
    		['ten' => 'Mon Trang Mieng','gia' => '30000','thumbnail' => 'https://znews-photo-td.zadn.vn/w660/Uploaded/jaroin/2017_05_18/2.jpg'],
    		['ten' => 'Sushi','gia' => '100000','thumbnail' => 'http://vuanhiepanh.com/uploads/news/ky-thuat-nhiepanh/doi-tuong-chup-anh/chupanh-banngay/10kythuat-chup-thuc-an/ky_thuat_chup_anh_do_an_ngon_mat_4.jpg']
    	]);
    }
}
