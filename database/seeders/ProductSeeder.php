<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        DB::table('products')->insert([
        [
            'name'=> 'LG mobile',
            'price' =>'100',
            'description' => 'Can make you very happy with technology',
            'category'=> 'mobile',
            'gallery'=> 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Flevant_en%2Fsmartphones&psig=AOvVaw0U6Y-pDvqqpNPPWheJeOhG&ust=1645934786384000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCOi8goq_nPYCFQAAAAAdAAAAABAJ'
        ],
        [
            'name'=> 'Sony mobile',
            'price' =>'200',
            'description' => 'Can make you very happy with technology',
            'category'=> 'mobile',
            'gallery'=> 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Flevant_en%2Fsmartphones&psig=AOvVaw0U6Y-pDvqqpNPPWheJeOhG&ust=1645934786384000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCOi8goq_nPYCFQAAAAAdAAAAABAJ'
        ],
        [
            'name'=> 'Oppo mobile',
            'price' =>'300',
            'description' => 'Can make you very happy with technology',
            'category'=> 'mobile',
            'gallery'=> 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Flevant_en%2Fsmartphones&psig=AOvVaw0U6Y-pDvqqpNPPWheJeOhG&ust=1645934786384000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCOi8goq_nPYCFQAAAAAdAAAAABAJ'
        ],
        [
            'name'=> 'Samsung mobile',
            'price' =>'400',
            'description' => 'Can make you very happy with technology',
            'category'=> 'mobile',
            'gallery'=> 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Flevant_en%2Fsmartphones&psig=AOvVaw0U6Y-pDvqqpNPPWheJeOhG&ust=1645934786384000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCOi8goq_nPYCFQAAAAAdAAAAABAJ'
        ]
        ]);
    }
}
