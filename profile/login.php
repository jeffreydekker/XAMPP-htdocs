<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Login</title>
</head>
<body>
    <form method="post">
        <div class="col-md-4 border rounded mx-auto mt-5 p-4 shadow">
            <div class="h2">Login</div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                <input name="email" type="text" class="form-control p-3" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                <input name="password" type="password" class="form-control p-3" placeholder="Password" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <button class="btn btn-primary col-12">Login</button>
            <div class="m-2">
                <a href="signup.php">Create Account</a>
            </div>
        </div>
    </form>
</body>
</html>