@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('pantalonesDeTrabajoIgnifugo')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">PANTALONES DE TRABAJO IGNIFUGO</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Pantalones-de-trabajo-ignifugos/Pantalon-de-trabajo-ignifugo-derecha.png" alt="PANTALONES-DE-TRABAJO-IGNIFUGO">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('batasTrabajoMangDesp')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">BATAS DE TRABAJO CON MANGAS DESPRENDIBLES</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Batas-de-trabajo-mangas-desprendibles/Batas-de-trabajo-con-mangas-desprendibles-frente.png" alt="BATAS-DE-TRABAJO-CON-MANGAS-DESPRENDIBLES" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Uniformes/Bata-Manga-larga-Azul-Marino/Bata-manga-larga-azul-marino-frente-completo.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Bata-Manga-larga-Azul-Marino/Bata-manga-larga-azul-marino-frente-completo-primer-plano.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Bata-Manga-larga-Azul-Marino/Bata-manga-larga-azul-marino-lateral derecha.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Bata-Manga-larga-Azul-Marino/Bata-manga-larga-azul-marino-trasera-completo.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B BATAS DE TRABAJO</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Nuestras Batas de Seguridad para entornos laborales 
                            exigentes ofrecen comodidad, durabilidad y resistencia. 
                            Confeccionadas con los más altos estándares de calidad, 
                            estas prendas están diseñadas para aquellos entornos donde 
                            la seguridad es primordial. Su tela es resistente y 
                            duradera, ideal para un uso intensivo.
                        </p>
                        <div class='position-info-color tip-flex'>
                            <div class='divv'>
                                <h3><strong>Composición</strong></h3>
                                <ul>
                                    <li>100% Algodón</li>
                                    <li>20% Algodón 80% Poliéster</li>
                                    <li>65% Algodón 35% Poliéster</li>
                                </ul>
                            </div>
                        </div>
                        <div class='position-info-color tip-flex'>
                            <div class='divv'>
                                <h3><strong>Colores:</strong></h3>
                                <div class='tip-flex tip-flexes'>
                                    <div class='circle blue'></div>
                                    <div class='circle redd'></div>
                                    <div class='circle purple'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <section>
            @include('componentes.form')
        </section>
        <div>
            <div>
                @include('componentes.whatsButon')
                @include('componentes.foter')
            </div>
        </div>
    </body>
</html>