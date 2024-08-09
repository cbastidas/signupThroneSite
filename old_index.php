<?php
$serverIp = $_SERVER['SERVER_ADDR'];
echo $serverIp;
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<base href="https://signup.neataffiliates.com/">
<title>Sign Up - NeatAffiliates</title>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <link href="https://fonts.googleapis.com/css?family=Barlow:500,700&display=swap" rel="stylesheet">     


<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/modernizr-3.6.0.min.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery-3.3.1.min.js"><\/script>')</script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
    
    
</head>
<body class="light-bg" >
    

    <?php include_once('./inc/header.php'); ?>
        

<section class="sub-center-content">

    <div class="container-fluid">

        <div class="title">
            <h1>Sign Up</h1>
            <p>Welcome to our affiliate program. Please complete the form below to signup.<br />
Fields marked with * must be completed.</p>
        </div>
        <?php
        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $uri_path);
        $uri_path_brand = $uri_segments[1];
        $termofuse_url="https://www.neataffiliates.com/throne-terms-of-use/";
        if($uri_path_brand=="jackburst"){
            $termofuse_url="https://www.neataffiliates.com/jackburst-terms-of-use/";
        }
        if($uri_path_brand=="davegas"){
            $termofuse_url="https://www.neataffiliates.com/davegas-terms-of-use/";
        }


        ?>

        <style>
            .signup-logos-container{ text-align: center; padding: 15px 5px; max-width: 83.3333333333%; margin: 0 auto}
            .signup-logos-container img{   display: inline-block;}
            .signup-logos-container img.logo-jackburst{ height: 80px; width: auto;}
            .signup-logos-container img.logo-davegas{ height: 65px; width: auto;}
            .signup-logos-container img.logo-throne{ height: auto; width: 100%; max-width: 527px; padding-right: 15px;}
            .signup-logos-container img.logo-throne-brands{ height: 40px; width: auto; display: inline-block; margin-right: 15px;}
            .signup-logos-container img.logo-throne-brands:first-child{ margin-right: 5px; }
            .signup-logos{ display: flex; flex-wrap: wrap; justify-content: center; align-items: center}
            @media (max-width: 768px){
                .signup-logos-container img.logo-throne{ padding-right: 0;}
                .signup-logos-container{ padding: 10px 0; }
                .signup-logos-container img.logo-throne-brands{  height: 25px; margin: 5px}
                .signup-logos-container img.logo-throne-brands:first-child{ margin-right: 0; }
            }

        </style>
        <div class="signup-logos-container">
            <div class="signup-logos">
                <?php if($uri_path_brand=="jackburst"){ ?>
                <img src="assets/images/logos/jackburst.png" alt="Jackburst" class="logo-jackburst" />
                <?php }else if($uri_path_brand=="davegas"){ ?>
                <img src="assets/images/logos/davegas.png" alt="DaVegas" class="logo-davegas" />
                <?php }else{ ?>
                <img src="assets/images/logos/discountcasino.png?v=2" alt="DiscountCasino" class="logo-throne-brands" />
                <img src="assets/images/logos/jetbahis.png" alt="Jetbahis" class="logo-throne-brands" />
                <img src="assets/images/logos/rexbet.png" alt="Rexbet" class="logo-throne-brands" />
                <img src="assets/images/logos/betroad.png" alt="Betroad" class="logo-throne-brands" />
                <img src="assets/images/logos/hovarda.png" alt="Hovarda" class="logo-throne-brands" />
                <img src="assets/images/logos/intobet.png" alt="Intobet" class="logo-throne-brands" />
                <img src="assets/images/logos/genzobet.png" alt="Genzobet" class="logo-throne-brands" />
                <img src="assets/images/logos/betelli.png" alt="Betelli" class="logo-throne-brands" />
                <?php } ?>
            </div>
        </div>

        <form id="signupForm">
        <div class="row">

            <div class="col-xl-10 m-auto signup-box">

                <div class="row">
                    <div class="col-xl-4 signup-box-item">
                
                    <?php
                        /*
                        <div class="form-line">
                        <span class="compulsory">*</span>
                            <select id="UserLanguage" required>
                                <option value="" disabled selected hidden>Preferred Language</option>
                                <option value="en">English</option>
                                <option value="sv">Svenska</option>
                                <option value="no">Norsk</option>
                                <option value="da">Dansk</option>
                                <option value="fi">Suomi</option>
                                <option value="de">Deutsch</option>
                                <option value="fr">Français</option>
                                <option value="it">Italiano</option>
                                <option value="es">Español</option>
                                <option value="el">Ελληνικά</option>
                                <option value="nl">Dutch</option>
                                <option value="pl">Polski</option>
                                <option value="cs">Čeština</option>
                                <option value="hu">Magyar</option>
                                <option value="sr">Srpski</option>
                                <option value="zh">Chinese</option>
                            </select>
                        </div>
                        */
                    ?>
                     
                        <div class="form-line">
                    <span class="compulsory">*</span>

                            <input type="text" id="Name" placeholder="Affiliate / Business Name" required>
                    </div>
                        <div class="form-line">
                            <span class="compulsory">*</span>
                            <input type="text" placeholder="First Name" id="FirstName" pattern="[A-Za-z\u00a1-\uffff ]{2,}" title="Letters Only, min. 2 characters" required>
                        </div>
                        <div class="form-line">
                            <span class="compulsory">*</span>
                            <input type="text" placeholder="Last Name" id="Surname"  pattern="[A-Za-z\u00a1-\uffff ]{2,}" title="Letters Only, min. 2 characters"  required>
                        </div>
                        <div class="form-line">
                            <span class="compulsory">*</span>
                            <input type="text" placeholder="Username" id="UserName" pattern="[a-zA-Z0-9@-_.]{5,30}" required title="Username must be between 5-30 characters, Latin letters, numbers and  '. @ - _' can be used">
                            <span class="inf">Note that usernames are case sensitive.</span>
                        </div>
                        <div class="form-line">
                            <span class="compulsory">*</span>
                            <input type="password" id="Password" placeholder="Password" pattern="(?=.*\d)(?=.*[A-Za-z]).{8,30}" required title="Password must contain both numeric and alphabetic characters and at least 8 characters">
                            <span class="inf">Between 8-30 character (both numeric and alphabetic characters). Latin letters, numbers and special characters can be used</span>
                        </div>
                        <div class="form-line">
                            <span class="compulsory">*</span>
                            <input type="password" id="Password_confirm" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[A-Za-z]).{8,30}" required title="Password must contain both numeric and alphabetic characters and at least 8 characters">
                        </div>
                        <div class="form-line">
                            <span class="compulsory">*</span>
                            <input type="text" id="Email" placeholder="Email Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="mail@domain.com">
                        </div>
                        <div class="form-line">
                            <input type="checkbox" id="ReceivePromotions">
                            <label for="ReceivePromotions" class="check-label">Email mailout subscription </label>
                            <span class="inf">Send me newsletters and promotional emails.</span>
                        </div>

                    </div>
                    <div class="col-xl-4 signup-box-item">
                    <div class="form-line">
                            <span class="compulsory">*</span>
                            <select id="Country" required>
                                <option value="" selected hidden>Country</option> 
                                <option value="AFG">Afghanistan</option>
                                <option value="ALA">Åland Islands</option>
                                <option value="ALB">Albania</option>
                                <option value="DZA">Algeria</option>
                                <option value="ASM">American Samoa</option>
                                <option value="AND">Andorra</option>
                                <option value="AGO">Angola</option>
                                <option value="AIA">Anguilla</option>
                                <option value="ATA">Antarctica</option>
                                <option value="ATG">Antigua and Barbuda</option>
                                <option value="ARG">Argentina</option>
                                <option value="ARM">Armenia</option>
                                <option value="ABW">Aruba</option>
                                <option value="AUS">Australia</option>
                                <option value="AUT">Austria</option>
                                <option value="AZE">Azerbaijan</option>
                                <option value="BHS">Bahamas</option>
                                <option value="BHR">Bahrain</option>
                                <option value="BGD">Bangladesh</option>
                                <option value="BRB">Barbados</option>
                                <option value="BLR">Belarus</option>
                                <option value="BEL">Belgium</option>
                                <option value="BLZ">Belize</option>
                                <option value="BEN">Benin</option>
                                <option value="BMU">Bermuda</option>
                                <option value="BTN">Bhutan</option>
                                <option value="BOL">Bolivia, Plurinational State of</option>
                                <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BIH">Bosnia and Herzegovina</option>
                                <option value="BWA">Botswana</option>
                                <option value="BVT">Bouvet Island</option>
                                <option value="BRA">Brazil</option>
                                <option value="IOT">British Indian Ocean Territory</option>
                                <option value="BRN">Brunei Darussalam</option>
                                <option value="BGR">Bulgaria</option>
                                <option value="BFA">Burkina Faso</option>
                                <option value="BDI">Burundi</option>
                                <option value="KHM">Cambodia</option>
                                <option value="CMR">Cameroon</option>
                                <option value="CAN">Canada</option>
                                <option value="CPV">Cape Verde</option>
                                <option value="CYM">Cayman Islands</option>
                                <option value="CAF">Central African Republic</option>
                                <option value="TCD">Chad</option>
                                <option value="CHL">Chile</option>
                                <option value="CHN">China</option>
                                <option value="CXR">Christmas Island</option>
                                <option value="CCK">Cocos (Keeling) Islands</option>
                                <option value="COL">Colombia</option>
                                <option value="COM">Comoros</option>
                                <option value="COG">Congo</option>
                                <option value="COD">Congo, the Democratic Republic of the</option>
                                <option value="COK">Cook Islands</option>
                                <option value="CRI">Costa Rica</option>
                                <option value="CIV">Côte d'Ivoire</option>
                                <option value="HRV">Croatia</option>
                                <option value="CUB">Cuba</option>
                                <option value="CUW">Curaçao</option>
                                <option value="CYP">Cyprus</option>
                                <option value="CZE">Czech Republic</option>
                                <option value="DNK">Denmark</option>
                                <option value="DJI">Djibouti</option>
                                <option value="DMA">Dominica</option>
                                <option value="DOM">Dominican Republic</option>
                                <option value="ECU">Ecuador</option>
                                <option value="EGY">Egypt</option>
                                <option value="SLV">El Salvador</option>
                                <option value="GNQ">Equatorial Guinea</option>
                                <option value="ERI">Eritrea</option>
                                <option value="EST">Estonia</option>
                                <option value="ETH">Ethiopia</option>
                                <option value="FLK">Falkland Islands (Malvinas)</option>
                                <option value="FRO">Faroe Islands</option>
                                <option value="FJI">Fiji</option>
                                <option value="FIN">Finland</option>
                                <option value="FRA">France</option>
                                <option value="GUF">French Guiana</option>
                                <option value="PYF">French Polynesia</option>
                                <option value="ATF">French Southern Territories</option>
                                <option value="GAB">Gabon</option>
                                <option value="GMB">Gambia</option>
                                <option value="GEO">Georgia</option>
                                <option value="DEU">Germany</option>
                                <option value="GHA">Ghana</option>
                                <option value="GIB">Gibraltar</option>
                                <option value="GRC">Greece</option>
                                <option value="GRL">Greenland</option>
                                <option value="GRD">Grenada</option>
                                <option value="GLP">Guadeloupe</option>
                                <option value="GUM">Guam</option>
                                <option value="GTM">Guatemala</option>
                                <option value="GGY">Guernsey</option>
                                <option value="GIN">Guinea</option>
                                <option value="GNB">Guinea-Bissau</option>
                                <option value="GUY">Guyana</option>
                                <option value="HTI">Haiti</option>
                                <option value="HMD">Heard Island and McDonald Islands</option>
                                <option value="VAT">Holy See (Vatican City State)</option>
                                <option value="HND">Honduras</option>
                                <option value="HKG">Hong Kong</option>
                                <option value="HUN">Hungary</option>
                                <option value="ISL">Iceland</option>
                                <option value="IND">India</option>
                                <option value="IDN">Indonesia</option>
                                <option value="IRN">Iran, Islamic Republic of</option>
                                <option value="IRQ">Iraq</option>
                                <option value="IRL">Ireland</option>
                                <option value="IMN">Isle of Man</option>
                                <option value="ISR">Israel</option>
                                <option value="ITA">Italy</option>
                                <option value="JAM">Jamaica</option>
                                <option value="JPN">Japan</option>
                                <option value="JEY">Jersey</option>
                                <option value="JOR">Jordan</option>
                                <option value="KAZ">Kazakhstan</option>
                                <option value="KEN">Kenya</option>
                                <option value="KIR">Kiribati</option>
                                <option value="PRK">Korea, Democratic People's Republic of</option>
                                <option value="KOR">Korea, Republic of</option>
                                <option value="KWT">Kuwait</option>
                                <option value="KGZ">Kyrgyzstan</option>
                                <option value="LAO">Lao People's Democratic Republic</option>
                                <option value="LVA">Latvia</option>
                                <option value="LBN">Lebanon</option>
                                <option value="LSO">Lesotho</option>
                                <option value="LBR">Liberia</option>
                                <option value="LBY">Libya</option>
                                <option value="LIE">Liechtenstein</option>
                                <option value="LTU">Lithuania</option>
                                <option value="LUX">Luxembourg</option>
                                <option value="MAC">Macao</option>
                                <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                <option value="MDG">Madagascar</option>
                                <option value="MWI">Malawi</option>
                                <option value="MYS">Malaysia</option>
                                <option value="MDV">Maldives</option>
                                <option value="MLI">Mali</option>
                                <option value="MLT">Malta</option>
                                <option value="MHL">Marshall Islands</option>
                                <option value="MTQ">Martinique</option>
                                <option value="MRT">Mauritania</option>
                                <option value="MUS">Mauritius</option>
                                <option value="MYT">Mayotte</option>
                                <option value="MEX">Mexico</option>
                                <option value="FSM">Micronesia, Federated States of</option>
                                <option value="MDA">Moldova, Republic of</option>
                                <option value="MCO">Monaco</option>
                                <option value="MNG">Mongolia</option>
                                <option value="MNE">Montenegro</option>
                                <option value="MSR">Montserrat</option>
                                <option value="MAR">Morocco</option>
                                <option value="MOZ">Mozambique</option>
                                <option value="MMR">Myanmar</option>
                                <option value="NAM">Namibia</option>
                                <option value="NRU">Nauru</option>
                                <option value="NPL">Nepal</option>
                                <option value="NLD">Netherlands</option>
                                <option value="NCL">New Caledonia</option>
                                <option value="NZL">New Zealand</option>
                                <option value="NIC">Nicaragua</option>
                                <option value="NER">Niger</option>
                                <option value="NGA">Nigeria</option>
                                <option value="NIU">Niue</option>
                                <option value="NFK">Norfolk Island</option>
                                <option value="MNP">Northern Mariana Islands</option>
                                <option value="NOR">Norway</option>
                                <option value="OMN">Oman</option>
                                <option value="PAK">Pakistan</option>
                                <option value="PLW">Palau</option>
                                <option value="PSE">Palestinian Territory, Occupied</option>
                                <option value="PAN">Panama</option>
                                <option value="PNG">Papua New Guinea</option>
                                <option value="PRY">Paraguay</option>
                                <option value="PER">Peru</option>
                                <option value="PHL">Philippines</option>
                                <option value="PCN">Pitcairn</option>
                                <option value="POL">Poland</option>
                                <option value="PRT">Portugal</option>
                                <option value="PRI">Puerto Rico</option>
                                <option value="QAT">Qatar</option>
                                <option value="REU">Réunion</option>
                                <option value="ROU">Romania</option>
                                <option value="RUS">Russian Federation</option>
                                <option value="RWA">Rwanda</option>
                                <option value="BLM">Saint Barthélemy</option>
                                <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KNA">Saint Kitts and Nevis</option>
                                <option value="LCA">Saint Lucia</option>
                                <option value="MAF">Saint Martin (French part)</option>
                                <option value="SPM">Saint Pierre and Miquelon</option>
                                <option value="VCT">Saint Vincent and the Grenadines</option>
                                <option value="WSM">Samoa</option>
                                <option value="SMR">San Marino</option>
                                <option value="STP">Sao Tome and Principe</option>
                                <option value="SAU">Saudi Arabia</option>
                                <option value="SEN">Senegal</option>
                                <option value="SRB">Serbia</option>
                                <option value="SYC">Seychelles</option>
                                <option value="SLE">Sierra Leone</option>
                                <option value="SGP">Singapore</option>
                                <option value="SXM">Sint Maarten (Dutch part)</option>
                                <option value="SVK">Slovakia</option>
                                <option value="SVN">Slovenia</option>
                                <option value="SLB">Solomon Islands</option>
                                <option value="SOM">Somalia</option>
                                <option value="ZAF">South Africa</option>
                                <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                <option value="SSD">South Sudan</option>
                                <option value="ESP">Spain</option>
                                <option value="LKA">Sri Lanka</option>
                                <option value="SDN">Sudan</option>
                                <option value="SUR">Suriname</option>
                                <option value="SJM">Svalbard and Jan Mayen</option>
                                <option value="SWZ">Swaziland</option>
                                <option value="SWE">Sweden</option>
                                <option value="CHE">Switzerland</option>
                                <option value="SYR">Syrian Arab Republic</option>
                                <option value="TWN">Taiwan, Province of China</option>
                                <option value="TJK">Tajikistan</option>
                                <option value="TZA">Tanzania, United Republic of</option>
                                <option value="THA">Thailand</option>
                                <option value="TLS">Timor-Leste</option>
                                <option value="TGO">Togo</option>
                                <option value="TKL">Tokelau</option>
                                <option value="TON">Tonga</option>
                                <option value="TTO">Trinidad and Tobago</option>
                                <option value="TUN">Tunisia</option>
                                <option value="TUR">Turkey</option>
                                <option value="TKM">Turkmenistan</option>
                                <option value="TCA">Turks and Caicos Islands</option>
                                <option value="TUV">Tuvalu</option>
                                <option value="UGA">Uganda</option>
                                <option value="UKR">Ukraine</option>
                                <option value="ARE">United Arab Emirates</option>
                                <option value="GBR">United Kingdom</option>
                                <option value="USA">United States</option>
                                <option value="UMI">United States Minor Outlying Islands</option>
                                <option value="URY">Uruguay</option>
                                <option value="UZB">Uzbekistan</option>
                                <option value="VUT">Vanuatu</option>
                                <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                <option value="VNM">Viet Nam</option>
                                <option value="VGB">Virgin Islands, British</option>
                                <option value="VIR">Virgin Islands, U.S.</option>
                                <option value="WLF">Wallis and Futuna</option>
                                <option value="ESH">Western Sahara</option>
                                <option value="YEM">Yemen</option>
                                <option value="ZMB">Zambia</option>
                                <option value="ZWE">Zimbabwe</option>
                                </select>
                        </div>
                        <div class="form-line">
                         
                            <input type="text" id="City" placeholder="City" pattern="[A-Za-z\u00a1-\uffff]{2,}" title="Letters only, min. 2 characters">
                        </div>
                        <div class="form-line">
                        
                            <textarea type="text" id="Address1" placeholder="Address"></textarea>
                        </div>
                        <div class="form-line">
                            <input type="text" id="Zip" placeholder="ZIP Code">
                        </div>

                        <div class="form-line">
                            <span class="compulsory">*</span>
                            <select id="TelephoneDialCode" required>
                                <option value="" selected hidden>Country Dial Code</option>
                                <option value="AFG">Afghanistan (+93)</option>
                                <option value="ALB">Albania (+355)</option>
                                <option value="DZA">Algeria (+213)</option>
                                <option value="ASM">American Samoa (+1-684)</option>
                                <option value="AND">Andorra (+376)</option>
                                <option value="AGO">Angola (+244)</option>
                                <option value="AIA">Anguilla (+1-264)</option>
                                <option value="ATA">Antarctica (+672)</option>
                                <option value="ATG">Antigua and Barbuda (+1-268)</option>
                                <option value="ARG">Argentina (+54)</option>
                                <option value="ARM">Armenia (+374)</option>
                                <option value="ABW">Aruba (+297)</option>
                                <option value="AUS">Australia (+61)</option>
                                <option value="AUT">Austria (+43)</option>
                                <option value="AZE">Azerbaijan (+994)</option>
                                <option value="BHS">Bahamas (+1-242)</option>
                                <option value="BHR">Bahrain (+973)</option>
                                <option value="BGD">Bangladesh (+880)</option>
                                <option value="BRB">Barbados (+1-246)</option>
                                <option value="BLR">Belarus (+375)</option>
                                <option value="BEL">Belgium (+32)</option>
                                <option value="BLZ">Belize (+501)</option>
                                <option value="BEN">Benin (+229)</option>
                                <option value="BMU">Bermuda (+1-441)</option>
                                <option value="BTN">Bhutan (+975)</option>
                                <option value="BOL">Bolivia (+591)</option>
                                <option value="BIH">Bosnia and Herzegovina (+387)</option>
                                <option value="BWA">Botswana (+267)</option>
                                <option value="BRA">Brazil (+55)</option>
                                <option value="IOT">British Indian Ocean Territory (+246)</option>
                                <option value="VGB">British Virgin Islands (+1-284)</option>
                                <option value="BRN">Brunei (+673)</option>
                                <option value="BGR">Bulgaria (+359)</option>
                                <option value="BFA">Burkina Faso (+226)</option>
                                <option value="BDI">Burundi (+257)</option>
                                <option value="KHM">Cambodia (+855)</option>
                                <option value="CMR">Cameroon (+237)</option>
                                <option value="CAN">Canada (+1)</option>
                                <option value="CPV">Cape Verde (+238)</option>
                                <option value="CYM">Cayman Islands (+1-345)</option>
                                <option value="CAF">Central African Republic (+236)</option>
                                <option value="TCD">Chad (+235)</option>
                                <option value="CHL">Chile (+56)</option>
                                <option value="CHN">China (+86)</option>
                                <option value="CXR">Christmas Island (+61)</option>
                                <option value="CCK">Cocos Islands (+61)</option>
                                <option value="COL">Colombia (+57)</option>
                                <option value="COM">Comoros (+269)</option>
                                <option value="COK">Cook Islands (+682)</option>
                                <option value="CRI">Costa Rica (+506)</option>
                                <option value="HRV">Croatia (+385)</option>
                                <option value="CUB">Cuba (+53)</option>
                                <option value="CUW">Curacao (+599)</option>
                                <option value="CYP">Cyprus (+357)</option>
                                <option value="CZE">Czech Republic (+420)</option>
                                <option value="COD">Democratic Republic of the Congo (+243)</option>
                                <option value="DNK">Denmark (+45)</option>
                                <option value="DJI">Djibouti (+253)</option>
                                <option value="DMA">Dominica (+1-767)</option>
                                <option value="DOM">Dominican Republic (+1-809, 1-829, 1-849)</option>
                                <option value="TLS">East Timor (+670)</option>
                                <option value="ECU">Ecuador (+593)</option>
                                <option value="EGY">Egypt (+20)</option>
                                <option value="SLV">El Salvador (+503)</option>
                                <option value="GNQ">Equatorial Guinea (+240)</option>
                                <option value="ERI">Eritrea (+291)</option>
                                <option value="EST">Estonia (+372)</option>
                                <option value="ETH">Ethiopia (+251)</option>
                                <option value="FLK">Falkland Islands (+500)</option>
                                <option value="FRO">Faroe Islands (+298)</option>
                                <option value="FJI">Fiji (+679)</option>
                                <option value="FIN">Finland (+358)</option>
                                <option value="FRA">France (+33)</option>
                                <option value="PYF">French Polynesia (+689)</option>
                                <option value="GAB">Gabon (+241)</option>
                                <option value="GMB">Gambia (+220)</option>
                                <option value="GEO">Georgia (+995)</option>
                                <option value="DEU">Germany (+49)</option>
                                <option value="GHA">Ghana (+233)</option>
                                <option value="GIB">Gibraltar (+350)</option>
                                <option value="GRC">Greece (+30)</option>
                                <option value="GRL">Greenland (+299)</option>
                                <option value="GRD">Grenada (+1-473)</option>
                                <option value="GUM">Guam (+1-671)</option>
                                <option value="GTM">Guatemala (+502)</option>
                                <option value="GGY">Guernsey (+44-1481)</option>
                                <option value="GIN">Guinea (+224)</option>
                                <option value="GNB">Guinea-Bissau (+245)</option>
                                <option value="GUY">Guyana (+592)</option>
                                <option value="HTI">Haiti (+509)</option>
                                <option value="HND">Honduras (+504)</option>
                                <option value="HKG">Hong Kong (+852)</option>
                                <option value="HUN">Hungary (+36)</option>
                                <option value="ISL">Iceland (+354)</option>
                                <option value="IND">India (+91)</option>
                                <option value="IDN">Indonesia (+62)</option>
                                <option value="IRN">Iran (+98)</option>
                                <option value="IRQ">Iraq (+964)</option>
                                <option value="IRL">Ireland (+353)</option>
                                <option value="IMN">Isle of Man (+44-1624)</option>
                                <option value="ISR">Israel (+972)</option>
                                <option value="ITA">Italy (+39)</option>
                                <option value="CIV">Ivory Coast (+225)</option>
                                <option value="JAM">Jamaica (+1-876)</option>
                                <option value="JPN">Japan (+81)</option>
                                <option value="JEY">Jersey (+44-1534)</option>
                                <option value="JOR">Jordan (+962)</option>
                                <option value="KAZ">Kazakhstan (+7)</option>
                                <option value="KEN">Kenya (+254)</option>
                                <option value="KIR">Kiribati (+686)</option>
                                <option value="XKX">Kosovo (+383)</option>
                                <option value="KWT">Kuwait (+965)</option>
                                <option value="KGZ">Kyrgyzstan (+996)</option>
                                <option value="LAO">Laos (+856)</option>
                                <option value="LVA">Latvia (+371)</option>
                                <option value="LBN">Lebanon (+961)</option>
                                <option value="LSO">Lesotho (+266)</option>
                                <option value="LBR">Liberia (+231)</option>
                                <option value="LBY">Libya (+218)</option>
                                <option value="LIE">Liechtenstein (+423)</option>
                                <option value="LTU">Lithuania (+370)</option>
                                <option value="LUX">Luxembourg (+352)</option>
                                <option value="MAC">Macau (+853)</option>
                                <option value="MKD">Macedonia (+389)</option>
                                <option value="MDG">Madagascar (+261)</option>
                                <option value="MWI">Malawi (+265)</option>
                                <option value="MYS">Malaysia (+60)</option>
                                <option value="MDV">Maldives (+960)</option>
                                <option value="MLI">Mali (+223)</option>
                                <option value="MLT">Malta (+356)</option>
                                <option value="MHL">Marshall Islands (+692)</option>
                                <option value="MRT">Mauritania (+222)</option>
                                <option value="MUS">Mauritius (+230)</option>
                                <option value="MYT">Mayotte (+262)</option>
                                <option value="MEX">Mexico (+52)</option>
                                <option value="FSM">Micronesia (+691)</option>
                                <option value="MDA">Moldova (+373)</option>
                                <option value="MCO">Monaco (+377)</option>
                                <option value="MNG">Mongolia (+976)</option>
                                <option value="MNE">Montenegro (+382)</option>
                                <option value="MSR">Montserrat (+1-664)</option>
                                <option value="MAR">Morocco (+212)</option>
                                <option value="MOZ">Mozambique (+258)</option>
                                <option value="MMR">Myanmar (+95)</option>
                                <option value="NAM">Namibia (+264)</option>
                                <option value="NRU">Nauru (+674)</option>
                                <option value="NPL">Nepal (+977)</option>
                                <option value="NLD">Netherlands (+31)</option>
                                <option value="ANT">Netherlands Antilles (+599)</option>
                                <option value="NCL">New Caledonia (+687)</option>
                                <option value="NZL">New Zealand (+64)</option>
                                <option value="NIC">Nicaragua (+505)</option>
                                <option value="NER">Niger (+227)</option>
                                <option value="NGA">Nigeria (+234)</option>
                                <option value="NIU">Niue (+683)</option>
                                <option value="PRK">North Korea (+850)</option>
                                <option value="MNP">Northern Mariana Islands (+1-670)</option>
                                <option value="NOR">Norway (+47)</option>
                                <option value="OMN">Oman (+968)</option>
                                <option value="PAK">Pakistan (+92)</option>
                                <option value="PLW">Palau (+680)</option>
                                <option value="PSE">Palestine (+970)</option>
                                <option value="PAN">Panama (+507)</option>
                                <option value="PNG">Papua New Guinea (+675)</option>
                                <option value="PRY">Paraguay (+595)</option>
                                <option value="PER">Peru (+51)</option>
                                <option value="PHL">Philippines (+63)</option>
                                <option value="PCN">Pitcairn (+64)</option>
                                <option value="POL">Poland (+48)</option>
                                <option value="PRT">Portugal (+351)</option>
                                <option value="PRI">Puerto Rico (+1-787, 1-939)</option>
                                <option value="QAT">Qatar (+974)</option>
                                <option value="COG">Republic of the Congo (+242)</option>
                                <option value="REU">Reunion (+262)</option>
                                <option value="ROU">Romania (+40)</option>
                                <option value="RUS">Russia (+7)</option>
                                <option value="RWA">Rwanda (+250)</option>
                                <option value="BLM">Saint Barthelemy (+590)</option>
                                <option value="SHN">Saint Helena (+290)</option>
                                <option value="KNA">Saint Kitts and Nevis (+1-869)</option>
                                <option value="LCA">Saint Lucia (+1-758)</option>
                                <option value="MAF">Saint Martin (+590)</option>
                                <option value="SPM">Saint Pierre and Miquelon (+508)</option>
                                <option value="VCT">Saint Vincent and the Grenadines (+1-784)</option>
                                <option value="WSM">Samoa (+685)</option>
                                <option value="SMR">San Marino (+378)</option>
                                <option value="STP">Sao Tome and Principe (+239)</option>
                                <option value="SAU">Saudi Arabia (+966)</option>
                                <option value="SEN">Senegal (+221)</option>
                                <option value="SRB">Serbia (+381)</option>
                                <option value="SYC">Seychelles (+248)</option>
                                <option value="SLE">Sierra Leone (+232)</option>
                                <option value="SGP">Singapore (+65)</option>
                                <option value="SXM">Sint Maarten (+1-721)</option>
                                <option value="SVK">Slovakia (+421)</option>
                                <option value="SVN">Slovenia (+386)</option>
                                <option value="SLB">Solomon Islands (+677)</option>
                                <option value="SOM">Somalia (+252)</option>
                                <option value="ZAF">South Africa (+27)</option>
                                <option value="KOR">South Korea (+82)</option>
                                <option value="SSD">South Sudan (+211)</option>
                                <option value="ESP">Spain (+34)</option>
                                <option value="LKA">Sri Lanka (+94)</option>
                                <option value="SDN">Sudan (+249)</option>
                                <option value="SUR">Suriname (+597)</option>
                                <option value="SJM">Svalbard and Jan Mayen (+47)</option>
                                <option value="SWZ">Swaziland (+268)</option>
                                <option value="SWE">Sweden (+46)</option>
                                <option value="CHE">Switzerland (+41)</option>
                                <option value="SYR">Syria (+963)</option>
                                <option value="TWN">Taiwan (+886)</option>
                                <option value="TJK">Tajikistan (+992)</option>
                                <option value="TZA">Tanzania (+255)</option>
                                <option value="THA">Thailand (+66)</option>
                                <option value="TGO">Togo (+228)</option>
                                <option value="TKL">Tokelau (+690)</option>
                                <option value="TON">Tonga (+676)</option>
                                <option value="TTO">Trinidad and Tobago (+1-868)</option>
                                <option value="TUN">Tunisia (+216)</option>
                                <option value="TUR">Turkey (+90)</option>
                                <option value="TKM">Turkmenistan (+993)</option>
                                <option value="TCA">Turks and Caicos Islands (+1-649)</option>
                                <option value="TUV">Tuvalu (+688)</option>
                                <option value="VIR">U.S. Virgin Islands (+1-340)</option>
                                <option value="UGA">Uganda (+256)</option>
                                <option value="UKR">Ukraine (+380)</option>
                                <option value="ARE">United Arab Emirates (+971)</option>
                                <option value="GBR">United Kingdom (+44)</option>
                                <option value="USA">United States (+1)</option>
                                <option value="URY">Uruguay (+598)</option>
                                <option value="UZB">Uzbekistan (+998)</option>
                                <option value="VUT">Vanuatu (+678)</option>
                                <option value="VAT">Vatican (+379)</option>
                                <option value="VEN">Venezuela (+58)</option>
                                <option value="VNM">Vietnam (+84)</option>
                                <option value="WLF">Wallis and Futuna (+681)</option>
                                <option value="ESH">Western Sahara (+212)</option>
                                <option value="YEM">Yemen (+967)</option>
                                <option value="ZMB">Zambia (+260)</option>
                                <option value="ZWE">Zimbabwe (+263)</option>
                             </select>
                        </div>
                        <div class="form-line">
                        <span class="compulsory">*</span>
                            <input type="text" id="Telephone" placeholder="Phone" required pattern=[0-9]{5,} title="Numbers Only, min. 5 characters">
                        </div>
                        <div class="form-line">
                    
                            <input type="text" id="Skype" placeholder="Skype">
                        </div>


                    </div>
                    <div class="col-xl-4 signup-box-item">
                    
                    

                    <div class="form-line">
                    <span class="compulsory">*</span>
                            <input type="text" id="PublishPointName" placeholder="Site Name" required>
                    </div>
                        <div class="form-line">
                            <span class="compulsory">*</span>
                            <input type="text" id="URL" placeholder="Site URL" required>
                        </div>
                        <div class="form-line">
                        <span class="compulsory">*</span>
                            <select id="PublishPointCategory" required>
                                <option value="" selected hidden>Site Category</option>
                                <?php
                                    /*
                                    <option value="1">All/Genaral</option>
                                    <option value="2">Sports - Soccer</option>
                                    <option value="3">Sports - Horse Racing</option>
                                    <option value="4">Sports - Other</option>
                                    <option value="5">Casino</option>
                                    <option value="6">Poker</option>
                                    <option value="7">Games</option>
                                    */
                                ?>
                            </select>
                        </div>
                        <?php
                            /*
                            <div class="form-line">
                            <span class="compulsory">*</span>
                                <select id="PublishPointLanguage">
                                    <option val="" selected disabled hidden required>Site Language</option>
                                    <option value="en">English</option>
                                    <option value="sv">Svenska</option>
                                    <option value="no">Norsk</option>
                                    <option value="da">Dansk</option>
                                    <option value="fi">Suomi</option>
                                    <option value="de">Deutsch</option>
                                    <option value="fr">Français</option>
                                    <option value="it">Italiano</option>
                                    <option value="es">Español</option>
                                    <option value="el">Ελληνικά</option>
                                    <option value="nl">Dutch</option>
                                    <option value="pl">Polski</option>
                                    <option value="cs">Čeština</option>
                                    <option value="hu">Magyar</option>
                                    <option value="sr">Srpski</option>
                                    <option value="zh">Chinese</option>
                                </select>
                            </div>
                            */
                        ?>
                        <div class="form-line form-line-checkbox">
        
                            <input type="checkbox" id="RegisteredForTax">
                            <label for="RegisteredForTax" class="check-label">I am registered for tax </label>
                        </div>

                        <div id="form-tax-details">
                        

                        <div class="form-line">
                        <span class="compulsory">*</span>
                            <select id="TaxCountry">
                            <option value="" selected hidden>Tax Registration Country</option> 
                                <option value="AFG">Afghanistan</option>
                                <option value="ALA">Åland Islands</option>
                                <option value="ALB">Albania</option>
                                <option value="DZA">Algeria</option>
                                <option value="ASM">American Samoa</option>
                                <option value="AND">Andorra</option>
                                <option value="AGO">Angola</option>
                                <option value="AIA">Anguilla</option>
                                <option value="ATA">Antarctica</option>
                                <option value="ATG">Antigua and Barbuda</option>
                                <option value="ARG">Argentina</option>
                                <option value="ARM">Armenia</option>
                                <option value="ABW">Aruba</option>
                                <option value="AUS">Australia</option>
                                <option value="AUT">Austria</option>
                                <option value="AZE">Azerbaijan</option>
                                <option value="BHS">Bahamas</option>
                                <option value="BHR">Bahrain</option>
                                <option value="BGD">Bangladesh</option>
                                <option value="BRB">Barbados</option>
                                <option value="BLR">Belarus</option>
                                <option value="BEL">Belgium</option>
                                <option value="BLZ">Belize</option>
                                <option value="BEN">Benin</option>
                                <option value="BMU">Bermuda</option>
                                <option value="BTN">Bhutan</option>
                                <option value="BOL">Bolivia, Plurinational State of</option>
                                <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BIH">Bosnia and Herzegovina</option>
                                <option value="BWA">Botswana</option>
                                <option value="BVT">Bouvet Island</option>
                                <option value="BRA">Brazil</option>
                                <option value="IOT">British Indian Ocean Territory</option>
                                <option value="BRN">Brunei Darussalam</option>
                                <option value="BGR">Bulgaria</option>
                                <option value="BFA">Burkina Faso</option>
                                <option value="BDI">Burundi</option>
                                <option value="KHM">Cambodia</option>
                                <option value="CMR">Cameroon</option>
                                <option value="CAN">Canada</option>
                                <option value="CPV">Cape Verde</option>
                                <option value="CYM">Cayman Islands</option>
                                <option value="CAF">Central African Republic</option>
                                <option value="TCD">Chad</option>
                                <option value="CHL">Chile</option>
                                <option value="CHN">China</option>
                                <option value="CXR">Christmas Island</option>
                                <option value="CCK">Cocos (Keeling) Islands</option>
                                <option value="COL">Colombia</option>
                                <option value="COM">Comoros</option>
                                <option value="COG">Congo</option>
                                <option value="COD">Congo, the Democratic Republic of the</option>
                                <option value="COK">Cook Islands</option>
                                <option value="CRI">Costa Rica</option>
                                <option value="CIV">Côte d'Ivoire</option>
                                <option value="HRV">Croatia</option>
                                <option value="CUB">Cuba</option>
                                <option value="CUW">Curaçao</option>
                                <option value="CYP">Cyprus</option>
                                <option value="CZE">Czech Republic</option>
                                <option value="DNK">Denmark</option>
                                <option value="DJI">Djibouti</option>
                                <option value="DMA">Dominica</option>
                                <option value="DOM">Dominican Republic</option>
                                <option value="ECU">Ecuador</option>
                                <option value="EGY">Egypt</option>
                                <option value="SLV">El Salvador</option>
                                <option value="GNQ">Equatorial Guinea</option>
                                <option value="ERI">Eritrea</option>
                                <option value="EST">Estonia</option>
                                <option value="ETH">Ethiopia</option>
                                <option value="FLK">Falkland Islands (Malvinas)</option>
                                <option value="FRO">Faroe Islands</option>
                                <option value="FJI">Fiji</option>
                                <option value="FIN">Finland</option>
                                <option value="FRA">France</option>
                                <option value="GUF">French Guiana</option>
                                <option value="PYF">French Polynesia</option>
                                <option value="ATF">French Southern Territories</option>
                                <option value="GAB">Gabon</option>
                                <option value="GMB">Gambia</option>
                                <option value="GEO">Georgia</option>
                                <option value="DEU">Germany</option>
                                <option value="GHA">Ghana</option>
                                <option value="GIB">Gibraltar</option>
                                <option value="GRC">Greece</option>
                                <option value="GRL">Greenland</option>
                                <option value="GRD">Grenada</option>
                                <option value="GLP">Guadeloupe</option>
                                <option value="GUM">Guam</option>
                                <option value="GTM">Guatemala</option>
                                <option value="GGY">Guernsey</option>
                                <option value="GIN">Guinea</option>
                                <option value="GNB">Guinea-Bissau</option>
                                <option value="GUY">Guyana</option>
                                <option value="HTI">Haiti</option>
                                <option value="HMD">Heard Island and McDonald Islands</option>
                                <option value="VAT">Holy See (Vatican City State)</option>
                                <option value="HND">Honduras</option>
                                <option value="HKG">Hong Kong</option>
                                <option value="HUN">Hungary</option>
                                <option value="ISL">Iceland</option>
                                <option value="IND">India</option>
                                <option value="IDN">Indonesia</option>
                                <option value="IRN">Iran, Islamic Republic of</option>
                                <option value="IRQ">Iraq</option>
                                <option value="IRL">Ireland</option>
                                <option value="IMN">Isle of Man</option>
                                <option value="ISR">Israel</option>
                                <option value="ITA">Italy</option>
                                <option value="JAM">Jamaica</option>
                                <option value="JPN">Japan</option>
                                <option value="JEY">Jersey</option>
                                <option value="JOR">Jordan</option>
                                <option value="KAZ">Kazakhstan</option>
                                <option value="KEN">Kenya</option>
                                <option value="KIR">Kiribati</option>
                                <option value="PRK">Korea, Democratic People's Republic of</option>
                                <option value="KOR">Korea, Republic of</option>
                                <option value="KWT">Kuwait</option>
                                <option value="KGZ">Kyrgyzstan</option>
                                <option value="LAO">Lao People's Democratic Republic</option>
                                <option value="LVA">Latvia</option>
                                <option value="LBN">Lebanon</option>
                                <option value="LSO">Lesotho</option>
                                <option value="LBR">Liberia</option>
                                <option value="LBY">Libya</option>
                                <option value="LIE">Liechtenstein</option>
                                <option value="LTU">Lithuania</option>
                                <option value="LUX">Luxembourg</option>
                                <option value="MAC">Macao</option>
                                <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                <option value="MDG">Madagascar</option>
                                <option value="MWI">Malawi</option>
                                <option value="MYS">Malaysia</option>
                                <option value="MDV">Maldives</option>
                                <option value="MLI">Mali</option>
                                <option value="MLT">Malta</option>
                                <option value="MHL">Marshall Islands</option>
                                <option value="MTQ">Martinique</option>
                                <option value="MRT">Mauritania</option>
                                <option value="MUS">Mauritius</option>
                                <option value="MYT">Mayotte</option>
                                <option value="MEX">Mexico</option>
                                <option value="FSM">Micronesia, Federated States of</option>
                                <option value="MDA">Moldova, Republic of</option>
                                <option value="MCO">Monaco</option>
                                <option value="MNG">Mongolia</option>
                                <option value="MNE">Montenegro</option>
                                <option value="MSR">Montserrat</option>
                                <option value="MAR">Morocco</option>
                                <option value="MOZ">Mozambique</option>
                                <option value="MMR">Myanmar</option>
                                <option value="NAM">Namibia</option>
                                <option value="NRU">Nauru</option>
                                <option value="NPL">Nepal</option>
                                <option value="NLD">Netherlands</option>
                                <option value="NCL">New Caledonia</option>
                                <option value="NZL">New Zealand</option>
                                <option value="NIC">Nicaragua</option>
                                <option value="NER">Niger</option>
                                <option value="NGA">Nigeria</option>
                                <option value="NIU">Niue</option>
                                <option value="NFK">Norfolk Island</option>
                                <option value="MNP">Northern Mariana Islands</option>
                                <option value="NOR">Norway</option>
                                <option value="OMN">Oman</option>
                                <option value="PAK">Pakistan</option>
                                <option value="PLW">Palau</option>
                                <option value="PSE">Palestinian Territory, Occupied</option>
                                <option value="PAN">Panama</option>
                                <option value="PNG">Papua New Guinea</option>
                                <option value="PRY">Paraguay</option>
                                <option value="PER">Peru</option>
                                <option value="PHL">Philippines</option>
                                <option value="PCN">Pitcairn</option>
                                <option value="POL">Poland</option>
                                <option value="PRT">Portugal</option>
                                <option value="PRI">Puerto Rico</option>
                                <option value="QAT">Qatar</option>
                                <option value="REU">Réunion</option>
                                <option value="ROU">Romania</option>
                                <option value="RUS">Russian Federation</option>
                                <option value="RWA">Rwanda</option>
                                <option value="BLM">Saint Barthélemy</option>
                                <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KNA">Saint Kitts and Nevis</option>
                                <option value="LCA">Saint Lucia</option>
                                <option value="MAF">Saint Martin (French part)</option>
                                <option value="SPM">Saint Pierre and Miquelon</option>
                                <option value="VCT">Saint Vincent and the Grenadines</option>
                                <option value="WSM">Samoa</option>
                                <option value="SMR">San Marino</option>
                                <option value="STP">Sao Tome and Principe</option>
                                <option value="SAU">Saudi Arabia</option>
                                <option value="SEN">Senegal</option>
                                <option value="SRB">Serbia</option>
                                <option value="SYC">Seychelles</option>
                                <option value="SLE">Sierra Leone</option>
                                <option value="SGP">Singapore</option>
                                <option value="SXM">Sint Maarten (Dutch part)</option>
                                <option value="SVK">Slovakia</option>
                                <option value="SVN">Slovenia</option>
                                <option value="SLB">Solomon Islands</option>
                                <option value="SOM">Somalia</option>
                                <option value="ZAF">South Africa</option>
                                <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                <option value="SSD">South Sudan</option>
                                <option value="ESP">Spain</option>
                                <option value="LKA">Sri Lanka</option>
                                <option value="SDN">Sudan</option>
                                <option value="SUR">Suriname</option>
                                <option value="SJM">Svalbard and Jan Mayen</option>
                                <option value="SWZ">Swaziland</option>
                                <option value="SWE">Sweden</option>
                                <option value="CHE">Switzerland</option>
                                <option value="SYR">Syrian Arab Republic</option>
                                <option value="TWN">Taiwan, Province of China</option>
                                <option value="TJK">Tajikistan</option>
                                <option value="TZA">Tanzania, United Republic of</option>
                                <option value="THA">Thailand</option>
                                <option value="TLS">Timor-Leste</option>
                                <option value="TGO">Togo</option>
                                <option value="TKL">Tokelau</option>
                                <option value="TON">Tonga</option>
                                <option value="TTO">Trinidad and Tobago</option>
                                <option value="TUN">Tunisia</option>
                                <option value="TUR">Turkey</option>
                                <option value="TKM">Turkmenistan</option>
                                <option value="TCA">Turks and Caicos Islands</option>
                                <option value="TUV">Tuvalu</option>
                                <option value="UGA">Uganda</option>
                                <option value="UKR">Ukraine</option>
                                <option value="ARE">United Arab Emirates</option>
                                <option value="GBR">United Kingdom</option>
                                <option value="USA">United States</option>
                                <option value="UMI">United States Minor Outlying Islands</option>
                                <option value="URY">Uruguay</option>
                                <option value="UZB">Uzbekistan</option>
                                <option value="VUT">Vanuatu</option>
                                <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                <option value="VNM">Viet Nam</option>
                                <option value="VGB">Virgin Islands, British</option>
                                <option value="VIR">Virgin Islands, U.S.</option>
                                <option value="WLF">Wallis and Futuna</option>
                                <option value="ESH">Western Sahara</option>
                                <option value="YEM">Yemen</option>
                                <option value="ZMB">Zambia</option>
                                <option value="ZWE">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="form-line">
                        <span class="compulsory">*</span>
                            <input type="text" id="CompanyRegistrationNumber" placeholder="Company Registration Number">
                            
                        </div>
                        <div class="form-line">
                        <span class="compulsory">*</span>
                            <input type="text" id="TaxRegistrationNumber" placeholder="Tax Registration Number">
                        
                        </div>

                        
                        </div><!-- /form-tax-details -->

                        <div class="form-line">
                        <span class="compulsory">*</span>
                            <input type="text" id="PayeeName" placeholder="Payee Name" required>
                        </div>
                        <div class="form-line">
                        <span class="compulsory">*</span>
                            <select id="PaymentMethodID" required>
                                <option value="" selected hidden>Payment method</option>
                            </select>
                        </div>

                        <div id="form-payment-details">
                        
                        
                        </div><!-- /form-payment-details -->

                    </div>
                    <div class="col-12 signup-bottom">
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="form-line form-line-checkbox">
                                    <span class="compulsory">*</span>
                                    <input type="checkbox" id="termcheck" required>
                                    <label for="termcheck">I agree with the NeatAfiiliates <a href="<?php echo $termofuse_url; ?>" target="_blank">Terms of Use</a></label>
                                </div>
                                <div class="">* Please read the <a href="<?php echo $termofuse_url; ?>" target="_blank">Terms of Use</a> before agreeing.</div>
                            </div>
                            <div class="col-xl-4">
                                <button type="submit" class="btn-big btn-purple ml-auto">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </form>
    </div><!-- container-fluid -->

</section>


<div class="d-none">
    <select class="d-none" id="crypto_temp_list">
    <option value="" selected hidden>Country</option> 
    <option value="0">International</option>
    <option value="1">United Kingdom</option>
    <option value="2">United States of America</option>
    <option value="4">Australia</option>
    <option value="6">South Africa</option>
    <option value="7">Germany</option>
    <option value="8">Japan</option>
    <option value="9">Algeria</option>
    <option value="10">Argentina</option>
    <option value="11">Austria</option>
    <option value="12">Bahamas</option>
    <option value="13">Barbados</option>
    <option value="14">Belgium</option>
    <option value="15">Bermuda</option>
    <option value="16">Brazil</option>
    <option value="17">Bulgaria</option>
    <option value="18">Canada</option>
    <option value="19">Chile</option>
    <option value="20">China</option>
    <option value="21">Cyprus</option>
    <option value="22">Czech Republic</option>
    <option value="23">Denmark</option>
    <option value="25">Egypt</option>
    <option value="26">Fiji</option>
    <option value="27">Finland</option>
    <option value="28">France</option>
    <option value="29">Greece</option>
    <option value="30">Hong Kong</option>
    <option value="31">Hungary</option>
    <option value="32">Iceland</option>
    <option value="33">India</option>
    <option value="34">Indonesia</option>
    <option value="35">Ireland</option>
    <option value="36">Israel</option>
    <option value="37">Italy</option>
    <option value="38">Jamaica</option>
    <option value="39">Jordan</option>
    <option value="40">Lebanon</option>
    <option value="41">Luxembourg</option>
    <option value="42">Malaysia</option>
    <option value="43">Mexico</option>
    <option value="44">Netherlands</option>
    <option value="45">New Zealand</option>
    <option value="46">Norway</option>
    <option value="47">Pakistan</option>
    <option value="48">Philippines</option>
    <option value="49">Poland</option>
    <option value="50">Portugal</option>
    <option value="51">Romania</option>
    <option value="52">Russian Federation</option>
    <option value="53">Saudi Arabia</option>
    <option value="54">Singapore</option>
    <option value="55">Slovakia</option>
    <option value="56">Korea, South</option>
    <option value="57">Spain</option>
    <option value="58">Sudan</option>
    <option value="59">Sweden</option>
    <option value="60">Switzerland</option>
    <option value="61">Taiwan</option>
    <option value="62">Thailand</option>
    <option value="63">Trinidad And Tobago</option>
    <option value="64">Turkey</option>
    <option value="65">Venezuela</option>
    <option value="66">Zambia</option>
    <option value="67">Slovenia</option>
    <option value="68">Malta</option>
    <option value="69">Gibraltar</option>
    <option value="70">Sri Lanka</option>
    <option value="71">Oman</option>
    <option value="72">United Arab Emirates</option>
    <option value="73">Macau</option>
    <option value="75">Liechtenstein</option>
    <option value="76">Belarus</option>
    <option value="77">Afghanistan</option>
    <option value="78">Albania</option>
    <option value="79">American Samoa</option>
    <option value="80">Andorra</option>
    <option value="81">Angola</option>
    <option value="82">Anguilla</option>
    <option value="83">Antarctica</option>
    <option value="84">Antigua And Barbuda</option>
    <option value="85">Armenia</option>
    <option value="86">Aruba</option>
    <option value="87">Azerbaijan</option>
    <option value="88">Bahrain</option>
    <option value="89">Bangladesh</option>
    <option value="90">Belize</option>
    <option value="91">Benin</option>
    <option value="92">Bhutan</option>
    <option value="93">Bolivia</option>
    <option value="94">Bosnia and Herzegovina</option>
    <option value="95">Botswana</option>
    <option value="96">Bouvet Island</option>
    <option value="97">British Indian Ocean Territory</option>
    <option value="98">Brunei Darussalam</option>
    <option value="99">Burkina Faso</option>
    <option value="100">Burundi</option>
    <option value="101">Cambodia</option>
    <option value="102">Cameroon</option>
    <option value="103">Cape Verde</option>
    <option value="104">Cayman Islands</option>
    <option value="105">Central African Republic</option>
    <option value="106">Chad</option>
    <option value="107">Christmas Island</option>
    <option value="108">Cocos (Keeling) Islands</option>
    <option value="109">Colombia</option>
    <option value="110">Comoros</option>
    <option value="111">Republic of Congo</option>
    <option value="112">Democratic Republic of the Congo</option>
    <option value="113">Cook Islands</option>
    <option value="114">Costa Rica</option>
    <option value="115">Côte d'Ivoire</option>
    <option value="116">Croatia</option>
    <option value="117">Cuba</option>
    <option value="118">Djibouti</option>
    <option value="119">Dominica</option>
    <option value="120">Dominican Republic</option>
    <option value="121">Ecuador</option>
    <option value="122">El Salvador</option>
    <option value="123">Equatorial Guinea</option>
    <option value="124">Eritrea</option>
    <option value="125">Estonia</option>
    <option value="126">Ethiopia</option>
    <option value="127">Falkland Islands</option>
    <option value="128">Faroe Islands</option>
    <option value="129">French Guiana</option>
    <option value="130">French Polynesia</option>
    <option value="131">French Southern Lands</option>
    <option value="132">Gabon</option>
    <option value="133">Gambia</option>
    <option value="134">Georgia</option>
    <option value="135">Ghana</option>
    <option value="136">Greenland</option>
    <option value="137">Grenada</option>
    <option value="138">Guadeloupe</option>
    <option value="139">Guam</option>
    <option value="140">Guatemala</option>
    <option value="141">Guinea</option>
    <option value="142">Guinea-Bissau</option>
    <option value="143">Guyana</option>
    <option value="144">Haiti</option>
    <option value="145">Heard and McDonald Islands</option>
    <option value="146">Vatican City</option>
    <option value="147">Honduras</option>
    <option value="148">Iran</option>
    <option value="149">Iraq</option>
    <option value="150">Kazakhstan</option>
    <option value="151">Kenya</option>
    <option value="152">Kiribati</option>
    <option value="153">Korea, North</option>
    <option value="154">Kuwait</option>
    <option value="155">Kyrgyzstan</option>
    <option value="156">Laos</option>
    <option value="157">Latvia</option>
    <option value="158">Lesotho</option>
    <option value="159">Liberia</option>
    <option value="160">Libya</option>
    <option value="161">Lithuania</option>
    <option value="162">Macedonia</option>
    <option value="163">Madagascar</option>
    <option value="164">Malawi</option>
    <option value="165">Maldives</option>
    <option value="166">Mali</option>
    <option value="167">Marshall Islands</option>
    <option value="168">Martinique</option>
    <option value="169">Mauritania</option>
    <option value="170">Mauritius</option>
    <option value="171">Mayotte</option>
    <option value="172">Micronesia</option>
    <option value="173">Moldova</option>
    <option value="174">Monaco</option>
    <option value="175">Mongolia</option>
    <option value="176">Montserrat</option>
    <option value="177">Morocco</option>
    <option value="178">Mozambique</option>
    <option value="179">Myanmar</option>
    <option value="180">Namibia</option>
    <option value="181">Nauru</option>
    <option value="182">Nepal</option>
    <option value="184">New Caledonia</option>
    <option value="185">Nicaragua</option>
    <option value="186">Niger</option>
    <option value="187">Nigeria</option>
    <option value="188">Niue</option>
    <option value="189">Norfolk Island</option>
    <option value="190">Northern Mariana Islands</option>
    <option value="191">Palau</option>
    <option value="192">Palestine</option>
    <option value="193">Panama</option>
    <option value="194">Papua New Guinea</option>
    <option value="195">Paraguay</option>
    <option value="196">Peru</option>
    <option value="197">Pitcairn</option>
    <option value="198">Puerto Rico</option>
    <option value="199">Qatar</option>
    <option value="200">Reunion</option>
    <option value="201">Rwanda</option>
    <option value="202">Saint Helena, Ascension And Tristan da Cunha</option>
    <option value="203">Saint Kitts And Nevis</option>
    <option value="204">Saint Lucia</option>
    <option value="205">Saint Pierre and Miquelon</option>
    <option value="206">Saint Vincent And The Grenadines</option>
    <option value="207">Samoa</option>
    <option value="208">San Marino</option>
    <option value="209">Sao Tome And Principe</option>
    <option value="210">Senegal</option>
    <option value="212">Seychelles</option>
    <option value="213">Sierra Leone</option>
    <option value="214">Solomon Islands</option>
    <option value="215">Somalia</option>
    <option value="216">Suriname</option>
    <option value="217">Svalbard and Jan Mayen Islands</option>
    <option value="218">Eswatini</option>
    <option value="219">Syria</option>
    <option value="220">Tajikistan</option>
    <option value="221">Tanzania</option>
    <option value="222">Timor-Leste</option>
    <option value="223">Togo</option>
    <option value="224">Tokelau</option>
    <option value="225">Tonga</option>
    <option value="226">Tunisia</option>
    <option value="227">Turkmenistan</option>
    <option value="228">Turks And Caicos Islands</option>
    <option value="229">Tuvalu</option>
    <option value="230">Uganda</option>
    <option value="231">Ukraine</option>
    <option value="232">United States Minor Outlying Islands</option>
    <option value="233">Uruguay</option>
    <option value="234">Uzbekistan</option>
    <option value="235">Vanuatu</option>
    <option value="236">Vietnam</option>
    <option value="237">Virgin Islands, British</option>
    <option value="238">Virgin Islands, U.S.</option>
    <option value="239">Wallis and Futuna Islands</option>
    <option value="240">Western Sahara</option>
    <option value="241">Yemen</option>
    <option value="242">Zimbabwe</option>
    <option value="501">Åland</option>
    <option value="502">Bonaire, Saint Eustatius and Saba</option>
    <option value="503">Saint Barthélemy</option>
    <option value="504">Curaçao</option>
    <option value="505">Guernsey</option>
    <option value="506">Isle of Man</option>
    <option value="507">Jersey</option>
    <option value="508">Saint Martin (French part)</option>
    <option value="509">Montenegro</option>
    <option value="510">South Georgia and South Sandwich Islands</option>
    <option value="511">Serbia</option>
    <option value="512">Sint Maarten</option>
    <option value="515">Kosovo</option>
    <option value="516">South Sudan</option>


    </select>
</div>





<style type="text/css">
    .signup-bottom .form-line{ margin-bottom: 0 }
    .form-line .compulsory{top:15px;}
    .form-line-checkbox .compulsory{top:5px;}
    #form-tax-details{ display: none}
    .form-error-info{ color:#f00; font-size: 12px}
    .form-error input, .form-error select { border-color:#f00}
    #form-alert{ margin:35px 35px 0;}
    #form-alert p{ margin:5px 0 0;}
    .signup-bottom button:disabled{ background:#999}


    @media (max-width: 736px) { 
        .signup-box .signup-box-item{  padding:45px 45px 0}
        .signup-box .signup-box-item:nth-child(){ padding-bottom:20px}
    }
  

</style>


<script>
var brandName = "<?php echo $uri_path_brand; ?>";    
(function($){

var changePaymentInputs = function(e){
         for (var i = 0; i < payments.length; i++) {


                var pymId = "";
                if(payments[i].hasOwnProperty('ID')){ 
                    pymId = payments[i]["ID"]
                }
                else if(payments[i].hasOwnProperty('Id')){
                    pymId = payments[i]["Id"]
                }


         if(pymId==$('#PaymentMethodID').val()){           
             //console.log(payments[i]);
             var paymentDetails="";
             var paymentCryptoCountryOpt="";
             for (var p = 0; p < payments[i]["Fields"].length; p++) {
                 var pField =payments[i]["Fields"][p];
                 var req="";
                 var reqAttr="";
                 pdemailreq="";

                var pymfId = "";
                if(pField.hasOwnProperty('ID')){ 
                    pymfId = pField["ID"]
                }
                else if(pField.hasOwnProperty('Id')){
                    pymfId = pField["Id"]
                }



                 if(pField['Required']){
                     req=requiredSpan;
                     reqAttr='required';
                 }
                 if(pymfId==10||pymfId==55){
                    paymentCryptoCountryOpt=$('#crypto_temp_list').html();
                    pdemailreq =' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="mail@domain.com"';
                 }

                 if(pymfId==60){
                    pdemailreq =' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="mail@domain.com"';
                 }


                 // if Crypto & field Country
                 if(pymId==22 && pymfId==56 ){

                    paymentDetails+='<div class="form-line">'+req+'<select '+reqAttr+pdemailreq+'  id="p_'+pymfId+'" data-id="'+pymfId+'"  >'+paymentCryptoCountryOpt+'</select></div>';
                 }else{
                    paymentDetails+='<div class="form-line">'+req+'<input type="text" value="" placeholder="'+pField["Name"]+'" id="p_'+pymfId+'" data-id="'+pymfId+'" '+reqAttr+pdemailreq+' /></div>';

                 }


             }   
             $('#form-payment-details').html(paymentDetails) 
             break;
         }
     }//for
}





/*
Payments Exclude List
6 : Skrill ( MoneyBookers)
 7: Operator Account
 8: Bank Wire Transfer UK
 9: Bank Wire Transfer EU
10: Bank Wire Transfer Other
12: Cheque
13: Click2Pay 
14: ClickAndBıuy 
16: Entropay
17: Bank Wire Transfer Envoy
18: Intercash Prepaid Card
21: ECOPAYZ

paymentsThrone
25: Jetbahis Player Account

 */

 var paymentsExclude = [6,7,8,9,10,12,13,14,16,17,18,21,25];
var paymentsThrone = [25];

    var payments={};

    $.ajax({
    type: "GET",
    url:  "proxy/get.php",
    data:{'m':'paymentmethods'},
    success: function(data){
       // console.log("httpcode: "+ data.status.http_code)
    }
    }).done(function(data){
        if(data.status.http_code==200){
            payments=data.contents;


    if(brandName !== "jackburst" && brandName !== "davegas"){

             for (var i = 0; i < data.contents.length; i++) {
           // for(var p in data.contents) {

                var pymId = "";
                if(data.contents[i].hasOwnProperty('ID')){ 
                    pymId = data.contents[i]["ID"]
                }
                else if(data.contents[i].hasOwnProperty('Id')){
                    pymId = data.contents[i]["Id"]
                }

 
                if(paymentsThrone.indexOf(pymId)>=0){
                  
                  //  console.log(data.contents[i]["Name"]);
                    $('#PaymentMethodID').append('<option value="'+pymId+'">'+data.contents[i]["Name"]+'</option>');
                   

                }// If not in Exclude List

            }//for

            if($('#PaymentMethodID option').length<3){
                $('#PaymentMethodID option').last().attr('selected','selected');
                    changePaymentInputs();
            }


    }else{


             for (var i = 0; i < data.contents.length; i++) {

                var pymId = "";
                if(data.contents[i].hasOwnProperty('ID')){ 
                    pymId = data.contents[i]["ID"]
                }
                else if(data.contents[i].hasOwnProperty('Id')){
                    pymId = data.contents[i]["Id"]
                }

           // for(var p in data.contents) {
                if(paymentsExclude.indexOf(pymId)==-1){
                    
                  //  console.log(data.contents[i]["Name"]);
                    $('#PaymentMethodID').append('<option value="'+pymId+'">'+data.contents[i]["Name"]+'</option>');

                }// If not in Exclude List

            }//for

    }
        }// if 200

    });

var ppCategories={};

    $.ajax({
    type: "GET",
    url:  "proxy/get.php",
    data:{'m':'categories'},
    success: function(data){
       // console.log("httpcode: "+ data.status.http_code)
    }
    }).done(function(data){
        if(data.status.http_code==200){
            ppCategories=data.contents;
            for (var i = 0; i < data.contents.length; i++) {
                 var ctgId = "";
                if(data.contents[i].hasOwnProperty('ID')){ 
                    ctgId = data.contents[i]["ID"]
                }
                else if(data.contents[i].hasOwnProperty('Id')){
                    ctgId = data.contents[i]["Id"]
                }

                    $('#PublishPointCategory').append('<option value="'+ctgId+'">'+data.contents[i]["Name"]+'</option>');
            }//for
        }// if 200
    });


    confirmPass = function(){
   // console.log($('#Password').val(),$('#Password_confirm').val())
    $('#password-comfirm-error').remove()
    $('#Password_confirm').parent('.form-line').removeClass('form-error')
    if($('#Password').val()){
        if($('#Password').val()!==$('#Password_confirm').val()){     
            $('#Password_confirm').focus()
            $('<span class="form-error-info" id="password-comfirm-error">Passwords do not match.</span>').insertAfter('#Password_confirm')
            $('#Password_confirm').parent('.form-line').addClass('form-error')
        }else{
            $('#password-comfirm-error').remove()
            $('#Password_confirm').parent('.form-line').removeClass('form-error')
        }
        
    }
} //confirmPass

formInAction = function(status){
    if(status){
        $('.signup-bottom button').attr('disabled','disabled').html('Sending...');
    }else{
        $('.signup-bottom button').removeAttr('disabled').html('Sign Up');
    }
    
}



var formLoading=false;

$('#signupForm').on('submit',function(e){
    e.preventDefault();

    $('#signupForm .signup-box #form-alert').remove();

    if($('#Password').val()!==$('#Password_confirm').val()){ 
        confirmPass();
        $('#Password_confirm').bind('invalid', function(event) {
        setTimeout(function() { focus();}, 50);
    });
        return false;
     }



    var postData = {};

    postData.BrandID=1;

    if(brandName == "jackburst"){
    postData.BrandID=4;
    postData.CommissionPlanID=75;
    }
    if(brandName == "davegas"){
    postData.BrandID=8;
    postData.CommissionPlanID=101;
    }

    //postData.UserLanguage=$('#UserLanguage').val();
    postData.UserLanguage="en";
    postData.FirstName=$('#FirstName').val();
    postData.Surname=$('#Surname').val();
    postData.Email=$('#Email').val();
    postData.UserName=$('#UserName').val();
    postData.Password=$('#Password').val();
    postData.Country=$('#Country').val();
    
    if($('#City').val()){
        postData.City=$('#City').val();
    }    
    if($('#Address1').val()){
        postData.Address1=$('#Address1').val();
    }    
    if($('#Zip').val()){
        postData.Zip=$('#Zip').val();
    }
    if($('#Skype').val()){
    postData.Skype=$('#Skype').val();
    }
    postData.TelephoneDialCode=$('#TelephoneDialCode').val();
    postData.Telephone=$('#Telephone').val();
    postData.Name=$('#Name').val();
    postData.PublishPointCategory=$('#PublishPointCategory').val();
    //postData.PublishPointLanguage=$('#PublishPointLanguage').val();
    postData.PublishPointLanguage="en";
    postData.PublishPointName=$('#PublishPointName').val();
    postData.URL=$('#URL').val();

    postData.RegisteredForTax=$('#RegisteredForTax:checked').length>0?true:false;

    if(postData.RegisteredForTax){
        postData.TaxCountry=$('#TaxCountry').val();
        postData.CompanyRegistrationNumber=$('#CompanyRegistrationNumber').val();
        postData.TaxRegistrationNumber=$('#TaxRegistrationNumber').val();
    }


    postData.ReceivePromotions=$('#ReceivePromotions:checked').length>0?true:false;

    postData.PayeeName=$('#PayeeName').val();
    postData.PaymentMethodID=$('#PaymentMethodID').val();

    var pmd=[];
    $('#form-payment-details').find('input,select').each(function(e){
        var pmdid=$(this).attr('data-id');
        var pmdval =$(this).val();
        pmd.push({ID:pmdid,Value:pmdval})

    });

    postData.PaymentMethodDetails=pmd;

    

    //console.log(postData);

    var settings = {
        "url": "proxy/post.php",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        "data": postData,
    };


if(!formLoading){
    formLoading=true;
    formInAction(true);
    $.ajax(settings).done(function (response) {
    //console.log(response);
    var res=JSON.parse(response)

        $("html, body").animate({ scrollTop: 0 },500);

        if(res.status==400&& res.Message){
            var errr="";
            if(res.ModelState){
                for (var property in res.ModelState) {
                    if (res.ModelState.hasOwnProperty(property)) {
                        for (var j = 0; j < res.ModelState[property].length; j++) {
                            errr+='<p>'+res.ModelState[property][j]+'</p>';
                        }
                    }
                }         
            }// if ModelState

            $('#signupForm .signup-box').prepend('<div class="alert alert-danger" role="alert" id="form-alert">'+res.Message+errr+'</div>')
        }

        if(res.status==500){
            $('#signupForm .signup-box').prepend('<div class="alert alert-danger" role="alert" id="form-alert">Server Error.</div>')
        }

        if(res.status==200){
            $('#signupForm .signup-box').prepend('<div class="alert alert-success" role="alert" id="form-alert">Your information has been submitted.</div>');
            $('#signupForm').find('input').val('');
            $('#signupForm').find('input[type=checkbox]').prop( "checked", false )
            $('#signupForm').find('textarea').val('');
            $('#signupForm').find('select').val('');
        }
    formLoading=false;
    formInAction(false)

        }).always(function(){
    formLoading=false;
    formInAction(false)

        })

} // if not loading


}); //form submit


$('#Password_confirm').on('change',function(e){
    confirmPass();
   
});

 $('#RegisteredForTax').on('change',function(e){
     if($('#RegisteredForTax:checked').length>0){
         $('#form-tax-details').show()
         $('#form-tax-details').find('input,select').attr('required','required')
     }else{
         $('#form-tax-details').hide()
         $('#form-tax-details').find('input,select').removeAttr('required')
     }
 });
 var requiredSpan = '<span class="compulsory">*</span>';
 var pdemailreq =''
 $('#PaymentMethodID').on('change',changePaymentInputs);

})(jQuery)

</script>

<?php include_once('./inc/footer.php'); ?>

</body>
</html>