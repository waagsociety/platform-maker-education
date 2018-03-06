<?php

//open
echo "<script type=\"text/javascript\">";
  //render geojson
  $items = $pages->find('agenda')->children()->visible();
  $json = array();
  foreach($items as $item) {
    if(!empty((string)$item->geocoordinates())) {
    	$coords = explode(",", (string)$item->geocoordinates());
    	if(count($coords) == 2) {
    		$lat = floatval((string)$coords[0]);
    		$lon = floatval((string)$coords[1]);
    		if($lat != 0 && $lon != 0) {
    	   	   	$entry  = array('type' => 'Feature');
    			$properties = array(
    				"id" => "marker-ijo1qpiw0",
    		    	"title" => (string)$item->title(),
    		        "description" => (string)$item->intro(),
    				"url" => $item->url(),
    			    "marker-symbol" => "hairdresser",
    			    "marker-size" => "medium",
    			    "marker-color" => "#69d2f7"
    			);
    			$geometry = array(
    				"coordinates" => array($lon, $lat),
    			    "type" => "Point"
    			);
    			$entry["geometry"] = $geometry;
    			$entry["properties"] = $properties;
    			$json[] = $entry;
    		}
    	}
    }
  }
//export in javascript variable
echo "var geojson=".json_encode($json); //map expects geojson to be named like this
echo "</script>";
?>

<section class="one-col">
  <span class="tab" style="background:#f8a531;height:20px;color:white;">Zet jezelf op de kaart</span>
  <div class="box" id="makermap" style="width:100%;height:400px;"></div>
</section>

<script src='https://api.mapbox.com/mapbox.js/v2.2.4/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v2.2.4/mapbox.css' property='stylesheet' rel='stylesheet' />
<?php echo js(array(
  'assets/js/map.js',
))?>
