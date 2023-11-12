@extends('Admin.layouts.app')
@section('style')

@endsection
@section('head_title','Add Product')
@section('active','Add Product')
@section('content')
@include('Admin.includes.errors')
<form action="{{route('store.product')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card card-primary ">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="inputName">Product Name *</label>
                        <input type="text" id="inputName" name="name" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="inputDescription">Product Description</label>
                        <textarea id="inputDescription" class="form-control" name="description" rows="4"></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputStatus">Status *</label>
                        <select id="inputStatus" class="form-control custom-select" name="status">
                            <option selected disabled>Select one</option>
                            <option value="hold">Holding</option>
                            <option value="canceled">Canceled</option>
                            <option value="available">Available</option>

                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputStatus">Category *</label>
                        <select id="inputStatus" class="form-control custom-select" name="category">
                            <option selected disabled>Select Category</option>
                            @forelse ( $categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @empty
                                    <option disabled>No Categories Yet</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputClientCompany">Stock *</label>
                        <input type="number" id="inputClientCompany" name="stock" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputClientCompany">Min Stock *</label>
                        <input type="number" id="inputClientCompany" name="min_stock" class="form-control" value="0">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputProjectLeader">Price *</label>
                        <input type="number" id="inputProjectLeader" name="price" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputProjectLeader">Discount *</label>
                        <input type="number" id="inputProjectLeader" name="discount"class="form-control" value="0">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="images" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">

                        <input type="submit" value="Create new Product" class="btn btn-primary float-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



@endsection
