<ul class="nav">
   @role('admin')
   <li class="nav-item {{ request()->routeIs('admin_dashboard') ? 'active':''}}">
      <a class="nav-link" href="{{ route('admin_dashboard') }}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">Dashboard</span>
      </a>
   </li>
   <li class="nav-item {{ request()->routeIs('orders_list') ? 'active':''}}">
      <a class="nav-link" href="{{ route('orders_list') }}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">Orders</span>
      </a>
   </li>
   <!-- Admin Users list -->
   <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Users</span>
         <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="users">
         <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Admin Users</a>
            </li>
            <li class="nav-item"> <a class="nav-link"
                  href="{{ route('users_list', ['type' => 'customer']) }}">Customers</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('users_list', ['type' => 'staff']) }}">Writers</a>
            </li>
         </ul>
      </div>
   </li>
   <!-- Admin payments -->
   <li class="nav-item">
      <a class="nav-link " data-toggle="collapse" href="#payments" aria-expanded="false" aria-controls="payments">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Payments</span>
         <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="payments">
         <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('pending_payment_approvals') }}">Pending
                  Approval</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('payments_list') }}">Payments List</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('wallet_transactions') }}">Wallet
                  Transactions</a>
            </li>
         </ul>
      </div>
   </li>

   <!-- Admin Menage -->
   <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#menage" aria-expanded="false" aria-controls="menage">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Menage</span>
         <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="menage">
         <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('job_applicants') }}">Job
                  Applicants</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Bills from Writers</a>
            </li>
         </ul>
      </div>
   </li>

   <!-- Admin Reports -->
   <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false" aria-controls="reports">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Reports</span>
         <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="reports">
         <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('income_statement') }}">Income
                  Statement</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('total_wallet_balance') }}">Total
                  Wallet Balance</a>
            </li>
         </ul>
      </div>
   </li>

   <!-- Services & Pricing -->
   <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#servicePrice" aria-expanded="false"
         aria-controls="servicePrice">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Services</span>
         <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="servicePrice">
         <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('services_list') }}">Services</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('sub_category_list') }}">Sub Categories</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('urgencies_list') }}">Urgencies</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('work_levels_list') }}">Work Levels</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('additional_services_list') }}">Additional
                  Services</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('guarantee_list') }}">Guarantees</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('tags_list') }}">Subjects</a>
            </li>
         </ul>
      </div>
   </li>

   <!-- Email Setting -->
   <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#email" aria-expanded="false" aria-controls="email">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Email</span>
         <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="email">
         <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings_email_page') }}">Configuration</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('send_test_email') }}">Send Test Email</a>
            </li>
         </ul>
      </div>
   </li>

   <!-- Website Content -->
   <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#websiteContent" aria-expanded="false"
         aria-controls="websiteContent">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Website Content</span>
         <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="websiteContent">
         <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings_homepage') }}">Homepage</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings_social_links') }}">Social Links</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings_show_faqs') }}">FAQ</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('about_settings') }}">About</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('contact_settings') }}">Contact Us</a>
            </li>
            <li class="nav-item"> <a class="nav-link"
                  href="{{ route('settings_edit_content', 'money-back-guarantee') }}">Money Back
                  Guarantee</a>
            </li>
            <li class="nav-item"> <a class="nav-link"
                  href="{{ route('settings_edit_content', 'privacy-policy') }}">Privacy Policy</a>
            </li>
            <li class="nav-item"> <a class="nav-link"
                  href="{{ route('settings_edit_content', 'revision-policy') }}">Revision Policy</a>
            </li>
            <li class="nav-item"> <a class="nav-link"
                  href="{{ route('settings_edit_content', 'disclaimer') }}">Disclaimer</a>
            </li>
            <li class="nav-item"> <a class="nav-link"
                  href="{{ route('settings_edit_content', 'terms-and-conditions') }}">Terms &
                  Condition</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('google_analytics') }}">Google Analytics</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('seo_page') }}">Website SEO</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('custom_script_page') }}">Custom Script</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('clear_cache_page') }}">Clear Cache</a>
            </li>
         </ul>
      </div>
   </li>

   <!-- Admin Setting -->
   <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#Settings" aria-expanded="false" aria-controls="Settings">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Setting</span>
         <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Settings">
         <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings_main_page') }}">General</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings_currency_page') }}">Currency</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings_staff_page') }}">Employees</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings_recruitment') }}">Recruitment</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('writer_bid_percentage') }}">Bid Percentage</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('promos.index') }}">Promo Codes</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings_logo_page') }}">Logo</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings_payment_gateways') }}">Payments
                  Gateways</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('offline_payment_methods') }}">Offline Payment
                  Methods</a>
            </li>
         </ul>
      </div>
   </li>
   <!-- Admin messages -->
   <li class="nav-item {{ request()->routeIs('admin_messages_list') ? 'active':''}}">
      <a class="nav-link" href="{{ route('admin_messages_list') }}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">Messages</span>
      </a>
   </li>
   @endrole
   @role('staff')
   @if(strtolower(settings('enable_browsing_work')) == 'yes')
   <!-- browsed work -->
   <li class="nav-item {{ request()->routeIs('browse_work') ? 'active':''}}">
      <a class="nav-link" href="{{ route('browse_work') }}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">Browse Work</span>
      </a>
   </li>
   @endif
   <!-- browsed work -->
   <li class="nav-item {{ request()->routeIs('tasks_list') ? 'active':''}}">
      <a class="nav-link" href="{{ route('tasks_list') }}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">My Tasks</span>
      </a>
   </li>
   <!-- writer payments -->
   <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#staffPayments" aria-expanded="false"
         aria-controls="staffPayments">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Request for payment</span>
         <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="staffPayments">
         <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('request_for_payment') }}">Income
                  Statement</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('my_requests_for_payment') }}">Total
                  Wallet
                  Balance</a>
            </li>
         </ul>
      </div>
   </li>
   <!-- Writer messages -->
   <li class="nav-item {{ request()->routeIs('user_inbox') ? 'active':''}}">
      <a class="nav-link" href="{{ route('user_inbox') }}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">Messages</span>
      </a>
   </li>
   @endrole
   @auth
   @unlessrole('staff|admin')
   <!-- User Orders -->
   <li class="nav-item">
      <a class="nav-link" href="{{ route('my_orders') }}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">My Orders</span>
      </a>
   </li>
   <!-- User New Order -->
   <li class="nav-item">
      <a class="nav-link" href="{{ route('order_page') }}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">New Order</span>
      </a>
   </li>
   <!-- User Wallet -->
   <li class="nav-item">
      <a class="nav-link" href="{{ route('my_account',['group' => 'wallet']) }}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">My Wallet</span>
      </a>
   </li>
   <!-- User Messages -->
   <li class="nav-item">
      <a class="nav-link" href="{{ route('user_inbox') }}">
         <i class="icon-grid menu-icon"></i>
         <span class="menu-title">Messages</span>
      </a>
   </li>
   @endunlessrole
   @endauth
</ul>