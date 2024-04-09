<!-- Pet Detail Modal -->
<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Pet Details</h3>
            </div>
            <div class="modal-body">
                <?php
                $edit = $mysqli->query("select * from pet_basics where id=" . $row['id']);
                $erow = $edit->fetch_assoc();
                ?>
                <div class="container-fluid">
                    <!-- Display Pet Image -->
                    <div class="row">
                        <div class="col-lg-12" align="center">
                            <?php $img = "http://localhost/php_crud/pet_images/" . $row['id'] . ".jpg"; ?>
                            <img src='<?php echo $img ?>' height="150px" width="170px" />
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <!-- Display Pet Name -->
                    <div class="row">
                        <div class="col-lg-4" align="left">
                            <label>Name:</label>
                        </div>
                        <div class="col-lg-8" align="left">
                            <?php echo $erow['name']; ?>
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <!-- Display Pet Breed -->
                    <div class="row">
                        <div class="col-lg-4" align="left">
                            <label>Breed:</label>
                        </div>
                        <div class="col-lg-8" align="left">
                            <?php echo $erow['breed']; ?>
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <!-- Display Pet Description -->
                    <div class="row">
                        <div class="col-lg-4" align="left">
                            <label>Description:</label>
                        </div>
                        <div class="col-lg-8" align="left">
                            <?php echo $erow['description']; ?>
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <!-- Display Pet Price -->
                    <div class="row">
                        <div class="col-lg-4" align="left">
                            <label>Price:</label>
                        </div>
                        <div class="col-lg-8" align="left">
                            <?php echo $erow['price']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
