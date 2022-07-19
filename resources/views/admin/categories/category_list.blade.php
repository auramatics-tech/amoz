@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="mb-10 mt-5 text-left d-flex justify-content-between">
        <h1 class="mb-3">Categories</h1>
    <a href="{{route('create_category')}}"><button type="submit" class="btn btn-primary">
            <span class="indicator-label">Create Ctaegory</span>
        </button></a>
    </div>
    <div class="form p-5 bg-white rounded">
        <table>
            <tr>
                <th>S.no</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->cat_name}}</td>
                    <td>
                    <a href="{{route('edit_category',$category->id)}}"><button type="submit" class="btn btn-success">
                <span class="indicator-label">Edit</span>
            </button></a>
            <a href="{{route('destroy_category',$category->id)}}"><button type="submit" id="" class="btn btn-danger show_confirm">
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