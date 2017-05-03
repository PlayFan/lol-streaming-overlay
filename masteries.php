<!DOCTYPE html>
<head>
<meta charset='utf-8'>
<META HTTP-EQUIV="refresh" CONTENT=<"300">
<link rel="stylesheet" href="css/masteries.css" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#masteries_Container").hide(0).delay(500).fadeIn(1000).delay(10000).fadeOut(1000);

});
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

try {
$currentGame = $api->getCurrentGame($summoner_id, 'EUW1');
$pplInGame = $currentGame['participants'];
for($x=0; $x<10; $x++){
	if($pplInGame[$x]['summonerId'] == $summoner_id){
		$currentUserInGame = $pplInGame[$x];
	}
}

?></div><?php
$x = 0;
?><div id="masteriesInfo"><?php
while($x < sizeof($currentUserInGame['masteries'])){
	$masteries[$x] = $currentUserInGame['masteries'][$x];
	$rankMasteries[$x] = ($masteries[$x]['rank']);
	$masteriesId[$x] = ($masteries[$x]['masteryId']);
	$masteriesStatic = $api->getStatic('mastery',$masteriesId[$x]);
	$masteriesText[$x] = sizeof($masteriesStatic['description']);
	$x++;
}
?>
</div>
<div id="masteries_Container">
	<div id="masteries_Ferocity">
		<div id="logo_Ferocity">
		<div class="masteryWidthLimit">
			<div id="mastery-102" >
				<div id="mastery-102-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -0px -0px no-repeat;">
						<div id="mastery-text-102">
						</div>
				</div>
			</div>
			<div id="mastery-103">
				<div id="mastery-103-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -48px -0px no-repeat;">
				<div id="mastery-text-103">
						</div>
				</div>
			</div>
		</div>
			<div class="masteryWidthLimit">
			<div id="mastery-104">
				<div id="mastery-104-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -96px -0px no-repeat;">
				<div id="mastery-text-104">
						</div>
				</div>
			</div>
			<div id="mastery-105">
				<div id="mastery-105-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -144px -0px no-repeat;">
				<div id="mastery-text-105">
						</div>
				</div>
			</div>
			<div id="mastery-106">
				<div id="mastery-106-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -192px -0px no-repeat;">
				<div id="mastery-text-106">
						</div>
				</div>
			</div>
			</div>
			<div class="masteryWidthLimit">
			<div id="mastery-107">
				<div id="mastery-107-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -240px -0px no-repeat;">
				<div id="mastery-text-107">
						</div>
				</div>
			</div>
			<div id="mastery-108">
				<div id="mastery-108-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -288px -0px no-repeat;">
				<div id="mastery-text-108">
						</div>
				</div>
			</div>
			</div>
			<div class="masteryWidthLimit">
			<div id="mastery-109">
				<div id="mastery-109-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -336px -0px no-repeat;">
				<div id="mastery-text-109">
						</div>
				</div>
			</div>
			<div id="mastery-110">
				<div id="mastery-110-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -384px -0px no-repeat;">
				<div id="mastery-text-110">
						</div>
				</div>
			</div>
			</div>
			<div class="masteryWidthLimit">
			<div id="mastery-111">
				<div id="mastery-111-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -432px -0px no-repeat;">
				<div id="mastery-text-111">
						</div>
				</div>
			</div>
			<div id="mastery-112">
				<div id="mastery-112-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -0px -48px no-repeat;">
				<div id="mastery-text-112">
						</div>
				</div>
			</div>
			</div>
			<div class="masteryWidthLimit">
			<div id="mastery-113">
				<div id="mastery-113-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -48px -48px no-repeat;">
				<div id="mastery-text-113">
						</div>
				</div>
			</div>
			<div id="mastery-114">
				<div id="mastery-114-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -96px -48px no-repeat;">
				<div id="mastery-text-114">
						</div>
				</div>
			</div>
			<div id="mastery-115">
				<div id="mastery-115-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -144px -48px no-repeat;">
				<div id="mastery-text-115">
						</div>
				</div>
			</div>
			</div>
		</div>
		<div id="text_Ferocity">
		</div>
	</div>
	<div id="masteries_Cunning">
		<div id="logo_Cunning">
		<div class="masteryWidthLimit">
			<div id="mastery-116" >
				<div id="mastery-116-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -192px -48px no-repeat;">
				<div id="mastery-text-116">
						</div>
				</div>
			</div>
			<div id="mastery-117" >
				<div id="mastery-117-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -240px -48px no-repeat;">
				<div id="mastery-text-117">
						</div>
				</div>
			</div>
			</div>
			<div class="masteryWidthLimit">
			<div id="mastery-118" >
				<div id="mastery-118-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -288px -48px no-repeat;">
				<div id="mastery-text-118">
						</div>
				</div>
			</div>
			<div id="mastery-119" >
				<div id="mastery-119-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -336px -48px no-repeat;">
				<div id="mastery-text-119">
						</div>
				</div>
			</div>
			<div id="mastery-120" >
				<div id="mastery-120-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -384px -48px no-repeat;">
				<div id="mastery-text-120">
						</div>
				</div>
			</div>
			</div>
			<div class="masteryWidthLimit">
			<div id="mastery-121" >
				<div id="mastery-121-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -432px -48px no-repeat;">
				<div id="mastery-text-121">
						</div>
				</div>
			</div>
			<div id="mastery-122" >
				<div id="mastery-122-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -0px -96px no-repeat;">
				<div id="mastery-text-122">
						</div>
				</div>
			</div>
			</div>
			<div class="masteryWidthLimit">
			<div id="mastery-123" >
				<div id="mastery-123-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -48px -96px no-repeat;">
				<div id="mastery-text-123">
						</div>
				</div>
			</div>
			<div id="mastery-124" >
				<div id="mastery-124-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -96px -96px no-repeat;">
				<div id="mastery-text-124">
						</div>
				</div>
			</div>
			</div>
			<div class="masteryWidthLimit">
			<div id="mastery-125" >
				<div id="mastery-125-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -144px -96px no-repeat;">
				<div id="mastery-text-125">
						</div>
				</div>
			</div>
			<div id="mastery-126" >
				<div id="mastery-126-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -192px -96px no-repeat;">
				<div id="mastery-text-126">
						</div>
				</div>
			</div>
			</div>
			<div class="masteryWidthLimit">
			<div id="mastery-127" >
				<div id="mastery-127-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -240px -96px no-repeat;">
				<div id="mastery-text-127">
						</div>
				</div>
			</div>
			<div id="mastery-128" >
				<div id="mastery-128-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -288px -96px no-repeat;">
				<div id="mastery-text-128">
						</div>
				</div>
			</div>
			<div id="mastery-129" >
				<div id="mastery-129-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -336px -96px no-repeat;">
				<div id="mastery-text-129">
						</div>
				</div>
			</div>
			</div>
		</div>
		<div id="text_Cunning">
		</div>
	</div>
	<div id="masteries_Resolve">
		<div id="logo_Resolve">
		<div class="masteryWidthLimit">
			<div id="mastery-130" >
				<div id="mastery-130-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -384px -96px no-repeat;">
				<div id="mastery-text-130">
						</div>
				</div>
			</div>
			<div id="mastery-131" >
				<div id="mastery-131-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -432px -96px no-repeat;">
				<div id="mastery-text-131">
						</div>
				</div>
			</div>
			</div>
		<div class="masteryWidthLimit">
			<div id="mastery-132" >
				<div id="mastery-132-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -0px -144px no-repeat;">
				<div id="mastery-text-132">
						</div>
				</div>
			</div>
			<div id="mastery-133" >
				<div id="mastery-133-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -48px -144px no-repeat;">
				<div id="mastery-text-133">
						</div>
				</div>
			</div>
			</div>
		<div class="masteryWidthLimit">
			<div id="mastery-134" >
				<div id="mastery-134-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -96px -144px no-repeat;">
				<div id="mastery-text-134">
						</div>
				</div>
			</div>
			<div id="mastery-135" >
				<div id="mastery-135-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -144px -144px no-repeat;">
				<div id="mastery-text-135">
						</div>
				</div>
			</div>
			</div>
		<div class="masteryWidthLimit">
			<div id="mastery-136" >
				<div id="mastery-136-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -192px -144px no-repeat;">
				<div id="mastery-text-136">
						</div>
				</div>
			</div>
			<div id="mastery-137" >
				<div id="mastery-137-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -240px -144px no-repeat;">
				<div id="mastery-text-137">
						</div>
				</div>
			</div>
			</div>
		<div class="masteryWidthLimit">
			<div id="mastery-138" >
				<div id="mastery-138-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -288px -144px no-repeat;">
				<div id="mastery-text-138">
						</div>
				</div>
			</div>
			<div id="mastery-139" >
				<div id="mastery-139-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -336px -144px no-repeat;">
				<div id="mastery-text-139">
						</div>
				</div>
			</div>
			</div>
		<div class="masteryWidthLimit">
			<div id="mastery-140" >
				<div id="mastery-140-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -384px -144px no-repeat;">
				<div id="mastery-text-140">
						</div>
				</div>
			</div>
			<div id="mastery-141" >
				<div id="mastery-141-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -432px -144px no-repeat;">
				<div id="mastery-text-141">
						</div>
				</div>
			</div>
			<div id="mastery-142" >
				<div id="mastery-142-image" style="height:48px; width:48px; background: url('//ddragon.leagueoflegends.com/cdn/6.15.1/img/sprite/mastery0.png') -0px -192px no-repeat;">
				<div id="mastery-text-142">
						</div>
				</div>
			</div>
			</div>
		</div>
		<div id="text_Resolve">
		</div>
	</div>
</div>
<div id="masteries-condition-container-1">
	<?php
	$y = 0;
	$totalContainer1 = 0;
	if(in_array('6111',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
		?>    <script>
        $( '#mastery-102' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-102-image' ).css('border', '1px solid orange');
        $( '#mastery-text-102' ).css('display', 'inline-block');
        $('#mastery-text-102').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script>
    <?php
	}
	if(in_array('6114',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-103' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-103-image' ).css('border', '1px solid orange');
        $( '#mastery-text-103' ).css('display', 'inline-block');
        $('#mastery-text-103').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}

	if(in_array('6121',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-104' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-104-image' ).css('border', '1px solid orange');
        $( '#mastery-text-104' ).css('display', 'inline-block');
        $('#mastery-text-104').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6122',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-105' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-105-image' ).css('border', '1px solid orange');
        $( '#mastery-text-105' ).css('display', 'inline-block');
        $('#mastery-text-105').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6123',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-106' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-106-image' ).css('border', '1px solid orange');
        $( '#mastery-text-106' ).css('display', 'inline-block');
        $('#mastery-text-106').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)

    </script><?php
	}
	if(in_array('6131',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-107' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-107-image' ).css('border', '1px solid orange');
        $( '#mastery-text-107' ).css('display', 'inline-block');
        $('#mastery-text-107').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)

    </script><?php
	}
	if(in_array('6134',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-108' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-108-image' ).css('border', '1px solid orange');
        $( '#mastery-text-108' ).css('display', 'inline-block');
        $('#mastery-text-108').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)

    </script><?php
	}
	if(in_array('6141',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-109' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-109-image' ).css('border', '1px solid orange');
        $( '#mastery-text-109' ).css('display', 'inline-block');
        $('#mastery-text-109').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)

    </script><?php
	}
	if(in_array('6142',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-110' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-110-image' ).css('border', '1px solid orange');
        $( '#mastery-text-110' ).css('display', 'inline-block');
        $('#mastery-text-110').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)

    </script><?php
	}
	if(in_array('6151',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-111' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-111-image' ).css('border', '1px solid orange');
        $( '#mastery-text-111' ).css('display', 'inline-block');
        $('#mastery-text-111').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)

    </script><?php
	}
	if(in_array('6154',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-112' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-112-image' ).css('border', '1px solid orange');
        $( '#mastery-text-112' ).css('display', 'inline-block');
        $('#mastery-text-112').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)

    </script><?php
	}
	if(in_array('6161',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-113' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-113-image' ).css('border', '1px solid orange');
        $( '#mastery-text-113' ).css('display', 'inline-block');
        $('#mastery-text-113').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)

    </script><?php
	}
	if(in_array('6162',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-114' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-114-image' ).css('border', '1px solid orange');
        $( '#mastery-text-114' ).css('display', 'inline-block');
        $('#mastery-text-114').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)

    </script><?php
	}
	if(in_array('6164',$masteriesId)){
		$totalContainer1 = $totalContainer1 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-115' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-115-image' ).css('border', '1px solid orange');
        $( '#mastery-text-115' ).css('display', 'inline-block');
        $('#mastery-text-115').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}?>
	<script>
	document.getElementById('text_Ferocity').innerHTML = <?php echo json_encode("FEROCITY : ".$totalContainer1);?>;
	</script>
</div>
<div id="masteries-condition-container-2">
	<?php
	$totalContainer2 = 0;
	if(in_array('6311',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-116' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-116-image' ).css('border', '1px solid orange');
        $( '#mastery-text-116' ).css('display', 'inline-block');
        $('#mastery-text-116').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)

    </script><?php
	}
	if(in_array('6312',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-117' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-117-image' ).css('border', '1px solid orange');
        $( '#mastery-text-117' ).css('display', 'inline-block');
        $('#mastery-text-117').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6321',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-118' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-118-image' ).css('border', '1px solid orange');
        $( '#mastery-text-118' ).css('display', 'inline-block');
        $('#mastery-text-118').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6322',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-119' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-119-image' ).css('border', '1px solid orange');
        $( '#mastery-text-119' ).css('display', 'inline-block');
        $('#mastery-text-119').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6323',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-120' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-120-image' ).css('border', '1px solid orange');
        $( '#mastery-text-120' ).css('display', 'inline-block');
        $('#mastery-text-120').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6331',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-121' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-121-image' ).css('border', '1px solid orange');
        $( '#mastery-text-121' ).css('display', 'inline-block');
        $('#mastery-text-121').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6332',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-122' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-122-image' ).css('border', '1px solid orange');
        $( '#mastery-text-122' ).css('display', 'inline-block');
        $('#mastery-text-122').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6342',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-123' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-123-image' ).css('border', '1px solid orange');
        $( '#mastery-text-123' ).css('display', 'inline-block');
        $('#mastery-text-123').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6343',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-124' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-124-image' ).css('border', '1px solid orange');
        $( '#mastery-text-124' ).css('display', 'inline-block');
        $('#mastery-text-124').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6351',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-125' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-125-image' ).css('border', '1px solid orange');
        $( '#mastery-text-125' ).css('display', 'inline-block');
        $('#mastery-text-125').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6352',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-126' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-126-image' ).css('border', '1px solid orange');
        $( '#mastery-text-126' ).css('display', 'inline-block');
        $('#mastery-text-126').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6361',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-127' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-127-image' ).css('border', '1px solid orange');
        $( '#mastery-text-127' ).css('display', 'inline-block');
        $('#mastery-text-127').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6362',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-128' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-128-image' ).css('border', '1px solid orange');
        $( '#mastery-text-128' ).css('display', 'inline-block');
        $('#mastery-text-128').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6363',$masteriesId)){
		$totalContainer2 = $totalContainer2 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-129' ).css('-webkit-filter', 'grayscale(0%');
         $( '#mastery-129-image' ).css('border', '1px solid orange');
        $( '#mastery-text-129' ).css('display', 'inline-block');
        $('#mastery-text-129').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}?>
	<script>
	document.getElementById('text_Cunning').innerHTML = <?php echo json_encode("CUNNING : ".$totalContainer2);?>;
	</script>
</div>
<div id="masteries-condition-container-3">
	<?php
	$totalContainer3 = 0;
	if(in_array('6211',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-130' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-130-image' ).css('border', '1px solid orange');
        $( '#mastery-text-130' ).css('display', 'inline-block');
        $('#mastery-text-130').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6212',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-131' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-131-image' ).css('border', '1px solid orange');
        $( '#mastery-text-131' ).css('display', 'inline-block');
        $('#mastery-text-131').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6221',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-132' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-132-image' ).css('border', '1px solid orange');
        $( '#mastery-text-132' ).css('display', 'inline-block');
        $('#mastery-text-132').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6223',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-133' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-133-image' ).css('border', '1px solid orange');
        $( '#mastery-text-133' ).css('display', 'inline-block');
        $('#mastery-text-133').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6231',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-134' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-134-image' ).css('border', '1px solid orange');
        $( '#mastery-text-134' ).css('display', 'inline-block');
        $('#mastery-text-134').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6232',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-135' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-135-image' ).css('border', '1px solid orange');
        $( '#mastery-text-135' ).css('display', 'inline-block');
        $('#mastery-text-135').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6241',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-136' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-136-image' ).css('border', '1px solid orange');
        $( '#mastery-text-136' ).css('display', 'inline-block');
        $('#mastery-text-136').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6242',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-137' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-137-image' ).css('border', '1px solid orange');
        $( '#mastery-text-137' ).css('display', 'inline-block');
        $('#mastery-text-137').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6251',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-138' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-138-image' ).css('border', '1px solid orange');
        $( '#mastery-text-138' ).css('display', 'inline-block');
        $('#mastery-text-138').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6252',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-139' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-139-image' ).css('border', '1px solid orange');
        $( '#mastery-text-139' ).css('display', 'inline-block');
        $('#mastery-text-139').append(<?php echo json_encode($masteriesText[$y]." / 5"); $y++;?>)
    </script><?php
	}
	if(in_array('6261',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-140' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-140-image' ).css('border', '1px solid orange');
        $( '#mastery-text-140' ).css('display', 'inline-block');
        $('#mastery-text-140').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6262',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-141' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-141-image' ).css('border', '1px solid orange');
        $( '#mastery-text-141' ).css('display', 'inline-block');
        $('#mastery-text-141').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
	}
	if(in_array('6263',$masteriesId)){
		$totalContainer3 = $totalContainer3 + $masteriesText[$y];
	?>    <script>
        $( '#mastery-142' ).css('-webkit-filter', 'grayscale(0%');
        $( '#mastery-142-image' ).css('border', '1px solid orange');
        $( '#mastery-text-142' ).css('display', 'inline-block');
        $('#mastery-text-142').append(<?php echo json_encode($masteriesText[$y]." / 1"); $y++;?>)
    </script><?php
		}?>
	<script>
	document.getElementById('text_Resolve').innerHTML = <?php echo json_encode("RESOLVE : ".$totalContainer3);?>;
	</script>
</div>
<?php
}
catch(Exception $e) {
    return 0;
};