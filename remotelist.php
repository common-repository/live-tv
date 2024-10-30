<!DOCTYPE html>
<html>

<head>
<title>omarteachertv</title>
<style type="text/css">
/* Scrollbar */ 

::-webkit-scrollbar{width: 13px;}

::-webkit-scrollbar-thumb{background-color:rgb(132, 183, 219); border-radius: 0;}
::-webkit-scrollbar-thumb:hover{background-color:rgb(132, 183, 219);}

::-webkit-scrollbar-track{background-color:rgb(224, 224, 224);}


/* End Scrollbar */
</style>

<style>
h1 {
    border-bottom: 3px solid #2196F3;
    color: #ffffff;
    font-size: 30px;
}
table, th , td  {
    border: 1px solid grey;
    border-collapse: collapse;
    padding: 5px;
}
table tr:nth-child(odd) {
    background-color: #f1f1f1;
}
table tr:nth-child(even) {
    background-color: #ffffff;
}
</style>
<base target="play">
<style>
.channelicon {

float:left;
}
.channelname {
float:left;
}
.link1{
text-decoration: none;
color: black;
}
.sawir{
width: 50px; 
height: 50px;
}
</style>
</head>

<body>

<h1>Channel List</h1>
<?php 
$app_list = "https://www.livetvone.com/saved/remote.php?action=get_app_list";
//  Initiate curl
$ch = curl_init($app_list);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data2 = curl_exec($ch);
curl_close($ch);

$json4 = $data2;
$app_list = json_decode($json4, true);
  ?>
    
    <?php foreach ($app_list as $app): ?>
      
        <?php echo $app["name"] ?>
   
    <?php endforeach; ?>
</body>
</html>
