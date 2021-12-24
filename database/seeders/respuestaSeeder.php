<?php

namespace Database\Seeders;

use App\Models\Respuesta;
use Illuminate\Database\Seeder;

class respuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $P1 = [
            [
                'nombre' => 'Una manera definida para escribir instrucciones claras para programar aplicaciones de alto nivel',
                'puntos' => 100,
                'correcta' => true,
                'preguntas_id' => 1
            ],
            [
                'nombre' => 'Una forma de diseñar código para la máquina',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 1
            ],
            [
                'nombre' => 'Lo relacionado con la codificación de páginas web y sitios interactivos',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 1
            ],
            [
                'nombre' => 'Una manera de comunicarse con el hardware',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 1
            ],
        ];
        $P2 = [
            [
                'nombre' => 'Es una declaración dentro del programa para definir un valor dinámico',
                'puntos' => 100,
                'correcta' => true,
                'preguntas_id' => 2
            ],
            [
                'nombre' => 'Es un mecanismo para consultar información',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 2
            ],
            [
                'nombre' => 'Es un elemento del programa que puede cambiar',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 2
            ],
            [
                'nombre' => 'Es un método de acceso a los datos',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 2
            ],
        ];
        $P3 = [
            [
                'nombre' => 'Un tipo determinado para crear objetos de ese mismo tipo',
                'puntos' => 100,
                'correcta' => true,
                'preguntas_id' => 3
            ],
            [
                'nombre' => 'Ninguna de las anteriores',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 3
            ],
            [
                'nombre' => 'Es una categoría del mismo tipo',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 3
            ],
            [
                'nombre' => 'Son varios objetos heredados',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 3
            ],
        ];
        $P4 = [
            [
                'nombre' => 'Un lenguaje que requiere pasar por un proceso de transformación a código de máquina',
                'puntos' => 100,
                'correcta' => true,
                'preguntas_id' => 4
            ],
            [
                'nombre' => 'Un lenguaje de máquina orientado al hardware',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 4
            ],
            [
                'nombre' => 'Un lenguaje de programación que transpira código nativo',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 4
            ],
            [
                'nombre' => 'Un lenguaje que requiere de un controlador específico para que pueda correr',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 4
            ],
        ];
        $P5 = [
            [
                'nombre' => 'Control para toma de decisiones de cómputo (if, else, switch, etcétera)',
                'puntos' => 100,
                'correcta' => true,
                'preguntas_id' => 5
            ],
            [
                'nombre' => 'Todo lo relacionado con flujos de intercambios lógicos',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 5
            ],
            [
                'nombre' => 'Interacciones para la gestión del flujo de trabajo',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 5
            ],
            [
                'nombre' => 'Condicionales y preguntar para tomar decisiones',
                'puntos' => 100,
                'correcta' => false,
                'preguntas_id' => 5
            ],
        ];
        $P6 = [
            [
                'nombre' => 'JavaScript',
                'puntos' => 200,
                'correcta' => true,
                'preguntas_id' => 6
            ],
            [
                'nombre' => 'HTML',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 6
            ],
            [
                'nombre' => 'CSS',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 6
            ],
            [
                'nombre' => 'Java',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 6
            ],
        ];
        $P7 = [
            [
                'nombre' => 'Java',
                'puntos' => 200,
                'correcta' => true,
                'preguntas_id' => 7
            ],
            [
                'nombre' => 'CSS',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 7
            ],
            [
                'nombre' => 'HTML',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 7
            ],
            [
                'nombre' => 'Python',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 7
            ],
        ];
        $P8 = [
            [
                'nombre' => 'Cliente-Servidor',
                'puntos' => 200,
                'correcta' => true,
                'preguntas_id' => 8
            ],
            [
                'nombre' => 'Servidor-Cliente',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 8
            ],
            [
                'nombre' => 'Servidor',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 8
            ],
            [
                'nombre' => 'Cliente',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 8
            ],
        ];
        $P9 = [
            [
                'nombre' => 'Unidades de persistencias de datos',
                'puntos' => 200,
                'correcta' => true,
                'preguntas_id' => 9
            ],
            [
                'nombre' => 'Almacenamiento de celdas',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 9
            ],
            [
                'nombre' => 'Unidades constituidas por filas y columnas',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 9
            ],
            [
                'nombre' => 'Unidades de persistencias de objetos',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 9
            ],
        ];
        $P10 = [
            [
                'nombre' => 'Instrucciones lógicas con un propósito específico',
                'puntos' => 200,
                'correcta' => true,
                'preguntas_id' => 10
            ],
            [
                'nombre' => 'Código fuente',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 10
            ],
            [
                'nombre' => 'Una función matemática',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 10
            ],
            [
                'nombre' => 'Una estructura programada orientada a una sintaxis',
                'puntos' => 200,
                'correcta' => false,
                'preguntas_id' => 10
            ],
        ];
        $P11 = [
            [
                'nombre' => 'Programación orientada a objetos',
                'puntos' => 300,
                'correcta' => true,
                'preguntas_id' => 11
            ],
            [
                'nombre' => 'Programación orientada a clases',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 11
            ],
            [
                'nombre' => 'Programación orientada a atributos',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 11
            ],
            [
                'nombre' => 'Programación funcional',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 11
            ],
        ];
        $P12 = [
            [
                'nombre' => 'if',
                'puntos' => 300,
                'correcta' => true,
                'preguntas_id' => 12
            ],
            [
                'nombre' => 'for',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 12
            ],
            [
                'nombre' => 'while',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 12
            ],
            [
                'nombre' => 'else',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 12
            ],
        ];
        $P13 = [
            [
                'nombre' => 'foreach',
                'puntos' => 300,
                'correcta' => true,
                'preguntas_id' => 13
            ],
            [
                'nombre' => 'for',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 13
            ],
            [
                'nombre' => 'if-else',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 13
            ],
            [
                'nombre' => 'do-while',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 13
            ],
        ];
        $P14 = [
            [
                'nombre' => 'MySQL',
                'puntos' => 300,
                'correcta' => true,
                'preguntas_id' => 14
            ],
            [
                'nombre' => 'DataStorage',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 14
            ],
            [
                'nombre' => 'VBasic',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 14
            ],
            [
                'nombre' => 'Excel',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 14
            ],
        ];
        $P15 = [
            [
                'nombre' => 'Ubuntu',
                'puntos' => 300,
                'correcta' => true,
                'preguntas_id' => 15
            ],
            [
                'nombre' => 'Debian',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 15
            ],
            [
                'nombre' => 'Mac',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 15
            ],
            [
                'nombre' => 'Windows',
                'puntos' => 300,
                'correcta' => false,
                'preguntas_id' => 15
            ],
        ];
        $P16 = [
            [
                'nombre' => 'Relacional',
                'puntos' => 400,
                'correcta' => true,
                'preguntas_id' => 16
            ],
            [
                'nombre' => 'No-Relacional',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 16
            ],
            [
                'nombre' => 'Ninguna de las anteriores',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 16
            ],
            [
                'nombre' => 'Semi-Relacional',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 16
            ],
        ];
        $P17 = [
            [
                'nombre' => 'Compilado',
                'puntos' => 400,
                'correcta' => true,
                'preguntas_id' => 17
            ],
            [
                'nombre' => 'No Compilado',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 17
            ],
            [
                'nombre' => 'Interpretados',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 17
            ],
            [
                'nombre' => 'No Interpretados',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 17
            ],
        ];
        $P18 = [
            [
                'nombre' => 'Programacion Orientada a Objetos',
                'puntos' => 400,
                'correcta' => true,
                'preguntas_id' => 18
            ],
            [
                'nombre' => 'Programacion Estructural',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 18
            ],
            [
                'nombre' => 'Programacion Funcional',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 18
            ],
            [
                'nombre' => 'Programacion orientada a Etiquetas',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 18
            ],
        ];
        $P19 = [
            [
                'nombre' => 'No-Relacional',
                'puntos' => 400,
                'correcta' => true,
                'preguntas_id' => 19
            ],
            [
                'nombre' => 'Relacional',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 19
            ],
            [
                'nombre' => 'Semi-Relacional',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 19
            ],
            [
                'nombre' => 'Ninguna de las anteriores',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 19
            ],
        ];
        $P20 = [
            [
                'nombre' => 'Netbeans',
                'puntos' => 400,
                'correcta' => true,
                'preguntas_id' => 20
            ],
            [
                'nombre' => 'Visual Studio Code',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 20
            ],
            [
                'nombre' => 'Notepad',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 20
            ],
            [
                'nombre' => 'World',
                'puntos' => 400,
                'correcta' => false,
                'preguntas_id' => 20
            ],
        ];
        $P21 = [
            [
                'nombre' => 'JavaScript',
                'puntos' => 500,
                'correcta' => true,
                'preguntas_id' => 21
            ],
            [
                'nombre' => 'Java',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 21
            ],
            [
                'nombre' => 'Python',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 21
            ],
            [
                'nombre' => 'PHP',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 21
            ],
        ];
        $P22 = [
            [
                'nombre' => 'Entidades de datos relacionadas',
                'puntos' => 500,
                'correcta' => true,
                'preguntas_id' => 22
            ],
            [
                'nombre' => 'Clases relacionadas',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 22
            ],
            [
                'nombre' => 'Objetos relacionados',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 22
            ],
            [
                'nombre' => 'Entidades de clases relacionados',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 22
            ],
        ];
        $P23 = [
            [
                'nombre' => 'Polimorfismo',
                'puntos' => 500,
                'correcta' => true,
                'preguntas_id' => 23
            ],
            [
                'nombre' => 'Objetos',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 23
            ],
            [
                'nombre' => 'Modelamiento',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 23
            ],
            [
                'nombre' => 'Encapsulacion',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 23
            ],
        ];
        $P24 = [
            [
                'nombre' => 'Extender o heredar',
                'puntos' => 500,
                'correcta' => true,
                'preguntas_id' => 24
            ],
            [
                'nombre' => 'crear una instancia',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 24
            ],
            [
                'nombre' => 'Cambiar los estados a la interna de la clase',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 24
            ],
            [
                'nombre' => 'Usar los metodos de la clase',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 24
            ],
        ];
        $P25 = [
            [
                'nombre' => 'No requiere tener una instancia para poder acceder',
                'puntos' => 500,
                'correcta' => true,
                'preguntas_id' => 25
            ],
            [
                'nombre' => 'Comparte el mismo espacio de memoria',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 25
            ],
            [
                'nombre' => 'Depende de que la clase sea final',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 25
            ],
            [
                'nombre' => 'No necesita nombrar la clase',
                'puntos' => 500,
                'correcta' => false,
                'preguntas_id' => 25
            ],
        ];
        $union=array_merge($P1,$P2,$P3,$P4,$P5,$P6,$P7,$P8,$P9,$P10,$P11,$P12,$P13,$P14,$P15,$P16,$P17,$P18,$P19,$P20,$P21,$P22,$P23,$P24,$P25);
        foreach ($union as $value) {
            $nuevo=new Respuesta();
            $nuevo->nombre=$value['nombre'];
            $nuevo->puntos=$value['puntos'];
            $nuevo->correcta=$value['correcta'];
            $nuevo->preguntas_id=$value['preguntas_id'];
            $nuevo->save();
        }
    }
}
