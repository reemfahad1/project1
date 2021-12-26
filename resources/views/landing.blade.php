
<script src="jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link
  href="https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css"
  rel="stylesheet"
/>
    <!-- Mapbox GL CSS -->
    <link
      href="https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css"
      rel="stylesheet"
    />
    <!-- Vue-mapbox CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/vue-mapbox@latest/dist/vue-mapbox.css"
      rel="stylesheet"
    />
    <!-- Mapbox GL JS -->
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js"></script>
    <!-- VueJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@latest/dist/vue.min.js"></script>
    <!-- Vue-mapbox -->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/vue-mapbox@latest/dist/vue-mapbox.min.js"
    ></script>
    <!-- ... -->

<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.svg">

    <title>Covid-19 Project</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

  <body data-new-gr-c-s-check-loaded="14.1042.0" data-gr-ext-installed="" class="vsc-initialized">
  
    <!-- Start page navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div style="width:75%;" class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="icon.svg" alt="" width="60" height="54" class="d-inline-block align-text-top">
      <a style="color:#fff; position: absolute; margin: 70px;" class="font-monospace">Covid-19 Project</a>
    </a>
  </div>

  <ul class="nav justify-content-right">
  <li class="nav-item">
  <a style="color:#ffffff" class="nav-link active" href="{{ url("landing") }}">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 2 27 27" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Worldwide<span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
        <a style="color:#ffffff99" class="nav-link" href="{{ url("list") }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 27 27" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
        List</a>
  </li>
  <li class="nav-item">
        <a style="color:#ffffff99" class="nav-link" href="{{ url("country") }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 27 27" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
        Add</a>
  </li>
  </ul>
        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

    </nav>
    <!-- End page navbar -->

    <!-- Start Statistical boxes -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">

<div class="container-fluid mb-5 center">
    <div class="text-center mt-5">
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="our-services settings">
                    <div class="icon"> <img style="width: 100px;" src="confirmed.png"> </div>
                    <h4>Total Confirmed</h4>
                    <p>{{number_format($data["Global"]["TotalConfirmed"])}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="our-services backups">
                    <div class="icon"> <img style="width: 100px;" src="recovered.png"> </div>
                    <h4>Total Recovered</h4>
                    <p>{{number_format($data["Global"]["TotalRecovered"])}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="our-services database">
                    <div class="icon"> <img style="width: 100px;" src="Deaths.png"> </div>
                    <h4>Total Deaths</h4>
                    <p>{{number_format($data["Global"]["TotalDeaths"])}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins|Ubuntu&display=swap');

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0
}

body {
    background: #eee;
    font-family: 'Ubuntu', sans-serif
}

.box {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}

.our-services {
    margin-top: 15px;
    padding-bottom: 30px;
    padding: 0 143px;
    min-height: 163px;
    text-align: center;
    border-radius: 10px;
    background-color: #fff;
    transition: all .4s ease-in-out;
    box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
}

.our-services .icon {
    margin-bottom: -21px;
    transform: translateY(-50%);
    text-align: center
}

.our-services:hover h4,
.our-services:hover p {
    color: #fff
}

.speedup:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #fb0054 0%, #f55b2a 100%)
}

.settings:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #34b5bf 0%, #210c59 100%)
}

.privacy:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #3615e7 0%, #44a2f6 100%)
}

.backups:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #fc6a0e 0%, #fdb642 100%)
}

.ssl:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #8d40fb 0%, #5a57fb 100%)
}

.database:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #27b88d 0%, #22dd73 100%)
}
</style>

              </div>
            </div>
          </div>

    <!-- End Statistical boxes -->


<!-- Start Covid-11 World map -->

<div style="height:570px; width:100%;" id="map"></div>

<script>
function initMap(){

    // Map options
    var options = {
        zoom:3,
        center:{lat:31.3601,lng:36.0589}
    }

    // New map
    var map = new google.maps.Map(document.getElementById('map'),options);

    fetchCountries();

  function addMarker(props){

    // Add marker
  var marker = new google.maps.Marker({
      position:props.coords,
      map:map,
      content:props.content
  });

  if(props.content){ 
      var infoWindow = new google.maps.InfoWindow({
      content : props.content
    });

    // show hover mouseover
    marker.addListener('mouseover', function(){
        infoWindow.open(map, marker);
    });
    // hide hover mouseout
    marker.addListener('mouseout', function(){
        infoWindow.close();
    });
  }
}

// get the lat & lng from database
function fetchCountries(){

$.ajax({
    type: "GET",
    url : "/fetch-countries",
    dataType: "json",
    success: function(response){
        $.each(response.countries, function(kay , item){
            addMarker({
        coords:{lat: parseFloat(item.lat) ,lng: parseFloat(item.lng)},
        content: '<h4><center>'+item.Slug+'</center></h4> <br> <ul><li> New Confirmed: '+Number(item.NewConfirmed).toLocaleString()+'<li> Total Confirmed: '+Number(item.TotalConfirmed).toLocaleString()+'<li> New Deaths: '+Number(item.NewDeaths).toLocaleString()+'<li> Total Deaths: '+Number(item.TotalDeaths).toLocaleString()+'<li> New Recovered: '+Number(item.NewRecovered).toLocaleString()+'<li> Total Recovered: '+Number(item.TotalRecovered).toLocaleString()+'</ul>'
    });

     });
    }
    
});
}

}

</script>

<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcQVEErt3ZbvLKy2bkdiNnW82z-OQWo6k&callback=initMap&libraries=&v=weekly"
></script>


<br>
<hr>


<footer class="fixed-bottom text-center text-white" style="background-color: #212529;">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Powerd by:&nbsp;&nbsp;&nbsp;Reem Alahmadi
  </div>
  <!-- Copyright -->
</footer>