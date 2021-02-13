<?php

  $data = file_get_contents('https://api.covid19api.com/summary');
  $coronadata = json_decode($data, true);
//   echo "<pre>";
//   print_r($coronadata);
//   echo "</pre>";
$value = $coronadata['Global']['NewConfirmed'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona- Live updates</title>
    <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#previd">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadata.php" target="_blank">India's Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
    </ul>
    
  </div>
</nav>
<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-1">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="https://www.bjuinternational.com/wp-content/uploads/2020/04/coronavirus-1024x1024.png" width="300" height="300">
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-2">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rotate"><img src="https://www.bjuinternational.com/wp-content/uploads/2020/04/coronavirus-1024x1024.png" width="100" height="100"></span>na Virus</h1>
            </div>
        </div>
    </div>
</div>

<!--Corona Update Section-->
<section class="corona_update container-fluid">
    <div class="mb-3">
        <h3 class="text-uppercase text-center">covid-19 updates</h3>
    </div><hr>
    <div class="d-flex justify-content-around align-items-center count_style">
        <div>
            <h1 class="count">
                500
            </h1>
            <p>Passengers scrrened at Airport</p>
        </div>
        <div>
            <h1 class="count">
            20
            </h1>
            <p>Active Covid-19 cases*</p>
        </div>
        <div>
            <h1 class="count">
            33  
            </h1>
            <p>Cured / Discharged cases*</p>
        </div>
        <div>
            <h1 class="count">
            41  
            </h1>
            <p>Death Cases</p>
        </div>
    </div>
    <br><hr>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center" id="tbval">
        <tr>
          <th>Country</th>
          <th>Total confirmed</th>
          <th>Total Recovered</th>
          <th>Total Deaths</th>
          <th>New Confirmed</th>
          <th>New Recovered</th>
          <th>New Deaths</th>
        </tr>
      </table>
    </div>
</section>

<!--About Section-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section_header text-center mb-5 mt-5">
    <h1>About COVID-19</h1>
  </div>

  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/3D_medical_animation_coronavirus_structure-Tamil.png" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2>What is COVID-19 (Corona Virus) ?</h2>
      <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus</p>
      <p>The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces</p>
    </div>
  </div>
</div>

<!--Corona symptoms-->
<div class="container-fluid pt-5 pb-5" id="sympid">
  <div class="section_header text-center mb-5 mt-5">
    <h1>Corona Virus Symptoms</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_cough-128.png" class="img-fluid">
        <figcaption>Cough</figcaption>
        </figure>
      </div>
      
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_runny_nose-128.png" class="img-fluid">
        <figcaption>Runny Nose</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_fever-128.png" class="img-fluid">
        <figcaption>Fever</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_headache-128.png" class="img-fluid">
        <figcaption>Headache</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_inhalation-128.png" class="img-fluid">
        <figcaption>Breathlessness</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_cough-128.png" class="img-fluid">
        <figcaption>Cold</figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>
  <!--Prevention against Corona-->
<div class="container-fluid sub_section pt-5 pb-5" id="previd">
  <div class="section_header text-center mb-5 mt-5">
    <h1>6 Steps Prevention Against Corona</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_soap-128.png" class="img-fluid">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Wash your hands for 20 seconds and use alcohol based sanitizers to clean hands regulary.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_mask-128.png" class="img-fluid">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Wear Mask.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_handshake-128.png" class="img-fluid">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Avoid Handshake</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_touch_mask-128.png" class="img-fluid">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>do not touch mask.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_distancing-128.png" class="img-fluid">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Keep Social Distance</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="https://cdn4.iconfinder.com/data/icons/stop-virus-outline-iconset/128/ic_touching_eyes-128.png" class="img-fluid">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
            <p>Do not touch eyes.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!--Contact us section-->
<div class="container-fluid pt-5 pb-5" id="contactid">
  <div class="section_header text-center mb-5 mt-5">
    <h1>About COVID-19</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
      <!--form begins here-->
  <form>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Name</label>
      <input type="text" name="username" class="form-control" placeholder="Enter your Name" required autocomplete="off">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required autocomplete="off">
    </div>
    
  </div>
  <div class="form-group">
    <label for="inputAddress">Mobile</label>
    <input type="number" class="form-control" name="mobile" maxlength="10" required autocomplete="off" >
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Apartment, studio, or floor" required autocomplete="off">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text"  name="city" class="form-control" id="inputCity" required autocomplete="off">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="state" class="form-control" required autocomplete="off">
        <option selected>Choose...</option>
        <option>J&K</option>
        <option>Himachal Pradesh</option>
        <option>Punjab</option>
        <option>Haryana</option>
        <option>Uttrakhand</option>
        <option>Rajasthan</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="number" class="form-control" name="zip" id="inputZip" required autocomplete="off">
    </div>
  </div>
  <div class="form-group">
    <label>Select Symptoms</label><br>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
      <label for="customcheckbox1" class="custom-control-label">Cold</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
      <label for="customcheckbox2" class="custom-control-label">Fever</label>
    </div>  

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
      <label for="customcheckbox3" class="custom-control-label">Breathlessness</label>
    </div> 

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
      <label for="customcheckbox4" class="custom-control-label">Feeling weak</label>
    </div>

  </div>
  </div>
  <button type="submit" name="sumbit" class="btn btn-primary">Send</button>
</form>
  </div>
  </div>
  </div>
</div> 
<!--Top Cursor design-->
  <div class="container scrolltop float-right pr-5">
  <i class="fas fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
<!--Footer section-->
    </div>
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright@BapitaRoy</p>
  </div>
</footer>

<!--Script tag for animation-->
<script type="text/javascript">

    // for counting the numbers (using jQuery counter-up and waypoints plug-in)
  $('.count').counterUp({
    delay:10,
    time: 3000
  })
  // To give the functionality for reaching top
  var mybutton = document.getElementById("myBtn");
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
      mybutton.style.display = "block";
    }else{
      mybutton.style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0; // to get back to the top of the website
    document.documentElement.scrollTop = 0;
  }
  
  // to load the table data 
  
  function fetch(){
    $.get("https://api.covid19api.com/summary",

      function (data){
        //console.log(data['Countries'].length);
        var tbval = document.getElementById("tbval");
        for(i=1; i< (data['Countries'].length); i++){
          var x= tbval.insertRow();
          x.insertCell(0);
          tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
          tbval.rows[i].cells[0].style.background = '#7a4a91';
          tbval.rows[i].cells[0].style.color = '#fff';

          x.insertCell(1);
          tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
          tbval.rows[i].cells[1].style.background = '#4bb7d8';
          tbval.rows[i].cells[1].style.color = '#fff';

          x.insertCell(2);
          tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
          tbval.rows[i].cells[2].style.background = '#006400';
          tbval.rows[i].cells[2].style.color = '#fff';

          x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
          tbval.rows[i].cells[3].style.background = '#FF0000';
          tbval.rows[i].cells[3].style.color = '#fff';

          x.insertCell(4);
          tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
          tbval.rows[i].cells[4].style.background = '#4bb7d8';
          tbval.rows[i].cells[4].style.color = '#fff';

          x.insertCell(5);
          tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
          tbval.rows[i].cells[5].style.background = '#006400';
          tbval.rows[i].cells[5].style.color = '#fff';

          x.insertCell(6);
          tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
          tbval.rows[i].cells[6].style.background = '#FF0000';
          tbval.rows[i].cells[6].style.color = '#fff';
        }
      }
      );
  }

</script>
</body>
</html>