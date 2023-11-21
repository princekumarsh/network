@extends('layouts.front-end.app')
@section('content')

    <section class="page-header bg_img"
        data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/breadcrumb/63821bed5b0bb1669471213.jpg">
        <div class="container">
            <div class="page-header-wrapper">
                <h2 class="title">Register</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="https://script.viserlab.com/mlmlab">
                            Home </a>
                    </li>
                    <li>Register</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="account-section padding-bottom padding-top">
        <div class="container">
            <div class="account-wrapper">
                <div class="login-area account-area">
                    <div class="row m-0">
                        <div class="col-lg-4 p-0">
                            <div class="change-catagory-area bg_img"
                                data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/register/63821af2b19aa1669470962.jpg">
                                <h4 class="title">Welcome To MLMLAB</h4>
                                <p>Already have an account?</p>
                                <a class="custom-button account-control-button"
                                    href="https://script.viserlab.com/mlmlab/user/login">Login</a>
                            </div>
                        </div>
                        <div class="col-lg-8 p-0">
                            <div class="common-form-style bg-one create-account">
                                <h4 class="title">Create Your Account</h4>
                                <p class="mb-sm-4 mb-3">Haven&#039;t registered yet! don&#039;t worry just fillip all
                                    the information below and get your account now.</p>
                                <form class="create-account-form row verify-gcaptcha" method="post"
                                    action="https://script.viserlab.com/mlmlab/user/register">
                                    <input type="hidden" name="_token" value="9aYe2sHx3yJtebAUVo38xddRkovrkjWZ0BGpa1Qa">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Referral Username</label>
                                            <input class="referral ref_id" name="referral" type="text" value=""
                                                autocomplete="off" required>
                                            <div id="ref"></div>
                                            <span id="referral"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Position</label>
                                            <select class="position" id="position" name="position" required disabled>
                                                <option value="">Select position*</option>
                                                <option value="1">Left</option>
                                                <option value="2">Right</option>
                                            </select>
                                            <span id="position-test"><span class="text--danger"></span></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Username</label>
                                            <input class="checkUser" name="username" type="text" value="" required>
                                            <small class="text--danger usernameExist"></small>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="checkUser" name="email" type="email" value="" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <select name="country">
                                                <option data-mobile_code="93" data-code="AF" value="Afghanistan">
                                                    Afghanistan</option>
                                                <option data-mobile_code="358" data-code="AX" value="Aland Islands">
                                                    Aland Islands</option>
                                                <option data-mobile_code="355" data-code="AL" value="Albania">
                                                    Albania</option>
                                                <option data-mobile_code="213" data-code="DZ" value="Algeria">
                                                    Algeria</option>
                                                <option data-mobile_code="1684" data-code="AS" value="AmericanSamoa">
                                                    AmericanSamoa</option>
                                                <option data-mobile_code="376" data-code="AD" value="Andorra">
                                                    Andorra</option>
                                                <option data-mobile_code="244" data-code="AO" value="Angola">
                                                    Angola</option>
                                                <option data-mobile_code="1264" data-code="AI" value="Anguilla">
                                                    Anguilla</option>
                                                <option data-mobile_code="672" data-code="AQ" value="Antarctica">
                                                    Antarctica</option>
                                                <option data-mobile_code="1268" data-code="AG"
                                                    value="Antigua and Barbuda">
                                                    Antigua and Barbuda</option>
                                                <option data-mobile_code="54" data-code="AR" value="Argentina">
                                                    Argentina</option>
                                                <option data-mobile_code="374" data-code="AM" value="Armenia">
                                                    Armenia</option>
                                                <option data-mobile_code="297" data-code="AW" value="Aruba">
                                                    Aruba</option>
                                                <option data-mobile_code="61" data-code="AU" value="Australia">
                                                    Australia</option>
                                                <option data-mobile_code="43" data-code="AT" value="Austria">
                                                    Austria</option>
                                                <option data-mobile_code="994" data-code="AZ" value="Azerbaijan">
                                                    Azerbaijan</option>
                                                <option data-mobile_code="1242" data-code="BS" value="Bahamas">
                                                    Bahamas</option>
                                                <option data-mobile_code="973" data-code="BH" value="Bahrain">
                                                    Bahrain</option>
                                                <option data-mobile_code="880" data-code="BD" value="Bangladesh">
                                                    Bangladesh</option>
                                                <option data-mobile_code="1246" data-code="BB" value="Barbados">
                                                    Barbados</option>
                                                <option data-mobile_code="375" data-code="BY" value="Belarus">
                                                    Belarus</option>
                                                <option data-mobile_code="32" data-code="BE" value="Belgium">
                                                    Belgium</option>
                                                <option data-mobile_code="501" data-code="BZ" value="Belize">
                                                    Belize</option>
                                                <option data-mobile_code="229" data-code="BJ" value="Benin">
                                                    Benin</option>
                                                <option data-mobile_code="1441" data-code="BM" value="Bermuda">
                                                    Bermuda</option>
                                                <option data-mobile_code="975" data-code="BT" value="Bhutan">
                                                    Bhutan</option>
                                                <option data-mobile_code="591" data-code="BO"
                                                    value="Plurinational State of Bolivia">
                                                    Plurinational State of Bolivia</option>
                                                <option data-mobile_code="387" data-code="BA"
                                                    value="Bosnia and Herzegovina">
                                                    Bosnia and Herzegovina</option>
                                                <option data-mobile_code="267" data-code="BW" value="Botswana">
                                                    Botswana</option>
                                                <option data-mobile_code="55" data-code="BR" value="Brazil">
                                                    Brazil</option>
                                                <option data-mobile_code="246" data-code="IO"
                                                    value="British Indian Ocean Territory">
                                                    British Indian Ocean Territory</option>
                                                <option data-mobile_code="673" data-code="BN" value="Brunei Darussalam">
                                                    Brunei Darussalam</option>
                                                <option data-mobile_code="359" data-code="BG" value="Bulgaria">
                                                    Bulgaria</option>
                                                <option data-mobile_code="226" data-code="BF" value="Burkina Faso">
                                                    Burkina Faso</option>
                                                <option data-mobile_code="257" data-code="BI" value="Burundi">
                                                    Burundi</option>
                                                <option data-mobile_code="855" data-code="KH" value="Cambodia">
                                                    Cambodia</option>
                                                <option data-mobile_code="237" data-code="CM" value="Cameroon">
                                                    Cameroon</option>
                                                <option data-mobile_code="1" data-code="CA" value="Canada">
                                                    Canada</option>
                                                <option data-mobile_code="238" data-code="CV" value="Cape Verde">
                                                    Cape Verde</option>
                                                <option data-mobile_code=" 345" data-code="KY" value="Cayman Islands">
                                                    Cayman Islands</option>
                                                <option data-mobile_code="236" data-code="CF"
                                                    value="Central African Republic">
                                                    Central African Republic</option>
                                                <option data-mobile_code="235" data-code="TD" value="Chad">
                                                    Chad</option>
                                                <option data-mobile_code="56" data-code="CL" value="Chile">
                                                    Chile</option>
                                                <option data-mobile_code="86" data-code="CN" value="China">
                                                    China</option>
                                                <option data-mobile_code="61" data-code="CX" value="Christmas Island">
                                                    Christmas Island</option>
                                                <option data-mobile_code="61" data-code="CC"
                                                    value="Cocos (Keeling) Islands">
                                                    Cocos (Keeling) Islands</option>
                                                <option data-mobile_code="57" data-code="CO" value="Colombia">
                                                    Colombia</option>
                                                <option data-mobile_code="269" data-code="KM" value="Comoros">
                                                    Comoros</option>
                                                <option data-mobile_code="242" data-code="CG" value="Congo">
                                                    Congo</option>
                                                <option data-mobile_code="243" data-code="CD"
                                                    value="The Democratic Republic of the Congo">
                                                    The Democratic Republic of the Congo</option>
                                                <option data-mobile_code="682" data-code="CK" value="Cook Islands">
                                                    Cook Islands</option>
                                                <option data-mobile_code="506" data-code="CR" value="Costa Rica">
                                                    Costa Rica</option>
                                                <option data-mobile_code="225" data-code="CI"
                                                    value="Cote d&#039;Ivoire">
                                                    Cote d&#039;Ivoire</option>
                                                <option data-mobile_code="385" data-code="HR" value="Croatia">
                                                    Croatia</option>
                                                <option data-mobile_code="53" data-code="CU" value="Cuba">
                                                    Cuba</option>
                                                <option data-mobile_code="357" data-code="CY" value="Cyprus">
                                                    Cyprus</option>
                                                <option data-mobile_code="420" data-code="CZ" value="Czech Republic">
                                                    Czech Republic</option>
                                                <option data-mobile_code="45" data-code="DK" value="Denmark">
                                                    Denmark</option>
                                                <option data-mobile_code="253" data-code="DJ" value="Djibouti">
                                                    Djibouti</option>
                                                <option data-mobile_code="1767" data-code="DM" value="Dominica">
                                                    Dominica</option>
                                                <option data-mobile_code="1849" data-code="DO"
                                                    value="Dominican Republic">
                                                    Dominican Republic</option>
                                                <option data-mobile_code="593" data-code="EC" value="Ecuador">
                                                    Ecuador</option>
                                                <option data-mobile_code="20" data-code="EG" value="Egypt">
                                                    Egypt</option>
                                                <option data-mobile_code="503" data-code="SV" value="El Salvador">
                                                    El Salvador</option>
                                                <option data-mobile_code="240" data-code="GQ" value="Equatorial Guinea">
                                                    Equatorial Guinea</option>
                                                <option data-mobile_code="291" data-code="ER" value="Eritrea">
                                                    Eritrea</option>
                                                <option data-mobile_code="372" data-code="EE" value="Estonia">
                                                    Estonia</option>
                                                <option data-mobile_code="251" data-code="ET" value="Ethiopia">
                                                    Ethiopia</option>
                                                <option data-mobile_code="500" data-code="FK"
                                                    value="Falkland Islands (Malvinas)">
                                                    Falkland Islands (Malvinas)</option>
                                                <option data-mobile_code="298" data-code="FO" value="Faroe Islands">
                                                    Faroe Islands</option>
                                                <option data-mobile_code="679" data-code="FJ" value="Fiji">
                                                    Fiji</option>
                                                <option data-mobile_code="358" data-code="FI" value="Finland">
                                                    Finland</option>
                                                <option data-mobile_code="33" data-code="FR" value="France">
                                                    France</option>
                                                <option data-mobile_code="594" data-code="GF" value="French Guiana">
                                                    French Guiana</option>
                                                <option data-mobile_code="689" data-code="PF" value="French Polynesia">
                                                    French Polynesia</option>
                                                <option data-mobile_code="241" data-code="GA" value="Gabon">
                                                    Gabon</option>
                                                <option data-mobile_code="220" data-code="GM" value="Gambia">
                                                    Gambia</option>
                                                <option data-mobile_code="995" data-code="GE" value="Georgia">
                                                    Georgia</option>
                                                <option data-mobile_code="49" data-code="DE" value="Germany">
                                                    Germany</option>
                                                <option data-mobile_code="233" data-code="GH" value="Ghana">
                                                    Ghana</option>
                                                <option data-mobile_code="350" data-code="GI" value="Gibraltar">
                                                    Gibraltar</option>
                                                <option data-mobile_code="30" data-code="GR" value="Greece">
                                                    Greece</option>
                                                <option data-mobile_code="299" data-code="GL" value="Greenland">
                                                    Greenland</option>
                                                <option data-mobile_code="1473" data-code="GD" value="Grenada">
                                                    Grenada</option>
                                                <option data-mobile_code="590" data-code="GP" value="Guadeloupe">
                                                    Guadeloupe</option>
                                                <option data-mobile_code="1671" data-code="GU" value="Guam">
                                                    Guam</option>
                                                <option data-mobile_code="502" data-code="GT" value="Guatemala">
                                                    Guatemala</option>
                                                <option data-mobile_code="44" data-code="GG" value="Guernsey">
                                                    Guernsey</option>
                                                <option data-mobile_code="224" data-code="GN" value="Guinea">
                                                    Guinea</option>
                                                <option data-mobile_code="245" data-code="GW" value="Guinea-Bissau">
                                                    Guinea-Bissau</option>
                                                <option data-mobile_code="595" data-code="GY" value="Guyana">
                                                    Guyana</option>
                                                <option data-mobile_code="509" data-code="HT" value="Haiti">
                                                    Haiti</option>
                                                <option data-mobile_code="379" data-code="VA"
                                                    value="Holy See (Vatican City State)">
                                                    Holy See (Vatican City State)</option>
                                                <option data-mobile_code="504" data-code="HN" value="Honduras">
                                                    Honduras</option>
                                                <option data-mobile_code="852" data-code="HK" value="Hong Kong">
                                                    Hong Kong</option>
                                                <option data-mobile_code="36" data-code="HU" value="Hungary">
                                                    Hungary</option>
                                                <option data-mobile_code="354" data-code="IS" value="Iceland">
                                                    Iceland</option>
                                                <option data-mobile_code="91" data-code="IN" value="India">
                                                    India</option>
                                                <option data-mobile_code="62" data-code="ID" value="Indonesia">
                                                    Indonesia</option>
                                                <option data-mobile_code="98" data-code="IR"
                                                    value="Iran, Islamic Republic of Persian Gulf">
                                                    Iran, Islamic Republic of Persian Gulf</option>
                                                <option data-mobile_code="964" data-code="IQ" value="Iraq">
                                                    Iraq</option>
                                                <option data-mobile_code="353" data-code="IE" value="Ireland">
                                                    Ireland</option>
                                                <option data-mobile_code="44" data-code="IM" value="Isle of Man">
                                                    Isle of Man</option>
                                                <option data-mobile_code="972" data-code="IL" value="Israel">
                                                    Israel</option>
                                                <option data-mobile_code="39" data-code="IT" value="Italy">
                                                    Italy</option>
                                                <option data-mobile_code="1876" data-code="JM" value="Jamaica">
                                                    Jamaica</option>
                                                <option data-mobile_code="81" data-code="JP" value="Japan">
                                                    Japan</option>
                                                <option data-mobile_code="44" data-code="JE" value="Jersey">
                                                    Jersey</option>
                                                <option data-mobile_code="962" data-code="JO" value="Jordan">
                                                    Jordan</option>
                                                <option data-mobile_code="77" data-code="KZ" value="Kazakhstan">
                                                    Kazakhstan</option>
                                                <option data-mobile_code="254" data-code="KE" value="Kenya">
                                                    Kenya</option>
                                                <option data-mobile_code="686" data-code="KI" value="Kiribati">
                                                    Kiribati</option>
                                                <option data-mobile_code="850" data-code="KP"
                                                    value="Democratic People&#039;s Republic of Korea">
                                                    Democratic People&#039;s Republic of Korea</option>
                                                <option data-mobile_code="82" data-code="KR"
                                                    value="Republic of South Korea">
                                                    Republic of South Korea</option>
                                                <option data-mobile_code="965" data-code="KW" value="Kuwait">
                                                    Kuwait</option>
                                                <option data-mobile_code="996" data-code="KG" value="Kyrgyzstan">
                                                    Kyrgyzstan</option>
                                                <option data-mobile_code="856" data-code="LA" value="Laos">
                                                    Laos</option>
                                                <option data-mobile_code="371" data-code="LV" value="Latvia">
                                                    Latvia</option>
                                                <option data-mobile_code="961" data-code="LB" value="Lebanon">
                                                    Lebanon</option>
                                                <option data-mobile_code="266" data-code="LS" value="Lesotho">
                                                    Lesotho</option>
                                                <option data-mobile_code="231" data-code="LR" value="Liberia">
                                                    Liberia</option>
                                                <option data-mobile_code="218" data-code="LY"
                                                    value="Libyan Arab Jamahiriya">
                                                    Libyan Arab Jamahiriya</option>
                                                <option data-mobile_code="423" data-code="LI" value="Liechtenstein">
                                                    Liechtenstein</option>
                                                <option data-mobile_code="370" data-code="LT" value="Lithuania">
                                                    Lithuania</option>
                                                <option data-mobile_code="352" data-code="LU" value="Luxembourg">
                                                    Luxembourg</option>
                                                <option data-mobile_code="853" data-code="MO" value="Macao">
                                                    Macao</option>
                                                <option data-mobile_code="389" data-code="MK" value="Macedonia">
                                                    Macedonia</option>
                                                <option data-mobile_code="261" data-code="MG" value="Madagascar">
                                                    Madagascar</option>
                                                <option data-mobile_code="265" data-code="MW" value="Malawi">
                                                    Malawi</option>
                                                <option data-mobile_code="60" data-code="MY" value="Malaysia">
                                                    Malaysia</option>
                                                <option data-mobile_code="960" data-code="MV" value="Maldives">
                                                    Maldives</option>
                                                <option data-mobile_code="223" data-code="ML" value="Mali">
                                                    Mali</option>
                                                <option data-mobile_code="356" data-code="MT" value="Malta">
                                                    Malta</option>
                                                <option data-mobile_code="692" data-code="MH" value="Marshall Islands">
                                                    Marshall Islands</option>
                                                <option data-mobile_code="596" data-code="MQ" value="Martinique">
                                                    Martinique</option>
                                                <option data-mobile_code="222" data-code="MR" value="Mauritania">
                                                    Mauritania</option>
                                                <option data-mobile_code="230" data-code="MU" value="Mauritius">
                                                    Mauritius</option>
                                                <option data-mobile_code="262" data-code="YT" value="Mayotte">
                                                    Mayotte</option>
                                                <option data-mobile_code="52" data-code="MX" value="Mexico">
                                                    Mexico</option>
                                                <option data-mobile_code="691" data-code="FM"
                                                    value="Federated States of Micronesia">
                                                    Federated States of Micronesia</option>
                                                <option data-mobile_code="373" data-code="MD" value="Moldova">
                                                    Moldova</option>
                                                <option data-mobile_code="377" data-code="MC" value="Monaco">
                                                    Monaco</option>
                                                <option data-mobile_code="976" data-code="MN" value="Mongolia">
                                                    Mongolia</option>
                                                <option data-mobile_code="382" data-code="ME" value="Montenegro">
                                                    Montenegro</option>
                                                <option data-mobile_code="1664" data-code="MS" value="Montserrat">
                                                    Montserrat</option>
                                                <option data-mobile_code="212" data-code="MA" value="Morocco">
                                                    Morocco</option>
                                                <option data-mobile_code="258" data-code="MZ" value="Mozambique">
                                                    Mozambique</option>
                                                <option data-mobile_code="95" data-code="MM" value="Myanmar">
                                                    Myanmar</option>
                                                <option data-mobile_code="264" data-code="NA" value="Namibia">
                                                    Namibia</option>
                                                <option data-mobile_code="674" data-code="NR" value="Nauru">
                                                    Nauru</option>
                                                <option data-mobile_code="977" data-code="NP" value="Nepal">
                                                    Nepal</option>
                                                <option data-mobile_code="31" data-code="NL" value="Netherlands">
                                                    Netherlands</option>
                                                <option data-mobile_code="599" data-code="AN"
                                                    value="Netherlands Antilles">
                                                    Netherlands Antilles</option>
                                                <option data-mobile_code="687" data-code="NC" value="New Caledonia">
                                                    New Caledonia</option>
                                                <option data-mobile_code="64" data-code="NZ" value="New Zealand">
                                                    New Zealand</option>
                                                <option data-mobile_code="505" data-code="NI" value="Nicaragua">
                                                    Nicaragua</option>
                                                <option data-mobile_code="227" data-code="NE" value="Niger">
                                                    Niger</option>
                                                <option data-mobile_code="234" data-code="NG" value="Nigeria">
                                                    Nigeria</option>
                                                <option data-mobile_code="683" data-code="NU" value="Niue">
                                                    Niue</option>
                                                <option data-mobile_code="672" data-code="NF" value="Norfolk Island">
                                                    Norfolk Island</option>
                                                <option data-mobile_code="1670" data-code="MP"
                                                    value="Northern Mariana Islands">
                                                    Northern Mariana Islands</option>
                                                <option data-mobile_code="47" data-code="NO" value="Norway">
                                                    Norway</option>
                                                <option data-mobile_code="968" data-code="OM" value="Oman">
                                                    Oman</option>
                                                <option data-mobile_code="92" data-code="PK" value="Pakistan">
                                                    Pakistan</option>
                                                <option data-mobile_code="680" data-code="PW" value="Palau">
                                                    Palau</option>
                                                <option data-mobile_code="970" data-code="PS"
                                                    value="Palestinian Territory">
                                                    Palestinian Territory</option>
                                                <option data-mobile_code="507" data-code="PA" value="Panama">
                                                    Panama</option>
                                                <option data-mobile_code="675" data-code="PG" value="Papua New Guinea">
                                                    Papua New Guinea</option>
                                                <option data-mobile_code="595" data-code="PY" value="Paraguay">
                                                    Paraguay</option>
                                                <option data-mobile_code="51" data-code="PE" value="Peru">
                                                    Peru</option>
                                                <option data-mobile_code="63" data-code="PH" value="Philippines">
                                                    Philippines</option>
                                                <option data-mobile_code="872" data-code="PN" value="Pitcairn">
                                                    Pitcairn</option>
                                                <option data-mobile_code="48" data-code="PL" value="Poland">
                                                    Poland</option>
                                                <option data-mobile_code="351" data-code="PT" value="Portugal">
                                                    Portugal</option>
                                                <option data-mobile_code="1939" data-code="PR" value="Puerto Rico">
                                                    Puerto Rico</option>
                                                <option data-mobile_code="974" data-code="QA" value="Qatar">
                                                    Qatar</option>
                                                <option data-mobile_code="40" data-code="RO" value="Romania">
                                                    Romania</option>
                                                <option data-mobile_code="7" data-code="RU" value="Russia">
                                                    Russia</option>
                                                <option data-mobile_code="250" data-code="RW" value="Rwanda">
                                                    Rwanda</option>
                                                <option data-mobile_code="262" data-code="RE" value="Reunion">
                                                    Reunion</option>
                                                <option data-mobile_code="590" data-code="BL" value="Saint Barthelemy">
                                                    Saint Barthelemy</option>
                                                <option data-mobile_code="290" data-code="SH" value="Saint Helena">
                                                    Saint Helena</option>
                                                <option data-mobile_code="1869" data-code="KN"
                                                    value="Saint Kitts and Nevis">
                                                    Saint Kitts and Nevis</option>
                                                <option data-mobile_code="1758" data-code="LC" value="Saint Lucia">
                                                    Saint Lucia</option>
                                                <option data-mobile_code="590" data-code="MF" value="Saint Martin">
                                                    Saint Martin</option>
                                                <option data-mobile_code="508" data-code="PM"
                                                    value="Saint Pierre and Miquelon">
                                                    Saint Pierre and Miquelon</option>
                                                <option data-mobile_code="1784" data-code="VC"
                                                    value="Saint Vincent and the Grenadines">
                                                    Saint Vincent and the Grenadines</option>
                                                <option data-mobile_code="685" data-code="WS" value="Samoa">
                                                    Samoa</option>
                                                <option data-mobile_code="378" data-code="SM" value="San Marino">
                                                    San Marino</option>
                                                <option data-mobile_code="239" data-code="ST"
                                                    value="Sao Tome and Principe">
                                                    Sao Tome and Principe</option>
                                                <option data-mobile_code="966" data-code="SA" value="Saudi Arabia">
                                                    Saudi Arabia</option>
                                                <option data-mobile_code="221" data-code="SN" value="Senegal">
                                                    Senegal</option>
                                                <option data-mobile_code="381" data-code="RS" value="Serbia">
                                                    Serbia</option>
                                                <option data-mobile_code="248" data-code="SC" value="Seychelles">
                                                    Seychelles</option>
                                                <option data-mobile_code="232" data-code="SL" value="Sierra Leone">
                                                    Sierra Leone</option>
                                                <option data-mobile_code="65" data-code="SG" value="Singapore">
                                                    Singapore</option>
                                                <option data-mobile_code="421" data-code="SK" value="Slovakia">
                                                    Slovakia</option>
                                                <option data-mobile_code="386" data-code="SI" value="Slovenia">
                                                    Slovenia</option>
                                                <option data-mobile_code="677" data-code="SB" value="Solomon Islands">
                                                    Solomon Islands</option>
                                                <option data-mobile_code="252" data-code="SO" value="Somalia">
                                                    Somalia</option>
                                                <option data-mobile_code="27" data-code="ZA" value="South Africa">
                                                    South Africa</option>
                                                <option data-mobile_code="211" data-code="SS" value="South Sudan">
                                                    South Sudan</option>
                                                <option data-mobile_code="500" data-code="GS"
                                                    value="South Georgia and the South Sandwich Islands">
                                                    South Georgia and the South Sandwich Islands</option>
                                                <option data-mobile_code="34" data-code="ES" value="Spain">
                                                    Spain</option>
                                                <option data-mobile_code="94" data-code="LK" value="Sri Lanka">
                                                    Sri Lanka</option>
                                                <option data-mobile_code="249" data-code="SD" value="Sudan">
                                                    Sudan</option>
                                                <option data-mobile_code="597" data-code="SR" value="Suricountry">
                                                    Suricountry</option>
                                                <option data-mobile_code="47" data-code="SJ"
                                                    value="Svalbard and Jan Mayen">
                                                    Svalbard and Jan Mayen</option>
                                                <option data-mobile_code="268" data-code="SZ" value="Swaziland">
                                                    Swaziland</option>
                                                <option data-mobile_code="46" data-code="SE" value="Sweden">
                                                    Sweden</option>
                                                <option data-mobile_code="41" data-code="CH" value="Switzerland">
                                                    Switzerland</option>
                                                <option data-mobile_code="963" data-code="SY"
                                                    value="Syrian Arab Republic">
                                                    Syrian Arab Republic</option>
                                                <option data-mobile_code="886" data-code="TW" value="Taiwan">
                                                    Taiwan</option>
                                                <option data-mobile_code="992" data-code="TJ" value="Tajikistan">
                                                    Tajikistan</option>
                                                <option data-mobile_code="255" data-code="TZ" value="Tanzania">
                                                    Tanzania</option>
                                                <option data-mobile_code="66" data-code="TH" value="Thailand">
                                                    Thailand</option>
                                                <option data-mobile_code="670" data-code="TL" value="Timor-Leste">
                                                    Timor-Leste</option>
                                                <option data-mobile_code="228" data-code="TG" value="Togo">
                                                    Togo</option>
                                                <option data-mobile_code="690" data-code="TK" value="Tokelau">
                                                    Tokelau</option>
                                                <option data-mobile_code="676" data-code="TO" value="Tonga">
                                                    Tonga</option>
                                                <option data-mobile_code="1868" data-code="TT"
                                                    value="Trinidad and Tobago">
                                                    Trinidad and Tobago</option>
                                                <option data-mobile_code="216" data-code="TN" value="Tunisia">
                                                    Tunisia</option>
                                                <option data-mobile_code="90" data-code="TR" value="Turkey">
                                                    Turkey</option>
                                                <option data-mobile_code="993" data-code="TM" value="Turkmenistan">
                                                    Turkmenistan</option>
                                                <option data-mobile_code="1649" data-code="TC"
                                                    value="Turks and Caicos Islands">
                                                    Turks and Caicos Islands</option>
                                                <option data-mobile_code="688" data-code="TV" value="Tuvalu">
                                                    Tuvalu</option>
                                                <option data-mobile_code="256" data-code="UG" value="Uganda">
                                                    Uganda</option>
                                                <option data-mobile_code="380" data-code="UA" value="Ukraine">
                                                    Ukraine</option>
                                                <option data-mobile_code="971" data-code="AE"
                                                    value="United Arab Emirates">
                                                    United Arab Emirates</option>
                                                <option data-mobile_code="44" data-code="GB" value="United Kingdom">
                                                    United Kingdom</option>
                                                <option data-mobile_code="1" data-code="US" value="United States">
                                                    United States</option>
                                                <option data-mobile_code="598" data-code="UY" value="Uruguay">
                                                    Uruguay</option>
                                                <option data-mobile_code="998" data-code="UZ" value="Uzbekistan">
                                                    Uzbekistan</option>
                                                <option data-mobile_code="678" data-code="VU" value="Vanuatu">
                                                    Vanuatu</option>
                                                <option data-mobile_code="58" data-code="VE" value="Venezuela">
                                                    Venezuela</option>
                                                <option data-mobile_code="84" data-code="VN" value="Vietnam">
                                                    Vietnam</option>
                                                <option data-mobile_code="1284" data-code="VG"
                                                    value="British Virgin Islands">
                                                    British Virgin Islands</option>
                                                <option data-mobile_code="1340" data-code="VI"
                                                    value="U.S. Virgin Islands">
                                                    U.S. Virgin Islands</option>
                                                <option data-mobile_code="681" data-code="WF" value="Wallis and Futuna">
                                                    Wallis and Futuna</option>
                                                <option data-mobile_code="967" data-code="YE" value="Yemen">
                                                    Yemen</option>
                                                <option data-mobile_code="260" data-code="ZM" value="Zambia">
                                                    Zambia</option>
                                                <option data-mobile_code="263" data-code="ZW" value="Zimbabwe">
                                                    Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Mobile</label>
                                            <div class="input-group">
                                                <span class="input-group-text mobile-code">

                                                </span>
                                                <input name="mobile_code" type="hidden">
                                                <input name="country_code" type="hidden">
                                                <input class="form-control" name="mobile" type="text" value=""
                                                    placeholder="Your Phone Number" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input name="password" type="password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Confirm password</label>
                                            <input name="password_confirmation" type="password" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">

                                            <script data-cfasync="false"
                                                src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
                                            </script>
                                            <script src="https://www.google.com/recaptcha/api.js"></script>
                                            <div class="g-recaptcha"
                                                data-sitekey="6LdPC88fAAAAADQlUf_DV6Hrvgm-pZuLJFSLDOWV"
                                                data-callback="verifyCaptcha"></div>
                                            <div id="g-recaptcha-error"></div>
                                        </div>
                                    </div>



                                    <div class="col-md-12 mb-3">
                                        <div class="form--check">
                                            <input class="form-check-input" id="agree" name="agree" type="checkbox"
                                                required>
                                            <label class="form-check-label" for="agree">
                                                I agree with </label>
                                            <span class="ms-1">
                                                <a href="https://script.viserlab.com/mlmlab/policy/privacy-policy/42"
                                                    target="_blank">Privacy Policy</a>
                                                ,
                                                <a href="https://script.viserlab.com/mlmlab/policy/terms-of-service/43"
                                                    target="_blank">Terms of Service</a>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-12">
                                        <input class="w-100" type="submit" value="Create an Account">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="existModalCenter" role="dialog" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">You are with us</h5>
                    <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="h5 text-center">You already have an account please Login </h5>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark h-auto w-auto" data-bs-dismiss="modal" type="button">Close</button>
                    <a class="btn btn--base" href="https://script.viserlab.com/mlmlab/user/login">Login</a>
                </div>
            </div>
        </div>
    </div>



    <script>
        (function($) {
                "use strict"
                $('.verify-gcaptcha').on('submit', function() {
                    var response = grecaptcha.getResponse();
                    if (response.length == 0) {
                        document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger">Captcha field is required.</span>';
                        return false;
                    }
                    return true;
                });
            })(jQuery);
    </script>
    <script>
        "use strict";
        (function($) {
                            $(`option[data-code=IN]`).attr('selected', '');
            
            $('select[name=country]').change(function() {
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));

            $('.checkUser').on('focusout', function(e) {
                var url = 'https://script.viserlab.com/mlmlab/user/check-mail';
                var value = $(this).val();
                var token = '9aYe2sHx3yJtebAUVo38xddRkovrkjWZ0BGpa1Qa';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {
                        mobile: mobile,
                        _token: token
                    }
                }
                if ($(this).attr('name') == 'email') {
                    var data = {
                        email: value,
                        _token: token
                    }
                }
                if ($(this).attr('name') == 'username') {
                    var data = {
                        username: value,
                        _token: token
                    }
                }
                $.post(url, data, function(response) {
                    if (response.data != false && response.type == 'email') {
                        $('#existModalCenter').modal('show');
                    } else if (response.data != false) {
                        $(`.${response.type}Exist`).text(`${response.type} already exist`);
                    } else {
                        $(`.${response.type}Exist`).text('');
                    }
                });
            });

            var not_select_msg = $('#position-test').html();

            var positionDetails = null;

            $('.ref_id').on('focusout', function() {

                var ref_id = $('.ref_id').val();

                if (ref_id) {
                    var token = "9aYe2sHx3yJtebAUVo38xddRkovrkjWZ0BGpa1Qa";
                    $.ajax({
                        type: "POST",
                        url: "https://script.viserlab.com/mlmlab/check/referral",
                        data: {
                            'ref_id': ref_id,
                            '_token': token
                        },
                        success: function(data) {
                            if (data.success) {
                                $('select[name=position]').removeAttr('disabled');
                                $('#position-test').text('');
                                $("#ref").html(
                                    `<span class="help-block"><strong class="text--success">Referrer username matched</strong></span>`);
                            } else {
                                $('select[name=position]').attr('disabled', true);
                                $('#position-test').html(not_select_msg);
                                $("#ref").html(
                                    `<span class="help-block"><strong class="text--danger">Referrer username not found</strong></span>`
                                );
                            }
                            positionDetails = data;
                            updateHand();
                        }
                    });
                } else {
                    $("#position-test").html(`<span class="help-block"><strong class="text--danger">Enter referral username first</strong></span>`);
                }
            });

            $('#position').on('change', function() {
                updateHand();
            });

            function updateHand() {
                var pos = $('#position').val(),
                    className = null,
                    text = null;
                if (pos && positionDetails.success == true) {
                    className = 'text--success';
                    text = `<span class="help-block"><strong class="text--success">Your are joining under ${positionDetails.position[pos]} at ${pos==1?'left':'right'} </strong></span>`;
                } else {
                    className = 'text--danger';
                    if (positionDetails.success == true) text = `Select your position`;
                    else if ($('.ref_id').val()) text = `Please enter a valid referral username`;
                    else text = `Enter referral username first`;

                }
                $("#position-test").html(`<span class="help-block"><strong class="${className}">${text}</strong></span>`)
            }
            
        })(jQuery);
    </script>


    <link rel="stylesheet" href="https://script.viserlab.com/mlmlab/assets/global/css/iziToast.min.css">
    <script src="https://script.viserlab.com/mlmlab/assets/global/js/iziToast.min.js"></script>

    <script>
        "use strict";
    function notify(status,message) {
        if (typeof message == 'string') {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        } else {
            $.each(message, function(i, val) {
                iziToast[status]({
                    message: val,
                    position: "topRight"
                });
            });
        }
    }
    </script>


    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "https://script.viserlab.com/mlmlab/change/" + $(this).val();
            });

            var inputElements = $('input,select');
            $.each(inputElements, function(index, element) {
                element = $(element);
                var type = element.attr('type');
                if (type != 'checkbox') {
                    element.closest('.form-group').find('label').attr('for', element.attr('name'));
                    element.attr('id', element.attr('name'))
                }
            });

            $('.policy').on('click', function() {
                $.get('https://script.viserlab.com/mlmlab/cookie/accept', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            $.each($('input, select, textarea'), function(i, element) {

                if (element.hasAttribute('required')) {
                    $(element).closest('.form-group').find('label').addClass('required');
                }

            });

            $('.showFilterBtn').on('click', function() {
                $('.responsive-filter-card').slideToggle();
            });

            Array.from(document.querySelectorAll('table')).forEach(table => {
                let heading = table.querySelectorAll('thead tr th');
                Array.from(table.querySelectorAll('tbody tr')).forEach(row => {
                    Array.from(row.querySelectorAll('td')).forEach((column, i) => {
                        (column.colSpan == 100) || column.setAttribute('data-label', heading[i].innerText)
                    });
                });
            });

        })(jQuery);
    </script>


    <script>
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
    </script>

    <script>
        if (window.top != window.self) {
    document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="'+window.self.location+'" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
}
    </script>


    <script>
        adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
    adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
    adroll_version = "2.0";
    (function(w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll  = w.adroll  || [];
        w.adroll.f = [ 'setProperties', 'identify', 'track' ];
        var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
            w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                return function() {
                    w.adroll.push([ n, arguments ])
                }
            })(w.adroll.f[a])
        }
        e = d.createElement('script');
        o = d.getElementsByTagName('script')[0];
        e.async  = 1;
        e.src  = roundtripUrl;
        o.parentNode.insertBefore(e, o);
    })(window, document);
    adroll.track("pageView");
    </script>


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8940522890323334"
        crossorigin="anonymous"></script>

    @endsection