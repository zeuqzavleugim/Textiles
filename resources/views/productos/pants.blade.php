@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('chalecosPersonalizados')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">CHALECOS NEOPRENO</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Chaleco-INGREDION/Chaleco-ingredion-personalizado.png" alt="CHALECOS-NEOPRENO">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('gorras')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">GORRAS PERSONALIZADAS</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Gorras/Gorras-personalizadas-detalle.png" alt="GORRAS-PERSONALIZADAS" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Textiles-Promocionales/Pants-Toper/Pants-personalizados-detalle2.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Pants-Toper/Pants-personalizados-detalle.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Pants-Toper/Pants-personalizados-detalle3.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Pants-Toper/Pants-personalizados.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B PANTS PERSONALIZADAS</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Confeccionamos pants personalizados que combinan 
                            confort y durabilidad, perfectos para cualquier 
                            actividad laboral o deportiva. Confeccionados con 
                            materiales de alta calidad, ofrecen ajuste y 
                            resistencia superior. Personalizados para 
                            adaptarse a las necesidades específicas de tu 
                            empresa o equipo. Disponibles en una variedad de 
                            colores y estilos, aseguran que tu equipo luzca 
                            profesional y esté cómodo en todo momento.
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