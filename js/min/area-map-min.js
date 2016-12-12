function buildMap(e){function t(e){e.addListener("click",function(){infowindow=new google.maps.InfoWindow,null!==currentInfoWindow&&currentInfoWindow.close(),currentInfoWindow=infowindow,infowindow.setContent(e.html),infowindow.open(map,e)})}bounds=new google.maps.LatLngBounds;var a=[{featureType:"poi",elementType:"labels",stylers:[{visibility:"off"}]}];map=new google.maps.Map(document.getElementById("map-canvas"),{mapTypeControl:!1,scrollwheel:!1,panControl:!1,rotateControl:!1,streetViewControl:!1,zoomControlOptions:{position:google.maps.ControlPosition.RIGHT_BOTTOM},styles:a});for(var n=0;n<e.length;n++){var o=e[n].title.rendered,s=e[n].acf.address,i=e[n].acf.address_2,r=e[n].acf.city,c=e[n].acf.state,d=e[n].acf.zip,l=e[n].acf.phone,m=e[n].acf.website,p=e[n].acf.additional_details,u=e[n].acf.latitude,f=e[n].acf.longitude,g="cat-"+e[n].landmark_types[0];o=""!==o?'<strong class="window-heading">'+o+"</strong>":"",s=""!==s?"<br>"+s:"",i=""!==i?"<br>"+i:"",r=""!==r?"<br>"+r:"",c=""!==c?", "+c:"",d=""!==d?" "+d:"",l=""!==l?"<br>"+l:"",m=""!==m?'<br><a style="color:#bd6573;" target="_blank" href="'+m+'">Website &raquo;</a>':"",p=""!==p?"<br><br>"+p:"",locations.push([n,o,u,f,s,r,c,d,l,m,p,g])}for(var v=0;v<locations.length;v++){var h=catIconPath+locations[v][11]+".png",w=new google.maps.Marker({position:new google.maps.LatLng(locations[v][2],locations[v][3]),map:map,icon:h,html:'<strong class="heading">'+locations[v][1]+"</strong>"+locations[v][4]+locations[v][5]+locations[v][6]+locations[v][7]+locations[v][8]+locations[v][9]});markers.push(w),bounds.extend(w.getPosition()),t(w)}map.fitBounds(bounds)}function buildCats(e,t){function a(e,t){e.addEventListener("click",function(e){e.preventDefault(),infowindow&&infowindow.close();for(var a=this.parentElement.getAttribute("id"),n=0;n<locations.length;n++)locations[n][11]===a?(markers[n].setVisible(!0),markers[n].setOptions({zIndex:1100})):locations[n][11]!==a&&markers[n].setVisible(!1);var o=[];o=t.children;for(var s=0;s<o.length;s++)o[s].firstChild.classList.remove("active");this.classList.add("active"),resetBtn.classList.add("active")})}var n=document.getElementById(t).parentNode;n.insertBefore(catNav,document.getElementById(t));var o=document.createElement("ul");catNav.appendChild(o);for(var s=0;s<e.length;s++)if(e[s].count>0){var i=document.createElement("li");i.id="cat-"+e[s].id,i.classList.add(e[s].slug);var r=document.createElement("a");r.href="#",r.innerText=e[s].name,i.appendChild(r),o.appendChild(i),a(r,o)}}function initMap(e){var t=new XMLHttpRequest;t.onreadystatechange=function(){4===t.readyState&&200===t.status?(landmarksObj=JSON.parse(t.responseText),document.getElementById("map-canvas").innerHTML="",buildMap(landmarksObj)):document.getElementById("map-canvas").innerHTML="Error Loading Data"},t.open("GET",e,!0),t.send(),document.getElementById("map-canvas").innerHTML="Loading map..."}function initCats(e){var t=new XMLHttpRequest;t.onreadystatechange=function(){4===t.readyState&&200===t.status&&(catsObj=JSON.parse(t.responseText),buildCats(catsObj,myMap))},t.open("GET",e,!0),t.send()}function callback(){initMap(markersFeed),addCats===!0&&initCats(catsFeed)}function resetMap(e,t){for(var a=0;a<locations.length;a++)markers[a].setVisible(!0);e.fitBounds(bounds),infowindow&&infowindow.close();for(var n=catNav.children[0].childNodes,o=0;o<n.length;o++)n[o].firstChild.classList.remove("active");t.classList.remove("active")}var myMap="map-canvas",apiKey="AIzaSyCDhdGGnlXT8zhicJyTP3xa9ZV6ocqOOpY",markersFeed="/wp-json/wp/v2/area_landmarks?per_page=100",addCats=!0,catsFeed="/wp-json/wp/v2/landmark_types",catIconPath="/wp-content/themes/mm4/images/",map,bounds,infowindow,currentInfoWindow=null,landmarksObj,catsObj,markers=[],locations=[],resetBtn=document.getElementById("reset-map"),header=document.getElementById("masthead");document.addEventListener("DOMContentLoaded",function(){if(document.getElementById(myMap)){var e;e=document.querySelector("html").lang?document.querySelector("html").lang:"en";var t=document.createElement("script");t.type="text/javascript",t.src="https://maps.googleapis.com/maps/api/js?key="+apiKey+"&callback=callback&language="+e,document.getElementsByTagName("body")[0].appendChild(t)}});var catNav=document.createElement("nav");catNav.id="map-nav",resetBtn.addEventListener("click",function(){resetMap(map,this)});