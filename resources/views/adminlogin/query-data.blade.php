<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
     <div class="container">
       <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 50px;">
            <h3>Admin Dashboard</h3>
            <hr>
            <table border="2">
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>SUBJECT</td>
                <td>MESSAGE</td>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['subject']}}</td>
                <td>{{$user['message']}}</td>
             </tr>
            @endforeach
            </table>
            <a href="logout">logout</a>
            <hr>
            <a href="{{route('home')}}">Atlas</a>
            <hr>
        </div>
       </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
</script>
</html>


