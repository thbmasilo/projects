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
							'width':'490%',
							'height':'720%',
							'top':'-210%',
							'left':'700%'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'700%','width':'20%', 'left':'740%'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'720%','width':'490%', 'left':'700%', 'top':'510%'},300,function(){
						var $sub_menu = $elem.find('#Asset1');
						if($sub_menu.length){
							var left = '178%';
							var top = '74.5%';
							var width = '75%';
							var height = '112%';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-178%';
							$sub_menu.show().animate({'left':left, 'top':top, 'width':width, 'height':height},200);
						}	
						var $sub_menu2 = $elem.find('#Asset2');
						
						if($sub_menu2.length){
							var top = '184%';
							var left = '105%';
							var width = '75%';
							var height = '112%';
							if($elem.parent().children().length == $elem.index()+1)
								top = '-201%';
							
							$sub_menu2.show().animate({'top':top, 'left':left, 'width':width, 'height':height},200);
						}	
						
						var $sub_menu3 = $elem.find('#Asset3');
						
						if($sub_menu3.length){
							var left = '31%';
							var top = '75%';
							var width = '75%';
							var height = '112%';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-31%';
							$sub_menu3.show().animate({'left':left, 'top':top, 'width':width, 'height':height},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('#Asset1');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0%');
						
					var $sub_menu2 = $elem.find('#Asset2');
					if($sub_menu2.length)
					$sub_menu2.hide().css('left','0%');
						
					var $sub_menu3 = $elem.find('#Asset3');
					if($sub_menu3.length)
					$sub_menu3.hide().css('left','0%');
						
						
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0%'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0%',
							'height':'0%',
							'left':'85%'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25%', 'left':'0%'},500);
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
							'width':'420%',
							'height':'720%',
							'top':'-210%',
							'left':'25%'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'700%','width':'100%', 'left':'90%'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'720%','width':'425%', 'left':'25%', 'top':'510%'},300,function(){
						var $sub_menu = $elem.find('#Liability1');
						if($sub_menu.length){
							var left = '67.5%';
							var top = '76%'
							var width = '63%';
							var height = '110%';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-67.5%';
							$sub_menu.show().animate({'left':left, 'top':top, 'width':width, 'height':height},200);
						}	
						var $sub_menu2 = $elem.find('#Liability2');
						
						if($sub_menu2.length){
							var top = '184%';
							var left = '4%';
							var width = '64%';
							var height = '110%';
							if($elem.parent().children().length == $elem.index()+1)
								top = '-184%';
							
							$sub_menu2.show().animate({'top':top, 'left':left, 'width':width, 'height':height},200);
						}	
						
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('#Liability1');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0%');
						
					var $sub_menu2 = $elem.find('#Liability2');
					if($sub_menu2.length)
					$sub_menu2.hide().css('left','0%');
							
						
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0%'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0%',
							'height':'0%',
							'left':'85%'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25%','left':'0%'},500);				});
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
							'width':'530%',
							'height':'360%',
							'top':'-105%',
							'left':'-830%'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'left':'-780%', 'top':'340%', 'width':'20%'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'360%','width':'540%', 'left':'-830%', 'top':'255%'},300,function(){
						var $sub_menu = $elem.find('#Income1');
						if($sub_menu.length){
							var left = '-44%';
							var top = '38%'
							var width = '82%';
							var height = '54%';
							if($elem.parent().children().length == $elem.index()+1)
								left = '44%';
							$sub_menu.show().animate({'left':left, 'top':top, 'width':width, 'height':height},200);
						}	
						var $sub_menu2 = $elem.find('#Income2');
						
						if($sub_menu2.length){
							var top = '92%';
							var left = '-126%';
							var width = '82%';
							var height = '55%';
							if($elem.parent().children().length == $elem.index()+1)
								top = '-92%';
							
							$sub_menu2.show().animate({'top':top, 'left':left, 'width':width, 'height':height},200);
						}	
							
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('#Income1');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0%');
						
					var $sub_menu2 = $elem.find('#Income2');
					if($sub_menu2.length)
					$sub_menu2.hide().css('left','0%');
						
						
						
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0%'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0%',
							'height':'0%',
							'left':'85%'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25%', 'left':'0%'},500);
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
							'width':'165%',
							'height':'710%',
							'top':'-880%',
							'left':'-53%'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'5%','width':'50%', 'left':'-55%'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'750%','width':'170%', 'left':'-55%', 'top':'-170%'},300,function(){
						var $sub_menu = $elem.find('#Owner1');
						if($sub_menu.length){
							var left = '57.5%';
							var top = '-28%';
							var width = '85%';
							var height = '115%';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-57.5%';
							$sub_menu.show().animate({'left':left, 'top':top, 'width':width, 'height':height},200);
						}	
					
						
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('#Owner1');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0%');
						
					
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
							'width':'380%',
							'height':'800%',
							'top':'-930%',
							'left':'550%'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'20%','width':'380%', 'left':'540%'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'800%','width':'380%', 'left':'550%', 'top':'-125%'},300,function(){
						var $sub_menu = $elem.find('#Expense1');
						if($sub_menu.length){
							var left = '-24%';
							var top = '-19%';
							var width = '59%';
							var height = '120%';
							
							if($elem.parent().children().length == $elem.index()+1)
								left = '24%';
							$sub_menu.show().animate({'left':left,'width':width,'height':height,'top':top},200);
						}	
						var $sub_menu2 = $elem.find('#Expense2');
						
						if($sub_menu2.length){
							var top = '-91%';
							var left = '82%';
							var width = '59%';
							var height = '120%';
							if($elem.parent().children().length == $elem.index()+1)
								top = '91%';
							
							$sub_menu2.show().animate({'left':left,'width':width,'height':height,'top':top},200);
						}	
						
						var $sub_menu3 = $elem.find('#Expense3');
						
						if($sub_menu3.length){
							var left = '-139.5%';
							var top = '-19%';
							var width = '59%';
							var height = '120%';
							if($elem.parent().children().length == $elem.index()+1)
								left = '139.5%';
							$sub_menu3.show().animate({'left':left,'width':width,'height':height,'top':top},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('#Expense1');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0%');
						
					var $sub_menu2 = $elem.find('#Expense2');
					if($sub_menu2.length)
					$sub_menu2.hide().css('left','0%');
						
					var $sub_menu3 = $elem.find('#Expense3');
					if($sub_menu3.length)
					$sub_menu3.hide().css('left','0%');
						
						
					
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