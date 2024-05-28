<div class="">

    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left  pb-5">
                                <!-- <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    Develop <strong>Strategies</strong> for 
                                  <br>your business
                              </h1> -->


                              <img src="<?php echo base_url();?>assets/img/organizational.png" alt="" style="width: 100%;" class="img-fluid"/>



                                <!-- <p class="banner-body text-muted py-3 mx-0 px-0">
                                    Purple Buzz is a corporate HTML template with Bootstrap 5 Beta 1. This CSS template is 100% free to download provided by <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">TemplateMo</a>. Total 6 HTML pages included in this template. Icon fonts by <a rel="nofollow" href="https://boxicons.com/" target="_blank">Boxicons</a>. Photos are from <a rel="nofollow" href="https://unsplash.com/" target="_blank">Unsplash</a> and <a rel="nofollow" href="https://icons8.com/" target="_blank">Icons 8</a>.
                              </p> -->
                                <!-- <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a> -->
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                บริการตรวจสอบที่ดิน
                                </h1>
                                <p class="banner-body text-muted py-3">
                                สำนักงานโยธาธิการและผังเมืองจังหวัดอุตรดิตถ์ มุ่งมั่นพัฒนาการบริการอย่างไม่หยุดยั้ง โดยการนำเทคโนโลยีดิจิทัลมาใช้เป็นเครื่องมือหลัก เพื่อส่งเสริมความสะดวกสบายให้กับประชาชนในการเข้าถึงข้อมูลและบริการต่างๆ ซึ่งจะช่วยเพิ่มประสิทธิภาพการทำงานและการให้บริการในแบบดิจิทัล ตามแนวทางนโยบายของรัฐบาล
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="<?php echo base_url('admin/land_inspection_services/'); ?>" role="button">บริการตรวจสอบที่ดิน</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left pb-5">
                            <img src="<?php echo base_url();?>assets/img/DPT_utt.jpg" alt="" style="" class="img-fluid"/>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero -->




<style>

.pointer{
    cursor: pointer;

}

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    
}

.modal-img {
    width: 100%; /* Responsive image */
}

.close {
    cursor: pointer; /* ช่วยให้ผู้ใช้ทราบว่าสามารถคลิกได้ */
    
}


</style>



    <!-- Start Recent Work -->
    <section class="py-5 mb-5">
        <div class="container">
            <div class="recent-work-header row text-center pb-5">
                <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">ข้อมูลข่าวสารประชาสัมพันธ์</h2>
            </div>
            <div class="row gy-5 g-lg-5 mb-4">

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <span class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="<?php echo base_url();?>assets/img/organizational.png" alt="Card image">
                      
                    </span>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <span class="recent-work card border-0 shadow-lg overflow-hidden pointer" data-toggle="modal" data-target="#imageModal"> 
                        <img class="recent-work-img card-img" src="<?php echo base_url();?>assets/img/เกียรติบัตรชุมชนองค์กรอำเภอคุณธรรม.jpg" alt="Card image">
                        <!-- <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Creative Design</h3>
                                <p class="card-text">Mollit anim id est laborum.</p>
                            </div>
                        </div> -->
                    </span>
                    
                </div><!-- End Recent Work -->

        
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Creative Design</h3>
                                <p class="card-text">Mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Recent Work -->

            </div>
        </div>
    </section>
    <!-- End Recent Work -->
</div>

<!-- Modal -->

<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">รูปภาพ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <!-- <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <div class="modal-body">
                <img src="" class="img-fluid" id="modalImage" alt="Responsive image">
            </div>
        </div>
    </div>
</div>


<script>

$(document).ready(function(){
    $('.recent-work').on('click', function () {
        var src = $(this).find('img').attr('src');
        $('#modalImage').attr('src', src);
        $('#imageModal').modal('show');
    });
});


</script>
