<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestDataSelect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:data-select';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // вывести всех
        //     $employees = Employee::all();
        //   //  var_dump($employees);
        //     foreach ($employees as $employee) {
        //         # code...
        //         echo $employee->first_name . ' ' . $employee->id . PHP_EOL;
        //     }

        //Вывод по одного (по ключу)
        // $employees = Employee::find(2);
        // echo $employees['first_name'] . ' ' . $employees['id'] . PHP_EOL;


        // // вывести всех удовлетворяющих условию (where, orWhere)
        // $employees = Employee::where('first_name', '=', 'John')->orWhere('age', '>', 27)->get();
        // //  var_dump($employees);
        // foreach ($employees as $employee) {
        //     # code...
        //     echo $employee['first_name'] . ' ' . $employee['id'] . PHP_EOL;
        // }

        // вывести первую запись удовлетворяющую условиям (where, orWhere)
        // $employees = Employee::where('first_name', '=', 'John')->orWhere('age', '>', 27)->first();
        // //  var_dump($employees);
        // echo $employees['first_name'] . ' ' . $employees['id'] . PHP_EOL;

        //Вывести в отсортированном виде
        // $employees = Employee::orderBy('age', 'DESC')->skip(2)->limit(2)->get();
        // foreach ($employees as $employee) {
        //     # code...
        //     echo $employee->first_name . ' ' . $employee->id . ' age=' . $employee->age . PHP_EOL;
        // }
        // Количество повторяющихся имен
        // $employees = DB::table('employees')
        //     ->groupBy('first_name')
        //     ->select('first_name', DB::raw('count(1) as employee_total'))
        //     ->get();

        // foreach ($employees as $employee) {
        //     # code...
        //     echo $employee->first_name . ' ' . $employee->employee_total . PHP_EOL;
        // }

        // Вывод всех
        // $employees = DB::table('employees')
        //     ->select(DB::raw('count(1) as employee_total'))
        //     ->get();

        // foreach ($employees as $employee) {
        //     # code...
        //     echo $employee->employee_total . PHP_EOL;
        // }

        // вывести только уникальные имена
        $employees = Employee::distinct()->orderBy('first_name')->get(['first_name']);
        //  var_dump($employees);
        foreach ($employees as $employee) {
            # code...
            echo $employee->first_name . PHP_EOL;
        }

        return 0;
    }
}
