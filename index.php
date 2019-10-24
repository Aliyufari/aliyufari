<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    </head>
    <body>
        <?php require("includes/menu.php"); ?>

        <div class="content-header">
        	<h2>Improve Your Knowledge at aaBlog</h2>
            <form action="" method="POST">
                <input type="text" name="search" placeholder="Search">
                <button>Search</button>
            </form>
        </div>
        <div class="content">
        	<div class="content-left">
        		<div class="top">
        			<img src="images/banner.jpg" width="280" />
        			<h3>Aliyu Abubakar <br><span>A.A.</span></h3>
	        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation....<a href="#">Read More</a></p>
        		</div>
        		<h3>Latest News:</h3>
        		<div class="jumbotron">
        			<h5>3 Days ago</h5>
        			<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
	        		cillum dolore eu fugiat nulla pariatur.</p>
        		</div>
        		<div class="jumbotron">
        			<h5>1 Week ago</h5>
        			<p>Excepteur sint occaecat cupidatat non
	        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        		</div>
        		<div class="jumbotron" id="dark">
        			<h5>1 Month ago</h5>
        			<p>Excepteur sint occaecat cupidatat non
	        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        		</div>
        		<div class="bottom">
	        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        		tempor incididunt.<a href="">See Duis aute irure dolor in reprehenderit.</a></p>
        		</div>
        	</div>
        	<div class="main-content">
        		<h2>Welcome to aaBlog</h2>
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore...<a href="#">Read More</a></p>
                <!-- <img src="images/pc.jpg" width="" > -->
                <div class="sub">
                    <h1>aaBlog Lorem ipsum</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor.</p>
                </div>
                <div class="post">
                    <a href="#"><h4>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h4></a>
                    <p>Lorem Post Sutitle</p>
                    <footer>Posted by <a href="#">Admin</a> on 05-10-2019</footer>
                </div>
                <div class="post">
                    <a href="#"><h4>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4></a>
                    <p>Lorem Post Sutitle</p>
                    <footer>Posted by <a href="#">Lorem</a> on 02-10-2019</footer>
                </div>
                <div class="media">
                    <h3>Subscribe our channels on:</h3>
                    <ul>
                        <li><img src="images/facebook"></li>
                        <li><img src="images/twitter"></li>
                        <li><img src="images/instagram"></li>
                        <li><img src="images/youtube"></li>
                        <li><img src="images/google+"></li>
                    </ul>
                </div>
        	</div>
        </div>
        <footer class="footer">
            <p>Copyright &copy; <a href="#">aaBlog</a> 2019 Alright Reserved</p>
        </footer>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {

            var menu = $(".menu");

            $(window).resize(function(){
                $(".menu-toggle").removeClass("active");
                if ($(window).innerWidth() > 800) {
                    menu.show();
                }
                else{
                    menu.hide();
                }
            });

            $(".menu-toggle").click(function() {
                menu.slideToggle();
                $(this).toggleClass("active");
            });

            $(".dropdown").click(function() {
                $(this).toggleClass("active");
                $(this).next("ul").slideToggle();
                $(this).children(".arrow").toggleClass("down up");
            });
        });
    </script>
    </body>
</html>
