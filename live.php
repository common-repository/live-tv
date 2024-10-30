<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>omarteachertvplugin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80541240-1', 'auto');
  ga('create', 'UA-85555870-1', 'auto', 'clientTracker');
  ga('send', 'pageview');
  ga('clientTracker.send', 'pageview');
</script>
<style> 
.wrapper {width:58.536585%; /*960/1640 = .58536585*/ margin:0 auto;}
.resize {width:100%; height:auto;}
</style>

  <style type="text/css">
.DivBlue{
border:solid;
border-color:#fff;
border-radius: 10px 10px;
  position:absolute;
  display:none;
  width:340px;
  height:100%;
  background-image: url("images/tvbg.png");
 z-index:1;
}
.DivBlue82{
    display: block;
    height: 75px;
    position: absolute;
    width: 320px;

}
.close {
    margin-top: 28px;
    color: white;
    background: red;
    float: right;
    padding-left: 5px;
    padding-right: 5px;
    border: solid #fff 1px;
}
  </style>
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(document).ready(function() {
	$('.DivRed').on('click', function(){
		$('.DivBlue').toggle();
		$('.DivBlue2').toggle();
	});
});
});//]]> 

</script>
</head>

<body style="background: #000;">

<img id="request" src="images/full.png" style="z-index: 1;position:absolute; float: left;left: 30px; top: 30px;margin: 10; width: 30px; height: 30px;" >
<div class="DivBlue">
<div class="DivRed">
<div class="DivBlue82">
<span class="close"><b>X</b></span></div>
<iframe  class="DivRed" width="100%" height="100%" src="remotelist.php" name="image" scrolling="yes" 

border="0" frameborder="0"></iframe>
</div>
</div>

<iframe name="play" width="100%" height="100%" src="<?php if (!empty($_GET['url'])) {
    $urlid = $_GET['url']; 
    echo 'open.php?url=',$urlid;
} elseif (!empty($_GET['play'])) { 
$urlid2 = $_GET['play']; 
    echo 'play.php?url=',$urlid2;
} else {
    echo "open.php?url=http://www.filmon.com/tv/channel/export?channel_id=4&tv=Aljazeera English&sawir=http://i.imgur.com/0LFaRZJ.png";
} ?>" scrolling="no" border="0" 

frameborder="0">
</iframe>
</body>

</html>
