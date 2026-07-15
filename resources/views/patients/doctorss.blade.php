<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

  <style>

.custom-card {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 40px;
  background: #fff;
  border-radius: 12px;
  padding: 40px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
  max-width: 1200px;
  height: 500px;
  margin: 50px auto;
  
}

.card-img {
  width: 320px;
  height: 420px;
  border-radius: 40%; 
  object-fit: cover;
  flex-shrink: 0;
}

.card-text {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 20px;
  line-height: 1.4;
}



.card-text p {
  margin: 0;
  color: #555;
}

@media (max-width:750px) {
 .custom-card{
  overflow: hidden;
  padding-left: 30px;
 }
 .card-img{
  width: 220px;
  height: 320px;
  border-radius: 40%;
 }
 
  .card-text h1{
  font-size: 20px;
 }
 .card-text h3{
  font-size: 17px;
 }
 .card-text p{
  font-size: 14px;
 }
}

@media (max-width:450px) {
 .custom-card{
  overflow: hidden;
  padding: 80px;
  height: 400px;
 }
 .card-img{
  width: 120px;
  height: 220px;
  border-radius: 40%;
 }
 
  .card-text h1{
  font-size: 18px;
 }
 .card-text h3{
  font-size: 15px;
 }
 .card-text p{
  font-size: 13px;
 }
}


@media (max-width: 600px) {
 
  .nav-links {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: #fff;
    padding: 20px;
    gap: 15px;
    z-index: 999;
    margin-bottom: 100px;
  }
 

  .nav-links.active {
    display: flex;
    

  }
.section{
  margin-top: 100px;
}
}
  </style>

   <nav class="navbar">
  <div class="nav-inner">
    <div class="logo">
      <div class="logo-mark">
      <i class="fa-solid fa-hospital" style="color: white;"></i>
      </div>
    <a href="{{ url('/') }}">  Little Roots</a>
    </div>
    <div class="nav-links">
      <a href="{{ url('/') }}#services">Services</a>
      <a href="{{ route('doctors') }}">Our Doctors</a>
      <a href="{{ url('/') }}#schedule">Availability</a>
      <a href="{{ url('/') }}#booking">Book a Visit</a>
    </div>
    <a href="{{ url('/') }}#booking" class="nav-cta">Book Appointment</a>
    <button class="burger" aria-label="Menu">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1C2B29" stroke-width="2.3" stroke-linecap="round"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
    </button>
  </div>
</nav>
<!-- navbar -->



<section class="section " id="doctors" style="padding-top:100px;">
  <div class="wrap">
    <div class="section-head center">
    
      <h2> doctors your kids </h2>
   
    </div>



   <div class="custom-card ">
  <img src="./images/photo-1594824476967-48c8b964273f.avif" alt="Doctor" class="card-img" />
  <div class="card-text">
    <h1>Dr. Sarah Bennett</h1>
    <h3>description :  Senior Pediatrician</h3>
    <p> is a dedicated pediatrician with over 8 years of 
      experience providing comprehensive care for infants, 
      children, and adolescents. She specializes in preventive care
      children, and adolescents
       
     .</p>
  </div>
</div>

   <div class="custom-card">
  <img src="./images/maic.avif" alt="Doctor" class="card-img" />
  <div class="card-text">
    <h1>Dr. Michael Osei</h1>
    <h3> description : Neonatal Specialist</h3>
     <p> is a dedicated pediatrician with over 8 years of 
      experience providing comprehensive care for infants, 
      children, and adolescents. She specializes in preventive care
      children, and adolescents
       
     .</p>
  </div>
</div>

   <div class="custom-card">
  <img src="./images/lili.avif" alt="Doctor" class="card-img" />
  <div class="card-text">
    <h1>Dr. Laila Haddad</h1>
    <h3>description :  Child Nutrition</h3>
    <p> is a dedicated pediatrician with over 8 years of 
      experience providing comprehensive care for infants, 
      children, and adolescents. She specializes in preventive care
      children, and adolescents
       
     .</p>
  </div>
</div>

   <div class="custom-card">
  <img src="./images/james.avif" alt="Doctor" class="card-img" />
  <div class="card-text">
    <h1>Dr. James Whitfield</h1>
    <h3> description : Pediatric Allergist</h3>
     <p> is a dedicated pediatrician with over 8 years of 
      experience providing comprehensive care for infants, 
      children, and adolescents. She specializes in preventive care
      children, and adolescents
       
     .</p>
  </div>
</div>


</div>
</div>
</section>






     













<!-- footer -->
<footer>
  <div class="wrap">
    <div class="footer-grid">
      <div>
        <div class="footer-logo">
          <div class="logo-mark" style="width:34px;height:34px;">
            <i class="fa-solid fa-hospital" style="color: white;"></i>
           </div>
          Little Roots Pediatrics
        </div>
        <p>A dedicated pediatric clinic caring for children from birth through age 14, with a team that treats your family like their own.</p>
      </div>
      <div class="footer-col">
        <h6>Quick Links</h6>
        <a href="{{ url('/') }}#services">Services</a>
        <a href="{{ route('doctors') }}">Our Doctors</a>
        <a href="{{ url('/') }}#booking">Book Appointment</a>
      </div>
      <div class="footer-col">
        <h6>Contact</h6>
        <a href="tel:+18005550123">1-800-555-0123</a>
        <a href="mailto:hello@littleroots.com">hello@littleroots.com</a>
        <a href="#">221 Maple Street, Springfield</a>
      </div>
      <div class="footer-col">
        <h6>Hours</h6>
        <a href="#">Mon – Sat: 9 AM – 9 PM</a>
        <a href="#">Emergency: 24 hours</a>
      </div>
    </div>
    <div class="footer-bottom">© 2026 Little Roots Pediatrics. All rights reserved.</div>
  </div>
</footer>
<script>
const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
  navLinks.classList.toggle('active');
  burger.classList.toggle('open');
  
});</script>
</body>
</html>