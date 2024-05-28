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
    position: absolute;
    top: 15px;
    right: 35px;
    color: #fff;
    font-size: 50px;
    font-weight: bold;
    transition: 0.3s;
   
}

.close:hover,
.close:focus {
    color: #bbb;
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





.left-aligned {
    /* display: inline-block;
    text-align: left; */
    /* width: 100%; */
    font-size: 17px; /* เพิ่มขนาดฟอน */
    font-weight: bold; /* เพิ่มความหนาของตัวอักษร */
    margin: 5px; /* ขยับให้ห่างจาก input อีกนิด */

}
.text_title {

    font-size: 19px; /* เพิ่มขนาดฟอน */
    font-weight: bold; /* เพิ่มความหนาของตัวอักษร */
}

/* .card-img-top{

} */
.card-img-top:hover,
.card-img-top:focus {
  
    /* cursor: pointer; */
    cursor: zoom-in;
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
            <!-- <div class="col-sm-4">  
                <label for="name_cpn" class="left-aligned" >ชื่อบริษัท</label>
                <input type="text" id="name_cpn" class="form-control" value="<?php echo $rs_1->company_name; ?>" >
            </div> -->
            <div class="col-sm-5">  
                <label for="name_lname" class="left-aligned" >ชื่อ-นามสกุล</label>
                <input type="text" id="name_lname" class="form-control" value="<?php echo $rs_1->title_name  . '' . $rs_1->firstname  . '&nbsp;' . $rs_1->lastname; ?>">
            </div>
            <div class="col-sm-3">  
                <label for="ID_card_" class="left-aligned" >หมายเลขบัตรประชาชน</label>
                <input type="text" id="ID_card_" class="form-control" value="<?php echo $rs_1->ID_cardy; ?>" >
            </div>
            <div class="col-sm-3">  
                <label for="land_title_number" class="left-aligned" >หมายเลขโฉนดที่ดิน</label>
                <input type="text" id="land_title_number" class="form-control" value="<?php echo $rs_1->land_title_number; ?>" >
            </div>

            <div class="col-sm-3">  
                <label for="land_number" class="left-aligned" >หมายเลขที่ดิน</label>
                <input type="text" id="land_number" class="form-control" aria-describedby="" value="<?php echo $rs_1->land_number; ?>">
            </div>
            <div class="col-sm-3">  
                <label for="survey_page_number" class="left-aligned" >หมายเลขหน้าสำรวจ</label>
                <input type="text" id="survey_page_number" class="form-control" aria-describedby="" value="<?php echo $rs_1->survey_page_number; ?>">
            </div>
            <div class="col-sm-3">  
                <!-- <label for="land_number" class="left-aligned" >ตำบล</label>
                <input type="text" id="land_number" class="form-control" aria-describedby="" value="<?php echo $rs_1->tambonsid; ?>"> -->
            </div>

            <div class="col-sm-3">  
                <label for="tambonsid" class="left-aligned" >ตำบล</label>
                <input type="text" id="tambonsid" class="form-control" aria-describedby="" value="<?php echo $rs_1->tambonsid; ?>">
            </div>
            <div class="col-sm-3">  
                <label for="amphure" class="left-aligned" >อำเภอ</label>
                <input type="text" id="amphure" class="form-control" aria-describedby="" value="<?php echo $rs_1->amphure; ?>">
            </div>
            <div class="col-sm-3">  
                <label for="provinces" class="left-aligned" >จังหวัด</label>
                <input type="text" id="provinces" class="form-control" aria-describedby="" value="<?php echo $rs_1->provinces; ?>">
            </div>
            <div class="col-sm-3">  
                <label for="zip_code" class="left-aligned" >รหัสไปรษณีย์</label>
                <input type="text" id="zip_code" class="form-control" aria-describedby="" value="<?php echo $rs_1->zip_code; ?>" >
            </div>

            <div class="col-sm-3">  
                <label for="utilization" class="left-aligned" >การใช้ประโยชน์</label>
                <input type="text" id="utilization" class="form-control" aria-describedby="" value="<?php echo $rs_1->utilization; ?>">
            </div>
            <div class="col-sm-3">  
                <label for="hone_user" class="left-aligned" >หมายเลขโทรศัพท์</label>
                <input type="text" id="hone_user" class="form-control" aria-describedby="" value="<?php echo $rs_1->phone_user; ?>" >
            </div>
            <div class="col-sm-3">  
                <label for="date_submit" class="left-aligned" >วันที่ยื่นเอกสาร</label>
                <input type="text" id="date_submit" class="form-control" aria-describedby="" value="<?php echo DateThai($rs_1->date_submit); ?>" >
            </div>

            <div class="col-sm-3">  
                <label for="date_submit" class="left-aligned" >ผู็ยื่นจะรับเอกสารทาง</label>
                <input type="text" id="date_submit" class="form-control" aria-describedby="" value="<?php echo $rs_1->	email_cpn; ?>" >
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

/* Range slider */
#zoomRange {
    width: 100%;
    margin-top: 30px;
}

</style>


    <div class="col-12 bocxx">
    <div class="row">
        <span class="card-title text_title"> สำเนาโฉนดที่ดิน </span>
        <br /><br />
        <!-- <h5 class="card-title "></h5> -->

    <?php foreach ($get_wait_receive as $rs_1): ?>

    <?php
    // แยกชื่อไฟล์รูปภาพออกเป็นอาร์เรย์
    $images = explode(',', $rs_1->copy_land_deed);
    ?>

        <?php foreach ($images as $image): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo base_url();?>images/<?php echo $image; ?>" onclick="openModal()" style="" class="card-img-top clickable-image-new" alt="...">
                    <!-- <div class="card-body">
                        <h5 class="card-title">สำเนาโฉนดที่ดิน</h5>
                        <a href="#" class="btn btn-primary">ปริ้น</a>
                    </div> -->
                </div>
            </div>
        <?php endforeach; ?>

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
        <img src="<?php echo base_url();?>images/<?php echo $rs_1->img_copy_id_card_cpn; ?>" onclick="openModal()" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text_title">สำเนาบัตรประชาชน</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
            the
            card's content.</p> -->
            <!-- <a href="#" class="btn btn-primary">ปริ้น</a> -->
        </div>
        </div>
    </div>
    <div class="col-md-4">
        <!-- <h5 class="card-title fw-semibold mb-4">Card</h5> -->
        <div class="card">
        <img src="<?php echo base_url();?>images/<?php echo $rs_1->img_copy_house_registration_cpn; ?>" onclick="openModal()" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="text_title">	สำเนาทะเบียนบ้าน</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
            the
            card's content.</p> -->
            <!-- <a href="#" class="btn btn-primary">ปริ้น</a> -->
        </div>
        </div>
    </div>



    <?php if ($rs_1->img_Other_documents_copy_cpn !== "-"): ?>
        <div class="col-md-4">
            <!-- <h5 class="card-title fw-semibold mb-4">Card</h5> -->
            <div class="card">
                <img src="<?php echo base_url();?>images/<?php echo $rs_1->img_Other_documents_copy_cpn; ?>" onclick="openModal()" class="card-img-top clickable-image-new" alt="...">
                <div class="card-body">
                    <h5 class="text_title">เอกสารอื่นๆ</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <!-- <a href="#" class="btn btn-primary">ปริ้น</a> -->
                </div>
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
    <input type="range" id="zoomRange" min="20" max="200" value="100" oninput="zoomImage()">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="img01" >
</div>

<script>
// เปิดกล่อง modal
function openModal() {
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




</script>


<script>
    // console.log(<?php echo json_encode($get_wait_receive); ?>);


    
</script>