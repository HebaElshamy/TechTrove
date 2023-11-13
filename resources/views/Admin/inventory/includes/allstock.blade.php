@forelse ($product_stock as $key =>$stock)
<tr>
    <td>{{$key+1}}</td>
    <td>{{$stock->name}}</td>
    @if ($stock->stock==0)
        <td ><span class="badge badge-danger ">Out Stock</span></td>
    @elseif ($stock->stock <= $stock->min_stock && $stock->stock >0)
        <td ><span class="badge badge-warning ">Restock</span></td>
    @else
        <td ><span class="badge badge-success ">In Stock</span></td>
    @endif
    <td>{{$stock->stock}}</td>
    <td>{{$stock->price}}</td>
    <td>0</td>

</tr>
@empty
<tr class="odd">
    <td style="color:  #dc3545" valign="top" colspan="7" class="dataTables_empty">No product available in table</td>
</tr>
@endforelse
