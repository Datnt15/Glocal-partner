<div class="row">
    <div class="col-xs-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <span class="caption-subject uppercase">Management Locations</span>
                    <input type="hidden" id="accessToken" value="<?= $accessToken ?>">
                </div>
                <div class="actions btn-set">
                    <a class="btn green btn-lg btn-outline" href="<?= base_url('glocal_admin/add-new-location') ?>">
                        <i class="fa fa-plus"></i> Add new location
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Location Name</th>
                            <th>Thumbnail</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($locations as $location): ?>
                            <tr>
                                <td><?= $location['location_id'] ?></td>
                                <td><?= $location['location_name'] ?></td>
                                <td><img src="<?= $location['location_thumbnail'] ?>" style="width: 150px;"></td>
                                <td><?= $location['location_slug'] ?></td>
                                <td>
                                    <button class="delete_room btn btn-outline red tooltips" data-original-title="Delete this location" data-id="<?= $location['location_id'] ?>">
                                        <i class="fa fa-trash fa-lg"></i>
                                    </button>
                                    <a class="btn btn-outline green tooltips" data-original-title="More editable content" href="glocal_admin/edit_location/<?= $location['location_id'] ?>">
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