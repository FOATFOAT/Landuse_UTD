<style>


.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.bg-dark {
    background-color: rgba(0,0,0,.25)!important;
}

.font-sg{
  font-size: 18px;
}
.font-sm{
  font-size: 23px;
}

input[type="radio"]:disabled + label {
    color: #000000; /* สีข้อความเมื่อ radio disabled */
}
input[type="radio"]:disabled:checked + label {
    color: #000000; /* สีข้อความเมื่อ radio disabled และ checked */
}

.error_text {
  border: 1px solid #FF3333; /* บนเเดง ล่างเขียว สีกรอบตรวจสอบว่ามีข้อมูลไหม */
}
.success_text {
  border: 1px solid #00CC00;
}
</style>


<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="<?php echo base_url();?>assets/img/1238.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              <img src="<?php echo base_url();?>assets/img/1238.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">ลงทะเบียน</h3>
                <form action="">
                <div class="row">
                  <div class="col-md-6 mb-2">
                    <div class="form-outline">
                    <div class="form-label font-sg" for="form3Example1m">คำนำหน้าชื่อ</div>
                        <select class="form-select form-control font-sg " name="title_name" id="title_name" style="cursor:pointer" oninput="checkData('title_name')" aria-label="Default select example">
                           <option selected  value="">เลือก</option>
                           <option value="นาย">นาย</option>
                           <option value="นาง">นาง</option>
                           <option value="นางสาว">นางสาว</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6 mb-2" >
                    <!-- <div class="col-md-3"> -->
                    <div class="mb-0 me-4 font-sg">เพศ: </div>
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2 font-sg">
                        <!-- <h6 class="mb-0 me-4">เพศ: </h6> -->
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="sex" id="male" disabled
                            value="option1"  />
                          <label class="form-check-label" for="male">ชาย</label>
                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="sex" id="female" disabled
                            value="option2" />
                          <label class="form-check-label" for="female">หญิง</label>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label font-sg"  for="firstname">ชื่อจริง</label>
                      <input type="text" id="firstname" class="form-control " oninput="checkData('firstname')" placeholder="กรุณากรอก" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label font-sg" for="lastname" >นามสกุล</label>
                      <input type="text" id="lastname" class="form-control" oninput="checkData('lastname')" placeholder="กรุณากรอก" />
                    </div>
                  </div>
                </div>
                

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label font-sg" for="ID_card">หมายเลขบัตรประชาชน</label>
                      <input type="text" id="ID_card" class="form-control" placeholder="กรอกเลขบัตรประชาชน 13 หลัก" oninput="restrictToNumeric(); checkIdCard();"  maxlength="13"/>
                    </div>
                    <p id="result" style="color:#FF3333"></p>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label font-sg" for="phone_user">หมายเลขโทรศัพท์</label>
                      <input type="text" id="phone_user" class="form-control"  maxlength="10" oninput="checkData('phone_user')" placeholder="กรุณากรอก 10 หลัก" />
                    </div>
                  </div>
                </div>
  <?php
        $d = '';
        $selectedMonth = '';
      //  $selectedYear = ''; // กำหนดค่าเริ่มต้นให้กับ $selectedYear
  ?>
  
                <div class="form-outline mb-4">
                    <div class="form-label font-sg"  >วัน/เดือน/ปีเกิด</div>
                  <!-- <input type="text" id="birthday" class="form-control form-control" /> -->
                  <div class="row">

                    <div class="col-3">
                    <select class="form-control font-sg" name="day_birthday" id="day_birthday" oninput="checkData('day_birthday')" style="cursor:pointer">
                      <option value="">&nbsp;วัน</option>
                      <?php
                      foreach (range(1, 31) as $resl) {
                      ?>
                      <option value="<?= $resl ?>" <?= ($resl == $d) ? "selected" : "" ?>>&nbsp; <?= $resl ?> </option>
                      <?php
                        }
                      ?>
                  </select>
                    </div>

                    <div class="col-5">
                      <select class="form-control font-sg" name="month_birthday" id="month_birthday" oninput="checkData('month_birthday')" style="cursor:pointer">
                        <option value=''>&nbsp;เดือน</option>
                        <?php
                        // วนลูปเพื่อสร้าง <option> สำหรับแต่ละเดือน
                        $months = array(
                            '1' => 'มกราคม',
                            '2' => 'กุมภาพันธ์',
                            '3' => 'มีนาคม',
                            '4' => 'เมษายน',
                            '5' => 'พฤษภาคม',
                            '6' => 'มิถุนายน',
                            '7' => 'กรกฎาคม',
                            '8' => 'สิงหาคม',
                            '9' => 'กันยายน',
                            '10' => 'ตุลาคม',
                            '11' => 'พฤศจิกายน',
                            '12' => 'ธันวาคม'
                        );

                        foreach ($months as $monthNum => $monthName) {
                            ?>
                            <option value="<?= $monthNum ?>" <?= ($monthNum == $selectedMonth) ? "selected" : "" ?>>&nbsp;<?= $monthName ?> </option>
                            <?php
                        }
                        ?>
                      </select>
                    </div>
               
                    <div class="col-4">
                    <select class="form-control font-sg" id="Year18" style="cursor:pointer" oninput="checkData('Year18')" onchange="filterUsers()">
                      <option value="">&nbsp;ปี</option>
                      <?php
                      // วนลูปเพื่อเลือกปีมากกว่า 18 ปี
                          $currentYear = date('Y') + 543 - 18;
                          for ($year = $currentYear; $year >= $currentYear - 100; $year--) {
                              echo "<option value=\"$year\">&nbsp;$year</option>";
                          }
                      ?>
                    </select>
                    </div>
                  </div>
                </div>

                  <script>
                    var select = document.getElementById('Year18');
                    function filterUsers() {
                        var Year18 = select.value;
                        var currentYear = new Date().getFullYear();
                        var age = currentYear - (Year18 - 543);
                    }
                  </script>
              


                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline ">
                      <label class="form-label font-sg" for="password">รหัสผ่าน</label>
                      <input type="password" id="password" class="form-control" oninput="checkPasswordMatch()" name="password" autocomplete="on" placeholder="กรอกรหัสผ่าน" />
                      <p id="passwordMessage" class="message" style="color:#FF3333"></p>
                      <!-- <i data-feather="eye" id="toggleIcon" onclick="togglePassword()"></i> -->
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label font-sg" for="confirmPassword">ยืนยันรหัสผ่าน</label>
                      <input type="password" id="confirmPassword" class="form-control" oninput="checkPasswordMatch()" name="password" autocomplete="on" placeholder="กรอกรหัสผ่าน"/>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">

                  
                <!-- <input type="password" id="passwordInput" name="password">
        <i data-feather="eye" id="toggleIcon" onclick="togglePassword()"></i> -->
            <!-- <i class="far fa-eye" id="toggleIcon"></i> -->
        
                    <script>
                      
                      function togglePassword() {
                        var passwordInput = document.getElementById('passwordInput');
                        var toggleIcon = document.getElementById('toggleIcon');

                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';
                            toggleIcon.setAttribute('data-feather', 'eye-off');
                        } else {
                            passwordInput.type = 'password';
                            toggleIcon.setAttribute('data-feather', 'eye');
                        }

                        feather.replace(); // เรียกใช้ feather icons เพื่อปรับให้ไอคอนเปลี่ยนแสดงตามการเปลี่ยนแปลง
                      }
                    </script>
                </div>

                </style>
                <!-- <form id="myForm">
        <label for="dataInput45">ข้อมูล:</label>
        <input class="form-control" type="text" id="dataInput45" name="dataInput" oninput="checkData('dataInput45')" >
    </form> -->

                <!-- <div class="form-outline mb-4">
                  <input type="text" id="form3Example97d" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97d">Email ID</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Course</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div> -->

                <div class="d-flex justify-content-end pt-3">
                  <!-- <button type="button" class="btn btn btn-outline-warning btn-lg font-sm" >กลับ</button> -->
                  <button type="button" class="btn btn-outline-success btn-lg ms-2 font-sm" id="btn_submit">ยืนยัน</button>
                </div>

              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script>


$(document).ready(function() {
    $('.js-example-basic-single').select2({
      // selectOnClose: true
    });
});

//เวลาเลือกคำนำหน้าให้เลือกเพศเอง
$('#title_name').change(function() {
  var namePrefix = $(this).val();
  // alert(namePrefix);
  // ตั้งค่า checked ตามคำนำหน้าที่เลือก
  if (namePrefix === 'นาย') {
      $('#male').prop('checked', true);
      $('#female').prop('checked', false);
  } else if (namePrefix === 'นาง' || namePrefix === 'นางสาว') {
      $('#male').prop('checked', false);
      $('#female').prop('checked', true);
  } else {
      // คำนำหน้าไม่ระบุ ล้างการตั้งค่า checked
      $('#male').prop('checked', false);
      $('#female').prop('checked', false);
  }
    
});

//เซ็คข้อมูลว่ามีไหม input
function checkData(inputId) {
  if(inputId == "phone_user"){ //รับข้อมูล id แต่ละ input
    // oninput="this.value = this.value.replace(/[^0-9]/g, '');"
    var inputElement = document.getElementById(inputId);
    var inputData = inputElement.value;
    
    inputElement.value = inputData.replace(/[^0-9]/g, ''); // ตรวจสอบและกำหนดค่าให้เป็นตัวเลขเท่านั้น

    if (isValidData2(inputData)) {
        inputElement.classList.remove('error_text'); // เปลียนสีตาม sty
        inputElement.classList.add('success_text');
    } else {
        inputElement.classList.remove('success_text');
        inputElement.classList.add('error_text');
    } 
  } else if(inputId == "ID_card") { //ตรงนี้ไม่ได้่ใช้-----------------------เพื่อไว้--------------
    var inputElement = document.getElementById(inputId);
    var inputData = inputElement.value;
    
    inputElement.value = inputData.replace(/[^0-9]/g, ''); // ตรวจสอบและกำหนดค่าให้เป็นตัวเลขเท่านั้น

    if (isValidData3(inputData)) {
        inputElement.classList.remove('error_text');
        inputElement.classList.add('success_text');
    } else {
        inputElement.classList.remove('success_text');
        inputElement.classList.add('error_text');
    } 
  } else {
    var inputData = document.getElementById(inputId).value;
    var inputElement = document.getElementById(inputId);

  // ตรวจสอบว่าข้อมูลถูกต้องหรือไม่
  if (isValidData(inputData)) {
      inputElement.classList.remove('error_text');
      inputElement.classList.add('success_text');
  } else {
      inputElement.classList.remove('success_text');
      inputElement.classList.add('error_text');
  }

  }
  
}

function isValidData(data) {
    // ตรวจสอบข้อมูลตามเงื่อนไข
    return data.length != "";
}
function isValidData2(data) {
    // ตรวจสอบข้อมูลตามเงื่อนไข
    return data.length >= 10;
}
function isValidData3(data) {
    // ตรวจสอบข้อมูลตามเงื่อนไข
    return data.length >= 13;
}

ID_card_db = "";

function restrictToNumeric() { //เอาเลขเลขบัตรประชาชนมาคำนวนย
  var inputElement = document.getElementById('ID_card');
  inputElement.value = inputElement.value.replace(/[^0-9]/g, '');
}

function checkIdCard() {
  var idCardInput = document.getElementById('ID_card');
  var resultDiv = document.getElementById('result');
  
  // ตรวจสอบว่า input มีค่าหรือไม่
  if (idCardInput.value.trim() !== '') {
      // ดำเนินการตรวจสอบรูปแบบที่ต้องการที่นี่
      
      var isValid = validateIdCardFormat(idCardInput.value);

      // แสดงผลลัพธ์
      if (isValid) {
          resultDiv.innerHTML = '';
          idCardInput.className = 'form-control success_text';
          ID_card_db = $('#ID_card').val();
          // alert(ID_card);
      } else {
          resultDiv.innerHTML = 'รูปแบบไม่ถูกต้อง';
          idCardInput.className = 'form-control error_text';
          ID_card_db = "";
          // alert(ID_card);
      }
  } else {
      resultDiv.innerHTML = ''; // ลบผลลัพธ์ที่แสดง
      idCardInput.className = 'form-control'; // ลบ class ของ input
  }
}

function validateIdCardFormat(idCard) {
            
    var num_id = idCard;
    var group_1 = num_id.substring(0, 1); // ดึงเอาเลขเลขตัวที่ 1 ของบัตรประชาชนออกมา
    var group_5 = num_id.substring(12, 24);  // ดึงเอาเลขเลขตัวที่ 13 ของบัตรประชาชนออกมา

    var num1 = group_1;
    var num2 = num_id.substring(1, 2); // ดึงเอาเลขเลขตัวที่ 2 ของบัตรประชาชนออกมา
    var num3 = num_id.substring(2, 3); // ดึงเอาเลขเลขตัวที่ 3 ของบัตรประชาชนออกมา
    var num4 = num_id.substring(3, 4); // ดึงเอาเลขเลขตัวที่ 4 ของบัตรประชาชนออกมา
    var num5 = num_id.substring(4, 5); // ดึงเอาเลขเลขตัวที่ 5 ของบัตรประชาชนออกมา
    var num6 = num_id.substring(5, 6); // ดึงเอาเลขเลขตัวที่ 6 ของบัตรประชาชนออกมา
    var num7 = num_id.substring(6, 7); // ดึงเอาเลขเลขตัวที่ 7 ของบัตรประชาชนออกมา
    var num8 = num_id.substring(7, 8); // ดึงเอาเลขเลขตัวที่ 8 ของบัตรประชาชนออกมา
    var num9 = num_id.substring(8, 9); // ดึงเอาเลขเลขตัวที่ 9 ของบัตรประชาชนออกมา
    var num10 = num_id.substring(9, 10); // ดึงเอาเลขเลขตัวที่ 10 ของบัตรประชาชนออกมา
    var num11 = num_id.substring(10, 11); // ดึงเอาเลขเลขตัวที่ 11 ของบัตรประชาชนออกมา
    var num12 = num_id.substring(11, 12); // ดึงเอาเลขเลขตัวที่ 12 ของบัตรประชาชนออกมา
    var num13 = group_5;

    // จากนั้นนำเลขที่ได้มาคูณกันดังนี้
    var cal_num1 = num1 * 13; // เลขตัวที่ 1 ของบัตรประชาชน
    var cal_num2 = num2 * 12; // เลขตัวที่ 2 ของบัตรประชาชน
    var cal_num3 = num3 * 11; // เลขตัวที่ 3 ของบัตรประชาชน
    var cal_num4 = num4 * 10; // เลขตัวที่ 4 ของบัตรประชาชน
    var cal_num5 = num5 * 9; // เลขตัวที่ 5 ของบัตรประชาชน
    var cal_num6 = num6 * 8; // เลขตัวที่ 6 ของบัตรประชาชน
    var cal_num7 = num7 * 7; // เลขตัวที่ 7 ของบัตรประชาชน
    var cal_num8 = num8 * 6; // เลขตัวที่ 8 ของบัตรประชาชน
    var cal_num9 = num9 * 5; // เลขตัวที่ 9 ของบัตรประชาชน
    var cal_num10 = num10 * 4; // เลขตัวที่ 10 ของบัตรประชาชน
    var cal_num11 = num11 * 3; // เลขตัวที่ 11 ของบัตรประชาชน
    var cal_num12 = num12 * 2; // เลขตัวที่ 12 ของบัตรประชาชน

    // นำผลลัพธ์ทั้งหมดจากการคูณมาบวกกัน
    var cal_sum = cal_num1 + cal_num2 + cal_num3 + cal_num4 + cal_num5 + cal_num6 + cal_num7 + cal_num8 + cal_num9 + cal_num10 + cal_num11 + cal_num12;

    // นำผลบวกมาหาร 11 เพื่อหาเศษส่วน
    var cal_mod = cal_sum % 11;

    // นำ 11 ลบ กับส่วนที่เหลือจากการ modulation
    var cal_2 = 11 - cal_mod;
    var cal_2_as_string = cal_2.toString();//แปลงเป็นสตริงเพราะ slice เอาตัวสุดท้ายของอักษรไม่ได้ กรณี "10"
    var cal_22 = cal_2_as_string.slice(-1);
    
    // ถ้าหากเลขที่ได้มีค่าเท่ากับเลขสุดท้ายของเลขบัตรประชาชน ถูกต้อง
    if (cal_22 == num13) {
      // console.log(cal_22);
      // console.log(num13);
      // alert(cal_2)
      // alert(num13)
        return true;
    } else {
      // console.log(cal_22);
      // console.log(num13);
      // alert(cal_2)
      // alert(num13)
        return false;
    }
}


var confirmPassword_db = "";

function checkPasswordMatch() { //ตรวจสอบรหัสผ่านให้ตรงกันพร้อมเปลี่ยนสี เขียว ผิด ก้เป็นสีแดง
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirmPassword').value;

  var passwordElement = document.getElementById('password');
  var confirmPasswordElement = document.getElementById('confirmPassword');
  var messageElement = document.getElementById('passwordMessage');

  // ตรวจสอบว่ารหัสผ่านตรงกันหรือไม่
  if (password === confirmPassword && password.length >= 8) {
      passwordElement.classList.remove('error_text');
      passwordElement.classList.add('success_text');

      confirmPasswordElement.classList.remove('error_text');
      confirmPasswordElement.classList.add('success_text');

      messageElement.innerText = '';  // ลบข้อความแจ้งเตือน
      confirmPassword_db = $('#confirmPassword').val();
      // alert(confirmPassword_db);
  } else {
      passwordElement.classList.remove('success_text');
      passwordElement.classList.add('error_text');

      confirmPasswordElement.classList.remove('success_text');
      confirmPasswordElement.classList.add('error_text');

      // ตรวจสอบความยาวของรหัสผ่าน
      if (password.length > 0 && password.length < 8) {
          messageElement.innerText = 'ให้กรอกอย่างน้อย 8 ตัวอักษร';
      } else {
          messageElement.innerText = '';  // ลบข้อความแจ้งเตือน
      }
      confirmPassword_db = "";
      // alert(confirmPassword_db);
  }
}
//เซ็คข้อมูลเบอร์โทร
// function checkData_phone_(phone_user) {
//   var inputData_phone = document.getElementById(phone_user).value;
//   var inputElement_phone = document.getElementById(phone_user);

//   // ตรวจสอบว่าข้อมูลถูกต้องหรือไม่
//   if (isValidData_phone(inputData_phone)) {
//       inputElement_phone.classList.remove('error_text');
//       inputElement_phone.classList.add('success_text');
//   } else {
//       inputElement_phone.classList.remove('success_text');
//       inputElement_phone.classList.add('error_text');
//   }
// }

// function isValidData_phone(data_phone) {
//     // ตรวจสอบข้อมูลตามเงื่อนไข
//     return data_phone.length > 1;
// }




$("#btn_submit").click(function(e){ //ปุ่มยืนยัน
  e.preventDefault();
  // var gender = $('input[name="sex"]:checked').val();
  var day_birthday = $('#day_birthday').val();
  var month_birthday = $('#month_birthday').val();
  var Year18 = $('#Year18').val();
  var birthday = "";

  if(day_birthday != "" && month_birthday != "" && Year18 != ""){

    birthday = (Year18-543)+"-"+month_birthday+"-"+day_birthday;
    // alert(birthday);
  }

  
  // alert((Year18-543)+"-"+month_birthday+"-"+day_birthday);


  // alert(gender);

  // var title_name = $('#title_name').val();
  Swal.fire({
  title: "คุณแน่ใจไหม?",
  text: "คุณจะไม่สามารถเปลี่ยนกลับสิ่งนี้ได้!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "ตกลง!",
  cancelButtonText: "ยกเลิก!"
  }).then((result) => {
  if (result.isConfirmed) {

    var title_name = $('#title_name').val();
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    // var ID_card = $('#ID_card').val();
    var phone_user = $('#phone_user').val();
    // var birthday = $('#birthday').val();
    
    if(title_name != "" && firstname != "" && lastname != "" && phone_user.length === 10 && birthday != "" && ID_card_db != "" && confirmPassword_db != ""){

      // alert ("คบ");

      $.ajax({
        url: "<?php echo base_url('admin/insert_data/'); ?>",
        method: "POST",
        data: {
          title_name_user : $('#title_name').val(),
          // sex_user : $('input[name="sex"]:checked').val(),
          firstname_user : $('#firstname').val(),
          lastname_user : $('#lastname').val(),
          ID_card : ID_card_db,
          // ID_card : $('#ID_card').val(),
          phone_user : $('#phone_user').val(),
          birthday_user : birthday,
          // password : $('#password').val(),
          password : confirmPassword_db,
        },
        
        success: function(data){
          re = data.trim();
          // alert(re);

          if(re == "ID_card-exists"){
            Swal.fire({
            position: "center",
            icon: "error",
            title: "หมายเลขบัตรประชาชนมีอยู่แล้ว",
            showConfirmButton: false,
            timer: 1500
          });
            // window.location.reload();
          }else {
            // alert("ลงเรียบร้อย");
            location.href="<?php echo site_url('admin/login')?>";
          }

        }
      });

    }
    else{
      Swal.fire({
      position: "center",
      icon: "error",
      title: "ข้อมูลไม่ครบถ้วน",
      showConfirmButton: false,
      timer: 1500
    });
    }
   
  }
});



  // var day_birthday = $('#day_birthday').val();
  // var new_Month = $('#new_Month').val();
  // var Year18 = $('#Year18').val();
  
  // alert((Year18-543)+"-"+new_Month+"-"+day_birthday);




  // alert(gender);
  
  //   $.ajax({
  //   url: "<?php //echo base_url('admin/btn_wait_status/'); ?>",
  //   method: "POST",
  //   data: {
  //     erlm_id : <?php //echo $rp_s->erlm_id; ?>
  //   },


  //   success: function(data){
  //     // alert(data);
  //     if(data = "approve_status_ok"){
  //       // alert ("sdsds");
  //       // console.log(re);
  //       window.location.reload();
  //     }
  //   }
  // });
  
});//click function

</script>