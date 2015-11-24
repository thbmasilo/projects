<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="popup/dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="popup/dist/sweetalert.css">
  
    
    
    <title>CashCow Accounting Tool</title>
    
	 <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device=width, initial=scale=1.0">
	  <meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails"/>
	  
			<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
	        <style>
			body{
				
				background-image:url(images/background/590719.jpg);
				background-size:cover;
				font-family:Arial;
			}
			span.reference{
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:30px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			ul.sdt_menu{
				margin-top:0px;
				
				
			}
			h1.title{
				text-indent:-9000px;
				background:transparent url(title.png) no-repeat top left;
				width:633px;
				height:69px;
			}
		</style>
	  
		
</head>
<body>
<table id="ans">
 <tr>
   <th></th>
    <th></th>
 </tr>

</table>

<div class="content">
<canvas></canvas>
<p></p>
			<h1 class="title">Slide Down Box Menu with jQuery and CSS3</h1>
			<ul id="sdt_menu" class="sdt_menu">
			
				<li class="Assets" onClick="AssetsShow()" id="Assets">
					<a href="#" id="Ass">
						<img  src="images/assets/assets.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">ASSETS</span>
							<span class="sdt_descr">(Owns)</span>
						</span>
					</a>
					<div class="sdt_box" id="Asset1">
					<h5>Current Assets<br>(Short Term)<hr></h5>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('Assets', ' TRADING STOCK');">TRADING STOCK</a>
							<a href="#" class="accounting"   id="accounts" onClick="CountAccount('Assets', ' DEBITORS-CONTROL');">DEBITORS-CONTROL</a>
							<a href="#" class="accounting"   id="accounts" onClick="CountAccount('Assets', 'BANK(DEBIT) BALANCE');">BANK<br>(DEBIT)<br>BALANCE</a>
							<a href="#" class="accounting"   id="accounts" onClick="CountAccount('Assets', ' CASH FLOAT');">CASH FLOAT</a>
					</div>
					<div class="sdt_box2" id="Asset2">
					  <h5>Non-Current Assets<br>(Long Term)<hr>Financial Assets</h5><br>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('Assets', 'FIXED DEPOSIT');">FIXED DEPOSIT</a><br>
								
					</div>
                    <div class="sdt_box3" id="Asset3">
					    <h5><hr>Fixed/Tangible Assets</h5>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('Assets', 'LAND & BUILDINGS');">LAND & BUILDINGS</a>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('Assets','VEHICLES');">VEHICLES</a>
				            <a href="#" class="accounting" id="accounts" onClick="CountAccount('Assets', 'EQUIPMENT');">EQUIPMENT</a><br>
					</div>
				</li>
				<li class="Liabilities" onClick="LiabilitiesShow()" id="Liabilities">
					<a href="#" id="Lia">
						<img  src="images/liability/download.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">LIABILITIES</span>
							<span class="sdt_descr">(Owes)</span>
						</span>
					</a>
					<div class="sdt_box" id="Liability1">
					  <h5>Current liabilities<br>(LongTerm)<hr></h5>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('Liabilities','CREDITORS CONTROL');">CREDITORS CONTROL</a>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('Liabilities','BANK (CREDIT BALANCE OVERDRAFT)');">BANK<br>(CREDIT BALANCE OVERDRAFT)</a>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('Liabilities','SHORT TERM LOAN');">SHORT TERM LOAN</a>
					</div>
					<div class="sdt_box2" id="Liability2">
					  <h5>Non Current liabilities<br>(LongTerm)<hr></h5>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('Liabilities','MORTGAGE');">MORTGAGE</a>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('Liabilities','LONG TERM LOAN');">LONG TERM LOAN</a>
					</div>
				</li>
				<li class="Owners" onClick="ownerShow()" id="Owners">
					<a href="#" id="own">
						<img src="images/owner's equity/images.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">OWNER EQUITY</span>
							<span class="sdt_descr">(Wealth of the owner)</span>
						</span>
					</a>
					<div class="sdt_box" id="Owner1">
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('OWNER EQUITY','CAPITAL');">CAPITAL</a>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('OWNER EQUITY','DRAWINGS');">DRAWINGS</a>
					</div>
					
					
				</li>
				<li class="Incomes" onClick="IncomeShow()" id="Incomes">
					<a href="#" id="inco">
						<img src="images/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">INCOME</span>
							<span class="sdt_descr">(Receipt)</span>
						</span>
					</a>
					<div class="sdt_box"  id="Income1">
					    <h5>Training Business<hr>Main Income</h5><br>
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('INCOME',' SALES');">SALES</a><br><br>
                        
						<h5>Other Income<hr></h5><br>
						
                        <a href="#" class="accounting" id="accounts" onClick="CountAccount('INCOME','RENT INCOME');">RENT INCOME</a>
					</div>
					<div class="sdt_box2" id="Income2">
					    <h5>Service Business<hr>Main/Current Income</h5><br>
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('INCOME','SERVICES RENDERED');">SERVICES RENDERED</a>
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('INCOME',' COMMISSION INCOME');">COMMISSION INCOME</a><br><br><br>
					</div>
				</li>
				<li class="Expenses" onClick="ExpensesShow()" id="Expenses">
					<a href="#" id="exp">
						<img src="images/expenses/Business-Expense-cover.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">EXPENSE</span>
							<span class="sdt_descr">(Running costs)</span>
						</span>
					</a>
					<div class="sdt_box" id="Expense1">
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' MATERIAL COSTS ');">MATERIAL COSTS</a>
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' DEBITORS-ALLOWANCES ');">DEBITORS-ALLOWANCES</a>
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' WATER & ELECTRICITY ');">WATER & ELECTRICITY</a>
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' WAGES & SALARIES ');">WAGES & SALARIES</a>
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' COST OF SALES ');">COST OF SALES</a>
					</div> 
					<div class="sdt_box2" id="Expense2">
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' RENT EXPENSE');">RENT EXPENSE</a>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' ADVERTISING ');">ADVERTISING</a>
							<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' FUEL ');">FUEL</a>
						    <a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' REPAIRS ');">REPAIRS</a>									
					</div>
					<div class="sdt_box3" id="Expense3">
					    <a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' PACKING MATERIAL ');">PACKING MATERIAL</a>
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' STATIONERY ');">STATIONERY</a>
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' INSURANCE ');">INSURANCE</a>
	       				<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' TRADING LICENCE ');">TRADING LICENCE</a>
						<a href="#" class="accounting" id="accounts" onClick="CountAccount('EXPENSE',' TELEPHONE ');">TELEPHONE</a>
					</div>
				</li>
			</ul>
		</div>
        <div>
            <span class="reference">
                <a href="http://tympanus.net/codrops/2010/07/16/slide-down-box-menu/"></a>
				<a href="http://www.flickr.com/photos/arcticpuppy/sets/72157622090180990/"></a>
            </span>
		</div>
		
		<!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery/jquery.easing.1.3.js"></script>
        <script src="jquery/entity22.js"></script>
       <!-- <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('click',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '170px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-170px';
							$sub_menu.show().animate({'left':left},200);
						}	
						var $sub_menu2 = $elem.find('.sdt_box2');
						
						if($sub_menu2.length){
							var bottom = '270px';
							if($elem.parent().children().length == $elem.index()+1)
								bottom = '-270px';
							$sub_menu2.show().animate({'bottom':bottom},200);
						}	
						
						var $sub_menu3 = $elem.find('.sdt_box3');
						
						if($sub_menu3.length){
							var right = '270px';
							if($elem.parent().children().length == $elem.index()+1)
								right = '-270px';
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
						 .animate({'top':'25px'},500);
				});
            });
			
			
			
        </script> -->
		<script language="javascript">
function AssetsShow() {

        $(".Owners").hide();
		$(".Expenses").hide();
		$(".Liabilities").hide();
		$(".Incomes").hide();
		document.getElementById("Assets").style.background = "Transparent";   
}

function ExpensesShow() {
	     
        $(".Assets").hide();
		$(".Owners").hide();
		$(".Liabilities").hide();
		$(".Incomes").hide();
		document.getElementById("Expenses").style.background = "Transparent";
}

function LiabilitiesShow() {

        $(".Assets").hide();
		$(".Owners").hide();
		$(".Expenses").hide();
		$(".Incomes").hide();
		 document.getElementById("Liabilities").style.background = "Transparent";
}

function IncomeShow()
{

        $(".Assets").hide();
		$(".Owners").hide();
		$(".Expenses").hide();
		$(".Liabilities").hide();
		 document.getElementById("Incomes").style.background = "Transparent";
}

function ownerShow()
{
        $(".Assets").hide();
		$(".Expenses").hide();
		$(".Liabilities").hide();
		$(".Incomes").hide();
		document.getElementById("Owners").style.background = "Transparent";
}

//unhide

        $(document).ready(function(){
    $(".Assets").mouseleave(function(){
        $(".Owners").show();
		$(".Expenses").show();
		$(".Liabilities").show();
		$(".Incomes").show();
		document.getElementById("Assets").style.background= "rgba(255,255,255,0.3)";
    });
		});
		 
/*$(document).ready(function(){
    $(".Owners").mouseleave(function(){
        $(".Assets").show();
		$(".Expenses").show();
		$(".Liabilities").show();
		$(".Incomes").show();
		document.getElementById("Owners").style.background = "#0FF";
    });
		});*/
$(document).ready(function(){
    $(".Expenses").mouseleave(function(){
        $(".Owners").show();
		$(".Assets").show();
		$(".Liabilities").show();
		$(".Incomes").show();
		document.getElementById("Expenses").style.background = "rgba(255,255,255,0.6)";
    });
		});
/*function ownerHide() {

        $(".Assets").show();
		$(".Expenses").show();
		$(".Liabilities").show();
		$(".Incomes").show();
		$(".Owners").show();
		document.getElementById("Assets").style.background = "#0FF";
} */

 $(document).ready(function(){
    $(".Liabilities").mouseleave(function(){
        $(".Owners").show();
		$(".Expenses").show();
		$(".Assets").show();
		$(".Incomes").show();
		document.getElementById("Liabilities").style.background = "rgba(255,255,255,0.7)";
    });
		});
		
		
$(document).ready(function(){
    $(".Owners").mouseleave(function(){
        $(".Liabilities").show();
		$(".Expenses").show();
		$(".Assets").show();
		$(".Incomes").show();
		document.getElementById("Owners").style.background = "rgba(255,255,255,0.5)";
    });
		});
		
$(document).ready(function(){
    $(".Incomes").mouseleave(function(){
        $(".Liabilities").show();
		$(".Expenses").show();
		$(".Assets").show();
		$(".Owners").show();
		document.getElementById("Incomes").style.background = "rgba(255,255,255,0.4)";
    });
		});

var entity1 ;
var entity2;
var account1;
var account2;	
	/*
function CountAccount() 
{
	switch (count)
	{
		  case 0:
				  if($("#Assets").click()) 
				  { 
						  if($("#account").click()) 
						  { 
							  account1 = "account"; 
							 
						   } 
						  entity1 = "Assets"; 
						 
						  					  
		} 
				 
			count++;
			alert("acount 1 selected" +"  " + account1);
			break;
		  case 1:
		  <!--if($("#Assets").click()) -->
		  <!--{ -->
			  <!--if(entity1 == "Assets") -->
			 <!-- { -->
				  alert("2nd entity selected");
			  <!--} -->
			  
		 <!-- } -->
			count++;
			<!--alert("acount 2 selected" + count); -->
			break;
		  default:
			alert("no more than 2");
	}
		
	
		
}

*/

var count =1;
EntityArray = new Array(4);
function CountAccount(Entity,Account) {
	
	
	
table = document.getElementById("ans");

	
	if(count ==1)
	{
	 EntityArray[0] =Entity;
	 EntityArray[1] =Account;
	 account1 = EntityArray[1];
	 entity1 = EntityArray[0];
	 
	 
	 count =count + 1;
	 swal("", "You've selected the first account!", "success") 
	 
	}
	else if (count == 2)
	{
      EntityArray[2] =Entity;
	 EntityArray[3] =Account;
	 if(EntityArray[3]==EntityArray[1])
	 {
	  
	   sweetAlert("Oops...", "the same account cannot be selected twice..try again", "error");
	 
	 }
	 else
	 {
	 
	 account2 = EntityArray[3];
	 entity2 = EntityArray[2];
	 count =count + 1;
	 
	 swal("", "You've selected the second account!", "success") 
	 }
	}
	else 
	{
		sweetAlert("Oops...", "You've already selected two accounts!", "error");
		
		
	}
    
	


	
    
    
	


	
    
	/*
    var table = document.getElementById("ans");
  var rows = document.getElementById("ans").getElementsByTagName("tr").length;

  var rows = document.getElementById("ans").getElementsByTagName("tr").length;

  if(rows==1)
  {
    assin = Account1;
  }
  else
  {
     table = document.getElementById("ans");
    var acc=table.rows[1].cells[0].innerHTML;
    if(acc==Account2)
    {
      assin =Account1;
    }
    else
    {
    assin = Account2;
  }
  }

  if(rows < 3){
    var row = table.insertRow(rows);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);



    cell1.innerHTML =  assin;

    cell2.innerHTML = status;
    cell3.innerHTML = dbOrCr;
    cell4.innerHTML = "<button id='"+rows+"' class='edit' onclick='Somefunction("+rows+");' >EDIT</button>";
    var rows = document.getElementById("ans").getElementsByTagName("tr").length;



   if(rows ==2)

    {
      updateRibon(Account2);

      assin =Account2;

    }
    else

    {

	  document.getElementById("mrg").innerHTML = "Please select next to continue or edit to make changes ";
    }}

    else
    {
    }
*/
    }

var Accoun="";

function updateRibon(Accoun)

{
  document.getElementById("mrg").innerHTML = "Select the appropriate status for the entity "+ Accoun +" to determine if its a debit of credit. ";

}



</script>
</body>
</html>
