
<div class="img_box container-fluid">
	<span class="icon-ico_close"></span>
    <div class="container">      	
        <div class="picarea">
        	<div class="bigpic img-load">
        		<i>
        		<!--大图展示-->
            	<div class="bigpbox">
                    <ul>
                        <li><img src="images/demo/p1_img1.jpg"/></li>
                        <li><img src="images/demo/p1_img2.jpg"/></li>
                        <li><img src="images/demo/p1_img3.jpg"/></li>
                        <li><img src="images/demo/p1_img4.jpg"/></li>
                        <li><img src="images/demo/p1_img5.jpg"/></li>
                        <li><img src="images/demo/p1_img6.jpg"/></li>
                        <li><img src="images/demo/p1_img1.jpg"/></li>
                        <li><img src="images/demo/p1_img2.jpg"/></li>
                        <li><img src="images/demo/p1_img1.jpg"/></li>
                        <li><img src="images/demo/p1_img2.jpg"/></li>                        
                    </ul>                            
            	</div>
            	<!--<a href="javascript:void(0)" class="prev"></a>
                <a href="javascript:void(0)" class="next"></a>   <--></-->
                </i>
            </div>
            <div class="smallpic">
            	<div class="smallpic2">
            		<!--手机端小图-->
	            	<div class="smallbox swiper-container1">
		            	<ul class="swiper-wrapper clearfix">
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img1.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img2.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img3.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img4.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img5.jpg"/><span></span></p></li>
		                    <li class="swiper-slide"><p><img src="images/demo/p1_img6.jpg"/><span></span></p></li>
		                    <li class="swiper-slide"><p><img src="images/demo/p1_img1.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img2.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img1.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img2.jpg"/><span></span></p></li>	                	
		                </ul>
            	    </div>
            	    <!--pad小图-->
            	    <div class="smallbox swiper-container2">
		            	<ul class="swiper-wrapper clearfix">
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img1.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img2.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img3.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img4.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img5.jpg"/><span></span></p></li>
		                    <li class="swiper-slide"><p><img src="images/demo/p1_img6.jpg"/><span></span></p></li>
		                    <li class="swiper-slide"><p><img src="images/demo/p1_img1.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img2.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img1.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img2.jpg"/><span></span></p></li>	                	
		                </ul>
            	    </div>
            	    <!--大屏小图-->
            	    <div class="smallbox swiper-container3">
		            	<ul class="swiper-wrapper clearfix">
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img1.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img2.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img3.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img4.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img5.jpg"/><span></span></p></li>
		                    <li class="swiper-slide"><p><img src="images/demo/p1_img6.jpg"/><span></span></p></li>
		                    <li class="swiper-slide"><p><img src="images/demo/p1_img1.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img2.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img1.jpg"/><span></span></p></li>
		                	<li class="swiper-slide"><p><img src="images/demo/p1_img2.jpg"/><span></span></p></li>	             			            </ul>
            	    </div>
                </div>                
                <a href="javascript:void(0)" class="prev2"></a>
        		<a href="javascript:void(0)" class="next2"></a>
            </div>
        </div>       
    </div>
</div>
<script>
$(function(){
	
//大图切换
	jQuery(".picarea").slide({ titCell:".smallbox.swiper-container3 li", mainCell:".bigpic ul", pnLoop:false, autoPlay:false, trigger:"click", delayTime:100});
	jQuery(".picarea").slide({ titCell:".smallbox.swiper-container2 li", mainCell:".bigpic ul", pnLoop:false, autoPlay:false, trigger:"click", delayTime:100});
	jQuery(".picarea").slide({ titCell:".smallbox.swiper-container1 li", mainCell:".bigpic ul", pnLoop:false, autoPlay:false, trigger:"click", delayTime:100, 	startFun:function(i){
	/*if(i==0){ jQuery(".smallpic .prev2").click() } else if( i%6==0 ){ jQuery(".smallpic .next2").click()}*/
	}});
	
});	
//小图切换
  var mySwiper = new Swiper('.swiper-container1',{
    paginationClickable: true,
    cssWidthAndHeight : true,
    slidesPerView : 2,
	slidesPerGroup : 2,
    resistance : '100%',
  })
   $('.prev2').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.next2').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  }) 
  var mySwiper2 = new Swiper('.swiper-container2',{
    paginationClickable: true,
    cssWidthAndHeight : true,
    slidesPerView : 4,
	slidesPerGroup : 4,
    resistance : '100%',
  })
  $('.prev2').on('click', function(e){
    e.preventDefault()
    mySwiper2.swipePrev()
  })
  $('.next2').on('click', function(e){
    e.preventDefault()
    mySwiper2.swipeNext()
  })  
  
  var mySwiper3 = new Swiper('.swiper-container3',{
    paginationClickable: true,
    cssWidthAndHeight : true,
    slidesPerView : 6,
	slidesPerGroup : 6,
    resistance : '100%',
  })
  $('.prev2').on('click', function(e){
    e.preventDefault()
    mySwiper3.swipePrev()
  })
  $('.next2').on('click', function(e){
    e.preventDefault()
    mySwiper3.swipeNext()
  })
 
</script>

<!--技术支持：京伦科技   营销人员:      首页设计:      切图:      程序开发:      上线时间:      -->