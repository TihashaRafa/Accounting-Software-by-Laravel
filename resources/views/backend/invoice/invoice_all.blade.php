@extends('admin.admin_master')

@section('admin')


<div class="page-content">
                    <div class="container-fluid">
                

<form id="invform" method="post">

    <div class="row" id="ibox_form">
        <div class="alert alert-danger" id="emsg" style="display: none;">
            <span id="emsgbody"></span>
        </div>

        <div class="col-md-12">


            <div class="panel">

                <div class="panel-hdr">
                    <h2> INV-00014 </h2>
                    <div class="panel-toolbar">
                        
                            <input type="hidden" name="invoice_id" value="">

                        <div class="btn-group">
                            <button class="btn btn-sm btn-primary waves-effect waves-themed" id="submit"> Save</button>
                            <button class="btn btn-sm btn-info waves-effect waves-themed" id="save_n_close"> Save &amp; Close</button>
                        </div>
                    </div>
                </div>

                <div class="panel-container">
                    <div class="panel-content">


                        <div class="row">
                            <div class="col-md-12">

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="user_title">Customer</label>

                    <select id="cid" name="cid" class="form-control select2-hidden-accessible" data-select2-id="cid" tabindex="-1" aria-hidden="true">
                        <option value="" data-select2-id="2">Select Contact...</option>
                        <option value="8"> Kloud Technologies -  MD Ashraf Hossain - ashraf.hossain@kloud.com.bd</option>
                        <option value="7"> Kloud Technologies -  Rubaiyat Bin Arif - rubaiyat.arif@kloud.com.bd</option>
                        <option value="6"> AmarStationery -  Raisuddin Faham - raisuddinfaham@gmail.com</option>
                        <option value="5"> Hashibul Hassan - hashibulhassan@fin.jnu.ac.bd</option>
                        <option value="4"> Hexagon Bdtech Limited -  Main Uddin - info@hexagonbdtech.com</option>
                        <option value="3"> Health Point BD -  Farhad Hossen Kayes - forhadbd902@gmail.com</option>
                        <option value="2"> SoftifyBD Ltd -  Mostaim Billah Murad - fahim.mugdho@gmail.com</option>
                        <option value="1"> Optimus Technologies -  Junaid Miaje - junaid@optimus.com.bd</option>
                                                
                        
                    
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 323.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-cid-container"><span class="select2-selection__rendered" id="select2-cid-container" role="textbox" aria-readonly="true" title="Select Contact...">Select Contact...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <span class="help-block"><a href="#" id="contact_add">| Or Add New Customer</a> </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="status">Status</label>

                                            <select id="status" name="status" class="form-control">

                                                <option value="Published">Published</option>
                                                <option value="Draft">Draft</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="currency">Currency</label>

                                            <select id="currency" name="currency" class="form-control">

                                             <option value="BDT" selected="" data-decimal-mark="." data-thousands-separator="," data-symbol="৳" data-symbol-first="yes">BDT</option>
                                             <option value="USD" data-decimal-mark="." data-thousands-separator="," data-symbol="$" data-symbol-first="yes">USD</option>
                                                    
                                            </select>

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="invoice_title">Title  <small><em>(optional)</em></small></label>

                                            <input type="text" class="form-control" id="invoice_title" name="title">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">


                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="address">Address</label>

                                            <textarea id="address" readonly="" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="invoicenum">Invoice Prefix</label>

                                            <input type="text" class="form-control" id="invoicenum" name="invoicenum" value="INV-">
                                        </div>

                                        <div class="mb-3">
                                            <label for="cn">Invoice #</label>

                                            <input type="text" class="form-control" id="cn" name="cn" value="00014">
                                            <span class="help-block">Keep it Blank to Generate Invoice Number Automatically</span>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <input type="hidden" name="receipt_number" id="receipt_number" value="">
                                        
                                        <div class="mb-3">
                                            <label for="show_quantity_as">Show quantity as</label>

                                            <input type="text" class="form-control" id="show_quantity_as" name="show_quantity_as" value="Qty">

                                        </div>

                                               <div class="mb-3">
                                                <label for="repeat">Repeat Every</label>

                                                <select class="form-control" name="repeat" id="repeat">
                                                    <option value="daily">Daily</option>
                                                    <option value="week1">Weekly</option>
                                                    <option value="weeks2">2 Weeks</option>
                                                    <option value="weeks3">3 Weeks</option>
                                                    <option value="weeks4">4 Weeks</option>
                                                    <option value="month1" selected="">Month</option>
                                                    <option value="months2">2 Months</option>
                                                    <option value="months3">3 Months</option>
                                                    <option value="months6">6 Months</option>
                                                    <option value="year1">Year</option>
                                                    <option value="years2">2 Years</option>
                                                    <option value="years3">3 Years</option>
                                                </select>
                                            </div>
                              
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="idate">Invoice Date</label>

                                            <input type="text" class="form-control" id="idate" name="idate" datepicker="" data-date-format="yyyy-mm-dd" data-auto-close="true" value="2023-03-05">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="duedate">Payment Terms</label>
                                            
                                                <select class="form-control" name="duedate" id="duedate">
                                                    <option value="due_on_receipt" selected="">Due On Receipt</option>
                                                    <option value="days3">+3 days</option>
                                                    <option value="days5">+5 days</option>
                                                    <option value="days7">+7 days</option>
                                                    <option value="days10">+10 days</option>
                                                    <option value="days15">+15 days</option>
                                                    <option value="days30">+30 days</option>
                                                    <option value="days45">+45 days</option>
                                                    <option value="days60">+60 days</option>
                                                </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        <div class="table-responsive mt-3">

                            
                                <table class="table table-bordered invoice-table" id="invoice_items">
                                    <thead>
                                    <tr>
                                        <th width="30%">Item Name</th>
                                        <th width="10%">Qty</th>
                                        <th width="15%">Price</th>
                                        <th colspan="2">Discount</th>
                                        <th width="20%">Tax</th>
                                        <th width="15%">Total</th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"></th>
                                        <th colspan="2">
                                        <label class="radio-inline">
                                            <input class="discountType" id="discountTypeP" type="radio" name="discount_type" value="p" checked=""> <span data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Percentage">%</span>
                                        </label>
                                        <label class="radio-inline">
                                            <input class="discountType" id="discountTypeF" type="radio" name="discount_type" value="f"> <span data-bs-toggle="tooltip" data-placement="top" title="" id="fixedDiscountText" data-bs-original-title="Fixed Amount">৳
                                        </span>
</label>  

                                        </th>
                                        <th colspan="2"></th>
                                    </tr>
                                    </thead>
                                    <tbody> <tr>
                                        <td>
                                <!-- <div class="redactor-box" role="application"><ul class="redactor-toolbar" id="redactor-toolbar-1" role="toolbar" style="position: relative; width: auto; top: 0px; left: 0px; visibility: visible;"><li><a href="#" class="re-icon re-html" rel="html" role="button" aria-label="HTML" tabindex="-1"></a></li><li><a href="#" class="re-icon re-formatting redactor-toolbar-link-dropdown" rel="formatting" role="button" aria-label="Formatting" tabindex="-1" aria-haspopup="true"></a></li><li><a href="#" class="re-icon re-bold" rel="bold" role="button" aria-label="Bold" tabindex="-1"></a></li><li><a href="#" class="re-icon re-italic" rel="italic" role="button" aria-label="Italic" tabindex="-1"></a></li><li><a href="#" class="re-icon re-link redactor-toolbar-link-dropdown" rel="link" role="button" aria-label="Link" tabindex="-1" aria-haspopup="true"></a></li><li><a href="#" class="re-icon re-unorderedlist" rel="unorderedlist" role="button" aria-label="&amp;bull; Unordered List" tabindex="-1"></a></li><li><a href="#" class="re-icon re-orderedlist" rel="orderedlist" role="button" aria-label="1. Ordered List" tabindex="-1"></a></li></ul><div class="redactor-editor" contenteditable="true" dir="ltr" style="min-height: 30px;"><p>&ZeroWidthSpace;</p></div><textarea class="form-control item_name" name="desc[]" rows="3" dir="ltr" style="display: none;"></textarea></div>
                                            <input type="hidden" name="item_code[]" value=""></td>
                                        <td><input type="text" class="form-control qty" value="" name="qty[]"></td>
                                        <td><input type="text" class="form-control item_price" name="amount[]" value=""></td>
                                        <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value="">
                                        </td>
                                        <td><select class="form-control taxed" name="taxed[]">
                                 <option value="0.00" selected="">None</option>
                                                 </select></td>

                                        <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>
                                    </tr> -->

                                    </tbody>
                                </table>

                        </div>
                        <!-- /table-responsive -->
                        <!-- <button type="button" class="btn btn-primary waves-effect waves-themed" id="blank-add"><i class="fal fa-plus"></i> Add blank Line</button>
                        <button type="button" class="btn btn-primary waves-effect waves-themed" id="item-add"><i class="fal fa-search"></i> Add Product OR Service</button>
                        <button type="button" class="btn btn-danger waves-effect waves-themed" id="item-remove" style="display: none;"><i class="fal fa-minus-circle"></i> Delete</button>
                        <br>
                        <br>
                        <hr> -->

                        <div class="row">
                            <div class="col-md-4 offset-md-8">
                                <table class="table invoice-total">
                                    <tbody>
                                    <tr>
                                        <td><strong>Sub Total :</strong></td>
                                        <td id="sub_total" class="amount">৳ 0.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Discount <span id="is_pt"></span> : </strong>
                                        </td>
                                        <td id="discount_amount_total" class="amount">৳ 0.00</td>
                                    </tr>
                                    <tr>
                                            <td><strong>TAX :</strong></td>
                                            <td id="taxtotal" class="amount">৳ 0.00</td>
                                        </tr> <tr>
                                        <td><strong>TOTAL :</strong></td>
                                        <td id="total" class="amount">৳ 0.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <hr>
                        <!-- <div class="redactor-box" role="application"><ul class="redactor-toolbar" id="redactor-toolbar-0" role="toolbar" style="position: relative; width: auto; top: 0px; left: 0px; visibility: visible;"><li><a href="#" class="re-icon re-html" rel="html" role="button" aria-label="HTML" tabindex="-1"></a></li><li><a href="#" class="re-icon re-formatting redactor-toolbar-link-dropdown" rel="formatting" role="button" aria-label="Formatting" tabindex="-1" aria-haspopup="true"></a></li><li><a href="#" class="re-icon re-bold" rel="bold" role="button" aria-label="Bold" tabindex="-1"></a></li><li><a href="#" class="re-icon re-italic" rel="italic" role="button" aria-label="Italic" tabindex="-1"></a></li><li><a href="#" class="re-icon re-deleted" rel="deleted" role="button" aria-label="Deleted" tabindex="-1"></a></li><li><a href="#" class="re-icon re-unorderedlist" rel="unorderedlist" role="button" aria-label="&amp;bull; Unordered List" tabindex="-1"></a></li><li><a href="#" class="re-icon re-orderedlist" rel="orderedlist" role="button" aria-label="1. Ordered List" tabindex="-1"></a></li><li><a href="#" class="re-icon re-outdent" rel="outdent" role="button" aria-label="< Outdent" tabindex="-1"></a></li><li><a href="#" class="re-icon re-indent" rel="indent" role="button" aria-label="> Indent" tabindex="-1"></a></li><li><a href="#" class="re-icon re-link redactor-toolbar-link-dropdown" rel="link" role="button" aria-label="Link" tabindex="-1" aria-haspopup="true"></a></li><li><a href="#" class="re-icon re-alignment redactor-toolbar-link-dropdown" rel="alignment" role="button" aria-label="Alignment" tabindex="-1" aria-haspopup="true"></a></li><li><a href="#" class="re-icon re-horizontalrule" rel="horizontalrule" role="button" aria-label="Insert Horizontal Rule" tabindex="-1"></a></li></ul><div class="redactor-editor redactor-placeholder" contenteditable="true" dir="ltr" style="min-height: 200px;" placeholder="Invoice Terms..."><p>&ZeroWidthSpace;</p></div><textarea class="form-control" name="notes" id="notes" rows="3" placeholder="Invoice Terms..." dir="ltr" style="display: none;"></textarea></div>
                        <br>
                        <input type="hidden" id="is_recurring" value="yes"> -->
                        
                    </div>
                </div>

            </div>

        </div>

    </div>

</form>

<input type="hidden" id="_lan_set_discount" value="Set Discount">
<input type="hidden" id="_lan_discount" value="Discount">
<input type="hidden" id="_lan_discount_type" value="Discount Type">
<input type="hidden" id="_lan_percentage" value="Percentage">
<input type="hidden" id="_lan_fixed_amount" value="Fixed Amount">
<input type="hidden" id="_lan_btn_save" value="Save">
<input type="hidden" id="_lan_no_results_found" value="No results found">





    </div>
</div>

@endsection