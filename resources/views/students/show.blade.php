<h1>Student Details</h1>
<p>Name: {{ $student->fname }} {{ $student->lname }}</p>
<p>Email: {{ $student->email }}</p>
<a href="{{ route('students.index') }}">Back</a>
