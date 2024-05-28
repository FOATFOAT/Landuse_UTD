<?php
	function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		// $strHour= date("H",strtotime($strDate));
		// $strMinute= date("i",strtotime($strDate));
		// $strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
		// return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}

	// $strDate = "2008-08-14 13:42:44";
	// echo "ThaiCreate.Com Time now : ".DateThai($strDate);
?>
   <!-- icon -->
    <script src="https://unpkg.com/feather-icons"></script>

<style>


/* กล่อง modal สำหรับรูปภาพ */
.image-modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 50px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.9);
    /* cursor: pointer; */
}

/* รูปในกล่อง modal */
.modal-content_img {
    margin: auto;
    display: block;
    width: 80%;
    /* max-width: 700px; */
}

/* ปุ่มปิดกล่อง modal */
.close {
    /* position: absolute; */
    position: fixed;
    top: 10px;
    right: 35px;
    color: #dc3545;
    font-size: 50px;
    font-weight: bold;
    transition: 0.3s;
    z-index: 2; /* ให้ต้องอยู่ด้านบนของหน้าเว็บ */
}

.close:hover,
.close:focus {
    color: #73040f;
    text-decoration: none;
    cursor: pointer;
    /* cursor: zoom-in; */
}


/* Media queries เพื่อปรับขนาดของกล่อง modal เมื่อหน้าจอมีขนาดเล็กขึ้น */
@media only screen and (max-width: 600px) {
    
    .modal-content_img {
        width: 90%;
        max-width: 400px;
    }

    .close {
        top: 10px;
        right: 20px;
        font-size: 30px;
    }
}



/* Range slider */
#zoomRange {
    position: fixed;
    width: 50%;
    top: 20px; /* ตำแหน่งที่ต้องการให้อยู่ตรงกลางข้างบน */
    left: 50%; /* ทำให้อยู่ตรงกลางแนวนอน */
    transform: translateX(-50%); /* ย้ายตำแหน่ง input range กลับไปที่ศูนย์กลาง */
    z-index: 2; /* ให้ต้องอยู่ด้านบนของหน้าเว็บ */
    cursor: pointer;
}







.left-aligned {
    /* display: inline-block;
    text-align: left; */
    /* width: 100%; */
    font-size: 17px; /* เพิ่มขนาดฟอน */
    font-weight: bold; /* เพิ่มความหนาของตัวอักษร */
    margin: 5px; /* ขยับให้ห่างจาก input อีกนิด */

}
.text_title {

    font-size: 20px; /* เพิ่มขนาดฟอน */
    font-weight: bold; /* เพิ่มความหนาของตัวอักษร */
}

/* .card-img-top{

} */
.card-img-top:hover,
.card-img-top:focus {
  
    /* cursor: pointer; */
    cursor: zoom-in;
}




    /* ปรับสีพื้นหลังและขอบของ input */
    input[type="text"] {
        background-color: #f2f2f2; /* สีเทาอ่อน */
        border: 1px solid #ccc; /* เส้นขอบสีเทา */
        border-radius: 5px; /* ทำให้มีขอบโค้ง */
        padding: 8px; /* ระยะห่างภายใน input */
        width: 100%; /* กว้างเต็มขอบหน้าจอ */
    }

    /* ปรับสีของข้อความภายใน input */
    input[type="text"]::placeholder {
        color: #999; /* สีเทาอ่อน */
    }

    /* เมื่อโฟกัส */
    input[type="text"]:focus {
        border-color: #6a0dad; /* เส้นขอบสีม่วง */
        box-shadow: 0 0 5px rgba(106, 13, 173, 0.5); /* เงา */
    }

</style>

<div class="container ">
  <div class="row">


  <?php $rs_1 = $get_wait_receive[0]; ?>
<?php
$i=1;
// foreach ($get_wait_receive as $rs_1) :
    

?>


   <fieldset disabled>

        <div class="row " style="margin-bottom: 10px; ">
            <div class="col-sm-4">  
                <label for="name_cpn" class="left-aligned" >ชื่อบริษัท</label>
                <input type="text" id="name_cpn" class="form-control" value="<?php echo $rs_1->company_name; ?>" >
            </div>
            <div class="col-sm-5">  
                <label for="name_lname" class="left-aligned" >ชื่อ-นามสกุล</label>
                <input type="text" id="name_lname" class="form-control" value="<?php echo $rs_1->title_name_company  . '' . $rs_1->firstname_company  . '&nbsp;' . $rs_1->lastname_company; ?>">
            </div>
            <div class="col-sm-3">  
                <label for="ID_card_" class="left-aligned" >หมายเลขบัตรประชาชน</label>
                <input type="text" id="ID_card_" class="form-control" value="<?php echo $rs_1->ID_card_company; ?>" >
            </div>
        
         

            <div class="col-sm-3">  
                <label for="tambonsid" class="left-aligned" >ตำบล</label>
                <input type="text" id="tambonsid" class="form-control" aria-describedby="" value="<?php echo $rs_1->name_tambons; ?>">
            </div>
            <div class="col-sm-3">  
                <label for="amphure" class="left-aligned" >อำเภอ</label>
                <input type="text" id="amphure" class="form-control" aria-describedby="" value="<?php echo $rs_1->name_th; ?>">
            </div>
            <div class="col-sm-3">  
                <label for="provinces" class="left-aligned" >จังหวัด</label>
                <input type="text" id="provinces" class="form-control" aria-describedby="" value="<?php echo $rs_1->provinces_company; ?>">
            </div>
            <div class="col-sm-3">  
                <label for="zip_code" class="left-aligned" >รหัสไปรษณีย์</label>
                <input type="text" id="zip_code" class="form-control" aria-describedby="" value="<?php echo $rs_1->zip_code_company; ?>" >
            </div>

            <div class="col-sm-5">  
                <label for="utilization" class="left-aligned" >การใช้ประโยชน์</label>
                <input type="text" id="utilization" class="form-control" aria-describedby="" value="<?php echo $rs_1->utilization_company; ?>">
            </div>
            <div class="col-sm-2">  
                <label for="hone_user" class="left-aligned" >หมายเลขโทรศัพท์</label>
                <input type="text" id="hone_user" class="form-control" aria-describedby="" value="<?php echo $rs_1->phone_user_company; ?>" >
            </div>
            <div class="col-sm-2">  
                <label for="date_submit_company" class="left-aligned" >วันที่ยื่นเอกสาร</label>
                <input type="text" id="date_submit_company" class="form-control" aria-describedby="" value="<?php echo DateThai($rs_1->date_submit_company); ?>" >
            </div>

            <div class="col-sm-3">  
                <label for="email_cpn" class="left-aligned" >ผู็ยื่นจะรับเอกสารทาง</label>
                <input type="text" id="email_cpn" class="form-control" aria-describedby="" value="<?php echo $rs_1->email_cpn; ?>" >
            </div>

        </div>
        
    </fieldset>

    <hr>


<style>

.bocxx {
  /* width: 200px;
  height: 200px; */
  /* background-color: #f0f0f0; */
  /* border: 2px solid #6c757d;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
  /* padding: 20px;
  margin: 20px; */
  display: flex;
  justify-content: center;
  /* justify-content: space-around; */
  /* align-items: center; */
  align-items: flex-start;
  text-align: center;
  
}







/* ปรับสีของ card-header ให้เป็นสีม่วงอ่อน */
.card-header {
    background-color: var(--bs-primary-border-subtle);
    color: var(--bs-black);
    font-size: 17px;
    font-weight: bold;
}

/* ปรับสีของ card-body ให้เป็นสีขาว */
.card-body {
    background-color: #ffffff; /* สีขาว */
}

/* ปรับสีของ card-title ให้เป็นสีม่วงอ่อน */
.card-title {
    color: #6610f2; /* สีม่วงเข้ม */
    font-size: 22px; /* เพิ่มขนาดฟอน */
    font-weight: bold; /* เพิ่มความหนาของตัวอักษร */
}



.text_card-header{
    font-size: 19px;
    color: white;
    font-weight: bold;
    background-color: #6f42c1; /* สีนำเงินเข้ม */
}

</style>

<!-- 
    <div class="col-12 bocxx">
    <div class="row">
        <span class="card-title text_title"> สำเนาโฉนดที่ดิน </span>
        <br /><br />


    <?php foreach ($get_wait_receive as $rs_1): ?>

    <?php
    
    $images = explode(',', $rs_1->img_front_land_deed_cpn);
    ?>

        <?php foreach ($images as $image): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo base_url();?>images/<?php echo $image; ?>" onclick="openModal()" style="" class="card-img-top clickable-image-new" alt="...">
              
                </div>
            </div>
        <?php endforeach; ?>

    <?php endforeach; ?>

    </div>
    </div> -->





    <div class="col-12 bocxx">
    <div class="row">
        <span class="card-title">สำเนาโฉนดที่ดิน
        <br /><br />

        <?php foreach ($get_wait_receive as $key => $rs_1): ?>
            <?php
            // แยกชื่อไฟล์รูปภาพด้านหน้าออกเป็นอาร์เรย์
            $images_front = explode(',', $rs_1->img_front_land_deed_cpn);
            // แยกชื่อไฟล์รูปภาพด้านหลังออกเป็นอาร์เรย์
            $images_back = explode(',', $rs_1->img_back_land_deed_cpn);
            ?>
            
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header text_card-header">
                        ชุดที่ <?php echo ($key + 1); ?>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="left-aligned" for="land_title_number_<?php echo $key; ?>">หมายเลขโฉนดที่ดิน:</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="land_title_number_<?php echo $key; ?>" value="<?php echo htmlspecialchars($rs_1->land_title_number_cpn); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="left-aligned" for="land_number_<?php echo $key; ?>">หมายเลขที่ดิน:</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="land_number_<?php echo $key; ?>" value="<?php echo htmlspecialchars($rs_1->land_number_cpn); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="left-aligned" for="survey_page_number_<?php echo $key; ?>">หมายเลขหน้าสำรวจ:</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="survey_page_number_<?php echo $key; ?>" value="<?php echo htmlspecialchars($rs_1->survey_page_number_cpn); ?>" aria-describedby="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($images_front as $index => $image_front): ?>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header ">
                                        ด้านหน้า
                                    </div>
                                    <img src="<?php echo base_url();?>images/<?php echo $image_front; ?>" onclick="openModal(event)" class="card-img-top clickable-image-new" alt="Front of Land Deed">
                                </div>
                            </div>
                            <?php if (isset($images_back[$index])): ?>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header ">
                                            ด้านหลัง
                                        </div>
                                        <img src="<?php echo base_url();?>images/<?php echo $images_back[$index]; ?>" onclick="openModal(event)" class="card-img-top clickable-image-new" alt="Back of Land Deed">
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>











<style>

hr {
  border: 0;
  height: 3px;
  background-color: rgba(0, 0, 0, 0.75); /* สีของเส้นแบ่งโดยไม่จาง */
  /* background-color: #4B0082;  */
}

</style>



<hr>




    <div class="col-md-4">
        <!-- <h5 class="card-title fw-semibold mb-4">Card</h5> -->
        <div class="card">
            <div class="card-header text_card-header">
                <span class="text_title">สำเนาบัตรประชาชน</span>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p> -->
                    <!-- <a href="#" class="btn btn-primary">ปริ้น</a> -->
                </div>
                <img src="<?php echo base_url();?>images/<?php echo $rs_1->img_copy_id_card_cpn; ?>" onclick="openModal(event)" class="card-img-top" alt="...">
        </div>
    </div>
    <div class="col-md-4">
        <!-- <h5 class="card-title fw-semibold mb-4">Card</h5> -->
        <div class="card">
            <div class="card-header text_card-header">
                <span class="text_title">สำเนาทะเบียนบ้าน</span>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p> -->
                    <!-- <a href="#" class="btn btn-primary">ปริ้น</a> -->
                </div>
                <img src="<?php echo base_url();?>images/<?php echo $rs_1->img_copy_house_registration_cpn; ?>" onclick="openModal(event)" class="card-img-top" alt="...">
        </div>
    </div>

  
    <?php if ($rs_1->img_Other_documents_copy_cpn !== "-"): ?>
        <div class="col-md-4">
            <!-- <h5 class="card-title fw-semibold mb-4">Card</h5> -->
            <div class="card">
                <div class="card-header text_card-header">
                    <span class="text_title">แผนที่แสดงต่ำแหน่งพื้นที่ที่ดิน</span>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <!-- <a href="#" class="btn btn-primary">ปริ้น</a> -->
                </div>
                <img src="<?php echo base_url();?>images/<?php echo $rs_1->img_Other_documents_copy_cpn; ?>" onclick="openModal(event)" class="card-img-top clickable-image-new" alt="...">
            </div>
        </div>
    <?php endif; ?>





    

    <!-- <?php //var_dump($rs_1->copy_land_deed_company); ?>

    <?php //echo 'Type: ' . gettype($rs_1->copy_land_deed_company); ?> -->

    <?php
    // แยกชื่อไฟล์รูปภาพออกเป็นอาร์เรย์
    // $images = explode(',', $rs_1->copy_land_deed_company);
    ?>









  </div>
</div>

<!-- 
    <div class="modal-body">

</div> -->


<!-- กล่อง modal -->
<div id="imageModal" class="image-modal">
    <span>&nbsp; </span>
    <!-- <span><i data-feather="minus"  class="icon_minus"></i></span> -->
    <input type="range" id="zoomRange" min="20" max="200" value="100" oninput="zoomImage()">
    <!-- <span><i data-feather="plus"  class="icon_plus"></i></span> -->
    <span class="close " onclick="closeModal()">&times;</span>
    <img class="modal-content" id="img01" >
</div>

<script>
// เปิดกล่อง modal
function openModal(event) {
    document.getElementById('imageModal').style.display = "block";
    var imgSrc = event.target.src;
    document.getElementById("img01").src = imgSrc;
}
// ปิดกล่อง modal
function closeModal() {
    document.getElementById('imageModal').style.display = "none";
}

// เปลี่ยนรูปร่างของเมาส์เป็นแว่นขยายเมื่อเหลือเวลา
function changeCursor() {
    document.querySelector('.card-img-top').style.cursor = 'zoom-in';
}

// เมื่อเมาส์ว่างออกจากรูป
function defaultCursor() {
    document.querySelector('.card-img-top').style.cursor = 'default';
}


// เพิ่มฟังก์ชันซูมรูปภาพ
function zoomImage() {
    var img = document.getElementById("img01");
    var zoomValue = document.getElementById("zoomRange").value;

    img.style.width = zoomValue + "%";
    img.style.height = "auto"; // ความสูงจะปรับตามอัตราส่วนของความกว้าง
}

window.onscroll = function() {
    // ตรวจสอบว่ากล่อง modal ยังคงปรากฏหรือไม่
    var modal = document.getElementById('imageModal');
    if (modal.style.display === "block") {
        // หากกล่อง modal ยังปรากฏอยู่ ให้ปรับค่า input range ให้ลง
        var scrollValue = window.scrollY || window.pageYOffset;
        var zoomRange = document.getElementById('zoomRange');
        zoomRange.style.top = (50 - scrollValue) + "px"; // ปรับตำแหน่งของ input range ลงตามการเลื่อนหน้าเว็บ
    }
};



</script>


<script>
    // console.log(<?php echo json_encode($get_wait_receive); ?>);


    
</script>
<script>
    feather.replace();
</script>