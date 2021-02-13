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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#previd">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.phpindiadata.php">India's Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contactid">contact</a>
      </li>
    </ul>
    
  </div>
</nav>

<!--Corona Update Section-->
<section class="corona_update container-fluid">
    <div class="my-3">
        <h3 class="text-uppercase text-center">State-wise Cases and Records</h3>
    </div><hr>
    
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center" id="tbval">
        <tr>
          <th>Last updated Time</th>
          <th>State</th>
          <th>Confirmed Cases</th>
          <th>Active Cases</th>
          <th>Recovered Cases</th>
          <th>Deaths</th>
        </tr>
        
        <?php
            $data = file_get_contents('https://api.covid19india.org/data.json');
            $coronadata = json_decode($data, true); // true has been written to convert the object into associative array
            
            // echo "<pre>";
            // print_r($coronadata);
            // echo "</pre>";

            $totalStates = count($coronadata['statewise']);
            $i = 1;
            while($i < $totalStates ){
              ?>  
                <tr>
                  <td><?php echo $coronadata['statewise'][$i]['lastupdatedtime'];  ?></td>
                  <td><?php echo $coronadata['statewise'][$i]['state']; ?> </td>
                  <td><?php echo $coronadata['statewise'][$i]['confirmed']; ?> </td>
                  <td><?php echo $coronadata['statewise'][$i]['active']; ?> </td>
                  <td><?php echo $coronadata['statewise'][$i]['recovered']; ?> </td>
                  <td><?php echo $coronadata['statewise'][$i]['deaths']; ?> </td>
                </tr>
              <?php
              $i++;
            }
        ?>
      </table>
    </div>
</section>


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
  
  
</script>
</body>
</html>