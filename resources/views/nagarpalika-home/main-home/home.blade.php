<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Homepage</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/component.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-css.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="loadScreen"></div>
    <header class="header" data-aos="fade-in">
        <div class="header_top">
            <div class="container">
                <div class="top_txt_left" data-aos="fade-right" data-aos-duration="500">
                    <span>उत्तर प्रदेश सरकार</span>
                    <span>Government of Uttar Pradesh</span>
                </div>
                <div class="h_top_right" data-aos="fade-left">
                    {{-- <a href="#">Skip to Main Content</a>
                    <a href="#">Sitemap</a>
                    <div class="txt_size">
                        <a href="#" id="decreasetext"></a>
                        <a href="#" id="resettext"></a>
                        <a href="#" id="increasetext"></a>
                    </div>
                    <div class="theme_btn">
                        <a href="#" id="default_theme"><img src="images/default-theme-btn.png" alt=""></a>
                        <a href="#" id="dark_theme"><img src="images/black-theme-btn.png" alt=""></a>
                    </div>
                    <div class="language">
                        <a href="#">English</a>
                        <a href="#">हिन्दी</a>
                    </div> --}}
                    <div class="social">
                        <a href="#"><img src="{{asset('images/x-icon.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('images/fb-icon.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('images/linked-icon.png')}}" alt=""></a>
                        <a href="https://www.youtube.com/@NagarPalikaParishadSitapur" target="_blank"><img src="{{asset('images/youtube-icon.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_center">
            <div class="container">
                <div class="site_logo" data-aos="fade-right">
                    <a href="javascript:void()"><img src="{{asset('images/MauranipurLogo.png')}}" alt=""></a>
                </div>

                <div class="logo_img" data-aos="fade-left" data-aos-duration="500">
                    <img src="{{asset('images/icon1.png')}}" alt="">
                    <img src="{{asset('images/icon2.png')}}" alt="">
                    <img src="{{asset('images/icon3.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container">
                <a href="#" class="nav_menu_btn"><img src="{{asset('images/menu-icon.png')}}" alt=""></a>
                <nav class="header_nav">
                    <a href="#" class="close_btn"><img src="{{asset('images/close-icon-white.png')}}" alt=""></a>
                    <ul>
                        <li><a href="{{route('user.dashboard')}}">होम</a></li>
                        <li><a href="#">हमारे बारे में</a>
                            <ul>
                                <li><a href="{{route('user.aboutUs')}}">नगर पालिका परिषद, - सीतापुर के बारे में</a></li>
                                <li><a href="{{route('user.departmentObjective')}}">विभाग के उद्देश्य</a></li>
                                <li><a href="{{route('user.overview')}}">अवलोकन</a></li>
                                <li><a href="{{route('user.targetIndex')}}">विज़न और मिशन</a></li>
                                <li><a href="{{route('user.organizationalStructure')}}">संगठनात्मक संरचना</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('user.department')}}">विभाग</a></li>
                        <li><a href="{{route('user.services')}}">सेवाएं</a></li>
                        <li><a href="{{route('user.accountingAndFinance')}}">लेखा एवं वित्त</a></li>
                        <li><a href="{{route('user.plans')}}">योजनाएं</a></li>
                        <li><a href="{{route('user.departmentObjective')}}">ई-गवर्नेस</a></li>
                        <li><a href="{{route('user.departmentObjective')}}">सूचना पट</a></li>
                        <li><a href="{{route('user.departmentObjective')}}">नागरिक चार्टर</a></li>
                        <li><a href="{{route('user.departmentObjective')}}">संपर्क सूत्र</a></li>
                    </ul>
                </nav>
                <div class="login_btn" data-aos="fade-left">
                    <a href="{{route('login')}}" rel="noopener">Citizen Login ↗</a>
                        <a href="http://admin.nppsitapur.com/">Admin Login ↗</a>
                </div>
            </div>
        </div>
    </header>

    <section class="banner" data-aos="fade-left" data-aos-duration="500">
        <div class="banner_slider">
            <div class="item"><img src="{{asset('images/01.png')}}" alt=""></div>
            <div class="item"><img src="{{asset('images/02.png')}}" alt=""></div>
            <div class="item"><img src="{{asset('images/03.png')}}" alt=""></div>
            <div class="item"><img src="{{asset('images/04.png')}}" alt=""></div>
            <div class="item"><img src="{{asset('images/05.png')}}" alt=""></div>
            <div class="item"><img src="{{asset('images/06.png')}}" alt=""></div>
            <div class="item"><img src="{{asset('images/07.png')}}" alt=""></div>
            <div class="item"><img src="{{asset('images/08.png')}}" alt=""></div>
            <div class="item"><img src="{{asset('images/09.png')}}" alt=""></div>
            <div class="item"><img src="{{asset('images/10.png')}}" alt=""></div>
            <div class="item"><img src="{{asset('images/11.png')}}" alt=""></div>
        </div>
    </section>

    <section class="marquee_panel" data-aos="fade-in">
        <p><strong>नगर पालिका परिषद् - सीतापुर</strong>, उत्तर प्रदेश सरकार की वेबसाइट में आपका स्वागत है। ✦ <strong>नगर पालिका परिषद् - सीतापुर</strong>, उत्तर प्रदेश सरकार की वेबसाइट में आपका स्वागत है। ✦ <strong>नगर पालिका परिषद् - सीतापुर</strong></p>
    </section>

    <section class="c_block_1">
        <div class="container">
            <ul>
                <li data-aos="flip-right">
                    <figure>
                        <img src="{{asset('images/pic1.png')}}" alt="">
                    </figure>
                    <strong>माननीय श्री योगी आदित्यनाथ <br>(मुख्यमंत्री)</strong>
                </li>
                <li data-aos="flip-right">
                    <figure>
                        <img src="{{asset('images/Frame 12.png')}}" alt="">
                    </figure>
                    <strong>ब्रजेश पाठक <br>(उपमुख्यमंत्री)      </strong>
                </li>
                <li data-aos="flip-right">
                    <figure> 
                        <img src="{{asset('images/Frame 11 1.png')}}" alt="">
                    </figure>
                    <strong>श्री नीतीश कुमार सिंह<br>

(अपर जिलाधिकारी)</strong>
                </li>
                <li data-aos="flip-right">
                <figure>
                    <img src="{{asset('images/Frame 10 1.png')}}" alt="">
                </figure>
                <strong>
                    श्रीमती अमृता सिंह
<br>	
(नगर मजिस्ट्रेट)
                </strong>
                </li>
                <li data-aos="flip-right">
                    <figure>
                        <img src="{{asset('images/Rakesh Rathore.png')}}" alt="">
                    </figure>
                    <strong>
                        राकेश राठौड़ गुरु
                        <br>
                       (सदस्य उत्तर प्रदेश विधान सभा)                    </strong>
                </li>
            </ul>
        </div>
    </section>

    <div class="line"></div>

    <section class="c_block_2" data-aos="flip-right">
        <div class="container">
            <h2>नगर पालिका परिषद्, सीतापुर <strong>ऑनलाइन सेवाएं</strong></h2>
            <ul>
                <li style="background-color: #FFEC43;">
                    <img src="{{asset('images/icon4.png')}}" alt="">
                    <strong>सम्पत्ति <br>एवं जल कर</strong>
                    <a href="{{route('property.text')}}" class="arrowbtn1" target="_blank"><img src="{{asset('images/arrow1.png')}}" alt=""></a>
                </li>
                <li style="background-color: #FFD8C6;">
                    <img src="{{asset('images/icon5.png')}}" alt="">
                    <strong>जन्म एवं मृत्यु <br>  
                        पंजीकरण</strong>
                    <a href="{{route('birth.certificate')}}" class="arrowbtn1" target="_blank"><img src="{{asset('images/arrow1.png')}}" alt=""></a>
                </li>
                <li style="background-color: #B5FFCD;">
                    <img src="{{asset('images/icon6.png')}}" alt="">
                    <strong>लाइसेन्स</strong>
                    <a href="{{route('trade.license')}}" class="arrowbtn1" target="_blank"><img src="{{asset('images/arrow1.png')}}" alt=""></a>
                </li>
                <li style="background-color: #F1FFA1;">
                    <img src="{{asset('images/icon7.png')}}" alt="">
                    <strong>विज्ञापन कर</strong>
                    <a href="{{route('user.advertisement')}}" class="arrowbtn1" target="_blank"><img src="{{asset('images/arrow1.png')}}" alt=""></a>
                </li>
                <li style="background-color: #C6F4FF;">
                    <img src="{{asset('images/icon8.png')}}" alt="">
                    <strong>म्युटेशन</strong>
                    <a href="javascript:void()" class="arrowbtn1"><img src="{{asset('images/arrow1.png')}}" alt=""></a>
                </li>
                <!--<li style="background-color: #FFD2EB;">-->
                <!--    <img src="{{asset('images/icon9.png')}}" alt="">-->
                <!--    <strong>सम्पत्ति <br>एवं जल कर</strong>-->
                <!--    <a href="#" class="arrowbtn1"><img src="{{asset('images/arrow1.png')}}" alt=""></a>-->
                <!--</li>-->
            </ul>
        </div>
    </section>

    <div class="line"></div>

    <section class="c_block_3" data-aos="flip-left">
        <div class="container">
            <ul>
                <li style="background-color: #B5FDFF;">
                    <strong>जन सुनवाई </strong>
                    <a href="https://jansunwai.up.nic.in/" class="arrowbtn2" style="background-color: #2ADFE5;" target="_blank">
                        <img src="{{asset('images/arrow2.png')}}" alt="">
                    </a>                    </li>
                <li style="background-color: #F1FFC1;">
                    <strong>ई-न्यूज लेटर</strong>
                    <a href="https://information.up.gov.in/en" class="arrowbtn2" style="background-color: #D1F165;" target="_blank"><img src="{{asset('images/arrow2.png')}}" alt=""></a>
                </li>
                <li style="background-color: #FFDED2;">
                    <strong>डाउनलोड फार्म</strong>
                    <a href="javascript:void()" class="arrowbtn2" style="background-color: #FFAC8E;"><img src="{{asset('images/arrow2.png')}}" alt=""></a>
                </li>
            </ul>
        </div>
    </section>

    <div class="line"></div>

    <section class="custom_panel_1">
        <div class="container">
            <div class="custom_panel_1_left" data-aos="fade-right">
                <strong>स्थापना वर्ष - 1884 <span class="star_line"><img src="{{asset('images/star.png')}}" alt=""></span></strong>
                <h2>नगर पालिका परिषद् सीतापुर<span class="star_line"><img src="{{asset('images/star.png')}}" alt=""></span></h2>
                <strong>उत्तर प्रदेश</strong>
            </div>

            <div class="custom_panel_1_right" data-aos="fade-left">
                <p>
                    सीतापुर (Sitapur) भारत के उत्तर प्रदेश राज्य के सीतापुर ज़िलेमें स्थित एक नगर है। यह ज़िले का मुख्यालय भी है।

उत्तर प्रदेश राज्य के अवध क्षेत्र में लखनऊ एवं शाहजहांपुर मार्ग के मध्य में सरायन नदी के किनारे पर स्थित है। यह जिला सदैव धार्मिक सहिष्णुता और गंगा जमुनी तहज़ीब को शिखर पर ले जाने वाले जिलों में शुमार किया जाता है। सीतापुर नगर में भारत का प्रसिद्ध नेत्र अस्पताल है। सीतापुर गुड़, गल्ला, दरी की बड़ी मंडी है। यहाँ एक बहुत बड़ा आँख का अस्पताल जिसकी स्थापना प्रसिद्ध नेत्र चिकित्सक डॉ महेश प्रसाद मेहरे ने की थी, सैनिक छावनी तथा उत्तर एवं पूर्वोत्तर रेलवे के जंक्शन हैं, प्लाईवुड और तीन बड़े शक्कर के मिल हैं। आजकल ये जनपद औद्योगिक बिन्दु से महुत महत्वपूर्ण नहीं है । इस ज़िले में 5 चीनी मिले , चावल व आटा मिलें कार्यरत हैं। यह जनपद मुख्य रूप से सूती व ऊनी दरियों के लिये प्रसिद्ध है । लहरपुर और खैराबाद विशेष रूप से इसके उत्पादन एवं निर्यात के लिए प्रसिद्ध हैं । यहाँ बनने वाली सूती और ऊनी दरियां देश ही नहीं विदेशों में भी प्रसिद्ध हैं।

                </p>
                <p>
                    यदि सीतापुर के प्राचीन इतिहास को देखें तो संपूर्ण ज़िला  
गुप्त
काल
तथा गुप्त प्रभावित मूर्तियों तथा इमारतों से भरा हुआ था। मनवाँ, हरगाँव, बड़ा गाँव, नसीराबाद आदि पुरातात्विक महत्व के स्थान हैं। विजयेन्द्र कुमार माथुर ने लेख किया है। हट, ऊजठ (AS, p.104) उत्तर प्रदेश के सीतापुर ज़िले में स्थित है। 9वीं शताब्दी ईस्वी के एक मंदिर के अवशेष यहाँ से उत्खनन द्वारा प्राप्त हुए हैं। उत्तर प्रदेश शासन ने ऊजठ में विस्तृत रूप से खुदाई की थी। '
नैमिषारण्य
' और '
मिसरिख
' पवित्र तीर्थ स्थल हैं। यह
सूफियों
एवं
पैगंबरों
की धरती है। इस पावन धरती पर ऋषि
वेद
व्यास
द्वारा पुराणों की रचना की गई । हिन्दू मतानुसार , "पाँच धाम यात्रा" तब तक पूर्ण नहीं मानी जाती जब तक नीमसार अथवा नैमिषारण्य के दर्शन नहीं कर लिए जाते । नैमिषारण्य सीतापुर का एक प्राचीन धार्मिक स्थल है। हज़रत मखदूम साहब, खैराबाद और हज़रत गुलज़ार शाह ,
बिसवां
की दरगाह सामाजिक समरसता की मिसालें हैं
                </p>
                <p>
                    प्रारंभिक
मुस्लिम
काल के लक्षण केवल भग्न हिन्दू मंदिरों और मूर्तियों के रूप में ही उपलब्ध हैं। इस युग के ऐतिहासिक प्रमाण
शेरशाह
सूरी
द्वारा निर्मित कुओं और सड़कों के रूप में दिखाई देते हैं। उस युग की मुख्य घटनाओं में से एक तो खैराबाद के निकट
हुमायूँ
और शेरशाह के बीच युद्ध और दूसरी राजा
सुहेलदेव
और
सैयद
सालार
मसूद
ग़ाज़ी
के बीच
बिसवां
और
तंबौर
के युद्ध हैं। सीतापुर के निकट स्थित खैराबाद मूलत: प्राचीन हिन्दू तीर्थ मानसछत्र था। मुस्लिम काल में खैराबाद,
सिधौली
के निकट बाड़ी, बिसवाँ इत्यादि इस ज़िले के प्रमुख नगर थे।
ब्रिटिश
काल
(1856) में खैराबाद को छोड़कर ज़िले का केंद्र सीतापुर नगर में बनाया गया। सीतापुर का तरीनपुर मोहल्ला प्राचीन स्थान है, इसका प्राचीन नाम छीतापुर पडा,इसका प्रथम उल्लेख राजा टोडरमल के बंदोबस्त में छितियापुर के नाम से आता है। बहुत दिन तक इसे छीतापुर कहा जाता रहा, जो गाँवों में अब भी प्रचलित हैं। 1857 के
प्रथम
भारतीय
स्वतंत्रता
संग्राम
में सीतापुर का प्रमुख हाथ था। बाड़ी के निकट सर हीपग्रांट तथा
फैजाबाद
के मौलवियों के बीच निर्णंयात्मक युद्ध हुआ था।
                </p>
            </div>
        </div>
    </section>

    <div class="line"></div>

    <section class="custom_panel_2">
        <div class="container">
            <div class="panel_2_block" data-aos="fade-right">
                <h3>Press Release</h3>
                <div class="cont_box">
                    <ul>
                        <li>
                            <a href="#">N/A →</a>
                        </li>
                        <!--<li>-->
                        <!--    <a href="#" class="readMore">Read More →</a>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
            <div class="panel_2_block" data-aos="fade-left">
                <h3>Tenders</h3>
                <div class="cont_box">
                    <ul>
                        <li>
                            <a href="#">N/A →</a>
                        </li>
                        
                        <!--<li>-->
                        <!--    <a href="#" class="readMore">Read More →</a>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery_tab_panel" data-aos="fade-in">
        <div class="container">
            <nav class="gallery_nav">
                <a href="">Photo Gallery</a>
                <a href="#">Video Gallery</a>
            </nav>

            <div class="tabs_container">
                <div class="tab_cont">
                    <a href="#" class="display_gallay">See All Photos →</a>
                    <div class="tab_cont_inner">
                        <div id="imgSlide" class="tab_slider">
                            <div class="item"><img src="{{asset('images/Group 1261153196.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 24.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 26.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 27.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 31.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 32.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 33.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 34.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 40.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 49.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 53.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 54.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 55.png')}}" alt=""></div>
                            <div class="item"><img src="{{asset('images/image 56.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="tab_cont">
                    <a href="#" class="display_gallay">See All Videos →</a>
                    <div class="tab_cont_inner">
                        <div id="videoSlide" class="tab_slider">
                            <div class="item">
                                <div class="g_video">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wYxMaTDUNe4?si=juQjvJUOQxRgCZdS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                                    </div>
                            </div>
                            <div class="item">
                                <div class="g_video">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/OaSiq8ezxJo?si=BL6Z3V9Dt_J6uy3L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                                    </div>
                            </div>
                            <div class="item">
                                <div class="g_video">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3hHXEYnxszg?si=3JuIL0qmdD8ZbA5E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                                    </div>
                            </div>
                            <div class="item">
                                <div class="g_video">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HY1SG1eqa7E?si=JMr91z6EcSSfSNNt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our_client" data-aos="fade-right">
        <div class="container">
            <figure><img src="{{asset('images/icon-group.png')}}" alt=""></figure>
        </div>
    </section>

    <section class="map_display" data-aos="fade-left" data-aos-offset="500">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115478.23130259228!2d75.8634100725602!3d26.754930011738328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc9024463f983%3A0x67bb37a6035c6ed!2sSitapura%2C%20Jaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1729520648677!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer class="footer" data-aos="fade-in">
        <div class="footer_top">
            <div class="container">
                <a href="#" class="footer_logo"><img src="{{asset('images/sitapur.png')}}" alt=""></a>
                <div class="footer_link">
                    <ul>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_link">
                    <ul>
                        <li>
                            <a href="#">Refund and Cancellation Policy</a>
                        </li>
                        <li>
                            <a href="#">Feedback</a>
                        </li>
                        <li>
                            <a href="#">Web Information Manager</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_link">
                    <ul>
                        <li>
                            <a href="#">Visitor Analytics</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Disclaimer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="container">
                <div class="f_logo">
                    <a href="#"><img src="{{asset('images/logo1.png')}}" alt=""></a>
                </div>
                <div class="l_box">
                    <p>Website Content Managed by <strong>Nagar Palika Parishad Sitapur,District Sitapur</strong></p>
                        <p>Design & Development
                            <a href=""><img src="{{asset('images/appentus.png')}}" alt=""></a> APPENTUS TECHNOLOGIES PVT LTD</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="{{asset('js/jquery-3.7.1.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/component.js')}}"></script>
    <script src="{{asset('js/edit-js.js')}}"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            once: true,
        });
    </script>
    <script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault(); // Disable right-click menu
        });
    </script>
</body>

</html>