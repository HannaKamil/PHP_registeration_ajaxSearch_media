<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.php">Blog</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php
//                if(isset($_SESSION['userName_session'])){
//                echo "<li class='nav-item'>";
//                    echo "<a class='nav-link' href='index.php'>Home</a>";
//                echo "</li>";
//                echo "<li class='nav-item'>";
//                  echo  "<a class='nav-link' href='add_post.php'>Add Post</a>";
//                echo "</li>";
//
//
//                echo "<li class='nav-item'>";
//                  echo  "<a class='nav-link' href='post.php'>Sample Post</a>";
//                echo "</li>";
//                echo "<li class='nav-item'>";
//                  echo  "<a class='nav-link' href='contact.php'>Contact</a>";
//                echo "</li>";
//
//                echo "<li class='nav-item'>";
//                    echo  "<a class='nav-link' href='about.php'>About</a>";
//                echo "</li>";
//
//                echo "<li class='nav-item'>";
//                  echo  "<a class='nav-link' href='logout.php'>logout</a>";
//                echo "</li>";
//
//                }else{

                echo "<li class='nav-item'>";
                echo "<form action='search.php' method ='post'>";
                echo "<input type='text'  required style='font-size: 15px; padding: 5px; border: 1px solid red;' placeholder='First filter' name='search'>";
                echo "</form>";
                echo "</li>";


                echo "<li class='nav-item'>";
                echo "<a class='nav-link' style='color: darkred'; href='filter2.php'>Second Filter</a>";
                echo "</li>";


                echo "<li class='nav-item'>";
                    echo "<a class='nav-link' style='color: darkred'; href='index.php'>Home</a>";
                echo "</li>";



                    echo "<li class='nav-item'>";
                    echo  "<a class='nav-link' style='color: darkred;margin-right: 140px;
' href='register.php'>Sign Up</a>";
                    echo "</li>";

//                    echo "</li>";
//                    echo "<li class='nav-item'>";
//                    echo  "<a class='nav-link' style='color: red;' href='login.php'>login</a>";
//                    echo "</li>";
//                }


                ?>

            </ul>
        </div>
    </div>
</nav>