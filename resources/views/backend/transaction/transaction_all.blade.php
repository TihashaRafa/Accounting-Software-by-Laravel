@extends('admin.admin_master')

@section('admin')

<div class="page-content">
                    <div class="container-fluid">



<div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">



                        <div class="row">
                            <div class="col-md-3 col-sm-6">

                            <form method ="post" action= "{{ route('transaction.store') }}" id="myForm" enctype="multipart/form-data">
                                            @csrf 

                                    <div class="mb-3">
                                        <label for="reportrange">Date Range</label>
                                        <input type="date" name="daterange" class="form-control" id="reportrange">
                                    </div>

                                    <div class="mb-3">
                                        <label for="tr_type">Transaction Type</label>
                                        <select id="tr_type" name="transactionType" class="form-control">
                                            <option>All</option>
                                            <option>Income</option>
                                            <option>Expense</option>
                                            <option>Transfer</option>
                                            <option>Equity</option>
                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <label for="account">Account</label>
                                        <select id="account" name="amount" class="form-control select2-hidden-accessible" data-select2-id="account" tabindex="-1" aria-hidden="true">
                                            <option>All</option>
                                            <option>bKash Merchant</option>
                                            <option>City Bank</option>
                                            <option>Nagad Merchant</option>
                                            <option>aamarPay</option>
                                            <option>(Publicia) Nagad Personal</option>
                                            <option>(Publicia) Brac Bank</option>
                                            <option>Cash</option>
                                            <option>PayPal (business@limda.net)</option>
</select>
                                    </div>


                                    <div class="mb-3">
                                        <label for="cid">Contact</label>
                                        <select id="cid" name="contact" class="form-control select2-hidden-accessible" data-select2-id="cid" tabindex="-1" aria-hidden="true">
                                            <option>All</option>
                                            <option>MD Ashraf Hossain - ashraf.hossain@kloud.com.bd</option>
                                            <option>Rubaiyat Bin Arif - rubaiyat.arif@kloud.com.bd</option>
                                            <option>Raisuddin Faham - raisuddinfaham@gmail.com</option>
                                            <option>Hashibul Hassan - hashibulhassan@fin.jnu.ac.bd</option>
                                            <option>Main Uddin - info@hexagonbdtech.com</option>
                                            <option>Farhad Hossen Kayes - forhadbd902@gmail.com</option>
                                            <option>Mostaim Billah Murad - fahim.mugdho@gmail.com</option>
                                            <option>Junaid Miaje - junaid@optimus.com.bd</option>
                                            
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="category">Category</label>
                                        <select id="category" name="catagory" class="form-control select2-hidden-accessible" data-select2-id="category" tabindex="-1" aria-hidden="true">
                                            <option>All</option>
                                            <option>Advertising</option>
                                            <option>Bank and Credit Card Interest</option>
                                            <option>Car and Truck</option>
                                            <option>Commissions and Fees</option>
                                            <option>Contract Labor</option>
                                            <option>Contributions</option>
                                            <option>Cost of Goods Sold</option>
                                            <option>Credit Card Interest</option>
                                            <option>Depreciation</option>
                                            <option>Dividend Payments</option>
                                            <option>Employee Benefit Programs</option>
                                            <option>Entertainment</option>
                                            <option>Gift</option>
                                            <option>Insurance</option>
                                            <option>Legal, Accountant &amp; Other Professional Services</option>
                                            <option>Meals</option>
                                            <option>Mortgage Interest</option>
                                            <option>Non-Deductible Expense</option>
                                            <option>Other Business Property Leasing</option>
                                            <option>Owner Draws</option>
                                    
                                            
                                        </select>
                                    </div>

                                    <input type="submit" class="btn btn-rounded btn-info waves-effect waves-light" value="Transaction Filter">
                        </form>
                        
                        <br>
                            </div>




                            <!-- output start here   -->
                            <div class="col-md-9 col-sm-6 ib_right_panel">


                                <div class="table-responsive" id="ib_data_panel" style="position: static; zoom: 1;">


                                    <div id="ib_dt_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row mb-3"><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-start"><div class="dataTables_length" id="ib_dt_length"><label>Show <select name="ib_dt_length" aria-controls="ib_dt" class="form-control custom-select"><option value="10">10 rows</option><option value="25">25 rows</option><option value="50">50 rows</option><option value="-1">Show all</option></select> entries</label></div></div><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end"><div class="dt-buttons">          <button class="btn buttons-pdf buttons-html5 btn-danger btn-sm mr-1" tabindex="0" aria-controls="ib_dt" type="button" title="Generate PDF"><span>PDF</span></button> <button class="btn buttons-excel buttons-html5 btn-success btn-sm mr-1" tabindex="0" aria-controls="ib_dt" type="button" title="Generate Excel"><span>Excel</span></button> <button class="btn buttons-csv buttons-html5 btn-primary btn-sm mr-1" tabindex="0" aria-controls="ib_dt" type="button" title="Generate CSV"><span>CSV</span></button> <button class="btn buttons-copy buttons-html5 btn-dark btn-sm mr-1" tabindex="0" aria-controls="ib_dt" type="button" title="Copy to clipboard"><span>Copy</span></button> <button class="btn buttons-print btn-secondary btn-sm" tabindex="0" aria-controls="ib_dt" type="button" title="Print Table"><span>Print</span></button> </div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 745px; padding-right: 17px;"><table class="table table-bordered table-hover display dataTable" role="grid" style="margin-left: 0px; width: 745px;"><thead>
                                        <tr class="heading" role="row"><th class="sorting sorting_desc" tabindex="0" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 19px;" aria-sort="descending" aria-label="ID: activate to sort column ascending">ID</th><th class="sorting" tabindex="0" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 54px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 54px;" aria-label="Account: activate to sort column ascending">Account</th><th class="sorting" tabindex="0" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 32px;" aria-label="Type: activate to sort column ascending">Type</th><th class="text-end sorting" tabindex="0" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 53px;" aria-label="Amount: activate to sort column ascending">Catagory</th><th class="sorting" tabindex="0" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 76px; display: none;" aria-label="Description: activate to sort column ascending">Description</th><th class="text-end sorting" tabindex="0" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 36px; display: none;" aria-label="
                                                Dr.
                                                (BDT)
                                            : activate to sort column ascending">
                                                Dr.
                                                (BDT)
                                            </th><th class="text-end sorting" tabindex="0" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 39px; display: none;" aria-label="
                                                Cr.
                                                (BDT)
                                            : activate to sort column ascending">
                                                Cr.
                                                (BDT)
                                            </th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 53px; display: none;" aria-label="Manage">Manage</th></tr>
                                        </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-bordered table-hover display dataTable dtr-inline collapsed" id="ib_dt" role="grid" aria-describedby="ib_dt_info" style="width: 745px;"><thead>
                                        <tr class="heading" role="row" style="height: 0px;"><th class="sorting sorting_desc" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 19px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="descending" aria-label="ID: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">ID</div></th><th class="sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 54px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Date: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Date</div></th><th class="sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 54px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Account: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Account</div></th><th class="sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 32px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Type: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Type</div></th><th class="text-end sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 53px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Amount: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Amount</div></th><th class="sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 76px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Description: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Description</div></th><th class="text-end sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 36px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="
                                                Dr.
                                                (BDT)
                                            : activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                Dr.
                                                (BDT)
                                            </div></th><th class="text-end sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 39px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="
                                                Cr.
                                                (BDT)
                                            : activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                Cr.
                                                (BDT)
                                            </div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 53px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Manage"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Manage</div></th></tr>
                                        </thead><tfoot>
                                        <tr style="height: 2px;"><th colspan="6" style="text-align: right; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 505px;" rowspan="1"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Total:</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 58px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">0.00</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 61px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">21714.00</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 53px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th></tr>
                                        </tfoot>
                                        

                                        

                                    <tbody>
                                    <table class="table table-bordered table-striped sys_table">
                                <thead style="background:#f0f2ff">
                                
                                </thead>
                                <tbody>
                                @foreach($transaction as $key =>$items)

                                    <tr>

                                        <td class="h6">{{ $items->id }} </td>
                                        <td class="h6">{{ $items->daterange }} </td>
                                        <td class="h6">{{ $items->amount }} </td>
                                        <td class="h6">{{ $items->transactionType }} </td>
                                        <td class="h6">{{ $items->catagory }} </td>
                                   
                                        
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


    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

                            <!-- output end here   -->

    @endsection