<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add custom styles here if needed */
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Add User Subjects</h1>
        <h3>Name: {{$user->name}}</h3>
        <form method="post" action="{{route('user_subjects.add')}}">
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            <table class="table">
                <thead>
                    <tr>
                        <th>Subject List</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $subj)
                    <tr>
                        <td>{{$subj->sub_title.' - '.$subj->sub_room}}</td>
                        <td>
                            <div class="form-group">
                                <input type="checkbox" name="{{$subj->id}}">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="form-group">
                <input type="submit" value="ADD" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>
</html>
