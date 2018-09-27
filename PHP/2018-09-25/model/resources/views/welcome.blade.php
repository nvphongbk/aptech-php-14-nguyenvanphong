@foreach ($users as $user)
    <p>This is user {{ $user->name }} & email is {{$user->email}} </p>
@endforeach
