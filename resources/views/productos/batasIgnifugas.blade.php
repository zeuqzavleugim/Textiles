@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('batasTrabajoMangDesp')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">BATAS CON MANGAS DESPRENDIBLES</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Batas-de-trabajo-mangas-desprendibles/Batas-de-trabajo-con-mangas-desprendibles-frente.png" alt="BATAS-DE-TRABAJO">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('batasIgnifugasMangasDes')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">BATAS IGNIFUGAS CON MANGAS DESPRENDIBLES</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Batas-ignifugas-con-mangas-desprendibles/Bata-ignifuga-con-mangas-desprendibles-frente.png" alt="BATAS-IGNIFUGAS-CON-MANGAS-DESPRENDIBLES" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips '>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Uniformes/Batas-Ignifugas/Bata-de-trabajo-ignifuga.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Batas-Ignifugas/Bata-de-trabajo-ignifuga-lateral.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Batas-Ignifugas/Bata-de-trabajo-ignifuga-primer-plano.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Batas-Ignifugas/Bata-de-trabajo-ignifuga-trasera.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B BATAS IGNIFUGAS</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Contamos con Batas Ignífugas de Seguridad están 
                            diseñadas para entornos laborales exigentes, 
                            proporcionando comodidad, durabilidad y resistencia. 
                            Su tela es ignífuga y resistente, ofreciendo 
                            protección contra fuego y arco eléctrico, control 
                            de estática, protección solar y resistencia a 
                            salpicaduras de ácidos, lo que las hace perfectas 
                            para un uso intensivo.
                        </p>
                        <div class='position-info-color tip-flex'>
                            <div class='divv'>
                                <h3><strong>Composición</strong></h3>
                                <ul>
                                    <li>100% Algodón</li>
                                </ul>
                            </div>
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