<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::factory(10)->create()->each(
            function($employee){
                $account = Account::factory()->make();
                $employee->account()->save($account);
            }
        );
    }
}
