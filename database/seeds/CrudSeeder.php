<?php

use Illuminate\Database\Seeder;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('todo')->insert([
        'jam'=> "05-00 - 09-00",
        'nama_kegiatan'=> "Ibadah, sarapan, nonton film"
      ]);
    }
}
