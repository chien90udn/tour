<?php
use App\Destination;

$arr_map_point = explode(',',$tour->map_point);
$point_x 	   = $arr_map_point[0];
$point_y       = $arr_map_point[1];
$zoom          = $arr_map_point[2];

$arr_dest_info = explode("->",$tour->route);
$arr_dest_info = array_values(array_unique($arr_dest_info)); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/assets/frontend/css/style.css" />
<script src="/assets/frontend/js/common.js"></script>
<script src="/assets/frontend/jquery/jquery.min.js"></script>
<script src="/assets/frontend/jquery/jquery-1.9.1.js"></script>
</head>
<body style="overflow: hidden;">
<script src="//maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyAOK6r2qDrP56Jph6-eHaUHYr17stCRFD8" type="text/javascript"></script>
<script type="text/javascript">
						
	var arr_mark = new Array();
	
	<?php
	     $num=0; 
	     $ARR_ALL_ALL_DESTINATION = Destination::all()->toArray();
		 for($i=0;$i<count($arr_dest_info);$i++){ 
		  for($d=0;$d<count($ARR_ALL_ALL_DESTINATION);$d++){ 
		   if($arr_dest_info[$i]==$ARR_ALL_ALL_DESTINATION[$d]["name"]){
		   
		      $num++;
			  $ARR_ALL_ALL_DESTINATION[$d]["desc"] = strip_tags($ARR_ALL_ALL_DESTINATION[$d]["desc"]);
	?>
			  var arr_temp = new Array();
			  arr_temp[1] = <?=$ARR_ALL_ALL_DESTINATION[$d]["gx"]?>;
			  arr_temp[2] = <?=$ARR_ALL_ALL_DESTINATION[$d]["gy"]?>;
			  arr_temp[3] = "<?=$ARR_ALL_ALL_DESTINATION[$d]["name"]?>";
			  arr_temp[4] = "<?=str_limit($ARR_ALL_ALL_DESTINATION[$d]["desc"],205)?>";
			  arr_temp[5] = "<?=$ARR_ALL_ALL_DESTINATION[$d]["photo"]?>";
			  arr_temp[6] = "<?=$ARR_ALL_ALL_DESTINATION[$d]["link"]?>";
	
			  arr_mark[<?=$num?>] = arr_temp;
		
    <?php } } } ?>
    
	function initialize() {
	
	  if (GBrowserIsCompatible()){
		
		  var map = new GMap2(document.getElementById("tab_map"));
		  map.setCenter(new GLatLng(<?=$point_x?>,<?=$point_y?>),<?=$zoom?>);
		  map.addControl(new GSmallMapControl());
          map.disableScrollWheelZoom();
		 //map.setUIToDefault(); Show full control satelite/croll zoom...
		  var arr_lng = new Array();

		  for(var i=1;i<=<?=$num?>;i++){
		
			  arr_lng[i] = new GLatLng(arr_mark[i][1],arr_mark[i][2]);
			  
			  map.addOverlay(createMarker(map,arr_lng[i],arr_mark[i][3],arr_mark[i][6],arr_mark[i][5],arr_mark[i][4],i));	     	  
		  }  
		  
		  //CREATE Polyline Destination
		  var polyline = new GPolyline([
		  <?php for($k=1;$k<=$num;$k++){
			if($k==1){?>
			   arr_lng[<?=$k?>]
			<? }else{ ?>
			,arr_lng[<?=$k?>]
			<? } ?>
		  <? } ?>
		  ], "#fF6000", 6);
		   map.addOverlay(polyline); 

	  }

	  
  }
  $(document).unload(function (){
            GUnload();
  });

</script>
<div id="txt-open-tour" class="txt-open-tour-map">
<div id="title-detail-tour" class="detail-tour">
    
    <div id="itinerary">
        <div id="days"><font class="day">{{ $tour->duration }}</font>Days</div>
        <h2><a href="{{ $tour->link }}" title="<?=$tour->name?>" target="_blank"><?=$tour->name?></a></h2>
        <p style="width: 90%;float: left;"><?=get_route($tour->route)?></p>
    </div>

</div>
<div class="map-tour" id="main-component">
    <div id="right-container" style="width: 100%;">
        <div id="info-component">                 
            <div id="box-intinerary-tour">    
                <div style="float:left;"><div id="tab_map" style="float: left;width: 880px;height: 460px;"><script type="text/javascript">initialize();</script></div></div>
            </div>                      
        </div>
    </div>
</div>
</div>
</body>
</html>