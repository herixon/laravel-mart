<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     */
    public function run()
    {
                 $major_category_names = [
                'メーカー', '状態', 'ディスプレイサイズ'
         ];
 
         $maker_categories = [
            '富士通', '東芝(Dynabook社)', 'Sony(vaio社）', 'Panasonic','NEC','Mouse','iiyama',
            'Lenovo', 'HP', 'ASUS', 'DELL','ACER',
            'MSI', 'Razer', 'Apple', 'その他'
         ];
 
         $computer_categories = [
            '未チェック','動作保証',  'OS確認済' , 'Bios確認済み','通電確認済み','Biosパスロック','不動'
         ];
 
         $display_categories = [
            '10インチ以下','10~12.5インチ','13~13.9インチ','14~14.9インチ','15~15.9インチ','16インチ以上'
         ];
 
         foreach ($major_category_names as $major_category_name) {
             if ($major_category_name == 'メーカー') {
                 foreach ($maker_categories as $maker_category) {
                     Category::create([
                         'name' => $maker_category,
                         'description' => $maker_category,
                         'major_category_name' => $major_category_name
                     ]);
                 }
             }
 
             if ($major_category_name == '状態') {
                 foreach ($computer_categories as $computer_category) {
                     Category::create([
                         'name' => $computer_category,
                         'description' => $computer_category,
                         'major_category_name' => $major_category_name
                     ]);
                 }
             }
 
             if ($major_category_name == 'ディスプレイサイズ') {
                 foreach ($display_categories as $display_category) {
                     Category::create([
                         'name' => $display_category,
                         'description' => $display_category,
                         'major_category_name' => $major_category_name
                     ]);
                 }
             }
         }

    }
}
