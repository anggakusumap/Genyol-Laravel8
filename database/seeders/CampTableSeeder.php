<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Str;
use App\Models\Camps;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => Str::slug('Gila Belajar'),
                'price' => 280,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => Str::slug('Baru Mulai'),
                'price' => 280,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ]
        ];

        //! Cara 1 mengirim data ke db
        // foreach ($camps as $key => $camp) {
        //     Camps::create($camp);
        // }

        //! Cara 2 mengirim data ke db pakai query builder
        // TODO Harus deklarasikan created at dan updated at
        Camps::insert($camps);
    }
}
