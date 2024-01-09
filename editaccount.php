			<?php 
			if(empty($_SESSION['user1'])){
			?>
<a class="home" href="<?php echo"index.php?pg=1"; ?>">
            <img src="icon/edit.png" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/>
            <span class="sides" >
			Register
			<?php 
			}else{
			?>
<a class="home" href="<?php echo"index.php?pg=16&u=$_SESSION[user1]&act=1"; ?>">
            <img src="icon/edit.png" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/>
             <span class="sides" style="left:41px;">
			Your Account
			<?php
			}
			?>
			</span>
        </a>