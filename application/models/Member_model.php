<?php
class Member_model extends CI_Model {

    public function insert_data_register()//ลงข้อมูล แต่ไม่เอาแล้ว
{
    $ID_card = $this->input->post('ID_card');

    // ตรวจสอบว่า ID_card ไม่ซ้ำกัน
    $existing_user_query = $this->db->get_where('bl_user', array('ID_card' => $ID_card));
    $existing_user_count = $existing_user_query->num_rows();

    if ($existing_user_count == 0) {

         // ดึง ID_user ล่าสุดจากฐานข้อมูล
         $last_id_query = $this->db->select('ID_user')->order_by('ID_user', 'DESC')->limit(1)->get('bl_user');
         $last_id_result = $last_id_query->row();
 
         // ตรวจสอบว่ามี ID_user ล่าสุดหรือไม่
         if ($last_id_result) {
             // มี ID_user ล่าสุด
             $last_id = $last_id_result->ID_user;
             $last_number = (int) substr($last_id, 2); // แปลงสตริงเป็นตัวเลขและตัด "US" ทิ้ง
             $new_number = $last_number + 1;
 
             // สร้าง ID_user ใหม่
             $new_id_user = 'US' . str_pad($new_number, 8, '0', STR_PAD_LEFT);
         } else {
             // ไม่มี ID_user ล่าสุด
             $new_id_user = 'US00000001';
         }
 
 
         $password = $this->input->post('password');
         // สร้าง hash ของรหัสผ่าน
         $hashed_password = password_hash($password, PASSWORD_BCRYPT);
 
         $data = array(
             'ID_user' => $new_id_user,
             'title_name_user' => $this->input->post('title_name_user'),
             'firstname_user' => $this->input->post('firstname_user'),
             'lastname_user' => $this->input->post('lastname_user'),
             'ID_card' => $this->input->post('ID_card'),
             'phone_user' => $this->input->post('phone_user'),
             'birthday_user' => $this->input->post('birthday_user'),
             'password' => $hashed_password, // ใช้ hash แทนรหัสผ่านที่ป้อนเข้ามา
         );
 
         $query = $this->db->insert('bl_user', $data);
        // print_r($data);
         if ($query) {
             echo "ok";
         } else {
             echo "no";
         }
        
    } else {

        echo "ID_card-exists";
        // return; // ไม่ทำการ insert ถ้า ID_card ซ้ำ

    }

    



}
    // public function insert_data_register()
    // {
    //     $data = array(
    //         'ID_user' => 
    //         'title_name_user' => $this->input->post('title_name_user'),
    //         'firstname_user' => $this->input->post('firstname_user'),
    //         'lastname_user' => $this->input->post('lastname_user'),
    //         'ID_card' => $this->input->post('ID_card'),
    //         'phone_user' => $this->input->post('phone_user'),
    //         'birthday_user' => $this->input->post('birthday_user'),
    //         'password' => $this->input->post('password'),
    //     );
    //     // print_r($data);
    //     $query = $this->db->insert('bl_user',$data);
    //     if($query){
    //         echo "ok";
    //     }
    //     else {
    //         echo "no";
    //     }
    // }


    public function getDistricts() //จังหวัด
    {
        $utt = 41 ;
        $this->db->select('amphure_id, name_th');
        $this->db->where('province_id',$utt);
        $query = $this->db->get('thai_amphures');
        return $query->result_array();
    }

    public function getSubdistricts($amphure_id) //เลือกอำเภอ แสดงตำบล
    {
        $this->db->select('tambons_id, name_th');
        $this->db->where('amphure_id', $amphure_id);
        $query = $this->db->get('thai_tambons');
        return $query->result_array();
    }
    public function getSubdistricts2() //เอา id ตำบลมา แล้วให้แสดง รหัสไปสณีร์
    {
        // echo ($tambons_id);
        $tambons_id = $this->input->post('tambons_id');
        $this->db->select('tambons_id, zip_code');
        $this->db->where('tambons_id', $tambons_id);
        $query = $this->db->get('thai_tambons');
        return $query->result();
    }
    // public function add_data() //เพิ่มข้อมูล
    // {
    //         $config['upload_path'] = './img/';
    //         $config['allowed_types'] = 'jpeg|jpg|png';
    //         $config['max_size'] = '200';
    //         $config['max_width'] = '3000';
    //         $config['max_height'] = '3000';
    // }



    private function generateUniqueFileName($originalName) {
        $dateName = date('Ymd');
        $randomString = bin2hex(random_bytes(5)); // สร้างสตริงสุ่ม
        $type = strrchr($originalName, ".");
        $newname = $randomString . "_" . $dateName . $type;
        return $newname;
    }

    
    public function form_enter_information_cpn() //เพิ่มข้อมูล บริษัท
    {

        $upload_configs = array(
            'ID_card_Copy' => array(
                'upload_path' => './images/',
                'allowed_types' => 'jpeg|jpg|png',
                'maintain_ratio' => TRUE, 
                'width' => 1080,           
                'height' => 1080,        
                // 'max_size' => '5120',
                // 'max_width' => '5000',
                // 'max_height' => '5000'
            ),
            'house_regis_Copy' => array(
                'upload_path' => './images/',
                'allowed_types' => 'jpeg|jpg|png',
                'maintain_ratio' => TRUE,  
                'width' => 1080,           
                'height' => 1080,           
                // 'max_size' => '5120',
                // 'max_width' => '5000',
                // 'max_height' => '5000'
            ),
            'company_certificate' => array(
                'upload_path' => './images/',
                'allowed_types' => 'jpeg|jpg|png',
                'maintain_ratio' => TRUE,  
                'width' => 1080,           
                'height' => 1080,          
                // 'max_size' => '5120',
                // 'max_width' => '5000',
                // 'max_height' => '5000'
            ),
            'Other_documents_Copy' => array(
                'upload_path' => './images/',
                'allowed_types' => 'jpeg|jpg|png',
                'maintain_ratio' => TRUE,  
                'width' => 1080,           
                'height' => 1080,          
                // 'max_size' => '5120',
                // 'max_width' => '5000',
                // 'max_height' => '5000'
            )
        );

        $img_copy_id_card_cpn ='';
        $img_copy_house_registration_cpn ='';
        $img_company_certificate ='';
        $img_Other_documents_copy_cpn ='-';
        
        foreach ($upload_configs as $file_key => $config) {
            if (isset($_FILES[$file_key]['name'])) {
                date_default_timezone_set('Asia/Bangkok');
                $date_name = date('Ymd');
                $min = 1000000;
                $max = 9999999;
                $numrand = mt_rand($min, $max);
                $type = strrchr($_FILES[$file_key]["name"], ".");
                $newname = $numrand . "_" . $date_name . $type;
        
                $config['file_name'] = $newname;
        
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
        
                if ($this->upload->do_upload($file_key)) {
                    // อัปโหลดไฟล์สำเร็จ
                    // echo "อัปโหลดไฟล์ {$file_key} สำเร็จ<br>";

                    // รับข้อมูลของไฟล์ที่อัปโหลด
                    $upload_data = $this->upload->data();
                    

                     // ตรวจสอบชื่อไฟล์ที่อัปโหลดเพื่อกำหนดตัวแปรที่ถูกต้อง
                    if ($file_key == 'ID_card_Copy') {
                        $img_copy_id_card_cpn = $upload_data['file_name'];
                    } elseif ($file_key == 'house_regis_Copy') {
                        $img_copy_house_registration_cpn = $upload_data['file_name'];
                    } elseif ($file_key == 'company_certificate') {
                        $img_company_certificate = $upload_data['file_name'];
                    } elseif ($file_key == 'Other_documents_Copy') {
                        $img_Other_documents_copy_cpn = $upload_data['file_name'];
                    }
        
                    // เรียกใช้งานไลบรารี image_lib
                    $this->load->library('image_lib');
        
                    // กำหนดค่าการ resize
                    $resize_config['image_library'] = 'gd2';
                    $resize_config['source_image'] = $upload_data['full_path'];
                    $resize_config['maintain_ratio'] = TRUE;
                    $resize_config['width'] = $config['width'];
                    $resize_config['height'] = $config['height'];
        
                    $this->image_lib->initialize($resize_config);

                    // ทำการ resize รูป
                    if (!$this->image_lib->resize()) {
                        echo $this->image_lib->display_errors();
                    }
        
                    // ล้างคอนฟิกหลังจากใช้งาน
                    $this->image_lib->clear();
        
                } 
                else {
                    // มีข้อผิดพลาดในการอัปโหลด
                    echo "รูปภาพ {$file_key} อัพโหลดไม่สำเร็จ<br>";
                }
            }
        }



        // ดึง ID_user ล่าสุดจากฐานข้อมูล
        $last_id_query = $this->db->select('company_id')->order_by('company_id', 'DESC')->limit(1)->get('bl_submit_company');
        $last_id_result = $last_id_query->row();

        // ตรวจสอบว่ามี ID_user ล่าสุดหรือไม่
        if ($last_id_result) {
            // มี ID_user ล่าสุด
            $last_id = $last_id_result->company_id;
            $last_number = (int) substr($last_id, 3); // แปลงสตริงเป็นตัวเลขและตัด "CPN" ทิ้ง
            $new_number = $last_number + 1;

            // สร้าง ID_user ใหม่
            $new_company_id = 'CPN' . str_pad($new_number, 7, '0', STR_PAD_LEFT);
        } else {
            // ไม่มี ID_user ล่าสุด
            $new_company_id = 'CPN0000001';
        }


       

        if(isset($_FILES['files']['name']) && is_array($_FILES['files']['name'])) {
            date_default_timezone_set('Asia/Bangkok');
            // $date_name1 = date('Ymd');
            
            $min1 = 1000000;
            $max1 = 9999999;

            $img_company_certificate = array();
            
            // $data_copy_land = array();
            
            foreach ($_FILES['files']['name'] as $key => $filename) {
               
                $numrand1 = mt_rand($min1, $max1);
                // $config_sum['file_name'] = '';
                // $numrand1 = uniqid();

                  // ตรวจสอบค่าของ $numrand1
        // echo "Numrand1: " . $numrand1 . "<br>";
                $type1 = strrchr($filename, ".");
                // $newname1 = $numrand1 . "_" . $date_name1 . $type1;
                $newname1 = $numrand1 . "_" . date('Ymd') . $type1;

                 // ตรวจสอบค่าของ $newname1
        // echo "Newname1: " . $newname1 . "<br>";
        
                // กำหนดชื่อไฟล์ให้กับ upload
                // $_FILES['userfile']['file_name'] = $newname1;
                $_FILES['userfile']['name'] = $newname1;
                $_FILES['userfile']['type'] = $_FILES['files']['type'][$key];
                $_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$key];
                $_FILES['userfile']['error'] = $_FILES['files']['error'][$key];
                $_FILES['userfile']['size'] = $_FILES['files']['size'][$key];
                
        
                $config_sum['upload_path'] = './images/';
                $config_sum['allowed_types'] = 'jpeg|jpg|png'; // ปรับเป็นประเภทของไฟล์ที่ต้องการ
                $config_sum['file_name'] = $newname1;
                
        
                $this->load->library('upload', $config_sum);
                $this->upload->initialize($config_sum);
        
                if ($this->upload->do_upload('userfile')) {

                    // $upload_data2 = $this->upload->data();
                    // echo $upload_data2['file_name'];

                    // $upload_data = $this->upload->data();  // เก็บข้อมูลการอัปโหลด

                    // // นำข้อมูลที่ต้องการจาก $upload_data
                    // $file_name_uploaded = $upload_data['file_name'];


                    // อัปโหลดไฟล์สำเร็จ
                    echo "อัปโหลดไฟล์ {$newname1} สำเร็จ<br>";
        
                    // เรียกใช้งานไลบรารี image_lib
                    $this->load->library('image_lib');
        
                    // กำหนดค่าการ resize
                    $resize_config1['image_library'] = 'gd2';
                    $resize_config1['source_image'] = $this->upload->data('full_path');

                    $resize_config1['maintain_ratio'] = TRUE; //ปรับรูป
                    $resize_config1['width'] = 1080;
                    $resize_config1['height'] = 1080;
        
                    $this->image_lib->initialize($resize_config1);


                    // สร้างข้อมูลที่จะบันทึก
                    $img_company_certificate[] = array(
                        'img_company_certificate' => $newname1,
                        'company_name' => $this->input->post('company_name'),
                        'company_id' => $new_company_id,                                       
                    );
                    // $data_copy_land[] = array(
                    //     'copy_land_deed_company' => $newname1,
                    //     'company_id' => $new_company_id,                                       
                    // );
                    
                    if (!$this->image_lib->resize()) {
                        echo $this->image_lib->display_errors();
                    }
        
                    // ล้างคอนฟิกหลังจากใช้งาน
                    $this->image_lib->clear();
                   
                } else {
                    echo "มีข้อผิดพลาดในการอัปโหลด รูป {$filename}: " . $this->upload->display_errors() . "<br>";
                }
            }

            // print_r($data_copy_land);
            
        } else {
            echo "No file uploaded.";
        }

        $email = $this->input->post('email');
        if($email == ""){
            $email = "มารับด้วยตัวเอง";
        }



    // ตรวจสอบว่ามีการอัปโหลดภาพหรือไม่
    if (!empty($_FILES['frontImage_1']['name']) && !empty($_FILES['backImage_1']['name'])) {
        // รับข้อมูลที่ส่งมาและเก็บไว้ในอาร์เรย์สำหรับการเพิ่มข้อมูล
        $insertDataArray = array();
        for ($i = 1; isset($_POST['landNumber_' . $i]); $i++) {
            $landNumber = $_POST['landNumber_' . $i];
            $landPlot = $_POST['landPlot_' . $i];
            $surveyNumber = $_POST['surveyNumber_' . $i];

            // สร้างชื่อไฟล์ใหม่โดยตรวจสอบความซ้ำซ้อน
            $newNameFront = $this->generateUniqueFileName($_FILES['frontImage_' . $i]["name"], 'front_', './images/');
            $newNameBack = $this->generateUniqueFileName($_FILES['backImage_' . $i]["name"], 'back_', './images/');

            // Front Image
            $img_landdeed_config_front = array(
                'image_library' => 'gd2',
                'source_image' => $_FILES['frontImage_' . $i]["tmp_name"],
                'maintain_ratio' => TRUE,
                'width' => 1080,
                'height' => 1080,
                'new_image' => './images/' . $newNameFront
            );

            $this->load->library('image_lib');
            $this->image_lib->initialize($img_landdeed_config_front);
            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
            }

            // Back Image
            $img_landdeed_config_back = array(
                'image_library' => 'gd2',
                'source_image' => $_FILES['backImage_' . $i]["tmp_name"],
                'maintain_ratio' => TRUE,
                'width' => 1080,
                'height' => 1080,
                'new_image' => './images/' . $newNameBack
            );

            $this->image_lib->initialize($img_landdeed_config_back);
            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
            }

            // เพิ่มข้อมูลลงในอาร์เรย์สำหรับการเพิ่มข้อมูล
            $insertDataArray[] = array(
                'land_title_number_cpn' => $landNumber,
                'land_number_cpn' => $landPlot,
                'survey_page_number_cpn' => $surveyNumber,
                'img_front_land_deed_cpn' => $newNameFront,
                'img_back_land_deed_cpn' => $newNameBack,
                'company_id' => $new_company_id,
            );
        }

        // บันทึกข้อมูลลงในฐานข้อมูล
        // $bl_sum_copy_land_deed_company = 'bl_sum_copy_land_deed_company';
        // foreach ($insertDataArray as $insertData) {
        //     $this->db->insert($bl_sum_copy_land_deed_company, $insertData);
        // }
    } else {
        // ถ้าไม่มีการอัปโหลดภาพ
        // ตรวจสอบหรือประมวลผลต่อไปตามที่คุณต้องการ
    }


    // ส่วนที่เหลือของการบันทึกข้อมูลที่ไม่ได้เป็นรูปภาพ








        $tableName = 'bl_submit_company';
        $data = array(
            'company_id' => $new_company_id,
            // 'company_name' => $this->input->post('company_name'),
            'title_name_company' => $this->input->post('title_name'),
            'firstname_company' => $this->input->post('firstname'),
            'lastname_company' => $this->input->post('lastname'),
            'ID_card_company' => $this->input->post('ID_card'),
            'phone_user_company' => $this->input->post('phone_user'),
            // 'land_title_number_company' => $this->input->post('land_title_number'),
            // 'land_number_company' => $this->input->post('land_number'),
            // 'survey_page_number_company' => $this->input->post('survey_page_number'),
            'amphure_company' => $this->input->post('amphure'),
            'tambonsid_company' => $this->input->post('tambonsid'),
            'provinces_company' => $this->input->post('provinces'),
            'zip_code_company' => $this->input->post('zip_code'),
            'utilization_company' => $this->input->post('utilization'),
            'img_copy_id_card_cpn' => $img_copy_id_card_cpn,
            'img_copy_house_registration_cpn' => $img_copy_house_registration_cpn,
            // 'img_company_certificate' => $img_company_certificate,
            'img_Other_documents_copy_cpn' => $img_Other_documents_copy_cpn,
            'email_cpn' => $email
        );

        // insert ข้อมูล
        $this->db->insert($tableName, $data);

        // $this->db->insert('bl_submit_company', $data)
        $bl_company_certificate = 'bl_company_certificate';
        // $tableName_deed_company = 'bl_sum_copy_land_deed_company';
        // insert ข้อมูล ใบรับรองบริษัท
        foreach ($img_company_certificate as $data_land ) { 
            $this->db->insert($bl_company_certificate, $data_land );
        }

         // บันทึกข้อมูลลงในฐานข้อมูล
         $bl_sum_copy_land_deed_company = 'bl_sum_copy_land_deed_company';
         foreach ($insertDataArray as $insertData) {
             $this->db->insert($bl_sum_copy_land_deed_company, $insertData);
         }


        // เพิ่มข้อมูลลงในฐานข้อมูล สำเนาโฉนดที่ดิน
        // $bl_sum_copy_land_deed_company = 'bl_sum_copy_land_deed_company';
        // $this->db->insert_batch($bl_sum_copy_land_deed_company, $insertDataArray);
        // เพิ่มข้อมูลลงในฐานข้อมูล
        // $bl_sum_copy_land_deed_company = 'bl_sum_copy_land_deed_company';
        // foreach ($insertDataArray as $insertDataArray) {
        //     $this->db->insert($bl_sum_copy_land_deed_company, $insertDataArray);
        // }

        print_r($data);
        print_r($img_company_certificate);

        
		// if(isset($_FILES['files']['name']) && is_array($_FILES['files']['name'])) {
        //     date_default_timezone_set('Asia/Bangkok');
        //     $date_name1 = date('Ymd');
        //     $min1 = 1000000;
        //     $max1 = 9999999;
            
        //     foreach ($_FILES['files']['name'] as $key => $filename) {
        //         $numrand1 = mt_rand($min1, $max1);
        //         $type1 = strrchr($filename, ".");
        //         $newname1 = $numrand1 . "_" . $date_name1 . $type1;
        
        //         // กำหนดชื่อไฟล์ให้กับ upload
        //         $_FILES['userfile']['name'] = $newname1;
        //         $_FILES['userfile']['type'] = $_FILES['files']['type'][$key];
        //         $_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$key];
        //         $_FILES['userfile']['error'] = $_FILES['files']['error'][$key];
        //         $_FILES['userfile']['size'] = $_FILES['files']['size'][$key];
                
        
        //         $config_sum['upload_path'] = './images/';
        //         $config_sum['allowed_types'] = 'gif|jpg|png'; // ปรับเป็นประเภทของไฟล์ที่ต้องการ
        //         $config_sum['file_name'] = $newname1;
        
        //         $this->load->library('upload', $config_sum);
        
        //         if ($this->upload->do_upload('userfile')) {
        //             // อัปโหลดไฟล์สำเร็จ
        //             echo "อัปโหลดไฟล์ {$filename} สำเร็จ<br>";
        
        //             // เรียกใช้งานไลบรารี image_lib
        //             $this->load->library('image_lib');
        
        //             // กำหนดค่าการ resize
        //             $resize_config1['image_library'] = 'gd2';
        //             $resize_config1['source_image'] = $this->upload->data('full_path');
        //             $resize_config1['maintain_ratio'] = TRUE;
        //             $resize_config1['width'] = 600;
        //             $resize_config1['height'] = 600;
        
        //             $this->image_lib->initialize($resize_config1);
                    
        
        //             if (!$this->image_lib->resize()) {
        //                 echo $this->image_lib->display_errors();
        //             }
        
        //             // ล้างคอนฟิกหลังจากใช้งาน
        //             $this->image_lib->clear();
        //         } else {
        //             echo "มีข้อผิดพลาดในการอัปโหลด รูป {$filename}: " . $this->upload->display_errors() . "<br>";
        //         }
        //     }
        // } else {
        //     echo "No file uploaded.";
        // }
        
        
        
        


        // echo "ชื่อรูปภาพ ID_card_Copy: {$img_copy_id_card_cpn}";
        // echo "ชื่อรูปภาพ img_copy_house_registration_cpn: {$img_copy_house_registration_cpn}";
        // echo "ชื่อรูปภาพ img_company_certificate: {$img_company_certificate}";
        // echo "ชื่อรูปภาพ img_Other_documents_copy_cpn: {$img_Other_documents_copy_cpn}";




        // $existing_user_query = $this->db->get_where('bl_submit_company');
        // $existing_user_count = $existing_user_query->num_rows();

        // if ($existing_user_count == 0) {

           
            
    
            // $query = $this->db->insert('bl_submit_company', $data);
            // print_r($data);
            // if ($query) {
            //     echo "ok";
            // } else {
            //     echo "no";
            // }
            
        // }









        // $tableName = 'bl_submit_company';
        // $data = array(
        //     'company_id' => $this->input->post('company_id'),
        //     'company_name' => $this->input->post('company_name'),
        //     'title_name_company' => $this->input->post('title_name'),
        //     'firstname_company' => $this->input->post('firstname'),
        //     'lastname_company' => $this->input->post('lastname'),
        //     'ID_card_company' => $this->input->post('ID_card'),
        //     'phone_user_company' => $this->input->post('phone_user'),
        //     'land_title_number_company' => $this->input->post('land_title_number'),
        //     'land_number_company' => $this->input->post('land_number'),
        //     'survey_page_number_company' => $this->input->post('survey_page_number'),
        //     'amphure_company' => $this->input->post('amphure'),
        //     'tambonsid_company' => $this->input->post('tambonsid'),
        //     'provinces_company' => $this->input->post('provinces'),
        //     'zip_code_company' => $this->input->post('zip_code'),
        //     'utilization_company' => $this->input->post('utilization'),
        //     'img_copy_id_card_cpn' => $img_copy_id_card_cpn,
        //     'img_copy_house_registration_cpn' => $img_copy_house_registration_cpn,
        //     'img_company_certificate' => $img_company_certificate,
        //     'img_Other_documents_copy_cpn' => $img_Other_documents_copy_cpn
        // );
        // print_r($data);
        // print_r($data_copy_land);

            // $this->db->insert($tableName, $data);

        // if(isset ($_FILES['ID_card_Copy']['name'])){   

        //     $config['upload_path'] = './image/';
        //     $config['allowed_types'] = 'jpeg|jpg|png';
        //     $config['max_size'] = '5120';
        //     $config['max_width'] = '5000';
        //     $config['max_height'] = '5000';

        //     $min = 1000000; // ตัวเลขที่น้อยที่สุดที่มี 7 หลัก
        //     $max = 9999999; // ตัวเลขที่มากที่สุดที่มี 7 หลัก

        //     date_default_timezone_set('Asia/Bangkok');  //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
        //     $date_name = date('Ymd');  //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
        //     $numrand = mt_rand($min, $max);  //ตัวแปรสุ่มตัวเลข
        //     $type = strrchr($_FILES["ID_card_Copy"]["name"],".");
        //     $newname = $numrand."_".$date_name.$type;
        //     echo $config['ID_card_Copy'] = $newname;

        //     $config['file_name'] = $newname;  // เพิ่มค่า file_name ใน $config array เปลี่ยนชื่อ

        //     $this->load->library('upload', $config);  // โหลดไลบรารีอัปโหลดและกำหนดค่า
        //     $this->upload->initialize($config);  // กำหนดค่าการอัปโหลด
        
        //     // ทำการอัปโหลดไฟล์
        //     if ($this->upload->do_upload('ID_card_Copy')) {
        //         echo 'อัปโหลดไฟล์สำเร็จ';
        //     } else {
        //         // แสดงข้อผิดพลาดที่เกิดขึ้น
        //         echo 'รูปภาพของคุณมีขนาดใหญ่';
        //         // echo $this->upload->display_errors();
        //     }
        // }    
    }


   


    // private function generateUniqueFileName($originalName) {
    //     date_default_timezone_set('Asia/Bangkok');
    //     $date_name_cer = date('Ymd');
    //     $min_cer = 1000000;
    //     $max_cer = 9999999;
    //     $numrand_cer = mt_rand($min_cer, $max_cer);
    //     $type_cer = strrchr($originalName, ".");
    //     $newname_cer = $numrand_cer . "_" . $date_name_cer . $type_cer;
    //     return $newname_cer;
    // }



    // private function generateUniqueFileName($originalName, $prefix = '') {
    //     $uniqueId = uniqid();
    //     $type = strrchr($originalName, ".");
    //     $newName = $prefix . $uniqueId . '_' . $originalName;
    //     return $newName;
    // }
    




    public function test() //
    {
        
        if(isset($_FILES['files']['name']) && is_array($_FILES['files']['name'])) {
            date_default_timezone_set('Asia/Bangkok');
            // $date_name1 = date('Ymd');
            
            $min1 = 1000000;
            $max1 = 9999999;

            $data_copy_land = array();
            
            foreach ($_FILES['files']['name'] as $key => $filename) {
               
                $numrand1 = mt_rand($min1, $max1);
                $config_sum['file_name'] = '';
                // $numrand1 = uniqid();

                  // ตรวจสอบค่าของ $numrand1
        // echo "Numrand1: " . $numrand1 . "<br>";
                $type1 = strrchr($filename, ".");
                // $newname1 = $numrand1 . "_" . $date_name1 . $type1;
                $newname1 = $numrand1 . "_" . date('Ymd') . $type1;

                 // ตรวจสอบค่าของ $newname1
        // echo "Newname1: " . $newname1 . "<br>";
        
                // กำหนดชื่อไฟล์ให้กับ upload
                // $_FILES['userfile']['file_name'] = $newname1;
                $_FILES['userfile']['name'] = $newname1;
                $_FILES['userfile']['type'] = $_FILES['files']['type'][$key];
                $_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$key];
                $_FILES['userfile']['error'] = $_FILES['files']['error'][$key];
                $_FILES['userfile']['size'] = $_FILES['files']['size'][$key];
                
        
                $config_sum['upload_path'] = './images/';
                $config_sum['allowed_types'] = 'jpeg|jpg|png'; // ปรับเป็นประเภทของไฟล์ที่ต้องการ
                $config_sum['file_name'] = $newname1;
                
        
                $this->load->library('upload', $config_sum);
        
                if ($this->upload->do_upload('userfile')) {

                    $upload_data2 = $this->upload->data();
                    echo $upload_data2['file_name'];


                    // อัปโหลดไฟล์สำเร็จ
                    echo "อัปโหลดไฟล์ {$newname1} สำเร็จ<br>";
        
                    // เรียกใช้งานไลบรารี image_lib
                    $this->load->library('image_lib');
        
                    // กำหนดค่าการ resize
                    $resize_config1['image_library'] = 'gd2';
                    $resize_config1['source_image'] = $this->upload->data('full_path');

                    // $resize_config1['new_image'] = './images/' . $newname1; // เปลี่ยนชื่อไฟล์
                    $resize_config1['maintain_ratio'] = TRUE; //ปรับรูป
                    $resize_config1['width'] = 600;
                    $resize_config1['height'] = 600;
        
                    $this->image_lib->initialize($resize_config1);


                    // สร้างข้อมูลที่จะบันทึก
                    $data_copy_land[] = array(
                        'copy_land_deed_company' => $newname1,
                        // 'company_id' => $new_company_id,
                        
                    
                        // และฟิลด์อื่น ๆ ตามที่คุณต้องการ
                    );
                    
        
                    if (!$this->image_lib->resize()) {
                        echo $this->image_lib->display_errors();
                    }
        
                    // ล้างคอนฟิกหลังจากใช้งาน
                    $this->image_lib->clear();
                   
                } else {
                    echo "มีข้อผิดพลาดในการอัปโหลด รูป {$filename}: " . $this->upload->display_errors() . "<br>";
                }
            }
            // $this->form_enter_information($data_copy_land);
            // $this->member_model->config_sum_img($data_copy_land);

            print_r($data_copy_land);
            
        } else {
            echo "No file uploaded.";
        }
    }



    public function form_enter_information_person() {
        // ตรวจสอบว่ามีข้อมูลที่ส่งมาหรือไม่
        $upload_configs = array(
            'ID_card_Copy' => array(
                'upload_path' => './images/',
                'allowed_types' => 'jpeg|jpg|png',
                'maintain_ratio' => TRUE, 
                'width' => 600,           
                'height' => 600,         
                // 'max_size' => '5120',
                // 'max_width' => '5000',
                // 'max_height' => '5000'
            ),
            'house_regis_Copy' => array(
                'upload_path' => './images/',
                'allowed_types' => 'jpeg|jpg|png',
                'maintain_ratio' => TRUE,  
                'width' => 600,           
                'height' => 600,          
                // 'max_size' => '5120',
                // 'max_width' => '5000',
                // 'max_height' => '5000'
            ),
            'Other_documents_Copy' => array(
                'upload_path' => './images/',
                'allowed_types' => 'jpeg|jpg|png',
                'maintain_ratio' => TRUE,  
                'width' => 600,           
                'height' => 600,          
                // 'max_size' => '5120',
                // 'max_width' => '5000',
                // 'max_height' => '5000'
            )
        );

        $img_copy_id_card ='';
        $img_copy_house_registration ='';
        $img_Other_documents_copy ='-';
        
        foreach ($upload_configs as $file_key => $config) {
            if (isset($_FILES[$file_key]['name'])) {
                date_default_timezone_set('Asia/Bangkok');
                $date_name = date('Ymd');
                $min = 1000000;
                $max = 9999999;
                $numrand = mt_rand($min, $max);
                $type = strrchr($_FILES[$file_key]["name"], ".");
                $newname = $numrand . "_" . $date_name . $type;
        
                $config['file_name'] = $newname;
        
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
        
                if ($this->upload->do_upload($file_key)) {
                    // อัปโหลดไฟล์สำเร็จ
                    // echo "อัปโหลดไฟล์ {$file_key} สำเร็จ<br>";

                    // รับข้อมูลของไฟล์ที่อัปโหลด
                    $upload_data = $this->upload->data();

                     // ตรวจสอบชื่อไฟล์ที่อัปโหลดเพื่อกำหนดตัวแปรที่ถูกต้อง
                    if ($file_key == 'ID_card_Copy') {
                        $img_copy_id_card = $upload_data['file_name'];
                    } elseif ($file_key == 'house_regis_Copy') {
                        $img_copy_house_registration = $upload_data['file_name'];
                    } elseif ($file_key == 'Other_documents_Copy') {
                        $img_Other_documents_copy = $upload_data['file_name'];
                    }
        
                    // เรียกใช้งานไลบรารี image_lib
                    $this->load->library('image_lib');
        
                    // กำหนดค่าการ resize
                    $resize_config['image_library'] = 'gd2';
                    $resize_config['source_image'] = $upload_data['full_path'];
                    $resize_config['maintain_ratio'] = TRUE;
                    $resize_config['width'] = $config['width'];
                    $resize_config['height'] = $config['height'];
        
                    $this->image_lib->initialize($resize_config);

                    // ทำการ resize รูป
                    if (!$this->image_lib->resize()) {
                        echo $this->image_lib->display_errors();
                    }
        
                    // ล้างคอนฟิกหลังจากใช้งาน
                    $this->image_lib->clear();
        
                } 
                // else {
                //     // มีข้อผิดพลาดในการอัปโหลด
                //     // echo "รูปภาพ {$file_key} ของคุณมีขนาดใหญ่หรือเกิดข้อผิดพลาด<br>";
                // }
            }
        }



        // ดึง ID_user ล่าสุดจากฐานข้อมูล
        $last_id_query = $this->db->select('person_id')->order_by('person_id', 'DESC')->limit(1)->get('bl_submit_person');
        $last_id_result = $last_id_query->row();

        // ตรวจสอบว่ามี ID_user ล่าสุดหรือไม่
        if ($last_id_result) {
            // มี ID_user ล่าสุด
            $last_id = $last_id_result->person_id;
            $last_number = (int) substr($last_id, 3); // แปลงสตริงเป็นตัวเลขและตัด "CPN" ทิ้ง
            $new_number = $last_number + 1;

            // สร้าง ID_user ใหม่
            $new_person_id = 'PER' . str_pad($new_number, 7, '0', STR_PAD_LEFT);
        } else {
            // ไม่มี ID_user ล่าสุด
            $new_person_id = 'PER0000001';
        }


       

        // if(isset($_FILES['files']['name']) && is_array($_FILES['files']['name'])) {
        //     date_default_timezone_set('Asia/Bangkok');
        //     // $date_name1 = date('Ymd');
            
        //     $min1 = 1000000;
        //     $max1 = 9999999;

        //     $data_copy_land = array();
            
        //     foreach ($_FILES['files']['name'] as $key => $filename) {
               
        //         $numrand1 = mt_rand($min1, $max1);
        //         // $config_sum['file_name'] = '';
        //         // $numrand1 = uniqid();

        //           // ตรวจสอบค่าของ $numrand1
        // // echo "Numrand1: " . $numrand1 . "<br>";
        //         $type1 = strrchr($filename, ".");
        //         // $newname1 = $numrand1 . "_" . $date_name1 . $type1;
        //         $newname1 = $numrand1 . "_" . date('Ymd') . $type1;

        //          // ตรวจสอบค่าของ $newname1
        // // echo "Newname1: " . $newname1 . "<br>";
        
        //         // กำหนดชื่อไฟล์ให้กับ upload
        //         // $_FILES['userfile']['file_name'] = $newname1;
        //         $_FILES['userfile']['name'] = $newname1;
        //         $_FILES['userfile']['type'] = $_FILES['files']['type'][$key];
        //         $_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$key];
        //         $_FILES['userfile']['error'] = $_FILES['files']['error'][$key];
        //         $_FILES['userfile']['size'] = $_FILES['files']['size'][$key];
                
        
        //         $config_sum['upload_path'] = './images/';
        //         $config_sum['allowed_types'] = 'jpeg|jpg|png'; // ปรับเป็นประเภทของไฟล์ที่ต้องการ
        //         $config_sum['file_name'] = $newname1;
                
        
        //         $this->load->library('upload', $config_sum);
        //         $this->upload->initialize($config_sum);
        
        //         if ($this->upload->do_upload('userfile')) {

        //             // $upload_data2 = $this->upload->data();
        //             // echo $upload_data2['file_name'];

        //             // $upload_data = $this->upload->data();  // เก็บข้อมูลการอัปโหลด

        //             // // นำข้อมูลที่ต้องการจาก $upload_data
        //             // $file_name_uploaded = $upload_data['file_name'];


        //             // อัปโหลดไฟล์สำเร็จ
        //             echo "อัปโหลดไฟล์ {$newname1} สำเร็จ<br>";
        
        //             // เรียกใช้งานไลบรารี image_lib
        //             $this->load->library('image_lib');
        
        //             // กำหนดค่าการ resize
        //             $resize_config1['image_library'] = 'gd2';
        //             $resize_config1['source_image'] = $this->upload->data('full_path');

        //             // $resize_config1['new_image'] = './images/' . $newname1; // เปลี่ยนชื่อไฟล์
        //             $resize_config1['maintain_ratio'] = TRUE; //ปรับรูป
        //             $resize_config1['width'] = 600;
        //             $resize_config1['height'] = 600;
        
        //             $this->image_lib->initialize($resize_config1);


        //             // สร้างข้อมูลที่จะบันทึก
        //             $data_copy_land[] = array(
        //                 'copy_land_deed' => $newname1,
        //                 'person_id' => $new_person_id,                                       
        //             );
                    
        //             if (!$this->image_lib->resize()) {
        //                 echo $this->image_lib->display_errors();
        //             }
        
        //             // ล้างคอนฟิกหลังจากใช้งาน
        //             $this->image_lib->clear();
                   
        //         } else {
        //             echo "มีข้อผิดพลาดในการอัปโหลด รูป {$filename}: " . $this->upload->display_errors() . "<br>";
        //         }
        //     }

        //     // print_r($data_copy_land);
            
        // } else {
        //     echo "No file uploaded.";
        // }







//ทำต่อออออออออออออออออออออออออออออออออออออห


        
    // ตรวจสอบว่ามีการอัปโหลดภาพหรือไม่
    if (!empty($_FILES['frontImage_1']['name']) && !empty($_FILES['backImage_1']['name'])) {
        // รับข้อมูลที่ส่งมาและเก็บไว้ในอาร์เรย์สำหรับการเพิ่มข้อมูล
        $insertDataArray = array();
        for ($i = 1; isset($_POST['landNumber_' . $i]); $i++) {
            $landNumber = $_POST['landNumber_' . $i];
            $landPlot = $_POST['landPlot_' . $i];
            $surveyNumber = $_POST['surveyNumber_' . $i];

            // สร้างชื่อไฟล์ใหม่โดยตรวจสอบความซ้ำซ้อน
            $newNameFront = $this->generateUniqueFileName($_FILES['frontImage_' . $i]["name"], 'front_', './images/');
            $newNameBack = $this->generateUniqueFileName($_FILES['backImage_' . $i]["name"], 'back_', './images/');

            // Front Image
            $img_landdeed_config_front = array(
                'image_library' => 'gd2',
                'source_image' => $_FILES['frontImage_' . $i]["tmp_name"],
                'maintain_ratio' => TRUE,
                'width' => 600,
                'height' => 600,
                'new_image' => './images/' . $newNameFront
            );

            $this->load->library('image_lib');
            $this->image_lib->initialize($img_landdeed_config_front);
            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
            }

            // Back Image
            $img_landdeed_config_back = array(
                'image_library' => 'gd2',
                'source_image' => $_FILES['backImage_' . $i]["tmp_name"],
                'maintain_ratio' => TRUE,
                'width' => 600,
                'height' => 600,
                'new_image' => './images/' . $newNameBack
            );

            $this->image_lib->initialize($img_landdeed_config_back);
            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
            }

            // เพิ่มข้อมูลลงในอาร์เรย์สำหรับการเพิ่มข้อมูล
            $insertDataArray[] = array(
                'land_title_number_ps' => $landNumber,
                'land_number_ps' => $landPlot,
                'survey_page_number_ps' => $surveyNumber,
                'img_front_land_deed_ps' => $newNameFront,
                'img_back_land_deed_ps' => $newNameBack,
                'person_id' => $new_person_id,
            );
        }

        // บันทึกข้อมูลลงในฐานข้อมูล
        // $bl_sum_copy_land_deed_company = 'bl_sum_copy_land_deed_company';
        // foreach ($insertDataArray as $insertData) {
        //     $this->db->insert($bl_sum_copy_land_deed_company, $insertData);
        // }
    } else {
        // ถ้าไม่มีการอัปโหลดภาพ
        // ตรวจสอบหรือประมวลผลต่อไปตามที่คุณต้องการ
    }












        $email = $this->input->post('email');
        if($email == ""){
            $email = "มารับด้วยตัวเอง";
        }


        $tableName = 'bl_submit_person';
        $data = array(
            'person_id' => $new_person_id,
            'title_name' => $this->input->post('title_name'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'ID_card' => $this->input->post('ID_card'),
            'phone_user' => $this->input->post('phone_user'),
            // 'land_title_number' => $this->input->post('land_title_number'),
            // 'land_number' => $this->input->post('land_number'),
            // 'survey_page_number' => $this->input->post('survey_page_number'),
            'amphure' => $this->input->post('amphure'),
            'tambonsid' => $this->input->post('tambonsid'),
            'provinces' => $this->input->post('provinces'),
            'zip_code' => $this->input->post('zip_code'),
            'utilization' => $this->input->post('utilization'),
            'img_copy_id_card' => $img_copy_id_card,
            'img_copy_house_registration' => $img_copy_house_registration,
            'img_Other_documents_copy' => $img_Other_documents_copy,
            'email' => $email
        );

        // insert ข้อมูล
        $this->db->insert($tableName, $data);

        

        // $this->db->insert('bl_submit_company', $data)
        $tableName_deed = 'bl_sum_copy_land_deed';
        // insert ข้อมูล
        foreach ($insertDataArray as $data_land ) {
            $this->db->insert($tableName_deed, $data_land );
        }

        


        print_r($data);
        print_r($insertDataArray);
    
    }
    
    


    // public function do_upload() {
    //     if (isset($_FILES['ID_card_Copy']) && !empty($_FILES['ID_card_Copy']['name'])) {
    //         $upload_path = 'images/';
    //         $config['encrypt_name'] = TRUE;
    //         $config['upload_path'] = $upload_path;
    //         $config['allowed_types'] = 'jpg|png|jpeg';
    //         $this->load->library('upload', $config);
            
    //         if ($this->upload->do_upload('ID_card_Copy')) {
    //           //Image Resizing
    //           $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
    //           $config['new_image'] = 'images/';
    //           $config['maintain_ratio'] = TRUE;
    //           $config['width'] = 300;
    //           $config['height'] = 300;
    //           $this->load->library('image_lib', $config);
    //             if ( ! $this->image_lib->resize()) {
    //                 $this->session->set_flashdata('message', $this->image_lib->display_errors('',''));
    //                 // return redirect('upload_success');
    //             }
    //             $data =  array('upload_data' => $this->doload->data());
    //             $this->load->view('doload_success', $data);
              
    //         }
    //         else {
    //             $error =  array('error' => $this->doload->display_errors());
    //             $this->load->view('message', array('error'=>' '));

    //         }
    //     }
   
    // }









    

    //-------------------------------ระบบภายใน-----------------------------------------
    

    public function table_submit_company() // ตารางรับเรื่อง company หลัก
    {
        $this->db->select('*');
        $this->db->from('bl_submit_company');

        $query = $this->db->get();
        return $query->result();
    }

    public function inside_receive_tb_ps() //
    {
        $this->db->select('*');
        $this->db->from('bl_submit_person');

        $query = $this->db->get();
        return $query->result();
    }

    public function get_wait_receive($cpn_id) // ตารางรับเรื่่อง company หลัก
    {
        $this->db->select('*,
        bl_sum_copy_land_deed_company.company_id,
        bl_sum_copy_land_deed_company.copy_land_deed_company,
        thai_amphures.amphure_id,
        thai_amphures.name_th,
        thai_tambons.tambons_id ,
        thai_tambons.name_th as name_tambons');
        $this->db->from('bl_submit_company');
        $this->db->where('bl_submit_company.company_id',$cpn_id);
        $this->db->join('bl_sum_copy_land_deed_company','bl_sum_copy_land_deed_company.company_id = bl_submit_company.company_id', 'left');
        $this->db->join('thai_amphures','thai_amphures.amphure_id = bl_submit_company.amphure_company', 'left');
        $this->db->join('thai_tambons','thai_tambons.tambons_id = bl_submit_company.tambonsid_company', 'left');

        $query = $this->db->get();
        return $query->result();
        
    }
    // public function get_wait_receive($cpn_id) // ตารางรับเรื่่อง company หลัก
    // {
    //     $this->db->select('*,
    //     bl_sum_copy_land_deed_company.company_id,
    //     bl_sum_copy_land_deed_company.copy_land_deed_company');
    //     $this->db->from('bl_submit_company');
    //     $this->db->where('bl_submit_company.company_id',$cpn_id);
    //     $this->db->join('bl_sum_copy_land_deed_company', 'bl_sum_copy_land_deed_company.company_id = bl_submit_company.company_id', 'left');

    //     $query = $this->db->get();
    //     return $query->result();
        
    // }


    public function get_wait_receive_ps($ps_id) //
    {
        $this->db->select('*,
        bl_sum_copy_land_deed.person_id,
        bl_sum_copy_land_deed.copy_land_deed');
        $this->db->from('bl_submit_person');
        $this->db->where('bl_submit_person.company_id',$ps_id);
        $this->db->join('bl_sum_copy_land_deed', 'bl_sum_copy_land_deed.company_id = bl_submit_person.person_id', 'left');
  
        $query = $this->db->get();
        return $query->result();
    }

//     public function get_wait_receive($cpn_id) // ตารางรับเรื่อง company หลัก
// {
//     $this->db->select('bl_submit_company.*, bl_sum_copy_land_deed_company.copy_land_deed_company');
//     $this->db->from('bl_submit_company');
//     $this->db->where('bl_submit_company.company_id', $cpn_id);
//     $this->db->join('bl_sum_copy_land_deed_company', 'bl_sum_copy_land_deed_company.company_id = bl_submit_company.company_id', 'left');

//     $query = $this->db->get();
//     return $query->result();
// }
    



}
?>