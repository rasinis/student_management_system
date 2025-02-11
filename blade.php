<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
</head>
<body>
    <h2>Student List</h2>
    <a href="{{ route('students.create') }}">Add Student</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date of Birth</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->dob }}</td>
            <td>
                <a href="{{ route('students.show', $student->id) }}">View</a> |
                <a href="{{ route('students.edit', $student->id) }}">Edit</a> |
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
