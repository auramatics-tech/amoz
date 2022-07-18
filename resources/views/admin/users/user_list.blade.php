@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="mb-10 mt-2">
        <a href="{{route('create_user')}}"><button type="submit" id="" class="d-flex btn btn-primary ml-auto">
                <span class="indicator-label">Add User</span>
            </button></a>
    </div>
    <div class="form p-5 bg-white rounded">
        <h5 class="py-4">User Overview</h5>
        <table>
            <th>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </th>
            <tbody>
                @foreach($user as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->get_role->name}}</td>
                    <td>
                <a href="{{route('edit_user',$user->id)}}"><button type="submit" id="" class="btn btn-success">
                <span class="indicator-label">Edit</span>
            </button></a>
            <a href="{{route('destroy_user_details',$user->id)}}"><button type="submit" id="" class="btn btn-danger show_confirm">
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
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection