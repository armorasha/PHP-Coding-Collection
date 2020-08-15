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

    <div class="backy pb-5">
        <div class="mask backy1 rgba-gradient">
            <div class="box-wrap sticky-top" style="z-index:9998;">
                <div class="box blue-gradient" style="--r1:130%;--r2:71.5%;">
                    <div class="container-fluid text-center pt-5" style="font-family: 'Roboto Slab', serif;">
                        <?php
                        echo '<h1 class="display-3 text-white">LAMP <i class="fas fa-server grey-text"></i>   
                    Ubuntu <i class="fab fa-ubuntu red-text"></i> WSL2</h1><br>';
                        ?>
                    </div>
                </div>
            </div>

            <div class="jumbotron card card-image mb-5" style="background-image: url('img/gradient1.jpg');">
                <div class="text-white text-center px-4">
                    <div class="row">
                        <div class="column ml-5">
                            <h1 class="card-title display-3 pt-3 mb-5 ombre-wsl2">
                            <strong>Windows Subsystem for Linux 2</strong></h1>
<!-- 
                            <h1 class="card-title display-4 pt-3 mb-5 font-bold blue-text" style="font-family: 'Roboto Slab', serif;">              
                                <strong>when</strong>
                            </h1> -->

                            <h2 class="card-title h1-responsive pt-3 mb-5 font-bold blue-text" style="font-family: 'Roboto Slab', serif;">              
                                <strong>
                                   <i class="fab fa-windows teal-text"></i> XAMPP<i class=""> is too less</i>
                                    &ensp;&&&ensp; <i class="fab fa-docker teal-text"></i> Docker<i> is too much</i>
                                </strong>
                            </h2>

                        </div>
                        <div class="column mx-auto">
                            <h1 class="card-title display-3 pt-3 mb-5 font-bold"><strong>
                                    <i class="fab fa-linux red-text fa-3x"></i></strong></h1>
                        </div>
                    </div>

                    <div class="row">
                        <a href="#info" class="btn btn-outline-white btn-lg mx-auto mt-2">
                            <!-- <a href="#info" class="btn juicy-peach-gradient btn-lg mx-auto mt-5"> -->
                            <h4 class="my-auto text-white">
                                <strong><i class="fas fa-angle-double-right"></i> Project Info&emsp;</strong>
                            </h4>
                        </a>
                    </div>

                    <div class="row">
                        <!-- <a href="#exercises" class="btn btn-outline-white btn-lg mx-auto mt-5"> -->
                        <a href="#exercises" class="btn juicy-peach-gradient btn-lg mx-auto mt-5">
                            <h4 id="info" class="my-auto text-info">
                                <strong><i class="fas fa-clone left"></i> View exercises</strong>
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="spacer invisible my-2">
                <br><br><br>
            </div>

            <div class="container cloudy-knoxville-gradient page-block text-black-50 z-depth-1-half p-5">
                <h3><i class="fas fa-angle-right"></i></h3>
                <h3 class="text-monospace"><a href="phpinfo.php">phpinfo();</a></h3>
                <h6>Just plain LAMP stack apache site running in Ubuntu,
                    similar to plain LAMP site running in XAMPP. Site is running as if it is
                    hosted in a AWS EC2 Linux VM.</h6><br><br>

                <h3><i class="fas fa-angle-right"></i></h3>
                <h3><code>C:\Users\000930322\Downloads\PHP\PHP Summary.docx </code></h3>
                <h6>Has info on steps to create a simple exercise, CLI commands, troubleshooting</h6>
            </div>

            <div class="spacer invisible my-2">
                <br><br><br>
            </div>

        </div>
    </div>


    <div id="exercises" class="container-fluid cloudy-knoxville-gradient p-5">
        <div class="container page-block juicy-peach-gradient z-depth-5 p-5">
            <div>
                <h2 class="display-3 text-danger"><i class="far fa-file-code"></i> Exercises</h2>
                <h3 class="text-black-50">
                    Most coding exercises will be here.
                </h3>

                <div class="my-5">
                    <h3 class="text-black-50">
                        <ul class="list-style">
                            <li><a href="0_misc_exercises">Individuals</a><br></li>
                            <li><a href="1_class_object_exercise">Classes & Objects</a></li>
                        </ul>
                    </h3>
                </div>

            </div>
        </div>

        <div class="container page-block juicy-peach-gradient z-depth-5 p-5 my-5">
            <h2 class="display-3 text-danger"><i class="far fa-file-code"></i> Testing</h2>
            <h3 class="text-black-50">
                Unit testing with PHPUnit + Composer.
            </h3>


            <div class="my-5">
                <h3 class="text-black-50">
                    <ul class="list-style">
                        <li><a href="2_composer_phpunit">Composer + PHPUnit : Classes</a><br></li>
                        <li><b>Composer + PHPUnit : Tests</b> in <code>/tests</code> folder outside
                            <code>/public_html</code> folder, not reachable in <code>localhost</code>
                        </li>
                    </ul>
                </h3>
            </div>

            <div class="view rounded-lg col-md-4 my-5">
                <figure class="col-md-12 m-0 rounded-lg">
                    <a href="img/phpunit composer tree 2.jpg" class="rounded-lg" data-size="1600x1067">
                        <img src="img/phpunit composer tree 2.jpg" class="img-fluid rounded-lg z-depth-1" width="300" height="auto">
                        <div class="mask peach-gradient-rgba  flex-center waves-effect waves-light rounded-lg">
                            <h3 class="white-text"><strong><i class="fas fa-angle-right"></i> tree</strong></h3>
                        </div>
                    </a>
                </figure>
            </div>


            <h3 class="text-black-50">
                <ul class="list-style">
                    <li><a href="2_composer_phpunit">Composer + PHPUnit : Classes</a><br></li>
                    <li><b>Composer + PHPUnit : Tests</b> in <code>/tests</code> folder outside <code>/public_html</code>
                        folder, not reachable in <b>localhost</b>.
                    </li>
                </ul>
                More info on this exercise at:
                <code>C:\Users\000930322\Downloads\PHP\PHP Summary.docx </code>
            </h3>

        </div>
    </div>

    <div class="footer-copyright py-3 text-center z-depth-1">
        © <?php echo date("Y"); ?> Developer:
        <a href="https://github.com/armorasha">
            <strong> Raja Palanivel</strong>
        </a>
    </div>

    <script src="js/scripts.js"></script>
</body>

</html>