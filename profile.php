<!DOCTYPE HTML>
<html>
	<head>
		<title>chatApp</title>
        <?php include('include/header.html');?>
		<script type="text/javascript">
			$(document).ready(function(){
				$(window).resize(resizeWindow);
				// $('#change-avatar').on('click', uploadavatar);
			});
		</script>
	</head>
	<body>
		<?php
			include('default.php');
            session_start();
            $con = initConnection();
            if (!isset($_SESSION['user'])) {
                include('include/non_authorize.php');
                return;
            }
            include('include/welcome.php');
            if (!isset($_GET['id'])) {
                echo '
                <script>(function redirect() { window.location.href="profile.php?id='.$_SESSION['user']['id'].'"; })();</script>';
            }
            $sql = "SELECT * FROM users where `id`='".$_GET['id']."' and status=1";
            $query = mysqli_query($con, $sql);
            $profile = mysqli_fetch_array($query);
            echo '
        <script id="temp">(function changeTitle() { $("title").text("'.$profile['alias'].'"); $("script#temp").remove(); })();</script>';
            include('include/navigation.php');
            if ($profile == null) {
                echo '<div class="required"><strong>User không tồn tại.</strong></div>';
            }
            else {
                include('include/profile_userinfo.php');
            }
        ?>
	</body>
</html>