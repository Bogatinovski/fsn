<?php
    require_once "../includes/initialize.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />

        <link rel="stylesheet" media="screen" href="apple-style/apple-style/css/sequencejs-theme.apple-style.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css" >

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Magra:400,700" />-->
        <link rel="stylesheet" href="css/style.css"></link>
    </head>
    <body>
        <?php require_once "includes/search_box.php" ?>
        <div class="container-fluid" id="mainContainer">
            <div class="row">
                <div class="col-xs-12"></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <div id="sequence-theme">
        			<div id="sequence">

        			<!-- 	<ul class="controls">
        					<li class="status"></li>
        					<li class="sequence-prev"></li>
        					<li class="sequence-pause"></li>
        					<li class="sequence-next"></li>
        				</ul> -->

        				<ul class="sequence-canvas">
        					<li class="animate-in">
        						<div class="intro">
        							<h2>Welcome to FSN</h2>
        							<h3>The Responsive Slider with Advanced CSS3 Transitions</h3>
        						</div>
        						<img class="iphone" src="images/iphone.png" alt="iPhone4" />
        						<img class="iphone-shadow" src="images/iphone-shadow.png" />
        					</li>
        					<li>
        						<img class="ipad" src="images/ipad.png" alt="iPad" />
        						<div class="slide2">
        							<h2>Creative Control</h2>
        							<p>Create unique sliders using CSS3 transitions</p>
        						</div>
        						<img class="ipad-shadow" src="images/ipad-shadow.png" />
        					</li>
        					<li>
        						<div class="slide3">
        							<h2>Cutting Edge</h2>
        							<p>Supports modern browsers, old browsers (IE7+), touch devices and responsive designs</p>
        						</div>
        						<img class="iphone2" src="images/iphone.png" alt="iPhone4" />
        						<img class="iphone2-shadow" src="images/iphone-shadow.png" />
        						<img class="iphone3" src="images/iphone.png" alt="iPhone4" />
        						<img class="iphone3-shadow" src="images/iphone-shadow.png" />
        						<img class="iphone4" src="images/iphone.png" alt="iPhone4" />
        						<img class="iphone4-shadow" src="images/iphone-shadow.png" />
        					</li>
        				</ul>
        			</div>
        		</div>
        		<p>Tip: press "P" to pause/unpause</p>
                </div>
                <!-- Registration form .............................................................. -->
                <div class="col-xs-12 col-sm-3">
                    <form class="form-horizontal" action='' method="POST" id="registerForm">
                        <fieldset>
                            <div class="control-group">
                                <!-- Username -->
                                <div class="controls">
                                    <input type="text" id="ime" name="ime" placeholder="First Name" class="form-control input-sm registerFormBegin" >
                                </div>
                            </div>
                            <div class="control-group">
                                <!-- Username -->
                                <div class="controls">
                                    <input type="text" id="prezime" name="prezime" placeholder="Last Name" class="form-control input-sm registerFormBegin" >
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- E-mail -->
                                <div class="controls">
                                    <input type="text" id="email" name="email" placeholder="E-mail" class="form-control input-sm registerForm"  >
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Password-->
                                <div class="controls">
                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control input-sm registerForm" >

                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Password -->

                                <div class="controls">
                                    <input type="password" id="password_confirm" name="password_confirm" placeholder="Password (Confirm)" class="form-control input-sm registerForm"  >

                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Password-->
                                <div class="controls">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="checkbox" id="checkbox"> I am freelancer
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="control-group" id="country" style="display:none">
                                <!-- Password -->
                                <label class="control-label">Select country</label>
                                <div class="controls">
                                    <select name="country_id" id="country_id" class="form-control dropdownWidth centerDropDown" >
                                        <?php
                                            $sql = "SELECT `country_id`, `country_name` FROM `countries` ";
                                            $result = $db->query($sql);

                                            while($row = $result->fetch_assoc())
                                                echo "<option value='{$row['country_id']}'> {$row['country_name']} </option>";

                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group" id="city" style="margin-top: 10px;display:none">
                                <!-- Password -->
                                <label class="control-label">Select city</label>
                                <div class="controls">

                                    <select name="city_id" id="city_id" class="form-control dropdownWidth centerDropDown" >

                                    </select>

                                </div>
                            </div>
                            <div class="control-group" style="margin-top: 10px;">
                                <!-- Button -->
                                <div class="controls">
                                    <button class="btn btn-success">Register</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="apple-style/apple-style/scripts/jquery.sequence-min.js"></script>
		<script src="apple-style/apple-style/sequencejs-options.apple-style.js"></script>
        <script src="js/helper_func.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
