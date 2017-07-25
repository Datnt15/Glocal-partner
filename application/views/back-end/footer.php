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
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<?php if (isset($page)) :
    switch ($page) {
        case 'all-homestay':
            echo '<script src="assets/glocal-admin/global/scripts/datatable.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>';
            break;
        case 'add-new-home';
            echo '<script src="assets/glocal-admin/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/pages/scripts/home-edit.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jstree/dist/jstree.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/pages/scripts/ui-tree.js" type="text/javascript"></script>
                <script src="assets/glocal-admin/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/js/vendor/load-image.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/pages/scripts/form-fileupload.js" type="text/javascript"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCBERPYtfHY9yx-gQoLMbEN5PeuLHcKChU&libraries=places&callback=initAutocomplete" async defer></script>';
            break;
        case 'categories';
            echo '<script src="assets/glocal-admin/global/plugins/jstree/dist/jstree.min.js" type="text/javascript"></script>
            <script src="assets/glocal-admin/pages/scripts/ui-tree.js" type="text/javascript"></script>';
            break;
        default:
            
            break;
    } 
endif;?>
<script src="assets/glocal-admin/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="assets/glocal-admin/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="assets/glocal-admin/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="assets/glocal-admin/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="assets/glocal-admin/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>