@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('pantalonesDeTrabajo')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">PANTALONES DE TRABAJO</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Pantalones-de-trabajo/Pantalon-de-trabajo-derecha.png" alt="PANTALONES-DE-TRABAJO">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route( 'batasDeTrabajo' ) }}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">BATAS DE TRABAJO</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Bata-Manga-larga-Azul-Marino/Bata-manga-larga-azul-marino-frente-completo.png" alt="BATAS-DE-TRABAJO" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Uniformes/Pantalones-de-trabajo-ignifugos/Pantalon-de-trabajo-ignifugo-derecha.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Pantalones-de-trabajo-ignifugos/Pantalon-de-trabajo-ignifugo-izquierda.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Pantalones-de-trabajo-ignifugos/Pantalon-de-trabajo-ignifugo-detalle-izquierda.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Pantalones-de-trabajo-ignifugos/Pantalon-trabajo-ignifugo-derecha.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B PANTALONES DE TRABAJO IGNIFUGO</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Nuestros Pantalones Ignífugos de Trabajo ofrecen 
                            comodidad y seguridad en entornos exigentes. 
                            Ideales para actividades que requieren movimiento, 
                            están confeccionados con gabardina ignífuga que 
                            protege contra fuego y arco eléctrico. Además, 
                            cuentan con control de estática, protección solar 
                            y resistencia a salpicaduras de ácidos. Estos 
                            pantalones duraderos se mueven contigo, 
                            garantizando la máxima protección y comodidad en 
                            el trabajo.
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