<nav class="mt-2">
  <!--begin::Sidebar Menu-->
  <ul
    class="nav sidebar-menu flex-column"
    data-lte-toggle="treeview"
    role="navigation"
    aria-label="Main navigation"
    data-accordion="false"
    id="navigation">
    <li class="nav-item menu-open">
      <a href="{{ url('/') }}" class="nav-link active">
        <i class="nav-icon bi bi-house"></i>
        <p>
          Dashboard
        </p>
      </a>
    <li class="nav-item menu-open">
      <a href="{{ url('order') }}" class="nav-link active">
        <i class="nav-icon bi bi-basket-fill"></i>
        <p>
          Order
        </p>
      </a>
    </li>
  </ul>
  <!--end::Sidebar Menu-->
</nav>