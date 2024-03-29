<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav" class="pt-4">
          <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark" href="{{URL('/admin')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
          </li>
          {{-- products --}}
          <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark" href="{{URL('all-products')}}" aria-expanded="false"><i class="fab fa-product-hunt"></i><span class="hide-menu">Products </span></a>
          </li>
          {{-- brands --}}
          <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark" href="{{ route('brands.index') }}" aria-expanded="false"><i class="fab fa-product-hunt"></i><span class="hide-menu">Brands </span></a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Brands </span></a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="charts.html" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Charts</span></a>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>