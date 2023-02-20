@extends('admin.admin_master')

@section('admin')
<div class="page-content">
                    <div class="container-fluid">
<div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                 
                                    <div class="card-body">
                                    <img class="card-img-top img-fluid" src="{{ (!empty($company->logo))? url('upload/logo/'.$company->logo):url('upload/no_image.jpg') }}" alt="Card image cap">
                                        <h4 class="card-title">Company Name : {{  $company->name }}</h4>
                                        <hr>
                                        <h4 class="card-title">URL : {{  $company-> url }}</h4>
                                        <hr>
                                        <h4 class="card-title">Email : {{  $company->email }}</h4>      
                                        <hr> 
                                        <h4 class="card-title">Phone : {{  $company->phone }}</h4>      
                                        <hr>                                 
                        
                                        <a href="#" class="btn btn-info btn-rounded waves-effect waves-light" > Edit </a>
                                    </div>
                                </div>
                            </div>
        
                            
        
                            
        
                        </div>

</div>
</div>



@endsection