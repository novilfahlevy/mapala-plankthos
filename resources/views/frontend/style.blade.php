<style>

/**
* Template Name: eBusiness - v4.6.0
* Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
html, body {
  height: 100%;
}

.floatleft {
  float: left;
}

.floatright {
  float: right;
}

.alignleft {
  float: left;
  margin-right: 15px;
  margin-bottom: 15px;
}

.alignright {
  float: right;
  margin-left: 15px;
  margin-bottom: 15px;
}

.aligncenter {
  display: block;
  margin: 0 auto 15px;
}

a:focus {
  outline: 0px solid;
}

img {
  max-width: 100%;
  height: auto;
}

.fix {
  overflow: hidden;
}

p {
  margin: 0 0 15px;
  color: #444;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Raleway", sans-serif;
  margin: 0 0 15px;
  color: #444;
  font-weight: 500;
}

h1 {
  font-size: 48px;
  line-height: 50px;
}

h2 {
  font-size: 38px;
  line-height: 40px;
}

h3 {
  font-size: 30px;
  line-height: 32px;
}

h4 {
  font-size: 24px;
  line-height: 26px;
}

h5 {
  font-size: 20px;
  line-height: 22px;
}

h6 {
  font-size: 16px;
  line-height: 20px;
}

a {
  transition: all 0.3s ease 0s;
  text-decoration: none;
}

a:hover {
  color: #3EC1D5;
  text-decoration: none;
}

a:active, a:hover {
  outline: 0 none;
}

body {
  background: #fff none repeat scroll 0 0;
  color: #444;
  font-family: "Open Sans", sans-serif;
  font-size: 14px;
  text-align: left;
  overflow-x: hidden;
  line-height: 22px;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #3ec1d5;
  width: 40px;
  height: 40px;
  transition: all 0.4s;
}
.back-to-top i {
  font-size: 28px;
  color: #fff;
  line-height: 0;
}
.back-to-top:hover {
  background: #60ccdc;
  color: #fff;
}
.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

.clear {
  clear: both;
}

ul {
  list-style: outside none none;
  margin: 0;
  padding: 0;
}

input, select, textarea, input[type=text], input[type=date], input[type=url], input[type=email], input[type=password], input[type=tel], button, button[type=submit] {
  -moz-appearance: none;
  box-shadow: none !important;
}

div#preloader {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 99999;
  width: 100%;
  height: 100%;
  overflow: visible;
  background: #fff url({{ asset('storage/img/preloader.gif') }}) no-repeat center center;
}

::-moz-selection {
  background: #3EC1D5;
  text-shadow: none;
}

::selection {
  background: #3EC1D5;
  text-shadow: none;
}

.area-padding {
  padding: 70px 0px 80px;
}

.area-padding-2 {
  padding: 70px 0px 50px;
}

.padding-2 {
  padding-bottom: 90px;
}

.section-headline h2 {
  display: inline-block;
  font-size: 40px;
  font-weight: 600;
  margin-bottom: 70px;
  position: relative;
  text-transform: capitalize;
}

.section-headline h2::after {
  border: 1px solid #333;
  bottom: -20px;
  content: "";
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  width: 40%;
}

.sec-head {
  display: inline-block;
  font-size: 17px;
  font-weight: 600;
  margin-bottom: 0;
  padding: 0 0 10px;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  background: rgba(0, 0, 0, 0.5);
}
#header.header-scrolled {
  background: rgba(0, 0, 0, 0.8);
  height: 64px;
}
#header .logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: bold;
}
#header .logo h1 span {
  color: #3ec1d5;
}
#header .logo h1 a, #header .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
}
#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}
@media (max-width: 768px) {
  #header {
    height: 64px;
    background: rgba(0, 0, 0, 0.8);
  }
  #header .logo h1 {
    font-size: 28px;
  }
}

.header-bg {
  background: url({{ asset('storage/img/background/page-header.jpg') }});
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top center;
  padding: 120px 0 60px;
}
.header-bg::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.7);
}
@media (min-width: 1025px) {
  .header-bg {
    background-attachment: fixed;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}
.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}
.navbar li {
  position: relative;
}
.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-size: 15px;
  font-weight: 500;
  color: #fff;
  white-space: nowrap;
  transition: 0.3s;
}
.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #3ec1d5;
}
.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}
.navbar .dropdown ul li {
  min-width: 200px;
}
.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  color: #0d2529;
}
.navbar .dropdown ul a i {
  font-size: 12px;
}
.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #3ec1d5;
}
.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}
.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}
@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}
.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(1, 2, 2, 0.9);
  transition: 0.3s;
  z-index: 999;
}
.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}
.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}
.navbar-mobile a, .navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #0d2529;
}
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #3ec1d5;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
  margin: 15px;
}
.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
  min-width: 200px;
}
.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #3ec1d5;
}
.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  background: #000;
  overflow: hidden;
  position: relative;
}
@media (max-height: 500px) {
  #hero {
    height: 150vh;
  }
}
#hero .carousel, #hero .carousel-inner, #hero .carousel-item, #hero .carousel-item::before {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}
#hero .carousel-item {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
#hero .carousel-item::before {
  content: "";
  background-color: rgba(0, 0, 0, 0.7);
}
#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 70px;
  left: 50px;
  right: 50px;
}
#hero .container {
  text-align: center;
}
#hero h2 {
  color: #fff;
  margin-bottom: 20px;
  font-size: 24px;
  font-weight: 700;
}
@media (max-width: 768px) {
  #hero h2 {
    font-size: 20px;
    line-height: 1.2;
  }
}
#hero p {
  width: 80%;
  font-size: 38px;
  line-height: 1.2;
  margin: 0 auto 30px auto;
  color: #fff;
}
@media (min-width: 1024px) {
  #hero p {
    width: 60%;
  }
}
@media (max-width: 768px) {
  #hero p {
    font-size: 28px;
    line-height: 1.2;
  }
}
#hero .carousel-fade {
  overflow: hidden;
}
#hero .carousel-fade .carousel-inner .carousel-item {
  transition-property: opacity;
}
#hero .carousel-fade .carousel-inner .carousel-item,
#hero .carousel-fade .carousel-inner .active.carousel-item-start,
#hero .carousel-fade .carousel-inner .active.carousel-item-end {
  opacity: 0;
}
#hero .carousel-fade .carousel-inner .active,
#hero .carousel-fade .carousel-inner .carousel-item-next.carousel-item-start,
#hero .carousel-fade .carousel-inner .carousel-item-prev.carousel-item-end {
  opacity: 1;
  transition: 0.5s;
}
#hero .carousel-fade .carousel-inner .carousel-item-next,
#hero .carousel-fade .carousel-inner .carousel-item-prev,
#hero .carousel-fade .carousel-inner .active.carousel-item-start,
#hero .carousel-fade .carousel-inner .active.carousel-item-end {
  left: 0;
  transform: translate3d(0, 0, 0);
}
#hero .carousel-control-prev, #hero .carousel-control-next {
  width: 10%;
}
@media (min-width: 1024px) {
  #hero .carousel-control-prev, #hero .carousel-control-next {
    width: 5%;
  }
}
#hero .carousel-control-next-icon, #hero .carousel-control-prev-icon {
  background: none;
  font-size: 32px;
  line-height: 1;
}
#hero .carousel-indicators li {
  cursor: pointer;
}
#hero .btn-get-started {
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 32px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  color: #fff;
  background: #3ec1d5;
}
#hero .btn-get-started:hover {
  background: #fff;
  color: #3ec1d5;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about-area {
  background-color: #f9f9f9;
}

.single-well > a {
  display: block;
}

.single-well ul li {
  color: #444;
  display: block;
  padding: 5px 0;
}

.single-well ul li i {
  color: #3EC1D5;
  margin-right: 5px;
  font-size: 18px;
}

.single-well p {
  color: #444;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services-icon {
  color: #444;
  display: inline-block;
  font-size: 36px;
  line-height: 36px;
  margin-bottom: 20px;
}

.section-headline.services-head > h2 {
  margin-bottom: 25px;
}

.services-details {
  padding-top: 40px;
  transition: all 0.5s ease 0s;
}

.services-details:hover h4, .services-details:hover .services-icon {
  color: #3EC1D5;
}

.row.second-row {
  margin-top: 40px;
}

.section-head > h2 {
  color: #333;
}

.single-services > h4 {
  color: #444;
  font-size: 24px;
  font-weight: 500;
}

.single-services > p {
  color: #333;
  font-size: 14px;
}

/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team-member {
  background: rgba(0, 0, 0, 0.65) none repeat scroll 0 0;
  display: block;
  margin-right: -15px;
  padding: 10px;
  position: relative;
  overflow: hidden;
}

.team-member::before {
  background: rgba(0, 0, 0, 0) url({{ asset('storage/img/team/team01.jpg') }}) repeat scroll 0 0;
  content: "";
  display: block;
  height: 100%;
  left: 0;
  margin-right: -15px;
  padding: 10px;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top center;
  transition: 5s;
  transform: scale(1);
}

.team-member:hover.team-member::before {
  transform: scale(1.2);
}

.single-team-member {
  border: 1px solid #ddd;
}

.team-left-text h4 {
  color: #fff;
  font-size: 30px;
  font-weight: 700;
  text-transform: uppercase;
}

.team-left-text p {
  color: #fff;
  font-size: 17px;
  line-height: 26px;
}

.email-news {
  display: block;
  margin: 30px 0;
  overflow: hidden;
  text-align: center;
  width: 100%;
}

.email-news .email_button input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid #fff;
  color: #fff;
  float: left;
  font-size: 13px;
  padding: 8px;
  width: 81%;
}

.email-news .email_button > button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid #fff;
  color: #fff;
  float: left;
  font-size: 16px;
  padding: 8px 12px;
  text-align: center;
}

.email-news .email_button > button:hover {
  background: #3EC1D5;
  border: 1px solid #fff;
  color: #fff;
}

.team-left-icon ul li {
  display: inline-block;
}

.team-left-icon ul li a:hover {
  color: #3EC1D5;
  background: #fff;
  border: 2px solid #fff;
}

.team-left-icon ul li a {
  border: 2px solid #fff;
  color: #fff;
  display: block;
  font-size: 16px;
  height: 40px;
  line-height: 37px;
  margin: 0 3px;
  width: 40px;
}

.team-member-carousel .single-team-member {
  overflow: hidden;
  width: 100%;
}

.single-team-member:hover .team-img a:after {
  opacity: 1;
}

.single-team-member:hover .team-social-icon {
  top: 45%;
  opacity: 1;
}

.team-img {
  position: relative;
}

.team-img > a {
  display: block;
}

.team-img > a::after {
  background: rgba(0, 0, 0, 0.7);
  bottom: 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  transition: all 0.5s ease 0s;
  width: 100%;
  opacity: 0;
}

.team-social-icon {
  left: 50%;
  margin-left: -61px;
  opacity: 0;
  position: absolute;
  top: 30%;
  transition: 1.3s;
}

.team-social-icon ul li {
  display: inline-block;
}

.team-social-icon ul li a {
  border: 1px solid #fff;
  border-radius: 50%;
  color: #fff;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  height: 34px;
  width: 34px;
  margin: 0 3px;
}
.team-social-icon ul li a i {
  line-height: 0;
}

.team-social-icon ul li a:hover {
  color: #fff;
  border: 1px solid #3EC1D5;
  background: #3EC1D5;
}

.team-content {
  padding: 10px 0px;
}

.team-content > h4, .team-content > p {
  color: #444;
  margin-bottom: 5px;
}

.team-content.head-team p {
  margin-bottom: 0;
}

.team-left-icon.text-center {
  margin-bottom: 20px;
}

.head-team h4 {
  display: inline-block;
  font-size: 25px;
  font-weight: 600;
  padding-bottom: 10px;
  text-transform: uppercase;
}

/*--------------------------------------------------------------
# Review
--------------------------------------------------------------*/
.reviews-area {
  background: url({{ asset('storage/img/background/reviews-bg.jpg') }});
  overflow: hidden;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top center;
  background-attachment: fixed;
  width: 100%;
  height: auto;
  position: relative;
}

.work-left-text {
  background: #3EC1D5 none repeat scroll 0 0;
}

.work-right-text {
  background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
}

.work-right-text h2 {
  color: #fff;
  text-transform: uppercase;
  font-size: 24px;
}

.work-right-text h5 {
  color: #fff;
  font-size: 18px;
  font-weight: 700;
  line-height: 34px;
  text-transform: uppercase;
}

.work-right-text .sus-btn {
  margin-left: 0;
  margin-top: 20px;
}

.single-awesome-4 {
  display: block;
  float: left;
  overflow: hidden;
  width: 33.33%;
}

.single-awesome-4 .add-actions {
  padding: 10px 20px;
}

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.pst-content {
  padding-left: 10px;
}

#portfolio-flters {
  padding: 0;
  margin: 5px 0 35px 0;
  list-style: none;
  text-align: center;
}
#portfolio-flters li {
  cursor: pointer;
  margin: 15px 15px 15px 0;
  display: inline-block;
  padding: 8px 24px;
  font-size: 12px;
  line-height: 20px;
  color: #555;
  border-radius: 50px;
  text-transform: uppercase;
  background: #fff;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
  border: 1px solid #444;
}
#portfolio-flters li:hover, #portfolio-flters li.filter-active {
  border-color: #3EC1D5;
  background: #3EC1D5;
  color: #fff;
}
#portfolio-flters li:last-child {
  margin-right: 0;
}

.single-awesome-portfolio {
  float: left;
  overflow: hidden;
  padding: 15px;
  width: 25%;
  position: relative;
}

.single-awesome-project {
  overflow: hidden;
  margin-bottom: 30px;
}

.first-item {
  margin-bottom: 30px;
}

.awesome-img {
  display: block;
  width: 100%;
  height: 100%;
  position: relative;
}

.awesome-img > a {
  display: block;
  position: relative;
}

.single-awesome-project:hover .awesome-img > a::after {
  opacity: 1;
}

.single-awesome-project:hover .add-actions {
  opacity: 1;
  bottom: 0;
}

.awesome-img > a::after {
  background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  opacity: 0;
  transition: 0.4s;
}

.add-actions {
  background: rgba(0, 0, 0, 0.6) none repeat scroll 0 0;
  bottom: 30px;
  display: block;
  height: 100%;
  left: 0;
  opacity: 0;
  overflow: hidden;
  padding: 10px 15px;
  position: absolute;
  transition: all 0.4s ease 0s;
  width: 100%;
}

.project-dec {
  display: block;
  height: 100%;
  width: 100%;
}

.project-dec a {
  display: block;
  height: 100%;
  width: 100%;
}

.project-dec h4 {
  margin-bottom: 5px;
}

.project-dec h4:hover {
  color: #fff;
}

.project-dec h4 {
  color: #ddd;
  font-size: 24px;
  margin-top: -45px;
  padding-top: 50%;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 800;
}

.project-dec span {
  color: #ddd;
  font-size: 13px;
}

.project-action-btn {
  display: block;
  height: 100%;
  text-align: center;
  transition: all 1s ease 0s;
  width: 100%;
}

.project-action-btn li {
  display: block;
  height: 100%;
  width: 100%;
}

.project-action-btn li a {
  display: block;
  height: 100%;
  width: 100%;
}

/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
.pricing-area {
  background: rgba(0, 0, 0, 0.02) none repeat scroll 0 0;
}

.pri_table_list {
  border: 1px solid #ccc;
  text-align: center;
  transition: all 0.4s ease 0s;
  background: #fff;
}

.pri_table_list h3 span {
  font-size: 16px;
}

.pri_table_list ol li {
  border-bottom: 1px solid #ccc;
  color: #666;
  padding: 12px 15px;
  position: relative;
  display: flex;
  align-items: center;
}

.pri_table_list li.check {
  font-weight: 600;
}

.pri_table_list li.check i {
  color: #3EC1D5;
  line-height: 0;
  font-size: 24px;
  margin-right: 5px;
}

.pri_table_list li.cross {
  text-decoration: line-through;
  color: #999;
}

.pri_table_list li.cross i {
  color: #999;
  line-height: 0;
  font-size: 24px;
  margin-right: 5px;
}

.pri_table_list button {
  background: #444 none repeat scroll 0 0;
  border: 1px solid #444;
  color: #fff;
  margin-bottom: 25px;
  padding: 10px 35px;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
  border-radius: 30px;
}

.pri_table_list > h3 {
  color: #333;
  font-size: 24px;
  font-weight: 700;
  line-height: 25px;
  padding: 30px 0 20px;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
}

.pri_table_list ol {
  list-style: outside none none;
  margin: 0;
  padding: 0 0 25px;
}

.pri_table_list.active {
  transition: all 0.4s ease 0s;
  position: relative;
  overflow: hidden;
}

.saleon {
  background: #3EC1D5 none repeat scroll 0 0;
  color: #fff;
  font-size: 13px;
  font-weight: 700;
  left: -26px;
  padding: 2px 25px;
  position: absolute;
  text-transform: uppercase;
  top: 16px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
}

.pri_table_list > button:hover {
  background-color: #fff;
  border: 1px solid #333;
  color: #333;
}

.active > h3 {
  background: #f5f5f5 none repeat scroll 0 0;
  color: #333;
  transition: all 0.4s ease 0s;
}

.active > button {
  background: #3EC1D5 none repeat scroll 0 0;
  border: 1px solid #3EC1D5;
  color: #fff;
  transition: 0.4s;
}

.active > button:hover {
  background: #333 none repeat scroll 0 0;
  border: 1px solid #333;
  color: #fff;
  transition: 0.4s;
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials {
  padding: 80px 0;
  background: url({{ asset('storage/img/background/slider-bg.jpg') }}) no-repeat;
  background-position: center center;
  background-size: cover;
  position: relative;
}
.testimonials::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.7);
}
.testimonials .testimonials-carousel, .testimonials .testimonials-slider {
  overflow: hidden;
}
.testimonials .testimonial-item {
  text-align: center;
  color: #fff;
}
.testimonials .testimonial-item .testimonial-img {
  width: 100px;
  border-radius: 50%;
  border: 6px solid rgba(255, 255, 255, 0.15);
  margin: 0 auto;
}
.testimonials .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #fff;
}
.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #ddd;
  margin: 0 0 15px 0;
}
.testimonials .testimonial-item .quote-icon-left, .testimonials .testimonial-item .quote-icon-right {
  color: rgba(255, 255, 255, 0.4);
  font-size: 26px;
}
.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}
.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}
.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
  color: #eee;
}
.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}
.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.5);
  opacity: 1;
}
.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #3ec1d5;
}
@media (min-width: 992px) {
  .testimonials .testimonial-item p {
    width: 80%;
  }
}

/*--------------------------------------------------------------
# Quote
--------------------------------------------------------------*/
.suscribe-area {
  background: #3EC1D5 none repeat scroll 0 0;
  padding: 30px 0;
}

.suscribe-text {
  display: block;
  padding: 10px 0;
}

.suscribe-text h3 {
  color: #fff;
  display: inline-block;
  font-size: 20px;
  font-weight: 600;
  margin: 0;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.sus-btn {
  background: #fff none repeat scroll 0 0;
  border: 2px solid #fff;
  color: #3EC1D5;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  margin-left: 100px;
  padding: 10px 20px;
  text-decoration: none;
  text-transform: uppercase;
  border-radius: 30px;
}

.sus-btn:hover {
  background: #3EC1D5 none repeat scroll 0 0;
  border: 2px solid #fff;
  color: #fff;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact-area {
  height: auto;
  width: 100%;
}

.contact-content {
  padding: 100px;
  background: #000 none repeat scroll 0 0;
}

.contact-content-right {
  padding: 100px;
}

.single-icon i {
  font-size: 32px;
  width: 50px;
  height: 50px;
  line-height: 56px;
  border-radius: 50%;
  margin-bottom: 30px;
  color: #3ec1d5;
}

.single-icon p {
  font-size: 16px;
  line-height: 30px;
}

.contact-icon {
  margin-bottom: 40px;
}

#google-map {
  height: 370px;
  margin-bottom: 20px;
}

.php-email-form .validate {
  display: none;
  color: red;
  margin: 0;
  font-weight: 400;
  font-size: 13px;
}
.php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
.php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
.php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}
.php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}
.php-email-form input, .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}
.php-email-form input:focus, .php-email-form textarea:focus {
  border-color: #3ec1d5;
}
.php-email-form input {
  padding: 10px 15px;
}
.php-email-form textarea {
  padding: 12px 15px;
}
.php-email-form button[type=submit] {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid #ccc;
  color: #444;
  font-size: 16px;
  font-weight: 700;
  margin-top: 8px;
  padding: 12px 30px;
  text-transform: uppercase;
  transition: all 0.3s ease 0s;
  border-radius: 30px;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
/*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
.blog-area {
  height: auto;
  width: 100%;
}

.blog-text h4 a {
  color: #444;
  text-decoration: none;
}

.blog-text h4 {
  color: #444;
  margin-bottom: 15px;
}

.blog-btn {
  border-bottom: 1px dotted #444;
  color: #444;
  text-decoration: none;
}

.blog-btn {
  border-bottom: 1px dotted #444;
  color: #444;
  display: inline-block;
  padding: 0 1px 5px 0;
  position: relative;
  text-decoration: none;
}

.blog-btn {
  position: relative;
}

.blog-btn::after {
  content: "\f178";
  font-family: fontawesome;
  position: absolute;
  right: -20px;
  top: 1px;
  transition: all 0.3s ease 0s;
}

.blog-btn:hover::after {
  right: -30px;
}

.blog-btn:hover {
  color: #333;
  text-decoration: none;
}

.blog_meta span.date_type i {
  margin-left: 5px;
}

.blog-meta span.comments-type {
  margin-left: 5px;
}

.blog-meta span i {
  padding-right: 10px;
}

.blog-content .blog-meta {
  border-bottom: 1px dotted #333;
}

.blog-meta {
  border-bottom: 1px dotted #fff;
  padding: 10px 0;
}

.comments-type > a, .date-type, .blog-meta span.comments-type {
  color: #333;
  letter-spacing: 1px;
  margin-right: 5px;
}

.blog-meta .comments-type i {
  padding-right: 0 !important;
}

.blog-content-right .comments-type > a, .blog-content-right .date-type, .blog-content-right .blog-meta span.comments-type, .blog-content-right .blog-text p {
  color: #fff;
  letter-spacing: 1px;
}

.single-blog .ready-btn {
  border: 1px solid #444;
  border-radius: 30px;
  color: #444;
  cursor: pointer;
  display: inline-block;
  font-size: 15px;
  font-weight: 500;
  margin-top: 10px;
  padding: 10px 20px;
  text-align: center;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
}

.single-blog .ready-btn:hover {
  border: 1px solid #3EC1D5;
  color: #fff;
}

/*--------------------------------------------------------------
# Blog page
--------------------------------------------------------------*/
.page-area {
  position: relative;
}

.blog-page .banner-box {
  margin-bottom: 40px;
}

.search-option input {
  border: medium none;
  padding: 6px 15px;
  width: 80%;
}

.search-option {
  border: 1px solid #ccc;
  height: 42px;
  margin-bottom: 30px;
}

.search-option button {
  background: transparent none repeat scroll 0 0;
  border: medium none;
  font-size: 20px;
  padding: 8px 23px;
}

.search-option button:hover {
  color: #3ec1d5;
}

.left-blog h4 {
  border-bottom: 1px solid #ddd;
  color: #444;
  font-size: 17px;
  font-weight: 500;
  margin-bottom: 0;
  padding: 15px 10px;
  text-transform: uppercase;
}

.left-blog {
  background: #f9f9f9 none repeat scroll 0 0;
  margin-bottom: 30px;
  overflow: hidden;
  padding-bottom: 20px;
}

.left-blog li {
  border-bottom: 1px solid #ddd;
  display: block;
}

.left-blog ul li a {
  color: #444;
  display: block;
  font-size: 14px;
  padding: 10px;
  text-transform: capitalize;
}

.recent-single-post {
  border-bottom: 1px solid #ddd;
  display: block;
  overflow: hidden;
  padding: 15px 10px;
}

.ready-btn {
  border: 1px solid #fff;
  border-radius: 30px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 17px;
  font-weight: 600;
  margin-top: 30px;
  padding: 12px 40px;
  text-align: center;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
  z-index: 222;
}

.ready-btn:hover {
  color: #fff;
  background: #3EC1D5;
  border: 1px solid #3EC1D5;
  text-decoration: none;
}

.post-img {
  display: inline-block;
  float: left;
  padding: 0 5px;
  width: 35%;
}

.pst-content {
  display: inline-block;
  float: left;
  width: 65%;
}

.pst-content p a:hover, .left-blog ul li a:hover {
  color: #3EC1D5;
}

.blog-page .single-blog {
  margin-bottom: 40px;
}

.pst-content p a {
  color: #444;
  font-size: 15px;
}

.header-bottom h1, .header-bottom h2 {
  color: #fff;
}

.blog-tags {
  padding: 1px 0;
}

.left-blog li:last-child {
  border-bottom: 0;
}

.popular-tag.left-blog ul li a:hover {
  color: #fff;
}

.popular-tag.left-side-tags.left-blog ul {
  padding: 0 10px;
}

.blog-1 .banner-box {
  margin-bottom: 30px;
}

.left-tags .left-side-tags ul li {
  border-bottom: 0;
}

.left-tags .left-side-tags ul li a {
  padding: 3px 10px;
  width: auto;
}

.left-side-tags h4 {
  margin-bottom: 15px;
}

/*--------------------------------------------------------------
# Blog Details
--------------------------------------------------------------*/
.post-information h2 {
  color: #363636;
  font-size: 22px;
  text-transform: uppercase;
}

.post-information {
  padding: 20px 0;
}

.post-information .entry-meta span a {
  color: #444;
  display: inline-block;
  padding: 10px 0;
}

.entry-meta span a:hover {
  color: #3EC1D5;
}

.post-information .entry-meta {
  border-bottom: 1px solid #ccc;
  margin: 20px 0;
}

.post-information .entry-meta span i {
  padding: 0 10px;
}

.entry-content > p {
  color: #444;
}

.entry-meta > span {
  color: #444;
}

.entry-content blockquote {
  background: #fff none repeat scroll 0 0;
  border-left: 5px solid #3EC1D5;
  font-size: 17.5px;
  font-style: italic;
  margin: 0 0 20px 40px;
  padding: 22px 20px;
}

.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
  background-color: #3EC1D5;
  border-color: #3EC1D5;
  color: #fff;
  cursor: default;
  z-index: 3;
}

.social-sharing {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #ccc;
  display: block;
  margin: 30px 0;
}

.social-sharing > h3 {
  display: inline-block;
  font-size: 18px;
  margin: 0;
  padding: 20px 10px;
}

.sharing-icon {
  display: inline-block;
  float: right;
  padding: 13px 10px;
}

.sharing-icon a {
  border: 1px solid #444;
  color: #444;
  display: block;
  float: left;
  font-size: 18px;
  height: 34px;
  line-height: 30px;
  margin-left: 10px;
  text-align: center;
  width: 34px;
}

.sharing-icon a:hover {
  color: #3EC1D5;
  border: 1px solid #3EC1D5;
}

.single-blog .author-avatar {
  float: left;
  margin-right: 10px;
}

.single-blog .author-description h2 {
  font-size: 18px;
  margin: 0;
  padding: 0 0 5px;
}

.author-info {
  background: #fff none repeat scroll 0 0;
  float: left;
  margin: 30px 0;
  padding: 15px;
  width: 100%;
}

.single-post-comments {
  margin-bottom: 60px;
  max-width: 650px;
}

.comments-heading h3, h3.comment-reply-title {
  border-bottom: 1px solid #e8e8e9;
  color: #444;
  font-size: 18px;
  margin: 0 0 20px;
  padding: 0 0 5px;
  text-transform: uppercase;
}

.comments-list ul li {
  margin-bottom: 25px;
}

.comments-list-img {
  float: left;
  margin-right: 15px;
}

.comments-content-wrap {
  color: #42414f;
  font-size: 12px;
  line-height: 1;
  margin: 0 0 15px 80px;
  padding: 10px;
  position: relative;
}

.author-avatar {
  display: inline-block;
  float: left;
  width: 10%;
}

.author-description h2 {
  color: #777;
  font-size: 20px;
  text-transform: uppercase;
}

.author-description h2 a {
  color: #000;
}

.comments-content-wrap span b {
  margin-right: 5px;
}

span.post-time {
  margin-right: 5px;
}

.comments-content-wrap p {
  color: #909295;
  line-height: 18px;
  margin-bottom: 5px;
  margin-top: 15px;
}

li.threaded-comments {
  margin-left: 50px;
}

.comment-respond {
  margin-top: 60px;
}

span.email-notes {
  color: #42414f;
  display: block;
  font-size: 12px;
  margin-bottom: 10px;
}

.comment-respond p {
  color: #444;
  margin-bottom: 5px;
}

.comment-respond input[type=text], .comment-respond input[type=email] {
  border: 1px solid #e5e5e5;
  border-radius: 0;
  height: 32px;
  margin-bottom: 15px;
  padding: 0 0 0 10px;
  width: 100%;
}

.comment-respond textarea#message-box {
  border: 1px solid #e5e5e5;
  border-radius: 0;
  max-width: 100%;
  padding: 10px;
  height: 130px;
  width: 100%;
}

.comment-respond input[type=submit] {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid #3ec1d5;
  border-radius: 20px;
  box-shadow: none;
  color: #444;
  display: inline-block;
  font-size: 12px;
  font-weight: 700;
  height: 40px;
  line-height: 14px;
  margin-top: 20px;
  padding: 10px 15px;
  text-shadow: none;
  text-transform: uppercase;
  transition: all 0.3s ease 0s;
  white-space: nowrap;
}

.comments-content-wrap span a {
  color: #000;
}

.comments-content-wrap span a:hover {
  color: #3EC1D5;
}

.comment-respond input[type=submit]:hover {
  border: 1px solid #3EC1D5;
  color: #fff;
  background: #3EC1D5;
}

.single-blog .blog-pagination {
  border-top: 1px solid #e5e5e5;
  margin: 0;
  padding-top: 30px;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer-area {
  padding: 40px 0;
  background: #f9f9f9;
}

.footer-head p {
  color: #444;
}

.footer-head h4 {
  color: #444;
  font-size: 16px;
  letter-spacing: 2px;
  padding-bottom: 10px;
  text-transform: uppercase;
}

.footer-logo {
  padding-bottom: 20px;
}

.footer-logo h2 {
  color: #222;
  padding: 0;
  margin: 0;
  font-size: 36px;
  font-weight: bold;
  line-height: 1;
}

.footer-logo h2 span {
  color: #3ec1d5;
}

.footer-icons ul li {
  display: inline-block;
}

.footer-icons ul li a {
  border: 1px solid #444;
  color: #444;
  display: block;
  font-size: 16px;
  height: 40px;
  line-height: 38px;
  margin-right: 5px;
  text-align: center;
  width: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  line-height: 0;
}
.footer-icons ul li a i {
  line-height: 0;
}

.flicker-img > a {
  float: left;
  padding: 1px;
  width: 33.33%;
}

.footer-icons {
  margin-top: 30px;
}

.footer-contacts p span {
  color: #3EC1D5;
  font-weight: 700;
}

.popular-tag ul li {
  display: inline-block;
}

.footer-content {
  display: block;
  overflow: hidden;
}

.popular-tag ul li a:hover, .footer-icons ul li a:hover {
  background: #3EC1D5;
  border: 1px solid #3EC1D5;
  color: #fff;
}

.popular-tag ul li a {
  border: 1px solid #444;
  border-radius: 30px;
  color: #444;
  font-size: 13px;
  display: block;
  font-weight: 600;
  margin: 5px 3px;
  position: relative;
  text-decoration: none;
  text-transform: capitalize;
  transition: all 0.4s ease 0s;
  width: 70px;
}

.footer-area-bottom {
  background: #f1f1f1 none repeat scroll 0 0;
  padding: 15px 0;
}

.copyright-text a:hover {
  text-decoration: underline;
  color: #3EC1D5;
}

.copyright-text a {
  color: #444;
}

.copyright > p {
  margin-bottom: 0;
  color: #444;
}

.copyright a, .credits a {
  color: #3EC1D5;
}

.credits {
  padding-top: 5px;
  text-align: center;
}

/*--------------------------------------------------------------
# Responsive
--------------------------------------------------------------*/
@media (min-width: 1920px) {
  .work-right-text {
    padding: 150px 150px;
  }
}
/* Normal desktop :992px. */
@media (min-width: 992px) and (max-width: 1169px) {
  .slider-content {
    padding: 146px 0;
  }

  .work-right-text {
    padding: 40px 0;
  }

  .work-right-text h2 {
    font-size: 18px;
    line-height: 28px;
  }
}
/* Tablet desktop :768px. */
@media (min-width: 768px) and (max-width: 991px) {
  .layer-1-1 h2 {
    font-size: 24px;
  }

  .layer-1-2 h1 {
    font-size: 31px;
    line-height: 38px;
    padding: 0px 30px;
  }

  .tab-menu ul.nav li a {
    padding: 10px 16px;
  }

  .suscribe-input input {
    width: 60%;
  }

  .suscribe-input button {
    width: 40%;
  }

  .team-content.text-center > h4 {
    font-size: 20px;
  }

  .sus-btn {
    margin-left: 0;
  }

  .suscribe-text h3 {
    font-size: 16px;
    padding-right: 20px;
  }

  .work-right-text h5 {
    font-size: 14px;
    line-height: 22px;
  }

  .work-right-text {
    padding: 36px 0;
  }

  .work-right-text h2 {
    font-size: 14px;
    line-height: 22px;
  }

  .work-right-text .ready-btn {
    font-size: 13px;
    padding: 7px 20px;
    margin-top: 5px;
  }

  .single-awesome-portfolio {
    width: 33.33%;
  }

  .widget-product a img {
    display: block;
    float: none;
    width: 100%;
  }

  .widget-product .product-info {
    display: block;
    float: none;
    padding-left: 0;
    width: 100%;
    margin-top: 20px;
  }

  .map-column {
    margin-left: 0;
    padding-right: 40px;
  }

  .post-information .entry-meta {
    font-size: 13px;
    padding: 5px 0;
  }

  .post-information .entry-meta span a {
    padding: 4px 0;
  }

  .service-pic {
    margin-bottom: 30px;
    text-align: center;
  }

  .single-add-itms {
    width: 50%;
  }

  .left-sidebar-title > h4 {
    font-size: 18px;
  }

  .contact-form {
    margin-top: 0px;
  }

  .search-option input {
    width: 67%;
  }
}
/* small mobile :320px. */
@media (max-width: 767px) {
  .slider-area {
    margin-top: 60px;
  }

  .slider-content {
    padding: 80px 0;
  }

  .slider-content h2 {
    font-size: 18px !important;
    line-height: 24px !important;
  }

  .slider-content h1 {
    font-size: 20px !important;
    line-height: 26px !important;
  }

  .layer-1-3 a.ready-btn {
    padding: 8px 15px;
  }

  .section-headline h2 {
    font-size: 30px;
  }

  .well-middle .single-well {
    margin-top: 30px;
  }

  .single-skill {
    margin-bottom: 40px;
  }

  .tab-menu {
    margin-top: 30px;
  }

  .tab-menu ul.nav li a {
    padding: 8px 6px;
  }

  .wellcome-text {
    margin: 0px;
    padding: 70px 0px;
  }

  .subs-feilds {
    width: 100%;
  }

  .suscribe-input input {
    width: 60%;
  }

  .suscribe-input button {
    font-size: 15px;
    padding: 14px 10px;
    width: 40%;
  }

  .section-headline h3 {
    font-size: 25px;
  }

  .well-text > h2 {
    font-size: 18px;
  }

  .well-text p {
    display: none;
  }

  .single-team-member {
    margin-bottom: 30px;
  }

  .service-right {
    width: 100%;
  }

  .service-images:hover .overly-text {
    display: none;
  }

  .portfolio-area {
    padding-top: 0px;
  }

  .project-menu li a {
    padding: 8px 12px;
    margin: 10px 4px;
  }

  .pri_table_list {
    margin-bottom: 30px;
  }

  .single-awesome-project, .portfolio-2 .single-awesome-project {
    width: 100%;
    float: none;
  }

  .single-blog {
    margin-bottom: 30px;
  }

  .sus-btn {
    margin-left: 0;
    margin-top: 30px;
  }

  .contact-form {
    margin-top: 30px;
  }

  .head-team h5 {
    font-size: 22px;
  }

  .footer-content {
    margin-bottom: 30px;
  }

  .header-bottom h1 {
    font-size: 30px;
    margin-bottom: 0;
  }

  .page-area .slider-content {
    padding: 500px 0;
  }

  .search-option input {
    width: 74%;
  }

  .header-bottom h2 {
    font-size: 20px;
    margin-bottom: 0;
  }

  li.threaded-comments {
    margin-left: 0;
  }
}
/* Large Mobile :480px. */
@media only screen and (min-width: 480px) and (max-width: 767px) {
  .submitbtn {
    float: none;
    width: 99.8%;
  }

  .icons-bottom ul li a {
    height: 40px;
    line-height: 37px;
    width: 40px;
  }

  .blog-post-dlc ul li {
    padding-left: 20px;
    padding-right: 20px;
  }

  .awesome-portfolio-content .portfolio-2 {
    width: 50%;
  }

  .gallary-details .single-awesome-portfolio {
    width: 50%;
  }

  .tab-menu ul.nav li a {
    padding: 8px 20px;
  }
}
@media (max-width: 575px) {
  .slider-content {
    padding: 0;
  }
}
</style>