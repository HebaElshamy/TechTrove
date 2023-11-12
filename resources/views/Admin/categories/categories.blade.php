@extends('Admin.layouts.app')
@section('style')
@include('Admin.includes.DataTables.style')
@endsection
@section('head_title','All Categories')
@section('active','Categories')
@section('content')

<div class="row">

    @include('Admin.includes.errors')


    <div class="col-12">
        @include('Admin.categories.includes.addcategory')
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Categories</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Category Name</th>
                  <th>Status</th>
                  <th>Products No</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @include('Admin.categories.includes.allCategories')
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Products No</th>
                        <th>Action</th>
                    </tr>
                </tfoot>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
@endsection
@section('script')
@include('Admin.includes.DataTables.script')
@endsection

