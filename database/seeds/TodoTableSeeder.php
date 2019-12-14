<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bodys = ['JCBギフト券を換金する','ゼルダの伝説をする','conohaのVPSで立ち上げをする'];
        foreach ($bodys as $body) {
          DB::table('todos')->insert([
            'body' => $body
          ]);
        }
    }
}
