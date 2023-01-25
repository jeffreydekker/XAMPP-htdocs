<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Profiles</title>
</head>
<body>
    <div class="row col-md-8 border rounded mx-auto mt-5 p-2 shadow-lg">
    <img src="img/istockphoto-1309328823-170667a.jpg" class="img-fluid rounded-circle" style="width: 180px;height:180px;object-fit: cover;">
        <div class="col-md-4 text-center">
            <a href="profile-edit.php"><button class="mx-auto m-1 btn-sm btn btn-primary">Edit</button></a>
            <button class="mx-auto m-1 btn-sm btn btn-warning text-white">Delete</button>
            <button class="mx-auto m-1 btn-sm btn btn-info text-white">Logout</button>
        </div>
        <div class="col-md-8">
            <div class="h1">User Profile</div>
            <table class="table table-striped">
                <tr><th colspan="2">User details:</th><td></td></tr>
                <tr><th><i class="bi bi-person-vcard-fill ">First name</th><td>John</td></tr>
                <tr><th><i class="bi bi-person-vcard-fill"></i> Last name</th><td>Doe</td></tr>
                <tr><th><i class="bi bi-gender-ambiguous"></i> Gender</th><td>Male</td></tr>
                <tr><th><i class="bi bi-envelope"></i> Email</th><td>email@email.com</td></tr>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</body>
</html>