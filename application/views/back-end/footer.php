            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> Dashboard Theme By
                <a target="_blank" href="mailto:tiendatbt19@gmail.com">Nguyen Tien Dat</a> &nbsp;|&nbsp;
                <a target="_blank" href="https://fb.com/ntd.15" class="btn dark font-white btn-outline sbold socicon-solid bg-hover-grey-salsa btn-xs tooltips" data-original-title="Facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a target="_blank" href="mailto:tiendatbt19@gmail.com" class="btn dark font-white btn-outline sbold socicon-solid bg-hover-grey-salsa btn-xs tooltips" data-original-title="Gmail">
                    <i class="fa fa-google"></i>
                </a>
                <a target="_blank" href="tel:01662727846" class="btn dark font-white btn-outline sbold socicon-solid bg-hover-grey-salsa btn-xs tooltips" data-original-title="Phone number">
                    <i class="fa fa-phone"></i>
                </a>
                <a target="_blank" href="https://youtube.com" class="btn dark font-white btn-outline sbold socicon-solid bg-hover-grey-salsa btn-xs tooltips" data-original-title="Youtube">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
    </div>
    <!-- END CONTAINER -->
</div>

<!--[if lt IE 9]>
<script src="assets/glocal-admin/global/plugins/respond.min.js"></script>
<script src="assets/glocal-admin/global/plugins/excanvas.min.js"></script> 
<script src="assets/glocal-admin/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="assets/glocal-admin/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/glocal-admin/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/glocal-admin/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="assets/glocal-admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/glocal-admin/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/glocal-admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="assets/glocal-admin/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<?php if ($this->session->flashdata('type')): ?>
<script type="text/javascript">
jQuery(document).ready(function() {   
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    toastr['<?= $this->session->flashdata('type') ?>']('<?= $this->session->flashdata('msg'); ?>', '<?= $this->session->flashdata('title') ?>');
});
</script>
<?php endif ?>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<?php if (isset($page)) :
    switch ($page) {
        case 'all-homestay':
            echo '<script src="assets/glocal-admin/global/scripts/datatable.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/pages/scripts/all-home.js" type="text/javascript"></script>';
            break;
        case 'add-new-home';
            echo '<script src="assets/glocal-admin/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
            
            <script src="assets/glocal-admin/global/plugins/jstree/dist/jstree.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/pages/scripts/ui-tree.js" type="text/javascript"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCBERPYtfHY9yx-gQoLMbEN5PeuLHcKChU&libraries=places&callback=initAutocomplete" async defer></script>';
            break;
        default:
            
            break;
    } 
endif;?>
<script src="assets/glocal-admin/global/scripts/app.min.js" type="text/javascript"></script>
<?php if (isset($page) && $page == 'add-new-home'): ?>
    <script src="assets/glocal-admin/pages/scripts/home-edit.js" type="text/javascript"></script>
<?php endif; ?>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="assets/glocal-admin/layouts/layout/scripts/layout.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>