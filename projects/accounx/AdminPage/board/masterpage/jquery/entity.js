$(function() {
				/**
				* for each menu element, on mouse enter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li.Assets').bind('click',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'top':'-50px',
							'left':'240px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'170px', 'left':'240px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px', 'left':'240px', 'top':'120px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '410px';
							var top = '130px'
							if($elem.parent().children().length == $elem.index()+1)
								left = '-410px';
							$sub_menu.show().animate({'left':left, 'top':top},200);
						}	
						var $sub_menu2 = $elem.find('.sdt_box2');
						
						if($sub_menu2.length){
							var top = '290px';
							var left = '240px';
							if($elem.parent().children().length == $elem.index()+1)
								top = '-295px';
							
							$sub_menu2.show().animate({'top':top, 'left':left},200);
						}	
						
						var $sub_menu3 = $elem.find('.sdt_box3');
						
						if($sub_menu3.length){
							var left = '70px';
							var top = '120px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-100px';
							$sub_menu3.show().animate({'left':left, 'top':top},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
						
					var $sub_menu2 = $elem.find('.sdt_box2');
					if($sub_menu2.length)
					$sub_menu2.hide().css('left','0px');
						
					var $sub_menu3 = $elem.find('.sdt_box3');
					if($sub_menu3.length)
					$sub_menu3.hide().css('left','170px');
						
						
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px', 'left':'0px'},500);
				});
            });
		            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li.Liabilities').bind('click',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'top':'-50px',
							'left':'10px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'160px', 'left':'10px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px', 'left':'10px', 'top':'120px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '180px';
							var top = '120px'
							if($elem.parent().children().length == $elem.index()+1)
								left = '-180px';
							$sub_menu.show().animate({'left':left, 'top':top},200);
						}	
						var $sub_menu2 = $elem.find('.sdt_box2');
						
						if($sub_menu2.length){
							var top = '290px';
							var left = '10px';
							if($elem.parent().children().length == $elem.index()+1)
								top = '-290px';
							
							$sub_menu2.show().animate({'top':top, 'left':left},200);
						}	
						
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
						
					var $sub_menu2 = $elem.find('.sdt_box2');
					if($sub_menu2.length)
					$sub_menu2.hide().css('left','0px');
						
					var $sub_menu3 = $elem.find('.sdt_box3');
					if($sub_menu3.length)
					$sub_menu3.hide().css('left','170px');
						
						
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px','left':'0px'},500);
				});
            });
			
			            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li.Incomes').bind('click',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'top':'-50px',
							'left':'-260px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'160px', 'left':'-260px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px', 'left':'-260px', 'top':'120px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '-90px';
							var top = '120px'
							if($elem.parent().children().length == $elem.index()+1)
								left = '-430px';
							$sub_menu.show().animate({'left':left, 'top':top},200);
						}	
						var $sub_menu2 = $elem.find('.sdt_box2');
						
						if($sub_menu2.length){
							var top = '290px';
							var left = '-260px';
							if($elem.parent().children().length == $elem.index()+1)
								top = '-290px';
							
							$sub_menu2.show().animate({'top':top, 'left':left},200);
						}	
						
						var $sub_menu3 = $elem.find('.sdt_box3');
						
						if($sub_menu3.length){
							var right = '250px';
							if($elem.parent().children().length == $elem.index()+1)
								right = '-250px';
							$sub_menu3.show().animate({'right':right},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
						
					var $sub_menu2 = $elem.find('.sdt_box2');
					if($sub_menu2.length)
					$sub_menu2.hide().css('left','0px');
						
					var $sub_menu3 = $elem.find('.sdt_box3');
					if($sub_menu3.length)
					$sub_menu3.hide().css('left','170px');
						
						
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px', 'left':'0px'},500);
				});
            });	
				            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li.Owners').bind('click',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'-60px',
							'top':'-200px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'-30px', 'left':'-60px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px', 'left':'-60px', 'top':'-30px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '110px';
							var top = '-30px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-170px';
							$sub_menu.show().animate({'left':left, 'top':top},200);
						}	
					
						
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
						
					var $sub_menu2 = $elem.find('.sdt_box2');
					if($sub_menu2.length)
					$sub_menu2.hide().css('left','0px');
						
					var $sub_menu3 = $elem.find('.sdt_box3');
					if($sub_menu3.length)
					$sub_menu3.hide().css('left','170px');
						
						
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px', 'left':'0px'},500);
				});
            });	
$(function() {
				/**
				* for each menu element, on mouse enter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li.Expenses').bind('click',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'top':'-200px',
							'left':'240px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'20px', 'left':'240px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px', 'left':'240px', 'top':'-30px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '-80px';
							var top = '-30px'
							if($elem.parent().children().length == $elem.index()+1)
								left = '80px';
							$sub_menu.show().animate({'left':left, 'top':top},200);
						}	
						var $sub_menu2 = $elem.find('.sdt_box2');
						
						if($sub_menu2.length){
							var top = '-140px';
							var left = '240px';
							if($elem.parent().children().length == $elem.index()+1)
								top = '140px';
							
							$sub_menu2.show().animate({'top':top, 'left':left},200);
						}	
						
						var $sub_menu3 = $elem.find('.sdt_box3');
						
						if($sub_menu3.length){
							var left = '-410px';
							var top = '-30px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '410px';
							$sub_menu3.show().animate({'left':left, 'top':top},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
						
					var $sub_menu2 = $elem.find('.sdt_box2');
					if($sub_menu2.length)
					$sub_menu2.hide().css('left','0px');
						
					var $sub_menu3 = $elem.find('.sdt_box3');
					if($sub_menu3.length)
					$sub_menu3.hide().css('left','170px');
						
						
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px', 'left':'0px'},500);
				});
            });