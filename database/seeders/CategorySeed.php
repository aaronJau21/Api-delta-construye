<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Category::create([
      'name' => 'Acero'
    ]);
    Category::create([
      'name' => 'Pinturas'
    ]);
    Category::create([
      'name' => 'Embolsados'
    ]);
    Category::create([
      'name' => 'Herramientas'
    ]);
    Category::create([
      'name' => 'Electricidad'
    ]);
    Category::create([
      'name' => 'Equipos Proteccion Personal'
    ]);
    Category::create([
      'name' => 'Tuberias, Valvulas y Conexiones'
    ]);
    Category::create([
      'name' => 'Iluminacion'
    ]);
    Category::create([
      'name' => 'Aditivos para construccion e impermeabilizantes'
    ]);
    Category::create([
      'name' => 'Baños y Cocinas'
    ]);
    Category::create([
      'name' => 'Ladrillos'
    ]);
    Category::create([
      'name' => 'Otros'
    ]);
    Category::create([
      'name' => 'Drywall'
    ]);
    Category::create([
      'name' => 'Higiene y Limpieza'
    ]);
    Category::create([
      'name' => 'Señalizacion'
    ]);
    Category::create([
      'name' => 'Acabados'
    ]);
    Category::create([
      'name' => 'Techos'
    ]);
    Category::create([
      'name' => 'Ferreteria'
    ]);
  }
}
