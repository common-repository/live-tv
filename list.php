<html>

<head>
<base target="play">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>LIVE TV Channel List</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80541240-1', 'auto');
  ga('send', 'pageview');

</script>
<style>
#rcorners4 {
    border-radius: 15px 50px 30px 5px;
    background: #73AD21;
    padding: 20px;
    width: 150px;
    height: 150px;
}

#rcorners5 {
    border-radius: 15px 50px 30px;
    background: #73AD21;
    padding: 20px;
    width: 150px;
    height: 150px;
}
.table {
border:0px; 
width:90px; 
display:inline;
}
.td {
valign:top;
width:90px;
}
.play {
    position: absolute;
    height: 120px;
    width: 110px;
}
.sawir {
   border-radius: 10px 10px;
    background: #eaeaea;
    padding: 10px;
    width: 90px;
    height: 100px;
    display: block;
    clear: none;
}

#rcorners6 {
   border-radius: 10px 10px;
    background: #eaeaea;
    padding: 10px;
    width: 90px;
    height: 100px;
}
</style>
<style>
body {font-family: "Lato", sans-serif;}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>

<body>
<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'All')" id="defaultOpen">All</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Asia')">Asia</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Africa')">Africa</a></li>
    <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'America')">America</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Europe')">Europe</a></li>
</ul>
<?php 
$app_list = "https://www.livetvone.com/saved/list.php?action=get_app_list";
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
foreach ($app_list as $app): 
echo $app["name"];
endforeach;
}
  ?>    
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>

</html>