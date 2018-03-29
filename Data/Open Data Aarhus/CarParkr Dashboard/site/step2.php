<!DOCTYPE html>
<html>
<head>
	<title>CarParkr - See live data</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<img src="logo.png">
</header>
<main>
<?php
// Get array of garage names
include('garageNames.php');
//var_dump($garageNames);

// Get JSON live data
include('class_request/class_request.php');
$request = new Request();

$url = "http://www.odaa.dk/api/action/datastore_search?resource_id=2a82a145-0195-4081-a13c-b0e587e9b89c";

$data = json_decode(
			$request->getFile($url)
		);

// create new array to store the combined data
$dataList = array();

date_default_timezone_set("Europe/Copenhagen");

//var_dump($data); die();

// loop through all of the result records from the live data
foreach ($data->result->records as $record) {
	// find the correct garage name for each record
	foreach ($garageNames as $garage) {

		$garageName = $garage["garageName"];
		$garageCode = $garage["garageCode"];

		$recordCode = $record->garageCode;

		// if there is a match, then the correct name is known
		if($garageCode === $recordCode) {
			
			$date = date_create($record->date);
			$timestamp = date_format($date,"Y-m-d H:i:s");

			$record->date = $timestamp;
			$dataList[] = array(
				"name" => $garageName,
				"data" => $record,
			);
		}
	}
}
//var_dump($dataList);

?>
<p>Last updated <?php echo compare_dates($dataList[0]["data"]->date);?>
</p>

<?php
foreach ($dataList as $record) {
	// get the occupancy rate in %
	$occupancy = ($record["data"]->vehicleCount/$record["data"]->totalSpaces)*100;

	// round to 2 decimal
	$occupancy = round($occupancy,2);

	// what is the level of occupancy
	if($occupancy>75) {
		$level = "high";
	} elseif($occupancy>50) {
		$level = "med";
	} else {
		$level = "low";
	}
?>

	<article class="card">
		<h2 class="title"><?php echo $record["name"];?></h2>
		<div class="bar">
			<div class="indicator <?php echo $level;?>" style="width:<?php echo $occupancy;?>%"></div>
		</div>
		<dl class="stats">
		    <dt><?php echo $record["data"]->vehicleCount;?></dt>
		    <dd>Occupied</dd>
	    </dl>
		<dl class="stats">
		    <dt><?php echo $record["data"]->totalSpaces;?></dt>
		    <dd>Capacity</dd>
	    </dl>
		<dl class="stats">
		    <dt><?php echo $record["data"]->totalSpaces - $record["data"]->vehicleCount;?></dt>
		    <dd>Free</dd>
	    </dl>
	</article>


<?php
}
?>

</main>
</html>

<?php

function compare_dates($date1, $date2 = null) { 
	$date1 = strtotime($date1);
	if(is_null($date2)) {$date2=date("Y-m-d H:i:s");}
	$date2 = strtotime($date2);
    $blocks = array( 
        array('name'=>'year','amount'    =>    60*60*24*365    ), 
        array('name'=>'month','amount'    =>    60*60*24*31    ), 
        array('name'=>'week','amount'    =>    60*60*24*7    ), 
        array('name'=>'day','amount'    =>    60*60*24    ), 
        array('name'=>'hour','amount'    =>    60*60        ), 
        array('name'=>'minute','amount'    =>    60        ), 
        array('name'=>'second','amount'    =>    1        ) 
        ); 
    
    $diff = abs($date1-$date2); 
    
    $levels = 2; 
    $current_level = 1; 
    $result = array(); 
    foreach($blocks as $block) 
        { 
        if ($current_level > $levels) {break;} 
        if ($diff/$block['amount'] >= 1) 
            { 
            $amount = floor($diff/$block['amount']); 
            if ($amount>1) {$plural='s';} else {$plural='';} 
            $result[] = $amount.' '.$block['name'].$plural; 
            $diff -= $amount*$block['amount']; 
            $current_level++; 
            } 
        } 
    return implode(' ',$result).' ago'; 
    } 

?>