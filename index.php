<!DOCTYPE html>
<html>
<head>
<title></title>
<?php include 'links.php';?>
<?php include 'css/style.php';?>
</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5"href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
     
      
    </ul>
    
  </div>
</nav>
<div class="main_header">
   <div class="row w-100 h-100">
      <div class="col-lg-5 col-md col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
          <img src="images/eksath.png" width="300" height="300">
        </div>
     </div>
      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1>Let's Stay Safe & Fight Together Against Cor <span class="corona_rotate"><img src="images/images.png" width="100" height="100"></span> na Virus</h1>
        </div>
      </div>  
   </div>
</div>

<!-------corona Latest updates---------------------------->
<section class="corona_update container-fluid">
 <div class="mb-3">
   <h3 class="text-center">COVID-19 UPDATES</h3>
 </div>
 <div class="table-responsive">
   <table class="table-bordered table-stripped text-center" id="tbval">
     <tr> 
       <th>Country</th>
       <th>TotalConfirmed</th>
       <th>Totalrecovered</th>
       <th>TotalDeaths</th>
       <th>TotalDeaths</th>
       <th>NewRecovered</th>
       <th>NewDeaths</th>
     </tr>
   </table>
 </div>
 <!-------
 <div class="d-flex justify-content-around align-items-center">
    <div>
      <h1 class="count">1,23,524</h1>
      <p>Passengers screened at airport</p>
    </div>

    <div>
      <h1 class="count">524</h1>
      <p>Active covid cases*</p>
    </div>

    <div>
      <h1 class="count">100</h1>
      <p>Discharged cases</p>
    </div>

    <div>
      <h1 class="count">40</h1>
      <p>Deaths</p>
    </div>
  </div>------>    
</section>

<!-----------about section---------------->
<div class="container_fluid sub_section pt-5 pb-5"id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
  <h1>About COVID-19<h1>
  </div>
  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5">
      <img src="images/about.jpg" class="img-fluid">
    </div>
  
    <div class="col-lg-6 col-md-6 col-12">
      <h2>What is COVID-19(Corona-Virus)</h2>
      <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.This virus was unknown before the outbreak begab in Wuhan,China in December 2019.</p>
      <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
    </div>
  </div>
</div>
<!----------cororna symtopms------------>
<div class="container_fluid pt-5 pb-5"id="sympid">
  <div class="section_header text-center mb-5 mt-4">
  <h1>Coronavirus Symptoms<h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
        <img src="images/cough.png" class="img-fluid" width="120" height="120">
        <figcaption>COUGH</figcaption>
        </figure>
      </div>  

      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
        <img src="images/RUNNYNOSE.jpg" class="img-fluid" width="120" height="120">
        <figcaption>RUNNY NOSE</figcaption>
        </figure>
      </div>  

      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
        <img src="images/FEVER.jpg" class="img-fluid" width="120" height="120">
        <figcaption>FEVER</figcaption>
        </figure>
      </div>  

      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
        <img src="images/cold.jpg" class="img-fluid" width="120" height="120">
        <figcaption>COLD</figcaption>
        </figure>
      </div>  

      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
        <img src="images/tired.jpg" class="img-fluid" width="120" height="120">
        <figcaption>TIREDNESS</figcaption>
        </figure>
      </div>  

      <div class="col-lg-4 col-md-4 col-12 mt-5">
         <figure class="text-center">
        <img src="images/breath.jpg" class="img-fluid" width="120" height="120">
        <figcaption>DIFFICULTY BREATHING</figcaption>
        </figure>
      </div>  
</div>  


<!---------------prevention------------->
<div class="container_fluid sub_section pt-5 pb-5"id="preventid">
  <div class="section_header text-center mb-5 mt-4">
  <h1>6 Steps Prevention Against CoronoVirus<h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/handwash.jpg" class="img-fluid" width="90" height="90">
         </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
      <figcaption>Wash your hands regularly.</figcaption>
      </div>  
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/tv.jpg" class="img-fluid" width="90" height="90">
         </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
      <figcaption>Be updates with all the information.</figcaption>
      </div>  
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/hosp.jpg" class="img-fluid" width="90" height="90">
         </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
      <figcaption>Dont be careless at this point of time.</figcaption>
      </div>  
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/dist.jpg" class="img-fluid" width="90" height="90">
         </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
      <figcaption>Practice social distancing with extreme importance.</figcaption>
      </div>  
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/home.jpg" class="img-fluid" width="90" height="90">
         </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
      <figcaption>Stay at home and be safe.</figcaption>
      </div>  
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/mask.jpg" class="img-fluid" width="90" height="90">
         </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
      <figcaption>Cover your mouth and nose with a mask.</figcaption>
      </div>  
      </div>
    </div>
  </div>      
 </div> 
<!-----------contactus----------------->
 <div class="container_fluid pt-5 pb-5"id="contactid">
  <div class="section_header text-center mb-5 mt-4">
  <h1>Contact us ASAP<h1>
  </div>
  <div class="container">
    <div class="row">
    <div class="col-lg-8 offset-lg-2 col-12">
    <form action="" method="POSt">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"name="email" placeholder="name@example.com" autocomplete="off"  required>
  </div>
    
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>  

  <div class="form-group">
   <label>Select Symptoms</label><br>
    
    <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customcheckbox1"" name="coronasym[]" value="Cold">
      <label class="custom-control-label" for="customcheckbox1">Cold</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customcheckbox2"" name="coronasym[]" value="Fever">
      <label class="custom-control-label" for="customcheckbox2">Fever</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="Feeling Weak">
      <label class="custom-control-label" for="customcheckbox3">Feeling Weak</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="Tiredness">
      <label class="custom-control-label" for="customcheckbox4">Tiredeness</label>
    </div>
  </div>
    <div class="form-group">
     <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        </div>
      </div>  
  </div>
 </div>
<!------------top cursor--------->
<div class="container scrolltop float-right pr-5">
   <i class="fa fa-arrow-up" onclick-"topFunction()" id="myBtn"></i>
</div>

 <!--------------------footer----------------------------->
 <footer class="mt-5">
   <div class="footer_style text-white text-center container-fluid">
   <p>Copyright by Rovers Team</p>
  </div>


 <!------------<div class="container_fluid  pt-5 pb-5"id="contactid">
  <div class="section_header text-center mb-5 mt-4">
  <h1>6 Steps Prevention Against CoronoVirus<h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
    <form>------------->
</footer>
<script type="text/javascript">

$('.count').counterUp({
  delay:10,
  time:3000
})

myButton=document.getElementById("myBtn");
window.onscroll=function(){scrollFunction()};
function scrollFunction(){
  if(document.body.scrollTop>100 || documentElement.scrollTop>100 ){
    mybutton.style.display="block";
  }
  else{
    mybutton.style.display="none";
  }
}
function.topFunction(){
  document.body.scrollTop=0;
  document.documentElement.scrollTop=0;
}

</script>
<body>
</html>

<?php
include 'dbcon.php'

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $symp=$_POST['coronasym'];
  $msg=$_POST['msg'];

  $chk="";

  foreach($symp as $chk1){
    $chk.= $chk1.",";
  }
} 
  $insertquery="insert into coronacase(	username,	email,	mobile	,symp	,message	) values('$username','$email','$mobile','$chk','$msg')";
  $query=mysqli_query($con,$insertquery);
 
  if($query){
    ?>
  <script>
      alert("inserted successful");
  </script>
    <?php>
  }else{
    ?>
    <script>
      alert("No insertion");
    </script>
    <?php>
  }