@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="panel-hdr">
                        <h2>Add Expance</h2>

                    </div>
                    <div class="panel-container" id="ibox_form">

                        <div class="panel-content">

                            <div class="alert alert-danger" id="emsg" style="display: none;">
                                <span id="emsgbody"></span>
                            </div>

                            <form method="post" action="{{ route('expance.store') }}" id="myForm" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Account</label>
                                    <select name="account_id">
                                        @foreach ($account as $acc)
                                        <option value="{{ $acc->id }}">{{ $acc->account_id }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Code</label>
                                    <input type="text" name="code" class="form-control select2-hidden-accessible" placeholder="INC-00073" value="" id="example-text-input">
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Date</label>
                                    <input type="date" name="date" class="form-control select2-hidden-accessible" value="" id="example-text-input">
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Description</label>
                                    <input type="text" name="description" class="form-control select2-hidden-accessible" value="" id="example-text-input">
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Currency</label>
                                    <select id="currency" name="currency" class="form-control select2-hidden-accessible">
                                        <option>BDT</option>
                                        <option>USD</option>
                                    </select>
                                </div>


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Amount</label>
                                    <input type="text" name="amount" class="form-control select2-hidden-accessible" value="" id="example-text-input">
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Catagory</label>
                                    <select id="catagory" name="Expance_catagory_name" class="form-control select2-hidden-accessible">
                        
                                        @foreach ($ExpanceCatagory as $excat)
                                        <option value="{{ $excat->id }}">{{ $excat->Expance_catagory_name  }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Tags</label>
                                    <input type="text" name="tags" class="form-control select2-hidden-accessible" value="">
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">company</label>
                                    <select name="company_name">
                                        @foreach ($company as $com)
                                        <option value="{{ $com->id }}">{{ $com->company_name  }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Payer</label>
                                    <select id="payer" name="payer_name" class="form-control select2-hidden-accessible">
                                    @foreach ($payer as $pay)
                                        <option value="{{ $pay->id }}">{{ $pay->payer_name  }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Staff</label>
                                    <select name="staff_id">
                                     @foreach ($staff as $stf)
                                        <option value="{{ $stf->id }}"> {{ $stf->staff_id }}</option>
                                             @endforeach
                                    </select>

                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Method</label>
                                    <select id="method" name="payment_method_name" class="form-control select2-hidden-accessible">
                                    @foreach ($PaymentMethod as $met)
                                        <option value="{{ $met->id }}">{{ $met->payment_method_name  }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Status</label>
                                    <input type="text" name="status" class="form-control select2-hidden-accessible" value="">
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-from-label">Ref#</label>
                                    <input type="text" name="ref" class="form-control select2-hidden-accessible" value="">
                                </div>


                                <input type="submit" class="btn btn-rounded btn-info waves-effect waves-light" value="Add Expance">
                            </form>

                        </div>





                    </div>
                </div>



                <!-- show all data -->

            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="panel-hdr">
                        <h2>Recent Expance</h2>

                    </div>

                    <div class="panel-container">
                        <div class="panel-content">

                            <table class="table table-bordered table-striped sys_table">
                                <thead style="background:#f0f2ff">
                                    <tr>
                                        <th class="h6">Account</th>
                                        <th class="h6" width="50%">Description</th>
                                        <th class="h6">Amount</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($expance as $items)

                                    <tr>

                                        <td class="h6">{{ $items->account_id }} </td>
                                        <td >
                                        <span class="text-info"> {{ $items->description }} </span></a> <br>
                                            <span class="text-info"> {{ $items->code }} </span></a> <br>
                                            <span class="text-info"> {{ $items->company_name }} </span></a> <br>

                                            <br>

                                        </td>

                                        <td class="amount text-success h6" data-a-sign="৳" data-a-sep="," data-a-dec="." data-p-sign="p">{{ $items-> amount }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>




        </div>
    </div>
</div>
<!-- show all data end -->

@endsection