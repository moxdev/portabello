function buildMap(e){function t(e){e.addListener("click",function(){infowindow=new google.maps.InfoWindow,null!==currentInfoWindow&&currentInfoWindow.close(),currentInfoWindow=infowindow,infowindow.setContent(e.html),infowindow.open(map,e)})}bounds=new google.maps.LatLngBounds;var n=[{featureType:"poi",elementType:"labels",stylers:[{visibility:"off"}]}];map=new google.maps.Map(document.getElementById("map-canvas"),{mapTypeControl:!1,scrollwheel:!1,panControl:!1,rotateControl:!1,streetViewControl:!1,zoomControlOptions:{position:google.maps.ControlPosition.RIGHT_BOTTOM},styles:n});for(var a=0;a<e.length;a++){var o=e[a].title.rendered,s=e[a].acf.address,i=e[a].acf.address_2,r=e[a].acf.phone,l=e[a].acf.website,d=e[a].acf.additional_details,c=e[a].acf.latitude,m=e[a].acf.longitude,p="cat-"+e[a].landmark_types[0];o=""!==o?'<strong class="window-heading">'+o+"</strong>":"",s=""!==s?"<br>"+s:"",i=""!==i?"<br>"+i:"",r=""!==r?"<br>"+r:"",l=""!==l?'<br><a target="_blank" href="'+l+'">Website &raquo;</a>':"",d=""!==d?"<br><br>"+d:"",locations.push([a,o,c,m,s,i,r,l,d,p])}for(var u=0;u<locations.length;u++){var g=catIconPath+locations[u][9]+".png",f=new google.maps.Marker({position:new google.maps.LatLng(locations[u][2],locations[u][3]),map:map,icon:g,html:'<strong class="heading">'+locations[u][1]+"</strong>"+locations[u][4]+locations[u][5]+locations[u][6]+locations[u][7]+locations[u][8]});markers.push(f),bounds.extend(f.getPosition()),t(f)}map.fitBounds(bounds)}function buildCats(e,t){function n(e,t){e.addEventListener("click",function(e){e.preventDefault(),infowindow&&infowindow.close();for(var n=this.parentElement.getAttribute("id"),a=0;a<locations.length;a++)locations[a][9]===n?(markers[a].setVisible(!0),markers[a].setOptions({zIndex:1100})):locations[a][9]!==n&&markers[a].setVisible(!1);var o=[];o=t.children;for(var s=0;s<o.length;s++)o[s].firstChild.classList.remove("active");this.classList.add("active"),resetBtn.classList.add("active")})}var a=document.getElementById(t).parentNode,o=document.createElement("nav");o.id="map-nav",a.insertBefore(o,document.getElementById(t));var s=document.createElement("ul");o.appendChild(s);for(var i=0;i<e.length;i++)if(e[i].count>0){var r=document.createElement("li");r.id="cat-"+e[i].id,r.classList.add(e[i].slug);var l=document.createElement("a");l.href="#",l.innerText=e[i].name,r.appendChild(l),s.appendChild(r),n(l,s)}}function initMap(e){var t=new XMLHttpRequest;t.onreadystatechange=function(){4===t.readyState&&200===t.status?(landmarksObj=JSON.parse(t.responseText),document.getElementById("map-canvas").innerHTML="",buildMap(landmarksObj)):document.getElementById("map-canvas").innerHTML="Error Loading Data"},t.overrideMimeType("application/json"),t.open("GET",e,!0),t.send(),document.getElementById("map-canvas").innerHTML="Loading map..."}function initCats(e){var t=new XMLHttpRequest;t.onreadystatechange=function(){4===t.readyState&&200===t.status&&(catsObj=JSON.parse(t.responseText),buildCats(catsObj,myMap))},t.overrideMimeType("application/json"),t.open("GET",e,!0),t.send()}function callback(){initMap(markersFeed),addCats===!0&&initCats(catsFeed)}function resetMap(e,t){for(var n=0;n<locations.length;n++)markers[n].setVisible(!0);e.fitBounds(bounds),infowindow&&infowindow.close();for(var a=catNav.children[0].childNodes,o=0;o<a.length;o++)a[o].firstChild.classList.remove("active");t.classList.remove("active")}var myMap="map-canvas",apiKey="AIzaSyBH96bPjiEv8k96XGcglk9hdZvKVbbQa_s",markersFeed="/portabello/wp-json/wp/v2/area_landmarks?per_page=100",addCats=!0,catsFeed="/portabello/wp-json/wp/v2/landmark_types",catIconPath="/portabello/wp-content/themes/mm4/images/",map,bounds,infowindow,currentInfoWindow=null,landmarksObj,catsObj,markers=[],locations=[],resetBtn=document.getElementById("reset-map"),header=document.getElementById("masthead");document.addEventListener("DOMContentLoaded",function(){if(document.getElementById(myMap)){var e;e=document.querySelector("html").lang?document.querySelector("html").lang:"en";var t=document.createElement("script");t.type="text/javascript",t.src="https://maps.googleapis.com/maps/api/js?key="+apiKey+"&callback=callback&language="+e,document.getElementsByTagName("body")[0].appendChild(t)}}),resetBtn.addEventListener("click",function(){resetMap(map,this)});