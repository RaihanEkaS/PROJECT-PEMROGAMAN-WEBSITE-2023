<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Config::insert([
            [
                'code' => 'default_password',
                'value' => 'admin',
            ],
            [
                'code' => 'page_size',
                'value' => '5',
            ],
            [
                'code' => 'app_name',
                'value' => 'Aplikasi Surat Menyurat',
            ],
            [
                'code' => 'institution_name',
                'value' => 'Universitas Mulawarman',
            ],
            [
                'code' => 'institution_address',
                'value' => 'Jalan Sambaliung No.9 Samarinda 75119',
            ],
            [
                'code' => 'institution_phone',
                'value' => '081234567890',
            ],
            [
                'code' => 'institution_email',
                'value' => 'teknikelektro20@unmul.com',
            ],
            [
                'code' => 'language',
                'value' => 'id',
            ],
            [
                'code' => 'pic',
                'value' => 'Ikhsan Yusuf, Raihan Eka Saputra',
            ],
        ]);
    }
}
