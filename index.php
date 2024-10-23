<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/main.css" rel="stylesheet">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title> HOME NURSING CARE</title>
  </head>
<style>
  html,body{
    width: 100%;
    overflow-x:hidden;
  }
@media only screen and (min-height: 932px) and (orientation: portrait){
    img.img-fluid.animated {
        width: 426px;
    }
    #msform {
        width: 625px;
        margin: 50px auto;
        text-align: center;
        position: relative;
    }
}

#heading{
  color:black; 
  font-size: 35px;
    font-weight: 700;
    line-height: 40px;"
 }


 @media screen and (min-width: 501px) and (max-width: 999px){
  #heading{
  color:black; 
  font-size: 25px;
    font-weight: 700;
    line-height: 40px;"
 }
 .row {
    width: 501px;
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y)* -1);
    margin-right: calc(var(--bs-gutter-x)* -.5);
    margin-left: calc(var(--bs-gutter-x)* -.5);
}
#card{
  width: 450px;
}
#gallery{
width: 550px;
}
.row.gy-4 {
    margin-top: 30px;
}
.col-12.col-sm-6 {
    margin-top: 40px;
}

 }
/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
	height: 100%;
	/*Image only BG fallback*/
	
	/*background = gradient + image pattern combo*/
	background: 
		linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
}

body {
	font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
	width: 372px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
section.py-5.py-xl-8 {
    background-color: #1cb7c7;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 7px;
	box-shadow: 0 0 10px 1px rgb(157 146 146 / 23%);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 132%;
	/* margin: 0 10%; */
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px;
	margin: 10px 5px;
  text-decoration: none;
  font-size: 14px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}

select {
    width: 100%;
    height: 40px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
#service1{
  margin-top:7px ;
}
[data-aos][data-aos][data-aos-delay="200"].aos-animate, body[data-aos-delay="200"] [data-aos].aos-animate {
    transition-delay: .2s;
    width: 100%;
    }
    div#PORTEA {
    width: 352px;
}
@media only screen and (max-width: 600px){
  #msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 7px;
    box-shadow: 0 0 10px 1px rgb(157 146 146 / 23%);
    padding: 20px 30px;
    box-sizing: border-box;
    width:114%;
    /* margin: 0 10%; */
    position: relative;
} 

}
@media screen and (max-width: 500px) {
  #msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 7px;
    box-shadow: 0 0 10px 1px rgb(157 146 146 / 23%);
    padding: 20px 30px;
    box-sizing: border-box;
    width:87%;
    /* margin: 0 10%; */
    position: relative;
}
div#PORTEA {
    width: 290px;
}
.col-12 {
        flex: 0 0 auto;
        width:90%;
    }
    
.overflow-hidden {
    overflow: hidden !important;
    padding: 5px;
}
#heading {
    color: black;
    font-size: 21px;
    font-weight: 700;
    line-height: 40px;
}
div#rows-1 {
    display: block;
    width: 375px;
    margin:0em;
}
img.img-fluid.animated {
        width: 296px;
        padding: 14px;
    }
    .cards {
      
          width: 373px;
    display: flex;
    flex-direction: row;
    align-content: stretch;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
   
}
.col-lg-2 {
    padding: 19px;
    flex: 0 0 auto;
    width:31.666667%;
}
.text-center {
    text-align: center !important;
    font-size: 30px;
}

    .text-secondary {
    color: #6c757d !important;
    font-size: 14px;
}
.cards {
        margin:2em;
    display: flex;
    flex-direction: row;
    align-content: stretch;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
div#PORTEA {
    width: 289px;
}
.card-title {
    margin: 0%;
    text-align: center;
  
    color: black;
    height: 60px;
    padding-top: 13px;
}
@media only screen and (max-width: 600px){
  .col-lg-2 {
    padding: 4px;
    flex: 0 0 auto;
    width: 88.666667%;
}
#OTHER{
 
    width: 482px;

}
.col-12 {
    
  margin: 1em;
        flex: 0 0 auto;
        width: 80%;
    }

#card {
  width: 270px;
}
img.img-fluid {
    width: 279px;
}
.justify-content-center {
    WIDTH: 379px;
    justify-content: center !important;
}
.col-12.col-md-6.col-lg-4 {
    margin: 1em;
}
.h-100 {
  margin: 1em;
    height: 93%  !important;
    width: 275px;
}
.container-fluid {
    margin-left: -16px;
}
.row.gy-3.gy-md-4 {
    margin-left: -48px;
}
}
.col.mb-5 {
    width: 355px;
}
.text-center {
    text-align: center !important;
    font-size: 17px;
}

.card-image {
    width: 81px;
    height: 87px;
}
button.btn.btn-outline-primary.btn-rounded {
    margin: 20px;
}
#img-gall{
  width: 361px;
}
@media only screen and (max-width: 600px){
#img-gall {
    width: 280px;
}
}

</style>

  <body>
  <?php include 'header.php';
     ?>

<section id="hero" class="hero section" style="background-image:url('assets/img/f2f61a10-bg-1_10000001ha0lg001000028.png');  background-repeat: no-repeat;  background-size: cover;">
<div class="container">
  <div class="row">
    <div class="col">
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/Header-vector-yellow.webp" class="img-fluid animated" >
    </div>
    </div>
    <div class="col">
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
    <!-- multistep form -->
<form id="msform" action="homeform.php" method="post">
  <!-- progressbar -->
 
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Get a Call From Us</h2>
    <input type="text" name="Name" placeholder="Name" />
    <input type="text" name="email" placeholder="Email" />
    <input type="tel" name="phone" placeholder="Phone Number"  tabindex="3"  />
     <select name="City">
<option value="1">Select City</option>
  <option value="mumbai">Mumbai</option>
  <option value="delhi">Delhi</option>
  <option value="bengaluru">Bengaluru</option>
  <option value="hyderabad">Hyderabad</option>
  <option value="chennai">Chennai</option>
  <option value="kolkata">Kolkata</option>
  <option value="pune">Pune</option>
  <option value="ahmedabad">Ahmedabad</option>
  <option value="jaipur">Jaipur</option>
  <option value="lucknow">Lucknow</option>
  <option value="kanpur">Kanpur</option>
  <option value="nagpur">Nagpur</option>
  <option value="bhopal">Bhopal</option>
  <option value="patna">Patna</option>
  <option value="thiruvananthapuram">Thiruvananthapuram</option>
  <option value="kochi">Kochi</option>
  <option value="indore">Indore</option>
  <option value="guwahati">Guwahati</option>
  <option value="surat">Surat</option>
  <option value="visakhapatnam">Visakhapatnam</option>
</select>
<select name="Service" id="service1">
<option value="1">Select Service</option>
<option value="skilled-nursing-care">Attendants</option>
    <option value="personal-care">Nurses</option>
    <option value="chronic-illness-management">Physiotherapy</option>
    <option value="post-operative-care">Injections</option>
    <option value="palliative-care">Elderly Care</option>
    <option value="rehabilitation-services">Baby Care</option>
</select>
<br><br>
<button name="submit" type="submit" id="contactus-submit" data-submit="...Sending" class="btn btn-primary" ><i id="icon" class=""></i> Send Now</button>      
  </fieldset>
 
</form>
    </div>
  </div>


</section>

<section style="background-color:#160b0bfc;padding:30px;color:white; 	text-align: justify;">
Our team is composed of experienced and licensed healthcare professionals, including skilled nurses, caregivers, therapists, and home health aides, all of whom are passionate about providing the best possible care. Each member of our team is carefully selected and thoroughly trained to meet the highest professional standards, ensuring that our patients receive exceptional care with a personal touch. We recognize that every patient’s situation is unique, and we are committed to developing customized care plans tailored to meet the specific needs of each individual, whether it’s short-term assistance following surgery or long-term care for a chronic condition.

Our services range from skilled nursing care, which includes medication management, wound care, and post-operative recovery, to personal care assistance for activities of daily living such as bathing, dressing, and mobility support. We also specialize in chronic illness management, offering comprehensive care for patients with conditions like diabetes, heart disease, and COPD. In addition, we provide rehabilitation services, including physical, occupational, and speech therapy, to help patients regain independence and improve their overall well-being.


</section>
<!-- Service 9 - Bootstrap Brain Component -->

<!-- Service 9 - Bootstrap Brain Component -->

<section class="py-5">
    <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center fw-bold">AVAILABLE FOR RENT AND PURCHASE</h2>
         <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/1.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">ANEROID SPHYGMOMANOMETERS</h5>
                                    <!-- Product price-->
                                    ₹40.00 - ₹80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="https://wa.link/am3wzj">WhatsApp Us</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/stethoscopes-rubber-tubing-sounds-patient-ears-physician.webp" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">STETHOSCCOPE</h5>
                                    <!-- Product reviews-->
                                   
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">₹20.00</span>
                                    ₹18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="https://wa.link/am3wzj">WhatsApp Us</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/3.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">HOT WATER BAG</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">₹50.00</span>
                                    ₹25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="https://wa.link/am3wzj">WhatsApp Us</a></div>
                          
                              </div>
                        </div>
                      </div>
                      
                    </div>
                    <center><button type="button" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-init  data-mdb-ripple-color="dark"> <a href="Product.php" style="text-decoration:none; ">EXPLORE MORE</a></button></center>
            </div>
        </section>
        <!-- Service 9 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">HOME CARE SOLUTIONS</h2>
       
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="container-fluid">
          <div class="row gy-3 gy-md-4">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-dark">
                <div class="card-body text-center p-4 p-xxl-5">
                <img class="card-image" src="assets/icon/nurse-8834166_1280.png" alt="Card image cap">
                  
                  <h4 class="mb-4"> NURSING</h4>
                  <p class="mb-4 text-secondary"> comfort of your own home with our professional nursing services. Our team of skilled and compassionate nurses is dedicated to helping patients manage their health conditions,receive ongoing care for chronic illnesses.</p>
                
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-dark">
                <div class="card-body text-center p-4 p-xxl-5">
                <img class="card-image" src="assets/icon/sales-management.png" alt="Card image cap">
                  <h4 class="mb-4">SALE</h4>
                  <p class="mb-4 text-secondary">Don’t miss out on our exclusive sale event! Whether you’re looking for the latest trends or everyday essentials, now’s the time to shop and save. Enjoy huge discounts on a wide range of products, all at unbeatable prices.</p>
                 
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-dark">
                <div class="card-body text-center p-4 p-xxl-5">
                    <img class="card-image" src="assets/icon/deal.png" alt="Card image cap">
                  <h4 class="mb-4">AVAILABLE FOR RENT</h4>
                  <p class="mb-4 text-secondary"> Our medical equipment is available for rent Our home care nursing services are now available for rent, offering personalized and professional care in the comfort of your own home.compassionate nurses are here to help. </p>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <center><button type="button" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-init  data-mdb-ripple-color="dark"> <a href="https://wa.link/am3wzj" style="text-decoration:none; ">Book Now</a></button></center>
</section>

<!-- Service 1 - Bootstrap Brain Component -->
<section class="py-5 py-xl-8 ">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-2 display-2 text-center">OUR OTHER SOLUTIONS</h2>
       
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container overflow-hidden">
    <div class="row " id="OTHER">
      <div class="col-12 col-sm-2 col-lg-2" id="SOLUTIONS">
        <div class="text-center px-xl-1">
          <img src="assets/img/specialty-care-1-modified.png" width="80px">
          <h5 class="m-2">Sepciality Care</h5>
                </div>
      </div>
      <div class="col-12 col-sm-2 col-lg-2">
        <div class="text-center px-xl-2">
         <img src="assets/img/eafd1457-013a-4d43-a14c-4dd1c6321155-modified.png"width="80px">
          <h5 class="m-2">Diabetes Solutions</h5>
           </div>
      </div>
      <div class="col-12 col-sm-2 col-lg-2">
        <div class="text-center px-xl-2">
         <img src="assets/img/k-modified.png" width="80px">
          <h5 class="m-2">Health Prime</h5>
        </div>
      </div>
      <div class="col-12 col-sm-2 col-lg-2">
        <div class="text-center px-xl-2">
          <img src="assets/img/attentive-focused-bearded-young-caucasian-male-doctor-with-stethoscope-bending-upset-man-modified.png"width="80px">
          <h5 class="m-2">Trained Attendants</h5>
          </div>
      </div>
      <div class="col-12 col-sm-2 col-lg-2">
        <div class="text-center px-xl-2">
          <img src="assets/img/AdobeStock_333964423-1200x800-modified.png"width="80px">
          <h5 class="m-2">Medical Equipment</h5>
          </div>
      </div>
      <div class="col-12 col-sm-2 col-lg-2">
        <div class="text-center px-xl-2">
          <img src="assets/img/kk-modified.png"width="80px">
          <h5 class="m-2">Speciality Pharma</h5>
          </div>
      </div>
    </div>
  </div>
  <br>
  <center><button type="button" class="btn btn-outline-light btn-rounded" data-mdb-ripple-init  data-mdb-ripple-color="dark"> <a href="https://wa.link/am3wzj" style="text-decoration:none;color:black; ">Book Now</a></button></center>
</section>




<section class="sect-2st">
    <div class="container">
  <div class="row" id="rows-1">
    <div class="col " id="about1">
      <h6  id="heading">ABOUT<br> OUR HOME <span style="color:#4ab2dd">NURSING CARE </span></h6>
     <p> Welcome To Our high-quality home nursing care
 Our dedicated team of skilled nurses is committed to delivering personalized care that promotes the health, dignity, and independence of our clients. From routine check-ups to specialized medical support, we offer a comprehensive range of services designed to accommodate various health needs.</p>
 <button  class="btn btn-primary"><a class="link-opacity-10" href="http://localhost/Nursing/About.php"  style="color:#f2f2f2; text-decoration:none; ">EXPLORE MORE</a>  </button>
    </div>
    <div class="col">
    <div class="col-lg-6 order-1 order-lg-2 hero-img1"  data-aos-delay="200" >
      <img src="assets\img\g1.jpg" class="img-fluid animated" alt="" id="img1"style="
  max-width: 218%;
  height: auto;  
  border-radius: 25px;

">
    </div>
    </div>
  </div>
</section>
<!-- Service 5 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container overflow-hidden">
    <div class="row gy-4 gy-md-5 gy-lg-0 align-items-center">
      <div class="col-12 col-lg-5">
        <div class="row">
          <div class="col-12 col-xl-11">
            <h3 class="fs-6 text-secondary mb-3 mb-xl-4 text-uppercase">What are Home Care Services?</h3>
            <h2 class="display-5 mb-3 mb-xl-4">Care in the comfort of your own home</h2>
            <p class="mb-3 mb-xl-4">Home care services cover a range of care services, such as nursing, physiotherapy, occupational therapy, and basic personal care such as showering, in the comfort of home. Home care services aim to support elderly, disabled or ill individuals to continue living at home while receiving the care they need. Home care services also provide respite care when the domestic helper is on leave, professional housekeeping services, companionship, light meal preparation, and can provide services like running errands and grocery shopping.</p>
            <button  class="btn btn-primary"><a class="link-opacity-10" href="http://localhost/Nursing/Service.php"  style="color:#f2f2f2; text-decoration:none;">EXPLORE MORE</a>  </button>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-7 overflow-hidden">
        <div class="row " id="homeservice">
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
              <img src="assets/icon/icon-attendants.png">
                <h4 class="mb-4">Attendants</h4>
                <p class="mb-4 text-secondary">Our Attendants provide reliable assistance with personal care, mobility, and daily tasks, ensuring clients’ comfort and safety at home.</p>
                <button type="button" class="btn btn-primary"> <a href="https://wa.link/am3wzj" class="fw-bold text-decoration-none link-light">
                WhatsApp Us
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a></button>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
              <img src="assets/icon/icon-nurses.png">
                <h4 class="mb-4">Nurses</h4>
                <p class="mb-4 text-secondary">Our Nurses deliver skilled medical care, managing everything from wound care and IV therapy to medication administration.</p>
                <button type="button" class="btn btn-primary"> <a href="https://wa.link/am3wzj" class="fw-bold text-decoration-none link-light">
                WhatsApp Us
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a></button>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
              <img src="assets/icon/icon-physiotherapy.png">
                <h4 class="mb-4">Physiotherapy</h4>
                <p class="mb-4 text-secondary">Our Physiotherapy services focus on restoring mobility and strength, helping clients recover from injuries, surgeries, or manage chronic conditions,</p>
                <button class="btn btn-primary"> <a href="https://wa.link/am3wzj" class="fw-bold text-decoration-none link-light">
                WhatsApp Us
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg></button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
              <img src="assets/icon/icon-injection-on-call.png">
                <h4 class="mb-4">Injections</h4>
                <p class="mb-4 text-secondary">Our Injections service ensures safe and accurate administration of medications,   all performed by qualified healthcare professionals in the comfort of your home.</p>
                <button type="button" class="btn btn-primary"><a href="https://wa.link/am3wzj" class="fw-bold text-decoration-none link-light">
                WhatsApp Us
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg> 
                </a>
</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>
  <h1 class="text-center mb-0" style=" font-size: 28px;
    font-weight: 700;
    line-height: 40px; text-transform:uppercase;color:black;">Home Nursing Cere Gallery</h1>

<section class="photo-gallery">
    
  <div class="container" id="container-1">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid" id="gallery">
      <div class="col" >
        <a class="gallery-item" href="https://picsum.photos/id/251/1200/800.webp">
          <img src="assets\img\g1.jpg" class="img-fluid" alt="Lorem ipsum dolor sit amet" style="height: 300px;">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/678/1200/800.webp">
          <img src="assets\img\g6.png" class="img-fluid" id="img-gall" alt="Ipsum lorem dolor sit amet"  style=" height: 300px;">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/74/1200/800.webp">
          <img src="assets\img\g3.png" class="img-fluid" alt="Dolor lorem ipsum sit amet" style=" height: 300px;">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/92/1200/800.webp">
          <img src="assets\img\g2.jpg" class="img-fluid" alt="Sit amet lorem ipsum dolor"style=" height: 250px;">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/62/1200/800.webp">
          <img src="assets\img\img2.png" class="img-fluid" alt="Aut ipsam deserunt nostrum quo"style=" height: 250px;">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/575/1200/800.webp">
          <img src="assets\img\medium-shot-woman-bringing-tea-cup (1).jpg" class="img-fluid" alt="Nulla ex nihil eligendi tempora" style=" height: 250px;">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/110/1200/800.webp">
          <img src="assets\img\medium-shot-women-wearing-masks.jpg" class="img-fluid" alt="Nemo perspiciatis voluptatum"style=" height: 250px;">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/177/1200/800.webp">
          <img src="assets\img\nurse-talking-old-man-sitting-black-sofa.jpg" class="img-fluid" alt="Accusantium consequuntur modi"style=" height: 250px;">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/197/1200/800.webp">
          <img src="assets\img\nursing-homes.jpg" class="img-fluid"  id="img-gall" alt="Dolore asperiores reprehenderit"style=" height: 252px;">
        </a>
      </div>
    </div>
  </div>
</section>

<div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="lightbox-content">
          <!-- JS content here -->
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const html = document.querySelector('html');
html.setAttribute('data-bs-theme', 'dark');

const galleryGrid = document.querySelector(".gallery-grid");
const links = galleryGrid.querySelectorAll("a");
const imgs = galleryGrid.querySelectorAll("img");
const lightboxModal = document.getElementById("lightbox-modal");
const bsModal = new bootstrap.Modal(lightboxModal);
const modalBody = lightboxModal.querySelector(".lightbox-content");

function createCaption (caption) {
  return `<div class="carousel-caption d-none d-md-block">
      <h4 class="m-0">${caption}</h4>
    </div>`;
}

function createIndicators (img) {
  let markup = "", i, len;

  const countSlides = links.length;
  const parentCol = img.closest('.col');
  const curIndex = [...parentCol.parentElement.children].indexOf(parentCol);

  for (i = 0, len = countSlides; i < len; i++) {
    markup += `
      <button type="button" data-bs-target="#lightboxCarousel"
        data-bs-slide-to="${i}"
        ${i === curIndex ? 'class="active" aria-current="true"' : ''}
        aria-label="Slide ${i + 1}">
      </button>`;
  }

  return markup;
}

function createSlides (img) {
  let markup = "";
  const currentImgSrc = img.closest('.gallery-item').getAttribute("href");

  for (const img of imgs) {
    const imgSrc = img.closest('.gallery-item').getAttribute("href");
    const imgAlt = img.getAttribute("alt");

    markup += `
      <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
        <img class="d-block img-fluid w-100" src=${imgSrc} alt="${imgAlt}">
        ${imgAlt ? createCaption(imgAlt) : ""}
      </div>`;
  }

  return markup;
}

function createCarousel (img) {
  const markup = `
    <!-- Lightbox Carousel -->
    <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="true">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        ${createIndicators(img)}
      </div>
      <!-- Wrapper for Slides -->
      <div class="carousel-inner justify-content-center mx-auto">
        ${createSlides(img)}
      </div>
      <!-- Controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    `;

  modalBody.innerHTML = markup;
}

for (const link of links) {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const currentImg = link.querySelector("img");
    const lightboxCarousel = document.getElementById("lightboxCarousel");

    if (lightboxCarousel) {
      const parentCol = link.closest('.col');
      const index = [...parentCol.parentElement.children].indexOf(parentCol);

      const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
      bsCarousel.to(index);
    } else {
      createCarousel(currentImg);
    }

    bsModal.show();
  });
}
</script>


<!-- Gallery -->
</section>



<?php include 'footer.php';
     ?>




<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-f41335d6-281e-4ff7-80d5-02ca3f8226d9" data-elfsight-app-lazy></div>
  </body>
</html>



