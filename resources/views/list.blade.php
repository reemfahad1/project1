<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

<!-- Bootstrap -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Datatables JS CDN -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="jquery-3.5.1.min.js"></script>
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

    <title>Covid-11 Project</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

  <body data-new-gr-c-s-check-loaded="14.1042.0" data-gr-ext-installed="" class="vsc-initialized">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div style="width:75%;" class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="icon.svg" alt="" width="60" height="54" class="d-inline-block align-text-top">
      <a style="color:#fff; position: absolute;
    margin: 70px;" class="font-monospace">Covid-19 Project</a>
    </a>
  </div>

  <ul class="nav justify-content-right">
  <li class="nav-item">
  <a style="color:#ffffff99" class="nav-link" href="{{ url("landing") }}">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 2 27 27" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Worldwide
  </a>
  </li>
  <li class="nav-item">
        <a style="color:#ffffff" class="nav-link active" href="{{ url("list") }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 27 27" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
        List<span class="sr-only">(current)</span>
  </a>
  </li>
  <li class="nav-item">
        <a style="color:#ffffff99" class="nav-link" href="{{ url("country") }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 27 27" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
        Add</a>
  </li>
  </ul>
        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

</nav>

<div class="container">
<div class="row">
  <h2 style="text-align:center;">Covid-19 Cases Around The World</h2>

  <nav class="navbar navbar-light bg-light justify-content-between">
    <form class="form-inline" action="{{url('/search')}}" method="post">
    {{csrf_field()}}
<div>
 <!-- Search by country name -->
  <input style="padding: 15px;  width: 300px; height: 44px;" class="form-control mr-sm-2" type="text" placeholder="Search by country name" aria-label="Search" name="country"/>
  <input  class="btn btn-outline-success my-4 my-sm-0" type="submit" value="Search"/>
</div>
 
  </form>

<!-- Add country details with covid19 cases numbers -->
    <button style="margin-bottom:15px;" class="btn btn-outline-success" onclick="window.location='{{ url("country") }}'" type="button">Add Country</button>


  </nav>

<!-- Countries list -->

          <div class="table-responsive">
          <table class="table table-hover table-striped" style="text-align:center;">
            <thead class="table-dark " style="background-color: #e3f2fd;">
                <tr>
                <!-- Sort by any data bellow -->
                  <th>@sortablelink('id')</th>
                  <th>@sortablelink('Country')</th>
                  <th>@sortablelink('CountryCode')</th>
                  <th>@sortablelink('Slug')</th>
                  <th>@sortablelink('NewConfirmed')</th>
                  <th>@sortablelink('TotalConfirmed')</th>
                  <th>@sortablelink('NewDeaths')</th>
                  <th>@sortablelink('TotalDeaths')</th>
                  <th>@sortablelink('NewRecovered')</th>
                  <th>@sortablelink('TotalRecovered')</th>
                  <th>Opertation</th>
                </tr>
              </thead>
              <tbody>

              @foreach($table_rows as $row)               
                <tr>
                  <td>{{$row['id']}}</td>
                  <td>{{$row['Country']}}</td>
                  <td>{{$row['CountryCode']}}</td>
                  <td>{{$row['Slug']}}</td>
                  <td>{{$row['NewConfirmed']}}</td>
                  <td>{{$row['TotalConfirmed']}}</td>
                  <td>{{$row['NewDeaths']}}</td>
                  <td>{{$row['TotalDeaths']}}</td>
                  <td>{{$row['NewRecovered']}}</td>
                  <td>{{$row['TotalRecovered']}}</td>
                  <td>
                  <!-- Edit country details with covid19 cases numbers -->
                  <a href = {{"edit/".$row['id']}}> Edit </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <style>
            .w-5{
              display : none
            }
            </style>

            <!-- Use pagination 10 results on each page -->
            {!! $table_rows->appends(\Request::except('page'))->render() !!}

          </div>
          </div>
          </div>
        </main>
      </div>
    </div>

    <!-- End Data list -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  

</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>

<br>

<footer class="fixed-bottom text-center text-white" style="background-color: #212529;">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Powerd by:&nbsp;&nbsp;&nbsp;Reem Alahmadi
  </div>
  <!-- Copyright -->
</footer>