<a class="home" href="index.php?pg=17">
            <img src="icon/keranjang.jpg" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/>
			<?php 
			if(empty($_SESSION['user1'])){
			?>
            <span class="sides" >
			Keranjang Belanja
			<?php
			}else{
			?>
            <span class="sides" style="top:-145px; padding-bottom:10px;">
			Keranjang Belanja
			<?php
			 include"keranjangbelanja.php";
			}
			?>
			</span>
    </a>