<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //them size
        foreach (['34','35','36','37','38','39','40','41','42',]as $item){
            ProductSize::query()->create([
                'name'=>$item
            ]);
        }



        // bang products
        for($i = 0; $i < 100; $i++){
            $name = fake()->text(50);
            Product::query()->create([
                'category_id' => rand(12, 16),
                'name'=> $name,
                'slug'=>Str::slug($name).Str::random(8),
                'img_thumb'=>'https://product.hstatic.net/200000858039/product/giay-adidas-super-star-black-den__1__252ecd0f49644351997d84fc12c58abf.png',
                'price'=>100000,
                'price_sale'=>50000,
                'description'=>fake()->text(100),
                'quantity'=>rand(1, 10),
            ]);
        }
    }
}
