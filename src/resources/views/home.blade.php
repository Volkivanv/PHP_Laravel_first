@extends('layouts.default')


@section('content')
<h1></h1>this is home</h1>
<table border="3px">
    @foreach ($users as $user)
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['age'] }}</td>
            <td>{{ $user['position'] }}</td>
            <td>{{ $user['address'] }}</td>
        </tr>
    @endforeach
</table>
@stop
