<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Moun Dot',
            'restaurant' => '(khmer Restaurant)',
            'photo' => 'https://www.google.com/search?q=khmer+food&sxsrf=ALeKk01Di4H4QMRb_IVQQ0ZDOO8AI-G7Ew:1619490866408&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjLnrzOsZ3wAhVJIbcAHes3BRMQ_AUoAXoECAIQAw&biw=1366&bih=657#imgrc=sFbEWc-0BU2_9M',
            'price' => 6.50
         ]);
         DB::table('products')->insert([
            'name' => 'Fish Amok',
            'restaurant' => '(khmer Restaurant)',
            'photo' => 'https://www.google.com/search?q=khmer+food&sxsrf=ALeKk01Di4H4QMRb_IVQQ0ZDOO8AI-G7Ew:1619490866408&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjLnrzOsZ3wAhVJIbcAHes3BRMQ_AUoAXoECAIQAw&biw=1366&bih=657#imgrc=sFbEWc-0BU2_9M',
            'price' => 4.50
        ]);
         DB::table('products')->insert([
            'name' => 'Khor Ko',
            'restaurant' => '(khmer Restaurant)',
            'photo' => 'https://www.google.com/search?q=khmer+food&sxsrf=ALeKk01Di4H4QMRb_IVQQ0ZDOO8AI-G7Ew:1619490866408&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjLnrzOsZ3wAhVJIbcAHes3BRMQ_AUoAXoECAIQAw&biw=1366&bih=657#imgrc=sFbEWc-0BU2_9M',
            'price' => 3.50
        ]);
         DB::table('products')->insert([
             'name' => 'Bro Hok Ktis',
             'restaurant' => '(khmer Restaurant)',
             'photo' => 'https://www.google.com/search?q=khmer+food&sxsrf=ALeKk01Di4H4QMRb_IVQQ0ZDOO8AI-G7Ew:1619490866408&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjLnrzOsZ3wAhVJIbcAHes3BRMQ_AUoAXoECAIQAw&biw=1366&bih=657#imgrc=sFbEWc-0BU2_9M',
             'price' => 5.00
         ]);
         DB::table('products')->insert([
             'name' => 'Mi Kola',
             'restaurant' => '(khmer Restaurant)',
             'photo' => 'https://www.google.com/search?q=khmer+food&sxsrf=ALeKk01Di4H4QMRb_IVQQ0ZDOO8AI-G7Ew:1619490866408&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjLnrzOsZ3wAhVJIbcAHes3BRMQ_AUoAXoECAIQAw&biw=1366&bih=657#imgrc=sFbEWc-0BU2_9M',
             'price' => 4.50
         ]);
         DB::table('products')->insert([
             'name' => 'Terk Kreng',
             'restaurant' => '(khmer Restaurant)',
             'photo' => 'https://www.google.com/search?q=khmer+food&sxsrf=ALeKk01Di4H4QMRb_IVQQ0ZDOO8AI-G7Ew:1619490866408&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjLnrzOsZ3wAhVJIbcAHes3BRMQ_AUoAXoECAIQAw&biw=1366&bih=657#imgrc=sFbEWc-0BU2_9M',
             'price' => 3.00
         ]);
    }
}
