
<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
      aria-expanded="false" aria-controls="sidebarApps">
      <i data-feather="grid" class="icon-dual"></i>
      <span data-key="t-apps">Management</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarApps">
      <ul class="nav nav-sm flex-column">
        <li class="nav-item">
          <a href="{{route('buses')}}" class="nav-link" data-key="t-products">
            Buses
          </a>
        </li>
        <!-- Add Product -->
        <li class="nav-item">
          <a href="{{route('add-bus')}}" class="nav-link" data-key="t-create-product">
            Add Bus
          </a>
        </li>
        <!-- Order Product -->
        <li class="nav-item">
          <a href="{{route('sales')}}" class="nav-link" data-key="t-orders">
            My Sales
          </a>
        </li>
        <!-- Order-details -->
        <li class="nav-item">
          <a href="{{route('parcels')}}" class="nav-link" data-key="t-order-details">
            Parcels Details
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('passagers')}}" class="nav-link" data-key="t-customers">
            Passagers
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{route('profiles')}}" class="nav-link" data-key="t-sellers-details">
            Profiles
          </a>
        </li>
      </ul>
    </div>
  </li>
  <!-- App Menu end -->