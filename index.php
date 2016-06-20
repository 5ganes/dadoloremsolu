<?php include("clientobjects.php");?>
<!DOCTYPE html>
<head>
    <title>DADO Solukhumbu - Home</title>
    <?php include("baselocation.php");?>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/elegant-press.css" type="text/css" />
    
    <!--[if IE]><style>#header h1 a:hover{font-size:75px;}</style><![endif]-->
    <link rel="stylesheet" href="styles/style.css" type="text/css" />
    
    <style type="text/css">
	    @font-face {
	    	font-family: "Preeti";
	    	src: url(font/Preeti.ttf) format("truetype");
	    }
	    .preetie { 
		font-family: "Preeti", Verdana, Tahoma;
	    }
    </style>
    
</head>

<body style="margin-top:0px;background:none">
	
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <div class="main-container">
   		<div class="header">
      		<div class="logo">
              	<img src="images/logo.png" height="100px" width="110px">
          	</div>
            <div class="tit">
                <h6 style="line-height:22px; font-size: 13px">नेपाल सरकार</h6>
                <h4 style="line-height:22px;font-size:16px;">कृषि विकास मन्त्रालय</h4>
                <h6 style="font-size:18px">कृषि विभाग</h6>
                <h4 style="line-height:22px;font-size:15px">क्षेत्रीय कृषि निर्देशनालय</h4>
                <h6 style="line-height:22px; font-size: 17px;">जिल्ला कृषि विकास कार्यालय, सोलुखुम्बु</h6>
                
     		</div>
            <div class="flag">
            	<img src="images/flagflip.gif" />
            </div>
            <div class="clear"></div>
      	</div>
    </div>
<div class="main-container">
  <div id="sub-headline">
    <div class="tagline_left" style="width: 60%">
    	<p id="tagline2">Tel: ९७७-०३८-५२०१३०. | Mail: <a href="mailto:dadosolukhumbu@gmail.com">dadosolukhumbu@gmail.com</a></p>
  	</div>
    <div class="tagline_right">
      <form action="" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" name="keyword" placeholder="Search" required />
          <input type="submit" name="search" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="main-container">
  <div id="nav-container">
   <nav> 
    <ul class="nav">
    	<?php createMenu(0, "Header", $pageId); ?>
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>

<div class="main-container">
  
	<div class="container1" style="padding-bottom:0">
  
    	<?php 
			if(isset($_GET['action']))
			{
				$action = $_GET['action'];
				$action = str_replace(".","", $action);
				include("includes/".$action.".php");			
			}
			else if(isset($_POST['search']))
			{
				include("includes/search.php");	
			}			
			else if(isset($pageLinkType))
			{
				if($pageLinkType == "")
				{}
				else
				{
					include("includes/cmspage.php");
				}
			}
			else
			{
				include("includes/main.php");
			}
		?>   
    
 	</div>

</div>
<div class="main-container">
 </div>
 
<div class="callout" style="background: #bbffbb"> 
    <div class="calloutcontainer" style="margin-top:20px"> 
        <div class="container_12"> 
            <div class="grid"> 
                
                <article class="footbox">
                  <?php
                    $contact=$groups->getById(CONTACT);
                    $contactGet=$conn->fetchArray($contact);
                  ?>
                  <h2 style="text-align:left;">हामीलाई सम्पर्क गर्नुहोस</h2>
                  <div class="contact">
                    <div class="col-md-4 recent-posts">
                        <?=$contactGet['shortcontents'];?>
                    </div>
                  
                  </div>
                </article>
                
    			      <article class="footbox last">
      				    <h2>हामी फेसबुकमा पनि छौं</h2>
      				    <div id="social"> 
          				  <a href="http://www.facebook.com/krishighar" class="s3d facebook">
                      Facebook <span class="icons facebook"></span>
                    </a>
                    <div class="facebook">
                    	<div class="fb-page" data-href="https://www.facebook.com/krishighar" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="false">
                        	<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/krishighar"><a href="https://www.facebook.com/krishighar">DADO Myagdi</a></blockquote>
                    		</div>
                  		</div>
                 		</div> 
      				    </div>
    			      </article>
                
                <article class="footbox">
                  <div class="infocat" style="text-align: right;">
                   <? include("includes/subscription.php");?>
                  </div>
                </article>

            	<div class="clear"></div> 
        	</div> 
        <div class="calloutoverlay"></div> 
        <div class="calloutoverlaybottom"></div> 
    </div> 
</div> </div> 
 <footer>
    <p class="tagline_left">
    	Copyright &copy; 2015 - All Rights Reserved - <a href="http://dadosolukhumbu.gov.np">dadosolukhumbu.gov.np</a>
   	</p>
    <p class="tagline_right">
    	Powered By: <a href="http://www.krishighar.com" title="Ganesh Khatri" target="_blank" >Team Krishighar</a>
  	</p>
    <br class="clear" />
  </footer>

<br />
<br />
    </body>
</html>