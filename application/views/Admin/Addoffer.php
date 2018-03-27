<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-group" style="margin-top: 30px; border: 1px solid #0099BC; border-radius: 3px;">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background: #0099BC;">
                            <span style="color: #ffffff; font-size: 23px; font-weight: bold;">Add Offer</span>
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
                            <?php
                            $frm_att = array('class' => 'form-horizontal', 'id' => 'form_user');
                            echo form_open(base_url() . 'Add_pdct/check_info', $frm_att);
                            ?>
                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="ttl" style="text-align: left;">Offer Title <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                <div class="col-sm-8">

                                    <?php
                                    $cgusrnm = array(
                                        'type' => 'text',
                                        'class' => 'form-control',
                                        'id' => 'ttl',
                                        'placeholder' => 'Offer Title',
                                        'name' => 'ttl'
                                    );
                                    echo form_input($cgusrnm);
                                    ?>

                                    <span class="form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="ml" style="text-align: left;">Main Link <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                <div class="col-sm-8">

                                    <?php
                                    $cgnnm = array(
                                        'type' => 'text',
                                        'class' => 'form-control',
                                        'id' => 'ml',
                                        'placeholder' => 'Main Link',
                                        'name' => 'ml'
                                    );
                                    echo form_input($cgnnm);
                                    ?>

                                    <span class="form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="ctgr" style="text-align: left;">Category  <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                <div class="col-sm-8">

                                    <select name="ctgr" id="ctgr" class="form-control">
                                        <option value="">Select Category</option>
                                        <?php
                                        foreach ($catg as $value) {
                                            echo '<option value="' . $value->pc . '">' . $value->pc . '</option>';
                                        }
                                        ?>
                                    </select>

                                    <?php
//                                    $options = array(
//                                        '' => 'Select Category',
//                                        'Adult' => 'Adult',
//                                        'Health' => 'Health',
//                                        'Beauty' => 'Beauty',
//                                        'Medicine' => 'Medicine',
//                                        'Toys' => 'Toys'
//                                    );
//                                    $att = 'class = "form-control" id = "ctgr"';
//                                    echo form_dropdown('ctgr', $options, '', $att);
                                    ?>
                                    <span class="form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="dtl" style="text-align: left;">Description <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                <div class="col-sm-8">
                                    <?php
                                    $txtar = array(
                                        'name' => 'dtl',
                                        'class' => 'form-control',
                                        'id' => 'dtl',
                                        'placeholder' => 'Offer Description'
                                    );

                                    echo form_textarea($txtar);
                                    ?>
                                    <span class="form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="alwc" style="text-align: left;">Allowed Country <span style="color: #E67E22; font-weight: bold;">*</span></label>
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
                                    $cntratt = 'class = "form-control" id = "alwc"';
                                    echo form_dropdown('alwc', $country, '', $cntratt);
                                    ?>

                                    <span class="form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="col-sm-4 control-label" for="ppc" style="text-align: left;">Pay <span style="color: #E67E22; font-weight: bold;">*</span></label>
                                <div class="col-sm-8">

                                    <?php
                                    $cgnnm = array(
                                        'type' => 'text',
                                        'class' => 'form-control',
                                        'id' => 'ppc',
                                        'placeholder' => 'Pay Per Conversation',
                                        'name' => 'ppc'
                                    );
                                    echo form_input($cgnnm);
                                    ?>

                                    <span class="form-control-feedback"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                </div>
                            </div>

                            <div class="form-group">        
                                <div class="col-sm-offset-4 col-sm-8">

                                    <?php
                                    $cgaffsmt = array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-info',
                                        'value' => 'Create Account',
                                        'name' => 'cgaffsmt'
                                    );
                                    echo form_input($cgaffsmt);
                                    ?>

                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>