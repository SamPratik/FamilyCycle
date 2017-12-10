@includeif('partials._header')
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 {
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 {
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 {
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  .stage-link {
    background-color: white;
    color:black;
    -webkit-transition: background-color .5s linear, color .5s linear;
    transition: background-color .5s linear, color .5s linear;
  }
  .stages-header {
    color: #1abc9c;
  }
  .stage-link:hover {
    background-color:#1abc9c;
    color:white;
  }
  .stage-link:hover img {
    transform: scale(1,1);
    -webkit-transition: -webkit-transform .5s linear;
    transition: transform .5s linear;
  }
  .stage-link:hover img {
    transform: scale(1.25,1.25);
  }
  .stage-link:hover .stages-header {
    color:white;
  }
  #searchFormId {
    display: none;
  }

  </style>
</head>
<body>

@include('partials._navbar')

<!-- First Container -->
<div class="container-fluid bg-1 text-center"><br>
  <h1 class="margin">Family Cycle</h1>
  {{-- <img src="{{ asset('images/circle_baby_image.jpg') }}" class="img-responsive img-circle margin" style="display:inline" alt="Family Cycle" width="400" height="400"> --}}
  <img src="https://png.icons8.com/family/color/400/000000">
  <h3>We are here to provide you.</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Our Goal</h3>
  <p>Discover the best pregnancy & parenting tips, information & education at BabyChakra.com. Connect with moms like you to make better parenting choices via our application </p>
  <button id="searchButtonId" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </button>
  {{-- Search Form --}}
  <form id="searchFormId" action="" method="post" style="margin-top:10px;">
    <div class="form-group col-md-4 col-md-offset-4">
      <input type="text" class="form-control" id="searchFieldId" placeholder="Search Here">
    </div>
  </form>

  {{-- jQuery to slide down search field --}}
  <script type="text/javascript">
    $(document).ready(function() {
      $("#searchButtonId").click(function(event) {
        $("#searchFormId").slideToggle('slow');
      });
    });
  </script>
</div>

<!-- Third Container (Grid) -->
<div class="container bg-3 text-center" style="padding-bottom:50px;">
  <h3 class="margin">Select a stage</h3><br>
  <div class="row">
    <a href="{{ route('user.after_marriage') }}" class="col-sm-6 stage-link" style="display:block;text-decoration:none;cursor:pointer;">
      <img src="https://png.icons8.com/romance/color/250/000000">
      <h2 class="stages-header">After Marriage</h2>
    </a>
    <a href="{{ route('user.planning') }}" class="col-sm-6 stage-link" style="display:block;text-decoration:none;cursor:pointer;">
      <img src="https://png.icons8.com/contraception/color/250/000000">
      <h2 class="stages-header">Planning Before Pregnancy</h2>
    </a>
  </div>
  <div class="row">
    <a href="{{ route('user.during_pregnancy') }}" class="col-sm-6 stage-link" style="display:block;text-decoration:none;cursor:pointer;">
      <img src="https://png.icons8.com/pregnant/color/250/000000">
      <h2 class="stages-header">During Pregnancy</h2>
    </a>
    <a href="{{ route('user.after_birth') }}" class="col-sm-6 stage-link" style="display:block;text-decoration:none;cursor:pointer;">
      <img src="https://png.icons8.com/babys-room/office/250/000000">
      <h2 class="stages-header">After Birth</h2>
    </a>
  </div>
</div>
@includeif('partials._live_chat')

@includeif('partials._footer')

</body>
</html>
