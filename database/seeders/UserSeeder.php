<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;
use App\Models\Admin;
use App\Models\AdminAplikasi;
use App\Models\Teknisi;
use App\Models\Customer;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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

            $roleSuperAdmin = Role::create(['name' => 'superAdmin']);
            $roleAdminAplikasi = Role::create(['name' => 'adminAplikasi']);
            $roleTeknisi = Role::create(['name' => 'teknisi']);
            $roleCustomer = Role::create(['name' => 'customer']);

            $superAdmin = User::create(array_merge([
                'name' => 'superAdmin',
                'email' => 'superAdmin@gmail.com',
            ], $default_users));

            Admin::create(array_merge([
                'name' => 'superAdmin',
                'email' => 'superAdmin@gmail.com',
                'user_id' => $superAdmin->id,
            ]));

            $adminAplikasi = User::create(array_merge([
                'name' => 'adminAplikasi',
                'email' => 'adminApp@gmail.com',
            ], $default_users));
            AdminAplikasi::create(array_merge([
                'name' => 'adminAplikasi',
                'email' => 'adminApp@gmail.com',
                'user_id' => 2,
            ]));

            $teknisi = User::create(array_merge([
                'name' => 'teknisi',
                'email' => 'teknisi@gmail.com',
            ], $default_users));
            Teknisi::create(array_merge([
                'name' => 'teknisi',
                'email' => 'teknisi@gmail.com',
                'user_id' => 3,
            ]));
            
            $customer = User::create(array_merge([
                'name' => 'customer',
                'email' => 'customer@gmail.com',
            ], $default_users));
            Customer::create(array_merge([
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'user_id' => 4,
            ]));
            
            $superAdmin->assignRole('superAdmin');
            $adminAplikasi->assignRole('adminAplikasi');
            $teknisi->assignRole('teknisi');
            $customer->assignRole('customer');

            DB::commit();
        } catch (\Throwable $th) {
            echo $th->getMessage();
            DB::rollBack();
        }
    }
}
