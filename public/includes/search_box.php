<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header borderRight">
            <a class="navbar-brand logo" href="#"><span><img src="images/LogoFSN.png" width="50px">  Freelancer Social Network</span> </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form id="signinForm" class="navbar-form navbar-right" mmethod="POST" action="user.php" role="form">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="loginemail" type="email" class="form-control" name="email" value="" placeholder="Email Address">
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="loginpassword" type="password" class="form-control" name="password" value="" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-default">Login</button>
            </form>

        </div><!-- /.navbar-collapse -->
    </div>
</nav>
