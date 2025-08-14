<h1>Add Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    First Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    Email: <input type="email" name="email"><br>
    <button type="submit">Save</button>
</form>
