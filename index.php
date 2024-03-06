<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>cs</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
         .card {
  position: relative;
  width: 200px;
  height: 200px;
  background: lightgrey;
  border-radius: 30px;
  overflow: hidden;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  transition: all 1s ease-in-out;
}

.background {
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 100% 107%, #ff89cc 0%, #9cb8ec 30%, #00ffee 60%, #62c2fe 100%);
}

.logo {
  position: absolute;
  right: 50%;
  bottom: 50%;
  transform: translate(50%, 50%);
  transition: all 0.6s ease-in-out;
}

.logo .logo-svg {
  fill: white;
  width: 30px;
  height: 30px;
}

.icon {
  display: inline-block;
  width: 20px;
  height: 20px;
}

.icon .svg {
  fill: rgba(255, 255, 255, 0.797);
  width: 100%;
  transition: all 0.5s ease-in-out;
}

.box {
  position: absolute;
  padding: 10px;
  text-align: right;
  background: rgba(255, 255, 255, 0.389);
  border-top: 2px solid rgb(255, 255, 255);
  border-right: 1px solid white;
  border-radius: 10% 13% 42% 0%/10% 12% 75% 0%;
  box-shadow: rgba(100, 100, 111, 0.364) -7px 7px 29px 0px;
  transform-origin: bottom left;
  transition: all 1s ease-in-out;
}

.box::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: inherit;
  opacity: 0;
  transition: all 0.5s ease-in-out;
}

.box:hover .svg {
  fill: white;
}

.box1 {
  width: 70%;
  height: 70%;
  bottom: -70%;
  left: -70%;
}

.box1::before {
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #ff53d4 60%, #62c2fe 90%);
}

.box1:hover::before {
  opacity: 1;
}

.box1:hover .icon .svg {
  filter: drop-shadow(0 0 5px white);
}

.box2 {
  width: 50%;
  height: 50%;
  bottom: -50%;
  left: -50%;
  transition-delay: 0.2s;
}

.box2::before {
  background: radial-gradient(circle at 30% 107%, #91e9ff 0%, #00ACEE 90%);
}

.box2:hover::before {
  opacity: 1;
}

.box2:hover .icon .svg {
  filter: drop-shadow(0 0 5px white);
}

.box3 {
  width: 30%;
  height: 30%;
  bottom: -30%;
  left: -30%;
  transition-delay: 0.4s;
}

.box3::before {
  background: radial-gradient(circle at 30% 107%, #969fff 0%, #b349ff 90%);
}

.box3:hover::before {
  opacity: 1;
}

.box3:hover .icon .svg {
  filter: drop-shadow(0 0 5px white);
}

.box4 {
  width: 10%;
  height: 10%;
  bottom: -10%;
  left: -10%;
  transition-delay: 0.6s;
}

.card:hover {
  transform: scale(1.1);
}

.card:hover .box {
  bottom: -1px;
  left: -1px;
}

.card:hover .logo {
  transform: translate(0, 0);
  bottom: 20px;
  right: 20px;
}
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <div class="wrapper">
         <!-- end loader -->
         <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div id="dismiss">
                  <i class="fa fa-arrow-left"></i>
               </div>
               <ul class="list-unstyled components">
                  <li class="active">
                     <a href="index.html">Home</a>
                  </li>
                  <li>
                     <a href="#about">About</a>
                  </li>
                  <li>
                     <a href="#customer">Our customer</a>
                  </li>
                  <li>
                     <a href="#contact">Conatct</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div id="content">
            <!-- header -->
            <header>
               <!-- header inner -->
               <div class="head_top">
                  <div class="header">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-3 logo_section">
                              <div class="full">
                                 <div class="center-desk">
                                    <div class="logo">
                                       <a href="index.html"><img src="img/unnamed.png" alt="#"></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-9">
                              <div class="right_header_info">
                                 <ul>
                                    <li class="menu_iconb">
                                       <a href="https://tcvvip6.com/#/register?invitationCode=328524261760" target="_blank">Register Now</a>
                                    </li>
                                    <li>
                                       <button type="button" id="sidebarCollapse">
                                       <img src="images/menu_icon.png" alt="#" />
                                       </button>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
               <div class="banner_main">
                  <img src="images/bg_main2.jpg" alt="#"/>
                  <div class="container-fluid padding3">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="text-bg">
                              <a href="Javascript:void(0)">Play now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         <!-- Categories -->
         <!-- licens -->
         <div class="licens">
            <div class="container">
               <!-- <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Licensing & Reglation</h2>
                        <span></span>
                     </div>
                  </div>
               </div> -->
               <div class="row">
                  <!-- <div class="col-md-12">
                     <div id="licens" class="carousel slide licens_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#licens" data-slide-to="0" class="active"></li>
                           <li data-target="#licens" data-slide-to="1"></li>
                           <li data-target="#licens" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="container">
                                 <div class="carousel-caption ">
                                    <div class="row d_flex">
                                       <div  class="col-md-6">
                                          <div class="test_box">
                                             <div class="jons">
                                                <h4>Promotins</h4>
                                             </div>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                             <a class="read_more" href="Javascript:void(0)">Play Online</a>
                                          </div>
                                       </div>
                                       <div  class="col-md-6">
                                          <div class="test_box">
                                             <div class="jons">
                                                <figure><img src="images/jons_img1.png" alt="#"/></figure>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div class="carousel-caption">
                                    <div class="row d_flex">
                                       <div  class="col-md-6">
                                          <div class="test_box">
                                             <div class="jons">
                                                <h4>Promotins</h4>
                                             </div>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                             <a class="read_more" href="Javascript:void(0)">Play Online</a>
                                          </div>
                                       </div>
                                       <div  class="col-md-6">
                                          <div class="test_box">
                                             <div class="jons">
                                                <figure><img src="images/jons_img1.png" alt="#"/></figure>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div class="carousel-caption">
                                    <div class="row d_flex">
                                       <div  class="col-md-6">
                                          <div class="test_box">
                                             <div class="jons">
                                                <h4>Promotins</h4>
                                             </div>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                             <a class="read_more" href="Javascript:void(0)">Play Online</a>
                                          </div>
                                       </div>
                                       <div  class="col-md-6">
                                          <div class="test_box">
                                             <div class="jons">
                                                <figure><img src="images/jons_img1.png" alt="#"/></figure>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#licens" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#licens" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                     </div>
                     <p class="lorem">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div> -->
                  <div id="about" class="col-md-12">
                     <ul class="spinit">
                        <li><a href="Javascript:void(0)">About</a></li>
                     </ul>
                     <div class="two_box">
                        <div class="row d_flex">
                           <div class="col-md-4">
                              <div class="many_box_img">
                                 <figure><img src="images/imag.jpg" alt="#"/></figure>
                              </div>
                           </div>
                           <div class="col-md-8">
                              <div class="many_box">
                                 <p>TC Lottery stands out as a reputable platform, boasting a diverse array of engaging games, from color prediction challenges to Win Go, Trx hash, 5D, and K3 lottery. These offerings promise an exhilarating blend of entertainment and real prize-winning opportunities. With a user-centric approach, the platform caters to a wide spectrum of gaming preferences, ensuring every player finds something to enjoy. Upholding principles of fairness and ethics, TC Lottery provides a secure online gaming environment, fostering trust among its users. While players revel in the excitement of potential wins, they also acknowledge the inherent risk of losses in these probability-driven games. Furthermore, TC Lottery encourages a dynamic community atmosphere, allowing players to interact, compete, and share their successes with one another.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end lLicens -->
         <!-- customer -->
         <div id="customer"  class="customer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Introduction to TC Lottery: A Color Prediction Platform</h2>
                        <span></span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="customer_text">
                        <p>TC Lottery, a well-known color <a href="https://en.wikipedia.org/wiki/Prediction_game" target="_blank"><b>prediction platform</b></a>  in India, hosts a variety of probability-based games such as Win Go, Trx hash, and 5D. Among these, <a href="https://en.wikipedia.org/wiki/Parity_game" target ="_blank"><b>Win Go</b></a> stands out where participants must forecast either green or red, with correct predictions resulting in a doubling of their stake. However, as with any game reliant on chance, players also face the risk of losing their investment. The website provides insights into roulette strategies that can potentially enhance one's approach to the Wingo game.</p>
                        <div class="customer_box">
                           <i><a href= " https://t.me/Ashish9077" target ="_blank"><img src="images/telegram.png" alt="#"/></a></i>
                           <h4>Quick Support</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end customer -->
         <!-- reqeste -->
         <div id="contact" class="reqeste">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Reqeste A call back</h2>
                        <span></span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <form id="cochang" action="code.php" method="POST" class="form_main">
                        <div class="row">
                           <div class="col-md-12">
                              <input class="form_control" placeholder="Name" type="text" name="name">
                           </div>
                           <div class="col-md-12">
                              <input class="form_control" placeholder="Phone number" type="text" name="contact">
                           </div>
                           <div class="col-md-12">
                              <input class="form_control" placeholder="Email" type="text" name="email">
                           </div>
                           <div class="col-md-12">
                              <input class="form_control" placeholder="Message" type="text" name="msg">
                           </div>
                           <div class="col-md-12">
                              <button class="send_btn">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- end reqeste -->
         <!--  footer -->
         <footer>
            <div class="footer">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                        <div class="address">
                           <h3>Subscribe Now</h3>
                           <form class="newtetter">
                              <button class="submit">submit</button>
                              <input class="tetter" placeholder="Enter your email" type="text" name="Enter your email">
                           </form>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <div class="address">
                                 <h3>Links</h3>
                                 <ul class="Menu_footer">
                                    <li class="active"> <a href="index.html">Home</a> </li>
                                    <li><a href="#about">About</a> </li>
                                    <!-- <li><a href="#game">Game</a> </li> -->
                                    <li><a href="#customer">customer</a> </li>
                                    <li><a href="#conatct">Conatct</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <div class="address">
                                 <h3>Contact us</h3>
                                 <div class="card">
                                       <div class="background">
                                       </div>
                                       <div class="logo">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.667 31.69" class="logo-svg">
                                             <path id="Path_6" data-name="Path 6" d="M12.827,1.628A1.561,1.561,0,0,1,14.31,0h2.964a1.561,1.561,0,0,1,1.483,1.628v11.9a9.252,9.252,0,0,1-2.432,6.852q-2.432,2.409-6.963,2.409T2.4,20.452Q0,18.094,0,13.669V1.628A1.561,1.561,0,0,1,1.483,0h2.98A1.561,1.561,0,0,1,5.947,1.628V13.191a5.635,5.635,0,0,0,.85,3.451,3.153,3.153,0,0,0,2.632,1.094,3.032,3.032,0,0,0,2.582-1.076,5.836,5.836,0,0,0,.816-3.486Z" transform="translate(0 0)"></path>
                                             <path id="Path_7" data-name="Path 7" d="M75.207,20.857a1.561,1.561,0,0,1-1.483,1.628h-2.98a1.561,1.561,0,0,1-1.483-1.628V1.628A1.561,1.561,0,0,1,70.743,0h2.98a1.561,1.561,0,0,1,1.483,1.628Z" transform="translate(-45.91 0)"></path>
                                             <path id="Path_8" data-name="Path 8" d="M0,80.018A1.561,1.561,0,0,1,1.483,78.39h26.7a1.561,1.561,0,0,1,1.483,1.628v2.006a1.561,1.561,0,0,1-1.483,1.628H1.483A1.561,1.561,0,0,1,0,82.025Z" transform="translate(0 -51.963)"></path>
                                          </svg>
                                       </div>
                                       <div class="box box1"><span class="icon"><svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="svg">
                                             <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path>
                                             </svg></span></div>
                                       <div class="box box2"> <span class="icon"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                                             <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                             </svg></span></div>
                                       <div class="box box3"><span class="icon"><svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                                             <path d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path>
                                             </svg></span></div>
                                       <div class="box box4"></div>
                                       </div>
                                 <ul class="Links_footer">
                                    <li><a href="https://whatsapp.com/channel/0029VaNk6D9GJP8OHAoaU91l" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <p>Copyright 2024 All Right Reserved! Designed and Devloped By <a href="https://t.me/rawatshivi" target="_blank">Shivani Rawat</a></p>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
       <script src="js/custom.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });
         
             $(".zoom").hover(function() {
         
                 $(this).addClass('transition');
             }, function() {
         
                 $(this).removeClass('transition');
             });
         });
      </script>
     
   </body>
</html>

