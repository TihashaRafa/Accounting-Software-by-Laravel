@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="widget-1 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="panel-hdr">
                        <h2 class="panel-title">Payment Method</h2>
                    </div>
                    <div class="panel-container">
                        <div class="panel-content">


                            <form method="post" action="{{ route('PaymentMethod.store') }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name">Add</label>
                                    <input type="text" class="form-control" id="payment_method_name" name="payment_method_name">
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
                        <h2 class="panel-title">Manage Categories</h2>
                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <span id="resp">Drag &amp; drop the Items below for Repositioning. Click to Edit.</span>
                            <br>
                            <br>
                            @foreach($payment_method as $items)
                            <ol class="rounded-list ui-sortable" id="sorder">
                                {{$items-> id}} .

                                <a href="{{ route('PaymentMethod.edit', $items->id) }}"> {{$items-> payment_method_name}} </a>

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