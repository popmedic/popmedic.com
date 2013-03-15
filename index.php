<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=240,user-scalable=no" />
<title>PoPMediC Labs</title>
<style>
body{
	font-family:Helvetica;
	font-size:12pt;
	min-width:780px;
	max-width:780px;
	color:rgba(0, 0, 0, 0.5);
}
h1{
	font-size:32pt;
}
h2{
	font-size:24pt;
}
h3{
	font-size:16pt;
}
a{
	font-weight:bold;
	border:none;
	text-decoration:none;
	color:rgba(0, 0, 0, 0.5);
}
a:hover{
	color:rgba(0,0,0,1);
}
.center{
	text-align:center;
}
.tiny-text{
	font-size:8pt;
}
.dotted-box{
	border-style:dotted;
	border-width:1px;
	padding:5px;
}
.gradient-bg {
   	background-image: -ms-linear-gradient(bottom, #FFFFFF 0%, #000000 100%);
	background-image: -moz-linear-gradient(bottom, #FFFFFF 0%, #000000 100%);
	background-image: -o-linear-gradient(bottom, #FFFFFF 0%, #000000 100%);
	background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #FFFFFF), color-stop(1, #000000));
	background-image: -webkit-linear-gradient(bottom, #FFFFFF 0%, #000000 100%);
	background-image: linear-gradient(to top, #FFFFFF 0%, #000000 100%);
}
.banner{
	width:100%;
}
.banner table{
	padding:5px;
	width:100%;
	color:rgb(255, 255, 255);
	background-color:rgba(0, 0, 0, 0.5);
}
.banner img{
	width:128px;
	height:128px;
}
.banner .txt{
	padding-left:64px;
}
.deadpool-background{
	background-image:url(images/deadpool-strip1.jpg);
	background-size:100% 100%;
	background-repeat:no-repeat;
	width:720px;
	height:340px;
	margin:30px;
	padding-left:4px;
	padding-top:4px;
	background-color:rgba(255, 255, 255, 0.95);
	color:rgba(0, 0, 0, 0.80);
}
.deadpool-background .caption{
	position:relative;
	width:128px;
	background-color:rgba(255, 255, 255, 0.60);
	padding-bottom:4px;
}
.deadpool-background .h3{
	font-size:16pt;
	font-weight:bold;
}
.deadpool-background a{
	font-size:12pt;
	font-weight:normal;
	color:rgba(0, 0, 0, 0.90);
	background-color:inherit;
}
.deadpool-background a:hover{
	color:rgba(255,255,255,0.75);
	background-color:inherit;
}
.menu{
	display:inline-table;
	margin-top:0px;
	margin-bottom:0px;
	padding-bottom:0px;
	padding-top:0px;
}
.menu .item{
	border:rgba(128,128,128,1.0) thin solid;
	border-radius:4px;
	display:inline;
	width:256px;
	margin-left:8px;
	margin-top:0px;
	margin-right:8px;
	margin-bottom:0px;
	padding-left:8px;
	padding-top:2px;
	padding-right:8px;
	padding-bottom:2px;
	cursor:pointer;
}
.menu .item:hover{
	color:rgba(255,255,255,1.0);
	background-color:rgba(204,204,204,1);
}
.content{
	text-align:left;
	margin-left:30px;
	margin-right:30px;	
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>
$(document).ready(function(e) {
    $(".content").load("./news.html");
	$(".menu .item").click(function(){$(".content").load($(this).attr("href"));});
});
</script>
</head>

<body>
	<div class="banner">
		<table class="gradient-bg">
			<tr>
				<td width="138px">
					<img src="<?php print "http://www.gravatar.com/avatar/" . md5("popmedic@gmail.com") . "?d=" . urlencode("http://popmedic.com") . "&s=128"; ?>" />
				</td>
				<td>
					<h1 class="txt">P&nbsp;&nbsp;O&nbsp;&nbsp;P&nbsp;&nbsp;M&nbsp;&nbsp;E&nbsp;&nbsp;D&nbsp;&nbsp;I&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;Labs</h1>
				</td>
			</tr>
		</table>
	</div>
	<div class="center">
		<div class="deadpool-background" style="text-align:left;">
        	<div class="caption">
			<span class="h3">
				About:
			</span>
			<ul>
				<li>
					<a href="http://www.facebook.com/popmedic" target="_blank">Facebook</a>
				</li>
				<li>
					<a href="http://www.linkedin.com/profile/view?id=41362576&trk=tab_pro" target="_blank">Linkedin</a>
				</li>
				<li>
					<a href="https://github.com/popmedic" target="_blank">Github</a>
				</li>
				<li>
					<a href="http://download.cnet.com/mac/popmedic/3260-20_4-10223948.html?tag=rb_content;contentBody" target="_blank">Cnet</a>
				</li>
			</ul>
            </div>
        </div>
        <div class="menu">
        	<div class="item" href="./news.html">
            	News
            </div>
            <div class="item" href="./products.html">
            	Products
            </div>
            <div class="item" href="./guides.html">
            	Guides
            </div>
            <div class="item" href="./artwork.html">
            	Artwork
            </div>
            <div class="item" href="./toolkit.html">
            	Toolkit
            </div>
            <div class="item" href="./rants.html">
            	Rants
            </div>
        </div>
        <div class="content">
   	  		
		</div>
        <hr />
		<p>
			<span class="center tiny-text dotted-box">
				created by <a href="http://popmedic.com" alt="Infinite Loop.">The Popmedic</a>
			</span>
		</p>
	</div>
</body>
</html>
