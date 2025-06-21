<html>
<head>
    <title>Greater</title>
</head>
<body>
    <h2>Hello {{ $user['username'] }}!</h2>
    <table border="4">
            <tr><td>User name: </td><td>{{ $user['username'] }}</td></tr>
            <tr><td>Last name: </td><td>{{ $user['last_name'] }}</td></tr>
            <tr><td>Email: </td><td>{{ $user['email'] }}</td></tr>
    </table>

</body>
</html>
