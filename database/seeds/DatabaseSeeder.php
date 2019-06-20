<?php

use Illuminate\Database\Seeder;
use App\ExpenseReport;
use App\Expense;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ExpenseReportTableSeeder::class);
         $this->call(ExpenseTableSeeder::class);
    }
}
