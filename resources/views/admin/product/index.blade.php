@extends('admin.layout.layout')

@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>S.No.</th>
            <th>Product Name</th>
            <th>Category Name</th>
            <th>Price</th>
            <th>Extra Details</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $key=>$product)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$product->name}}</td>
            <td>
                @if($product->category_id)
                {{$product->category->name}} <!-- category method is made in category model to make relation -->
                @endif
            </td>
            <td>
            Rs. {{$product->price}}
            </td>
            <td><button><a href="{{route('product.extraDetails',$product->id)}}">Add</a></button></td>
            <td>
            <img src="{{asset('public/uploads/'.$product->image)}}" style="height:80px;width:80px;" >
            </td>
            <td><a href="{{route('product.edit',$product->id)}}" style="font-size:17px;padding:5px"><i class="fa fa-edit"></i></a>
                <a href="javascript::void(0)" class="product_delete" data-id="{{$product->id}}" style="font-size:17px;padding:5px"><i class="fa fa-trash"></i></a>
            </td>
        </tr> <!-- javascript::void(0) is used to disable the link url -->
        @endforeach
    </tbody>
</table>
@endsection

<!-- push method is used to add javascript in blade template -->
@push('footer-script')
<script>
    $('.product_delete').on('click', function() {
        if (confirm("Are you sure to delete this product?")) {
            var id = $(this).data('id');
            $.ajax({
                url: '{{route("product.delete")}}',
                method: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    'id': id
                },
                success: function(data) {
                    location.reload();
                }

            });
        }
    });
</script>
@endpush