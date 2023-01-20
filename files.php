<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css5/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap5/css5/project_four.css">
    <title>FILES</title>
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
            print "<a href='courses.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-graduation-cap icon'></i><p class='my_P'>courses</p></div></a>";
            print "<a href='frinde.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-user icon'></i><p class='my_P'>frindes</p></div></a>";
            print "<a href='files.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex my_all'><i class='fas fa-file icon'></i><p class='my_P'>files</p></div></a>";
            print "<a href='plans.php?louk_session=" . $_SESSION["session_id"] . "'><div class='div_flex'><i class='fa-solid fa-plane icon'></i><p class='my_P'>plans</p></div></a>";
            ?>
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
                <h2>files</h2>
                <div class="div_afeter_before"></div>
            </div>
            <!-- end main -->
            <br>
            <br>
            <i class="fal fa-check"></i>
            <div class="container">
                <div class="div_flex_dounwlod">
                    <!-- start main1 -->
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/pdf.svg" alt="">
                            <p class="welcome">my-file.pdf</p>
                        </div>
                        <p class="my_color">momen</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">20/06/2020</p>
                            <p class="my_color">5.5MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/pdf.svg" alt="">
                            <p class="welcome">my-file.avi</p>
                        </div>
                        <p class="my_color">admin</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">10/05/2021</p>
                            <p class="my_color">12.5MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/eps.svg" alt="">
                            <p class="welcome">my-file.eps</p>
                        </div>
                        <p class="my_color">uploader</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">2.7MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/psd.svg" alt="">
                            <p class="welcome">my-file.psd</p>
                        </div>
                        <p class="my_color">uploader</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">15.1MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/dll.svg" alt="">
                            <p class="welcome">my-file.dll</p>
                        </div>
                        <p class="my_color">coder</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">15.1MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/pdf.svg" alt="">
                            <p class="welcome">my-file.png</p>
                        </div>
                        <p class="my_color">designer</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">1.1MB</p>
                        </div>
                    </div>
                    <div class="my_height">
                        <h6 class="welcome">files statistics</h6>
                        <div class="div_right1">
                            <div class="div_icon" style="background-color: rgba(0, 0, 255, 0.304); color: blue;">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="this_between">
                                <div class="div_p">
                                    <p class="welcome">pdf files</p>
                                    <p class="my_color">130</p>
                                </div>
                                <div class="">
                                    <p class="my_color" style="font-size: 10px; margin-top: 5px;">6.5GB</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="div_right1">
                            <div class="div_icon" style="background-color: rgba(0, 128, 0, 0.258); color: green;">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="this_between">
                                <div class="div_p">
                                    <p class="welcome">images</p>
                                    <p class="my_color">115 files</p>
                                </div>
                                <div class="">
                                    <p class="my_color" style="font-size: 10px; margin-top: 5px;">6.5GB</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="div_right1">
                            <div class="div_icon" style="background-color: rgba(255, 0, 0, 0.4); color: red;">
                                <i class="fas fa-file-word"></i>
                            </div>
                            <div class="this_between">
                                <div class="div_p">
                                    <p class="welcome">word files</p>
                                    <p class="my_color">110 files</p>
                                </div>
                                <div class="">
                                    <p class="my_color" style="font-size: 10px; margin-top: 5px;">3.2GB</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="div_right1">
                            <div class="div_icon" style="background-color: rgba(255, 166, 0, 0.362); color: orange;">
                                <i class="fas fa-file-csv"></i>
                            </div>
                            <div class="this_between">
                                <div class="div_p">
                                    <p class="welcome">csv files</p>
                                    <p class="my_color">99 files</p>
                                </div>
                                <div class="">
                                    <p class="my_color" style="font-size: 10px; margin-top: 5px;">2.9GB</p>
                                </div>
                            </div>
                        </div>
                        <i class="fas fa-arrow-alt-circle-up im_icon"></i>
                        <button type="button" class="btn btn-primary im_button">upload</button>
                    </div>
                    <!-- end main1 -->
                </div>
                <div class="div_flex_dounwlod" style="margin-top: -190px;">
                    <!-- start main2 -->
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/dll.svg" alt="">
                            <p class="welcome">my-file.dll</p>
                        </div>
                        <p class="my_color">coder</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">2.2MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/pdf.svg" alt="">
                            <p class="welcome">my-file.png</p>
                        </div>
                        <p class="my_color">desinger</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">1.1MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/psd.svg" alt="">
                            <p class="welcome">my-file.psd</p>
                        </div>
                        <p class="my_color">osama</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">15.1MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/pdf.svg" alt="">
                            <p class="welcome">my-file.pdf</p>
                        </div>
                        <p class="my_color">momen</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">5.5MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/avi.svg" alt="">
                            <p class="welcome">my-file.avi</p>
                        </div>
                        <p class="my_color">admin</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">12.5MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/eps.svg" alt="">
                            <p class="welcome">my-file.eps</p>
                        </div>
                        <p class="my_color">uploader</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">2.7MB</p>
                        </div>
                    </div>
                    <!-- end main2 -->
                </div>
                <div class="div_flex_dounwlod" style="margin-top: 10px;">
                    <!-- start main3 -->
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/pdf.svg" alt="">
                            <p class="welcome">my-file.pdf</p>
                        </div>
                        <p class="my_color">momen</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">5.5MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/avi.svg" alt="">
                            <p class="welcome">my-file.avi</p>
                        </div>
                        <p class="my_color">admin</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">5.5MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/eps.svg" alt="">
                            <p class="welcome">my-file.eps</p>
                        </div>
                        <p class="my_color">uploader</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">5.7MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/psd.svg" alt="">
                            <p class="welcome">my-file.psd</p>
                        </div>
                        <p class="my_color">osama</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">15.1MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/dll.svg" alt="">
                            <p class="welcome">my-file.dll</p>
                        </div>
                        <p class="my_color">coder</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">2.7MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/pdf.svg" alt="">
                            <p class="welcome">my-file.png</p>
                        </div>
                        <p class="my_color">desinger</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">1.1MB</p>
                        </div>
                    </div>
                    <!-- end main3 -->
                </div>
                <div class="div_flex_dounwlod" style="margin-top: 10px;">
                    <!-- start main4 -->
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/dll.svg" alt="">
                            <p class="welcome">my-file.dll</p>
                        </div>
                        <p class="my_color">coder</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">2.2MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/pdf.svg" alt="">
                            <p class="welcome">my-file.png</p>
                        </div>
                        <p class="my_color">desinger</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">1.1MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/psd.svg" alt="">
                            <p class="welcome">my-file.psd</p>
                        </div>
                        <p class="my_color">osama</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">15.1MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/pdf.svg" alt="">
                            <p class="welcome">my-file.pdf</p>
                        </div>
                        <p class="my_color">momen</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">5.5MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/avi.svg" alt="">
                            <p class="welcome">my-file.avi</p>
                        </div>
                        <p class="my_color">admin</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">12.5MB</p>
                        </div>
                    </div>
                    <div class="flex1">
                        <i class="fas fa-download icon"></i>
                        <div class="div_center">
                            <img src="image5/eps.svg" alt="">
                            <p class="welcome">my-file.eps</p>
                        </div>
                        <p class="my_color">uploader</p>
                        <hr>
                        <div class="div_between">
                            <p class="my_color">16/05/2021</p>
                            <p class="my_color">2.7MB</p>
                        </div>
                    </div>
                    <!-- end main4 -->
                </div>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap5/js5/bootstrap.bundle.min.js"></script>
<script src="bootstrap5/js5/all.min.js"></script>

</html>