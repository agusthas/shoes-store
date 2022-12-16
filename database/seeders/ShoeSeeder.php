<?php

namespace Database\Seeders;

use App\Models\Shoe;
use App\Models\Size;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ShoeSeeder extends Seeder
{
    static $shoesArr = [
        [
            'brand_id' => 1,
            'category_id' => 1,
            'style_id' => 1,
            'name' => 'NIKE AIR MORE UPTEMPO \'96 MEN\'S BASKETBALL SHOES - WHITE',
            'price' => 1601400,
            'description' => "<p>Nike Air More Uptempo '96 membawa bola basket klasik kembali ke jalanan. Kolase dari logo Swoosh tercinta di samping bantalan Max Air yang terlihat sama dengan desain chunky era untuk tampilan yang tidak akan pernah pudar.<br> </p><ul> <li>There may be a 1-2cm difference in measurements depending on the development and manufacturing process.</li> </ul> <p><strong>Color Disclaimer:</strong></p> <ul> <li>Actual colors may vary. This is due to the fact that every computer monitor has a different capability to display colors, we cannot guarantee that the color you see accurately portrays the true color of the product.</li> </ul><p></p>"
        ],
        [
            'brand_id' => 2,
            'category_id' => 1,
            'style_id' => 2,
            'name' => 'ADIDAS ULTRABOOST STRIPE MEN\'S RUNNING SHOES - BLACK',
            'price' => 3200000,
            "description" => '<p>Ultra-comfortable shoes made in part with Parley Ocean Plastic.</p><p>Sepatu ultra-nyaman yang dibuat sebagian dengan plastik lautan parley.</p>\n\n<p><strong>Size Disclaimer: </strong>There may be a 1-2cm difference in measurements depending on the development and manufacturing process.</p>\n<p><strong>Color Disclaimer: </strong>Actual colors may vary. This is due to the fact that every computer monitor has a different capability to display colors, we cannot guarantee that the color you see accurately portrays the true color of the product.</p>'
        ],
        [
            'brand_id' => 3,
            'category_id' => 1,
            'style_id' => 3,
            'name' => "UNDER ARMOUR ANSA FIX SLIDE MEN'S SANDALS - WHITE",
            'description' => "<p>Tali tetap dengan busa tambahan di bawahnya untuk fit yang sangat nyaman. Footbed EVA yang sangat nyaman menyediakan bantalan di bawah kaki. Eva Outsole memberikan daya tahan &amp; traksi yang hebat.<br></p>",
            'price' => 379000
        ],
        [
            'brand_id' => 2,
            'category_id' => 1,
            'style_id' => 4,
            'name' => "ADIDAS SUPERSTAR MEN'S SNEAKERS - MULTICOLOR",
            'description' => "<p>Bisa dibilang merupakan sneaker paling ikonik yang pernah dibuat adidas. Ikon yang terbentuk selama 50 tahun. Sepatu yang membentang dari generasi ke generasi, menembus batas dan dibentuk oleh pola pikir pemakainya dari lapangan hingga jalanan dan segala sesuatu di antaranya. Mari kita tentukan 50 tahun ke depan bersama.</p>\n\n<p><strong>Mengenai Ukuran: </strong>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</p>\n<p><strong>Mengenai Warna: </strong>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</p>",
            'price' => 1700000
        ],
        [
            'brand_id' => 4,
            'category_id' => 1,
            'style_id' => 2,
            'name' => "ASICS GEL SONOMA 15 50 MEN'S RUNNING SHOES - CREAM",
            'description' => "<p>Sneaker GEL-SONOMA 15-50 berakar pada konsep eksplorasi luar ruangan.\n\nGaya ini memanfaatkan inspirasi dari bagian atas spike cross-country 15-50. Awalnya dirancang untuk pelari kompetitif yang berlomba di berbagai medan. Kini, dimodifikasi untuk bermanuver di jalanan kota dan jalur pegunungan.\n\nSementara itu, perkakas menggunakan komponen dari dua sepatu trail GEL-SONOMA pertama. Dari lalu lintas pejalan kaki sehari-hari hingga mendaki lereng bukit berbatu, fitur-fitur ini menciptakan bantalan dan traksi canggih di berbagai lingkungan.<br></p><p>PILIH UKURAN ANDA</p>\n\n<p><strong>Mengenai Ukuran:</strong></p>\n<p>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</p>\n<p><strong></strong></p>\n<p></p><p></p>",
            'price' => 600000
        ],
        [
            'brand_id' => 5,
            'category_id' => 1,
            'style_id' => 4,
            'name' => "LACOSTE CHAYMON SYNTHETIC AND LEATHER MEN'S SNEAKERS SHOES- BLACK",
            'description' => "<p>With a distinguished slimline silhouette, the low-cut Chaymon has everyday street charm. The pared-back sneaker draws inspiration from traditional tennis apparel, and is modernised in easy-to-wear, timeless shades. Executed in luxurious Nappa leather, the uppers are further enhanced with court-influenced clean lines. Finished with an embroidered green crocodile on the quarter for signature appeal.\n\nSynthetic and leather uppers\n-Rubber outsole\n-Textile linings\n-Textile linings\n-Embroidered green crocodile on the quarter. Size Disclaimer:\n\nThere may be a 1-2cm difference in measurements depending on the development and manufacturing process.\n\nColor Disclaimer:\n\nActual colors may vary. This is due to the fact that every computer monitor has a different capability to display colors, we cannot guarantee that the color you see accurately portrays the true color of the product.\n<br></p><p>&nbsp;</p>\n \n <p><strong>Mengenai Ukuran:</strong></p>\n <ul>\n <li>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</li>\n </ul>\n <p><strong>Mengenai Warna: </strong></p>\n <ul>\n <li>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</li>\n </ul><p></p>",
            'price' => 1049300
        ],
        [
            'brand_id' => 6,
            'category_id' => 1,
            'style_id' => 4,
            'name' => "CONVERSE CHUCK 70 PAINT SPLATTER MEN'S SNEAKERS - GREY",
            'description' => "<p>IKON EKSPRESSIONIS.\n\nPercikan cat yang terinspirasi dari arsip menghadirkan ekspresi artistik pada pokok musim panas Anda, memercikkan tongue, bagian upper, dan midsole dalam warna pop. Dengan premium, kanvas atas dan plat nomor vintage, ditambah midsole karet mengkilap, egret-colored untuk tampilan ultra-craft. Chuck 70 berhasil membuatnya.\nSepatu kanvas premium low-top dengan cetakan cat splatter yang terinspirasi dari arsip di bagian upper dan midsole\nVintage license plate untuk tampilan klasik Chuck 70\nBumper uwinged-tongue yang membantu menjaganya tetap di tempatnya\nInsole OrthoLite membantu menjaganya tetap nyaman</p>\n\n<p><strong>Mengenai Ukuran: </strong>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</p>\n<p><strong>Mengenai Warna: </strong>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</p>",
            'price' => 719400
        ],
        [
            'brand_id' => 1,
            'category_id' => 1,
            'style_id' => 1,
            'name' => "NIKE ZOOM FREAK 4 MEN'S BASKETBALL SHOES - DK MARINA BLUE/BARELY VOLT-PINK GAZE",
            'description' => "<p>ZOOM FREAK 4<br>\n</p><p><strong>Mengenai Ukuran:</strong></p>\n<ul>\n<li>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</li>\n</ul>\n<p><strong>Mengenai Warna:</strong></p>\n<ul>\n<li>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</li>\n</ul><p></p>",
            'price' => 2079000
        ],
        [
            'brand_id' => 7,
            'category_id' => 1,
            'style_id' => 3,
            'name' => "CROCS CLASSIC WUTANG CLAN MEN'S SLIDE - YELLOW/BLACK",
            'description' => "<p>Termasuk pesona Jibbitzâ„¢ logo Crocs\nSangat ringan dan menyenangkan untuk dipakai\nMudah dibersihkan dan cepat kering\nAlas kaki busa Crosliteâ„¢ untuk kenyamanan yang tahan lama\nDapat disesuaikan dengan pesona Jibbitzâ„¢\nIkonik Crocs Comfortâ„¢: Ringan. Fleksibel. Kenyamanan 360 derajat<br>\n</p><p><strong>Mengenai Ukuran:</strong></p>\n<ul>\n<li>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</li>\n</ul>\n<p><strong>Mengenai Warna:</strong></p>\n<ul>\n<li>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</li>\n</ul><p></p>",
            'price' => 719200
        ],
        [
            'brand_id' => 2,
            'category_id' => 1,
            'style_id' => 2,
            'name' => "ADIDAS ULTRABOOST 22 MEN'S RUNNING SHOES - GREY THREE/GREY THREE/CORE BLACK",
            'description' => "<p>Dibuat untuk kenyamanan dan pengembalian energi tanpa akhir, sepatu lari pria ini membantu membuat setiap lari Anda menjadi yang terbaik. Mereka memiliki bagian atas adidas Primeknit+ seperti kaus kaki dan bantalan Boost yang responsif. Sistem Dorong Energi Linier meningkatkan kekakuan kaki bagian tengah dan depan untuk energi ekstra di setiap langkah. Produk ini dibuat dengan Primeblue, bahan daur ulang berkinerja tinggi yang dibuat sebagian dengan Parley Ocean Plastic.</p>\n\n<p><strong>Mengenai Ukuran: </strong>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</p>\n<p><strong>Mengenai Warna: </strong>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</p>",
            'price' => 3300000
        ],
        [
            'brand_id' => 8,
            'category_id' => 2,
            'style_id' => 4,
            'name' => "PUMA MAYZE BOOT X DUA LIPA WOMEN'S SNEAKERS - BLACK",
            'description' => "<p>MAYZE BOOT X DUA LIPA<br>\n</p><p>&nbsp;</p>\n<p>Mengenai Ukuran:</p>\n<p>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</p>\n<p>Mengenai Warna:</p>\n<p>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</p><p></p>",
            'price' => 2249100
        ],
        [
            'brand_id' => 1,
            'category_id' => 2,
            'style_id' => 1,
            'name' => "NIKE AIR JORDAN 3 RETRO WOMEN'S BASKETBALL SHOES - BLACK",
            'description' => "<p>Air Jordan 3 Retro for Women membawa kembali tampilan klasik dan nuansa sepatu game Michael Jordan yang terkenal. Dibuat dengan kulit gandum penuh, fitur detail cetak gajah ikonik, bantalan yang terlihat, dan retooled yang cocok untuk kenyamanan lengkap.<br>\n</p><p><strong>Mengenai Ukuran:</strong></p>\n<ul>\n<li>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</li>\n</ul>\n<p><strong>Mengenai Warna:</strong></p>\n<ul>\n<li>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</li>\n</ul><p></p>",
            'price' => 2889000
        ],
        [
            'brand_id' => 1,
            'category_id' => 2,
            'style_id' => 2,
            'name' => "NIKE WAFFLE ONE ESS WOMEN'S RUNNING SHOES - COCONUT MILK/TEAM GOLD-LEMON DROP",
            'description' => "<p>W NIKE WAFFLE ONE ESS<br>\n</p><p><strong>Mengenai Ukuran:</strong></p>\n<ul>\n<li>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</li>\n</ul>\n<p><strong>Mengenai Warna:</strong></p>\n<ul>\n<li>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</li>\n</ul><p></p>",
            'price' => 1499000
        ],
        [
            'brand_id' => 8,
            'category_id' => 2,
            'style_id' => 4,
            'name' => "PUMA MAYZE RAW WOMEN'S SNEAKERS - WHITE",
            'description' => "<p>Bersiaplah untuk menemukan gayamu di Mayze. Siluet yang menonjol ini mengambil inspirasi desain langsung dari jalanan, dengan sol karet bertumpuk untuk tampilan edgy dan berlapis. Eksekusi baru ini mengubah panel di bagian atas untuk tampilan baru yang segar dengan panel bagian belakang muncul di atas eyestay. Bagian atas adalah kulit dengan raw edge detail nubuck.<br>\n</p><p>&nbsp;</p>\n<p>Mengenai Ukuran:</p>\n<p>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</p>\n<p>Mengenai Warna:</p>\n<p>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</p><p></p>",
            'price' => 1799000
        ],
        [
            'brand_id' => 2,
            'category_id' => 2,
            'style_id' => 3,
            'name' => "ADIDAS ADILETTE WOMEN'S SANDALS - BLUE",
            'description' => "<p>Selipkan kaki Anda ke sandal slide wanita ini dan nikmati suasana santai. Cetakan tie-dye pada upper tekstil memberikan sentuhan gaya klasik. Kenakan dengan kaus kaki, kenakan saat berkeringat, kenakan di mana pun dan kapan pun. Dibuat sebagian dengan bahan daur ulang yang dihasilkan dari limbah produksi, mis. pemotongan sisa, dan limbah rumah tangga pasca-konsumen untuk menghindari dampak lingkungan yang lebih besar dari memproduksi konten perawan. 25% dari komponen yang digunakan untuk membuat bagian upper dibuat dengan minimal 50% kandungan daur ulang.</p>\n\n<p><strong>Mengenai Ukuran: </strong>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</p>\n<p><strong>Mengenai Warna: </strong>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</p>",
            'price' => 420000
        ],
        [
            'brand_id' => 1,
            'category_id' => 2,
            'style_id' => 1,
            'name' => "NIKE BLAZER LOW PLATFORM ESS WOMEN'S BASKETBALL SHOES - PINK",
            'description' => "<p>Dengan kesederhanaan dan kenyamanan klasik, ikon lingkaran yang ditinggikan ini memungkinkan Anda merasakan angin sepoi-sepoi. Midsole/outsole yang terangkat menambah tampilan percaya diri sementara upper berbahan tenun membuatnya tetap lapang sehingga Anda dapat menikmati sinar matahari.<br>\n</p><p><strong>Mengenai Ukuran:</strong></p>\n<ul>\n<li>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</li>\n</ul>\n<p><strong>Mengenai Warna:</strong></p>\n<ul>\n<li>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</li>\n</ul><p></p>",
            'price' => 827400
        ],
        [
            'brand_id' => 6,
            'category_id' => 2,
            'style_id' => 4,
            'name' => "CONVERSE CHUCK TAYLOR ALL STAR LIFT MILLENNIUM GLAM PLATFORM WOMEN'S SNEAKERS - NATURAL",
            'description' => "<p>TREN YANG POPULER.</p>\n<p>Berdiri tegak dan menonjol di platform terbaru Chucks. Kulit imitasi yang halus menghadirkan tampilan dan nuansa mewah pada ikon, di atasnya dengan tambalan mutiara untuk lampu kilat tambahan.</p> Sneaker platform high-top kulit imitasi, terbuat dari 60% poliuretan dan 40% poliesterSebuah platform midsole menaikkan ketinggian<br>Ankle patch Chuck Taylor berlapis mutiara<p></p>\n\n<p>Mengenai Ukuran: Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</p>\n<p>Mengenai Warna: Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</p>",
            'price' => 719400
        ],
        [
            'brand_id' => 2,
            'category_id' => 2,
            'style_id' => 2,
            'name' => "ADIDAS ULTRABOOST 22 WOMEN'S RUNNING SHOES - WONDER MAUVE/WONDER MAUVE/MAGIC MAUVE",
            'description' => "<p>Sedikit dorongan ekstra. Sepatu lari Ultraboost menghadirkan kenyamanan dan daya tanggap di setiap kecepatan dan jarak. Didesain khusus untuk wanita, versi ini hadir dengan lug ekstra pada outsole untuk transisi yang lebih terpusat. Bagian atas adidas PRIMEKNIT dilengkapi busa di sekitar tumit untuk mencegah lecet. Anda akan mengendarai midsole BOOST untuk energi tanpa akhir, dengan sistem Linear Energy Push untuk lebih responsif daripada sebelumnya.</p>\n<p>Bagian atas sepatu ini dibuat dengan benang berperforma tinggi yang mengandung setidaknya 50% Parley Ocean Plastic — sampah plastik yang dirancang ulang, dicegat di pulau-pulau terpencil, pantai, komunitas pesisir, dan garis pantai, mencegahnya mencemari laut kita. 50% benang lainnya adalah poliester daur ulang.</p>\n\n<p><strong>Mengenai Ukuran: </strong>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</p>\n<p><strong>Mengenai Warna: </strong>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</p>",
            'price' => 3300000
        ],
        [
            'brand_id' => 7,
            'category_id' => 2,
            'style_id' => 3,
            'name' => "CROCS WOMEN'S CLASSIC PLATFORM CLOG - BLACK",
            'description' => "<p>Kami menciptakan versi bergaya ikon klasik kami untuknya. Memperkenalkan platform klasik, menampilkan outsole yang meningkat dan berkontur yang mendukung bagian atas yang Anda kenal dan cintai dengan tampilan yang lebih ramping dan lebih ramping - tetapi masih ada lagi. Backstrap yang dapat disesuaikan juga menampung pesona Jibbitz â„¢, sehingga Anda dapat mempersonalisasikan penampilan Anda. Ketika Anda berminat untuk sedikit dorongan ekstra, gaya itu dengan platform klasik.</p>",
            'price' => 1199000
        ],
        [
            'brand_id' => 2,
            'category_id' => 2,
            'style_id' => 4,
            'name' => "ADIDAS SUPERSTAR WOMEN'S SNEAKERS - WHITE",
            'description' => "<p>Selama lebih dari 50 tahun, sepatu adidas Superstar telah menjadi ikon budaya yang telah teruji oleh waktu. Hal yang sama berlaku untuk Hello Kitty — kolaborator kami pada siluet klasik versi wanita ini. 3-Stripes bergerigi dan shell toe berpadu dengan gantungan kunci karakter silikon yang lucu dan grafis Hello Kitty di bagian upper. Dibuat dengan serangkaian bahan daur ulang, bagian upper ini memiliki setidaknya 50% bahan daur ulang. Produk ini merupakan salah satu solusi kami untuk membantu mengakhiri sampah plastik. ©2020 SANRIO CO., TLD.</p>\n\n<p><strong>Mengenai Ukuran: </strong>Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.</p>\n<p><strong>Mengenai Warna: </strong>Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.</p>",
            'price' => 1800000
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoes = collect(self::$shoesArr);
        $faker = Faker::create();
        $sizes = Size::all();

        $image_paths = [
            1 => [
                ['path' => "shoes/1671194027_1/1671194027_01-NIKDQ5014100-1.webp"],
                ['path' => "shoes/1671194027_1/1671194027_02-NIKE-F34KBNIK5-NIKDQ5014100-White.webp"],
                ['path' => "shoes/1671194027_1/1671194027_05-NIKE-F34KBNIK5-NIKDQ5014100-White.webp"],
                ['path' => "shoes/1671194027_1/1671194027_06-NIKE-F34KBNIK5-NIKDQ5014100-White.webp"],
                ['path' => "shoes/1671194027_1/1671194027_07-NIKE-F34KBNIK5-NIKDQ5014100-White.webp"]
            ],
            2 => [
                ['path' => "shoes/1671194174_2/1671194174_01-ADIDAS-F34RUADIA-ADIGV6674-Black.jpg"],
                ['path' => "shoes/1671194174_2/1671194174_03-ADIDAS-F34RUADIA-ADIGV6674-Black.jpg"],
                ['path' => "shoes/1671194174_2/1671194174_04-ADIDAS-F34RUADIA-ADIGV6674-Black.jpg"],
                ['path' => "shoes/1671194174_2/1671194174_05-ADIDAS-F34RUADIA-ADIGV6674-Black.jpg"]
            ],
            3 => [
                ['path' => "shoes/1671194252_3/1671194252_01-UNDER-ARMOUR-SPORT-FFSSDUASA-UAS23761-103-White.jpg"],
                ['path' => "shoes/1671194252_3/1671194252_03-UNDER-ARMOUR-SPORT-FFSSDUASA-UAS23761-103-White.jpg"],
                ['path' => "shoes/1671194252_3/1671194252_04-UNDER-ARMOUR-SPORT-FFSSDUASA-UAS23761-103-White.jpg"]
            ],
            4 => [
                ['path' => "shoes/1671194310_4/1671194310_03-ADIDAS-FFSSBADI5-ADIEG4958-Multicolor.webp"],
                ['path' => "shoes/1671194310_4/1671194310_01-ADIDAS-FFSSBADI5-ADIEG4958-Multicolor.webp"],
                ['path' => "shoes/1671194310_4/1671194310_04-ADIDAS-FFSSBADI5-ADIEG4958-Multicolor.webp"],
                ['path' => "shoes/1671194310_4/1671194310_05-ADIDAS-FFSSBADI5-ADIEG4958-Multicolor.webp"]
            ],
            5 => [
                ['path' => "shoes/1671194327_5/1671194327_01-ASICS-FFSSEASIA-ASI121A43840-Cream.webp"],
                ['path' => "shoes/1671194327_5/1671194327_03-ASICS-FFSSEASIA-ASI121A43840-Cream.webp"],
                ['path' => "shoes/1671194327_5/1671194327_04-ASICS-FFSSEASIA-ASI121A43840-Cream.webp"],
                ['path' => "shoes/1671194327_5/1671194327_05-ASICS-FFSSEASIA-ASI121A43840-Cream.webp"],
                ['path' => "shoes/1671194327_5/1671194327_06-ASICS-FFSSEASIA-ASI121A43840-Cream.webp"]
            ],
            6 => [
                ['path' => "shoes/1671194344_6/1671194344_01-LACOSTE-F32MHLACA-LAC41CMA0038-Black.webp"],
                ['path' => "shoes/1671194344_6/1671194344_02-LACOSTE-F32MHLACA-LAC41CMA0038-Black.webp"],
                ['path' => "shoes/1671194344_6/1671194344_03-LACOSTE-F32MHLACA-LAC41CMA0038-Black.webp"],
                ['path' => "shoes/1671194344_6/1671194344_04-LACOSTE-F32MHLACA-LAC41CMA0038-Black.webp"]
            ],
            7 => [
                ['path' => "shoes/1671194391_7/1671194391_04-CONVERSE-FFSSBCON0-CONA01172C-Grey.webp"],
                ['path' => "shoes/1671194391_7/1671194391_01-CONVERSE-FFSSBCON0-CONA01172C-Grey.webp"],
                ['path' => "shoes/1671194391_7/1671194391_03-CONVERSE-FFSSBCON0-CONA01172C-Grey.webp"]
            ],
            8 => [
                ['path' => "shoes/1671194409_8/1671194409_04-NIKE-F34KBNIK5-NIKDO9680400-Blue.jpg"],
                ['path' => "shoes/1671194409_8/1671194409_01-NIKE-F34KBNIK5-NIKDO9680400-Blue.jpg"],
                ['path' => "shoes/1671194409_8/1671194409_03-NIKE-F34KBNIK5-NIKDO9680400-Blue.jpg"],
                ['path' => "shoes/1671194409_8/1671194409_05-NIKE-F34KBNIK5-NIKDO9680400-Blue.webp"]
            ],
            9 => [
                ['path' => "shoes/1671194432_9/1671194432_01-CROCS-FFSSDCCRA-CCR207760731-Yellow.jpg"],
                ['path' => "shoes/1671194432_9/1671194432_03-CROCS-FFSSDCCRA-CCR207760731-Yellow.webp"],
                ['path' => "shoes/1671194432_9/1671194432_04-CROCS-FFSSDCCRA-CCR207760731-Yellow.webp"],
                ['path' => "shoes/1671194432_9/1671194432_05-CROCS-FFSSDCCRA-CCR207760731-Yellow.webp"],
                ['path' => "shoes/1671194432_9/1671194432_06-CROCS-FFSSDCCRA-CCR207760731-Yellow.jpg"]
            ],
            10 => [
                ['path' => "shoes/1671194455_10/1671194455_03-ADIDAS-F34RUADI5-ADIGX5460-GREY.jpg"],
                ['path' => "shoes/1671194455_10/1671194455_01-ADIDAS-F34RUADI5-ADIGX5460-GREY.jpg"],
                ['path' => "shoes/1671194455_10/1671194455_04-ADIDAS-F34RUADI5-ADIGX5460-GREY.jpg"],
                ['path' => "shoes/1671194455_10/1671194455_05-ADIDAS-F34RUADI5-ADIGX5460-GREY.jpg"]
            ],
            11 => [
                ['path' => "shoes/1671194471_11/1671194471_07-PUMA-FFSSEPMAA-PMA388611-01-Black.jpg"],
                ['path' => "shoes/1671194471_11/1671194471_01-PUMA-FFSSEPMAA-PMA388611-01-Black.jpg"],
                ['path' => "shoes/1671194471_11/1671194471_03-PUMA-FFSSEPMAA-PMA388611-01-Black.jpg"],
                ['path' => "shoes/1671194471_11/1671194471_04-PUMA-FFSSEPMAA-PMA388611-01-Black.jpg"],
                ['path' => "shoes/1671194471_11/1671194471_05-PUMA-FFSSEPMAA-PMA388611-01-Black.webp"]
            ],
            12 => [
                ['path' => "shoes/1671194489_12/1671194489_01-NIKE-F34KBNIK5-NIKCK9246067-Black.webp"],
                ['path' => "shoes/1671194489_12/1671194489_03-NIKE-F34KBNIK5-NIKCK9246067-Black.webp"],
                ['path' => "shoes/1671194489_12/1671194489_04-NIKE-F34KBNIK5-NIKCK9246067-Black.webp"],
                ['path' => "shoes/1671194489_12/1671194489_05-NIKE-F34KBNIK5-NIKCK9246067-Black.webp"]
            ],
            13 => [
                ['path' => "shoes/1671194506_13/1671194506_01-NIKE-FFSSBNIK5-NIKDM7604101-Cream.webp"],
                ['path' => "shoes/1671194506_13/1671194506_03-NIKE-FFSSBNIK5-NIKDM7604101-Cream.jpg"],
                ['path' => "shoes/1671194506_13/1671194506_04-NIKE-FFSSBNIK5-NIKDM7604101-Cream.webp"],
                ['path' => "shoes/1671194506_13/1671194506_05-NIKE-FFSSBNIK5-NIKDM7604101-Cream.webp"]
            ],
            14 => [
                ['path' => "shoes/1671194526_14/1671194526_01-PUMA-FFSSEPMAA-PMA383119-01-White.jpg"],
                ['path' => "shoes/1671194526_14/1671194526_03-PUMA-FFSSEPMAA-PMA383119-01-White.jpg"],
                ['path' => "shoes/1671194526_14/1671194526_04-PUMA-FFSSEPMAA-PMA383119-01-White.jpg"],
                ['path' => "shoes/1671194526_14/1671194526_05-PUMA-FFSSEPMAA-PMA383119-01-White.jpg"]
            ],
            15 => [
                ['path' => "shoes/1671194550_15/1671194550_01-ADIDAS-FFSSDADI5-ADIGY9482-BLUE.jpg"],
                ['path' => "shoes/1671194550_15/1671194550_03-ADIDAS-FFSSDADI5-ADIGY9482-BLUE.webp"],
                ['path' => "shoes/1671194550_15/1671194550_04-ADIDAS-FFSSDADI5-ADIGY9482-Blue.jpg"],
                ['path' => "shoes/1671194550_15/1671194550_05-ADIDAS-FFSSDADI5-ADIGY9482-BLUE.jpg"]
            ],
            16 => [
                ['path' => "shoes/1671194563_16/1671194563_01-NIKE-F34KBNIK5-NIKDN0744600-Pink.webp"],
                ['path' => "shoes/1671194563_16/1671194563_03-NIKE-F34KBNIK5-NIKDN0744600-Pink.webp"],
                ['path' => "shoes/1671194563_16/1671194563_04-NIKE-F34KBNIK5-NIKDN0744600-Pink.webp"],
                ['path' => "shoes/1671194563_16/1671194563_05-NIKE-F34KBNIK5-NIKDN0744600-Pink.webp"]
            ],
            17 => [
                ['path' => "shoes/1671194581_17/1671194581_01-CONVERSE-FFSSBCON0-CONA00902C-Natural.jpg"],
                ['path' => "shoes/1671194581_17/1671194581_04-CONVERSE-FFSSBCON0-CONA00902C-Natural.jpg"],
                ['path' => "shoes/1671194581_17/1671194581_05-CONVERSE-FFSSBCON0-CONA00902C-Natural.webp"]
            ],
            18 => [
                ['path' => "shoes/1671194599_18/1671194599_01-ADIGX5592-Pink.jpg"],
                ['path' => "shoes/1671194599_18/1671194599_03-ADIDAS-F34RUADI5-ADIGX5592-Pink.jpg"],
                ['path' => "shoes/1671194599_18/1671194599_04-ADIDAS-F34RUADI5-ADIGX5592-Pink.jpg"],
                ['path' => "shoes/1671194599_18/1671194599_05-ADIDAS-F34RUADI5-ADIGX5592-Pink.jpg"]
            ],
            19 => [
                ['path' => "shoes/1671194617_19/1671194617_01-CROCS-FFSSDCCRA-CCR206750001-Black.jpg"],
                ['path' => "shoes/1671194617_19/1671194617_02-CROCS-FFSSDCCRA-CCR206750001-Black.jpg"],
                ['path' => "shoes/1671194617_19/1671194617_03-CROCS-FFSSDCCRA-CCR206750001-Black.jpg"],
                ['path' => "shoes/1671194617_19/1671194617_05-CROCS-FFSSDCCRA-CCR206750001-Black.jpg"]
            ],
            20 => [
                ['path' => "shoes/1671194631_20/1671194631_01-ADIDAS-FFSSBADI5-ADIGW7168-White.jpg"],
                ['path' => "shoes/1671194631_20/1671194631_03-ADIDAS-FFSSBADI5-ADIGW7168-White.webp"],
                ['path' => "shoes/1671194631_20/1671194631_04-ADIDAS-FFSSBADI5-ADIGW7168-White.webp"],
                ['path' => "shoes/1671194631_20/1671194631_05-ADIDAS-FFSSBADI5-ADIGW7168-White.webp"]
            ]
        ];

        foreach ($shoes as $shoeData) {
            $shoeSizes = $sizes->shuffle()
                ->take($faker->numberBetween(1, 8))
                ->mapWithKeys(function ($size) use ($faker) {
                    return [$size->id => ['quantity' => $faker->numberBetween(0, 10)]];
                })
                ->all();

            $shoe = Shoe::query()
                ->create($shoeData);
            $shoe->sizes()->sync($shoeSizes);
            $shoe->images()->createMany($image_paths[$shoe->id]);
        }
    }
}
