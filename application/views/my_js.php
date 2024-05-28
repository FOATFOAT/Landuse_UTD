 <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <!-- <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script> -->
 <!-- <script src="<?php echo site_url('assets/js/bootstrap.bundle.min.js'); ?>"></script> -->
    <!-- Load jQuery require for isotope -->
    <!-- <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> -->
    <script src="<?php echo site_url('assets/js/jquery.min.js'); ?>"></script>
    <!-- Isotope -->
    <!-- <script src="<?php echo base_url();?>assets/js/isotope.pkgd.js"></script> -->
    <script src="<?php echo site_url('assets/js/isotope.pkgd.js'); ?>"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <!-- <script src="<?php echo base_url();?>assets/js/templatemo.js"></script> -->
    <script src="<?php echo site_url('assets/js/templatemo.js'); ?>"></script>
    <!-- Custom -->
    <!-- <script src="assets/js/custom.js"></script> -->
    <!-- <script src="<?php echo base_url();?>assets/js/test.js"></script> -->

    <!-- icon -->
    <script>
      feather.replace();
    </script>

    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
   <!-- google recaptcha -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- cookie consent script -->
   <script defer src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.6/dist/cookieconsent.js"></script>
   <script defer src="<?php echo site_url('assets/js/cc-init.js'); ?>"></script>
    
    

</body>

</html>