<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="style.css">
    <title>Dashboard | Little Roots Pediatrics Admin</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Figtree:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
</head>
<body>
  
    <!-- start side bar -->
<aside class="sidebar">
  <div class="brand">
    <div class="brand-mark">
        <i class="fa-solid fa-chart-line" style="width: 18px; height: 18px; object-view-box: 0 0 24 24; fill: none; stroke: #fff;stroke-width: 2.2; stroke-linecap: round; stroke-linejoin: round;"></i>
    </div>
    Little Roots
  </div>



  <div class="nav-group">
    <span class="nav-label">Overview</span>
    <a href="#" class="nav-item active" onclick="showSection('overview', this)">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="9" rx="2"/><rect x="14" y="3" width="7" height="5" rx="2"/><rect x="14" y="12" width="7" height="9" rx="2"/><rect x="3" y="16" width="7" height="5" rx="2"/></svg>
      Dashboard
    </a>
    <a href="{{ route('home') }}" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="3"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
     web site 
      <span class="badge">12</span>
    </a>
    <a href="#" class="nav-item" onclick="showSection('patients', this)">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      Patients
    </a>
    <a href="#" class="nav-item" onclick="showSection('doctors', this)">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M8 4v2M16 4v2"/><path d="M6 8h12v4a6 6 0 0 1-12 0z"/></svg>
      Doctors
    </a>
    <a href="#" class="nav-item" onclick="showSection('add-doctor', this)">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
      Add a Doctor
    </a>
  </div>

  <div class="nav-group">
    <span class="nav-label">Insights</span>
    <a href="#" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18 8l-5 5-3-3-4 4"/></svg>
      Visitor Analytics
    </a>
    <a href="#" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 3H8L2 7h20l-6-4z"/></svg>
      Billing
    </a>
  </div>

  <div class="nav-group">
    <span class="nav-label">System</span>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="nav-item" style="width: 100%; border: none; background: transparent; text-align: left; cursor: pointer;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .34 1.87l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.7 1.7 0 0 0-1.87-.34 1.7 1.7 0 0 0-1 1.55V21a2 2 0 0 1-4 0v-.09A1.7 1.7 0 0 0 9 19.4a1.7 1.7 0 0 0-1.87.34l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.7 1.7 0 0 0 4.6 15a1.7 1.7 0 0 0-1.55-1H3a2 2 0 0 1 0-4h.09A1.7 1.7 0 0 0 4.6 9a1.7 1.7 0 0 0-.34-1.87l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.7 1.7 0 0 0 9 4.6a1.7 1.7 0 0 0 1-1.55V3a2 2 0 0 1 4 0v.09a1.7 1.7 0 0 0 1 1.55 1.7 1.7 0 0 0 1.87-.34l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.7 1.7 0 0 0 19.4 9c.36.62 1 1 1.55 1H21a2 2 0 0 1 0 4h-.09a1.7 1.7 0 0 0-1.51 1z"/></svg>
       log out 
      </button>
    </form>
  </div>

  <div class="sidebar-foot">
    <a href="#" class="mini-profile">
      <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->person->Name ?? 'Admin') }}&background=random" alt="">
      <div><b>{{ auth()->user()->person->Name ?? 'Admin' }}</b><span> {{ ucfirst(auth()->user()->role ?? 'Admin') }}</span></div>
    </a>
  </div>
</aside>
<!-- end side bar -->


<!-- navbar -->
<main class="main">
  @if(session('success'))
    <div style="background: #dcfce7; color: #166534; padding: 15px; margin: 20px; border-radius: 8px;">
        {{ session('success') }}
    </div>
  @endif
  @if($errors->any())
    <div style="background: #fee2e2; color: #991b1b; padding: 15px; margin: 20px; border-radius: 8px;">
      <ul style="margin: 0; padding-left: 20px;">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="topbar">
    <div>
      <h1>Good morning, {{ explode(' ', auth()->user()->person->Name ?? 'Admin')[0] }} 👋</h1>
      <p>Here's what's happening at the clinic today — {{ now()->format('l, F j') }}</p>
    </div>
    <div class="top-actions">
      <div class="search-shell">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
        <input type="text" placeholder="Search patients...">
      </div>
      <button class="icon-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.7 21a2 2 0 0 1-3.4 0"/></svg><span class="dot"></span></button>
      <!-- <button class="export-btn">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
        Export Report
      </button> -->
    </div>
  </div>

  <div id="section-overview">
  <div class="stat-grid">
    <div class="stat-card">
      <div class="stat-top">
        <div class="stat-icon si-1"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg></div>
      </div>
      <b>{{ number_format($visitorsCount) }}</b>
      <span>Website Visitors Today</span>
    </div>
    <div class="stat-card">
      <div class="stat-top">
        <div class="stat-icon si-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M19 8v6M22 11h-6"/></svg></div>
      </div>
      <b>{{ $newRegistrations }}</b>
      <span>New Registrations This Month</span>
    </div>
    <div class="stat-card">
      <div class="stat-top">
        <div class="stat-icon si-3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="3"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M9 16l2 2 4-4"/></svg></div>
      </div>
      <b>{{ $appointmentsBooked }}</b>
      <span>Appointments Booked</span>
    </div>
    <div class="stat-card">
      <div class="stat-top">
        <div class="stat-icon si-4"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
      </div>
      <b>{{ $noShows }}</b>
      <span>Cancellations / No-Shows</span>
    </div>
  </div>

  <div class="dash-grid">
    <div class="panel">
      <div class="panel-head">
        <div>
          <h3>Visitors Overview</h3>
          <p>Website traffic vs. confirmed registrations</p>
        </div>
        <div class="range-tabs">
          <div class="range-tab">Week</div>
          <div class="range-tab active">Month</div>
          <div class="range-tab">Year</div>
        </div>
      </div>
      <div class="chart-legend">
        <div class="legend-item"><span class="legend-dot" style="background:var(--teal)"></span> Site Visitors</div>
        <div class="legend-item"><span class="legend-dot" style="background:var(--orange)"></span> New Registrations</div>
      </div>
      <svg viewBox="0 0 640 220" width="100%" height="220" preserveAspectRatio="none">
        <defs>
          <linearGradient id="tealFill" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#0D9488" stop-opacity="0.22"/>
            <stop offset="100%" stop-color="#0D9488" stop-opacity="0"/>
          </linearGradient>
        </defs>
        <line x1="0" y1="20" x2="640" y2="20" stroke="#E4E9E7" stroke-width="1"/>
        <line x1="0" y1="70" x2="640" y2="70" stroke="#E4E9E7" stroke-width="1"/>
        <line x1="0" y1="120" x2="640" y2="120" stroke="#E4E9E7" stroke-width="1"/>
        <line x1="0" y1="170" x2="640" y2="170" stroke="#E4E9E7" stroke-width="1"/>
        <path d="M0,150 L80,120 L160,135 L240,90 L320,105 L400,60 L480,80 L560,40 L640,55 L640,220 L0,220 Z" fill="url(#tealFill)"/>
        <polyline points="0,150 80,120 160,135 240,90 320,105 400,60 480,80 560,40 640,55" fill="none" stroke="#0D9488" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        <polyline points="0,190 80,175 160,185 240,160 320,168 400,140 480,150 560,120 640,130" fill="none" stroke="#EA580C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        <circle cx="640" cy="55" r="5" fill="#0D9488" stroke="#fff" stroke-width="2"/>
        <circle cx="640" cy="130" r="5" fill="#EA580C" stroke="#fff" stroke-width="2"/>
      </svg>
    </div>

    <div class="panel">
      <div class="panel-head">
        <div>
          <h3>Registration Types</h3>
          <p>This month</p>
        </div>
      </div>
      <div class="donut-wrap">
        <svg viewBox="0 0 200 200" width="220" height="220">
          <circle cx="100" cy="100" r="72" fill="none" stroke="#E4E9E7" stroke-width="26"/>
          <circle cx="100" cy="100" r="72" fill="none" stroke="#0D9488" stroke-width="26" stroke-dasharray="452" stroke-dashoffset="0" pathLength="452" transform="rotate(-90 100 100)" stroke-dasharray="226 226" />
          <circle cx="100" cy="100" r="72" fill="none" stroke="#EA580C" stroke-width="26" transform="rotate(48 100 100)" stroke-dasharray="140 452" stroke-linecap="round"/>
          <circle cx="100" cy="100" r="72" fill="none" stroke="#4C5FD1" stroke-width="26" transform="rotate(155 100 100)" stroke-dasharray="86 452" stroke-linecap="round"/>
        </svg>
        <div class="donut-center">
          <b>146</b>
          <span>Total This Month</span>
        </div>
        <div class="donut-legend">
          <div class="dl-row"><span class="legend-dot" style="background:#0D9488"></span> Child Treatment <span class="val">72</span></div>
          <div class="dl-row"><span class="legend-dot" style="background:#EA580C"></span> Consultations <span class="val">45</span></div>
          <div class="dl-row"><span class="legend-dot" style="background:#4C5FD1"></span> Vaccinations <span class="val">29</span></div>
        </div>
      </div>
    </div>
  </div>



  <div class="table-panel">
    <div class="panel-head">
      <div>
        <h3>Recent Registrations</h3>
        <p>Newest parents and patients who signed up</p>
      </div>
      <div class="range-tabs">
        <div class="range-tab active">All</div>
        <div class="range-tab">Pending</div>
        <div class="range-tab">Confirmed</div>
      </div>
    </div>
    <table>
      <thead>
        <tr>
          <th>Parent / Child</th>
          <th>Visit Type</th>
          <th>Doctor</th>
          <th>Registered</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @forelse($recentRegistrations as $reg)
        <tr>
          <td>
            <div class="person-cell">
              <img src="https://ui-avatars.com/api/?name={{ urlencode($reg->Name) }}&background=random" alt="">
              <div><b>{{ $reg->Name }}</b><span>{{ $reg->Email ?? 'No email' }}</span></div>
            </div>
          </td>
          <td>Registration</td>
          <td>-</td>
          <td>{{ \Carbon\Carbon::parse($reg->created_at)->diffForHumans() }}</td>
          <td>
            @if($reg->role === 'patient')
                <span class="status-pill pill-new"><span class="dot"></span>Patient</span>
            @else
                <span class="status-pill pill-confirmed"><span class="dot"></span>{{ ucfirst($reg->role) }}</span>
            @endif
          </td>
          <td><a href="#" class="row-action">View →</a></td>
        </tr>
        @empty
        <tr>
          <td colspan="6" style="text-align:center; padding: 20px;">No recent registrations found.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  </div> <!-- end section-overview -->

  <div id="section-patients" style="display: none;">
    <div class="table-panel">
      <div class="panel-head">
        <div>
          <h3>Patients & Appointments</h3>
          <p>List of all patient appointments</p>
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <th>Patient Name</th>
            <th>Doctor</th>
            <th>Appointment Date/Time</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @forelse($patientAppointments as $apt)
          <tr>
            <td>
              <div class="person-cell">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($apt->person->Name ?? 'Unknown') }}&background=random" alt="">
                <div><b>{{ $apt->person->Name ?? 'Unknown' }}</b><span>{{ $apt->person->Email ?? 'No email' }}</span></div>
              </div>
            </td>
            <td>{{ $apt->doctor->person->Name ?? 'N/A' }}</td>
            <td>{{ $apt->AppointmentDateTime }}</td>
            <td>
              @if($apt->AppointmentStatus === 'Completed')
                  <span class="status-pill pill-confirmed"><span class="dot"></span>Completed</span>
              @elseif($apt->AppointmentStatus === 'Cancelled')
                  <span class="status-pill" style="background:#fee2e2; color:#991b1b;"><span class="dot" style="background:#991b1b;"></span>Cancelled</span>
              @else
                  <span class="status-pill pill-new"><span class="dot"></span>{{ $apt->AppointmentStatus }}</span>
              @endif
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="4" style="text-align:center; padding: 20px;">No appointments found.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div> <!-- end section-patients -->

  <div id="section-doctors" style="display: none;">
    <div class="table-panel">
      <div class="panel-head" style="display: flex; justify-content: space-between; align-items: center;">
        <div>
          <h3>Doctors List</h3>
          <p>All registered doctors in the clinic</p>
        </div>
        <button onclick="showSection('add-doctor', document.querySelector('.nav-group .nav-item[onclick*=\'add-doctor\']'))" style="background: var(--dark-brown); color: white; border: none; padding: 8px 16px; border-radius: 6px; cursor: pointer; font-weight: 500;">+ Add Doctor</button>
      </div>
      <table>
        <thead>
          <tr>
            <th>Doctor Name</th>
            <th>Specialization</th>
          </tr>
        </thead>
        <tbody>
          @forelse($doctorsList as $doc)
          <tr>
            <td>
              <div class="person-cell">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($doc->person->Name ?? 'Unknown') }}&background=random" alt="">
                <div><b>{{ $doc->person->Name ?? 'Unknown' }}</b><span>{{ $doc->person->Email ?? 'No email' }}</span></div>
              </div>
            </td>
            <td>{{ $doc->Specialization }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="2" style="text-align:center; padding: 20px;">No doctors found.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div> <!-- end section-doctors -->

  <div id="section-add-doctor" style="display: none;">
    <div class="panel">
      <div class="panel-head">
        <div>
          <h3>Register New Doctor</h3>
          <p>Add a new specialist to the clinic's system</p>
        </div>
      </div>
      <form action="{{ route('admin.doctor.store') }}" method="POST" style="padding: 20px;">
        @csrf
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
          <div>
            <label style="display: block; margin-bottom: 5px; color: var(--dark-brown);">Name</label>
            <input type="text" name="name" required style="width: 100%; padding: 10px; border: 1.5px solid #e5dcc9; border-radius: 8px;">
          </div>
          <div>
            <label style="display: block; margin-bottom: 5px; color: var(--dark-brown);">Email</label>
            <input type="email" name="email" required style="width: 100%; padding: 10px; border: 1.5px solid #e5dcc9; border-radius: 8px;">
          </div>
          <div>
            <label style="display: block; margin-bottom: 5px; color: var(--dark-brown);">Phone</label>
            <input type="text" name="phone" required style="width: 100%; padding: 10px; border: 1.5px solid #e5dcc9; border-radius: 8px;">
          </div>
          <div>
            <label style="display: block; margin-bottom: 5px; color: var(--dark-brown);">Gender</label>
            <select name="gender" required style="width: 100%; padding: 10px; border: 1.5px solid #e5dcc9; border-radius: 8px; background: white;">
              <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div>
            <label style="display: block; margin-bottom: 5px; color: var(--dark-brown);">Date of Birth</label>
            <input type="date" name="date_of_birth" required style="width: 100%; padding: 10px; border: 1.5px solid #e5dcc9; border-radius: 8px;">
          </div>
          <div>
            <label style="display: block; margin-bottom: 5px; color: var(--dark-brown);">Specialization</label>
            <input type="text" name="specialization" required style="width: 100%; padding: 10px; border: 1.5px solid #e5dcc9; border-radius: 8px;">
          </div>
          <div style="grid-column: span 2;">
            <label style="display: block; margin-bottom: 5px; color: var(--dark-brown);">Password</label>
            <input type="password" name="password" required style="width: 100%; padding: 10px; border: 1.5px solid #e5dcc9; border-radius: 8px;">
          </div>
        </div>
        @if(session('success') && str_contains(session('success'), 'Doctor'))
          <div style="background: #dcfce7; color: #166534; padding: 15px; margin-bottom: 20px; border-radius: 8px;">
              {{ session('success') }}
          </div>
        @endif
        <div style="grid-column: span 2; margin-top: 10px;">
          <button type="submit" style="background: #0D9488; color: white; border: none; padding: 14px 24px; border-radius: 8px; cursor: pointer; font-weight: 600; width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px; font-size: 1rem; box-shadow: 0 4px 6px -1px rgba(13, 148, 136, 0.2); transition: all 0.2s ease;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
            Add Doctor
          </button>
        </div>
      </form>
    </div>
  </div> <!-- end section-add-doctor -->

</main>

<!--end navbar -->




    <script src="{{ asset('js/dash.js') }}"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        @if(session('success') && str_contains(session('success'), 'Doctor'))
          showSection('add-doctor', document.querySelector('.nav-group .nav-item[onclick*="add-doctor"]'));
        @elseif($errors->any())
          showSection('add-doctor', document.querySelector('.nav-group .nav-item[onclick*="add-doctor"]'));
        @endif
      });

      function showSection(sectionId, element) {
        // Hide all sections
        document.getElementById('section-overview').style.display = 'none';
        document.getElementById('section-patients').style.display = 'none';
        document.getElementById('section-doctors').style.display = 'none';
        document.getElementById('section-add-doctor').style.display = 'none';

        // Remove active class from nav items
        let navItems = document.querySelectorAll('.nav-group .nav-item');
        navItems.forEach(function(item) {
          if (!item.closest('form')) {
              item.classList.remove('active');
          }
        });

        // Show selected section
        document.getElementById('section-' + sectionId).style.display = 'block';

        // Add active class to clicked nav item
        if (element) {
          element.classList.add('active');
        }
      }
    </script>
</body>
</html>