<h1>My Users</h1>

@if($user=="anil")
<h3>Hi {{$user}}</h3>
@else
<h1>Don't Have User</h1>
@endif

@foreach($user as $item)
    <h2>{{ $item }}</h2>
@endforeach

