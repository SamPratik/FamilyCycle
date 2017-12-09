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
    <div class="container">
      <h2 style="color:#1abc9c;font-weight:bold;padding-bottom:20px;">Contacts</h2>
      <a class="col-md-6 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/medical-doctor/color/250/000000">
        </div>
        <div>
          <h3>Doctor's List</h3>
        </div>
      </a>
      <a class="col-md-6 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/ambulance/color/250/000000">
        </div>
        <div>
          <h3>Ambulance</h3>
        </div>
      </a>
    </div>

    <div class="container">
      <a class="col-md-6 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/pill/color/250/000000">
        </div>
        <div>
          <h3>Medicine</h3>
        </div>
      </a>
      <a class="col-md-6 af-links">
      {{-- <div class="col-md-4" style="box-shadow:0px 0px 10px black;border-radius:10px;"> --}}
        <div>
          <img src="https://png.icons8.com/hospital/dusk/250/000000">
        </div>
        <div>
          <h3>Hospital's List</h3>
        </div>
      </a>
    </div><br />

  </div>
  @includeif('partials._live_chat')
  @includeif('partials._footer')
</body>
