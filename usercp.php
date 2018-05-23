<!DOCTYPE HTML>
<html>
	<head>
		<title>Chỉnh sửa trang cá nhân</title>
		<?php include('include/header.php');?>
	</head>
	<body>
        <?php
			include('default.php');
			session_start();
            if (!isset($_SESSION["user"])) {
				include('include/non_authorize.html');
                return;
            }
            $user = $_SESSION["user"];
			include('include/welcome.php');
			include('include/navigation.php');
        ?>
        <script type="text/javascript">
			$(document).ready(function(){
				$('input#save').on('click', function(e) {
					save();
				});
				$('input#cancel').on('click', function(e) {
					window.location.href='index.php';
				});
			});
		</script>

        
		<div id="info">
			<div class="register-info">
				<h2 class="header">Thay đổi thông tin cá nhân</h2>
			</div>
			<div class="register-info"><span class="lbl register">Tên đăng nhập</span><span id="usr" value=""><?php echo $user['name']; ?></span></div>
			<div class="register-info"><span class="lbl register">Họ tên</span><input type="text" name="alias" id="alias" placeholder="Tên hiển thị" value="<?php echo $user['alias']; ?>" /></div>
			<div class="register-info"><span class="lbl register">Email</span><input type="text" name="email" id="email" placeholder="Email đăng ký" value="<?php echo $user['email']; ?>" /></div>
			<div class="register-info"><span class="lbl register">Số điện thoại</span><input type="text" name="phone" id="phone" placeholder="Số điện thoại" maxlength="15" value="<?php echo $user['phone']; ?>" /></div>
			<hr width="500" />

			<div class="register-info">
				<h2 class="header">Đổi mật khẩu</h2>
			</div>
			<div class="register-info"><span class="lbl register">Mật khẩu cũ</span><input type="password" name="oldpwd" id="oldpwd" placeholder="Nhập mật khẩu cũ" /></div>
			<div class="register-info"><span class="lbl register">Mật khẩu mới</span><input type="password" name="pwd" id="pwd" placeholder="(Bỏ qua nếu không đổi mật khẩu)" /></div>
			<div class="register-info"><span class="lbl register">Xác nhận mật khẩu</span><input type="password" name="pwd2" id="pwd2" placeholder="Xác nhận mật khẩu" /></div>
			<div class="register-info login-message"></div>
			<div class="register-info">
				<center>
					<input type="button" name="register" id="save" value="Lưu" />
					<input type="button" name="cancel" id="cancel" value="Huỷ" />
				</center>
			</div>
		</div>
	</body>
</html>