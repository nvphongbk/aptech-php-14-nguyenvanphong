<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
   <tr>
   <td>{{ $user->id }}
   <td>{{ $user->name }}</td>
@endforeach
   
  </tbody>
</table>
</body>
</html>