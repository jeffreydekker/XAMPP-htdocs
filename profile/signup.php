<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Sign Up</title>
</head>
<body>
    <form method="post" onsubmit="myaction.collect_data(event, 'signup')">
        <div class="col-md-8 col-lg-4 border rounded mx-auto mt-5 p-4 shadow">
            <div class="h2">Sign Up</div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                <input name="email" type="text" class="form-control p-3" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <div><small class="text-danger js-error-email js-error"></small></div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                <input name="firstname" type="text" class="form-control p-3" placeholder="First name" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <div><small class="text-danger js-error-firstname js-error"></small></div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-square"></i></span>
                <input name="lastname" type="text" class="form-control p-3" placeholder="Last name" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <div><small class="text-danger js-error-lastname js-error"></small></div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-gender-ambiguous"></i></span>
                <select class="form-select" name="gender" placeholder="Select Gender">
                    <option selected value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div><small class="text-danger js-error-gender js-error"></small></div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                <input name="password" type="password" class="form-control p-3" placeholder="Password" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <div><small class="text-danger js-error-password js-error"></small></div>
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-repeat"></i></span>
                <input name="repeat_password" type="password" class="form-control p-3" placeholder="Repeat Password" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <div><small class="text-danger js-error-password-repeat js-error"></small></div>
            <div class="progress mt-3 d-none" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 25%"></div>
            </div>
            <button class="mt-3 btn btn-primary col-12">Sign Up</button>
            <div class="m-2">
                <p>Already have an account? <a href="login.php">Log in here</a></p>
            </div>
        </div>
    </form>
    <script>

        // One single object handles the functions. Use myaction.<functionName> to access
        var myaction =  {
            collect_data: function(e, data_type)
            {
                e.stopPropagation();
                e.preventDefault();

                var inputs = document.querySelectorAll("form input, form select");
                let myform = new FormData();
                myform.append('data_type', data_type);

                for (var i = 0; i < inputs.length; i++) {
                    myform.append(inputs[i].name, inputs[i].value);
                }

                myaction.send_data(myform);
            },

            send_data: function(form)
            {
                var ajax = new XMLHttpRequest();
                document.querySelector(".progress").classList.remove("d-none");
                
                ajax.addEventListener('readystatechange', function() {
                    if(ajax.readyState == 4) {
                        if (ajax.status == 200) {
                            // all good
                            alert(ajax.responseText);
                            myaction.handle_result(ajax.responseText);
                        } else {
                            console.log(ajax);
                            alert("An error has occurred");
                        }
                    }
                });

                ajax.upload.addEventListener('progress', function(e) {
                    let percent = Math.round((e.loaded / e.total) * 100)
                    document.querySelector(".progress-bar").style.width = percent;
                });
                ajax.open('post', 'ajax.php', true);
                ajax.send(form);
            },

            handle_result: function(result) {

                var obj = JSON.parse(result);
                if(obj.success)
                {
                    alert("success");
                } else {
                    // show error

                    let error_inputs = document.querySelectorAll(".js-error");
                    
                    //empty all errors
                    for (var i = 0; i < error_inputs.length; i++) {
                        error_inputs[i].innerHTML = "";
                    }

                    // display errors 
                    for (key in obj.success) {
                        document.querySelector(".js-error" + key).innerHTML = obj.errors[key];
                    }
                }
            }
        };
    </script>
</body>
</html>