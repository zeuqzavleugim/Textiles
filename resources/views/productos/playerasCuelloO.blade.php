@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('PlayerasCuelloV')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">PLAYERAS PERSONALIZADAS CUELLO EN "V"</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Camisetas-Cuello-V-Blancas/Camiseta-cuello-v-blanca-personalizada.png" alt="PLAYERAS-PERSONALIZADAS-CUELLO-EN-'V'">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('chamarras')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">CHAMARRAS PERSONALIZADAS</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Chamarra-blanca-gorro/Chamarra-blanca-con-gorro-desprndible.png" alt="CHAMARRAS-PERSONALIZADAS" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Textiles-Promocionales/Camisetas-Cuello-redondo-Negras/Camisetas-cuello-redondo-negras-personalizadas.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Camisetas-Cuello-redondo-Negras/Camisetas-cuello-redondo-negras-personalizadas-detalle2.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Camisetas-Cuello-redondo-Negras/Camisetas-cuello-redondo-negras-personalizadas-detalle3.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Camisetas-Cuello-redondo-Negras/Camisetas-cuello-redondo-negras-personalizadas-detalle.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B PLAYERAS PERSONALIZADAS CUELLO EN "O"</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Diseñamos playeras premium de alta calidad que siguen 
                            las últimas tendencias en moda. Ofrecemos diseños 
                            únicos adaptados a las necesidades específicas de tu 
                            empresa, garantizando que tu equipo luzca profesional 
                            y a la moda. Disponibles en una amplia variedad de 
                            colores, nuestras playeras combinan durabilidad y 
                            estilo para cualquier entorno laboral, y pueden 
                            personalizarse según los requerimientos de tu negocio.
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
                        <p class='fond-color-text'>
                            <strong># de piezas mínimas es de 100</strong>
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