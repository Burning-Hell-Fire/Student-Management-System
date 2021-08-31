<?php
include('header.php');
//Start session
//session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
                        <li class="nav-header">About US</li>
                        <li><a href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission</a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision</a></li>
                        <li  class="active"><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History</a></li>

                    </ul>
                </div>

            </div>

            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>History</strong>
                </div>


                <p>
                <div class="hero-unit-2">

                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nulla aliquet porttitor lacus luctus. Elit scelerisque mauris pellentesque pulvinar pellentesque. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Pharetra magna ac placerat vestibulum lectus mauris ultrices. In fermentum et sollicitudin ac orci. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Nisi scelerisque eu ultrices vitae. Arcu ac tortor dignissim convallis aenean et tortor at risus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Et netus et malesuada fames ac turpis egestas maecenas. Enim eu turpis egestas pretium. Commodo odio aenean sed adipiscing diam donec adipiscing tristique risus. Tincidunt vitae semper quis lectus nulla at volutpat diam. Ut lectus arcu bibendum at. Sed faucibus turpis in eu mi bibendum neque egestas. Blandit libero volutpat sed cras ornare.
                </div>
                </p>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


