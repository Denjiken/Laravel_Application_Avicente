<!DOCTYPE html>
<html>
<head>
    <title>View Activities</title>
    <style>
        body {
            font-family: Monaco, Monospace;
	        background-image: url("https://images.unsplash.com/photo-1553356009-50faee7aa84c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGdyZWVuJTIwYWJzdHJhY3R8ZW58MHx8MHx8fDA%3D&w=1000&q=80");
	        background-repeat: no-repeat;
 	        background-size: 115%;
 	        background-position: center;
	        background-color: #3b3a47;
        }

        h1 {
            padding: 10px;
            margin-left: -10px;
            margin-right: -10px;
            text-align: center;
            color: black;
        }

        .activity-table {
            padding: 10px;
            background: linear-gradient(to bottom right, #666666, #333333);
            border-radius: 10px;
            width: 100%;
        }

        .activity-table th,
        .activity-table td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
            color: white;
        }
    </style>
</head>
<body>
    <div class="view-activities-container">
        <h1>View Activities</h1>
        <div style="text-align: right;">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" style="background-color: red; color: white; border: none; padding: 10px; cursor: pointer;">Logout</button>
            </form>
        </div>
    </div>

    <table class="activity-table">
        <tr>
            <th>Activity No.</th>
            <th>Activity</th>
            <th>Date</th>
            <th>Description</th>
            <th>Instructor</th>
            <th>Category</th>
        </tr>

        @if ($activities->count() > 0)
            @foreach ($activities as $activity)
                <tr>
                    <td>{{ $activity->activity_id }}</td>
                    <td>{{ $activity->activity_name }}</td>
                    <td>{{ $activity->activity_date }}</td>
                    <td>{{ $activity->activity_description }}</td>
                    <td>{{ $activity->instructor_name }}</td>
                    <td>{{ $activity->study_area }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6">No activities found.</td>
            </tr>
        @endif
    </table>
</body>
</html>
