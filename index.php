<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');
// session_save_path('/nfs/stak/students/l/liangt/php_sessions');
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pick for Success</title>
	<!-- Bootstrap Core CSS -->
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap.css" rel="stylesheet">
	<!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
	<style>
		body {
		        padding-top: 70px;
		        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		    }
	    </style>
	<title>Personality Test</title>
  <script src="https://cdn.traitify.com/js/widgets/v1.js"></script>
  <script src="main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>



	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Pick for Success</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



<div class="panel-group center-block" id="accordion" role="tablist" aria-multiselectable="true" style="width: 70%;">
    <div class="panel panel-default" style="border: 2px solid #33A6CC; border-radius: 5px;">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
            <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <strong>Personality Assessment ></strong>
            </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                
                <div id="assessmentJSON"></div>
				  <div id="slideDeck"></div>
				  <div id="careersJSON"></div>​

            </div>
        </div>
    </div>
    <div class="panel panel-default" style="border: 2px solid #33A6CC; border-radius: 5px;">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <strong>Personality Traits ></strong>
            </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body" id="personality-traits">

            </div>
        </div>
    </div>
    <div class="panel panel-default" style="border: 2px solid #33A6CC; border-radius: 5px;">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <strong>Fiscal Requirements ></strong>
            </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body" id="fiscalRequirements">

            </div>
        </div>
    </div>
    <div class="panel panel-default" style="border: 2px solid #33A6CC; border-radius: 5px;">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <strong>Location ></strong>
            </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body" id="location">
            
            </div>
        </div>
    </div>
    <div class="panel panel-default" style="border: 2px solid #33A6CC; border-radius: 5px;">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <strong>Transcript Analysis ></strong>
            </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body" id="transcriptAnalysis">
                
            </div>
        </div>
    </div>
</div>


</body>
</html>