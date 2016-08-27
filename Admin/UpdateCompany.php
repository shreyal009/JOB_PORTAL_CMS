<?php
	if(isset($_POST['button2'])){
	$site_name1 = $_POST['txtSiteName'];
	$site_welcome_note1 = $_POST['txtWelcomeNote'];
	$site_about_us1 = $_POST['txtAboutUs'];
	$contact_address1 = $_POST['txtAddress'];
	$contact_phone1 = $_POST['txtMobile'];
	$contact_email1 = $_POST['txtEmail'];
	$site_banner_img = $_FILES['fileBanner']['name'];
	$tmp_banner_img = $_FILES['fileBanner']['tmp_name'];



		if($tmp_banner_img == "")
		{
			include "company_settings/company_info.php";
			$site_banner_img=$site_banner_image;
		}
		$find = array(
			"[site_name]",
			"[site_welcome_note]",
			"[site_about_us]",
			"[contact_address]",
			"[contact_phone]",
			"[contact_email]",
			"[site_banner_image]"
		);
		
		$replace = array(
			$site_name1,
			$site_welcome_note1,
			$site_about_us1,
			$contact_address1,
			$contact_phone1,
			$contact_email1,
			$site_banner_img 
		);

		file_put_contents("company_settings/company_info.php",str_replace($find,$replace,file_get_contents("company_config.php","true")),true);
		move_uploaded_file($tmp_banner_img,"design/$site_banner_img");
		echo '<script type="text/javascript">alert("Settings Updated Succesfully");</script>';
}
?>
