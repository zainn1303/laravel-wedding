<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'id_user' => '1',
            'judul' => 'Rekomendasi Gedung Pernikahan Terlaris Di Surabaya',
            'deskripsi' => '<p>Pesta pernikahan yang mewah dan glamor adalah impian banyak pasangan yang akan menikah. Tidak jarang mereka lebih memilih gedung sebagai tempat yang tepat untuk melangsungkan acara pernikahan. selain alasan agar terlihat mewah, memilih gedung pernikahan untuk pesta pernikahan membuat lebih praktis, kamu tidak perlu untuk memikirkan parkir, menutup akses jalan, hingga masalah kebersihan setelah pesta pernikahan.
            <br/>
            Berkaitan dengan pemilihan gedung pernikahan, ada beberapa gedung pernikahan di Surabaya yang bisa dijadikan rekomendasi pilihanmu sebelum memutuskan untuk menyewa. Berikut ini sepuluh gedung pernikahan terlaris di Surabaya.
            1. Graha SA
            <br/>
            Graha SA berlokasi di Jl. Raya Gubeng No.19, Surabaya yang merupakan jantung kota Surabaya Timur. Gedung Graha SA sendiri memiliki  9 lantai dengan desain Eropa Klasik. Adapun ruangannya bisa menampung tamu undangan dengan kapasitas 700-750 orang.
            <br/>
            2. Gedung BK3S Convention
            <br/>
            Gedung BK3S Convention Center berlokasi di  Jl. Raya Tenggilis No.10, Tenggilis Mejoyo Surabaya. Gedung ini bisa menjadi salah satu pilihanmu untuk membuat acara pernikahan yang mewah karena gedung ini juga mampu menampung kurang lebih 1000 orang tamu undangan.
            <br/>
            3. Gedung Wanita Chandra Kencana
            <br/>
            Gedung Wanita Chandra Kencana berlokasi di Jl. Kalibokor Selatan No.2, Baratajaya, Gubeng Surabaya. Gedung ini memiliki dua lantai dengan kapasitas daya tampung tamu undangan yang berbeda, untuk lantai satu mampu menampung 500-750 orang sedangkan lantai dua 750-1000 orang.
            <br/>
            4. Gedung convention Hall Arif Rahman Hakim
            <br/>
            Gedung convention Hall Arif Rahman Hakim memiliki ruangan yang cukup luas sebagai salah satu pilihan kamu. Gedung ini berlokasi di Jl. Arif Rahman Hakim No.131-133, Keputih Sukolilo, Surabaya. Dikatakan cukup luas karena gedung ini bisa menampung 1000 – 1500 orang (jika dibuka full). Gedung ini  dikelola Dinas Pengelolaan Bangunan dan Tanah (DPBT) Pemerintah Kota Surabaya sehingga harganya terbilang cukup terjangkau.
            <br/>
            5. Gedung Islamic Center Surabaya
            <br/>
            Gedung Islamic Center Surabaya berlokasi di Jl. Dukuh Kupang No.122-124, Sawahan, Dukuh Pakis, Surabaya. Gedung ini dapat menampung tamu 1000-1500 orang, cukup luas bukan untuk mengadakan acara pernikahan di gedung Islamic Center.
            </p>',
            'gambar' => 'blog_1.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('blogs')->insert([
            'id_user' => '1',
            'judul' => 'Rekomendasi Gedung Pernikahan Favorit Di Jakarta',
            'deskripsi' => '<p>Saat kamu telah siap untuk menggelar cara pernikahan, pastilah kamu akan mempersiapkannya satu persatu mulai dari hal yang paling besar hingga hal kecil. Salah satu hal besar yang harus kamu persiapkan adalah memilih gedung pernikahan. Hal ini dikarenakan untuk memesan gedung tidak bisa dilakukan dalam waktu singkat.
            <br/>
            Memilih gedung adalah salah satu bagian yang harus dipersiapkan sejak jauh-jauh hari, apalagi untuk daerah Jakarta. Gedung pernikahan yang terletak di Jakarta biasanya sudah penuh di pesan oleh calon pengantin hingga setahun kedepan, hingga masih banyak yang juga mengantri di dalam daftar antrian untuk memesan tempat.
            <br/>
            Janganlah lama untuk mengambil keputusan untuk pemilihan gedung agar kamu bisa memilih gedung yang kamu inginkan karena jika kamu tidak segera memutuskan maka semakin terbatas pilihan gedung yang tersedia. Berikut ini beberapa gedung favorit di Jakarta yang bisa kamu jadikan referensi pilihan gedung untuk acara pernikahan.
            <br/>
            1. Menara 165
            Menara 165 berlokasi di Jalan TB. Simatupang, Jakarta Selatan, gedung ini memiliki 25 lantai dan beberapa bagian ballroom dapat digunakan sebagai pilihan untuk tempat acara. Menara 165 juga memiliki sarana dan prasarana yang bertujuan menunjang acara pernikahan. Bisa menampung tamu undangan sekitar 600 – 1.250 orang dan adapun paket pilihan gedung yang bisa kamu pilih yaitu Granada Ballroom, Andalucia, dan Granada Ballroom. Selain itu, juga menawarkan beberapa paket pernikahan, seperti paket ALL in yang meliputi dekorasi hingga penginapan yang dibutuhkan calon pengantin.
            <br/>
            2. Auditorium PTIK
            <br/>
            Gedung pernikahan PTIK atau Gedung Perguruan Tinggi Ilmu Kepolisian berlokasi di jalan Tirtayasa no 6 Jakarta Selatan. Letaknya strategis dan tidak jauh dari terminal Blok M sehingga tamu undangan lebih mudah untuk menemukannya. Untuk kapasitas tamu undangan gedung ini bisa menampung sekitar 1500 orang dan untuk desain gedung terlihat cantik dan elegan.
            <br/>
            3. Gedung Dhanapala
            <br/>
            Gedung Dhanapala berlokasi di Jl. Senen Raya No.1, Ps. Baru, Sawah Besar, Kota Jakarta Pusat. Gedung ini dikelilingi banyak hotel berbintang, jadi memudahkan para tamu undangan yang hadir dari luar kota untuk menginap di dekat lokasi pernikahanmu. Gedung Dhanapala terbilang gedung yang luas karena bisa menampung kapasitas tamu undangan hingga 3000 orang dan untuk area parkir mobil bisa menampung kurang lebih 2000 mobil
            <br/>
            4. Gedung Granadi
            <br/>
            Gedung Granadi terletak di sekitar wilayah Kuningan Jakarta dan aksesnya pun sangat mudah karena lokasinya strategis berada di tengah Jakarta. Gedung ini memiliki chandelier besar ditengah ruangan dan tersedia fasilitas full carpet. Untuk kapasitas tamu undangan, gedung ini bisa menampung hingga 1.200 orang.
            <br/>
            5. Graha Elnusa
            <br/>
            Graha Elnusa  berlokasi di Jakarta Selatan, tepatnya lokasi ini terbilang strategis untuk dijangkau dari Jakarta, Tangerang, ataupun Bogor karena terletak di pinggir tol TB Simatupang. Adapun konsep yang ada di gedung ini terkesan lebih mewah dengan  lantai full karpet di seluruh ballroom. Untuk kapasitas tamu undangan bisa menampung sekitar 1.200 orang.
            </p>',
            'gambar' => 'blog_2.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('blogs')->insert([
            'id_user' => '1',
            'judul' => 'Cari Gedung Pernikahan di Bandung ? Berikut Ini Gedung Pernikahan Rekomendasi di Bandung',
            'deskripsi' => '<p>Memilih gedung pernikahan adalah salah satu proses yang membuat calon pengantin bingung untuk menentukan yang tepat sesuai. Banyak pertimbangan yang dipikirkan oleh calon pengantin sebelum menentukannya, mulai dari kapasitas, lokasi hingga fasilitas yang ditawarkan. Hal ini dilakukan untuk menjadikan pernikahan yang dipersiapkan terlaksana sesuai dengan impian calon pengantin.
            <br/>
            Untuk kamu yang bertempat tinggal di Bandung dan akan segera melangsungkan pernikahan. Pastilah bingung mencari gedung pernikahan yang cocok dan sesuai keinginanmu. Berikut ini rekomendasi gedung pernikahan yang ada di Bandung, mungkin bisa menjadi pilihanmu untuk menentukan tempat pernikahan.
            <br/>
            1. Gedung Kologdam Bandung
            <br/>
            Gedung Kologdam merupakan salah satu gedung di Bandung yang berlokasi di Jalan Aceh no. 50, tepatnya di depan GOR Saparua. Untuk lokasi gedung ini strategis dan memiliki area yang cukup luas, sehingga gedung ini bisa menampung tamu undangan sekitar 1.500 orang. Selain itu gedung ini juga memiliki masjid yang bisa kamu gunakan untuk acara akad.
            <br/>
            2. Gedung Keuangan Negara
            <br/>
            Gedung Keuangan Negara berlokasi di Jl. Asia Afrika No 114, Bandung. Gedung ini cukup luas baik untuk kapasitas gedung ataupun area parkirnya, karena gedung ini bisa menampung tamu undagan sekitar 1.000 orang. Selain itu, juga menyediakan wisma yang bisa kamu sewa untuk menyediakan tempat bagi para tamu undangan yang berasal dari luar kota.
            <br/>
            3. Gedong Putih
            <br/>
            Gedong Putih berlokasi di Villa Triniti, Jalan Sersan Bajuri KM. 5,2 No. 88, Parongpong, Kabupaten Bandung Barat. Gedung ini seperti bangunan khas zaman belanda dengan perpaduan warna putih bersih, sehingga terlihat lebih klasik dan elegan. Selain itu area Gedong Putih ini berada di sekitar tengah-tengah hutan, sehingga terkesan lebih alami dengan dikelilingi warna hijau di sekitarnya.
            <br/>
            4. Gedung Geologi Bandung
            <br/>
            Gedung Geologi Bandung berlokasi di Jalan Diponegoro No.57 Kelurahan Cihaurgeulis, Kecamatan Cibeunying Kaler, Kota Bandung dan masih satu area dengan Museum Geologi. Gedung ini memiliki 2 lantai, untuk lantai 1 sangat kecil karena hanya bisa bisa menampung tamu undangan 700 orang, sedangkan untuk lantai 2 bisa menampung lebih banyak yaitu sekitar 1.100 orang. Selain itu gedung ini juga menyediakan masjid yang bisa kamu gunakan untuk melangsungkan akad. 
            <br/>
            5. Gedung Balai Sartika
            <br/>
            Gedung Balai Sartika bisa menjadi salah satu gedung pilihamu sebagai tempat untuk melaksanakan pesta pernikahan impianmu. Untuk lokasi gedung ini berada di Jl. Suryalaya Indah No 1 – 3, Buahbatu, Bandung. Banyak fasilitas yang ditawarkan gedung ini mulai dari listrik hingga 5.000 watt, karpet merah, tempat parkir yang cukup luas hingga izin keramaian yang diuruskan. Gedung ini bisa menampung tamu hingga 1.500 orang.</p>',
            'gambar' => 'blog_3.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('blogs')->insert([
            'id_user' => '1',
            'judul' => 'Bingung Sewa Gedung Pernikahan? Berikut Tips Mudah Sebelum Menentukan',
            'deskripsi' => '<p>Tidaklah lengkap rasanya jika kita melaksanakan pernikahan tanpa adanya pesta pernikahan/resepsi. ini adalah moment seumur hidup untuk melaksanakan pesta pernikahan yang diimpikan oleh sebagian orang. Anda pastinya akan membuat rencana yang sematang mungkin untuk membuat pesta pernikahan yang diimpikan. Mempersiapkan acara pesta akan menghabiskan banyak tenaga dan biaya, maka anda harus dengan cermat saat mengeluarkan anggaran untuk pesta pernikahan.  Salah satunya untuk biaya menyewa gedung untuk melaksanakan pesta pernikahan.
            <br/>
            pesta pernikahan/resepsi. ini adalah moment seumur hidup untuk melaksanakan pesta pernikahan yang diimpikan oleh sebagian orang. Anda pastinya akan membuat rencana yang sematang mungkin untuk membuat pesta pernikahan yang diimpikan. Mempersiapkan acara pesta akan menghabiskan banyak tenaga dan biaya, maka anda harus dengan cermat saat mengeluarkan anggaran untuk pesta pernikahan.  Salah satunya untuk biaya menyewa gedung untuk melaksanakan pesta pernikahan.
            <br/>
            Banyak hal yang harus anda perhatikan sebelum menyewa gedung pernikahan. berikut hal-hal yang harus anda perhaikan sebelum menyewa gedung yang akan anda gunakan untuk melaksanakan pesta pernikahan
            <br/>
            1. Jumlah Undangan
            <br/>
            Wajib bagi anda untuk menghitung berapa jumlah tamu undangan yang akan anda undang di pesta pernikahan. Jangan sampai jumlah tamu undangan lebih banyak dari jumlah maksimal kapasitas gedung. Karena jika gedung tidak memenuhi  kapasitas tamu undangan akan membuat ruangan menjadi sempit dan para tamu undagan menjadi tidak nyaman.  Jadi, pilihlah gedung yang pas dengan jumlah tamu undangan, tidak kesempitan yang bisa menjadikan sesak dan tidak kelonggaran sehingga terlihat hanya sedikit tamu yang dating.
            <br/>
            2. Harga
            <br/>
            Anda wajib memperhatikan berapa harga sewa gedung yang akan anda gunakan untuk melaksanakan pesta pernikahan. Selain itu, anda perlu mencari tahu apakah biaya tersebut sudah termasuk biaya  charge lainnya ataukah belum. Jangan terburu-buru dalam menyewa gedung, anda perlu menyesuaikan dengan anggaran yang telah ditentukan. Pertimbangkan lagi dan jangan memaksakan jika biaya tersebut diluar anggaran karena masih banyak referensi gedung lainnya yang dapat anda pilih.
            <br/>
            3. Fasilitas
            <br/>
            Jangan ragu untuk datang langsung melihat gedung yang akan anda sewa, selain untuk melihat bentuk dan ukuran gedung secara langsung anda dapat mempertimbangkan dari segi fasilitas yang didapatkan. Penting dan perlu bagi anda untuk menanyakan fasilitas yang akan didapatkan seperti  seberapa luas ruangan, keamanan, area parkir, fasilitas lainnya seperi listrik dan air. Sehingga anda akan mendapatkan informasi secara lengkap sebelum menyewa gedung.
            <br/>
            4. Lokasi
            <br/>
            Salah satu pertimbangan memilih gedung yaitu dengan menentukan lokasi gedung yang mudah dijangkau, baik dapat dijangkau oleh kelurga besar ataupun para tamu undangan. Anda dapat mempertimbangkan lokasi dengan melihat bagaimana akses transportasi, peta lokasi yang jelas, mudah dicari tamu baik satu wilayah ataupun dari luar wilayah anda.
            <br/>
            5. Booking
            <br/>
            Apakah anda sudah cocok dengan gedung, fasilitas, dan lokasinya? Jika anda sudah sesuai dengan semuanya dan sudah berdiskusi dengan seluruh anggota keluarga segera booking untuk acara pesta. Anda bisa memberikan DP atau melunasi pembayaran terlebih dahulu untuk menentukan tanggal dan waktu kapan anda akan menggunakan gedung yang disewa.
            <br/>
            Sebelum acara pelaksanaan pernikahan sebaiknya satu minggu sebelumnya ada perlu mengecek kembali gedung tersebut untuk melaksanakan technical meeting langsung dengan vendor yang terkait dengan cara pesta. Hal ini dilakukan untuk mengetahuai dengan jelas bagaimana konsep acaranya baik dari susunan acara, dekorasi, catering, dan lain sebagainya.
            <br/>
            Jadi, perlu bagi anda untuk mempertimbangkan baik-baik sebelum menyewa gedung yang akan anda gunakan. Anda bisa membandingkan gedung satu dengan gedung lainnya baik dari segi hargadan fasilitasnya, sehingga anda memperoleh banyak referensi dan menemukan gedung yang tepat. Semoga tips ini membantu dan mempermudah anda memilih gedung yang tepat untuk proses pelaksanaan pernikahan anda.
            <br/>
            </p>',
            'gambar' => 'blog_4.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('blogs')->insert([
            'id_user' => '1',
            'judul' => 'Tetap Menyenangkan Meski Hemat Di Budget Berbulan Madu',
            'deskripsi' => '<p>Berbulan madu dengan pasangan adalah salah satu moment yang diinginkan oleh pasangan pengantin. Moment ini merupakan salah satu cara yang dilakukan oleh kedua pasangan untuk menikmati liburan berdua setelah menjadi pengantin baru. Tujuan berbulan madu dapat kamu tentukan berdua dengan pasangan, dengan mendiskusikan tujuan wisata yang akan dikunjungi akan lebih mempermudah kalian untuk menentukan tempat yang sesuai. Maka dalam hal ini kamu dan pasangan haruslah merencanakan bulan madu dengan matang dan sebaik mungkin agar dapat menikmati moment bulan madu yang menyenangkan dan mengesankan.
            <br/>
            Setelah kamu merencanakan kemana tujuan bulan madu, maka selanjutnya pastilah kamu harus merencanakan penginapan, tempat yang akan kamu kunjungi, hingga kuliner khas yang harus dinikmati bersama pasangan. semua itu pastinya harus direncanakan dan dianggarkan sebaik mungkin agar tidak mempengaruhi budget bulan madu yang telah dipersiapkan. Berikut ini tips yang bisa digunakan agar kamu dan pasangan mempertimbangkan beberapa hal agar budget yang telah disiapkan tidak membengkak berlebihan
            <br/>
            Membuat Rencana Pengeluaran Bulan Madu
            <br/>
            Penting bagi kamu dan pasangan untuk membuat prioritas pengeluaran selama berbulan madu di tempat yang akan dikunjungi. Ada baiknya jika kamu membuat dan menentukan berapa jumlah uang yang akan dikeluarkan selama berbulan madu berdua dengan pasangan. Dengan kamu mengetahui berapa jumlah uang akan dikeluarkan selama bulan madu maka kamu akan mudah untuk menentukan jenis trasportasi yang akan digunakan, penginapan, lokasi-lokasi yang akan dikunjungi, penginapan, dan lain sebagainya. Tentukan anggaran dan perkirakan berapa kira-kira budget yang akan dikeluarkan untuk rencana perjalanan di tempat wisata tersebut.
            <br/>
            Memilih Untuk Manfaatkan Paket yang Ditawarkan
            <br/>
            Biasanya ada beberapa hotel atau tempat wisata yang menawarkan beberapa paket wisata yang dapat kamu manfaatkan. Biasanya untuk tempat hotel memberikan banyak paket yang ditawarkan mulai dari tambahan akses fasilitas ke beberapa tempat wisata tertentu, tambahan fasilitas hotel seperti makan siang ataupun makan malam. Kamu dapat mencari beberapa informasi dengan baik dan teliti agar dapat menemukan tempat berbulan madu yang sesuai dengan keinginan. Temukan berbagai penawaran yang menarik hingga menguntungkan buat kamu karena ini juga dapat menghemat biaya anggaran berbulan madu kamu nantinya.
            <br/>
            Memilih Ke Tempat Yang Dekat
            <br/>
            Banyak sebagian pasangan pengantin hanya menginginkan pergi ke tempat atau tujuan wisata saja yang dipilih. Ada beberapa hal yang perlu untuk kamu ketahui bahwa saat berbulan madu justru bukan tempat yang kamu kunjungi yang lebih diprioritaskan, tetapi lebih ke moment yang dapat kalian nikmati berdua. Maka untuk membuat rencana berbulan madu kamu tidak harus memaksa pergi ke tempat yang jauh ataupun mahal, kamu bisa memilih ke tempat yang dekat, menginap di hotel berbintang dan menikmati aktifitas di beberapa tempat wisata yang ada di sana. Dengan begitu kamu juga dapat menikmati moment berharga yang tak terlupakan dengan pasangan. yang perlu kamu ingat bahwa berbulan madu yaitu menikmati masa menjadi pengantin baru dengan berlibur bersama pasangan dan menikmati moment-momentyang tak terlupakan bersama.
            <br/>
            Melakukan Pemesanan Lebih Awal
            <br/>
            Merencanakan bulan madu biasanya kamu akan membuatnya di awal bersamaan dengan merencanakan persiapan pernikahan. Hal ini kamu lakukan agar setelah acara pesta pernikahan tidak perlu lagi untuk memikirkan rencana tujuan mana yang akan menjadi tempat berbulan madu. Jika kamu telah memutuskan kemana tujuan bulan madu kamu sebaiknya kamu segera melakukan pemesanan baik untuk tiket pesawat ataupun penginapan. Dengan begitu kamu juga akan mendapatkan banyak keuntungan jika menyiapkannya di awal salah satunya besar kemungkinan untuk memperoleh harga terbaik yang ditawarkan. Kamu bisa memesannya beberapa bulan sebelum berangkat, agar terhindar juga dari beberapa resiko lainnya seperti kehabisan tiket ataupun tiket yang terlalu mahal.
            <br/>
            Tidak Memilih Pergi Di Musim Liburan
            <br/>
            Memilih melakukan bulan madu setelah pernikahan ada baiknya jika kamu memikirkan waktu yang tepat sebelum berangkat, salah satunya kamu dapat menghindari musim liburan jika ingin berlibur dengan senang dan nyaman. Musim liburan akan mengakibatkan tingginya harga tiket pesawat, penginapan ataupun tempat-tempat wisata lainnya. Selain itu, kamu juga akan merasa kurang nyaman saat berlibur di saat musim liburan karena banyak tempat wisata yang dapat mengakibatkan antrian panjang serta keramaian beberapa tempat sehingga dapat mengganggu suasana romantis liburan kamu dan pasangan. Maka sebaiknya carilah waktu yang tepat agar kamu dapat meminimalisir pengeluaran dan juga mendapatkan suasana yang tenang untuk menikmati bulan madu yang romantis.
            <br/>
            Itulah beberapa tips untuk kamu yang ingin menghemat budget pengeluaran untuk berbulan madu. Tidak harus mewah ataupun ket tempat tujuan yang jauh, yang terpenting yaitu kalian mendapatkan moment menyenangkan dan tidak terlupakan berdua dengan pasangan.</p>',
            'gambar' => 'blog_5.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('blogs')->insert([
            'id_user' => '1',
            'judul' => 'WO Harus Menjadikan Klien Adalah Keluarga',
            'deskripsi' => '<p>Menikah merupakan berpadunya dua insan dalam ikatan suami istri dan dua keluarga yang melingkupi menjadi saudara. Momen ini menjadi sangat penting dalam kehidupan manusia. Karena momen ini menjadi titik awal dalam memulai keluarga baru, maka pelaksanaannya juga harus dipersiapkan dan diselenggarakan dengan sebaik-baiknya.
            <br/>
            Wedding Organizer (WO) merupakan pihak yang menentukan kesan yang dipancarkan dalam sebuah pesta/resepsi pernikahan. Kini sudah banyak pebisnis yang menjadikan momen pernikahan menjadi lading mereka dalam menuai rejeki. Salah satunya adalah Sekar Lestari. Menurut Rini, Sekar Lestari mulai melayani jasa WO sejak tahun 1999 dan didirikan oleh sang  kakak, Ria. Usaha keluarga ini berkembang dengan cukup baik.
            <br/>
            Rini merasa beruntung memiliki keluarga besar, karena selain ia banyak terlibat meng-organize pernikahan keluarga, ia juga banyak mendapat masukan seputar pesta pernikahan dari saudara-saudaranya. Disamping sebagai WO, Sekar Lestari juga memiliki sanggar. Dimana di dalamnya tersedia penyewaan peralatan dan kostum pesta. Ini menjadikan Sekar Lestari berbeda dengan WO lainnya, klien dapat memilih untuk memakai sanggar sehingga tak perlu mencari vendor lain.
            <br/>
            Sekar Lestari dipilih klien karena kualitas pelayanan dan harga yang bersahabat. Dalam satu bulan, Sekar menangani lebih kurang 10 event. Tak hanya wedding dan lamaran, peralatan pesta Sekar juga kerap disewa untuk keperluan khitanan. Untuk promo, Rini juga memperluas jangkauan iklannya ke media sosial dan tetap me-maintain hubungan baik dengan mantan klien sehingga mendapat rekomendasi dari mereka.
            <br/>
            Menjalani bisnis ini, menurut Rini lebih banyak sukanya ketimbang duka. Sebab ia jadi mengenal banyak orang-orang yang berkembang jadi akrab, bersahabat bahkan bersaudara. Nuansa silaturahim yang baik membuat bisnis ini semakin enjoy untuk digeluti. Dengan memperlakukan klien dengan penuh keakraban seperti keluarga, rejeki kerap terus dimudahkan oleh Tuhan.
            <br/>
            Untuk kedepannya, Rini berharap ia mampu mengelola lebih baik lagi WO ini bersama para saudaranya, lalu konsep pesta pernikahan diharap dapat lebih bagus dan kreatif lagi. Begitu pun soal persaingan antar vendor sebaiknya dapat berlangsung sehat.
            <br/>
            IG : @rinislc
            <br/>
            Rini : 085779074407</p>',
            'gambar' => 'blog_5z.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
