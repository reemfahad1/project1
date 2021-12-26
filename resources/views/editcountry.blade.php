
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('icon.svg')}}">

    <title>Covid-11 Project</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

<!-- Bootstrap -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Start page navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div style="width:72%;" class="container-fluid">
    <a class="navbar-brand" href="#"> 
      <img src="{{ asset('icon.svg')}}" alt="" width="60" height="54" class="d-inline-block align-text-top">
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
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

</nav>
<!-- End page navbar -->

<style>

input{
margin-bottom: 20px;
}

</style>

<!-- Edit inputs form -->
 <div class="container">
<div class="row">
    <div class="col-md-12">
    <br>
    <h3 align="center">Edit Data</h3>
    <br>

  <!-- Displaying The Validation Errors -->
    @if($errors)
    @foreach($errors->all() as $err)

    <li style="color:red">
    {{$err}}
    </li>
    
    @endforeach
    @endif

    <form action="/edit" method="POST" >
    <input type="hidden" placeholder="enter Country name" name="id" value="{{$data['id']}}" /></div>

 {{csrf_field()}}

    <div class="row">
        <div class="form-group col-md-4">
        <label for="inputEmail4">Country name :</label>
        <input readonly="readonly" type="text" class="form-control" placeholder="enter Country name" name="Country" value="{{$data['Country']}}" /></div>

        <div class="form-group col-md-4">
        <label for="inputEmail4">CountryCode</label>
        <input readonly="readonly" type="text" class="form-control" placeholder="enter CountryCode" name="CountryCode" value="{{$data['CountryCode']}}"/></div>

        <div class="form-group col-md-4">
        <label for="inputEmail4">Slug</label>
        <input readonly="readonly" type="text" class="form-control" placeholder="enter Slug" name="Slug" value="{{$data['Slug']}}"/></div>
        </div>

        <br>
        <div class="row">
        <div class="form-group col-md-4">
        <label for="inputEmail4">Number of New Confirmed :</label>
        <input type="text" class="form-control" placeholder="enter NewConfirmed" name="NewConfirmed" value="{{$data['NewConfirmed']}}"/></div> 

        <div class="form-group col-md-4">
        <label for="inputEmail4">Number of Total Confirmed :</label>
        <input type="int" class="form-control" placeholder="enter TotalConfirmed" name="TotalConfirmed" value="{{$data['TotalConfirmed']}}"/></div>

        <div class="form-group col-md-4">
        <label for="inputEmail4">Number of New Deaths :</label>
        <input type="text" class="form-control" placeholder="enter NewDeaths" name="NewDeaths" value="{{$data['NewDeaths']}}"/></div>
        </div>

        <br>
        <div class="row">
        <div class="form-group col-md-4">
        <label for="inputEmail4">Number of Total Deaths :</label>
        <input type="text" class="form-control" placeholder="enter TotalDeaths" name="TotalDeaths" value="{{$data['TotalDeaths']}}"/></div>

        <div class="form-group col-md-4">
        <label for="inputEmail4">Number of New Recovered :</label>
        <input type="text" class="form-control" placeholder="enter NewRecovered" name="NewRecovered" value="{{$data['NewRecovered']}}"/></div>
        
        <div class="form-group col-md-4">
        <label for="inputEmail4">Number of Total Recovered :</label>
        <input type="text" class="form-control" placeholder="enter TotalRecovered" name="TotalRecovered" value="{{$data['TotalRecovered']}}"/></div>
        </div>
        
        <label class="col-md-4"></label>

        <input type="submit" class="btn btn-primary col-md-4">
        
 </form>
</div>
</div>

<footer class="fixed-bottom text-center text-white" style="background-color: #212529;">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Powerd by:&nbsp;&nbsp;&nbsp;Reem Alahmadi
  </div>
  <!-- Copyright -->
</footer>