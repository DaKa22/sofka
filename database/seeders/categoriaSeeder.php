<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [1, 2, 3, 4, 5];
        foreach ($categorias as $categoria) {
            $nuevo = new Categoria();
            $nuevo->ronda = $categoria;
            $nuevo->save();
        }
    }
}
