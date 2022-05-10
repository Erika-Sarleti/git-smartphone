<?php

use Illuminate\Database\Seeder;

class SmartphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $smartphones = [
            [
                'brand' => 'iphone',
                'model' => 'x10',
                'year' => '2020'
            ],
            [
                'brand' => 'nokia',
                'model' => '3330',
                'year' => '1995'
            ],
            [
                'brand' => 'huawei',
                'model' => 'quellobello',
                'year' => '1565'
            ],
            [
                'brand' => 'samsung',
                'model' => 'galaxy',
                'year' => '2000'
            ],
            [
                'brand' => 'motorola',
                'model' => '200',
                'year' => '1998'
            ],
            [
                'brand' => 'unaltro',
                'model' => 'nono',
                'year' => '1250'
            ],
        ];
    }
}
