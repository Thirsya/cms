<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Contacts')->insert([
            [
            'id' => '1',
            'foto' => 'images/char1.png',
            'deskripsi' => 'images/pop1.png',
            'class'=> 'firstpop'        
            ],
            [
            'id' => '2',
            'foto' => 'images/char2.png',
            'deskripsi' => 'images/popup2.png',
            'class'=> 'secondpop'    
            ],
            [
            'id' => '3',
            'foto' => 'images/char3.png',
            'deskripsi' => 'images/popup3.png',
            'class'=> 'thirdpop' 
            ],
            [
            'id' => '4',
            'foto' => 'images/char4.png',
            'deskripsi' => 'images/popup4.png',
            'class'=> 'fourthpop' 
            ],
            [
            'id' => '5',
            'foto' => 'images/char5.png',
            'deskripsi' => 'images/popup6.png',
            'class'=> 'fifthpop' 
            ],
            [
            'id' => '6',
            'foto' => 'images/char6.png',
            'deskripsi' => 'images/popup7.png',
            'class'=> 'sixthpop' 
            ]
        ]);
    }
}
