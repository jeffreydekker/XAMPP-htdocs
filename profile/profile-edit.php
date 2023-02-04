<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Edit profile</title>
</head>
<body>
    <div class="row col-md-8 border rounded mx-auto mt-5 p-2 shadow-lg">
        <div class="col-md-4 text-center">
            <img src="img/blank-profile-picture-973460__340.webp" class="js-image img-fluid rounded-circle" style="width: 180px;height:180px;object-fit: cover;">
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload image</label>
                <input onchange="display_image(this.files[0])" class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="col-md-8">
            <div class="h2">Edit Profile</div>
            <form method="post">
                <table class="table table-striped">
                    <tr><th colspan="2">User details:</th></tr>
                    <tr><th><i class="bi bi-person-vcard-fill ">  First name</th>
                        <td>
                            <input type="text" class="form-control" name="firstname" placeholder="Input first name here">
                        </td>
                    </tr>
                    <tr><th><i class="bi bi-person-vcard-fill"></i>  Last name</th>
                        <td>
                            <input type="text" class="form-control" name="lastname" placeholder="Input last name here">
                        </td>
                    </tr>
                    <tr><th><i class="bi bi-gender-ambiguous"></i>  Gender</th>
                        <td>
                            <select class="form-select" aria-label="Select your gender">
                                <option selected value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr><th><i class="bi bi-envelope"></i>  Email</th>
                        <td>
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </td>
                    </tr>
                </table>
                <div class="p-2">
                    <a href="index.php"><label class="btn btn-secondary">Back</button></a>
                    <button class="btn btn-primary float-end">Save</button>
                    
                </div>
            </form>
        </div>
    </div>
<script>
    function display_image(file)
        {
            var img = document.querySelector(".js-image");
            img.src = URL.createObjectURL(file);
        }
</script>
</body>
</html>

