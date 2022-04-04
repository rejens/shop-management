<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">add new item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputName" id="title">name</label>
                        <input type="text" class="form-control" id="inputName" name="inputName" required>
                    </div>
                    <div class=" form-group">
                        <label for="inputCp" id="amount">cp</label>
                        <input type="number" class="form-control" id="inputCp" name="inputCp" required>
                    </div>
                    <div class=" form-group">
                        <label for="inputSp" id="amount">sp</label>
                        <input type="number" class="form-control" id="inputSp" name="inputSp" required>
                    </div>
                    <div class=" form-group">
                        <label for="inputQuantity" id="amount">quantity</label>
                        <input type="number" class="form-control" id="inputQuantity" name="inputQuantity" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="modalClose" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id="saveModal" name="saveAddModal" values="save changes">
                </div>
            </form>
        </div>
    </div>
</div>