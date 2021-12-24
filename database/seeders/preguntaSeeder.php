<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Seeder;

class preguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preguntas_Cat1 = [
            [
                'nombre' => '¿Qué entendemos como lenguaje de programación?',
                'categorias_id' => 1,
            ],
            [
                'nombre' => '¿Qué es una variable?',
                'categorias_id' => 1,
            ],
            [
                'nombre' => 'Una clase es...',
                'categorias_id' => 1,
            ],
            [
                'nombre' => 'Cuando hablamos de un lenguaje compilado nos referimos a...',
                'categorias_id' => 1,
            ],
            [
                'nombre' => 'Un ciclo de control es...',
                'categorias_id' => 1,
            ],
        ];
        $preguntas_Cat2 = [
            [
                'nombre' => '¿Qué lenguajes usamos más al lado del navegador?',
                'categorias_id' => 2,
            ],
            [
                'nombre' => '¿Qué lenguajes usamos más del lado del servidor?',
                'categorias_id' => 2,
            ],
            [
                'nombre' => 'El servidor es un proveedor de información y el cliente es un consumidor de información, nos referimos a...',
                'categorias_id' => 2,
            ],
            [
                'nombre' => 'Cuando hablamos de tablas en el contexto de base de datos nos referimos a...',
                'categorias_id' => 2,
            ],
            [
                'nombre' => '¿Qué es un algoritmo?',
                'categorias_id' => 2,
            ],
        ];
        $preguntas_Cat3 = [
            [
                'nombre' => '¿Dentro de las bases de la programación tenemos los siguientes paradigmas:?',
                'categorias_id' => 3,
            ],
            [
                'nombre' => 'Para evaluar una expresión booleana utilizo un...',
                'categorias_id' => 3,
            ],
            [
                'nombre' => 'Si quiero iterar o recorrer una colección de objetos, ¿qué puedo usar?',
                'categorias_id' => 3,
            ],
            [
                'nombre' => 'Uno de los motores de bases de datos más conocidos es...',
                'categorias_id' => 3,
            ],
            [
                'nombre' => 'Los sistemas operativos que son libres y que están basados en Unix son:',
                'categorias_id' => 3,
            ],
        ];
        $preguntas_Cat4 = [
            [
                'nombre' => 'MySQL es una base de datos tipo...',
                'categorias_id' => 4,
            ],
            [
                'nombre' => 'Cuando hablamos de java, hablamos de un lenguaje...',
                'categorias_id' => 4,
            ],
            [
                'nombre' => 'Con java ¿que paradigmas puede trabajar?',
                'categorias_id' => 4,
            ],
            [
                'nombre' => 'MongoDB es una base de datos de tipo...',
                'categorias_id' => 4,
            ],
            [
                'nombre' => 'Un IDE conocido es...',
                'categorias_id' => 4,
            ],
        ];
        $preguntas_Cat5 = [
            [
                'nombre' => 'Nodejs es un framework o tecnologia para...',
                'categorias_id' => 5,
            ],
            [
                'nombre' => 'Un Modelo Entidad Relacion (MER) nos referimos a...',
                'categorias_id' => 5,
            ],
            [
                'nombre' => 'Dos pilares de POO',
                'categorias_id' => 5,
            ],
            [
                'nombre' => 'Una clase final no permite...',
                'categorias_id' => 5,
            ],
            [
                'nombre' => 'Una caracteristica de los metodos estaticos es...',
                'categorias_id' => 5,
            ],
        ];
        $union = array_merge($preguntas_Cat1, $preguntas_Cat2, $preguntas_Cat3, $preguntas_Cat4, $preguntas_Cat5);
        foreach ($union as $value) {
            $nuevo = new Pregunta();
            $nuevo->nombre = $value['nombre'];
            $nuevo->categorias_id = $value['categorias_id'];
            $nuevo->save();
        }
    }
}
