<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <style>
        .btn {
            background-color: #3490dc;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2779bd;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Students List</h1>
    <a href="{{ route('students.create') }}" class="btn">Add Student</a>
    <ul>
        @foreach($students as $student)
            <li>
                {{ $student->fname }} {{ $student->lname }} - {{ $student->email }}
                <a href="{{ route('students.show', $student->id) }}" class="btn">View</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
