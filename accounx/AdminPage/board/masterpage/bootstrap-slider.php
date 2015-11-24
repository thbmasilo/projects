<?php
session_start();
			if(isset($_SESSION['id']))
			{
				$loginID = $_SESSION['id'];
			}
			else
			{
				header("location:../../index.php");
				exit();
			}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cash Cow Accounting Tool</title>

	<!-- iframe css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>

	<!-- Board CSS -->
	<link rel="stylesheet" href="css2/style.css" type="text/css" media="screen"/>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet" />




</head>
<body>
    <!-- NAVBAR
    ================================================== -->


<div id="up">
</div>
    <div class="up" >

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"  href="#getIt">Get started</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        <li><a href="bootstrap-slider.html">Tutorial</a></li>
                        <li><a href="about.html">About</a></li>
					
                    </ul>
					   <li>    <div id="navbar" class="navbar-collapse collapse" style="float:right">
                    <ul class="nav navbar-nav">
                        <li><a href="../../index.php">Logout</a></li>
                    </ul>
                </div>
				</li>
                </div>
				
           
                
            </div>
        </nav>

    </div>

    <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
    <div class="container">
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. -->
        <!-- ================================================== -->
        <div id="slider1_container" style="display: none; position: relative; margin: auto; width: 920px; height: 442px;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: -10px; top: 0px; width: 940px; height: 442px;
            overflow: hidden;">
                <div>
                    <img u="image" src2="../img/home/01.jpg" />
                </div>
                <div>
                    <img u="image" src2="../img/home/02.jpg" />
                </div>
                <div>
                    <img u="image" src2="../img/home/03.jpg" />
                </div>
                <div>
                    <img u="image" src2="../img/home/04.jpg" />
                </div>

            </div>


            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="bottom: 1px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
			<style>
                /* jssor slider bullet navigator skin 05 css */
                /*
                .jssorb05 div           (normal)
                .jssorb05 div:hover     (normal mouseover)
                .jssorb05 .av           (active)
                .jssorb05 .av:hover     (active mouseover)
                .jssorb05 .dn           (mousedown)
                */
                .jssorb05 {
                    position: absolute;
                }
                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 20px;
                    height: 20px;
                    background: url(../img/b05.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb05 div { background-position: -10px -10px; }
                .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -10px; }
                .jssorb05 .av { background-position: -67px -10px; }
                .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -10px; }
            </style>

            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
            <style>
                /* jssor slider arrow navigator skin 11 css */
                /*
                .jssora11l                  (normal)
                .jssora11r                  (normal)
                .jssora11l:hover            (normal mouseover)
                .jssora11r:hover            (normal mouseover)
                .jssora11l.jssora11ldn      (mousedown)
                .jssora11r.jssora11rdn      (mousedown)
                */
                .jssora11l, .jssora11r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url(../img/a11.png) no-repeat;
                    overflow: hidden;
                }
                .jssora11l { background-position: -11px -41px; }
                .jssora11r { background-position: -71px -41px; }
                .jssora11l:hover { background-position: -131px -41px; }
                .jssora11r:hover { background-position: -191px -41px; }
                .jssora11l.jssora11ldn { background-position: -251px -41px; }
                .jssora11r.jssora11rdn { background-position: -311px -41px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>


            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        </div>
        <!-- Jssor Slider End -->
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

			<div class="down" id="getIt" align="center">

				<!-- <hr class="featurette-divider"> -->

							<div id="my-div">
							  <iframe id="my-iframe" name="Container" src="newboard.html" scrolling="no" frameborder="0" ></iframe>
							</div>
	         </div>












        <hr class="featurette-divider" >


		  <div style="width:800px; margin:0 auto;">
               <tr>
									<td width="600px" align="Top">
									<br>
								    <table id="GridView1" cellspacing="0" style="border-collapse:collapse;">
	<tbody><tr>
		<td>
											<h1>10 Questions & Answer Examples</h1>
												<br>
												Do not view the questions until after you have listened to the audio file. Reading the questions first will not help you improve your English listening skills.
												<br><br>

												<b><a href="javascript:showHide('div1')">Question 1</a></b><br>
												<div id="div1" style="DISPLAY: none">
												<br>
												1. &nbsp;The owner open a small shoe store and deposited R 40 000.00 into the business bank account.
												<br>
												<b><a href="javascript:showHide('div2')"><u>Answer</u></a></b><br>
												<div id="div2" style="DISPLAY: none">
												<br>
												A. Two accounts identified: Bank and Capital<br>B. Bank -Asset- Increase - Debit / Capital – Owners Equity – Increase - Credit<br>C. Debit Bank and Credit Capital R 40 000.00
												</div>
												</div>

												</br>
												<b><a href="javascript:showHide('div3')">Question 2</a></b><br>
												<div id="div3" style="DISPLAY: none">
												<br>
												1. &nbsp;The owner pays monthly salaries and wages to staff of R 4 500.00.
												<br>
												<b><a href="javascript:showHide('div4')"><u>Answer</u></a></b><br>
												<div id="div4" style="DISPLAY: none">
												<br>
												A. Two accounts identified: Bank and Salaries & Wages <br>B. Bank – Asset – Decrease - Credit / Salaries &Wages - Expenses - Increase - Debit<br>C. Credit Bank and Debit Salaries & Wages R 4 500.00
												</div>
												</div>

												</br>
												<b><a href="javascript:showHide('div5')">Question 3</a></b><br>
												<div id="div5" style="DISPLAY: none">
												<br>
												1. &nbsp;The owner sells goods for cash to value of R 2 500.00.
												<br>
												<b><a href="javascript:showHide('div6')"><u>Answer</u></a></b><br>
												<div id="div6" style="DISPLAY: none">
												<br>
												A. Two accounts identified: Bank and Sales<br>B. Bank – Asset – Increase - Debit / Sales – Income – Increase - Credit<br>C. Debit Bank and Credit Sales R 2 500.00
												</div>
												</div>

												</br>
												<b><a href="javascript:showHide('div7')">Question 4</a></b><br>
												<div id="div7" style="DISPLAY: none">
												<br>
												1. &nbsp;The owner draws money from the bank account and buys trading stock to value of R 5 500.00.
												<br>
												<b><a href="javascript:showHide('div8')"><u>Answer</u></a></b><br>
												<div id="div8" style="DISPLAY: none">
												<br>
												A. Two accounts identified: Bank and Trading Stock<br>B. Bank – Asset – Decrease - Credit / Trading Stock – Asset – Increase - Debit<br>C. Credit Bank and Debit Trading Stock R 5 500.00
												</div>
												</div>

												</br>
												<b><a href="javascript:showHide('div9')">Question 5</a></b><br>
												<div id="div9" style="DISPLAY: none">
												<br>
												1. &nbsp;The owner pays the shop rent for the month of R 6 000.00
												<br>
												<b><a href="javascript:showHide('div10')"><u>Answer</u></a></b><br>
												<div id="div10" style="DISPLAY: none">
												<br>
												A. Two accounts identified: Bank and Rent<br>B. Bank – Asset – Decrease – Credit / Rent – Expenses – Increase - Debit<br>C. Credit Bank and Debit Rent R 6 000.00
												</div>
												</div>

												</br>
												<b><a href="javascript:showHide('div11')">Question 6</a></b><br>
												<div id="div11" style="DISPLAY: none">
												<br>
												1. &nbsp;The owner receives a payment of R 3 500.00 for services rendered.
												<br>
												<b><a href="javascript:showHide('div12')"><u>Answer</u></a></b><br>
												<div id="div12" style="DISPLAY: none">
												<br>
												A. Two accounts identified: Bank and Services Rendered<br>B. Bank -Asset- Increase - Debit / Services Rendered – Income – Increase – Credit<br>C. Debit Bank and Credit Services Rendered R 3 500.00
												</div>
												</div>

												</br>
												<b><a href="javascript:showHide('div13')">Question 7</a></b><br>
												<div id="div13" style="DISPLAY: none">
												<br>
												1. &nbsp;The owner receives a short term loan from the bank for R 25 000.00.
												<br>
												<b><a href="javascript:showHide('div14')"><u>Answer</u></a></b><br>
												<div id="div14" style="DISPLAY: none">
												<br>
												A. Two accounts identified: Bank and Short Term Loan<br>B. Bank – Asset – Increase - Debit / Short Term loan - Liabilities - Increase – Credit<br>C. Debit Bank and Credit Short Term loan R 25 000.00
												</div>
												</div>

												</br>
												<b><a href="javascript:showHide('div15')">Question 8</a></b><br>
												<div id="div15" style="DISPLAY: none">
												<br>
												1. &nbsp;The owner buys trading stock from Blue Wholesaler on credit for R 2 500.00.
												<br>
												<b><a href="javascript:showHide('div16')"><u>Answer</u></a></b><br>
												<div id="div16" style="DISPLAY: none">
												<br>
												A. Two accounts identified: Trading Stock and Creditors Control ( Blue Wholesaler)<br>B. Trading Stock -Asset -Increase –Debit / Creditors Control-Liabilities-Increase – Credit<br>C. Debit Trading Stock and Credit Creditors Control  R 2 500.00
												</div>
												</div>

												</br>
												<b><a href="javascript:showHide('div17')">Question 9</a></b><br>
												<div id="div17" style="DISPLAY: none">
												<br>
												1. &nbsp;The owner sells goods for R 1 500.00 and place the money in the cash float.   The cost price of the goods is R 1000.00.
												<br>
												<b><a href="javascript:showHide('div18')"><u>Answer</u></a></b><br>
												<div id="div18" style="DISPLAY: none">
												<br>
												A. Accounts identified: Cash Float and Sales<br>
												B. Cash Float– Asset – Increase - Debit / Sales – Income – Increase – Credit<br>
												C. Debit Cash Float and Credit Sales R 1 500.00<br>
												D. Accounts identified : Cost of Sales and Trading Stock<br>
												E. Cost of Sales – Expense – Increase – Debit / Trading Stock – Asset – Decrease – Credit<br>
												F. Debit Cost of Sales and Credit Trading Stock R 1000.00
												</div>
												</div>

												</br>
												<b><a href="javascript:showHide('div19')">Question 10</a></b><br>
												<div id="div19" style="DISPLAY: none">
												<br>
												1. &nbsp;The owner sells good to a client Mr. Smith on credit for R 1 500.00.
												<br>
												<b><a href="javascript:showHide('div20')"><u>Answer</u></a></b><br>
												<div id="div20" style="DISPLAY: none">
												<br>
												A. Two accounts identified: Debtors Control ( Mr. Smith) and Sales<br>
												B. Debtors Control– Asset – Increase – Debit / Sales – Income – Increase - Credit<br>
												C. Debit Debtors Control and Credit Sales R 1 500.00
												</div>
												</div><br><br>

									</div>


        <!-- /END THE FEATURETTES
        <!-- FOOTER -->
        <footer>
            <p  class="pull-right"><a id="down" href="#up" class="btn btn-info btn-md">UP</a></p>
            <p>&copy; Accounting Tool 2015. &middot; <a href="#">Privacy</a> &middot; </p>
        </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>


	<script type="text/javascript" src="jquery/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
	<script type="text/javascript">
	$('#up, #down').on('click', function(e){
    e.preventDefault();
    var target= $(this).get(0).id == 'up' ? $('#down') : $('#up');
    $('html, body').stop().animate({
       scrollTop: target.offset().top
    }, 1000);
	});
	</script>

	<script type="text/javascript">
<!--
		function showHide(elementid)
		{
			if (document.getElementById(elementid).style.display == 'none')
				{
					document.getElementById(elementid).style.display = '';
				}
			else
				{
					document.getElementById(elementid).style.display = 'none';
				}
		}

		 function CheckScore()
    {
        for (var i=0; i < 4; i++)
        {
            if (MyForm.Question1[i].checked)
            {
                var Ques1UserAnswer = MyForm.Question1[i].value;
            }
            if (MyForm.Question2[i].checked)
            {
                var Ques2UserAnswer = MyForm.Question2[i].value;
            }
            if (MyForm.Question3[i].checked)
            {
                var Ques3UserAnswer = MyForm.Question3[i].value;
            }
            if (MyForm.Question4[i].checked)
            {
                var Ques4UserAnswer = MyForm.Question4[i].value;
            }
        }

        var Score = 0;
        var CorrectAnswers = MyForm.CorrectAnswers.value;

        if(Ques1UserAnswer == CorrectAnswers.substr(0, 1))
            Score++;

        if(Ques2UserAnswer == CorrectAnswers.substr(1, 1))
            Score++;

        if(Ques3UserAnswer == CorrectAnswers.substr(2, 1))
            Score++;

        if(Ques4UserAnswer == CorrectAnswers.substr(3, 1))
            Score++;

        ScoreText.innerHTML = "<font size=2>Your Score is: " + Score + " /4 </font><br />";

    }
//-->
</script>


	</body>
</html>
