@if ($errors->any())
<div class="col-md-12">
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" style="color: white !important" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>

@endif
