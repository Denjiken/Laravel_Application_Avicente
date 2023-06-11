<!DOCTYPE html>
<html>
<head>
    <title>Instructor Information</title>
    
    <style>
        body {
            font-family: Monaco, Monospace;
            background-image: url("https://images.unsplash.com/photo-1553356009-50faee7aa84c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGdyZWVuJTIwYWJzdHJhY3R8ZW58MHx8MHx8fDA%3D&w=1000&q=80");
            background-repeat: no-repeat;
            background-size: 115%;
            background-position: center;
            background-color: #3b3a47;
        }

        .container {
            background-color: white;
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-top: 1px solid #ddd;

        }

        .delete-button {
            background-color: #8B0000;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
        }

        .update-button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
        }

        .main-page-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <!-- Fetch instructor information -->
    <div class="container">
        <table>
            <tr>
                <th>Instructor ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            @foreach($instructors as $instructor)
            <tr>
                <td>{{ $instructor->instructor_id }}</td>
                <td>{{ $instructor->instructor_name }}</td>
                <td>{{ $instructor->instructor_gender }}</td>
                <td>{{ $instructor->instructor_address }}</td>
                <td>{{ $instructor->instructor_email }}</td>
                <td>
                    <a class="delete-button" href="{{ route('deleteinstinfo', ['id' => $instructor->instructor_id]) }}">Delete</a>
                    <button class="update-button" type="submit" name="id" value="{{ $instructor->instructor_id }}">Update</button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
