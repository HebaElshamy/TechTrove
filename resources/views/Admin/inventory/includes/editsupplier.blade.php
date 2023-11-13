<div class="modal fade" id="modal-edit{{$supplier->id}}">
                  <div class="modal-dialog">
                    <div class="modal-content bg-default">
                      <div class="modal-header">
                        <h4 class="modal-title">Supplier Edit</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form action="{{route('update.supplier',$supplier->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                              <div class="card-body" >
                                <div class="form-group">
                                    <label for="inputName">Supplier Name *</label>
                                    <input type="text" id="inputName" name="name" class="form-control" value="{{$supplier->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="inputName">Phone *</label>
                                    <input type="text" id="inputName" name="mobile_no" class="form-control"value="{{$supplier->mobile_no}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Email *</label>
                                    <input type="text" id="inputName" name="email" class="form-control" value="{{$supplier->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Address *</label>
                                    <input type="text" id="inputName" name="address" class="form-control" value="{{$supplier->address}}">
                                </div>




                              </div>
                      </div>
                              <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-outline-light">Update</button>
                              </div>
                          </form>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
