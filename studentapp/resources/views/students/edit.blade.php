<h1>Edit Student</h1>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    First Name: <input type="text" name="fname" value="{{ $student->fname }}"><br>
    Last Name: <input type="text" name="lname" value="{{ $student->lname }}"><br>
    Email: <input type="email" name="email" value="{{ $student->email }}"><br>
    <button type="submit">Update</button>
</form>
