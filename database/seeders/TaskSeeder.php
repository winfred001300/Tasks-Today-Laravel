<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Complete Laravel Assignment',
                'status' => 'pending',
                'task_date' => '2026-11-09',
            ],
            [
                'title' => 'Study Database Migration',
                'status' => 'completed',
                'task_date' => '2026-11-08',
            ],
            [
                'title' => 'Review PHP Lessons',
                'status' => 'pending',
                'task_date' => '2026-11-10',
            ],
            [
                'title' => 'Prepare Project Documentation',
                'status' => 'in progress',
                'task_date' => '2026-11-11',
            ],
            [
                'title' => 'Practice Laravel Eloquent',
                'status' => 'completed',
                'task_date' => '2026-11-08',
            ],
            [
                'title' => 'Review HTML and CSS',
                'status' => 'pending',
                'task_date' => '2026-11-12',
            ],
            [
                'title' => 'Complete PHP Exercises',
                'status' => 'in progress',
                'task_date' => '2026-11-13',
            ],
            [
                'title' => 'Prepare for Programming Quiz',
                'status' => 'pending',
                'task_date' => '2026-11-14',
            ],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(
                ['title' => $task['title']],
                [
                    'status' => $task['status'],
                    'task_date' => $task['task_date'],
                ]
            );
        }
    }
}
