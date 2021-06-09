<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">


                <li class="sidebar-item">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Tableau de Bord</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            @if (Auth::user()->role_name=='Admin')
                            <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Role:</span>
                            <span class="badge bg-success">Administrateur</span>
                            @endif
                            @if (Auth::user()->role_name=='Manager')
                                <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role:</span>
                                <span class="badge bg-info">Manager</span>
                            @endif
                            @if (Auth::user()->role_name=='Commercial')
                                <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role:</span>
                                <span class="badge bg-warning">Commercial</span>
                            @endif
                        </div>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Chnage Password</span>
                    </a>
                </li>

                @if (Auth::user()->role_name=='Admin')
                <li class="sidebar-title">Gestion</li>
                <li class="sidebar-item  has-sub active">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-people"></i>
                        <span>Utilisateurs</span>
                    </a>
                    <ul class="submenu active">
                        <li class="submenu-item active">
                            <a href="{{ route('userManagement') }}">Listes Des Utilisateurs</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/log') }}">Nouvelle Utilisateur</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/log') }}">Activitées des Utilisateurs</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/login/logout') }}">Activitées de Connexion</a>
                        </li>
                    </ul>

                </li>
                <li class="sidebar-item  has-sub active">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-bag"></i>
                        <span>Achats</span>
                    </a>
                    <ul class="submenu active">
                        <li class="submenu-item active">
                            <a href="{{ route('userManagement') }}">Listes Des Achats</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/log') }}">Nouvelle Achat</a>
                        </li>

                    </ul>

                </li>
                <li class="sidebar-item  has-sub active">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-receipt"></i>
                        <span>Ventes</span>
                    </a>
                    <ul class="submenu active">
                        <li class="submenu-item active">
                            <a href="{{ route('userManagement') }}">Listes Des Ventes</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/log') }}">Nouvelle Vente</a>
                        </li>
                    </ul>
               </li>
               <li class="sidebar-item  has-sub active">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-shop-window"></i>
                    <span>Stock</span>
                </a>
                <ul class="submenu active">
                    <li class="submenu-item active">
                        <a href="{{ route('userManagement') }}">Listes Des Produits</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('activity/log') }}">Nouvelle Produit</a>
                    </li>
                </ul>
           </li>

            @endif

                <li class="sidebar-title">Forms &amp; Tables</li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item active">
                            <a href="{{ route('form/staff/new') }}">Staff Input</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>View Record</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('form/view/detail') }}">View Detail</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Se Déconnecter</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
