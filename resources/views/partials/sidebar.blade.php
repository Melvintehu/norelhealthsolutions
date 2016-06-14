
<!-- Aside Start-->
<aside class="left-panel">

    <!-- brand -->
    <div class="logo">
         <a href="{{ URL::to("../") }}" class="logo-expanded">
                    
                    <span class="nav-label"><img style='max-width:200px;' class='img-responsive' src='../../../images/umcg.png' /></span>
                </a>
    </div>
    <!-- / brand -->

    <!-- Navbar Start -->
    <nav class="navigation">
        <ul class="list-unstyled">

            <li class="has-submenu "><a href="#"><i class="ion-person-stalker"></i> <span
                            class="nav-label">Patienten</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("patients") }}"><i class="ion-grid"></i> Overzicht</a></li>
                    

                </ul>
            </li>
            <li class="has-submenu "><a href="#"><i class="ion-information"></i> <span
                            class="nav-label">Afdeling</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("departments") }}"><i class="ion-home"></i> Overzicht</a></li>
                    <li><a href="{{ URL::to("departments/add") }}"><i class="ion-plus-round"></i> Toevoegen</a></li>
                </ul>
            </li>
            <li class="has-submenu "><a href="#"><i class="ion-person-stalker"></i> <span
                            class="nav-label">Medewerkers</span></a>
                <ul class="list-styled">
                    <li><strong><a href="#">Pagina's</a></strong></li>
                    <li><a href="{{ URL::to("employees") }}"><i class="ion-grid"></i> Overzicht</a></li>
                    

                </ul>
            </li>
            <li><a href="{{ URL::to("/logout") }}"><i class="ion-home"></i> <span
                            class="nav-label">Logout</span></a>
            </li>
        </ul>
    </nav>

</aside>
<!-- Aside Ends-->