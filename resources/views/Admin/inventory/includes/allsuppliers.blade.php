
@forelse ($suppliers as $key =>$supplier)
    <tr>
        <td>{{$key+1}}</td>
        <td >{{$supplier->name}}</td>
        <td >{{$supplier->mobile_no}}</td>
        <td >{{$supplier->email}}</td>
        <td>
            <ul class="table-controls d-flex justify-content-around list-unstyled ">
                <li style="font-size: 1.3rem">
                    <a href="" class="text-primary" data-toggle="modal" data-target="#modal-view{{$supplier->id}}">
                        <i class="fas fa-folder"></i>
                    </a>
                    @include('Admin.inventory.includes.viewsupplier')
                </li>
                <li style="font-size: 1.3rem">
                    <a href="" class="text-success " data-toggle="modal" data-target="#modal-edit{{$supplier->id}}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    @include('Admin.inventory.includes.editsupplier')
                </li>
                <li style="font-size: 1.3rem">
                    <a href="" class="text-danger " data-toggle="modal" data-target="#modal-delete{{$supplier->id}}">
                        <i class="fas fa-trash"></i>
                    </a>
                    @include('Admin.inventory.includes.deletesupplier')
                </li>
            </ul>
        </td>
    </tr>
@empty
<tr class="odd">
    <td style="color:  #dc3545" valign="top" colspan="7" class="dataTables_empty">No category available in table</td>
</tr>


@endforelse




