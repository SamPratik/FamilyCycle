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
          <img src="https://png.icons8.com/error/color/150/000000">
        </div>
        <div>
          <h3>Boundary Problems</h3>
        </div>
      </a>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/heart/color/150/000000">
        </div>
        <div>
          <h3>Intimacy</h3>
        </div>
      </a>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/collaboration/color/150/000000">
        </div>
        <div>
          <h3>Communication</h3>
        </div>
      </a>
    </div><br />
    <div class="row">
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/couple/dusk/150/000000">
        </div>
        <div>
          <h3>Better Sexual Life</h3>
        </div>
      </a>
      <a class="col-md-4 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/health-checkup/office/150/000000">
        </div>
        <div>
          <h3>Health Issues</h3>
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
    </div><br />
  </div>
  @includeif('partials._footer')
</body>
