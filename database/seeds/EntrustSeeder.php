<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\User;
use App\Fasilitas;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $penyedia = new Role();
      $penyedia->name = "penyedia";
      $penyedia->display_name = "Penyedia";
      $penyedia->save();

      $pembimbing = new Role();
      $pembimbing->name = "pembimbing";
      $pembimbing->display_name = "Pembimbing";
      $pembimbing->save();

      $pelajar = new Role();
      $pelajar->name = "pelajar";
      $pelajar->display_name = "Pelajar";
      $pelajar->save();

      $user = new User();
      $user->name = "Penyedia";
      $user->email = "penyedia@localhost";
      $user->password = bcrypt('penyedia');
      $user->telepon = "08123456789";
      $user->foto = "user/foto/default.png";
      $user->save();
      $user->attachRole($penyedia);

      $user = new User();
      $user->name = "Pembimbing";
      $user->email = "pembimbing@localhost";
      $user->password = bcrypt('pembimbing');
      $user->telepon = "08123456789";
      $user->foto = "user/foto/default.png";
      $user->save();
      $user->attachRole($pembimbing);

      $user = new User();
      $user->name = "Pelajar";
      $user->email = "pelajar@localhost";
      $user->password = bcrypt('pelajar');
      $user->telepon = "08123456789";
      $user->foto = "user/foto/default.png";
      $user->save();
      $user->attachRole($pelajar);

      $fasilitas = ['WIFI', 'Meja & Kursi', 'AC', 'Konsumsi', 'Papan Tulis & ATK', 'Tempat Parkir', 'Proyektor'];

      foreach ($fasilitas as $key => $value) {
        $facility = new Fasilitas();
        $facility->nama = $value;
        $facility->save();
      }

    }
}
