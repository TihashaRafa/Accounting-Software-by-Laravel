@extends('admin.admin_master')

@section('admin')



<div class="page-content">
    <div class="container-fluid">
                
    <div class="container">
    <br>
    <h1 class="text-center text-primary"><ul>Calendar</ul></h1>
    <br>

    <div id="calendar"></div>

</div>

<script>
    $(document).ready(function (){

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });

        var calendar = $('.calendar').fullCalendar();

    });
</script>




</div>
</div>

@endsection