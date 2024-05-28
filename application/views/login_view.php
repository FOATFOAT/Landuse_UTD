
<style>

.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form id="form_login">
          <!-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div> -->

          <div class="divider d-flex align-items-center my-4">
            <h2 class="text-center fw-bold mx-3 mb-0 text-section">เข้าสู่ระบบ</h2>
          </div>

          <!-- Email input -->
          <!-- <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="หมายเลขบัตรประชาชน" />
            <label class="form-label" for="form3Example3">หมายเลขบัตรประชาชน</label>
          </div> -->

          <!-- Password input -->
            <div class="form-label font-sg b" >หมายเลขบัตรประชาชน</div>
            <div class="input-group flex-nowrap mb-3 ">
              <span class="input-group-text" id="addon-wrapping"><i data-feather="user"></i></span>
              <input type="text" class="form-control form-control-lg " placeholder="หมายเลขบัตรประชาชน" maxlength="13"
              aria-label="Username" aria-describedby="addon-wrapping" id="username" namr="username"  autocomplete="username">
            </div>
            
            <div class="form-label font-sg b" >รหัสผ่าน</div>
            <div class="input-group flex-nowrap ">
              <span class="input-group-text" id="addon-wrapping"><i data-feather="lock"></i></span>
              <input type="password" class="form-control form-control-lg " placeholder="รหัสผ่าน"
              aria-label="password" aria-describedby="addon-wrapping" id="password" namr="password"  autocomplete="current-password">
            </div>
           

          <!-- <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="รหัสผ่าน" />
            <label class="form-label" for="form3Example4">รหัสผ่าน</label>
          </div> -->

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="<?php echo site_url('admin/register') ?>" class="link-Secondary ">ลืมรหัสผ่าน</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg" id="btn_confirm" 
              style="padding-left: 2.5rem; padding-right: 2.5rem;">เข้าสู่ระบบ</button>
            <p class="fw-bold mt-2 pt-1 mb-0">ยังไม่มีบัญชี? 
                <a href="<?php echo site_url('admin/register') ?>" class="link-danger">ลงทะเบียน</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div>
 
  </div>
</section>


<script>


$("#btn_confirm").click(function(e){ //ปุ่มรับซ่อม
    e.preventDefault();

    alert ("sdsds");
   
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