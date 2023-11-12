<div class="modal fade" id="modal-edit{{$product->id}}">
    <div class="modal-dialog modal-xl">
      <div class="modal-content bg-default">
        <div class="modal-header">
          <h4 class="modal-title">Edit Product</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="card-body" >
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputName" style="font-weight: 100  !important">Product Name</label>
                                <input type="text" id="inputName" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="inputStatus" style="font-weight: 100  !important">Status</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option>On Hold</option>
                                    <option>Canceled</option>
                                    <option>Available</option>
                                    <option>In Stock</option>
                                    <option>Out Stock</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="inputStatus" style="font-weight: 100  !important">Category</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option>On Hold</option>
                                    <option>Canceled</option>
                                    <option>Available</option>
                                    <option>In Stock</option>
                                    <option>Out Stock</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="inputClientCompany" style="font-weight: 100  !important">Stock</label>
                                <input type="number" id="inputClientCompany" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="inputClientCompany" style="font-weight: 100  !important">Min Stock</label>
                                <input type="number" id="inputClientCompany" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="inputProjectLeader" style="font-weight: 100  !important">Price</label>
                                <input type="number" id="inputProjectLeader" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                            <label for="inputProjectLeader" style="font-weight: 100  !important">discount</label>
                            <input type="number" id="inputProjectLeader" class="form-control">
                        </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputDescription" style="font-weight: 100  !important">Product Description</label>
                                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputFile" style="font-weight: 100  !important">File input</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile"  style="font-weight: 100  !important">Choose file</label>
                                </div>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
        </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-light">Save changes</button>
                </div>
            </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
