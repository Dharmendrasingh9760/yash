<style>
    /*--------------------------------------------------------------
1. All Color Variable
----------------------------------------------------------------*/
@import url("https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap");
:root {
  --white: #fff;
  --red: #EA1826;
  --primary: #002935;
  --secondary: #747474;
  --accent: #0CB8B6;
  --accent_v2: #30B2D2;
  --accent_v3: #FF4880;
  --accent_v4: #0957DE;
  --dark_blue: #14457B;
  --gray: #f5f5f5;
  --border: #ddd;
  --primary-font: "Barlow", sans-serif;
}

/*--------------------------------------------------------------
>> TABLE OF CONTENTS:
----------------------------------------------------------------
1. Typography
2. Preloader
3. Spacing
4. General
5. Slider
6. Video Popup
7. Header
8. Footer
9. Sidebar
10. Isotope
11. Hero
12. Iconbox
13. Posts
14. CTA
15. Testimonial
16. Portfolio
17. Counter
18. Award
19. Casestudie
20. Team
21. Imagebox
22. Pricing
22. Numberbox
23. Ecommerce
--------------------------------------------------------------*/
/*--------------------------------------------------------------
2. Typography
----------------------------------------------------------------*/
body,
html {
  color: var(--secondary);
  font-family: var(--primary-font);
  font-size: 16px;
  line-height: 1.6em;
  font-weight: 400;
  overflow-x: hidden !important;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body.cs_get_sidebar,
html.cs_get_sidebar {
  padding-left: 300px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  clear: both;
  color: var(--primary);
  padding: 0;
  margin: 0 0 20px 0;
  font-weight: 700;
  line-height: 1.2em;
  font-family: var(--primary-font);
}

.cs_primary_font {
  font-family: var(--primary-font);
}

.cs_secondary_font {
  font-family: var(--secondary-font);
}

.cs_ternary_font {
  font-family: var(--ternary-font);
}

h1 {
  font-size: 56px;
}

h2 {
  font-size: 42px;
}

h3 {
  font-size: 30px;
}

h4 {
  font-size: 24px;
}

h5 {
  font-size: 18px;
}

h6 {
  font-size: 16px;
}

p {
  margin-bottom: 15px;
}

ul {
  margin: 0 0 25px 0;
  padding-left: 20px;
  list-style: square outside none;
}

ol {
  padding-left: 20px;
  margin-bottom: 25px;
}

dfn,
cite,
em,
i {
  font-style: italic;
}

blockquote {
  margin: 0 15px;
  font-style: italic;
  line-height: 1.6em;
  margin: 0;
}

address {
  margin: 0 0 15px;
}

img {
  border: 0;
  max-width: 100%;
  height: auto;
}

a {
  color: inherit;
  text-decoration: none;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

button {
  color: inherit;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  cursor: pointer;
}

a:hover {
  text-decoration: none;
  color: var(--accent);
}

table {
  width: 100%;
  margin-bottom: 25px;
}
table th {
  font-weight: 600;
  color: var(--secondary);
}
table td,
table th {
  border-top: 1px solid var(--border);
  padding: 11px 10px;
}

dl {
  margin-bottom: 25px;
}
dl dt {
  font-weight: 600;
}

b,
strong {
  font-weight: bold;
}

pre {
  color: var(--secondary);
  border: 1px solid var(--border);
  font-size: 18px;
  padding: 25px;
  border-radius: 5px;
}

kbd {
  font-size: 100%;
  background-color: var(--secondary);
  border-radius: 5px;
}

input,
textarea {
  color: var(--primary);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

/*--------------------------------------------------------------
3. Preloader
----------------------------------------------------------------*/
.cs_preloader {
  position: fixed;
  height: 100vh;
  width: 100vw;
  z-index: 99999;
  left: 0;
  top: 0;
  background-color: var(--white);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.cs_preloader .cs_preloader_in {
  position: relative;
}
.cs_preloader .cs_preloader_in svg {
  width: 110px;
  height: 110px;
}
.cs_preloader .cs_wave_first svg {
  fill: var(--border);
}
.cs_preloader .cs_wave_second {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  overflow: hidden;
  -webkit-animation: spark 1.25s linear infinite;
          animation: spark 1.25s linear infinite;
}
.cs_preloader .cs_wave_second svg {
  fill: currentColor;
}

@-webkit-keyframes spark {
  0% {
    max-width: 0;
  }
  100% {
    max-width: 100%;
  }
}

@keyframes spark {
  0% {
    max-width: 0;
  }
  100% {
    max-width: 100%;
  }
}
/*--------------------------------------------------------------
  4. Spacing
----------------------------------------------------------------*/
@media screen and (min-width: 992px) {
  .cs_height_1 {
    height: 1px;
  }
  .cs_height_2 {
    height: 2px;
  }
  .cs_height_3 {
    height: 3px;
  }
  .cs_height_4 {
    height: 4px;
  }
  .cs_height_5 {
    height: 5px;
  }
  .cs_height_6 {
    height: 6px;
  }
  .cs_height_7 {
    height: 7px;
  }
  .cs_height_8 {
    height: 8px;
  }
  .cs_height_9 {
    height: 9px;
  }
  .cs_height_10 {
    height: 10px;
  }
  .cs_height_11 {
    height: 11px;
  }
  .cs_height_12 {
    height: 12px;
  }
  .cs_height_13 {
    height: 13px;
  }
  .cs_height_14 {
    height: 14px;
  }
  .cs_height_15 {
    height: 15px;
  }
  .cs_height_16 {
    height: 16px;
  }
  .cs_height_17 {
    height: 17px;
  }
  .cs_height_18 {
    height: 18px;
  }
  .cs_height_19 {
    height: 19px;
  }
  .cs_height_20 {
    height: 20px;
  }
  .cs_height_21 {
    height: 21px;
  }
  .cs_height_22 {
    height: 22px;
  }
  .cs_height_23 {
    height: 23px;
  }
  .cs_height_24 {
    height: 24px;
  }
  .cs_height_25 {
    height: 25px;
  }
  .cs_height_26 {
    height: 26px;
  }
  .cs_height_27 {
    height: 27px;
  }
  .cs_height_28 {
    height: 28px;
  }
  .cs_height_29 {
    height: 29px;
  }
  .cs_height_30 {
    height: 30px;
  }
  .cs_height_31 {
    height: 31px;
  }
  .cs_height_32 {
    height: 32px;
  }
  .cs_height_33 {
    height: 33px;
  }
  .cs_height_34 {
    height: 34px;
  }
  .cs_height_35 {
    height: 35px;
  }
  .cs_height_36 {
    height: 36px;
  }
  .cs_height_37 {
    height: 37px;
  }
  .cs_height_38 {
    height: 38px;
  }
  .cs_height_39 {
    height: 39px;
  }
  .cs_height_40 {
    height: 40px;
  }
  .cs_height_41 {
    height: 41px;
  }
  .cs_height_42 {
    height: 42px;
  }
  .cs_height_43 {
    height: 43px;
  }
  .cs_height_44 {
    height: 44px;
  }
  .cs_height_45 {
    height: 45px;
  }
  .cs_height_46 {
    height: 46px;
  }
  .cs_height_47 {
    height: 47px;
  }
  .cs_height_48 {
    height: 48px;
  }
  .cs_height_49 {
    height: 49px;
  }
  .cs_height_50 {
    height: 50px;
  }
  .cs_height_51 {
    height: 51px;
  }
  .cs_height_52 {
    height: 52px;
  }
  .cs_height_53 {
    height: 53px;
  }
  .cs_height_54 {
    height: 54px;
  }
  .cs_height_55 {
    height: 55px;
  }
  .cs_height_56 {
    height: 56px;
  }
  .cs_height_57 {
    height: 57px;
  }
  .cs_height_58 {
    height: 58px;
  }
  .cs_height_59 {
    height: 59px;
  }
  .cs_height_60 {
    height: 60px;
  }
  .cs_height_61 {
    height: 61px;
  }
  .cs_height_62 {
    height: 62px;
  }
  .cs_height_63 {
    height: 63px;
  }
  .cs_height_64 {
    height: 64px;
  }
  .cs_height_65 {
    height: 65px;
  }
  .cs_height_66 {
    height: 66px;
  }
  .cs_height_67 {
    height: 67px;
  }
  .cs_height_68 {
    height: 68px;
  }
  .cs_height_69 {
    height: 69px;
  }
  .cs_height_70 {
    height: 70px;
  }
  .cs_height_71 {
    height: 71px;
  }
  .cs_height_72 {
    height: 72px;
  }
  .cs_height_73 {
    height: 73px;
  }
  .cs_height_74 {
    height: 74px;
  }
  .cs_height_75 {
    height: 75px;
  }
  .cs_height_76 {
    height: 76px;
  }
  .cs_height_77 {
    height: 77px;
  }
  .cs_height_78 {
    height: 78px;
  }
  .cs_height_79 {
    height: 79px;
  }
  .cs_height_80 {
    height: 80px;
  }
  .cs_height_81 {
    height: 81px;
  }
  .cs_height_82 {
    height: 82px;
  }
  .cs_height_83 {
    height: 83px;
  }
  .cs_height_84 {
    height: 84px;
  }
  .cs_height_85 {
    height: 85px;
  }
  .cs_height_86 {
    height: 86px;
  }
  .cs_height_87 {
    height: 87px;
  }
  .cs_height_88 {
    height: 88px;
  }
  .cs_height_89 {
    height: 89px;
  }
  .cs_height_90 {
    height: 90px;
  }
  .cs_height_91 {
    height: 91px;
  }
  .cs_height_92 {
    height: 92px;
  }
  .cs_height_93 {
    height: 93px;
  }
  .cs_height_94 {
    height: 94px;
  }
  .cs_height_95 {
    height: 95px;
  }
  .cs_height_96 {
    height: 96px;
  }
  .cs_height_97 {
    height: 97px;
  }
  .cs_height_98 {
    height: 98px;
  }
  .cs_height_99 {
    height: 99px;
  }
  .cs_height_100 {
    height: 100px;
  }
  .cs_height_101 {
    height: 101px;
  }
  .cs_height_102 {
    height: 102px;
  }
  .cs_height_103 {
    height: 103px;
  }
  .cs_height_104 {
    height: 104px;
  }
  .cs_height_105 {
    height: 105px;
  }
  .cs_height_106 {
    height: 106px;
  }
  .cs_height_107 {
    height: 107px;
  }
  .cs_height_108 {
    height: 108px;
  }
  .cs_height_109 {
    height: 109px;
  }
  .cs_height_110 {
    height: 110px;
  }
  .cs_height_111 {
    height: 111px;
  }
  .cs_height_112 {
    height: 112px;
  }
  .cs_height_113 {
    height: 113px;
  }
  .cs_height_114 {
    height: 114px;
  }
  .cs_height_115 {
    height: 115px;
  }
  .cs_height_116 {
    height: 116px;
  }
  .cs_height_117 {
    height: 117px;
  }
  .cs_height_118 {
    height: 118px;
  }
  .cs_height_119 {
    height: 119px;
  }
  .cs_height_120 {
    height: 120px;
  }
  .cs_height_121 {
    height: 121px;
  }
  .cs_height_122 {
    height: 122px;
  }
  .cs_height_123 {
    height: 123px;
  }
  .cs_height_124 {
    height: 124px;
  }
  .cs_height_125 {
    height: 125px;
  }
  .cs_height_126 {
    height: 126px;
  }
  .cs_height_127 {
    height: 127px;
  }
  .cs_height_128 {
    height: 128px;
  }
  .cs_height_129 {
    height: 129px;
  }
  .cs_height_130 {
    height: 130px;
  }
  .cs_height_131 {
    height: 131px;
  }
  .cs_height_132 {
    height: 132px;
  }
  .cs_height_133 {
    height: 133px;
  }
  .cs_height_134 {
    height: 134px;
  }
  .cs_height_135 {
    height: 135px;
  }
  .cs_height_136 {
    height: 136px;
  }
  .cs_height_137 {
    height: 137px;
  }
  .cs_height_138 {
    height: 138px;
  }
  .cs_height_139 {
    height: 139px;
  }
  .cs_height_140 {
    height: 140px;
  }
  .cs_height_141 {
    height: 141px;
  }
  .cs_height_142 {
    height: 142px;
  }
  .cs_height_143 {
    height: 143px;
  }
  .cs_height_144 {
    height: 144px;
  }
  .cs_height_145 {
    height: 145px;
  }
  .cs_height_146 {
    height: 146px;
  }
  .cs_height_147 {
    height: 147px;
  }
  .cs_height_148 {
    height: 148px;
  }
  .cs_height_149 {
    height: 149px;
  }
  .cs_height_150 {
    height: 150px;
  }
  .cs_height_151 {
    height: 151px;
  }
  .cs_height_152 {
    height: 152px;
  }
  .cs_height_153 {
    height: 153px;
  }
  .cs_height_154 {
    height: 154px;
  }
  .cs_height_155 {
    height: 155px;
  }
  .cs_height_156 {
    height: 156px;
  }
  .cs_height_157 {
    height: 157px;
  }
  .cs_height_158 {
    height: 158px;
  }
  .cs_height_159 {
    height: 159px;
  }
  .cs_height_160 {
    height: 160px;
  }
  .cs_height_161 {
    height: 161px;
  }
  .cs_height_162 {
    height: 162px;
  }
  .cs_height_163 {
    height: 163px;
  }
  .cs_height_164 {
    height: 164px;
  }
  .cs_height_165 {
    height: 165px;
  }
  .cs_height_166 {
    height: 166px;
  }
  .cs_height_167 {
    height: 167px;
  }
  .cs_height_168 {
    height: 168px;
  }
  .cs_height_169 {
    height: 169px;
  }
  .cs_height_170 {
    height: 170px;
  }
  .cs_height_171 {
    height: 171px;
  }
  .cs_height_172 {
    height: 172px;
  }
  .cs_height_173 {
    height: 173px;
  }
  .cs_height_174 {
    height: 174px;
  }
  .cs_height_175 {
    height: 175px;
  }
  .cs_height_176 {
    height: 176px;
  }
  .cs_height_177 {
    height: 177px;
  }
  .cs_height_178 {
    height: 178px;
  }
  .cs_height_179 {
    height: 179px;
  }
  .cs_height_180 {
    height: 180px;
  }
  .cs_height_181 {
    height: 181px;
  }
  .cs_height_182 {
    height: 182px;
  }
  .cs_height_183 {
    height: 183px;
  }
  .cs_height_184 {
    height: 184px;
  }
  .cs_height_185 {
    height: 185px;
  }
  .cs_height_186 {
    height: 186px;
  }
  .cs_height_187 {
    height: 187px;
  }
  .cs_height_188 {
    height: 188px;
  }
  .cs_height_189 {
    height: 189px;
  }
  .cs_height_190 {
    height: 190px;
  }
  .cs_height_191 {
    height: 191px;
  }
  .cs_height_192 {
    height: 192px;
  }
  .cs_height_193 {
    height: 193px;
  }
  .cs_height_194 {
    height: 194px;
  }
  .cs_height_195 {
    height: 195px;
  }
  .cs_height_196 {
    height: 196px;
  }
  .cs_height_197 {
    height: 197px;
  }
  .cs_height_198 {
    height: 198px;
  }
  .cs_height_199 {
    height: 199px;
  }
  .cs_height_200 {
    height: 200px;
  }
}
@media screen and (max-width: 991px) {
  .cs_height_lg_1 {
    height: 1px;
  }
  .cs_height_lg_2 {
    height: 2px;
  }
  .cs_height_lg_3 {
    height: 3px;
  }
  .cs_height_lg_4 {
    height: 4px;
  }
  .cs_height_lg_5 {
    height: 5px;
  }
  .cs_height_lg_6 {
    height: 6px;
  }
  .cs_height_lg_7 {
    height: 7px;
  }
  .cs_height_lg_8 {
    height: 8px;
  }
  .cs_height_lg_9 {
    height: 9px;
  }
  .cs_height_lg_10 {
    height: 10px;
  }
  .cs_height_lg_11 {
    height: 11px;
  }
  .cs_height_lg_12 {
    height: 12px;
  }
  .cs_height_lg_13 {
    height: 13px;
  }
  .cs_height_lg_14 {
    height: 14px;
  }
  .cs_height_lg_15 {
    height: 15px;
  }
  .cs_height_lg_16 {
    height: 16px;
  }
  .cs_height_lg_17 {
    height: 17px;
  }
  .cs_height_lg_18 {
    height: 18px;
  }
  .cs_height_lg_19 {
    height: 19px;
  }
  .cs_height_lg_20 {
    height: 20px;
  }
  .cs_height_lg_21 {
    height: 21px;
  }
  .cs_height_lg_22 {
    height: 22px;
  }
  .cs_height_lg_23 {
    height: 23px;
  }
  .cs_height_lg_24 {
    height: 24px;
  }
  .cs_height_lg_25 {
    height: 25px;
  }
  .cs_height_lg_26 {
    height: 26px;
  }
  .cs_height_lg_27 {
    height: 27px;
  }
  .cs_height_lg_28 {
    height: 28px;
  }
  .cs_height_lg_29 {
    height: 29px;
  }
  .cs_height_lg_30 {
    height: 30px;
  }
  .cs_height_lg_31 {
    height: 31px;
  }
  .cs_height_lg_32 {
    height: 32px;
  }
  .cs_height_lg_33 {
    height: 33px;
  }
  .cs_height_lg_34 {
    height: 34px;
  }
  .cs_height_lg_35 {
    height: 35px;
  }
  .cs_height_lg_36 {
    height: 36px;
  }
  .cs_height_lg_37 {
    height: 37px;
  }
  .cs_height_lg_38 {
    height: 38px;
  }
  .cs_height_lg_39 {
    height: 39px;
  }
  .cs_height_lg_40 {
    height: 40px;
  }
  .cs_height_lg_41 {
    height: 41px;
  }
  .cs_height_lg_42 {
    height: 42px;
  }
  .cs_height_lg_43 {
    height: 43px;
  }
  .cs_height_lg_44 {
    height: 44px;
  }
  .cs_height_lg_45 {
    height: 45px;
  }
  .cs_height_lg_46 {
    height: 46px;
  }
  .cs_height_lg_47 {
    height: 47px;
  }
  .cs_height_lg_48 {
    height: 48px;
  }
  .cs_height_lg_49 {
    height: 49px;
  }
  .cs_height_lg_50 {
    height: 50px;
  }
  .cs_height_lg_51 {
    height: 51px;
  }
  .cs_height_lg_52 {
    height: 52px;
  }
  .cs_height_lg_53 {
    height: 53px;
  }
  .cs_height_lg_54 {
    height: 54px;
  }
  .cs_height_lg_55 {
    height: 55px;
  }
  .cs_height_lg_56 {
    height: 56px;
  }
  .cs_height_lg_57 {
    height: 57px;
  }
  .cs_height_lg_58 {
    height: 58px;
  }
  .cs_height_lg_59 {
    height: 59px;
  }
  .cs_height_lg_60 {
    height: 60px;
  }
  .cs_height_lg_61 {
    height: 61px;
  }
  .cs_height_lg_62 {
    height: 62px;
  }
  .cs_height_lg_63 {
    height: 63px;
  }
  .cs_height_lg_64 {
    height: 64px;
  }
  .cs_height_lg_65 {
    height: 65px;
  }
  .cs_height_lg_66 {
    height: 66px;
  }
  .cs_height_lg_67 {
    height: 67px;
  }
  .cs_height_lg_68 {
    height: 68px;
  }
  .cs_height_lg_69 {
    height: 69px;
  }
  .cs_height_lg_70 {
    height: 70px;
  }
  .cs_height_lg_71 {
    height: 71px;
  }
  .cs_height_lg_72 {
    height: 72px;
  }
  .cs_height_lg_73 {
    height: 73px;
  }
  .cs_height_lg_74 {
    height: 74px;
  }
  .cs_height_lg_75 {
    height: 75px;
  }
  .cs_height_lg_76 {
    height: 76px;
  }
  .cs_height_lg_77 {
    height: 77px;
  }
  .cs_height_lg_78 {
    height: 78px;
  }
  .cs_height_lg_79 {
    height: 79px;
  }
  .cs_height_lg_80 {
    height: 80px;
  }
  .cs_height_lg_81 {
    height: 81px;
  }
  .cs_height_lg_82 {
    height: 82px;
  }
  .cs_height_lg_83 {
    height: 83px;
  }
  .cs_height_lg_84 {
    height: 84px;
  }
  .cs_height_lg_85 {
    height: 85px;
  }
  .cs_height_lg_86 {
    height: 86px;
  }
  .cs_height_lg_87 {
    height: 87px;
  }
  .cs_height_lg_88 {
    height: 88px;
  }
  .cs_height_lg_89 {
    height: 89px;
  }
  .cs_height_lg_90 {
    height: 90px;
  }
  .cs_height_lg_91 {
    height: 91px;
  }
  .cs_height_lg_92 {
    height: 92px;
  }
  .cs_height_lg_93 {
    height: 93px;
  }
  .cs_height_lg_94 {
    height: 94px;
  }
  .cs_height_lg_95 {
    height: 95px;
  }
  .cs_height_lg_96 {
    height: 96px;
  }
  .cs_height_lg_97 {
    height: 97px;
  }
  .cs_height_lg_98 {
    height: 98px;
  }
  .cs_height_lg_99 {
    height: 99px;
  }
  .cs_height_lg_100 {
    height: 100px;
  }
  .cs_height_lg_101 {
    height: 101px;
  }
  .cs_height_lg_102 {
    height: 102px;
  }
  .cs_height_lg_103 {
    height: 103px;
  }
  .cs_height_lg_104 {
    height: 104px;
  }
  .cs_height_lg_105 {
    height: 105px;
  }
  .cs_height_lg_106 {
    height: 106px;
  }
  .cs_height_lg_107 {
    height: 107px;
  }
  .cs_height_lg_108 {
    height: 108px;
  }
  .cs_height_lg_109 {
    height: 109px;
  }
  .cs_height_lg_110 {
    height: 110px;
  }
  .cs_height_lg_111 {
    height: 111px;
  }
  .cs_height_lg_112 {
    height: 112px;
  }
  .cs_height_lg_113 {
    height: 113px;
  }
  .cs_height_lg_114 {
    height: 114px;
  }
  .cs_height_lg_115 {
    height: 115px;
  }
  .cs_height_lg_116 {
    height: 116px;
  }
  .cs_height_lg_117 {
    height: 117px;
  }
  .cs_height_lg_118 {
    height: 118px;
  }
  .cs_height_lg_119 {
    height: 119px;
  }
  .cs_height_lg_120 {
    height: 120px;
  }
}
/*--------------------------------------------------------------
  5. General
----------------------------------------------------------------*/
.container-fluid {
  max-width: 1920px;
  padding-left: 160px;
  padding-right: 160px;
  margin-left: auto;
  margin-right: auto;
}
@media (max-width: 1399px) {
  .container-fluid {
    padding-left: 40px;
    padding-right: 40px;
  }
}
@media (max-width: 991px) {
  .container-fluid {
    padding-left: 15px;
    padding-right: 15px;
  }
}

.cs_fs_8 {
  font-size: 8px;
  line-height: 1.25em;
}

.cs_fs_14 {
  font-size: 18px;
  line-height: 1.43em;
}

.cs_fs_16 {
  font-size: 16px;
  line-height: 1.625em;
}

.cs_fs_18 {
  font-size: 18px;
  line-height: 1.556em;
}

.cs_fs_20 {
  font-size: 20px;
  line-height: 1.7em;
}

.cs_fs_22 {
  font-size: 22px;
  line-height: 1.2em;
}

.cs_fs_24 {
  font-size: 24px;
  line-height: 1.25em;
}
@media (max-width: 1399px) {
  .cs_fs_24 {
    font-size: 20px;
  }
}

.cs_fs_26 {
  font-size: 26px;
  line-height: 1.2em;
}
@media (max-width: 1399px) {
  .cs_fs_26 {
    font-size: 20px;
  }
}

.cs_fs_28 {
  font-size: 28px;
  line-height: 1.358em;
}

.cs_fs_30 {
  font-size: 30px;
  line-height: 1.2em;
}
@media (max-width: 1399px) {
  .cs_fs_30 {
    font-size: 24px;
  }
}

.cs_fs_35 {
  font-size: 35px;
  line-height: 1.37em;
}
@media (max-width: 1399px) {
  .cs_fs_35 {
    font-size: 30px;
  }
}

.cs_fs_40 {
  font-size: 40px;
  line-height: 1.45em;
}
@media (max-width: 1399px) {
  .cs_fs_40 {
    font-size: 32px;
  }
}

.cs_fs_45 {
  font-size: 45px;
  line-height: 1.22em;
}
@media (max-width: 1399px) {
  .cs_fs_45 {
    font-size: 36px;
  }
}

.cs_fs_55 {
  font-size: 55px;
  line-height: 1.22em;
}
@media (max-width: 1399px) {
  .cs_fs_55 {
    font-size: 42px;
  }
}

.cs_fs_60 {
  font-size: 60px;
  line-height: 1.25em;
}
@media (max-width: 1399px) {
  .cs_fs_60 {
    font-size: 50px;
  }
}
@media (max-width: 1399px) {
  .cs_fs_60 {
    font-size: 42px;
  }
}
@media (max-width: 575px) {
  .cs_fs_60 {
    font-size: 34px;
  }
}

.cs_fs_65 {
  font-size: 65px;
  line-height: 1.334em;
}
@media (max-width: 1600px) {
  .cs_fs_65 {
    font-size: 56px;
  }
}
@media (max-width: 991px) {
  .cs_fs_65 {
    font-size: 42px;
  }
}
@media (max-width: 575px) {
  .cs_fs_65 {
    font-size: 32px;
  }
}

.cs_light {
  font-weight: 300;
}

.cs_normal {
  font-weight: 400;
}

.cs_medium {
  font-weight: 500;
}

.cs_semibold {
  font-weight: 600;
}

.cs_bold {
  font-weight: 700;
}

.cs_radius_2 {
  border-radius: 5px;
}

.cs_radius_3 {
  border-radius: 3px;
}

.cs_radius_4 {
  border-radius: 4px;
}

.cs_radius_5 {
  border-radius: 5px;
}

.cs_radius_50 {
  border-radius: 50%;
}

.cs_mp0 {
  list-style: none;
  margin: 0;
  padding: 0;
}

.cs_form_field {
  width: 100%;
  border: 1px solid var(--border);
  padding: 9px 20px;
  background-color: transparent;
}
.cs_form_field:focus {
  outline: none;
}

.cs_gap_y_20 {
  gap: 20px 0;
}

.cs_gap_y_24 {
  gap: 24px 0;
}

.cs_gap_y_30 {
  gap: 30px 0;
}

.cs_gap_y_35 {
  gap: 35px 0;
}

.cs_gap_y_40 {
  gap: 40px 0;
}

.cs_gap_y_45 {
  gap: 45px 0;
}

.cs_gap_y_50 {
  gap: 50px 0;
}

.cs_gap_y_54 {
  gap: 54px 0;
}
@media (max-width: 1199px) {
  .cs_gap_y_54 {
    gap: 24px 0;
  }
}

.cs_gap_y_60 {
  gap: 60px 0;
}

.cs_gap_y_65 {
  gap: 65px 0;
}

.cs_gap_y_70 {
  gap: 65px 0;
}

hr {
  margin: 0;
  padding: 0;
  border: none;
  border-top: 1px solid var(--border);
}

.cs_zoom {
  position: relative;
  overflow: hidden;
  display: block;
}
.cs_zoom .cs_zoom_in {
  -webkit-transition: all 1s ease;
  transition: all 1s ease;
}
.cs_zoom:hover .cs_zoom_in {
  -webkit-transform: scale(1.06);
          transform: scale(1.06);
}

.cs_bg_filed {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.cs_bg_fixed {
  background-attachment: fixed;
}

.cs_vertical_middle {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: 100%;
}

.cs_vertical_middle_in {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  width: 100%;
}

.cs_center {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.cs_white_color {
  color: var(--white);
}

.cs_red_color {
  color: var(--red);
}

.cs_primary_color {
  color: var(--primary);
}

.cs_secondary_color {
  color: var(--secondary);
}

.cs_accent_color_v1 {
  color: var(--accent);
}

.cs_accent_color_v2 {
  color: var(--accent_v2);
}

.cs_accent_color_v3 {
  color: var(--accent_v3);
}

.cs_accent_color_v4 {
  color: var(--accent_v4);
}

.cs_white_bg {
  background-color: var(--white);
}

.cs_primary_bg {
  background-color: var(--primary);
}

.cs_primary_bg_light {
  background-color: #6d858c;
}

.cs_secondary_bg {
  background-color: var(--secondary);
}

.cs_gray_bg {
  background-color: var(--gray);
}

.cs_gray_bg_1 {
  background-color: #f8f8f8;
}

.cs_accent_bg_v1 {
  background-color: var(--accent);
}

.cs_accent_bg_v2 {
  background-color: var(--accent_v2);
}

.cs_accent_bg_v3 {
  background-color: var(--accent_v3);
}

.cs_accent_bg_v4 {
  background-color: var(--accent_v4);
}

.cs_accent_v1_light {
  background-color: #ecf9f9;
}

.cs_accent_v2_light {
  background-color: #f4fafd;
}

.cs_accent_v3_light {
  background-color: #fff4f8;
}

.cs_accent_v4_light {
  background-color: #f2f6fd;
}

.cs_pl_30 {
  padding-left: 30px;
}
@media (max-width: 991px) {
  .cs_pl_30 {
    padding-left: 0px;
  }
}

.cs_pl_65 {
  padding-left: 65px;
}
@media (max-width: 991px) {
  .cs_pl_65 {
    padding-left: 12px;
  }
}

.cs_pl_70 {
  padding-left: 70px;
}
@media (max-width: 1199px) {
  .cs_pl_70 {
    padding-left: 12px;
  }
}

.breadcrumb-item a:hover {
  color: rgba(255, 255, 255, 0.8);
}

.cs_btn.cs_style_1 {
  border: none;
  padding: 13px 35px;
  line-height: 1.6em;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  outline: none;
  border-radius: 5px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_btn.cs_style_1.cs_size_md {
  padding: 10px 35px;
  line-height: 1.67em;
}
.cs_btn.cs_style_1.cs_white_color {
  color: var(--white);
}
.cs_btn.cs_style_1:hover {
  color: var(--white);
  -webkit-box-shadow: 0px 5px 10px 0px rgba(68, 68, 68, 0.1);
          box-shadow: 0px 5px 10px 0px rgba(68, 68, 68, 0.1);
  -webkit-transform: translateY(-1px);
          transform: translateY(-1px);
}

/* Social Share Btns styling */
.cs_social_btns {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  gap: 15px;
  padding: 45px 0 40px;
}
.cs_social_btns a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

/* Start Accordion */
.cs_accordian_wrap {
  position: relative;
  z-index: 1;
}

.cs_accordian.cs_style_1:not(:last-child) {
  margin-bottom: 25px;
}
.cs_accordian.cs_style_1.cs_version_4 .cs_accordian_head:hover {
  color: var(--accent_v4);
}
.cs_accordian.cs_style_1.cs_version_4 .cs_accordian_body {
  padding: 0px 130px 24px 24px;
  margin-top: -5px;
}
@media (max-width: 991px) {
  .cs_accordian.cs_style_1.cs_version_4 .cs_accordian_body {
    padding-bottom: 20px;
  }
}
@media (max-width: 767px) {
  .cs_accordian.cs_style_1.cs_version_4 .cs_accordian_body {
    padding: 0px 24px 24px 24px;
  }
}
.cs_accordian.cs_style_1.cs_version_4.active .cs_accordian_head {
  color: var(--accent_v4);
}
.cs_accordian.cs_style_1.cs_version_4.active .cs_accordian_toggle {
  color: var(--accent_v4);
}
.cs_accordian.cs_style_1.cs_version_4.cs_color_1 .cs_accordian_head:hover {
  color: var(--accent_v3);
}
.cs_accordian.cs_style_1.cs_version_4.cs_color_1.active .cs_accordian_head {
  color: var(--accent_v3);
}
.cs_accordian.cs_style_1.cs_version_4.cs_color_1.active .cs_accordian_toggle {
  color: var(--accent_v3);
}
.cs_accordian.cs_style_1 .cs_accordian_body {
  padding: 0px 24px 24px 24px;
  margin-top: -5px;
}
@media (max-width: 991px) {
  .cs_accordian.cs_style_1 .cs_accordian_body {
    padding-bottom: 20px;
  }
}
.cs_accordian.cs_style_1 .cs_accordian_head {
  padding: 17px 45px 17px 26px;
  position: relative;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  cursor: pointer;
}
@media (max-width: 991px) {
  .cs_accordian.cs_style_1 .cs_accordian_head {
    padding: 20px 45px 20px 24px;
  }
}
.cs_accordian.cs_style_1 .cs_accordian_head:hover {
  color: var(--accent);
}
.cs_accordian.cs_style_1 .cs_accordian {
  border-radius: 5px;
}
.cs_accordian.cs_style_1 .cs_accordian:not(:last-child) {
  margin-bottom: 25px;
}
.cs_accordian.cs_style_1 .cs_accordian_toggle {
  position: absolute;
  top: 16px;
  right: 15px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  height: 30px;
  width: 30px;
  border-radius: 50%;
  color: var(--primary);
  font-size: 16px;
}
.cs_accordian.cs_style_1 .cs_accordian_toggle i {
  position: absolute;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_accordian.cs_style_1 .cs_accordian_toggle i:last-child {
  opacity: 0;
}
.cs_accordian.cs_style_1.active .cs_accordian_head {
  pointer-events: none;
  color: var(--accent);
}
.cs_accordian.cs_style_1.active .cs_accordian_toggle {
  color: var(--accent);
}
.cs_accordian.cs_style_1.active .cs_accordian_toggle i:first-child {
  opacity: 0;
}
.cs_accordian.cs_style_1.active .cs_accordian_toggle i:last-child {
  opacity: 1;
}

.cs_accordian.cs_style_2 {
  border: 1px solid var(--border);
  background-color: transparent;
}
.cs_accordian.cs_style_2:not(:last-child) {
  margin-bottom: 25px;
}
.cs_accordian.cs_style_2 .cs_accordian_body {
  padding: 24px 130px 24px 24px;
  margin-top: -5px;
}
@media (max-width: 991px) {
  .cs_accordian.cs_style_2 .cs_accordian_body {
    padding: 24px;
  }
}
.cs_accordian.cs_style_2 .cs_accordian_head {
  padding: 14px 60px 14px 26px;
  position: relative;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  cursor: pointer;
}
.cs_accordian.cs_style_2 .cs_accordian_head:hover {
  color: var(--accent_v3);
}
.cs_accordian.cs_style_2 .cs_accordian {
  border-radius: 5px;
}
.cs_accordian.cs_style_2 .cs_accordian_toggle {
  position: absolute;
  top: 0;
  right: 0;
  height: 62px;
  width: 56px;
  background-color: #ccc3c6;
  color: var(--white);
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_accordian.cs_style_2 .cs_accordian_toggle i {
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_accordian.cs_style_2.active {
  border-color: var(--accent_v3);
}
.cs_accordian.cs_style_2.active .cs_accordian_head {
  pointer-events: none;
  color: var(--accent_v3);
}
.cs_accordian.cs_style_2.active .cs_accordian_toggle {
  background-color: var(--accent_v3);
}
.cs_accordian.cs_style_2.active .cs_accordian_toggle i {
  -webkit-transform: rotateX(180deg);
          transform: rotateX(180deg);
}

.cs_faq.cs_version_3 {
  background-color: #fff4f8;
  overflow: hidden;
}
.cs_faq.cs_version_3 .cs_faq_thumb {
  position: relative;
  z-index: 1;
}
.cs_faq.cs_version_3 .cs_faq_thumb img {
  width: 100%;
  -webkit-animation: moving-img 5s linear infinite;
          animation: moving-img 5s linear infinite;
}
.cs_faq.cs_version_3 .cs_accordian_shape1 {
  top: 50%;
  left: 0;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.cs_faq.cs_version_3 .cs_accordian_shape2 {
  top: 0;
  right: 0;
}
.cs_faq.cs_version_3 .cs_accordian_shape3 {
  content: "";
  width: 196px;
  height: 100%;
  min-height: 1020px;
  background-color: var(--accent_v3);
  position: absolute;
  left: 24%;
  top: -15%;
  -webkit-transform: rotate(-25deg);
          transform: rotate(-25deg);
}
@media (max-width: 991px) {
  .cs_faq.cs_version_3 .cs_accordian_shape3 {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
    right: 0;
  }
}

@-webkit-keyframes moving-img {
  50% {
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
  }
}

@keyframes moving-img {
  50% {
    -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
  }
}
/* End Accordion */
/*--------------------------------
  Pagination
-----------------------------------*/
.cs_pagination_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  gap: 20px;
  margin-top: 50px;
}
.cs_pagination_box.cs_version_3 .cs_pagination_item.active, .cs_pagination_box.cs_version_3 .cs_pagination_item:hover {
  background-color: var(--accent_v3);
  border-color: var(--accent_v3);
  color: var(--white);
}
.cs_pagination_box .cs_pagination_item {
  height: 41px;
  width: 41px;
  background-color: var(--white);
  border: 1px solid var(--border);
  color: var(--secondary);
  border-radius: 50%;
}
.cs_pagination_box .cs_pagination_item.active, .cs_pagination_box .cs_pagination_item:hover {
  background-color: var(--accent);
  border-color: var(--accent);
  color: var(--white);
}

/*-----------------------------------
 Start Review 
 ------------------------------------*/
.cs_rating_container {
  max-width: 140px;
}

.cs_rating_percentage,
.cs_rating {
  overflow: hidden;
}
.cs_rating_percentage.scale_half,
.cs_rating.scale_half {
  -webkit-transform: scale(0.6);
          transform: scale(0.6);
  letter-spacing: 10px;
  width: 180px;
  margin-left: -15px;
}
.cs_rating_percentage::before,
.cs_rating::before {
  content: "\f005\f005\f005\f005\f005";
  font-family: "Font Awesome 6 Free";
  position: absolute;
  top: 0;
  left: 0;
}

.cs_rating {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  width: 157px;
  height: 26px;
  position: relative;
  color: #ffc107;
  font-size: 24px;
  letter-spacing: 5px;
}
.cs_rating::before {
  font-weight: 400;
}

.cs_rating_percentage {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
}
.cs_rating_percentage::before {
  font-weight: 900;
}

/*-----------------------------------
 Start Progress Bar
 ------------------------------------*/
.cs_progress_percentage::before,
.cs_progress::before {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: var(--secondary);
  opacity: 0.15;
}

.cs_progress {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  width: 100%;
  height: 12px;
  position: relative;
}

.cs_progress_percentage {
  position: absolute;
  top: 0;
  left: 0;
  height: 50%;
  overflow: visible;
}
.cs_progress_percentage::before {
  background-color: var(--accent);
  opacity: 1;
}
.cs_progress_percentage .progress_value {
  color: var(--accent);
  font-weight: 500;
  position: absolute;
  top: -25px;
  right: -15px;
}

.cs_list.cs_style_1 li {
  position: relative;
  padding-left: 32px;
}
.cs_list.cs_style_1 li:not(:last-child) {
  margin-bottom: 16px;
}
.cs_list.cs_style_1 i {
  font-size: 22px;
  position: absolute;
  left: 0;
  top: 3px;
}

.cs_list.cs_style_2 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  row-gap: 15px;
}
.cs_list.cs_style_2.cs_type_2 i {
  top: 0;
}
.cs_list.cs_style_2 li {
  width: 50%;
  position: relative;
  padding-left: 30px;
}
@media (max-width: 767px) {
  .cs_list.cs_style_2 li {
    width: 100%;
  }
}
.cs_list.cs_style_2 i {
  position: absolute;
  left: 0;
  top: 4px;
}

.cs_list.cs_style_3 li {
  position: relative;
  padding-left: 40px;
  margin-bottom: 20px;
}
.cs_list.cs_style_3 li:last-child {
  margin-bottom: 0px;
}
.cs_list.cs_style_3 img {
  position: absolute;
  left: 0;
  top: 0;
}

.cs_list.cs_style_4 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 50px;
  margin-bottom: 30px;
}
@media (max-width: 575px) {
  .cs_list.cs_style_4 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
    gap: 24px;
  }
}
.cs_list.cs_style_4 li {
  width: 50%;
  max-width: 250px;
}
@media (max-width: 575px) {
  .cs_list.cs_style_4 li {
    min-width: 100%;
  }
}
.cs_list.cs_style_4 .cs_list_title {
  margin-bottom: 6px;
}

.cs_list.cs_style_5 li {
  position: relative;
  padding-left: 32px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_list.cs_style_5 li:not(:last-child) {
  margin-bottom: 10px;
}
.cs_list.cs_style_5 li:hover {
  color: var(--accent_v3);
}
.cs_list.cs_style_5 i {
  font-size: 20px;
  position: absolute;
  left: 0;
  top: 0;
}

.cs_brand_list.cs_style_1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 30px;
}
@media (max-width: 991px) {
  .cs_brand_list.cs_style_1 {
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
}
@media (max-width: 575px) {
  .cs_brand_list.cs_style_1 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
.cs_brand_list.cs_style_1 img {
  -webkit-filter: brightness(0) invert(1);
          filter: brightness(0) invert(1);
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_brand_list.cs_style_1 img:hover {
  -webkit-filter: brightness(0) invert(0.9);
          filter: brightness(0) invert(0.9);
}

.cs_services .cs_section_heading.cs_style_1 .cs_section_title_up {
  margin-bottom: 15px;
}
.cs_services .cs_section_title {
  line-height: 1.445em;
}

.cs_section_heading.cs_style_1 {
  position: relative;
  z-index: 1;
}
.cs_section_heading.cs_style_1 .cs_section_title_up {
  margin-bottom: 10px;
  margin-top: -7px;
  text-transform: capitalize;
}
.cs_section_heading.cs_style_1 .cs_section_title_up.cs_fs_20 {
  line-height: 1.25em;
}
.cs_section_heading.cs_style_1 .cs_section_subtitle {
  margin: 15px 0 0;
}
@media (max-width: 991px) {
  .cs_section_heading.cs_style_1 br {
    display: none;
  }
}

.cs_service_shape1 {
  left: 0;
  top: 0;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}

.cs_service_shape2 {
  top: 50%;
  right: 0;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.cs_service_shape3 {
  bottom: 0;
  right: 0;
}

/* Start Time Picker */
.ui-timepicker-standard {
  border: 1px solid var(--accent);
  border-radius: 20px;
  padding: 10px;
  margin-top: 5px;
  color: var(--primary);
  font-family: inherit;
}
.ui-timepicker-standard .ui-state-hover {
  color: var(--primary);
  border-color: rgba(12, 184, 182, 0.3);
  background-color: rgba(12, 184, 182, 0.15);
  border-radius: 10px;
  color: var(--accent);
}
.ui-timepicker-standard a {
  cursor: pointer;
  font-size: 16px;
  line-height: 1.2em;
  padding: 9px 15px;
}
.ui-timepicker-standard .ui-timepicker-viewport {
  padding-right: 0 !important;
}
.ui-timepicker-standard .ui-widget.ui-widget-content {
  border: none;
}

.ui-widget-content a {
  color: var(--primary);
}

/* End Time Picker */
/* Start Date Picker */
.cs_date,
.cs_time {
  width: 100%;
  padding: 12px 15px;
  border: none;
  outline: none;
  border: none;
  border-radius: 5px;
}

.ui-datepicker .ui-datepicker-prev:before {
  content: "\f104";
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
}

.ui-datepicker .ui-datepicker-next:before {
  content: "\f105";
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
}

.ui-datepicker.ui-widget.ui-widget-content {
  border-color: var(--accent);
  border-radius: 10px;
  margin: 5px 0;
  color: var(--primary);
}

.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default,
.ui-button,
html .ui-button.ui-state-disabled:hover,
html .ui-button.ui-state-disabled:active {
  border: none;
  color: var(--primary);
  background: transparent;
  text-align: center;
}

.ui-widget {
  font-family: inherit;
}

.ui-datepicker table {
  font-size: 16px;
  margin: 0 0 4px;
}

.ui-widget-header {
  background: transparent;
  border: none;
}

.ui-datepicker {
  padding: 5px;
}

.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
  color: var(--accent);
  font-weight: 500;
}

.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus,
.ui-button:hover,
.ui-button:focus {
  color: var(--accent);
}

.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
a.ui-button:active,
.ui-button:active,
.ui-button.ui-state-active:hover {
  background-color: rgba(12, 184, 182, 0.15);
  color: var(--accent);
  border: 1px solid rgba(12, 184, 182, 0.3);
  border-radius: 7px;
  font-weight: 500;
}

.ui-datepicker .ui-datepicker-prev,
.ui-datepicker .ui-datepicker-next {
  top: 12px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  border: none;
  cursor: pointer;
}
.ui-datepicker .ui-datepicker-prev:hover,
.ui-datepicker .ui-datepicker-next:hover {
  background-color: var(--primary);
  color: var(--white);
}

.ui-datepicker .ui-datepicker-header {
  padding: 10px 0;
}

.ui-widget-header {
  color: var(--primary);
  font-weight: 600;
}

.ui-datepicker th {
  color: var(--primary);
  font-weight: 500;
  font-size: 16px;
}

/* End Date Picker */
/*--------------------------------------------------------------
30. Select
----------------------------------------------------------------*/
.select2-container {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  display: inline-block;
  margin: 0;
  position: relative;
  vertical-align: middle;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.select2-container .select2-selection--single {
  height: 48px;
}

.select2-container--default .select2-selection--single {
  border-color: var(--border);
}
.select2-container--default .select2-selection--single:focus {
  outline: none;
}

.select2-container .select2-selection--single .select2-selection__rendered {
  padding-left: 15px;
  padding-right: 30px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
  color: var(--secondary);
  line-height: 1.6em;
  font-size: 16px;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  outline: none;
}

.select2-container--default .select2-selection--single .select2-selection__placeholder {
  color: var(--secondary);
}

.select2-search--dropdown .select2-search__field {
  height: 36px;
  padding: 5px 15px;
}

.cs_custom_select_wrap {
  width: 100%;
}
.cs_custom_select_wrap select {
  display: block;
  width: 100%;
}

.select2-container--default .select2-selection--single {
  border: none;
}

.select2-dropdown {
  border-color: var(--border);
}

.select2-search--dropdown {
  padding: 8px;
  padding-bottom: 0;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
  height: 40px;
  width: 30px;
  background: transparent;
  top: 4px;
  right: 3px;
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
  width: 8px;
  height: 8px;
  border: 0;
  border: 2px solid var(--secondary);
  border-top: 0;
  border-left: 0;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(45deg);
          transform: translate(-50%, -50%) rotate(45deg);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
  width: 8px;
  height: 8px;
  border: 2px solid var(--secondary);
  border-top: 0;
  border-left: 0;
  -webkit-transform: translate(-50%, -40%) rotate(-135deg);
          transform: translate(-50%, -40%) rotate(-135deg);
}

.select2-results__options {
  padding: 8px;
}

.select2-results__option {
  font-size: 16px;
  line-height: 1.2em;
  padding: 10px 12px;
  border-radius: 7px;
  margin-bottom: 1px;
}

.select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
  background-color: var(--accent);
  color: var(--white);
}

.select2-container--default .select2-results__option--selected {
  background-color: rgba(12, 184, 182, 0.15);
  color: var(--accent);
  border-radius: 5px;
}

.select2-container--default .select2-search--dropdown .select2-search__field {
  outline: none;
  border-color: var(--border);
  font-size: 15px;
  line-height: 1.6em;
}

.st_large_select {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.st_large_select .select2-container,
.st_small_select .select2-container {
  width: 100% !important;
}

.select2-container--default .select2-selection--single {
  border-radius: 5px;
}

.cs_hover_accent_3 a:hover {
  color: var(--accent_v3) !important;
}

/*--------------------------------------------------------------
  6. Slider
----------------------------------------------------------------*/
.cs_slider .cs_slider_wrapper {
  margin-left: -12px;
  margin-right: -12px;
}
.cs_slider .slick_slide_in {
  padding-left: 12px;
  padding-right: 12px;
}
.cs_slider.cs_slider_animation1 .cs_slider_wrapper {
  margin-left: 0px;
  margin-right: 0px;
}
.cs_slider.cs_slider_animation1 .slick_slide_in {
  padding-left: 0px;
  padding-right: 0px;
}

#doctors .slick-list {
  padding: 20px 0;
}

.cs_testimonial_slider .slick-list {
  padding: 20px 0;
}

.cs_slider_animation1 .cs_hero.cs_style_6 .cs_hero_title {
  -webkit-transform: translateX(-50px);
          transform: translateX(-50px);
  opacity: 0;
  -webkit-transition: all 0.8s ease-in-out;
  transition: all 0.8s ease-in-out;
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
}
.cs_slider_animation1 .cs_hero.cs_style_6 .cs_hero_subtitle {
  opacity: 0;
  position: relative;
  top: 30px;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
.cs_slider_animation1 .cs_hero_btn_group {
  opacity: 0;
  position: relative;
  top: 30px;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
.cs_slider_animation1 .slick-active .cs_hero.cs_style_6 .cs_hero_bg {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.cs_slider_animation1 .slick-active .cs_hero.cs_style_6 .cs_hero_title {
  opacity: 1;
  -webkit-transform: translateX(0px);
          transform: translateX(0px);
}
.cs_slider_animation1 .slick-active .cs_hero.cs_style_6 .cs_hero_subtitle {
  opacity: 1;
  top: 0;
  -webkit-transition-delay: 0.9s;
          transition-delay: 0.9s;
}
.cs_slider_animation1 .slick-active .cs_hero_btn_group {
  opacity: 1;
  top: 0;
  -webkit-transition-delay: 1s;
          transition-delay: 1s;
}
.cs_slider_animation1 .cs_slider_arrows.cs_style_1 {
  width: calc(100% - 60px);
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  gap: 20px;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_slider_animation1 .cs_slider_arrows.cs_style_1 .cs_slider_arrow {
  border: none;
  background-color: var(--white);
  color: var(--accent);
}
@media (max-width: 991px) {
  .cs_slider_animation1 .cs_slider_arrows.cs_style_1 {
    top: initial;
    left: 50%;
    bottom: 8%;
    -webkit-transform: translate(-50%, -8%);
            transform: translate(-50%, -8%);
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
.cs_slider_animation1:hover .cs_slider_arrows.cs_style_1 {
  visibility: visible;
  opacity: 1;
}

.cs_slider_arrows.cs_style_1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 20px;
}
.cs_slider_arrows.cs_style_1 .cs_slider_arrow {
  width: 50px;
  height: 50px;
  border: 1px solid var(--accent);
  border-radius: 50%;
  cursor: pointer;
  font-size: 16px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_slider_arrows.cs_style_1 .cs_slider_arrow.cs_primary_bg {
  border: none;
}
.cs_slider_arrows.cs_style_1 .cs_slider_arrow.cs_primary_bg:hover {
  background-color: var(--accent_v2);
  color: var(--white);
}
.cs_slider_arrows.cs_style_1 .cs_slider_arrow.cs_version_3 {
  color: var(--accent_v3);
  border-color: var(--accent_v3);
  font-size: 22px;
}
.cs_slider_arrows.cs_style_1 .cs_slider_arrow.cs_version_3:hover {
  background-color: var(--accent_v3);
}
.cs_slider_arrows.cs_style_1 .cs_slider_arrow.cs_version_4 {
  color: var(--accent_v4);
  border-color: var(--accent_v4);
  font-size: 22px;
}
.cs_slider_arrows.cs_style_1 .cs_slider_arrow.cs_version_4:hover {
  background-color: var(--accent_v4);
}
.cs_slider_arrows.cs_style_1 .cs_slider_arrow:hover {
  background-color: var(--accent);
  color: var(--white);
}
.cs_slider_arrows.cs_style_1.cs_hide_desktop {
  display: none;
}
@media (max-width: 991px) {
  .cs_slider_arrows.cs_style_1.cs_hide_mobile {
    display: none;
  }
  .cs_slider_arrows.cs_style_1.cs_hide_desktop {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin-top: 30px;
  }
}

.cs_slider_arrows.cs_color_1.cs_style_1 .cs_slider_arrow {
  border-color: var(--accent_v3);
  color: var(--accent_v3);
}
.cs_slider_arrows.cs_color_1.cs_style_1 .cs_slider_arrow:hover {
  background-color: var(--accent_v3);
  color: var(--white);
}

.cs_pagination.cs_style_1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: absolute;
  left: 50%;
  bottom: 6%;
  -webkit-transform: translate(-50%, -6%);
          transform: translate(-50%, -6%);
}
.cs_pagination.cs_style_1.cs_hide_desktop {
  display: none;
}
@media (max-width: 991px) {
  .cs_pagination.cs_style_1.cs_hide_desktop {
    display: block;
  }
}
.cs_pagination.cs_style_1 .slick-dots {
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 15px;
  padding: 0;
  margin-bottom: 0;
}
.cs_pagination.cs_style_1 .slick-dots li button {
  overflow: hidden;
  border: none;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background-color: var(--white);
  font-size: 0px;
  cursor: pointer;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_pagination.cs_style_1 .slick-dots .slick-active button {
  background-color: var(--accent);
}

/*--------------------------------------------------------------
  7. Slider
----------------------------------------------------------------*/
.cs-pd-video .cs_video_open,
.cs-sample-img .cs_video_open {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  color: #fff;
  font-size: 68px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  line-height: 48px;
}

.cs-pd-video .cs_video_open:hover,
.cs-sample-img .cs_video_open:hover {
  color: rgba(255, 255, 255, 0.7);
}

.cs_video_popup {
  position: fixed;
  z-index: 1000;
  top: 0;
  width: 100%;
  height: 100%;
  left: -100%;
  -webkit-transition-delay: 0.3s;
          transition-delay: 0.3s;
}

.cs_video_popup.active {
  left: 0;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
  left: 0;
}

.cs_video_popup-overlay {
  position: absolute;
  left: 0;
  right: 0;
  background: #000;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  opacity: 0;
}

.cs_video_popup.active .cs_video_popup-overlay {
  opacity: 0.8;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.cs_video_popup-content {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  font-size: 0;
  text-align: center;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  -webkit-transform: translateY(100px);
          transform: translateY(100px);
  opacity: 0;
  visibility: hidden;
  padding: 15px;
}

.cs_video_popup.active .cs_video_popup-content {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
  visibility: visible;
}

.cs_video_popup-content:after {
  content: "";
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}

.cs_video_popup-container {
  display: inline-block;
  position: relative;
  text-align: left;
  background: #fff;
  max-width: 1380px;
  width: 100%;
  vertical-align: middle;
}

.cs_video_popup-container .embed-responsive {
  width: 100%;
}

.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
  height: 100%;
}

.embed-responsive-16by9::before {
  display: block;
  content: "";
  padding-top: 56.25%;
}

.embed-responsive iframe,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.cs_video_popup-close {
  position: absolute;
  top: 0;
  right: 0;
  width: 40px;
  height: 40px;
  background: #d90d0d;
  cursor: pointer;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.cs_video_popup iframe {
  width: 100%;
  height: 100%;
  position: absolute;
}

.cs_video_popup-close:before {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 20px;
  height: 1px;
  background: #fff;
  margin-left: -10px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.cs_video_popup-close:after {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 20px;
  height: 1px;
  background: #fff;
  margin-left: -10px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.cs_video_popup-close:hover:before,
.cs_video_popup-close:hover:after {
  background: #000;
}

.cs_video_popup-layer {
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
}

.cs_video_popup-align {
  overflow: hidden;
}

/*End Video Popup*/
/*--------------------------------------------------------------
8. Header
----------------------------------------------------------------*/
.cs_site_header {
  position: absolute;
  width: 100%;
  z-index: 101;
  left: 0;
  top: 0px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

@media (max-width: 1199px) {
  .cs_site_header.cs_style_1.cs_version_2 .cs_nav .cs_nav_list {
    background-color: var(--accent_v2);
  }
}
.cs_site_header.cs_style_1.cs_version_3 {
  border-bottom: 1px solid var(--border);
  -webkit-box-shadow: none;
          box-shadow: none;
}
@media (max-width: 1199px) {
  .cs_site_header.cs_style_1.cs_version_3 {
    overflow: visible;
  }
  .cs_site_header.cs_style_1.cs_version_3 .cs_nav .cs_nav_list {
    background-color: var(--accent_v3);
  }
}
.cs_site_header.cs_style_1.cs_version_4 .cs_mobile_logo {
  display: none;
}
.cs_site_header.cs_style_1.cs_version_4 .menu_item_has_children ul a {
  color: var(--primary);
}
.cs_site_header.cs_style_1.cs_version_4 .menu_item_has_children ul a:hover {
  color: var(--accent_v4);
}
.cs_site_header.cs_style_1.cs_version_4 a:hover {
  color: var(--white);
}
@media (max-width: 1199px) {
  .cs_site_header.cs_style_1.cs_version_4 .cs_main_header {
    background-color: var(--white);
  }
  .cs_site_header.cs_style_1.cs_version_4 .cs_mobile_logo {
    display: block;
  }
  .cs_site_header.cs_style_1.cs_version_4 .cs_btn.cs_style_1 {
    background-color: var(--accent_v4);
    color: var(--white);
  }
  .cs_site_header.cs_style_1.cs_version_4 .cs_nav .cs_nav_list {
    background-color: var(--accent_v4);
  }
  .cs_site_header.cs_style_1.cs_version_4 .menu_item_has_children ul a {
    color: var(--white);
  }
}
.cs_site_header.cs_style_1.cs_landing {
  margin-top: 30px;
}
.cs_site_header.cs_style_1.cs_landing .cs_nav_list ul a {
  color: var(--primary);
}
.cs_site_header.cs_style_1.cs_landing .cs_nav_list ul a:hover {
  color: var(--accent_v2);
}
.cs_site_header.cs_style_1.cs_landing a {
  color: var(--white);
}
.cs_site_header.cs_style_1.cs_landing a:hover {
  color: var(--white);
}
.cs_site_header.cs_style_1.cs_landing.cs_gescout_show {
  margin-top: 0;
}
.cs_site_header.cs_style_1.cs_landing.cs_gescout_show .cs_site_branding {
  color: var(--primary);
}
.cs_site_header.cs_style_1.cs_landing.cs_gescout_show .cs_nav .cs_nav_list > li > a {
  color: var(--primary);
}
@media (max-width: 1199px) {
  .cs_site_header.cs_style_1.cs_landing {
    margin-top: 0;
  }
  .cs_site_header.cs_style_1.cs_landing .cs_nav_list ul a {
    color: var(--white);
  }
  .cs_site_header.cs_style_1.cs_landing .cs_menu_toggle span:after,
  .cs_site_header.cs_style_1.cs_landing .cs_menu_toggle span::before,
  .cs_site_header.cs_style_1.cs_landing .cs_menu_toggle span {
    background-color: var(--white);
  }
  .cs_site_header.cs_style_1.cs_landing .cs_toggle_active span {
    background-color: transparent;
  }
}
.cs_site_header.cs_style_1 .cs_main_header_in,
.cs_site_header.cs_style_1 .cs_top_header_in {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  position: relative;
}
.cs_site_header.cs_style_1 .cs_top_header.cs_version_2 {
  background: -webkit-gradient(linear, left top, right top, color-stop(50%, var(--accent_v2)), color-stop(50%, var(--dark_blue)));
  background: linear-gradient(to right, var(--accent_v2) 50%, var(--dark_blue) 50%);
}
.cs_site_header.cs_style_1 .cs_top_header.cs_version_2 .cs_top_header_in {
  height: 60px;
}
.cs_site_header.cs_style_1 .cs_top_header.cs_version_2 .cs_social_btns a:hover {
  background-color: var(--accent_v2);
  color: var(--white);
}
.cs_site_header.cs_style_1 .cs_top_header_right {
  width: inherit;
  margin-right: 0;
  padding-left: 0;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}
.cs_site_header.cs_style_1 .cs_top_header_left {
  width: inherit;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  margin-left: 0;
}
.cs_site_header.cs_style_1 .cs_top_header_left i {
  margin-right: 7px;
}
.cs_site_header.cs_style_1 .cs_main_header_in {
  height: 80px;
}
.cs_site_header.cs_style_1 .cs_top_header_in {
  height: 60px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_site_header.cs_style_1 .cs_top_header_in.cs_version_4 {
  height: 100%;
  padding: 38px 0;
}
.cs_site_header.cs_style_1 .cs_top_header_in.cs_version_4 .cs_top_nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 106px;
}
.cs_site_header.cs_style_1 .cs_top_header_in.cs_version_4 .cs_top_nav li {
  position: relative;
}
.cs_site_header.cs_style_1 .cs_top_header_in.cs_version_4 .cs_top_nav li:not(:last-child) {
  margin-right: 0px;
}
.cs_site_header.cs_style_1 .cs_top_header_in.cs_version_4 .cs_top_nav li:not(:last-child)::after {
  content: "";
  margin: 0 10px;
  width: 1px;
  height: 30px;
  background: rgba(9, 87, 222, 0.4);
  position: absolute;
  top: 50%;
  right: -66px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  margin: 0;
}
@media (max-width: 1199px) {
  .cs_site_header.cs_style_1 .cs_top_header_in {
    display: none;
  }
}
.cs_site_header.cs_style_1 .cs_main_header_right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 100%;
}
.cs_site_header.cs_style_1 .cs_main_header_right .cs_btn.cs_style_1 {
  font-size: 16px;
  padding: 11px 25px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_site_header.cs_style_1 .cs_main_header_right .cs_btn.cs_style_1:hover {
  background-color: var(--primary);
  color: var(--white);
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
}
@media (max-width: 575px) {
  .cs_site_header.cs_style_1 .cs_main_header_right {
    display: none;
  }
}
.cs_site_header.cs_style_1.cs_sticky-active {
  background-color: #000;
  -webkit-box-shadow: 0 10px 10px -10px rgba(33, 43, 53, 0.1);
          box-shadow: 0 10px 10px -10px rgba(33, 43, 53, 0.1);
}

.cs_top_header_right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  gap: 22px;
  height: inherit;
}
.cs_top_header_right .cs_social_btns {
  padding: 0;
  gap: 10px;
}
.cs_top_header_right .cs_social_btns.cs_version_2 a {
  color: var(--accent_v2);
}
.cs_top_header_right .cs_social_btns a {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  background-color: var(--white);
  color: var(--accent);
  font-size: 14px;
}

.cs_top_header_left i {
  margin-right: 7px;
}

.cs_top_nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  line-height: 28px;
}
.cs_top_nav li a {
  color: var(--white);
}
.cs_top_nav li:not(:last-child)::after {
  content: "/";
  margin: 0 10px;
  color: var(--white);
  position: relative;
  top: 1px;
}

.cs_site_header_style_1 {
  border-bottom: 1px solid var(--accent);
}
.cs_site_header_style_1 .cs_main_header_right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs_site_header_style_1 .cs_nav .cs_nav_list > li.current-menu-item > a:before {
  bottom: -4px;
  background-color: var(--white);
}

@media screen and (max-width: 1199px) {
  .cs_main_header .container {
    max-width: 100%;
  }
  .cs_site_header.cs_style_1 .cs_nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
}
.cs_nav {
  color: var(--primary);
}
.cs_nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.cs_sticky_header {
  position: fixed !important;
  width: 100%;
  z-index: 999;
}

.cs_gescout_sticky {
  position: fixed !important;
  top: -110px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  background-color: #000;
}

.cs_gescout_show {
  background-color: var(--white);
  -webkit-box-shadow: 0 10px 10px -5px rgba(33, 43, 53, 0.1);
          box-shadow: 0 10px 10px -5px rgba(33, 43, 53, 0.1);
  top: 0 !important;
  opacity: 1;
  visibility: visible;
}
.cs_gescout_show.cs_site_header.cs_style_1 .cs_top_header_in.cs_version_4 {
  padding: 15px 0;
}

.cs_site_branding {
  display: inline-block;
}
.cs_site_branding.cs_desktop_hide {
  display: none;
}
@media (max-width: 1199px) {
  .cs_site_branding.cs_desktop_hide {
    display: block;
  }
}
.cs_site_branding + .cs_nav {
  margin-left: 65px;
}
.cs_site_branding + .cs_nav.cs_type_2 {
  margin-left: 0;
}

.cs_header_contact {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs_header_contact .cs_header_contact_icon {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  margin-right: 12px;
}

.cs_toolbox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs_toolbox > *:not(:fircs_child) {
  margin-left: 40px;
}

.cs_site_header.cs_style_1 .cs_main_header {
  border-color: var(--border);
}
@media (max-width: 1199px) {
  .cs_site_header.cs_style_1 .cs_main_header.cs_accent_bg_v1 {
    background-color: var(--white);
  }
}

@media screen and (min-width: 1200px) {
  .cs_main_header {
    position: relative;
  }
  .cs_main_header .container-fluid {
    padding-right: 40px;
    padding-left: 40px;
  }
  .cs_main_header_center,
  .cs_top_header_center {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
  }
  .cs_main_header_center {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    height: 100%;
    width: 100%;
    max-width: calc(100% - 300px);
  }
  .cs_main_header_left {
    height: 100%;
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    margin-right: 35px;
  }
  .cs_nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    height: 100%;
  }
  .cs_nav.cs_white_color a {
    color: var(--white);
  }
  .cs_nav.cs_white_color a:hover {
    color: var(--primary);
  }
  .cs_nav .cs_nav_list {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    height: inherit;
  }
  .cs_nav .cs_nav_list.cs_version_2 a:hover {
    color: var(--accent_v2);
  }
  .cs_nav .cs_nav_list.cs_version_3 a:hover {
    color: var(--accent_v3);
  }
  .cs_nav .cs_nav_list.cs_version_3 ul li:not(:last-child) a::after {
    background-color: #fff4f8;
  }
  .cs_nav .cs_nav_list li:not(.cs_mega_menu) {
    position: relative;
  }
  .cs_nav .cs_nav_list > li {
    margin-right: 35px;
    height: inherit;
  }
  .cs_nav .cs_nav_list > li:last-child {
    margin-right: 0;
  }
  .cs_nav .cs_nav_list > li > a {
    padding: 10px 0;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    position: relative;
    height: inherit;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    font-weight: 500;
  }
  .cs_nav .cs_nav_list > li > ul {
    left: 0;
    top: calc(100% + 15px);
  }
  .cs_nav .cs_nav_list > li:hover > ul {
    top: 100%;
    opacity: 1;
    visibility: visible;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
  }
  .cs_nav .cs_nav_list > li.menu_item_has_children > a {
    position: relative;
  }
  .cs_nav .cs_nav_list > li.menu_item_has_children > a::after {
    content: "+";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    display: inline-block;
    margin-left: 5px;
    position: relative;
    top: 1px;
    font-size: 12px;
    color: currentColor;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
  }
  .cs_nav .cs_nav_list > li.menu_item_has_children.cs_type_2 ul {
    background-color: var(--accent_v2);
  }
  .cs_nav .cs_nav_list ul {
    width: 260px;
    background-color: var(--white);
    font-size: 16px;
    line-height: 1.6em;
    font-weight: 500;
    color: var(--primary);
    -webkit-box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.1);
    position: absolute;
    padding: 10px 0 15px;
    z-index: 100;
    opacity: 0;
    visibility: hidden;
    display: block !important;
    border-radius: 0px 0px 5px 5px;
    -webkit-transition: all 0.1s ease;
    transition: all 0.1s ease;
    text-transform: capitalize;
  }
  .cs_nav .cs_nav_list ul li:hover ul {
    top: 0px;
  }
  .cs_nav .cs_nav_list ul li:hover > ul {
    opacity: 1;
    visibility: visible;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
  }
  .cs_nav .cs_nav_list ul a {
    display: block;
    line-height: inherit;
    padding: 10px 20px;
  }
  .cs_nav .cs_nav_list ul ul {
    top: 15px;
    left: 100%;
  }
  .cs_menu_toggle,
  .cs_menu_dropdown_toggle {
    display: none;
  }
}
@media screen and (max-width: 1550px) {
  .cs_site_branding + .cs_nav {
    margin-left: 20px;
  }
  .cs_toolbox > *:not(:fircs_child) {
    margin-left: 25px;
  }
  .cs_nav .cs_nav_list > li {
    margin-right: 35px;
  }
}
@media screen and (max-width: 1199px) {
  .cs_nav .cs_nav_list > li {
    margin-right: 0;
  }
  .cs_main_header_right {
    padding-right: 55px;
  }
  .cs_menu_dropdown_toggle {
    position: absolute;
    height: 30px;
    width: 30px;
    right: 20px;
    top: 5px;
  }
  .cs_menu_dropdown_toggle:before, .cs_menu_dropdown_toggle:after {
    content: "";
    display: block;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
    height: 2px;
    width: 10px;
    background-color: currentColor;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }
  .cs_menu_dropdown_toggle:before {
    -webkit-transform: translate(-50%, -50%) rotate(90deg);
            transform: translate(-50%, -50%) rotate(90deg);
  }
  .cs_menu_dropdown_toggle.active:before {
    -webkit-transform: translate(-50%, -50%) rotate(0deg);
            transform: translate(-50%, -50%) rotate(0deg);
  }
  .cs_nav .cs_nav_list {
    position: absolute;
    width: 100vw;
    left: -12px;
    padding: 10px 0;
    display: none;
    top: 100%;
    overflow: auto;
    max-height: calc(100vh - 80px);
    line-height: 1.6em;
    background-color: var(--accent);
    color: var(--white);
  }
  .cs_nav .cs_nav_list ul {
    padding-left: 15px;
    display: none;
    text-transform: capitalize;
  }
  .cs_nav .cs_nav_list a {
    display: block;
    padding: 8px 20px;
    color: var(--white);
  }
  .cs_nav .menu_item_has_children {
    position: relative;
  }
  .cs_site_header.cs_style_2 .cs_nav .cs_nav_list {
    left: 0;
  }
  /*Mobile Menu Button*/
  .cs_menu_toggle {
    display: inline-block;
    width: 30px;
    height: 27px;
    cursor: pointer;
    position: absolute;
    top: 27px;
    right: 30px;
  }
  .cs_menu_toggle span,
  .cs_menu_toggle span:before,
  .cs_menu_toggle span:after {
    width: 100%;
    height: 2px;
    background-color: currentColor;
    display: block;
  }
  .cs_menu_toggle span {
    margin: 0 auto;
    position: relative;
    top: 12px;
    -webkit-transition-duration: 0s;
            transition-duration: 0s;
    -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
  }
  .cs_menu_toggle span:before {
    content: "";
    position: absolute;
    margin-top: -9px;
    -webkit-transition-property: margin, -webkit-transform;
    transition-property: margin, -webkit-transform;
    transition-property: margin, transform;
    transition-property: margin, transform, -webkit-transform;
    -webkit-transition-duration: 0.2s;
            transition-duration: 0.2s;
    -webkit-transition-delay: 0.2s, 0s;
            transition-delay: 0.2s, 0s;
  }
  .cs_menu_toggle span:after {
    content: "";
    position: absolute;
    margin-top: 9px;
    -webkit-transition-property: margin, -webkit-transform;
    transition-property: margin, -webkit-transform;
    transition-property: margin, transform;
    transition-property: margin, transform, -webkit-transform;
    -webkit-transition-duration: 0.2s;
            transition-duration: 0.2s;
    -webkit-transition-delay: 0.2s, 0s;
            transition-delay: 0.2s, 0s;
  }
  .cs_site_header.cs_style_1 .cs_menu_toggle {
    top: 50%;
    right: 0px;
    margin-top: -13px;
  }
  .cs_toggle_active span {
    background-color: rgba(0, 0, 0, 0);
    -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
  }
  .cs_toggle_active span:before {
    margin-top: 0;
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transition-delay: 0s, 0.2s;
            transition-delay: 0s, 0.2s;
  }
  .cs_toggle_active span:after {
    margin-top: 0;
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-transition-delay: 0s, 0.2s;
            transition-delay: 0s, 0.2s;
  }
  .cs_nav .cs_nav_list a {
    position: relative;
  }
  .cs_site_header.cs_style_1 .cs_main_header_in {
    height: 80px;
  }
  .cs_site_header .current-menu-item > a:before {
    display: none;
  }
  .cs_site_header.cs_style_1 {
    top: 0;
  }
  .cs_site_header.cs_style_1.cs_color_1 .cs_menu_toggle,
  .cs_site_header.cs_style_1.cs_color_1 .cs_menu_dropdown_toggle,
  .cs_site_header.cs_style_1.cs_color_1 .cs_nav .cs_nav_list ul {
    color: var(--primary);
  }
  .cs_site_header.cs_style_1.cs_color_1 .cs_nav .cs_nav_list {
    background-color: var(--primary);
  }
}
@media screen and (max-width: 991px) {
  .cs_top_header {
    display: none;
  }
  .cs_site_header.cs_style_1 .cs_action_box > *:not(:last-child) {
    margin-right: 25px;
  }
  .cs_site_header.cs_style_1 .cs_btn {
    padding: 8px;
  }
}
@media screen and (max-width: 767px) {
  .cs_site_header.cs_style_1 .cs_top_header_in {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .cs_site_header.cs_style_1 .cs_top_header_left {
    display: none;
  }
}
@media screen and (max-width: 575px) {
  .cs_site_header.cs_style_1 .cs_btn span {
    display: none;
  }
  .cs_site_header.cs_style_1 .cs_btn svg {
    margin-right: 0;
    width: 20px;
    height: 20px;
  }
  .cs_landing .cs_btn.cs_style_1 {
    display: block;
  }
}
@media screen and (max-width: 500px) {
  .cs_header_contact {
    display: none;
  }
}
/* Creative header styling */
@media screen and (min-width: 992px) {
  .cs_site_header.cs_style_2 {
    width: 300px;
    background: var(--white);
    height: 100vh;
    border-right: 1px solid var(--border);
    overflow: auto;
    position: fixed;
    left: 0;
    top: 0;
  }
  .cs_site_header.cs_style_2 .cs_nav .cs_nav_list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    position: initial;
    left: initial;
    background-color: var(--white);
    min-height: 200px;
    overflow-y: auto;
  }
  .cs_site_header.cs_style_2 .cs_nav .cs_nav_list > li {
    margin-right: 0;
  }
  .cs_site_header.cs_style_2 .cs_nav .cs_nav_list > li > a {
    padding: 10px 0;
    color: var(--primary);
  }
  .cs_site_header.cs_style_2 .cs_nav .cs_nav_list > li > a:hover {
    color: var(--accent_v3);
  }
  .cs_site_header.cs_style_2 .cs_menu_toggle {
    display: none;
  }
  .cs_site_header.cs_style_2 .cs_main_header {
    position: relative;
    padding: 30px 18px;
  }
  .cs_site_header.cs_style_2 .cs_main_header_right {
    padding-right: 0;
  }
  .cs_site_header.cs_style_2 .cs_social_btns.cs_style_1 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    gap: 15px;
    padding: 10px 10px 30px 30px;
  }
  .cs_site_header.cs_style_2 .cs_social_btns.cs_style_1 a {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    width: 35px;
    height: 35px;
    border: 1px solid var(--accent_v3);
    border-radius: 50%;
    color: var(--accent_v3);
    font-size: 14px;
  }
  .cs_site_header.cs_style_2 .cs_social_btns.cs_style_1 a:hover {
    color: var(--white);
    background-color: var(--accent_v3);
  }
  .cs_site_header.cs_style_2 .cs_main_header_left {
    margin-bottom: 24px;
  }
  .cs_site_header.cs_style_2 .cs_btn.cs_style_1 {
    margin-top: 20px;
    padding: 10px 20px;
  }
  .cs_site_header.cs_style_2 .cs_opening_hr {
    margin-top: 30px;
  }
  .cs_site_header.cs_style_2 .cs_opening_hr_title {
    margin-bottom: 10px;
  }
}
@media screen and (max-width: 991px) {
  .cs_site_header .cs_btn,
  .cs_site_header.cs_style_2 .cs_opening_hr,
  .cs_site_header.cs_style_2 .cs_social_btns.cs_style_1 {
    display: none !important;
  }
  .cs_site_header.cs_style_2 {
    background-color: var(--white);
  }
  .cs_site_header.cs_style_2 .cs_nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
  .cs_site_header.cs_style_2 .cs_nav .cs_nav_list {
    background-color: var(--accent_v3);
  }
  .cs_site_header.cs_style_2 .cs_main_header_in {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    height: 70px;
  }
}
/*--------------------------------------------------------------
  9. Footer
----------------------------------------------------------------*/
.cs_footer_top {
  position: relative;
  z-index: 1;
}

.cs_footer_main {
  padding-bottom: 100px;
}
@media (max-width: 991px) {
  .cs_footer_main {
    padding-bottom: 60px;
  }
}
.cs_footer_main.cs_version_3 {
  position: relative;
  z-index: 1;
  border-bottom: 1px solid var(--border);
  padding-bottom: 88px;
}
@media (max-width: 991px) {
  .cs_footer_main.cs_version_3 {
    padding-bottom: 60px;
  }
}
.cs_footer_main.cs_version_4 {
  border-bottom: 1px solid var(--border);
  padding-bottom: 110px;
}
@media (max-width: 991px) {
  .cs_footer_main.cs_version_4 {
    padding-bottom: 60px;
  }
}
.cs_footer_main .cs_social_btns.cs_style_1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  padding: 0;
}
.cs_footer_main .cs_social_btns.cs_style_1.cs_version_2 a:hover {
  background-color: var(--accent_v2);
}
.cs_footer_main .cs_social_btns.cs_style_1.cs_version_3 a:hover {
  background-color: var(--accent_v3);
}
.cs_footer_main .cs_social_btns.cs_style_1 a {
  width: 37px;
  height: 37px;
  border-radius: 50%;
  background-color: rgba(12, 184, 182, 0.2);
}
.cs_footer_main .cs_social_btns.cs_style_1 a:hover {
  background-color: var(--accent);
  color: var(--white);
}
.cs_footer_main .cs_footer_main_col {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 15px 25px;
}
.cs_footer_main .cs_footer_main_col:not(:last-child) {
  border-right: 1px solid rgba(255, 255, 255, 0.2);
}

@media (max-width: 1399px) {
  .cs_footer_widget .cs_fs_18 {
    font-size: 16px;
  }
}
.cs_footer_widget .cs_app_title {
  color: rgba(255, 255, 255, 0.7);
}
.cs_footer_widget .cs_app_links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 6px;
}
.cs_footer_widget .cs_app_links img {
  margin: 0;
}

.cs_footer_widget_title {
  margin-bottom: 35px;
}
@media (max-width: 991px) {
  .cs_footer_widget_title {
    margin-bottom: 20px;
  }
}

.cs_text_widget {
  width: 100%;
  max-width: 260px;
}
.cs_text_widget.cs_version_2 {
  max-width: 280px;
}
.cs_text_widget img {
  margin: -10px 0 35px;
}
.cs_text_widget p {
  margin-bottom: 25px;
}

.cs_post_widget {
  max-width: 330px;
  padding-left: 40px;
}
@media (max-width: 991px) {
  .cs_post_widget {
    max-width: 100%;
    padding-left: 0;
  }
}
.cs_post_widget hr {
  margin: 25px 0;
}

.cs_menu_widget li:not(:last-child) {
  margin-bottom: 10px;
}
.cs_menu_widget.cs_version_2 a:hover {
  color: var(--accent_v2);
}
.cs_menu_widget.cs_version_3 {
  padding-left: 60px;
}
@media (max-width: 1199px) {
  .cs_menu_widget.cs_version_3 {
    padding-left: 30px;
  }
}
@media (max-width: 991px) {
  .cs_menu_widget.cs_version_3 {
    padding-left: 0;
  }
}
.cs_menu_widget.cs_version_3 a {
  color: var(--white);
  font-weight: 400;
  -webkit-transition: font-weight 0.4s ease;
  transition: font-weight 0.4s ease;
}
.cs_menu_widget.cs_version_3 a:hover {
  text-decoration: underline;
}
.cs_menu_widget .cs_img_gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}
.cs_menu_widget .cs_img_gallery .cs_instagram_thumb {
  position: relative;
}
.cs_menu_widget .cs_img_gallery .cs_instagram_thumb:hover .cs_instagram_icon {
  -webkit-transform: translate(-50%, -50%) scaleX(1);
          transform: translate(-50%, -50%) scaleX(1);
}
.cs_menu_widget .cs_img_gallery img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}
.cs_menu_widget .cs_img_gallery .cs_instagram_icon {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 41, 53, 0.5);
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) scaleX(0);
          transform: translate(-50%, -50%) scaleX(0);
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.cs_contact_widget.cs_version_2 {
  padding-left: 45px;
}
@media (max-width: 1399px) {
  .cs_contact_widget.cs_version_2 {
    padding-left: 0;
  }
  .cs_contact_widget.cs_version_2 br {
    display: none;
  }
}
.cs_contact_widget.cs_version_2 li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.cs_contact_widget.cs_version_2 li p {
  margin-bottom: 2px;
}
.cs_contact_widget.cs_version_2 li p:last-child {
  margin-bottom: 0;
}
.cs_contact_widget.cs_version_2 li h4 {
  margin-bottom: 0;
  font-size: 18px;
}
.cs_contact_widget.cs_version_2 li:not(:last-child) {
  margin-bottom: 15px;
}
.cs_contact_widget.cs_version_2 img {
  width: 25px;
  -webkit-filter: brightness(0) invert(1);
          filter: brightness(0) invert(1);
  margin-top: 13px;
  margin-right: 18px;
}

.cs_contact_widget.cs_version_3 .cs_footer_widget_address {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
@media (max-width: 767px) {
  .cs_contact_widget.cs_version_3 .cs_footer_widget_address {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    row-gap: 24px;
  }
  .cs_contact_widget.cs_version_3 .cs_footer_widget_address br {
    display: none;
  }
}
.cs_contact_widget.cs_version_3 li {
  font-size: 20px;
  font-weight: 600;
}
.cs_contact_widget.cs_version_3 li i {
  margin-right: 7px;
}

.cs_newsletter_widget .cs_footer_widget_title {
  margin-bottom: 0;
}
.cs_newsletter_widget .cs_newsletter_subtitle {
  margin-bottom: 41px;
}
.cs_newsletter_widget .cs_newsletter_form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.cs_newsletter_widget .cs_newsletter_form_field {
  width: 100%;
  height: 45px;
  padding: 8px 20px;
  border: none;
  outline: none;
  border-radius: 2px 0 0 2px;
}
.cs_newsletter_widget .cs_btn.cs_style_1 {
  width: 48px;
  height: 45px;
  background-color: var(--accent_v3);
  color: var(--white);
  padding: 0;
  border-radius: 0 2px 2px 0;
}
.cs_newsletter_widget .cs_btn.cs_style_1 img {
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_newsletter_widget .cs_btn.cs_style_1:hover {
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
}
.cs_newsletter_widget .cs_btn.cs_style_1:hover img {
  -webkit-transform: rotate(25deg);
          transform: rotate(25deg);
}

.cs_message_widget .cs_form_field {
  background-color: var(--white);
  padding: 9px 10px;
  border: none;
  outline: none;
  border-radius: 2px;
  resize: none;
}
.cs_message_widget .cs_form_field::-webkit-input-placeholder {
  color: var(--primary);
}
.cs_message_widget .cs_form_field::-moz-placeholder {
  color: var(--primary);
}
.cs_message_widget .cs_form_field:-ms-input-placeholder {
  color: var(--primary);
}
.cs_message_widget .cs_form_field::-ms-input-placeholder {
  color: var(--primary);
}
.cs_message_widget .cs_form_field::placeholder {
  color: var(--primary);
}
.cs_message_widget .cs_btn.cs_style_1 {
  border-radius: 2px;
}
.cs_message_widget + iframe {
  width: 100%;
  height: 100%;
}

.cs_footer_bottom {
  padding: 24px 0;
  border-top: 1px solid rgba(255, 255, 255, 0.4);
}
@media (max-width: 767px) {
  .cs_footer_bottom {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    text-align: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
.cs_footer_bottom .cs_footer_bottom_text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 5px 30px;
}
@media (max-width: 575px) {
  .cs_footer_bottom .cs_footer_bottom_text {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    text-align: center;
  }
}
.cs_footer_bottom.cs_version_4 {
  border: none;
}
.cs_footer_bottom.cs_version_4 .cs_profile_link {
  color: var(--accent_v4);
}
.cs_footer_bottom.cs_version_4 .cs_profile_link.cs_accent_color_v3 {
  color: var(--accent_v3);
}
.cs_footer_bottom.cs_version_4 .cs_profile_link:hover {
  text-decoration: underline;
}
.cs_footer_bottom .cs_footer_links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 25px;
}
.cs_footer_bottom .cs_footer_links.cs_version_2 a:hover {
  color: var(--accent_v2);
  text-decoration: underline;
}
.cs_footer_bottom .cs_footer_links.cs_version_4 a:hover {
  color: var(--accent_v4);
}
.cs_footer_bottom.cs_version_3 {
  border-top: 0;
}
.cs_footer_bottom.cs_version_3 a {
  color: var(--accent_v3);
}
.cs_footer_bottom.cs_version_3 a:hover {
  text-decoration: underline;
}

.cs_footer_links.cs_version_4.cs_color_1 a:hover {
  color: var(--accent_v3);
}

.cs_copyright a {
  color: var(--accent);
}
.cs_copyright a:hover {
  text-decoration: underline;
}
.cs_copyright.cs_version_2 a {
  color: var(--accent_v2);
}

.cs_text_widget + .cs_contact_widget {
  margin-top: 30px;
}

.cs_newsletter_1_wrap {
  position: relative;
  background-color: #ecf9f9;
}
.cs_newsletter_1_wrap.cs_version_4 {
  background-color: transparent;
}
.cs_newsletter_1_wrap.cs_version_4::before {
  background-color: #f2f6fd;
}
.cs_newsletter_1_wrap::before {
  content: "";
  position: absolute;
  height: 50%;
  width: 100%;
  background-color: var(--white);
  top: 0;
  left: 0;
}
.cs_newsletter_1_wrap.cs_before_none::before {
  background-color: transparent;
}
.cs_newsletter_1_wrap > * {
  position: relative;
  z-index: 2;
}

.cs_newsletter.cs_style_1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 50px;
  gap: 25px;
  border-radius: 5px;
}
@media (max-width: 991px) {
  .cs_newsletter.cs_style_1 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}
@media (max-width: 767px) {
  .cs_newsletter.cs_style_1 {
    padding: 40px 15px;
  }
}
.cs_newsletter.cs_style_1 .cs_newsletter_left {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
}
@media (max-width: 575px) {
  .cs_newsletter.cs_style_1 .cs_newsletter_left {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .cs_newsletter.cs_style_1 .cs_newsletter_left br {
    display: none;
  }
}
.cs_newsletter.cs_style_1 .cs_newsletter_icon {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  width: 55px;
}
.cs_newsletter.cs_style_1 .cs_newsletter_form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  max-width: 610px;
  width: 100%;
  gap: 20px;
}
.cs_newsletter.cs_style_1 .cs_newsletter_form .cs_btn.cs_style_1 {
  border-radius: 5px;
}
.cs_newsletter.cs_style_1 .cs_newsletter_form .cs_btn.cs_style_1:hover {
  background-color: var(--primary);
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
}
@media (max-width: 575px) {
  .cs_newsletter.cs_style_1 .cs_newsletter_form {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  .cs_newsletter.cs_style_1 .cs_newsletter_form .cs_btn.cs_style_1 {
    width: 100%;
  }
}
.cs_newsletter.cs_style_1 .cs_newsletter_form_field {
  border: none;
  height: 55px;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  outline: none;
  padding: 5px 20px;
}
@media (max-width: 575px) {
  .cs_newsletter.cs_style_1 .cs_newsletter_form_field {
    width: 100%;
    -webkit-box-flex: 0;
        -ms-flex: none;
            flex: none;
  }
}

.cs_newsletter.cs_style_2 {
  overflow: hidden;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  min-height: 300px;
  background-color: aquamarine;
}
@media (max-width: 767px) {
  .cs_newsletter.cs_style_2 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    padding-bottom: 15px;
  }
}
.cs_newsletter.cs_style_2 .cs_newsletter_shape {
  width: 55%;
  height: 300px;
  background-color: var(--accent_v3);
  position: absolute;
  top: 0;
  left: 0;
  -webkit-clip-path: polygon(0 0, 100% 0, 84% 100%, 0% 100%);
          clip-path: polygon(0 0, 100% 0, 84% 100%, 0% 100%);
  z-index: 2;
  overflow: hidden;
}
@media (max-width: 767px) {
  .cs_newsletter.cs_style_2 .cs_newsletter_shape {
    height: 100%;
    min-height: 300px;
  }
}
.cs_newsletter.cs_style_2 .cs_newsletter_thumb {
  position: absolute;
  background-color: var(--accent_v3);
  height: 300px;
  width: 55%;
  right: 0;
  top: 0;
}
@media (max-width: 767px) {
  .cs_newsletter.cs_style_2 .cs_newsletter_thumb {
    height: 100%;
    min-height: 300px;
  }
}
.cs_newsletter.cs_style_2 .cs_newsletter_thumb::after {
  content: "";
  width: 100%;
  height: 100%;
  background-color: rgba(0, 41, 53, 0.4);
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
@media (max-width: 991px) {
  .cs_newsletter.cs_style_2 .cs_newsletter_thumb::after {
    opacity: 1;
  }
}
.cs_newsletter.cs_style_2 .cs_newsletter_text {
  padding: 57px 0px 57px 10%;
  position: relative;
  z-index: 3;
  max-width: 780px;
}
@media (max-width: 1600px) {
  .cs_newsletter.cs_style_2 .cs_newsletter_text {
    padding: 57px 0px 57px 5%;
    max-width: 700px;
  }
}
@media (max-width: 1399px) {
  .cs_newsletter.cs_style_2 .cs_newsletter_text {
    padding: 57px 0px 57px 3%;
    max-width: 520px;
  }
}
@media (max-width: 767px) {
  .cs_newsletter.cs_style_2 .cs_newsletter_text {
    padding: 37px 0px 57px 3%;
    text-align: center;
  }
}
.cs_newsletter.cs_style_2 .cs_call_btn {
  width: 80px;
  height: 80px;
  background-color: var(--white);
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  z-index: 4;
}
.cs_newsletter.cs_style_2 .cs_call_btn::after {
  content: "";
  width: 95px;
  height: 95px;
  border: 1px dashed var(--white);
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
@media (max-width: 1199px) {
  .cs_newsletter.cs_style_2 .cs_call_btn {
    top: 50%;
    left: 80%;
    -webkit-transform: translate(-80%, -50%);
            transform: translate(-80%, -50%);
  }
}
@media (max-width: 767px) {
  .cs_newsletter.cs_style_2 .cs_call_btn {
    position: initial;
    -webkit-transform: translate(0%, -50%);
            transform: translate(0%, -50%);
    -webkit-box-flex: 0;
        -ms-flex: none;
            flex: none;
  }
}
.cs_newsletter.cs_style_2 .cs_cta_shape {
  left: 3%;
  top: 0;
  z-index: 2;
}

.cs_footer_shape2 {
  top: 0;
  right: 0;
}

.cs_footer_shape3 {
  left: 0;
  bottom: 0;
  -webkit-animation: scale-shape 10s linear infinite;
          animation: scale-shape 10s linear infinite;
}

@-webkit-keyframes scale-shape {
  50% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
    opacity: 0.5;
  }
}

@keyframes scale-shape {
  50% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
    opacity: 0.5;
  }
}
/*--------------------------------------------------------------
  10. Sidebar
----------------------------------------------------------------*/
.cs_sidebar.cs_style_1 .cs_sidebar_widget {
  background-color: var(--gray);
  padding: 30px 30px 45px;
  margin-bottom: 40px;
}
@media (max-width: 991px) {
  .cs_sidebar.cs_style_1 .cs_sidebar_widget {
    padding: 30px 20px;
  }
}
.cs_sidebar.cs_style_1 .cs_sidebar_widget:last-child {
  margin-bottom: 0;
}
.cs_sidebar.cs_style_1 .cs_sidebar_widget.cs_search {
  padding: 22px 30px;
  margin-bottom: 25px;
  background: var(--gray);
}
.cs_sidebar.cs_style_1 .cs_sidebar_widget.cs_search input::-webkit-input-placeholder {
  color: var(--primary);
  font-weight: 500;
}
.cs_sidebar.cs_style_1 .cs_sidebar_widget.cs_search input::-moz-placeholder {
  color: var(--primary);
  font-weight: 500;
}
.cs_sidebar.cs_style_1 .cs_sidebar_widget.cs_search input:-ms-input-placeholder {
  color: var(--primary);
  font-weight: 500;
}
.cs_sidebar.cs_style_1 .cs_sidebar_widget.cs_search input::-ms-input-placeholder {
  color: var(--primary);
  font-weight: 500;
}
.cs_sidebar.cs_style_1 .cs_sidebar_widget.cs_search input::placeholder {
  color: var(--primary);
  font-weight: 500;
}
.cs_sidebar.cs_style_1 .cs_sidebar_title {
  position: relative;
  margin-bottom: 40px;
}
.cs_sidebar.cs_style_1 .cs_sidebar_title::after {
  content: "";
  width: 17%;
  height: 2px;
  background-color: var(--accent);
  position: absolute;
  left: 0;
  bottom: -8px;
}
.cs_sidebar.cs_style_1 .cs_search_box {
  height: 55px;
  background-color: var(--white);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.cs_sidebar.cs_style_1 .cs_search_box input {
  width: 80%;
  height: 100%;
  border: none;
  outline: none;
  padding-left: 20px;
}
.cs_sidebar.cs_style_1 .cs_search_box input::-webkit-input-placeholder {
  color: var(--primary);
  font-weight: 500;
}
.cs_sidebar.cs_style_1 .cs_search_box input::-moz-placeholder {
  color: var(--primary);
  font-weight: 500;
}
.cs_sidebar.cs_style_1 .cs_search_box input:-ms-input-placeholder {
  color: var(--primary);
  font-weight: 500;
}
.cs_sidebar.cs_style_1 .cs_search_box input::-ms-input-placeholder {
  color: var(--primary);
  font-weight: 500;
}
.cs_sidebar.cs_style_1 .cs_search_box input::placeholder {
  color: var(--primary);
  font-weight: 500;
}
.cs_sidebar.cs_style_1 .cs_search_box .cs_search_icon {
  width: 20%;
  height: 100%;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  border-radius: 0 4px 4px 0;
  cursor: pointer;
}
.cs_sidebar.cs_style_1 .cs_search_box .cs_search_icon i {
  -webkit-transition: all 1s cubic-bezier(0.28, 1.84, 0.55, -0.11);
  transition: all 1s cubic-bezier(0.28, 1.84, 0.55, -0.11);
}
.cs_sidebar.cs_style_1 .cs_search_box .cs_search_icon:hover i {
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}
.cs_sidebar.cs_style_1 .cs_tag_list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-column-gap: 10px;
     -moz-column-gap: 10px;
          column-gap: 10px;
  row-gap: 15px;
}
.cs_sidebar.cs_style_1 .cs_tag_link {
  min-width: 92px;
  padding: 10px 20px;
  background-color: var(--white);
  text-align: center;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
.cs_sidebar.cs_style_1 .cs_tag_link:hover {
  color: var(--white);
  background-color: var(--accent);
}

/*--------------------------------------------------------------
11. Isotope
----------------------------------------------------------------*/
.cs_isotop {
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.cs_has_gutter_24 {
  margin-left: -12px;
  margin-right: -12px;
  margin-bottom: -24px;
}
.cs_has_gutter_24 .cs_isotop_item {
  padding: 0 12px;
  margin-bottom: 24px;
}

.cs_has_gutter_74 {
  margin-left: -37px;
  margin-right: -37px;
}
.cs_has_gutter_74 .cs_isotop_item {
  padding: 0 37px;
  padding-bottom: 74px;
}

.cs_has_gutter_40 {
  margin-left: -20px;
  margin-right: -20px;
  margin-bottom: -30px;
}
.cs_has_gutter_40 .cs_isotop_item {
  padding: 0 20px;
  margin-bottom: 30px;
}

.cs_wave_1 > *:nth-child(3) {
  padding-top: 30px;
}
.cs_wave_1 > *:nth-child(4) {
  padding-top: 60px;
}

.cs_wave_2 > *:nth-child(2), .cs_wave_2 > *:nth-child(4) {
  padding-top: 50px;
}

.cs_isotop_col_6 .cs_grid_sizer,
.cs_isotop_col_6 .cs_isotop_item {
  width: 16.666667%;
}

.cs_isotop_col_5 .cs_grid_sizer,
.cs_isotop_col_5 .cs_isotop_item {
  width: 20%;
}

.cs_isotop_col_4 .cs_grid_sizer,
.cs_isotop_col_4 .cs_isotop_item {
  width: 25%;
}

.cs_isotop_col_3 .cs_grid_sizer,
.cs_isotop_col_3 .cs_isotop_item {
  width: 33.333333%;
}

.cs_isotop_col_2 .cs_grid_sizer,
.cs_isotop_col_2 .cs_isotop_item {
  width: 50%;
}

.cs_isotop_col_1 .cs_grid_sizer,
.cs_isotop_col_1 .cs_isotop_item {
  width: 100%;
}

.cs_grid_sizer {
  width: 33.333333%;
}

.cs_isotop_col_5 .cs_w20,
.cs_isotop_col_4 .cs_w20,
.cs_isotop_col_3 .cs_w20,
.cs_isotop_col_2 .cs_w20,
.cs_isotop_col_1 .cs_w20 {
  width: 20%;
}

.cs_isotop_col_5 .cs_w25,
.cs_isotop_col_4 .cs_w25,
.cs_isotop_col_3 .cs_w25,
.cs_isotop_col_2 .cs_w25,
.cs_isotop_col_1 .cs_w25 {
  width: 25%;
}

.cs_isotop_col_5 .cs_w33,
.cs_isotop_col_4 .cs_w33,
.cs_isotop_col_3 .cs_w33,
.cs_isotop_col_2 .cs_w33,
.cs_isotop_col_1 .cs_w33 {
  width: 33.333333%;
}

.cs_isotop_col_5 .cs_w50,
.cs_isotop_col_4 .cs_w50,
.cs_isotop_col_3 .cs_w50,
.cs_isotop_col_2 .cs_w50,
.cs_isotop_col_1 .cs_w50 {
  width: 50%;
}

.cs_isotop_col_5 .cs_w66,
.cs_isotop_col_4 .cs_w66,
.cs_isotop_col_3 .cs_w66,
.cs_isotop_col_2 .cs_w66,
.cs_isotop_col_1 .cs_w66 {
  width: 66.666666%;
}

.cs_isotop_col_5 .cs_w100,
.cs_isotop_col_4 .cs_w100,
.cs_isotop_col_3 .cs_w100,
.cs_isotop_col_2 .cs_w100,
.cs_isotop_col_1 .cs_w100 {
  width: 100%;
}

.cs_isotop_filter.cs_style_1 {
  margin-bottom: 40px;
}
.cs_isotop_filter.cs_style_1 li {
  margin-top: 10px;
}
.cs_isotop_filter.cs_style_1 li:not(:last-child) {
  margin-right: 15px;
}
.cs_isotop_filter.cs_style_1 li.active a, .cs_isotop_filter.cs_style_1 li:hover a {
  color: var(--white);
  background-color: var(--accent);
  border-color: var(--accent);
}
.cs_isotop_filter.cs_style_1 a {
  display: inline-block;
  position: relative;
  padding: 11px 30px;
  border: 1px solid var(--border);
  border-radius: 5px;
}
@media (max-width: 991px) {
  .cs_isotop_filter.cs_style_1 a {
    padding: 8px 18px;
  }
}
@media (max-width: 767px) {
  .cs_isotop_filter.cs_style_1 a {
    padding: 8px 15px;
  }
}
.cs_isotop_filter.cs_style_1 ul {
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}

@media screen and (max-width: 1199px) {
  .cs_isotop.cs_has_gutter_100 .cs_isotop_item {
    padding: 0 15px;
    margin-bottom: 30px;
  }
  .cs_isotop.cs_has_gutter_100 {
    margin-left: -15px;
    margin-right: -15px;
    margin-bottom: -30px;
  }
  .cs_isotop.cs_has_gutter_80 {
    margin-left: -12px;
    margin-right: -12px;
    margin-bottom: -25px;
  }
  .cs_isotop.cs_has_gutter_80 .cs_isotop_item {
    padding: 0 12px;
    margin-bottom: 25px;
  }
  .cs_isotop_col_4 .cs_grid_sizer,
  .cs_isotop_col_4 .cs_isotop_item {
    width: 33.333333%;
  }
}
@media screen and (max-width: 991px) {
  .cs_isotop_col_4 .cs_grid_sizer,
  .cs_isotop_col_4 .cs_isotop_item {
    width: 50%;
  }
  .cs_isotop_col_4 .cs_w50 {
    width: 100%;
  }
  .cs_isotop_col_3 .cs_grid_sizer,
  .cs_isotop_col_3 .cs_isotop_item {
    width: 50%;
  }
  .cs_isotop_col_2 .cs_grid_sizer,
  .cs_isotop_col_2 .cs_isotop_item {
    width: 100%;
  }
}
@media screen and (max-width: 767px) {
  .cs_isotop_col_5 .cs_w50,
  .cs_isotop_col_4 .cs_w50,
  .cs_isotop_col_3 .cs_w50,
  .cs_isotop_col_2 .cs_w50,
  .cs_isotop_col_1 .cs_w50,
  .cs_isotop_col_5 .cs_w66,
  .cs_isotop_col_4 .cs_w66,
  .cs_isotop_col_3 .cs_w66,
  .cs_isotop_col_2 .cs_w66,
  .cs_isotop_col_1 .cs_w66 {
    width: 100%;
  }
  .cs_isotop_col_5 .cs_grid_sizer,
  .cs_isotop_col_5 .cs_isotop_item {
    width: 100%;
  }
  .cs_isotop_col_4 .cs_grid_sizer,
  .cs_isotop_col_4 .cs_isotop_item {
    width: 100%;
  }
  .cs_isotop_col_3 .cs_grid_sizer,
  .cs_isotop_col_3 .cs_isotop_item {
    width: 100%;
  }
  .cs_isotop_col_2 .cs_grid_sizer,
  .cs_isotop_col_2 .cs_isotop_item {
    width: 100%;
  }
}
@media screen and (max-width: 575px) {
  .cs_isotop_filter.cs_style_1 ul {
    border: none;
  }
  .cs_isotop_filter.cs_style_1 li {
    margin-bottom: 8px;
  }
  .cs_isotop_filter.cs_style_1 li:not(:last-child) {
    margin-right: 20px;
  }
}
/*--------------------------------------------------------------
  12. Hero
----------------------------------------------------------------*/
.cs_hero.cs_style_1 {
  padding: 140px 0 0;
}
@media (max-width: 1199px) {
  .cs_hero.cs_style_1 {
    padding: 80px 0 0;
  }
}
@media (max-width: 991px) {
  .cs_hero.cs_style_1 .row {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }
}
.cs_hero.cs_style_1 .cs_hero_thumb {
  width: calc(50vw + 4px);
  min-height: 861px;
  margin-left: -4px;
  background-position: center;
  background-size: cover;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_1 .cs_hero_thumb {
    width: 100%;
    min-height: 600px;
  }
}
@media (max-width: 575px) {
  .cs_hero.cs_style_1 .cs_hero_thumb {
    min-height: 500px;
  }
}
.cs_hero.cs_style_1 .cs_hero_text {
  padding-bottom: 150px;
  position: relative;
  z-index: 1;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_1 .cs_hero_text {
    padding-bottom: 80px;
  }
}
.cs_hero.cs_style_1 .cs_hero_title {
  margin-bottom: 26px;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_1 .cs_hero_title {
    margin-bottom: 20px;
  }
}
.cs_hero.cs_style_1 .cs_hero_subtitle {
  margin-bottom: 49px;
}
@media (max-width: 1199px) {
  .cs_hero.cs_style_1 .cs_hero_subtitle {
    margin-bottom: 30px;
  }
}
@media (max-width: 1199px) and (max-width: 575px) {
  .cs_hero.cs_style_1 .cs_hero_subtitle br {
    display: none;
  }
}
.cs_hero.cs_style_1 .cs_hero_shape1 {
  top: 40%;
  left: 4%;
  -webkit-transform: translateY(-40%);
          transform: translateY(-40%);
  pointer-events: none;
  -webkit-animation: moving-shape1 20s linear infinite;
          animation: moving-shape1 20s linear infinite;
}
.cs_hero.cs_style_1 .cs_hero_top {
  -webkit-clip-path: polygon(50% 0, 100% 0, 102% 100%, 50.5% 80%, 0 100%, 0% 0%);
          clip-path: polygon(50% 0, 100% 0, 102% 100%, 50.5% 80%, 0 100%, 0% 0%);
}
@media (max-width: 991px) {
  .cs_hero.cs_style_1 .cs_hero_top {
    -webkit-clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%, 0 100%, 0% 0%);
            clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%, 0 100%, 0% 0%);
  }
}
.cs_hero.cs_style_1 .cs_hero_bottom {
  padding: 100px 0 50px;
  margin-top: -170px;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_1 .cs_hero_bottom {
    margin-top: 0;
    padding: 60px 0 70px;
  }
}
.cs_hero.cs_style_1 .cs_features_list.cs_style_1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  gap: 60px;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_1 .cs_features_list.cs_style_1 {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    gap: 40px 0;
  }
  .cs_hero.cs_style_1 .cs_features_list.cs_style_1 .cs_iconbox {
    width: 50%;
  }
}
@media (max-width: 575px) {
  .cs_hero.cs_style_1 .cs_features_list.cs_style_1 .cs_iconbox {
    width: 100%;
  }
}
.cs_hero.cs_style_1 .cs_features_list.cs_style_2 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  gap: 60px;
}

.cs_hero.cs_style_2 {
  min-height: 900px;
  margin-top: 140px;
  padding-bottom: 170px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs_hero.cs_style_2 .cs_hero_overlay {
  width: 100%;
  height: 100%;
  background: rgba(0, 41, 53, 0.45);
  position: absolute;
  left: 0;
  top: 0;
}
.cs_hero.cs_style_2 .cs_hero_shape1 {
  top: 26%;
  left: 4%;
  -webkit-transform: translateY(-26%);
          transform: translateY(-26%);
  pointer-events: none;
  -webkit-animation: moving-shape2 20s linear infinite;
          animation: moving-shape2 20s linear infinite;
}
.cs_hero.cs_style_2 .cs_hero_text {
  max-width: 600px;
  padding-bottom: 0;
  position: relative;
  z-index: 1;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_2 .cs_hero_text {
    padding-bottom: 50px;
  }
}
.cs_hero.cs_style_2 .cs_hero_title {
  line-height: 1.154em;
}
.cs_hero.cs_style_2 .cs_hero_subtitle {
  margin-bottom: 38px;
}
@media (max-width: 1199px) {
  .cs_hero.cs_style_2 .cs_hero_subtitle br {
    display: none;
  }
}
.cs_hero.cs_style_2 .cs_btn.cs_style_1 {
  padding: 13px 44px;
}

.cs_hero.cs_style_3 {
  width: 100%;
  height: 100%;
  background-color: #fff4f8;
  padding: 210px 0 174px;
  overflow: hidden;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_3 {
    padding: 155px 0 80px;
  }
  .cs_hero.cs_style_3 > img {
    margin-bottom: -10px;
  }
}
.cs_hero.cs_style_3 .cs_hero_thumb > img {
  margin-bottom: -5px;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_3 .cs_hero_thumb > img {
    margin-bottom: -25px;
  }
}
.cs_hero.cs_style_3 .cs_hero_shape1 {
  top: 95px;
  left: 0;
  pointer-events: none;
  -webkit-animation: moving-shape3 20s linear infinite;
          animation: moving-shape3 20s linear infinite;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_3 .cs_hero_shape1 {
    top: 6%;
  }
}
.cs_hero.cs_style_3 .cs_hero_text {
  position: relative;
  z-index: 1;
}
@media (max-width: 1199px) {
  .cs_hero.cs_style_3 .cs_hero_text {
    padding-right: 36px;
  }
}
@media (max-width: 991px) {
  .cs_hero.cs_style_3 .cs_hero_text {
    padding-right: 0;
  }
}
.cs_hero.cs_style_3 .cs_hero_title_mini {
  margin-bottom: 30px;
  line-height: 1.45em;
}
.cs_hero.cs_style_3 .cs_hero_title {
  line-height: 1.34em;
  margin-bottom: 27px;
}
.cs_hero.cs_style_3 .cs_hero_subtitle {
  margin-bottom: 38px;
}
@media (max-width: 1199px) {
  .cs_hero.cs_style_3 .cs_hero_subtitle br {
    display: none;
  }
}
.cs_hero.cs_style_3 .cs_btn.cs_style_1 {
  padding: 13px 44px;
}
.cs_hero.cs_style_3 .cs_animal_1 {
  left: 35%;
  bottom: -8%;
  -webkit-transform: translate(-35%, 8%);
          transform: translate(-35%, 8%);
  -webkit-animation: scale-anim 8s linear infinite;
          animation: scale-anim 8s linear infinite;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_3 .cs_animal_1 {
    bottom: 0;
  }
}
.cs_hero.cs_style_3 .cs_animal_2 {
  left: -15%;
  top: 60%;
  -webkit-transform: translate(15%, -40%);
          transform: translate(15%, -40%);
  -webkit-animation: scale-anim2 15s linear infinite;
          animation: scale-anim2 15s linear infinite;
}
@media (max-width: 575px) {
  .cs_hero.cs_style_3 .cs_animal_2 {
    left: 2%;
  }
}
.cs_hero.cs_style_3 .cs_animal_3 {
  left: -30px;
  top: 35%;
  -webkit-transform: translate(0%, -25%);
          transform: translate(0%, -25%);
  -webkit-animation: scale-anim3 15s linear infinite;
          animation: scale-anim3 15s linear infinite;
}
.cs_hero.cs_style_3 .cs_animal_4 {
  right: 20%;
  top: 5%;
  -webkit-transform: translate(-20%, -10%);
          transform: translate(-20%, -10%);
  -webkit-animation: scale-anim4 10s linear infinite;
          animation: scale-anim4 10s linear infinite;
}
.cs_hero.cs_style_3 .cs_animal_5 {
  right: 50%;
  top: 8%;
  -webkit-transform: translate(-65%, -12%);
          transform: translate(-65%, -12%);
  -webkit-animation: move-shape1 13s linear infinite;
          animation: move-shape1 13s linear infinite;
  -webkit-animation-delay: 5s;
          animation-delay: 5s;
}
.cs_hero.cs_style_3 .cs_animal_6 {
  left: -14%;
  bottom: 0%;
  -webkit-animation: move-shape2 10s linear infinite;
          animation: move-shape2 10s linear infinite;
}
@media (max-width: 575px) {
  .cs_hero.cs_style_3 .cs_animal_6 {
    left: 5%;
  }
}
.cs_hero.cs_style_3 .cs_animal_7 {
  right: -6%;
  top: 50%;
  -webkit-transform: translate(6%, -50%);
          transform: translate(6%, -50%);
  -webkit-animation: move-shape3 15s linear infinite;
          animation: move-shape3 15s linear infinite;
}
@media (max-width: 575px) {
  .cs_hero.cs_style_3 .cs_animal_7 {
    right: 0%;
  }
}

.cs_hero.cs_style_4 {
  width: 100%;
  height: 100%;
  min-height: 800px;
  margin-top: 212px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
@media (max-width: 1199px) {
  .cs_hero.cs_style_4 {
    margin-top: 0;
  }
}
@media (max-width: 991px) {
  .cs_hero.cs_style_4 {
    min-height: 670px;
  }
}
.cs_hero.cs_style_4 .cs_hero_overlay {
  width: 100%;
  height: 100%;
  background-color: #002935;
  opacity: 0.55;
  position: absolute;
  left: 0;
  top: 0;
}
.cs_hero.cs_style_4 .cs_hero_text {
  width: 100%;
  max-width: 600px;
  z-index: 1;
  padding-bottom: 110px;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_4 .cs_hero_text {
    padding-bottom: 80px;
  }
}
.cs_hero.cs_style_4 .cs_hero_title_mini {
  margin-bottom: 27px;
}
.cs_hero.cs_style_4 .cs_hero_title {
  margin-bottom: 25px;
}
.cs_hero.cs_style_4 .cs_hero_subtitle {
  margin-bottom: 38px;
}
.cs_hero.cs_style_4 .cs_hero_shape2 {
  top: 65px;
  left: 4%;
  pointer-events: none;
  -webkit-animation: moving-shape4 15s linear infinite;
          animation: moving-shape4 15s linear infinite;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_4 .cs_hero_shape2 {
    top: 6%;
  }
}

.cs_hero.cs_style_5 {
  padding-top: 140px;
}
.cs_hero.cs_style_5.cs_fs_version {
  margin-top: 140px;
  padding: 0;
}
@media (max-width: 1199px) {
  .cs_hero.cs_style_5.cs_fs_version {
    margin-top: 80px;
  }
}
.cs_hero.cs_style_5.cs_fs_version .cs_hero_text.cs_has_bg {
  background-color: hsla(0, 0%, 100%, 0.5);
  -webkit-backdrop-filter: blur(22px);
          backdrop-filter: blur(22px);
  padding: 40px 35px 60px;
  border-radius: 0 100px 0 100px;
  max-width: 800px;
  margin: auto;
}
@media (max-width: 767px) {
  .cs_hero.cs_style_5.cs_fs_version .cs_hero_text.cs_has_bg {
    border-radius: 0;
    padding: 30px 30px 40px;
  }
  .cs_hero.cs_style_5.cs_fs_version .cs_hero_text.cs_has_bg .cs_hero_title span {
    display: block;
    text-align: center;
    margin: 0 auto;
  }
}
.cs_hero.cs_style_5.cs_fs_version .cs_hero_text.cs_has_bg .cs_hero_title b {
  color: var(--accent);
}
.cs_hero.cs_style_5.cs_fs_version .cs_hero_title {
  margin-bottom: 19px;
}
.cs_hero.cs_style_5.cs_fs_version .cs_hero_title.cs_headline b:before {
  display: none;
}
.cs_hero.cs_style_5.cs_fs_version .cs_hero_btn_group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  gap: 20px;
}
@media (max-width: 450px) {
  .cs_hero.cs_style_5.cs_fs_version .cs_hero_btn_group {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  .cs_hero.cs_style_5.cs_fs_version .cs_hero_btn_group a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
  }
}
.cs_hero.cs_style_5.cs_fs_version .cs_hero_btn_group .cs_white_bg:hover {
  background-color: var(--primary);
}
.cs_hero.cs_style_5.cs_side_header {
  height: 100vh;
  margin-left: auto;
  padding-top: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_5.cs_side_header {
    width: 100%;
    height: 100%;
    padding-top: 140px;
  }
}
.cs_hero.cs_style_5.cs_parallux .cs_hero_btn_group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  gap: 20px;
}
@media (max-width: 450px) {
  .cs_hero.cs_style_5.cs_parallux .cs_hero_btn_group {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  .cs_hero.cs_style_5.cs_parallux .cs_hero_btn_group a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
  }
}
.cs_hero.cs_style_5.cs_parallux .cs_hero_btn_group .cs_white_bg:hover {
  background-color: var(--accent_v3);
}
.cs_hero.cs_style_5.cs_parallux .cs_hero_shape1 {
  width: 100px;
  left: -6%;
  bottom: 2%;
  -webkit-animation: ambulance-anim 15s linear infinite;
          animation: ambulance-anim 15s linear infinite;
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
}
.cs_hero.cs_style_5.cs_parallux .cs_hero_shape1 img {
  width: 100%;
  -webkit-filter: brightness(0) invert(1);
          filter: brightness(0) invert(1);
}
.cs_hero.cs_style_5.cs_parallux .cs_hero_shape2 {
  width: 100px;
  left: 10%;
  bottom: -12%;
  -webkit-animation: aeroplane-anim 15s linear infinite;
          animation: aeroplane-anim 15s linear infinite;
}
.cs_hero.cs_style_5.cs_parallux .cs_hero_shape2 img {
  width: 100%;
  -webkit-filter: brightness(0) invert(1);
          filter: brightness(0) invert(1);
}
@media (max-width: 450px) {
  .cs_hero.cs_style_5.cs_parallux .cs_hero_title span {
    display: block;
    text-align: center;
    margin: 0 auto;
  }
}
.cs_hero.cs_style_5 .cs_hero_top {
  height: 100%;
  min-height: 740px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%, 0 100%, 0% 0%);
          clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%, 0 100%, 0% 0%);
}
@media (max-width: 1400px) {
  .cs_hero.cs_style_5 .cs_hero_top {
    min-height: 500px;
  }
}
@media (max-width: 450px) {
  .cs_hero.cs_style_5 .cs_hero_top .cs_hero_title span {
    display: block;
    text-align: center;
    margin: 0 auto;
  }
}
.cs_hero.cs_style_5 .cs_hero_text {
  padding: 0;
  position: relative;
  z-index: 1;
}
.cs_hero.cs_style_5 .cs_hero_title {
  margin-bottom: 26px;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_5 .cs_hero_title {
    margin-bottom: 20px;
  }
}
.cs_hero.cs_style_5 .cs_hero_title b {
  font-weight: inherit;
  color: inherit;
}
.cs_hero.cs_style_5 .cs_hero_title span {
  padding: 5px 0;
  margin-top: -5px;
  margin-bottom: -5px;
}
.cs_hero.cs_style_5 .cs_hero_title.cs_headline b:before {
  content: "";
  position: absolute;
  height: 75px;
  width: 100%;
  background-image: url(../images/hero-shape.svg);
  bottom: -5px;
  z-index: -1;
}
.cs_hero.cs_style_5 .cs_hero_subtitle {
  margin-bottom: 49px;
}
@media (max-width: 1199px) {
  .cs_hero.cs_style_5 .cs_hero_subtitle {
    margin-bottom: 30px;
  }
}
@media (max-width: 1199px) and (max-width: 575px) {
  .cs_hero.cs_style_5 .cs_hero_subtitle br {
    display: none;
  }
}
.cs_hero.cs_style_5 .cs_hero_bubble1 {
  width: 600px;
  height: 600px;
  background-color: var(--accent);
  opacity: 0.5;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) scale(0);
          transform: translate(-50%, -50%) scale(0);
  -webkit-animation: bubble1-anim 12s linear infinite;
          animation: bubble1-anim 12s linear infinite;
}
.cs_hero.cs_style_5 .cs_hero_bubble2 {
  left: -250px;
  top: -200px;
  width: 600px;
  height: 600px;
}
.cs_hero.cs_style_5 .cs_hero_bubble2::after, .cs_hero.cs_style_5 .cs_hero_bubble2::before {
  content: "";
  width: 100%;
  height: 100%;
  background-color: var(--accent);
  border-radius: 50%;
  opacity: 0.3;
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  -webkit-transform: translate(-50%, -50%) scale(0);
          transform: translate(-50%, -50%) scale(0);
}
.cs_hero.cs_style_5 .cs_hero_bubble2::after {
  -webkit-animation: bubble2-after 12s linear infinite;
          animation: bubble2-after 12s linear infinite;
}
.cs_hero.cs_style_5 .cs_hero_bubble2::before {
  -webkit-animation: bubble2-before 12s linear infinite;
          animation: bubble2-before 12s linear infinite;
  -webkit-animation-delay: 6s;
          animation-delay: 6s;
}
.cs_hero.cs_style_5 .cs_hero_bubble3 {
  right: -300px;
  bottom: -300px;
  width: 600px;
  height: 600px;
}
.cs_hero.cs_style_5 .cs_hero_bubble3::after, .cs_hero.cs_style_5 .cs_hero_bubble3::before {
  content: "";
  width: 100%;
  height: 100%;
  background-color: var(--accent);
  border-radius: 50%;
  opacity: 0.3;
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  -webkit-transform: translate(-50%, -50%) scale(0);
          transform: translate(-50%, -50%) scale(0);
}
.cs_hero.cs_style_5 .cs_hero_bubble3::after {
  -webkit-animation: bubble2-after 12s linear infinite;
          animation: bubble2-after 12s linear infinite;
}
.cs_hero.cs_style_5 .cs_hero_bubble3::before {
  -webkit-animation: bubble2-before 12s linear infinite;
          animation: bubble2-before 12s linear infinite;
  -webkit-animation-delay: 6s;
          animation-delay: 6s;
}

.cs_hero.cs_style_6 {
  height: 820px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  position: relative;
  overflow: hidden;
  /* margin-top: 140px; */
}
@media (max-width: 1199px) {
  .cs_hero.cs_style_6 {
    margin-top: 80px;
    height: 750px;
  }
}
@media (max-width: 991px) {
  .cs_hero.cs_style_6 {
    height: 580px;
  }
}
@media (max-width: 767px) {
  .cs_hero.cs_style_6 {
    height: 450px;
  }
}
.cs_hero.cs_style_6 .cs_hero_bg {
  width: 100%;
  height: 100%;
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
  position: absolute;
  left: 0;
  top: 0;
  -webkit-transition: all 2s ease;
  transition: all 2s ease;
  -webkit-transition-delay: 0.7s;
          transition-delay: 0.7s;
}
.cs_hero.cs_style_6 .container {
  position: relative;
  z-index: 2;
}
.cs_hero.cs_style_6 .cs_hero_title {
  margin-bottom: 19px;
}
.cs_hero.cs_style_6 .cs_hero_subtitle {
  margin-bottom: 42px;
}
@media (max-width: 767px) {
  .cs_hero.cs_style_6 .cs_hero_subtitle br {
    display: none;
  }
}
.cs_hero.cs_style_6 .cs_hero_btn_group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 20px;
}
.cs_hero.cs_style_6 .cs_hero_btn_group .cs_primary_color:hover {
  background-color: var(--primary);
}
.cs_hero.cs_style_6.jquery-ripples {
  position: relative;
  z-index: 0;
}
.cs_hero.cs_style_6.cs_creative_dental {
  padding: 120px 0 0;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  overflow: visible;
  height: 100%;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_6.cs_creative_dental {
    padding: 80px 0 0;
  }
}
.cs_hero.cs_style_6.cs_creative_dental .cs_hero_in {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_6.cs_creative_dental .cs_hero_in {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
    row-gap: 40px;
  }
}
.cs_hero.cs_style_6.cs_creative_dental .cs_hero_text {
  padding: 0px 60px 120px 0;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_6.cs_creative_dental .cs_hero_text {
    padding: 0;
  }
  .cs_hero.cs_style_6.cs_creative_dental .cs_hero_text br {
    display: none;
  }
  .cs_hero.cs_style_6.cs_creative_dental .cs_hero_text .cs_hero_mini_title {
    margin-bottom: 12px;
  }
  .cs_hero.cs_style_6.cs_creative_dental .cs_hero_text .cs_hero_title {
    margin-bottom: 10px;
  }
  .cs_hero.cs_style_6.cs_creative_dental .cs_hero_text .cs_hero_subtitle {
    margin-bottom: 30px;
  }
}
.cs_hero.cs_style_6.cs_creative_dental .cs_hero_img {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin-bottom: -120px;
  border-radius: 100px 0 100px 0;
  position: relative;
}
@media (max-width: 991px) {
  .cs_hero.cs_style_6.cs_creative_dental .cs_hero_img {
    margin-bottom: -80px;
    width: 100%;
  }
}
.cs_hero.cs_style_6.cs_creative_dental .cs_hero_img img {
  border-radius: inherit;
  width: 100%;
}
.cs_hero.cs_style_6.cs_creative_dental .cs_play_btn.cs_style_1 {
  width: 50px;
  height: 50px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  border-radius: 50%;
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  color: var(--accent_v4);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_hero.cs_style_6.cs_creative_dental .cs_play_btn.cs_style_1::after, .cs_hero.cs_style_6.cs_creative_dental .cs_play_btn.cs_style_1::before {
  content: "";
  width: 48px;
  height: 48px;
  border-radius: 50%;
  -webkit-box-shadow: 0 0 0 4px var(--accent_v4);
          box-shadow: 0 0 0 4px var(--accent_v4);
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) scale(0.9);
          transform: translate(-50%, -50%) scale(0.9);
  -webkit-animation: playbtn-anim 3s linear infinite;
          animation: playbtn-anim 3s linear infinite;
}
.cs_hero.cs_style_6.cs_creative_dental .cs_play_btn.cs_style_1::after {
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
}
.cs_hero.cs_style_6.cs_creative_dental .cs_play_btn.cs_style_1:hover {
  -webkit-transform: translate(-50%, -50%) rotate(360deg);
          transform: translate(-50%, -50%) rotate(360deg);
}
.cs_hero.cs_style_6 canvas {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
}
.cs_hero.cs_style_6 .cs_video_wrapper {
  position: absolute;
  z-index: 0;
  min-width: 100%;
  min-height: 100%;
  left: 0px;
  top: 0px;
  overflow: hidden;
  opacity: 1;
  -webkit-transition-property: opacity;
  transition-property: opacity;
  -webkit-transition-duration: 2000ms;
          transition-duration: 2000ms;
}
.cs_hero.cs_style_6 .cs_video_overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.3);
  position: absolute;
  left: 0;
  top: 0;
}

.cs_featured_list {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-top: -170px;
}
.cs_featured_list.cs_type_1 {
  margin-top: 0px;
}
@media (max-width: 991px) {
  .cs_featured_list {
    grid-template-columns: repeat(1, 1fr);
  }
}
.cs_featured_list.cs_version_4 {
  margin-top: 0;
  width: 100%;
  max-width: 1067px;
  margin: -130px 0 0 auto;
  padding: 72px 55px 70px;
  position: relative;
  z-index: 1;
}
@media (max-width: 991px) {
  .cs_featured_list.cs_version_4 {
    padding: 50px 30px;
    grid-template-columns: repeat(3, 1fr);
  }
}
@media (max-width: 767px) {
  .cs_featured_list.cs_version_4 {
    grid-template-columns: repeat(1, 1fr);
  }
}

/* Page Header Styling*/
.cs_page_header {
  width: 100%;
  min-height: 400px;
  margin-top: 140px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
@media (max-width: 1199px) {
  .cs_page_header {
    margin-top: 80px;
  }
}
.cs_page_header .cs_page_title {
  margin-bottom: 17px;
}
.cs_page_header .breadcrumb-item.active {
  color: rgba(255, 255, 255, 0.7);
}
.cs_page_header .breadcrumb-item::before {
  color: var(--white);
}

@-webkit-keyframes scale-anim {
  50% {
    -webkit-transform: translate(-85%, -10%);
            transform: translate(-85%, -10%);
  }
}

@keyframes scale-anim {
  50% {
    -webkit-transform: translate(-85%, -10%);
            transform: translate(-85%, -10%);
  }
}
@-webkit-keyframes scale-anim2 {
  50% {
    -webkit-transform: translate(-35%, 40%) scale(1.1);
            transform: translate(-35%, 40%) scale(1.1);
  }
}
@keyframes scale-anim2 {
  50% {
    -webkit-transform: translate(-35%, 40%) scale(1.1);
            transform: translate(-35%, 40%) scale(1.1);
  }
}
@-webkit-keyframes scale-anim3 {
  50% {
    -webkit-transform: translate(-45%, -25%) scale(1.1);
            transform: translate(-45%, -25%) scale(1.1);
  }
}
@keyframes scale-anim3 {
  50% {
    -webkit-transform: translate(-45%, -25%) scale(1.1);
            transform: translate(-45%, -25%) scale(1.1);
  }
}
@-webkit-keyframes scale-anim4 {
  50% {
    -webkit-transform: translate(-100%, -20%);
            transform: translate(-100%, -20%);
  }
}
@keyframes scale-anim4 {
  50% {
    -webkit-transform: translate(-100%, -20%);
            transform: translate(-100%, -20%);
  }
}
@-webkit-keyframes move-shape1 {
  50% {
    -webkit-transform: translate(-100%, -20%);
            transform: translate(-100%, -20%);
  }
}
@keyframes move-shape1 {
  50% {
    -webkit-transform: translate(-100%, -20%);
            transform: translate(-100%, -20%);
  }
}
@-webkit-keyframes move-shape2 {
  50% {
    -webkit-transform: translate(-28%, -10%);
            transform: translate(-28%, -10%);
  }
}
@keyframes move-shape2 {
  50% {
    -webkit-transform: translate(-28%, -10%);
            transform: translate(-28%, -10%);
  }
}
@-webkit-keyframes move-shape3 {
  50% {
    -webkit-transform: translate(-40%, -50%);
            transform: translate(-40%, -50%);
  }
}
@keyframes move-shape3 {
  50% {
    -webkit-transform: translate(-40%, -50%);
            transform: translate(-40%, -50%);
  }
}
@-webkit-keyframes moving-shape {
  50% {
    -webkit-transform: translate(-40%) rotate(20deg);
            transform: translate(-40%) rotate(20deg);
  }
}
@keyframes moving-shape {
  50% {
    -webkit-transform: translate(-40%) rotate(20deg);
            transform: translate(-40%) rotate(20deg);
  }
}
@-webkit-keyframes moving-shape1 {
  50% {
    -webkit-transform: translateY(-40%) rotate(20deg);
            transform: translateY(-40%) rotate(20deg);
  }
}
@keyframes moving-shape1 {
  50% {
    -webkit-transform: translateY(-40%) rotate(20deg);
            transform: translateY(-40%) rotate(20deg);
  }
}
@-webkit-keyframes moving-shape2 {
  50% {
    -webkit-transform: translateY(-26%) rotate(20deg);
            transform: translateY(-26%) rotate(20deg);
  }
}
@keyframes moving-shape2 {
  50% {
    -webkit-transform: translateY(-26%) rotate(20deg);
            transform: translateY(-26%) rotate(20deg);
  }
}
@-webkit-keyframes moving-shape3 {
  50% {
    -webkit-transform: translate(-5px);
            transform: translate(-5px);
  }
}
@keyframes moving-shape3 {
  50% {
    -webkit-transform: translate(-5px);
            transform: translate(-5px);
  }
}
@-webkit-keyframes moving-shape4 {
  50% {
    -webkit-transform: rotate(20deg);
            transform: rotate(20deg);
  }
}
@keyframes moving-shape4 {
  50% {
    -webkit-transform: rotate(20deg);
            transform: rotate(20deg);
  }
}
@-webkit-keyframes bubble1-anim {
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
    opacity: 0;
  }
}
@keyframes bubble1-anim {
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
    opacity: 0;
  }
}
@-webkit-keyframes bubble2-anim {
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 0;
  }
}
@keyframes bubble2-anim {
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 0;
  }
}
@-webkit-keyframes bubble2-after {
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5);
    opacity: 0;
  }
}
@keyframes bubble2-after {
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5);
    opacity: 0;
  }
}
@-webkit-keyframes bubble2-before {
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5);
    opacity: 0;
  }
}
@keyframes bubble2-before {
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5);
    opacity: 0;
  }
}
@-webkit-keyframes bubble3-after {
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5);
    opacity: 0;
  }
}
@keyframes bubble3-after {
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5);
    opacity: 0;
  }
}
@-webkit-keyframes bubble3-before {
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5);
    opacity: 0;
  }
}
@keyframes bubble3-before {
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1.5);
            transform: translate(-50%, -50%) scale(1.5);
    opacity: 0;
  }
}
@-webkit-keyframes playbtn-anim {
  0% {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
    opacity: 0;
  }
  25% {
    -webkit-transform: translate(-50%, -50%) scale(1.1);
            transform: translate(-50%, -50%) scale(1.1);
    opacity: 0.5;
  }
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1.8);
            transform: translate(-50%, -50%) scale(1.8);
    opacity: 0;
  }
}
@keyframes playbtn-anim {
  0% {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
    opacity: 0;
  }
  25% {
    -webkit-transform: translate(-50%, -50%) scale(1.1);
            transform: translate(-50%, -50%) scale(1.1);
    opacity: 0.5;
  }
  100% {
    -webkit-transform: translate(-50%, -50%) scale(1.8);
            transform: translate(-50%, -50%) scale(1.8);
    opacity: 0;
  }
}
@-webkit-keyframes ambulance-anim {
  100% {
    left: 100%;
  }
}
@keyframes ambulance-anim {
  100% {
    left: 100%;
  }
}
@-webkit-keyframes aeroplane-anim {
  100% {
    left: 100%;
    bottom: 100%;
    opacity: 0;
  }
}
@keyframes aeroplane-anim {
  100% {
    left: 100%;
    bottom: 100%;
    opacity: 0;
  }
}
/*--------------------------------------------------------------
13. Before After Slider
----------------------------------------------------------------*/
.cs_before_after_wrap {
  position: relative;
}
.cs_before_after_wrap .cs_half_bg {
  background: var(--white);
  position: absolute;
  height: 40%;
  width: 100%;
  bottom: 0;
  left: 0;
}

.cs_before_after {
  max-width: 754px;
  width: 100%;
  position: relative;
  height: 444px;
  border: 7px solid var(--white);
  margin: auto;
  border-radius: 10px;
  -webkit-box-shadow: 0px 10px 80px 0px rgba(0, 55, 106, 0.2);
          box-shadow: 0px 10px 80px 0px rgba(0, 55, 106, 0.2);
  -webkit-backdrop-filter: blur(40px);
          backdrop-filter: blur(40px);
}

.cs_before_after:before,
.cs_before_after:after {
  content: "";
  position: absolute;
  height: calc(50% - 25px);
  width: 100%;
  z-index: 2;
  left: 0;
}

.cs_before_after:before {
  top: 0;
}

.cs_before_after:after {
  bottom: 0;
}

.cs_before_after .cs_single_slide {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 100%;
  background-position: top left;
  background-repeat: no-repeat;
  border-radius: inherit;
}

.cs_before_after .cs_single_slide.cs_before {
  right: 50%;
}

.cs_before_after .cs_handle_before_after {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 30px;
  left: 50%;
  margin-left: -15px;
  cursor: ew-resize;
}

.cs_handle_before_after span {
  height: 62px;
  width: 62px;
  border-radius: 62px;
  border: 2px solid var(--white);
  background: rgba(255, 255, 255, 0.7);
  -webkit-box-shadow: 0px 10px 50px 0px rgba(0, 55, 106, 0.2);
          box-shadow: 0px 10px 50px 0px rgba(0, 55, 106, 0.2);
  -webkit-backdrop-filter: blur(40px);
          backdrop-filter: blur(40px);
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.cs_before_after .cs_handle_before_after:before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  width: 2px;
  height: 100%;
  left: 50%;
  margin-left: -1px;
  background: var(--white);
}

.cs_handle_before_after span:before,
.cs_handle_before_after span:after {
  font-size: 16px;
  color: var(--accent);
  font-weight: 900;
  font-family: "font awesome 5 free";
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.cs_handle_before_after span:before {
  content: "\f053";
  left: 12px;
}

.cs_handle_before_after span:after {
  content: "\f054";
  right: 12px;
}

/*--------------------------------------------------------------
  14. Iconbox
----------------------------------------------------------------*/
.cs_iconbox.cs_style_1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 20px;
}
.cs_iconbox.cs_style_1.cs_version_4 {
  padding: 28px 35px;
}
@media (max-width: 1199px) {
  .cs_iconbox.cs_style_1.cs_version_4 {
    padding: 28px 20px;
  }
}
.cs_iconbox.cs_style_1 .cs_iconbox_title {
  text-transform: uppercase;
}

.cs_iconbox.cs_style_2 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 16px;
}
.cs_iconbox.cs_style_2 .cs_iconbox_icon {
  width: 35px;
  height: 35px;
}

.cs_iconbox.cs_style_3 {
  padding: 50px 30px 40px;
  background-color: var(--dark_blue);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
@media (max-width: 991px) {
  .cs_iconbox.cs_style_3 {
    padding: 40px 30px;
  }
}
.cs_iconbox.cs_style_3:hover {
  background-color: var(--accent_v2);
}
.cs_iconbox.cs_style_3:hover .cs_iconbox_shape {
  -webkit-filter: brightness(0) invert(1);
          filter: brightness(0) invert(1);
}
.cs_iconbox.cs_style_3:hover .cs_btn.cs_style_1 {
  background-color: var(--dark_blue);
}
.cs_iconbox.cs_style_3 .cs_iconbox_shape {
  right: 0;
  top: 0;
  pointer-events: none;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_iconbox.cs_style_3 .cs_iconbox_icon {
  width: 80px;
  height: 80px;
  margin-bottom: 25px;
}
.cs_iconbox.cs_style_3 .cs_iconbox_title {
  margin-bottom: 18px;
}
.cs_iconbox.cs_style_3 .cs_iconbox_subtitle {
  margin-bottom: 25px;
}
.cs_iconbox.cs_style_3 .cs_call_btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 15px;
}
.cs_iconbox.cs_style_3 .cs_call_btn img {
  -webkit-filter: brightness(0) invert(1);
          filter: brightness(0) invert(1);
}
.cs_iconbox.cs_style_3 .cs_shedule_list {
  row-gap: 15px;
}
.cs_iconbox.cs_style_3 .cs_shedule_list li {
  border-bottom: 1px dashed var(--white);
  padding: 0 0 10px;
}

.cs_iconbox.cs_style_4 {
  padding: 27px 10px 57px;
  border: 1px solid var(--accent_v3);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_iconbox.cs_style_4 .cs_iconbox_icon {
  width: 105px;
  height: 105px;
  margin: 0 auto 20px;
}
.cs_iconbox.cs_style_4 .cs_iconbox_title {
  font-size: 22px;
}
@media (max-width: 1399px) {
  .cs_iconbox.cs_style_4 .cs_iconbox_title {
    font-size: 20px;
  }
}
.cs_iconbox.cs_style_4 .cs_iconbox_title,
.cs_iconbox.cs_style_4 .cs_iconbox_subtitle,
.cs_iconbox.cs_style_4 img {
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_iconbox.cs_style_4:hover {
  background-color: var(--accent_v3);
}
.cs_iconbox.cs_style_4:hover > * {
  color: var(--white);
}
.cs_iconbox.cs_style_4:hover > * img {
  -webkit-filter: brightness(0) invert(1);
          filter: brightness(0) invert(1);
}

.cs_iconbox.cs_style_5 .cs_iconbox_title {
  margin-bottom: 14px;
}

.cs_iconbox.cs_style_6 {
  height: 100%;
  padding: 50px 10px 52px;
  border: 1px solid var(--accent_v4);
  position: relative;
  z-index: 1;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  border-radius: 5px;
}
.cs_iconbox.cs_style_6 .cs_iconbox_icon {
  margin-bottom: 31px;
}
.cs_iconbox.cs_style_6 .cs_iconbox_title {
  margin-bottom: 22px;
}
.cs_iconbox.cs_style_6 .cs_iconbox_title,
.cs_iconbox.cs_style_6 .cs_iconbox_subtitle,
.cs_iconbox.cs_style_6 img {
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_iconbox.cs_style_6.cs_thumb {
  padding: 0;
  border: none;
}
.cs_iconbox.cs_style_6.cs_thumb img {
  width: 100%;
  height: 100%;
}
.cs_iconbox.cs_style_6:hover {
  background-color: var(--accent_v4);
}
.cs_iconbox.cs_style_6:hover > * {
  color: var(--white);
}
.cs_iconbox.cs_style_6:hover > * img {
  -webkit-filter: brightness(0) invert(1);
          filter: brightness(0) invert(1);
}
.cs_iconbox.cs_style_6.cs_color_1 {
  border-color: var(--accent_v3);
}
.cs_iconbox.cs_style_6.cs_color_1:hover {
  background-color: var(--accent_v3);
}

.cs_iconbox_4_wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
@media (max-width: 1199px) {
  .cs_iconbox_4_wrap {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    gap: 30px;
  }
  .cs_iconbox_4_wrap > div {
    width: 100%;
  }
}
.cs_iconbox_4_wrap > * {
  width: 22%;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
}
@media (max-width: 1199px) {
  .cs_iconbox_4_wrap > * {
    width: 25%;
  }
}
@media (max-width: 991px) {
  .cs_iconbox_4_wrap > * {
    width: 100%;
  }
}
.cs_iconbox_4_wrap > *:nth-child(2) {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
.cs_iconbox_4_wrap .cs_iconbox_4_thumb {
  padding: 0 24px;
}
@media (max-width: 1199px) {
  .cs_iconbox_4_wrap .cs_iconbox_4_thumb {
    padding: 0;
  }
  .cs_iconbox_4_wrap .cs_iconbox_4_thumb img {
    width: 100%;
    -o-object-fit: cover;
       object-fit: cover;
  }
}

/*--------------------------------------------------------------
  15. Posts
----------------------------------------------------------------*/
.cs_post.cs_style_1 {
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_post.cs_style_1:hover {
  -webkit-box-shadow: 0 50px 30px -40px rgba(0, 0, 0, 0.1);
          box-shadow: 0 50px 30px -40px rgba(0, 0, 0, 0.1);
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}
.cs_post.cs_style_1.cs_version_4 {
  position: relative;
  z-index: 1;
  border-radius: 5px;
  overflow: hidden;
}
.cs_post.cs_style_1.cs_version_4 .cs_posted_by {
  left: 20px;
  top: calc(100% - 63px);
}
.cs_post.cs_style_1.cs_version_4 a:hover {
  color: var(--accent_v4);
}
.cs_post.cs_style_1 .cs_post_thumb {
  display: block;
}
.cs_post.cs_style_1 .cs_post_thumb img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  border-radius: inherit;
}
.cs_post.cs_style_1 .cs_posted_by {
  position: absolute;
  left: 20px;
  top: 20px;
  padding: 8px 15px;
}
.cs_post.cs_style_1 .cs_post_info {
  padding: 20px 24px;
  border-radius: 0 0 3px 3px;
}
.cs_post.cs_style_1 .cs_post_meta_wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 40px;
  margin-bottom: 21px;
}
.cs_post.cs_style_1 .cs_post_meta {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 7px;
}
.cs_post.cs_style_1 .cs_post_title {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  margin-bottom: 8px;
}
@media (max-width: 1200px) {
  .cs_post.cs_style_1 .cs_post_title {
    font-size: 22px;
  }
}
.cs_post.cs_style_1 .cs_post_subtitle {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  margin-bottom: 28px;
}
.cs_post.cs_style_1 hr {
  margin-bottom: 16px;
}
.cs_post.cs_style_1 .cs_post_btn {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 12px;
}

.cs_post.cs_style_2 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 20px;
}
@media (max-width: 575px) {
  .cs_post.cs_style_2 {
    gap: 15px;
  }
}
.cs_post.cs_style_2 + .cs_post.cs_style_2 {
  margin-top: 20px;
}
.cs_post.cs_style_2 .cs_post_thumb {
  width: 85px;
  height: 85px;
  border-radius: 50%;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
}
.cs_post.cs_style_2 .cs_post_thumb.cs_type_2 {
  width: 110px;
  height: 110px;
}
@media (max-width: 575px) {
  .cs_post.cs_style_2 .cs_post_thumb.cs_type_2 {
    width: 80px;
    height: 80px;
  }
}
.cs_post.cs_style_2 .cs_post_thumb img {
  border-radius: inherit;
}
.cs_post.cs_style_2 .cs_post_meta {
  margin-bottom: 7px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 10px;
}
.cs_post.cs_style_2 .cs_post_meta.cs_type_2 {
  gap: 35px;
  margin-bottom: 15px;
}
.cs_post.cs_style_2 .cs_post_meta li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 8px;
}
.cs_post.cs_style_2 .cs_post_title {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}
@media (max-width: 991px) {
  .cs_post.cs_style_2 .cs_post_title br {
    display: none;
  }
}

.cs_post.cs_style_3 {
  /*---------------------------
   Slider Arrow Styling
   ---------------------------*/
  /* Bootstrap Component styling*/
}
.cs_post.cs_style_3 + .cs_post.cs_style_3 {
  margin-top: 40px;
}
.cs_post.cs_style_3 .cs_btn.cs_style_1:hover::after {
  background-color: var(--accent);
}
.cs_post.cs_style_3 .cs_post_thumb {
  display: inline-block;
  margin-bottom: 22px;
}
.cs_post.cs_style_3 .cs_play_btn {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 90px;
  height: 90px;
  border-radius: 50%;
}
.cs_post.cs_style_3 .cs_play_btn i {
  font-size: 35px;
}
.cs_post.cs_style_3 .cs_play_btn::after {
  content: "";
  width: 110px;
  height: 110px;
  border: 2px dashed var(--white);
  border-radius: 50%;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-animation: rotate-rounded 5s linear infinite;
          animation: rotate-rounded 5s linear infinite;
}
.cs_post.cs_style_3 .cs_post_title {
  line-height: 1.286em;
  margin-top: 10px;
}
.cs_post.cs_style_3 .cs_post_subtitle {
  margin-bottom: 28px;
}
.cs_post.cs_style_3 .cs_btn.cs_style_1:hover {
  background-color: var(--accent);
  color: var(--white);
}
.cs_post.cs_style_3 .cs_slider {
  position: relative;
  margin-bottom: -6px;
}
.cs_post.cs_style_3 .cs_slider_arrows {
  width: 100%;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.cs_post.cs_style_3 .cs_slider_arrows .cs_slider_arrow {
  width: 80px;
  height: 80px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  cursor: pointer;
}
.cs_post.cs_style_3 .breadcrumb-item + .breadcrumb-item::before {
  color: var(--primary);
  font-weight: 500;
}

.cs_post.cs_style_4 {
  -webkit-box-shadow: 0 6px 30px 4px rgba(0, 0, 0, 0.1);
          box-shadow: 0 6px 30px 4px rgba(0, 0, 0, 0.1);
}
.cs_post.cs_style_4 .cs_post_meta_wrap {
  width: calc(100% - 54px);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 28px;
  left: 50%;
  bottom: 20px;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  padding-right: 20px;
  border-radius: 2px;
  overflow: hidden;
}
@media (max-width: 1399px) {
  .cs_post.cs_style_4 .cs_post_meta_wrap {
    width: calc(100% - 54px);
    padding-right: 10px;
    gap: 18px;
  }
}
@media (max-width: 1199px) {
  .cs_post.cs_style_4 .cs_post_meta_wrap {
    width: 100%;
    padding-right: 10px;
    gap: 15px;
    border-radius: 0;
  }
}
@media (max-width: 991px) {
  .cs_post.cs_style_4 .cs_post_meta_wrap {
    width: -webkit-max-content;
    width: -moz-max-content;
    width: max-content;
    padding-right: 30px;
    border-radius: 2px;
    gap: 30px;
  }
}
@media (max-width: 575px) {
  .cs_post.cs_style_4 .cs_post_meta_wrap {
    gap: 10px;
  }
}
.cs_post.cs_style_4 .cs_post_meta_wrap p {
  color: var(--secondary);
}
.cs_post.cs_style_4 .cs_posted_by {
  width: 60px;
  height: 100%;
  padding: 3px 10px;
  text-align: center;
  font-size: 14px;
  font-weight: 500;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_post.cs_style_4 .cs_post_meta {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 5px;
  font-size: 14px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_post.cs_style_4 .cs_post_thumb {
  margin-bottom: 27px;
}
.cs_post.cs_style_4 .cs_post_thumb img {
  width: 100%;
}
.cs_post.cs_style_4 .cs_post_info {
  padding: 0 40px 20px 30px;
}
.cs_post.cs_style_4 .cs_post_title {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  margin-bottom: 17px;
}
.cs_post.cs_style_4 a:hover {
  color: var(--accent_v2);
}
.cs_post.cs_style_4 .cs_post_subtitle {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  margin-bottom: 30px;
}
.cs_post.cs_style_4 hr {
  margin-bottom: 20px;
}
.cs_post.cs_style_4 .cs_post_btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  font-size: 20px;
}
.cs_post.cs_style_4:hover .cs_posted_by {
  background-color: var(--accent_v2);
}
.cs_post.cs_style_4:hover .cs_post_meta {
  color: var(--accent_v2);
}

.cs_post.cs_style_5 {
  -webkit-box-shadow: 0 5px 24px -2px rgba(0, 0, 0, 0.2);
          box-shadow: 0 5px 24px -2px rgba(0, 0, 0, 0.2);
}
.cs_post.cs_style_5:nth-child(1) {
  grid-row: auto/span 3;
}
.cs_post.cs_style_5:nth-child(1) .cs_post_info {
  padding: 28px 20px 39px 30px;
}
.cs_post.cs_style_5:nth-child(1) .cs_post_title {
  margin-bottom: 21px;
}
@media (max-width: 1200px) {
  .cs_post.cs_style_5:nth-child(1) .cs_post_title {
    font-size: 22px;
  }
}
.cs_post.cs_style_5 a:hover {
  color: var(--accent_v3);
}
.cs_post.cs_style_5 .cs_post_thumb {
  display: block;
}
.cs_post.cs_style_5 .cs_post_thumb img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  border-radius: inherit;
}
.cs_post.cs_style_5 .cs_post_thumb > .cs_posted_by {
  top: 25px;
  right: 25px;
  text-align: center;
}
.cs_post.cs_style_5 .cs_posted_by {
  width: 60px;
  height: 60px;
  padding: 2px 10px;
  top: 0;
  right: 0;
  text-align: center;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_post.cs_style_5 .cs_post_info {
  width: 100%;
  max-width: 560px;
  padding: 40px 20px 39px 30px;
  border-radius: 0 0 3px 3px;
}
@media (max-width: 991px) {
  .cs_post.cs_style_5 .cs_post_info {
    max-width: 100%;
  }
}
.cs_post.cs_style_5 .cs_post_meta_wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 40px;
  margin-bottom: 17px;
}
@media (max-width: 450px) {
  .cs_post.cs_style_5 .cs_post_meta_wrap {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    gap: 5px;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}
.cs_post.cs_style_5 .cs_post_meta {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 7px;
}
.cs_post.cs_style_5 .cs_post_title {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  margin-bottom: 17px;
}
@media (max-width: 1200px) {
  .cs_post.cs_style_5 .cs_post_title {
    font-size: 22px;
  }
}
@media (max-width: 991px) {
  .cs_post.cs_style_5 .cs_post_title br {
    display: none;
  }
}
.cs_post.cs_style_5 .cs_post_title a:hover {
  color: var(--accent_v3);
}
.cs_post.cs_style_5 .cs_post_subtitle {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
}
.cs_post.cs_style_5:hover {
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
}
.cs_post.cs_style_5:hover .cs_posted_by {
  background-color: var(--accent_v3);
}

.cs_post_grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(2, 1fr);
  gap: 24px;
}
@media (max-width: 991px) {
  .cs_post_grid {
    grid-template-columns: repeat(1, 1fr);
  }
}
.cs_post_grid.cs_type_2 .cs_post.cs_style_5:nth-child(4) {
  grid-row: auto/span 3;
}
.cs_post_grid.cs_type_2 .cs_post.cs_style_5:nth-child(4) .cs_post_info {
  padding: 28px 20px 39px 30px;
}
.cs_post_grid.cs_type_2 .cs_post.cs_style_5:nth-child(4) .cs_post_title {
  margin-bottom: 21px;
}
@media (max-width: 1200px) {
  .cs_post_grid.cs_type_2 .cs_post.cs_style_5:nth-child(4) .cs_post_title {
    font-size: 22px;
  }
}

.cs_blog_shape1 {
  top: 167px;
  left: 0;
}

.cs_blog_shape2 {
  top: 220px;
  right: 0;
}
.cs_blog_shape2 img {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

@-webkit-keyframes rotate-rounded {
  50% {
    -webkit-transform: translate(-50%, -50%) scale(1.06);
            transform: translate(-50%, -50%) scale(1.06);
  }
}

@keyframes rotate-rounded {
  50% {
    -webkit-transform: translate(-50%, -50%) scale(1.06);
            transform: translate(-50%, -50%) scale(1.06);
  }
}
/* Post Details page styling */
.cs_post_details.cs_style_1 .cs_post_thumb {
  margin-bottom: 30px;
}
.cs_post_details.cs_style_1 > h2 {
  font-size: 35px;
  line-height: 1.429em;
  font-weight: 600;
}
.cs_post_details.cs_style_1 > p {
  margin-bottom: 38px;
}
.cs_post_details.cs_style_1 .cs_post_meta {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 35px;
  margin-bottom: 26px;
}
.cs_post_details.cs_style_1 .cs_post_meta li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 8px;
}
.cs_post_details.cs_style_1 .cs_post_feature {
  margin-bottom: 32px;
}
.cs_post_details.cs_style_1 article h2 {
  font-size: 30px;
  font-weight: 600;
  line-height: 1.5em;
}
.cs_post_details.cs_style_1 article h3 {
  font-size: 24px;
  font-weight: 600;
  line-height: 1.333em;
}
.cs_post_details.cs_style_1 article p {
  margin-bottom: 39px;
  width: 100%;
  max-width: 760px;
}
@media (max-width: 1399px) {
  .cs_post_details.cs_style_1 article p {
    max-width: 100%;
  }
}
.cs_post_details.cs_style_1 .cs_post_gallery {
  margin-bottom: 42px;
}
.cs_post_details.cs_style_1 .cs_sidebar_tags {
  padding: 40px 0;
  border-top: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
@media (max-width: 1199px) {
  .cs_post_details.cs_style_1 .cs_sidebar_tags {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}
.cs_post_details.cs_style_1 .cs_sidebar_tags > div:first-child {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
@media (max-width: 500px) {
  .cs_post_details.cs_style_1 .cs_sidebar_tags > div:first-child {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}
.cs_post_details.cs_style_1 .cs_sidebar_tags h3 {
  font-size: 24px;
  font-weight: 600;
  line-height: 1.333em;
  margin-right: 42px;
  margin-bottom: 0;
}
@media (max-width: 500px) {
  .cs_post_details.cs_style_1 .cs_sidebar_tags h3 {
    margin-right: 0;
    margin-bottom: 24px;
  }
}
.cs_post_details.cs_style_1 .cs_sidebar_tags .cs_tag_list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 20px;
}
@media (max-width: 399px) {
  .cs_post_details.cs_style_1 .cs_sidebar_tags .cs_tag_list {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
.cs_post_details.cs_style_1 .cs_sidebar_tags .cs_tag_link {
  display: inline-block;
  width: 112px;
  padding: 10px;
  background: var(--gray);
  text-align: center;
}
.cs_post_details.cs_style_1 .cs_sidebar_tags .cs_tag_link:hover {
  background-color: var(--accent);
  color: var(--white);
}
.cs_post_details.cs_style_1 .cs_sidebar_tags .cs_social_btns.cs_style_1 {
  padding: 0;
}
.cs_post_details.cs_style_1 .cs_sidebar_tags .cs_social_btns.cs_style_1 a {
  width: 45px;
  height: 45px;
  border: 1px solid var(--accent);
  border-radius: 50%;
  color: var(--accent);
}
.cs_post_details.cs_style_1 .cs_sidebar_tags .cs_social_btns.cs_style_1 a:hover {
  background-color: var(--accent);
  color: var(--white);
}
.cs_post_details.cs_style_1 .cs_author_bio {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 42px;
  padding: 46px 0 41px;
  border-bottom: 1px solid var(--border);
  margin-bottom: 42px;
}
@media (max-width: 991px) {
  .cs_post_details.cs_style_1 .cs_author_bio {
    gap: 20px;
  }
}
@media (max-width: 575px) {
  .cs_post_details.cs_style_1 .cs_author_bio {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
.cs_post_details.cs_style_1 .cs_author_bio .cs_author_desc {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
.cs_post_details.cs_style_1 .cs_author_bio .cs_author_thumb {
  width: 168px;
  height: 190px;
  overflow: hidden;
}
.cs_post_details.cs_style_1 .cs_author_bio h3 {
  font-size: 30px;
  font-weight: 600;
  margin-bottom: 18px;
}
.cs_post_details.cs_style_1 .cs_author_bio p {
  line-height: 1.75em;
  margin-bottom: 37px;
}
.cs_post_details.cs_style_1 .cs_author_bio .cs_social_btns.cs_style_1 {
  padding: 0;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: start;
}
.cs_post_details.cs_style_1 .cs_author_bio .cs_social_btns.cs_style_1 a {
  width: 50px;
  height: 50px;
  border: 1px solid var(--border);
  background-color: var(--gray);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 20px;
  color: var(--accent);
  border-radius: 50%;
}
.cs_post_details.cs_style_1 .cs_author_bio .cs_social_btns.cs_style_1 a:hover {
  background-color: var(--accent);
  color: var(--white);
  border-color: var(--accent);
}
.cs_post_details.cs_style_1 .cs_single_post_nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 24px;
  background: var(--gray);
  padding: 37px 27px;
  margin-bottom: 40px;
}
@media (max-width: 1199px) {
  .cs_post_details.cs_style_1 .cs_single_post_nav {
    gap: 15px;
    padding: 15px;
  }
  .cs_post_details.cs_style_1 .cs_single_post_nav br {
    display: none;
  }
}
.cs_post_details.cs_style_1 .cs_single_post_nav.cs_next_post {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
          flex-direction: row-reverse;
}
.cs_post_details.cs_style_1 .cs_single_post_nav.cs_next_post .cs_post_content {
  text-align: right;
}
.cs_post_details.cs_style_1 .cs_single_post_nav .cs_post_thumb {
  width: 85px;
  height: 85px;
  border-radius: 5px;
  overflow: hidden;
  margin-bottom: 0;
}
.cs_post_details.cs_style_1 .cs_single_post_nav .cs_post_thumb img {
  height: 100%;
}
.cs_post_details.cs_style_1 .cs_single_post_nav .cs_nav_title {
  line-height: 1.474em;
  margin-top: 5px;
}
.cs_post_details.cs_style_1 .cs_single_post_nav .cs_post_content {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
.cs_post_details.cs_style_1 .cs_single_post_nav .cs_post_btn {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 12px;
}

/* Comments Section styling */
.cs_reply_title {
  display: inline-block;
  line-height: 1.5em;
  margin-bottom: 50px;
}
.cs_reply_title::after {
  content: "";
  width: 70px;
  height: 3px;
  background-color: var(--accent);
  position: absolute;
  left: 0;
  bottom: -12px;
}

.cs_comment_list {
  padding-right: 65px;
  padding-bottom: 15px;
}
@media (max-width: 1199px) {
  .cs_comment_list {
    padding-right: 0;
  }
}

.cs_comment_body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 15px;
  padding: 0 0 30px;
}
@media (max-width: 490px) {
  .cs_comment_body {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    gap: 20px;
  }
}
.cs_comment_body:nth-child(even) {
  border-top: 1px solid var(--border);
  padding: 30px 0 30px 70px;
}
@media (max-width: 767px) {
  .cs_comment_body:nth-child(even) {
    padding-left: 0;
  }
}
.cs_comment_body:nth-child(even) p {
  max-width: 550px;
}
.cs_comment_body .cs_comment_thumb {
  border-radius: 5px;
  overflow: hidden;
}
.cs_comment_body .cs_comment_info {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
.cs_comment_body h3 {
  font-size: 20px;
  font-weight: 600;
  line-height: 1.4em;
  margin-bottom: 14px;
}
.cs_comment_body p {
  margin-bottom: 0;
}
.cs_comment_body .cs_comment_meta {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 5px;
  margin-bottom: 9px;
}
.cs_comment_body .cs_reply_btn {
  background: #efefef;
  padding: 8px 24px;
  position: absolute;
  top: 0;
  right: 0;
  font-size: 15px;
  font-weight: 500;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_comment_body .cs_reply_btn:hover {
  background-color: var(--primary);
  color: var(--white);
}

/*--------------------------------------------------------------
  16. Testimonial
----------------------------------------------------------------*/
.cs_testimonial.cs_style_1 {
  width: 100%;
  max-width: 571px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 0 auto;
  padding-top: 30px;
}
@media (max-width: 991px) {
  .cs_testimonial.cs_style_1 {
    padding-top: 20px;
  }
}
.cs_testimonial.cs_style_1 .cs_testimonial_thumb {
  width: 196px;
  height: 196px;
  border: 1px solid var(--accent);
  border-radius: 50%;
  position: relative;
}
.cs_testimonial.cs_style_1 .cs_testimonial_thumb::after {
  content: "";
  width: 254px;
  height: 254px;
  border: 1px solid var(--accent);
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
@media (max-width: 991px) {
  .cs_testimonial.cs_style_1 .cs_testimonial_thumb::after {
    width: 200px;
    height: 200px;
  }
}
.cs_testimonial.cs_style_1 .cs_testimonial_thumb img {
  border-radius: inherit;
}
@media (max-width: 991px) {
  .cs_testimonial.cs_style_1 .cs_testimonial_thumb {
    width: 160px;
    height: 160px;
    padding: 20px;
  }
}
.cs_testimonial.cs_style_1 .cs_testimonial_info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 30px 50px;
  margin-top: 35px;
  position: relative;
}
.cs_testimonial.cs_style_1 .cs_testimonial_info::after {
  content: "";
  width: 35px;
  height: 35px;
  background-color: var(--accent);
  border-radius: 5px;
  position: absolute;
  top: -16px;
  left: 50%;
  -webkit-transform: translateX(-50%) rotate(45deg);
          transform: translateX(-50%) rotate(45deg);
}
@media (max-width: 991px) {
  .cs_testimonial.cs_style_1 .cs_testimonial_info {
    padding: 30px 20px;
    margin-top: 30px;
  }
}
.cs_testimonial.cs_style_1 blockquote {
  font-weight: 500;
  margin-bottom: 22px;
}
.cs_testimonial.cs_style_1 .cs_testimonial_title {
  margin-bottom: 3px;
}
.cs_testimonial.cs_style_1 .cs_rating {
  width: 200px;
  -webkit-transform: scale(0.5);
          transform: scale(0.5);
  letter-spacing: 12px;
  margin-left: -20px;
}

.cs_testimonial.cs_style_2 {
  padding: 50px 45px;
  position: relative;
  z-index: 1;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
@media (max-width: 575px) {
  .cs_testimonial.cs_style_2 {
    padding: 30px 15px;
  }
}
.cs_testimonial.cs_style_2.cs_version_3 {
  padding: 40px 20px;
}
.cs_testimonial.cs_style_2.cs_version_3::after {
  display: none;
}
.cs_testimonial.cs_style_2.cs_version_3 .cs_testimonial_thumb {
  margin-bottom: 28px;
}
.cs_testimonial.cs_style_2.cs_version_3 blockquote {
  width: 100%;
  max-width: 530px;
  margin: 0 auto 31px;
}
.cs_testimonial.cs_style_2.cs_version_3 .cs_client_review {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-top: 33px;
}
@media (max-width: 450px) {
  .cs_testimonial.cs_style_2.cs_version_3 .cs_client_review {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
    gap: 10px;
  }
  .cs_testimonial.cs_style_2.cs_version_3 .cs_client_review .cs_rating {
    margin-left: -28px;
  }
}
.cs_testimonial.cs_style_2.cs_version_3 .cs_rating_container {
  -webkit-transform: scale(0.7);
          transform: scale(0.7);
}
.cs_testimonial.cs_style_2.cs_version_3:hover .cs_quote_icon {
  background-color: var(--primary);
}
.cs_testimonial.cs_style_2 .cs_testimonial_title {
  margin-bottom: 7px;
}
.cs_testimonial.cs_style_2 .cs_testimonial_subtitle {
  margin-bottom: 26px;
}
.cs_testimonial.cs_style_2 .cs_testimonial_thumb {
  width: 135px;
  height: 135px;
  margin: 0 auto 32px;
}
.cs_testimonial.cs_style_2 .cs_testimonial_thumb > img {
  border-radius: inherit;
}
.cs_testimonial.cs_style_2 .cs_quote_icon {
  width: 40px;
  height: 40px;
  position: absolute;
  right: 15px;
  bottom: -10px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_testimonial.cs_style_2 blockquote {
  font-size: 16px;
  font-weight: 400;
  font-style: normal;
}
.cs_testimonial.cs_style_2::after {
  content: "";
  width: 33%;
  height: 5px;
  background-color: var(--accent_v2);
  position: absolute;
  top: 0;
  left: 50%;
  -webkit-transform: translateX(-50%) scale(0);
          transform: translateX(-50%) scale(0);
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_testimonial.cs_style_2:hover {
  -webkit-box-shadow: 0 6px 30px 4px rgba(0, 0, 0, 0.1);
          box-shadow: 0 6px 30px 4px rgba(0, 0, 0, 0.1);
}
.cs_testimonial.cs_style_2:hover .cs_quote_icon {
  background-color: var(--accent_v2);
}
.cs_testimonial.cs_style_2:hover::after {
  -webkit-transform: translateX(-50%) scale(1);
          transform: translateX(-50%) scale(1);
}

.cs_testimonial.cs_style_3 {
  padding: 48px 30px 60px;
  -webkit-box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
          box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
}
.cs_testimonial.cs_style_3 .cs_avatar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 30px;
  margin-bottom: 20px;
}
.cs_testimonial.cs_style_3 .cs_avatar_thumb {
  width: 75px;
  height: 75px;
}
.cs_testimonial.cs_style_3 .cs_avatar_title {
  margin-bottom: 3px;
}
.cs_testimonial.cs_style_3 blockquote {
  font-style: normal;
}
.cs_testimonial.cs_style_3 hr {
  width: 80%;
  border-top: 2px solid var(--border);
  margin: 45px 52px 0;
}
.cs_testimonial.cs_style_3 .cs_quote_shape {
  left: 30px;
  bottom: 48px;
}

.cs_testimonial_shape1 {
  top: 40px;
  left: 0;
}

.cs_testimonial_shape2 {
  top: 120px;
  right: 0;
}
.cs_testimonial_shape2 img {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.cs_testimonial_shape3 {
  top: 0;
}

.cs_testimonial_shape4 {
  top: 80px;
  right: 0;
}
.cs_testimonial_shape4 img {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.cs_testimonial_section.cs_version_3 {
  background-color: #FFF4F8;
}

/*--------------------------------------------------------------
  17. Tab
----------------------------------------------------------------*/
.cs_tab_links.cs_style_1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 24px;
  overflow-x: auto;
  overflow-y: hidden;
  justify-content: center;
}
.cs_tab_links.cs_style_1 li a {
  width: 196px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 10px;
  padding: 33px 26px;
  border-radius: 5px;
  border: 1px solid var(--accent);
  background: rgba(12, 184, 182, 0.08);
  position: relative;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_tab_links.cs_style_1 li a:hover {
  background-color: var(--accent);
  color: var(--white);
}

.cs_tab_links.cs_style_1 li a:hover span {
  color: var(--white);
}
@media (max-width: 1199px) {
  .cs_tab_links.cs_style_1 li a {
    width: 160px;
    padding: 15px;
  }
}
.cs_tab_links.cs_style_1 li.active a {
  background-color: var(--accent);
}

.cs_tab_links.cs_style_1 li.active a span {
  color: var(--white);
}

.cs_tab_links.cs_style_1 li span {
  font-size: 16px;
  color: var(--primary);
  font-weight: 600;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  padding-top: 10px;
}

@media (max-width: 991px) {
  .cs_tab_links.cs_style_2 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    gap: 10px;
    margin-top: 40px;
    overflow-x: auto;
  }
}
@media (max-width: 575px) {
  .cs_tab_links.cs_style_2 {
    gap: 6px;
  }
}
.cs_tab_links.cs_style_2 li {
  position: absolute;
  border-radius: 50%;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.cs_tab_links.cs_style_2 li a {
  display: inline-block;
}
@media (max-width: 991px) {
  .cs_tab_links.cs_style_2 li {
    position: initial;
    -webkit-box-flex: 0;
        -ms-flex: none;
            flex: none;
    width: 60px;
    -webkit-transform: initial !important;
            transform: initial !important;
  }
}
@media (max-width: 575px) {
  .cs_tab_links.cs_style_2 li {
    width: 50px;
  }
}
@media (max-width: 450px) {
  .cs_tab_links.cs_style_2 li {
    width: 42px;
  }
}
@media (max-width: 380px) {
  .cs_tab_links.cs_style_2 li {
    width: 36px;
  }
}
.cs_tab_links.cs_style_2 li img {
  border-radius: inherit;
}
.cs_tab_links.cs_style_2 li:nth-child(1) {
  left: 4%;
  top: 20%;
  -webkit-transform: scale(0.4);
          transform: scale(0.4);
}
.cs_tab_links.cs_style_2 li:nth-child(2) {
  left: 18%;
  top: 33%;
  -webkit-transform: scale(0.55);
          transform: scale(0.55);
}
.cs_tab_links.cs_style_2 li:nth-child(3) {
  left: 8%;
  top: 65%;
  -webkit-transform: scale(0.4);
          transform: scale(0.4);
}
.cs_tab_links.cs_style_2 li:nth-child(4) {
  right: 4%;
  top: 20%;
  -webkit-transform: scale(0.55);
          transform: scale(0.55);
}
.cs_tab_links.cs_style_2 li:nth-child(5) {
  right: 19%;
  top: 33%;
  -webkit-transform: scale(0.24);
          transform: scale(0.24);
}
@media (max-width: 1399px) {
  .cs_tab_links.cs_style_2 li:nth-child(5) {
    right: 10%;
    top: 35%;
  }
}
.cs_tab_links.cs_style_2 li:nth-child(6) {
  right: 4%;
  top: 60%;
  -webkit-transform: scale(0.55);
          transform: scale(0.55);
}
@media (max-width: 1399px) {
  .cs_tab_links.cs_style_2 li:nth-child(6) {
    right: 2%;
    top: 50%;
  }
}
.cs_tab_links.cs_style_2 li:nth-child(7) {
  right: 18%;
  top: 70%;
  -webkit-transform: scale(0.4);
          transform: scale(0.4);
}
@media (max-width: 1399px) {
  .cs_tab_links.cs_style_2 li:nth-child(7) {
    right: 8%;
  }
}
.cs_tab_links.cs_style_2 li:hover {
  -webkit-transform: scale(0.7);
          transform: scale(0.7);
  z-index: 1;
}

/*--------------------------------
 Tab styling
 -------------------------------*/
.cs_tab {
  display: none;
}
.cs_tab.active {
  display: block;
}

/*--------------------------------------------------------------
  18. Portfolio
----------------------------------------------------------------*/
.cs_gallery_list {
  display: grid;
  gap: 24px;
}
.cs_gallery_list .cs_gallery_item {
  height: 380px;
}
.cs_gallery_list .cs_gallery_item > img {
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}
.cs_gallery_list .cs_gallery_item .cs_gallery_overlay {
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.2);
  opacity: 0;
  top: 0;
  left: 0;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_gallery_list .cs_gallery_item .cs_gallery_icon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  opacity: 0;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.cs_gallery_list .cs_gallery_item:hover .cs_gallery_overlay {
  opacity: 1;
}
.cs_gallery_list .cs_gallery_item:hover .cs_gallery_icon {
  opacity: 1;
}
.cs_gallery_list.cs_version_3 {
  grid-template-columns: repeat(4, 1fr);
}
@media (max-width: 767px) {
  .cs_gallery_list.cs_version_3 {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 575px) {
  .cs_gallery_list.cs_version_3 {
    grid-template-columns: repeat(1, 1fr);
  }
}
.cs_gallery_list.cs_version_3 .cs_gallery_item {
  height: auto;
}
@media (max-width: 575px) {
  .cs_gallery_list.cs_version_3 .cs_gallery_item {
    border-radius: 0 !important;
  }
}
.cs_gallery_list.cs_version_3 .cs_gallery_item:nth-child(1) {
  grid-column: auto/span 2;
  grid-row: auto/span 2;
  border-radius: 0;
}
@media (max-width: 575px) {
  .cs_gallery_list.cs_version_3 .cs_gallery_item:nth-child(1) {
    grid-column: auto/span 1;
    grid-row: auto/span 1;
  }
}
.cs_gallery_list.cs_version_3 .cs_gallery_item:nth-child(2) {
  border-radius: 0 0 10px 0;
}
.cs_gallery_list.cs_version_3 .cs_gallery_item:nth-child(3) {
  border-radius: 0 0 0 10px;
}
.cs_gallery_list.cs_version_3 .cs_gallery_item:nth-child(4) {
  border-radius: 0 10px 0 0;
}
.cs_gallery_list.cs_version_3 .cs_gallery_item:nth-child(5) {
  border-radius: 10px 0 0 0;
}
.cs_gallery_list.cs_version_3 .cs_gallery_item > img {
  height: 100%;
  height: 100%;
}
.cs_gallery_list.cs_version_4 {
  grid-template-columns: repeat(3, 1fr);
  position: relative;
  z-index: 1;
}
@media (max-width: 991px) {
  .cs_gallery_list.cs_version_4 {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 767px) {
  .cs_gallery_list.cs_version_4 {
    grid-template-columns: repeat(1, 1fr);
  }
}
.cs_gallery_list.cs_version_4 .cs_gallery_item {
  height: auto;
}
.cs_gallery_list.cs_version_4 .cs_gallery_item .cs_gallery_overlay {
  opacity: 1;
}
.cs_gallery_list.cs_version_4 .cs_gallery_item:hover .cs_gallery_overlay {
  opacity: 0;
}

.cs_project_grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
@media (max-width: 991px) {
  .cs_project_grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 575px) {
  .cs_project_grid {
    grid-template-columns: repeat(1, 1fr);
  }
}

.cs_project.cs_style_1 {
  display: block;
  position: relative;
  overflow: hidden;
}
.cs_project.cs_style_1:first-child {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.cs_project.cs_style_1:first-child .cs_project_desc {
  width: 100%;
  max-width: 445px;
  padding: 30px 30px 30px 60px;
  position: static;
  visibility: visible;
  opacity: 1;
}
@media (max-width: 1199px) {
  .cs_project.cs_style_1:first-child .cs_project_desc {
    padding: 30px 20px 40px;
  }
}
.cs_project.cs_style_1 img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}
.cs_project.cs_style_1 .cs_project_title {
  margin-bottom: 24px;
}
@media (max-width: 767px) {
  .cs_project.cs_style_1 .cs_project_title {
    font-size: 32px;
  }
}
.cs_project.cs_style_1 .cs_project_subtitle {
  margin-bottom: 31px;
}
.cs_project.cs_style_1 .cs_btn.cs_style_1 {
  border-radius: 0;
}
.cs_project.cs_style_1 .cs_project_info {
  width: 100%;
  max-width: 386px;
  padding: 40px 30px;
  position: absolute;
  left: 0;
  bottom: -50px;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_project.cs_style_1 .cs_project_info_title {
  margin-bottom: 5px;
}
.cs_project.cs_style_1 .cs_project_icon {
  width: 63px;
  height: 63px;
  border: 2px solid var(--white);
  border-radius: 50%;
  position: absolute;
  right: 30px;
  bottom: 30px;
  font-size: 20px;
  color: var(--white);
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  z-index: 2;
}
@media (max-width: 1550px) {
  .cs_project.cs_style_1 .cs_project_icon {
    top: 30px;
    right: 30px;
  }
}
.cs_project.cs_style_1:hover .cs_project_info {
  visibility: visible;
  opacity: 1;
  bottom: 0;
}
.cs_project.cs_style_1:hover .cs_project_icon {
  -webkit-transform: scale(1);
          transform: scale(1);
}

.cs_gallery_shape1 {
  right: 0;
  top: 20px;
}

.cs_gallery_shape2 {
  left: 0;
  bottom: 0;
}

/*--------------------------------------------------------------
  19. Counter
----------------------------------------------------------------*/
.cs_counting.cs_version_4 .cs_counting_overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(49, 49, 49, 0.5);
  position: absolute;
  left: 0;
  top: 0;
}

.cs_funfact.cs_style_1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 20px;
  position: relative;
  z-index: 0;
}
.cs_funfact.cs_style_1 .cs_funfact_icon {
  height: 100px;
  width: 100px;
  border-radius: 50%;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  margin-bottom: 8px;
  background-color: var(--white);
  position: relative;
}
.cs_funfact.cs_style_1 .cs_funfact_icon::after {
  content: "";
  width: 100%;
  height: 100%;
  background-color: var(--accent);
  border-radius: inherit;
  position: absolute;
  left: 0;
  bottom: -8px;
  z-index: -1;
}
@media (max-width: 1400px) {
  .cs_funfact.cs_style_1 .cs_funfact_icon {
    width: 80px;
    height: 80px;
  }
}
.cs_funfact.cs_style_1 .cs_counter_number {
  margin-bottom: 2px;
}
@media (max-width: 1400px) {
  .cs_funfact.cs_style_1 .cs_counter_title {
    font-size: 20px;
  }
}
.cs_funfact.cs_style_1.cs_version_4 .cs_funfact_text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

/*--------------------------------------------------------------
  20. Team
----------------------------------------------------------------*/
.cs_doctor.cs_style_1 {
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_doctor.cs_style_1.cs_shadow {
  -webkit-box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
          box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
  padding: 15px;
  background-color: var(--white);
  overflow: hidden;
}
.cs_doctor.cs_style_1.cs_shadow .cs_doctor_thumb {
  max-height: 390px;
}
@media (max-width: 991px) {
  .cs_doctor.cs_style_1.cs_shadow .cs_doctor_thumb {
    max-height: 307px;
  }
}
@media (max-width: 360px) {
  .cs_doctor.cs_style_1.cs_shadow .cs_doctor_thumb {
    max-height: 270px;
  }
}
.cs_doctor.cs_style_1 .cs_doctor_thumb {
  width: 100%;
  border-radius: 5px 3px 0 0;
}
.cs_doctor.cs_style_1 .cs_doctor_thumb img {
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  border-radius: inherit;
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_1 {
  height: 100%;
  padding: 40px 22px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  position: absolute;
  top: 0;
  right: 0;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: center right;
          transform-origin: center right;
  -webkit-transition: -webkit-transform 0.3s ease;
  transition: -webkit-transform 0.3s ease;
  transition: transform 0.3s ease;
  transition: transform 0.3s ease, -webkit-transform 0.3s ease;
}
@media (max-width: 1199px) {
  .cs_doctor.cs_style_1 .cs_social_btns.cs_style_1 {
    padding: 40px 26px;
  }
}
@media (max-width: 991px) {
  .cs_doctor.cs_style_1 .cs_social_btns.cs_style_1 {
    padding: 10px 30px;
    height: 70px;
    left: 0;
    top: calc(100% - 70px);
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    gap: 50px;
  }
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_1 a {
  width: 30px;
  height: 30px;
  font-size: 22px;
  color: var(--white);
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_1 a:hover {
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 {
  width: 595px;
  height: 510px;
  position: absolute;
  right: -53px;
  bottom: -353px;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: start;
  border-radius: 50%;
  padding-top: 0;
  background: var(--white);
}
@media (max-width: 991px) {
  .cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 {
    width: 500px;
    height: 490px;
  }
}
@media (max-width: 767px) {
  .cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 {
    width: 530px;
    right: -15px;
  }
}
@media (max-width: 450px) {
  .cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 {
    width: 530px;
    height: 510px;
    right: -50px;
  }
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a {
  width: 50px;
  height: 50px;
  background-color: var(--accent_v2);
  color: var(--white);
  border: 5px solid var(--white);
  border-radius: 50%;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  position: absolute;
  -webkit-transform: scale(0);
          transform: scale(0);
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a.active {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a:nth-child(1) {
  left: 32%;
  top: -10px;
}
@media (max-width: 450px) {
  .cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a:nth-child(1) {
    left: 38%;
    top: -20px;
  }
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a:nth-child(2) {
  left: 44%;
  top: -25px;
}
@media (max-width: 450px) {
  .cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a:nth-child(2) {
    left: 49%;
    top: -20px;
  }
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a:nth-child(3) {
  left: 56%;
  top: -15px;
}
@media (max-width: 450px) {
  .cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a:nth-child(3) {
    left: 60%;
    top: -10px;
  }
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a:nth-child(4) {
  left: 68%;
  top: 5px;
}
@media (max-width: 450px) {
  .cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a:nth-child(4) {
    left: 70%;
    top: 15px;
  }
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a:nth-child(5) {
  left: 79%;
  top: 45px;
  -webkit-transform: scale(1);
          transform: scale(1);
  background-color: var(--primary);
  cursor: pointer;
}
.cs_doctor.cs_style_1 .cs_social_btns.cs_style_2 a:hover {
  background-color: var(--primary);
}
.cs_doctor.cs_style_1:hover {
  -webkit-box-shadow: 0 50px 30px -40px rgba(0, 0, 0, 0.1);
          box-shadow: 0 50px 30px -40px rgba(0, 0, 0, 0.1);
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}
.cs_doctor.cs_style_1:hover .cs_social_btns.cs_style_1 {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
  -webkit-transform-origin: right center;
          transform-origin: right center;
}
.cs_doctor.cs_style_1 .cs_doctor_info {
  padding: 26px 0 29px;
}
.cs_doctor.cs_style_1 .cs_doctor_info.cs_type_2 {
  padding-top: 0;
  overflow: hidden;
  position: relative;
  z-index: 1;
  margin-top: -60px;
}
.cs_doctor.cs_style_1 .cs_doctor_title {
  margin-bottom: 3px;
}

.cs_doctor.cs_style_2 {
  -webkit-box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
          box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
  padding: 0 0 0 63px;
}
@media (max-width: 1199px) {
  .cs_doctor.cs_style_2 {
    padding: 0 0 0 30px;
  }
}
@media (max-width: 991px) {
  .cs_doctor.cs_style_2 {
    padding: 0;
  }
}
.cs_doctor.cs_style_2.cs_type_2 {
  padding: 24px 0 0px 63px;
}
@media (max-width: 1199px) {
  .cs_doctor.cs_style_2.cs_type_2 {
    padding: 24px 0 0 30px;
  }
}
@media (max-width: 991px) {
  .cs_doctor.cs_style_2.cs_type_2 {
    padding: 24px 0 0 0;
  }
}
.cs_doctor.cs_style_2.cs_type_2 .cs_doctor_thumb {
  margin-bottom: 0;
}
.cs_doctor.cs_style_2 .cs_doctor_thumb {
  margin-bottom: 17px;
}
.cs_doctor.cs_style_2 .cs_doctor_thumb img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}
.cs_doctor.cs_style_2 .cs_doctor_info {
  padding: 0 0 24px 0;
}
@media (max-width: 991px) {
  .cs_doctor.cs_style_2 .cs_doctor_info {
    padding: 0 0 24px 20px;
  }
}
.cs_doctor.cs_style_2 .cs_doctor_title {
  margin-bottom: 0;
}
.cs_doctor.cs_style_2 .cs_social_btns {
  padding: 0;
  position: absolute;
  bottom: -65px;
  right: 30px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  row-gap: 24px;
  background-color: transparent;
}
.cs_doctor.cs_style_2 .cs_social_btns.cs_type_2 {
  top: -70px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: reverse;
      -ms-flex-direction: column-reverse;
          flex-direction: column-reverse;
}
@media (max-width: 1199px) {
  .cs_doctor.cs_style_2 .cs_social_btns.cs_type_2 {
    top: -60px;
  }
}
@media (max-width: 1199px) {
  .cs_doctor.cs_style_2 .cs_social_btns {
    bottom: -60px;
    right: 15px;
    row-gap: 20px;
  }
}
.cs_doctor.cs_style_2 .cs_social_btns a {
  width: 50px;
  height: 50px;
  background-color: var(--accent_v3);
  color: var(--white);
  border: 5px solid var(--accent_v3);
  border-radius: 50%;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  -webkit-transform: scale(0);
          transform: scale(0);
}
.cs_doctor.cs_style_2 .cs_social_btns a.active {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.cs_doctor.cs_style_2 .cs_social_btns a:nth-child(5) {
  -webkit-transform: scale(1);
          transform: scale(1);
  background-color: var(--primary);
  cursor: pointer;
}
.cs_doctor.cs_style_2:hover .cs_social_btns a {
  background-color: var(--accent_v3);
}
.cs_doctor.cs_style_2:hover .cs_social_btns a:hover {
  background-color: var(--primary);
  border-color: var(--primary);
}

.cs_doctor.cs_style_3 {
  -webkit-box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
          box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
  border-radius: 4px;
  overflow: hidden;
}
.cs_doctor.cs_style_3 .cs_social_btns.cs_style_2 {
  padding: 0;
  position: absolute;
  right: 14px;
  bottom: -36px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  gap: 0;
  z-index: 1;
}
.cs_doctor.cs_style_3 .cs_social_btns.cs_style_2 a {
  width: 40px;
  height: 40px;
  background-color: var(--accent_v4);
  color: var(--white);
  visibility: hidden;
  opacity: 0;
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  position: relative;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_doctor.cs_style_3 .cs_social_btns.cs_style_2 a i {
  position: relative;
  z-index: 1;
}
.cs_doctor.cs_style_3 .cs_social_btns.cs_style_2 a::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  background-color: rgba(0, 0, 0, 0.2);
  opacity: 0;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_doctor.cs_style_3 .cs_social_btns.cs_style_2 a:hover:before {
  opacity: 1;
}
.cs_doctor.cs_style_3 .cs_social_btns.cs_style_2 a.active {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
}
.cs_doctor.cs_style_3 .cs_social_btns.cs_style_2 .share_btn {
  margin-top: 20px;
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
  padding: 12px;
  cursor: pointer;
}
.cs_doctor.cs_style_3 .cs_doctor_thumb img {
  width: 100%;
}
.cs_doctor.cs_style_3 .cs_doctor_thumb::after {
  content: "";
  width: 80%;
  height: 4px;
  background-color: var(--accent_v4);
  position: absolute;
  left: 50%;
  bottom: 0;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}
.cs_doctor.cs_style_3 .cs_doctor_info {
  padding: 30px 20px;
}
.cs_doctor.cs_style_3 .cs_doctor_title a:hover {
  color: var(--accent_v4);
}
.cs_doctor.cs_style_3.cs_color_1 .cs_social_btns.cs_style_2 a {
  background-color: var(--accent_v3);
}
.cs_doctor.cs_style_3.cs_color_1 .cs_doctor_thumb::after {
  background-color: var(--accent_v3);
}
.cs_doctor.cs_style_3.cs_color_1 .cs_doctor_title a:hover {
  color: var(--accent_v3);
}

/*--------------------------------------------------------------
  21. Pricing
----------------------------------------------------------------*/
.cs_pricing_table.cs_style_1 {
  padding: 30px 35px 40px;
}
@media (max-width: 575px) {
  .cs_pricing_table.cs_style_1 {
    padding: 30px 25px;
  }
}
.cs_pricing_table.cs_style_1:hover .cs_pricing_overlay {
  opacity: 1;
}
.cs_pricing_table.cs_style_1:hover .cs_pricing_info {
  border-color: rgba(255, 255, 255, 0.5);
}
.cs_pricing_table.cs_style_1:hover .cs_price,
.cs_pricing_table.cs_style_1:hover .cs_pricing_title,
.cs_pricing_table.cs_style_1:hover .cs_feature_icon,
.cs_pricing_table.cs_style_1:hover span {
  color: var(--white);
}
.cs_pricing_table.cs_style_1:hover .cs_btn.cs_style_1 {
  background-color: var(--white);
  color: var(--accent);
}
.cs_pricing_table.cs_style_1 .cs_pricing_overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
.cs_pricing_table.cs_style_1 .cs_pricing_info {
  position: relative;
  z-index: 1;
  padding-bottom: 24px;
  border-bottom: 1px solid var(--accent);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_pricing_table.cs_style_1 .cs_price {
  margin-bottom: 6px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_pricing_table.cs_style_1 .cs_pricing_title {
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_pricing_table.cs_style_1 .cs_pricing_feature {
  position: relative;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 10px;
  padding: 17px 0 43px;
}
.cs_pricing_table.cs_style_1 .cs_pricing_feature li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 23px;
  position: relative;
}
.cs_pricing_table.cs_style_1 .cs_pricing_feature .cs_feature_icon {
  position: absolute;
  top: 0;
  left: 0;
}
.cs_pricing_table.cs_style_1 .cs_btn.cs_style_1 {
  position: relative;
  z-index: 1;
  padding: 11px 60px;
}
@media (max-width: 575px) {
  .cs_pricing_table.cs_style_1 .cs_btn.cs_style_1 {
    padding: 11px 35px;
  }
}
.cs_pricing_table.cs_style_1.cs_version_4 .cs_pricing_info {
  border-bottom: 1px solid var(--accent_v4);
}
.cs_pricing_table.cs_style_1.cs_version_4:hover .cs_pricing_info {
  border-color: rgba(255, 255, 255, 0.5);
}
.cs_pricing_table.cs_style_1.cs_version_4:hover .cs_btn.cs_style_1 {
  color: var(--accent_v4);
}
.cs_pricing_table.cs_style_1.cs_color_1 .cs_pricing_info {
  border-color: var(--accent_v3);
}
.cs_pricing_table.cs_style_1.cs_color_1:hover .cs_btn.cs_style_1 {
  color: var(--accent_v3);
}

.cs_pricing_table.cs_style_2 {
  padding: 15px 25px 40px;
  -webkit-box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
          box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.05);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
@media (max-width: 575px) {
  .cs_pricing_table.cs_style_2 {
    padding: 30px 25px;
  }
}
.cs_pricing_table.cs_style_2 .cs_pricing_headline {
  width: 100%;
  padding: 50px 30px;
  background-color: #e5e9ea;
  border-radius: 10px;
  -webkit-clip-path: polygon(0 0, 100% 0, 100% 50%, 100% 100%, 15% 100%, 0 8%);
          clip-path: polygon(0 0, 100% 0, 100% 50%, 100% 100%, 15% 100%, 0 8%);
  margin-bottom: 25px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.cs_pricing_table.cs_style_2 .cs_pricing_headline h2 {
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
@media (max-width: 991px) {
  .cs_pricing_table.cs_style_2 .cs_pricing_headline {
    padding: 25px;
    border-radius: 5px 10px 10px 0;
  }
}
.cs_pricing_table.cs_style_2 .cs_price {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 10px;
  margin-bottom: 18px;
}
.cs_pricing_table.cs_style_2 .cs_price small {
  font-size: 20px;
  font-weight: 400;
}
.cs_pricing_table.cs_style_2 .cs_pricing_feature {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 10px;
  margin-bottom: 24px;
}
.cs_pricing_table.cs_style_2 .cs_pricing_feature li {
  position: relative;
  padding-left: 22px;
  font-weight: 500;
}
.cs_pricing_table.cs_style_2 .cs_pricing_feature img {
  position: absolute;
  left: 0;
  top: 7px;
}
.cs_pricing_table.cs_style_2:hover .cs_pricing_headline,
.cs_pricing_table.cs_style_2:hover .cs_btn.cs_style_1 {
  background-color: var(--accent_v2);
  color: var(--white);
}
.cs_pricing_table.cs_style_2:hover .cs_pricing_headline h2 {
  color: var(--white);
}

.cs_pricing_table.cs_style_3 {
  background-color: #fff4f8;
  border-radius: 0 0 2px 2px;
}
.cs_pricing_table.cs_style_3 .cs_pricing_header {
  padding: 66px 32px 40px;
  position: relative;
}
.cs_pricing_table.cs_style_3 .cs_pricing_header * {
  position: relative;
  z-index: 1;
}
.cs_pricing_table.cs_style_3 .cs_pricing_header::after {
  content: "";
  width: 100%;
  height: 100%;
  background-color: rgba(0, 41, 53, 0.55);
  position: absolute;
  left: 0;
  top: 0;
}
.cs_pricing_table.cs_style_3 .cs_pricing_header .cs_price {
  margin-bottom: 7px;
}
.cs_pricing_table.cs_style_3 .cs_pricing_desc {
  padding: 31px 32px 44px;
}
.cs_pricing_table.cs_style_3 .cs_pricing_feature {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 12px;
  margin-bottom: 32px;
}
.cs_pricing_table.cs_style_3 .cs_pricing_feature li {
  position: relative;
  padding-left: 22px;
  font-weight: 500;
}
.cs_pricing_table.cs_style_3 .cs_pricing_feature i {
  display: block;
  position: absolute;
  left: 0;
  top: 5px;
}
.cs_pricing_table.cs_style_3 .cs_btn.cs_style_1 {
  padding: 11px 60px;
}
@media (max-width: 575px) {
  .cs_pricing_table.cs_style_3 .cs_btn.cs_style_1 {
    padding: 11px 35px;
  }
}
.cs_pricing_table.cs_style_3:hover .cs_btn.cs_style_1 {
  background-color: var(--accent_v3);
}

/*--------------------------------------------------------------
  22. Card
----------------------------------------------------------------*/
.cs_card.cs_style_1 {
  -webkit-box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.1);
  padding: 47px 50px 50px;
}
.cs_card.cs_style_1 .cs_card_title {
  margin-bottom: 12px;
}
.cs_card.cs_style_1 .cs_card_subtitle {
  margin-bottom: 20px;
}
.cs_card.cs_style_1 .cs_list_title {
  margin-bottom: 15px;
}
.cs_card.cs_style_1 .cs_list.cs_style_2 {
  margin-bottom: 30px;
}
.cs_card.cs_style_1 .cs_card_thumb {
  width: 100%;
  height: 100%;
}
.cs_card.cs_style_1 img {
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  border-radius: inherit;
}
@media (max-width: 991px) {
  .cs_card.cs_style_1 .row {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }
}
@media (max-width: 1199px) {
  .cs_card.cs_style_1 {
    padding: 30px;
  }
}
@media (max-width: 575px) {
  .cs_card.cs_style_1 {
    padding: 30px 20px;
  }
}

.cs_card.cs_style_2 {
  padding: 30px;
  border: 1px solid var(--border);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  gap: 50px;
  position: relative;
  z-index: 1;
}
@media (max-width: 1199px) {
  .cs_card.cs_style_2 {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (max-width: 767px) {
  .cs_card.cs_style_2 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
    gap: 24px;
  }
}
.cs_card.cs_style_2 .cs_card_thumb {
  margin-bottom: -61px;
}
@media (max-width: 1199px) {
  .cs_card.cs_style_2 .cs_card_thumb {
    margin-bottom: 0;
  }
}
@media (max-width: 767px) {
  .cs_card.cs_style_2 .cs_card_thumb {
    width: 100%;
  }
  .cs_card.cs_style_2 .cs_card_thumb img {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
       object-fit: cover;
  }
}
.cs_card.cs_style_2 .cs_card_thumb img {
  border-radius: inherit;
}
.cs_card.cs_style_2 .cs_card_icon {
  width: 85px;
  height: 85px;
  padding: 10px;
  position: absolute;
  top: 25px;
  right: -25px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
@media (max-width: 767px) {
  .cs_card.cs_style_2 .cs_card_icon {
    right: 25px;
  }
}
.cs_card.cs_style_2 .cs_card_icon img {
  width: 40px;
  height: 40px;
  border-radius: 0;
}
.cs_card.cs_style_2 .cs_card_info {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  width: 100%;
  max-width: 274px;
  padding-bottom: 1px;
}
@media (max-width: 1199px) {
  .cs_card.cs_style_2 .cs_card_info {
    max-width: 100%;
  }
}
.cs_card.cs_style_2 .cs_card_title {
  margin-bottom: 16px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_card.cs_style_2 .cs_card_subtitle {
  margin-bottom: 35px;
}
.cs_card.cs_style_2 .cs_card_btn {
  width: 180px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 14px 30px;
  border: 1px solid var(--border);
  text-align: center;
  margin-bottom: -62px;
}
@media (max-width: 1199px) {
  .cs_card.cs_style_2 .cs_card_btn {
    margin-bottom: 0;
  }
}
.cs_card.cs_style_2 .cs_card_btn:hover {
  border-color: var(--accent_v2);
  color: var(--accent_v2);
}
.cs_card.cs_style_2:hover .cs_card_icon {
  background-color: var(--accent_v2);
}
.cs_card.cs_style_2:hover .cs_card_title {
  color: var(--accent_v2);
}

.cs_image_layer.cs_style_1 {
  padding-bottom: 6%;
  position: relative;
  text-align: left;
  max-width: 620px;
  margin-left: auto;
  margin-right: auto;
}
.cs_image_layer.cs_style_1 img {
  border-radius: 5px;
}
.cs_image_layer.cs_style_1 .cs_layer_1 {
  padding-right: 17%;
}
.cs_image_layer.cs_style_1 .cs_layer_2 {
  position: absolute;
  bottom: 0;
  right: 8px;
  padding-left: 20%;
  width: 100%;
  text-align: right;
}

/*--------------------------------------------------------------
  23. About
----------------------------------------------------------------*/
.cs_about.cs_style_1 .cs_about_thumb {
  overflow: hidden;
}
.cs_about.cs_style_1 .cs_about_thumb img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}
.cs_about.cs_style_1 .cs_about_thumb .cs_video_btn_wrap {
  width: 66px;
  height: 211px;
  padding: 13px 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: absolute;
  top: -211px;
  right: 55px;
  border-radius: 0 0 33px 33px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
@media (max-width: 575px) {
  .cs_about.cs_style_1 .cs_about_thumb .cs_video_btn_wrap {
    right: 25px;
  }
}
.cs_about.cs_style_1 .cs_about_thumb .cs_video_btn_wrap .cs_player_btn {
  width: 45px;
  height: 45px;
  background-color: var(--white);
  color: var(--accent);
  border: 7px solid rgba(9, 87, 222, 0.8);
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  -webkit-transition-delay: 0.2s;
          transition-delay: 0.2s;
}
.cs_about.cs_style_1 .cs_about_thumb .cs_video_btn_wrap.cs_accent_bg_v3 .cs_player_btn {
  border-color: #e83e72;
}
.cs_about.cs_style_1 .cs_about_thumb .cs_video_btn_wrap.cs_accent_bg_v3 .cs_player_btn svg path {
  fill: var(--accent_v3);
}
.cs_about.cs_style_1 .cs_about_thumb:hover .cs_video_btn_wrap {
  top: 0;
}
.cs_about.cs_style_1 .cs_about_thumb:hover .cs_player_btn {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.cs_about.cs_style_1 .cs_about_text {
  max-width: 600px;
}
.cs_about.cs_style_1 .cs_about_text.cs_type_2 {
  max-width: 630px;
  margin-bottom: 30px;
}
.cs_about.cs_style_1 .cs_review_progress_wrap {
  margin: 35px 0 37px;
}
.cs_about.cs_style_1 .cs_review_progress_wrap .cs_progress_text {
  margin-bottom: 12px;
}
.cs_about.cs_style_1 .cs_author_card {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 15px;
}
@media (max-width: 500px) {
  .cs_about.cs_style_1 .cs_author_card.cs_version_4 {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: start;
    margin-bottom: 38px;
  }
}
.cs_about.cs_style_1 .cs_author_card .cs_author_thumb {
  width: 93px;
  height: 93px;
  padding: 6px;
  border: 1px solid var(--accent);
  border-radius: 50%;
}
.cs_about.cs_style_1 .cs_author_card .cs_author_thumb.cs_color_1 {
  border-color: var(--accent_v3);
}
.cs_about.cs_style_1 .cs_author_card .cs_author_title {
  margin-bottom: 3px;
}
.cs_about.cs_style_1 .cs_author_card img {
  border-radius: inherit;
}
.cs_about.cs_style_1 .cs_author_card .cs_author_sign {
  width: 150px;
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  top: 50%;
  left: 320px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
@media (max-width: 500px) {
  .cs_about.cs_style_1 .cs_author_card .cs_author_sign {
    top: 85%;
    left: 105px;
    -webkit-transform: translateY(-15%);
            transform: translateY(-15%);
  }
}

.cs_about.cs_style_2 .cs_section_heading.cs_style_1 {
  width: 100%;
  max-width: 580px;
  z-index: 1;
}
.cs_about.cs_style_2 .cs_section_title {
  margin-bottom: 19px;
}
.cs_about.cs_style_2 .cs_section_subtitle {
  margin-bottom: 26px;
}
.cs_about.cs_style_2 .cs_list.cs_style_5 {
  margin-bottom: 37px;
}
.cs_about.cs_style_2 .cs_dog_img {
  bottom: 0;
  right: -100px;
  z-index: -1;
}
@media (max-width: 1199px) {
  .cs_about.cs_style_2 .cs_dog_img {
    opacity: 0.3;
  }
}

/* Doctor details page design */
.cs_doctor_bio {
  -webkit-box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 45px 0px rgba(0, 0, 0, 0.1);
}
.cs_doctor_bio .cs_doctor_thumb {
  margin-bottom: 33px;
}
.cs_doctor_bio img {
  width: 100%;
  border-radius: inherit;
}
.cs_doctor_bio .cs_doctor_info {
  padding: 0 20px 40px;
  max-width: 520px;
}
.cs_doctor_bio .cs_doctor_title {
  margin-bottom: 9px;
}
.cs_doctor_bio .cs_doctor_speciality {
  margin-bottom: 12px;
}
.cs_doctor_bio .cs_doctor_subtitle {
  margin-bottom: 32px;
}
.cs_doctor_bio .cs_social_btns {
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  padding: 0;
}
.cs_doctor_bio .cs_social_btns a {
  width: 45px;
  height: 45px;
  border: 1px solid var(--accent);
  border-radius: 50%;
  color: var(--accent);
}
.cs_doctor_bio .cs_social_btns a:hover {
  background-color: var(--accent);
  color: var(--white);
}

.cs_schedule_wrapper {
  padding: 24px 20px 40px;
  background: rgba(1, 84, 247, 0.05);
  margin-top: 40px;
}
@media (max-width: 991px) {
  .cs_schedule_wrapper {
    margin-left: 0;
    margin-top: 30px;
  }
}

.cs_shedule_title {
  margin-bottom: 18px;
  position: relative;
}
.cs_shedule_title::after {
  content: "";
  width: 60px;
  height: 2px;
  background-color: var(--accent);
  position: absolute;
  left: 0;
  bottom: -10px;
}

.cs_shedule_list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  row-gap: 10px;
}
.cs_shedule_list li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 10px 0;
  border-bottom: 1px dashed var(--secondary);
}
.cs_shedule_list li:last-child {
  padding-bottom: 0;
  border-bottom: 0;
}

.cs_doctor_bio_right {
  padding-left: 18px;
}
@media (max-width: 991px) {
  .cs_doctor_bio_right {
    padding-left: 0;
  }
}
.cs_doctor_bio_right .cs_doctor_heading {
  margin-bottom: 13px;
}
.cs_doctor_bio_right .cs_list_heading {
  margin-top: 22px;
  margin-bottom: 30px;
}
@media (max-width: 991px) {
  .cs_doctor_bio_right .cs_list_heading br {
    display: none;
  }
}
.cs_doctor_bio_right .cs_list.cs_style_2 {
  margin-bottom: 47px;
}
@media (max-width: 991px) {
  .cs_doctor_bio_right .cs_list.cs_style_2 {
    margin-bottom: 30px;
  }
}
.cs_doctor_bio_right .cs_skill_heading {
  margin-bottom: 21px;
}
.cs_doctor_bio_right .cs_timeline_heading {
  margin-bottom: 18px;
}
.cs_doctor_bio_right .cs_timeline_subtitle {
  margin-bottom: 37px;
}
.cs_doctor_bio_right .cs_progress_title {
  margin-bottom: 7px;
}
.cs_doctor_bio_right .cs_skill_list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 15px;
  margin-bottom: 56px;
}
@media (max-width: 991px) {
  .cs_doctor_bio_right .cs_skill_list {
    margin-bottom: 36px;
  }
}

@media (max-width: 575px) {
  .cs_timeline {
    padding-left: 15px;
  }
}
.cs_timeline_list {
  padding-left: 32px;
  border-left: 4px solid var(--border);
  margin-left: 100px;
  padding-bottom: 40px;
}
@media (max-width: 767px) {
  .cs_timeline_list {
    margin-left: 0;
  }
}
.cs_timeline_list .cs_timeline_item {
  position: relative;
}
.cs_timeline_list .cs_timeline_item:not(:last-child) {
  margin-bottom: 50px;
}
.cs_timeline_list .cs_timeline_title {
  margin-bottom: 12px;
}
.cs_timeline_list span {
  display: block;
  width: 35px;
  height: 35px;
  background-color: var(--white);
  border: 1px solid var(--accent);
  border-radius: 50%;
  position: absolute;
  top: 0;
  left: -52px;
}
.cs_timeline_list span::after {
  content: "";
  width: 15px;
  height: 15px;
  background-color: var(--accent);
  border-radius: inherit;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.cs_timeline_list .cs_timeline_year {
  width: 55px;
  height: 26px;
  background-color: var(--border);
  border-radius: 5px;
  -webkit-transform: skew(-20deg) translate(8px, 6px) rotate(-20deg);
          transform: skew(-20deg) translate(8px, 6px) rotate(-20deg);
  position: absolute;
  left: -140px;
  top: 10px;
}
@media (max-width: 767px) {
  .cs_timeline_list .cs_timeline_year {
    position: absolute;
    left: -70px;
    top: 35px;
    -webkit-transform: skew(0deg) translate(8px, 6px) rotate(0deg);
            transform: skew(0deg) translate(8px, 6px) rotate(0deg);
  }
}
@media (max-width: 575px) {
  .cs_timeline_list .cs_timeline_year {
    position: initial;
    -webkit-transform: initial;
            transform: initial;
    margin-bottom: 10px;
  }
}

/*--------------------------------------------------------------
  24. Video
----------------------------------------------------------------*/
.cs_video_block.cs_style_1 .cs_section_title_up {
  margin-bottom: 29px;
}
.cs_video_block.cs_style_1 .cs_section_title {
  margin-bottom: 2px;
}
.cs_video_block.cs_style_1 .cs_player_btn {
  width: 120px;
  height: 120px;
  margin: 0 auto;
}
@media (max-width: 767px) {
  .cs_video_block.cs_style_1 .cs_player_btn {
    width: 100px;
    height: 100px;
  }
}
.cs_video_block.cs_style_1 .cs_player_btn.cs_white_bg {
  width: 126px;
  height: 126px;
  border: 6px solid var(--accent_v2);
  color: var(--accent_v2);
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
@media (max-width: 767px) {
  .cs_video_block.cs_style_1 .cs_player_btn.cs_white_bg {
    width: 100px;
    height: 100px;
  }
}
.cs_video_block.cs_style_1 .cs_player_btn.cs_white_bg:hover {
  border-color: var(--white);
  background-color: var(--accent_v2);
  color: var(--white);
}
.cs_video_block.cs_style_1 .cs_player_btn img,
.cs_video_block.cs_style_1 .cs_player_btn svg {
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_video_block.cs_style_1 .cs_player_btn:hover img {
  -webkit-transform: scale(1.1) rotate(180deg);
          transform: scale(1.1) rotate(180deg);
}
.cs_video_block.cs_style_1 .cs_video_block_overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.3);
  position: absolute;
  left: 0;
  top: 0;
}

.cs_video_block.cs_style_2 img {
  width: 100%;
}
.cs_video_block.cs_style_2 .cs_play_btn {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  font-size: 35px;
  color: var(--accent_v4);
}
.cs_video_block.cs_style_2 .cs_play_btn.cs_color_1 {
  color: var(--accent_v3);
}
.cs_video_block.cs_style_2 .cs_play_btn::after {
  content: "";
  width: 110px;
  height: 110px;
  border: 2px dashed var(--white);
  border-radius: 50%;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-animation: rotate-rounded 5s linear infinite;
          animation: rotate-rounded 5s linear infinite;
}

/*--------------------------------------------------------------
  25. Contact
----------------------------------------------------------------*/
.cs_appointment_wrap {
  padding-left: 30px;
}
.cs_appointment_wrap .cs_appointment_title_up {
  margin-bottom: 10px;
}
.cs_appointment_wrap.cs_type_2 {
  padding: 30px 0;
}
@media (max-width: 991px) {
  .cs_appointment_wrap {
    padding-left: 0;
  }
}
.cs_appointment_wrap.cs_version_4 {
  padding: 60px 30px 60px 42px;
}
.cs_appointment_wrap.cs_version_4 .cs_form_field {
  background-color: transparent;
  border: 1px solid rgba(255, 255, 255, 0.45);
  border-radius: 0;
  color: var(--white);
}
.cs_appointment_wrap.cs_version_4 .cs_form_field::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .cs_form_field::-moz-placeholder {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .cs_form_field:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .cs_form_field::-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .cs_form_field::placeholder {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 span {
  color: rgba(255, 255, 255, 0.45);
}
.cs_appointment_wrap.cs_version_4 .cs_btn.cs_style_1 {
  color: var(--accent_v4);
}
.cs_appointment_wrap.cs_version_4 .cs_btn.cs_style_1.cs_color_1 {
  color: var(--accent_v3);
}
.cs_appointment_wrap.cs_version_4 .select2-container--default .select2-selection--single {
  background-color: transparent;
  border: 1px solid rgba(255, 255, 255, 0.45);
  border-radius: 0;
}
.cs_appointment_wrap.cs_version_4 .select2-container--default .select2-selection--single .select2-selection__rendered {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .select2-container--default .select2-selection--single .select2-selection__arrow b {
  border-color: rgba(255, 255, 255, 0.45);
}
.cs_appointment_wrap.cs_version_4 .cs_date,
.cs_appointment_wrap.cs_version_4 .cs_time {
  background-color: transparent;
  border: 1px solid rgba(255, 255, 255, 0.45);
  border-radius: 0;
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .cs_date::-webkit-input-placeholder, .cs_appointment_wrap.cs_version_4 .cs_time::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .cs_date::-moz-placeholder, .cs_appointment_wrap.cs_version_4 .cs_time::-moz-placeholder {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .cs_date:-ms-input-placeholder, .cs_appointment_wrap.cs_version_4 .cs_time:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .cs_date::-ms-input-placeholder, .cs_appointment_wrap.cs_version_4 .cs_time::-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .cs_date::placeholder,
.cs_appointment_wrap.cs_version_4 .cs_time::placeholder {
  color: rgba(255, 255, 255, 0.9);
}
.cs_appointment_wrap.cs_version_4 .cs_contact_shape {
  top: 0;
  right: 0;
}

.cs_appointment_thumb {
  height: 100%;
  min-height: 800px;
  margin-right: 26px;
}
@media (max-width: 991px) {
  .cs_appointment_thumb {
    margin-right: 0;
    min-height: 500px;
  }
}
.cs_appointment_thumb iframe {
  width: 100%;
  height: 100%;
}

.ca_appointment_form .cs_input_field {
  position: relative;
}
.ca_appointment_form .cs_input_field span {
  position: absolute;
  top: 12px;
  right: 15px;
  pointer-events: none;
}
.ca_appointment_form label {
  font-weight: 500;
  color: var(--primary);
  margin-bottom: 10px;
}
.ca_appointment_form .cs_form_field {
  padding: 14px 15px;
  background-color: var(--white);
  border-radius: 0;
  border: none;
  resize: none;
  border-radius: 5px;
}
.ca_appointment_form.cs_type_2 .cs_form_field {
  border-radius: 5px;
  border: 1px solid var(--border);
  resize: none;
}
.ca_appointment_form.cs_type_2 .cs_time,
.ca_appointment_form.cs_type_2 .cs_date {
  border-radius: 5px;
  border: 1px solid var(--border);
}

.cs_contact_form .cs_form_field {
  width: 100%;
  padding: 13.5px 30px;
  height: 100%;
  background-color: transparent;
  border: 1px solid var(--border);
  border-radius: 5px;
  z-index: 1;
}
.cs_contact_form .cs_form_field:focus, .cs_contact_form .cs_form_field:valid {
  border-color: var(--accent);
  background-color: transparent;
}
.cs_contact_form .cs_form_field:focus + label, .cs_contact_form .cs_form_field:valid + label {
  -webkit-transform: translate(0, -22px) scale(0.8);
          transform: translate(0, -22px) scale(0.8);
  color: var(--accent);
}
.cs_contact_form.cs_type_2 label {
  color: #b1b1b1;
  background-color: var(--gray);
}
.cs_contact_form.cs_type_2 .cs_btn.cs_style_1 {
  margin-top: 6px;
}
.cs_contact_form.cs_type_2 .cs_form_field {
  padding: 14px 17px;
  border: 1px solid var(--border);
  background: var(--gray);
  resize: none;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_contact_form.cs_type_2 .cs_form_field:focus, .cs_contact_form.cs_type_2 .cs_form_field:valid {
  background-color: transparent;
  border-color: var(--accent);
}
.cs_contact_form.cs_type_2 .cs_form_field:focus + label, .cs_contact_form.cs_type_2 .cs_form_field:valid + label {
  background-color: var(--white);
}
.cs_contact_form label {
  position: absolute;
  top: 10px;
  left: 0;
  color: var(--primary);
  padding: 0 15px;
  margin: 0 20px;
  background-color: var(--white);
  z-index: 1;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  pointer-events: none;
}
.cs_contact_form textarea {
  resize: none;
}
.cs_contact_form .cs_btn.cs_style_1 {
  margin-top: 10px;
}
@media (max-width: 767px) {
  .cs_contact_form .cs_btn.cs_style_1 {
    margin-top: 0px;
  }
}
.cs_contact_form.cs_version_3 label {
  background-color: #fff4f8;
}
.cs_contact_form.cs_version_3 .cs_form_field:focus, .cs_contact_form.cs_version_3 .cs_form_field:valid {
  border-color: var(--accent_v3);
}
.cs_contact_form.cs_version_3 .cs_form_field:focus + label, .cs_contact_form.cs_version_3 .cs_form_field:valid + label {
  color: var(--accent_v3);
}
.cs_contact_form.cs_version_4 .cs_form_field:focus, .cs_contact_form.cs_version_4 .cs_form_field:valid {
  border-color: var(--accent_v4);
}
.cs_contact_form.cs_version_4 .cs_form_field + label {
  -webkit-transform: translate(0, -22px) scale(1);
          transform: translate(0, -22px) scale(1);
  color: var(--secondary);
}
.cs_contact_form.cs_version_5 .cs_form_field:focus, .cs_contact_form.cs_version_5 .cs_form_field:valid {
  border-color: var(--accent_v3);
}
.cs_contact_form.cs_version_5 .cs_form_field + label {
  -webkit-transform: translate(0, -22px) scale(1);
          transform: translate(0, -22px) scale(1);
  color: var(--secondary);
}

.cs_google_map {
  height: 700px;
}
.cs_google_map iframe {
  width: 100%;
  height: 100%;
  display: block;
  border: none;
}

.contact_shape_wrapper {
  width: 100%;
  height: 104px;
  background-color: var(--white);
}

.cs_accordian_wrap.cs_contact {
  width: 100%;
  max-width: 420px;
  padding: 10px 45px 15px;
  position: absolute;
  top: 0;
  left: 0;
}
@media (max-width: 575px) {
  .cs_accordian_wrap.cs_contact {
    min-width: 100%;
  }
}
.cs_accordian_wrap.cs_contact .cs_accordian.cs_style_1 {
  border-radius: 0;
  margin-bottom: 0;
}
.cs_accordian_wrap.cs_contact .cs_accordian.cs_style_1:not(:last-child) {
  border-bottom: 1px solid var(--white);
}
.cs_accordian_wrap.cs_contact .cs_accordian_head {
  padding: 25px 0;
}
.cs_accordian_wrap.cs_contact .cs_accordian_head:hover {
  color: rgba(255, 255, 255, 0.8);
}
.cs_accordian_wrap.cs_contact .cs_accordian_body {
  padding: 0px 0 24px 0;
  margin-top: -5px;
}
@media (max-width: 991px) {
  .cs_accordian_wrap.cs_contact .cs_accordian_body {
    padding-bottom: 20px;
  }
}
.cs_accordian_wrap.cs_contact .cs_accordian_toggle {
  width: 25px;
  height: 2px;
  background-color: var(--white);
  right: 0;
  top: 33px;
}
.cs_accordian_wrap.cs_contact .cs_accordian_toggle::after {
  content: "";
  width: 2px;
  height: 25px;
  background-color: var(--white);
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.cs_accordian_wrap.cs_contact .cs_accordian.active .cs_accordian_head {
  pointer-events: none;
  color: rgba(255, 255, 255, 0.8);
}
.cs_accordian_wrap.cs_contact .cs_accordian.active .cs_accordian_toggle {
  background-color: rgba(255, 255, 255, 0.8);
}
.cs_accordian_wrap.cs_contact .cs_accordian.active .cs_accordian_toggle::after {
  -webkit-transform: translate(-50%, -50%) scaleY(0);
          transform: translate(-50%, -50%) scaleY(0);
}
.cs_accordian_wrap.cs_contact .cs_address_widget li {
  position: relative;
  padding-left: 30px;
}
.cs_accordian_wrap.cs_contact .cs_address_widget li i {
  position: absolute;
  top: 6px;
  left: 0;
}
.cs_accordian_wrap.cs_contact .cs_address_widget li:not(:last-child) {
  margin-bottom: 15px;
}

.cs_features_list.cs_style_3 {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 15px;
}
@media (max-width: 575px) {
  .cs_features_list.cs_style_3 {
    grid-template-columns: repeat(1, 1fr);
  }
}

/*--------------------------------------------------------------
  26. Landing
----------------------------------------------------------------*/
.cs_rounded_shape {
  padding: 20px 20px 0;
}
@media (max-width: 1199px) {
  .cs_rounded_shape {
    padding: 0;
    border-radius: 0;
  }
}

.cs_hero.cs_landing {
  width: 100%;
  height: 100%;
  min-height: 910px;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}
@media (max-width: 1199px) {
  .cs_hero.cs_landing {
    border-radius: 0;
  }
}
@media (max-width: 767px) {
  .cs_hero.cs_landing {
    min-height: 100%;
  }
}
.cs_hero.cs_landing .cs_hero_text {
  position: relative;
  z-index: 1;
}
@media (max-width: 991px) {
  .cs_hero.cs_landing .cs_hero_text {
    padding: 150px 0 30px;
  }
  .cs_hero.cs_landing .cs_hero_text br {
    display: none;
  }
}
.cs_hero.cs_landing .cs_hero_title {
  margin-bottom: 47px;
}
.cs_hero.cs_landing .cs_btn.cs_style_1 {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  border: 1px solid var(--border);
  margin-top: 50px;
}
.cs_hero.cs_landing .cs_btn.cs_style_1:hover {
  background-color: var(--white);
  color: var(--primary);
}
.cs_hero.cs_landing .cs_page_thumb_list {
  width: 65%;
  position: absolute;
  z-index: 1;
  bottom: 0px;
  right: 10px;
  pointer-events: none;
}
@media (max-width: 991px) {
  .cs_hero.cs_landing .cs_page_thumb_list {
    width: 100%;
    position: initial;
  }
}
.cs_hero.cs_landing .cs_hero_shape1 {
  width: 155px;
  height: 155px;
  border-radius: 50%;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  left: 59%;
  top: 21%;
  z-index: 2;
}
@media (max-width: 991px) {
  .cs_hero.cs_landing .cs_hero_shape1 {
    left: 49%;
    top: 33%;
  }
}
@media (max-width: 767px) {
  .cs_hero.cs_landing .cs_hero_shape1 {
    left: 70%;
    top: 50%;
    -webkit-transform: translate(-70%, -50%) scale(0.8);
            transform: translate(-70%, -50%) scale(0.8);
  }
}
@media (max-width: 575px) {
  .cs_hero.cs_landing .cs_hero_shape1 {
    left: 65%;
    top: 80%;
    -webkit-transform: translate(-65%, -80%) scale(0.5);
            transform: translate(-65%, -80%) scale(0.5);
  }
}
.cs_hero.cs_landing .cs_hero_shape1::after {
  content: "";
  width: 140px;
  height: 140px;
  border: 3px dashed var(--white);
  border-radius: 50%;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.cs_hero.cs_landing .cs_hero_shape1 .cs_fs_60 {
  margin-bottom: -8px;
}
.cs_hero.cs_landing .cs_hero_shape2 {
  left: 10%;
  top: 40%;
  -webkit-transform: translate(-10%, -40%);
          transform: translate(-10%, -40%);
  -webkit-animation: movin-object1 40s linear infinite;
          animation: movin-object1 40s linear infinite;
}
.cs_hero.cs_landing .cs_hero_shape3 {
  left: 30%;
  top: 20%;
  -webkit-transform: translate(-30%, -20%);
          transform: translate(-30%, -20%);
  -webkit-animation: movin-object2 40s linear infinite;
          animation: movin-object2 40s linear infinite;
}
.cs_hero.cs_landing .cs_hero_shape4 {
  left: 45%;
  top: 50%;
  -webkit-transform: translate(-45%, -50%);
          transform: translate(-45%, -50%);
  -webkit-animation: movin-object3 35s linear infinite;
          animation: movin-object3 35s linear infinite;
}
.cs_hero.cs_landing .cs_hero_shape5 {
  left: 20%;
  top: 80%;
  -webkit-transform: translate(-20%, -80%);
          transform: translate(-20%, -80%);
  -webkit-animation: movin-object4 40s linear infinite;
          animation: movin-object4 40s linear infinite;
}

.cs_imagebox.cs_style_1 {
  display: block;
  background: var(--white);
  -webkit-box-shadow: 0px 2px 24px 0px rgba(2, 2, 2, 0.1);
          box-shadow: 0px 2px 24px 0px rgba(2, 2, 2, 0.1);
  text-align: center;
  border-radius: 10px;
  overflow: hidden;
  position: relative;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
  cursor: pointer;
}
.cs_imagebox.cs_style_1:hover {
  -webkit-transform: translateY(-4px);
          transform: translateY(-4px);
}
.cs_imagebox.cs_style_1 img {
  display: block;
  width: 100%;
}
.cs_imagebox.cs_style_1 .cs_imgbox_badge {
  padding: 3px 10px;
  border-radius: 3px;
  position: absolute;
  top: 20px;
  right: 20px;
}
.cs_imagebox.cs_style_1 .cs_imagebox_title {
  padding: 16px 0;
  border-top: 1px solid var(--border);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.cs_iconbox.cs_landing {
  background-color: var(--white);
  border-radius: 10px;
  padding: 60px 15px;
  padding-bottom: 55px;
  text-align: center;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_iconbox.cs_landing:hover {
  -webkit-transform: translateY(-4px);
          transform: translateY(-4px);
}
.cs_iconbox.cs_landing .cs_iconbox_icon {
  height: 50px;
  margin: auto;
  margin-bottom: 20px;
}
.cs_iconbox.cs_landing .cs_iconbox_icon svg {
  height: 100%;
}

.cs_landing_grid_5 {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 24px;
}
@media (max-width: 1199px) {
  .cs_landing_grid_5 {
    grid-template-columns: repeat(4, 1fr);
  }
}
@media (max-width: 991px) {
  .cs_landing_grid_5 {
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }
}
@media (max-width: 575px) {
  .cs_landing_grid_5 {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 420px) {
  .cs_landing_grid_5 {
    grid-template-columns: repeat(1, 1fr);
  }
}

.cs_footer_landing .cs_footer_title {
  margin-bottom: 22px;
}
.cs_footer_landing .cs_footer_subtitle {
  margin-bottom: 40px;
  color: rgba(255, 255, 255, 0.7);
}
@media (max-width: 767px) {
  .cs_footer_landing .cs_footer_subtitle br {
    display: none;
  }
}
.cs_footer_landing .cs_purchase_btn {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding: 11px 44px;
  border-radius: 25px;
  background-color: var(--white);
  color: var(--primary);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.cs_footer_landing .cs_purchase_btn:hover {
  background-color: var(--accent_v4);
  color: var(--white);
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
}

@-webkit-keyframes movin-object1 {
  50% {
    left: 35%;
    -webkit-transform: translate(-35%) rotate(360deg);
            transform: translate(-35%) rotate(360deg);
  }
}

@keyframes movin-object1 {
  50% {
    left: 35%;
    -webkit-transform: translate(-35%) rotate(360deg);
            transform: translate(-35%) rotate(360deg);
  }
}
@-webkit-keyframes movin-object2 {
  50% {
    top: 100%;
    -webkit-transform: translateY(-100%) rotate(360deg);
            transform: translateY(-100%) rotate(360deg);
  }
}
@keyframes movin-object2 {
  50% {
    top: 100%;
    -webkit-transform: translateY(-100%) rotate(360deg);
            transform: translateY(-100%) rotate(360deg);
  }
}
@-webkit-keyframes movin-object3 {
  50% {
    left: 75%;
    -webkit-transform: translateX(-75%) rotate(360deg);
            transform: translateX(-75%) rotate(360deg);
  }
}
@keyframes movin-object3 {
  50% {
    left: 75%;
    -webkit-transform: translateX(-75%) rotate(360deg);
            transform: translateX(-75%) rotate(360deg);
  }
}
@-webkit-keyframes movin-object4 {
  50% {
    top: 20%;
    -webkit-transform: translateY(-20%) rotate(360deg);
            transform: translateY(-20%) rotate(360deg);
  }
}
@keyframes movin-object4 {
  50% {
    top: 20%;
    -webkit-transform: translateY(-20%) rotate(360deg);
            transform: translateY(-20%) rotate(360deg);
  }
}
.cs_site_header.cs_style_1.cs_landing.cs_gescout_sticky.cs_gescout_show .cs_menu_toggle span:after,
.cs_site_header.cs_style_1.cs_landing.cs_gescout_sticky.cs_gescout_show .cs_menu_toggle span::before,
.cs_site_header.cs_style_1.cs_landing.cs_gescout_sticky.cs_gescout_show .cs_menu_toggle span {
  background-color: var(--primary);
}
.cs_site_header.cs_style_1.cs_landing.cs_gescout_sticky.cs_gescout_show .cs_toggle_active span {
  background-color: transparent;
}

@media (max-width: 991px) {
  .cs_site_header.cs_style_1 .cs_btn.cs_landing_header_btn {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}/*# sourceMappingURL=style.css.map */

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity as needed */
  z-index: 2;
}



</style>