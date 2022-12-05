<?php

namespace Database\Seeders;

use App\Models\Motor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motor::create([
            'judul' => 'Astrea',
            'slug' => Str::slug('astrea'),
            'sampul' => 'motor/astrea1.jpg',
            'produktor' => 'Honda',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10
        ]);

        Motor::create([
            'judul' => 'FizR',
            'slug' => Str::slug('fizr'),
            'sampul' => 'motor/fizr.png',
            'produktor' => 'Yamaha',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 10
        ]);

        Motor::create([
            'judul' => 'Tornado',
            'slug' => Str::slug('tornado'),
            'sampul' => 'motor/tornado.jpg',
            'produktor' => 'Suzuki',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 10
        ]);

        Motor::create([
            'judul' => 'RC100',
            'slug' => Str::slug('rc'),
            'sampul' => 'motor/rc1.jpg',
            'produktor' => 'Suzuki',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 10
        ]);

        Motor::create([
            'judul' => 'BSA1',
            'slug' => Str::slug('bsa'),
            'sampul' => 'motor/BSA1.jpg',
            'produktor' => 'BSA',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 10
        ]);

        Motor::create([
            'judul' => 'Norton',
            'slug' => Str::slug('norton'),
            'sampul' => 'motor/norton.jpg',
            'produktor' => 'Norton Production',
            'penerbit_id' => 3,
            'kategori_id' => 6,
            'rak_id' => 12,
            'stok' => 10
        ]);

        Motor::create([
            'judul' => 'Royal Enfield',
            'slug' => Str::slug('re'),
            'sampul' => 'motor/re.jpg',
            'produktor' => 'Royal Enfield Company',
            'penerbit_id' => 3,
            'kategori_id' => 6,
            'rak_id' => 13,
            'stok' => 10
        ]);
    }
}
