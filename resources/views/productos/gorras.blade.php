@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('pants')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">PANTS PERSONALIZADOS</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Pants-Toper/Pants-personalizados-detalle2.png" alt="PANTS-PERSONALIZADOS">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('playerasPolo')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">PLAYERAS POLO PERSONALIZADAS</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Playeras-polo-Azul/Playera-polo-azul-rey-100-porciento-algodon-personalizadas.png" alt="PLAYERAS-POLO-PERSONALIZADAS" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img img-gorr" src='../img/productos/Pagina-Textiles-Promocionales/Gorras/Gorras-personalizadas-detalle.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Gorras/Gorras-personalizadas-detalle2.png' alt="img pequeña 1"/>
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Gorras/Gorras-personalizadas-trasera.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Gorras/Gorras-personalizadas.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B GORRAS PERSONALIZADAS</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Nuestras gorras premium son el complemento ideal 
                            para tus colaboradores. Ya sea para campañas 
                            publicitarias, eventos escolares o promociones 
                            de marca, se adaptan a cualquier necesidad. 
                            Utilizamos técnicas avanzadas de personalización 
                            y materiales de alta calidad para asegurar que 
                            cumplan con todas tus expectativas.
                        </p>
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