
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>MS Excel (Beginner → Intermediate) | BTMG USA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="icon" type="image/png" href="img/BTMG Icon.png">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2365778067171392');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2365778067171392&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<style>
/* ===============================
   BTMG USA BRAND VARIABLES
   (Matched to attached theme)
================================ */
:root{
  --btmg-teal:#004F59;
  --btmg-teal-600:#0b6a76;
  --btmg-orange:#F58220;
  --gray:#333;
  --muted:#6b7280;
  --bg:#ffffff;
  --card:#f6f8f9;
  --line:#eef2f7;
  --success:#16a34a;
}

/* ===============================
   GLOBAL BASE
================================ */
*{box-sizing:border-box}
body{
  margin:0;
  font-family:Inter,system-ui,Segoe UI,Arial,sans-serif;
  color:var(--gray);
  background:var(--bg);
}
.container{
  max-width:1200px;
  margin:auto;
  padding:0 20px;
}
section{
  padding:72px 0;
  border-top:1px solid var(--line);
}
h1,h2,h3{margin:0 0 14px}
h1{font-size:clamp(30px,4vw,44px)}
h2{font-size:clamp(22px,2.4vw,30px);color:var(--btmg-teal)}
p.lead{color:var(--muted);font-size:18px;line-height:1.6}

/* ===============================
   HERO
================================ */
.hero{
  background:linear-gradient(180deg,rgba(0,79,89,.12),transparent),
             linear-gradient(90deg,#edf7f8,#ffffff);
  padding:90px 0 70px;
}
.badge{
  display:inline-block;
  background:rgba(245,130,32,.15);
  color:var(--btmg-orange);
  border:1px dashed var(--btmg-orange);
  padding:6px 14px;
  border-radius:999px;
  font-weight:800;
  font-size:13px;
}
.hero-grid{
  display:grid;
  grid-template-columns:1.4fr .9fr;
  gap:22px;
  align-items:start;
}
.hero-meta{
  display:flex;
  flex-wrap:wrap;
  gap:10px;
  margin:14px 0 0;
}
.pill{
  display:inline-flex;
  align-items:center;
  gap:8px;
  background:#fff;
  border:1px solid rgba(0,79,89,.14);
  padding:10px 12px;
  border-radius:999px;
  font-weight:700;
  font-size:13px;
  color:#0a3c43;
}
.pill .dot{
  width:10px;height:10px;border-radius:50%;
  background:linear-gradient(135deg,var(--btmg-teal),var(--btmg-orange));
}
.hero-card{
  background:var(--card);
  border-radius:18px;
  padding:22px;

  border:1.5px solid rgba(245,130,32,0.45);
  box-shadow:
    0 6px 18px rgba(0,0,0,0.05),
    inset 0 3px 0 rgba(245,130,32,0.35);

  position:relative;
}
.hero-card::before{
  content:"";
  position:absolute;
  top:0;left:0;height:4px;width:100%;
  background:linear-gradient(90deg,var(--btmg-orange),rgba(245,130,32,0.35));
  border-radius:18px 18px 0 0;
}
.price{
  font-size:34px;
  font-weight:900;
  color:var(--btmg-teal);
  margin:4px 0 10px;
}
.small{
  color:var(--muted);
  font-size:13px;
  line-height:1.5;
}

/* ===============================
   BUTTON
================================ */
.btn{
  display:inline-block;
  padding:14px 22px;
  border-radius:14px;
  font-weight:900;
  border:1px solid var(--btmg-teal);
  text-decoration:none;
  cursor:pointer;
}
.btn.primary{
  background:var(--btmg-teal);
  color:#fff;
}
.btn.primary:hover{background:var(--btmg-teal-600)}
.btn.secondary{
  background:#fff;
  color:var(--btmg-teal);
}
.btn.secondary:hover{background:#f2fbfc}

/* ===============================
   GRIDS
================================ */
.grid-3{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:22px;
}
.grid-2{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:22px;
}

/* ===============================
   BTMG USA CARD (APPLIED EVERYWHERE)
================================ */
.card{
  background:var(--card);
  border-radius:18px;
  padding:24px;

  border:1.5px solid rgba(245,130,32,0.45);

  box-shadow:
    0 6px 18px rgba(0,0,0,0.05),
    inset 0 3px 0 rgba(245,130,32,0.35);

  position:relative;
  transition:all 0.3s ease;
}
.card::before{
  content:"";
  position:absolute;
  top:0;
  left:0;
  height:4px;
  width:100%;
  background:linear-gradient(
    90deg,
    var(--btmg-orange),
    rgba(245,130,32,0.35)
  );
  border-radius:18px 18px 0 0;
}
.card:hover{
  border-color:var(--btmg-orange);
  box-shadow:
    0 12px 30px rgba(245,130,32,0.25),
    inset 0 4px 0 var(--btmg-orange);
  transform:translateY(-4px);
}

/* ===============================
   ICONS (Emoji icons used in original)
================================ */
.icon{
  width:50px;
  height:50px;
  border-radius:14px;
  background:linear-gradient(
    135deg,
    var(--btmg-teal),
    var(--btmg-orange)
  );
  color:#fff;
  display:grid;
  place-items:center;
  font-size:22px;
  margin-bottom:16px;
}

/* ===============================
   LISTS
================================ */
ul.clean{
  margin:0;
  padding-left:18px;
  color:var(--muted);
  line-height:1.7;
}
ul.clean li{margin:6px 0}

/* ===============================
   CURRICULUM DAYS (Card Style)
================================ */
.day-grid{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:22px;
}
@media(max-width:900px){
  .grid-3,.grid-2,.day-grid,.hero-grid{grid-template-columns:1fr}
}
.day-title{
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:10px;
}
.day-tag{
  display:inline-flex;
  align-items:center;
  gap:8px;
  font-weight:900;
  font-size:12px;
  color:#0a3c43;
  background:#fff;
  border:1px solid rgba(0,79,89,.14);
  padding:8px 10px;
  border-radius:999px;
}

/* ===============================
   FAQ
================================ */
.faq-item{margin-bottom:18px}
.faq-item strong{
  display:block;
  color:var(--btmg-teal);
  margin-bottom:6px;
}

/* ===============================
   REGISTER (Embedded form)
================================ */
.form-wrap{
  background:linear-gradient(180deg,rgba(0,79,89,.08),transparent),
             linear-gradient(90deg,#fff7ef,#ffffff);
  border-radius:18px;
  padding:26px;
  border:1.5px solid rgba(245,130,32,0.55);
  box-shadow:
    0 10px 22px rgba(0,0,0,.06),
    inset 0 3px 0 rgba(245,130,32,0.35);
}
.form-grid{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:14px;
}
@media(max-width:900px){ .form-grid{grid-template-columns:1fr} }
label{
  display:block;
  font-weight:800;
  font-size:13px;
  color:#0a3c43;
  margin:0 0 6px;
}
input,select,textarea{
  width:100%;
  padding:12px 12px;
  border-radius:14px;
  border:1px solid rgba(0,79,89,.18);
  outline:none;
  font-family:inherit;
  background:#fff;
}
textarea{min-height:110px;resize:vertical}
.helper{
  margin-top:10px;
  font-size:13px;
  color:var(--muted);
  line-height:1.55;
}
.checks{
  display:flex;flex-wrap:wrap;gap:10px;margin-top:14px;
}
.check{
  display:inline-flex;align-items:center;gap:10px;
  background:#fff;
  border:1px solid rgba(22,163,74,.25);
  color:#166534;
  padding:10px 12px;
  border-radius:999px;
  font-weight:800;
  font-size:13px;
}
.check .tick{
  width:22px;height:22px;border-radius:50%;
  display:grid;place-items:center;
  background:rgba(22,163,74,.14);
}

/* ===============================
   FOOTER
================================ */

/* ===============================
   FOOTER
================================ */
/* FOOTER */
    footer {
        background: #0f5d63;
        color: #fff;
        padding: 60px 0px 30px 0px;
    }

    footer a {
        color: #fff;
        text-decoration: none;
        display: block;
        margin-bottom: 8px;
    }



.footer-social a{
    display: inline-block;
}

    footer a:hover {
        text-decoration: underline;
    }

    .footer-logo-text {
/*        width: 230px;*/
        font-size: 14px;
        line-height: 22px;
    }

    .footer-social i {
        font-size: 20px;
        margin-right: 5px;
        padding: 7px 9px;
         background: #F47B1E;
        color: #fff;
        border-radius: 50%;
    }

    /* SCROLL TO TOP */
    .scroll-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: #ff8f32;
        color: #fff;
        padding: 5px 10px;
        border-radius: 50%;
        font-size: 20px;
        cursor: pointer;
        z-index: 1000;
    }

 .scroll-top a { 
color: white;
 }

/*  navbar  */

      html {
    scroll-behavior: smooth;
}
        /* === Top Bar === */
        .topbar {
            background: #0C5964;
            color: #fff;
            font-size: 14px;
/*            padding: 8px 0;*/
        }
      /*  .topbar a {
         background-color: white;
   color: #135864;

    text-decoration: none;
    margin: 0px 2px;
    padding: 3px 5px;
    font-size: 14px;
    border-radius: 21px;
        }
*/
        /* === Navbar === */
        .navbar-nav .nav-link {
            font-size: 16px;
            color: #333;
            padding: 10px 25px !important;


font-weight: 500;
font-style: Medium;

color: #0E2427;


        }
        .navbar-nav .nav-link:hover {
            color: #135864;
;
        }

       /* .btn-orange {
            background: #F7882F;
            color: #fff;
            padding: 8px 22px;
            border-radius: 6px;
        }
        .btn-orange:hover {
            background: #e5741f;
            color: #fff;
        }*/

        .logo-img {
            height: 55px;
        }

        @media (max-width: 992px) {
            .navbar-nav .nav-link {
                padding: 10px;
            }
        }
    
/* ================= FORM CONSENT & DISCLAIMER ================= */
.form-disclaimer {
    background: #f9f9f9;
    border: 1px solid #e5e5e5;
    padding: 15px 18px;
    border-radius: 6px;
}

.disclaimer-checkbox {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 14px;
    color: #444;
    cursor: pointer;
    line-height: 1.6;
}

.disclaimer-checkbox input {
    margin-top: 5px;
    transform: scale(1.1);
    cursor: pointer;
    width: 1% !important;
}

.disclaimer-text strong {
    color: #C63630;
    font-weight: 600;
}

/* Mobile optimization */
@media (max-width: 575px) {
    .form-disclaimer {
        padding: 14px;
    }

    .disclaimer-checkbox {
        font-size: 13px;
    }
}


</style>
</head>

<body>
<div class="topbar">

    <div class="container d-flex justify-content-between align-items-center">

        <div>
            <i class="bi bi-clock" style="color: #F47B1E"></i> 9:00AM - 6:00PM &nbsp;&nbsp;
            <i class="bi bi-envelope me-1" style="color: #F47B1E"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d5bcbbb3ba95b7a1b8b2a0a6b4fbb6bab8">[email&#160;protected]</a> &nbsp;&nbsp;
            <i class="bi bi-telephone me-1" style="color: #F47B1E"></i> +1 (630) 854 2247
        </div>

        <div>
           <!--  <a target="_blank" href="https://www.facebook.com/share/1A71yimN9m/"><i class="bi bi-facebook"></i></a>
            <a target="_blank" href="https://www.linkedin.com/company/btmg-usa/?viewAsMember=true"><i class="bi bi-linkedin"></i></a>
            <a target="_blank" href="https://www.instagram.com/btmgusa?igsh=MWdha2s0M2l1Yzc4aw%3D%3D"><i class="bi bi-instagram"></i></a> -->
 <div class="footer-social mt-3">
                  
                    <a target="_blank" href="https://www.facebook.com/share/1A71yimN9m/"> <i class="fa fa-facebook" style="padding: 6px 11px 6px 9px;"></i></a>
                    <a target="_blank" href="https://www.instagram.com/btmgusa?igsh=MWdha2s0M2l1Yzc4aw%3D%3D">  <i class="fa fa-instagram"></i></a>
                  <a target="_blank" href="https://www.linkedin.com/company/btmg-usa/?viewAsMember=true">   <i class="fa fa-linkedin"></i></a></p>
                </div>

        </div>

    </div>
</div>

<!-- ====================== NAVBAR ====================== -->
<nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" class="logo-img" alt="Company Logo">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-center" id="mainNav">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section3">Overall Learning Outcomes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section4">Instructor-Led</a>
                </li>
            <!--     <li class="nav-item">
                    <a class="nav-link" href="PHPMailerAutoload.php">Services</a>
                </li>  -->
            </ul>

            <!-- Contact Button (on right) -->
            <a href="#section5" class="btn ms-lg-3 mt-3 mt-lg-0 btn-contact">
               Register now
            </a>

        </div>
    </div>
</nav>

<!-- =========================================================
  HERO
  Developer Notes:
  - Primary CTA scrolls to #register
  - Secondary CTA scrolls to #curriculum
========================================================= -->
<section class="hero" id="top">
  <div class="container">
    <span class="badge">BTMG USA Professional Training</span>

    <div class="hero-grid">
      <div>
        <h1>MS Excel (Beginner → Intermediate)</h1>
           <p class="lead">Date:00-00-0000<br></p>
        <p class="lead">
          A practical, instructor-led Microsoft Excel course designed for professionals who want to
          build reliable spreadsheet skills—from clean data entry and formatting to formulas, functions,
          PivotTables, and reporting. Enterprise-ready, hands-on, and focused on real workplace tasks.
        </p>

        <div class="hero-meta">
          <span class="pill"><span class="dot"></span> 5 Days</span>
          <span class="pill"><span class="dot"></span> 3 Hours / Day</span>
          <span class="pill"><span class="dot"></span> Instructor-led (Theory + Hands-on)</span>
          <span class="pill"><span class="dot"></span> Beginner Friendly</span>
        </div>

        <div style="margin-top:26px; display:flex; gap:12px; flex-wrap:wrap">
          <a href="#register" class="btn primary">Register for the Course</a>
          <a href="#curriculum" class="btn secondary">View Curriculum</a>
        </div>
      </div>

      <!-- Pricing / Quick Facts Card -->
      <div class="hero-card">
        <h3 style="margin:0 0 8px">Course Snapshot</h3>
        <div class="price">$699</div>
        <div class="small">
          <b>Certificate Included</b> <br>• Instructor-led sessions <br>• Hands-on exercises <br>• Daily recap & knowledge check
        </div>

        <div class="checks">
          <div class="check"><span class="tick">✓</span> 70% Practice</div>
          <div class="check"><span class="tick">✓</span> Real Templates</div>
          <div class="check"><span class="tick">✓</span> Work-Ready Skills</div>
        </div>

        <div style="margin-top:18px">
          <a href="#register" class="btn primary" style="width:100%;text-align:center;display:block">Register Now</a>
          <div class="helper">
            Need corporate delivery? Select <b>Corporate/Team</b> in the form below and we’ll coordinate scheduling and billing.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
  COURSE OVERVIEW
  Developer Notes:
  - 3 cards with consistent icon + heading + short copy
========================================================= -->
<section>
  <div class="container" id="section2">
    <h2>Course Overview</h2>

    <div class="grid-3">
      <div class="card">
        <div class="icon">📊</div>
        <h3>Beginner-to-Intermediate Path</h3>
        <p class="lead" style="font-size:15px;margin:0;color:var(--muted)">
          Start from the essentials and progress into formulas, functions, PivotTables, and reporting without guesswork.
        </p>
      </div>

      <div class="card">
        <div class="icon">🧩</div>
        <h3>Practical, Job-Focused Training</h3>
        <p class="lead" style="font-size:15px;margin:0;color:var(--muted)">
          Learn with hands-on exercises using real business scenarios: clean data, analyze it, and present it clearly.
        </p>
      </div>

      <div class="card">
        <div class="icon">📈</div>
        <h3>Reporting & Decision Support</h3>
        <p class="lead" style="font-size:15px;margin:0;color:var(--muted)">
          Build confidence creating charts, PivotReports, and structured summaries suitable for leadership and stakeholders.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
  COURSE OBJECTIVE
========================================================= -->
<section>
  <div class="container">
    <h2>Course Objective</h2>
    <div class="grid-2">
      <div class="card">
        <div class="icon">🎯</div>
        <h3>What This Course Delivers</h3>
        <p class="lead" style="margin:0">
          A strong foundation in Microsoft Excel that supports day-to-day operational work, reporting,
          and analysis. Participants will move from clean spreadsheet fundamentals to intermediate
          capabilities including functions, structured tables, PivotTables, charts, and dashboards.
        </p>
      </div>

      <div class="card">
        <div class="icon">🛠️</div>
        <h3>Teaching Approach</h3>
        <ul class="clean">
          <li><b>70% hands-on</b> practice with guided exercises</li>
          <li>Live demonstrations + common mistake troubleshooting</li>
          <li>Concept explanation → practice on realistic templates</li>
          <li>Daily recap sessions + quick knowledge checks</li>
          <li>Confidence building: participants explain steps and logic</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
  LEARNING OUTCOMES
========================================================= -->
<section>
  <div class="container" id="section3">
    <h2>Overall Learning Outcomes</h2>

    <div class="grid-3">
      <div class="card">
        <div class="icon">🧠</div>
        <h3>Core Excel Skills</h3>
        <ul class="clean">
          <li>Navigate the Excel interface efficiently</li>
          <li>Use clean data entry, formatting, and layout best practices</li>
          <li>Understand relative vs absolute references</li>
        </ul>
      </div>

      <div class="card">
        <div class="icon">🧮</div>
        <h3>Formulas & Functions</h3>
        <ul class="clean">
          <li>Build formulas with correct order of operations</li>
          <li>Use key functions: IF, SUMIF, COUNTIF, XLOOKUP/VLOOKUP</li>
          <li>Work with text, date/time, and error-handling functions</li>
        </ul>
      </div>

      <div class="card">
        <div class="icon">📌</div>
        <h3>Analysis & Reporting</h3>
        <ul class="clean">
          <li>Organize data with Tables, sorting, filtering, and validation</li>
          <li>Create PivotTables and PivotCharts for summary reporting</li>
          <li>Build charts and simple dashboards for decision-making</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
  CURRICULUM (CARD STYLE DAYS)
  Developer Notes:
  - Keep the same day card layout; only content changes
========================================================= -->
<section id="curriculum">
  <div class="container" id="section4">
    <h2>5-Day Curriculum (Instructor-Led)</h2>
    <p class="lead">
      Each day includes instruction + hands-on exercises. We keep it practical, structured, and workplace-relevant.
    </p>

    <div class="day-grid">
      <!-- DAY 1 -->
      <div class="card">
        <div class="day-title">
          <div>
            <div class="icon" style="margin-bottom:10px">1️⃣</div>
            <h3 style="margin-bottom:6px">Day 1 — Excel Fundamentals & Spreadsheet Essentials</h3>
            <div class="small"><b>Objective:</b> Build a strong foundation for working confidently in Excel.</div>
          </div>
          <span class="day-tag">Basics</span>
        </div>
        <hr style="border:0;border-top:1px solid rgba(0,79,89,.12);margin:16px 0">
        <ul class="clean">
          <li>Excel interface: ribbon, worksheet, workbook, quick access, navigation</li>
          <li>Data entry best practices (text vs numbers, leading zeros, consistent formats)</li>
          <li>Cells, ranges, fill handle, AutoFill, Flash Fill (intro)</li>
          <li>Formatting: number formats, alignment, borders, styles, wrapping</li>
          <li>Basic formulas: +, -, *, /, (), and order of operations</li>
          <li>Relative vs absolute references ($A$1) and when to use them</li>
          <li>Print & page setup basics (margins, scaling, headers/footers)</li>
        </ul>
        <div class="helper"><b>Outcome:</b> Create clean spreadsheets and build correct formulas with confidence.</div>
      </div>

      <!-- DAY 2 -->
      <div class="card">
        <div class="day-title">
          <div>
            <div class="icon" style="margin-bottom:10px">2️⃣</div>
            <h3 style="margin-bottom:6px">Day 2 — Essential Functions for Daily Work</h3>
            <div class="small"><b>Objective:</b> Use Excel functions to automate calculations and logic.</div>
          </div>
          <span class="day-tag">Functions</span>
        </div>
        <hr style="border:0;border-top:1px solid rgba(0,79,89,.12);margin:16px 0">
        <ul class="clean">
          <li>Function basics: syntax, arguments, nested functions (intro)</li>
          <li>Core math/stat: SUM, AVERAGE, MIN, MAX, ROUND</li>
          <li>Logical functions: IF, AND, OR (with practical scenarios)</li>
          <li>Conditional totals: SUMIF/SUMIFS, COUNTIF/COUNTIFS</li>
          <li>Lookup concepts: exact match vs approximate match</li>
          <li>XLOOKUP (preferred) + VLOOKUP (legacy support)</li>
          <li>Error handling: IFERROR and common Excel errors (#N/A, #VALUE!)</li>
        </ul>
        <div class="helper"><b>Outcome:</b> Build reliable spreadsheets using functions that reduce manual work.</div>
      </div>

      <!-- DAY 3 -->
      <div class="card">
        <div class="day-title">
          <div>
            <div class="icon" style="margin-bottom:10px">3️⃣</div>
            <h3 style="margin-bottom:6px">Day 3 — Data Management, Cleaning, and Quality Control</h3>
            <div class="small"><b>Objective:</b> Organize, validate, and clean data for accurate reporting.</div>
          </div>
          <span class="day-tag">Data</span>
        </div>
        <hr style="border:0;border-top:1px solid rgba(0,79,89,.12);margin:16px 0">
        <ul class="clean">
          <li>Excel Tables: structured references, table styles, total row</li>
          <li>Sorting & filtering (multi-level, custom lists, quick filters)</li>
          <li>Conditional formatting (rules, duplicates, highlights, data bars)</li>
          <li>Data validation (drop-downs, rules, input messages, error alerts)</li>
          <li>Text cleanup: TRIM, CLEAN, LEFT/RIGHT/MID, TEXTSPLIT (if available)</li>
          <li>Date/time basics: DATE, TODAY, NOW, formatting dates correctly</li>
          <li>Named ranges and best practices for maintainable spreadsheets</li>
        </ul>
        <div class="helper"><b>Outcome:</b> Prepare consistent, clean data that is ready for analysis.</div>
      </div>

      <!-- DAY 4 -->
      <div class="card">
        <div class="day-title">
          <div>
            <div class="icon" style="margin-bottom:10px">4️⃣</div>
            <h3 style="margin-bottom:6px">Day 4 — Charts, PivotTables, and Summary Reporting</h3>
            <div class="small"><b>Objective:</b> Turn raw data into clear summaries for stakeholders.</div>
          </div>
          <span class="day-tag">Reporting</span>
        </div>
        <hr style="border:0;border-top:1px solid rgba(0,79,89,.12);margin:16px 0">
        <ul class="clean">
          <li>Chart selection: column, bar, line, pie (when to use what)</li>
          <li>Chart formatting: titles, labels, axes, legends, readability</li>
          <li>PivotTables: build, refresh, group, sort, filter</li>
          <li>PivotTable calculations: values, % of total, running totals (intro)</li>
          <li>Slicers and timelines for interactive filtering (where available)</li>
          <li>PivotCharts for executive-ready summaries</li>
          <li>Common reporting mistakes and how to avoid them</li>
        </ul>
        <div class="helper"><b>Outcome:</b> Build professional summaries using PivotTables and charts.</div>
      </div>

      <!-- DAY 5 -->
      <div class="card">
        <div class="day-title">
          <div>
            <div class="icon" style="margin-bottom:10px">5️⃣</div>
            <h3 style="margin-bottom:6px">Day 5 — Intermediate Productivity: What-If, Dashboards, and Automation Basics</h3>
            <div class="small"><b>Objective:</b> Apply intermediate tools to create faster, more scalable Excel workbooks.</div>
          </div>
          <span class="day-tag">Intermediate</span>
        </div>
        <hr style="border:0;border-top:1px solid rgba(0,79,89,.12);margin:16px 0">
        <ul class="clean">
          <li>What-If Analysis: Goal Seek + basic scenarios</li>
          <li>Advanced worksheet practices: protecting sheets, locked cells, safe sharing</li>
          <li>Dashboard basics: layout, KPI cards, chart placement, consistency</li>
          <li>Data import overview: CSV/text import (practical workplace use)</li>
          <li>Intro to Power Query (concepts + simple cleaning steps, if available)</li>
          <li>Automation basics: recording a simple macro (optional overview)</li>
          <li>Final lab: build a mini report from raw data → cleaned table → Pivot → chart summary</li>
        </ul>
        <div class="helper"><b>Outcome:</b> Deliver a complete Excel reporting workflow with intermediate productivity tools.</div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
  FAQ
========================================================= -->
<section>
  <div class="container" id="section6">
    <h2>Frequently Asked Questions</h2>

    <div class="card">
      <div class="faq-item">
        <strong>Who should take this course?</strong>
        Professionals and students who want to build strong, job-ready Excel skills for office work, reporting, and analysis—no prior experience required.
      </div>

      <div class="faq-item">
        <strong>Is this course hands-on?</strong>
        Yes. The training is designed with <b>70% practice</b>, guided exercises, and real templates used in workplace scenarios.
      </div>

      <div class="faq-item">
        <strong>Do I need any special software?</strong>
        A laptop/desktop with Microsoft Excel installed is recommended. We also cover practical differences you may see across common Excel versions.
      </div>

      <div class="faq-item">
        <strong>Will I get a certificate?</strong>
        Yes. A BTMG USA course completion certificate is provided after successful completion.
      </div>

      <div class="faq-item">
        <strong>Can my organization enroll a team?</strong>
        Yes. Use the registration form below and select <b>Corporate/Team</b>.
      </div>
    </div>
  </div>
</section>

<!-- =========================================================
  CTA + Embedded Registration Form
  Developer Notes:
  - Keep anchor structure consistent (#register, #reg-form)
========================================================= -->
<section id="register">
  <div class="container" style="text-align:center" id="section5">
    <h2>Ready to Become Confident in Excel?</h2>
    <p class="lead">Register now to reserve your seat for the next MS Excel batch.</p>

    <div style="margin-top:22px">
      <a href="#reg-form" class="btn primary">Register Now</a>
      <a href="#curriculum" class="btn secondary">Review Curriculum</a>
    </div>

    <!-- Embedded Form -->
    <div id="reg-form" style="margin-top:28px;text-align:left">
      <div class="form-wrap">
        <h3 style="margin:0 0 10px;color:var(--btmg-teal)">Student Registration</h3>
        <p class="lead" style="font-size:15px;margin-top:0">
          Fill the form below. A BTMG USA coordinator will confirm schedule and payment details.
        </p>

        <!-- ==========================================
             Developer Notes:
             - Hook this form to your backend.
             - Suggested endpoint: POST /api/public/registrations
             - Validate email/phone on server side as well.
        =========================================== -->
        @if(session('success'))
    <p style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </p>
@endif

<form action="{{ route('registration.send') }}" method="POST">
    @csrf

    <div class="form-grid">
        <div>
            <label>Full Name</label>
            <input required placeholder="Your full name" name="fullName" />
        </div>

        <div>
            <label>Email</label>
            <input required type="email" placeholder="name@email.com" name="email" />
        </div>

        <div>
            <label>Phone</label>
            <input required placeholder="+1 (___) ___-____" name="phone" />
        </div>

        <div>
            <label>Registration Type</label>
            <select name="type" required>
                <option value="Individual">Individual</option>
                <option value="Corporate">Corporate / Team</option>
            </select>
        </div>
    </div>

    <div style="margin-top:12px">
        <label>Message (Optional)</label>
        <textarea name="message"
            placeholder="Any questions, goals, or corporate training request details..."></textarea>
    </div>

    <div class="form-disclaimer mt-4">
        <label class="disclaimer-checkbox">
            <input type="checkbox" required>
            <span class="checkmark"></span>
            <span class="disclaimer-text">
                <strong>Consent & Disclaimer</strong><br>
                I confirm that all information provided is accurate.<br>
                I agree that my information will be used by <strong>BTMGUSA</strong>
                solely for educational and enrollment purposes.<br>
                I understand that my data will not be shared with any third-party organizations.
            </span>
        </label>
    </div>

    <div style="margin-top:16px; display:flex; gap:12px; flex-wrap:wrap; align-items:center">
        <button class="btn primary" type="submit">Submit Registration</button>
        <div class="helper">
            By submitting, you agree to be contacted by BTMG USA for scheduling and payment coordination.
        </div>
    </div>
</form>

      </div>
    </div>

  </div>
</section>


<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">

            <!-- LOGO + TEXT -->
            <div class="col-md-6 mb-6">
                <img src="img/footer-logo.png" width="120" alt="Logo" style="margin-bottom: 20px;">
                <p class="footer-logo-text mt-3">
                    At BTMG, we simplify processes and enhance <br>performance.
                    Your growth and trust remain our priority.
                </p>

                <div class="footer-social mt-3">
                   <p> <span>Follow Us:</span>&ensp;&ensp;
                    <a target="_blank" href="https://www.facebook.com/share/1A71yimN9m/"> <i class="fa fa-facebook" style="padding: 6px 11px 6px 9px;"></i></a>
                    <a target="_blank" href="https://www.instagram.com/btmgusa?igsh=MWdha2s0M2l1Yzc4aw%3D%3D">  <i class="fa fa-instagram"></i></a>
                  <a target="_blank" href="https://www.linkedin.com/company/btmg-usa/?viewAsMember=true">   <i class="fa fa-linkedin"></i></a></p>
                </div>
            </div>

           

            <!-- NAVIGATION -->
            <div class="col-md-3 mb-3">
                <h6 class="fw-bold mb-3">Quick Links</h6>
                <a href="https://www.btmgusa.com/">Home</a>
                <a href="#section2">Overview</a>
                <a href="#section3">Overall Learning Outcomes</a>
                <a href="#section4">Instructor-Led</a>
                <a href="#section5">Register now</a>
            </div>
             <div class="col-md-3 mb-3">
                <h6 class="fw-bold mb-3">Latest Courses</h6>
                <a href="AgileandAIScrumMaster.html">Agile & AI Scrum Master</a>
                <a href="Microservices.html">Microservices</a>
                <a href="Excel.html">Excel</a>
                <a href="Python.html">Python.html</a>
            </div>


        </div>
    </div><br>
    <center> © 2025 BTMG USA —  Professional Training</center>
</footer>

<!-- SCROLL TO TOP BUTTON -->
<div class="scroll-top">
  <a href="#section6">  <i class="fa fa-arrow-up"></i></a>
</div>


<!-- =========================================================
BTMG USA MS Excel Course Page
Theme replication: matches provided reference layout/styles
Date: 2025-12-29
========================================================= -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"e982557791714a5ba1de79c2e184fae4","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>
