    <?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->delete();
        DB::table('restaurants')->truncate();

        $ratingArray = array(
            "4",
            "4.2",
            "4.5",
            "4.7",
            "5",
        );
        $deliveryArray = array(
            "15",
            "20",
            "25",
            "30",
        );
        $priceArray = array(
            "10",
            "20",
            "25",
            "35",
            "45",
            "50",
        );

        for ($i = 1; $i < 26; $i++) {
            $restaurants = array(
                array(
                    'name' => 'The Halal Guys',
                    'description' => "Halal, Falafel, Meat, Sandwiches, Middle-east",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/1.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("The Halal Guys") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Kelsey\'s',
                    'description' => "Fries, Meat, Pasta, Burgers",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/2.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Kelsey's") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'North of Brooklyn',
                    'description' => "Salad, Pasta",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/3.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("North of Brooklyn") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Kinka Izayaka',
                    'description' => "Fingerfood, Noodles, Japanese, Sushi",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/4.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Kinka Izayaka") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Meet Fresh',
                    'description' => "Dessert, Healthy food, Asian",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/5.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Meet Fresh") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Thai One On',
                    'description' => "Vegan, Platters, Asian, Thai",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/6.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Thai One On") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Gyro Bar - Coxwell',
                    'description' => "Fries, Meat, Greek",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/7.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Gyro Bar - Coxwell") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'The Thai Authority',
                    'description' => "Curry, Asian, Thai",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/8.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("The Thai Authority") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Sina Persian Cuisine',
                    'description' => "Halal, Spicy, Mexican",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/9.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Sina Persian Cuisine") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Juicy dumpling',
                    'description' => "Chinese, Soup",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/10.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Juicy dumpling") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Fetch',
                    'description' => "Dessert, American ",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/11.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Fetch") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Salad Bar',
                    'description' => "Salad, Vegerarian, Canadian",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/12.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Salad Bar") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Bellafornia Restaurant & Bar',
                    'description' => "Meat, Salad, Maerican",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/13.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Bellafornia Restaurant & Bar") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Coco B',
                    'description' => "Healthy food, Sandwiches",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/14.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Coco B") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'HuaJis Rice Noodle',
                    'description' => "Fish, Soup, Noodles, Asian, Chinese",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/15.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("HuaJis Rice Noodle") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Liberty Shawarma - Spadina',
                    'description' => "Sandwiches, Middle-east",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/16.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Liberty Shawarma - Spadina") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Wing Machine - College',
                    'description' => "Fingerfood, Burgers, American",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/17.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Wing Machine - College") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Come See Me',
                    'description' => "Fries, Burgers, Canadian",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/18.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Come See Me") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Pizza Nova',
                    'description' => "Pizza, Salad, Sandwiches",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/19.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Pizza Nova") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
                array(
                    'name' => 'Matha Roti - East Indian',
                    'description' => "Curry, Meat, Indian",
                    'location_id' => $i,
                    'image' => "/assets/img/restaurants/demo/20.jpg",
                    "rating" => $ratingArray[array_rand($ratingArray)],
                    "delivery_time" => $deliveryArray[array_rand($deliveryArray)],
                    "price_range" => $priceArray[array_rand($priceArray)],
                    "is_pureveg" => "0",
                    "slug" => str_slug("Matha Roti - East Indian") . '-' . str_random(15),
                    "placeholder_image" => null,
                    "latitude" => "50.8686890",
                    "longitude" => "-110.4338489",
                    "certificate" => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'sku' => time() . str_random(10), 'restaurant_charges' => "3", 'delivery_charges' => "2.5",
                    "address" => "Trans-Canada Hwy Redcliff, AB T0J 2P0",
                    "pincode" => "V5K 1A8",
                    "landmark" => "Near AB HighWay",
                    "is_active" => 1,
                    "is_accepted" => 1, "is_featured" => $i > 0 && $i < 26 ? rand(0, 1) : 0,
                ),
            );
            DB::table('restaurants')->insert($restaurants);
        }

    }
}
