<?php

use App\ExpenseReport;
use Illuminate\Database\Seeder;

class ExpenseReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expense_reports')->truncate();
        $users = factory(ExpenseReport::class, 2)->create();
    }
}
