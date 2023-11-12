<div class="modal fade" id="modal-view{{$category->id}}">
    <div class="modal-dialog">
      <div class="modal-content bg-default">
        <div class="modal-header">
          <h4 class="modal-title">Category Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card-body" >

                    {{-- <strong><i class="fas fa-book mr-1"></i>Name</strong> --}}
                    <strong>Name</strong>

                    <p class="text-muted">
                      {{$category->name}}
                    </p>

                    <hr style="border-top: 1px solid #6c757d;">

                    {{-- <strong><i class="fas fa-map-marker-alt mr-1"></i>Description</strong> --}}
                    <strong>Description</strong>

                    <p class="text-muted">{{$category->description}}</p>

                    <hr style="border-top: 1px solid #6c757d;">

                    {{-- <strong><i class="fas fa-pencil-alt mr-1"></i>Status</strong> --}}
                    <strong>Status</strong>

                    <p class="text-muted">
                      {{$category->status}}
                    </p>

                    <hr style="border-top: 1px solid #6c757d;">

                    {{-- <strong><i class="far fa-file-alt mr-1"></i>Products No</strong> --}}
                    <strong>Products No</strong>

                    <p class="text-muted">{{$category->products->count()}}</p>

            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
