<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <table rules="all" style="border-style: solid; border-color: #666;" cellpadding="10">
        <thead>
            <tr style='background: #eee;'>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>message</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['email'] }}</td>
                <td>{{ $data['contact'] }}</td>
                <td>{{ $data['message'] }}</td>
            </tr>
        </tbody>
    </table>

</body>

</html>
