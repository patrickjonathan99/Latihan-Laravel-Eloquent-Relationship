<?php

namespace Database\Seeders;

use App\Models\BankType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        BankType::create([
            'bankname' => 'Bank Central Asia'
        ]);

        BankType::create([
            'bankname' => 'Bank Mandiri'
        ]);

        BankType::create([
            'bankname' => 'Bank Mega'
        ]);
    }
}
