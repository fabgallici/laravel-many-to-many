<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Employee;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 30)
            ->create()
            ->each(function($task) {
                $employees = Employee::inRandomOrder() -> take(rand(0,4)) -> get(); 
                $task-> employees() ->attach($employees);
            });

    }
}
