<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>uSee Remote Monitoring</title>

    <!--================================bootstrap and javascript for login page==========================================================-->
    <link rel="stylesheet" type="text/css" href="/loginstyles/new-bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/loginstyles/new-bootstrap/css/all.css">
    <link rel="stylesheet" type="text/javascript" href="/loginstyles/new-bootstrap/js/bootstrap.js">
    <link rel="stylesheet" type="text/javascript" href="/loginstyles/new-js/jquery-3.2.1.min.js">

    <!--====================================Custom css for login page===========================================================-->
    <link rel="stylesheet" type="text/css" href="/loginstyles/new-css/main.css">
    <!--===============================================================================================-->


</head><!--/head-->


<body>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center">Login</h2>

    </div>


</div>

<section id="login">
    <div class="container">
        <!-------------------------------------this is new login page of usee ------------------------------ -->

        <a href="https://www.usee.com"> <img class=" m-2 rounded text-center" src="loginstypes/new-images/usee_logo.jpg" alt="Usee Logo" height="90" width="200"> </a>
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
                <div class="card card-signin my-3">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>





                        <?= $this->Form->create(array('class'=> 'form-signin validate-form', 'role' =>'form')); ?>
                            <div class="form-label-group">
                                <?= $this->Form->input('email', array('class'=> 'form-control', 'placeholder' =>'Email address', 'required' )); ?>
<!--                                <input type="text" class="form-control" id="login-username" placeholder="Email address" required >-->
                                <label for="login-username">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <?= $this->Form->input('password', array('type' => 'password', 'class'=> 'form-control', 'placeholder' =>'Password', 'required' )); ?>
<!--                                <input type="password" id="login-password" class="form-control" placeholder="Password" required>-->
                                <label for="login-password">Password</label>
                            </div>
<!--                            <div class="form-label-group">-->
<!--                                <input type="checkbox" id="remember_me" name="remember_me" class="form-control" >-->
<!--                                <label >Remember me</label>-->
<!--                            </div>-->
                        <?= $this->Form->submit('Login', array('class'=> 'btn btn-lg btn-success btn-block text-uppercase')); ?>
<!--                            <a href="#" ><button class="btn btn-lg btn-success btn-block text-uppercase" id="login-button" type="submit">Sign in</button></a>-->
                            <br>

                            <a class="float-right" style="text-decoration: none;" href="/forgot-password" >Forgot password?</a>
                            <br>

                            <h5 class=" text-center">OR</h5>
                            <div class=" row text-center ">
                                <div class="col"> <a href="/get-started"><div class="btn btn-outline-dark  btn-block">Register </div></a></div>
                                <div class="col"> <a href="/demo" ><div id="demo-button" class="btn btn-outline-dark btn-block">Demo </div></a></div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <h6 style="font-style: italic; font-weight: 300; font-size: 1rem;" class="text-center">Powered by: </h6>
                                <a href="https://www.dittechnologies.com.au"> <img class="text-center" src="/new-images/dit_logo.png" alt="DIT Logo" height="80" width="160"> </a>
                            </div>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</body>

</html>