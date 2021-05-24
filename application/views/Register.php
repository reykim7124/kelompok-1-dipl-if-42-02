<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">GoCharity</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                <!-- Input for search -->
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <!-- Search Button -->
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <!-- Login Button -->
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
        </div>
    </nav>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h3>Register</h3>
            <!-- Form Register -->
            <form method="POST" action="register/register">

                <!-- Form Group for input username -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                </div>
                <!-- Form Group for input password -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="passw" placeholder="Password" name="password" required>
                </div>
                <!-- Form Group for confirm password -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="passw" placeholder="Password" name="password" required>
                </div>
                <!-- Submit Button for complete the sign up -->
                <button type="submit" class="btn btn-primary" id="register">Sign Up</button>
            </form>
        </div>
    </div>
</body>

</html>