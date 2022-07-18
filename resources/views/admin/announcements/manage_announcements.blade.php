@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<main class="px-10 py-10">
    <div class="mb-10 mt-5 text-left d-flex justify-content-between">
        <h1 class="mb-3">Announcements</h1>
        <!-- <a href="{{route('create_category')}}"><button type="submit" id="" class="btn btn-primary">
                <span class="indicator-label">Annoucements</span>
            </button></a> -->
    </div>
    <div class="form p-5 bg-white rounded">
        <table>
            <tr>
                <th>S.no</th>
                <th>Title</th>
                <th>Description</th>
                <th>status</th>
            </tr>
            <tr>
                <td>1</td>
                <td>announcements</td>
                <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aliquid rem modi exercitationem magnam,</td>
                <td>active</td>
            </tr>
            <tr>
                <td>2</td>
                <td>announcements1</td>
                <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aliquid rem modi exercitationem magnam,</td>
                <td>active</td>
            </tr>
            <tr>
                <td>3</td>
                <td>announcements2</td>
                <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aliquid rem modi exercitationem magnam,</td>
                <td>active</td>
            </tr>
            <tr>
                <td>4</td>
                <td>announcements3</td>
                <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aliquid rem modi exercitationem magnam,</td>
                <td>active</td>
            </tr>
            <tr>
                <td>5</td>
                <td>announcements4</td>
                <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aliquid rem modi exercitationem magnam,</td>
                <td>active</td>
            </tr>
        </table>
    </div>
</main>

@endsection
@section('script')
@endsection