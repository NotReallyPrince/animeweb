<?php 
$conn = mysqli_connect("us-cdbr-east-06.cleardb.net", 'bddf96e15698ff' , '4426620d', "heroku_eb34d2ea13fb380");


$websiteTitle = "AniKatsu"; // Website Name
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";  // Website URL
$websiteLogo = $websiteUrl . "/files/images/logo.png?v=2"; // Logo
$contactEmail = "xyz@gmail.com"; // Contact Email

$version = "0.4";

//Donate 
$donate = "#";

// Socials 
$telegram = "https://t.me/#"; // telegram
$discord = "https://discord.com/#"; // Discord
$redit = "#"; // Reddit
$twitter = "#"; // Twitter
 


$disqus = "https://indianime.disqus.com"; // Disqus


// API URL
$api = "http://anikatsu.shashanktiwar11.repl.co"; // https://github.com/shashankktiwariii/anikatsu-api


$banner = $websiteUrl . "/files/images/banner.png";  //Banner
?>
