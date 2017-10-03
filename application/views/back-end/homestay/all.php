<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Homestays Management
    <a href="/glocal_admin/add_new_home" class="btn btn-outline green">Add new homestay</a>
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
                            <th>Weekly Rate</th>
                            <th>Weekend Rate</th>
                            <th><img data-original-title="Number of Guests" data-placement="bottom" class="tooltips"  src="assets/img/icon/guest.png"></th>
                            <th><img data-original-title="Number of Bedrooms" data-placement="bottom" class="tooltips"  src="assets/img/icon/bed.png"></th>
                            <th><img data-original-title="Number of Bathrooms" data-placement="bottom" class="tooltips"  src="assets/img/icon/bathroom.png"></th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Thumbnail</th>
                            <th width="200">Name</th>
                            <th>Type</th>
                            <th>Weekly Rate</th>
                            <th>Weekend Rate</th>
                            <th><img data-original-title="Number of Guests" class="tooltips"  src="assets/img/icon/guest.png"></th>
                            <th><img data-original-title="Number of Bedrooms" class="tooltips"  src="assets/img/icon/bedroom.png"></th>
                            <th><img data-original-title="Number of Bathrooms" class="tooltips"  src="assets/img/icon/bathroom.png"></th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($rooms as $room): ?>
                            <tr>
                                
                                <td><img src="<?= $room['room_thumbnail'] ?>" width="100"></td>
                                <td>
                                    <a href="javascript:;" class="text-editable" data-field="name" data-type="text" data-id="<?= $room['room_id'] ?>" data-original-title="Enter the homestay name">
                                        <?= $room['name'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" class="select-editable" data-field="type" data-type="select" data-id="<?= $room['room_id'] ?>" data-original-title="Choose other type" data-value="<?= $room['type'] ?>">
                                    <?php switch (intval($room['type'])) {
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
                                    <a href="javascript:;" class="text-editable" data-field="weekly_rate" data-type="number" data-id="<?= $room['room_id'] ?>" data-original-title="Enter other rate">
                                        <?= $room['weekly_rate'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" class="text-editable" data-field="weekend_rate" data-type="number" data-id="<?= $room['room_id'] ?>" data-original-title="Enter other rate">
                                        <?= $room['weekend_rate'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" class="text-editable" data-field="number_of_guests" data-type="number" data-id="<?= $room['room_id'] ?>" data-original-title="Enter number of guests">
                                        <?= $room['number_of_guests'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" class="text-editable" data-field="number_of_bedroom" data-type="number" data-id="<?= $room['room_id'] ?>" data-original-title="Enter number of bedrooms">
                                        <?= $room['number_of_bedroom'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" class="text-editable" data-field="number_of_bathroom" data-type="number" data-id="<?= $room['room_id'] ?>" data-original-title="Enter number of bathrooms">
                                        <?= $room['number_of_bathroom'] ?>
                                    </a>
                                </td>
                                <td>
                                    <button class="delete_room btn btn-outline red tooltips" data-original-title="Delete this room" data-id="<?= $room['room_id'] ?>">
                                        <i class="fa fa-trash fa-lg"></i>
                                    </button>
                                    <a class="btn btn-outline green tooltips" data-original-title="More editable content" href="glocal_admin/edit_room/<?= $room['room_id'] ?>">
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