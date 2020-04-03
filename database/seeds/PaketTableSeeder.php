<?php

use App\Paket;
use Illuminate\Database\Seeder;

class PaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paket= new Paket;
        $paket->title="Paket Wisata 1 Day Tour";
        $paket->deskripsi="Paket Wisata 1 Day Tour Deskripsi";
        $paket->overview="Paket Wisata 1 Day Tour Overview";
        $paket->ketentuan="Paket Wisata 1 Day Tour Ketentuan";
        $paket->kategori="Private";
        $paket->save();

        $paket= new Paket;
        $paket->title="5 Day Honeymoon";
        $paket->deskripsi="Paket Wisata 5 Day Honeymoon Deskripsi";
        $paket->overview="Paket Wisata 5 Day Honeymoon Overview";
        $paket->ketentuan="Paket Wisata 5 Day Honeymoon Ketentuan";
        $paket->kategori="honeymoon";
        $paket->save();
    }
}
