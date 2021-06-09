<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item has-sub active">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Tableau De Bord</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            @if (Auth::user()->role_name=='Admin')
                            <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Role :</span>
                            <span class="badge bg-success">Administrateur</span>
                            @endif
                            @if (Auth::user()->role_name=='Manager')
                                <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role:</span>
                                <span class="badge bg-info">Manager</span>
                            @endif
                            @if (Auth::user()->role_name=='Normal User')
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
                        <span>Changer mot de passe</span>
                    </a>
                </li>

                @if (Auth::user()->role_name=='Admin')
                    <li class="sidebar-title">Gestion</li>
                    <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link'>
                            <img src="https://img.icons8.com/material-rounded/24/ffffff/user-group-man-woman.png"/>
                            <span>Utilisateurs</span>
                        </a>
                        <ul class="submenu active">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des Utilisateurs</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouvelle Utilisateur</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/log') }}">Activitées des Utilisateurs</a>
                            </li>
                            <li class="submenu-item active">
                                <a href="{{ route('activity/login/logout') }}">Activitées de Connexion</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link'>
                            <img src="https://img.icons8.com/fluent-systems-filled/20/ffffff/shopping.png"/>
                            <span>Achats</span>
                        </a>
                        <ul class="submenu active">
                            <img src="https://img.icons8.com/nolan/25/supplier.png"/>
                            <i>Fournisseurs :</i>
                            <li class="submenu-item">

                                <a href="{{ route('userManagement') }}">Liste des Fournisseurs</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouveaux Fournisseurs</a>
                            </li>

                            <img src="https://img.icons8.com/cotton/25/ffffff/shopping.png"/>
                            <i>Commandes des Fournisseurs :</i>
                            <li class="submenu-item">
                                <a href="{{ route('commandefournisseur') }}">Liste des Commandes</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('gestionachat/ajouterfournisseur/nouveau') }}">Nouvelle Commande</a>
                            </li>
                            <i class="bi bi-person">Bon de reception :</i>
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des bons </a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouvelle bon</a>
                            </li>

                            <i>Factures Des Achats :</i>
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des Factures</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouvelle Facture</a>
                            </li>

                        </ul>

                    </li>
                    <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link'>
                            <img src="https://img.icons8.com/material-rounded/24/ffffff/total-sales-1.png"/>
                            <span>Ventes</span>
                        </a>
                        <ul class="submenu active">
                            <img src="https://img.icons8.com/dusk/25/ffffff/client-management.png"/>
                           <i> Clients</i>
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des Clients</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouveaux Client</a>
                            </li>
                            <img src="https://img.icons8.com/cotton/25/ffffff/shopping.png"/>
                            <i>Commandes Client </i>
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des Commandes</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouvelle Commande</a>
                            </li>
                            <i>Bon de Livraison</i>
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des bons </a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouvelle bon</a>
                            </li>
                            <img src="https://img.icons8.com/nolan/25/bill.png"/>
                            <i>Factures des Ventes</i>
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des Factures</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouvelle Facture</a>
                            </li>
                            <i class="fas fa-file-invoice-dollar">Devis :</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des Devis</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle Devi</a>
                        </li>
                        </ul>

                    </li>
                    <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link'>
                            <img src="https://img.icons8.com/ios-glyphs/25/ffffff/sell-stock.png"/>
                            <span>Stock</span>
                        </a>
                        <ul class="submenu active">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des Produits</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouveaux Produit</a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if (Auth::user()->role_name=='Manager')
                <li class="sidebar-title">Gestion</li>
                <li class="sidebar-item  has-sub active">
                    <a href="#" class='sidebar-link'>
                        <img src="https://img.icons8.com/fluent-systems-filled/20/ffffff/shopping.png"/>
                        <span>Achats</span>
                    </a>
                    <ul class="submenu active">
                        <img src="https://img.icons8.com/nolan/25/supplier.png"/>
                        <i>Fournisseurs :</i>
                        <li class="submenu-item">

                            <a href="{{ route('userManagement') }}">Liste des Fournisseurs</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouveaux Fournisseur</a>
                        </li>

                        <img src="https://img.icons8.com/cotton/25/ffffff/shopping.png"/>
                        <i>Commandes fournisseur :</i>
                        <li class="submenu-item">
                            <a href="{{ route('commandefournisseur') }}">Liste des Commandes</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('gestionachat/ajouterfournisseur/nouveau') }}">Nouvelle Commande</a>
                        </li>
                        <i class="bi bi-person">Bon de reception :</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des bons </a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle bon</a>
                        </li>
                       <img src="https://img.icons8.com/android/50/ffffff/delivery.png"/>
                        <i>Factures Des Achats :</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des Factures</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle Facteure</a>
                        </li>
                    </ul>

                </li>
                <li class="sidebar-item  has-sub active">
                    <a href="#" class='sidebar-link'>
                        <img src="https://img.icons8.com/material-rounded/24/ffffff/total-sales-1.png"/>
                        <span>Ventes</span>
                    </a>
                    <ul class="submenu active">
                        <img src="https://img.icons8.com/dusk/25/ffffff/client-management.png"/>
                       <i> Clients</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des Clients</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouveaux Client</a>
                        </li>
                        <img src="https://img.icons8.com/cotton/25/ffffff/shopping.png"/>
                        <i>Commandes  Client</i>
                        <li class="submenu-item">
                            <a href="{{ route('commandefournisseur') }}">Liste des Commandes</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle Commande</a>
                        </li>
                        <img src="https://img.icons8.com/android/50/ffffff/delivery.png"/>
                        <i>Bon de Livraison</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des bons </a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle bon</a>
                        </li>
                        <img src="https://img.icons8.com/nolan/25/bill.png"/>
                        <i>Factures des Ventes</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des Factures</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle Facteurs</a>
                        </li>
                        <i class="fas fa-file-invoice-dollar">Devis :</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des Devis</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle Devi </a>
                        </li>
                        <li class="sidebar-item  has-sub active">
                            <a href="#" class='sidebar-link'>
                                <img src="https://img.icons8.com/ios-glyphs/25/ffffff/sell-stock.png"/>
                                <span>Stock</span>
                            </a>
                            <ul class="submenu active">
                                <li class="submenu-item">
                                    <a href="{{ route('userManagement') }}">Liste des Produits</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{ route('user/add/new') }}">Nouveaux Produit</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                    @if (Auth::user()->role_name=='Commercial')
                    <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link'>
                            <img src="https://img.icons8.com/ios-glyphs/25/ffffff/sell-stock.png"/>
                            <span>Stock</span>
                        </a>
                        <ul class="submenu active">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des Produits</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouveaux Produit</a>
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
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
