@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('sudaderas')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">SUDADERAS PERSONALIZADAS</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Sudadera-IPADE/Sudadera-gris-IPADE-personalizada.png" alt="SUDADERAS-PERSONALIZADAS">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('chalecosPersonalizados')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">CHALECOS NEOPRENO</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Chaleco-INGREDION/Chaleco-ingredion-personalizado.png" alt="CHALECOS-NEOPRENO" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Textiles-Promocionales/Chaleco-IPADE/Chaleco-ipade-personalizado.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Chaleco-IPADE/Chaleco-ipade-personalizado-detalle3.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Chaleco-IPADE/Chaleco-ipade-personalizado-detalle2.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Chaleco-IPADE/Chaleco-ipade-personalizado-trasera.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B CHALECOS PERSONALIZADAS NAYLON</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Confeccionados con los mejores materiales y siguiendo 
                            las últimas tendencias en moda, nuestros chalecos 
                            ofrecen una combinación perfecta de estilo y 
                            funcionalidad. Ideales para uniformes corporativos o 
                            eventos especiales, estos chalecos aseguran que tu 
                            equipo se vea profesional y a la moda en todo momento. 
                            Además, podemos personalizarlos para satisfacer las 
                            necesidades específicas de tu empresa.
                        </p>
                        <div class='position-info-color tip-flex'>
                            <div class='divv'>
                                <h3><strong>Composición</strong></h3>
                                <ul>
                                    <li>Naylon Capitonado</li>
                                </ul>
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