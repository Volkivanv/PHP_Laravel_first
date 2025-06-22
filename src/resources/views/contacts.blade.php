@extends('layouts.default')


@section('content')
<h1></h1>this is home</h1>
<table border="3px">
    @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact['address'] }}</td>
            <td>{{ $contact['post_code'] }}</td>
            <td>{{ $contact['email'] }}</td>
        </tr>
    @endforeach
</table>
@stop
