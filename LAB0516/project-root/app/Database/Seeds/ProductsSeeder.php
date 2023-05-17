<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $arr = array();
        
        for ($i=0; $i < 100; $i++) { 
            $arr[$i] = ['title' => $faker -> title(), 'amount' => $faker -> numberBetween(1, 20)];
        }

        $this -> db -> table('Products') -> insertBatch($arr);
    }
}
