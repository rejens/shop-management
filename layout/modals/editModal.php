<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">edit item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputName" id="title">name</label>
                        <input type="text" class="form-control" id="editName" name="editName" required>
                    </div>

                    <div class=" form-group">
                        <label for="inputPrice" id="amount">price</label>
                        <input type="number" class="form-control" id="editPrice" name="editPrice" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="modalClose" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id="saveModal" name="saveEditModal" values="save changes">
                </div>
            </form>
        </div>
    </div>
</div>