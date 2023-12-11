<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Add User</h1>
        <form method="post" action="/users">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" placeholder="Full Name" value="{{old('name')}}" class="form-control">
                @error('name')
                <div class="text-danger">* {{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" placeholder="Email" value="{{old('email')}}" class="form-control">
                @error('email')
                <div class="text-danger">* {{$message}}</div>
                @enderror
            </div>
            <input type="submit" value="ADD" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
