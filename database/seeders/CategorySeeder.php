<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>[
                'uz'=>'Stol',
                'ru'=>'Стол'
            ]
        ]);
        Category::create([
            'name'=>[
                'uz'=>'Divan',
                'ru'=>'Диван'
            ]
        ]);
        Category::create([
            'name'=>[
                'uz'=>'Kreslo',
                'ru'=>'кресло'
            ]
        ]);
        Category::create([
            'name'=>[
                'uz'=>'Kreslo',
                'ru'=>'кресло'
            ]
        ]);
        Category::create([
            'name'=>[
                'uz'=>'Yotoq',
                'ru'=>'Кровать'
            ]
        ]);
        Category::create([
            'name'=>[
                'uz'=>'Stul',
                'ru'=>'Стул'
            ]
        ]);
    }
}
