@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="mb-10 mt-5 text-left d-flex justify-content-between">
        <h1 class="mb-3">Products</h1>
        <a href="{{route('create_product')}}"><button type="submit" id="" class="btn btn-primary">
                <span class="indicator-label">Add Product</span>
            </button></a>
    </div>
    <div class="form p-5 bg-white rounded">
        <table>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Price</th>
                <th>Category</th>
                <th>Remark</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->pro_name}}</td>
                    <td>{{$product->pro_price}}</td>
                    <td>{{isset($product->get_category->cat_name) ? $product->get_category->cat_name: ''}}</td>
                    <td>{{$product->remarks}}</td>
                    <td>
                        <a href="{{route('edit_product',$product->id)}}"><button type="submit" id="" class="btn btn-success">
                                <span class="indicator-label">Edit</span>
                            </button></a>
                        <a href="{{route('destroy_product_details',$product->id)}}"><button type="submit" id="" class="btn btn-danger show_confirm">
                <span class="indicator-label">Delete</span>
            </button></a>
</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function() {
         
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
             submit();
            }
          });
      });
  
</script>
@endsection