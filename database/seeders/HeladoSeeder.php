<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Helado;

class HeladoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Helado::create([
            'nombre' => 'Helado Rojo',
            'sabor' => 'Fresa',
            'precio' => 15
        ]);

        Helado::create([
            'nombre' => 'Helado Rosa',
            'sabor' => 'Sandia',
            'precio' => 18
        ]);

        Helado::create([
            'nombre' => 'Helado Verde',
            'sabor' => 'Limon',
            'precio' => 12
        ]);

        Helado::create([
            'nombre' => 'Helado Amarilla',
            'sabor' => 'Vainilla',
            'precio' => 20
        ]);

        Helado::create([
            'nombre' => 'Helado Blanca',
            'sabor' => 'Coco',
            'precio' => 11
        ]);

        Helado::create([
            'nombre' => 'Helado Negro',
            'sabor' => 'Espacial',
            'precio' => 12
        ]);

        Helado::create([
            'nombre' => 'Helado Azul',
            'sabor' => 'Mora',
            'precio' => 13
        ]);
    }
}
