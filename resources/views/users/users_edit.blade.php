<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit User</h1>
        <form method="post" action="{{route('users.update',$user->id)}}">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{$user->id}}" class="form-control mb-3">

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" placeholder="Full Name" value="{{old('name',$user->name)}}" class="form-control">
                @error('name')
                <div class="text-danger">* {{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" placeholder="Email" value="{{old('email',$user->email)}}" class="form-control">
                @error('email')
                <div class="text-danger">* {{$message}}</div>
                @enderror
            </div>

            <input type="submit" value="EDIT" class="btn btn-primary">
        </form>
    </div>

</body>
</html>
