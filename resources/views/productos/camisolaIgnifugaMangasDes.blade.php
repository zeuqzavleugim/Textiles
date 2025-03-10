@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('camisolaIgnifugas')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">CAMISOLA IGNIFUGA</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Camisolas-ignifugas/Camisola-ignifuga-frenete.png" alt="CAMISOLA-IGNIFUGA">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('pantalonesDeTrabajo')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">PANTALONES DE TRABAJO</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Pantalones-de-trabajo/Pantalon-de-trabajo-derecha.png" alt="PANTALONES-DE-TRABAJO" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips '>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Uniformes/Camisolas-ignifugas-mangas-desprendibles/Camisola-ignifuga-mangas-desprendibles-frente.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Camisolas-ignifugas-mangas-desprendibles/Camisola-ignifuga-mangas-desprendibles-brazo-derecho.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Camisolas-ignifugas-mangas-desprendibles/Camisola-ignifuga-mangas-desprendibles-brazo-izquierdo.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Camisolas-ignifugas-mangas-desprendibles/Camisola-ignifuga-mangas-desprendibles-trasera.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B CAMISOLAS IGNIFUGA CON MASNGAS DESPRENDIBLES</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Nuestras Camisolas de Trabajo con manga desprendible 
                            están diseñadas para ofrecer comodidad, durabilidad 
                            y protección a tus colaboradores. Estas versátiles 
                            camisolas cuentan con mangas removibles para mayor 
                            comodidad y flexibilidad. Ofrecen protección contra 
                            fuego y arco eléctrico, control de estática, 
                            protección solar y resistencia a salpicaduras de 
                            ácidos.
                        </p>
                        <div class='position-info-color tip-flex'>
                            <div class='divv'>
                                <h3><strong>Composición</strong></h3>
                                <ul>
                                    <li>100% Algodón</li>
                                    <li>65% Algodón 35% Poliéster</li>
                                    <li>20% Algodón 80% Poliéster</li>
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