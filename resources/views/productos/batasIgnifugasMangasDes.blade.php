@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('batasIgnifugas')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">BATAS IGNIFUGAS</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Batas-Ignifugas/Bata-de-trabajo-ignifuga.png" alt="BATAS-IGNIFUGAS">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('camisolas')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">CAMISOLA DE TRABJAO</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Camisola-de-trabajo/Camisola-ginda-frente.png" alt="CAMISOLA-DE-TRABJAO" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Uniformes/Batas-ignifugas-con-mangas-desprendibles/Bata-ignifuga-con-mangas-desprendibles-frente.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Batas-ignifugas-con-mangas-desprendibles/Bata-ignifuga-con-mangas-desprendibles-acercamiento-lateral.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Batas-ignifugas-con-mangas-desprendibles/Bata-ignifuga-con-mangas-desprendibles-acercamiento-frente.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Batas-ignifugas-con-mangas-desprendibles/Batas-ignifugas-con-mangas-desprendibles-trasera.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B BATAS IGNIFUGAS CON MANGAS DESPRENDIBLES</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            En ropa de trabajo nuestras Batas de Seguridad con 
                            mangas desprendibles son ideales para ambientes 
                            laborales exigentes. Elaboradas con los más altos 
                            estándares de calidad, estas prendas están diseñadas 
                            para entornos donde la seguridad es esencial. 
                            Ofrecen protección contra fuego y arco eléctrico, 
                            control de estática, protección solar y resistencia 
                            a salpicaduras de ácidos.
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