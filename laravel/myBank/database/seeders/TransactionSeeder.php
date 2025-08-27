<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::all()->each(function ($account) {

            Transaction::factory(5)->create([
                'account_id' => $account->id,
                'created_by' => $account->user_id
            ]);
        });
    }
}
