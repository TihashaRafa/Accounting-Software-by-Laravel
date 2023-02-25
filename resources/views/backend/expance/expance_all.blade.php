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

                        <form method ="post" action= "{{ route('expance.store') }}" id="myForm" enctype="multipart/form-data">
                                            @csrf 

                         <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-from-label">Account</label>
                                <select id="account" name="account" class="form-control select2-hidden-accessible">
                                    <option>Choose an Account</option>
                                    <option>bKash Merchant</option>
                                    <option>City Bank</option>
                                    <option>Nagad Merchant</option>
                                    <option>aamarPay</option>
                                    <option>(Publicia) bKash Personal</option>
                                    <option>(Publicia) Nagad Personal</option>
                                    <option>(Publicia) Brac Bank</option>
                                    <option>Cash</option>
                                    <option>PayPal (business@limda.net)</option>
                                </select>
                        
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Code</label>    
                                     <input type="text" name="code" class="form-control select2-hidden-accessible" placeholder="INC-00073" value="" id="example-text-input">
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Date</label>    
                                     <input type="date" name="date"  class="form-control select2-hidden-accessible" value="" id="example-text-input">
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
                                     <input type="text" name="amount"  class="form-control select2-hidden-accessible" value="" id="example-text-input">
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Catagory</label>    
                                <select id="catagory" name="catagory" class="form-control select2-hidden-accessible">
                                        <option value="Uncategorized" data-select2-id="6">Uncategorized</option>
					                    <option value="Uncategorized">Uncategorized</option>
                                        <option value="Regular Income">Regular Income</option>
                                        <option value="Selling Software">Selling Software</option>
                                        <option value="Part Time Work">Part Time Work</option>
                                        <option value="Account Transfer">Account Transfer</option>
                                        <option value="Home equity">Home equity</option>
                                        <option value="Rent &amp; Royalties">Rent &amp; Royalties</option>
                                        <option value="Equities">Equities</option>
                                        <option value="Salary">Salary</option>
                                        <option value="Other Income">Other Income</option>
                                        <option value="Expense Refund">Expense Refund</option>
                                        <option value="Interest Income">Interest Income</option>
                                        <option value="Owner Contribution">Owner Contribution</option>   
                            </select>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Tags</label>    
                                     <input type="text" name="tags"  class="form-control select2-hidden-accessible" value="" >
                            </div>

                                <div class="row mb-3"> 
                                    <label for="example-text-input" class="col-sm-2 col-from-label">company</label>
                                 <select id="company" name="company" class="form-control select2-hidden-accessible">
                                    <option>None</option>
                                    <option>Optimus Technologies</option>
                                    <option>SoftifyBD Ltd</option>
                                    <option>Limda Host</option>
                                    <option>Health Point BD</option>
                                    <option>Hexagon Bdtech Limited</option>
                                    <option>AmarStationery</option>
                                    <option>Kloud Technologies</option>
                                </select>
                                    </div>

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Payee</label>
                                    <select id="payee" name="payee" class="form-control select2-hidden-accessible">
                                        <option>Choose Contact</option>
                                        <option>Junaid Miaje</option>
                                        <option>Mostaim Billah Murad</option>
                                        <option>Farhad Hossen Kayes</option>
                                        <option>Main Uddin</option>
                                        <option>Hashibul Hassan</option>
                                        <option>Raisuddin Faham</option>
                                        <option>Rubaiyat Bin Arif</option>
                                        <option>MD Ashraf Hossain</option>
                                    </select>
                                    </div>

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Staff</label>
                                         <select id="staff" name="staff" class="form-control select2-hidden-accessible">
                                        <option>None</option>
                                        <option>Junaid Miaje</option>
                                        <option>Tahmiduzzama Rafi</option>
                                    </select>
                                    </div>

                                    <div class="row mb-3"> 
                                     <label for="example-text-input" class="col-sm-2 col-from-label">Method</label>
                                         <select id="method" name="method" class="form-control select2-hidden-accessible">
                                        <option value="" data-select2-id="8">Select Payment Method</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Check">Check</option>
                                        <option value="Credit Card">Credit Card</option>
                                        <option value="Debit">Debit</option>
                                        <option value="Electronic Transfer">Electronic Transfer</option>
                                        <option value="Paypal">Paypal</option>
                                        <option value="ATM Withdrawals">ATM Withdrawals</option>
                                        <option value="bKash Merchant">bKash Merchant</option>
                                        <option value="Nagad Merchant">Nagad Merchant</option>
                                        <option value="City Bank (Limda Host)">City Bank (Limda Host)</option>
                                        <option value="Brac Bank (CITBD)">Brac Bank (CITBD)</option>
                                        <option value="City Bank (Optimus Technologies)">City Bank (Optimus Technologies)</option>
                                        <option value="aamarPay">aamarPay</option>
                                    </select>
                                    </div>

                                    <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Status</label>    
                                     <input type="text" name="status" class="form-control select2-hidden-accessible" value="" >
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-from-label">Ref#</label>    
                                     <input type="text" name="ref" class="form-control select2-hidden-accessible" value="" >
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
                                @foreach($expance as $key =>$items)

                                    <tr>

                                        <td class="h6">{{ $items->account }} </td>
                                        <td class="h6 text-info"><a href="https://portal.optimus.com.bd/?ng=transactions/manage/83/">
                                           <span class="text-info"> {{ $items->description }} </span></a>  <br>
                                           <span class="text-info"> {{ $items->code }} </span></a>  <br>
                                           <span class="text-info"> {{ $items->company }} </span></a>  <br>
                                        
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