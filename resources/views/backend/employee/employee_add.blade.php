
@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">


<div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <div class="panel-hdr">
                        <h2>Add an employee</h2>
                    </div>

                 <div class="panel-container">
                     <div class="panel-content">
                        

                         <form method ="post" action= "{{ route('employee.store') }}" id="myForm" enctype="multipart/form-data">
                                            @csrf 
                             <div class="mb-3">
                                 <label for="inputName">Name</label>
                                 <input class="form-control"   type="text" id="inputName" name="name">
                             </div>


                             <div class="mb-3">
                                 <label>Email</label>
                                 <input class="form-control"   type="email" name="email">
                             </div>

                             <div class="mb-3">
                                 <label>Phone</label>
                                 <input class="form-control" type="text" name="phone">
                             </div>


                             <div class="mb-3">
                                 <label>Department</label>
                                 <select class="custom-select" name="department">
                                     <option>Customer Support</option>   
                                     <option>sales</option>   
                                     <option>Development</option>   
                                </select>
                             </div>


                             <div class="mb-3">
                                 <label>Job title</label>
                                 <input class="form-control" name="job_title">
                             </div>

                             <div class="mb-3">
                                 <label>Address</label>
                                 <input class="form-control" name="address">
                             </div>

                             <div class="mb-3">
                                 <label>City</label>
                                 <input class="form-control" name="city">
                             </div>

                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="mb-3">
                                         <label>State/Region</label>
                                         <input class="form-control" name="state">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="mb-3">
                                         <label>ZIP/Postal Code</label>
                                         <input class="form-control" name="zip">
                                     </div>
                                 </div>
                             </div>

 <div class="mb-3">
    <label>Country</label>
<select class="form-control" name="country">
                                                                              
	<option>Afghanistan</option>
	<option>Aland Islands</option>
	<option>Albania</option>
	<option>Algeria</option>
	<option>American Samoa</option>
	<option>Andorra</option>
	<option>Angola</option>
	<option>Anguilla</option>
	<option>Antarctica</option>
	<option>Antigua And Barbuda</option>
	<option>Argentina</option>
	<option>Armenia</option>
	<option>Aruba</option>
	<option>Australia</option>
	<option>Austria</option>
	<option>Azerbaijan</option>
	<option>Bahamas</option>
	<option>Bahrain</option>
	<option>Bangladesh</option>
	<option>Barbados</option>
	<option>Belarus</option>
	<option>Belgium</option>
	<option>Belize</option>
	<option>Benin</option>
	<option>Bermuda</option>
	<option>Bhutan</option>
	<option>Bolivia</option>
	<option>Bosnia And Herzegovina</option>
	<option>Botswana</option>
	<option>Bouvet Island</option>
	<option>Brazil</option>
	<option>British Indian Ocean Territory</option>
	<option>Brunei Darussalam</option>
	<option>Bulgaria</option>
	<option>Burkina Faso</option>
	<optio>Burundi</option>
</select>
            </div>

                            <div class="mb-3">
                                 <label>Date joined</label>
                                 <input type="date" class="form-control" name="date" data-date-format="yyyy-mm-dd" data-auto-close="true">
                             </div>

                             <div class="mb-3">
                                 <label>Pay frequency</label>
                                 <select class="form-control" name="pay">
                                     <option value="Monthly">Monthly</option>
                                     <option value="Hourly">Hourly</option>
                                 </select>
                             </div>


                             <div class="mb-3">
                                 <label>Amount</label>
                                 <input class="form-control amount" name="amount">
                             </div>


                             <div class="mb-3">
                                 <label>Summary</label>
                                 <textarea class="form-control" rows="10" name="summary"></textarea>
                             </div>

                             <div class="mb-3">
                                 <label>Facebook Profile</label>
                                 <input class="form-control" type="text" name="facebook">
                             </div>

                             <div class="mb-3">
                                 <label>Linkedin Profile</label>
                                 <input class="form-control" type="text" name="linkedin">
                             </div>

                             <div class="mb-3">
                                 <label>Twitter</label>
                                 <input class="form-control" type="text" name="twitter">
                             </div>

                             <div class="mb-3">
                            <input type="hidden" name="file_link" id="file_link" value="">
                                 
                                 <button class="btn btn-primary waves-effect waves-themed" id="btnSubmit" type="submit">Save</button>
                             </div>
                         </form>
                     </div>
                 </div>
                </div>
            </div>
        </div>


            <div class="col-md-6">  
                <div class="panel">
                    <div class="panel-container">
                        <div class="panel-content">
                            <div class="panel-body" id="ibox_form">
                                <h3>Image</h3>
                                <div class="hr-line-dashed"></div>
                                <input class="form-control"  type="file" name="twitter">
                                <div class="hr-line-dashed"></div>
                                </div>
                        </div>
                    </div>
                </div>  
            </div>


    </div>
    </div>
    </div>

@endsection