@include('layaut.heat')
    <body class='body-pag-home'>
        @include('componentes.menu')
        <header>
            <div class='sec-text-unifor'>
                <div class='sec-img-unifor-position'>
                    <img src="../img/Banners/Banner-uniformes.png" alt="texto" />
                </div>
                <div class='sec-text-unifor-position'>
                    <h1 class='titulo-hs-tit colors-narj'>
                        <strong>UNIFORMES DE TRABAJO B2B</strong>
                    </h1>
                    <p class='colors-blanc textShadow'>
                        En Magic Pop ofrecemos uniformes para tus colaboradores, asegurando 
                        su protección en las actividades diarias. Nuestros uniformes 
                        cumplen con altos estándares de calidad, garantizando calidad en 
                        nuestros uniformes.
                    </p>
                </div>
            </div>
        </header>

        <div>
            <div>
                <section class='cuadricula-grid seccion-title-text body-pag-uniformes'>
                    <div >
                        <a href="{{route('batasDeTrabajo')}}" class="tarjeta-cuadrada movarr" id="Batas-De-Trabajo" onmousemove="movim('Batas-De-Trabajo')" onmouseout="regres('Batas-De-Trabajo')">
                            <img src="../img/productos/Pagina-Uniformes/Batas-de-trabajo.png" alt="BATAS DE TRABAJO" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>BATAS DE TRABAJO</strong>
                            </h2>
                        </a>
                    </div>
                    <div >
                        <a href="{{route('batasTrabajoMangDesp')}}" class="tarjeta-cuadrada movarr" id="Batas-De-Trabajo-Mangas-Desprendibles" onmousemove="movim('Batas-De-Trabajo-Mangas-Desprendibles')" onmouseout="regres('Batas-De-Trabajo-Mangas-Desprendibles')">
                            <img src="../img/productos/Pagina-Uniformes/Batas-de-trabajo-mangas-desprendibles.png" alt="BATAS DE TRABAJO CON MANGAS DESPRENDIBLES" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>BATAS DE TRABAJO CON MANGAS DESPRENDIBLES</strong>
                            </h2>
                        </a>
                    </div>
                    <div >
                        <a href="{{route('batasIgnifugas')}}" class="tarjeta-cuadrada movarr" id="Bata-Ignifuga" onmousemove="movim('Bata-Ignifuga')" onmouseout="regres('Bata-Ignifuga')">
                            <img src="../img/productos/Pagina-Uniformes/Bata-ignifuga.png" alt="BATAS IGNIFUGAS" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>BATAS IGNIFUGAS</strong>
                            </h2>
                        </a>
                    </div>
                    <div >
                        <a href="{{route('batasIgnifugasMangasDes')}}" class="tarjeta-cuadrada movarr" id="Bata-Ignifuga-Mangas-Desprendibles" onmousemove="movim('Bata-Ignifuga-Mangas-Desprendibles')" onmouseout="regres('Bata-Ignifuga-Mangas-Desprendibles')">
                            <img src="../img/productos/Pagina-Uniformes/Bata-ignifuga-mangas-desprendibles.png" alt="BATAS IGNIFUGA CON MANGAS DESPRENDIBLES" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>BATAS IGNIFUGA CON MANGAS DESPRENDIBLES</strong>
                            </h2>
                        </a>
                    </div>
                    <div >
                        <a href="{{route('camisolas')}}" class="tarjeta-cuadrada movarr" id="Camisola-De-Trabajo" onmousemove="movim('Camisola-De-Trabajo')" onmouseout="regres('Camisola-De-Trabajo')">
                            <img src="../img/productos/Pagina-Uniformes/Camisola-de-trabajo.png" alt="CAMISOLAS DE TRABAJO" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>CAMISOLAS DE TRABAJO</strong>
                            </h2>
                        </a>
                    </div>
                    <div >
                        <a href="{{route('camisolasMangasDes')}}" class="tarjeta-cuadrada movarr" id="Camisola-Mangas-Mesprendibles" onmousemove="movim('Camisola-Mangas-Mesprendibles')" onmouseout="regres('Camisola-Mangas-Mesprendibles')">
                            <img src="../img/productos/Pagina-Uniformes/Camisola-mangas-desprendibles.png" alt="CAMISOLAS CON MANGAS DESPRENDIBLES" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>CAMISOLAS CON MANGAS DESPRENDIBLES</strong>
                            </h2>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('camisolaIgnifugas')}}" class="tarjeta-cuadrada movarr" id="Camisola-Ignifuga" onmousemove="movim('Camisola-Ignifuga')" onmouseout="regres('Camisola-Ignifuga')">
                            <img src="../img/productos/Pagina-Uniformes/Camisola-ignifuga.png" alt="CAMISOLAS IGNIFUGA" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>CAMISOLAS IGNIFUGA</strong>
                            </h2>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('batasIgnifugasMangasDes')}}" class="tarjeta-cuadrada movarr" id="Camisola-Ignifuga-Mangas-Desprendibles" onmousemove="movim('Camisola-Ignifuga-Mangas-Desprendibles')" onmouseout="regres('Camisola-Ignifuga-Mangas-Desprendibles')">
                            <img src="../img/productos/Pagina-Uniformes/Camisola-ignifuga-mangas-desprendibles.png" alt="CAMISOLAS IGNIFUGA CON MANGAS DESPRENDIBLES" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>CAMISOLAS IGNIFUGA CON MANGAS DESPRENDIBLES</strong>
                            </h2>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{route('pantalonesDeTrabajo')}}" class="tarjeta-cuadrada movarr" id="Pantalon-De-Trabajo" onmousemove="movim('Pantalon-De-Trabajo')" onmouseout="regres('Pantalon-De-Trabajo')">
                            <img src="../img/productos/Pagina-Uniformes/Pantalon-de-trabajo.png" alt="PANTALONES DE TRABAJO" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>PANTALONES DE TRABAJO</strong>
                            </h2>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{route('pantalonesDeTrabajoIgnifugo')}}" class="tarjeta-cuadrada movarr" id="Pantalon-De-Trabajo-Ignifugo" onmousemove="movim('Pantalon-De-Trabajo-Ignifugo')" onmouseout="regres('Pantalon-De-Trabajo-Ignifugo')">
                            <img src="../img/productos/Pagina-Uniformes/Pantalon-de-trabajo-ignifugo.png" alt="PANTALONES DE TRABAJO IGNIFUGO" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>PANTALONES DE TRABAJO IGNIFUGO</strong>
                            </h2>
                        </a>
                    </div>
                </section>
                <section class='seccion-text fondo-verd' >
                    <p>
                        Podemos diseñar soluciones personalizadas que se ajusten a las 
                        necesidades de tu equipo, ofreciendo uniformes que cumplan con 
                        tus expectativas en diseño, materiales y características especiales.
                    </p>
                </section>
                <section class='seccion-text'>
                    <div class='div-Centrado'>
                        <button class="form-button" type="button">
                            <a class="a" href="{{route('contacto')}}">¡Contactanos y hagamos algo juntos!</a>
                        </button>
                    </div>
                </section>
            </div>
            <div>
                @include('componentes.whatsButon')
                @include('componentes.foter')
            </div>
        </div>
    </body>
</html>