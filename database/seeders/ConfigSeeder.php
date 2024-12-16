<?php

namespace Database\Seeders;
use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Config::insert([
            [
                'name' => 'logo',
                'value' => 'logo.png'
            ],
            [
                 'name' => 'blogname',
                'value' => 'StmikMardira'
            ],
            [
                 'name' => 'title',
                'value' => 'Welcome to Blog Home!'
            ],
            [
                'name' => 'caption',
               'value' => 'A Bootstrap 5 starter layout for your next blog homepage'
           ],
           [
            'name' => 'ads_widget',
           'value' => 'adsense 1'
            ],
            [
                'name' => 'ads_header',
               'value' => 'adsense 1'
           ],
           [
            'name' => 'ads_footer',
           'value' => 'adsense 3'
           ],
           [
            'name' => 'phone',
           'value' => '123456'
           ],
           [
            'name' => 'email',
           'value' => 'sat@gmail.com'
           ],
           [
            'name' => 'facebook',
           'value' => 'facebook.com'
           ],
           [
            'name' => 'instagram',
           'value' => 'instagram.com'
           ],
           [
            'name' => 'youtube',
           'value' => 'youtube.com'
           ],
           [
            'name' => 'footer',
           'value' => 'StmikMardira'
           ],
        ]);
    }
}
