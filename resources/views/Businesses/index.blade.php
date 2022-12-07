@extends('layouts.default')

@section('content')
    <h2>Store</h2>
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
    <form method="POST" action="{{ route('businesses.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
        <br/>
        @error('name')
            {{$message}}
        @enderror
        <br/>
        <input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}">
        <br/>
        @error('email')
            {{$message}}
        @enderror
        <br/>
        <input type="text" name="address" placeholder="Address" value="{{ old('address') }}">
        <br/>
        @error('address')
            {{$message}}
        @enderror
        <br/>
        <button type="submit">Save</button>
    </form>

    <hr>
    <strong>
        Businesses
    </strong>
    <table>
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    Address
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($businesses as $business)
                <tr>
                    <td>{{$business->name}}</td>
                    <td>{{$business->email}}</td>
                    <td>{{$business->address}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
