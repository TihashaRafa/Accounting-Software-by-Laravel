<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!-- User details -->
    
    @php 
            $id = Auth::user()->id;
            $adminData = App\Models\User::find($id);

        @endphp
    <div class="user-profile text-center mt-3">
        <div class="">
            <img class="img-fluid" src="{{ (!empty($adminData->Image))? url('upload/admin_images/'.$adminData->Image):url('upload/no_image.jpg') }}" >
        </div>
        
        <div class="mt-3">
            <h4 class="font-size-16 mb-1">{{ $adminData->name}}</h4>
            
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

             <li>
                <a href="{{ route('dashboard') }}" class="waves-effect">
                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                    <span>Dashboard</span>
                    
                </a>
             </li>


            <!-- Customer start here -->

             <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Customers</span>
                </a>
             
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('customer.add') }}">Add Customers</a></li>
                    <li><a href="{{ route('customer.all') }}">List Customers</a></li>
                    <li><a href="{{ route('company.all') }}">Companies</a></li>
                    <li><a href="{{ route('group.all') }}">Groups</a></li>
                   
                   
                </ul>
             </li>
                    <!-- Customer end here -->


             <!-- Accounting start here -->

             <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Accounting</span>
                </a>
             
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('deposite.all') }}">New Deposite</a></li>
                    <li><a href="{{ route('expance.all') }}">New Expance</a></li>
                    <li><a href="{{ route('transfer.all') }}">Transfer</a></li>
                    <li><a href="{{ route('bill.all') }}">Bills</a></li>
                    <li><a href="{{ route('transaction.all') }}">View Transactions</a></li>
                    <li><a href="{{ route('transaction.unclear') }}">Unclear Transactions</a></li>
                    <li><a href="{{ route('account.all') }}">Accounts</a></li>
                    <li><a href="{{ route('account.add') }}">New Accounts</a></li>
                    <li><a href="{{ route('asset.all') }}">Assets</a></li>
                    
                </ul>
             </li>
  <!-- Accounting ends here -->


     <!-- Sales start here -->

     <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Sales</span>
                </a>
             
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('invoice.all') }}">Invoice</a></li>
                    <li><a href="{{ route('invoice.add') }}">New Invoice</a></li>
                    <li><a href="#">Recurring Invoice</a></li>
                    <li><a href="#">New Recurring Invoice</a></li>
                    <li><a href="{{ route('payment.all') }}">Payments</a></li>   
                </ul>
             </li>
  <!-- Sales ends here -->


    <!-- Supplier start here -->

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Supplier</span>
                </a>
             
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('supplier.all') }}">All Supplier</a></li>
                    <li><a href="{{ route('supplier.add') }}">New Supplier</a></li>
                </ul>
             </li>
  <!-- Supplier ends here -->



  

   <!-- Purchase start here -->

   <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Purchase</span>
                </a>
             
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('purchase.all') }}">Purchase Orders</a></li>
                    <li><a href="#">New Purchase Order</a></li>
                  
                    
                </ul>
             </li>
  <!-- Purchase ends here -->


  <!-- HRM start here -->

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>HRM</span>
                </a>
             
                <ul class="sub-menu" aria-expanded="false">
               
                <li><a href="{{ route('emp.all') }}">Emp</a></li>
                    <li><a href="{{ route('attandance.all') }}">Attandance</a></li>
                    <li><a href="{{ route('payroll.add') }}">Payroll</a></li>
                  
                    
                </ul>
             </li>
  <!-- HRM ends here -->

  <!-- Calender start here -->
  
  <li>
                <a href="javascript: void(0);" class="">
                    <i class="ri-layout-3-line"></i>
                    <span>Calender</span>
                </a>
             
             </li>
  <!-- Calender end here -->

  <!-- HRM start here -->

  <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Products & Services</span>
                </a>
             
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('pproduct.all') }}">Products</a></li>
                    <li><a href="{{ route('pproduct.add') }}">New Products</a></li>
                    <li><a href="{{ route('service.all') }}">Services</a></li>
                    <li><a href="{{ route('service.add') }}">New Services</a></li>
                   
                    
                </ul>
             </li>
  <!-- HRM ends here -->


    <!-- Reports start here -->

    <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Reports</span>
                </a>
             
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('transaction.all') }}">Transaction</a></li>
                    <li><a href="">Invoices</a></li>
                    <li><a href="">Purchase</a></li>
                    <li><a href="">Amount statement</a></li>
                    <li><a href="">Income Reports</a></li>
                    <li><a href="">Expance Reports</a></li>
                    <li><a href="">Income VS Expance </a></li>
                    <li><a href="">Reports By Date </a></li>
                    <li><a href="">All Income </a></li>
                    <li><a href="">All Expance </a></li>
                    <li><a href="">Sales </a></li>
                    <li><a href="">Invoice Vs Expance </a></li>
                    <li><a href="">Export </a></li>
                   
                   
                    
                </ul>
             </li>
  <!-- Reports end here -->

  
  <!-- Account start here -->

            <li class="menu-title">Account</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-account-circle-line"></i>
                    <span>Account</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('admin.profile') }}">Profile</a></li>
                    <li><a href="{{ route('admin.logout') }}">Logout</a></li>
                    </ul>
            </li>
        <!-- Account end here -->


  <!-- Setting start here -->

  <li class="menu-title">Setting</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-account-circle-line"></i>
        <span>Setting</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('staff.all') }}">Staff</a></li>
        <li><a href="">Role</a></li>
        <li><a href="{{ route('owner.all') }}">Owner</a></li>
        <li><a href="">Unit</a></li>
        <li><a href="{{ route('payer.all') }}">Payer</a></li>
        <li><a href="{{ route('catagory.all') }}">Income Catagory</a></li>
        <li><a href="{{ route('expance_catagory.all') }}">Expance Catagory</a></li>
        <li><a href="{{ route('PaymentMethod.all') }}">Payment Method</a></li>
        </ul>
</li>
<!-- Setting end here -->
            
    </div>

    
    <!-- Sidebar -->
</div>
</div>