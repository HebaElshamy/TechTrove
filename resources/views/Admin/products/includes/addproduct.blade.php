<form action="">
    <div class="card card-primary collapsed-card">

    <div class="card-header">
      <h3 class="card-title">Add Product</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-plus"></i>
        </button>
      </div>
    </div>

        <div class="card-body">
        <div class="form-group">
            <label for="inputName">Product Name</label>
            <input type="text" id="inputName" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputDescription">Product Description</label>
            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="inputStatus">Status</label>
            <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>Select one</option>
                <option>On Hold</option>
                <option>Canceled</option>
                <option>Available</option>
                <option>In Stock</option>
                <option>Out Stock</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputStatus">Category</label>
            <select id="inputStatus" class="form-control custom-select">
                <option selected disabled>Select one</option>
                <option>On Hold</option>
                <option>Canceled</option>
                <option>Available</option>
                <option>In Stock</option>
                <option>Out Stock</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputClientCompany">Stock</label>
            <input type="number" id="inputClientCompany" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputClientCompany">Min Stock</label>
            <input type="number" id="inputClientCompany" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputProjectLeader">Price</label>
            <input type="number" id="inputProjectLeader" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputProjectLeader">discount</label>
            <input type="number" id="inputProjectLeader" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>

            </div>
        </div>
        <div class="form-group">

            <input type="submit" value="Create new Product" class="btn btn-primary float-right">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <a href="#" class="btn btn-secondary">Cancel</a>
            </button>
        </div>
        </div>

    <!-- /.card-body -->
  </div>
</form>
