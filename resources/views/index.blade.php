

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTMGUSA</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="icon" type="image/png" href="{{ asset('storage/img/BTMG Icon.png') }}">
    <style>
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
    
        body {
            font-family: "Inter", sans-serif;
            background: #ffffff;
        }
        .tag-label {
           background: #FBFBFB;
           color: #135864;

            padding: 7px 4px;
            font-size: 17px;
            border-radius: 6px;
            display: inline-block;
            margin-bottom: 15px;


font-weight: 500;



        }
       /* .btn-orange {
            background: #FF8A34;
            color: #fff;
            padding: 10px 20px;
        }
        .btn-orange:hover {
            background: #e87624;
            color: #fff;
        }*/
        .btn-darkblue {
            background: #003F62;
            color: #fff;
            padding: 10px 20px;
        }
        .btn-darkblue:hover {
            background: #002f48;
            color: #fff;
        }
        .contact-box {
            /*background: #fff;
            border-radius: 10px;
            padding: 30px;*/
            box-shadow: 0px 3px 12px rgba(0,0,0,0.08);
            border-left: 6px solid #ff8f32;
        }

          .contact-box1 {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 3px 12px rgba(0,0,0,0.08);
        }

        .section-wrapper {
            padding-top: 80px;
/*            padding-bottom: 80px;*/
        }
/*     services   */

.text-orange { color: #ff7a00; }

.services-section {
  background: #fafafa;
}

.service-card {
    padding: 40px !important;
  background: #fff;
  border-radius: 14px;
  transition: 0.35s ease;
  border: 1px solid #eee;
  box-shadow: 0px 4px 10.8px 0px #00000026;
}

.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 18px 35px rgba(0, 0, 0, 0.12);
  background: #ff7a00;
  color: white;
}

/*.featured {
  background: #ff7a00;
  color: white;
}*/

/* Tags */
.tag {
 background: #ffe6d1;
    padding: 4px 8px;
    /* border-radius: 50px; */
    font-size: 13px;
    margin-right: 5px;
    opacity: 0;
    animation: fadeIn 0.8s forwards;
    color: #F47B1E;
}

.tag:nth-child(1) { animation-delay: 0.1s; }
.tag:nth-child(2) { animation-delay: 0.2s; }
.tag:nth-child(3) { animation-delay: 0.3s; }
.tag:nth-child(4) { animation-delay: 0.4s; }

.tag-dark {
  background: rgba(255,255,255,0.25);
  color: white;
}

.btn-orange {
  background: #ff7a00 !important;
    color: #fff !important;
    border-radius: 3px !important;
}

.btn-orange:hover {
  background: #e06900;
  color: #fff;
}

.details-list {
  padding-left: 18px;
 

    font-weight: 400;
    font-style: Regular;
    font-size: 14px;
    leading-trim: NONE;
    /* line-height: 100%; */
    letter-spacing: 0%;
/*    padding-top: 10px;*/
    padding-bottom: 7px;
    color: #8F8F8F !important;
}

.details-list li{
padding: 3px 0px;
}


@keyframes fadeIn {
  from { opacity: 0; transform: translateY(5px); }
  to   { opacity: 1; transform: translateY(0); }
}

/*end*/

.btn-contact{
    

    background: #F47B1E !important;
    color: white !important;
    padding: 7px 20px !important;
    border-radius: 2px !important;

}
.title-h5{

font-weight: 700;
font-style: Bold;
font-size: 17px;
leading-trim: NONE;
line-height: 100%;
letter-spacing: 0%;
color: #0E2427;



}
.services-section p{
    /* font-family: DM Sans; */
    font-weight: 400;
    font-style: Regular;
    font-size: 14px;
    leading-trim: NONE;
    /* line-height: 100%; */
    letter-spacing: 0%;
    padding: 10px 0px;
    color: #8F8F8F !important;

}

.section-p{
     font-weight: 400;
    font-style: Regular;
    font-size: 14px;
    leading-trim: NONE;
    /* line-height: 100%; */
    letter-spacing: 0%;
    padding: 10px 0px;
    color: #8F8F8F !important;
}

.title-h6{
    padding-top: 10px;
    color: #707070;
/*font-family: DM Sans;*/
font-weight: 700;
font-style: Bold;
font-size: 17px;
leading-trim: NONE;
/*line-height: 100%;*/
letter-spacing: 0%;

}

/*.icon-img{
    margin-right: 18px;
}*/
.title-h2{
    font-size: 40px;
}

/*who we are*/
.left-card {
    background-color: #0A5560; /* same dark teal color */
    min-height: 250px;
}

.custom-img {
   width: 535;
height: 356;
top: 674px;
left: -54px;
angle: 0 deg;
opacity: 1;

}

.step-box {
    background-color: #F58220;
    color: #fff;
    text-align: center;
    padding: 18px 22px;
    font-weight: 700;
    margin-right: 10px;
    border-radius: 4px;
    flex: 1;
    font-size: 24px;
    line-height: 1.2;
}

.step-box span {
    font-size: 14px;
    font-weight: 500;
}

/*products*/

.product-section {
    background-color: #0A5560; /* teal background */
}

.section-label {
    background-color: rgba(255,255,255,0.2);
    font-size: 18px !important;
}

/* Cards */
.product-card {
    padding: 40px;
    background: #ffffff;
    border-radius: 12px;
    text-align: left;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  
}

/* Orange floating icon bubble */
.icon-bubble {
    position: absolute;
    top: -20px;
    right: 20px;
    background: #F58220;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.icon-img {
    width: 65px;
    height: 65px;
    object-fit: contain;
}

/* Tags */
.tag {
    display: inline-block;
    background-color: #F4F4F4;
    color: #333;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    margin-right: 5px;
    margin-bottom: 5px;
}
/*case studies*/

.case-section {
/*    background-color: #F7FDFC; /* light subtle background */*/
}

.case-img {
    max-width: 430px;
}

/* Case Studies badge */
.section-badge {
    background-color: #E7EEF2;
    color: #0A2E2D;
    padding: 6px 14px;
    font-size: 13px;
    border-radius: 6px;
}

/* Cards */
.case-card {
    background: #ffffff;
    border: 1px solid #DDE6EB;
    border-radius: 34px;
    cursor: pointer;
    transition: 0.2s;
}

.case-card:hover {
    border-color: #0A5C5D;
}

/* Active card */
.case-card.active {
    border: 1px solid #0A5C5D;
}

/* Check icon bubble */
.check-icon {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background-color: #0A5C5D;
    color: #fff;
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Tags */
.tag {
    display: inline-block;
    background-color: #EAF4FF;
    color: #2A5FA0;
    padding: 4px 10px;
    font-size: 12px;
    border-radius: 6px;
    margin-right: 6px;
}

/*job cards*/
 .job-card {
    background: #f6f6f6;
      border-radius: 10px;
      padding: 30px;
     background: #F8F8F8;

      transition: 0.3s;
    }

    .job-card:hover {
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }

    .job-number {
/*        float: inline-start;*/
      font-weight: 700;
      color: #8a8a8a;
      font-size: 20px;
    }
.job-card h5{
    color: #0E2427;

font-weight: 700;
font-style: Bold;
font-size: 26px;


}

.job-card p{

font-weight: 400;
font-style: Regular;
font-size: 14px;
padding-bottom: 15px;
color: #8F8F8F;

}

    .highlight {
      background: #ff8f32 !important;
      color: #fff;
    }

    .highlight .badge {
      background: #fff !important;
      color: #ff8f32 !important;
    }

    .badge-custom {
    background: #13586426;
     color: #135864 !important;

      font-weight: 600;

font-weight: 500;
font-style: Medium;
font-size: 18px ;


    }

        /* CONTACT CARD */
  /*  .contact-box {
        background: #0f5d63;
        color: #fff;
       
        border-radius: 6px;
        border-left: 8px solid #ff8f32;
    }
*/
      .contact-box1 {
        background: #0f5d63;
       
        padding: 30px;
        border-radius: 6px;
       
    }

    .contact-item {
        padding: 28px;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    .contact-item:last-child {
        border-bottom: none;
    }

    .contact-item i {
        font-size: 30px;
        margin-bottom: 10px;
        display: block;
    }

    /* FORM BOX */
    .form-box {
        background: #f6f6f6;
        padding: 40px;
        border-radius: 8px;
    }

    .form-box input, .form-box textarea {
        background: #fff;
        border: none;
        padding: 7px;
    font-size: 13px !important;
    }

    .send-btn {
        background: #ff8f32;
        color: #fff;
        border: none;
        padding: 10px 25px;
        border-radius: 4px;
        font-weight: 600;
    }

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

/*    */


.contact-box {
    background-color: #0D5A63;       /* teal background like your image */
/*    padding: 18px 30px;*/
    color: #fff;
    border-radius: 4px;
    width: fit-content;
}

.contact-box .icon i {
    font-size: 32px;
    color: #ffffff;
}

.contact-label {
    color: #dbecee;
    font-size: 16px;
}

.contact-number {
    font-size: 20px;
    font-weight: 700;
    color: #ffffff;
}


.service-item {
/*    background: #f6f6f6;          /* light gray section like screenshot */*/
    padding: 20px;
    border-radius: 5px;
}
.job-card:hover{
background: #ff8f32 !important;
    color: #fff !important;
}
.service-number {
    font-size: 20px;
    font-weight: 600;
    color: #848484;
}

.vertical-line {
/*    border-left: 2px dotted #3fa7ff;  /* same blue dotted vertical line */*/
    height: 45px;
    margin-top: 5px;
}

.service-title {
    font-size: 22px;
    font-weight: 700;
    color: #0d2b2f;                  /* dark teal text */
}

.service-desc {
    font-size: 14px;
    color: #555;
    margin-top: 2px;
    line-height: 1.4;
}

.bi-arrow-down{


border-radius: 30px;

color: white;
padding: 5px 9px;
background: #135864;
}

.product-tag{
    background: #F47B1E26;
padding: 5px;
font-weight: 600;
font-style: Medium;

font-size: 18px;
color: #F47B1E;

}

.tags > .product-tag{
    background: #F47B1E26;
padding: 5px;
font-weight: 600;
font-style: Medium;

font-size: 13px;
color: #F47B1E;

}

.product-btn{
    background: #F47B1E !important;
color: white !important;

font-weight: 400 !important;
font-style: Regular !important;
font-size: 16px !important;
    margin-top: 12px;


}

.product-card p{
color: #8F8F8F !important;
    font-weight: 400;
    font-style: Regular;
    font-size: 14px;
    padding: 8px 0px;



}
 
.wwa-card {
    background-color: #0D6572;     /* teal background */
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    min-height: 260px;
}
.wwa-card p{
   padding: 3px 0px;
font-weight: 400;
font-style: Regular;
font-size: 14px;


}
/* Floating image */
.wwa-img {
    position: absolute;
    left: -150px;                   /* pushes image outside box */
    bottom: 0;
    height: 300px;
    object-fit: contain;
}

/* text section */
.wwa-text {
    width: 60%;
}

@media (max-width: 768px) {
    .wwa-card {
        flex-direction: column;
        text-align: center;
        padding-top: 180px;
    }

    .wwa-img {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        height: 250px;
        bottom: auto;
        top: -80px;
    }

    .wwa-text {
        width: 100%;
    }
}
.btn-darkblue {
    background: #002f48 !important;
    color: #fff !important;
}

/* Labels */
.form-label {
    font-size: 12px;
    color: #6c757d;
}

/* Inputs */
.custom-input {
    background: #ffffff;
    border: 1px solid #e0dfdb;
    border-radius: 6px;
    height: 43px;
    padding-left: 12px;
    font-size: 13px !important;
}

.custom-input:focus {
    border-color: #1a73e8;
    box-shadow: none;
}

/* Country selector */
.custom-select-country {
    border: 1px solid #e0dfdb;
    border-right: 0;
    border-radius: 6px 0 0 6px;
    padding: 0 12px;
    background: #ffffff;
    height: 48px;
    font-size: 13px;
    color: #8F8F8F !important;
}

.custom-select-country:focus {
    border-color: #1a73e8;
    outline: none;
}

/* Buttons */
.btn-warning {
    background: #f7922f;
    border: none;
    border-radius: 6px;
}

.email-btn {
    background: #0c5a5d !important;
    color: white !important;
    border-radius: 3px !important;
    border: none !important;
}

.email-btn:hover {
    background: #084648 !important;
}

.bi-person-workspace {
   background: #135864;
float: right;
    color: white;
    padding: 5px 7px;
    font-size: 19px;
    border-radius: 24px;
}

.section-box {
   
    background: #f1f1f1;
    transition: background 0.4s ease;
}

/* Highlight color */
.highlight {
   
   
}
.custom-modal {
    background: #fff9f2;
    border-radius: 14px;
    padding: 30px;
    position: relative;
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.2);
}

/* Close button */
.close-btn {
    position: absolute;
    top: 12px;
    right: 12px;
    border: none;
    background: #f9e0d0;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    font-size: 20px;
    line-height: 28px;
    cursor: pointer;
    transition: 0.3s;
}

.close-btn:hover {
    background: #f5c7af;
}

/* Inputs */
.custom-input {
    background: #ffffff;
    height: 45px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 15px;
}

.custom-input:focus {
    border-color: #f7922f;
    box-shadow: none;
}

/* Submit button */
.submit-btn {
    background: #f7922f !important;
    border-radius: 6px;
    padding: 10px;
}
/* job cards */
/* UNIVERSAL HOVER EFFECT FOR JOB CARDS */
.job-card {
    background: #F8F8F8;
    transition: 0.35s ease;
    border-radius: 10px;
    padding: 25px;
}

.job-card:hover {
    background: #ff7a00 !important;
    color: #fff !important;
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.18);
}

/* Make all text white on hover */
.job-card:hover h5,
.job-card:hover p,
.job-card:hover span,
.job-card:hover .service-number,
.job-card:hover .service-title,
.job-card:hover .service-desc {
    color: #fff !important;
}
.service-item {
    background: transparent !important;
}

/* Badge on hover */
.job-card:hover .badge-custom {
    background: rgba(255,255,255,0.25) !important;
    color: #fff !important;
}

/* Vertical dotted line turns white */
.vertical-line {
    width: 2px;
    height: 100%;
    border-left: 2px dotted #8a8a8a;
}

.job-card:hover .vertical-line {
    border-left-color: #fff !important;
}

/* Number styling */
.service-number {
    font-weight: 700;
    color: #8a8a8a;
    font-size: 20px;
}

.job-card:hover .service-number {
    color: #fff !important;
}


/* services portion */
/* --- UNIVERSAL HOVER EFFECT FOR ALL SERVICE CARDS --- */
.services-section .row {
    display: flex;
    flex-wrap: wrap;
}

.service-card {
    height: 100%;
    display: flex;
    flex-direction: column;
}
.service-card button {
    margin-top: auto;
}


.service-card:hover {
    background: #ff7a00 !important;
    color: #fff !important;
    transform: translateY(-10px);
    box-shadow: 0 18px 35px rgba(0, 0, 0, 0.18);
    border-color: #ff7a00;
}

/* Make all text inside hover white */
.service-card:hover h5,
.service-card:hover h6,
.service-card:hover p,
.service-card:hover li,
.service-card:hover .details-list,
.service-card:hover .product-tag,
.service-card:hover .tag,
.service-card:hover span {
    color: #fff !important;
}

/* Make icons/images turn white */
.service-card:hover img.icon-img {
    filter: brightness(0) invert(1);
}

/* Tags on hover */
.service-card:hover .product-tag {
    background: rgba(255, 255, 255, 0.25) !important;
    border-color: transparent !important;
}

.service-card:hover .tag {
    background: rgba(255, 255, 255, 0.25) !important;
    color: #fff !important;
}

/* Buttons inside hover card */
.service-card:hover .btn-orange {
    background: #fff !important;
    color: #ff7a00 !important;
}

.service-card:hover .btn-light {
    background: #fff !important;
    color: #ff7a00 !important;
}

/* --- REMOVE DEFAULT HIGHLIGHT OF FEATURED CARD --- */
.featured {
    background: #fff !important;
    color: #6c757d!important;
}

.featured h5,
.featured h6,
.featured p,
.featured ul li {
color: #6c757d!important;
}

.featured .tag-dark {
    background: #ffe6d1 !important;
    color: #F47B1E !important;
}

.featured img.icon-img {
    filter: none !important;
    
}
.featured:hover img.icon-img {
    filter: brightness(0) invert(1) !important;
}


/* ===== COURSES SECTION ===== */
.courses-section {
    background: #f7f7f7;
}

.course-card {
    position: relative;
    overflow: hidden;
    border-radius: 18px;
    height: 100%;
    box-shadow: 0 8px 22px rgba(0,0,0,0.12);
    transition: 0.4s ease;
}

.course-card img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    transition: 0.4s ease;
}

.course-card:hover img {
    transform: scale(1.1);
}

.course-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(13,90,99,0.95),
        rgba(13,90,99,0.2)
    );
    padding: 25px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    color: #fff;
}

.course-badge {
    background: #F47B1E;
    font-size: 12px;
    padding: 4px 10px;
    border-radius: 20px;
    width: fit-content;
    margin-bottom: 10px;
}

.course-overlay h5 {
    font-weight: 700;
    margin-bottom: 8px;
}

.course-overlay p {
    font-size: 14px;
    opacity: 0.9;
}

.course-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 12px;
}

.course-footer span {
    font-size: 13px;
}

.course-btn {
    background: #fff;
    color: #0D5A63;
    padding: 6px 16px;
    font-size: 13px;
    border-radius: 20px;
    font-weight: 600;
    text-decoration: none;
}

.course-btn:hover {
    background: #F47B1E;
    color: #fff;
}

            </style>
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
</head>

<body>
   

<div class="topbar">
    <div class="container d-flex justify-content-between align-items-center">

        <div>
            <i class="bi bi-clock" style="color: #F47B1E"></i> 9:00AM - 6:00PM &nbsp;&nbsp;
            <i class="bi bi-envelope me-1" style="color: #F47B1E"></i> 
            
            <script>
  document.write("info" + "@" + "btmgusa.com");
</script> &nbsp;&nbsp;
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
        <img src="{{ asset('storage/img/logo.png') }}" style="height:50px;">

        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-center" id="mainNav">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#section6">Home</a>
                </li>
                  <li class="nav-item">
     <a class="nav-link" href="https://phplaravel-1208793-6115817.cloudwaysapps.com/" target="_blank">Btmg Training </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section1">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">Products</a>
                </li>
               <!--  <li class="nav-item">
                    <a class="nav-link" href="#section3">Courses</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section4">Services</a>
                </li>
            </ul>

            <!-- Contact Button (on right) -->
            <a href="#section5" class="btn ms-lg-3 mt-3 mt-lg-0 btn-contact">
                Contact Us
            </a>

        </div>
    </div>
</nav>
    <section class="" id="section6" style="    margin-top: 40px;">
        <div class="container">

            <div class="row align-items-center"
>
                <!-- Left Column -->
                <div class="col-lg-6 mb-5" style="margin-top: 40px;">
                    <span class="tag-label">Since 2015 • USA Based • Offshore Ready</span>

                    <h2 class="fw-bold mb-3 title-h2">
                        Building Smart Technology <br>
                        Talent & Training. <br>
                        Grow with Us!
                    </h2>

                    <p class="text-secondary mb-4 section-p">
                        • Software Development  <br>
                        • Recruitment (U.S & Offshore)  <br>
                        • Web Development  <br>
                        • Cybersecurity  <br>
                        • Online Trainings  <br>
                        • AI Agents & Apps
                    </p>

                    <div class="d-flex gap-3">
                        <button class="btn btn-orange"  onclick="highlight()">Book a 15 min Call</button>
                        <a href="#jobs" class="btn email-btn px-4 py-2">Submit a Job</a>
                    </div>
                </div>

        <!-- Right Column (Contact Form) -->
                <div class="col-lg-6">
                    <div class="contact-box1 section-box" id="mySection">

             <h3 class="fw-bold mb-2">Contact Intake</h3>
    <p class="text-muted mb-4">
        Tell us what you need — we’ll send a shortlist in 48–72 hours.
    </p>

    @if(session('success'))
    <p style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </p>
@endif

<form action="{{ route('request.send') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-md-6 mb-3">
            <input type="text" name="fullName" class="custom-input form-control" placeholder="Full Name" required>
        </div>

        <div class="col-md-6 mb-3">
            <input type="email" name="email" class="custom-input form-control" placeholder="Email" required>
        </div>
    </div>

    <div class="mb-3">
        <input type="text" name="companyName" class="custom-input form-control" placeholder="Company Name" required>
    </div>

    <div class="mb-3">
        <div class="input-group">
            <select name="countryCode" class="custom-select-country">
                <option value="+1">+1</option>
                <option value="+92">+92</option>
                <option value="+44">+44</option>
            </select>

            <input type="text" name="contactNumber" class="custom-input form-control border-0" placeholder="Contact Number" required>
        </div>
    </div>

    <div class="mb-4">
        <input type="text" name="briefRequirement" class="custom-input form-control" placeholder="Brief Requirement" required>
    </div>

    <div class="d-flex gap-3">
        <button type="submit" class="btn btn-orange">Send Request</button>
        <!-- <a class="btn email-btn px-4 py-2" href="mailto:yourgmail@gmail.com">Email Us</a> -->
    </div>
</form>


</div>
</div>
</div>
</div>
</section>
<!-- who we are  -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<section class="" id="section1">
    <div class="container">
        <div class="row align-items-center">


            <!-- Left card -->
            <div class="col-lg-7">
              <section class="who-we-are container my-5">
    <div class="wwa-card position-relative p-4 d-flex align-items-center">

        <!-- Image (floating outside the box) -->
        <img src="{{ asset('storage/img/women with laptop.png') }}" alt="woman"
             class="wwa-img">

        <!-- Text -->
        <div class="ms-auto wwa-text">
            <h3 class="fw-bold text-white">Who We Are</h3>
            <p class="text-white mb-3">
                Founded in 2015, BTMG USA partners with enterprises and startups to build
                software, scale teams, and upskill talent. With 100+ clients and 112+ projects
                delivered across 8+ countries, we combine speed with rigor to ship outcomes.
            </p>

            <a href="#section5" class="btn btn-orange fw-semibold px-4 py-2">
                Get a Quote
            </a>
        </div>

    </div>
</section>
            </div>

            <!-- Right side -->
            <div class="col-lg-5">
                <div class="p-4 rounded-3 shadow-sm bg-light mb-3">
                    <h5 class="fw-bold mb-2">How we Work <span><i class="bi bi-person-workspace"></i></span></h5>
                    <p class="text-muted mb-0" style="color: #8F8F8F !important;padding-bottom: 20px;padding-right: 21px;">We work with clarity, speed, and quality — and client’s satisfaction is our priority.</p>
                </div>

                <!-- Steps -->
                <div class="d-flex" style="background-color: #F58220; border-radius: 5px;">
                    <div class="step-box">01 <br><span>Intake</span></div>
                    <div class="step-box">02 <br><span>Shortlist</span></div>
                    <div class="step-box">03 <br><span>Deliver</span></div>
                    <div class="step-box">04 <br><span>Support</span></div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="courses-section py-5" id="courses">
  <div class="container">
    <span class="product-tag px-4">Courses</span><br><br>

    <h2 class="fw-bold mb-5">
      Skill-Based Courses <br>
      Designed for Real Careers
    </h2>

    <div class="row g-4">

      <!-- Course 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="course-card">
          <img src="{{ asset('storage/img/AI Scrum Master.png') }}" alt="Excel Course">
          <div class="course-overlay">
            <!-- <span class="course-badge">Beginner → Intermediate</span> -->
            <h5>Agile and AI Scrum Master</h5>
            <p>A fast-track, instructor-led program</p>

            <div class="course-footer">
              <a href="{{ ('agileandaIscrummaster') }}" class="course-btn">View</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Course 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="course-card">
          <img src="{{ asset('storage/img/Microservices.png') }}" alt="Python Course">
          <div class="course-overlay">
            <!-- <span class="course-badge">Beginner → Intermediate</span> -->
            <h5>Microservices</h5>
            <p>A hands-on, instructor-led program</p>

            <div class="course-footer">
              <!-- <span>🕒 5 Days</span> -->
              <a href="{{ url('/microservices') }}" class="course-btn">View</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Course 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="course-card">
          <img src="{{ asset('storage/img/Excel.png') }}" alt="Cybersecurity Course">
          <div class="course-overlay">
            <!-- <span class="course-badge">Beginner → Intermediate</span> -->
            <h5>MS Excel</h5>
            <p>Data entry and formatting to formulas, functions, PivotTables, and reporting</p>

            <div class="course-footer">
              <!-- <span>🕒 5 Days</span> -->
              <a href="{{ url('/excel') }}" class="course-btn">View</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Course 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="course-card">
          <img src="{{ asset('storage/img/Python.png') }}" alt="AI Course">
          <div class="course-overlay">
            <!-- <span class="course-badge">Beginner → Intermediate</span> -->
            <h5>Python</h5>
            <p>Intermediate skills like collections, functions, and file/CSV handling</p>
            <div class="course-footer">
              <!-- <span>🕒 5 Days / 3 Hours / Day</span> -->
              <a href="{{ url('/python') }}" class="course-btn">View</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- services -->

<!-- -->
<section class="services-section py-5" id="section4">
  <div class="container">
    <span class="product-tag" style="    padding: 5px 20px;">Services</span><br><br>
    <h2 class="fw-bold mb-5">Digital Excellence with Our<br>Amazing Services</h2>

    <div class="row g-4 justify-content-center">

    
 <div class="col-md-6">
        <div class="service-card">
       
          <h5 class="fw-bold title-h5"><img  src="{{ asset('storage/img/Online Trainings.png') }}" class="icon-img">&ensp;&ensp;Online Trainings
</h5>
          <p class="small text-muted">
           Live courses & labs: Excel Essentials, Learn Python, AI for Scrum.




          </p>

          <div class="tags mb-3">
            <span class="product-tag">Live on Zoom</span>
            <span class="product-tag">Q & A</span>
            <span class="product-tag">Hands-on</span>
          
          </div>

          <h6 class="fw-bold mb-2 title-h6">Details</h6>
          <ul class="details-list">
            <li>Instructor‑led with exercises</li>
            <li>Community & support</li>
            <li>Certificates</li>
          </ul>

          <button class="btn btn-orange w-100 mt-3" id="openPopup">Get Started</button>
        </div>
      </div>

      <!-- Software Development (highlighted) -->
      <div class="col-md-6">
        <div class="service-card">
        
          <h5 class="fw-bold  title-h5"><img  src="{{ asset('storage/img/Software Development.png') }}" class="icon-img">&ensp;&ensp;Software Development</h5>
          <p class="small text-white-50">
            Web, mobile, and cloud platforms with AI features and integrations.
          </p>

          <div class="tags mb-3">
            <span class="product-tag">Web APIs</span>
            <span class="product-tag">Mobile</span>
            <span class="product-tag">Clouds</span>
            <span class="product-tag">AI Agents</span>
          </div>

          <h6 class="fw-bold  mb-2 title-h6">Details</h6>
          <ul class="details-list">
            <li>Product design & MVP builds</li>
            <li>Rapid prototypes & integrations</li>
            <li>Ongoing support & optimization</li>
          </ul>

          <button class="btn btn-orange  w-100 mt-3" id="openPopup1">Get Started</button>
        </div>
      </div>

      <!-- Cybersecurity Card -->
      <div class="col-md-6">
        <div class="service-card">
         
          <h5 class="fw-bold title-h5"><img  src="{{ asset('storage/img/Cyber Security.png') }}" class="icon-img" >&ensp;&ensp;Cybersecurity</h5>
          <p class="small text-muted">
            Assessments, pen-testing and hardening — secure by design.
          </p>

          <div class="tags mb-3">
            <span class="product-tag">WAPT</span>
            <span class="product-tag">Network</span>
            <span class="product-tag">Cloud</span>
            <span class="product-tag">Compliance</span>
          </div>

          <h6 class="fw-bold mb-2 title-h6">Details</h6>
          <ul class="details-list">
            <li>Web app & API security testing</li>
            <li>Network & cloud vulnerability scans</li>
            <li>Remediation guidance</li>
          </ul>

          <button class="btn btn-orange w-100 mt-3" id="openPopup2">Get Started</button>
        </div>
      </div>

  <!-- Recruitment Card -->
      <div class="col-md-6">
        <div class="service-card">
         
           
        
          <h5 class="fw-bold title-h5"> <img  src="{{ asset('storage/img/AI Data Processing.png') }}" class="icon-img">&ensp;&ensp;AI Data Processing</h5>
   
          <p class="small text-muted">
           Designing scalable pipelines for data ingestion & transformation.
          </p>

          <div class="tags mb-3">
            <span class="product-tag">ETL</span>
            <span class="product-tag">Data Flow</span>
            <span class="product-tag">Data Automation</span>
          </div>

          <h6 class="fw-bold mb-2 title-h6">Details</h6>
          <ul class="details-list">
            <li>Collects and organizes data.</li>
            <li>Cleans and transforms datasets.</li>
            <li>Prepares data for analysis.</li>
          </ul>

          <button class="btn btn-orange w-100 mt-3" id="openPopup3">Get Started</button>
        </div>
      </div>
 <div class="col-md-4"></div>
  <div class="col-md-4"></div>

       <!-- Cybersecurity Card -->
     <!--  <div class="col-md-4">
        <div class="service-card p-4">
         
          <h5 class="fw-bold title-h5"><img  src="img/icon.png" class="icon-img">Web Development
</h5>
          <p class="small text-muted">
           Modern, fast, SEO‑ready websites with analytics & conversions.



          </p>

          <div class="tags mb-3">
            <span class="tag">Next.Js</span>
            <span class="tag">WordPress Lite</span>
            <span class="tag">SEO</span>
           
          </div>

          <h6 class="fw-bold mb-2 title-h6">Details</h6>
          <ul class="details-list">
            <li>Design systems & components</li>
            <li>Core Web Vitals optimization</li>
            <li>Content & landing pages</li> -->
         <!--  </ul>

          <button class="btn btn-orange w-100 mt-3">Get Started</button>
        </div>
      </div> -->

       <!-- Cybersecurity Card -->
     
       <!-- Cybersecurity Card -->
    <!--   <div class="col-md-4">
        <div class="service-card p-4">
         
          <h5 class="fw-bold title-h5"><img  src="img/icon.png" class="icon-img">Offshore Pods (C2C)

</h5>
          <p class="small text-muted">
          Spin up 3–8 engineer pods with Agile ceremonies & delivery hygiene.

          </p>

          <div class="tags mb-3">
            <span class="tag">Agile</span>
            <span class="tag">Time Tracking</span>
            <span class="tag">SLA’s</span> -->
           
        <!--   </div>

          <h6 class="fw-bold mb-2 title-h6">Details</h6>
          <ul class="details-list">
            <li>Cost‑effective scaling</li>
            <li>Timezone aligned</li>
            <li>Managed delivery</li>
          </ul>

          <button class="btn btn-orange w-100 mt-3">Get Started</button>
        </div>
      </div>
    </div> -->
  </div>
</div>
</section>

<!-- products -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<section class="product-section py-5" id="section2">
    <div class="container text-center" style="padding: 20px 0px;">

        <!-- Section Label -->
        <div class="mb-3">
            <span class="badge text-white px-4 py-2 section-label">
                Products
            </span>
        </div>

        <!-- Heading -->
        <h2 class="text-white fw-bold mb-5">Apps we’ve built and shipped.</h2>

        <div class="row justify-content-center g-4">

            <!-- CARD 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative">

                    <!-- Icon -->
                    <div class="icon-bubble">
                        <img src="{{ asset('storage/img/inhm.png') }}" class="icon-img" style="width: 30px; height: 30px;">
                    </div>

                    <h5 class="fw-bold">INeedHandyman<br>
(INHM)</h5>
                    <p class="text-muted small">
                        On-demand handyman marketplace with booking, profiles, and ratings.
                    </p>

                    <!-- Tags -->
                    <div class="mb-3">
                        <span class="product-tag">NextJs</span>
                        <span class="product-tag">WordPress Lite</span>
                        <span class="product-tag">SEO</span>
                    </div>

                    <button class="btn btn-warning w-100 fw-semibold product-btn" id="openPopup4">Request Demo</button>
                </div>
            </div>

            <!-- CARD 2 -->
           

            <!-- CARD 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative">

                    <!-- Icon -->
                    <div class="icon-bubble">
                        <img src="{{ asset('storage/img/quick.png') }}" class="icon-img">
                    </div>

                    <h5 class="fw-bold">QuickKuick<br>
Food Delivery</h5>
                    <p class="text-muted small">
                      Discover and order meals from top restaurants instantly.
                    </p>

                    <div class="mb-3">
                        <span class="product-tag">Food Delivery</span>
                        <span class="product-tag">Online Ordering</span>
                       
                    </div>

                    <button class="btn btn-warning w-100 fw-semibold product-btn" id="openPopup6">Request Demo</button>
                </div>
            </div>

 <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative">

                    <!-- Icon -->
                    <div class="icon-bubble">
                        <img src="{{ asset('storage/img/in.png') }}" class="icon-img">
                    </div>

                    <h5 class="fw-bold">Inventory IQ<br>AI Powered</h5>
                    <p class="text-muted small">
                        AI powered inventory & garage organization with visual search.
                    </p>

                    <div class="mb-3">
                        <span class="product-tag">AI Vision</span>
                        <span class="product-tag">Search</span>
                        <span class="product-tag">Sharing</span>
                    </div>

                    <button class="btn btn-warning w-100 fw-semibold product-btn" id="openPopup5">Request Demo</button>
                </div>
            </div>
               
  <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative">

                    <!-- Icon -->
                    <div class="icon-bubble">
                        <img src="{{ asset('storage/img/digital.png') }}" class="icon-img">
                    </div>

                    <h5 class="fw-bold">Digital Legacy<br>
Vault</h5>
                    <p class="text-muted small">
                 Securely store and manage your digital legacy for the future.
                    </p>

                    <div class="mb-3">
                        <span class="product-tag">Secure Vault</span>
                        <span class="product-tag">Future Proof</span>
                        <span class="product-tag">Legacy</span>
                       
                    </div>

                    <button class="btn btn-warning w-100 fw-semibold product-btn" id="openPopup10">Request Demo</button>
                </div>
            </div>




              <div class="col-lg-4 col-md-6">
                <div class="product-card position-relative">

                    <!-- Icon -->
                    <div class="icon-bubble">
                        <img src="{{ asset('storage/img/binmind.png') }}" class="icon-img">
                    </div>

                    <h5 class="fw-bold">BinMind Storage<br>
Management App</h5>
                    <p class="text-muted small">
                 Organize and track all your items effortlessly,
anytime.
                    </p>

                    <div class="mb-3">
                        <span class="product-tag">Smart Storage</span>
                        <span class="product-tag">Item Tracker</span>
                        <span class="product-tag">Organize</span>
                       
                    </div>

                    <button class="btn btn-warning w-100 fw-semibold product-btn" id="openPopup9">Request Demo</button>
                </div>
            </div>


            
  
 <div class="col-lg-4 col-md-6"></div>

        </div>
    </div>
</section>
<!-- case studies -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<section class="case-section py-3" id="section3">
    <div class="container">

        <div class="row align-items-center">

            <!-- IMAGE LEFT -->
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
                <img src="{{ asset('storage/img/case studies.png') }}" 
                     alt="Case Study Illustration"
                     class="img-fluid case-img">
            </div>

            <!-- TEXT + CARDS RIGHT -->
            <div class="col-lg-6">

                <span class="badge badge-custom section-badge mb-2">Case Studies</span>

                <h2 class="fw-bold mb-4" style="color:#0A2E2D;">
                    Candidate placements <br> 
                    and delivery outcomes <br> 
                    from our teams.
                </h2>

                <!-- CARD 1 ACTIVE -->
                <div class="case-card active mb-3 p-3 d-flex align-items-start">
                   <i class="bi bi-arrow-down"></i>
&ensp;&ensp;&ensp;



                    <div>
                        <h6 class="fw-semibold mb-1">
                            US Bank — Scrum & Engineering
                        </h6>
                        <p class="small text-muted mb-2">
                            Placed Scrum Masters and Full-Stack devs to accelerate product delivery. 
                            Cycle time reduced by 23%.
                        </p>

                        <span class="tag badge badge-custom">Recruitment</span>
                        <span class="tag badge badge-custom">Coaching</span>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="case-card mb-3 p-3">
                    <h6 class="fw-semibold mb-0"> <i class="bi bi-arrow-down" style="color: #135864;background: transparent;
    padding: 5px 8px;
    border: 1px solid;"></i>&ensp;&ensp;&ensp;Discover — ServiceNow & BA</h6>
                </div>

                <!-- CARD 3 -->
                <div class="case-card p-3">
                    <h6 class="fw-semibold mb-0"> <i class="bi bi-arrow-down" style="color: #135864;background: transparent;
    padding: 5px 8px;
    border: 1px solid;"></i>&ensp;&ensp;&ensp;OCC — Web & Security</h6>
                </div>

            </div>

\
        </div>
    </div>
</section>
<!-- job cards -->

<!-- <section class="bg-light"> -->
<section>
<div class="container py-1" id="jobs">
  <span class="product-tag" style="    padding: 5px 20px;">Open Roles</span><br><br>
  <h3 class="fw-bold mb-2">Remote-friendly. Contract,<br>C2C, or Full-time.</h3>
  <p class="text-muted mb-4">We’re expanding our team. Apply now and grow with us.</p>

  <div class="row g-4">

    <!-- 01 -->
    <div class="col-md-6">
      <div class="job-card">



<div class="service-item d-flex align-items-start">
    
    <!-- Number -->
    <div class="service-number me-3">01</div>

    <!-- Vertical dotted line -->
    <div class="vertical-line me-3"></div>

    <!-- Content -->
    <div>
        <h5 class="service-title">ServiceNow Architect</h5>
        <p class="service-desc mb-0">
            Design & implement scalable ServiceNow solutions. <br>
            ITSM/CESM integrations, automation.
        </p>
         <span class="badge badge-custom me-1">Remote</span>
        <span class="badge badge-custom">Contract</span>
    </div>

</div>

      </div>
    </div>

    <!-- 02 Highlight -->
    <div class="col-md-6 job-card-hover">
      <div class="job-card">


 <div class="service-item d-flex align-items-start">
    
    <!-- Number -->
    <div class="service-number me-3">02</div>

    <!-- Vertical dotted line -->
    <div class="vertical-line me-3"></div>

    <!-- Content -->
    <div>
        <h5 class="service-title">Scrum Master</h5>
        <p class="service-desc mb-0">
        Coach teams, drive flow, and deliver outcomes. Jira/Boards,
          metrics for decisions.
        </p>
         <span class="badge badge-custom me-1">Remote</span>
        <span class="badge badge-custom">Contract</span>
    </div>

</div>
      </div>
    </div>

    <!-- 03 -->
    <div class="col-md-6">
      <div class="job-card">
       

<div class="service-item d-flex align-items-start">
    
    <!-- Number -->
    <div class="service-number me-3">03</div>

    <!-- Vertical dotted line -->
    <div class="vertical-line me-3"></div>

    <!-- Content -->
    <div>
        <h5 class="service-title">Full-Stack Developer</h5>
        <p class="service-desc mb-0">
           React/Node/Cloud with secure APIs and CI/CD. Ownership mindset
          and product thinking.
        </p>
         <span class="badge badge-custom me-1">Remote</span>
        <span class="badge badge-custom">C2C</span>
    </div>

</div>
      </div>
    </div>

    <!-- 04 -->
    <div class="col-md-6">
      <div class="job-card">

<div class="service-item d-flex align-items-start">
    
    <!-- Number -->
    <div class="service-number me-3">04</div>

    <!-- Vertical dotted line -->
    <div class="vertical-line me-3"></div>

    <!-- Content -->
    <div>
        <h5 class="service-title">Business Analyst</h5>
        <p class="service-desc mb-0">
          Partner with stakeholders, refine backlog, and ensure acceptance criteria.
        </p>
         <span class="badge badge-custom me-1">Remote</span>
        <span class="badge badge-custom">Contract</span>
    </div>

</div>




      </div>
    </div>

    <!-- 05 -->
    <div class="col-md-6">
      <div class="job-card">
        <div class="service-item d-flex align-items-start">
    
    <!-- Number -->
    <div class="service-number me-3">05</div>

    <!-- Vertical dotted line -->
    <div class="vertical-line me-3"></div>

    <!-- Content -->
    <div>
        <h5 class="service-title">Cybersecurity Analyst</h5>
        <p class="service-desc mb-0">
         Run scans, triage findings, guide remediation. AppSec, network, and cloud exposure.
        </p>
         <span class="badge badge-custom me-1">Remote</span>
        <span class="badge badge-custom">Full-Time</span>
    </div>

</div>

       
      </div>
    </div>

    <!-- 06 -->
    <div class="col-md-6">
      <div class="job-card">



          <div class="service-item d-flex align-items-start">
    
    <!-- Number -->
    <div class="service-number me-3">06</div>

    <!-- Vertical dotted line -->
    <div class="vertical-line me-3"></div>

    <!-- Content -->
    <div>
        <h5 class="service-title">ServiceNow Developer</h5>
        <p class="service-desc mb-0">
         Build workflows, custom apps, and integrations. Glide APIs and best practices.
        </p>
         <span class="badge badge-custom me-1">Remote</span>
        <span class="badge badge-custom">Full-Time</span>
    </div>

</div>

      </div>
    </div>

  </div>
</div>
</section>

<!-- CONTACT SECTION -->
<div class="container py-5" id="section5">
    <div class="row g-4">

        <!-- LEFT CONTACT BOX -->
        <div class="contact-box col-md-5">
            


<section class="contact-item d-flex align-items-center">
    <div class="icon me-3">
        <i class="bi bi-telephone"></i>
    </div>
    <div class="text">
        <small class="contact-label">Contact Number</small><br>
        <span class="contact-number">+1 (630) 854 2247<br></span>
    </div>
</section>



<section class="contact-item d-flex align-items-center">
    <div class="icon me-3">
        <i class="bi bi-envelope"></i>
    </div>
    <div class="text">
        <small class="contact-label">Email Address</small><br>
        <script>
  document.write("info" + "@" + "btmgusa.com");
</script>
   </div>
</section>


<section class="contact-item d-flex align-items-center">
    <div class="icon me-3">
        <i class="bi bi-geo-alt"></i>
    </div>
    <div class="text">
        <small class="contact-label">Address</small><br>
        <span class="contact-number">75 Executive Drive, Aurora,<br> IL 60504</span>
    </div>
</section>


<!-- <img src="img/phone.png" width="10%;">
                <div class="contact-item">
                  
                  <p >  <small>Contact Number</small><br>
                    <strong>(773) 814-8288</strong></p>  
                </div> -->

               <!--  <div class="contact-item">
                     <img src="img/mail.png" width="10%;">
                    <small>Email Address</small><br>
                    <strong>info@btmgusa.com</strong>
                </div>

                <div class="contact-item">
                    <img src="img/location.png" width="10%;">
                    <small>Address</small><br>
                    <strong>75 Executive Drive, Aurora, IL 60504</strong>
                </div> -->

           
        </div>

        <!-- RIGHT FORM -->
        <div class="col-md-7">
            <div class="form-box">
                <h4 class="fw-bold mb-4">Send a Message</h4>

                @if(session('success'))
    <p style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </p>
@endif

<form action="{{ route('contact.send') }}" method="POST">
    @csrf

    <input type="text" name="fullName" class="form-control mb-3" placeholder="Full Name" required>
    <input type="email" name="email" class="form-control mb-3" placeholder="Email Address" required>
    <textarea name="message" class="form-control mb-3" rows="4" placeholder="How can we help?" required></textarea>

    <button type="submit" class="send-btn">Send Message</button>
</form>

            </div>
        </div>

    </div>
</div>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">

            <!-- LOGO + TEXT -->
            <div class="col-md-6 mb-6">
                <img src="{{ asset('storage/img/footer-logo.png') }}" width="120" alt="Logo" style="margin-bottom: 20px;">
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

            <!-- QUICK LINKS -->
            <div class="col-md-3 mb-3">
                <h6 class="fw-bold mb-3">Quick Links</h6>
                <a href="#section4">Services</a>
                <a href="#section2">Products</a>
                <a href="#section3">Case Studies</a>
                <a href="#jobs">Jobs</a>
            </div>

            <!-- NAVIGATION -->
            <div class="col-md-3 mb-3">
                <h6 class="fw-bold mb-3">Navigation</h6>
                <a href="#section6">Home</a>
                <a href="#section1">About Us</a>
                <a href="#">FAQ's</a>
                <a href="#section5">Send a Message</a>
            </div>



        </div>
    </div><br>
    <center>Powered By <img src="{{ asset('storage/img/DAAM logo.png') }}" style="width:90px"> - Copyright 2023-2024</center>
</footer>

<!-- SCROLL TO TOP BUTTON -->
<div class="scroll-top">
  <a href="#section6">  <i class="fa fa-arrow-up"></i></a>
</div>

<!-- Modal -->
<div class="modal fade" id="demoModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="demoModal1" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="demoModal2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="demoModal3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="demoModal4" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="demoModal5" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="demoModal6" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="demoModal7" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="demoModal8" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="demoModal9" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="demoModal10" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="demoModal11" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">

      <!-- Close Button -->
      <button class="close-btn" data-bs-dismiss="modal">
        ×
      </button>

      <div class="modal-body">

        <h4 class="fw-bold mb-1">Request Demo</h4>
        <p class="text-muted mb-4" style="font-size:14px;">
          Hey! We will inform you via email when we will grant you access.
        </p>

        <form>

          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control custom-input">
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control custom-input">
          </div>

          <button type="submit"
                  class="btn btn-warning w-100 fw-semibold submit-btn product-btn">
            Request Demo
          </button>

        </form>
      </div>
    </div>
  </div>
</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    window.scrollTo({
      top: target.offsetTop - 80,   // adjust based on navbar height
      behavior: 'smooth'
    });
  });
});
</script>

<script>
function highlight() {
    const box = document.getElementById("mySection");
    box.classList.add("highlight");

    setTimeout(() => box.classList.remove("highlight"), 1000);
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById("openPopup").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal"));
    modal.show();
});


document.getElementById("openPopup1").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal1"));
    modal.show();
});

document.getElementById("openPopup2").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal2"));
    modal.show();
});


document.getElementById("openPopup3").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal3"));
    modal.show();
});




document.getElementById("openPopup4").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal4"));
    modal.show();
});

document.getElementById("openPopup5").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal5"));
    modal.show();
});

document.getElementById("openPopup6").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal6"));
    modal.show();
});

document.getElementById("openPopup7").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal7"));
    modal.show();
});

document.getElementById("openPopup8").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal8"));
    modal.show();
});

document.getElementById("openPopup9").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal9"));
    modal.show();
});

document.getElementById("openPopup10").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal10"));
    modal.show();
});

document.getElementById("openPopup11").addEventListener("click", function() {
    var modal = new bootstrap.Modal(document.getElementById("demoModal11"));
    modal.show();
});
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"e982557791714a5ba1de79c2e184fae4","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>