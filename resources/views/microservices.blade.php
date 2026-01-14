

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Microservices Architecture with AI (Beginner → Intermediate) | BTMG USA</title>
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
/* =========================================================
   BTMG USA — PYTHON COURSE THEME (1:1 REUSED)
========================================================= */
:root{
  --btmg-teal:#004F59;
  --btmg-teal-600:#0b6a76;
  --btmg-orange:#F58220;
  --text:#1f2937;
  --muted:#6b7280;
  --bg:#ffffff;
  --card:#f7faf9;
  --line:#eef2f7;
  --success:#16a34a;
}

*{box-sizing:border-box}
body{
  margin:0;
  font-family:Inter,system-ui,Segoe UI,Arial,sans-serif;
  color:var(--text);
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
h1{font-size:clamp(32px,4vw,44px)}
h2{font-size:clamp(22px,2.4vw,30px);color:var(--btmg-teal)}
p.lead{font-size:18px;color:var(--muted);line-height:1.6}

/* =========================================================
   HERO
========================================================= */
.hero{
  background:
    linear-gradient(180deg,rgba(0,79,89,.12),transparent),
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
  gap:28px;
}
.hero-meta{
  display:flex;
  flex-wrap:wrap;
  gap:10px;
  margin-top:16px;
}
.pill{
  display:inline-flex;
  align-items:center;
  gap:8px;
  background:#fff;
  border:1px solid rgba(0,79,89,.14);
  padding:10px 14px;
  border-radius:999px;
  font-weight:700;
  font-size:13px;
}
.pill .dot{
  width:10px;height:10px;border-radius:50%;
  background:linear-gradient(135deg,var(--btmg-teal),var(--btmg-orange));
}

/* =========================================================
   COURSE SNAPSHOT (MATCHES PYTHON)
========================================================= */
.snapshot{
  background:var(--card);
  border-radius:22px;
  padding:30px;
  border:2px solid rgba(245,130,32,.55);
}
.price{
  font-size:44px;
  font-weight:900;
  color:var(--btmg-teal);
}
.snapshot-desc{
  font-size:15px;
  color:var(--muted);
  line-height:1.6;
  margin:12px 0 20px;
}
.snapshot-pills{
  display:flex;
  flex-wrap:wrap;
  gap:12px;
  margin-bottom:22px;
}
.snapshot-pill{
  display:flex;
  align-items:center;
  gap:10px;
  background:#ecfdf5;
  color:#047857;
  border:1px solid #bbf7d0;
  padding:12px 18px;
  border-radius:999px;
  font-weight:800;
  font-size:14px;
}
.snapshot-pill span{
  width:22px;height:22px;
  display:grid;place-items:center;
  background:#d1fae5;
  border-radius:50%;
}
.snapshot .btn{
  width:100%;
  text-align:center;
  margin-bottom:12px;
}
.snapshot .helper{
  font-size:14px;
  color:var(--muted);
  line-height:1.6;
}

/* =========================================================
   BUTTONS
========================================================= */
.btn{
  display:inline-block;
  padding:16px 22px;
  border-radius:14px;
  font-weight:900;
  border:1px solid var(--btmg-teal);
  text-decoration:none;
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

/* =========================================================
   GRIDS & CARDS
========================================================= */
.grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.grid-2{display:grid;grid-template-columns:repeat(2,1fr);gap:22px}
.day-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:22px}
@media(max-width:900px){
  .hero-grid,.grid-3,.grid-2,.day-grid{grid-template-columns:1fr}
}
.card{
  background:var(--card);
  border-radius:18px;
  padding:24px;
  border:1.5px solid rgba(245,130,32,.45);
}
.icon{
  width:50px;height:50px;
  border-radius:14px;
  background:linear-gradient(135deg,var(--btmg-teal),var(--btmg-orange));
  color:#fff;
  display:grid;place-items:center;
  font-size:22px;
  margin-bottom:16px;
}
ul.clean{padding-left:18px;color:var(--muted);line-height:1.7}

/* =========================================================
   CTA + REGISTRATION (MATCHES PYTHON)
========================================================= */
.cta{text-align:center}
.cta-actions{
  display:flex;
  justify-content:center;
  gap:14px;
  margin-top:18px;
  flex-wrap:wrap;
}
.form-wrap{
  background:
    linear-gradient(180deg,rgba(0,79,89,.08),transparent),
    linear-gradient(90deg,#fff7ef,#ffffff);
  border-radius:22px;
  padding:30px;
  border:2px solid rgba(245,130,32,.55);
  margin-top:32px;
}
.form-grid{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:16px;
}
@media(max-width:900px){.form-grid{grid-template-columns:1fr}}
label{font-weight:800;font-size:13px;color:#0a3c43}
input,select,textarea{
  width:100%;
  padding:14px;
  border-radius:14px;
  border:1px solid #cbd5e1;
}
textarea{min-height:120px}
.form-footer{
  display:flex;
  gap:16px;
  align-items:center;
  margin-top:18px;
  flex-wrap:wrap;
}
.form-footer .helper{
  font-size:14px;
  color:var(--muted);
  line-height:1.6;
}


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
            <i class="bi bi-envelope me-1" style="color: #F47B1E"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="751c1b131a35170118120006145b161a18">[email&#160;protected]</a> &nbsp;&nbsp;
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
               <!--  <li class="nav-item">
                    <a class="nav-link" href="#section4">Services</a>
                </li> -->
            </ul>

            <!-- Contact Button (on right) -->
            <a href="#section5" class="btn ms-lg-3 mt-3 mt-lg-0 btn-contact">
               Register now
            </a>

        </div>
    </div>
</nav>
<!-- ================= HERO ================= -->
<section class="hero">
  <div class="container">
    <span class="badge">BTMG USA Professional Training</span>

    <div class="hero-grid">
      <div>
        <h1>Microservices Architecture with AI<br>(Beginner → Intermediate)</h1>
           <p class="lead">Date:00-00-0000<br></p>
        <p class="lead">
          A hands-on, instructor-led program focused on designing, modernizing,
          and scaling enterprise-grade microservices using cloud-native patterns
          and AI-assisted development workflows.
        </p>

        <div class="hero-meta">
          <span class="pill"><span class="dot"></span> 5 Days</span>
          <span class="pill"><span class="dot"></span> Live Zoom Session</span>
          <span class="pill"><span class="dot"></span> Certification Included</span>
          <span class="pill"><span class="dot"></span> Enterprise Focus</span>
        </div>

        <div style="margin-top:28px;display:flex;gap:14px;flex-wrap:wrap">
          <a href="#register" class="btn primary">Register Now</a>
          <a href="#curriculum" class="btn secondary">Review Curriculum</a>
        </div>
      </div>

      <div class="snapshot">
        <h3>Course Snapshot</h3>
        <div class="price">$999</div>

        <div class="snapshot-desc">
        <b>  Certificate Included </b><br>• Instructor-led sessions <br>• Hands-on labs <br>•
          Daily recap & knowledge check
        </div>

        <div class="snapshot-pills">
          <div class="snapshot-pill"><span>✓</span>70% Practice</div>
          <div class="snapshot-pill"><span>✓</span>Live Debugging</div>
          <div class="snapshot-pill"><span>✓</span>Real Systems</div>
        </div>

        <a href="#register" class="btn primary">Register Now</a>

        <div class="helper">
          Want team training? Select <b>Corporate/Team</b> in the form below
          and we’ll reach out.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= COURSE OVERVIEW ================= -->
<section>
  <div class="container" id="section2">
    <h2>Course Overview</h2>
    <div class="grid-3">
      <div class="card">
        <div class="icon">🏗️</div>
        <h3>Modern Architecture</h3>
        <p class="lead" style="font-size:15px">
          Learn microservices principles, scalability drivers,
          and enterprise design trade-offs.
        </p>
      </div>
      <div class="card">
        <div class="icon">☁️</div>
        <h3>Cloud-Native Delivery</h3>
        <p class="lead" style="font-size:15px">
          Understand gateways, async communication,
          and deployment-ready patterns.
        </p>
      </div>
      <div class="card">
        <div class="icon">🤖</div>
        <h3>AI-Assisted Development</h3>
        <p class="lead" style="font-size:15px">
          Apply AI tools to accelerate testing and refactoring responsibly.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ================= LEARNING OUTCOMES ================= -->
<section>
  <div class="container" id="section3">
    <h2>Learning Outcomes</h2>
    <div class="grid-3">
      <div class="card">
        <h3>Architecture Foundations</h3>
        <ul class="clean">
          <li>Define service boundaries and patterns</li>
          <li>Apply scalability and resilience principles</li>
        </ul>
      </div>
      <div class="card">
        <h3>Modernization Skills</h3>
        <ul class="clean">
          <li>Plan monolith-to-microservices migration</li>
          <li>Adopt event-driven communication</li>
        </ul>
      </div>
      <div class="card">
        <h3>Intermediate Delivery</h3>
        <ul class="clean">
          <li>Operate services reliably</li>
          <li>Use AI tools with engineering judgment</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ================= CURRICULUM ================= -->
<section id="curriculum">
  <div class="container" id="section4">
    <h2>5-Day Curriculum</h2>

    <div class="day-grid">
      <div class="card">
        <h3>Day 1 — Microservices Foundations</h3>
        <ul class="clean">
          <li>Microservices vs monoliths</li>
          <li>Service discovery & fault tolerance</li>
          <li>Cloud-native principles</li>
        </ul>
      </div>
      <div class="card">
        <h3>Day 2 — Deployment & Service Design</h3>
        <ul class="clean">
          <li>API gateways and async messaging</li>
          <li>Clean service boundaries</li>
        </ul>
      </div>
      <div class="card">
        <h3>Day 3 — Application Modernization</h3>
        <ul class="clean">
          <li>Breaking monoliths safely</li>
          <li>Migration strategies</li>
        </ul>
      </div>
      <div class="card">
        <h3>Day 4 — Event-Driven Systems</h3>
        <ul class="clean">
          <li>Kafka fundamentals</li>
          <li>Decoupled service design</li>
        </ul>
      </div>
      <div class="card">
        <h3>Day 5 — AI for Developers</h3>
        <ul class="clean">
          <li>AI-assisted coding & testing</li>
          <li>Engineering judgment & quality gates</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ================= CTA + REGISTRATION ================= -->
<section id="register">
  <div class="container cta" id="section5">
    <h2>Ready to Build Scalable Microservices with Confidence?</h2>
    <p class="lead">Register now to reserve your seat for the next batch.</p>

    <div class="cta-actions">
      <a href="#reg-form" class="btn primary">Register Now</a>
      <a href="#curriculum" class="btn secondary">Review Curriculum</a>
    </div>

    <div id="reg-form" class="form-wrap">
      <h3>Student Registration</h3>
      <p class="lead" style="font-size:15px">
        Fill the form below. A BTMG USA coordinator will confirm schedule and payment details.
      </p>

      @if(session('success'))
    <p style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </p>
@endif

<form action="{{ route('microservices.send') }}" method="POST" style="text-align: left;">
    @csrf

    <div class="form-grid">
        <div>
            <label>Full Name</label>
            <input name="fullName" placeholder="Your full name" required>
        </div>

        <div>
            <label>Email</label>
            <input name="email" type="email" placeholder="name@email.com" required>
        </div>

        <div>
            <label>Phone</label>
            <input name="phone" placeholder="+1 (___) ___-____" required>
        </div>

        <div>
            <label>Registration Type</label>
            <select name="type">
                <option value="Individual">Individual</option>
                <option value="Corporate / Team">Corporate / Team</option>
            </select>
        </div>
    </div>

    <div style="margin-top:16px">
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

    <div class="form-footer">
        <button class="btn primary" type="submit">Submit Registration</button>
        <div class="helper">
            By submitting, you agree to be contacted by BTMG USA for scheduling and payment coordination.
        </div>
    </div>
</form>

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


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"e982557791714a5ba1de79c2e184fae4","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>
