<?php

session_start();

//print_r($_SESSION);

session_destroy();

//header('Location: index.php?logout=1');

?>

<html>



<head>

    <title>Bucharest Bike-Rental Inventory</title> 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- global level css -->

    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- end of global level css -->

    <!-- page level css -->

    <link href="css/pages/login2.css" rel="stylesheet" />

    <link href="vendors/iCheck/skins/minimal/blue.css" rel="stylesheet" />

    <!-- styles of the page ends-->

</head>



<body>

    <div class="container">

        <div class="row vertical-offset-100">

            <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h3 class="panel-title text-center">Bike Rental Sign In</h3>

                        <h2 class="text-center alert alert-success" style='font-family:Agency FB;font-size:20px;'>You have successfully logged out!</h2>

                    </div>

                    <div class="panel-body">

                        <form name="form1" method="post" action="checklogin.php">

                            <fieldset>

                                <div class="form-group input-group">

                                    <div class="input-group-addon">

                                        <i class="livicon" data-name="at" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>

                                    </div>

                                    <input class="form-control"  name="userName" type="text" id="userName" placeholder="Username" />

                                </div>

                                <div class="form-group input-group">

                                    <div class="input-group-addon">

                                        <i class="livicon" data-name="key" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>

                                    </div>

                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" id="password"/>

                                </div>

                                <input class="btn btn-lg btn-primary btn-block" type="submit" name="Submit" value="Login">

                            </fieldset>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- global js -->

    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--livicons-->

    <script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>

    <script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>

    <!-- end of global js -->

    <!-- begining of page level js-->

    <script src="js/TweenLite.min.js"></script>

    <script src="vendors/iCheck/icheck.js" type="text/javascript"></script>

    <script type="text/javascript">

    $(document).ready(function() {

        $(document).mousemove(function(event) {

            TweenLite.to($('body'), .5, {css:{'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"}});

        });



        //Flat red color scheme for iCheck

        $('input[type="checkbox"].minimal-blue').iCheck({

            checkboxClass: 'icheckbox_minimal-blue'

        });

    });

    </script>

    <!-- end of page level js-->

</body>

</html>

