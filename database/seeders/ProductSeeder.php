<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Product::truncate();

        $products = [
            [
                'name'=> 'Buncis',
                'detail' => 'Kondisi: Baru
                Berat Satuan: 250 g
                Kategori: Buncis
                Etalase: sayur mayur dan Bumbu dapur',
                'price' => 9500,
                'photo' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSw0ytbQXrmZFEwOUXh8obrGcV6b-Zp9CYoNe4HaaoC3MsQsOi7Ze2IuVnVB5UeXGv1rJBf_-tUKqe56Pod5cqh4pPZSkIo&usqp=CAE'
            ],
            [
                'name'=> 'Buncis',
                'detail' => 'Kondisi: Baru
                Berat Satuan: 250 g
                Kategori: Buncis
                Etalase: sayur mayur dan Bumbu dapur',
                'price' => 9500,
                'photo' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSw0ytbQXrmZFEwOUXh8obrGcV6b-Zp9CYoNe4HaaoC3MsQsOi7Ze2IuVnVB5UeXGv1rJBf_-tUKqe56Pod5cqh4pPZSkIo&usqp=CAE'
            ],
            [
                'name'=> 'Buncis',
                'detail' => 'Kondisi: Baru
                Berat Satuan: 250 g
                Kategori: Buncis
                Etalase: sayur mayur dan Bumbu dapur',
                'price' => 9500,
                'photo' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSw0ytbQXrmZFEwOUXh8obrGcV6b-Zp9CYoNe4HaaoC3MsQsOi7Ze2IuVnVB5UeXGv1rJBf_-tUKqe56Pod5cqh4pPZSkIo&usqp=CAE'
            ],
            [
                'name'=> 'Buncis',
                'detail' => 'Kondisi: Baru
                Berat Satuan: 250 g
                Kategori: Buncis
                Etalase: sayur mayur dan Bumbu dapur',
                'price' => 9500,
                'photo' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSw0ytbQXrmZFEwOUXh8obrGcV6b-Zp9CYoNe4HaaoC3MsQsOi7Ze2IuVnVB5UeXGv1rJBf_-tUKqe56Pod5cqh4pPZSkIo&usqp=CAE'
            ],
            [
                'name'=> 'Buncis',
                'detail' => 'Kondisi: Baru
                Berat Satuan: 250 g
                Kategori: Buncis
                Etalase: sayur mayur dan Bumbu dapur',
                'price' => 9500,
                'photo' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSw0ytbQXrmZFEwOUXh8obrGcV6b-Zp9CYoNe4HaaoC3MsQsOi7Ze2IuVnVB5UeXGv1rJBf_-tUKqe56Pod5cqh4pPZSkIo&usqp=CAE'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
