<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([

            'imagePath' => 'https://autoleasing.fi/wp-content/uploads/2020/03/toyota-c-hr-white-1.jpg',
            'title' => ' Toyota C-HR 1.8. Hybrid Active',
            'description' => 'The Toyota C-HR offers the versatility to drive using either electric energy or a combination of petrol and electric power to fully optimise performance, meaning you can drive the way you always have.',
            'price' => 32204.36
        ]);
        $product->save();

        $product = new \App\Product([

            'imagePath' => 'https://images.toyota-europe.com/fi/configurationtype/visual-for-model-selector/product-token/2e37fd3b-7dcd-4fe2-94ec-8f0cfccff696/fallback/true/width/390/height/260/scale-mode/3/padding/0,0,-50,30/image-quality/75/exterior-4.png',
            'title' => 'Toyota Hilux 2.8 D4-D Diesel',
            'description' => 'The bold design of the Hilux delivers exceptional performance in the toughest environments. Hilux is your perfect partner in the most challenging environments. We all need a little adventure in our lives.',
            'price' => 39331.54
        ]);
        $product->save();        $product = new \App\Product([

            'imagePath' => 'https://kong-proxy-aws.toyota-europe.com/c1-images/resize/ccis/680x680/png/gb/product-token/17b81816-fb63-4284-9902-a5125d310247/vehicle/f0ae840a-2ba4-489c-a0de-6a4a61579fd4/padding/50,50,50,50/image-quality/70/day-exterior-4_2ra.webp',
            'title' => 'Toyota RAV4 2.5 Petrol Hybrid',
            'description' => 'Toyota full Hybrid Electric Vehicle offers the versatility to drive using either electric energy or a combination of petrol and electric. It has both a fuel tank and larger battery which is self charged by the vehicle when in use.',
            'price' => 46204.36
        ]);
        $product->save();        $product = new \App\Product([

            'imagePath' => 'https://images.toyota-europe.com/fi/configurationtype/visual-for-model-selector/product-token/0fe83f0f-c8c9-44a6-a8d9-2cf6654d0a62/fallback/true/width/390/height/260/scale-mode/3/padding/0,0,-50,30/image-quality/75/exterior-4.png',
            'title' => 'Toyota GR Supra 2.0 Twin-Scroll Turbo Petrol',
            'description' => 'TOYOTA GAZOO Racing has been instrumental in honing the GR Supra’s performance. By drawing on its international motorsport expertise, the GR Supra’s design achieves aerodynamic drag characteristics, as well as an ideal 50:50 front/rear weight balance.',
            'price' => 69988.69
        ]);
        $product->save();        $product = new \App\Product([

            'imagePath' => 'https://images.toyota-europe.com/fi/configurationtype/visual-for-model-selector/product-token/6272c6f6-6dfa-4142-b12e-cf1cf0780b83/fallback/true/width/390/height/260/scale-mode/3/padding/0,0,-50,30/image-quality/75/exterior-4.png',
            'title' => 'Toyota Yaris 1.5 Petrol (116hp) Hybrid Electric',
            'description' => 'Designed with passion, driven by obsession. The Yaris seizes the moment with expressive design that conveys its passion for life and love of movement. The rounded curves and glossy skin are re-invented throughout the design of the Yaris. Great car to get around places.',
            'price' => 23211.71
        ]);
        $product->save();        $product = new \App\Product([

            'imagePath' => 'https://kong-proxy-aws.toyota-europe.com/c1-images/resize/ccis/300x300/zip/gb/product-token/21cafc54-786a-4e35-aedd-2508146415ab/vehicle/737fb949-b013-4846-bdff-de088a6acf51/padding/50,50,50,50/image-quality/70/day-exterior-03_2sz.png',
            'title' => 'Toyota Corolla Hatchback 2.0 Hybrid (184hp) Hybrid Electric',
            'description' => 'The Corolla offers the versatility to drive using either electric energy or a combination of petrol and electric power. When the possibility of collision with a cyclist or pedestrian is detected, the driver is alerted with audio and visual warnings and if necessary, the brakes are engaged automatically.',
            'price' => 36808.25
        ]);
        $product->save();
    }
}
