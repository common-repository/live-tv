<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Live TV</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, 

user-scalable=no"/>

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
  <style type="text/css">
    .fragment {
    font-size: 12px;
    font-family: tahoma;
    height: 150px;
    border: 0px solid #ccc;
    color: #555;
    display: block;
    margin: 0px;
    box-sizing: border-box;
    text-decoration: none;
    position: absolute;
    z-index: 1;
    bottom: 0px;
    right: 0px;
    left: 0px;
}

.fragment:hover {
    box-shadow: 2px 2px 5px rgba(0,0,0,.2);

}

#close {
    display: inline-block;
    padding-left: 8px;
    padding-right: 8px;
    background: #e20d0d;
    z-index: 1;
    right: 0;
    position: relative;
    float: right;
}
.xir{

    /* display: inline; */
    position: fixed;
    right: 40px;
    bottom: 75px;
    float: right;

}
  </style>
<style type="text/css">
   .mobileShow { display: none;}
   /* Smartphone Portrait and Landscape */
   @media only screen
   and (min-device-width : 320px)
   and (max-device-width : 480px){ .mobileShow { display: inline;}}
</style>
<style type="text/css">
   .mobileHide { display: inline;}
   /* Smartphone Portrait and Landscape */
   @media only screen
   and (min-device-width : 320px)
   and (max-device-width : 480px){  .mobileHide { display: none;}}
   
</style>
</head>

<body bgcolor="#000">
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?app_id=184484190795&sdk=joey&u=<?php $reff = 'http://'.$_SERVER['HTTP_HOST'].'/live-tv/?play='; $urlid = $_GET['url']; echo $reff; echo $urlid; ?>&sawir=<?php echo $id = $_GET['sawir'];?>&tv=<?php echo $id = $_GET['tv'];?>&title=<?php echo $id = $_GET['tv'];?>&picture=<?php echo $id = $_GET['sawir'];?>display=popup&ref=plugin&src=share_button">
<img src="images/share.png" width="78" height="40" style="position: absolute;right: 30px;top: 30px;z-index: 1;">
</a>
<script src="http://jwpsrv.com/library/69m3XFU8EeOxwSIACqoGtw.js"></script>

<div id="playerELOJDrfkVyqY"></div>

<script type="text/javascript">// <![CDATA[
    jwplayer('playerELOJDrfkVyqY').setup({
        file: '<?php echo $id = $_GET['url'];?>',
        image: '<?php echo $id = $_GET['sawir'];?>',
        title: '<?php echo $id = $_GET['tv'];?>',
        width: '100%',
        height: '80%',
 skin : 'stormtrooper',
	 autostart: 'true',
        primary: 'flash',
	 androidhls: true,

    });


// ]]></script>
<section>
<div class="fragment">
 <div id="div-gpt-ad-1327312723268-0" style="width:Autopx; height:205px;">
<div id="ads" style="z-index: 1;color: #fff;padding-bottom: 2;background: #000;height: 12;"><span style="z-

index: 1;" id="close" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); 

return false;"><b>x</b></span>
</div>
<?php

$app_list = "https://www.hividy.com/saved/api.php?action=get_app_list";
//  Initiate curl
$ch = curl_init($app_list);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data2 = curl_exec($ch);
curl_close($ch);

$json4 = $data2;
$app_list = json_decode($json4, true);

foreach($app_list as $app) {

}
?>
<?php echo $app[name]; ?>
<!---ads--->
</div>
</div>
</section>
<div style="display:none;">
</div>
</body>

</html>
