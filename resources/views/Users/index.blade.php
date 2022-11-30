@extends('layouts.default')

@section('content')
<h2>Users</h2>
@foreach($users as $user)
    <p>
        {{ $user->name }} - {{ $user->email }}
    </p>
@endforeach
@endsection
<script>
    let appUsers = {{ Illuminate\Support\Js::from($users) }}
</script>
