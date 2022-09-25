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
            <h3>Admin Login</h3>
            <hr>
               <form action="{{route('login-user')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="email">
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                       <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>
                    <hr>
               </form>
        </div>
       </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
</script>
</html>
