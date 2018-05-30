<?php

use Illuminate\Database\Seeder;

class VoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $vote = new \App\Vote([
        'title'   => 'Topic 1',
        'Description' => 'Topic 1 description'
      ]);

      $vote->save();
    }
}
