        <tr>
            <td class="register"></td>
            <td class="userinfo" colspan="3">
                <form method="post" action="profile.php?id=<?php echo $_SESSION['user']['id']; ?>" enctype="multipart/form-data">
                    <span><input type="file" id="avatar-upload" name="avatar"/></span>
                    <span><input type="submit" class="lbl" id="change-avatar" name="uploadclick" value="Upload"/></span>
                </form>
            </td>
        </tr>
