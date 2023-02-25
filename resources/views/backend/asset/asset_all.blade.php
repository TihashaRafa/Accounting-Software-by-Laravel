@extends('admin.admin_master')

@section('admin')

<div class="page-content">
        <div class="container-fluid"></div>


<div class="panel">
            <div class="panel-hdr">
                <h2>Add an asset</h2>
                <div class="panel-toolbar">
                                    </div>
            </div>
            <div class="panel-container">
                <div class="panel-content">
                <form method ="post" action= "{{ route('asset.store') }}" id="myForm" enctype="multipart/form-data">
                @csrf 


                        <div class="mb-3">
                            <label for="inputName">Name*</label>
                            <input class="form-control" id="inputName" name="name">
                        </div>
                        <div class="mb-3">
                            <label>Date purchased</label>
                            <input class="form-control" name="date_purchase" type="date" datepicker="" data-date-format="yyyy-mm-dd" data-auto-close="true" value="2023-02-25">
                        </div>
                        <div class="mb-3">
                            <label>Supported until / Warranty</label>
                            <input class="form-control" name="date_ultil" type="date" datepicker="" data-date-format="yyyy-mm-dd" data-auto-close="true" value="2024-02-25">
                        </div>
                        <div class="mb-3">
                            <label for="inputPrice">Price</label>
                            <input class="form-control amount" id="inputPrice" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="inputSerial">Serial</label>
                            <input class="form-control" id="inputSerial" name="serial">
                        </div>
                        <div class="mb-3">
                            <label>Category</label>
                            <select class="form-control" name="catagory">
                                <option>None</option>
                                <option>Electronics</option>
                                <option>Software</option>
                                <option>Service</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Note</label>
                            <textarea class="form-control" rows="10" name="note"></textarea>
                        </div>
                        <div class="mb-3">
                       <button class="btn btn-primary waves-effect waves-themed" id="btnSubmit" type="submit">Save</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
        </div>
        </div>
@endsection