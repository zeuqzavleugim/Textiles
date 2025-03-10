@include('layaut.heat')
    <body class='body-pag-home'>
        @include('componentes.menu')
        <header>
            <div class='sec-text-unifor-n'>
                <div class='sec-img-unifor-position'>
                    <img src="../img/Banners/Banner-textiles-promocionales.png" alt="Banner textiles promocionales" />
                </div>
                <div class='sec-text-unifor-position'>
                    <h1 class='titulo-hs-tit colors-narj'>
                        <strong>B2B TEXTILES PREMIUM PERSONALIZADOS</strong>
                    </h1>
                    <p class='colors-blanc textShadow'>
                        En Magic Pop ofrecemos textiles premium para tus colaboradores. 
                        Desde playeras con el logo de tu empresa hasta sudaderas 
                        personalizadas. Todas nuestras prendas están diseñadas con 
                        materiales premium que usan las grandes marcas.
                    </p>
                </div>
            </div>
        </header>
        <div>
            <div>
                <section class='cuadricula-grid seccion-title-text body-pag-textiles-prom'>
                    <div>
                        <a href="{{route('playerasPolo')}}" class="tarjeta-cuadrada movarr" id="PLayeras-Polo" onmousemove="movim('PLayeras-Polo')" onmouseout="regres('PLayeras-Polo')">
                            <img src="../img/productos/Pagina-Textiles-Promocionales/PLayeras-Polo.png" alt="PLAYERAS POLO PERSONALIZADAS" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>PLAYERAS POLO PERSONALIZADAS</strong>
                            </h2>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('playerasPoloDryfit')}}" class="tarjeta-cuadrada movarr" id="PLayeras-Dry-Fit" onmousemove="movim('PLayeras-Dry-Fit')" onmouseout="regres('PLayeras-Dry-Fit')">
                            <img src="../img/productos/Pagina-Textiles-Promocionales/PLayeras-Dry-Fit.png" alt="PLAYERAS POLO PERSONALIZADAS DRYFIT" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>PLAYERAS POLO PERSONALIZADAS DRYFIT</strong>
                            </h2>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('PlayerasCuelloV')}}" class="tarjeta-cuadrada movarr" id="Playeras-Cuello-V" onmousemove="movim('Playeras-Cuello-V')" onmouseout="regres('Playeras-Cuello-V')">
                            <img src="../img/productos/Pagina-Textiles-Promocionales/Playeras-Cuello-V.png" alt="PLAYERAS PERSONALIZADAS CUELLO EN 'V'" class="tarjeta-cuadrada-img img-play"/>
                            <h2>
                                <strong>PLAYERAS PERSONALIZADAS CUELLO EN "V"</strong>
                            </h2>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('PlayerasCuelloO')}}" class="tarjeta-cuadrada movarr" id="Playeras-Cuello-O" onmousemove="movim('Playeras-Cuello-O')" onmouseout="regres('Playeras-Cuello-O')">
                            <img src="../img/productos/Pagina-Textiles-Promocionales/Playeras-Cuello-O.png" alt="PLAYERAS PERSONALIZADAS CUELLO EN 'O'" class="tarjeta-cuadrada-img img-play"/>
                            <h2>
                                <strong>PLAYERAS PERSONALIZADAS CUELLO EN "O"</strong>
                            </h2>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('chamarras')}}" class="tarjeta-cuadrada movarr" id="Chamarras" onmousemove="movim('Chamarras')" onmouseout="regres('Chamarras')">
                            <img src="../img/productos/Pagina-Textiles-Promocionales/Chamarras.png" alt="CHAMARRAS PERSONALIZADAS" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>CHAMARRAS PERSONALIZADAS</strong>
                            </h2>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('sudaderas')}}" class="tarjeta-cuadrada movarr" id="Sudaderas" onmousemove="movim('Sudaderas')" onmouseout="regres('Sudaderas')">
                            <img src="../img/productos/Pagina-Textiles-Promocionales/Sudaderas.png" alt="SUDADERAS PERSONALIZADAS" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>SUDADERAS PERSONALIZADAS</strong>
                            </h2>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('chalecos')}}" class="tarjeta-cuadrada movarr" id="Chalecos-Personalizados" onmousemove="movim('Chalecos-Personalizados')" onmouseout="regres('Chalecos-Personalizados')">
                            <img src="../img/productos/Pagina-Textiles-Promocionales/Chalecos-Personalizados.png" alt="CHALECOS NAYLON" class="tarjeta-cuadrada-img img-chal"/>
                            <h2>
                                <strong>CHALECOS NAYLON</strong>
                            </h2>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('chalecosPersonalizados')}}" class="tarjeta-cuadrada movarr" id="Chalecos-Personalizados-" onmousemove="movim('Chalecos-Personalizados-')" onmouseout="regres('Chalecos-Personalizados-')">
                            <img src="../img/productos/Pagina-Textiles-Promocionales/Chalecos-Personalizados-.png" alt="CHALECOS NEOPRENO" class="tarjeta-cuadrada-img img-chal"/>
                            <h2>
                                <strong>CHALECOS NEOPRENO</strong>
                            </h2>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{route('pants')}}" class="tarjeta-cuadrada movarr" id="Pants-Personalizados" onmousemove="movim('Pants-Personalizados')" onmouseout="regres('Pants-Personalizados')">
                            <img src="../img/productos/Pagina-Textiles-Promocionales/Pants-Personalizados.png" alt="PANTS PERSONALIZADOS" class="tarjeta-cuadrada-img"/>
                            <h2>
                                <strong>PANTS PERSONALIZADOS</strong>
                            </h2>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{route('gorras')}}" class="tarjeta-cuadrada movarr" id="Gorras" onmousemove="movim('Gorras')" onmouseout="regres('Gorras')">
                            <img src="../img/productos/Pagina-Textiles-Promocionales/Gorras.png" alt="GORRAS PERSONALIZADAS" class="tarjeta-cuadrada-img img-gorr"/>
                            <h2>
                                <strong>GORRAS PERSONALIZADAS</strong>
                            </h2>
                        </a>
                    </div>
                </section>
                <section class='seccion-text fondo-verd' >
                    <p>
                        Ofrecemos soluciones personalizadas que se adapten específicamente 
                        a los requerimientos de tu equipo.
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