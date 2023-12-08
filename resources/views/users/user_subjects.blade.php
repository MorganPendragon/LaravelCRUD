<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel CRUD</title>
</head>
<body>
	<h1>User Subjects</h1>
	<table>
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
          <td>@foreach($user_sub->subjects as $subs)
            <hr>{{$subs->sub_title}}</hr>
              <form action="{{ route('user_subjects.destroy', ['user_id' => $user_sub->id, 'subject_id' => $subs->id]) }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">DELETE</button>
              </form>
            @endforeach
            <tr><a href="/user_subjects/add/{{$user_sub->id}}">ADD</a></tr><br><br>
          </td>
      </tr>
      @endforeach
    </tbody>
	</table>

  <br><br>
  <a href="/users/">USERS</a><br><br>
  <a href="/subjects/">SUBJECTS</a>
  
</body>
</html>
