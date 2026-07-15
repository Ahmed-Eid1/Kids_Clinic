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
    
<nav class="navbar">
  <div class="nav-inner">
    <div class="logo">
      <div class="logo-mark">
      <i class="fa-solid fa-hospital" style="color: white;"></i>
      </div>
      Little Roots
    </div>
    <div class="nav-links ">
      <a href="#services " >Services</a>
      <a href="{{ route('doctors') }}">Our Doctors</a>
      <a href="#schedule">Availability</a>
      <a href="#booking">Book a Visit</a>
    </div>
    <a href="#booking" class="nav-cta">Book Appointment</a>
    <button class="burger" aria-label="Menu">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1C2B29" stroke-width="2.3" stroke-linecap="round"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
    </button>
  </div>
</nav>

<section class="hero">
  <div class="wrap hero-inner">
    <div>
      <span class="kicker">Pediatric care since 2012</span>
      <h1>Gentle care that helps<br>little ones <em>grow strong</em></h1>
      <p>Board-certified pediatricians, same-week appointments, and a clinic your kids will actually look forward to visiting.</p>
      <div class="hero-actions">
        <a href="#booking" class="btn-solid">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="3"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
          Book Appointment
        </a>
        <a href="#doctors" class="btn-line">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.5-7 8-7s8 3 8 7"/></svg>
          Meet Our Doctors
        </a>
      </div>
      <div class="stat-row">
        <div class="stat"><b>12k+</b><span>Happy Families</span></div>
        <div class="stat"><b>18</b><span>Specialist Doctors</span></div>
        <div class="stat"><b>24/7</b><span>Emergency Line</span></div>
      </div>
    </div>

    <div class="hero-media">
      <div class="main-img">
        <img src="{{ asset('images/images.jpg') }}" alt="Pediatrician">
      </div>
      <div class="floating-tag ft-rating">
        <div>
          <div class="stars">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          </div>
          <b>4.9 / 5.0</b>
          <span>from 2,300 reviews</span>
        </div>
      </div>
      <div class="floating-tag ft-avail">
        <span class="dot"></span>
        <div><b>Open Now</b><span>Next slot: 20 mins</span></div>
      </div>
    </div>
  </div>
</section>

<div class="wrap">
  <div class="offer-strip">
    <div class="offer-inner">
      <div class="offer-l">
        <div class="offer-pct">25%</div>
        <div class="offer-txt">
          <h3>First-visit discount for new patients</h3>
          <p>Includes a full check-up plus a complimentary nutrition consultation — this month only.</p>
        </div>
      </div>
      <div class="offer-r">
        <span class="offer-code">CODE: FI74933</span>
        <a href="#booking" class="offer-btn">Claim Offer</a>
      </div>
    </div>
  </div>
</div>

<section class="section" id="services">
  <div class="wrap">
    <div class="section-head center">
      <span class="kicker-sm">What We Offer</span>
      <h2>Everything your child needs, under one roof</h2>
      <p>From routine check-ups to specialist consultations — our team supports every stage of your child's growth.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M8 4v2M16 4v2"/><path d="M6 8h12v4a6 6 0 0 1-12 0z"/><path d="M9 18v1a3 3 0 0 0 6 0v-1"/></svg>
        </div>
        <h4>Child Treatment</h4>
        <p>Diagnosis and care for common and chronic conditions, led by pediatricians with 15+ years of experience.</p>
        <a href="#booking" class="service-link">Book a treatment →</a>
      </div>
      <div class="service-card">
        <div class="service-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 12h8M12 8v8"/><circle cx="12" cy="12" r="9"/></svg>
        </div>
        <h4>Medical Consultation</h4>
        <p>In-person or online consultations for growth tracking, nutrition, and vaccination guidance — fast replies.</p>
        <a href="#booking" class="service-link">Book a consultation →</a>
      </div>
      <div class="service-card">
        <div class="service-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
        </div>
        <h4>Growth &amp; Vaccination</h4>
        <p>A personalized vaccination schedule for every child with automatic reminders ahead of each dose.</p>
        <a href="#booking" class="service-link">View schedule →</a>
      </div>
    </div>
  </div>
</section>

<section class="section" id="doctors" style="padding-top:0;">
  <div class="wrap">
    <div class="section-head center">
      <span class="kicker-sm">Our Team</span>
      <h2>Meet the doctors your kids will love</h2>
      <p>Every doctor on our team is board-certified and trained in child-friendly, low-stress care.</p>
    </div>
    <div class="doctors-grid">
      <div class="doc-card">
        <div class="doc-photo">
           <a href="{{ route('doctors') }}?id=1">
          <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?q=80&w=500&auto=format&fit=crop" alt="Dr. Sarah Bennett">
         </a>
          <div class="doc-avail-badge"><span class="dot"></span>Available</div>
        </div>
        <div class="doc-body">
          <h4>Dr. Sarah Bennett</h4>
          <span class="doc-spec">Senior Pediatrician</span>
          <div class="doc-meta">
            <div class="doc-rating">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
              4.9
            </div>
            <a href="#booking" class="doc-book">Book →</a>
          </div>
        </div>
      </div>
      <div class="doc-card">
        <div class="doc-photo">
           <a href="{{ route('doctors') }}?id=2">

             <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?q=80&w=500&auto=format&fit=crop" alt="Dr. Michael Osei">
            </a>
          <div class="doc-avail-badge" style="background:var(--orange-pale);"><span class="dot" style="background:var(--orange);"></span>4:00 PM</div>
        </div>
        <div class="doc-body">
          <h4>Dr. Michael Osei</h4>
          <span class="doc-spec">Neonatal Specialist</span>
          <div class="doc-meta">
            <div class="doc-rating">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
              4.8
            </div>
            <a href="#booking" class="doc-book">Book →</a>
          </div>
        </div>
      </div>
      <div class="doc-card">
        <div class="doc-photo">
           <a href="{{ route('doctors') }}?id=3">

             <img src="https://images.unsplash.com/photo-1651008376811-b90baee60c1f?q=80&w=500&auto=format&fit=crop" alt="Dr. Laila Haddad">
            </a>
          <div class="doc-avail-badge"><span class="dot"></span>Available</div>
        </div>
        <div class="doc-body">
          <h4>Dr. Laila Haddad</h4>
          <span class="doc-spec">Child Nutrition</span>
          <div class="doc-meta">
            <div class="doc-rating">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
              5.0
            </div>
            <a href="#booking" class="doc-book">Book →</a>
          </div>
        </div>
      </div>
      <div class="doc-card">
        <div class="doc-photo">
           <a href="{{ route('doctors') }}?id=4">

             <img src="https://images.unsplash.com/photo-1622902046580-2b47f47f5471?q=80&w=500&auto=format&fit=crop" alt="Dr. James Whitfield">
            </a>
          <div class="doc-avail-badge"><span class="dot"></span>Available</div>
        </div>
        <div class="doc-body">
          <h4>Dr. James Whitfield</h4>
          <span class="doc-spec">Pediatric Allergist</span>
          <div class="doc-meta">
            <div class="doc-rating">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
              4.7
            </div>
            <a href="#booking" class="doc-book">Book →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="schedule">
  <div class="wrap">
    <div class="section-head">
      <span class="kicker-sm">Availability</span>
      <h2>Pick a doctor and a time that works</h2>
      <p>Live availability, updated in real time — reserve your slot before it's gone.</p>
    </div>
    <div class="avail-card">
      <div class="avail-left">
        <h3>Choose a doctor</h3>
        <p>Select from our specialists to see their open consultation hours this week.</p>
        <div class="avail-doctor-select"style="cursor: pointer;">
          <div class="mini-doc active" >
            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?q=80&w=200&auto=format&fit=crop" alt="">
            <div><b>Dr. Sarah Bennett</b><span>Senior Pediatrician</span></div>
          </div>
          <div class="mini-doc">
            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?q=80&w=200&auto=format&fit=crop" alt="">
            <div><b>Dr. Michael Osei</b><span>Neonatal Specialist</span></div>
          </div>
          <div class="mini-doc">
            <img src="https://images.unsplash.com/photo-1651008376811-b90baee60c1f?q=80&w=200&auto=format&fit=crop" alt="">
            <div><b>Dr. Laila Haddad</b><span>Child Nutrition</span></div>
          </div>
        </div>
      </div>
      <div>
        <div class="day-pills" style="cursor: pointer;">
          <div class="day-pill active">Sat 12</div>
          <div class="day-pill">Sun 13</div>
          <div class="day-pill">Mon 14</div>
          <div class="day-pill">Tue 15</div>
          <div class="day-pill">Wed 16</div>
        </div>
        <div class="slot-grid">
          <div class="slot free">10:00 AM</div>
          <div class="slot taken">10:30 AM</div>
          <div class="slot free">11:00 AM</div>
          <div class="slot free">11:30 AM</div>
          <div class="slot taken">12:00 PM</div>
          <div class="slot free">1:00 PM</div>
          <div class="slot free">5:00 PM</div>
          <div class="slot free">5:30 PM</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="padding-top:0;">
  <div class="wrap">
    <div class="section-head center">
      <span class="kicker-sm">Testimonials</span>
      <h2>Trusted by parents across the city</h2>
    </div>
    <div class="tst-grid">
      <div class="tst-card">
        <div class="tst-stars">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
        </div>
        <p>Booking online took two minutes and Dr. Bennett was so patient with my son, who's usually terrified of check-ups.</p>
        <div class="tst-who">
          <div class="tst-avatar"><img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?q=80&w=200&auto=format&fit=crop" alt=""></div>
          <div><h6>Emma Clarke</h6><span>Mother of two</span></div>
        </div>
      </div>
      <div class="tst-card">
        <div class="tst-stars">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
        </div>
        <p>The first-visit discount is what got us in the door — we've been coming back ever since for regular checkups.</p>
        <div class="tst-who">
          <div class="tst-avatar"><img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=200&auto=format&fit=crop" alt=""></div>
          <div><h6>David Reyes</h6><span>Father of one</span></div>
        </div>
      </div>
      <div class="tst-card">
        <div class="tst-stars">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 .9-4.5 4.3 1 6.3-5.5-3-5.5 3 1-6.3L3 8.9 9 8z"/></svg>
        </div>
        <p>The vaccination reminders are a lifesaver — one less thing to track as a working parent of three kids.</p>
        <div class="tst-who">
          <div class="tst-avatar"><img src="https://images.unsplash.com/photo-1619895862022-09114b41f16f?q=80&w=200&auto=format&fit=crop" alt=""></div>
          <div><h6>Priya Nair</h6><span>Mother of three</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="booking" style="padding-top:0;">
  <div class="wrap">
    <div class="booking">
      <div class="booking-inner">
        <div class="booking-info">
          <span class="kicker-sm">Book a Visit</span>
          <h2>One step away from your appointment</h2>
          <p>Choose the type of visit and share a few details — our team will confirm your appointment shortly.</p>
          <div class="booking-points">
            <div class="booking-point">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6L9 17l-5-5"/></svg>
              Same-day confirmation by phone or SMS
            </div>
            <div class="booking-point">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6L9 17l-5-5"/></svg>
              Free rescheduling up to 12 hours before
            </div>
            <div class="booking-point">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6L9 17l-5-5"/></svg>
              Online consultations available for follow-ups
            </div>
          </div>
        </div>

        <div class="booking-card">
          <div class="type-toggle">
            <button type="button" class="type-btn selected" onclick="selectType(this)">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M8 4v2M16 4v2"/><path d="M6 8h12v4a6 6 0 0 1-12 0z"/><path d="M9 18v1a3 3 0 0 0 6 0v-1"/></svg>
              <span>Child Treatment</span>
              <small>New visit / follow-up</small>
            </button>
            <button type="button" class="type-btn" onclick="selectType(this)">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 12h8M12 8v8"/><circle cx="12" cy="12" r="9"/></svg>
              <span>Consultation</span>
              <small>In-person or online</small>
            </button>
          </div>
         <form class="form-grid" action="{{ route('appointments.store') }}" method="POST">
    @csrf

    <div class="field">
      <label for="patientName">Patient Name</label>
      <input id="patientName" name="PatientName" type="text" placeholder="e.g. John Carter" required>
    </div>
    <div class="field">
      <label for="DOB">Date of Birth</label>
      <input id="DOB" name="DateOfBirth" type="date" required>
    </div>
    <div class="field">
      <label for="gender">Gender</label>
      <select id="gender" name="Gender" required>
        <option value="">Select gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    <div class="field">
      <label for="phone">Phone Number</label>
      <input id="phone" name="Phone" type="tel" placeholder="+1 (555) 000-0000" required>
    </div>
    <div class="field">
      <label for="doctor">Choose a Doctor</label>
      <select id="doctor" name="DoctorID" required>
        <option value="">Select doctor</option>
        @foreach($doctors as $doctor)
          <option value="{{ $doctor->DoctorID }}">
              {{ $doctor->person->Name }} - {{ $doctor->Specialization }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="field">
      <label for="date">Preferred Date</label>
      <input id="date" name="AppointmentDate" type="date" required>
    </div>
    <div class="field">
      <label for="time">Preferred Time</label>
      <select id="time" name="AppointmentTime" required>
        <option value="">Select time</option>
        <option value="10:00">10:00 AM</option>
        <option value="11:00">11:00 AM</option>
        <option value="13:00">1:00 PM</option>
        <option value="17:00">5:00 PM</option>
      </select>
    </div>

    <div class="field full">
      <button type="submit" class="submit-btn">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
        Confirm Appointment
      </button>
    </div>
</form>

        </div>
      </div>
    </div>
  </div>
</section>

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
        <a href="#services">Services</a>
        <a href="#doctors">Our Doctors</a>
        <a href="#booking">Book Appointment</a>
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

<script src="{{ asset('js/app.js') }}"></script></body>
</html>