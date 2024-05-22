<script>
    window.print();
</script>
<?php
include('includes/function.php');

session_regenerate_id(true);
error_reporting(0);
if(isset($_SESSION['veteran_username']) && isset($_SESSION['veteran_admin']))
    {

$form_id = $_GET['id'];
echo "The ID is: " . $form_id;
$sql = "SELECT * FROM form1_part1 WHERE `id` = '$form_id'";
$result = $conn->query($sql); 
if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);

  $full_legal_last_name = $row['full_legal_last_name'];
  $mi = $row['mi'];
  $first = $row['first'];
  $dob = $row['dob'];
  $gender = $row['gender'];
  $primary_race = $row['primary_race'];
  $secondary_race = $row['secondary_race'];
  $ethnicity = $row['ethnicity'];
  $address = $row['address'];
  $continuum_care_code = $row['continuum_care_code'];
  $coc_location = $row['coc_location'];
  $va_station = $row['va_station'];
  $email_address = $row['email_address'];
  $phone = $row['phone'];
  $emergency_contact_name = $row['emergency_contact_name'];
  $emergency_contact_phone = $row['emergency_contact_phone'];
  $referral_source = $row['referral_source'];
  $referral_source_phone = $row['referral_source_phone'];
  $copy_dd214 = $row['copy_dd214'];
  $branch_service = $row['branch_service'];
  $service_date = $row['service_date'];
  $military_status = $row['military_status'];
  $rank = $row['rank'];
  $military_mos = $row['military_mos'];
  $discharge = $row['discharge'];
  $theater_operations = $row['theater_operations'];
  $combat = $row['combat'];
  $service_connected_disability = $row['service_connected_disability'];
  $injury = $row['injury'];
  $prepared_by = $row['prepared_by'];
  $household_status = $row['household_status'];
  $consent_employment = $row['consent_employment'];
  $consent_national = $row['consent_national'];
  $consent_other = $row['consent_other'];
  $consent_veteran_signature = $row['consent_veteran_signature'];
  $consent_date = $row['consent_date'];
  $consent_veteran_signature_2 = $row['consent_veteran_signature_2'];
  $consent_date_2 = $row['consent_date_2'];
  $consent_veteran_inc_case_signature = $row['consent_veteran_inc_case_signature'];
  $consent_date_3 = $row['consent_date_3'];
  $hvsv_applicant_name = $row['hvsv_applicant_name'];
  $hvsv_applicant_signature = $row['hvsv_applicant_signature'];
  $pa_name = $row['pa_name'];
  $pa_signature_1 = $row['pa_signature_1'];
  $pa_case_manager_name = $row['pa_case_manager_name'];
  $pa_signature_2 = $row['pa_signature_2'];
  $pa_date = $row['pa_date'];
  $hvsv_applicant_date = $row['hvsv_applicant_date'];

}
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veterans Inc. Universal Services Application</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .logo-container {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
    }

    .rowDiv {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
    }

    .form-row {
      flex-direction: row;
      align-items: center;
    }

    .firstNameInput {
      width: 350px;
      height: 20px;
      border: none;
      border-bottom: 1px solid;
    }

    .lastNameInput {
      width: 350px;
      height: 20px;
      border: none;
      border-bottom: 1px solid;
    }

    .MIInput {
      width: 120px;
      height: 20px;
      border: none;
      border-bottom: 1px solid;
    }

    h3 {
      text-decoration: underline;
      color: rgb(0, 0, 0);
      font-weight: bold;
      font-size: 25px;
    }

    .label {
      color: black;
      font-size: 16px;
      font-weight: bold;
    }

    .label2 {
      color: black;
      font-weight: bold;
      margin-top: 20px;
      text-decoration: underline;
      font-size: 18px;
    }

    .radio-label {
      color: black;
      font-size: 16px;
      font-weight: bold;
      margin-right: 15px;
    }

    .row-check-container {
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .label-ckeck {
      margin-right: 10px;
      color: black;
      font-size: 16px;
      font-weight: 500;
    }

    .form-select-main-container {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
    }

    .formCheck {
      width: 50%;
    }

    .address-input {
      width: 65%;
      height: 20px;
      border: none;
      border-bottom: 1px solid;
    }

    .HUD-assigned-input {
      width: 100px;
      height: 20px;
      border: none;
      border-bottom: 1px solid;
    }

    .Location-input {
      width: 70%;
      height: 20px;
      border: none;
      border-bottom: 1px solid;
    }

    .vz-medical-center-station-input {
      width: 50%;
      height: 20px;
      border: none;
      border-bottom: 1px solid;
    }

    .fixed-input-container {
      width: 50%;
    }

    .fixed-input {
      width: 50%;
      height: 20px;
      border: none;
      border-bottom: 1px solid;
    }

    .no-to-all-input {
      width: 100px;
      height: 20px;
      border: none;
      border-bottom: 1px solid;
    }

    .divider {
      height: 2px;
      background-color: #000000;
      margin: 30px 0;
    }

    .prepared-by-label {
      margin-right: 10px;
      color: black;
      font-size: 20px;
      font-weight: bold;
    }

    .form-check-input {
      color: black;
      height: 15px;
      width: 15px;
    }

    .form-check-input:checked {
      background-color: #000;
      border-color: #000;
    }

    .signature-input {
      width: 50%;
      height: 20px;
      border: none;
      border-bottom: 2px solid;
    }

    .page3-input {
      width: 200px;
      height: 20px;
      border: none;
      border-bottom: 1px solid;
    }

    .container2 {
      width: 100%;
      border: 1px solid black;
    }

    .header {
      font-weight: 500;
      text-align: justify;
      padding-left: 5px;
      padding-top: 2;
    }

    .content {
      height: 40px;
      /* adjust as needed */
      border-top: 1px solid black;
      border-bottom: 1px solid black;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="container">
      <div class="logo-container" style="margin-top: 50px; margin-bottom: 50px;">
        <img src="img/logo.png" alt="Girl in a jacket" width="200">
        <h5 class="card-subtitle mb-4 text-center">Universal Services Application</h5>
        <label class="label-ckeck" style="font-weight: bold; font-size: 15px;">
          Today's Date :
          <input type="text" name="operations-details" class="no-to-all-input">
        </label>
      </div>
      <div style="width: 100%; border: 2px solid; padding: 10px; border-color: rgb(0, 0, 0);">
        <h3><i>Profile Information</i></h3>
        <div class="rowDiv">
          <label for="lastName" class="label">Full Legal Name - Last:</label>
          <input type="text" class="lastNameInput" id="lastName" value="<?php echo !empty($full_legal_last_name) ? $full_legal_last_name : ''; ?>">
          <label for="middleInitial" class="label">MI:</label>
          <input type="text" class="MIInput" id="middleInitial" value="<?php echo !empty($mi) ? $mi : ''; ?>">
          <label for="firstName" class="label">First:</label>
          <input type="text" class="firstNameInput" id="firstName" value="<?php echo !empty($first ) ? $first  : ''; ?>">
        </div>
        <div class="rowDiv">
          <label for="lastName" class="label">Date of Birth:</label>
          <input type="text" class="lastNameInput" id="lastName" value="<?php echo !empty($dob ) ? $dob  : ''; ?>">
          <label for="firstName" class="label">Social Security #:</label>
          <input type="text" class="firstNameInput" id="firstName">
        </div>
        <div class="row-check-container">
          <label class="radio-label">Gender:</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($gender === 'M') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderM">M</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F" <?php echo ($gender === 'F') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderF">F</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderTransM" value="TransM" <?php echo ($gender === 'Trans M/F') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderTransM">Trans M/F</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderNonConforming"
              value="NonConforming" <?php echo ($gender === 'Non-Conforming') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderNonConforming">Non-Conforming</label>
          </div>
        </div>
        <div class="form-select-main-container">
          <div class="formCheck">
            <label class="label">Primary Race :</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($primary_race === 'White') ? 'checked' : ''; ?>>
              <label class="label-ckeck" for="genderM">White</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($primary_race === 'Black/African American') ? 'checked' : ''; ?>>
              <label class="label-ckeck" for="genderM">Black/African American</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($primary_race === 'Asian') ? 'checked' : ''; ?>>
              <label class="label-ckeck" for="genderM">Asian</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($primary_race === 'American Indian / Alaskan Islander') ? 'checked' : ''; ?>>
              <label class="label-ckeck" for="genderM">American Indian / Alaskan Islander</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($primary_race === 'Native Hawaiian / Pacific Islander') ? 'checked' : ''; ?>>
              <label class="label-ckeck" for="genderM">Native Hawaiian / Pacific Islander</label>
            </div>
          </div>
          <div class="formCheck">
            <label class="label">Secondary Race:</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($secondary_race === 'White') ? 'checked' : ''; ?>>
              <label class="label-ckeck" for="genderM">White</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($secondary_race === 'Black/African American') ? 'checked' : ''; ?>>
              <label class="label-ckeck" for="genderM">Black/African American</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($secondary_race === 'Asian') ? 'checked' : ''; ?>>
              <label class="label-ckeck" for="genderM">Asian</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($secondary_race === 'American Indian / Alaskan Islander') ? 'checked' : ''; ?>>
              <label class="label-ckeck" for="genderM">American Indian / Alaskan Islander</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($secondary_race === 'Native Hawaiian / Pacific Islander') ? 'checked' : ''; ?>>
              <label class="label-ckeck" for="genderM">Native Hawaiian / Pacific Islander</label>
            </div>
          </div>
        </div>
        <div class="row-check-container">
          <label class="radio-label">Ethnicity:</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="genderM" value="M" <?php echo ($ethnicity === 'Hispanic') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderM">Hispanic</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="genderF" value="F" <?php echo ($ethnicity === 'Non-Hispanic') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderF">Non-Hispanic</label>
          </div>
        </div>
        <div class="row-check-container">
          <label for="lastName" class="label">Address (if homeless use ZIP code only):</label>
          <input type="text" class="address-input" id="lastName" value="<?php echo !empty($address) ? $address : ''; ?>">
        </div>
        <div class="form-select-main-container">
          <div class="formCheck">
            <label class="label">Continuum of Care Code # (HUD-assigned):</label>
            <input type="text" class="HUD-assigned-input" id="lastName" value="<?php echo !empty($continuum_care_code) ? $continuum_care_code : ''; ?>">
          </div>
          <div class="formCheck">
            <label class="label">CoC Location:</label>
            <input type="text" class="Location-input" id="lastName" value="<?php echo !empty($coc_location) ? $coc_location : ''; ?>">
          </div>
        </div>
        <div class="row-check-container">
          <label for="lastName" class="label">VA Medical Center Station # closeset to CM's office</label>
          <input type="text" class="vz-medical-center-station-input" id="lastName" value="<?php echo !empty($va_station) ? $va_station : ''; ?>">
        </div>
        <div class="form-select-main-container">
          <div class="fixed-input-container">
            <label for="lastName" class="label">Email Address:</label>
            <input type="text" class="fixed-input" id="lastName" value="<?php echo !empty($email_address) ? $email_address : ''; ?>">
          </div>
          <div class="fixed-input-container">
            <label for="firstName" class="label">Phone 1:</label>
            <input type="text" class="fixed-input" id="firstName" value="<?php echo !empty($phone) ? $phone : ''; ?>">
          </div>
        </div>
        <div class="form-select-main-container">
          <div class="fixed-input-container">
            <label for="lastName" class="label">Emergency Contact Name</label>
            <input type="text" class="fixed-input" id="lastName" value="<?php echo !empty($emergency_contact_name) ? $emergency_contact_name : ''; ?>">
          </div>
          <div class="fixed-input-container">
            <label for="firstName" class="label">Phone 2:</label>
            <input type="text" class="fixed-input" id="firstName" value="<?php echo !empty($emergency_contact_phone) ? $emergency_contact_phone : ''; ?>">
          </div>
        </div>
        <div class="form-select-main-container">
          <div class="fixed-input-container">
            <label for="lastName" class="label">Referral Source</label>
            <input type="text" class="fixed-input" id="lastName" value="<?php echo !empty($referral_source) ? $referral_source : ''; ?>">
          </div>
          <div class="fixed-input-container">
            <label for="firstName" class="label">Phone 3:</label>
            <input type="text" class="fixed-input" id="firstName" value="<?php echo !empty($referral_source_phone) ? $referral_source_phone : ''; ?>">
          </div>
        </div>
      </div>
      <div style="width: 100%; border: 2px solid; padding: 10px; border-color: rgb(0, 0, 0);">
        <h3>Military Information</h3>
        <div class="row-check-container">
          <label class="radio-label">Do you have a Copy of Your DD214 or VA Medical Card:</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($copy_dd214 === 'Yes') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderM">Yes</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F" <?php echo ($copy_dd214 === 'No') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderF">No</label>
          </div>
        </div>
        <div class="form-select-main-container">
          <div class="fixed-input-container">
            <label for="lastName" class="label">Branch of Service :</label>
            <input type="text" class="fixed-input" id="lastName" value="<?php echo !empty($branch_service) ? $branch_service : ''; ?>">
          </div>
          <div class="fixed-input-container">
            <label for="firstName" class="label">Service Date From to</label>
            <input type="text" class="fixed-input" id="firstName" value="<?php echo !empty($service_date) ? $service_date : ''; ?>">
          </div>
        </div>
        <div class="row-check-container">
          <label class="radio-label">Military Status :</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M" <?php echo ($military_status === 'Active Duty') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderM">Active Duty</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F" <?php echo ($military_status === 'Veteran') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderF">Veteran</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F" <?php echo ($military_status === 'Reserve Component') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderF">Reserve Component</label>
          </div>
        </div>
        <div class="form-select-main-container">
          <label class="radio-label">Rank:</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="genderM" value="M" <?php echo ($rank === 'Enlisted') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderM">Enlisted</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F" <?php echo ($rank === 'Officer') ? 'checked' : ''; ?>>
            <label class="label-ckeck" for="genderF">Officer</label>
          </div>
          <div class="fixed-input-container">
            <label for="lastName" class="label">Military MOS :</label>
            <input type="text" class="fixed-input" id="lastName" value="<?php echo !empty($military_mos) ? $military_mos : ''; ?>">
          </div>
        </div>
        <div class="row-check-container">
          <label class="radio-label">Discharge:</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M">
            <label class="label-ckeck" for="genderM">Honorable</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F">
            <label class="label-ckeck" for="genderF">General</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F">
            <label class="label-ckeck" for="genderF">OTH</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F">
            <label class="label-ckeck" for="genderF">Bad Conduct</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F">
            <label class="label-ckeck" for="genderF">Dishonorable</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F">
            <label class="label-ckeck" for="genderF">Other</label>
          </div>
        </div>
        <div class="row-check-container">
          <label class="radio-label">Theater of Operations:</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M">
            <label class="label-ckeck" for="genderM">Iraq (Operation New Dawn)</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F">
            <label class="label-ckeck" for="genderF">Iraq (Op. Iraqi Freedom)</label>
          </div>
        </div>
        <div class="row-check-container">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F">
            <label class="label-ckeck" for="genderF">Iraq (Op. Iraqi Freedom)</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F">
            <label class="label-ckeck" for="genderF">Persian Gulf (Op. Desert Storm)</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="TheaterofOperations" id="TheaterofOperationsF"
              value="VietnamF">
            <label class="label-ckeck" for="Vietnam">Vietnam</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="TheaterofOperations" id="TheaterofOperationsF"
              value="KoreaF">
            <label class="label-ckeck" for="Korea">Korea</label>
          </div>
        </div>
        <div class="row-check-container">
          <label class="label-ckeck">
            <input type="checkbox" name="wwii">
            WWII
          </label>
          <label class="label-ckeck">
            <input type="checkbox" name="other-operations">
            Other Peace Keeping Operations
            <input type="text" name="operations-details" class="no-to-all-input">
          </label>
          <label class="label-ckeck">
            <input class="form-check-input" type="checkbox" name="no-to-all">
            No to all
          </label>
        </div>
        <div class="row-check-container">
          <label class="radio-label">Combat:</label>
          <label class="label-ckeck">
            <input type="checkbox" name="wwii">
            Yes
          </label>
          <label class="label-ckeck">
            <input type="checkbox" name="other-operations">
            No
          </label>
          <label class="radio-label">Servcie connected Disability:</label>
          <label class="label-ckeck">
            <input type="checkbox" name="wwii">
            Yes
            <input type="text" name="operations-details" class="no-to-all-input">%
          </label>
          <label class="label-ckeck">
            <input type="checkbox" name="other-operations">
            No
          </label>
        </div>
        <div class="row-check-container">
          <label for="lastName" class="label">Type of Injury (If any):</label>
          <input type="text" class="vz-medical-center-station-input" id="lastName">
        </div>
      </div>
      <div style="width: 100%; border: 2px solid; padding: 10px; border-color: rgb(0, 0, 0);">
        <div class="row-check-container">
          <label class="radio-label">Household Status:</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderM" value="M">
            <label class="label-ckeck" for="genderM">Client-Only</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="gender" id="genderF" value="F">
            <label class="label-ckeck" for="genderF">Client with Others in Household</label>
          </div>
        </div>
        <div class="row-check-container">
          <label for="lastName" class="prepared-by-label">Prepared by:</label>
          <input type="text" class="vz-medical-center-station-input" id="lastName">
        </div>
      </div>
      <div style="width: 100%; padding: 10px; margin-top: 700px;"></div>
      <div class="form-select-main-container">
        <div class="formCheck">
          <img src="img/logo.png" alt="Girl in a jacket" width="200">
        </div>
        <div class="formCheck">
          <div class="form-check">
            <label class="label-ckeck">
              <b>Veteran :</b>
              <input type="text" name="operations-details" class="page3-input">
            </label>
          </div>
          <div class="form-check">
            <label class="label-ckeck">
              <b>Case Manager:</b>
              <input type="text" name="operations-details" class="page3-input">
            </label>
          </div>
          <div class="form-check">
            <label class="label-ckeck">
              <b>Enrollnment Date:</b>
              <input type="text" name="operations-details" class="page3-input">
            </label>
          </div>

        </div>
      </div>

      <div style="width: 100%; padding: 10px; margin-top: 50px;"></div>
      <div style="width: 100%; ">
        <h4><b><i>Confidential Information</i></b></h4>
        <h5 style="text-decoration: underline;"><b>Consent for the Release of Confidential Information</b></h5>
        <div style="width: 100%; padding: 10px; margin-top: 30px;"></div>
        <div class="row-check-container">
          <label for="lastName" class="label">1,</label>
          <input type="text" class="page3-input" id="lastName">
          <label for="dob" class="label">with a date of birth</label>
          <input type="text" class="page3-input" id="dob">
          <label for="ssn" class="label">and a Social Security Number of:</label>
        </div>
        <div class="row-check-container">
          <input type="text" class="page3-input" id="lastName">
          <label for="dob" class="label">give authorization to any necessary persons/organizations to give my</label>
        </div>
        <div class="row-check-container">
          <label for="dob" class="label">information to Veterans Inc. so that they can better understand my condition
            and help me obtain employment</label>
        </div>
        <div class="row-check-container">
          <label for="dob" class="label">and/or other:</label>
          <input type="text" class="page3-input" id="lastName">
        </div>
        <div style="width: 100%; padding: 10px; margin-top: 30px;"></div>
        <p style="font-weight: 500;">I understand that I have the option to opt out of releasing certain information.
          By checking the boxes below, I understand that I am giving permission for the selected information to be sent
          to Veterans Inc., to included giving permission for the Veterans Inc. Staff to assist myself with the American
          Job Centers and obtaining my DD214:</p>
        <div style="width: 100%; padding: 10px; margin-top: 30px;"></div>
        <div
          style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; margin-left: 50px; margin-right: 50px;">
          <label for="employment" style="font-size: 18px; font-weight: 500;">
            <input type="checkbox" id="employment">
            Employment
          </label>
          <label for="nationalArchives" style="font-size: 18px; font-weight: 500;">
            <input type="checkbox" id="nationalArchives">
            National Archives/DD214 Recovery
          </label>
          <label for="other" style="font-size: 18px; font-weight: 500;">
            <input type="checkbox" id="other">
            Other
          </label>
          <input type="text" class="page3-input" id="otherInput">
        </div>
      </div>
      <p style="font-weight: 500; margin-top: 30px;">I also understand that:</p>
      <ul>
        <li>
          <p style="font-weight: 500; "> If I want to revoke permission for Veterans Inc. to get this information, I
            need to give written request to
            Veterans Inc. staff.</p>
        </li>
        <li>
          <p style="font-weight: 500; "> The authorization I am giving shall continue as long as I am receiving services
            at Veterans Inc. or up to 1
            year after ending services..</p>

        </li>
      </ul>
      <p style="font-weight: 500; margin-top: 50px;"> I also release, discharge and exonerate Veterans Inc., its staff,
        volunteers, and
        any person furnishing my confidential information from any and all liability that might arise out of furnishing
        or inspecting these documents. Finally, I also authorize Veterans Inc. staff and volunteers to release any of my
        information to the appropriate agents in the event of a medical emergency.</p>
      <div style="width: 100%; padding: 10px; margin-top: 30px;"></div>
      <div class="row-check-container">
        <label for="lastName" class="label" style="width: 200px;">Veteran's Signature </label>
        <input type="text" class="signature-input" id="lastName">
        <label for="dob" class="label">Date</label>
        <input type="text" class="signature-input" id="dob">
      </div>
      <div style="width: 100%; padding: 10px; margin-top: 600px;"></div>
      <div style="width: 100%; padding: 20px;">
        <div style="text-align: center;">
          <img src="img/logo.png" alt="Girl in a jacket" width="250">
        </div>
        <p style="font-weight: 500; margin-top: 50px;"> I hereby acknowledge that I have received a copy of the
          following documents and that they were reviewed with me at the time of my intake for participation in the
          Veterans Inc. Universal Services Program administered by Veterans Inc. and its identified subcontractors.</p>

        <div style="display: flex; flex-direction: column; margin-left: 50px; margin-right: 50px; margin-top: 50px;">
          <label for="employment" style="font-size: 18px; font-weight: 500; margin-bottom: 10px;">
            <input type="checkbox" id="employment">
            Fair and Equal Services Acknowledgment
          </label>
          <label for="nationalArchives" style="font-size: 18px; font-weight: 500;">
            <input type="checkbox" id="nationalArchives">
            Participant Rights
          </label>
          <label for="nationalArchives" style="font-size: 18px; font-weight: 500;">
            <input type="checkbox" id="nationalArchives">
            Grievance Procedures
          </label>
          <label for="nationalArchives" style="font-size: 18px; font-weight: 500;">
            <input type="checkbox" id="nationalArchives">
            Warning and Early Termination Policy
          </label>
        </div>
        <div style="width: 100%; padding: 10px; margin-top: 50px;"></div>
        <div class="rowDiv">
          <input type="text" class="lastNameInput" id="lastName">
          <input type="text" class="firstNameInput" id="firstName">
        </div>
        <div class="rowDiv">
          <label for="lastName" class="label">Signature of Veteran</label>
          <label for="firstName" class="label">Date</label>
        </div>
        <div style="width: 100%; padding: 10px; margin-top: 10px;"></div>
        <div class="rowDiv">
          <input type="text" class="lastNameInput" id="lastName">
          <input type="text" class="firstNameInput" id="firstName">
        </div>
        <div class="rowDiv">
          <label for="lastName" class="label">Veterans Inc. Case Manager</label>
          <label for="firstName" class="label">Date</label>
        </div>
      </div>
      <div style="width: 100%; padding: 10px; margin-top: 500px; "></div>
      <div style="width: 100%; padding: 10px; margin-top: 800px; ">
        <div style="text-align: center;">
          <img src="img/logo.png" alt="Girl in a jacket" width="300">
        </div>
        <h4 style="text-align: center; margin-top: 10px;">
          Fair and Equal Services Acknowledgment
        </h4>
        <p style="font-weight: 500; margin-top: 50px;"> Veterans Inc. is committed to providing fair and equal
          supportive services to individuals without regard to race, color, religion, sex, national origin, ancestry,
          age, disability, marital status, sexual orientation, or any other characteristic protected by law.</p>
        <p style="font-weight: 500; margin-top: 50px;"> If you feel that you have been treated in a discriminatory
          manner, you may contact the following persons:</p>
        <div class="row-check-container">
          <p style="font-weight: 500;">Supervisor Name: </p>
          <input type="text" class="signature-input" id="lastName">
        </div>
        <div class="row-check-container" style="margin-top: 15px;">
          <p style="font-weight: 500;">Supervisor Phone Number:</p>
          <input type="text" class="signature-input" id="lastName">
        </div>
        <p style="font-weight: 500; margin-top: 50px; margin-left: 100px;">Correspondence must be addressed to: <br><br>
          Veterans Rights Officer (VRO) <br>
          Veterans Inc. <br>
          69 Grove Street <br>
          Worcester, MA 01605</p>
        <p style="font-weight: 500; margin-top: 50px;">All notices and communications shall be provided in a manner that
          is effective for
          persons with hearing, visual, and other communication-related disabilities</p>
      </div>
      <div style="width: 100%; padding: 10px; margin-top: 500px; "></div>
      <div style="width: 100%; padding: 10px; margin-top: 800px; ">
        <div style="text-align: center;">
          <img src="img/logo.png" alt="Girl in a jacket" width="300">
        </div>
        <h4 style="text-align: center; margin-top: 30px;">
          Participant Rights
        </h4>

        <div style="margin-left: 100px; margin-right: 100px;">
          <ul>
            <p style="font-weight: 500; margin-top: 50px;"> You have the right to:</p>
            <li style="font-weight: 500; margin-top: 50px;">
              Have your confidentiality protected and respected, and know
              what information can and cannot be kept confidential. All client
              information will remain confidential except for certain types of
              information and situations. Those exceptions are: Release of
              Information as Approved by Client, Safety (risk of self-harm or
              risk of harm to others), Abuse, or Court Order to which this
              program is a party in fact. Participant information will be kept in
              a secured/locked area;
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Be treated with dignity and respect
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Be protected from verbal, physical and sexual mistreatment by
              Program Staff;
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Receive a written list of the guidelines of the program;
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              A safe environment when meeting with Program Staff;
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              An explanation of all available services and referral
              opportunities regarding healthcare, substance abuse, mental
              health, HIV/AIDS, case management, public benefits and
              employment services depending upon your need and eligibility;
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Participate in the development and implementation of your
              individual service plan and access to your files and records;
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Appeal any decisions made by this program and to contribute
              feedback through internal and external surveys;
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Receive fair and equal treatment from Program Staff.
            </li>
          </ul>
        </div>
      </div>
      <div style="width: 100%; padding: 10px; margin-top: 500px; "></div>
      <div style="width: 100%; padding: 10px; margin-top: 800px; ">
        <div style="text-align: center;">
          <img src="img/logo.png" alt="Girl in a jacket" width="300">
        </div>
        <h4 style="text-align: center; margin-top: 30px;">
          Grievance Procedure
        </h4>

        <div style="margin-left: 100px; margin-right: 100px;">
          <ul>
            <p style="font-weight: 500; margin-top: 50px;">You have the right to:</p>
            <li style="font-weight: 500; margin-top: 50px;">
              Address any program problem you have with the Veterans Inc.
              Case Manager. If s/he cannot solve your problem, please refer
              to next bullet;
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Address your problem with the supervisor of the Case Manager.
              The supervisor will investigate the problem by talking to you and
              the Case Manger involved and will respond to you within 3
              business days. If you feel that your problem is not resolved,
              please refer to next bullet;
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Put your grievance in writing to the Veterans Inc. Grievance
              Officer. He or she will connect with you and gather all the
              written reports as well as speak to the staff involved. The
              Grievance Officer will respond to you within three business
              days.
            </li>
          </ul>
        </div>
        <p style="font-weight: 500; margin-top: 50px; margin-left: 50px;">Correspondence must be addressed to: <br><br>
          Veterans Rights Officer (VRO) <br>
          Veterans Inc. <br>
          69 Grove Street<br>
          Worcester, MA 01605</p>
      </div>
      <div style="width: 100%; padding: 10px; margin-top: 500px; "></div>
      <div style="width: 100%; padding: 10px; margin-top: 800px; ">
        <div style="text-align: center;">
          <img src="img/logo.png" alt="Girl in a jacket" width="200">
        </div>
        <h4 style="text-align: center; margin-top: 30px;">
          Warning and Early Termination Policy
        </h4>
        <div style="margin-left: 100px; margin-right: 100px; text-align: justify;">
          <ul>
            <li style="font-weight: 500; margin-top: 20px;">
              Warnings are determined on a case by case basis, in relation to Veterans Inc.’s
              policy on participant termination.
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              All extenuating circumstances are taken into account, and warnings are issued
              only in relation to extreme situations.
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              The major issuance of a warning is in relation to a participants’ refusal of
              program services.
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              The authority for making determinations regarding verbal and written warnings
              rests with Veterans Inc. management, supported by input from the participants’
              Case Manager.
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Written notice will be provided to the participant containing a clear statement of
              the reasons for termination. Copies of all confirmations of verbal warnings and
              written warnings shall be maintained in the participant’s program file.
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Participant has the right to appeal and to have a fair review my Program
              Management.
            </li>
            <li style="font-weight: 500; margin-top: 10px;">
              Determinations regarding final warnings and termination from program shall be
              made jointly by the Case Manager and the Program Manager. Prompt written
              notice of the final decision to the participant will be given.
            </li>
          </ul>
        </div>
        <p style="font-weight: 500; margin-top: 50px; margin-left: 80px;">*Reasonable accommodations will be made to
          terminating program services in the
          event that the head of household expire. Veterans Inc. will work with other adult
          occupants (listed on existing lease) in securing other housing arrangements if
          applicable and will allow said occupants to remain within the subsidy program for
          determined period of time.</p>
      </div>
      <div style="width: 100%;  margin-top: 700px; position: relative;">
        <div style="text-align: right;">
          <img src="img/logo.png" alt="Girl in a jacket" width="250">
        </div>
        <h3 style="position: absolute; top: 60px; left: 0px;">
          HOMELESS VERIFICATION/SELF VERIFICATION
        </h3>
      </div>
      <div style="width: 100%;">
        <div style=" width: 100%;
        display: flex;
        ">
          <div style=" width: 30%;
          border: 1px solid;        
          ">
            <p style="font-weight: bold; text-align: center;">Applicant Name:</p>
          </div>
          <input style=" width: 70%;
           border: 1px solid;
           " type="text" id="nationalArchives">
        </div>
        <p style="font-weight: 500; text-align: justify;"><b> Instructions: </b>This form is to certify, via a third
          party, that the above named applicant is currently “literally homeless” as defined
          by program description. The third party completing this form must check one box below, provide a description,
          and sign and date
          this form. Clients may complete this self-certification if third party documentation (i.e., written or oral
          verification) cannot be
          obtained from an appropriate third party. Applicants may self-certify their current “literally homeless”
          status per one of the
          categories below and as defined by program description. Staff should review this form with applicants and
          assist in completing,
          as needed. Applicants must sign and date this form. </p>
        <hr style=" border-top: 2px solid #000000;
          border-radius: 5px;
        ">
        <h5>
          <b><i>I certify that (check only one): </i></b>
        </h5>
        <p style="font-weight: 500; text-align: justify;"><input type="checkbox" id="nationalArchives"> A person who
          lacks a fixed, regular, and adequate nighttime residence; an individual who will
          imminently lose his or her housing, has no subsequent residence identified, and/or who lacks the
          resources or support network needed to obtain other permanent housing, or victim of domestic violence. <br>
          <b>HVRP = Homeless, SSVF = Prevention</b>
        </p>
        <div class="container2">
          <p class="header">
            Description of Veteran Situation:
          </p>
          <div class="content"></div>
          <div class="content"></div>
        </div>
        <hr style=" border-top: 2px solid #000000;
          border-radius: 5px;
        ">
        <p style="font-weight: bold; text-align: justify;"><input type="checkbox" id="nationalArchives"> I (we) am
          living in a car, park, abandoned building, bus/train station, airport, camping ground,
          or other place not designed for or ordinarily used as a regular sleeping accommodation.
        </p>
        <div class="container2">
          <p class="header">
            Description of Where You Are Staying:
          </p>
          <div class="content"></div>
          <div class="content"></div>
        </div>
        <hr style=" border-top: 2px solid #000000;
          border-radius: 5px;">
        <p style="font-weight: bold; text-align: justify;"><input type="checkbox" id="nationalArchives"> I (we) am
          staying in an emergency shelter OR a transitional housing program for people who
          are homeless OR a hotel or motel that is paid for by a charity or government program.
        </p>
        <div style=" width: 100%;
        display: flex;">
          <div style=" width: 50%;
          border: 1px solid;">
            <p style="font-weight: bold; text-align: center; margin-top: 10px;">Shelter, Transitional Housing or
              Hotel/Motel Name:
            </p>
          </div>
          <input style=" width: 50%;
           border: 1px solid;" type="text" id="nationalArchives">
        </div>
        <div style=" width: 100%;
        display: flex;">
          <div style=" width: 50%;
          border: 1px solid;">
            <p style="font-weight: bold; text-align: center; margin-top: 10px;">Location:
            </p>
          </div>
          <input style=" width: 50%;
           border: 1px solid;" type="text" id="nationalArchives">
        </div>
        <div style=" width: 100%;
        display: flex;">
          <div style=" width: 50%;
          border: 1px solid;">
            <p style="font-weight: bold; text-align: center; margin-top: 10px;">If Hotel/Motel: Name of Charity/Program
              Paying for Stay:
            </p>
          </div>
          <input style=" width: 50%;
           border: 1px solid;" type="text" id="nationalArchives">
        </div>
        <hr style=" border-top: 2px solid #000000;
          border-radius: 5px;">
        <p style="font-weight: bold; text-align: justify;"><input type="checkbox" id="nationalArchives"> Exiting an
          institution where I have been staying for 90 days or less AND I stayed in an
          emergency shelter OR a place not designed for or ordinarily used as a regular sleeping
          accommodation immediately prior to entering that institution.
        </p>
        <div style=" width: 100%;
        display: flex;">
          <div style=" width: 50%;
          border: 1px solid;">
            <p style="font-weight: bold; text-align: center; margin-top: 5px;">Name of Institution:
            </p>
          </div>
          <input style=" width: 50%;
           border: 1px solid;" type="text" id="nationalArchives">
        </div>
        <div style=" width: 100%;
        display: flex;">
          <div style=" width: 50%;
          border: 1px solid;">
            <p style="font-weight: bold; text-align: center; margin-top: 5px;">Location:
            </p>
          </div>
          <input style=" width: 50%;
           border: 1px solid;" type="text" id="nationalArchives">
        </div>
        <div style=" width: 100%;
        display: flex;">
          <div style=" width: 50%;
          border: 1px solid;">
            <p style="font-weight: bold; text-align: center; margin-top: 5px;">Date of Admission:
            </p>
          </div>
          <input style=" width: 50%;
           border: 1px solid;" type="text" id="nationalArchives">
        </div>
        <div style=" width: 100%;
        display: flex;">
          <div style=" width: 50%;
          border: 1px solid;">
            <p style="font-weight: bold; text-align: center; margin-top: 5px;">Description of Unsheltered Location:
            </p>
          </div>
          <input style=" width: 50%;
           border: 1px solid;" type="text" id="nationalArchives">
        </div>
        <div style=" width: 100%;
        display: flex;">
          <div style=" width: 50%;
          border: 1px solid;">
            <p style="font-weight: bold; text-align: center; margin-top: 5px;">Authorized Agency Representative
              Signature:
            </p>
          </div>
          <input style=" width: 50%;
           border: 1px solid;" type="text" id="nationalArchives">
        </div>
        <div style=" width: 100%;
        display: flex;">
          <div style=" width: 50%;
          border: 1px solid;">
            <p style="font-weight: bold; text-align: center; margin-top: 5px;">Date:
            </p>
          </div>
          <input style=" width: 50%;
           border: 1px solid;" type="text" id="nationalArchives">
        </div>
        <hr style=" border-top: 2px solid #000000;
        border-radius: 5px;">
        <div class="row-check-container">
          <label for="lastName" class="label" style="width: 200px;">Applicant Signature:</label>
          <input type="text" class="signature-input" id="lastName">
          <label for="dob" class="label">Date</label>
          <input type="text" class="signature-input" id="dob">
        </div>
      </div>
      <div style="width: 100%;">
        <div style="text-align: center; margin-top: 50px;">
          <img src="img/logo.png" alt="Girl in a jacket" width="300">
        </div>
        <h4 style="text-align: center; margin-top: 10px; text-decoration: underline;">
          Participant Agreement and Right to Terminate
        </h4>
        <p style="font-weight: 500; text-align: justify; margin-top: 50px;">As a participant within the Veterans Inc.
          Program, I understand that participation is completely voluntary for me
          and/or my household. <br><br>
          I understand that the services provided by this program are time-limited and are not meant to be permanent or
          long-term assistance. I also understand that in order to receive or maintain assistance I must adhere to
          specific program requirements. <br><br>
          <b>Program Requirements:</b>
        </p>
        <p style="font-weight: 500; text-align: justify; margin-top: 30px; margin-left: 30px;">
          1. Working collaboratively with Veterans Inc. staff and applicable service providers. <br><br>
          2. Actively participate in the development and successful outcome of my Individual Service Plan(s); <br><br>
          3. Participating in stabilization services following my placement in permanent housing (if applicable);
          <br><br>
          4. Notifying my Case Manager within 72 business hours of any changes to my household income or
          housing status (if applicable); <br><br>
          5. Developing and adhering to a monthly household budget, if needed.
        </p>
        <p style="font-weight: 500; text-align: justify; margin-top: 50px;">
          <b>Early Program Termination: </b>
        </p>
        <p style="font-weight: 500; text-align: justify; margin-top: 30px; margin-left: 30px;">
          1. You may be terminated early from the Veterans Inc. Program for not following program
          requirements; <br><br>
          2. Providing false or misleading information; <br><br>
          3. Not complying with staff requests for information; <br><br>
          4. Engaging in unlawful activity, threats, violence, acts of terrorism, or any other behavior that poses
          a threat to agency personnel, agency affiliated organizations, and groups or contractors.
        </p>
        <p style="font-weight: 500; text-align: justify; margin-top: 50px;">
          <b>Program Completion:</b>
        </p>
        <p style="font-weight: 500; text-align: justify; margin-top: 50px;">As a participant within the Veterans Inc.
          You will be dismissed from Veterans Inc. Services Programs on the Date of Completion; which will be the date
          in which the requested supportive services are completed and no longer needed. <br><br>
          *All participant households will receive mailed written confirmation and justified reason(s). Copy of
          termination
          and/or completion letter will be kept on record and placed within participant file.
        </p>
        <div class="row-check-container" style="margin-top: 20px;">
          <label for="lastName" class="label" style="width: 300px;">Participant Name (Print) </label>
          <input type="text" class="signature-input" id="lastName">
          <label for="dob" class="label">(Signature)</label>
          <input type="text" class="signature-input" id="dob">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <label for="lastName" class="label" style="width: 300px;">Case Manager Name (Print)</label>
          <input type="text" class="signature-input" id="lastName">
          <label for="dob" class="label">(Signature)</label>
          <input type="text" class="signature-input" id="dob">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <label for="lastName" class="label">Date: </label>
          <input type="text" class="signature-input" id="lastName">
        </div>
      </div>
      <div style="width: 100%;">
        <div style="text-align: left; margin-top: 100px;">
          <img src="img/logo.png" alt="Girl in a jacket" width="300">
        </div>
        <h2 style="text-align: center; margin-top: 10px; color: rgb(23, 23, 51);">
          Individual Employment Plan
        </h2>
        <hr style=" border-top: 2px solid #335179;
        border-radius: 5px;
      ">
        <div class="row-check-container" style="margin-top: 20px;">
          <label for="lastName" class="label">Client Name</label>
          <input type="text" class="signature-input" style="width: 90%;" id="lastName">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500;">Registered @ CC</p>
          <input type="text" class="signature-input" style="width: 20%;" id="lastName">
          <p style="font-weight: 500;">/ DVOP</p>
          <input type="text" class="signature-input" style="width: 20%;" id="lastName">
          <p style="font-weight: 500;">/ JOB Seeker #</p>
          <input type="text" class="signature-input" style="width: 25%;" id="lastName">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500;">Transportation?: </p>
          <input type="text" class="signature-input" style="width: 30%;" id="lastName" value="Car/ Bus/ Walk">
          <p style="font-weight: 500;">value="Car/ Bus/ Walk"</p>
          <input type="text" class="signature-input" style="width: 30%;" id="lastName"
            value="Class D / CDL A,B, / 7D (School Van)">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: bold;">Looking For: </p>
          <input type="text" class="signature-input" style="width: 30%;" id="lastName" value="FT/PT Hrs">
          <p style="font-weight: bold;">Do You Have a Resume?</p>
          <input type="text" class="signature-input" style="width: 30%;" id="lastName" value=" Yes / No / Sort of">
        </div>
        <p style="font-weight: 500; margin-top: 10px;"><b>Restrictions </b>(i.e. No overnights/ On bus route/ No heavy
          lifting)
        </p>
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <p style="font-weight: 500; margin-top: 20px;"><b>Desired Industry</b>(Select From List)
        </p>
        <p style="font-weight: 500; margin-top: 20px;"><i> Administration (Office Work) / Construction / Defense /
            Education / Entertainment / Financial Food /
            Healthcare / Hospitality / Insurance / Manufacturing / Mechanical / Pharmaceutical / Retail / Sales /
            Security / Social Work / Software (IT) / Transportation (Driving) / Other</i> <input type="text"
            class="signature-input" style="width: 20%;" id="lastName" value="">
        </p>
        <p style="font-weight: 500; margin-top: 20px;"><i><b> Job Title/ Titles</b> (i.e. Secretary / HR Generalist /
            B2B Sales
            person / Diesel Mechanic / Executive Chef)</i>
        </p>
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <p style="font-weight: 500; margin-top: 20px;"><i><b> Desired Industry</b> (Select From List)</i>
        </p>
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <p style="font-weight: 500; margin-top: 20px;"><b> Short Term Goal:</p>
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <p style="font-weight: 500; margin-top: 20px;"><b> Long Term Goal:</p>
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <p style="font-weight: 500; margin-top: 20px;"><b> Any Training Required</p>
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
        <input type="text" class="signature-input" style="width: 100%;" id="lastName" value="">
      </div>

      <div style="width: 100%;">
        <div style="text-align: left; margin-top: 200px;">
          <img src="img/logo.png" alt="Girl in a jacket" width="300">
        </div>
        <h4 style="text-align: center; margin-top: 50px; color: rgb(23, 23, 51);">
          <b>Employment Information</b>
        </h4>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500; margin-top: 20px;">Name</p>
          <input type="text" class="signature-input" style="width: 40%;" id="lastName">
          <p style="font-weight: 500; margin-top: 20px;">Social Security Number</p>
          <input type="text" class="signature-input" style="width: 40%;" id="lastName">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500;">Address</p>
          <input type="text" class="signature-input" style="width: 80%;" id="lastName">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500;">Phone Number</p>
          <input type="text" class="signature-input" style="width: 30%;" id="lastName" value="">
        </div>
        <h4 style="text-align: center; margin: 50px; color: rgb(23, 23, 51);">
          <b>Employment Information</b>
        </h4>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500;">Name of Employer</p>
          <input type="text" class="signature-input" style="width: 35%;" id="lastName" value="">
          <p style="font-weight: 500;">Start Date</p>
          <input type="text" class="signature-input" style="width: 35%;" id="lastName" value=" ">
        </div>
        <p style="font-weight: 500; margin-top: 10px;">Address<input type="text" class="signature-input"
            style="width: 90%;" id="lastName" value="">
        </p>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500;">Phone Number</p>
          <input type="text" class="signature-input" style="width: 30%;" id="lastName" value="">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500;">Contact Person</p>
          <input type="text" class="signature-input" style="width: 35%;" id="lastName" value="">
          <p style="font-weight: 500;">Title</p>
          <input type="text" class="signature-input" style="width: 45%;" id="lastName" value=" ">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500;">Client's Job Title</p>
          <input type="text" class="signature-input" style="width: 30%;" id="lastName" value="">
          <p style="font-weight: 500;">HRS per week</p>
          <input type="text" class="signature-input" style="width: 18%;" id="lastName" value=" ">
          <p style="font-weight: 500;">Wage</p>
          <input type="text" class="signature-input" style="width: 22%;" id="lastName" value=" ">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500; ">Veterans Inc. Provided: Tools, Uniform, Supplies</p>
          <input type="text" class="signature-input" style="width: 60%;" id="lastName" value="">
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500;">Date Placement Confirmed</p>
          <input type="text" class="signature-input" style="width: 35%;" id="lastName" value="">
          <p style="font-weight: 500;">Confirmed by Phone, Offer Letter or in Person
            (circle one)</p>
        </div>
        <div class="row-check-container" style="margin-top: 20px;">
          <p style="font-weight: 500;">Submitted By:</p>
          <input type="text" class="signature-input" style="width: 80%;" id="lastName" value="">

        </div>
      </div>
      <div style="width: 100%; padding: 10px; margin-top: 1000px;"></div>
      <div style="width: 100%; padding: 10px; margin-top: 100px;"></div>
      <div style="margin-left: 50px; margin-right: 50px; padding: 10px; ">
        <h5 class="card-subtitle mb-4 text-center" style="text-decoration: underline;"><b> CALL OF DUTY ENDOWMENT<br>VETERAN PROFILES RELEASE</b></h5>
        <p style="text-align: justify; margin-top: 100px; font-weight: 500;">As part of its ongoing efforts to help veterans find high
          quality careers, the Call of Duty Endowment ("CODE") may create and publish a success story though social
          media, online or otherwise when a veteran successfully finds a new job following efforts by CODE and/or it's
          non-profit partners. CODE and its partners ask you here for permission to use your name, biography, image,
          footage, likeness and voice (the "Licensed Property") in such a success story. By signing below you hereby
          grant CODE and its partners a worldwide, non-exclusive, perpetual, right and license, but not obligation, to
          use the Licensed Property for such purpose. You understand that this is a gratis license and that you will not
          receive any payment for this consent, and you release and hold CODE and its partners harmless from any claims,
          demands or liabilities arising out of any such success story.</p>
        <div style="width: 100%; padding: 10px; margin-top: 100px;"></div>
        <input type="text" class="signature-input" id="lastName">
        <h6><b>Signature :</b></h6>
        <div style="width: 100%; padding: 10px; margin-top: 20px;"></div>
        <input type="text" class="signature-input" id="lastName">
        <h6><b>Printed Name :</b></h6>
        <div style="width: 100%; padding: 10px; margin-top: 20px;"></div>
        <input type="text" class="signature-input" id="lastName">
        <h6><b>Date :</b></h6>
      </div>
      <div style="width: 100%; padding: 10px; margin-top: 1000px;"></div>
      <div style="width: 100%; padding: 10px; margin-top: 100px;"></div>
      <div style="margin-left: 50px; margin-right: 50px; padding: 10px; ">
        <h5 class="card-subtitle mb-4 text-center" style="text-decoration: underline;"><b> Arthur M. Blank Family Foundation<br>VETERAN PROFILES RELEASE</b></h5>
        <p style="text-align: justify; margin-top: 100px; font-weight: 500;">As part of its ongoing efforts to help veterans find high quality careers, the Arthur M.
          Blank Family Foundation may create and publish a success story though social
          media online or otherwise when a veteran successfully finds a new job following
          efforts by the Arthur M. Blank Family Foundation and/or it's non-profit partners.
          The Arthur M. Blank Family Foundation and its partners ask you here for permission
          to use your name, biography, image, footage, likeness and voice (the "Licensed
          Property") in such a success story. By signing below you hereby grant the Arthur
          M. Blank Family Foundation and its partners a worldwide, non-exclusive, perpetual,
          right and license, but not obligation, to use the Licensed Property for such purpose.
          You understand that this is a gratis license and that you will not receive any payment for
          this consent, and you release and hold the Arthur M. Blank Family Foundation and its
          partners harmless from any claims, demands or liabilities arising out of any such
          success story. <br><br>Congratulations on your success. Please sign below confirming your consent. Thank you.</p>
        <div style="width: 100%; padding: 10px; margin-top: 100px;"></div>
        <input type="text" class="signature-input" id="lastName">
        <h6><b>Signature :</b></h6>
        <div style="width: 100%; padding: 10px; margin-top: 20px;"></div>
        <input type="text" class="signature-input" id="lastName">
        <h6><b>Printed Name :</b></h6>
        <div style="width: 100%; padding: 10px; margin-top: 20px;"></div>
        <input type="text" class="signature-input" id="lastName">
        <h6><b>Date :</b></h6>
      </div>
      <div style="width: 100%; padding: 10px; margin-top: 1000px;"></div>
      <div style="width: 100%; padding: 10px; margin-top: 100px;"></div>
      <div style="margin-left: 50px; margin-right: 50px; padding: 10px; ">
        <p style="text-align: justify; margin-top: 100px; font-weight: 500; font-size: 30px; color: #335179;">Arthur M. Blank Foundation:</p>
        <p style="text-align: justify; margin-top: 100px; font-weight: 500; font-size: 30px; color: #335179;">I would like to send my sincerest gratitude to all of you 
          with the Arthur M. Blank Foundation for your 
          overwhelming support of our nations Service Men and 
          Women. I am a Veteran in Montana that was a participant 
          in the Veterans Incorporated, Homeless Veterans 
          Reintegration Program (HVRP). This amazing program 
          assisted me with gaining meaningful training and 
          employment, that made it possible for me to maintain a 
          stable living. <br><br>
          Your Foundation’s financial support made it possible 
          for me to receive the high-quality training and work 
          supplies I needed but was unable to afford. Thank you 
          again for your continued support of not only Veterans 
          Incorporated, but of me and my fellow Veterans with their 
          success at sustainable employment and living.
         <br><br> Sincerely,</p>
        <input type="text" class="signature-input" style="border-color: #335179;" id="lastName">
        
      </div>
    </div>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php

}
    else
    {
        header('location:login.php');
    }
?>