<h1 class="page-title"> Add New Home</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal form-row-seperated" id="fileupload" action="" method="POST"  enctype="multipart/form-data">
            <div class="portlet">
                <div class="portlet-title">
                    <div class="actions btn-set">
                        <button class="btn btn-success">
                            <i class="fa fa-check"></i> Save
                        </button>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tabbable-custom">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_general" data-toggle="tab">
                                <i class="icon-grid fa-lg"></i> General </a>
                            </li>
                            <li>
                                <a href="#tab_meta" data-toggle="tab"> 
                                <i class="icon-puzzle fa-lg"></i>  Meta </a>
                            </li>
                            <li>
                                <a href="#tab_images" data-toggle="tab">
                                <i class="icon-camera fa-lg"></i> Gallery </a>
                            </li>
                            <li>
                                <a href="#tab_date_available" data-toggle="tab">
                                <i class="fa fa-calendar-check-o fa-lg"></i> Available Dates </a>
                            </li>
                            <li>
                                <a href="#tab_seo" data-toggle="tab">
                                <i class="icon-globe-alt fa-lg"></i> SEO </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- General options -->
                            <div class="tab-pane active" id="tab_general">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="home[name]" placeholder="" required=""> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Description:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="home[description]" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Short Description:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="home[short_description]" required=""></textarea>
                                            <span class="help-block"> shown in home listing </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Address:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input id="pac-input" class="form-control" type="text" placeholder="Search Box">
                                            <div id="map" style="height: 300px; width: 100%"></div>
                                            <input type="hidden" name="home[address]" id="home_address" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Categories:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <div class="portlet box">
                                                <div class="portlet-body">
                                                    <div id="tree_3" class="tree-demo"> </div>
                                                </div>
                                            </div>
                                            <span class="help-block"> select one or more categories </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Price:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="home[price]" placeholder=""> </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Meta content -->
                            <div class="tab-pane" id="tab_meta">
                                <div class="form-body">
                                    <div class="panel-group accordion" id="accordion3">

                                        <!-- Main services -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1"> 
                                                        <img src="assets/img/icon/services.png"> Main room data 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_3_1" class="panel-collapse in">
                                                <div class="panel-body">
                                                    <div class="col-md-6 form-group">
                                                        <label class="col-md-4 control-label">
                                                            <img src="assets/img/icon/room-type.png" class="pull-left"> Room type:
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <select class="table-group-action-input form-control input-medium" name="home[room-type]" required="">
                                                                <option value="">Select...</option>
                                                                <option value="<?= HOUSE ?>">HOUSE</option>
                                                                <option value="<?= APARTMENT ?>">APARTMENT</option>
                                                                <option value="<?= VILLA ?>">VILLA</option>
                                                                <option value="<?= HOTEL ?>">HOTEL</option>
                                                                <option value="<?= STUDIO ?>">STUDIO</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/icon/guest.png" class="pull-left"> Guests: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control input-medium" name="home[number-of-guests]" min="1" placeholder="Number of Guests" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img class="pull-left" src="assets/img/icon/bedroom.png"> Bedrooms: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control input-medium" name="home[number-of-bedrooms]" min="1" placeholder="Number of Bedrooms" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img class="pull-left" src="assets/img/icon/bed.png"> Beds: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control input-medium" name="home[number-of-beds]" min="1" placeholder="Number of Beds" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img class="pull-left" src="assets/img/icon/bathroom.png"> Bathrooms: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control input-medium" name="home[number-of-bathrooms]" min="1" placeholder="Number of Bathroomsbed" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/icon/checkin.png" class="pull-left"> Checkin time: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control input-medium timepicker" name="home[checkin-time]" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/icon/checkout.png" class="pull-left"> Checkout time: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control input-medium timepicker" name="home[checkout-time]" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/icon/cost.png" class="pull-left"> Weekly Rate: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-icon input-icon-sm">
                                                                <i class="fa fa-usd" style="margin-top: 11px; font-size: 17px;"></i>
                                                                <input type="number" class="form-control input-medium timepicker" name="home[price-in-week]" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/icon/cost.png" class="pull-left"> Weekeen Rate: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-icon input-icon-sm">
                                                                <i class="fa fa-usd" style="margin-top: 11px; font-size: 17px;"></i>
                                                                <input type="number" class="form-control input-medium timepicker" name="home[price-in-weekend]" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Families Facilities -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2"> 
                                                        <img src="assets/img/icon/family.png" class="pull-left"> Families Facilities
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_3_2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="mt-checkbox-inline">
                                                        <label class="mt-checkbox mt-checkbox-outline"> Babies/ Toddlers welcome
                                                            <input value="1" name="home[family-baby]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Extra Mattress
                                                            <input value="1" name="home[family-extra-mattress]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> No smocking
                                                            <input value="1" name="home[family-no-smocking]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Kitchen Facilities -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_3"> 
                                                        <img src="assets/img/icon/kitchen.png" class="pull-left"> Kitchen Facilities: 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_3_3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="mt-checkbox-inline">
                                                        <label class="mt-checkbox mt-checkbox-outline"> Oven
                                                            <input value="1" name="home[kitchen-oven]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Microwave
                                                            <input value="1" name="home[kitchen-microwave]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Fridge/ Freezer
                                                            <input value="1" name="home[kitchen-fridg]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Stove
                                                            <input value="1" name="home[kitchen-stove]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Entertainment Facilities -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_4"> 
                                                        <img src="assets/img/icon/golf.png"> Entertainment Facilities 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_3_4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="mt-checkbox-inline">
                                                        <label class="mt-checkbox mt-checkbox-outline"> Pets welcome
                                                            <input value="1" name="home[entertainment-pet]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Grilling BBQ
                                                            <input value="1" name="home[entertainment-bbq]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Natural surround
                                                            <input value="1" name="home[entertainment-nature]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Beach view
                                                            <input value="1" name="home[entertainment-beach]-view" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Golf
                                                            <input value="1" name="home[entertainment-golf]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Fishing
                                                            <input value="1" name="home[entertainment-fishing]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Pool
                                                            <input value="1" name="home[entertainment-pool]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Complimentary amenities -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_5"> 
                                                        <img src="assets/img/icon/services.png"> Complimentary amenities 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_3_5" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="mt-checkbox-inline">
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Wifi
                                                            <input value="1" name="home[system-services-wifi]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            TV
                                                            <input value="1" name="home[system-services-tv]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Shampoo, Conditioning
                                                            <input value="1" name="home[system-services-shampoo]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Toiletries
                                                            <input value="1" name="home[system-services-toiletries]-view" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Napkins
                                                            <input value="1" name="home[system-services-napkins]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Mineral water
                                                            <input value="1" name="home[system-services-mineral-water]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Towels
                                                            <input value="1" name="home[system-services-towels]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Toothpaste
                                                            <input value="1" name="home[system-services-toothpaste]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Soap
                                                            <input value="1" name="home[system-services-soap]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Room Facilities -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_6"> 
                                                        <img src="assets/img/icon/balcony.png"> Room Facilities 
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_3_6" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="mt-checkbox-inline">
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Balcony
                                                            <input value="1" name="home[room-services-balcony]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Air-conditioning
                                                            <input value="1" name="home[room-services-ac]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Washing machine
                                                            <input value="1" name="home[room-services-washing-machine]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <!-- Gallery -->
                            <div class="tab-pane" id="tab_images">
                                <div class="row fileupload-buttonbar">
                                    <div class="col-lg-7">
                                        <!-- The fileinput-button span is used to style the file input field as button -->
                                        <span class="btn green fileinput-button">
                                            <i class="fa fa-plus"></i>
                                            <span> Add files... </span>
                                            <input type="file" name="files[]" multiple=""> </span>
                                        <button type="submit" class="btn blue start">
                                            <i class="fa fa-upload"></i>
                                            <span> Start upload </span>
                                        </button>
                                        <button type="reset" class="btn warning cancel">
                                            <i class="fa fa-trash"></i>
                                            <span> Cancel upload </span>
                                        </button>
                                        <!-- The global file processing state -->
                                        <span class="fileupload-process"> </span>
                                    </div>
                                    <!-- The global progress information -->
                                    <div class="col-lg-5 fileupload-progress fade">
                                        <!-- The global progress bar -->
                                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-success" style="width:0%;"> </div>
                                        </div>
                                        <!-- The extended global progress information -->
                                        <div class="progress-extended"> &nbsp; </div>
                                    </div>
                                </div>
                                <!-- The table listing the files available for upload/download -->
                                <table role="presentation" class="table table-striped clearfix">
                                    <tbody class="files"> </tbody>
                                </table>
                                <!-- The blueimp Gallery widget -->
                                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                                    <div class="slides"> </div>
                                    <h3 class="title"></h3>
                                    <a class="prev"> ‹ </a>
                                    <a class="next"> › </a>
                                    <a class="close white"> </a>
                                    <a class="play-pause"> </a>
                                    <ol class="indicator"> </ol>
                                </div>
                                <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
                                <script id="template-upload" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
                                    <tr class="template-upload fade">
                                        <td>
                                            <span class="preview"></span>
                                        </td>
                                        <td>
                                            <p class="name">{%=file.name%}</p>
                                            <strong class="error text-danger label label-danger"></strong>
                                        </td>
                                        <td>
                                            <p class="size">Processing...</p>
                                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                            </div>
                                        </td>
                                        <td> {% if (!i && !o.options.autoUpload) { %}
                                            <button class="btn blue start" disabled>
                                                <i class="fa fa-upload"></i>
                                                <span>Start</span>
                                            </button> {% } %} {% if (!i) { %}
                                            <button class="btn red cancel">
                                                <i class="fa fa-trash-o"></i>
                                                <span>Remove</span>
                                            </button> {% } %} </td>
                                    </tr> {% } %} 
                                </script>
                                <!-- The template to display files available for download -->
                                <script id="template-download" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
                                    <tr class="template-download fade">
                                        <td>
                                            <span class="preview"> {% if (file.thumbnailUrl) { %}
                                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery>
                                                    <img src="{%=file.thumbnailUrl%}">
                                                </a> {% } %} </span>
                                        </td>
                                        <td>
                                            <p class="name"> {% if (file.url) { %}
                                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
                                                <span>{%=file.name%}</span> {% } %} </p> {% if (file.error) { %}
                                            <div>
                                                <span class="label label-danger">Error</span> {%=file.error%}</div> {% } %} </td>
                                        <td>
                                            <span class="size">{%=o.formatFileSize(file.size)%}</span>
                                        </td>
                                        <td> {% if (file.deleteUrl) { %}
                                            <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                                                <i class="fa fa-trash-o"></i>
                                                <span>Delete</span>
                                            </button>
                                            <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                                            <button class="btn yellow cancel btn-sm">
                                                <i class="fa fa-trash-o"></i>
                                                <span>Cancel</span>
                                            </button> {% } %} </td>
                                    </tr> {% } %} 
                                </script>
                            </div>
                            
                            <!-- Available Date -->
                            <div class="tab-pane" id="tab_date_available">
                                <div class="form-body">
                                    
                                </div>
                            </div>

                            <!-- SEO Options -->
                            <div id="tab_seo" class="tab-pane">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Title:</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control maxlength-handler" name="home[meta_title]" maxlength="100" placeholder="">
                                            <span class="help-block"> max 100 chars </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Keywords:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control maxlength-handler" rows="8" name="home[meta_keywords]" maxlength="1000"></textarea>
                                            <span class="help-block"> max 1000 chars </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Description:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control maxlength-handler" rows="8" name="home[meta_description]" maxlength="255"></textarea>
                                            <span class="help-block"> max 255 chars </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>