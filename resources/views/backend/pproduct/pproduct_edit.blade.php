@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">


<div class="row">

        <div class="col-lg-8">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>
                     Add Product
                    </h2>

                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <div class="alert alert-danger" id="emsg" style="display: none;">
                            <span id="emsgbody"></span>
                        </div>

                       <form method ="post" action= "{{ route('pproduct.update')}}" id="myForm" enctype="multipart/form-data">
                        @csrf 

                        <input type="hidden" name="id" value="{{ $products->id }}" >

                            <div class="mb-3"><label for="name">Name*</label>
                                <input type="text" id="name" value="{{ $products->name }}" name="name" class="form-control" autocomplete="off">
                            </div>

                            
                                <div class="mb-3"><label for="cost_price">Cost Price</label>

                                    <input type="text" id="cost_price" value="{{ $products->cost_price }}" name="cost_price" class="form-control amount" autocomplete="off" data-a-sign="৳ " data-a-dec="." data-a-sep="," data-d-group="3">
                                </div>

                            
                            <div class="mb-3"><label for="sales_price">Sales Price</label>

                                <input type="text" id="sales_price" value="{{ $products->sale_price }}" name="sale_price" class="form-control amount" autocomplete="off" data-a-sign="৳ " data-a-dec="." data-a-sep="," data-d-group="3">
                            </div>

                            <div class="mb-3"><label for="item_number">Item Number</label>

                                <input type="text" id="item_number" value="0023" value="{{ $products->item_number }}" name="item_number" class="form-control" autocomplete="off">
                            </div>



                            <div class="mb-3">

                                <label for="tax_code">
                                    TAX Code
                                </label>

                                <input type="text" id="tax_code" value="{{ $products->tax_code }}" name="tax_code" class="form-control" autocomplete="off">
                            </div>
                            
                            <div class="mb-3"><label for="description">Description</label>

                            <div class="redactor-box" role="application">
                              <div class="redactor-editor" contenteditable="true" dir="ltr" style="min-height: 200px;"><p>&ZeroWidthSpace;</p></div><textarea id="description" value="{{ $products->description }}" name="description" class="form-control" rows="3" dir="ltr" style="display: none;"></textarea></div>
                            </div>

                            <hr>                            
                                <div class="mb-3"><label for="inventory">Inventory To Add/Subtract</label>

                                    <input type="text" id="inventory" value="{{ $products->inventory }}" name="inventory" class="form-control" autocomplete="off">
                                </div>


                                <div class="mb-3"><label for="unit">Unit</label>

                                    <select class="form-control" value="{{ $products->unit }}" id="unit" name="unit">
                                        <option>Unit-1</option>
                                        <option>Unit-2</option>
                                        <option>Unit-3</option>
                                    </select>
                                </div>
                                <div class="mb-3">

                                    <label for="sku">SKU</label>

                                    <input type="text" id="sku" value="{{ $products->sku }}" name="sku" class="form-control" autocomplete="off">
                                </div>

                                <div class="mb-3">

                                    <label for="width">Size</label>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" id="width" name="width" value="{{ $products->width }}" placeholder="Width" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="lenght" value="{{ $products->length }}" name="length" class="form-control" placeholder="Length" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="height" value="{{ $products->height }}" name="height" class="form-control" placeholder="Height" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="weight" value="{{ $products->weight }}" name="weight" class="form-control" placeholder="Weight" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">

                                    <label for="color">Color</label>

                                    <input type="text" id="color" value="{{ $products->color }}" name="color" class="form-control" autocomplete="off">
                                </div>                          

                            <input type="hidden" id="type" name="type" value="Product">
                            <input type="hidden" name="file_link" id="file_link" value="">



                            <div class="mb-3">
                                <button class="btn btn-primary waves-effect waves-themed" type="submit" id="submit">Submit</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-hdr">
                   <h2>Image</h2>
                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                    

<input type="file" id="inventory" name="image" class="form-control" autocomplete="off">
</div>
                    </div>



                </div>
            </div>
        </div>


    </div>
    </div>
    </div>

 @endsection   