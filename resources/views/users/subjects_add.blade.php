<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <!-- Updated Bootstrap 5.3.2 CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">ADD SUBJECTS</h1>
        <form method="post" action="/subjects/add">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="sub_title" placeholder="Subject Title" value="{{ old('sub_title') }}">
                @error('sub_title')
                    <span class="text-danger">*required</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="sub_room" placeholder="Subject Room" value="{{ old('sub_room') }}">
                @error('sub_room')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
</body>

</html>
