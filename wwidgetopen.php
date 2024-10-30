<html>
<head>
<title>LIVE TV</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124230158-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124230158-1');
</script>
</head>

<body>
<a target="_parent" href="http://<?php echo parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST); ?>/live-tv/">
<div style="position: absolute;width: 140px;height: 60px;z-index: 1;right: 50px;left: 50px;margin: 0px;top: 160px;>
<p dir="ltr" align="center"><h2>
<font color="#FFF"> <?php echo parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST); ?> </font></h2></p></div>
<img src="http://i.imgur.com/YhDjbTv.gif" width="100%" height="250" alt="All Live TV in one click by Live TV One" Title="All Live TV in one click by Live TV One"></a>
<br>
<?php

$app_list = "https://www.livetvone.com/saved/api.php?action=get_app_list";
//  Initiate curl
$ch = curl_init($app_list);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data2 = curl_exec($ch);
curl_close($ch);

$json4 = $data2;
$app_list = json_decode($json4, true);

if (is_array($app_list)){ 
foreach($app_list as $app) {
echo $app[name];
 }
}
?>
<br>
</body>

</html>