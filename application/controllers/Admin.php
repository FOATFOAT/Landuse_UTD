<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()//เปิดใช้งาน model ***ต้องมี
	{
		parent::__construct();
		$this->load->model('member_model');
		
	}

	public function index()
	{
		$this->load->view('header');
		// $this->load->view('my_css_inside');
		$this->load->view('my_css');
		$this->load->view('navbar_view');
		$this->load->view('Landuse_UTD_view');
		// $this->load->view('navbar_inside_view');
		$this->load->view('footer');
		$this->load->view('my_js');
		// $this->load->view('my_js_inside');
		
	}

	public function login() //ล็อกอิน
	{
		$this->load->view('header');
		$this->load->view('my_css');
		$this->load->view('navbar_view');
		$this->load->view('login_view');
		$this->load->view('footer');
		$this->load->view('my_js');
		
	}

	public function land_inspection_services() //ตรวจสอบที่ดิน
	{

		$data['districts'] = $this->member_model->getDistricts();

		$this->load->view('header');
		$this->load->view('my_css');
		$this->load->view('navbar_view');
		$this->load->view('land_inspection_services_view',$data);
		$this->load->view('footer');
		$this->load->view('my_js');
		
	}
	
	public function contact() //ติดต่อสอบถาม
	{
		$data['districts'] = $this->member_model->getDistricts();

		$this->load->view('header');
		$this->load->view('my_css');
		$this->load->view('navbar_view');
		$this->load->view('contact_view',$data);
		$this->load->view('footer');
		$this->load->view('my_js');
		
	}

	
	public function register() //ลงทะเบียน
	{
		$this->load->view('header');
		$this->load->view('my_css');
		$this->load->view('navbar_view');
		$this->load->view('register_view');
		$this->load->view('footer');
		$this->load->view('my_js');
		
	}
	public function cookie_policy() //นโยบายการใช้งานคุกกี้
	{
		$this->load->view('header');
		$this->load->view('my_css');
		$this->load->view('navbar_view');
		$this->load->view('cookie_policy_view');
		$this->load->view('footer');
		$this->load->view('my_js');
		
	}
	


	public function insert_data() //ลงข้อมูล
	{
		// echo $this->input->post('ID_card');
		// print_r($_POST);
		$this->member_model->insert_data_register();
		// exit;
	}
	public function generate_security_code() //
	{
	
		if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

		// Function to generate a random security code
		function generateSecurityCode($length = 6) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = '';
			for ($i = 0; $i < $length; $i++) {
				$code .= $characters[rand(0, strlen($characters) - 1)];
			}
			return $code;
		}

		// Generate a random security code and store it in the session
		$securityCode = generateSecurityCode();
		$_SESSION['security_code'] = $securityCode;

		// Set the content type to image/png
		header('Content-type: image/png');

		// Create a blank image with a white background
		$image = imagecreate(150, 50);
		$background_color = imagecolorallocate($image, 255, 255, 255);

		// Set the text color to black
		$text_color = imagecolorallocate($image, 0, 0, 0);

		// Add the security code text to the image
		// imagettftext($image, 20, 0, 20, 35, $text_color, '/assets/fonts/boxicons.ttf', $securityCode);
		$fontPath = FCPATH . 'assets/fonts/Rubik-VariableFont_wght.ttf';
		imagettftext($image, 20, 0, 20, 35, $text_color, $fontPath, $securityCode);

		// Output the image as PNG
		imagepng($image);

		// Free up memory
		imagedestroy($image);

	}

	public function getSubdistricts($amphure_id)  //เลือกเอาเภอแล้วส่ง id ตำบล พร้อมแสดง option ของตำบล
	{
        $subdistricts = $this->member_model->getSubdistricts($amphure_id);
        echo json_encode($subdistricts);
    }
	public function getSubdistricts2() //นำค่า id ตำบลมาแล้ว แสดงเป็น รหัสไปรษณีย์
	{
		// echo($tambons_id)
		// $tambons_id = $this->input->post('tambons_id');
        $subdistricts2 = $this->member_model->getSubdistricts2();
		echo json_encode($subdistricts2);
		// print_r($subdistricts2);
        // echo ($subdistricts2);
		
    }

	public function today_thai() //ว/ด/ป
	{
		date_default_timezone_set('Asia/Bangkok');  //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
        $strDate = date('Y/n/j');
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        // $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthCut = Array('',
		'มกราคม',
		'กุมภาพันธ์',
		'มีนาคม',
		'เมษายน',
		'พฤษภาคม',
		'มิถุนายน',
		'กรกฎาคม',
		'สิงหาคม',
		'กันยายน',
		'ตุลาคม',
		'พฤศจิกายน',
		'ธันวาคม');
        $strMonth=$strMonthCut[$strMonth];
        $today_date = $strDay." ".$strMonth." ".$strYear;
		// $today_date = date("Y-m-d");
		echo $today_date;
    }


	public function add_data() //เพิ่มข้อมูล
	{

		// $this->member_model->add_data();

		$formData = $this->input->post('formData');
		// print_r ($formData);
		
		if(isset ($_FILES['files']['name'])){
			// echo ("dfd");
			print_r ($_FILES['files']);
		}
		// foreach ($_FILES['files']['name'] as $key => $name) {
		// 	$tmp_name = $_FILES['files']['tmp_name'][$key];
		// 	$target_path = "uploads/" . basename($name);


		// 	print_r ($name);
		// 	// echo ("123456");

		// }
		
		// echo $target_path;
		// print_r ($tmp_name);
	}
	public function form_enter_information() 
	{





		
	// 	$email = $this->input->post('email');
	// 	echo ($email);
	// 	echo "กดกด";

		// ตรวจสอบ reCAPTCHA response
        $recaptchaResponse = $this->input->post('g-recaptcha-response');

        // ตรวจสอบ reCAPTCHA โดยใช้ Google reCAPTCHA API
        $recaptchaSecretKey = '6LdVdFMpAAAAALMTzfZeu9RgWUAfcLJQxWIkgfiv';
        $recaptchaVerifyUrl = 'https://www.google.com/recaptcha/api/siteverify';

        $recaptchaVerifyData = [
            'secret' => $recaptchaSecretKey,
            'response' => $recaptchaResponse,
        ];

        $recaptchaVerifyOptions = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($recaptchaVerifyData),
            ],
        ];

        $recaptchaVerifyContext = stream_context_create($recaptchaVerifyOptions);
        $recaptchaVerifyResult = file_get_contents($recaptchaVerifyUrl, false, $recaptchaVerifyContext);
        $recaptchaVerifyData = json_decode($recaptchaVerifyResult, true);

        // ตรวจสอบค่า success จาก reCAPTCHA API response
        if ($recaptchaVerifyData['success']) {
            // reCAPTCHA ถูกต้อง
			// echo "ลุ้ยยยย";

			$CompanyChecked = $this->input->post('CompanyChecked');
			// echo $CompanyChecked;

			if($CompanyChecked == 1){ // 1 เท่ากับ ยื่นในนามบริษัท
				// echo "t";
				$this->member_model->form_enter_information_cpn(); //บริษัท






				 // รับข้อมูลที่ส่งมา
				//  for ($i = 1; isset($_POST['landNumber_' . $i]); $i++) {
				// 	$landNumber = $_POST['landNumber_' . $i];
				// 	$landPlot = $_POST['landPlot_' . $i];
				// 	$surveyNumber = $_POST['surveyNumber_' . $i];
				// 	$frontImage = $_FILES['frontImage_' . $i]['name'];
				// 	$backImage = $_FILES['backImage_' . $i]['name'];
			
				// 	// แสดงข้อมูลที่ได้รับ
				// 	echo "ชุดข้อมูลที่ $i:<br>";
				// 	echo "landNumber: $landNumber<br>";
				// 	echo "landPlot: $landPlot<br>";
				// 	echo "surveyNumber: $surveyNumber<br>";
				// 	echo "frontImage: $frontImage<br>";
				// 	echo "backImage: $backImage<br>";
				// 	echo "<br>";
				// }
			
				// // รับข้อมูลอื่น ๆ
				// $CompanyChecked = $_POST['CompanyChecked'];
				// $company_name = $_POST['company_name'];
				// $title_name = $_POST['title_name'];
				// $firstname = $_POST['firstname'];
				// $lastname = $_POST['lastname'];
				// $ID_card = $_POST['ID_card'];
				// $phone_user = $_POST['phone_user'];
				// // $land_title_number = $_POST['land_title_number'];
				// // $land_number = $_POST['land_number'];
				// // $survey_page_number = $_POST['survey_page_number'];
				// $amphure = $_POST['amphure'];
				// $tambonsid = $_POST['tambonsid'];
				// $provinces = $_POST['provinces'];
				// $zip_code = $_POST['zip_code'];
				// $utilization = $_POST['utilization'];
				// $recaptchaResponse = $_POST['g-recaptcha-response'];
			
				// // แสดงข้อมูลอื่น ๆ
				// echo "CompanyChecked: $CompanyChecked<br>";
				// echo "company_name: $company_name<br>";
				// echo "title_name: $title_name<br>";
				// echo "firstname: $firstname<br>";
				// echo "lastname: $lastname<br>";
				// echo "ID_card: $ID_card<br>";
				// echo "phone_user: $phone_user<br>";
				// // echo "land_title_number: $land_title_number<br>";
				// // echo "land_number: $land_number<br>";
				// // echo "survey_page_number: $survey_page_number<br>";
				// echo "amphure: $amphure<br>";
				// echo "tambonsid: $tambonsid<br>";
				// echo "provinces: $provinces<br>";
				// echo "zip_code: $zip_code<br>";
				// echo "utilization: $utilization<br>";
				// echo "g-recaptcha-response: $recaptchaResponse<br>";






				
			}
			else{
				// echo "fดดดดด";
				$this->member_model->form_enter_information_person(); //คน


				
				 //รับข้อมูลที่ส่งมา
				//  for ($i = 1; isset($_POST['landNumber_' . $i]); $i++) {
				// 	$landNumber = $_POST['landNumber_' . $i];
				// 	$landPlot = $_POST['landPlot_' . $i];
				// 	$surveyNumber = $_POST['surveyNumber_' . $i];
				// 	$frontImage = $_FILES['frontImage_' . $i]['name'];
				// 	$backImage = $_FILES['backImage_' . $i]['name'];
			
				// 	// แสดงข้อมูลที่ได้รับ
				// 	echo "ชุดข้อมูลที่ $i:<br>";
				// 	echo "landNumber: $landNumber<br>";
				// 	echo "landPlot: $landPlot<br>";
				// 	echo "surveyNumber: $surveyNumber<br>";
				// 	echo "frontImage: $frontImage<br>";
				// 	echo "backImage: $backImage<br>";
				// 	echo "<br>";
				// }
			
				// // รับข้อมูลอื่น ๆ
				// $CompanyChecked = $_POST['CompanyChecked'];
				// // $company_name = $_POST['company_name'];
				// $title_name = $_POST['title_name'];
				// $firstname = $_POST['firstname'];
				// $lastname = $_POST['lastname'];
				// $ID_card = $_POST['ID_card'];
				// $phone_user = $_POST['phone_user'];
				// // $land_title_number = $_POST['land_title_number'];
				// // $land_number = $_POST['land_number'];
				// // $survey_page_number = $_POST['survey_page_number'];
				// $amphure = $_POST['amphure'];
				// $tambonsid = $_POST['tambonsid'];
				// $provinces = $_POST['provinces'];
				// $zip_code = $_POST['zip_code'];
				// $utilization = $_POST['utilization'];
				// $recaptchaResponse = $_POST['g-recaptcha-response'];
			
				// // แสดงข้อมูลอื่น ๆ
				// echo "CompanyChecked: $CompanyChecked<br>";
				// // echo "company_name: $company_name<br>";
				// echo "title_name: $title_name<br>";
				// echo "firstname: $firstname<br>";
				// echo "lastname: $lastname<br>";
				// echo "ID_card: $ID_card<br>";
				// echo "phone_user: $phone_user<br>";
				// // echo "land_title_number: $land_title_number<br>";
				// // echo "land_number: $land_number<br>";
				// // echo "survey_page_number: $survey_page_number<br>";
				// echo "amphure: $amphure<br>";
				// echo "tambonsid: $tambonsid<br>";
				// echo "provinces: $provinces<br>";
				// echo "zip_code: $zip_code<br>";
				// echo "utilization: $utilization<br>";
				// echo "g-recaptcha-response: $recaptchaResponse<br>";

			}
            
        } else {
			echo "เห้ออ";
			// var_dump($recaptchaVerifyData);
            // reCAPTCHA ไม่ถูกต้อง
            // ทำการจัดการในกรณีที่ reCAPTCHA ไม่ผ่าน
        }


		
		

		// $this->member_model->form_enter_information();

		// $this->member_model->config_sum_img();
		
		
		
		
		
		
		
		// if (isset($_FILES['formData'])) {
		// 	$eeee = $_FILES["formData"];

		// 	print_r($eeee);
		// }



		// if (isset($_FILES['ID_card_Copy'])) {
		// if (isset($_FILES['ID_card_Copy']) && isset($_FILES['house_regis_Copy'])) {
		// 	// ดูข้อมูลของไฟล์ ID_card_Copy
		// 	print_r ($_FILES['ID_card_Copy']);
		// 	print_r ($_FILES['house_regis_Copy']);
		// 	// $ID_card_Copy = $_FILES['ID_card_Copy'];
		// 	// $house_regis_Copy = $_FILES['house_regis_Copy'];
		// 	// // $company_certificate = $_FILES['company_certificate'];
		// 	// // $Other_documents_Copy = $_FILES['Other_documents_Copy'];
		
		// 	// // แสดงชื่อของไฟล์
		// 	// echo "File Name: " . $ID_card_Copy['size'];
		// 	// echo "File Name2: " . $house_regis_Copy['size'];
		// 	// echo "File Name3: " . $company_certificate['name'];
		// 	// echo "File Name4: " . $Other_documents_Copy['name'];
		// }

		// if(isset ($_FILES['files']['name'])){
		// 	// echo ("dfd");
		// 	print_r ($_FILES['files']);
		// }else {
		// 	echo "No file uploaded.";
		// }

		
	

		// $data = array(
		// 	'CompanyChecked' => $this->input->post('CompanyChecked'),
		// 	'company_name' => $this->input->post('company_name'),

		// 	'title_name' => $this->input->post('title_name'),
		// 	'firstname' => $this->input->post('firstname'),
		// 	'lastname' => $this->input->post('lastname'),
		// 	'ID_card' => $this->input->post('ID_card'),
		// 	'phone_user' => $this->input->post('phone_user'),
		// 	'land_title_number' => $this->input->post('land_title_number'),
		// 	'land_number' => $this->input->post('land_number'),
		// 	'survey_page_number' => $this->input->post('survey_page_number'),
		// 	'amphure' => $this->input->post('amphure'),
		// 	'tambonsid' => $this->input->post('tambonsid'),
		// 	'provinces' => $this->input->post('provinces'),
		// 	'zip_code' => $this->input->post('zip_code'),
		// 	'utilization' => $this->input->post('utilization'),
		// 	'email' => $this->input->post('email'),
		// 	// 'formData_land_deed' => $this->input->post('formData_land_deed'),
		// );
		// print_r($data);
		// print_r($_FILES);
		// $formData_land_deed = $_FILES['formDataWithImages'];
		// print_r ($formData_land_deed);
		
		// if(isset($_FILES['formData_land_deed'])){
		// 	$ID_card_Copy = $_FILES['formData_land_deed'];
		// 	echo "File Name: " . $ID_card_Copy['name'];
		// }

		// if(isset($_FILES['files']['name'])) {
		// 	$formData_land_deed = $_FILES['files'];
		// 	print_r($formData_land_deed['name']);
		// } else {
		// 	echo "No file uploaded.";
		// }

		
		
		// if(isset($_FILES['formData_land_deed']['name'])){
		// 	// echo ("dfd");
		// 	print_r ($_FILES['formData_land_deed']);
		// }else{
		// 	echo ("ผิด");
		// }
		
		// if(isset ($_FILES['files']['name'])){
		// 	// echo ("dfd");
		// 	print_r ($_FILES['files']);
		// }
	
	}

	public function upload_data() {
		$uploadedImages = []; // เก็บชื่อไฟล์รูปภาพที่อัปโหลดสำเร็จ
 // รับข้อมูลที่ส่งมา
for ($i = 1; isset($_POST['landNumber_' . $i]); $i++) {
    echo $landNumber = $_POST['landNumber_' . $i];
	echo ("-");
    echo $landPlot = $_POST['landPlot_' . $i];
	echo ("-");
    echo $surveyNumber = $_POST['surveyNumber_' . $i];
	echo ("-");
    $frontImage = $_FILES['frontImage_' . $i];
    $backImage = $_FILES['backImage_' . $i];
    // ดำเนินการกับข้อมูลตามต้องการ
	 // เก็บชื่อไฟล์รูปภาพที่อัปโหลดสำเร็จเพื่อนำไปใช้ในการตอบกลับ
	 echo ("-");
	 $uploadedImages[] = ['front' => $frontImage, 'back' => $backImage];
}
	print_r($uploadedImages);
	echo json_encode($uploadedImages);
		
    }

	//-----------------------------------  ภายใน + หลังบ้าน ---------------------------------



	public function system_inside() //ระบบภายใน ปิด
	{
		$this->load->view('header_inside');
		$this->load->view('my_css_inside');
		$this->load->view('navbar_inside_view');
		$this->load->view('system_inside_view');
		// $this->load->view('footer');
		$this->load->view('my_js_inside');
		
	}

	public function inside_system() //ระบบภายใน dashboard
	{

	
		$this->load->view('inside_header');
		$this->load->view('inside_css');
		$this->load->view('inside_navbar');
		$this->load->view('inside_dashboard_view');
		$this->load->view('inside_footer');
		$this->load->view('inside_js');
		
	}

	public function inside_receive_tb_cpn() //ระบบภายใน ตาราง cpnen
	{

		$data['table_submit_company'] = $this->member_model->table_submit_company();


		$this->load->view('inside_header');
		$this->load->view('inside_css');
		$this->load->view('inside_navbar');
		$this->load->view('inside_receive_tb_cpn_view',$data);
		$this->load->view('inside_footer');
		$this->load->view('inside_js');
		
	}

	public function inside_receive_tb_ps() //ระบบภายใน ตารางรอรับเรื่อง คน
	{

		$data['inside_receive_tb_ps'] = $this->member_model->inside_receive_tb_ps();


		$this->load->view('inside_header');
		$this->load->view('inside_css');
		$this->load->view('inside_navbar');
		$this->load->view('inside_receive_tb_ps_view',$data);
		$this->load->view('inside_footer');
		$this->load->view('inside_js');
		
	}


	public function test() //ระบบภายใน
	{
		$this->load->view('test');
		
	}


	public function get_wait_receive() //คาราง cpn ลอง
	{
		
		$cpn_id = $this->input->post('cpn_id');
		$data['get_wait_receive'] = $this->member_model->get_wait_receive($cpn_id);
		$this->load->view('inside_receive_tb_cpn_sub',$data);
		// echo $cpn_id;
		
		
	}

	public function get_wait_receive_ps() //คาราง cs ลอง
	{
		
		$ps_id = $this->input->post('ps_id');
		// $data['get_wait_receive_ps'] = $this->member_model->get_wait_receive_ps($ps_id);
		// $this->load->view('inside_receive_tb_ps_sub',$data);
		echo $ps_id;
		
		
	}






}
