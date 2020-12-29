<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Paket All In
        DB::table('vendors')->insert([
            'categorie_id' => '1',
            'kota_id' => '1',
            'judul' => 'Swiss BelHotel Pondok Indah',
            'deskripsi' => "<p>Paket Pernikahan 250 PAX : Rp. 120.000.000
            <br/>
            CATERING
            <br/>
            Beragam hidangan Asia Barat, Indonesia, Oriental, dan Asia otentik, dengan pilihan:
            <br/>
            <ul>
                <li>3 makanan pembuka</li>
                <li>7 makanan utama</li>
                <li>4 makanan pencuci mulut</li>
                <li>1 sup</li>
                <li>250 atau 350 gelas minuman ringan atau es teh (tergantung paket yang dipilih)</li>
                <li>250 atau 350 gelas minuman ringan atau es teh (tergantung paket yang dipilih)</li>
            </ul>
            <br/>
            BUNGA & PAKET DEKORASI
            <br/>
            <ul>
                <li>Sepasang janur dan nama pengantin</li>
                <li>Hiasan background meja tamu</li>
                <li>2 (dua) kotak angpao</li>
                <li>Pergola lengkung</li>
                <li>3 (tiga) pasang standing flower</li>
                <li>1 (satu) set pelaminan</li>
                <li>Bunga hiasan meja VIP</li>
                <li>Bonus 2 (dua) standing photo + meja galery</li>
                <li>Bonus hias kolam</li>
                <li>Karpet hijau</li>
            </ul>
            <br/>
            HAIR STYLING & MAKE UP
            <br/>
            <ul>
                <li>Pengantin make up & hair styling</li>
                <li>Make up & hair styling dari pengantin wanita dan ibu mempelai pria</li>
            </ul>
            <br/>
            DOKUMENTASI
            <br/>
            <ul>
                <li>1 (satu) fotografer</li>
                <li>1 (satu) Videografer</li>
                <li>1 (satu) Album Foto</li>
                <li>1 (satu) Bingkai Foto</li>
                <li>1 (satu) DVD yang diedit Cinematic Video</li>
            </ul>
            <br/>
            LIVE MUSIC & ENTERTAINMENT
            <br/>
            <ul>
                <li>Band Mini (Band Akustik)</li>
                <li>MC</li>
            </ul>
            <br/>
            SOUND SYSTEM
            <br/>
            <ul>
                <li>2 (dua) mikrofon dan sistem suara standar</li>
            </ul>
            <br/>
            BONUS
            <br/>
            <ul>
                <li>Makan malam keluarga untuk 20 (dua puluh) porsi hidangan khas Indonesia sebelum acara berlangsung</li>
                <li>Gratis 2 (dua) buku tamu Swiss-Belhotel Pondok Indah di meja resepsionis Anda</li>
                <li>2 (dua) malam menginap di satu kamar tidur suite untuk pengantin wanita, termasuk sarapan pagi untuk 2 (dua) orang dan buah selamat datang</li>
                <li>1 (satu) malam menginap di 2 (dua) kamar deluxe untuk keluarga, termasuk sarapan pagi untuk 2 (dua) orang per kamar di Swiss-Cafe.</li>
                <li>1 (satu) ruang untuk Upacara Berkat atau pendaftaran sipil</li>
                <li>1 (satu) ruang ganti pada hari pernikahan</li>
                <li>Gratis penggunaan listrik gratis hingga 5.000 watt</li>
                <li>Food test gratis untuk 6 (enam) orang sebelum hari pernikahan Anda</li>
                <li>Cemilan untuk 20 (dua puluh) orang selama teknikal meeting</li>
                <li>Penggunaan ruang meeting gratis untuk pengambilan foto pra-pernikahan</li>
            </ul>
            </p>",
            'gambar' => 'paket_all_in_1.jpg',
            'harga' => '120000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);


        DB::table('vendors')->insert([
            'categorie_id' => '1',
            'kota_id' => '2',
            'judul' => 'Swiss BelHotel Malang',
            'deskripsi' => "<p>Paket Pernikahan 250 PAX : Rp. 120.000.000
            <br/>
            CATERING
            <br/>
            Beragam hidangan Asia Barat, Indonesia, Oriental, dan Asia otentik, dengan pilihan:
            <br/>
            <ul>
                <li>3 makanan pembuka</li>
                <li>7 makanan utama</li>
                <li>4 makanan pencuci mulut</li>
                <li>1 sup</li>
                <li>250 atau 350 gelas minuman ringan atau es teh (tergantung paket yang dipilih)</li>
                <li>250 atau 350 gelas minuman ringan atau es teh (tergantung paket yang dipilih)</li>
            </ul>
            <br/>
            BUNGA & PAKET DEKORASI
            <br/>
            <ul>
                <li>Sepasang janur dan nama pengantin</li>
                <li>Hiasan background meja tamu</li>
                <li>2 (dua) kotak angpao</li>
                <li>Pergola lengkung</li>
                <li>3 (tiga) pasang standing flower</li>
                <li>1 (satu) set pelaminan</li>
                <li>Bunga hiasan meja VIP</li>
                <li>Bonus 2 (dua) standing photo + meja galery</li>
                <li>Bonus hias kolam</li>
                <li>Karpet hijau</li>
            </ul>
            <br/>
            HAIR STYLING & MAKE UP
            <br/>
            <ul>
                <li>Pengantin make up & hair styling</li>
                <li>Make up & hair styling dari pengantin wanita dan ibu mempelai pria</li>
            </ul>
            <br/>
            DOKUMENTASI
            <br/>
            <ul>
                <li>1 (satu) fotografer</li>
                <li>1 (satu) Videografer</li>
                <li>1 (satu) Album Foto</li>
                <li>1 (satu) Bingkai Foto</li>
                <li>1 (satu) DVD yang diedit Cinematic Video</li>
            </ul>
            <br/>
            LIVE MUSIC & ENTERTAINMENT
            <br/>
            <ul>
                <li>Band Mini (Band Akustik)</li>
                <li>MC</li>
            </ul>
            <br/>
            SOUND SYSTEM
            <br/>
            <ul>
                <li>2 (dua) mikrofon dan sistem suara standar</li>
            </ul>
            <br/>
            BONUS
            <br/>
            <ul>
                <li>Makan malam keluarga untuk 20 (dua puluh) porsi hidangan khas Indonesia sebelum acara berlangsung</li>
                <li>Gratis 2 (dua) buku tamu Swiss-Belhotel Pondok Indah di meja resepsionis Anda</li>
                <li>2 (dua) malam menginap di satu kamar tidur suite untuk pengantin wanita, termasuk sarapan pagi untuk 2 (dua) orang dan buah selamat datang</li>
                <li>1 (satu) malam menginap di 2 (dua) kamar deluxe untuk keluarga, termasuk sarapan pagi untuk 2 (dua) orang per kamar di Swiss-Cafe.</li>
                <li>1 (satu) ruang untuk Upacara Berkat atau pendaftaran sipil</li>
                <li>1 (satu) ruang ganti pada hari pernikahan</li>
                <li>Gratis penggunaan listrik gratis hingga 5.000 watt</li>
                <li>Food test gratis untuk 6 (enam) orang sebelum hari pernikahan Anda</li>
                <li>Cemilan untuk 20 (dua puluh) orang selama teknikal meeting</li>
                <li>Penggunaan ruang meeting gratis untuk pengambilan foto pra-pernikahan</li>
            </ul>
            </p>",
            'gambar' => 'paket_all_in_1.jpg',
            'harga' => '100000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);


        DB::table('vendors')->insert([
            'categorie_id' => '1',
            'kota_id' => '3',
            'judul' => 'Swiss BelHotel Batu',
            'deskripsi' => "<p>Paket Pernikahan 250 PAX : Rp. 120.000.000
            <br/>
            CATERING
            <br/>
            Beragam hidangan Asia Barat, Indonesia, Oriental, dan Asia otentik, dengan pilihan:
            <br/>
            <ul>
                <li>3 makanan pembuka</li>
                <li>7 makanan utama</li>
                <li>4 makanan pencuci mulut</li>
                <li>1 sup</li>
                <li>250 atau 350 gelas minuman ringan atau es teh (tergantung paket yang dipilih)</li>
                <li>250 atau 350 gelas minuman ringan atau es teh (tergantung paket yang dipilih)</li>
            </ul>
            <br/>
            BUNGA & PAKET DEKORASI
            <br/>
            <ul>
                <li>Sepasang janur dan nama pengantin</li>
                <li>Hiasan background meja tamu</li>
                <li>2 (dua) kotak angpao</li>
                <li>Pergola lengkung</li>
                <li>3 (tiga) pasang standing flower</li>
                <li>1 (satu) set pelaminan</li>
                <li>Bunga hiasan meja VIP</li>
                <li>Bonus 2 (dua) standing photo + meja galery</li>
                <li>Bonus hias kolam</li>
                <li>Karpet hijau</li>
            </ul>
            <br/>
            HAIR STYLING & MAKE UP
            <br/>
            <ul>
                <li>Pengantin make up & hair styling</li>
                <li>Make up & hair styling dari pengantin wanita dan ibu mempelai pria</li>
            </ul>
            <br/>
            DOKUMENTASI
            <br/>
            <ul>
                <li>1 (satu) fotografer</li>
                <li>1 (satu) Videografer</li>
                <li>1 (satu) Album Foto</li>
                <li>1 (satu) Bingkai Foto</li>
                <li>1 (satu) DVD yang diedit Cinematic Video</li>
            </ul>
            <br/>
            LIVE MUSIC & ENTERTAINMENT
            <br/>
            <ul>
                <li>Band Mini (Band Akustik)</li>
                <li>MC</li>
            </ul>
            <br/>
            SOUND SYSTEM
            <br/>
            <ul>
                <li>2 (dua) mikrofon dan sistem suara standar</li>
            </ul>
            <br/>
            BONUS
            <br/>
            <ul>
                <li>Makan malam keluarga untuk 20 (dua puluh) porsi hidangan khas Indonesia sebelum acara berlangsung</li>
                <li>Gratis 2 (dua) buku tamu Swiss-Belhotel Pondok Indah di meja resepsionis Anda</li>
                <li>2 (dua) malam menginap di satu kamar tidur suite untuk pengantin wanita, termasuk sarapan pagi untuk 2 (dua) orang dan buah selamat datang</li>
                <li>1 (satu) malam menginap di 2 (dua) kamar deluxe untuk keluarga, termasuk sarapan pagi untuk 2 (dua) orang per kamar di Swiss-Cafe.</li>
                <li>1 (satu) ruang untuk Upacara Berkat atau pendaftaran sipil</li>
                <li>1 (satu) ruang ganti pada hari pernikahan</li>
                <li>Gratis penggunaan listrik gratis hingga 5.000 watt</li>
                <li>Food test gratis untuk 6 (enam) orang sebelum hari pernikahan Anda</li>
                <li>Cemilan untuk 20 (dua puluh) orang selama teknikal meeting</li>
                <li>Penggunaan ruang meeting gratis untuk pengambilan foto pra-pernikahan</li>
            </ul>
            </p>",
            'gambar' => 'paket_all_in_1.jpg',
            'harga' => '100000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);


        DB::table('vendors')->insert([
            'categorie_id' => '1',
            'kota_id' => '4',
            'judul' => 'Swiss BelHotel Bandung',
            'deskripsi' => "<p>Paket Pernikahan 250 PAX : Rp. 120.000.000
            <br/>
            CATERING
            <br/>
            Beragam hidangan Asia Barat, Indonesia, Oriental, dan Asia otentik, dengan pilihan:
            <br/>
            <ul>
                <li>3 makanan pembuka</li>
                <li>7 makanan utama</li>
                <li>4 makanan pencuci mulut</li>
                <li>1 sup</li>
                <li>250 atau 350 gelas minuman ringan atau es teh (tergantung paket yang dipilih)</li>
                <li>250 atau 350 gelas minuman ringan atau es teh (tergantung paket yang dipilih)</li>
            </ul>
            <br/>
            BUNGA & PAKET DEKORASI
            <br/>
            <ul>
                <li>Sepasang janur dan nama pengantin</li>
                <li>Hiasan background meja tamu</li>
                <li>2 (dua) kotak angpao</li>
                <li>Pergola lengkung</li>
                <li>3 (tiga) pasang standing flower</li>
                <li>1 (satu) set pelaminan</li>
                <li>Bunga hiasan meja VIP</li>
                <li>Bonus 2 (dua) standing photo + meja galery</li>
                <li>Bonus hias kolam</li>
                <li>Karpet hijau</li>
            </ul>
            <br/>
            HAIR STYLING & MAKE UP
            <br/>
            <ul>
                <li>Pengantin make up & hair styling</li>
                <li>Make up & hair styling dari pengantin wanita dan ibu mempelai pria</li>
            </ul>
            <br/>
            DOKUMENTASI
            <br/>
            <ul>
                <li>1 (satu) fotografer</li>
                <li>1 (satu) Videografer</li>
                <li>1 (satu) Album Foto</li>
                <li>1 (satu) Bingkai Foto</li>
                <li>1 (satu) DVD yang diedit Cinematic Video</li>
            </ul>
            <br/>
            LIVE MUSIC & ENTERTAINMENT
            <br/>
            <ul>
                <li>Band Mini (Band Akustik)</li>
                <li>MC</li>
            </ul>
            <br/>
            SOUND SYSTEM
            <br/>
            <ul>
                <li>2 (dua) mikrofon dan sistem suara standar</li>
            </ul>
            <br/>
            BONUS
            <br/>
            <ul>
                <li>Makan malam keluarga untuk 20 (dua puluh) porsi hidangan khas Indonesia sebelum acara berlangsung</li>
                <li>Gratis 2 (dua) buku tamu Swiss-Belhotel Pondok Indah di meja resepsionis Anda</li>
                <li>2 (dua) malam menginap di satu kamar tidur suite untuk pengantin wanita, termasuk sarapan pagi untuk 2 (dua) orang dan buah selamat datang</li>
                <li>1 (satu) malam menginap di 2 (dua) kamar deluxe untuk keluarga, termasuk sarapan pagi untuk 2 (dua) orang per kamar di Swiss-Cafe.</li>
                <li>1 (satu) ruang untuk Upacara Berkat atau pendaftaran sipil</li>
                <li>1 (satu) ruang ganti pada hari pernikahan</li>
                <li>Gratis penggunaan listrik gratis hingga 5.000 watt</li>
                <li>Food test gratis untuk 6 (enam) orang sebelum hari pernikahan Anda</li>
                <li>Cemilan untuk 20 (dua puluh) orang selama teknikal meeting</li>
                <li>Penggunaan ruang meeting gratis untuk pengambilan foto pra-pernikahan</li>
            </ul>
            </p>",
            'gambar' => 'paket_all_in_1.jpg',
            'harga' => '100000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //End Paket All In

        //Dekorasi
        DB::table('vendors')->insert([
            'categorie_id' => '2',
            'kota_id' => '1',
            'judul' => 'Jakarta Dekor',
            'deskripsi' => '<p>
                <b>Paket Pernikahan Bronze</b>
                <br/>
                <b>Harga : Rp. 10.000.000</b>
                <br/>
                Details :
                <br/>
                <ul>
                    <li>Sepasang janur dan nama pengantin</li>
                    <li>Hiasan background meja tamu</li>
                    <li>2 (dua) kotak angpao</li>
                    <li>Pergola lengkung</li>
                    <li>3 (tiga) pasang standing flower</li>
                    <li>1 (satu) set pelaminan</li>
                    <li>Bunga hiasan meja VIP</li>
                    <li>Bonus 2 (dua) standing photo + meja galery</li>
                    <li>Bonus hias kolam</li>
                    <li>Karpet hijau</li>
                </ul>
            </p>',
            'gambar' => 'dekor_1.jpg',
            'harga' => '10000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('vendors')->insert([
            'categorie_id' => '2',
            'kota_id' => '2',
            'judul' => 'Malang Dekor',
            'deskripsi' => '<p>
                <b>Paket Pernikahan Bronze</b>
                <br/>
                <b>Harga : Rp. 10.000.000</b>
                <br/>
                Details :
                <br/>
                <ul>
                    <li>Sepasang janur dan nama pengantin</li>
                    <li>Hiasan background meja tamu</li>
                    <li>2 (dua) kotak angpao</li>
                    <li>Pergola lengkung</li>
                    <li>3 (tiga) pasang standing flower</li>
                    <li>1 (satu) set pelaminan</li>
                    <li>Bunga hiasan meja VIP</li>
                    <li>Bonus 2 (dua) standing photo + meja galery</li>
                    <li>Bonus hias kolam</li>
                    <li>Karpet hijau</li>
                </ul>
            </p>',
            'gambar' => 'dekor_1.jpg',
            'harga' => '10000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('vendors')->insert([
            'categorie_id' => '2',
            'kota_id' => '3',
            'judul' => 'Batu Dekor',
            'deskripsi' => '<p>
                <b>Paket Pernikahan Bronze</b>
                <br/>
                <b>Harga : Rp. 10.000.000</b>
                <br/>
                Details :
                <br/>
                <ul>
                    <li>Sepasang janur dan nama pengantin</li>
                    <li>Hiasan background meja tamu</li>
                    <li>2 (dua) kotak angpao</li>
                    <li>Pergola lengkung</li>
                    <li>3 (tiga) pasang standing flower</li>
                    <li>1 (satu) set pelaminan</li>
                    <li>Bunga hiasan meja VIP</li>
                    <li>Bonus 2 (dua) standing photo + meja galery</li>
                    <li>Bonus hias kolam</li>
                    <li>Karpet hijau</li>
                </ul>
            </p>',
            'gambar' => 'dekor_1.jpg',
            'harga' => '10000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('vendors')->insert([
            'categorie_id' => '2',
            'kota_id' => '3',
            'judul' => 'Bandung Dekor',
            'deskripsi' => '<p>
                <b>Paket Pernikahan Bronze</b>
                <br/>
                <b>Harga : Rp. 10.000.000</b>
                <br/>
                Details :
                <br/>
                <ul>
                    <li>Sepasang janur dan nama pengantin</li>
                    <li>Hiasan background meja tamu</li>
                    <li>2 (dua) kotak angpao</li>
                    <li>Pergola lengkung</li>
                    <li>3 (tiga) pasang standing flower</li>
                    <li>1 (satu) set pelaminan</li>
                    <li>Bunga hiasan meja VIP</li>
                    <li>Bonus 2 (dua) standing photo + meja galery</li>
                    <li>Bonus hias kolam</li>
                    <li>Karpet hijau</li>
                </ul>
            </p>',
            'gambar' => 'dekor_1.jpg',
            'harga' => '10000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //End Dekorasi

        //Catering
        DB::table('vendors')->insert([
            'categorie_id' => '3',
            'kota_id' => '1',
            'judul' => 'Jakarta Catering',
            'deskripsi' => '<p>
                <b>WEDDING PACKAGE</b>
                <br/>
                <b>Harga : Rp. 5.000.000 / 250 Guest</b>
                <br/>
                Details :
                <br/>
                <ul>
                    <li>Three-course Fine Dining Menu That Includes One Starter (Bread, Soup, or Salad)</li>
                    <li>One Main Course (Pasta, Steak, or Lasagna)</li>
                    <li>One Dessert (Ice Cream, Cake, or Melted Chocolate).</li>
                </ul>
            </p>',
            'gambar' => 'catering_1.jpg',
            'harga' => '5000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('vendors')->insert([
            'categorie_id' => '3',
            'kota_id' => '2',
            'judul' => 'Malang Catering',
            'deskripsi' => '<p>
                <b>WEDDING PACKAGE</b>
                <br/>
                <b>Harga : Rp. 5.000.000 / 250 Guest</b>
                <br/>
                Details :
                <br/>
                <ul>
                    <li>Three-course Fine Dining Menu That Includes One Starter (Bread, Soup, or Salad)</li>
                    <li>One Main Course (Pasta, Steak, or Lasagna)</li>
                    <li>One Dessert (Ice Cream, Cake, or Melted Chocolate).</li>
                </ul>
            </p>',
            'gambar' => 'catering_1.jpg',
            'harga' => '5000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('vendors')->insert([
            'categorie_id' => '3',
            'kota_id' => '3',
            'judul' => 'Batu Catering',
            'deskripsi' => '<p>
                <b>WEDDING PACKAGE</b>
                <br/>
                <b>Harga : Rp. 5.000.000 / 250 Guest</b>
                <br/>
                Details :
                <br/>
                <ul>
                    <li>Three-course Fine Dining Menu That Includes One Starter (Bread, Soup, or Salad)</li>
                    <li>One Main Course (Pasta, Steak, or Lasagna)</li>
                    <li>One Dessert (Ice Cream, Cake, or Melted Chocolate).</li>
                </ul>
            </p>',
            'gambar' => 'catering_1.jpg',
            'harga' => '5000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('vendors')->insert([
            'categorie_id' => '3',
            'kota_id' => '4',
            'judul' => 'Bandung Catering',
            'deskripsi' => '<p>
                <b>WEDDING PACKAGE</b>
                <br/>
                <b>Harga : Rp. 5.000.000 / 250 Guest</b>
                <br/>
                Details :
                <br/>
                <ul>
                    <li>Three-course Fine Dining Menu That Includes One Starter (Bread, Soup, or Salad)</li>
                    <li>One Main Course (Pasta, Steak, or Lasagna)</li>
                    <li>One Dessert (Ice Cream, Cake, or Melted Chocolate).</li>
                </ul>
            </p>',
            'gambar' => 'catering_1.jpg',
            'harga' => '5000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        //End Catering

        //Make Up
        DB::table('vendors')->insert([
            'categorie_id' => '4',
            'kota_id' => '1',
            'judul' => 'Coba Saja 3',
            'deskripsi' => 'Coba Heehe 3',
            'gambar' => 'make_up_1.jpg',
            'harga' => '10000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        //Busana
        DB::table('vendors')->insert([
            'categorie_id' => '5',
            'kota_id' => '1',
            'judul' => 'Coba Saja 4',
            'deskripsi' => 'Coba Heehe 4',
            'gambar' => 'busana_1.jpg',
            'harga' => '5000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        //Foto & Video
        DB::table('vendors')->insert([
            'categorie_id' => '6',
            'kota_id' => '2',
            'judul' => 'Coba Saja 5',
            'deskripsi' => 'Coba Heehe 5',
            'gambar' => 'foto_video_1.jpg',
            'harga' => '5000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        //Souvenir
        DB::table('vendors')->insert([
            'categorie_id' => '7',
            'kota_id' => '3',
            'judul' => 'Coba Saja 6',
            'deskripsi' => 'Coba Heehe 6',
            'gambar' => 'souvenir_1.jpg',
            'harga' => '5000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        //MC
        DB::table('vendors')->insert([
            'categorie_id' => '8',
            'kota_id' => '4',
            'judul' => 'Coba Saja 7',
            'deskripsi' => 'Coba Heehe 7',
            'gambar' => 'mc_1.jpg',
            'harga' => '5000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        //Honeymoon
        DB::table('vendors')->insert([
            'categorie_id' => '9',
            'kota_id' => '3',
            'judul' => 'Coba Saja 9',
            'deskripsi' => 'Coba Heehe 9',
            'gambar' => 'honeymoon_1.jpg',
            'harga' => '5000000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
