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
                       

                         <form method ="post" action= "{{ route('emp.store') }}" id="myForm" enctype="multipart/form-data">
                         @csrf 


                             <div class="mb-3">
                                 <label for="inputName">Name</label>
                                 <input class="form-control" id="inputName" name="name">
                             </div>


                             <div class="mb-3">
                                 <label>Email</label>
                                 <input class="form-control" type="email" name="email">
                             </div>

                             <div class="mb-3">
                                 <label>Phone</label>
                                 <input class="form-control" type="text" name="phone">
                             </div>


                             <div class="mb-3">
                                 <label>Department</label>
                                 <select class="custom-select" name="department">
                                     <option>IT</option>
                                     <option>Sales</option>  
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
                                    <option>Bangladesh</option>
                                    <option>Albania</option>
                                    </select>
                             </div>

                             <div class="mb-3">
                                 <label>Date joined</label>
                                 <input class="form-control" name="date" datepicker="" data-date-format="yyyy-mm-dd" data-auto-close="true" type="date">
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
                                 <label>Image</label>
                                 <input class="form-control" type="file" name="image">
                             </div>

                             <div class="mb-3">
                                
                                 <input type="submit" class="btn btn-rounded btn-info waves-effect waves-light" value="Save">
                             </div>
                         </form>
                     </div>
                 </div>




                </div>
            </div>
        </div>


           

    </div>
    </div>
    </div>


@endsection