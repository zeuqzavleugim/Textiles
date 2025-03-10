@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('PlayerasCuelloO')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">PLAYERAS PERSONALIZADAS CUELLO EN "O"</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Camisetas-Cuello-redondo-Negras/Camisetas-cuello-redondo-negras-personalizadas.png" alt="PLAYERAS-PERSONALIZADAS-CUELLO-EN-'O'">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('sudaderas')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">SUDADERAS PERSONALIZADAS</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Sudadera-IPADE/Sudadera-gris-IPADE-personalizada.png" alt="SUDADERAS-PERSONALIZADAS" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Textiles-Promocionales/Chamarra-blanca-gorro/Chamarra-blanca-con-gorro-desprndible.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Chamarra-blanca-gorro/Chamarra-blanca-con-gorro-desprndible-detalle1.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Chamarra-blanca-gorro/Chamarra-blanca-con-gorro-desprndible-detalle2.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Chamarra-blanca-gorro/Chamarra-blanca-con-gorro-desprndible-trasera.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B CHAMARRAS PREMIUM PERSONALIZADAS</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Diseñamos chamarras premium de alta calidad para tus 
                            colaboradores, confeccionadas con materiales de 
                            primera y siguiendo las últimas tendencias en moda. 
                            Podemos crear modelos personalizados adaptados a las 
                            necesidades específicas de tu empresa. Disponibles 
                            en una amplia variedad de estilos y colores, nuestras 
                            chamarras combinan durabilidad y estilo, garantizando 
                            que tu equipo luzca profesional y esté protegido.
                        </p>
                        <div class='position-info-color tip-flex'>
                            <!-- <div class='divv'>
                                <h3><strong>Composición</strong></h3>
                                <ul>
                                    <li>100% Algodón</li>
                                </ul>
                            </div> -->
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