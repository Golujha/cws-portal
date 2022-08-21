@extends('admin.adminBase')
@section('content')
     <div class="flex">
        @include('admin.side')
        <div class="w-5/6 ">
            <div class="flex justify-between px-4">
                <h2>Manage Course</h2>

                <a href="">Add new Course</a>
            </div>
            <table class="">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>duration</th>
                    <th>fees</th>
                    <th>action</th>
                </tr>
            </table>
        </div>
     </div>



@endsection