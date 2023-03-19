<?php
    include 'session.php';
   Session::checkSession();
?>
<!DOCTYPE HTML>
<head>
<title>Store Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menus.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/cart.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/container.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<script type="text/javascript" src="js/cart.js"></script>

<link href="./.vscode/fontawesome-free-5.15.3-web/css/all.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body>
  <div class="wrap">
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="images/logoadidas.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Tìm kiếm sản phẩm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm sản phẩm';}"><input type="submit" value="TÌM">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<span class="cart_title">Giỏ Hàng<i class="fas fa-shopping-cart"></i></span>
					</div>
			      </div>
		   <div class="login">
            <a href="#">Hello <?php echo Session::get('name') ?></a>
            <a href="?action=logout">Logout</a>
            <?php
                            if (isset($_GET['action']) && $_GET['action'] == 'logout')
                            {
                                Session::destroy();
                            }
           ?>
            
            <!-- <div class="login">
            <a href="?action=logout">Đăng Xuất</a>
            </div> -->
           


            
       
             
        </div>
          
       
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.php">Trang Chủ</a></li>
	  <li><a href="products.html">Sản Phẩm</a> </li>
	  <li><a href="topbrands.html">Thương Hiệu</a></li>
	  <li><a href="cart.html">Giỏ Hàng</a></li>
	  <li><a href="contact.html">Liên Hệ</a> </li>
	  <div class="clear"></div>
	</ul>
</div>
<div class="cart_shop">
        <i  class="remove_cart fas fa-window-close"></i>
        <h1>Giỏ Hàng</h1>
        <form action="">
            <table>
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Chọn</th> 
                    </tr>
                </thead>
                <tbody >
                    
                </tbody>
            </table>
        </form>
        <div class="price-total">
            <p>Tổng tiền: <span>0 </span><sup> đ</sup></p>
        </div>
        <div class="oder">
            
            <p>Thanh toán</p>
            
        </div>  
    </div>