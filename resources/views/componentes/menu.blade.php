<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
         <a class="navbar-brand" href="{{ route('home') }}" onmousemove="logo()" onmouseout="logo1()"  > <!-- onMouseMoveCapture={logo} onMouseOutCapture={logo1}-->
            <img class="ImgLogo" src="../img/icon/Icono.png" alt="Logo" id="IconLog"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
            <span class="navbar-toggler-icon" >
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown alin-center">
                    <a class="nav-link" href="{{ route('uniformes') }}" id="uniform">Uniformes</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('batasDeTrabajo') }}">Batas de Trabajo</a></li>
                        <li><a class="dropdown-item" href="{{ route('batasTrabajoMangDesp') }}">Batas de Trabajo con Mangas Desprendibles</a></li>
                        <li><a class="dropdown-item" href="{{ route('batasIgnifugas') }}">Batas Ignifugas</a></li>
                        <li><a class="dropdown-item" href="{{ route('batasIgnifugasMangasDes') }}">Batas Ignifugas con Mangas Desprendibles</a></li>
                        <li><a class="dropdown-item" href="{{ route('camisolas') }}">Camisolas de Trabajo</a></li>
                        <li><a class="dropdown-item" href="{{ route('camisolasMangasDes') }}">Camisolas de Trabajo con Mangas Desprendibles</a></li>
                        <li><a class="dropdown-item" href="{{ route('camisolaIgnifugas') }}">Camisolas Ignifugas</a></li>
                        <li><a class="dropdown-item" href="{{ route('camisolaIgnifugasMangasDes')}}">Camisolas Ignifugas con Mangas Desprendibles</a></li>
                        <li><a class="dropdown-item" href="{{ route('pantalonesDeTrabajo') }}">Pantalones de Trabajo</a></li>
                        <li><a class="dropdown-item" href="{{ route('pantalonesDeTrabajoIgnifugo') }}">Pantalones de Trabajo Ignifugo</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown alin-center">
                    <a class="nav-link" href="{{ route('textiles-promocionales') }}" id="texti-prom">Textiles promocionales</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('playerasPolo') }}">Playeras Polo Personalizadas</a></li>
                        <li><a class="dropdown-item" href="{{ route('playerasPoloDryfit') }}">Playeras Polo Personalizadas DRYFIT</a></li>
                        <li><a class="dropdown-item" href="{{ route('PlayerasCuelloV') }}">Playeras Personalizadas Cuello en "V"</a></li>
                        <li><a class="dropdown-item" href="{{ route('PlayerasCuelloO') }}">Playeras Personalizadas Cuello en "O"</a></li>
                        <li><a class="dropdown-item" href="{{ route('chamarras') }}">Chamaras Personalizadas</a></li>
                        <li><a class="dropdown-item" href="{{ route('sudaderas') }}">Sudaderas Personalizadas</a></li>
                        <li><a class="dropdown-item" href="{{ route('chalecos') }}">Chalecos Naylon</a></li>
                        <li><a class="dropdown-item" href="{{ route('chalecosPersonalizados')}}">Chalecos Neopreno</a></li>
                        <li><a class="dropdown-item" href="{{ route('pants') }}">Pants Personalizados</a></li>
                        <li><a class="dropdown-item" href="{{ route('gorras') }}">Gorras Personalizadas</a></li>
                    </ul>
                </li>
                <li class="nav-item alin-center">
                    <a class="nav-link" href="{{ route('proyectos-especiales') }}" id="proyec-esp">Proyectos especiales</a>
                </li>
                <li class="nav-item alin-center">
                    <a class="nav-link" href="{{ route('nosotros') }}" id="nost">Nosotros</a>
                </li>
                <li class="nav-item alin-center">
                    <a class="nav-link" href="{{ route( 'contacto' ) }}" id="cont">Contacto</a>
                </li>
                <li class="nav-item alin-center">
                    <a class="nav-link" href="{{ route( 'blogs' ) }}" id="blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route( 'contacto' ) }}">
                        <img class="mini-item" src="../img/icon/correo-electronico-mini.png" alt="correo electronico" />
                    </a>
                    <a class="nav-link" href="tel:5526524180">
                        <img class="mini-item" src="../img/icon/llamada-telefonica-mini.png" alt="llamada telefonica" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
        $(document).ready(function(){
            // Al situar el puntero sobre el elemento con la clase .nav-item,
            // despliega el menú correspondiente
            $('.nav-item').hover(function(){
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
            }, function(){
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            var links = document.querySelectorAll('.nav-link');
            links.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var href = this.getAttribute('href');
                window.location.href = href;
            });
            });
        });
    </script>
