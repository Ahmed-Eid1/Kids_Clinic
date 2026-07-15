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
    <a href="#" class="nav-item active">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="9" rx="2"/><rect x="14" y="3" width="7" height="5" rx="2"/><rect x="14" y="12" width="7" height="9" rx="2"/><rect x="3" y="16" width="7" height="5" rx="2"/></svg>
      Dashboard
    </a>
    <a href="#" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="3"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
     web site 
      <span class="badge">12</span>
    </a>
    <a href="#" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      Patients
    </a>
    <a href="#" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M8 4v2M16 4v2"/><path d="M6 8h12v4a6 6 0 0 1-12 0z"/></svg>
      Doctors
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
</main>

<!--end navbar -->




    <script src="{{ asset('js/dash.js') }}"></script></body>
</body>
</html>