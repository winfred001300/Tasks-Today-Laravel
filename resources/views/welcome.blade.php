<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>

    <h1>Tasks for Today</h1>

    <h2>Today's Scheduled Tasks</h2>

    @if ($tasks->isEmpty())
        <p>No tasks scheduled for today.</p>
    @else
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Task ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Task Date</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->task_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <p><a href="/tasks">View All Tasks</a></p>
    <p><a href="/profile">My Profile</a></p>
    <p><a href="/about">About</a></p>

</body>
</html>
