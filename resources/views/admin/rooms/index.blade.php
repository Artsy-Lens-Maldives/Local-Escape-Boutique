@extends('layouts.admin')

@section('content')

    <div class="container">
        <table id="all_rooms" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Name</th>  
            </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

@endsection

@section('title', 'All Rooms')

@section('js')
    <script>
        $(document).ready(function() {
            $('#all_rooms').DataTable();
        });
    </script>
@endsection