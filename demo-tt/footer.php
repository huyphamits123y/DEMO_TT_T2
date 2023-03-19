
	<div class="luxury">
        <div class="gear">
            <h3>KÊNH KẾT NỐI</h3>
            <div class="zes">
                <div class="fx">
                    <a href="#"><img src="images/ins.png" /> </a>
                </div>
              <div class="fx">
                <a href="#"><img src="images/nk1.png" /></a>
              </div>
            </div>
              

        </div>
        <div class="lency">
            <h3>Địa Chỉ: Số 7, Đường số 54, Thảo Điền, Quận 2, Thành Phố Hồ Chí Minh.</h3>

        </div>
        <div class="out">
            <h3>CẬP NHẬT CHO CHÚNG TÔI</h3>
            <h5>VỀ TIN TỨC CHO CÁC SẢN PHẨM MỚI</h5>
            <p> NHẬP ĐỊA CHỈ EMAIL </p>
            <div class="font">
               
               <div>
			   <input type="text" placeholder="NHẬP ĐỊA CHỈ EMAIL">
                <input  class="mount" type="button" value="GỬI">
			   </div>
            </div>
        </div>
    </div>
   
      

    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
