@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="widget-1 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="panel-hdr">
                        <h2 class="panel-title">Payer Add</h2>
                    </div>
                    <div class="panel-container">
                        <div class="panel-content">


                            <form method="post" action="{{ route('payer.store') }}" id="myForm" enctype="multipart/form-data">
                                @csrf


                                <div class="mb-3">
                                    <label for="name">Payer Name</label>
                                    <input type="text" class="form-control" id="payer_name" name="payer_name">
                                </div>


                                <button type="submit" class="btn btn-primary waves-effect waves-themed">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div> <!-- Widget-1 end-->

            <div class="widget-1 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="panel-hdr">
                        <h2 class="panel-title">Manage Payer</h2>
                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <span id="resp">Drag &amp; drop the Items below for Repositioning. Click to Edit.</span>
                            <br>
                            <br>
                            @foreach($payer as $items)
                            <ol class="rounded-list ui-sortable" id="sorder">
                                {{$items-> id}} .

                                <a href="{{ route('payer.edit', $items->id) }}"> {{$items-> payer_name}} </a>

                            </ol>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
            <!-- Widget-2 end-->
        </div>


    </div>
</div>


@endsection