<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Page</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <!-- Sign Up Form -->
    <div class="signup-container">
        @if(Session::has('warning'))
        <p style="color: red;">{{ Session::get('warning') }}</p>
        @elseif(Session::has('successMessage'))
        <p style="color: green;">{{ Session::get('successMessage') }}</p>
        @endif
        <h1>Sign Up</h1>
        <p>Fill out the form below.</p>
        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <input type="text" placeholder="Username" id="username" name="username" required>
            <input type="password" placeholder="Password" id="password" name="password" required>
            <label>Select user type:</label>
            <input type="radio" name="user_type" value="student" checked> Student
            <input type="radio" name="user_type" value="instructor"> Instructor
            <button type="submit">Sign Up</button><br>
            <label>Already have an account?</label>
            <a href="{{ route('login') }}" style="color: #D31C32;">Login</a>
        </form>
    </div>
</body>
</html>
