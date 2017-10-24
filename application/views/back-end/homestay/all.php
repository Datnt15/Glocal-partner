<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Homestays Management
    <a href="glocal-admin/add-new-home" class="btn btn-outline green">Add new homestay</a>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->

<div class="row">
    <div class="col-xs-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject uppercase">Cick on content to edit or select action</span>
                    <input type="hidden" id="accessToken" value="<?= $accessToken ?>">
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Daily Tax</th>
                            <th>Weekly Tax</th>
                            <th>Monthly Tax</th>
                            <!-- <th><img data-original-title="Number of Guests" data-placement="bottom" class="tooltips"  src="assets/img/icon/guest.png"></th> -->
                            <th><img data-original-title="Number of Bedrooms" data-placement="bottom" class="tooltips"  src="assets/img/icon/bed.png"></th>
                            <!-- <th><img data-original-title="Number of Bathrooms" data-placement="bottom" class="tooltips"  src="assets/img/icon/bathroom.png"></th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Thumbnail</th>
                            <th width="200">Name</th>
                            <th>Type</th>
                            <th>Daily Tax</th>
                            <th>Weekly Tax</th>
                            <th>Monthly Tax</th>
                            <!-- <th><img data-original-title="Number of Guests" class="tooltips"  src="assets/img/icon/guest.png"></th> -->
                            <th><img data-original-title="Number of Bedrooms" class="tooltips"  src="assets/img/icon/bed.png"></th>
                            <!-- <th><img data-original-title="Number of Bathrooms" class="tooltips"  src="assets/img/icon/bathroom.png"></th> -->
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($rooms as $room): ?>
                            <tr>
                                
                                <td><img src="<?= $room['room_thumbnail'] ?>" width="100"></td>
                                <td>
                                    <a href="javascript:;" class="text-editable" data-field="room_no" data-type="text" data-id="<?= $room['id'] ?>" data-original-title="Enter the homestay name">
                                        <?= $room['room_no'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" class="select-editable" data-field="type" data-type="select" data-id="<?= $room['id'] ?>" data-original-title="Choose other type" data-value="<?= $room['room_type'] ?>">
                                    <?php switch (intval($room['room_type'])) {
                                        case STUDIO:
                                            echo "Studio";
                                            break;
                                        case HOUSE:
                                            echo "House";
                                            break;
                                        case VILLA:
                                            echo "Villa";
                                            break;
                                        case APARTMENT:
                                            echo "Apartment";
                                            break;
                                        case HOTEL:
                                            echo "Hotel";
                                            break;
                                        default:
                                            echo "Apartment";
                                            break;
                                    } ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" class="text-editable" data-field="room_daily_tax" data-type="number" data-id="<?= $room['id'] ?>" data-original-title="Enter other rate">
                                        <?= $room['room_daily_tax'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" class="text-editable" data-field="room_weekly_tax" data-type="number" data-id="<?= $room['id'] ?>" data-original-title="Enter other rate">
                                        <?= $room['room_weekly_tax'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" class="text-editable" data-field="room_monthly_tax" data-type="number" data-id="<?= $room['id'] ?>" data-original-title="Enter other rate">
                                        <?= $room['room_monthly_tax'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" class="text-editable" data-field="room_beds" data-type="number" data-id="<?= $room['id'] ?>" data-original-title="Enter number of guests">
                                        <?= $room['room_beds'] ?>
                                    </a>
                                </td>
                                <td>
                                    <button class="delete_room btn btn-outline red tooltips" data-original-title="Delete this room" data-id="<?= $room['id'] ?>">
                                        <i class="fa fa-trash fa-lg"></i>
                                    </button>
                                    <a class="btn btn-outline green tooltips" data-original-title="More editable content" href="glocal_admin/edit_room/<?= $room['id'] ?>">
                                        <i class="fa fa-edit fa-lg"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>