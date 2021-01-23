<?php
ini_set("display_errors",0);
if($_POST['submit']=='send')
{
	$uname = $_POST['username'];
	$pw = $_POST['password'];
	if($uname=='admin'&&$pw=='admin')
	{
		header("Location:../home.php");
	}

}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Portal</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/style.css">
        <style>
            #panel {
                display: none;
            }
            span.multiselect-native-select {
	position: relative
}
.checkbox {
    color: #222;
}
.control-label {
    text-align: left;
    font-size: 12px;
}
span.multiselect-native-select select {
	border: 0!important;
	clip: rect(0 0 0 0)!important;
	height: 1px!important;
	margin: -1px -1px -1px -3px!important;
	overflow: hidden!important;
	padding: 0!important;
	position: absolute!important;
	width: 1px!important;
	left: 50%;
	top: 30px
}
.multiselect-container.dropdown-menu
{
    width: 32vw;
    -moz-width:100%;
    z-index: 99999;
 
}
.multiselect-container {
	position: absolute;
	list-style-type: none;
	margin: 0;
	padding: 0
}
.multiselect-container .input-group {
	margin: 5px
}
.multiselect-container>li {
	padding: 5px 0 3px 0;
    width: 100% !important;
    float: left;
}
.multiselect-container>li>a.multiselect-all label {
	font-weight: 700
}
.multiselect-container>li.multiselect-group label {
	margin: 0;
	padding: 3px 20px 3px 20px;
	height: 100%;
	font-weight: 700
}
.multiselect-container>li.multiselect-group-clickable label {
	cursor: pointer
}
.multiselect-container>li>a {
	padding: 0
}
.multiselect-container>li>a>label {
	margin: 0;
	height: 100%;
	cursor: pointer;
	font-weight: 400;
	padding: 3px 0 3px 30px;
	width: 100%;
}
.multiselect-container>li>a>label.radio, .multiselect-container>li>a>label.checkbox {
	margin: 0
}
.multiselect-container>li>a>label>input[type=checkbox] {
	margin-bottom: 5px
}
.btn-group>.btn-group:nth-child(2)>.multiselect.btn {
	border-top-left-radius: 4px;
	border-bottom-left-radius: 4px
}
.form-inline .multiselect-container label.checkbox, .form-inline .multiselect-container label.radio {
	padding: 3px 20px 3px 40px
}
.form-inline .multiselect-container li a label.checkbox input[type=checkbox], .form-inline .multiselect-container li a label.radio input[type=radio] {
	margin-left: -20px;
	margin-right: 0
}
.multiselectwrap
{
    float: left;
    width: 100%;
}
        </style>

    </head>

    <body style="background:url(banner-4.jpg); background-repeat:no-repeat; background-position: center; background-size:cover; position:relative; height: 100%;  ">

        <div class="container-fluid pinkbg">

            <div class="">
                <div class="row">
                    <div class="col-md-12 p0">
                        <div class="info ">
                            <div class="top-left col-md-5">
                                <ul class="leftbar">
                                    <li>
                                        <span class="glyphicon glyphicon-earphone"></span> +91 801 555 2626
                                    </li>
                                    <li>
                                        <span class="glyphicon glyphicon-envelope"></span> pokeme@infoziant.com
                                    </li>
                                </ul>
                                <!-- <div class="logo">
					<h3>Student Portal</h3>
				</div> -->
                            </div>
                            <div class="login col-md-7">
                                <form id="login" method="post" class="form-inline loginform windowlogin">
                                    <div class="form-group">
                                       
                                        <input type="text" name="username" placeholder="Email or phone number" />
                                    </div>
                                    <div class="form-group">
                                     

                                        <input type="password" name="password" placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" value="send">Login</button>
                                        <a href="#" class="colorwhite forgot">Forgot Password?</a>
                                    </div>
                                </form>

                                <div class="loginslide">
                                    <div id="flip">Click here to login</div>
                                    <div id="panel">

                                        <form id="login" method="post" class="form-inline loginform">
                                            <div class="form-group">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="username" placeholder="Email or phone number" />
                                            </div>
                                            <div class="form-group">
                                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>

                                                <input type="password" name="password" placeholder="Password" />
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="submit" value="send">Login</button>
                                                <a href="#" class="colorwhite forgot">Forgot Password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form">
            <div class="regwrapper">

                <!--  <div class="thumbnail"><img src="gc.png"/></div> -->

                <form class="login-form toggleform">
                    <div class="txtwrap">
                        <h3>REGISTER ACCOUNT</h3>

                    </div>
                    <div class="form-group">
                        <label>USER NAME</label>
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="Enter your name" />
                    </div>

                    <div class="form-group">
                        <label>MOBILE NUMBER</label>
                        <i class="fa fa-mobile" aria-hidden="true"></i>

                        <input type="text" placeholder="Enter mobile number" />
                    </div>

                    <div class="form-group">
                        <label>EMAIL ADDRESS</label>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>

                        <input type="text" placeholder="Enter email address" />
                    </div>
                    
                  

                    <div class="form-group">
                        <label>DEPARTMENT</label>
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>

                        <input type="text" placeholder="Enter Department" />
                    </div>

                      <div class="form-group multiselectwrap">
                        <label class="col-md-12 p0 control-label" for="rolename">DOMAIN INTERESTED?</label>
                        <div class="col-md-12 p0">
                            <select size="3" id="dates-field2" class="multiselect-ui form-control" multiple="multiple">
                                <option value="cheese">PHP</option>
                                <option value="tomatoes">JAVA</option>
                                <option value="mozarella">ANDROID</option>
                                <option value="mushrooms">DOTNET</option>
                              
                            </select>
                        </div>
                    </div>
                   

                    <div class="form-group">
                        <button>Create Account</button>
                        <p class="message">Already registered? <a href="#">Sign In</a></p>
                    </div>
                </form>

            </div>
            <div class="loginwrapper">

                <form class="register-form toggleform userlogin">
                    <div class="txtwrap">
                        <h3>LOGIN ACCOUNT</h3>

                    </div>
                    <div class="form-group">
                        <label>USER NAME</label>
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="Enter username" />
                    </div>

                    <div class="form-group">
                        <label>PASSWORD</label>
                        <i class="fa fa-key" aria-hidden="true"></i>

                        <input type="password" placeholder="Enter password" />
                    </div>

                    <div class="form-group">
                        <button>Login</button>
                        <p class="message">Not registered? <a href="#">Create an account</a></p>
                    </div>
                </form>

            </div>
        </div>

        <div class="container-fluid footer">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center colorwhite">Copyright @ 2018 Students Portal. All rights reserved. Designed by <a href="http://infoziant.com/" target="_blank">Infoziant Systems Pvt Ltd</a></p>
                </div>
            </div>
        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
          <script src="js/multiselect.js"></script>
               
        <script>
            $(document).ready(function() {
                $("#flip").click(function() {
                    $("#panel").slideToggle("slow");
                });
            });
        </script>
 <script type="text/javascript">
$(function() {
    $('.multiselect-ui').multiselect({
        includeSelectAllOption: true
    });
});
</script>
    </body>

    </html>