<div class="modal fade" id="modal-edit{{$category->id}}">
                  <div class="modal-dialog">
                    <div class="modal-content bg-default">
                      <div class="modal-header">
                        <h4 class="modal-title">Category Edit</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form action="{{route('update.category',$category->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                              <div class="card-body" >
                                  <div class="form-group">
                                      <label for="inputName" style="font-weight: 100  !important">Category Name</label>
                                      <input type="text" id="inputName" class="form-control" name="name" value="{{$category->name}}">
                                  </div>
                                  <div class="form-group">
                                      <label for="inputDescription" style="font-weight: 100  !important">Category Description</label>
                                      <textarea id="inputDescription" class="form-control" rows="4" name="description">{{$category->description}}</textarea>
                                  </div>
                                  <div class="form-group">
                                      <label for="inputStatus" style="font-weight: 100  !important">Status</label>
                                      <select id="inputStatus" class="form-control custom-select" name="status">
                                      <option selected disabled>Select Status</option>
                                      @if ($category->status == 'hold')
                                        <option selected value="hold">Holding</option>
                                        <option value="canceled">Canceled</option>
                                        <option value="available">Available</option>
                                       @elseif ($category->status == 'canceled')
                                       <option  value="hold">Holding</option>
                                       <option selected value="canceled">Canceled</option>
                                       <option value="available">Available</option>
                                       @elseif ($category->status == 'available')
                                       <option  value="hold">Holding</option>
                                       <option  value="canceled">Canceled</option>
                                       <option selected value="available">Available</option>
                                      @endif

                                      </select>
                                  </div>


                              </div>
                      </div>
                              <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-outline-light">Save changes</button>
                              </div>
                          </form>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
