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
        $expense_report = factory(ExpenseReport::class)->create([
            'id' => 1,
            'title' => 'Vacaciones de verano'
        ]);
        $expense_report = factory(ExpenseReport::class)->create([
            'id' => 2,
            'title' => 'Viaje estados unidos'
        ]);
    }
}
