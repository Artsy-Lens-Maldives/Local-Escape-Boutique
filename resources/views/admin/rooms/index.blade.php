@extends('layouts.admin')

@section('content')
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            
            @endif
        @endforeach
    </div>
    <div class="container">
        <table id="all_rooms" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price/Night</th>
                <th>Created At</th>
                <th>Last Modified</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room->name }}</td>
                        <td>{{ $room->price_night }}</td>
                        <td>{{ $room->created_at->diffForHumans() }}</td>
                        <td>{{ $room->updated_at->diffForHumans() }}</td>
                        <td>
                            <a class="btn btn-danger" href="{{ url()->current() }}/{{ $room->id }}/delete">Delete</a>
                            <a class="btn btn-warning" href="{{ url()->current() }}/{{ $room->id }}/edit">Edit</a>
                            <a class="btn btn-info" href="{{ url()->current() }}/{{ $room->id }}/images">Images</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('title')
    <span>All Rooms</span> <a class="btn btn-lg btn-success" href="{{ url()->current() }}/create">Add a new Room</a>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#all_rooms').DataTable();
        });
    </script>
@endsection