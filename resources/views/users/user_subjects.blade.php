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
        .add-subject-btn {
            margin-bottom: 10px;
        }
        .delete-btn {
            margin-left: -10px; /* Adjust margin as needed */
        }
        .delete-container {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>User Subjects</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Subjects</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user_subjects as $user_sub)
                <tr>
                    <td>{{$user_sub->name}}</td>
                    <td>
                        @foreach($user_sub->subjects as $subs)
                        <div class="delete-container">
                            <span>{{$subs->sub_title}}</span>
                            <form action="{{ route('user_subjects.destroy', ['user_id' => $user_sub->id, 'subject_id' => $subs->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger delete-btn ms-2" type="submit">DELETE</button>
                            </form>
                        </div>
                        @endforeach
                    </td>
                </tr>
                <div class="mt-3">
                  <a href="/user_subjects/add/{{$user_sub->id}}" class="btn btn-primary add-subject-btn">ADD</a>
              </div>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3">
            <a href="/users/" class="btn btn-secondary me-2">USERS</a>
            <a href="/subjects/" class="btn btn-secondary">SUBJECTS</a>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, if you need JS functionalities) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add your custom scripts here -->
</body>
</html>
