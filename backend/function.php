<?php
include('connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'progsportsdev.com'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@progsportsdev.com'; // SMTP username
    $mail->Password   = 'Pass@Email1234'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('noreply@progsportsdev.com', 'Mailer');
    $mail->addAddress('abdulrafay99910@gmail.com', 'Veterans Inc.'); // Add a recipient
    
    $full_legal_last_name = $_POST['full_legal_last_name'] ?? '';
    $mi = $_POST['mi'] ?? '';
    $first = $_POST['first'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $email_address = $_POST['email_address'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $social_security = $_POST['social_security'] ?? '';
    $coc_location = $_POST['coc_location'] ?? '';
    $continuum_care_code = $_POST['continuum_care_code'] ?? '';
    $emergency_contact_name = $_POST['emergency_contact_name'] ?? '';
    $emergency_contact_phone = $_POST['emergency_contact_phone'] ?? '';
    $referral_source = $_POST['referral_source'] ?? '';
    $referral_source_phone = $_POST['referral_source_phone'] ?? '';
    $va_station = $_POST['va_station'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $ethnicity = $_POST['ethnicity'] ?? '';
    $primary_race = $_POST['primary_race'] ?? '';
    $secondary_race = $_POST['secondary_race'] ?? '';
    $copy_dd214 = $_POST['copy_dd214'] ?? '';
    $branch_service = $_POST['branch_service'] ?? '';
    $service_date = $_POST['service_date'] ?? '';
    $military_mos = $_POST['military_mos'] ?? '';
    $injury = $_POST['injury'] ?? '';
    $military_status = $_POST['military_status'] ?? '';
    $rank = $_POST['rank'] ?? '';
    $combat = $_POST['combat'] ?? '';
    $service_connected_disability = $_POST['service_connected_disability'] ?? '';
    $discharge = $_POST['discharge'] ?? '';
    $theater_operations = $_POST['theater_operations'] ?? '';
    $prepared_by = $_POST['prepared_by'] ?? '';
    $household_status = $_POST['household_status'] ?? '';
    $cod_signature = $_POST['cod_signature'] ?? '';
    $cod_printed_name = $_POST['cod_printed_name'] ?? '';
    $cod_date = $_POST['cod_date'] ?? '';
    $hfc_veteran = $_POST['hfc_veteran'] ?? '';
    $hfc_case_manager = $_POST['hfc_case_manager'] ?? '';
    $hfc_enrol_date = $_POST['hfc_enrol_date'] ?? '';
    $hvrp_program = $_POST['hvrp_program'] ?? '';
    $code_program = $_POST['code_program'] ?? '';
    $arthur_blank_program = $_POST['arthur_blank_program'] ?? '';
    $hvrp_program_2 = $_POST['hvrp_program_2'] ?? '';
    $code_program_2 = $_POST['code_program_2'] ?? '';
    $arthur_blank_program_2 = $_POST['arthur_blank_program_2'] ?? '';
    $cod_program_enrolled = $_POST['cod_program_enrolled'] ?? '';
    $cod_verification = $_POST['cod_verification'] ?? '';
    $cod_case_notes = $_POST['cod_case_notes'] ?? '';
    $file_reviewed_by = $_POST['file_reviewed_by'] ?? '';
    $file_reviewed_date = $_POST['file_reviewed_date'] ?? '';
    $consent_employment = $_POST['consent_employment'] ?? '';
    $consent_national = $_POST['consent_national'] ?? '';
    $consent_other = $_POST['consent_other'] ?? '';
    $consent_veteran_signature = $_POST['consent_veteran_signature'] ?? '';
    $consent_date = $_POST['consent_date'] ?? '';
    if (isset($_POST['consent_blanks_2']) && $_POST['consent_blanks_2'] !== null) {

        $consent_blanks_2_arr = $_POST['consent_blanks_2'];
        $consent_blanks_2=implode(',',$consent_blanks_2_arr);
    } else {
        $consent_blanks_2 = ''; 
    }
    $consent_veteran_signature_2 = $_POST['consent_veteran_signature_2'] ?? '';
    $consent_date_2 = $_POST['consent_date_2'] ?? '';
    $consent_veteran_inc_case_signature = $_POST['consent_veteran_inc_case_signature'] ?? '';
    $consent_date_3 = $_POST['consent_date_3'] ?? '';
    $hvsv_applicant_name = $_POST['hvsv_applicant_name'] ?? '';
    $hvsv_checkbox_value = $_POST['hvsv_checkbox_value'] ?? '';
    $hvsv_description = $_POST['hvsv_description'] ?? '';
    $hvsv_applicant_signature = $_POST['hvsv_applicant_signature'] ?? '';
    $hvsv_applicant_date = $_POST['hvsv_applicant_date'] ?? '';
    $pa_name = $_POST['pa_name'] ?? '';
    $pa_signature_1 = $_POST['pa_signature_1'] ?? '';
    $pa_case_manager_name = $_POST['pa_case_manager_name'] ?? '';
    $pa_signature_2 = $_POST['pa_signature_2'] ?? '';
    $pa_date = $_POST['pa_date'] ?? '';
    $iep_client_name = $_POST['iep_client_name'] ?? '';
    $iep_registered_at_cc = $_POST['iep_registered@cc'] ?? '';
    $iep_dvop = $_POST['iep_dvop'] ?? '';
    $iep_job_seeker = $_POST['iep_job_seeker'] ?? '';
    $iep_transportation = $_POST['iep_transportation'] ?? '';
    $iep_licenses = $_POST['iep_licenses'] ?? '';
    $iep_looking_for = $_POST['iep_looking_for'] ?? '';
    $iep_resume = $_POST['iep_resume'] ?? '';
    $iep_restrictions = $_POST['iep_restrictions'] ?? '';
    $iep_job_titles = $_POST['iep_job_titles'] ?? '';
    $iep_skills = $_POST['iep_skills'] ?? '';
    $iep_short_term_goal = $_POST['iep_short_term_goal'] ?? '';
    $iep_long_term_goal = $_POST['iep_long_term_goal'] ?? '';
    $iep_training = $_POST['iep_training'] ?? '';

    if (isset($_POST['iep_desired_industry']) && $_POST['iep_desired_industry'] !== null) {

        $iep_desired_industry_arr = $_POST['iep_desired_industry'];
        $iep_desired_industry=implode(',',$iep_desired_industry_arr);
    } else {
        $iep_desired_industry = ''; 
    }

    // form3
    if (isset($_POST['purchase_request']) && $_POST['purchase_request'] !== null) {

        $purchase_request_arr = $_POST['purchase_request'];
        $purchase_request=implode(',',$purchase_request_arr);
    } else {
        $purchase_request = ''; 
    }
    
    $amount = $_POST['amount'] ?? '';
    $vendor_name = $_POST['vendor_name'] ?? '';
    $address = $_POST['address'] ?? '';
    $description_purchases = $_POST['description_purchases'] ?? '';
    $name_grant_program = $_POST['name_grant_program'] ?? '';
    $requester_name = $_POST['requester_name'] ?? '';
    $approver_name = $_POST['approver_name'] ?? '';
    $date_request = $_POST['date_request'] ?? '';
    $date_approval = $_POST['date_approval'] ?? '';
    $requester_signature = $_POST['requester_signature'] ?? '';
    $approver_signature = $_POST['approver_signature'] ?? '';
    $acknowledge = $_POST['acknowledge'] ?? '';
    $veterans_name = $_POST['veterans_name'] ?? '';
    $veterans_signature = $_POST['veterans_signature'] ?? '';
    $date = $_POST['date'] ?? '';
    $ev_name = $_POST['ev_name'] ?? '';
    $ev_ss_number = $_POST['ev_ss_number'] ?? '';
    $ev_address = $_POST['ev_address'] ?? '';
    $ev_phone_number = $_POST['ev_phone_number'] ?? '';
    $ev_employer_name = $_POST['ev_employer_name'] ?? '';
    $ev_start_date = $_POST['ev_start_date'] ?? '';
    $ev_date = $_POST['ev_date'] ?? '';
    $ev_phone_number_2 = $_POST['ev_phone_number_2'] ?? '';
    $ev_contact_person = $_POST['ev_contact_person'] ?? '';
    $ev_title = $_POST['ev_title'] ?? '';
    $ev_clients_job_title = $_POST['ev_clients_job_title'] ?? '';
    $ev_hrs_week = $_POST['ev_hrs_week'] ?? '';
    $ev_wage = $_POST['ev_wage'] ?? '';
    $ev_veterans_provided = $_POST['ev_veterans_provided'] ?? '';
    $ev_date_placement = $_POST['ev_date_placement'] ?? '';
    $ev_submitted_by = $_POST['ev_submitted_by'] ?? '';
    $ajc_veterans_name = $_POST['ajc_veterans_name'] ?? '';
    $ajc_veterans_address = $_POST['ajc_veterans_address'] ?? '';
    $ajc_dob = $_POST['ajc_dob'] ?? '';
    $ajc_dos = $_POST['ajc_dos'] ?? '';
    $ajc_email = $_POST['ajc_email'] ?? '';
    $ajc_phone_number = $_POST['ajc_phone_number'] ?? '';
    $ajc_client = $_POST['ajc_client'] ?? '';
    $ajc_dvop_name = $_POST['ajc_dvop_name'] ?? '';
    $ajc_telephone = $_POST['ajc_telephone'] ?? '';
    $ajc_doe = $_POST['ajc_doe'] ?? '';
    $ajc_jobseeker_id = $_POST['ajc_jobseeker_id'] ?? '';
    $extra_data_client_name = $_POST['extra_data_client_name'] ?? '';
    if (isset($_POST['extra_data_client_enolled']) && $_POST['extra_data_client_enolled'] !== null) {

        $extra_data_client_name_arr = $_POST['extra_data_client_enolled'];
        $extra_data_client_enolled=implode(',',$extra_data_client_name_arr);
    } else {
        $extra_data_client_enolled = ''; 
    }
    $extra_data_date_name = $_POST['extra_data_date_name'] ?? '';
    if (isset($_POST['extra_data_ivtp']) && $_POST['extra_data_ivtp'] !== null) {

        $extra_data_ivtp_arr = $_POST['extra_data_ivtp'];
        $extra_data_ivtp=implode(',',$extra_data_ivtp_arr);
    } else {
        $extra_data_ivtp = ''; 
    }
    
   
    if (isset($_POST['extra_data_episodic']) && $_POST['extra_data_episodic'] !== null) {

        $extra_data_episodic_arr = $_POST['extra_data_episodic'];
        $extra_data_episodic=implode(',',$extra_data_episodic_arr);
    } else {
        $extra_data_episodic = ''; 
    }
    
    if (isset($_POST['extra_data_work']) && $_POST['extra_data_work'] !== null) {

        $extra_data_work_arr = $_POST['extra_data_work'];
        $extra_data_work=implode(',',$extra_data_work_arr);
    } else {
        $extra_data_work = ''; 
    }

    if (isset($_POST['extra_data_client_coenrolled']) && $_POST['extra_data_client_coenrolled'] !== null) {

        $extra_data_client_coenrolled_arr = $_POST['extra_data_client_coenrolled'];
        $extra_data_client_coenrolled=implode(',',$extra_data_client_coenrolled_arr);
    } else {
        $extra_data_client_coenrolled = ''; 
    }
    
    if (isset($_POST['extra_data_referral']) && $_POST['extra_data_referral'] !== null) {

        $extra_data_referral_arr = $_POST['extra_data_referral'];
        $extra_data_referral=implode(',',$extra_data_referral_arr);
    } else {
        $extra_data_referral = ''; 
    }
    if (isset($_POST['extra_data_trainings']) && $_POST['extra_data_trainings'] !== null) {

        $extra_data_trainings_arr = $_POST['extra_data_trainings'];
        $extra_data_trainings=implode(',',$extra_data_trainings_arr);
    } else {
        $extra_data_trainings = ''; 
    }

    $sql = "INSERT INTO form1_part1 (`full_legal_last_name`, `mi`, `first`, `dob`, `email_address`, `phone`, `address`, `social_security`, `coc_location`, `continuum_care_code`, `emergency_contact_name`, `emergency_contact_phone`,`referral_source`, `referral_source_phone`,`va_station`, `gender`, `ethnicity`, `primary_race`, `secondary_race`, `copy_dd214`,`branch_service`, `service_date`, `military_mos`, `injury`, `military_status`, `rank`, `combat`, `service_connected_disability`, `discharge`, `theater_operations`, `prepared_by`, `household_status`, `cod_signature`, `cod_printed_name`, `cod_date`, `hfc_veteran`, `hfc_case_manager`, `hfc_enrol_date`, `hvrp_program`, `code_program`, `arthur_blank_program`, `hvrp_program_2`, `code_program_2`, `arthur_blank_program_2`, `cod_program_enrolled`, `cod_verification`, `cod_case_notes`, `file_reviewed_by`, `file_reviewed_date`, `consent_employment`, `consent_national`, `consent_other`, `consent_veteran_signature`, `consent_date`, `consent_blanks_2`, `consent_veteran_signature_2`, `consent_date_2`, `consent_veteran_inc_case_signature`, `consent_date_3`, `hvsv_applicant_name`, `hvsv_checkbox_value`, `hvsv_description`, `hvsv_applicant_signature`, `hvsv_applicant_date`) 
        VALUES ('$full_legal_last_name', '$mi', '$first', '$dob', '$email_address', '$phone', '$address', '$social_security', '$coc_location', '$continuum_care_code', '$emergency_contact_name', '$emergency_contact_phone','$referral_source', '$referral_source_phone','$va_station', '$gender', '$ethnicity', '$primary_race', '$secondary_race', '$copy_dd214','$branch_service', '$service_date', '$military_mos', '$injury', '$military_status', '$rank', '$combat', '$service_connected_disability', '$discharge', '$theater_operations', '$prepared_by', '$household_status', '$cod_signature', '$cod_printed_name', '$cod_date', '$hfc_veteran', '$hfc_case_manager', '$hfc_enrol_date', '$hvrp_program', '$code_program', '$arthur_blank_program', '$hvrp_program_2', '$code_program_2', '$arthur_blank_program_2', '$cod_program_enrolled', '$cod_verification', '$cod_case_notes', '$file_reviewed_by', '$file_reviewed_date', '$consent_employment', '$consent_national', '$consent_other', '$consent_veteran_signature', '$consent_date', '$consent_blanks_2', '$consent_veteran_signature_2', '$consent_date_2', '$consent_veteran_inc_case_signature', '$consent_date_3', '$hvsv_applicant_name', '$hvsv_checkbox_value', '$hvsv_description', '$hvsv_applicant_signature', '$hvsv_applicant_date')";
    
    $result = $conn->query($sql);

    $sql2 = "INSERT INTO form1_part2 (`pa_name`, `pa_signature_1`, `pa_case_manager_name`, `pa_signature_2`, `pa_date`, `iep_client_name`, `iep_registered@cc`, `iep_dvop`, `iep_job_seeker`, `iep_transportation`, `iep_licenses`, `iep_looking_for`, `iep_resume`, `iep_restrictions`, `iep_job_titles`, `iep_skills`, `iep_short_term_goal`, `iep_long_term_goal`, `iep_training`, `iep_desired_industry`) 
        VALUES ('$pa_name', '$pa_signature_1', '$pa_case_manager_name', '$pa_signature_2', '$pa_date', '$iep_client_name', '$iep_registered_at_cc', '$iep_dvop', '$iep_job_seeker', '$iep_transportation', '$iep_licenses', '$iep_looking_for', '$iep_resume', '$iep_restrictions', '$iep_job_titles', '$iep_skills', '$iep_short_term_goal', '$iep_long_term_goal', '$iep_training', '$iep_desired_industry')";
    $result2 = $conn->query($sql2);

    $sql3 = "INSERT INTO form2 (`purchase_request`, `amount`, `vendor_name`, `address`, `description_purchases`, `name_grant_program`, `requester_name`, `approver_name`, `date_request`, `date_approval`, `requester_signature`, `approver_signature`, `acknowledge`, `veterans_name`, `veterans_signature`, `date`, `ev_name`, `ev_ss_number`, `ev_address`, `ev_phone_number`, `ev_employer_name`, `ev_start_date`, `ev_date`, `ev_phone_number_2`, `ev_contact_person`, `ev_title`, `ev_clients_job_title`, `ev_hrs_week`, `ev_wage`, `ev_veterans_provided`, `ev_date_placement`, `ev_submitted_by`, `ajc_veterans_name`, `ajc_veterans_address`, `ajc_dob`, `ajc_dos`, `ajc_email`, `ajc_phone_number`, `ajc_client`, `ajc_dvop_name`, `ajc_telephone`, `ajc_doe`, `ajc_jobseeker_id`, `extra_data_client_name`, `extra_data_client_enolled`, `extra_data_date_name`, `extra_data_ivtp`, `extra_data_episodic`, `extra_data_work`, `extra_data_client_coenrolled`, `extra_data_referral`, `extra_data_trainings`) 
        VALUES ('$purchase_request', '$amount', '$vendor_name', '$address', '$description_purchases', '$name_grant_program', '$requester_name', '$approver_name', '$date_request', '$date_approval', '$requester_signature', '$approver_signature', '$acknowledge', '$veterans_name', '$veterans_signature', '$date', '$ev_name', '$ev_ss_number', '$ev_address', '$ev_phone_number', '$ev_employer_name', '$ev_start_date', '$ev_date', '$ev_phone_number_2', '$ev_contact_person', '$ev_title', '$ev_clients_job_title', '$ev_hrs_week', '$ev_wage', '$ev_veterans_provided', '$ev_date_placement', '$ev_submitted_by', '$ajc_veterans_name', '$ajc_veterans_address', '$ajc_dob', '$ajc_dos', '$ajc_email', '$ajc_phone_number', '$ajc_client', '$ajc_dvop_name', '$ajc_telephone', '$ajc_doe', '$ajc_jobseeker_id', '$extra_data_client_name', '$extra_data_client_enolled', '$extra_data_date_name', '$extra_data_ivtp', '$extra_data_episodic', '$extra_data_work', '$extra_data_client_coenrolled', '$extra_data_referral', '$extra_data_trainings')";
    $result3 = $conn->query($sql3);


    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Form Submission';

    $bodyContent = '<h1>Form Submission Details</h1>';
    foreach ($_POST as $key => $value) {
        $bodyContent .= "<p><strong>$key:</strong> $value</p>";
    }
    $mail->Body    = $bodyContent;
 
    $mail->send();
    header('Location: ../thankyou.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
