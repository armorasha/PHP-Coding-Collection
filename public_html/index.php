<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>PHP Exercises</title>
    <meta name="description" content="MDBootstraped">
    <meta name="author" content="Raja">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


    <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
    <div class="box blue-gradient" style="--r1:130%;--r2:71.5%">
        <div class="container-fluid text-center pt-5">
            <?php
            // echo '<h1 class="display-3 text-black-50">LAMP <i class="fas fa-server grey-text"></i>   Ubuntu <i class="fab fa-ubuntu red-text"></i></h1><br>';
            echo '<h1 class="display-3 text-white ">LAMP <i class="fas fa-server grey-text"></i>   Ubuntu <i class="fab fa-ubuntu red-text"></i></h1><br>';
            ?>
        </div>
    </div>

    <div class="container cloudy-knoxville-gradient text-black-50 z-depth-1-half my-5 p-5">

        <h3><i class="fas fa-angle-right"></i></h3>
        <h4><b><i class="far fa-times-circle red-text"></i> XAMPP <i class="fab fa-windows indigo-text"></i></b></h3><br>
        <h4><b><i class="far fa-times-circle red-text"></i> Docker <i class="fab fa-docker cyan-text"></i></b></h3><br>
        <h4><b><i class="far fa-check-circle green-text"></i> WSL2 <i class="fab fa-linux amber-text"></i></b></h3><br><br><br>


        <h3><i class="fas fa-angle-right"></i></h3>
        <h3 class="text-monospace"><a href="phpinfo.php">phpinfo();</a></h3>
        <h6>Just plain LAMP stack apache site running in Ubuntu,
            similar to plain LAMP site running in XAMPP. Site is running as if it is
            hosted in a AWS EC2 Linux VM.</h6><br><br>

        <h3><i class="fas fa-angle-right"></i></h3>
        <h4 style="color:red"><b>C:\Users\\000930322\Downloads\PHP\PHP Summary.docx</b></h4>
        <h6>Has info on steps to create a simple exercise, CLI commands, troubleshooting</h6><br><br>

    </div>

    <div class="container z-depth-5 my-5 p-5">
        <h2><b><i class="fas fa-file-code"></i> Exercises</b></h2>

        <a href="0_misc_exercises">0_misc_exercises</a><br>
        <a href="1_class_object_exercise">1_class_object_exercise</a><br><br><br>

        <h2><b><i class="far fa-file-code"></i> PHPUnit Testing</b></h2>
        <!--Zoom effect-->
        <div class="view overlay zoom">
            <img src="img/phpunit composer tree 2.jpg" class="img-fluid z-depth-1" width="200" height="auto"><br>
        </div>
        <a href="2_composer_phpunit">2_composer_phpunit - Classes</a>
        <p><b>2_composer_phpunit - Tests</b> in <b>tests folder</b> outside public_html. Not reachable in localhost. More info on this exercise at:</p>
        <p style="color:red"> C:\Users\\000930322\Downloads\PHP\PHP Summary.docx </p><br>

    </div>

    <script src="js/scripts.js"></script>
</body>

</html>