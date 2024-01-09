			<?php 
			if(empty($_SESSION['user1'])){
			?>
<a class="home" href="index.php?pg=11">
            <img src="icon/order.png" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/>
            <span class="sides" >
			Cara Beli
			<?php
			}else{
			?>
<a class="home" href="<?php echo"index.php?pg=18&u=$_SESSION[user1]"; ?>">
            <img src="icon/order.png" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/>
            <span class="sides">
			Cek Order
			<?php
			}
			?>
			</span>
        </a>