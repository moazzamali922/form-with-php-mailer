<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/png" href="./assets/images/logo.png">
</head>

<body>
    <div class="full-form">
        <form action="backend/questionnaire.php" method="post">
            <div id="questionnaire">
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h3 class="text-center font-weight-bold" style="color: #8D4946;">Veterans inc. Digital Intake sheet
                    </h3>
                    <h6 class="text-center font-weight-bold" style="color: #8D4946;">Veterans inc. Digital Intake
                        Questionnaire
                    </h6>
                    <div style="width:60%; margin: 0px auto;">
                        <p class="mt-5 text-center" style="color: #8D4946;"><i> Your
                                responses will help us better understand your needs and how we can support you. Please
                                fill out the following information:</i>
                        </p>
                    </div>
                    <div class="form-row mt-5">
                        <div class="form-group col-md-6">
                            <label for="fullname">First Name</label>
                            <input type="text" id="fullname" name="first_name" class="form-control"
                                placeholder="Enter First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="middleinitial">Middle Initial</label>
                            <input type="text" id="middleinitial" name="middle_initial" class="form-control"
                                placeholder="Enter Middle Initial">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="last_name" class="form-control"
                                placeholder="Enter Last Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cellphone">Cell Phone Number</label>
                            <input type="text" id="cellphone" name="cell_phone" class="form-control"
                                placeholder="Enter Cell Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control"
                                placeholder="Enter Address">
                        </div>
                        <div class="form-group col-md-6">
                                        <label for="sex">Gender:</label>
                                        <select id="gender" name="gender" class="form-control">
                                            <option value="">Select Gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="Binary">Binary</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="age">Marital Status:</label>
                                        <select id="marital_status" name="marital_status" class="form-control">
                                            <option value="">Select Marital Status</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Domestic Partner">Domestic Partner</option>
                                            <option value="Living with partner">Living with Partner</option>
                                            <option value="Never Married">Never Married</option>
                                        </select>
                                    </div>                                   
                                    <div class="form-group col-md-6">
                                        <label for="race">Race:</label>
                                       
                                            <select id="race" name="race" class="form-control">
                                                <option value="">Select Race</option>
                                                <option value="American Indian">American Indian</option>
                                                <option value="Alaska Native">Alaska Native</option>
                                                <option value="Asian">Asian</option>
                                                <option value="Black or African American">Black or African American</option>
                                                <option value="Hispanic or Latino">Hispanic or Latino</option>
                                                <option value="Native Hawaiian">Native Hawaiian</option>
                                                <option value="White">White</option>
                                                <option value="Other">Other</option>
                                            </select>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="age">Age:</label>
                                        <input type="text" id="age" name="age" class="form-control"
                                            placeholder="Enter Age">
                                    </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="homeless">I am a homeless veteran or at risk of becoming
                                    homeless.</label>
                                <select class="form-control" id="homeless" name="homeless">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                            <div id="homelessDetails" class="hidden">
                                <div class="form-group">
                                    <label>Please select the option that best describes you:</label>
                                    <select class="form-control" id="homelessOption" name="your_description">
                                        <option value="actively_seeking">Veteran actively seeking employment</option>
                                        <option value="service_provider">Veteran service provider assisting a veteran
                                            seeking employment
                                        </option>
                                        <option value="dvop_worker">Disabled Veterans' Outreach Program (DVOP) worker
                                            assisting a veteran seeking employment
                                        </option>
                                        <option value="family_member">Family member of a veteran</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div id="otherDetails" class="form-group hidden">
                                    <label for="otherInput">Please specify:</label>
                                    <input type="text" class="form-control" id="otherInput" name="other_details"
                                        placeholder="Enter details">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label for="homeless">Are you a homeless veteran?</label>
                                <select class="form-control" id="homeless_1" name="homeless2">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                            <div id="homelessDetails_1" class="hidden">
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="sex">Sex:</label>
                                        <input type="text" id="sex" name="sex" class="form-control"
                                            placeholder="Enter Sex">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="age">Age:</label>
                                        <input type="text" id="age" name="age" class="form-control"
                                            placeholder="Enter Age">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="race">Race:</label>
                                       
                                            <select id="race" name="race" class="form-control">
                                                <option value="">Select Race</option>
                                                <option value="American Indian">American Indian</option>
                                                <option value="Alaska Native">Alaska Native</option>
                                                <option value="Asian">Asian</option>
                                                <option value="Black or African American">Black or African American</option>
                                                <option value="Hispanic or Latino">Hispanic or Latino</option>
                                                <option value="Native Hawaiian">Native Hawaiian</option>
                                                <option value="White">White</option>
                                                <option value="Other">Other</option>
                                            </select>

                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-12 form-group">
                            <label for="hear_about_us">How did you hear about us?</label>
                            <select class="form-control" id="hear_about_us" name="hear_about_us">
                                <option value="social_media">Social Media</option>
                                <option value="friend_referral">Friend Referral</option>
                                <option value="online_search">Online Search</option>
                                <option value="event">Event</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <!-- <div class="col-md-6 form-group">
                            <label for="county_residence">County of Residence:</label>
                            <input type="text" class="form-control" id="county_residence" name="county_residence"
                                placeholder="Enter County Name">
                        </div> -->
                        <div class="col-md-6 mt-3 form-group">
                            <label>Are you willing to work 25 hours or more per week?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="work_hours" id="work_hours_yes"
                                    value="yes">
                                <label class="form-check-label" for="work_hours_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="work_hours" id="work_hours_no"
                                    value="no">
                                <label class="form-check-label" for="work_hours_no">No</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 form-group">
                            <label>Are you currently attending or seeking to enroll in school or receive
                                certification (s)?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="school_certification"
                                    id="school_certification_yes" value="yes">
                                <label class="form-check-label" for="school_certification_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="school_certification"
                                    id="school_certification_no" value="no">
                                <label class="form-check-label" for="school_certification_no">No</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5 form-group">
                            <label>How did you learn about our services? (Select all that apply)</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]"
                                    id="presentation" value="Veterans inc. Community presentation">
                                <label class="form-check-label" for="presentation">Veterans inc. Community
                                    presentation</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]" id="event"
                                    value="Veteran inc. Community Event">
                                <label class="form-check-label" for="event">Veteran inc. Community Event</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]"
                                    id="social_media" value="Social Media">
                                <label class="form-check-label" for="social_media">Social Media</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]" id="flyer"
                                    value="Flyer">
                                <label class="form-check-label" for="flyer">Flyer</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]"
                                    id="referral" value="Referral from someone">
                                <label class="form-check-label" for="referral">Referral from someone (please specify
                                    source):</label>
                                <input type="text" class="form-control" id="referral_source" name="referral_source"
                                    placeholder="Enter source">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]"
                                    id="partner_org" value="Another Veterans Inc Partner Organization">
                                <label class="form-check-label" for="partner_org">Another Veterans Inc Partner
                                    Organization</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5 form-group">
                            <label>I spoke with _____________________from North Dakota</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="spoke_with[]"
                                    id="presentation" value="Marian Jordan">
                                <label class="form-check-label" for="presentation">Marian Jordan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="spoke_with[]" id="event"
                                    value="Someone else/ I do not Remember">
                                <label class="form-check-label" for="event">Someone else/ I do not Remember</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5 form-group">
                            <label>County of Residence:</label><br>
                            <div class="form-check">
                                <input class="form-control" name="county_residence">
                            </div>
                        </div>
                        <div class="col-md-12 mt-5 form-group text center">
                            <label>Thank you for completing the Veterans Inc. Digital Intake Questionnaire. Your information will be kept confidential and used solely for the purpose of providing you with appropriate services and support. If you have any additional comments or questions, please feel free to include them below:</label><br>
                            <div class="form-check">
                                <textarea class="form-control" name="any_questions"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center w-100">
                        <button type="submit" id="questionnaire_btn" name="questionnaire_submit" class="btn btn-outline-dark">SUBMIT INQUIRY</button>
                    </div>
                    <div class="text-center w-100">
                    <button type="submit" id="form3_btn" name="form_submit" class="btn btn-outline-dark">Submit Application</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
        $(document).ready(function () {
            // Functionality for the "Are you a homeless veteran?" question
            $("#homeless").change(function () {
                if ($(this).val() === "yes") {
                    $("#homelessDetails").removeClass("hidden");
                } else {
                    $("#homelessDetails").addClass("hidden");
                }
            });

            // Functionality for the additional details dropdown in the homeless veteran section
            $("#homelessOption").change(function () {
                if ($(this).val() === "other") {
                    $("#otherDetails").removeClass("hidden");
                } else {
                    $("#otherDetails").addClass("hidden");
                }
            });

            // Functionality for the "Are you a homeless veteran?" question in form2
            $("#homeless_1").change(function () {
                if ($(this).val() === "yes") {
                    $("#homelessDetails_1").removeClass("hidden");
                } else {
                    $("#homelessDetails_1").addClass("hidden");
                }
            });
        });
    </script>

</body>

</html>