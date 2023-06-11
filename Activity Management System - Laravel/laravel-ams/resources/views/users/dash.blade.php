<!DOCTYPE html>
<html>
<head>
    <title>Activity Management System</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <!-- Activity Management System Homepage -->
    <h1>Activity Management System</h1>
    <div class="logout" style="text-align: right" onclick="alert('Logged out successfully.');">
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
            @csrf
            @method('POST')
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </div><br>
    @if (isInstructor())
    <div style='text-align: right';>
        <select name="activity_option" onchange="location = this.value;">
            <option value="">Edit Table</option>
            <option value="{{ route('activities.create') }}">Add New Activity</option>
            <option value="{{ route('activities.update') }}">Update Activity</option>
            <option value="{{ route('activities.delete') }}">Delete Activity</option>
        </select><br><br>
    </div>
    @endif
    <a href="{{ route('instinfo') }}"><button>Go to Instructor Information</button></a><br><br>
    <div style='text-align: right;'>
        <form action="{{ route('activities.index') }}" method='GET'>
            <label for='category_filter'>Select Category:</label>
            <select name='category_filter' id='category_filter'>
                <option value=''>All</option>
                @foreach ($categories as $category)
                <option value="{{ $category->study_area }}" {{ ($filter === $category->study_area) ? 'selected' : '' }}>
                    {{ $category->study_area }}
                </option>
                @endforeach
            </select>
            <input type='submit' value='Apply Category'>
        </form><br><br>
    </div>

    <table class='activity-table'>
        <tr>
            <th>Activity ID.</th>
            <th>Activity</th>
            <th>Date</th>
            <th>Description</th>
            <th>Instructor</th>
            <th>Category</th>
        </tr>
        @if ($activities->count() > 0)
        @foreach ($activities as $activity)
        <tr>
            <td>{{ $activity->Activity ID. }}</td>
            <td>{{ $activity->Activity }}</td>
            <td>{{ $activity->Date }}</td>
            <td>{{ $activity->Description }}</td>
            <td>{{ $activity->Instructor }}</td>
            <td>{{ $activity->Category }}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="6">No activities found.</td>
        </tr>
        @endif
    </table>

    <div class="logout">
        <form action="{{ route('logout') }}" method="POST" class="d-flex">
            @csrf
            @method('POST')
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
