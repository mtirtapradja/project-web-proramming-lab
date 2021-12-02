<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Xiaomi Pad 5',
            'price' => 4999999,
            'category_id' => 4,
            'description' => 'Layar besar berukuran 11 dengan desain tipis dan keren serta konfigurasi terbaik dijamin dapat memenuhi kebutuhan Anda untuk berbagai keperluan. Unit ini dilengkapi dengan Qualcomm® Snapdragon™ 860 dan layar dengan rasio refresh tinggi 120Hz yang akan membuat pengalaman Anda dalam menggunakannya menjadi super lancar. Kapasitas baterai 8720mAh (typ) yang ekstra besar menghilangkan rasa khawatir terkait dayat',
            'image_url' => 'product-images/xiaomi_mi_pad_5.jpg'
        ]);
        Product::create([
            'name' => 'Samsung S7',
            'price' => 7999999,
            'category_id' => 4,
            'description' => 'Flagship Premium Tablet',
            'image_url' => 'product-images/samsung_s7.jpg'
        ]);
        Product::create([
            'name' => 'Apple Macbook Pro 2021 14 inch',
            'price' => 31999000,
            'category_id' => 2,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_url' => 'product-images/macbook_pro.png'
        ]);
        Product::create([
            'name' => 'Lenovo Yoga Slim 7 Carbon',
            'price' => 22549000,
            'category_id' => 2,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_url' => 'product-images/lenovo_yoga_slim_7.jpg'
        ]);
        Product::create([
            'name' => 'Lenovo Legion 7',
            'price' => 25449000,
            'category_id' => 2,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'image_url' => 'product-images/lenovo_legion_7.jpg'
        ]);
        Product::create([
            'name' => 'iPhone 13 Pro Max',
            'price' => 25000000,
            'category_id' => 3,
            'description' => '
            iPhone 13. Sistem kamera ganda paling canggih yang pernah ada di iPhone. Chip A15 Bionic yang secepat kilat. Lompatan besar dalam kekuatan baterai. Desain kokoh. Dan layar Super Retina XDR yang lebih cerah.',
            'image_url' => 'product-images/iphone_13.png'
        ]);
        Product::create([
            'name' => 'Samsung S21 Ultra',
            'price' => 19999000,
            'category_id' => 3,
            'description' => 'Memperkenalkan Galaxy S21 Ultra 5G. Didesain dengan potongan kontur kamera yang unik untuk menciptakan revolusi dalam fotografi - memungkinkan Anda merekam video 8K sinematik dan mengambil foto epik, semuanya dalam sekali jalan. Dan dengan chip Galaxy tercepat, kaca terkuat, 5G, dan baterai sepanjang hari, Ultra dengan mudah memenuhi namanya.',
            'image_url' => 'product-images/samsung_s21.png'
        ]);
        Product::create([
            'name' => 'Xiaomi Mi 11T Pro',
            'price' => 6999999,
            'category_id' => 3,
            'description' => 'Xiaomi 11T Pro memberdayakan Anda untuk mengubah momen sinematik dalam kehidupan sehari-hari Anda menjadi Cinemagic. Ponsel ini menawarkan pengalaman sinematik terbaik dari fotografi yang memukau, visual yang hidup hingga videografi tingkat studio - sempurna untuk berbagi dan mengalami cerita yang penting bagi Anda.',
            'image_url' => 'product-images/xiaomi_mi_11.png'
        ]);
        Product::create([
            'name' => 'Huawei MatePad Pro',
            'price' => 8399000,
            'category_id' => 4,
            'description' => '
            Dengan rasio screen-to-body 90% dan bezel dilepas kembali ke 4,9 mm, HUAWEI FullView Display 10,8 inci menawarkan pengalaman visual yang luar biasa, baik Anda mencari inspirasi atau hanya menyelesaikan beberapa pekerjaan. Setiap detail gelap atau cerah terlihat jelas dengan gamut warna tingkat sinematik DCI-P3 dan kecerahan 540 nit. Disertifikasi oleh TÜV Rheinland, layar ini secara signifikan mengurangi cahaya biru untuk melindungi kesehatan mata Anda.',
            'image_url' => 'product-images/huawei_mate_pad.png'
        ]);
        Product::create([
            'name' => 'LED TV LG 65C9 OLED',
            'price' => 32990000,
            'category_id' => 1,
            'description' => '4K Cinema HDR LG menyajikan visi para pembuat film dengan dukungan berbagai format HDR. Nikmati pengalaman sinematik sesungguhnya di rumah dengan Dolby Vision™ dan Advance HDR dari Technicolor selain keberadaan HDR10 Pro dan HLG Pro.',
            'image_url' => 'product-images/lg_c65.png'
        ]);
    }
}
