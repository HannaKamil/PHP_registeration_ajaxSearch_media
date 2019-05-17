<?php
include "navbar.php";
//?>

<!doctype html>
<html lang="en">
<head>

    <style>
        .col-form-label{
            text-align: left !important;
        }
    </style>

    <?php

    $errors = array();
    include 'connection.php';


    // REGISTER USER
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // receive all input values from the form
        $fname        = @($_POST["fname"]);
        $lname        = @($_POST["lname"]);
        $email        = @($_POST["email-address"]);
        $pass         = @($_POST["password"]);
        $Confirm_pass = @($_POST["Cpassword"]);
        $phone        = @($_POST["phone"]);
        $url          = @($_POST["url"]);
        $country      = @($_POST["country"]);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($fname)) {
            array_push($errors, "firstname is required");
        }

        if (empty($lname)) {
            array_push($errors, "last name is required");
        }
        if (empty($pass)) {
            array_push($errors, "Password is required");
        }
        if (empty($pass)) {
            array_push($errors, "Password is required");
        }

        if (empty($phone)) {
            array_push($errors, "Phone is required");
        }

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $urlErr =  "$url  Not a valid URL";
        }

        if (strlen($pass) <6 ) {
            $errPass1= "password less than 6";
        }
        if (strlen($pass) >12 ) {
            $errPass2 = "password large than 12";
        }


        if ($pass != $Confirm_pass) {
            array_push($errors, "The two passwords do not match, try again: ");
        }


//          check the database to make sure
//         a user does not already exist with the same username and/or email
        $stmt = $conn->prepare("
    SELECT mail
    FROM register
    WHERE mail='$email';
    ");

        $stmt->execute();
        $rows = $stmt->fetchAll();
        $count = count($rows);

        foreach ($rows as $row) {
            if ($count > 0) {

                if ($row['mail'] === $email) {
                    $emailErr = "Email you entered already exists";
                }
            }
        }


//        // Finally, register user if there are no errors in the form
//        if (count($errors) == 0){


        if ( count($errors) == 0 and empty($urlErr) and empty($emailErr) and empty($errPass1)and empty($errPass2)) {
            $pass = md5($pass);//encrypt the password before saving in the database

            $sql = "INSERT INTO register (first_name,last_name, password,mail,url,phone,country)                      VALUES ('$fname', '$lname' ,'$pass', '$email', '$url','$phone','$country')";
            $conn->exec($sql);
            header('location: index.php');
        }
    }
//}
    ?>




</head>
<body>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>


                    <?php
                    foreach ($errors as $error){

                        echo "<div class='alert-danger' role='alert'>";
                        echo "<li>" . $error . "</li>";
                        echo "</div>";

                    }
                    ?>

                    <div class="card-body">
                        <form method="POST" name="my-form" onsubmit="return validform()" action="#">

                            <div class="form-group row">
                                <label for="fname" class="col-md-4 col-form-label text-md-right">First name</label>
                                <div class="col-md-6">
                                    <input type="text" value="<?php if (isset($fname)){echo $fname;} ?>" id="fname" class="form-control" name="fname" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-md-4 col-form-label text-md-right">last Name</label>
                                <div class="col-md-6">
                                    <input type="text" value="<?php if (isset($lname)){echo $lname;} ?>"id="lname" class="form-control" name="lname" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" value="<?php if (isset($email)){echo $email;} ?>" id="email_address" class="form-control" name="email-address" required>
                                </div>
                            </div>

                            <div>
                                <?php if (isset($emailErr)){
                                    echo "<div class=' alert-danger' role='alert'>";
                                    echo "<li>" . $emailErr . "</li>";
                                    echo "</div>";

                                }?>
                            </div>



                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="psw" class="form-control" name="password"  required>

                                </div>
                            </div>

                            <div>
                                <?php if (isset($errPass1)){
                                    echo "<div class=' alert-danger' role='alert'>";
                                    echo "<li>" . $errPass1 . "</li>";
                                    echo "</div>";

                                }?>
                            </div>

                            <div>
                                <?php if (isset($errPass2)){
                                    echo "<div class=' alert-danger' role='alert'>";
                                    echo "<li>" . $errPass2 . "</li>";
                                    echo "</div>";

                                }?>
                            </div>


                            <div class="form-group row">
                                <label for="Cpassword" class="col-md-4 col-form-label text-md-right">confirm Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="psw" class="form-control" name="Cpassword"  required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                <div class="col-md-6">
                                    <input value="<?php if (isset($phone)){echo $phone;} ?>"type="number" id="phone_number" class="form-control" name="phone" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="url" class="col-md-4 col-form-label text-md-right">URL: </label>
                                <div class="col-md-6">
                                    <input type="text"  value="<?php if (isset($url)){echo $url;} ?>"  id="url" class="form-control" name="url" required>
                                </div>
                            </div>
                            <div>
                                <?php if (isset($urlErr)){
                                    echo "<div class=' alert-danger' role='alert'>";
                                    echo "<li>" . $urlErr . "</li>";
                                    echo "</div>";

                                }?>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">country</label>
                                <div class="col-md-6">
                                    <input type="text" value="<?php if (isset($country)){echo $country;} ?>"id="country" class="form-control" name="country" required>
                                </div>
                            </div>



                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="reg_user">
                                    Register
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    </div>

</main>

</body>
</html>