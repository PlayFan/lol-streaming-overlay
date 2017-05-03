<!DOCTYPE html>
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="css/elo.css" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#leagueInfo").animate({width: '200px'}, 600);
	$("#leagueInfo").delay(5000).animate({width : '0px'}, 600);

});
setTimeout(function () { location.reload(1); }, 5000);

</script>

</head>
<body>
<?php

include('api/php-riot-api.php');
include('api/FileSystemCache.php');

$api = new riotapi('euw');
$api_cache = new riotapi('euw', new FileSystemCache('api/cache/'));

$api_username = strtolower(str_replace(" ","",$_GET['summoner']));

$test = $api->getSummonerByName($api_username);

$summoner_id = $test[$api_username]['id'];

$apiElo = $api->getLeague($summoner_id,'entry');

//preview($test);
//preview($apiElo);

function preview($tabs){
	echo"<pre>";
	echo print_r($tabs);
	echo ("</pre>");
}
$stats = $apiElo[$summoner_id][0]['entries'];
$tier = $apiElo[$summoner_id][0]['tier'];
$nbLP = $stats[0]['leaguePoints'];
$division = $stats[0]['division'];
$wins = $stats[0]['wins'];
$losses = $stats[0]['losses'];
$miniSeries = $stats[0];

if(end($miniSeries)){
	$winsSeries = end($miniSeries)['wins'];
	$lossesSeries = end($miniSeries)['losses'];
	$progressSeries = end($miniSeries)['progress'];
}

$platImg = "img/plat.png";
$diamondImg = "img/diamond.png";
$goldImg = "img/gold.png";
$silverImg = "img/silver.png";
$bronzeImg = "img/bronze.png";
$unrankedImg = "img/unranked.png";
$masterImg = "img/master.png";
$challengerImg = "img/challenger.png";
?>

<div id="leagueInfo">
<?php
if ($tier == 'DIAMOND'){
	?><img src= "<?php echo $diamondImg ?>" alt="test"/><?php
}
else if ($tier == 'PLATINUM'){
	?><img src= "<?php echo $platImg ?>" alt="test2"/><?php
}
else if ($tier == 'GOLD'){
	?><img src= "<?php echo $goldImg ?>" alt="gold"/><?php
}
else if ($tier == 'SILVER'){
	?><img src= "<?php echo $silverImg ?>" alt="gold"/><?php
}
else if ($tier == 'BRONZE'){
	?><img src= "<?php echo $bronzeImg ?>" alt="gold"/><?php
}
else if ($tier == 'CHALLENGER'){
	?><img src= "<?php echo $challengerImg ?>" alt="gold"/><?php
}
else if ($tier == 'MASTER'){
	?><img src= "<?php echo $masterImg ?>" alt="gold"/><?php
}
else if ($tier == 'UNRANKED'){
	?><img src= "<?php echo $unrankedImg ?>" alt="gold"/><?php
}
?>
<div id="statsLeague">
<p class="division"><?php echo($tier." ".$division);?></p>
<p class="lp"><?php echo($nbLP." LP");?>
<?php
if(end($miniSeries)){
echo(" --- ".$winsSeries."W - ".$lossesSeries."L");}
?></p>
<p class="winlosses"><span class="vic"><?php echo($wins. " Wins")?></span> -- <span class="def"><?php echo($losses." Losses");?></span></p></div>
</div>
</body>
</html>