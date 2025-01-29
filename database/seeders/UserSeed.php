<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::create([
      'name' => 'Aaron Jauregui',
      'email' => 'admin@admin.com',
      'role' => 'admin',
      'status' => true,
      'password' => Hash::make('123456789')
    ]);
  }
}
