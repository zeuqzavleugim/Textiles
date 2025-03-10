@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('chamarras')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">CHAMARRAS PERSONALIZADAS</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Chamarra-blanca-gorro/Chamarra-blanca-con-gorro-desprndible.png" alt="CHAMARRAS-PERSONALIZADAS">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('chalecos')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">CHALECOS NAYLON</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Textiles-Promocionales/Chaleco-IPADE/Chaleco-ipade-personalizado.png" alt="CHALECOS-NAYLON" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Textiles-Promocionales/Sudadera-IPADE/Sudadera-gris-IPADE-personalizada.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Sudadera-IPADE/Sudadera-gris-IPADE-personalizada-detalle3.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Sudadera-IPADE/Sudadera-gris-IPADE-personalizada-detalle2.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Textiles-Promocionales/Sudadera-IPADE/Sudadera-gris-IPADE-personalizada-detalle.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B SUDADERAS PREMIUM PERSONALIZADAS</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Ofrecemos sudaderas premium personalizadas diseñadas 
                            para adaptarse a las necesidades de tu empresa o 
                            negocio. Confeccionadas con materiales premium, 
                            estas sudaderas brindan confort y estilo sin igual. 
                            Son perfectas para eventos corporativos o como 
                            regalos promocionales, y cada sudadera puede ser 
                            personalizada. Disponibles en una variedad de 
                            colores y estilos, combinan durabilidad y 
                            apariencia profesional.
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