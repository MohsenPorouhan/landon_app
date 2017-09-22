<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('clients')->insert(
                [
                    'title' => 'Dr',
                    'name' => 'Mehrdad',
                    'last_name' => 'Porouhan',
                    'address' => 'Mardavij',
                    'zip_code' => '09494',
                    'city' => 'Isfahan',
                    'state' => 'ISF',
                    'email' => 'Mehrdad@gmail.com'
                ]
        );
        
        DB::table('clients')->insert(
                [
                    'title' => 'Dr',
                    'name' => 'Mohsen',
                    'last_name' => 'PPP',
                    'address' => 'Haftdast',
                    'zip_code' => '09884',
                    'city' => 'Isfahan',
                    'state' => 'ISF',
                    'email' => 'Mohsen@gmail.com'
                ]
        );
    }

}
