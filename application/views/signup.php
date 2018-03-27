<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" type="image/gif" href="<?php echo base_url(); ?>libs/logo/mainlgo.png" />
        <title>Click Giants</title>

        <!-- Bootstrap -->
        <link href="<?PHP echo base_url(); ?>libs/css/bootstrap.min.css"  rel="stylesheet" type="text/css" />
        <link href="<?PHP echo base_url(); ?>libs/css/wonstyle-index.css" rel="stylesheet" type="text/css"/>
        <link href="<?PHP echo base_url(); ?>libs/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>


    <body>
        <!-- Nav Bar -->
        <div class="container-fluid">
            <div class="row" style="border-bottom: 1px solid #ccc;">
                <div class="col-md-12">
                    <nav class="navbar navbar-default padding-top-20 background-none" style="border: none;">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?PHP echo base_url(); ?>"><img src="<?PHP echo base_url(); ?>libs/logo/logo.png" alt="Site Logo" height="60px" style="margin: -20px 50px 0 0;" /></a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="<?php echo base_url(); ?>">Welcome <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Advertisers</a></li>
                                    <li><a href="#">FAQ'S</a></li>
                                    <li><a href="Contact-Us">Contact Us</a></li>
                                    <li><a href="<?PHP echo base_url(); ?>Affiliate-Signup" style="color: #D21112; font-weight: bold;">Sign Up</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel-group" style="margin-top: 30px;">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #0099BC;">
                                    <span style="color: #ffffff; font-size: 23px; font-weight: bold;">Sign Up for Affiliate Account</span>
                                    <span class="fa fa-user-o pull-right" style="color: #ffffff; font-size: 33px; font-weight: bold;"></span>
                                </div>
                                <div class="panel-body">



                                    <?php
                                    $err_msg = $this->session->userdata('err_msg');
                                    if (isset($err_msg)) {
                                        ?>
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content"">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Error : </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php
                                                        echo $this->session->userdata('err_msg');
                                                        $this->session->unset_userdata('err_msg');
                                                        ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <div id="messages"></div>
                                    <form class="form-horizontal" action="<?php echo base_url(); ?>user_registration/check_info" method="post" id="form_user">
                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgusrnm" style="text-align: left;">Full Name <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgusrnm = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgusrnm',
                                                    'placeholder' => 'Full Name',
                                                    'name' => 'cgusrnm'
                                                );
                                                echo form_input($cgusrnm);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgnnm" style="text-align: left;">Nick Name <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgnnm = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgnnm',
                                                    'placeholder' => 'Nick Name',
                                                    'name' => 'cgnnm'
                                                );
                                                echo form_input($cgnnm);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgeml" style="text-align: left;">Email <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgeml = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgeml',
                                                    'placeholder' => 'Email Address',
                                                    'name' => 'cgeml'
                                                );
                                                echo form_input($cgeml);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgunm" style="text-align: left;">Username <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgunm = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgunm',
                                                    'placeholder' => 'Username',
                                                    'name' => 'cgunm'
                                                );
                                                echo form_input($cgunm);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgpsd" style="text-align: left;">Password <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgpsd = array(
                                                    'type' => 'password',
                                                    'class' => 'form-control',
                                                    'id' => 'cgpsd',
                                                    'placeholder' => 'Password',
                                                    'name' => 'cgpsd'
                                                );
                                                echo form_input($cgpsd);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="ccgpsd" style="text-align: left;">Confirm Password <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $ccgpsd = array(
                                                    'type' => 'password',
                                                    'class' => 'form-control',
                                                    'id' => 'ccgpsd',
                                                    'placeholder' => 'Confirm Password',
                                                    'name' => 'ccgpsd'
                                                );
                                                echo form_input($ccgpsd);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgcnm" style="text-align: left;">Company Name</label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgcnm = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgcnm',
                                                    'placeholder' => 'Company Name',
                                                    'name' => 'cgcnm',
                                                );
                                                echo form_input($cgcnm);
                                                ?>
                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgadr" style="text-align: left;">Address <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea name="cgadr" class="form-control" id="cgadr" placeholder="Postal Address"></textarea>
                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgct" style="text-align: left;">City <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgct = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgct',
                                                    'placeholder' => 'City',
                                                    'name' => 'cgct'
                                                );
                                                echo form_input($cgct);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgcnt" style="text-align: left;">Country <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">
                                                <?php
                                                $country = array(
                                                    "" => "Select Country",
                                                    "Afghanistan" => "Afghanistan",
                                                    "Albania" => "Albania",
                                                    "Algeria" => "Algeria",
                                                    "American Samoa" => "American Samoa",
                                                    "Andorra" => "Andorra",
                                                    "Angola" => "Angola",
                                                    "Anguilla" => "Anguilla",
                                                    "Antarctica" => "Antarctica",
                                                    "Antigua and Barbuda" => "Antigua and Barbuda",
                                                    "Argentina" => "Argentina",
                                                    "Armenia" => "Armenia",
                                                    "Aruba" => "Aruba",
                                                    "Australia" => "Australia",
                                                    "Austria" => "Austria",
                                                    "Azerbaijan" => "Azerbaijan",
                                                    "Bahamas" => "Bahamas",
                                                    "Bahrain" => "Bahrain",
                                                    "Bangladesh" => "Bangladesh",
                                                    "Barbados" => "Barbados",
                                                    "Belarus" => "Belarus",
                                                    "Belgium" => "Belgium",
                                                    "Belize" => "Belize",
                                                    "Benin" => "Benin",
                                                    "Bermuda" => "Bermuda",
                                                    "Bhutan" => "Bhutan",
                                                    "Bolivia" => "Bolivia",
                                                    "Bosnia and Herzegowina" => "Bosnia and Herzegowina",
                                                    "Botswana" => "Botswana",
                                                    "Bouvet Island" => "Bouvet Island",
                                                    "Brazil" => "Brazil",
                                                    "British Indian Ocean Territory" => "British Indian Ocean Territory",
                                                    "Brunei Darussalam" => "Brunei Darussalam",
                                                    "Bulgaria" => "Bulgaria",
                                                    "Burkina Faso" => "Burkina Faso",
                                                    "Burundi" => "Burundi",
                                                    "Cambodia" => "Cambodia",
                                                    "Cameroon" => "Cameroon",
                                                    "Canada" => "Canada",
                                                    "Cape Verde" => "Cape Verde",
                                                    "Cayman Islands" => "Cayman Islands",
                                                    "Central African Republic" => "Central African Republic",
                                                    "Chad" => "Chad",
                                                    "Chile" => "Chile",
                                                    "China" => "China",
                                                    "Christmas Island" => "Christmas Island",
                                                    "Cocos (Keeling) Islands" => "Cocos (Keeling) Islands",
                                                    "Colombia" => "Colombia",
                                                    "Comoros" => "Comoros",
                                                    "Congo" => "Congo",
                                                    "Cook Islands" => "Cook Islands",
                                                    "Costa Rica" => "Costa Rica",
                                                    "Cote D'Ivoire" => "Cote D'Ivoire",
                                                    "Croatia" => "Croatia",
                                                    "Cuba" => "Cuba",
                                                    "Cyprus" => "Cyprus",
                                                    "Czech Republic" => "Czech Republic",
                                                    "Denmark" => "Denmark",
                                                    "Djibouti" => "Djibouti",
                                                    "Dominica" => "Dominica",
                                                    "Dominican Republic" => "Dominican Republic",
                                                    "East Timor" => "East Timor",
                                                    "Ecuador" => "Ecuador",
                                                    "Egypt" => "Egypt",
                                                    "El Salvador" => "El Salvador",
                                                    "Equatorial Guinea" => "Equatorial Guinea",
                                                    "Eritrea" => "Eritrea",
                                                    "Estonia" => "Estonia",
                                                    "Ethiopia" => "Ethiopia",
                                                    "Falkland Islands (Malvinas)" => "Falkland Islands (Malvinas)",
                                                    "Faroe Islands" => "Faroe Islands",
                                                    "Fiji" => "Fiji",
                                                    "Finland" => "Finland",
                                                    "France" => "France",
                                                    "France, Metropolitan" => "France, Metropolitan",
                                                    "French Guiana" => "French Guiana",
                                                    "French Polynesia" => "French Polynesia",
                                                    "French Southern Territories" => "French Southern Territories",
                                                    "Gabon" => "Gabon",
                                                    "Gambia" => "Gambia",
                                                    "Georgia" => "Georgia",
                                                    "Germany" => "Germany",
                                                    "Ghana" => "Ghana",
                                                    "Gibraltar" => "Gibraltar",
                                                    "Greece" => "Greece",
                                                    "Greenland" => "Greenland",
                                                    "Grenada" => "Grenada",
                                                    "Guadeloupe" => "Guadeloupe",
                                                    "Guam" => "Guam",
                                                    "Guatemala" => "Guatemala",
                                                    "Guinea" => "Guinea",
                                                    "Guinea-bissau" => "Guinea-bissau",
                                                    "Guyana" => "Guyana",
                                                    "Haiti" => "Haiti",
                                                    "Heard and Mc Donald Islands" => "Heard and Mc Donald Islands",
                                                    "Honduras" => "Honduras",
                                                    "Hong Kong" => "Hong Kong",
                                                    "Hungary" => "Hungary",
                                                    "Iceland" => "Iceland",
                                                    "India" => "India",
                                                    "Indonesia" => "Indonesia",
                                                    "Iran (Islamic Republic of)" => "Iran (Islamic Republic of)",
                                                    "Iraq" => "Iraq",
                                                    "Ireland" => "Ireland",
                                                    "Israel" => "Israel",
                                                    "Italy" => "Italy",
                                                    "Jamaica" => "Jamaica",
                                                    "Japan" => "Japan",
                                                    "Jordan" => "Jordan",
                                                    "Kazakhstan" => "Kazakhstan",
                                                    "Kenya" => "Kenya",
                                                    "Kiribati" => "Kiribati",
                                                    "Korea, Democratic People's Republic of" => "Korea, Democratic People's Republic of",
                                                    "Korea, Republic of" => "Korea, Republic of",
                                                    "Kuwait" => "Kuwait",
                                                    "Kyrgyzstan" => "Kyrgyzstan",
                                                    "Lao People's Democratic Republic" => "Lao People's Democratic Republic",
                                                    "Latvia" => "Latvia",
                                                    "Lebanon" => "Lebanon",
                                                    "Lesotho" => "Lesotho",
                                                    "Liberia" => "Liberia",
                                                    "Libyan Arab Jamahiriya" => "Libyan Arab Jamahiriya",
                                                    "Liechtenstein" => "Liechtenstein",
                                                    "Lithuania" => "Lithuania",
                                                    "Luxembourg" => "Luxembourg",
                                                    "Macau" => "Macau",
                                                    "Macedonia, The Former Yugoslav Republic of" => "Macedonia, The Former Yugoslav Republic of",
                                                    "Madagascar" => "Madagascar",
                                                    "Malawi" => "Malawi",
                                                    "Malaysia" => "Malaysia",
                                                    "Maldives" => "Maldives",
                                                    "Mali" => "Mali",
                                                    "Malta" => "Malta",
                                                    "Marshall Islands" => "Marshall Islands",
                                                    "Martinique" => "Martinique",
                                                    "Mauritania" => "Mauritania",
                                                    "Mauritius" => "Mauritius",
                                                    "Mayotte" => "Mayotte",
                                                    "Mexico" => "Mexico",
                                                    "Micronesia, Federated States of" => "Micronesia, Federated States of",
                                                    "Moldova, Republic of" => "Moldova, Republic of",
                                                    "Monaco" => "Monaco",
                                                    "Mongolia" => "Mongolia",
                                                    "Montserrat" => "Montserrat",
                                                    "Morocco" => "Morocco",
                                                    "Mozambique" => "Mozambique",
                                                    "Myanmar" => "Myanmar",
                                                    "Namibia" => "Namibia",
                                                    "Nauru" => "Nauru",
                                                    "Nepal" => "Nepal",
                                                    "Netherlands" => "Netherlands",
                                                    "Netherlands Antilles" => "Netherlands Antilles",
                                                    "New Caledonia" => "New Caledonia",
                                                    "New Zealand" => "New Zealand",
                                                    "Nicaragua" => "Nicaragua",
                                                    "Niger" => "Niger",
                                                    "Nigeria" => "Nigeria",
                                                    "Niue" => "Niue",
                                                    "Norfolk Island" => "Norfolk Island",
                                                    "Northern Mariana Islands" => "Northern Mariana Islands",
                                                    "Norway" => "Norway",
                                                    "Oman" => "Oman",
                                                    "Pakistan" => "Pakistan",
                                                    "Palau" => "Palau",
                                                    "Panama" => "Panama",
                                                    "Papua New Guinea" => "Papua New Guinea",
                                                    "Paraguay" => "Paraguay",
                                                    "Peru" => "Peru",
                                                    "Philippines" => "Philippines",
                                                    "Pitcairn" => "Pitcairn",
                                                    "Poland" => "Poland",
                                                    "Portugal" => "Portugal",
                                                    "Puerto Rico" => "Puerto Rico",
                                                    "Qatar" => "Qatar",
                                                    "Reunion" => "Reunion",
                                                    "Romania" => "Romania",
                                                    "Russian Federation" => "Russian Federation",
                                                    "Rwanda" => "Rwanda",
                                                    "Saint Kitts and Nevis" => "Saint Kitts and Nevis",
                                                    "Saint Lucia" => "Saint Lucia",
                                                    "Saint Vincent and the Grenadines" => "Saint Vincent and the Grenadines",
                                                    "Samoa" => "Samoa",
                                                    "San Marino" => "San Marino",
                                                    "Sao Tome and Principe" => "Sao Tome and Principe",
                                                    "Saudi Arabia" => "Saudi Arabia",
                                                    "Senegal" => "Senegal",
                                                    "Seychelles" => "Seychelles",
                                                    "Sierra Leone" => "Sierra Leone",
                                                    "Singapore" => "Singapore",
                                                    "Slovakia (Slovak Republic)" => "Slovakia (Slovak Republic)",
                                                    "Slovenia" => "Slovenia",
                                                    "Solomon Islands" => "Solomon Islands",
                                                    "Somalia" => "Somalia",
                                                    "South Africa" => "South Africa",
                                                    "South Georgia and the South Sandwich Islands" => "South Georgia and the South Sandwich Islands",
                                                    "Spain" => "Spain",
                                                    "Sri Lanka" => "Sri Lanka",
                                                    "St. Helena" => "St. Helena",
                                                    "St. Pierre and Miquelon" => "St. Pierre and Miquelon",
                                                    "Sudan" => "Sudan",
                                                    "Suriname" => "Suriname",
                                                    "Svalbard and Jan Mayen Islands" => "Svalbard and Jan Mayen Islands",
                                                    "Swaziland" => "Swaziland",
                                                    "Sweden" => "Sweden",
                                                    "Switzerland" => "Switzerland",
                                                    "Syrian Arab Republic" => "Syrian Arab Republic",
                                                    "Taiwan" => "Taiwan",
                                                    "Tajikistan" => "Tajikistan",
                                                    "Tanzania, United Republic of" => "Tanzania, United Republic of",
                                                    "Thailand" => "Thailand",
                                                    "Togo" => "Togo",
                                                    "Tokelau" => "Tokelau",
                                                    "Tonga" => "Tonga",
                                                    "Trinidad and Tobago" => "Trinidad and Tobago",
                                                    "Tunisia" => "Tunisia",
                                                    "Turkey" => "Turkey",
                                                    "Turkmenistan" => "Turkmenistan",
                                                    "Turks and Caicos Islands" => "Turks and Caicos Islands",
                                                    "Tuvalu" => "Tuvalu",
                                                    "Uganda" => "Uganda",
                                                    "Ukraine" => "Ukraine",
                                                    "United Arab Emirates" => "United Arab Emirates",
                                                    "United Kingdom" => "United Kingdom",
                                                    "United States" => "United States",
                                                    "United States Minor Outlying Islands" => "United States Minor Outlying Islands",
                                                    "Uruguay" => "Uruguay",
                                                    "Uzbekistan" => "Uzbekistan",
                                                    "Vanuatu" => "Vanuatu",
                                                    "Vatican City State (Holy See)" => "Vatican City State (Holy See)",
                                                    "Venezuela" => "Venezuela",
                                                    "Viet Nam" => "Viet Nam",
                                                    "Virgin Islands (British)" => "Virgin Islands (British)",
                                                    "Virgin Islands (U.S.)" => "Virgin Islands (U.S.)",
                                                    "Wallis and Futuna Islands" => "Wallis and Futuna Islands",
                                                    "Western Sahara" => "Western Sahara",
                                                    "Yemen" => "Yemen",
                                                    "Serbia" => "Serbia",
                                                    "The Democratic Republic of Congo" => "The Democratic Republic of Congo",
                                                    "Zambia" => "Zambia",
                                                    "Zimbabwe" => "Zimbabwe",
                                                    "Jersey" => "Jersey",
                                                    "St. Barthelemy" => "St. Barthelemy",
                                                    "St. Eustatius" => "St. Eustatius",
                                                    "Canary Islands" => "Canary Islands",
                                                    "Montenegro" => "Montenegro"
                                                );
                                                $cntratt = 'class = "form-control" id = "cgcnt"';
                                                echo form_dropdown('cgcnt', $country, '', $cntratt);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgzn" style="text-align: left;">State <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgzn = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgzn',
                                                    'placeholder' => 'State',
                                                    'name' => 'cgzn'
                                                );
                                                echo form_input($cgzn);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgzc" style="text-align: left;">Zip Code <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgzc = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgzc',
                                                    'placeholder' => 'Zip Code',
                                                    'name' => 'cgzc'
                                                );
                                                echo form_input($cgzc);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgpn" style="text-align: left;">Phone Number <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgpn = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgpn',
                                                    'placeholder' => 'Phone Number',
                                                    'name' => 'cgpn'
                                                );
                                                echo form_input($cgpn);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgsn" style="text-align: left;">Skype Name <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgsn = array(
                                                    'type' => 'text',
                                                    'class' => 'form-control',
                                                    'id' => 'cgsn',
                                                    'placeholder' => 'Skype Name',
                                                    'name' => 'cgsn'
                                                );
                                                echo form_input($cgsn);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="sn" style="text-align: left;">Payout <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                            <div class="col-sm-8">

                                                <?php
                                                $pmatt = array(
                                                    '' => 'Select Payment Method',
                                                    'Payoneer' => 'Payoneer',
                                                    'Web Money' => 'Web Money',
                                                    'Skril' => 'Skril',
                                                    'Paypal' => 'Paypal',
                                                    'wire' => 'wire',
                                                    'Others' => 'Others'
                                                );
                                                $pmotrsatt = 'class = "form-control" id = "pm"';
                                                echo form_dropdown('pm', $pmatt, '', $pmotrsatt);
                                                ?>
                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-sm-4 control-label" for="cgpeml" style="text-align: left;">Payout Email</label>
                                            <div class="col-sm-8">

                                                <?php
                                                $cgpeml = array(
                                                    'type' => 'email',
                                                    'class' => 'form-control',
                                                    'id' => 'cgpeml',
                                                    'placeholder' => 'Payout Email Address',
                                                    'name' => 'cgpeml',
                                                    'title' => 'Registered Email Address for Payout.'
                                                );
                                                echo form_input($cgpeml);
                                                ?>

                                                <span class="form-control-feedback"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">        
                                            <div class="col-sm-offset-4 col-sm-8">
                                                <button type="submit" class="btn btn-info">Create Account</button>
                                                <?php
                                                /* $cgaffsmt = array(
                                                  'type' => 'submit',
                                                  'class' => 'btn btn-info',
                                                  'value' => 'Create Account',
                                                  'name' => 'cgaffsmt'
                                                  );
                                                  echo form_input($cgaffsmt); */
                                                ?>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid" style="padding: 10px 0; background: #444; color: #fff;">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-md-5 col-xs-4 text-right">
                            <h3>
                                <u>Postal Address</u>
                            </h3>
                            <span style="color:#cccccc;">
                                H/N # 160/5,<br/>
                                R/N # 2B,<br/>
                                Banani<br/>
                                Dhaka, Dhaka-1200.
                            </span>
                        </div>
                        <div class="col-md-2 col-xs-4" style="margin-top: 30px;">
                            <a href="<?PHP echo base_url(); ?>"><img src="<?PHP echo base_url(); ?>libs/logo/logo_footer.png" alt="Site Logo" height="80px" class="center-block img-responsive" /></a>
                        </div>
                        <div class="col-md-5 col-xs-4">
                            <span class="fa fa-facebook-square fa-2x" style="margin-right: 10px;"></span>
                            <span class="fa fa-twitter-square fa-2x" style="margin-right: 10px;"></span>
                            <span class="fa fa-google-plus-square fa-2x" style="margin-right: 10px;"></span>
                            <span class="fa fa-linkedin-square fa-2x" style="margin-right: 10px;"></span><br/><br/>
                            <span style="color:#cccccc;">
                                © 2017 ClickGiants.com<br/>
                                All rights reserve
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!------ jQuery File ------->
        <script type="text/javascript" src="libs/js/jquery.min.js"></script>
        <script type="text/javascript" src="libs/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="libs/js/ajaxformsubmit.js"></script>
    </body>
</html>