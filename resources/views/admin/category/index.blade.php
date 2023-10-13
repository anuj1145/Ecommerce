@extends('admin.layout.layout')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>S.No.</th>
            <th>Category Name</th>
            <th>Parent Category Name</th>
            <th>Create Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $key=>$categorie)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$categorie->name}}</td>
            <td>
                @if($categorie->category_id)
                {{$categorie->parent->name}} <!-- parent method is made in category model to make relation -->
                @else
                No Parent Category
                @endif
            </td>
            <td>{{$categorie->created_at}}</td>
            <td><a href="{{route('category.edit',$categorie->id)}}" style="font-size:17px;padding:5px"><i class="fa fa-edit"></i></a>
                <a href="javascript::void(0)" class="category_delete" data-id="{{$categorie->id}}" style="font-size:17px;padding:5px"><i class="fa fa-trash"></i></a>
            </td>
        </tr> <!-- javascript::void(0) is used to disable the link url -->
        @endforeach
    </tbody>
</table>
@endsection

<!-- push method is used to add javascript in blade template -->
@push('footer-script')
<script>
    $('.category_delete').on('click', function() {
        if (confirm("Are you sure to delete this category?")) {
            var id = $(this).data('id');
            $.ajax({
                url: '{{route("category.delete")}}',
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