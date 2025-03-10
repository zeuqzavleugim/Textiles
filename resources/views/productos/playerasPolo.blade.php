@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('gorras')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">GORRAS PERSONALIZADAS</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Gorras/Gorras-personalizadas-detalle.png" alt="GORRAS-PERSONALIZADAS">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('playerasPoloDryfit')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">PLAYERAS POLO PERSONALIZADAS DRYFIT</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Playeras-Dry-fit-polo-Stihl/Polo-dry-fit-stihl-personalizada.png" alt="PLAYERAS-POLO-PERSONALIZADAS-DRYFIT" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Textiles-Promocionales/Playeras-polo-Azul/Playera-polo-azul-rey-100-porciento-algodon-personalizadas.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Playeras-polo-Azul/Playera-polo-azul-rey-100-porciento-algodon-personalizadas-detalle.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Playeras-polo-Azul/Playera-polo-azul-rey-100-porciento-algodon-personalizadas-detalle2.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Playeras-polo-Azul/Playera-polo-azul-rey-100-porciento-algodon-personalizadas-detalle3.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B PLAYERAS POLO PERSONALIZADAS</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Las playeras Polo que diseñamos ofrecen un toque 
                            de versatilidad y elegancia para tu equipo de 
                            trabajo en cualquier ocasión. Confeccionadas con 
                            materiales de alta calidad, puedes personalizarlas 
                            según las necesidades de tu empresa o negocio. 
                            Disponibles en una variedad de estilos y colores, 
                            nuestras playeras Polo combinan durabilidad y 
                            estilo, asegurando que tu equipo luzca profesional 
                            en cualquier entorno laboral. Puedes 
                            personalizarlas según las necesidades de tu 
                            empresa o negocio.
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