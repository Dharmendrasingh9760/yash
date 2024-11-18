<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Laralink">
  <!-- Favicon Icon -->

  <link rel="icon" href="{{ asset('images/icons/favicon.png') }}">
  <!-- Site Title -->
  <title>Nagar Nigham</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/animated-text.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/light_gallery.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/odometer.css') }}">
<link rel="stylesheet" href="{{ asset('css/timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      .admin:hover{
        color: black !important;

      }
    </style>
</head>

<body>
  <!-- Start Preloader -->
  <div class="cs_preloader cs_accent_color_v1">
    <div class="cs_preloader_in">
      <div class="cs_wave_first">
        <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg">
          <g>
            <path
              d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z">
            </path>
          </g>
        </svg>
      </div>
      <div class="cs_wave_second">
        <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg">
          <g>
            <path
              d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z">
            </path>
          </g>
        </svg>
      </div>
    </div>
  </div>
  <!-- End Preloader -->
  <!-- Start Header Section -->
  <header class="cs_site_header cs_style_1 cs_sticky_header fixed top-0 left-0">
    <div class="cs_main_header">
      <div class="container-fluid " style="margin-top: 31px;">
        <div class="cs_main_header">
          <div class="">
            <div class="cs_main_header_in">
              <div class="cs_main_header_left">
                <a class="cs_site_branding" href="index.html">
                  <img src="{{ asset('images/Logo.svg') }}" style="width: 280px;"  alt="Logo">

                </a>
              </div>
              <div class="cs_main_header_right cs_accent_color_v1">
                <div class="cs_header_contact">
                  <div class="cs_header_contact_icon text-accent">
                    <img src="{{ asset('images/icons/phone_icon_3.svg') }}" alt="">

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </header>
  <!-- End Header Section -->
  <!-- Start Hero Section -->
  <section class="position-relative" id="home">
    <div class="cs_hero cs_style_6">
      <div class="cs_hero_bg cs_bg_filed" style="background-image: url('./images/Banner.jpg');"></div>
      <div class="overlay"></div>
      <div class="container">
        <div class="cs_hero_text">
          <h1 class="cs_hero_title cs_fs_60 cs_semibold" style="color: white;">Property Taxes & <br> Essential Certificates Service</h1>
          <div class="cs_hero_subtitle cs_fs_18" style="color: white;">
            Offering expert assistance with property tax, marriage certificates,<br>
            death certificates, and birth certificates for your convenience.
          </div>
          <div class="cs_hero_btn_group">
            {{-- <a href="https://appentus.xyz/Nagarpalika_Admin/public/"
            class="admin cs_btn cs_style_1 cs_accent_bg_v1 cs_size_md hover:bg-white font-semibold text-white hover:text-black">
            Admin
          </a> --}}

            <a href="https://appentus.xyz/NagrPalika/public/dashboard"
              class="cs_btn cs_style_1 font-semibold cs_size_md border border-[#0CB8B6] bg-[#FFFFFF] text-[#000000] hover:bg-[#0CB8B6]">User</a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- End Counter Section -->
  <!-- Start Service Section -->
  <section id="services">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <h3 class="cs_section_title_up cs_accent_color_v1 cs_semibold cs_fs_24">What's Happening</h3>
        <h2 class="cs_section_title cs_semibold cs_fs_45 wow fadeInUp mb-0">We're Providing Best Services <br> To Our
          Users</h2>
      </div>
      <div class="cs_height_63 cs_height_lg_40"></div>
    </div>
    <div class="container">
      <div class="cs_tabs">
        <ul class="cs_tab_links cs_style_1 cs_mp0">
          <li class="active">
            <a href="#crutches">
              <img src="{{ asset('images/Property.png') }}" alt="Icon">

              <span>Property tax</span>
            </a>
          </li>
          <li>
            <a href="#x_ray">
              <img src="{{ asset('images/Certificate.png') }}" alt="Icon">

              <span>
                Birth Certificate</span>
            </a>
          </li>
          <li>
            <a href="#pulmonary">
              <img src="{{ asset('images/Certificate.png') }}" alt="Icon">
              <span>Death Certificate</span>
            </a>
          </li>
          <li>
            <a href="#cardiology">
              <img src="{{ asset('images/Certificate.png') }}" alt="Icon">
              <span>Marriage Certificate</span>
            </a>
          </li>
          <li>
            <a href="#dental">
              <img src="{{ asset('images/Trade License.png') }}" alt="Icon">
              <span> Trade license</span>
            </a>
          </li>

        </ul>
        <div class="cs_height_50 cs_height_lg_40"></div>
        <div class="tab-content max-w-[1172px] m-auto">
          <div id="crutches" class="cs_tab active">
            <div class="cs_card cs_style_1 cs_white_bg cs_radius_5">
              <div class="row cs_gap_y_20">
                <div class="col-lg-7">
                  <div class="cs_card_text">
                    <h2 class="cs_card_title cs_fs_35 cs_semibold">Property Tax Asset</h2>
                    <p class="cs_card_subtitle text-[20px] leading-[40px] mt-3">The Property Tax Asset module allows users to pay property taxes and add properties for streamlined tax management and payment tracking.</p>



                  </div>
                </div>
                <div class="col-lg-5 text-end">
                  <div class="cs_card_thumb cs_radius_5">
                    <img src="{{ asset('images/Frame_34.png') }}" alt="Department Image">


                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="x_ray" class="cs_tab">
            <div class="cs_card cs_style_1 cs_white_bg cs_radius_5">
              <div class="row cs_gap_y_20">
                <div class="col-lg-7">
                  <div class="cs_card_text">
                    <h2 class="cs_card_title cs_fs_35 cs_semibold">Birth Certificate</h2>
                    <p class="cs_card_subtitle  text-[20px] leading-[40px] mt-3">The Birth Certificate module lets users apply for a birth certificate and check the status of their application, ensuring a smooth and efficient process.</p>


                  </div>
                </div>
                <div class="col-lg-5 text-end">
                  <div class="cs_card_thumb cs_radius_5">
                    <img src="{{ asset('images/Frame_36.png') }}" alt="Department Image">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="pulmonary" class="cs_tab">
            <div class="cs_card cs_style_1 cs_white_bg cs_radius_5">
              <div class="row cs_gap_y_20">
                <div class="col-lg-7">
                  <div class="cs_card_text">
                    <h2 class="cs_card_title cs_fs_35 cs_semibold">Death Certificate</h2>
                    <p class="cs_card_subtitle text-[20px] leading-[40px] mt-3" >The Death Certificate module lets users apply for a death certificate and check the status of their application, ensuring a smooth and efficient process.</p>

                  </div>
                </div>
                <div class="col-lg-5 text-end">
                  <div class="cs_card_thumb cs_radius_5">
                    <img src="{{ asset('images/Frame_35.png') }}" alt="Department Image">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="cardiology" class="cs_tab">
            <div class="cs_card cs_style_1 cs_white_bg cs_radius_5">
              <div class="row cs_gap_y_20">
                <div class="col-lg-7">
                  <div class="cs_card_text">
                    <h2 class="cs_card_title cs_fs_35 cs_semibold">Marriage certificate</h2>
                    <p class="cs_card_subtitle  text-[20px] leading-[40px] mt-3">The Marriage Certificate module lets users apply for a marriage certificate and check the status of their application, ensuring a smooth and efficient process..</p>


                  </div>
                </div>
                <div class="col-lg-5 text-end">
                  <div class="cs_card_thumb cs_radius_5">
                    <img src="{{ asset('images/Frame_33.png') }}" alt="Department Image">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="dental" class="cs_tab">
            <div class="cs_card cs_style_1 cs_white_bg cs_radius_5">
              <div class="row cs_gap_y_20">
                <div class="col-lg-7">
                  <div class="cs_card_text">
                    <h2 class="cs_card_title cs_fs_35 cs_semibold">Trade License</h2>
                    <p class="cs_card_subtitle  text-[20px] leading-[40px] mt-3 ">A trade license certifies permission to conduct business activities legally, ensuring compliance with local laws and regulations.</p>


                  </div>
                </div>
                <div class="col-lg-5 text-end">
                  <div class="cs_card_thumb cs_radius_5">
                    <img src="{{ asset('images/TradeLicense.png') }}" alt="Department Image">

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Service Section -->
   <div class="max-w-[1200px] m-auto">
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 px-[20px]">
    <section
      class="elementor-section elementor-top-section elementor-element elementor-element-xx4kt34 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
      data-id="xx4kt34" data-element_type="section"
      data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
      <div class="elementor-background-overlay"></div>
      <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-19be28e"
          data-id="19be28e" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-3935697 elementor-widget elementor-widget-heading"
              data-id="3935697" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="font-semibold text-[18px] leading-[40px] text-[#000000]">ABOUT DISTRICT</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-155952c"
          data-id="155952c" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-6ef8186 elementor-widget elementor-widget-text-editor"
              data-id="6ef8186" data-element_type="widget" data-widget_type="text-editor.default">
              <div class="elementor-widget-container">
                <p class="text-[18px]">Saharanpur district has attained the status as Saharanpur division in 1997 of
                  Uttar
                  Pardesh. Saharanpur city has attained the status as Saharnpur nagar nigam on
                  01.10.2009 and is 13th municipal corporation in the state of Uttar Pradesh.</p>
              </div>
            </div>
            <div class="elementor-element elementor-element-df9f113 elementor-widget elementor-widget-heading "
              data-id="df9f113" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="font-semibold text-[18px] leading-[40px] text-[#000000]">AT A GLANCE</h2>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-392f2e0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
              data-id="392f2e0" data-element_type="widget" data-widget_type="icon-list.default">
              <div class="elementor-widget-container">
                <ul class="elementor-icon-list-items  flex flex-col gap-3 mt-2 mb-10">
                  <li class="elementor-icon-list-item"> <a href="https://ratings.upsmfac.org/"> <span
                        class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-angle-right"></i> </span>
                      <span class="elementor-icon-list-text">Area: 3,689 Sq.Km.(Year 2011)</span>
                    </a></li>
                  <li class="elementor-icon-list-item"> <a href="https://ratings.upsmfac.org/"> <span
                        class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-angle-right"></i> </span>
                      <span class="elementor-icon-list-text">Language: Hindi, English</span> </a>
                  </li>
                  <li class="elementor-icon-list-item"> <a href="https://ratings.upsmfac.org/"> <span
                        class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-angle-right"></i> </span>
                      <span class="elementor-icon-list-text">Male: 18,34,709(Year 2011)</span> </a>
                  </li>
                  <li class="elementor-icon-list-item"> <a href="https://ratings.upsmfac.org/"> <span
                        class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-angle-right"></i> </span>
                      <span class="elementor-icon-list-text">Population: 3,467,332</span> </a></li>
                  <li class="elementor-icon-list-item"> <a href="https://ratings.upsmfac.org/"> <span
                        class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-angle-right"></i> </span>
                      <span class="elementor-icon-list-text">Villages: 887</span> </a></li>
                  <li class="elementor-icon-list-item"> <a href="https://ratings.upsmfac.org/"> <span
                        class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-angle-right"></i> </span>
                      <span class="elementor-icon-list-text">Female: 16,32,623(Year 2011)</span>
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div>
      <div class="">
        <div class="font-semibold text-[18px] leading-[40px] text-[#000000]">INFORMATION</div>
        <ul class="flex flex-col gap-3 mt-2">
          <li class="text-[#000000] flex items-center gap-2 ">
            <i class="fa-solid fa-circle-dot mt-1 text-[16px]"></i>
            <span class="text-[16px]"> Ratings of all nursing & paramedical institutes</span>
          </li>
          <li class="text-[#000000]   flex  gap-2">
            <i class="fa-solid fa-circle-dot mt-2 text-[16px]"></i>
            <span class="text-[16px]"> Printed copy of ratings booklet of nursing & paramedical institutes</span>
          </li>
          <li class="text-[#000000]  flex  gap-2">
            <i class="fa-solid fa-circle-dot mt-2 text-[16px]"></i>
            <span class="text-[16px]"> Official press release for ratings of nursing & paramedical institutes</span>
          </li>
          <li class="text-[#000000] flex  gap-2 items-center ">
            <i class="fa-solid fa-circle-dot text-[16px]"></i>
            <span class="text-[16px]">Telephone Directory</span>
          </li>
          <li class="text-[#000000]  flex  gap-2 items-center">
            <i class="fa-solid fa-circle-dot text-[16px]"></i>
            <span class="text-[16px]">Aadhaar Enrollment</span>
          </li>
          <li class="text-[#000000] flex  gap-2 items-center ">
            <i class="fa-solid fa-circle-dot text-[16px]"></i>
            <span class="text-[16px]">Helpline</span>
          </li>
          <li class="text-[#000000]  flex  gap-2 items-center">
            <i class="fa-solid fa-circle-dot text-[16px]"></i>
            <span class="text-[16px]">Election Commission of India</span>
          </li>
          <li class="text-[#000000] flex  gap-2 items-center">
            <i class="fa-solid fa-circle-dot text-[16px]"></i>
            <span class="text-[16px]">Apply for ePass</span>
          </li>
        </ul>


      </div>
    </div>
    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-cd913ea"
    data-id="cd913ea" data-element_type="column">
    <div class="elementor-widget-wrap elementor-element-populated">
      <div class="elementor-element elementor-element-6b7c63c elementor-widget elementor-widget-heading"
        data-id="6b7c63c" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
          <h2  class="font-semibold text-[18px] leading-[40px] text-[#000000]">SAHARANPUR MAP</h2>
        </div>
      </div>
      <div class="elementor-element elementor-element-9f07cfc elementor-widget elementor-widget-google_maps"
        data-id="9f07cfc" data-element_type="widget" data-widget_type="google_maps.default">
        <div class="elementor-widget-container">
          <style>
            /*! elementor - v3.19.0 - 07-02-2024 */
            .elementor-widget-google_maps .elementor-widget-container {
              overflow: hidden
            }

            .elementor-widget-google_maps .elementor-custom-embed {
              line-height: 0
            }

            .elementor-widget-google_maps iframe {
              height: 300px
            }
          </style>
          <div class="elementor-custom-embed"> <iframe loading="lazy"
              src="https://maps.google.com/maps?q=mauranipur&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
              title="mauranipur" aria-label="mauranipur"></iframe></div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
  <!-- Start footer -->
  <footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-[1200px] m-auto">
        <!-- Address List -->
        <div>
          <h3 class="font-bold text-lg mb-4 text-[#FFFFFF]">ADDRESS LIST</h3>
          <p class="flex  mb-2">
            <span class="mr-2 mt-2"><img src="./images/LocationImg.png" alt="Location Icon" class="w-4 h-4"></span>
            123, Any Street North<br>Your City Name<br>Country Name. P.O 3554
          </p>
          <p class="flex  mb-2">
            <span class="mr-2 mt-2"><img src="./images/Call_calling.png" alt="Phone Icon" class="w-4 h-4"></span>
            +1 234 567 8902
          </p>
          <p class="flex items-center mb-2 mt-3">

            contact@yoursite.com<br>help@yoursite.com
          </p>
        </div>
        <!-- Social Networks -->
        <div>
          <h3 class="font-bold text-lg mb-4  text-[#FFFFFF]">SOCIAL NETWORKS</h3>
          <p class="mb-2">yourfbusername</p>
          <p class="mb-2">@twitterhandle</p>
          <p class="mb-2">insta_account</p>
          <p class="mb-2">plusprofilename</p>
          <p class="mb-2">username</p>
        </div>
        <!-- Links List -->
        <div>
          <h3 class="font-bold text-lg mb-4  text-[#FFFFFF]">LINKS LIST</h3>
          <p class="mb-2"><a href="#" class="hover:text-gray-400">Help Center</a></p>
          <p class="mb-2"><a href="#" class="hover:text-gray-400">Community</a></p>
          <p class="mb-2"><a href="#" class="hover:text-gray-400">Forums</a></p>
          <p class="mb-2"><a href="#" class="hover:text-gray-400">Blog</a></p>
          <p class="mb-2"><a href="#" class="hover:text-gray-400">Meetups</a></p>
        </div>
        <!-- Powered By -->
        <!-- <div>
          <h3 class="font-bold text-lg mb-4  text-[#FFFFFF]">POWERED BY:</h3>
          <p><a href="https://www.thegrayarc.com" class="hover:text-gray-400">www.thegrayarc.com</a></p>
        </div> -->
      </div>
    </div>
  </footer>

  <!-- End footer -->
  <!-- Script -->
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/jquery.slick.min.js') }}"></script>
<script src="{{ asset('js/light_gallery.min.js') }}"></script>
<script src="{{ asset('js/odometer.js') }}"></script>
<script src="{{ asset('js/isotope.pkg.min.js') }}"></script>
<script src="{{ asset('js/jquery-timepicker.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/animated-text.min.js') }}"></script>
<script src="{{ asset('js/ripple.min.js') }}"></script>
<script src="{{ asset('js/YTPlayer.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
