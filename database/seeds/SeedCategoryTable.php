<?php

use Illuminate\Database\Seeder;

class SeedCategoryTable extends Seeder
{

    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert(
            array(
                array(
                    'name' => 'Online Exam Theory',
                    'slug' => str_slug('Online Exam Theory'),
                    'description'  => '',
                    'visibility' => 'visible',
                    'status' => 'active',
                    'image' => '',
                    'availability' => 'available'
                ),
                array(
                    'name' => 'Rockschool Exam (AU & NZ)',
                    'slug' => str_slug('Rockschool Exam (AU & NZ)'),
                    'description'  => '',
                    'visibility' => 'visible',
                    'status' => 'active',
                    'image' => '',
                    'availability' => 'available'
                )
            ));
    }
}