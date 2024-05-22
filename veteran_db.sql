-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 01:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veteran_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$mCNO.rJyyewL.BOn7twCyey2.pZbZhTKjBdeOmwHVXqEBY5tA9lx2');

-- --------------------------------------------------------

--
-- Table structure for table `form1_part1`
--

CREATE TABLE `form1_part1` (
  `id` int(11) NOT NULL,
  `full_legal_last_name` varchar(255) DEFAULT NULL,
  `mi` varchar(255) DEFAULT NULL,
  `first` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `social_security` varchar(255) DEFAULT NULL,
  `coc_location` varchar(255) DEFAULT NULL,
  `continuum_care_code` varchar(255) DEFAULT NULL,
  `emergency_contact_name` varchar(255) DEFAULT NULL,
  `emergency_contact_phone` varchar(255) DEFAULT NULL,
  `referral_source` varchar(255) DEFAULT NULL,
  `referral_source_phone` varchar(255) DEFAULT NULL,
  `va_station` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `ethnicity` varchar(255) DEFAULT NULL,
  `primary_race` varchar(255) DEFAULT NULL,
  `secondary_race` varchar(255) DEFAULT NULL,
  `copy_dd214` varchar(255) DEFAULT NULL,
  `branch_service` varchar(255) DEFAULT NULL,
  `service_date` varchar(255) DEFAULT NULL,
  `military_mos` varchar(255) DEFAULT NULL,
  `injury` varchar(255) DEFAULT NULL,
  `military_status` varchar(255) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `combat` varchar(255) DEFAULT NULL,
  `service_connected_disability` varchar(255) DEFAULT NULL,
  `discharge` varchar(255) DEFAULT NULL,
  `theater_operations` varchar(255) DEFAULT NULL,
  `prepared_by` varchar(255) DEFAULT NULL,
  `household_status` varchar(255) DEFAULT NULL,
  `cod_signature` varchar(255) DEFAULT NULL,
  `cod_printed_name` varchar(255) DEFAULT NULL,
  `cod_date` varchar(255) DEFAULT NULL,
  `hfc_veteran` varchar(255) DEFAULT NULL,
  `hfc_case_manager` varchar(255) DEFAULT NULL,
  `hfc_enrol_date` varchar(255) DEFAULT NULL,
  `hvrp_program` varchar(255) DEFAULT NULL,
  `code_program` varchar(255) DEFAULT NULL,
  `arthur_blank_program` varchar(255) DEFAULT NULL,
  `hvrp_program_2` varchar(255) DEFAULT NULL,
  `code_program_2` varchar(255) DEFAULT NULL,
  `arthur_blank_program_2` varchar(255) DEFAULT NULL,
  `cod_program_enrolled` varchar(255) DEFAULT NULL,
  `cod_verification` varchar(255) DEFAULT NULL,
  `cod_case_notes` varchar(255) DEFAULT NULL,
  `file_reviewed_by` varchar(255) DEFAULT NULL,
  `file_reviewed_date` varchar(255) DEFAULT NULL,
  `consent_blanks` varchar(255) DEFAULT NULL,
  `consent_employment` varchar(255) DEFAULT NULL,
  `consent_national` varchar(255) DEFAULT NULL,
  `consent_other` varchar(255) DEFAULT NULL,
  `consent_veteran_signature` varchar(255) DEFAULT NULL,
  `consent_date` varchar(255) DEFAULT NULL,
  `consent_blanks_2` varchar(255) DEFAULT NULL,
  `consent_veteran_signature_2` varchar(255) DEFAULT NULL,
  `consent_date_2` varchar(255) DEFAULT NULL,
  `consent_veteran_inc_case_signature` varchar(255) DEFAULT NULL,
  `consent_date_3` varchar(255) DEFAULT NULL,
  `hvsv_applicant_name` varchar(255) DEFAULT NULL,
  `hvsv_checkbox_value` varchar(255) DEFAULT NULL,
  `hvsv_description` longtext DEFAULT NULL,
  `hvsv_applicant_signature` varchar(255) DEFAULT NULL,
  `hvsv_applicant_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form1_part2`
--

CREATE TABLE `form1_part2` (
  `id` int(11) NOT NULL,
  `form1_part1_id` int(11) DEFAULT NULL,
  `pa_name` varchar(255) DEFAULT NULL,
  `pa_signature_1` varchar(255) DEFAULT NULL,
  `pa_case_manager_name` varchar(255) DEFAULT NULL,
  `pa_signature_2` varchar(255) DEFAULT NULL,
  `pa_date` varchar(255) DEFAULT NULL,
  `iep_client_name` varchar(255) DEFAULT NULL,
  `iep_registered@cc` varchar(255) DEFAULT NULL,
  `iep_dvop` varchar(255) DEFAULT NULL,
  `iep_job_seeker` varchar(255) DEFAULT NULL,
  `iep_transportation` varchar(255) DEFAULT NULL,
  `iep_licenses` varchar(255) DEFAULT NULL,
  `iep_looking_for` varchar(255) DEFAULT NULL,
  `iep_resume` varchar(255) DEFAULT NULL,
  `iep_restrictions` longtext DEFAULT NULL,
  `iep_job_titles` longtext DEFAULT NULL,
  `iep_skills` longtext DEFAULT NULL,
  `iep_short_term_goal` longtext DEFAULT NULL,
  `iep_long_term_goal` longtext DEFAULT NULL,
  `iep_training` longtext DEFAULT NULL,
  `iep_desired_industry` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `id` int(11) NOT NULL,
  `purchase_request` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `vendor_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description_purchases` varchar(255) DEFAULT NULL,
  `name_grant_program` varchar(255) DEFAULT NULL,
  `requester_name` varchar(255) DEFAULT NULL,
  `approver_name` varchar(255) DEFAULT NULL,
  `date_request` varchar(255) DEFAULT NULL,
  `date_approval` varchar(255) DEFAULT NULL,
  `requester_signature` varchar(255) DEFAULT NULL,
  `approver_signature` varchar(255) DEFAULT NULL,
  `acknowledge` longtext DEFAULT NULL,
  `veterans_name` varchar(255) DEFAULT NULL,
  `veterans_signature` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `ev_name` varchar(255) DEFAULT NULL,
  `ev_ss_number` varchar(255) DEFAULT NULL,
  `ev_address` varchar(255) DEFAULT NULL,
  `ev_phone_number` varchar(255) DEFAULT NULL,
  `ev_employer_name` varchar(255) DEFAULT NULL,
  `ev_start_date` varchar(255) DEFAULT NULL,
  `ev_date` varchar(255) DEFAULT NULL,
  `ev_phone_number_2` varchar(255) DEFAULT NULL,
  `ev_contact_person` varchar(255) DEFAULT NULL,
  `ev_title` varchar(255) DEFAULT NULL,
  `ev_clients_job_title` varchar(255) DEFAULT NULL,
  `ev_hrs_week` varchar(255) DEFAULT NULL,
  `ev_wage` varchar(255) DEFAULT NULL,
  `ev_veterans_provided` varchar(255) DEFAULT NULL,
  `ev_date_placement` varchar(255) DEFAULT NULL,
  `ev_submitted_by` varchar(255) DEFAULT NULL,
  `ajc_veterans_name` varchar(255) DEFAULT NULL,
  `ajc_veterans_address` varchar(255) DEFAULT NULL,
  `ajc_dob` varchar(255) DEFAULT NULL,
  `ajc_dos` varchar(255) DEFAULT NULL,
  `ajc_email` varchar(255) DEFAULT NULL,
  `ajc_phone_number` varchar(255) DEFAULT NULL,
  `ajc_client` varchar(255) DEFAULT NULL,
  `ajc_dvop_name` varchar(255) DEFAULT NULL,
  `ajc_telephone` varchar(255) DEFAULT NULL,
  `ajc_doe` varchar(255) DEFAULT NULL,
  `ajc_jobseeker_id` varchar(255) DEFAULT NULL,
  `extra_data_client_name` varchar(255) DEFAULT NULL,
  `extra_data_client_enolled` text DEFAULT NULL,
  `extra_data_date_name` varchar(255) DEFAULT NULL,
  `extra_data_ivtp` text DEFAULT NULL,
  `extra_data_episodic` text DEFAULT NULL,
  `extra_data_work` text DEFAULT NULL,
  `extra_data_client_coenrolled` varchar(255) DEFAULT NULL,
  `extra_data_referral` varchar(255) DEFAULT NULL,
  `extra_data_trainings` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_initial` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `cell_phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `homeless` varchar(255) DEFAULT NULL,
  `your_description` varchar(255) DEFAULT NULL,
  `other_details` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `race` varchar(255) DEFAULT NULL,
  `hear_about_us` varchar(255) DEFAULT NULL,
  `county_residence` varchar(255) DEFAULT NULL,
  `work_hours` varchar(255) DEFAULT NULL,
  `school_certification` varchar(255) DEFAULT NULL,
  `learn_about_services` longtext DEFAULT NULL,
  `spoke_with` varchar(255) DEFAULT NULL,
  `any_questions` longtext DEFAULT NULL,
  `only_questionnaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `first_name`, `middle_initial`, `last_name`, `cell_phone`, `email`, `address`, `homeless`, `your_description`, `other_details`, `gender`, `marital_status`, `age`, `race`, `hear_about_us`, `county_residence`, `work_hours`, `school_certification`, `learn_about_services`, `spoke_with`, `any_questions`, `only_questionnaire`) VALUES
(8, 'Max', 'Som', 'Holloway', '0211111111211', 'user123@gmail.com', 'asdastreet, bakery road', 'yes', 'service_provider', '', 'M', 'Never Married', '29', 'Native Hawaiian', 'friend_referral', 'US', 'yes', 'yes', 'Social Media', 'Someone else/ I do not Remember', 'No', 1),
(9, 'ron', 'cole', 'man', '12515115', 'user1235@gmail.com', 'asdastreet, bakery road', 'yes', 'service_provider', '', 'Male', 'Never Married', '29', 'Native Hawaiian', 'friend_referral', 'US', 'yes', 'yes', 'Social Media', 'Someone else/ I do not Remember', 'No', 1),
(10, 'asdf', 'cole', 'asdsad', '12515115', 'user@gmail.com', 'asdastreet, bakery road', 'yes', 'service_provider', '', 'F', 'Widowed', '29', 'Hispanic or Latino', 'online_search', 'US', 'no', 'no', 'Veteran inc. Community Event', 'Marian Jordan', 'no', 1),
(11, 'Max', 'cole', 'asdsad', '12515115', 'user@gmail.com', 'asdastreet, bakery road', 'yes', 'dvop_worker', '', 'M', 'Widowed', '29', 'Alaska Native', 'friend_referral', 'US', 'no', 'no', 'Veterans inc. Community presentation,Veteran inc. Community Event', 'Someone else/ I do not Remember', 'no', 1),
(12, '', '', '', '', '', '', 'no', 'actively_seeking', '', '', '', '', '', 'social_media', '', '', '', '', '', '', 1),
(13, '', '', '', '', '', '', 'no', 'actively_seeking', '', '', '', '', '', 'social_media', '', '', '', '', '', '', 1),
(14, '', '', '', '', '', '', 'no', 'actively_seeking', '', '', '', '', '', 'social_media', '', '', '', '', '', '', 1),
(15, '', '', '', '', '', '', 'no', 'actively_seeking', '', '', '', '', '', 'social_media', '', '', '', '', '', '', 1),
(16, 'Max', 'Som', 'Holloway', '12515115', 'user@gmail.com', 'asdastreet, bakery road', 'no', 'actively_seeking', '', 'M', '', '', '', 'social_media', '', '', '', '', '', '', 1),
(17, 'ron', 'cole', 'Hose', '', 'user999@gmail.com', '', 'no', 'actively_seeking', '', '', '', '', '', 'social_media', '', '', '', '', '', '', 1),
(18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(20, 'John', 'Cena', 'Davis', '0442536585212', 'user@mail.com', 'Block 15', 'yes', 'service_provider', '', 'Other', 'Domestic Partner', '23', 'Black or African American', 'online_search', 'dasdasd', 'yes', 'yes', 'Veterans inc. Community presentation,Another Veterans Inc Partner Organization', 'Marian Jordan', 'dasdsa', 1),
(21, 'john', 'Cena', 'Davis', '0442536585212', 'user@mail.com', 'Block 15', 'yes', 'dvop_worker', '', 'F', 'Widowed', '25', 'Asian', 'friend_referral', 'sdads', 'yes', 'yes', 'Veteran inc. Community Event,Social Media', 'Marian Jordan', 'asdasda', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1_part1`
--
ALTER TABLE `form1_part1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1_part2`
--
ALTER TABLE `form1_part2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form1_part1_foreign_key` (`form1_part1_id`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form1_part1`
--
ALTER TABLE `form1_part1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form1_part2`
--
ALTER TABLE `form1_part2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form1_part2`
--
ALTER TABLE `form1_part2`
  ADD CONSTRAINT `form1_part1_foreign_key` FOREIGN KEY (`form1_part1_id`) REFERENCES `form1_part1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
