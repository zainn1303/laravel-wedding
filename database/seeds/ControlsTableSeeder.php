<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ControlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Controls
        DB::table('controls')->insert([
            'address' => 'Jl. Coba Saja',
            'email' => 'wedding@gmail.com',
            'telephone_number' => '0341123124213',
            'whatsapp_phone_number' => '081243534435',
            'help_text' => 'Jika ada pertanyaan detail mengenai layanan dan vendor kami silahkan kontak kami dengan keterangan di bawah pada kolom kontak kami.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
