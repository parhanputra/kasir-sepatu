<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">
            @if(auth()->user()->level=='Admin')
            <li class="nav-item">
                <a href="/dashboard" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="/kategori" class="nav-link"><i class="fas fa-list"></i><span>Kategori</span></a>
            </li>
            <li class="nav-item">
                <a href="/merk" class="nav-link"><i class="fas fa-shoe-prints"></i><span>Merk</span></a>
            </li>
            <li class="nav-item">
                <a href="/barang" class="nav-link"><i class="fas fa-boxes"></i><span>Barang</span></a>
            </li>
            @endif
            <li class="nav-item">
                <a href="/penjualan" class="nav-link"><i class="fas fa-shopping-cart"></i><span>Transaksi</span></a>
            </li>
            <li class="nav-item">
                <a href="/laporan" class="nav-link"><i class="fas fa-file"></i><span>Laporan</span></a>
            </li>
            @if(auth()->user()->level=='Admin')
            <li class="nav-item">
                <a href="/user" class="nav-link"><i class="fas fa-users"></i><span>User</span></a>
            </li>
            @endif
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><span>{{auth()->user()->nama}}</span></a>
              <ul class="dropdown-menu">
                @if(auth()->user()->level=='Admin')
                <li class="nav-item"><a href="/user" class="nav-link">User</a></li>
                @endif
                <li class="nav-item"><a href="/logout" class="nav-link text-danger">Logout</a></li>
              </ul>
            </li>
        </ul>
    </div>
</nav>
