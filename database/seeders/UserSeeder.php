<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_users = [
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();

        try {

            $superAdmin = User::create(array_merge([
                'name' => 'superAdmin',
                'email' => 'superAdmin@gmail.com',
            ], $default_users));

            $adminAplikasi = User::create(array_merge([
                'name' => 'adminAplikasi',
                'email' => 'admin@gmail.com',
            ], $default_users));

            $teknisi = User::create(array_merge([
                'name' => 'teknisi',
                'email' => 'teknisi@gmail.com',
            ], $default_users));
            
            $customer = User::create(array_merge([
                'name' => 'customer',
                'email' => 'customer@gmail.com',
            ], $default_users));
            
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
