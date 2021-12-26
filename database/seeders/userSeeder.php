<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Users = [
            [
                'nombre' => 'David Bermeo',
                'puntos' => 480
            ],
            [
                'nombre' => 'Karol Martinez',
                'puntos' => 499
            ],
            [
                'nombre' => 'Geralt de Rivia',
                'puntos' => 350
            ],
            [
                'nombre' => 'Django',
                'puntos' => 300
            ],
            [
                'nombre' => 'Lokillo',
                'puntos' => 200
            ],
            [
                'nombre' => 'Simon Bolivar',
                'puntos' => 150
            ],
            [
                'nombre' => 'Mio Cid Campeador',
                'puntos' => 149
            ],
        ];
        foreach ($Users as  $User) {
            $nuevo = new User();
            $nuevo->nombre = $User['nombre'];
            $nuevo->puntos = $User['puntos'];
            $nuevo->termino=true;
            $nuevo->save();
        }
    }
}
