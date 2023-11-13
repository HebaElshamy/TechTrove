
@forelse ($categories as $key =>$category)
    <tr>
        <td>{{$key+1}}</td>
        <td >{{$category->name}}</td>
        @if ($category->status =='hold')
            <td ><span class="badge badge-warning ">Holding</span></td>
        @elseif ($category->status =='available')
            <td ><span class="badge badge-success ">Aavailable</span></td>
        @elseif ($category->status =='canceled')
            <td ><span class="badge badge-danger ">Canceled</span></td>
        @endif


        <td >{{$category->products->count()}}</td>
        <td>
            <ul class="table-controls d-flex justify-content-around list-unstyled ">
                <li style="font-size: 1.3rem">
                    <a href="" class="text-primary" data-toggle="modal" data-target="#modal-view{{$category->id}}">
                        <i class="fas fa-folder"></i>
                    </a>
                    @include('Admin.categories.includes.viewcategory')
                </li>
                <li style="font-size: 1.3rem">
                    <a href="" class="text-success " data-toggle="modal" data-target="#modal-edit{{$category->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    @include('Admin.categories.includes.editcategory')
                </li>
                <li style="font-size: 1.3rem">
                    <a href="" class="text-danger " data-toggle="modal" data-target="#modal-delete{{$category->id}}">
                        <i class="fas fa-trash"></i>
                    </a>
                    @include('Admin.categories.includes.deletecategory')
                </li>
            </ul>
        </td>
    </tr>
@empty
<tr class="odd">
    <td style="color:  #dc3545" valign="top" colspan="7" class="dataTables_empty">No category available in table</td>
</tr>


@endforelse




