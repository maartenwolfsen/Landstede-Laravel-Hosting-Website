<?php

namespace Database\Seeders;

use Illuminate\Container\Container;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            $names = ['Jos', 'Thomas', 'Maarten', 'Arjan'];

            DB::table('contents')->insert([
                'title' => 'Wie is hier nou de hosting!?',
                'image' => 'https://media.tenor.com/jf2rMCZMYv0AAAAC/snackbar-new-kids.gif',
                'value' => $names[array_rand($names)]  . ' approves this message.'
            ]);
        }
    }
}
