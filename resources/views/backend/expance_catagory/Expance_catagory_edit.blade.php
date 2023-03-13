@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">

    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="panel-title">Edit Categories</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                    <form method="post" action="{{ route('expance_catagory.update') }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                         <input type="hidden" name="id" value="{{ $expance_catagory->id }}" >
                            <div class="mb-3">
                                <label for="name">Name</label>

                                <input type="text" class="form-control" id="name" name="Expance_catagory_name" value="{{ $expance_catagory-> Expance_catagory_name  }}">
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
                    <h2 class="panel-title">Delete</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                    <p>Deleting Categories will rename all transactions under this category to Uncategorized </p>
                        
                <button type="submit" class="btn btn-danger waves-effect waves-themed">Delete</button>
            
                    </div>

                </div>
            </div>
        </div>

        
    </div>
    </div>
    </div>

@endsection