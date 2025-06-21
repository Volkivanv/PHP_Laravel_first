<html>
<head>
    <title>List of users</title>
</head>
<body @if($user['id'] == 0) style="background-color: yellow" @endif>
    <h2>List of Users</h2>
    <table border="4">
        {{-- @foreach($users as $user) --}}
            <tr><td>Username: </td><td>{{ $user['username'] }}</td></tr>
            <tr><td>First name: </td><td>{{ $user['first_name'] }}</td></tr>
            <tr><td>Last name: </td><td>{{ $user['last_name'] }}</td></tr>
            <tr><td>List of books: </td><td>
                @foreach ( $user['list_of_books'] as $item)
                    {{ $item }} <br>
                @endforeach
                </td></tr>
        {{-- @endforeach --}}
    </table>

</body>
</html>
