<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Social Site</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="header_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="logo">
                            <img src="img/Haifa_metro_logo_512.png" alt="logo">
                            <br>
                            <h4>PINIKBUZZ.COM</h4>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form class="form-inline" method="post">
                          <div class="form-group text-right">
                            <label for="exampleInputName2">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="enter your email" required="required">
                          </div>
                          <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" id="pass" placeholder="enter your password" required="required">
                          </div>
                          <button type="submit" class="btn btn-info">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <h2 class="text-center">Connect with friends and the world around you on <br> <span class="pinik">pinikbuzz.com</span></h2>
                        </div>
                        <div class="row">
                            <img src="img/teams.jpg" alt="" class="img-responsive center-block">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="sign_up">
                            <form action="" method="post">
                            <button class="btn btn-info">Sign Up</button>
                                <input type="text" name="fname" id="fname" placeholder="First name" class="form-control" required="required">
                                <input type="text" name="fname" id="fname" placeholder="Last name" class="form-control" required="required">
                                <input type="email" name="email" id="email" placeholder="Email Address" class="form-control" required="required">
                                <input type="password" name="pass1" id="pass1" placeholder="New Password" class="form-control" required="required">
                                <input type="password" name="pass2" id="pass2" placeholder="Password Again" class="form-control" required="required">
                                <select name="country" id="country" class="" required="required">
                                    <option value="">Select Your Country</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="SriLanka">SriLanka</option>
                                </select>
                                <select name="sex" id="sex" class="sex" required="required">
                                    <option value="">SEX</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                                <div class="dateofbirth">
                                    <p>Date of Birth:</p>
                                <input id="dob" name="dob" type="date" class="dob form-control" placeholder="Date of Birth" required="required">
                                </div>
                                <br>

                                <button class="btn btn-primary sign_up_button" type="submit">Sign Up for PINIKBUZZ</button>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_area">
            <div class="container">
                <div class="row text-center">
                    &copy; 2015 pinikbuzz.com. All rights reserved.
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
