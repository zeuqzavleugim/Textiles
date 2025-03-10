@include('layaut.heat')
    <body class='body-pag-home'>
        <div>
            @include('componentes.menu')
        </div>
        <div class='barra-hr-verde'></div>
        <div class='agregar-gif'>
            <div class='seccion-flex-img-text'>
                <div class='sep-imag-logot'>
                    <picture class='imagen-logotipo'>
                        <img src="../img/icon/IconoLogotipo.png" alt="Icono-Logotipo" />
                    </picture>
                </div>
                <div class='sec-text-and-buton'>
                    <h1 class='titulo-hs-tit colors-blanc'>
                        <strong>UNIFORMES Y TEXTILES PERSONALIZADOS DE ALTA CALIDAD</strong>
                    </h1>
                    <div class='position-buton-home'>
                        <button class="form-button" type="button">
                            <a class="a" href="{{route('nosotros')}}" >Conoce Magic Pop</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class='barra-hr-naranja'></div>
        <div class="dip-flex">
            <div class="dip-gridd">
                <div class="tip-text-esp">
                    <p>
                        En Magic Pop, diseñamos textiles premium personalizados, como playeras, 
                        gorras y sudaderas, para transmitir la identidad de tu empresa o marca.
                    </p>
                </div>
                <div class="dip-flex1">
                    <div class="dibb-gridd">
                        <div class="dib-img-duadd dib-img-duad-fon1">
                            <a href="{{ route('playerasPolo') }}" class="dib-img-duadd item-tex-center">
                                <h3>PLAYERAS</h3>
                            </a>
                        </div>
                        <div class="dib-img-duad- dib-img-duad-fon2 ">
                            <a href="{{ route('chalecos') }}" class="dib-img-duad- item-tex-center">
                                <h3>CHALECOS</h3>
                            </a>
                        </div>
                    </div>
                    <div class="dibb-gridd">
                        <div class="dip-fondo-pan">
                            <a href="{{ route('pants') }}" class="dip-dentr item-tex-center">
                                <h3>PANTS</h3>
                            </a>
                        </div>
                        <div class="dip-fondo-gorr">
                            <a href="{{ route('gorras') }}" class="dip-dentr- item-tex-center">
                                <h3>GORRAS</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" dib-img-duad-fon00">
                    <a href="{{ route('chamarras') }}" class="dip-img-chamSud item-tex-center">
                        <h3>CHAMARRAS Y SUDADERAS</h3>
                    </a>
                </div>
            </div>
            <div class="dip-gridd">
                <div class="tip-text-esp">
                    <p>
                        También ofrecemos soluciones en uniformes de trabajo, incluyendo batas, 
                        camisolas y pantalones de trabajo. 
                    </p>
                </div>
                <div class="dip-flex1">
                    <div class="dibb-gridd">
                        <div class="dib-img-duadd dib-img-duad-fon3">
                            <a href="{{ route('batasDeTrabajo') }}" class="dib-img-duadd item-tex-center">
                                <h3>BATAS</h3>
                            </a>
                        </div>
                        <div class="dib-img-duad- dib-img-duad-fon4 ">
                            <a href="{{ route('camisolas') }}" class="dib-img-duad- item-tex-center">
                                <h3>CAMISOLAS</h3>
                            </a>
                        </div>
                    </div>
                    <div class="dibb-gridd">
                        <div class=" dib-img-fon5">
                            <a href="{{ route('pantalonesDeTrabajo') }}" class="dib-dent-pant item-tex-center">
                                <h3>PANTALONES</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" dib-img-duad-fon0">
                    <a href="{{ route('proyectos-especiales') }}" class="dip-img-proyect item-tex-center">
                        <h3>PROYECTOS ESPECIALES</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="tex-slider-r">
            <div class="tex-slide-track" id="sliderr-r">
                <div class="tex-slide tam-slide">
                    <a href="{{route('contacto')}}">
                        <img src='../img/slider-home/Productos-Especiales/3Paraguas-personalizadas-slider.png' alt='Sombrillas Personaloizadas' />
                    </a>
                </div>
                <div class="tex-slide tam-slide">
                    <a href="{{route('contacto')}}">
                        <img src='../img/slider-home/Productos-Especiales/1Fundas-personalizadas-para-productos.png' alt='Fundas Personalizadas' />
                    </a>
                </div>
                <div class="tex-slide tam-slide">
                    <a href="{{route('gorras')}}">
                        <img src='../img/slider-home/Textiles-Promocionales/10Gorras-slider.png' alt='Gorras' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('pants')}}">
                        <img src='../img/slider-home/Textiles-Promocionales/9Pants-personalizados-slider.png' alt='Pants personalizados' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('chalecosPersonalizados')}}">
                        <img src='../img/slider-home/Textiles-Promocionales/8Chalecos-personalizados-slider-1.png' alt='Chalecos personalizados 1' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('chalecos')}}">
                        <img src='../img/slider-home/Textiles-Promocionales/7Chalecos-personalizados-slider.png' alt='Chalecos personalizados' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('chamarras')}}">
                        <img src='../img/slider-home/Textiles-Promocionales/6Chamarras-personalizadas-slider.png' alt='Chamarras personalizadas' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('sudaderas')}}">
                        <img src='../img/slider-home/Textiles-Promocionales/5Sudaderas-personalizadas-slider.png' alt='Sudaderas personalizadas' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('PlayerasCuelloO')}}">
                        <img src='../img/slider-home/Textiles-Promocionales/4Playeras-cuello-redondo-slider.png' alt='Playeras cuello redondo' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('PlayerasCuelloV')}}">
                        <img src='../img/slider-home/Textiles-Promocionales/3Playeras-cuello-v-slider.png' alt='Playeras cuello V' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('playerasPoloDryfit')}}">
                        <img src='../img/slider-home/Textiles-Promocionales/2Playeras-dryfit-100-poliester-slider.png' alt='Playeras dryfit 100 poliester' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('playerasPolo')}}">
                        <img src='../img/slider-home/Textiles-Promocionales/1Playeras-polo-100-algodon-slider.png' alt='Playeras polo 100 algodon' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('pantalonesDeTrabajoIgnifugo')}}">
                        <img src='../img/slider-home/Uniformes/10Pantalones-de-trabajo-ignifugos-slider.png' alt='Pantalones de trabajo ignifugos' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('pantalonesDeTrabajo')}}">
                        <img src='../img/slider-home/Uniformes/9Pantalones-de-trabajo-slider.png' alt='Pantalones de trabajo' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('batasIgnifugasMangasDes')}}">
                        <img src='../img/slider-home/Uniformes/8Camisola-ignifuga-mangas-desprendibles-slider.png' alt='Camisola ignifuga mangas desprendibles' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('camisolaIgnifugas')}}">
                        <img src='../img/slider-home/Uniformes/6Camisola-ignifuga-slider.png' alt='Camisola Ignifuga' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('camisolasMangasDes')}}">
                        <img src='../img/slider-home/Uniformes/7Camisola-de-trabajo-mangas-desprendibles-slider.png' alt='Camisola de trabajo mangas desprendibles' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('camisolas')}}">
                        <img src='../img/slider-home/Uniformes/5Camisola-de-trabajo-slider.png' alt='Camisola de trabajo' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('batasIgnifugasMangasDes')}}">
                        <img src='../img/slider-home/Uniformes/4Batas-ignifunas-mangas-desprendibles-slider.png' alt='Batas ignifunas mangas desprendibles' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('batasIgnifugas')}}">
                        <img src='../img/slider-home/Uniformes/3Batas-ignifunas-slider.png' alt='Batas Ignifunas' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{route('batasTrabajoMangDesp')}}">
                        <img src='../img/slider-home/Uniformes/2Bata-de-mangas-desprendibles-slider.png' alt='Bata de mangas desprendibles' />
                    </a>
                </div>
                <div class="tex-slide">
                    <a href="{{ route( 'batasDeTrabajo' ) }} ">
                        <img src='../img/slider-home/Uniformes/1Batas-de-trabajo-slider.png' alt='Batas de trabajo' />
                    </a>
                </div>
            </div>
        </div>
        <div class='seccion-title-text'>
            <section class='div-ext-video-and-text'>
                <div class='div-del-gif'>
                    <picture>
                        <img src="../img/gifs/Proceso-textil-para-gif-2.gif" alt="Gif del 3 estructuras" />
                    </picture>
                </div>
                <div class='div-tex-video'>
                    <p>Diseño</p>
                    <p>Producción</p>
                    <p>Personalización</p>
                </div>
            </section>
            
        </div>
        <div class='barra-hr-red'></div>
        <section class='seccion-title-text'>
            <p>
                ¡Nuestras prendas están diseñadas con los más 
                altos estándares de calidad y procesos estandarizados; 
                puedes confiar en nosotros!
            </p>
        </section>
        <div class='seccion-title-text'>
            <section > 
                <div class='seccion-title-text-and-imgs-1'>
                    <div class='bacg-colors-ros img-cent'>
                        <picture>
                            <img src="../img/icon/flujo-de-trabajo-icon.png" alt="flujo de trabajo" />
                            <p>
                                Procesos estandarizados
                            </p>
                        </picture>
                    </div>
                    <div class='bacg-colors-oranj-clar img-cent'>
                        <picture>
                            <img src="../img/icon/calidad-icon.png" alt="calidad" />
                            <p>
                                Control de calidad
                            </p>
                        </picture>
                    </div>
                    <div class='bacg-colors-gren-clar img-cent'>
                        <picture>
                            <img src="../img/icon/Icono-seguimiento-constante.png" alt="seguimiento constante" />
                            <p>
                                Seguimiento constante
                            </p>
                        </picture>
                    </div>
                </div>
            </section>
        </div>
        <div class='div-Centrado'>
            <button class="form-button" type="button">
                <a class="a" href="{{ route( 'contacto' ) }}"><strong>Contacto</strong></a>
            </button>
        </div>
        <div>
            @include('componentes.whatsButon')
            @include('componentes.foter')
        </div>
    </body>
</html>

