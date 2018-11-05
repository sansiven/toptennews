<!DOCTYPE html>
<html lang="en">
<head>
    <title>Topten Khabar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/tickr-style-red.css" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/multi.js"> </script>
</head>
<body>
	@include('inc.header')

	
	<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h2><a href="">बस्तीमा बाढी पसेपछि अनामनगरमा आपत् (फोटो फिचर)</a></h2>
			<span class="blue"><hr></span>
			<p><img src="img/n1.jpg" width="100%;"></p>
			<hr>

			<div class="col-md-6 today">
	<!--    				<h5><strong><a href="#">घर नै कछुवा र चरा तस्करीको अखडा</a></strong></h5>
				<p><img src="img/news1.jpg" width="30%;" style="float: left; padding-right: 10px;">अवैध विक्री वितरणका लागि लुकाएर राखिएका एकसय नौ कछुवा र एकसय ६५ प्रजातिका विभिन्न चराचुरुङगी जिल्ला वन कार्यालय काठमाडौंले नियन्त्रणमा लिएको छ । ...</p><hr>

				<h5><strong><a href="#">खनाल र पुन सशस्त्रको एआईजीमा बढुवा</a></strong></h5>
				<p><img src="img/news2.jpg" width="30%;" style="float: left; padding-right: 10px"> शसस्त्र प्रहरी बलका डिआइजी शैलेन्द्र खनाल र जीतबहादुर पुन सशस्त्र प्रहरी अतिरिक्त महानिरिक्षक (एआईजी) पदमा बढुवा भएका छन । बिहीवार बसेको मन्त्रिपरिषद्को बैठकले खनाल र पुनलाई एआइजीमा वढुवा गर्ने निर्णय...</p><hr>

				<h5><strong><a href="#">सत्य निरुपणमा उजुरी दिने म्याद ३० दिन थप</a></strong></h5>
				<p><img src="img/news3.jpg" width="30%;" style="float: left; padding-right: 10px"> सत्य निरुपण तथा मेलमिलाप आयोगमा सशस्त्र युद्धपीडितले उजुरी दिने म्याद ३० दिन थप गरिएको छ । आयोगको विहिबारको वैठकले उजुरी दिन समयावधि वढाएको हो । ...</p><hr>
	-->				@if(count($newsitems))
					@foreach($newsitems->slice(0,3) as $newsitem)
						
						<h5><strong><a href="/news/{{$newsitem->id}}">{{$newsitem->news_heading}}</a></strong></h5>
						<p class="homepagenews" style="height: 110px; overflow:hidden;"><img src="/storage/images/thumbnail/{{$newsitem->photo}}" width="30%;" style="float: left; padding-right: 10px;">{{$newsitem->news_content}}</p><hr>
					@endforeach
				@endif
				<!--- start of tarkari bazzar -->

				<ul class="nav nav-tabs newstab">
					<li class="active"><a data-toggle="tab" href="#home">शीर्ष १०</a></li>
					<li><a data-toggle="tab" href="#menu1">अत्याधिक पदिएको</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<h4>शीर्ष १० खबरहरु</h4>
						<hr>
						<p><i class="fas fa-angle-double-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p>
						<p><i class="fas fa-angle-double-right"></i> <a href=""> जाजरकोटमा बाढीले ९ घर बगायो, एकको मृत्यु</a></p>
						<p><i class="fas fa-angle-double-right"></i> <a href=""> सेना विस्फोटक पदार्थ बनाउँदै</a></p>
						<p><i class="fas fa-angle-double-right"></i> <a href=""> बाढीपीडित अझै त्रिपालमुनि</a></p>
						<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p>
						<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p>
						<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p>
						<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p>
						<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p>
						<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p><hr>
					</div>
					<div id="menu1" class="tab-pane fade">
						<h4>अत्याधिक पदिएको समाचारहरु</h4>
						<hr>
						<p><i class="fas fa-chevron-circle-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p>
						<p><i class="fas fa-chevron-circle-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p>
						<p><i class="fas fa-chevron-circle-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p>
						<p><i class="fas fa-chevron-circle-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p>
						<p><i class="fas fa-chevron-circle-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p><hr>
					</div>
				</div>

					<!-- <table  border=0 width=100%; class="tarkaritbl">
						<tr valign="top">
						<td>
							<table border=0; width="100%;">
								<tr >
						<td > -->
									<!--- Wholesale Price Scrolling -->
						<!-- <div id="pricetext">
						
						<table width=100%;><tr><td colspan=2 align='center'><b>थोक मूल्य विवरण</td></tr>
						<tr><td align='left'><b><iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?dwn=only&font_color=333333&font_size=12&bikram_sambat=0&api=621180i110" width="165" height="22"></iframe></b></td>
							<td align='right'><b> समयः बिहान ७ बजे</b></td></tr></table>
					
								
								<table border=0 width=100%; class="tblhead">
								<tr><td width=40% align="left">कृषि उपज</td><td width=20%>ईकाइ</td> <td width=10%>न्यूनतम</td> <td width=10%>अधिकतम</td> <td width=10%>औसत</td></tr></table>
								<hr>	
							</div>
							<div id="pricetextdislpay">

								<script type="text/javascript">  
								var iframesrc="http://kalimatimarket.gov.np/home/wpricelist"
								document.write('<iframe id="datamain" src="'+iframesrc+'" width="100%" height="280px" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>')
								</script>
							</div>
						<tr>
						    <td> -->
							<!--- Retail Price Scrolling -->
							<!-- <div id="pricetext">
								<table width=100%;><tr><td colspan=2 align='center'><b>खुद्रा मूल्य विवरण</td></tr>
								<tr><td align='left'><b><iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?dwn=only&font_color=333333&font_size=12&bikram_sambat=0&api=621180i110" width="165" height="22"></iframe></td><td align='right'><b>समयः बिहान ८ बजे</b></td></tr></b></table>
								<table border=0 width=100%; class="tblhead">
								<tr><td width=40% align="left">कृषि उपज</td><td width=20%>ईकाइ</td><td width=10%>न्यूनतम</td><td width=10%>अधिकतम</td><td width=10%>औसत</td></tr></table>
							<hr>	
							</div>
							<div id="pricetextdislpay">

								<script type="text/javascript">
								
								var iframesrc="http://kalimatimarket.gov.np/home/rpricelist"
								document.write('<iframe id="datamain" src="'+iframesrc+'" width="100%" height="280px" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>')
								</script>
							</div>
							</td>
							</tr>
						</table>
					</b></td></b></td></b></td></b></td></b></td></tr></table><hr> -->
		        <!--- End of tarkari bazzar -->
				
			</div>

			<div class="col-md-6 headnews">
				<p><img src="img/add6.gif" width="100%;"></p>
				<hr>
				<h4><strong>मुख्य समाचार</strong></h4>
				<span class="red"><hr></span>
				@if($news_main_items)
					@foreach($news_main_items as $newsitem)
						<img src="/storage/images/thumbnail/{{$newsitem->photo}}" width="30%;" style="float: left; padding-right: 10px;">
						<h5><strong><a href="/news/{{$newsitem->id}}">{{$newsitem->news_heading}}</a></strong></h5>
						<p><span>२०७३ असार २ बिहीवार</span></p>
						<p>{{$newsitem->news_content}}</p><hr>
					@endforeach
				@endif
			</div>

		</div>


   		<div class="col-md-3 rightnews">
   			<p class="popular"><strong>भर्खरै प्रकाशित समाचार</strong></p>
   			<span class="red"><hr></span>
   				<div id="tickr-scroll">
				  <ul>
					<li><i class="far fa-hand-point-right"></i> <a href="#">छोरामात्रै जन्माएर बुहारी ...</a></li>
					<li><i class="far fa-hand-point-right"></i> <a href="#">हसिम अम्लाले तोडे कोहली ...</a></li>
					<li><i class="far fa-hand-point-right"></i> <a href="#">घर नै कछुवा र चरा तस्करीको ...</a></li>
				  </ul>
				</div>
   			<hr>

   			<p><img src="img/add3.gif" width="100%"></p>
   			<hr  style="border-color: #f4d742;">


   			<ul class="nav nav-tabs newstab">
			    <li class="active"><a data-toggle="tab" href="#home">शीर्ष १०</a></li>
			    <li><a data-toggle="tab" href="#menu1">अत्याधिक पदिएको</a></li>
			</ul>

			<div class="tab-content">
			    <div id="home" class="tab-pane fade in active">
					<h4>शीर्ष १० खबरहरु</h4>
					<hr>
					<p><i class="fas fa-angle-double-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p>
					<p><i class="fas fa-angle-double-right"></i> <a href=""> जाजरकोटमा बाढीले ९ घर बगायो, एकको मृत्यु</a></p>
					<p><i class="fas fa-angle-double-right"></i> <a href=""> सेना विस्फोटक पदार्थ बनाउँदै</a></p>
					<p><i class="fas fa-angle-double-right"></i> <a href=""> बाढीपीडित अझै त्रिपालमुनि</a></p>
					<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p>
					<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p>
					<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p>
					<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p>
					<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p>
					<p><i class="fas fa-angle-double-right"></i> <a href=""> प्यूठानमा पहिरोमा पुरिएर एक वेपत्ता, तीन घर पुरिए</a></p><hr>
			    </div>
			    <div id="menu1" class="tab-pane fade">
					<h4>अत्याधिक पदिएको समाचारहरु</h4>
					<hr>
					<p><i class="fas fa-chevron-circle-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p>
					<p><i class="fas fa-chevron-circle-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p>
					<p><i class="fas fa-chevron-circle-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p>
					<p><i class="fas fa-chevron-circle-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p>
					<p><i class="fas fa-chevron-circle-right"></i> <a href=""> सुरक्षित मातृत्वसम्बन्धी विधेयक स्वीकृत</a></p><hr>
			    </div>
			</div>


				<!-- Start of nepali calendar widget -->
				<p class="text-center red">नेपाली पात्रो</p>
					<script type="text/javascript"> <!--
					var nc_width = 260;
					var nc_height = 185;
					var nc_api_id = 27120180815322; //-->
					</script>
					<script type="text/javascript" src="https://www.ashesh.com.np/calendarlink/nc.js"></script>
				<!-- End of nepali calendar widget -->
				<hr>

				<!-- Start of nepali date converter -->
				<p class="text-center red">नेपाली Date Converter</p>
					<script type="text/javascript"> <!--
					var nc_dc_width = 260;
					var nc_dc_height = 190;
					var nc_dc_api_id = 28320180815494; //-->
					</script>
					<script type="text/javascript" src="https://www.ashesh.com.np/nepali-date/dcnew.js"></script>
				<!-- End of nepali date converter -->
				  <hr>

                <p><img src="img/add4.gif" width="100%;"></p>
                <hr>

   		   </div>
   	    </div>
    </div>


    <div class="container">
    	<div class="row">
    		<div class="col-md-12 mano">
    			<hr><h4><strong>अध्यात्म/उत्प्रेरणा</strong></h4>
    			<span class="red"><hr></span>
				@foreach($news_spiritual_items as $newsitem)
					<div class="col-md-3 monodiv">
						<img src="/storage/images/thumbnail/{{$newsitem->photo}}" width="50%;" style="float: left; padding-right: 10px">
						<h5><strong><a href="/news/{{$newsitem->id}}">{{$newsitem->news_heading}}</a></strong></h5>
					<p>{{$newsitem->news_content}}</p>
					</div>
				@endforeach
			<p class="text-right"><a href="#"><button class="btn btn-default" style="border-color: red;">सबै हेर्नुहोस</button></a></p>
			<hr>

    		</div>
    	</div>
		<hr>
    </div>

   <div class="container">
   	<div class="row">
   		<div class="col-md-12">
   			<p><img src="img/add11.gif" width="100%;"></p>
   			<hr>
   		</div>
   	</div>
   </div>


   <div class="container">
   	 <div class="row">
   	 	<div class="col-md-9 browndiv">
   	 		<div class="row">
	   	 		<div class="col-md-6 litecture">
	   	 			 <h4 class="redd"><strong>कला / साहित्य</strong> <hr style="margin-top: 5px;"></h4>
	   	 			 <img src="img/k1.jpg" width="30%;" style="float: left; padding-right: 10px">
			         <h5><strong><a href="#">एक लाख भूकम्पपीडितलाई दुई लाख अनुदान</a></strong></h5>
			         <p>सरकारले भूकम्पबाट प्रभावित एक लाख घरधनीसँग दुई लाख रुपैयाँ अनुदा...</p>
			         <hr>

			         <img src="img/k2.jpg" width="30%;" style="float: left; padding-right: 10px">
			         <h5><strong><a href="#">एक लाख भूकम्पपीडितलाई दुई लाख अनुदान</a></strong></h5>
			         <p>सरकारले भूकम्पबाट प्रभावित एक लाख घरधनीसँग दुई लाख रुपैयाँ अनुदा...</p>
			         <hr>

			         <img src="img/k3.jpg" width="30%;" style="float: left; padding-right: 10px">
			         <h5><strong><a href="#">एक लाख भूकम्पपीडितलाई दुई लाख अनुदान</a></strong></h5>
			         <p>सरकारले भूकम्पबाट प्रभावित एक लाख घरधनीसँग दुई लाख रुपैयाँ अनुदा...</p>
			         <hr>
	   	 		</div>
	   	 		<div class="col-md-6 entertainment">
	   	 			<h4 class="bluee"><strong>मनोरंजन </strong> <hr style="margin-top: 5px;"></h4>
	   	 			<img src="img/e1.jpg" width="30%;" style="float: left; padding-right: 10px">
			         <h5><strong><a href="#">एक लाख भूकम्पपीडितलाई दुई लाख अनुदान</a></strong></h5>
			         <p>सरकारले भूकम्पबाट प्रभावित एक लाख घरधनीसँग दुई लाख रुपैयाँ अनुदा...</p>
			         <hr>

			         <img src="img/e2.png" width="30%;" style="float: left; padding-right: 10px">
			         <h5><strong><a href="#">एक लाख भूकम्पपीडितलाई दुई लाख अनुदान</a></strong></h5>
			         <p>सरकारले भूकम्पबाट प्रभावित एक लाख घरधनीसँग दुई लाख रुपैयाँ अनुदा...</p>
			         <hr>

			         <img src="img/e3.jpg" width="30%;" style="float: left; padding-right: 10px">
			         <h5><strong><a href="#">एक लाख भूकम्पपीडितलाई दुई लाख अनुदान</a></strong></h5>
			         <p>सरकारले भूकम्पबाट प्रभावित एक लाख घरधनीसँग दुई लाख रुपैयाँ अनुदा...</p>
			         <hr>
	   	 		</div>

	   	 		<div class="col-md-12 addver" style="margin-top: 5px;">
	   	 			<div class="row">
	   	 				<p><img src="img/add5.gif" width="100%;"></p>
	   	 			</div>
	   	 		</div>

               <div class="col-md-12 phg">
               	  <div class="row">
		   	 		<div class="col-md-6 photo">
		   	 			<h4 class="yellow"><strong> फोटो / स्टुडियो </strong> <hr style="margin-top: 5px;"></h4>
		   	 			<div class="row">
			   	 			<div class="col-md-6 photost">
			   	 				<img src="img/p5.jpg" width="90%;">
			   	 				<p class="text-center topic"><a href="#">फोटो शीर्षक </a></p>
			   	 				<hr style="border-color: red; margin-top: 1px;">
			   	 			</div>

			   	 			<div class="col-md-6 photost">
			   	 				<img src="img/p2.jpg" width="100%;">
			   	 				<p class="text-center topic"><a href="#">फोटो शीर्षक </a></p>
			   	 				<hr style="border-color: red; margin-top: 1px;">
			   	 			</div>

			   	 			<div class="col-md-6 photost">
			   	 				<img src="img/p3.jpg" width="100%;">
			   	 				<p class="text-center topic"><a href="#">फोटो शीर्षक </a></p>
			   	 				<hr style="border-color: red; margin-top: 1px;">
			   	 			</div>

			   	 			<div class="col-md-6 photost">
			   	 				<img src="img/p4.jpg" width="100%;">
			   	 				<p class="text-center topic"><a href="#">फोटो शीर्षक </a></p>
			   	 				<hr style="border-color: red; margin-top: 1px;">
			   	 			</div>
		   	 		    </div>
		   	 		</div>
		   	 		<div class="col-md-6 game">
		   	 			<h4 class="green"><strong> खेलकुद </strong> <hr style="margin-top: 5px;"></h4>
		   	 			@foreach($news_sports_items as $newsitem)
							<img src="/storage/images/thumbnail/{{$newsitem->photo}}" width="40%;" style="float: left; padding-right: 10px">
							<h5><strong><a href="/news/{{$newsitem->id}}">{{$newsitem->news_heading}}</a></strong></h5>
							<p class="dime"><i class="far fa-clock"></i> 16-Aug-2018</p>
							<p>{{$newsitem->news_content}}</p>
							<hr style="border-color: red; margin-top: 1px;">
						@endforeach
		   	 		</div>
	   	 	      </div>
	   	 	    </div>
   	 	    </div>
   	 	</div>


   	 	<div class="col-md-3 sidebar">
   	 		<iframe src="https://www.ashesh.com.np/forex/widget2.php?api=651183i543" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100%; height:390px; border-radius:5px;" allowtransparency="true">
            </iframe>
            <hr>

            <p><img src="img/add9.gif" width="100%;"></p>
            <p><img src="img/add12.gif" width="100%;"></p>
            <hr>

            <!-- Rsifal Strat -->
            <h4 class="rasi"><strong>राशिफल</strong></h4>
            <!-- Rsifal End -->
   	 	</div>
   	 </div>
   </div>


   <div class="container">
   	 <div class="row">
   	 	<hr><p><img src="img/add15.gif" width="100%"></p><hr>
   	 </div>
   </div>



   <div class="container">
   	 <div class="row">
   	 	<h4 class="newspaper"><strong>पत्रपत्रिकाबाट</strong></h4>
   	 	<span class="red"><hr></span>
   	 	<div class="col-md-2 gorkhapatra">
   	 		<p><img src="img/gorkha.png" width="100%;" height="40px;"></p>
   	 		<hr>  	 		
   	 		<p><a href="#">मुलुकी ऐन आजदेखि प्रतिस्थापन जन्मदेखि मृत्युसम्म प्रभावित हुने नयाँ कानुन लागू</a></p>
   	 		<p><img src="img/gorkhanews.jpg" width="100%;"></p>
   	 		<p class="newscontent">जन्मदेखि मृत्युसम्मको कार्यविधि समेटिएको नागरिकको चुलोचौको प्रभावित हुने मुलुकी ऐन १६५ वर्षपछि प्रतिस्थापन भई ...</p>
   	 		<p class="text-right newscontent"><a href="#">पुरा पद्नुहोस</a></p>
   	 	</div>
   	 	<div class="col-md-2 kantipur">
   	 		<p><img src="img/kantipur.png" width="100%;" height="40px;"></p>
   	 		<hr>
   	 		<p><a href="#">फोहोर फाल्न लाम</a></p>
   	 		<p><img src="img/kantipurnews.jpg" width="100%;"></p>
   	 		<p class="newscontent">बिहीबार दिउँसो नुवाकोटको सिसडोलमा फोहोर बोकेका टिपर र ट्रक सडकमा लाम लागेका थिए । केही चालक चर्को ...</p>
   	 		<p class="text-right newscontent"><a href="#">पुरा पद्नुहोस</a></p>
   	 	</div>
   	 	<div class="col-md-2 kathmandu">
   	 		<p><img src="img/kathmandu.gif" width="100%;" height="40px;"></p>
   	 		<hr>
   	 		<p><a href="#">Free press on edge as new laws come into force today.</a></p>
   	 		<p><img src="img/kathmandunews.jpg" width="100%;"></p>
   	 		<p class="newscontent">The government’s new Criminal Code and Criminal Procedures Code, expected to reform ...</p>
   	 		<p class="text-right newscontent"><a href="#">पुरा पद्नुहोस</a></p>

   	 	</div>
   	 	<div class="col-md-2 annapurna">
   	 		<p><img src="img/anna.jpg" width="100%;" height="40px;"></p>
   	 		<hr>
   	 		<p><a href="#">अबदेखि प्राधिकरण घाटामा जाने छैन</a></p>
   	 		<p><img src="img/annanews.jpg" width="100%;"></p>
   	 		<p class="newscontent">बिहीबार दिउँसो नुवाकोटको सिसडोलमा फोहोर बोकेका टिपर र ट्रक सडकमा लाम लागेका थिए । केही चालक चर्को ...</p>
   	 		<p class="text-right newscontent"><a href="#">पुरा पद्नुहोस</a></p>
   	 	</div>

   	 	<div class="col-md-4 saptahik">
   	 		<p><iframe width="100%" height="280" src="https://www.youtube.com/embed/NKFA4JEfDP4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
   	 		<hr>
   	 		<p><img src="img/mano.jpg" width="100%;" height="40px;"></p>
   	 	</div>
   	 </div>
   </div>


   <div class="container">
   	 <div class="row">
   	 	<hr>
   	 	<div class="col-md-9">
   	 		<div class="row">
   	 			<p><img src="img/add14.gif" width="100%"></p>
   	 			<hr>
   	 			<h4><strong>रोचक समाचार</strong></h4>
   	 			<hr>
   	 			<div class="row">
	   	 			<div class="col-md-4">
	   	 				<p><img src="img/r1.jpg" width="100%;" height="150px;"></p>
	   	 				<p class="text-center"><a href="#">समाचार शीर्षक</a></p>
	   	 			</div>
	   	 			<div class="col-md-4">
	   	 				<p><img src="img/r2.jpg" width="100%;" height="150px;"></p>
	   	 				<p class="text-center"><a href="#">समाचार शीर्षक</a></p>
	   	 			</div>
	   	 			<div class="col-md-4">
	   	 				<p><img src="img/r3.jpg" width="100%;" height="150px;"></p>
	   	 				<p class="text-center"><a href="#">समाचार शीर्षक</a></p>
	   	 			</div>
	   	 		</div>
   	 		</div>
   	 	</div>

   	 	<div class="col-md-3 preeti">
   	 		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Preeti to Unicode</button>
	       <div id="demo" class="collapse">
	       		<iframe src="https://www.ashesh.com.np/preeti-unicode/linkapi.php?api=721189i458" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100%; height:400px;" allowtransparency="true;"></iframe>
		  </div>
          <hr>
		  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Unicode To Preeti</button>
	       <div id="demo2" class="collapse">
	       	<iframe src="https://www.ashesh.com.np/unicode-preeti/linkapi.php?api=731182i084" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100%; height:400px;" allowtransparency="true"></iframe>
		  </div>
   	 	</div>
   	 </div>
   </div>


   <div class="container">
   	 <div class="row">
   	 	<hr><p><img src="img/mausam.png" width="100%;" height="300px;"></p><hr>
   	 </div>
   </div>


@include("inc.footer")
</body>
</html>


