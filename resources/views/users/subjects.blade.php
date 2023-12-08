<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        @if (session('store_subject'))
            <div class="alert alert-success">
                {{ session('store_subject') }}
            </div>
        @endif
        @if (session('update_subject'))
            <div class="alert alert-success">
                {{ session('update_subject') }}
            </div>
        @endif
        <h1 class="mb-4">Subjects</h1>
        <a href="/subjects/create" class="btn btn-primary mb-3">Add Subject</a>
        <a href="/users" class="btn btn-primary mb-3">User</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Room</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subj)
                    <tr>
                        <td>{{ $subj->sub_title }}</td>
                        <td>{{ $subj->sub_room }}</td>
                        <td>
                            <a href="/subjects/edit/{{ $subj->id }}" class="btn btn-primary">Update</a>
                            <form action="{{ route('subject.destroy', $subj->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
