<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration_Page</title>

    <style type="text/css">
    #form {
        min-height: 800px;
        padding: 5px 40px 40px 40px;
    }

    .Registration {
        font-size: 50px;
        font-family: agency FB;
        font-weight: 700px;
        border-bottom-style: ridge;
    }

    .text {
        height: 40px;
    }

    label {
        font-size: 20px;
    }

    .btn-primary {
        border-radius: 0px;
        padding: 10px;
        width: 48%;
    }

    .btn-danger {
        border-radius: 0px;
        padding: 10px;
        width: 48%;
    }
    </style>
</head>

<body>
    <div class="container">
    <?php 


    
    if (isset($_SESSION['massege'])) {?>
    <div class="alert alert-success" role="alert">
    <?= $_SESSION['massege'] ?>
    </div>
    <?php 
    unset($_SESSION['massege']);
    ?>
<?php } ?>
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5 border p-4 bg-light shadow">
                <center><b class="Registration">Registration Form</b></center>
                <form action="database.php" method="post">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" placeholder="Enter Your name" name="name" id="name" class="form-control text">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" placeholder="Enter Your Email" name="email" id="email" class="form-control text">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" placeholder="Enter Your Password" name="pass" id="email" class="form-control text">
                    </div>
                    <div class="form-group">
                        <label>Mobile No:</label>
                        <input type="number" placeholder="Enter Your Mobile number" name="mobile" id="mobile" class="form-control text">
                    </div>
                    <div class="form-group">
                        <label>Date of birth:</label>
                        <input type="date" placeholder="Enter Your Date of Birth" name="dob" id="dob" class="form-control text">
                    </div>
                    <div class="form-group">
                        <label>Select Gender:</label>
                        <select class="form-control text" name="gender" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <textarea class="form-control" rows="6" name="address" id="address" placeholder="Enter Your Address"></textarea>

                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">

                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>