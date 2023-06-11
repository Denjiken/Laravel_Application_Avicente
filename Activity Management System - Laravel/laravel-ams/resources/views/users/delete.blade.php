<!DOCTYPE html>
<html>
<head>
    <title>Delete Activity</title>
    <link rel="stylesheet" href="/css/delete.css">
</head>
<body>

    <!-- Delete Activity Form -->
    <h2>Delete Activity</h2>
    <form method="POST" action="{{ route('delete-activity') }}">
    @csrf
        <label for="activity_id">Activity ID:</label>
        <input type="number" name="activity_id" required><br><br>

        <input type="submit" name="delete_activity" value="Delete Activity">
    </form><br><br>
    <a href="{{ route('home') }}"><button>Go to Dashboard Page</button></a>
    
</body>
</html>
