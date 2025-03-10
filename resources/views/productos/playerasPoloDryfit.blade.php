@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('playerasPolo')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">PLAYERAS POLO PERSONALIZADAS</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Playeras-polo-Azul/Playera-polo-azul-rey-100-porciento-algodon-personalizadas.png" alt="PLAYERAS-POLO-PERSONALIZADAS">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('PlayerasCuelloV')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">PLAYERAS PERSONALIZADAS CUELLO EN "V"</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Camisetas-Cuello-V-Blancas/Camiseta-cuello-v-blanca-personalizada.png" alt="PLAYERAS-POLO-PERSONALIZADAS-DRYFIT" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Textiles-Promocionales/Playeras-Dry-fit-polo-Stihl/Polo-dry-fit-stihl-personalizada.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Playeras-Dry-fit-polo-Stihl/Polo-dry-fit-stihl-personalizada-detalle.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Playeras-Dry-fit-polo-Stihl/Polo-dry-fit-stihl-personalizada-detalle2.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Playeras-Dry-fit-polo-Stihl/Polo-dry-fit-stihl-personalizada-trasera.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B PLAYERAS POLO PERSONALIZADAS DRYFIT</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Ofrecemos playeras Polo ofrecen un toque de 
                            versatilidad y elegancia para tu equipo de 
                            trabajo en cualquier ocasión. Confeccionadas 
                            con tecnología Dryfit, eliminan la humedad y 
                            permiten que la transpiración se evapore, 
                            manteniéndote fresco y seco durante el día. 
                            Personalízalas según las necesidades de tu 
                            empresa o negocio. Disponibles en una variedad 
                            de estilos y colores, nuestras playeras Polo 
                            combinan durabilidad y estilo para cualquier 
                            entorno laboral. Puedes personalizarlas según 
                            las necesidades de tu empresa o negocio.
                        </p>
                        <div class='position-info-color tip-flex'>
                            <div class='divv'>
                                <h3><strong>Composición</strong></h3>
                                <ul>
                                    <li>100% Poliéster</li>
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