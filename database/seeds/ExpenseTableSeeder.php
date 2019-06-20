<?php
use App\Expense;
use Illuminate\Database\Seeder;

class ExpenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expenses')->truncate();

        $expense = factory(Expense::class)->create([
            'expense_report_id' => 1,
            'amount' => 100000,
            'description' => 'este es el gasto de transportes'
        ]);
        $expense = factory(Expense::class)->create([
            'expense_report_id' => 1,
            'amount' => 200000,
            'description' => 'gastos de hotel'
        ]);
        $expense = factory(Expense::class)->create([
            'expense_report_id' => 2,
            'amount' => 500000,
            'description' => 'gastos disney'
        ]);
    }
}
