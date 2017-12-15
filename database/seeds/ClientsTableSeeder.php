<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Client::create([
        'nombre' => 'Marco Araya',
        'rut' => '188878474',
        'direccion' => 'Pobl. Miramar, Niebla',
        'telefono' => '985993273',
        'correo' => 'ravield1192@gmail.com',
        'cause_id' => 1//no creo que esto este bien
      ]);

      Client::create([
        'nombre' => 'Francisco Gonzalez',
        'rut' => '187845444',
        'direccion' => 'Clemente Escobar 4010',
        'telefono' => '974332180',
        'correo' => 'fr4j4@gmail.com',
        'cause_id' => 2//no creo que esto este bien
      ]);
    }
}
