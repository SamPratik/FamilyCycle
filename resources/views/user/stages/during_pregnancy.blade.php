@includeif('partials._header')
<style media="screen">
  footer {
    position: relative;
    top:100px;
  }
  h2 {
    color: black;
  }
  a.af-links {
    display: block;
    text-decoration: none;
    color:#1abc9c;
    cursor: pointer;
    background-color: white;
    -webkit-transition: background-color .5s linear;
    transition: background-color .5s linear, color .5s linear;
  }
  a.af-links:hover {
    background-color: #1abc9c;
    color: white;
  }
</style>
<body>
  @includeif('partials._navbar')

  <div class="container text-center" style="position:relative;top:100px;">
    <div class="row">
      <h2 style="color:#1abc9c;font-weight:bold;padding-bottom:20px;">Our Services</h2>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/sneeze/ultraviolet/150/000000">
        </div>
        <div>
          <h3>Symptoms</h3>
        </div>
      </a>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/worker/color/150/000000">
        </div>
        <div>
          <h3>Labor & Delivery</h3>
        </div>
      </a>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/calendar/color/150/000000">
        </div>
        <div>
          <h3>Week by week</h3>
        </div>
      </a>
    </div><br />
    <div class="row">
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/vegetarian-food/color/150/000000">
        </div>
        <div>
          <h3>Health & Nutrition</h3>
        </div>
      </a>
      <a class="col-md-4 af-links" href="{{ route('user.ab.posts.index') }}">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/help/office/150/000000">
        </div>
        <div>
          <h3>Complications</h3>
        </div>
      </a>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/baby/office/150/000000">
        </div>
        <div>
          <h3>C Section Birth</h3>
        </div>
      </a>
    </div><br />
  </div>
  @includeif('partials._footer')
</body>
