<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>A map showing the villages of Gomshall, Holmbury St. Mary, Peaslake and Shere</title>

<meta name="description" content="Shere Parish Council, serving the villages of Gomshall, Holmbury St. Mary, Peaslake and Shere.">
<meta name="keywords" content="Gomshall, Holmbury St. Mary, Peaslake, Shere Parish Council, Surrey">

<link rel="stylesheet" type="text/css" href="sherepc.css">

<link rel="stylesheet" type="text/css" href="css/css-base.css">
<link rel="stylesheet" type="text/css" href="css/css-topbar.css">

<script type="text/javascript" src="css/ddlevelsmenu.js"></script>

   <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAMeJhRHeVOubKt5Pr8O3n-hTfBY44Aivkx59FufRf6YQvCnn7pBRmBC4BirvNL89bsICMsANlSEgjWg"
      type="text/javascript"></script>

</head>

<body onunload="GUnload()">

<script type="text/javascript" src="cookie.js">
</script> <script type="text/javascript">
//<![CDATA[
  var defaultStylesheet = 'stylesheet1.css' ;
  function setStylesheet(href)
  {
  cookie.set('stylesheet', href, 365) ;
  location.reload();
  }
  var ss = cookie.get('stylesheet') ;
  if(!ss) ss = defaultStylesheet ;
  document.write('<link rel="stylesheet" type="text/css" href="' + ss + '" />') ;
  //]]>
  </script>

<div class="box">

<div class="masthead1"><div class="css">
      <a onclick="setStylesheet('stylesheet1.css');" href="#">Normal</a> | <a onclick="setStylesheet('stylesheet2.css');" href="#">Large</a> | <a onclick="setStylesheet('stylesheet3.css');" href=
      "#">Extra Large</a>
    </div>
<div class="date">

</div>
</div>

<img border="0" src="images/logo.gif" width="820" height="100" alt="Shere Parish Council"><div class="masthead2"><div class="css1">

<div id="ddtopmenubar" class="mattblackmenu">
<ul>
<li><a href="index.php">Home</a></li>|
<li><a href="tanyard_hall.php">Tanyard Hall</a></li>|
<li><a href="about_shere.php" rel="ddsubmenu1">Parish Council</a></li>|
<li><a href="millennium_trail.php">Millennium Trail</a></li>|
<li><a href="map.php">Map</a></li>|
<li><a href="site_map.php">Site Map</a></li>|
<li><a href="contact_us.php">Contact Us</a></li>
</ul>
</div>

<script type="text/javascript">
ddlevelsmenu.setup("ddtopmenubar", "topbar")
</script>

<!--Top Drop Down Menu 1 HTML-->

<ul id="ddsubmenu1" class="ddsubmenustyle">
<li><a href="about_shere.php">About Shere Parish Council</a></li>
<li><a href="councillors.php">Councillors</a></li>
<li><a href="meeting_dates.php">Meeting Dates</a></li>
<li><a href="annual_rep.php">Annual Report</a></li>
<li><a href="#">Meetings</a>
  <ul>
  <li><a href="agenda.php">Council Agendas</a></li>
  <li><a href="minutes.php">Council Minutes</a></li>
  <li><a href="planning_agendas.php">Planning Agendas</a></li>
  <li><a href="planning_minutes.php">Planning Minutes</a></li>
  <li><a href="finance_agendas.php">Finance Agendas</a></li>
  <li><a href="Finance_Minutes.php">Finance Minutes</a></li>
  <li><a href="parish_main_mins.php">Parish Maintenance Committee</a></li>
  <li><a href="play_areas_agendas.php">Play Areas Agendas</a></li>
  <li><a href="play_areas_minutes.php">Play Areas Minutes</a></li>
  </ul>
</li>
<li><a href="Health_&_Safety_Committee_agenda_March_09.pdf" target="_blank">Freedom of Information Publication Scheme</a></li>
<li><a href="Health_&_Safety_Committee_agenda_March_09.pdf" target="_blank">Health & Safety Committee Agenda March 2009</a></li>
</ul>

</div>
</div>

<div id="pics">

<p></p>



</div>

<div id="content">

<p align="center"><b>A map showing the villages of Gomshall, Holmbury St. Mary, Peaslake and Shere</b></p>

<hr>

   <div id="map" style="width: 500px; height: 600px"></div>
	      <noscript>
      <b>JavaScript must be enabled in order for you to use Google Maps.</b>
	        However, it seems JavaScript is either disabled or not supported by your browser.
	        To view Google Maps, enable JavaScript by changing your browser options, and then
	        try again.</noscript>




   <script type="text/javascript">
	      //<![CDATA[

	      if (GBrowserIsCompatible()) {

	        function createMarker(point,html) {
	          var marker = new GMarker(point);
	          map.setMapType(G_HYBRID_MAP);

	          GEvent.addListener(marker, "click", function() {
	            marker.openInfoWindowHtml(html);
	          });
	          return marker;
	        }

	        // Display the map, with some controls and set the initial location
	        var map = new GMap2(document.getElementById("map"));
	        map.addControl(new GLargeMapControl());
	        map.addControl(new GMapTypeControl());
	        map.setCenter(new GLatLng (51.205163,-0.443573), 13);

	        var point = new GLatLng(51.220693,-0.44854);
	        var marker = createMarker(point,'<div style="width: 250px; height: 370px"><p align="center"><img border="0" src="images/tanyard_hall2.jpg"></p><p align="justify"><font face="Arial"><b>Council Office</b><br>Tanyard Hall<br>30 Station Road<br>Gomshall<br>GUILDFORD<br>GU5 9LF</font></p></div>')
	        map.addOverlay(marker);



	      }

	      // display a warning if the browser was not compatible
	      else {
	        alert("Sorry, the Google Maps API is not compatible with this browser");
	      }

	      //]]>
	      </script>

<p>The red marker shows our office on the map.</p>

</div>


  <!--end of div-->
  </div>
  <!--end-->

<?php include("footer.php"); ?>


