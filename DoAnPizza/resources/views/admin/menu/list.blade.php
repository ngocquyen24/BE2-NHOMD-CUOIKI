@extends('admin.main')



@section('content')

<table class="table">
    <thead>
    <tr>
                <th style="width: 50px">ID</th>
                <th>Name</th>
                <th>Active</th>
                <th>Update</th>
<<<<<<< HEAD
                <th>Images</th>
             
=======
>>>>>>> menu_home
                <th style="width: 100px">&nbsp;</th>
            </tr>
    </thead>
    <tbody>
            {!! \App\Helpers\Helper::menu($menus) !!}
        </tbody>
</table>
@endsection


<<<<<<< HEAD

=======
>>>>>>> menu_home
