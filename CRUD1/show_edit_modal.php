<!-- Edit Pet Modal -->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="editModalLabel">Edit Pet</h4>
            </div>
            <div class="modal-body">
                <?php
                $edit = $mysqli->query("SELECT * FROM pet_basics WHERE id=" . $row['id']);
                $erow = $edit->fetch_assoc();
                ?>
                <div class="container-fluid" id="editFormContainer">
                    <form id="editForm" enctype="multipart/form-data">
                        <!-- Pet ID hidden field -->
                        <input type="hidden" name="pet_id" value="<?php echo $erow['id']; ?>">
                        <!-- Pet Name field -->
                        <div class="form-group">
                            <label for="pet_name">Name:</label>
                            <input type="text" id="pet_name" name="pet_name" class="form-control" value="<?php echo $erow['name']; ?>">
                        </div>
                        <!-- Pet Breed field -->
                        <div class="form-group">
                            <label for="pet_breed">Breed:</label>
                            <input type="text" id="pet_breed" name="pet_breed" class="form-control" value="<?php echo $erow['breed']; ?>">
                        </div>
                        <!-- Pet Description field -->
                        <div class="form-group">
                            <label for="pet_description">Description:</label>
                            <textarea id="pet_description" name="pet_description" class="form-control"><?php echo $erow['description']; ?></textarea>
                        </div>
                        <!-- Pet Price field -->
                        <div class="form-group">
                            <label for="pet_price">Price:</label>
                            <input type="text" id="pet_price" name="pet_price" class="form-control" value="<?php echo $erow['price']; ?>">
                        </div>
                        <!-- Pet Profile Image upload -->
                        <div class="form-group">
                            <label for="pet_image">Profile Image:</label>
                            <input type="file" id="pet_image" name="pet_image" class="form-control-file">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Cancel
                </button>
                <button type="button" id="saveChanges" class="btn btn-warning">
                    <span class="glyphicon glyphicon-check"></span> Save
                </button>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
