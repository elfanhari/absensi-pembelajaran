<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      collect([
        [
          'user_id' => 1,
          'name' => 'Erik Subianto',
          'nip' => '512431209874356980',
          'nuptk' => '1568729304658239',
          'jk' => 'L',
          'telepon' => '082481793489',
          'alamat' => 'Langensari, Banjar',
        ],
        [
          'user_id' => 2,
          'name' => 'Elfin Pratama',
          'nip' => '431209874356980765',
          'nuptk' => '9821476053629418',
          'jk' => 'L',
          'telepon' => '082480143489',
          'alamat' => 'Lakbok, Ciamis',
        ],
      ])->each(function($admin){
        Admin::create($admin);
      });

      // collect([
      //   [
      //     [
      //       'user_id' => 1,
      //       'name' => 'Erik Subianto',
      //       'nip' => '512431209874356980',
      //       'nuptk' => '1568729304658239',
      //       'jk' => 'L',
      //       'telepon' => '082481793489',
      //       'alamat' => 'Langensari, Banjar',
      //     ],
      //   ],
      // ])->each(function($admin){
      //   Admin::create($admin);
      // });
    }
}
