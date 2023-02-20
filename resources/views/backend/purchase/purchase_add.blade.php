@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Add Product </h4>


                                    <div class="row">
        <div class="col-md-4">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Date</label>
                 <input class="form-control example-date-input" name="date" type="date"  id="date">
            </div>
        </div>

        <div class="col-md-4">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Purchase No</label>
                 <input class="form-control example-date-input" name="purchase_no" type="text"  id="purchase_no">
            </div>
        </div>


        <div class="col-md-4">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Supplier Name </label>
                <select id="supplier_id" name="supplier_id" class="form-select" aria-label="Default select example">
                <option selected="">Open this select menu</option>
                @foreach($supplier as $supp)
                <option value="{{ $supp->id }}">{{ $supp->name }}</option>
               @endforeach
                </select>
            </div>
        </div>


       <div class="col-md-4">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Customer Name </label>
                <select name="customer_id" id="customer_id" class="form-select" aria-label="Default select example">
                <option selected="">Open this select menu</option>
                
                </select>

                </select>
            </div>
        </div>


         <div class="col-md-4">
            <div class="md-3">
                <label for="example-text-input" class="form-label">Company Name </label>
                <select name="company_id" id="company_id" class="form-select" aria-label="Default select example">
                <option selected="">Open this select menu</option>

                
                </select>
            </div>
        </div>


       

        <div class="col-md-4">
    <div class="md-3">
        <label for="example-text-input" class="form-label" style="margin-top:43px;">  </label>


        <i class="btn btn-secondary btn-rounded waves-effect waves-light fas fa-plus-circle addeventmore"> Add More</i>
    </div>
</div>


    </div> <!-- // end row  -->


                                       
                                </div>



<div class="card-body">
    <form action="" method="">
        @csrf
        <table class="table-sm table-bordered" width="100%" style="border-color: #ddd; ">
            <thead>
                <tr>    
                    <th>customer</th>
                    <th>Product name</th>
                    <th>PSC/KG</th>
                    <th>Unit Price</th>
                    <th>Description</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <tbody id="addRow" class="addRow">

                </tbody>

                <tbody>
                    <tr>
                        <td colspan="5"></td>
                        <td>
                            <input type="text" name="estimated_amount" value="0" id="estimated_amount" class="form-control estimated_amount" readonly style="background-color: #ddd;" >
                        </td>
                        <td></td>
                    </tr>

                </tbody> 
        </table> <br>
        <div class="form-group">
                <button type="submit" class="btn btn-info" id="storeButton"> Purchase Store</button>

            </div>
    </form>

</div>

                            </div> <!-- end col -->
                        </div>

</div>
</div>


<script id="document-template" type="text/x-handlebars-template">

<tr class="delete_add_more_item" id="delete_add_more_item">
        <input type="hidden" name="date[]" value="@{{date}}">
        <input type="hidden" name="purchase_no[]" value="@{{purchase_no}}">
        <input type="hidden" name="supplier_id[]" value="@{{supplier_id}}">

    <td>
        <input type="hidden" name="customer_id[]" value="@{{customer_id}}">
        @{{ customer_name }}
    </td>

     <td>
        <input type="hidden" name="company_id[]" value="@{{company_id}}">
        @{{ company_name }}
    </td>

     <td>
        <input type="number" min="1" class="form-control buying_qty text-right" name="buying_qty[]" value=""> 
    </td>

    <td>
        <input type="number" class="form-control unit_price text-right" name="unit_price[]" value=""> 
    </td>

 <td>
        <input type="text" class="form-control" name="description[]"> 
    </td>

     <td>
        <input type="number" class="form-control buying_price text-right" name="buying_price[]" value="0" readonly> 
    </td>

     <td>
        <i class="btn btn-danger btn-sm fas fa-window-close removeeventmore"></i>
    </td>

    </tr>

</script>



<script type="text/javascript">
    $(document).ready(function(){
        $(document).on("click",".addeventmore", function(){
            var date = $('#date').val();
            var purchase_no = $('#purchase_no').val();
            var supplier_id = $('#supplier_id').val();
            var customer_id  = $('#customer_id').val();
            var customer_name = $('#customer_id').find('option:selected').text();
            var company_id = $('#company_id').val();
            var company_name = $('#company_id').find('option:selected').text();
            if(date == ''){
                $.notify("Date is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }
                  if(purchase_no == ''){
                $.notify("Purchase No is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }
                  if(supplier_id == ''){
                $.notify("Supplier is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }
                  if(customer_id == ''){
                $.notify("Category is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }
                  if(company_id == ''){
                $.notify("Product Field is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }
                 var source = $("document-template").html();
                 var source = $("#document-template").html();
                 var tamplate = Handlebars.compile(source);
                 var data = {
                    date:date,
                    purchase_no:purchase_no,
                    supplier_id:supplier_id,
                    customer_id:customer_id,
                    customer_name:customer_name,
                    company_id:company_id,
                    company_name:company_name
                 };
                 var html = tamplate(data);
                 $("#addRow").append(html); 
        });

 })
  
</script>


<script type="text/javascript">
    $(function(){
        $(document).on('change','#customer_id',function(){
            var customer_id = $(this).val();
            $.ajax({
                url:"{{ route('get-company') }}",
                type: "GET",
                data:{customer_id:customer_id},
                success:function(data){
                    var html = '<option value="">Select customer</option>';
                    $.each(data,function(key,v){
                        html += '<option value=" '+v.id+' "> '+v.name+'</option>';
                    });
                    $('#company_id').html(html);
                }
            })
        });
    });
</script>


<script type="text/javascript">
    $(function(){
        $(document).on('change','#supplier_id',function(){
            var supplier_id = $(this).val();
            $.ajax({
                url:"{{ route('get-customer') }}",
                type: "GET",
                data:{supplier_id:supplier_id},
                success:function(data){
                    var html = '<option value="">Select customer</option>';
                    $.each(data,function(key,v){
                        html += '<option value=" '+v.customer_id+' "> '+v.customer.name+'</option>';
                    });
                    $('#customer_id').html(html);
                }
            })
        });
    });
</script>

@endsection