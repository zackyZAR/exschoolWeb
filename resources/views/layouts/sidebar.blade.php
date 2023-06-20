<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a class="brand-link" style="text-decoration: none;" >
    <img src="{{asset('assets/img/user1-128x128.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Exschool</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
          <img src="{{asset('assets/img/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">  
          <span class="brand-text font-weight-light" style="color: white">{{Auth::user()->name}}</span>
      </div>
    </div>

  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
      <li class="nav-item menu-open">
        <a href="{{route('chart.index')}}" class="nav-link active">
          <i class="fa fa-home" aria-hidden="true"></i>
          <p>
            Home
          </p>
        </a>
      </li>

    <li class="nav-item menu-open">
      <div class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
          Data
          <i class="right fas fa-angle-left"></i>
        </p>
      </div>
      
      
      <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Siswa</p>
            </a>
          </li>
      </ul>
      <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('siswa.dataexschool')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Exschool</p>
            </a>
          </li>
      </ul>

    
      <li class="nav-item menu-open">
        <div class="nav-link">
          <i class="nav-icon fas fa-circle"></i>
          <p>
            Exschool
            <i class="right fas fa-angle-left"></i>
          </p>
        </div>


      <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{route('admin.bola')}}" class="nav-link">
          <i class="fa fa-user nav-icon"></i>
          <p>
            Bola
          </p>
        </a>
        </li>
      </ul>
      <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{route('admin.basket')}}" class="nav-link">
          <i class="fa fa-user nav-icon"></i>
          <p>
            Basket
          </p>
        </a>
        </li>
      </ul>
 
      
        
      <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{route('admin.voli')}}" class="nav-link">
          <i class="fa fa-user nav-icon"></i>
          <p>
            Voli
          </p>
        </a>
      </ul>

      <ul class="nav nav-treeview">
        <a href="{{route('admin.tenis')}}" class="nav-link">
          <i class="fa fa-user nav-icon"></i>
          <p>
            Tenis
          </p>
        </a>
      </ul>
        
      <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{route('admin.renang')}}" class="nav-link">
          <i class="fa fa-user nav-icon"></i>
          <p>
            Renang
          </p>
        </a>
      </ul>

      <ul class="nav nav-treeview">
        <a href="{{route('admin.estafet')}}" class="nav-link">
          <i class="fa fa-user nav-icon"></i>
          <p>
            Estafet
          </p>
        </a>
      </ul>
      <ul class="nav nav-treeview">
        <a href="{{route('admin.bahasajerman')}}" class="nav-link">
          <i class="fa fa-user nav-icon"></i>
          <p>
            Bahasa Jerman
          </p>
        </a>
      </ul>
      

    </nav>
    
  </div>
</aside>