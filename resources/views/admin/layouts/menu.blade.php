<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <div></div>
             <li class="">
                 <a href="{{ route('dashboard') }}">
                     <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                     <span class="pcoded-mtext">Dashboard</span>
                 </a>
             </li>

             <div class="pcoded-navigatio-lavel">USERS</div>
             <li class="pcoded-hasmenu">
                 <a href="javascript:void(0)">
                     <span class="pcoded-micon"><i class="fa fa-group"></i></span>
                     <span class="pcoded-mtext">Users</span>
                 </a>
                 <ul class="pcoded-submenu">
                     <li class=" ">
                         <a href="{{ route('users.index') }}">
                             <span class="pcoded-mtext">Consulter les utilisateurs</span>
                         </a>
                     </li>
                     <li class=" ">
                         <a href="{{ route('users.create') }}">
                             <span class="pcoded-mtext">Ajouter un utilisateur</span>
                         </a>
                     </li>
                     <li class=" ">
                        <a href="{{ route('profile.index') }}">
                            <span class="pcoded-mtext">Profile Utilisateur</span>
                        </a>
                    </li>
                 </ul>
             </li>

             <div class="pcoded-navigatio-lavel">PROJETS</div>
             <li class="pcoded-hasmenu">
                 <a href="javascript:void(0)">
                     <span class="pcoded-micon"><i class="fa fa-archive"></i></span>
                     <span class="pcoded-mtext">Projets</span>
                 </a>
                 <ul class="pcoded-submenu">
                     <li class=" ">
                         <a href="{{ route('projets.index') }}">
                             <span class="pcoded-mtext">Consulter les projets</span>
                         </a>
                     </li>
                     <li class=" ">
                         <a href="{{ route('projets.create') }}">
                             <span class="pcoded-mtext">Ajouter un projet</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-archive"></i></span>
                    <span class="pcoded-mtext">Données géo</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Pays</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="{{ route('pays.index') }}">
                                <a href="{{ route('pays.index') }}">
                                    <span class="pcoded-mtext">Consult</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Region</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="{{ route('regions.index') }}">
                                    <span class="pcoded-mtext">Consult</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Ville</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="{{ route('villes.index') }}">
                                    <span class="pcoded-mtext">Consult</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-archive"></i></span>
                    <span class="pcoded-mtext">Matériels</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Batterie</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="{{ route('pays.index') }}">
                                <a href="{{ route('batteries.index') }}">
                                    <span class="pcoded-mtext">Consult</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Plaques PV</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="{{ route('plaques.index') }}">
                                    <span class="pcoded-mtext">Consult</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
         </ul>
    </div>
</nav>