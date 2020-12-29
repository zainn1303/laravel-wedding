<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Testimonial 1
        DB::table('testimonials')->insert([
            'nama' => 'Zain, Friend',
            'deskripsi' => "Everything ran really smoothly and we all had a wonderful day. We couldn't have done it without you! I'd be happy to put up some photos on the website and recommend you to everybody.",
            'gambar' => 'testi_1.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // Testimonial 2
        DB::table('testimonials')->insert([
            'nama' => 'Yoshi, Friend',
            'deskripsi' => 'Dekorasi terbaik yang ada.',
            'gambar' => 'testi_2.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // Testimonial 3
        DB::table('testimonials')->insert([
            'nama' => 'Ari, Friend',
            'deskripsi' => 'Catering dengan pengiriman baik dan makanannya enak-enak.',
            'gambar' => 'testi_3.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
