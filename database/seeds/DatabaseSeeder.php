<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;
use App\ProductUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Product::truncate();
        ProductUser::truncate();
        $user = factory(User::class)->create();
        $product = factory(Product::class)->create();
        $product->productUsers()->create([
            'user_id' => $user->id,
        ]);
    }
}
