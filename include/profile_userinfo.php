    <h2 class="header">Thông tin cá nhân</h2>
    <table border="0">
        <tr>
        <td class="avatar" rowspan="4"><img src="<?php echo $profile['avatar_url']?>" width="100px" height="100px" /></td>
            <td class="register">Tên đăng nhập</td>
            <td class="userinfo"><strong><?php echo $profile['name']?></strong></td>
        </tr>
        <tr>
            <td class="register">Họ tên</td>
            <td class="userinfo"><?php echo $profile['alias']?></td>
        </tr>
        <tr>
            <td class="register">Email</td>
            <td class="userinfo"><?php echo $profile['email']?></td>
        </tr>
        <tr>
            <td class="register">Số điện thoại</td>
            <td class="userinfo"><?php echo $profile['phone']?></td>
        </tr>
<?php
    if ($_GET['id'] == $_SESSION['user']['id']) {
        include('include/profile_uploadavatar.php');
    }
?>
    </table>
