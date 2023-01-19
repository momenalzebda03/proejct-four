<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css5/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap5/css5/project_four.css">
    <title>DASHBOARD</title>
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
            print "<a href='dashboard.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex my_all'><i class='fas fa-chart-line icon'></i> <p class='my_P'>dashboard</p></div></a>";
            print "<a href='settings.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-gear icon'></i><p class='my_P'>settings</p></div></a>";
            print "<a href='profile.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-user icon'></i><p class='my_P'>profile</p></div></a>";
            print "<a href='projects.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fas fa-project-diagram icon'></i><p class='my_P'>projects</p></div></a>";
            print "<a href='courses.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-graduation-cap icon'></i><p class='my_P'>courses</p></div></a>";
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
                <h2>dashboard</h2>
                <div class="div_afeter_before"></div>
            </div>
            <!-- end main -->
            <br>
            <br>
            <!-- start main1 -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_main_my">
                            <div class="div_welcome">
                                <div class="my_welcome">
                                    <h5 class="welcome">welcome</h5>
                                    <?php

                                    $louk_id = $_GET["louk_session"];

                                    $table = $data->query("select * from singup where id = $louk_id");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p class='my_color'>" . $row["name"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="div_image">
                                    <img src="image5/welcome.png" alt="">
                                </div>
                            </div>
                            <div class="louk_image">
                                <img src="image5/avatar.png" alt="">
                            </div>
                            <hr>
                            <div class="div_flex">
                                <div class="div_flex1">
                                    <?php
                                    $louk_id = $_GET["louk_session"];

                                    $table = $data->query("select * from singup where id = $louk_id");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p>" . $row["name"] . "</p>";
                                        }
                                    }
                                    ?>
                                    <p class="my_color">developer</p>
                                </div>
                                <div class="div_flex2">
                                    <?php

                                    $table = $data->query("select * from dashboard");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p>" . $row["numberprojet"] . "</p>";
                                        }
                                    }
                                    ?>
                                    <p class="my_color">projects</p>
                                </div>
                                <div class="div_flex3">
                                    <?php

                                    $table = $data->query("select * from dashboard");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p>" . $row["money"] . "</p>";
                                        }
                                    }

                                    $table = $data->query("select * from dashboard");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p class='my_color'>" . $row["jop"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="div_text_right">
                                <a href="#" class="btn btn-primary">profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_quick">
                            <h5 class="welcome">quick draft</h5>
                            <p class="my_color">write a draft for your ldeas</p>
                            <?php

                            if (isset($_GET["save"])) {

                                $my_title = $_GET["title"];
                                $my_thought = $_GET["thought"];

                                $table = $data->query("UPDATE `dashboard` SET `numberprojet`='$my_title',`money`='$my_thought'");

                                if ($table > 0) {
                                    print "تم التعديل";
                                } else {
                                    print "لم يتم التعديل";
                                }
                            }
                            ?>
                            <form action="" method="GET">
                                <input type="text" placeholder="Title number project" name="title">
                                <br>
                                <br>
                                <textarea name="thought" placeholder="your thought the money the name"></textarea>
                                <div class="div_text_right">
                                    <button class="btn btn-primary" name="save">save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_yearly">
                            <h5 class="welcome">yearly targets</h5>
                            <p class="my_color">targets of the year</p>
                            <div class="div_flex">
                                <div class="div_icon">
                                    <i class="fa-solid fa-dollar-sign" style="padding: 300%; background-color: #CCE3FF; color: blue;"></i>
                                </div>
                                <div class="div_my_left">
                                    <p class="my_color">money</p>
                                    <?php

                                    $table = $data->query("select * from table_number");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["money"] . "</h6>";
                                        }
                                    }
                                    ?>
                                    <div class="div_input"></div>
                                    <div class="div_input1" style="width: 200px; background-color: blue;"></div>
                                    <div class="my_number1" style="background-color: rgba(0, 0, 255, 0.874);">80%</div>
                                </div>
                            </div>
                            <div class="div_flex">
                                <div class="div_icon">
                                    <i class="fas fa-laptop-code" style="padding: 125%; background-color: rgba(255, 166, 0, 0.395); color: orange;"></i>
                                </div>
                                <div class="div_my_left">
                                    <p class="my_color">project</p>
                                    <?php

                                    $table = $data->query("select * from table_number");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["project"] . "</h6>";
                                        }
                                    }
                                    ?>
                                    <div class="div_input"></div>
                                    <div class="div_input2" style="width: 120px; background-color: orange;"></div>
                                    <div class="my_number1" style="background-color: orange;">55%</div>
                                </div>
                            </div>
                            <div class="div_flex">
                                <div class="div_icon">
                                    <i class="far fa-user" style="padding: 200%; background-color: rgba(0, 128, 0, 0.353); color: green;"></i>
                                </div>
                                <div class=" div_my_left">
                                    <p class="my_color">team</p>
                                    <?php

                                    $table = $data->query("select * from table_number");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6 class='welcome'>" . $row["team"] . "</h6>";
                                        }
                                    }
                                    ?>
                                    <div class="div_input"></div>
                                    <div class="div_input3" style="width: 170px; background-color: green;"></div>
                                    <div class="my_number1" style="background-color: green;">75%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end main1 -->
                    <!-- start main2 -->
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_tickets">
                            <h5 class="welcome">tickets statistics</h5>
                            <p class="my_color">everything about support tickets</p>
                            <div class="div_flex">
                                <div class="div_icon">
                                    <i class="fas fa-book icon" style="color: orange;"></i>
                                    <br>
                                    <br>
                                    <?php

                                    $table = $data->query("select * from table_tickets");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h5 class='welcome'>" . $row["total"] . "</h5>";
                                        }
                                    }
                                    ?>
                                    <p class="my_color">total</p>
                                </div>
                                <div class="div_icon">
                                    <i class="fas fa-spinner icon" style="color: blue;"></i>
                                    <br>
                                    <br>
                                    <?php

                                    $table = $data->query("select * from table_tickets");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h5 class='welcome'>" . $row["pending"] . "</h5>";
                                        }
                                    }
                                    ?>
                                    <p class="my_color">pending</p>
                                </div>
                            </div>
                            <div class="div_flex">
                                <div class="div_icon">
                                    <i class="fas fa-check icon" style="color: green;"></i>
                                    <br>
                                    <br>
                                    <?php

                                    $table = $data->query("select * from table_tickets");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h5 class='welcome'>" . $row["closed"] . "</h5>";
                                        }
                                    }
                                    ?>
                                    <p class="my_color">closed</p>
                                </div>
                                <div class="div_icon">
                                    <i class="fas fa-times icon" style="color: red;"></i>
                                    <br>
                                    <br>
                                    <?php

                                    $table = $data->query("select * from table_tickets");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h5 class='welcome'>" . $row["deleted"] . "</h5>";
                                        }
                                    }
                                    ?>
                                    <p class="my_color">deleted</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_latest">
                            <h5 class="welcome">latest news</h5>
                            <br>
                            <div class="div_between">
                                <div class="my_flex">
                                    <div class="div_image">
                                        <img src="image5/news-01.png" alt="">
                                    </div>
                                    <div class="div_created">
                                        <?php

                                        $table = $data->query("select * from table_iamge where id = 1");

                                        if ($table->num_rows > 0) {
                                            while ($row = $table->fetch_assoc()) {
                                                print "<h6 class='welcome'>" . $row["stringg"] . "</h6>";
                                                print "<p class='my_color'>" . $row["strin"] . "</p>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="div_number">3 days ago</div>
                            </div>
                            <br>
                            <div class="div_between">
                                <div class="my_flex">
                                    <div class="div_image">
                                        <img src="image5/news-02.png" alt="">
                                    </div>
                                    <div class="div_created">
                                        <?php

                                        $table = $data->query("select * from table_iamge where id = 2");

                                        if ($table->num_rows > 0) {
                                            while ($row = $table->fetch_assoc()) {
                                                print "<h6 class='welcome'>" . $row["stringg"] . "</h6>";
                                                print "<p class='my_color'>" . $row["strin"] . "</p>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="div_number">5 days ago</div>
                            </div>
                            <br>
                            <div class="div_between">
                                <div class="my_flex">
                                    <div class="div_image">
                                        <img src="image5/news-03.png" alt="">
                                    </div>
                                    <div class="div_created">
                                        <?php

                                        $table = $data->query("select * from table_iamge where id = 3");

                                        if ($table->num_rows > 0) {
                                            while ($row = $table->fetch_assoc()) {
                                                print "<h6 class='welcome'>" . $row["stringg"] . "</h6>";
                                                print "<p class='my_color'>" . $row["strin"] . "</p>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="div_number">7 days ago</div>
                            </div>
                            <br>
                            <div class="div_between">
                                <div class="my_flex">
                                    <div class="div_image">
                                        <img src="image5/news-04.png" alt="">
                                    </div>
                                    <div class="div_created">
                                        <?php

                                        $table = $data->query("select * from table_iamge where id = 4");

                                        if ($table->num_rows > 0) {
                                            while ($row = $table->fetch_assoc()) {
                                                print "<h6 class='welcome'>" . $row["stringg"] . "</h6>";
                                                print "<p class='my_color'>" . $row["strin"] . "</p>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="div_number">9 days ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_latest">
                            <h5 class="welcome">latest tasks</h5>
                            <div class="div_flex div_befor">
                                <div class="div_right1">
                                    <?php

                                    $table = $data->query("select * from table_img where id = 1");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p class='welcome'>" . $row["stringg"] . "</p>";
                                            print "<p class='my_color'>" . $row["strig"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="div_left1">
                                    <i class="far fa-trash-alt icon"></i>
                                </div>
                            </div>
                            <div class="div_flex div_befor">
                                <div class="div_right1">
                                    <?php

                                    $table = $data->query("select * from table_img where id = 2");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p class='welcome'>" . $row["stringg"] . "</p>";
                                            print "<p class='my_color'>" . $row["strig"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="div_left1">
                                    <i class="far fa-trash-alt icon"></i>
                                </div>
                            </div>
                            <div class="div_flex div_befor">
                                <div class="div_right1">
                                    <?php

                                    $table = $data->query("select * from table_img where id = 3");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p class='welcome'>" . $row["stringg"] . "</p>";
                                            print "<p class='my_color'>" . $row["strig"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="div_left1">
                                    <i class="far fa-trash-alt icon"></i>
                                </div>
                            </div>
                            <div class="div_flex div_befor">
                                <div class="div_right1">
                                    <del>
                                        <p class="welcome">attend the meeting</p>
                                    </del>
                                    <del>
                                        <p class="my_color">attend the project business analysis meeting</p>
                                    </del>
                                </div>
                                <div class="div_left1">
                                    <i class="far fa-trash-alt" style="color: #eee;"></i>
                                </div>
                            </div>
                            <div class="div_flex div_befor">
                                <div class="div_right1">
                                    <?php

                                    $table = $data->query("select * from table_img where id = 4");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p class='welcome'>" . $row["stringg"] . "</p>";
                                            print "<p class='my_color'>" . $row["strig"] . "</p>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="div_left1">
                                    <i class="far fa-trash-alt icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end main2 -->
                    <!-- start main3 -->
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_top">
                            <h5 class="welcome">top search items</h5>
                            <div class="div_flex">
                                <p class="my_color">keyword</p>
                                <p class="my_color">search count</p>
                            </div>
                            <div class="div_flex">
                                <p class="">programming</p>
                                <p class="my_back">220</p>
                            </div>
                            <div class="div_flex">
                                <p class="">javascript</p>
                                <p class="my_back">180</p>
                            </div>
                            <div class="div_flex">
                                <p class="">php</p>
                                <p class="my_back">160</p>
                            </div>
                            <div class="div_flex">
                                <p class="">code</p>
                                <p class="my_back">145</p>
                            </div>
                            <div class="div_flex">
                                <p class="">design</p>
                                <p class="my_back">110</p>
                            </div>
                            <div class="div_flex">
                                <p class="">logic</p>
                                <p class="my_back">95</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_latest">
                            <h5 class="welcome">latest uploads</h5>
                            <br>
                            <div class="div_between">
                                <div class="my_flex">
                                    <div class="div_image">
                                        <img src="image5/pdf.svg" alt="">
                                    </div>
                                    <div class="div_created">
                                        <h6 class="welcome">my-file.pdf</h6>
                                        <p class="my_color">elzero</p>
                                    </div>
                                </div>
                                <div class="div_number">2.9mb</div>
                            </div>
                            <div class="div_between">
                                <div class="my_flex">
                                    <div class="div_image">
                                        <img src="image5/avi.svg" alt="">
                                    </div>
                                    <div class="div_created">
                                        <h6 class="welcome">my-file.avi</h6>
                                        <p class="my_color">admin</p>
                                    </div>
                                </div>
                                <div class="div_number">4.9mb</div>
                            </div>
                            <div class="div_between">
                                <div class="my_flex">
                                    <div class="div_image">
                                        <img src="image5/psd.svg" alt="">
                                    </div>
                                    <div class="div_created">
                                        <h6 class="welcome">my-file.psd</h6>
                                        <p class="my_color">osama</p>
                                    </div>
                                </div>
                                <div class="div_number">4.5mb</div>
                            </div>
                            <div class="div_between">
                                <div class="my_flex">
                                    <div class="div_image">
                                        <img src="image5/zip.svg" alt="">
                                    </div>
                                    <div class="div_created">
                                        <h6 class="welcome">my-file.zip</h6>
                                        <p class="my_color">user</p>
                                    </div>
                                </div>
                                <div class="div_number">8.9mb</div>
                            </div>
                            <div class="div_between">
                                <div class="my_flex">
                                    <div class="div_image">
                                        <img src="image5/dll.svg" alt="">
                                    </div>
                                    <div class="div_created">
                                        <h6 class="welcome">my-file.dll</h6>
                                        <p class="my_color">admin</p>
                                    </div>
                                </div>
                                <div class="div_number">4.9mb</div>
                            </div>
                            <div class="div_between">
                                <div class="my_flex">
                                    <div class="div_image">
                                        <img src="image5/eps.svg" alt="">
                                    </div>
                                    <div class="div_created">
                                        <h6 class="welcome">my-file.eps</h6>
                                        <p class="my_color">desiner</p>
                                    </div>
                                </div>
                                <div class="div_number">8.9mb</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_latest">
                            <h5 class="welcome">last project progress</h5>
                            <div class="here_flex">
                                <div class="div_hr">
                                    <div class="div_circle"></div>
                                    <div class="div_circle"></div>
                                    <div class="div_circle"></div>
                                    <div class="div_circle"></div>
                                    <div class="div_circle" style="background-color: white;"></div>
                                </div>
                                <div class="div_p">
                                    <p>got the project</p>
                                    <p>started the project</p>
                                    <p>the project about to finish</p>
                                    <p>test the project</p>
                                    <p>finish the project & get money</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end main3 -->
                    <!-- start main4 -->
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_reminders">
                            <h5 class="welcome">reminders</h5>
                            <div class="div_flex">
                                <div class="div_circle">
                                    <div class="circle" style="background-color: blue;"></div>
                                    <div class="circle" style="background-color: green;"></div>
                                    <div class="circle" style="background-color: orange;"></div>
                                    <div class="circle" style="background-color: red;"></div>
                                </div>
                                <div class="div_hr">
                                    <div class="my_hr" style="background-color: blue;"></div>
                                    <div class="my_hr" style="background-color: green;"></div>
                                    <div class="my_hr" style="background-color: orange;"></div>
                                    <div class="my_hr" style="background-color: red;"></div>
                                </div>
                                <div class="div_myp">
                                    <h6 class="weclome">check my tasks list</h6>
                                    <p class="my_color">28/09/2022 - 20:00am</p>
                                    <h6 class="weclome">check my projects</h6>
                                    <p class="my_color">26/10/2022 - 12:00am</p>
                                    <h6 class="weclome">call all my clients</h6>
                                    <p class="my_color">05/11/2022 - 12:00am</p>
                                    <br>
                                    <h6 class="weclome">finish the developer workshop</h6>
                                    <p class="my_color">20/12/2022 - 12:00am</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_latest">
                            <h5 class="welcome">latest post</h5>
                            <div class="louk_flex">
                                <div class="div_image">
                                    <img src="image5/avatar.png" alt="">
                                </div>
                                <div class="div_name">
                                    <?php
                                    $louk_id = $_GET["louk_session"];

                                    $table = $data->query("select * from singup where id = $louk_id");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<h6>" . $row["name"] . "</h6>";
                                        }
                                    }
                                    ?>
                                    <p class="my_color">about 3 hours ago</p>
                                </div>
                            </div>
                            <hr>
                            <p class="my_you">you can fool all of the people some of the time, and some of<br>the people
                                all of the
                                time, but you can't fool all of the people<br>all of the time.</p>
                            <hr>
                            <br>
                            <div class="div_between1">
                                <div class="div_flex">
                                    <i class="fas fa-heart icon"></i>
                                    <p class="my_color">1.8k</p>
                                </div>
                                <div class="div_flex">
                                    <i class="fas fa-comment icon"></i>
                                    <p class="my_color">500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 div_col">
                        <div class="div_latest">
                            <h5 class="welcome">social media stats</h5>
                            <br>
                            <div class="div_back" style="background-color: #D2ECFC;">
                                <div class="flex">
                                    <div class="div_icon" style="background-color: #1877F2;">
                                        <i class="fab fa-twitter icon"></i>
                                    </div>
                                    <div class="div_between2">
                                        <div class="div_p1">
                                            <p class="my_p1" style="color: blue;">90k followers</p>
                                        </div>
                                        <div class="div_p1">
                                            <a href="#">
                                                <p class="my_p2" style="background-color: #1877F2;">follow</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="div_back" style="background-color:#D2ECFC;">
                                <div class="flex">
                                    <div class="div_icon" style="background-color: #1877F2;">
                                        <i class="fab fa-facebook-f icon"></i>
                                    </div>
                                    <div class="div_between2">
                                        <div class="div_p1">
                                            <p class="my_p1" style="color: blue;">90k followers</p>
                                        </div>
                                        <div class="div_p1">
                                            <a href="#">
                                                <p class="my_p2">like</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="div_back" style="background-color: #FFCCCC;">
                                <div class="flex">
                                    <div class="div_icon" style="background-color: red;">
                                        <i class="fab fa-youtube icon"></i>
                                    </div>
                                    <div class="div_between2">
                                        <div class="div_p1">
                                            <p class="my_p1" style="color: red;">1m subscribe</p>
                                        </div>
                                        <div class="div_p1">
                                            <a href="#">
                                                <p class="my_p2" style="background-color: red;">subscribe</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="div_back" style="background-color: #D2ECFC;">
                                <div class="flex">
                                    <div class="div_icon" style="background-color: #1877F2;">
                                        <i class="fab fa-linkedin-in icon"></i>
                                    </div>
                                    <div class="div_between2">
                                        <div class="div_p1">
                                            <p class="my_p1" style="color: blue;">70k followers</p>
                                        </div>
                                        <div class="div_p1">
                                            <a href="#">
                                                <p class="my_p2">follow</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end main4 -->
                    <!-- start table -->
                    <div class="col-sm-12 col-md-12 col-lg-12 div_col">
                        <div class="div_table">
                            <h5 class="welcome">projects</h5>
                            <div class="table-scroll">
                                <div class="table-wrap">
                                    <table class="main-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">name</th>
                                                <th scope="col">finish date</th>
                                                <th scope="col">client</th>
                                                <th scope="col">price</th>
                                                <th scope="col">team</th>
                                                <th scope="col">status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php

                                                $table = $data->query("select * from table_projects where id = 1");

                                                if ($table->num_rows > 0) {
                                                    while ($row = $table->fetch_assoc()) {
                                                        print "<td>" . $row["name"] . "</td>";
                                                        print "<td>" . $row["datee"] . "</td>";
                                                        print "<td>" . $row["Client"] . "</td>";
                                                        print "<td>" . $row["Price"] . "</td>";
                                                    }
                                                }
                                                ?>
                                                <td>
                                                    <div class="my_image">
                                                        <?php

                                                        $table = $data->query("select * from table_projects where id = 1");

                                                        if ($table->num_rows > 0) {
                                                            while ($row = $table->fetch_assoc()) {
                                                                print "<img src='image5/" . $row["Team"] . "' alt='' style='left: -7%;'>";
                                                                print "<img src='image5/" . $row["image_one"] . "' alt='' style='left: -14%;'>";
                                                                print "<img src='image5/" . $row["image_tow"] . "' alt='' style='left: -22%;'>";
                                                                print "<img src='image5/" . $row["image_three"] . "' alt='' style='left: -25%;'>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php

                                                    $table = $data->query("select * from table_projects where id = 1");

                                                    if ($table->num_rows > 0) {
                                                        while ($row = $table->fetch_assoc()) {
                                                            print "<a href='update1.php?my_id1=" . $row["id"] . "' class='btn btn-warning here_color' style='background-color: orange;'>Warning</a>";
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <?php

                                                $table = $data->query("select * from table_projects where id = 2");

                                                if ($table->num_rows > 0) {
                                                    while ($row = $table->fetch_assoc()) {
                                                        print "<td>" . $row["name"] . "</td>";
                                                        print "<td>" . $row["datee"] . "</td>";
                                                        print "<td>" . $row["Client"] . "</td>";
                                                        print "<td>" . $row["Price"] . "</td>";
                                                    }
                                                }
                                                ?>
                                                <td>
                                                    <div class="my_image">
                                                        <?php

                                                        $table = $data->query("select * from table_projects where id = 2");

                                                        if ($table->num_rows > 0) {
                                                            while ($row = $table->fetch_assoc()) {
                                                                print "<img src='image5/" . $row["Team"] . "' alt='' style='left: -7%;'>";
                                                                print "<img src='image5/" . $row["image_one"] . "' alt='' style='left: -14%;'>";
                                                                print "<img src='image5/" . $row["image_tow"] . "' alt='' style='left: -22%;'>";
                                                                print "<img src='image5/" . $row["image_three"] . "' alt='' style='left: -25%;'>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php

                                                    $table = $data->query("select * from table_projects where id = 2");

                                                    if ($table->num_rows > 0) {
                                                        while ($row = $table->fetch_assoc()) {
                                                            print "<a href='update1.php?my_id1=" . $row["id"] . "' class='btn btn-primary'>in progress</a>";
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <?php

                                                $table = $data->query("select * from table_projects where id = 3");

                                                if ($table->num_rows > 0) {
                                                    while ($row = $table->fetch_assoc()) {
                                                        print "<td>" . $row["name"] . "</td>";
                                                        print "<td>" . $row["datee"] . "</td>";
                                                        print "<td>" . $row["Client"] . "</td>";
                                                        print "<td>" . $row["Price"] . "</td>";
                                                    }
                                                }
                                                ?>
                                                <td>
                                                    <div class="my_image">
                                                        <?php

                                                        $table = $data->query("select * from table_projects where id = 3");

                                                        if ($table->num_rows > 0) {
                                                            while ($row = $table->fetch_assoc()) {
                                                                print "<img src='image5/" . $row["Team"] . "' alt=''' style='left: -7%;''>";
                                                                print "<img src='image5/" . $row["image_one"] . "' alt='' style='left: -14%;'>";
                                                                print "<img src='image5/" . $row["image_tow"] . "' alt='' style='left: -22%;'>";
                                                                print "<img src='image5/" . $row["image_three"] . "' alt='' style='left: -25%;'>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php

                                                    $table = $data->query("select * from table_projects where id = 3");

                                                    if ($table->num_rows > 0) {
                                                        while ($row = $table->fetch_assoc()) {
                                                            print "<a href='update1.php?my_id1=" . $row["id"] . "' class='btn btn-success'>completed</a>";
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <?php

                                                $table = $data->query("select * from table_projects where id = 4");

                                                if ($table->num_rows > 0) {
                                                    while ($row = $table->fetch_assoc()) {
                                                        print "<td>" . $row["name"] . "</td>";
                                                        print "<td>" . $row["datee"] . "</td>";
                                                        print "<td>" . $row["Client"] . "</td>";
                                                        print "<td>" . $row["Price"] . "</td>";
                                                    }
                                                }
                                                ?>
                                                <td>
                                                    <div class="my_image">
                                                        <?php

                                                        $table = $data->query("select * from table_projects where id = 4");

                                                        if ($table->num_rows > 0) {
                                                            while ($row = $table->fetch_assoc()) {
                                                                print "<img src='image5/" . $row["Team"] . "' alt=''' style='left: -7%;''>";
                                                                print "<img src='image5/" . $row["image_one"] . "' alt='' style='left: -14%;'>";
                                                                print "<img src='image5/" . $row["image_tow"] . "' alt='' style='left: -22%;'>";
                                                                print "<img src='image5/" . $row["image_three"] . "' alt='' style='left: -25%;'>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php

                                                    $table = $data->query("select * from table_projects where id = 4");

                                                    if ($table->num_rows > 0) {
                                                        while ($row = $table->fetch_assoc()) {
                                                            print "<a href='update1.php?my_id1=" . $row["id"] . "' class='btn btn-success'>completed</a>";
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <?php

                                                $table = $data->query("select * from table_projects where id = 5");

                                                if ($table->num_rows > 0) {
                                                    while ($row = $table->fetch_assoc()) {
                                                        print "<td>" . $row["name"] . "</td>";
                                                        print "<td>" . $row["datee"] . "</td>";
                                                        print "<td>" . $row["Client"] . "</td>";
                                                        print "<td>" . $row["Price"] . "</td>";
                                                    }
                                                }
                                                ?>
                                                <td>
                                                    <div class="my_image">
                                                        <?php

                                                        $table = $data->query("select * from table_projects where id = 5");

                                                        if ($table->num_rows > 0) {
                                                            while ($row = $table->fetch_assoc()) {
                                                                print "<img src='image5/" . $row["Team"] . "' alt=''' style='left: -7%;''>";
                                                                print "<img src='image5/" . $row["image_one"] . "' alt='' style='left: -14%;'>";
                                                                print "<img src='image5/" . $row["image_tow"] . "' alt='' style='left: -22%;'>";
                                                                print "<img src='image5/" . $row["image_three"] . "' alt='' style='left: -25%;'>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php

                                                    $table = $data->query("select * from table_projects where id = 5");

                                                    if ($table->num_rows > 0) {
                                                        while ($row = $table->fetch_assoc()) {
                                                            print "<a href='update1.php?my_id1=" . $row["id"] . "' class='btn btn-danger'>rejected</a>";
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <?php

                                                $table = $data->query("select * from table_projects where id = 6");

                                                if ($table->num_rows > 0) {
                                                    while ($row = $table->fetch_assoc()) {
                                                        print "<td>" . $row["name"] . "</td>";
                                                        print "<td>" . $row["datee"] . "</td>";
                                                        print "<td>" . $row["Client"] . "</td>";
                                                        print "<td>" . $row["Price"] . "</td>";
                                                    }
                                                }
                                                ?>
                                                <td>
                                                    <div class="my_image">
                                                        <?php

                                                        $table = $data->query("select * from table_projects where id = 6");

                                                        if ($table->num_rows > 0) {
                                                            while ($row = $table->fetch_assoc()) {
                                                                print "<img src='image5/" . $row["Team"] . "' alt=''' style='left: -7%;''>";
                                                                print "<img src='image5/" . $row["image_one"] . "' alt='' style='left: -14%;'>";
                                                                print "<img src='image5/" . $row["image_tow"] . "' alt='' style='left: -22%;'>";
                                                                print "<img src='image5/" . $row["image_three"] . "' alt='' style='left: -25%;'>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php

                                                    $table = $data->query("select * from table_projects where id = 6");

                                                    if ($table->num_rows > 0) {
                                                        while ($row = $table->fetch_assoc()) {
                                                            print "<a href='update1.php?my_id1=" . $row["id"] . "' class='btn btn-success'>completed</a>";
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end table -->
        </div>
    </div>
</body>
<script src="bootstrap5/js5/bootstrap.bundle.min.js"></script>
<script src="bootstrap5/js5/all.min.js"></script>

</html>