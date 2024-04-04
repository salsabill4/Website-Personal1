<?php

namespace App\Models;

class Post
{
    private static $news_posts =[
        [
            "title2" => "The Martech Summit",
            "slug" => "the-martech-summit",
            "date" => "17 Agustus 2024",
            "bodysmall" => "MarTech Summit akan diadakan di Jakarta untuk kedua kalinya dan mempertemukan beberapa perusahaan paling cerdas dan paling inovatif di industri ini. Dengan diskusi panel yang penuh wawasan, obrolan api unggun, presentasi utama yang menggugah pikiran, dan meja bundar interaktif, Anda akan meninggalkan pertemuan dengan dilengkapi dengan alat dan strategi terbaru untuk meningkatkan upaya pemasaran...",
            "body" => "MarTech Summit akan diadakan di Jakarta untuk kedua kalinya dan mempertemukan beberapa perusahaan paling cerdas dan paling inovatif di industri ini. Dengan diskusi panel yang penuh wawasan, obrolan api unggun, presentasi utama yang menggugah pikiran, dan meja bundar interaktif, Anda akan meninggalkan pertemuan dengan dilengkapi dengan alat dan strategi terbaru untuk meningkatkan upaya pemasaran Anda. KTT ini akan menyediakan platform unik bagi para Kepala Direktur CMO, dll. untuk belajar jaringan dan tetap menjadi yang terdepan dalam dunia MarTech yang terus berkembang.",
            "image" => "news1.jpg"
        ],
        [
            "title2" => "Paris 2023 Sporting Events",
            "slug" => "paris-2023-sporting-events",
            "date" => "23 Juni 2023",
            "bodysmall" => "Sektor konstruksi dan bangunan yang berkembang di Indonesia mendorong permintaan bahan baku seperti kayu, keramik, batu, beton, dan komponen plastik yang digunakan dalam aplikasi lantai. Sebagai bagian penting dari pertumbuhan dan perkembangan ini, Jakarta Surface Show yang berfokus pada industri lantai akan diadakan untuk pertama kalinya di JI Expo Convention Center dan Theater pada...",
            "body" => "Sektor konstruksi dan bangunan yang berkembang di Indonesia mendorong permintaan bahan baku seperti kayu, keramik, batu, beton, dan komponen plastik yang digunakan dalam aplikasi lantai. Sebagai bagian penting dari pertumbuhan dan perkembangan ini, Jakarta Surface Show yang berfokus pada industri lantai akan diadakan untuk pertama kalinya di JI Expo Convention Center dan Theater pada tanggal 6-8 Juni 2024. Jakarta Surface Show menawarkan platform B2B yang berharga untuk tetap mengetahui perkembangan industri terkini, jaringan dengan para profesional sektor dan mendapatkan informasi dan koneksi berharga untuk membantu menentukan posisi Anda dan strategi masa depan di industri ini.",
            "image" => "news2.jpg"
        ]
    ];

    public static function all()
    {
        return collect(self::$news_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}