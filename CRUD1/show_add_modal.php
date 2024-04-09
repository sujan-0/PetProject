<!-- Add New pet modal -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Pet</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <!-- Form for adding new pet -->
                    <form method="POST" action="insert.php" class="form-horizontal" enctype="multipart/form-data">
                        <!-- Pet name field -->
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Name:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="pet_name">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <!-- Breed selection -->
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Breed:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="pet_breed">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <!-- Description field -->
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Description:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="pet_description">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <!-- Price field -->
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Price:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="pet_price">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <!-- Profile image upload -->
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Profile Image:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="file" class="filestyle" name="pet_image" />
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- Cancel button -->
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Cancel
                </button>
                <!-- Save button -->
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-disk"></span> Save
                </button>
                </form> <!-- Closing the form -->
            </div>
        </div>
    </div>
</div>
