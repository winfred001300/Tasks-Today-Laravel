<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
</head>
<body>

    <h1>Developer Profile</h1>

    @if ($user)
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    @else
        <p>No user record found.</p>
    @endif

    <h2>Navigation</h2>

    <a href="/">Home</a> |
    <a href="/tasks">Task List</a> |
    <a href="/about">About</a>

</body>
</html>
