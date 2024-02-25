@extends('layouts.admin.index')

@section('sidebar')
    <div class="col-md-2">
        @include('layouts/admin/sidebar')
    </div>
@endsection

@section('content')
    <div class="col-md-10">
        @include($address)
    </div>
@endsection

@section('js')
    <script>
        function destroyUser(event, $id) {
    
            event.preventDefault();
            document.querySelector('#userDelete-' + $id).submit();
        }
    </script>
@endsection
