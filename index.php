<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp(
i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v
)|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: http://m.cetdrishti.com');

	require_once 'idi.php';
	
	require 'connect.inc.php';
	session_start();
	//declare cat
	$cat = 0;
	// make the connection
	
	ORM::configure('mysql:host=localhost;dbname=cetdriss_drishti');
	ORM::configure('username', 'cetdriss_pranav');
	ORM::configure('password', 'kindappan123');



	if(isset($_SESSION['email_drs']))
		$reg_user=ORM::for_table('students')->where('email', $_SESSION['email_drs'])->find_one();

				
	//events multiple object
	for ($i=1; $i <=11 ; $i++) { 

			$events[$i] = ORM::for_table('events')->where('group', $i)->find_many();
	}

	$workshops = ORM::for_table('events')->where('group', 20)->find_many();
	
	$heads = array(
"COMPUTER SCIENCE ",
"ARCHITECTURAL ",
"ELECTRONICS ",
"MANAGEMENT ",
"MECHANICAL ",
"ELECTRICAL ",
"ROBOCET ",
"GENERAL ",
"CIVIL ",
"ONLINE",
"GAMING",
);
	
	
	
?>

<!DOCTYPE html>
<html >
<head>
	<title>Drishti 2013 | College of Engineering Trivandrum</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 	<meta name="google-site-verification" content="Qg-SODE1LIrVmZfBPrvyTiDMDwRI0N8m0meHhkQcUw8" />
  	<meta name="viewport" content="width=1024" />
  	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="keywords" content="Drishti,cetdrishti,cet,college of engineering trivandrum,drishti2013,techfest,kerala,trivandrum,national level techfest" />
  	<meta name="description" content="The annual national level technical fest cum exhibition of College of Engineering Trivandrum to be held on 6,7,8 September 2013. Prizes worth half a million at stake." />
    <meta name="author" content="Pranav" />
    <meta property="og:image" content="http://www.bestcss.in/application/upload/WebsitePhoto/392-best_css.jpg"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Drishti 13</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link href="css/fixed-positioning.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	

</head>

<body>
<style type="text/css">

#info{
	width:auto;
	height:auto;
	position:absolute;
	top:40%;
	left:-2%;
	font-family:'Open Sans';
	}


ul#ticker {
    width: 220px;
    height: 120px;
    overflow: hidden;
    text-align:justify;
}
 
ul#ticker  li {
    width: 200px;
    height: 99px;
    padding: 10px;
    border-bottom: 1px dashed #ccc;
}
 
ul#ticker li a {
    color: #666;
    font-size:12px;
    
}
 
ul#ticker li span {
    display: block;
    color: white;
    background:#dc5b32;
    padding:5px;
    text-align:center;
}
</style>

<!-- <div class="csswinner"><a href="http://www.csswinner.com/details/drishti-college-of-engineering/5502/" target="_blank"></a></div> -->
<!--  <div class="cssawa"><a href="http://www.cssdesignawards.com/search.php?search_term=drishti&search=search" target="_blank"></a></div> -->

		<div id="scrollbar" data-0="top:0%;margin-top:2px;" data-end="top:100%;margin-top:-52px;"></div>
	

	
	
	<div id="myOverlay"></div>
	<div id="skrollr-body">

		<div id="social_fb_box">
			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fdrishticet&amp;width=250&amp;height=80&amp;colorscheme=light&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;send=true&amp;appId=353718588071348" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:80px;" target="_blank" allowTransparency="true"></iframe>
			<br/>
			<div class="g-follow" data-annotation="bubble" data-height="24" target="_blank" data-href="https://plus.google.com/113889143984102287005" data-rel="publisher"></div>
		</div>

		<ul id="menu-container">
			<li class="events sleek" 
			data-0=" left:0%;top:0%; transform:scale(1) rotate(-25deg);position:relative;display:block;width: 400px;
  height: 300px;" 
			data-10="position:fixed;left:80%;top:25%;"
			data-300="left:-5%;top:50%;transform:scale(5) rotate(30deg);width:1700px;height:900px;"
			data-1700=""
			data-2000="top:210%;transform:scale(.5) rotate(60deg); "
			>
				<a href="#" class="900-hider ajax_reset" data-menu-top="900" data-what="events" >EVENTS</a>
			</li>
			<li class="workshop sleek" 
			data-0=" left:0px; transform:rotate(-25deg);position:relative;display:block;left:0px;" 
			data-100="left:500px;transform:rotate(0deg);display:block;"
			data-150="display:none;"
			>
				<a href="#" data-menu-top="2800">WORKSHOPS</a>
			</li>
			<li class="proshow sleek" 
			data-0=" left:0px; transform:rotate(-25deg);position:relative;display:block;left:0px;" 
			data-100="left:500px;transform:rotate(0deg);display:block;"
			data-150="display:none;"
			>
				<a href="#"  data-menu-top="5200">INFORMALS</a>
			</li>
			<li class="sponsors sleek" 
			data-0=" left:0px; transform:rotate(-25deg);position:relative;display:block;left:0px;" 
			data-100="left:500px;transform:rotate(0deg);display:block;"
			data-150="display:none;"
			>
				<a href="#" data-menu-top="7600">SPONSORS</a>
			</li>
			<li class="contact sleek" 
			data-0=" left:0px; transform:rotate(-25deg);position:relative;display:block;left:0px;" 
			data-100="left:500px;transform:rotate(0deg);display:block;"
			data-150="display:none;"
			>
				<a href="#" data-menu-top="9500">CONTACT</a>
			</li>
		</ul>

		<a 
			data-0=" left:20px;" 
			data-200="left:-500px;"
		class="face_icon" href="https://www.facebook.com/drishticet"><img src="images/fb.png"></a>
		<a 
			data-0=" left:100px;" 
			data-200="left:-550px;"
		class="gp_icon" href="https://plus.google.com/113889143984102287005/"><img src="images/gp.png"></a>
		
		
		<div id="info" class="block">
		<!--
                <ul id="ticker">
 		  <li>
                        <span>Schedule Changes</span>
                        <a href="#" target="_blank">
                            Date of BEST ENGINEER have been shifted to 7th Sept
                        </a>
                    </li>
                    
  <li>
                        <span>Online Registraion</span>
                        <a href="#">
                            Online Registration closes on 5th September 
                        </a>
                    </li>

                    <li>
                        <span>No Home Participation</span>
                        <a href="#">
                            No home participation is allowed on events except gaming ,informals and workshops
                        </a>
                    </li>
 	<li>
                        <span>Schedule Published</span>
                        <a href="pdf/schedule.pdf">
                           Click Here for Schedule
                        </a>
                    </li>
 
                    <li>
                        <span>College Id Card</span>
                        <a href="#">
                            Students without their college id cards will not be allowed to participate in any events
                        </a>
                    </li>
 
                  
           
 
                </ul> -->
            </div>
<!--
		<a  
			data-0=" top:32%;" 
			data-200="top:150%;"
			
			href="http://brainstrain.cetdrishti.com/"
			class="cart_icon_logout">BrainStrain 13</a>
			
		<?php if(isset($_SESSION['email_drs'])) {?>
		<p 
			href="#" 
			data-0="top:58%;background:rgb(23, 47, 78);" 
			data-200="top:150%;"
		class="cart_icon">Hi ! <?=$_SESSION['user_name']?></p>
		<a 
			href="#" 
			data-0=" top:70%;" 
			data-200="top:150%;"
		class="cart_icon">Registration Cart</a>
		<a 
			href="logout.php" 
			data-0=" top:75%;" 
			data-200="top:150%;"
		class="cart_icon_logout">logout</a>

		<?php }else{ ?>
			<a href="#logi-mon"  
			data-0=" top:75%;" 
			data-200="top:150%;"
			class="cart_icon_logout login-form-link" rel="modal:open">LOGIN</a>
			
			<a href="#registration_form"  
			data-0=" top:68%;" 
			data-200="top:150%;"
			class="cart_icon_logout non-clickable" rel="modal:open">REGISTER</a>
			
			
		<?php } ?>
		-->
		
		<!-- clouds -->


		<div class="clouds x1" data-0="top:0%;" data-1350="top:0%;" data-1400="top:-100%;"
							data-1400="top:-100%;" data-10200="top:0%;" data-11500="top:0%;" data-11550="top:-100%;">
			<img src="images/layer-clouds-03.png" >
		</div>

		<div class="clouds x2"
			data-0="top:0%; left: 1000px;" data-1350=""
							data-1400="top:-100%;" data-10200="left: 200px;top:0%;" data-11500="" data-11550="top:-100%;"
		>
			<img src="images/layer-cloud-blurred-02.png" >
		</div>
		 
		<div class="clouds x4"
			data-0="left: 470px;top: 10%;" data-1350=""
							data-1400="top:-100%;" 
		>
			<img src="images/layer-cloud-blurred-04.png" >
		</div>
		


		<div id="present"

			data-0="left:42%;top:20%;"
			data-700="top:-100%;"
		>
			<img src="images/hero.png">
		</div>
		<div id="logo_tcs"
			data-1="position:fixed;transform:scale(1);left:25%;top: 20%;"
			data-700="transform:scale(.4);left:-150%;top:-10%;"
			data-1200=""
			data-1600="left:-150%;top:-150%;"
		>
			<a href="#"><img src="images/logo_tcs.png"></a>
		</div>
		<div id="logo"
			data-1="position:fixed;transform:scale(1);left:20%;top: 30%;"
			data-700="transform:scale(.4);left:-15%;top:-10%;"
			data-1200=""
			data-1600="left:-50%;top:-50%;"
		>
			<a href="#"><img src="images/logo.png"></a>
		</div>
		<div id="down_s">
			<p>Scroll Down</p>
			<img src="images/down.png" >
		</div>
		
		<div id="logo_tag"
			data-0="top:65%;left:35%;"
			data-700="top: 150%;"
		>
			<img src="images/tag.png">
		</div>

		<div id="logo_w"
			data-10="position:fixed;transform:scale(1);left:77%;"
			data-1200=""
			data-2000="top:-50%;"
			data-2800="top:2%;"
			data-3500=""
			data-3900="left:-30%;"
		>
			<a href="#"><img src="images/logo_w.png"></a>
		</div>


		<!--  events  start here -->
		<div id="blue-panel"
			data-0="top:300%;"
			data-800="top:20%;"
			data-1600=""
			data-1700="top:300%;"
		>
			<a href="events.php?id=creovate" rel="modal:open"><img id="the_feat" src="images/feat.png"></a>
	</div>

	<div id="loadingImg">
		<img src="images/w8load.gif" >
	</div>
			
		

			<a href="#"
			class="top-bar top-bar-first-child"

			data-400="left:20%;top:-10%; background-color: rgb(218, 32, 32);  padding-left: 20px;"
			data-500="top:0%;"
			data-1200=""
			data-1300="top:-10%;"
			data-menu-top="2800"

			>WORKSHOPS</a>

			<a href="#" class="top-bar"

			data-500="left:40%;top:-10%; background-color: rgb(255, 207, 0);"
			data-600="top:0%;"
			data-1200=""
			data-1400="top:-10%;left:20%;"
			data-2000=""
			data-2100="top:0%;"
			data-3500=""
			data-3900="left:-35%;"
			data-menu-top="5200"
			>INFORMALS</a>

			<a href="#" class="top-bar"

			data-600="left:60%;top:-10%;background-color: rgb(129, 186, 16);"
			data-700="top:0%;"
			data-1200=""
			data-1500="top:-10%;left:40%;"
			data-2100=""
			data-2200="top:0%;"
			data-3500=""
			data-3900="left:-35%;"
			data-menu-top="7600"

			>SPONSORS</a>
			
			<a href="#" class="top-bar"

			data-700="left:80%;top:-10%;background-color: rgb(23, 47, 78);"
			data-800="top:0%;"
			data-1200=""
			data-1600="top:-10%;left:60%;"
			data-2200=""
			data-2300="top:0%;"
			data-3500=""
			data-3900="left:-35%;"

			data-menu-top="9500"


			>CONTACT</a>


		<div id="liner"
			data-395="width:0%;position:fixed;left:20%;"
			data-800="width:110%;"
			data-1200=""
			data-1500="width:0%;"
			data-1895="width:0%;left:0%;"
			data-2300="width:80%;"
			data-3400=""
			data-3900="width:0%;"
			>
		</div>

		<div id="left-hill"
			data-0=""
			data-400="left:-30%;position:fixed;transform:rotate(7deg);"
			data-600="left:-5%;position:fixed;transform:rotate(7deg);"
			data-1200=""
			data-1700="left:-30%;"
		></div>


		<!-- evets sub head-->

		<a  class="events-sec-head"
			data-0=""
			data-400="left:37%;position:fixed;opacity:0;"
			data-700="left:0%;position:fixed;opacity:1;"
			data-1200=""
			data-1500="left:-30%;"
		>EVENTS</a>
		<p id="kakk"></p>
		<!-- events sub menu-->
			<a
			class="events-sub"

			data-600="left:-50%;top:30%;opacity:1;"
			data-650="left:1%;"
			data-1200=""
			data-1250="left:20%;opacity:0;"
			data-1270=""
			data-1275="left:200%;"
			href="sample.php?q=1"




			>COMPUTER SCIENCE</a>

			<a 
			class="events-sub"

			data-625="left:-50%;top:36.2%;opacity:1;"
			data-675="left:1%;"
			data-1200="left:1%;"
			data-1300="left:20%;opacity:0;"
			data-1320=""
			data-1325="left:200%;"
			href="sample.php?q=2"
			>ARCHITECTURAL</a>

			<a 
			class="events-sub"

			data-650="left:-50%;top:42.4%;opacity:1;"
			data-700="left:1%;"
			data-1200="left:1%;"
			data-1350="left:20%;opacity:0;"
			data-1370=""
			data-1375="left:200%;"

			href="sample.php?q=3"
			>ELECTRONICS</a>

			<a 
			class="events-sub"

			data-675="left:-50%;top:48.6%;opacity:1;"
			data-725="left:1%;"
			data-1200="left:1%;"
			data-1400="left:20%;opacity:0;"
			data-1420=""
			data-1425="left:200%;"

			href="sample.php?q=4"
			>MANAGEMENT</a>

			<a 
			class="events-sub"

			data-700="left:-50%;top:54.8%;opacity:1;"
			data-750="left:1%;top:"
			data-1200=""
			data-1450="left:20%;opacity:0;"
			data-1470=""
			data-1475="left:200%;"

			href="sample.php?q=5"
			>MECHANICAL</a>

			<a 
			class="events-sub"

			data-725="left:-50%;top:61%;opacity:1;"
			data-775="left:1%;top:"
			data-1200=""
			data-1500="left:20%;opacity:0;"
			data-1520=""
			data-1525="left:200%;"

			href="sample.php?q=6"
			>ELECTRICAL</a>

			<a 
			class="events-sub"

			data-750="left:-50%;top:67.2%;opacity:1;"
			data-800="left:1%;top:"
			data-1200=""
			data-1500="left:20%;opacity:0;"
			data-1520=""
			data-1525="left:200%;"
			href="sample.php?q=7"
			>ROBOCET</a>

			<a 
			class="events-sub"

			data-760="left:-50%;top:73.4%;opacity:1;"
			data-800="left:1%;top:"
			data-1200=""
			data-1500="left:20%;opacity:0;"
			data-1520=""
			data-1525="left:200%;"

			href="sample.php?q=8"
			>GENERAL</a>

			<a 
			class="events-sub"

			data-770="left:-50%;top:79.6%;opacity:1;"
			data-800="left:1%;top:"
			data-1200=""
			data-1500="left:20%;opacity:0;"
			data-1520=""
			data-1525="left:200%;"

			href="sample.php?q=10"
			>ONLINE</a>

			<a 
			class="events-sub"

			data-775="left:-50%;top:85.8%;opacity:1;"
			data-800="left:1%;top:"
			data-1200=""
			data-1500="left:20%;opacity:0;"
			data-1520=""
			data-1525="left:200%;"

			href="sample.php?q=11"
			>GAMING</a>

			<a 
			class="events-sub"

			data-775="left:-50%;top:92%;opacity:1;"
			data-825="left:1%;top:"
			data-1200=""
			data-1500="left:20%;opacity:0;"
			data-1520=""
			data-1525="left:200%;"

			href="sample.php?q=9"
			>CIVIL</a>

		<!-- events sub menuends here-->

		<!-- workshops sub menu starts here-->
		<a href="#"
			class="top-bar top-bar-first-child"

			data-400="left:20%;top:-10%; background-color: rgb(52, 152, 219);  padding-left: 20px;"
			data-1200=""
			data-1900="top:-10%;left:0%;"
			data-2000="top:0%;"
			data-3500=""
			data-3900="left:-35%;"
			data-menu-top="900"

			>EVENTS</a>

		<div id="red-panelz"

			data-0="left:-150%;top:0%;position:fixed;width:100%;height:100%;"
			data-2700=""
			data-2800="top:10%;left:0%;"
			data-3500=""
			data-3900="left:-150%;"
		></div>	
		<div id="red-panel"

			data-0="left:-150%;top:0%;transform:scale(1) rotate(0deg);position:fixed;"
			data-1500=""
			data-2000="top:10%;left:0%;"
			data-3500=""
			data-3900="left:-150%;"
			
		>


		<div id="desk-cot"
					data-1900="top:150%;"
					data-2000="top:40%;transform:scale(1);"
					data-2500=""
					data-3000="top:150%;left: 15%;transform:scale(.5);"
				><img src="images/dude/desk1.png"></div>
		<div id="desk-mac"
					data-1900="top:-150%;"
					data-2000="top:18%;"
					data-2500="top:18%;left:20%;"
					data-3000="top:-150%;transform:scale(.5);"
				><img src="images/work/code.gif"></div>

			<div id="planer"
				data-2200="transform:translateX(0%) translateY(35%) scale(1);width:500px;"
				data-2350=""
				data-2800="transform:translateX(150%) translateY(-80%) scale(.1);"
			>

				


				<div class="plane body"
				data-1500="transform:translateX(50%) translateY(75%) rotateX(58deg) rotateY(0deg) rotate(32deg);"
				data-2000="transform: translateX(50%) translateY(45%)  rotateX(60deg) rotateY(-5deg) rotate(41deg);"
				data-2350="transform: translateX(50%) translateY(45%)  rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
			><img src="images/work/body.png"></div>
			<div class="plane lwing"
				data-1500="transform:translateX(28%) translateY(75%) rotateX(58deg) rotateY(0deg) rotate(32deg);"
				data-2000="transform:translateX(65%) translateY(-81%)  rotateX(0deg) rotateY(0deg) rotate(0deg);"
				data-2350="transform:translateX(35%) translateY(-115%)  rotateX(0deg) rotateY(0deg) rotate(0deg); display:block;"
				
	
			><img src="images/work/lwing.png"></div>
			<div class="plane rwing"
				data-1500="transform: translateX(45%) translateY(-92.4%) rotateX(58deg) rotateY(0deg) rotate(32deg);"
				data-2000="transform: translateX(50%) translateY(-80%)  rotateX(60deg) rotateY(-5deg) rotate(41deg);"
				data-2350="transform: translateX(78%) translateY(-60%) rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
				
	
			><img src="images/work/rwing.png"></div>
			<div class="plane ltail"
				data-1500="transform:translateX(50%) translateY(75%) rotateX(58deg) rotateY(0deg) rotate(32deg);"
				data-2000="transform: translateX(67%) translateY(-454.06%)   rotateX(60deg) rotateY(-5deg) rotate(41deg);"
				data-2350="transform:  translateX(41%) translateY(-498%)  rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
	
			><img src="images/work/lswing.png"></div>
			<div class="plane rtail"
				data-1500="transform:translateX(50%) translateY(75%) rotateX(58deg) rotateY(0deg) rotate(32deg);"
				data-2000="transform: translateX(74%) translateY(-445.06%)   rotateX(60deg) rotateY(-5deg) rotate(41deg);"
				data-2350="transform: translateX(56%) translateY(-410%)  rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
				
	
			><img src="images/work/swing.png"></div>
			<div class="plane top"
				data-1500="transform:translateX(50%) translateY(75%) rotateX(58deg) rotateY(0deg) rotate(32deg);"
				data-2000="transform:  translateX(50%) translateY(-485.06%)  rotateX(60deg) rotateY(-5deg) rotate(41deg);"
				data-2350="transform:translateX(46.68%) translateY(-515.32%)  rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
				
	
			><img src="images/work/top.png"></div>
			<!-- <div class="plane main"
				data-2700="display:none;"
				data-2705="display:block;transform: translateX(45%) translateY(40%)  rotateX(0deg) rotateY(0deg) rotate(0deg);"
				data-2710="display:block;"
	
			><img src="images/work/plane.png"></div> -->
			</div>
		</div>
		<div id="red-panelz"

			data-0="left:-150%;top:0%;position:fixed;width:70%;height:75%;"
			data-2700=""
			data-2800="top:20%;left:5%;z-index:554;"
			data-3500=""
			data-3900="left:-150%;"

			class="content-red"
		></div>	
		<div id="right-hill"
			data-0=""
			data-2000="left:175%;position:fixed;transform:rotate(-7deg);"
			data-2800="left:80%;position:fixed;transform:rotate(-7deg);"
			data-3500=""
			data-3900="left:-40%;"
		>
		</div>

		<div id="work-tab"
			data-0=""
			data-2000="left:180%;position:fixed;"
			data-2800="left:82%;position:fixed;top:40%;"
			data-3400=""
			data-3800="left:180%;"
		>
				<a class="work-sub-div" href="sampler.php?q=20" data-2900="top:25%;">WORKSHOPS</a>
				<a class="work-sub-div" href="sampler.php?q=21" data-2900="top:32%;">TALKS</a>
				<a class="" style="font-size:32px;display:block;" href="w_rule.php" rel="modal:open" data-2900="top:32%;">GENERAL RULES</a>
		</div>


		<a  class="work-sec-head"
			data-0=""
			data-400="right:-35%;position:fixed;opacity:0;"
			data-2300="right:-25%;position:fixed;opacity:0;"
			data-2800="right:0%;position:fixed;opacity:1;"
			data-3200=""
			data-3500="right:-35%;"
		>WORKSHOPS</a>
		

		
		<!-- workshops sub menu ends here-->

		<!-- proshows-->


			<div class="yel-pan"
			
			data-3050="left:200%;"
			data-3060="display:block;"
			data-3800="left:30%;"
			data-5200="display:none;"
			data-5210="display:none;"
			>
			<img src="images/m14.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-3900="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"


			>
			<img src="images/m13.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-4000="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"

			>
			<img src="images/m12.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-4100="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"

			>
			<img src="images/m11.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-4200="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"

			>
			<img src="images/m10.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-4300="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"

			>
			<img src="images/m9.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-4400="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"

			>
			<img src="images/m8.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-4500="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"

			>
			<img src="images/m7.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-4600="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"
			>
				<img src="images/m6.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-4700="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"
			>
				<img src="images/m5.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-4800="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"
			>
				<img src="images/m4.png">
			</div>
			<div class="yel-pan"
			data-3050="display:none;"
			data-4900="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"
			>
				<img src="images/m3.png">
			</div>

			<div class="yel-pan"
			data-3050="display:none;"
			data-5000="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"
			>
				<img src="images/m2.png">
			</div>

				<div class="yel-pan"
			data-3050="display:none;"
			data-5050="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"
			>
				<img src="images/m1.png">
			</div>

			<div class="yel-pan"
			data-3050="display:none;"
			data-5100="display:block;"
			data-5200="display:none;"
			data-5210="display:none;"
			>
				<img src="images/m0.png">
			</div>

			<div id="yellow-content"
				data-4900="background:rgb(255, 207, 0);transform:scale(0);border-radius: 50%;"
				data-5100="transform:scale(5);border-radius: 50%;left: 25%;"
				data-6110=""
				data-6550="transform:scale(0);left: 40%;"
			>
				<h2
					data-4800="top:40%;position:relative;left:0%;"
					data-5100="opacity:1;top:30%;left:-12.5%;display:block;"
					data-5600=""
					data-6100="display:none;"
				>INFORMALS</h2>
				
			</div>

			<div
				data-5000="left:-275%;position:fixed;top:0%;"
				data-5200="left:-21%;"
				data-5600="left:-21%;"
				data-6100="left:-275%;"
			 class="work_coming"><a rel="modal:open" href="paint.php" ><img style="width:120%" src="images/work/in_paint.png"></a></div>

			<div
				data-5000="left:8%;position:fixed;bottom:-300%;"
				data-5200="bottom:-5%;"
				data-5600="bottom:-5%;"
				data-6100="bottom:-300%;"
			 class="work_coming"><a rel="modal:open" href="gokart.php"><img style="width:120%" src="images/work/in_go.png"></a></div>


			 <a rel="modal:open" href="arch.php"
				data-5000="right:0%;position:fixed;top:300%;display:block;"
				data-5200="top:10%;"
				data-5600="top:10%;"
				data-6100="top:300%;"
			 class="work_coming"><img style="width:120%" src="images/work/in_arc.png"></a>

			<div
				data-5000="left:33%;top:10%;position:fixed;transform:scale(0);"
				data-5200="transform:scale(1);"
				data-5600="transform:scale(1);"
				data-6100="transform:scale(0);"
			 class="work_coming"><img class="rockers" style="width:90%" src="images/work/andm.png"></div>
			
			<div
				data-5000="left:300%;position:fixed;top:32%;"
				data-5200="left:35%;"
				data-5600="left:35%;"
				data-6100="left:300%;"
			 class="work_coming"><a rel="modal:open" href="csi.php"><img style="width:115%" src="images/work/csi.png"></a></div>

			
			<!-- <img data-5000="top:175%;position:fixed;left:75%;"
				data-5200="top:55%;"
				data-5600="top:55%;"
				data-6100="top:175%;"
				class="rockers"
				
				src="images/dude/r2.png">
			<img data-5000="top:175%;position:fixed;left:5%;"
				data-5200="top:55%;"
				data-5600="top:55%;"
				data-6100="top:175%;"
				class="rockers"
				
				src="images/dude/r1.png"> -->
			

			<div id="yellow-menu-cont" class="clearfix"
					data-4800="top:-100%;"
					data-5100="top:3%"
					data-5700="top:3%;"
					data-6100="top:-100%;"
			>
				<a href="#" data-menu-top="900" class="yellow-menu eve-ho">Events</a>
				<a href="#" data-menu-top="2800" class="yellow-menu work-ho">Workshops</a>
				<a href="#" data-menu-top="7600" class="yellow-menu spo-ho">Sponsors</a>
				<a href="#" data-menu-top="9500" class="yellow-menu con-ho">Contact</a>
			</div>
			
			<!-- proshows ends here-->

			<!-- sponsors ends here-->

				<div class="bomb"
					data-6500="display:none;left:20%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(1);"
					data-6550="display:block;"
					data-6900="transform: translateX(-518%) translateY(210%) translateZ(1031px) rotateX(-80deg) rotateY(507deg) rotate(343deg) scale(1);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:20%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(3);display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:40%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);"
					data-6550="display:block;"
					data-6900="transform: translateX(518%) translateY(210%) translateZ(-531px) rotateX(480deg) rotateY(-207deg) rotate(-243deg);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:40%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:60%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);"
					data-6550="display:block;"
					data-6900="transform: translateX(118%) translateY(910%) translateZ(831px) rotateX(-480deg) rotateY(507deg) rotate(703deg);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:60%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:20%;top:40%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(1);"
					data-6550="display:block;"
					data-6900="transform: translateX(518%) translateY(-110%) translateZ(-931px) rotateX(480deg) rotateY(-707deg) rotate(-653deg) scale(1);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:20%;top:40%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(5); left:0%;display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:40%;top:40%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(1);"
					data-6550="display:block;"
					data-6900="transform: translateX(-418%) translateY(510%) translateZ(331px) rotateX(-480deg) rotateY(607deg) rotate(243deg) scale(1);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:40%;top:40%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(3);display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:60%;top:40%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);"
					data-6550="display:block;"
					data-6900="transform: translateX(918%) translateY(-510%) translateZ(-331px) rotateX(480deg) rotateY(-207deg) rotate(43deg);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:60%;top:40%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:20%;top:60%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(1);"
					data-6550="display:block;"
					data-6900="transform: translateX(18%) translateY(410%) translateZ(-331px) rotateX(480deg) rotateY(1207deg) rotate(403deg) scale(1);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);top:60%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(3);left:0%;display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:40%;top:60%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(1);"
					data-6550="display:block;"
					data-6900="transform: translateX(-508%) translateY(-510%) translateZ(-331px) rotateX(480deg) rotateY(-207deg) rotate(43deg) scale(1);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:40%;top:60%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(3);display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:60%;top:60%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(1);"
					data-6550="display:block;"
					data-6900="transform: translateX(98%) translateY(-110%) translateZ(51px) rotateX(480deg) rotateY(-907deg) rotate(-43deg)  scale(1);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:60%;top:60%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(3);display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:20%;top:80%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(1);"
					data-6550="display:block;"
					data-6900="transform: translateX(8%) translateY(-510%) translateZ(-1px) rotateX(40deg) rotateY(-207deg) rotate(143deg) scale(1);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:80%;top:0%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg) scale(3);display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:40%;top:80%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);"
					data-6550="display:block;"
					data-6900="transform: translateX(8%) translateY(0%) translateZ(131px) rotateX(30deg) rotateY(707deg) rotate(-343deg);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:80%;top:20%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:60%;top:80%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);"
					data-6550="display:block;"
					data-6900="transform: translateX(-318%) translateY(100%) translateZ(501px) rotateX(1000deg) rotateY(707deg) rotate(603deg);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:20%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
					data-7250="display:none;"
					>
				</div>
				<div class="bomb"
					data-6500="display:none;left:40%;top:60%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);"
					data-6550="display:block;"
					data-6900="transform: translateX(-318%) translateY(310%) translateZ(231px) rotateX(80deg) rotateY(-20deg) rotate(-33deg);background:rgb(255, 207, 0);"
					data-7200="background:rgb(129, 186, 16);left:20%;transform: translateX(0%) translateY(0%) translateZ(0px) rotateX(0deg) rotateY(0deg) rotate(0deg);display:block;"
					data-7250="display:none;"
					>
				</div>
	

						<div id="green-kopp"
							data-7201="display:none;"
							data-7225="display:block;"
							data-7300="opacity:1;"
							data-8000=""
							data-8500="opacity:0;"

						>
						 
						<img style="width:79%;"src="images/previoussponsors.png">
                                              

					</div>
				<div id="green-menu-cont" class="clearfix"
					data-7200="top:-100%"
					data-7400="top:3%;"
					data-8000=""
					data-8500="top:-100%;"
				>
				<a href="#" data-menu-top="900" class="yellow-menu eve-ho">Events</a>
				<a href="#" data-menu-top="2800" class="yellow-menu work-ho">Workshops</a>
				<a href="#" data-menu-top="5200" class="yellow-menu pro-ho">Informals</a>
				<a href="#" data-menu-top="9500" class="yellow-menu con-ho">Contact</a>
				</div>
				

				
				<h2 class="sponsors-head"
					data-7200="left:-100%;transform: rotate(-90deg);"
					data-7400="left:5%;transform: rotate(0deg);"
					data-8000=""
					data-8200="left:-100%;transform: rotate(90deg);"
				>SPONSORS</h2>
				
			<!-- sponsors ends here-->
			<!-- contct starts here -->
			<a href="#"
				data-9000="top: -150%;right:10%;position:fixed;z-index:0;"
				data-9500="top:85%;z-index:999;"
				data-9600=""

			><img 
				data-9000="transform: rotate(-180deg);width:100%;"
			src="images/down.png"></a>

			<div id="conve"
				data-9000="top: -200%;left:0%;"
				data-9500="top:0%"
				data-9600=""
				data-9800="top: -200%;"
			>
				<h2>CONVENORS</h2>
				<p class="conv_h">Event </p>
				<p class="conv_p"> Sachin Murali 9037519753</p>
				<p class="conv_h"> Program  </p>
				<p class="conv_p"> Anoop Sasidharan 8547359193</p>
				<p class="conv_h">Publicity  </p>
				<p class="conv_p"> Arjun Balachandran 9746850206</p>
				<p class="conv_h">Sponsorship  </p>
				<p class="conv_p"> Rohit Krishnakumar 9995629261</p>
				<p class="conv_h">Finance  </p>
				<p class="conv_p"> Mohammed Ibrahim 9947423207</p>
				<p class="conv_h"> Technical </p>
				<p class="conv_p"> Sheen Jacob 9946820574</p>

			</div>
			
			<div id="conve"
				data-9000="top: 300%;left:80%;"
				data-9500="top:0%"
				data-9600=""
				data-9800="top: 300%;"
			>
				<h2>CONVENORS</h2>
				<p class="conv_h">Event Co-Convenor</p>
				<p class="conv_p">Anita Joseph 9037744982</p>
				<p class="conv_h">Expo Head</p>
				<p class="conv_p"> Amal B Nair 9446866422</p>
				<p class="conv_h"> Hospitality</p>
				<p class="conv_p"> Jithin T 9747067719 </p>
				<p class="conv_h">Site Designer</p>
				<p class="conv_p">Nithin David T  nithinz@live.in</p>
				<p class="conv_h">Site Designer</p>
				<p class="conv_p"> Pranav Raj S pranavrajs@gmail.com</p>
				

			</div>
				<div id="wall"
				data-8200="top:-150%;left:20%"
					data-9400="top:0%;"
					data-9700=""
					data-10000="top:-150%;"
					>
					<img src="images/dude/wall.png">
				</div>
				<div id="floor"
				data-8200="top:200%;left:20%"
					data-9400="top:50%;"
					data-9700=""
					data-10000="top:200%;"
					>
					<img src="images/dude/floor.png" data-9400="width:100%;">
				</div>

				<div id="sky"

					data-9900="top:-250%;left:0%"
					data-10000="top:0%;"
					data-11300=""
					data-11500="top:-250%;"

				></div>
				<div id="sun"

					data-9900="top:-150%;left:50%"
					data-10090="top:10%;"
					data-11300=""
					data-11500="top:-150%;"

				><img src="images/sun.png"></div>

				<div id="road"
				data-9900="top:200%;left:0%"
					data-10000="top:50%;"
					data-11300=""
					data-11500="top:200%;"
					>
				</div>
				<div id="maram"
				data-9900="top:10%;left:200%"
					data-10000="left:80%;"
					data-11300=""
					data-11500="left:200%;"
					>
					<img src="images/dude/tree.png">
				</div>
				<div id="bhiti"
				data-9900="top:-100%;left:0%"
					data-10000="top:47.5%;"
					data-11300=""
					data-11500="top:-100%;"
					>
				</div>
				<div id="stop"
				data-9900="top:-100%;left:5%"
					data-10100="top:15%;"
					data-11300=""
					data-11500="top:-100%;"
					>
					<img src="images/dude/stop.png">
				</div>
				<div id="dude"

					data-8200="top:-70%;"
					data-8800="top:10%;background: url(images/dude/dude.png) center center no-repeat;"
					data-9700="height: 70%;transform:scale(1);left:40%;"
					data-9900="transform:scale(.5);left:13%;"
					data-10200="top: 20%;left:13%;"
					data-10210="height: 25%;top: 36%;left:20%;"
					data-10700="left:70%;"
					data-11300=""
					data-11500="left:200%;background-position:50% 0%;"
					data-11550="height: 70%;transform:scale(1);"
				></div>

				<div id="d_clock"

					data-8200="top:-50%;left:30%"
					data-9500="top:10%;"
					data-9800="top:10%;"
					data-10000="top:-50%;"
				>
				<img src="images/clock.png">
			</div>

				
				<div id="desk-cont"
					data-8200="top:150%;"
					data-8900="top:30%;background: url(images/dude/desk1.png) center center no-repeat;"
					data-9700=""
					data-9900="top:150%;"

				></div>
				<div id="phone"

					data-8600="top:150%;"
					data-9000="left:46%; top: 40%; background: url(images/dude/phone1.png) center center no-repeat;"
					data-9700=""
					data-9900="top:150%;"

				></div>
				<div id="handle"

					data-8600="top:150%;"
					data-9000="left:46.9%;top: 39.2%;transform:rotate(0deg) scale(1);background: url(images/dude/handle.png) center center no-repeat;"
					data-9500="top: 16%;transform:rotate(-125deg) scale(.6);left:45.7%;"
					data-9600=""
					data-9700="left:46.9%;top: 39.2%;transform:rotate(0deg) scale(1);"
					data-9900="top:150%;"

				></div>

				<div id="van"

					data-9900="left:-50%;"
					data-10200="left:14%; top: 40%;"
					data-10210="left:14%; top: 40%;"
					data-10700="left:70%;"
					data-11300=""
					data-11500="left:150%;"

				>
				<img src="images/dude/van.png">

				
			</div>
			<a class="how_r" data-menu-top="11300"
				data-8600="top:120%;"
				data-9200="top:90%;"
				data-9500="top:90%;"
				data-10000="top:120%;"
				href="#"

			>HOW TO REACH ></a>
			<div id="g_maps"
					data-10700="opacity:0;display:none;"
					data-10710="display:block;"
					data-10900="opacity:1;"
					data-11300="opacity:1;"
					data-11500="opacity:0;display:none;"
				>
				<a href="http://goo.gl/maps/GF3rU"  target="_blank"><img src="images/map.jpg"></a>
				</div>	
			<!-- contact ends here -->
			<h2 class="h2_moto"
				
				data-11500="top:200%;"
				data-12000="top:10%"
			>QUIT TALKING</h2>
			<h2 class="h2_moto"
				data-11500="top:-100%;"
				data-12000="top:30%"
			>START DOING</h2>

	</div>

	<!-- reveal -->

	<div  id="reg-form" class="modal content-red">
		<h2 class="pure-u-2-3">Register for Events</h2>
		<button class="reg_submit">Register</button>
		<hr>
		<form class="pure-form pure-g-r" >
			<?php for ($i=1; $i < 12 ; $i++){ ?>
			<div class="pure-g-r pure-u-1-2">
			<h4><?php echo $heads[$i-1] ?></h4>
			<?php foreach($events[$i] as $event) { ?>
				<div class="pure-u-1-2">
					<label for="<?php echo $event->eve_sname; ?>" class="pure-checkbox">
						<input id="<?php echo $event->id; ?>" name="eventList[]" value="<?php echo $event->id; ?>" type="checkbox" /><?php echo $event->name; ?>
					</label>
				</div>		
			<?php } ?>
			</div>

			<?php } ?>
			<div class="pure-g-r pure-u-1-2">
			<h4>WORKSHOPS</h4>
			<?php foreach($workshops as $event) { ?>
				<div class="pure-u-1-2">
					<label for="<?php echo $event->eve_sname; ?>" class="pure-checkbox">
						<input id="<?php echo $event->id; ?>" name="eventList[]" value="<?php echo $event->id; ?>" type="checkbox" /><?php echo $event->name; ?>
					</label>
				</div>		
			<?php } ?>
			</div>
		</form>
	</div>

	<form   id="logi-mon" method="POST" class="form-horizontal pure-form login-form-main modal" >	
		<div class="login-in-wid" style="
  font-family: 'Open Sans';">

			<!-- <fieldset>
			<legend>Login</legend>

			<label for="email" class="">Email</label>
			<input id="email_login" name="email" type="email" placeholder="Email" class="">

			<label for="password" class="">Password</label>
			<input id="password_login" name="pass" type="password" placeholder="Password" class="">

			<a  href="#registration_form" class="non-clickable" style="
  font-family: 'Open Sans';
  font-size:14px;
  padding:10px;">New user? Register Here</a>


			<button type="submit" id="submit_login" class="pure-button pure-button-primary">Sign in</button>
			</fieldset> -->

				<p> Sorry, Further registrations for events are  currently closed .Try our spot registration</p>
		</div>
		
	</form>
<!-- reg -->

		
<form action="register.php" method="POST" class="pure-form modal"  id="registration_form" >

	<div class="regi-in-wid login-in-wid" style="
  font-family: 'Open Sans';">
		<h3>Signup as Participant</h3><p> Sorry, Online registrations are  currently closed .Try our spot registration</p><!--
		<p>Ensure that all data is correct. This data will be used in Drishti Onsite Registration also.* If your college is not listed , please select "Others" for college</p>
			<input class="input-block-level" style=" font-family: 'Open Sans';" name="name" id="name_reg" type="text" placeholder="Name"  />
			<input class="input-block-level" style=" font-family: 'Open Sans';"name="email" id="email_reg"  type="text"   placeholder="Email"  />
			
								<select name="college" id="selectError" style="style="text-transform:uppercase; font-family: 'Open Sans';""data-rel="chosen">
									<?php 
											$query="SELECT * FROM college ORDER BY CollegeName ASC";
											$result=mysql_query($query) or die(mysql_error());
											if(mysql_num_rows($result)or die(mysql_error())){
												while($res=mysql_fetch_array($result)) {
														echo "<option value=".$res['CollegeId'].">".$res['CollegeName']."</option>";
												}
											}
										?>
								</select>	
								
			<input class="input-block-level" id="phone_reg" name="phone"  type="text" style=" font-family: 'Open Sans';" placeholder="Phone"  />
			<input class="input-block-level" id="pass1_reg" name="pass1"  type="password" placeholder="Password" style=" font-family: 'Open Sans';" />
			<input class="input-block-level" id="pass2_reg" name="pass2"  type="password" placeholder="Confirm Password"  style=" font-family: 'Open Sans';"/>

			<select name="accomodation" id="acco_reg" style=" font-family: 'Open Sans';">
				<option value="0"> No accomodation</option>
				<option value="1"> Male accomodation</option>
				<option value="2"> Female accomodation</option>
			</select>	
			<input type="submit" value="Submit" id="submit_reg" style="font-family: 'Open Sans';color:#fff;background:#655c89 !important;padding:10px;" class="btn btn-primary" name="submit" > -->
	</div>
		
</form>
	<!-- Modal HTML embedded directly into document -->
	<script type="text/javascript"> 
	var evelist = [];
	<?php if(isset($_SESSION['email_drs'])) {?>
	 evelist = <?=$reg_user->eves?>;
	 console.log(evelist);
	 <?php }?>
	 </script>
	<script type="text/javascript" src="src/skrollr.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="src/skrollr.menu.js"></script>
	<script type="text/javascript" src="src/text.js"></script>
	<link href="css/jquery.mCustomScrollbar.css"  rel="stylesheet" />
	<script type="text/javascript" src="src/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="src/jquery.reveal.js"></script>
	<script type="text/javascript" src="src/tabs.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.1/pure-min.css">
	<link href="css/tabs.css" rel="stylesheet" />
	<link href="http://code.jquery.com/jquery-1.9.1.js" rel="stylesheet" />


	<!--[if lt IE 9]>
	<script type="text/javascript" src="dist/skrollr.ie.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="src/drishti.js"></script>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43047464-1', 'cetdrishti.com');
  ga('send', 'pageview');

</script>
</body>

</html>