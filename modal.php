<!-- The Modal -->
<div class="modal" id="new-lander-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">New Lander</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form id="new-lander">
                <div class="flex-container">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input name="lander-title" placeholder="Lander Title" type="text" class="form-control" id="title">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <input name="lander-url" placeholder="https://example.com/" type="text" class="form-control" id="url">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            

            <!-- Modal footer -->
            <div class="modal-footer">
                <button id="submit-new-lander" type="submit" class="btn btn-success float-right" >Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>