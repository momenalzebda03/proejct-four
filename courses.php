<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css5/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap5/css5/project_four.css">
    <title>COUSES</title>
</head>

<body>
    <!-- stast header -->
    <div class="div_flex">
        <div class="div_left">
            <?php

            session_start();

            $louk_id = $_GET["louk_session"];

            $data = new mysqli("localhost", "root", "", "sinup");

            $table = $data->query("select * from singup where id = $louk_id");

            if ($table->num_rows > 0) {
                while ($row = $table->fetch_assoc()) {
                    print "<p class='my_name'>" . $row["name"] . "</p>";
                }
            }
            ?>
            <br>
            <?php
            print "<a href='dashboard.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fas fa-chart-line icon'></i> <p class='my_P'>dashboard</p></div></a>";
            print "<a href='settings.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-gear icon'></i><p class='my_P'>settings</p></div></a>";
            print "<a href='profile.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-user icon'></i><p class='my_P'>profile</p></div></a>";
            print "<a href='projects.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fas fa-project-diagram icon'></i><p class='my_P'>projects</p></div></a>";
            print "<a href='courses.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex my_all'><i class='fa-solid fa-graduation-cap icon'></i><p class='my_P'>courses</p></div></a>";
            ?>
            <a href="#">
                <div class="div_flex">
                    <i class="fa-solid fa-user icon"></i>
                    <p class="my_P">frindes</p>
                </div>
            </a>
            <a href="#">
                <div class="div_flex">
                    <i class="fas fa-file icon"></i>
                    <p class="my_P">files</p>
                </div>
            </a>
            <a href="#">
                <div class="div_flex">
                    <i class="fa-solid fa-plane icon"></i>
                    <p class="my_P">plans</p>
                </div>
            </a>
        </div>
        <div class="div_right">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="navbar-collapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <div class="div_flex">
                                <form action="" method="">
                                    <i class="fa-solid fa-magnifying-glass icon"></i>
                                    <input type="text" placeholder="type a keyword">
                                </form>
                            </div>
                        </ul>
                        <div class="d-flex">
                            <i class="fa-solid fa-bell pt-2 icon"></i>
                            <img src="image5/avatar.png" alt="">
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end header -->
            <!-- start main -->
            <div class="div_main1">
                <h2>settings</h2>
                <div class="div_afeter_before"></div>
            </div>
            <!-- end main -->
            <br>
            <br>
            <!-- start main1 -->
            <i class="fal fa-check"></i>
            <div class="container">
                <div class="row div_flex_here">
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <img src="image5/team-01.png" class="image_team">
                            <img src="image5/html.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">html language</h5>
                                <p class="my_color">I am proficient in html, this language works to build the structure of the site, how wonderful it is</p>
                                <hr>
                                <a href="#" class="btn btn-primary my_button">course info</a>
                            </div>
                            <div class="div_my_between">
                                <div class="div_flex">
                                    <i class="fas fa-user icon"></i>
                                    <p class="my_color">950</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-dollar-sign icon"></i>
                                    <p class="my_color">165</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <img src="image5/team-02.png" class="image_team">
                            <img src="image5/css.jfif" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">css language</h5>
                                <p class="my_color">I am proficient in css, this language works to build the structure of the site, how wonderful it is</p>
                                <hr>
                                <a href="#" class="btn btn-primary my_button">course info</a>
                            </div>
                            <div class="div_my_between">
                                <div class="div_flex">
                                    <i class="fas fa-user icon"></i>
                                    <p class="my_color">1150</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-dollar-sign icon"></i>
                                    <p class="my_color">210</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <img src="image5/team-03.png" class="image_team">
                            <img src="image5/js.jfif" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">js language</h5>
                                <p class="my_color">I am proficient in js, this language works to build the structure of the site, how wonderful it is</p>
                                <hr>
                                <a href="#" class="btn btn-primary my_button">course info</a>
                            </div>
                            <div class="div_my_between">
                                <div class="div_flex">
                                    <i class="fas fa-user icon"></i>
                                    <p class="my_color">650</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-dollar-sign icon"></i>
                                    <p class="my_color">90</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <img src="image5/team-03.png" class="image_team">
                            <img src="image5/php.jfif" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">php language</h5>
                                <p class="my_color">I am proficient in php, this language works to build the structure of the site, how wonderful it is</p>
                                <hr>
                                <a href="#" class="btn btn-primary my_button">course info</a>
                            </div>
                            <div class="div_my_between">
                                <div class="div_flex">
                                    <i class="fas fa-user icon"></i>
                                    <p class="my_color">950</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-dollar-sign icon"></i>
                                    <p class="my_color">250</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <img src="image5/team-05.png" class="image_team">
                            <img src="image5/sql.jfif" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">sql language</h5>
                                <p class="my_color">I am proficient in sql, this language works to build the structure of the site, how wonderful it is</p>
                                <hr>
                                <a href="#" class="btn btn-primary my_button">course info</a>
                            </div>
                            <div class="div_my_between">
                                <div class="div_flex">
                                    <i class="fas fa-user icon"></i>
                                    <p class="my_color">850</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-dollar-sign icon"></i>
                                    <p class="my_color">150</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end main1 -->
                    <!-- start main2 -->
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <img src="image5/team-05.png" class="image_team">
                            <img src="image5/engineering.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">engineering language</h5>
                                <p class="my_color">I am proficient in engineering, this language works to build the structure of the site, how wonderful it is</p>
                                <hr>
                                <a href="#" class="btn btn-primary my_button">course info</a>
                            </div>
                            <div class="div_my_between">
                                <div class="div_flex">
                                    <i class="fas fa-user icon"></i>
                                    <p class="my_color">1150</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-dollar-sign icon"></i>
                                    <p class="my_color">210</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <img src="image5/team-01.png" class="image_team">
                            <img src="image5/java.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">java language</h5>
                                <p class="my_color">I am proficient in java, this language works to build the structure of the site, how wonderful it is</p>
                                <hr>
                                <a href="#" class="btn btn-primary my_button">course info</a>
                            </div>
                            <div class="div_my_between">
                                <div class="div_flex">
                                    <i class="fas fa-user icon"></i>
                                    <p class="my_color">650</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-dollar-sign icon"></i>
                                    <p class="my_color">90</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <img src="image5/team-03.png" class="image_team">
                            <img src="image5/office.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">office language</h5>
                                <p class="my_color">I am proficient in office, this language works to build the structure of the site, how wonderful it is</p>
                                <hr>
                                <a href="#" class="btn btn-primary my_button">course info</a>
                            </div>
                            <div class="div_my_between">
                                <div class="div_flex">
                                    <i class="fas fa-user icon"></i>
                                    <p class="my_color">850</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-dollar-sign icon"></i>
                                    <p class="my_color">145</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <img src="image5/team-02.png" class="image_team">
                            <img src="image5/programming Language.jfif" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Language language</h5>
                                <p class="my_color">I am proficient in Language, this language works to build the structure of the site, how wonderful it is</p>
                                <hr>
                                <a href="#" class="btn btn-primary my_button">course info</a>
                            </div>
                            <div class="div_my_between">
                                <div class="div_flex">
                                    <i class="fas fa-user icon"></i>
                                    <p class="my_color">850</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-dollar-sign icon"></i>
                                    <p class="my_color">150</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 div_col">
                        <div class="card">
                            <img src="image5/team-03.png" class="image_team">
                            <img src="image5/xml.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">xml language</h5>
                                <p class="my_color">I am proficient in xml, this language works to build the structure of the site, how wonderful it is</p>
                                <hr>
                                <a href="#" class="btn btn-primary my_button">course info</a>
                            </div>
                            <div class="div_my_between">
                                <div class="div_flex">
                                    <i class="fas fa-user icon"></i>
                                    <p class="my_color">950</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-dollar-sign icon"></i>
                                    <p class="my_color">250</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end main2 -->
                </div>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap5/js5/bootstrap.bundle.min.js"></script>
<script src="bootstrap5/js5/all.min.js"></script>

</html>