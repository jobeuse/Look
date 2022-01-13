 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <ul class="cs-user-accounts-list">      
      <li class="{{ Request::is('employees')?'active':'' }}"><a href="{{ route('employees') }}">Employees</a></li> 
      <li class="{{ Request::is('payments')?'active':'' }}"><a href="{{ route('payments') }}">Payments</a></li> 
      <li class="{{ Request::is('sales')?'active':'' }}"><a href="{{ route('sales') }}">Sales</a></li> 
      <li class="{{ Request::is('/Profile')?'active':'' }}"><a href="user-payments.html">Services</a></li>
      <li class="{{ Request::is('Profile')?'active':'' }} "><a href="{{ route('profile') }}">Profile Settings</a></li> 
    </ul>
</div>