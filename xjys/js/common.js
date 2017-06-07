$(function(){

/*    if(!Modernizr.boxsizing){window.location.href = "http://www.jltech.cn/upgradeBrowser/";}*/


//首页菜单
$('.ibg .m1 .li1').click(function(){
	if($('.ibg .m3').is(":visible")){
		$('.ibg .m1').removeClass('active')	
		}
	else{
		$('.ibg .m1').addClass('active')
	}	
	$('.ibg .m3').slideToggle();
	$('.ibg .m2').hide();

})
$('.ibg .m1 .li2').click(function(){
	if($('.ibg .m2').is(":visible")){
		$('.ibg .m1').removeClass('active')	
		}
	else{
		$('.ibg .m1').addClass('active')
	}	
	$('.ibg .m2').slideToggle();
	$('.ibg .m3').hide();
	
})
//文字长度
$('.icon-ico4').siblings('i').css('letter-spacing','-1px');


//文本框默认提示文字
	$('.login').find(":text").bind({
		focus:function(){
			$(this).css('border-color','#905128')
			if (this.value == this.defaultValue){ 
					this.value=""; this.style.color = '#474747';				
					} 
			},
		blur:function(){
			if (this.value == ""){ 
				$(this).css('border-color','#dcdcdc')
					this.value = this.defaultValue; this.style.color = '#bfbfbf';
					} 
			}
		})

	$('.login').find(":password").bind({
		focus:function(){
			if (this.value == this.defaultValue){
					$(this).css('border-color','#905128')
					this.value=""; this.style.color = '#474747';
					$(this).siblings('.ts').hide()
					} 
			},
		blur:function(){
			if (this.value == ""){ 
					$(this).css('border-color','#dcdcdc')
					this.value = this.defaultValue; this.style.color = '#bfbfbf';
					$(this).siblings('.ts').show();
					} 
			}
		})	
	
//p1大图弹窗                                           //改
$('.p1 ul li a').click(function(){
	$('.img_box').css('z-index','9999');
	$('body,html').css('overflow','hidden');
	var numLi =$(this).parent('li').index(); 
        pgwSlideshow.displaySlide(numLi+1);
})

$('.img_box .icon-ico_close').click(function(){
	$('.img_box').css('z-index','-9999');
	$('body,html').css('overflow','initial')
})
 //p5 banner 
  var mySwiperP5 = new Swiper('.p5 .banner',{    
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.p5 .banner .prev').on('click', function(e){
    e.preventDefault()
    mySwiperP5.swipePrev()
  })
  $('.p5 .banner .next').on('click', function(e){
    e.preventDefault()
    mySwiperP5.swipeNext()
  })
//p5商品选中

$('.p5 .cont .list ul li .pic').click(function(){
	$(this).find('span').toggleClass('on');
	/*var goods =	$('.p5 .cont .list ul li .pic span.on').length;
	$('.p5 .cont .order a p').text(goods);*/
})
//p7商品选中
$('.p7 .cont ul li .buy .chk').click(function(){
	$(this).toggleClass('on');
	if($(this).find('i').text()=='已加入购物车'){$(this).find('i').text('加入购物车')}
	else{$(this).find('i').text('已加入购物车')}
	
})
	//编辑数量
/*	$('.p5 .cont .list ul li .buy .num i').click(function(){
		var oldValue=parseInt($(this).siblings('input').val());
		oldValue++;
		$(this).siblings('input').val(oldValue);
	})
	$('.p5 .cont .list ul li .buy .num em').click(function(){
		var oldValue=parseInt($(this).siblings('input').val());
		if(oldValue>1){
			oldValue--;
			$(this).siblings('input').val(oldValue);
		}		
	})*/

	
//p6
	$('.p6 .o_box .o_list ul li:last-child').css('border-bottom','none');
	//全选
	$('.p6 #chk').click(function(){
		$('.p6 .chk1').attr("checked",this.checked);		
	})


})

//p6 订单列表长度
$(function(){	
	setTimeout(function(){
		$('.o_box').each(function(){
				var bodyWidth=$('body').width();	
				var H= $(this).find('.o_list ul').height();	
				if(bodyWidth>=750){
				$(this).find('.o_list .info1').height(H);
				$(this).find('.o_list .info2').height(H);
				$(this).find('.o_list .info3').height(H);
				}
			})
	},20);
})
//p6 订单列表长度
$(window).resize(function() { 
	$('.o_box').each(function(){
			var bodyWidth=$('body').width();	
			var H= $(this).find('.o_list ul').height();	
			if(bodyWidth>=750){
			$(this).find('.o_list .info1').height(H);
			$(this).find('.o_list .info2').height(H);
			$(this).find('.o_list .info3').height(H);
			}
			else if(bodyWidth<750){
			$(this).find('.o_list .info1').height(26);
			$(this).find('.o_list .info2').height('auto');
			$(this).find('.o_list .info3').height(26);					
			}
		})
})
