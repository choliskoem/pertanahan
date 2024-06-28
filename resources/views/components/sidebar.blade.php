<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Wapili Enak</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">WE</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
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
                    {{-- @if (auth()->user()->level == '2')
                        <li>
                            <a class="nav-link" href="{{ route('listpinjam.index') }}">List Peminjaman</a>
                        </li>
                    @elseif (auth()->user()->level == '1')
                        <li>
                            <a class="nav-link" href="{{ route('peminjaman.index') }}">Peminjaman</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('pengembalian.index') }}">Pengembalian</a>
                        </li>
                    @endif --}}






                </ul>
            </li>
            {{-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('kecamatan.index') }}">Kecamatan & Keluarahan</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('seksi.index') }}">Seksi & Pelayanan</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('penandatanganan.index') }}">Penandatangan</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">User</a>
                    </li>

                    <li>
                        <a class="nav-link" href="">Import</a>
                    </li>




                </ul>
            </li> --}}
    </aside>
</div>
