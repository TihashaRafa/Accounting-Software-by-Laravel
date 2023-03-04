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
                       

                         <form method ="post" action= "{{ route('emp.update') }}" id="myForm" enctype="multipart/form-data">
                            @csrf
                            
                            <input type="hidden" name="id" value="{{ $emp->id }}">

                             <div class="mb-3">
                                 <label for="inputName">Name</label>
                                 <input class="form-control" id="inputName" value="{{ $emp->name }}" name="name">
                             </div>


                             <div class="mb-3">
                                 <label>Email</label>
                                 <input class="form-control" value="{{ $emp->email }}" type="email" name="email">
                             </div>

                             <div class="mb-3">
                                 <label>Phone</label>
                                 <input class="form-control" type="text" value="{{ $emp->phone }}" name="phone">
                             </div>


                             <div class="mb-3">
                                 <label>Department</label>
                                 <select class="custom-select" value="{{ $emp->department }}" name="department">
                                     <option>IT</option>
                                     <option>Sales</option>
                                     
                                     
                                     
                         </select>
                             </div>


                             <div class="mb-3">
                                 <label>Job title</label>
                                 <input class="form-control" value="{{ $emp->job_title }}" name="job_title">
                             </div>

                             <div class="mb-3">
                                 <label>Address</label>
                                 <input class="form-control" value="{{ $emp->address }}" name="address">
                             </div>

                             <div class="mb-3">
                                 <label>City</label>
                                 <input class="form-control" value="{{ $emp->city }}" name="city">
                             </div>

                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="mb-3">
                                         <label>State/Region</label>
                                         <input class="form-control" value="{{ $emp->state }}" name="state">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="mb-3">
                                         <label>ZIP/Postal Code</label>
                                         <input class="form-control" value="{{ $emp->zip }}" name="zip">
                                     </div>
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <label>Country</label>
                                 <select class="form-control" value="{{ $emp->country }}" name="country">
                                                                              
	<option>Afghanistan</option>
	<option>Bangladesh</option>
	<option>Albania</option>
	  </select>
                             </div>

                             <div class="mb-3">
                                 <label>Date joined</label>
                                 <input class="form-control" value="{{ $emp->date }}" name="date" datepicker="" data-date-format="yyyy-mm-dd" data-auto-close="true" type="date">
                             </div>

                             <div class="mb-3">
                                 <label>Pay frequency</label>
                                 <select class="form-control"  value="{{ $emp->pay }}"  name="pay">
                                     <option value="Monthly">Monthly</option>
                                     <option value="Hourly">Hourly</option>
                                 </select>
                             </div>


                             <div class="mb-3">
                                 <label>Amount</label>
                                 <input class="form-control amount"  value="{{ $emp->amount }}"  name="amount">
                             </div>


                             <div class="mb-3">
                                 <label>Summary</label>
                                 <textarea class="form-control" rows="10" value="{{ $emp->summary }}" name="summary"></textarea>
                             </div>

                             <div class="mb-3">
                                 <label>Facebook Profile</label>
                                 <input class="form-control" type="text" value="{{ $emp->facebook }}" name="facebook">
                             </div>

                             <div class="mb-3">
                                 <label>Linkedin Profile</label>
                                 <input class="form-control" type="text" value="{{ $emp->linkedin }}" name="linkedin">
                             </div>

                             <div class="mb-3">
                                 <label>Twitter</label>
                                 <input class="form-control" type="text" value="{{ $emp->twitter }}" name="twitter">
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


            <div class="col-md-6">

                
                <div class="panel">
                    <div class="panel-container">
                        <div class="panel-content">
                            <div class="panel-body" id="ibox_form">
                                <h3>Image</h3>
                                <div class="hr-line-dashed"></div>
                                <input class="form-control" type="file" name="image">
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