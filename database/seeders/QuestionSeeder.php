<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [              
                'question' => 'Investigar nuevos productos de alimentos.',
                'career_id' => '1',
            ],
            [              
                'question' => 'Interés por realizar estudios de impacto ambiental en diferentes zonas del país.',
                'career_id' => '1',
            ],
            [              
                'question' => 'Realizar estudios de planificación, organización y ejecución a partir de documentos que registren recursos en ambientes urbanos y rurales.',
                'career_id' => '1',
            ],
            [              
                'question' => 'Realizar estudios de planificación, organización y ejecución a partir de documentos que registren recursos en ambientes urbanos y rurales.',
                'career_id' => '1',
            ],
            [              
                'question' => 'Participar en una campaña de re-forestación.',
                'career_id' => '1',
            ],
            [              
                'question' => 'Tomar medidas de control de procesos contaminantes (proteger).',
                'career_id' => '1',
            ],
            [              
                'question' => 'Investigar el aprovechamiento y uso de terrenos.',
                'career_id' => '1',
            ],
            [              
                'question' => 'Utilizar medios gráficos para la expresión de ideas: planos, dibujos, animaciones digitales, así como recursos tridimensionales como: modelos, maquetas o prototipos.',
                'career_id' => '2',
            ],
            [              
                'question' => 'Diseñar objetos, puentes o edificios.',
                'career_id' => '2',
            ],
            [              
                'question' => 'Calcular la cantidad y la resistencia de materiales para la construcción de una vivienda, o un mueble.',
                'career_id' => '2',
            ],
            [              
                'question' => 'Dirigir la planeación de la política petrolera.',
                'career_id' => '2',
            ],
            [              
                'question' => 'optimizar técnicas de perforación y producción, exploración, cálculo de reservas y recuperación de petróleo',
                'career_id' => '2',
            ],
            [              
                'question' => 'Investigar sobre productos derivados del petróleo, sobre cultivos de bacterias para la cura de una enfermedad, o sobre una enzima que mejore un producto combustible.',
                'career_id' => '2',
            ],
            [              
                'question' => 'Trabajar en la industria química, produciendo plásticos(polímeros), o productos de consumo personal como cosméticos, cremas o perfumes.',
                'career_id' => '2',
            ],
            [              
                'question' => 'Inventar un nuevo material plástico más resistente.',
                'career_id' => '2',
            ],
            [              
                'question' => 'Desarrollar procesos de análisis químico y biológico.',
                'career_id' => '2',
            ],
            [              
                'question' => 'Imaginar e inventar una máquina que haga rendir el combustible de los vehículos en general.',
                'career_id' => '2',
            ],
            [              
                'question' => 'Conocer las necesidades de otras personas o culturas sobre nuevos productos.',
                'career_id' => '2',
            ],
            [              
                'question' => 'Trabajar en industrias de tipo automotriz, producción o manufactura.',
                'career_id' => '2',
            ],
            [              
                'question' => 'Estar enterado sobre inversiones financieras, rendimientos o la bolsa de valores, así como de tecnologías que hagan más eficiente el uso de esta información.',
                'career_id' => '3',
            ],
            [              
                'question' => 'Ser parte de cadenas de mercados y supermercados.',
                'career_id' => '3',
            ],
            [              
                'question' => 'Evaluar el desempeño financiero. Administrativo y operativo de una empresa.',
                'career_id' => '3',
            ],
            [              
                'question' => 'Trabajar en una oficina',
                'career_id' => '3',
            ],
            [              
                'question' => 'Estar enterado sobre inversiones financieras, rendimientos o la bolsa de valores, así como de tecnologías que hagan más eficiente el uso de esta información.',
                'career_id' => '3',
            ],
            [              
                'question' => 'Evaluar el desempeño financiero. Administrativo y operativo de una empresa.',
                'career_id' => '3',
            ],
            [              
                'question' => 'Estar involucrado en el diseño de software y robótica.',
                'career_id' => '4',
            ],
            [              
                'question' => 'Armar y desarmar objetos mecánicos como licuadoras o relojes para entender o imaginar su funcionamiento.',
                'career_id' => '4',
            ],
            [              
                'question' => 'desarrollar maquinaria para grandes empresas ',
                'career_id' => '4',
            ],
            [              
                'question' => 'Ser asesor en el uso de nuevas tecnologías de información (telecomunicaciones, redes y aplicaciones en internet).',
                'career_id' => '4',
            ],
            [              
                'question' => 'Seguir un curso sobre manejo operativo de un computador científico.',
                'career_id' => '4',
            ],
            [              
                'question' => 'Estudiar distintos lenguajes de programación',
                'career_id' => '4',
            ],
        ]);
    }
}
