<footer class="footer">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-lg-6">
                    <div class="copyright">
                        &copy; <span id="copyright"></span> drbillywilsonbooks.com |
                        <a href="<?php echo $base_url; ?>privacy-policy/">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-center btn-wrapper">
                    <?php include dirname(__FILE__) . '/social-icons.php'; ?>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo $base_url; ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $base_url; ?>assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo $base_url; ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo $base_url; ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo $base_url; ?>assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
    <script src="<?php echo $base_url; ?>assets/js/argon-design-system.min.js?v=1.0.3" type="text/javascript"></script>
    <script src="<?php echo $base_url; ?>assets/js/black-friday.js?v=1.0.1" type="text/javascript"></script>
    <script>
        $(document).ready(() => {
            const year = new Date().getFullYear();
            $('#copyright').text(year);
        });
    </script>