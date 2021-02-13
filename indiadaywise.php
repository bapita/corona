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
        <a class="nav-link" href="indiadata.php" target="_blank">India's Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php" target="_blank">Day Wise Live-data</a>
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
        
        
        <?php
            $data = file_get_contents('https://api.covid19india.org/data.json');
            $daywise = json_decode($data, true); // convert data into associative array from stdClass Object 
            $number = count($daywise['cases_time_series']);

            $i = 0;
            while($i < $number ){
              ?>  
                <tr>
                  <th class="text-left">Date & Month</th>
                  <th colspan="5"> </th>
                </tr>
                <tr>
                    <td colspan="6" class="text-left"> <?php echo $daywise['cases_time_series'][$i]['date']."<br>"; ?></td>
                </tr>
                <tr class="text-capitalize text-white">
                    <th style=" color: #fff; background: #2196f3;">Total Confirmed</th>
                    <th style=" color: #fff; background: #ffc107;">Daily Confirmed</th>
                    <th style=" color: #fff; background: #008C76FF;">Daily Recovered</th>
                    <th style=" color: #fff; background: #e91e7f;">Daily Deceased</th>
                    <th style=" color: #fff; background: #4caf50;">Total Recovered</th>
                    <th style=" color: #fff; background: #EE2737FF;">Total Deceased</th>
                </tr>
                <tr class="mb-5">
                <td style=" background: #bed2f3;"> <?php echo $daywise['cases_time_series'][$i]['totalconfirmed']."<br>"; ?></td> 
                <td style=" background: #ffe493;"> <?php echo $daywise['cases_time_series'][$i]['dailyconfirmed']."<br>"; ?></td>
                <td style=" background: #9ED9CCFF;"> <?php echo $daywise['cases_time_series'][$i]['dailyrecovered']."<br>"; ?></td>
                <td style=" background: #fc95c6;"> <?php echo $daywise['cases_time_series'][$i]['dailydeceased']."<br>"; ?></td>
                <td style=" background: #88d28b;"> <?php echo $daywise['cases_time_series'][$i]['totalrecovered']."<br>"; ?></td>
                <td style=" background: #fb99a1;"> <?php echo $daywise['cases_time_series'][$i]['totaldeceased']."<br>"; ?></td>
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