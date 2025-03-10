@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('camisolasMangasDes')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">CAMISOLA CON MANGAS DESPRENDIBLES</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Camisola-de-trabajo-manga-desprendible/Camisola-mangas-desprendibles-flotando.png" alt="CAMISOLA-CON-MANGAS-DESPRENDIBLES">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('camisolaIgnifugasMangasDes')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">CAMISOLA IGNIFUGA CON MANGAS DESPRENDIBLES</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Camisolas-ignifugas-mangas-desprendibles/Camisola-ignifuga-mangas-desprendibles-frente.png" alt="CAMISOLA-IGNIFUGA-CON-MANGAS-DESPRENDIBLES" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Uniformes/Camisolas-ignifugas/Camisola-ignifuga-frenete.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Camisolas-ignifugas/Camisola-ignifuga-lado-derecho.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Camisolas-ignifugas/Camisola-ignifuga-lado-izquierdo.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Camisolas-ignifugas/Camisola-ignifuga-trasera.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B CAMISOLAS IGNIFUGA</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Diseñamos Camisolas Ignífugas de Trabajo están 
                            diseñadas para brindar comodidad, durabilidad 
                            y protección a tus colaboradores. Confeccionadas 
                            con gabardina ignífuga, ofrecen protección 
                            contra fuego y arco eléctrico, control de 
                            estática, protección solar y resistencia a 
                            salpicaduras de ácidos. Estas versátiles 
                            camisolas pueden incluir bolsas en el pecho o, 
                            si el diseño lo requiere, no tener bolsillos, 
                            adaptándose a las necesidades específicas de 
                            tu equipo.
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