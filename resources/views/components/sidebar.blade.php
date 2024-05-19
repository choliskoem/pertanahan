<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">ATRBPN</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('home') }}">Genera Dashboard</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Peminjaman</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('listpinjam.index') }}">List Peminjaman</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('peminjaman.index') }}">Peminjaman</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('pengembalian.index') }}">Pengembalian</a>
                    </li>




                </ul>
            </li>
    </aside>
</div>
