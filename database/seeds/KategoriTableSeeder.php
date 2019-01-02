<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->truncate();
        $id = DB::table('kategori')->insertGetId(['kategori_adi' => 'Elektronik', 'slug' => 'elektronik']);

        DB::table('kategori')->insert(['kategori_adi' => 'Laptop', 'slug' => 'laptop', 'ust_id' => $id]);
        DB::table('kategori')->insert(['kategori_adi' => 'Bilgisayar', 'slug' => 'bilgisayar', 'ust_id' => $id]);
        DB::table('kategori')->insert(['kategori_adi' => 'Akıllı Telefon', 'slug' => 'akilli-telefon', 'ust_id' => $id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi' => 'Kitap', 'slug' => 'kitap']);
        DB::table('kategori')->insert(['kategori_adi' => 'Edebiyat', 'slug' => 'edebiyat', 'ust_id' => $id]);
        DB::table('kategori')->insert(['kategori_adi' => 'Roman', 'slug' => 'roman', 'ust_id' => $id]);
        DB::table('kategori')->insert(['kategori_adi' => 'Cocuk', 'slug' => 'cocuk', 'ust_id' => $id]);

        DB::table('kategori')->insert(['kategori_adi' => 'Dergi', 'slug' => 'dergi']);
        DB::table('kategori')->insert(['kategori_adi' => 'Kozmetik', 'slug' => 'kozmetik']);

    }
}
