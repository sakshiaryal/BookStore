<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>

				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->

			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome
							<?php
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm'];
								}
								else
								{
									echo 'Book Store';
								}
							?>
							</h1>
							<div class="entry">
								<br>

								<br>

								<object width="550" height="400">
								<!--<param name="movie" value="somefilename.swf">-->
								<embed src="https://i.pinimg.com/564x/9f/4b/9b/9f4b9b13548e042db4f0361978f088dc.jpg" width="550" height="400">
								</embed>
								</object>
								<br><br>

							</div>

						</div>

					</div>
					<!-- end content -->

					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->

			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
