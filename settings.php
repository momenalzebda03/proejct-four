<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css5/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap5/css5/project_four.css">
    <title>settigns</title>
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
            print "<a href='settings.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex my_all'><i class='fa-solid fa-gear icon'></i><p class='my_P'>settings</p></div></a>";
            ?>
            <a href="#">
                <div class="div_flex">
                    <i class="fa-solid fa-user icon"></i>
                    <p class="my_P">profile</p>
                </div>
            </a>
            <a href="#">
                <div class="div_flex">
                    <i class="fas fa-project-diagram icon"></i>
                    <p class="my_P">projects</p>
                </div>
            </a>
            <a href="#">
                <div class="div_flex">
                    <i class="fa-solid fa-graduation-cap icon"></i>
                    <p class="my_P">courses</p>
                </div>
            </a>
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
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick">
                            <h5 class="welcome">site control</h5>
                            <p class="my_color">control the website if there is manintenace</p>
                            <p>website control</p>
                            <div class="div_open">
                                <div class="div_p1">
                                    <p class="my_color">open/close website and type the reason</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                </div>
                            </div>
                            <br>
                            <textarea class="my_text" placeholder="close message content"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick">
                            <h5 class="welcome">general info</h5>
                            <p class="my_color">genral information about your account</p>
                            <?php

                            if (isset($_POST["my_button"])) {

                                $louk_id = $_GET["louk_session"];

                                $my_jop = $_POST["jop"];

                                $table = $data->query("UPDATE `dashboard` SET `jop`='$my_jop' where the_id = $louk_id");

                                if ($table > 0) {
                                    print "تم التعديل";
                                } else {
                                    print "لم يتم التعديل";
                                }
                            }
                            ?>
                            <form action="" method="POST" class="my_form">
                                <label for="">first jop</label>
                                <br>
                                <br>
                                <input type="text" placeholder="first jop" name="jop" require>
                                <br>
                                <br>
                                <label for="">last jop</label>
                                <br>
                                <br>
                                <input type="text" placeholder="last jop" name="jop" require>
                                <br>
                                <br>
                                <label for="">email</label>
                                <br>
                                <br>
                                <div class="div_flex">
                                    <input type="email" placeholder="o@nn.sa" readonly>
                                    <input type="submit" value="change" class="a_change" name="my_button">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick">
                            <h5 class="welcome">security info</h5>
                            <p class="my_color">security information about your account</p>
                            <div class="div_between_here">
                                <div class="div_my_left">
                                    <p class="welcome">password</p>
                                    <p class="my_color">last change on 25/10/2021</p>
                                </div>
                                <?php

                                $louk_id = $_GET["louk_session"];

                                $table = $data->query("select * from singup where id = $louk_id");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<a href='update2.php?id2=" . $row["id"] . "'><button type='button' class='btn btn-primary my_button'>change</button></a>";
                                    }
                                }
                                ?>
                            </div>
                            <hr>
                            <div class="div_between_here">
                                <div class="">
                                    <p class="welcome">tow-factor authenticaltion</p>
                                    <p class="my_color">enable/disable the feature</p>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                </div>
                            </div>
                            <hr>
                            <div class="div_between_here">
                                <div class="">
                                    <p class="welcome">devices</p>
                                    <p class="my_color">check the login devices list</p>
                                </div>
                                <div class="">
                                    <?php

                                    if (isset($_POST["louk_button"])) {

                                        $louk_id = $_GET["louk_session"];

                                        $table = $data->query("select * from singup where id = $louk_id");

                                        if ($table->num_rows > 0) {
                                            while ($row = $table->fetch_assoc()) {
                                                print $row["password"];
                                            }
                                        }
                                    }
                                    ?>
                                    <form action="" method="POST">
                                        <input type="submit" name="louk_button" value="devices">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end main1 -->
                    <!-- start main2 -->
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick">
                            <h5 class="welcome">social info</h5>
                            <p class="my_color">social media information</p>
                            <div class="div_flex">
                                <div class="my_icon">
                                    <i class="fab fa-twitter-square icon"></i>
                                    <i class="fab fa-facebook-square icon"></i>
                                    <i class="fab fa-linkedin icon"></i>
                                    <i class="fab fa-youtube-square icon"></i>
                                </div>
                                <div class="div_input">
                                    <form action="" method="">
                                        <br>
                                        <br>
                                        <input type="text" placeholder="twitter username">
                                        <br>
                                        <br>
                                        <br>
                                        <input type="text" placeholder="twitter username">
                                        <br>
                                        <br>
                                        <br>
                                        <input type="text" placeholder="twitter username">
                                        <br>
                                        <br>
                                        <br>
                                        <input type="text" placeholder="twitter username">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick">
                            <h5 class="welcome">widgets control</h5>
                            <p class="my_color">show/hide widgets</p>
                            <div class="my_flex">
                                <div class="div_input">
                                    <input type="checkbox">
                                    <input type="checkbox">
                                    <input type="checkbox">
                                    <input type="checkbox">
                                    <input type="checkbox">
                                    <input type="checkbox">
                                </div>
                                <div class="div_input" style="margin-top: 4px;">
                                    <a href="#">quick draft</a>
                                    <?php

                                    $table = $data->query("select * from table_number");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<a href='update3.php?louk_session=" . $_SESSION["session_id"] . "'>yearly target</a>";
                                            print "<a href='update4.php?louk_session=" . $_SESSION["session_id"] . "'>tickets statistics</a>";
                                            print "<a href='update5.php?louk_session=" . $_SESSION["session_id"] . "'>latest news</a>";
                                            print "<a href='update6.php?louk_session=" . $_SESSION["session_id"] . "'>latest news</a>";
                                            print "<a href='#'>top search litems</a>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick">
                            <h5 class="welcome">backup manager</h5>
                            <p class="my_color">control backup time and location</p>
                            <form action="" method="" class="louk_form">
                                <input type="radio" name="radio" id="1">
                                <label for="1">daily</label>
                                <br>
                                <br>
                                <input type="radio" name="radio" id="2">
                                <label for="2">weekly</label>
                                <br>
                                <br>
                                <input type="radio" name="radio" id="3">
                                <label for="3">monthly</label>
                            </form>
                            <hr>
                            <div class="yes_flex">
                                <div class="div_book">
                                    <i class="fas fa-book icon"></i>
                                    <p class="welcome">megaman</p>
                                </div>
                                <div class="div_book">
                                    <i class="fas fa-book icon"></i>
                                    <p class="welcome">zero</p>
                                </div>
                                <div class="div_book">
                                    <i class="fas fa-book icon"></i>
                                    <p class="welcome">sigma</p>
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