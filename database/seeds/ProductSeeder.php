<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Fasttrack Watch',
                'details' => 'Digital watches with internet support',
                'description' => 'Highly quality watches',
                'brand' => 'Fastrack',
                'price' => '1000',
                'shipping_cost' => '12.50',
                'image_path' => 'storage/fasttrack.png'

            ],
            [
                'name' => 'Rado Watch',
                'details' => 'Digital watches with internet support',
                'description' => 'Highly quality watches',
                'brand' => 'Rado',
                'price' => '1000',
                'shipping_cost' => '12.50',
                'image_path' => 'storage/rado.png'

            ],
            [
                'name' => 'Cascio Watch',
                'details' => 'Digital watches with internet support',
                'description' => 'Highly quality watches',
                'brand' => 'Cascio',
                'price' => '1000',
                'shipping_cost' => '12.50',
                'image_path' => 'storage/casio.pngv'

            ],
        ]; 
        foreach($product as $key=>$value){
            Product::create($value);
        }
    }
}
