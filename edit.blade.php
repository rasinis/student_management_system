<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $student->phone }}" required><br>
        <label>Date of Birth:</label>
        <input type="date" name="dob" value="{{ $student->dob }}" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
