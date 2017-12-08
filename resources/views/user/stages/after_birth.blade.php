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
          <img src="https://png.icons8.com/babys-room/office/150/000000">
        </div>
        <div>
          <h3>Baby Nutrition</h3>
        </div>
      </a>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/mother/office/150/000000">
        </div>
        <div>
          <h3>Mother Nutrition</h3>
        </div>
      </a>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/syringe/dusk/150/000000">
        </div>
        <div>
          <h3>Vaccination</h3>
        </div>
      </a>
    </div>
    <div class="row">
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/health-book/color/150/000000">
        </div>
        <div>
          <h3>Diseases</h3>
        </div>
      </a>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/compact-camera/color/150/000000">
        </div>
        <div>
          <h3>Photo Album</h3>
        </div>
      </a>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/read/color/150/000000">
        </div>
        <div>
          <h3>Guidelines</h3>
        </div>
      </a>
    </div>
    <div class="row">
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/calculator/color/150/000000">
        </div>
        <div>
          <h3>Calculators</h3>
        </div>
      </a>
    </div>
  </div>
  @includeif('partials._footer')
</body>
