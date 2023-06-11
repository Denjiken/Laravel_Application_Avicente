<!DOCTYPE html>
<html>
<head>
    <title>Update Activity</title>
    <link rel="stylesheet" href="/css/update.css">
</head>
<body>
    
    <!-- Update Activity Form -->
    <h2>Update Activity</h2>
    <a href="{{ route('dashboard') }}"><button>Go to Dashboard Page</button></a><br><br>

    <form method="POST" action="{{ route('update') }}">
        @csrf
        <label for="activity_id">Activity ID:</label>
        <input type="number" name="activity_id" value="{{ $activity_id }}" required><br><br>

        <label for="activity_name">Activity:</label>
        <input type="text" name="activity_name" value="{{ $activity_name }}" required><br><br>

        <label for="activity_date">Date:</label>
        <input type="date" name="activity_date" value="{{ $activity_date }}" required><br><br>

        <label for="activity_description">Description:</label>
        <textarea name="activity_description" required>{{ $activity_description }}</textarea><br><br>

        <label for="category_id">Category ID:</label>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->category_id }}" @if($category->category_id === $selected_category_id) selected @endif>{{ $category->study_area }}</option>
            @endforeach
        </select><br><br>

        <input type="submit" name="update_activity" value="Update Activity">
    </form><br><br>
</body>
</html>
