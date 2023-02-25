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
                    <li><a href="email-inbox.html">Files</a></li>
                    <li><a href="{{ route('product.all') }}">Products</a></li>
                    <li><a href="{{ route('invoice.all') }}">Invoice</a></li>
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
                    <li><a href="#">Assets</a></li>
                    
                </ul>
             </li>
  <!-- Accounting ends here -->


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



                <a href="#" class="waves-effect">
                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                    <span>Expance</span>
                    
                </a>
             </li>

             <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Purchases</span>
                </a>
             
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="email-inbox.html">Purchase List</a></li>
                </ul>
             </li>

             <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Sales</span>
                </a>
             
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="email-inbox.html">Invoice List</a></li>
                    <li><a href="email-inbox.html">POS</a></li>
                </ul>
             </li>


  <li class="menu-title">Accounting</li>
<li>
   <a href="javascript: void(0);" class="has-arrow waves-effect">
       <i class="ri-layout-3-line"></i>
       <span>Cash Book</span>
   </a>

   <ul class="sub-menu" aria-expanded="false">
       <li><a href="email-inbox.html">Balance Transfer</a></li>
   </ul>
</li>

<li>
   <a href="javascript: void(0);" class="has-arrow waves-effect">
       <i class="ri-layout-3-line"></i>
       <span>Payments</span>
   </a>
   <ul class="sub-menu" aria-expanded="false">
      
   
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
             <i class="ri-layout-3-line"></i>
             <span>Clients</span>
             
        </a>
    <li>

    
   </ul>
</li>
   

<li class="menu-title">People</li>
<li>
   <a href="javascript: void(0);" class="has-arrow waves-effect">
       <i class="ri-layout-3-line"></i>
       <span>Clients</span>
   </a>

  <li class="menu-title">Inventory</li>
<li>
   <a href="javascript: void(0);" class="has-arrow waves-effect">
       <i class="ri-layout-3-line"></i>
       <span>Products</span>
   </a>

   <ul class="sub-menu" aria-expanded="false">
       <li><a href="email-inbox.html">Categories</a></li>
       <li><a href="email-inbox.html">Sub Categories</a></li>
   </ul>
</li>

 
            
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

            
    </div>
    <!-- Sidebar -->
</div>
</div>