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
                                            <input type="text" class="form-control" name="home[room_no]" placeholder="" required=""> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Description:
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="7" name="meta[description]"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Short Description:
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="meta[short_description]" ></textarea>
                                            <span class="help-block"> Shown in home listing </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Vietnamese Description:
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="7" name="meta[vi_des]" ></textarea>
                                            <span class="help-block"> Vietnamese only </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Vietnamese Short Description:
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="meta[vi_short_des]"></textarea>
                                            <span class="help-block"> Vietnamese only </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Address:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input id="pac-input" class="form-control" type="text" placeholder="Type your room address ... ">
                                            <div id="map" style="height: 300px; width: 100%"></div>
                                            <input type="hidden" name="meta[address]" id="home_address" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Location:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="bs-select form-control" name="home[location]" required="" data-live-search="true" data-size="8">
                                                <option value="">Select...</option>
                                                <?php foreach ($locations as $loca): ?>
                                                    <option value="<?php echo $loca['location_id'] ?>">
                                                        <?php echo $loca['location_name']; ?>
                                                    </option>}
                                                    option
                                                <?php endforeach ?>
                                            </select>
                                        </div>
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
                                                            <select class="table-group-action-input form-control input-medium" name="home[room_type]" required="">
                                                                <option value="">Select...</option>
                                                                <option value="<?= HOUSE ?>">HOUSE</option>
                                                                <option value="<?= APARTMENT ?>">APARTMENT</option>
                                                                <option value="<?= VILLA ?>">VILLA</option>
                                                                <option value="<?= HOTEL ?>">HOTEL</option>
                                                                <option value="<?= STUDIO ?>">STUDIO</option>
                                                                <option value="<?= SHARED ?>">SHARED</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/icon/guest.png" class="pull-left"> Guests: 
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control input-medium" name="meta[number_of_guests]" min="1" placeholder="Number of Guests">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img class="pull-left" src="assets/img/icon/bedroom.png"> Bedrooms: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control input-medium" name="meta[number_of_bedroom]" min="1" placeholder="Number of Bedrooms" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img class="pull-left" src="assets/img/icon/bed.png"> Beds: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control input-medium" name="home[room_beds]" min="1" placeholder="Number of Beds" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img class="pull-left" src="assets/img/icon/bathroom.png"> Bathrooms: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control input-medium" name="meta[number_of_bathroom]" min="1" placeholder="Number of Bathroomsbed" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/icon/checkin.png" class="pull-left"> Checkin time: 
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control input-medium timepicker timepicker-no-seconds" name="meta[checkin_time]">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/icon/checkout.png" class="pull-left"> Checkout time: 
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control input-medium timepicker timepicker-no-seconds" name="meta[checkout_time]">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/daily.png" class="pull-left" style="width: 20px;"> Daily Tax: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-icon input-icon-sm">
                                                                <i class="fa fa-usd" style="margin-top: 11px; font-size: 17px;"></i>
                                                                <input type="number" class="form-control input-medium" name="home[room_daily_tax]" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/weekly.png" class="pull-left" style="width: 20px;"> Weekly Tax: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-icon input-icon-sm">
                                                                <i class="fa fa-usd" style="margin-top: 11px; font-size: 17px;"></i>
                                                                <input type="number" class="form-control input-medium" name="home[room_weekly_tax]" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6  form-group">
                                                        <label for="" class="col-md-4 control-label">
                                                            <img src="assets/img/monthly.png" class="pull-left" style="width: 20px;"> Monthly Tax: 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <div class="input-icon input-icon-sm">
                                                                <i class="fa fa-usd" style="margin-top: 11px; font-size: 17px;"></i>
                                                                <input type="number" class="form-control input-medium" name="home[room_monthly_tax]" required>
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
                                                            <input value="1" name="meta[family-baby]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Extra Mattress
                                                            <input value="1" name="meta[family-extra-mattress]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> No smocking
                                                            <input value="1" name="meta[family-no-smocking]" type="checkbox">
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
                                                            <input value="1" name="meta[kitchen-oven]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Microwave
                                                            <input value="1" name="meta[kitchen-microwave]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Fridge/ Freezer
                                                            <input value="1" name="meta[kitchen-fridge]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Stove
                                                            <input value="1" name="meta[kitchen-stove]" type="checkbox">
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
                                                            <input value="1" name="meta[entertainment-pet]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Grilling BBQ
                                                            <input value="1" name="meta[entertainment-bbq]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Natural surround
                                                            <input value="1" name="meta[entertainment-nature]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Beach view
                                                            <input value="1" name="meta[entertainment-beach-view]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Golf
                                                            <input value="1" name="meta[entertainment-golf]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Fishing
                                                            <input value="1" name="meta[entertainment-fishing]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Pool
                                                            <input value="1" name="meta[entertainment-pool]" type="checkbox">
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
                                                            <input value="1" name="meta[system-services-wifi]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            TV
                                                            <input value="1" name="meta[system-services-tv]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Shampoo, Conditioning
                                                            <input value="1" name="meta[system-services-shampoo]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Toiletries
                                                            <input value="1" name="meta[system-services-toiletries]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Napkins
                                                            <input value="1" name="meta[system-services-napkins]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Mineral water
                                                            <input value="1" name="meta[system-services-mineral-water]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Towels
                                                            <input value="1" name="meta[system-services-towels]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Toothpaste
                                                            <input value="1" name="meta[system-services-toothpaste]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Soap
                                                            <input value="1" name="meta[system-services-soap]" type="checkbox">
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
                                                            <input value="1" name="meta[room-services-balcony]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Air-conditioning
                                                            <input value="1" name="meta[room-services-ac]" type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> 
                                                            Washing machine
                                                            <input value="1" name="meta[room-services-washing-machine]" type="checkbox">
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
                                        <label for="file_input" class="btn green fileinput-button">
                                            <i class="fa fa-plus"></i>
                                            <span id="btn-text"> Add files... </span>
                                        </label>
                                        <input class="hidden" id="file_input" type="file" name="files[]" multiple=""> 
                                    </div>
                                </div>
                                <!-- The table listing the files available for upload/download -->
                                <table role="presentation" class="table table-striped clearfix">
                                    <tbody class="files"> </tbody>
                                </table>
                                <div id="preview"></div>
                            </div>
                            
                            <!-- SEO Options -->
                            <div id="tab_seo" class="tab-pane">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Title:</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control maxlength-handler" name="meta[meta_title]" maxlength="100" placeholder="">
                                            <span class="help-block"> max 100 chars </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Keywords:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control maxlength-handler" rows="8" name="meta[meta_keywords]" maxlength="1000"></textarea>
                                            <span class="help-block"> max 1000 chars </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Description:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control maxlength-handler" rows="8" name="meta[meta_description]" maxlength="255"></textarea>
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