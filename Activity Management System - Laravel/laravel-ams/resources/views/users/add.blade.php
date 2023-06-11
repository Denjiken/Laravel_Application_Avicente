<!DOCTYPE html>
<html>
<head>
    <title>Add Activity</title>
    <link rel="stylesheet" href="/css/add.css">
</head>
<body>
    <!-- Add Activity Form -->
    <h2>Add Activity</h2>
    
    <form action="{{ route('add') }}" method="POST">
        @csrf
        <label for="student_name">Student Name:</label>
        <input type="text" name="student_name" required><br><br>

        <label for="student_email">Student Email:</label>
        <input type="text" name="student_email" required><br><br>

        <label for="student_year">Student Year:</label>
        <input type="text" name="student_year" required><br><br>

        <label for="activity_name">Activity Name:</label>
        <input type="text" name="activity_name" required><br><br>

        <label for="activity_date">Date:</label>
        <input type="date" name="activity_date" required><br><br>

        <label for="activity_description">Description:</label>
        <input type="text" name="activity_description" required><br><br>

        <label for="instructor_name">Instructor Name:</label>
        <input type="text" name="instructor_name" required><br><br>

        <label for="instructor_email">Instructor Email:</label>
        <input type="text" name="instructor_email" required><br><br>

        <label for="study_area">Study Area:</label>
        <input type="text" name="study_area" required><br><br>

        <input type="submit" name="add_activity" value="Add Activity">
    </form><br><br>
    <a href="{{ route('dashboard') }}"><button>Go to Dashboard Page</button></a>
</body>
</html>
