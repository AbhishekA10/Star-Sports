<html>
<head>
  <title>Website</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
 .navbar{
  position:fixed;
	}
	
	.intro {
  background-image: url("images/contact.jpg");
  background-repeat: no-repeat;
  
  }
  .flip,.panel{
text-align:center;
background-color:lightgreen;
padding:5px;
border:1px solid #c3c3c3;
}


.panel{
text-align:center;
padding:50px;
}
 
 .box{
  border:1px solid #f0f0f0;
   padding-top:40px;
  padding-bottom:40px;
   padding-right:40px;
  padding-left:40px;
  right:50px;
  
 }
  
  .box:hover {
  box-shadow: 0 0 20px rgba(0,0,0,.3);
}

</style>
</head>
<body data-spy="scroll" data-target="navbar" data-offset="50">
 <div class="container-fluid">
 <nav class="navbar navbar-expand-sm bg-white navbar-blue fixed-top"> 
 <div class="col-md-8">
 <img src="images/starsports.jpg">
 </div>
 <div class="col-md-4">
 <ul class="navbar-nav">
 <li class="nav-item">
 <a class="nav-link" href="#home">HOME</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#about">ABOUT</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#sports">SPORTS</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#offerings">OFFERINGS</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#channels">CHANNELS</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#contact">CONTACT</a>
 </li>
 </ul>
 </div>
 </nav>
 </div>
 <br/>
 <br/>


 <section id="home">
 <br/>
 <br/>
  <br/>
 <br/>
 <br/>
 <div class="container-fluid">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/football.jpg"  style="width:100%;">
      </div>

      <div class="item">
        <img src="images/cricket.jpg"  style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/cycle.jpg"  style="width:100%;">
      </div>
	  
	   <div class="item">
        <img src="images/tennis.jpg"  style="width:100%;">
      </div>
	  
	   <div class="item">
        <img src="images/hockey.jpg"  style="width:100%;">
      </div>
	  
	   <div class="item">
        <img src="images/f1.jpg"  style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>

<section id="about">
 <br/>
 <br/>
  <br/>
 <br/>
  <br/>
 <br/>
<div class="container-fluid">
<script>
$(document).ready(function(){
$(".flip").click(function(){
$(".panel").slideToggle("slow");
});
});
</script>
<div class="flip"><h1>About Us</h1></div>
<div class="panel">Hong Kong-based Star TV launched Prime Sports (later renamed Star Sports) in partnership with American company TCI, which owned Prime-branded regional sports channels. Star TV have since regionalised the channel with a number of versions. Later, ESPN have joined in the region as a competitor to Star Sports.

ESPN and Star Sports were competing each other across Asia. But in October 1996, both channels have agreed to combine their operations in the region. As a result, a joint venture named ESPN Star Sports was formed, to be headquartered in Singapore. The joint venture's business in India was managed by its subsidiary, ESPN Software India Private Limited.

In June 2012, it was announced that News Corporation would buy ESPN International's share in ESPN Star Sports.In 2013, Star India acquired ESPN Software India from ESPN Star Sports, but kept ESPN brand for a while.</div> 
</div>
<br/>
<br/>
<div class="container-fluid">
<center><h1>Our Achievements</h1></center>
</div>
<br/>
<br/>
<br/>
<div class="container-fluid">
<script>
$(document).ready(function(){
$("button").click(function(){
$("#d1").fadeToggle();
$("#d2").fadeToggle("slow");
$("#d3").fadeToggle(1500);
});
});
</script>
<div class="col-md-2" style="text-align:center;">
<br/>
<br/>
<br/>
<br/>

<button>Click here to fade</button>
</div>
<div class="col-md-2">
<div id="d1" style="background-color:orange; width:250px; height:175px; text-align:center; padding:50px;">
<p>Star Sports is ranked 1st across the sports network</p>	
</div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
<div id="d2" style="background-color:orange; width:250px; height:175px; text-align:center; padding:50px;">
<p>Star Sports has the most number of sports channels across the world</p>	
</div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
<div id="d3" style="background-color:orange; width:250px; height:175px; text-align:center; padding:50px;">
<p>Star Sports is the most watched sports network across the world</p>	
</div>
</div>
</section>

<section id="sports">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container-fluid">
<center><h1>Sports</h1></center>
</div>
<br/>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-5">
<img src="images/foot.jpg" width="550px" height="300px">
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
<h2>FOOTBALL</h2>
<br/>
<br/>
<font size="4">Football is the most popular and one of the most watched sport around the world. We provide unlimited football action from the Premier league, Bundesliga and the Indian Super league. </font>
</div>
</div>
<br/>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-5">
<h2>CRICKET</h2>
<br/>
<br/>
<font size="4">Cricket is one of the oldest sport which is loved by millions of people around the world. We provide fierce cricket encounters from the Indian Premier league and the most important ICC Cricket World cup. </font>
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
<img src="images/cricketsmall.jpg" width="550px" height="300px">
</div>
</div>
<br/>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-5">
<img src="images/cycling.jpg" width="550px" height="300px">
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
<h2>CYCLING</h2>
<br/>
<br/>
<font size="4">Cycling is one of the most modern sport introduced which has gained immense appreciation and support across the world. We provide coverage from the competition of Tour De France which is considered to be the most prestigious competition in cycling. </font>
</div>
</div>
<br/>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-5">
<h2>TENNIS</h2>
<br/>
<br/>
<font size="4">Tennis is a sport which is played on different courts such as grass, clay, hard and carpet courts. It is one of the most watched sport in the world. We provide all the action from the US open, French open, Wimbledon and the Australian open.</font>
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
<img src="images/tennissmall.jpg" width="550px" height="300px">
</div>
</div>
<br/>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-5">
<img src="images/hockeysmall.jpg" width="550px" height="300px">
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
<h2>HOCKEY</h2>
<br/>
<br/>
<font size="4">Hockey is one of the most oldest sport to be played and has a huge amount of fans. We provide all the action from the Hockey World cup. </font>
</div>
</div>
<br/>
<br/>
<br/>
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-md-5">
<h2>FORMULA ONE RACING</h2>
<br/>
<br/>
<font size="4">Formula One racing is one of recent sport which gained recognition and support of the fans. We cover all the races from the Formula One Grand Prix held at different cities across the world. </font>
</div>
<div class="col-md-1"></div>
<div class="col-md-5">
<img src="images/f1small.jpg" width="550px" height="300px">
</div>
</div>
</section>
<section id="offerings">
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container-fluid">
<h1 style="text-align:center;">Unique Offerings</h1>
</div>
<br/>
<br/>`
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-3 box" style="background-color:#f0f0f0;">
<h4><b>PREMIER LEAGUE</b></h4>
<p style="text-align:left;">The Premier League is the top level of the English football league system. Contested by 20 clubs, it operates on a system of promotion and relegation with the English Football League. </p>
</div>
<div class="col-md-3 box">
<h4><b>BUNDESLIGA</b></h4>
<p style="text-align:left;">The Bundesliga is a professional association football league in Germany and the football league with the highest average stadium attendance worldwide. The Bundesliga is Germany's primary football competition.</p>
</div>
<div class="col-md-3 box" style="background-color:#f0f0f0;">
<h4><b>INDIAN SUPER LEAGUE</b></h4>
<p style="text-align:left;">The Indian Super League is the men's top division football league in India for sponsorship reasons, the competition is officially known as the Hero Indian Super League. The competition is contested by 16 clubs </p>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-3 box">
<h4><b>INDIAN PREMIER LEAGUE</b></h4>
<p style="text-align:left;">The Indian Premier League is a professional Twenty20 cricket league in India contested during March or April and May of every year by eight teams representing eight different cities in India.</p>
</div>
<div class="col-md-3 box"  style="background-color:#f0f0f0;">
<h4><b>ICC CRICKET WORLD CUP</b></h4>
<p style="text-align:left;">The ICC Cricket World Cup is the international championship of One Day International cricket. The event is organised by the sport's governing body, the International Cricket Council (ICC), every four years, with preliminary qualification rounds leading up to a finals tournament. </p>
</div>
<div class="col-md-3 box">
<h4><b>HOCKEY WORLD CUP</b></h4>
<p style="text-align:left;">The Men's Hockey World Cup is an international field hockey competition organised by the International Hockey Federation. The tournament was started in 1971. It is held every four years, bridging the four years between the Summer Olympics.</p>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-3 box" style="background-color:#f0f0f0;">
<h4><b>TOUR DE FRANCE</b></h4>
<p style="text-align:left;">The Tour de France is an annual men's multiple stage bicycle race primarily held in France, while also occasionally passing through nearby countries. Like the other Grand Tours, it consists of 21 day-long stages over the course of 23 days. </p>
</div>
<div class="col-md-3 box">
<h4><b>F1 FORMULA RACING</b></h4>
<p style="text-align:left;">Formula One is the highest class of single-seater auto racing sanctioned by the FIA and owned by the Formula One Group. A Formula One season consists of a series of races, known as Grands Prix, which take place worldwide on purpose-built circuits and on public roads.</p>
</div>
<div class="col-md-3 box" style="background-color:#f0f0f0;">
<h4><b>FRENCH OPEN</b></h4>
<p style="text-align:left;">The French Open, officially Roland-Garros, is a major tennis tournament held over two weeks at the Stade Roland-Garros in Paris, France, beginning in late May and ending in early June. The venue is named after the French aviator Roland Garros. </p>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-3 box">
<h4><b>US OPEN</b></h4>
<p style="text-align:left;">The United States Open Tennis Championships is a hard court tennis tournament. The tournament is the modern version of one of the oldest tennis championships in the world, the U.S. National Championship</p>
</div>
<div class="col-md-3 box" style="background-color:#f0f0f0;">
<h4><b>WIMBLEDON</b></h4>
<p style="text-align:left;">The Championships, Wimbledon, is the oldest tennis tournament in the world, and is regarded by many as the most prestigious. It has been held at the All England Club in Wimbledon, London, since 1877 and is played on outdoor grass courts.</p>
</div>
<div class="col-md-3 box">
<h4><b>AUSTRALIAN OPEN</b></h4>
<p style="text-align:left;">The Australian Open is a tennis tournament held annually over the last fortnight of January in Melbourne, Australia. The tournament is the first of the four Grand Slam tennis events held each year, preceding the French Open, Wimbledon, and the US Open.</p>
</div>
</div>
</div>
</section>
 <section id="channels">
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <div class="container-fluid">
 <center><h1>Channels</h1></center>
 <br/>
 <br/>
 </div>
 <div class="container-fluid">
 <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/starsports1.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/starsports1hd.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <br/>
 <img src="images/starsports2.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/starsports2hd.jpg">
 </div>
 </div>
 <br/>
 <br/>
 <div class="container-fluid">
 <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/select1.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/s1hd.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <br/>
 <img src="images/select2.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/select2hd.jpg">
 </div>
 </div>
 <br/>
 <br/>
 <div class="container-fluid">
 <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/starsports3.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/first.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <br/>
 <img src="images/hindi.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/hindihd.jpg">
 </div>
 </div>
 <br/>
 <br/>
 <div class="container-fluid">
 <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/tamil.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/telugu.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <br/>
 <img src="images/k.jpg">
 </div>
  <div class="col-md-1"></div>
 <div class="col-md-2" style="right:50px;">
 <img src="images/bengali.jpg">
 </div>
 </div>
 <br/>
 </section>
 <section id="contact">
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
<div class="intro">
<div class="container-fluid">
<br/>
<br/>
<br/>
<br/>
<div class="col-md-1"></div>
<div class="col-md-4">
<script type="text/javascript">
function validate()
{
	var name=document.f1.name.value;
	var email=document.f1.email.value;
	var mobilelength=document.f1.mobile.value.length;
	var status=false;
	
	if(name=="")
	{
		document.getElementById("namelocation").innerHTML="Please enter your name";
		status=false;
	}
	else
	{
		document.getElementById("namelocation").innerHTML="";
		status=true;
	}
	
	if(mobilelength<10 || mobilelength>10 )
	{
		document.getElementById("mobilelocation").innerHTML="Please enter a valid mobile number";
		status=false;
	}
	else
	{
		document.getElementById("mobilelocation").innerHTML="";
	}
	
	if(email=="")
	{
		document.getElementById("emaillocation").innerHTML="Please enter your email id";
		status=false;
	}
	else
	{
		document.getElementById("emaillocation").innerHTML="";
	}
	return status;
}
</script>
<br/>
<?php
include("sportsconnect.php");

if(isset($_POST['ok']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];
	
	$sql=mysqli_query($con,"insert into contact(name,email,mobile,message) values('$name','$email','$mobile','$message')");
	if($sql)
	{
		echo "<script>alert('Insertion Successful')</script>";
	}
	else
	{
		echo "<script>alert('Insertion Unsuccessful')</script>";
	}
}
?>
<center><h2><b>Contact Us</b></h2></center>
<br/>
<form method="post" action="" onSubmit="return validate()" name="f1">
<div class="form-group">
<input type="text" name="name" placeholder="Name" class="form-control">
<span id="namelocation"></span>
</div>
<div class="form-group">
<input type="email" name="email" placeholder="E-mail" class="form-control">
<span id="emaillocation"></span>
</div>
<div class="form-group">
<input type="tel" name="mobile" placeholder="Mobile Number" class="form-control">
<span id="mobilelocation"></span>
</div>
<div class="form-group">
<textarea class="form-control" placeholder="Message" name="message"></textarea> 
</div>
<div class="form-group">
<input type="submit"  class="btn btn-info" value="Submit" name="ok">
</div>
</form>
</div>
<div class="col-md-7"></div>
</div> 
<br/>
<br/>
<br/>
<br/>
</div>
</section>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container-fluid">
<center><img src="images/starsports.jpg" width="250px" height="150px">
<br/>
<br/>
<br/>
<p>Location: Mittal Commercia, Hasan Pada Rd, Mittal Industrial Estate, Marol, Saki Naka, Mumbai, Maharashtra 400059</p>
<br/>
<p>Phone Number: +91 9981230546/022-27742190</p>
<br/>
<p>E-mail: admin@starsports.com</p>
<br/> 
</center>
</div>
<br/>
<br/>
<div class="container-fluid">
<center><h2><b>Our Location On The Map</b></h2></center>
<br/>
<br/>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0725008107306!2d72.87819951485169!3d19.104475087071673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c86b8e22c195%3A0xbd0e965a653f5d27!2sStar+India+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1561234092629!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<br/>
<br/>
<div class="container-fluid" style="background-color:powderblue;">
<br/>
 <div class="col-md-2"></div>
 <div class="col-md-3">
 <p><b>All Rights Reserved</b></p>
 </div>
 <div class="col-md-3"></div>
 <div class="col-md-4">
 <p><b>Developed by Star India Pvt Ltd.</b></p>
 </div>
 <br/>
 <br/>
 </div>
 </body>
 </html>
