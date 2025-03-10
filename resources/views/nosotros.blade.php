@include('layaut.heat')
    <body class="body-pag-nosotros">
        @include('componentes.menu')
        <div>
            <div class='barra-hr-verde'></div>
            <div class="img-nosotros-magic"></div>
            <div class='barra-hr-naranja'></div>
            <section class="img-log-nos">
                <picture>
                    <img src="../img/icon/IconoLogotipo.png" alt="" />
                </picture>
            </section>
            <section class="seccion-cuadros">
                <div class="colors-naranj">
                    <p class="nos-alin">
                        Es una empresa enfocada en medianas y grandes 
                        empresas que buscan productos textiles para su 
                        personal de trabajo.
                    </p>
                </div>
                <div class="colors-naranj">
                    <picture>
                        <img src="../img/Iconos-nosotros/Medianas-y-grandes-empresas.png" alt="" />
                    </picture>
                </div>
                <div class="colors-gren">
                    <picture>
                        <img src="../img/Iconos-nosotros/100-calidad.png" alt="" />
                    </picture>
                </div>
                <div class="colors-naranj">
                    <p class="nos-alin">
                        Estamos comprometidos a entregar a nuestros 
                        clientes la mejor calidad en cada uno de los 
                        proyectos en los que participamos.
                    </p>
                </div>
                <div class="colors-gren">
                    <p>
                        Contamos con gran experiencia desarrollando, 
                        produciendo y personalizando diversos productos 
                        textiles desde batas, chamarras, pants, playeras, 
                        gorras y mas.
                    </p>
                </div>
                <div class="colors-gren">
                    <picture>
                        <img src="../img/Iconos-nosotros/Experiencia.png" alt="" />
                    </picture>
                </div>
                <div class="colors-roja">
                    <picture>
                        <img src="../img/Iconos-nosotros/Desarrollo-de-textiles.png" alt="" />
                    </picture>
                </div>
                <div class="colors-roja">
                    <p class="nos-alin">
                        También desarrollamos prendas específicas que 
                        se adapten a las necesidades o áreas de tu 
                        empresa.
                    </p>
                </div>
                <div class="colors-roja">
                    <p>
                        Además de ir junto con ellos paso a paso 
                        asesorándolos durante cada uno de los procesos 
                        del proyecto en los que hemos colaborado, 
                        brindando el mejor servicio y resultado a 
                        nuestros clientes.
                    </p>
                </div>
                <div class="colors-naranj">
                    <picture>
                        <img src="../img/Iconos-nosotros/Asesoria-y-seguimiento.png" alt="" />
                    </picture>
                </div>
            </section>
            <div>
                <section>
                    <h1 class="titulo-hs">
                        <strong>Nosotros </strong>
                    </h1>
                </section>
                <section class="seccion-text">
                    <h2 class="titulo-hs">
                        <strong>
                            Proyecto en los que "Magic Pop" a colaborado
                        </strong>
                    </h2>
                    <div class="cuadricula-grid-3 ">
                        <div class="tarjeta-de-marca" >
                            <a href="{{route('chalecosPersonalizados')}}" class="img-marca" >
                                <picture >
                                    <img src='../img/clientes-nosotros/Ingredion.png' alt="prueba"/>
                                </picture>
                            </a>
                        </div>
                        <div class="tarjeta-de-marca" >
                            <a href="{{route('sudaderas')}}" class="img-marca" >
                                <picture >
                                    <img src='../img/clientes-nosotros/Ipade.png' alt="prueba"/>
                                </picture>
                            </a>
                        </div>
                        <div class="tarjeta-de-marca" >
                            <a href="{{route('pants')}}" class="img-marca" >
                                <picture >
                                    <img src='../img/clientes-nosotros/Group472.png' alt="prueba"/>
                                </picture>
                            </a>
                        </div>
                    </div>
                    <h2 class="titulo-hs">
                        <strong>
                            Síguenos en Redes Sociales
                        </strong>
                    </h2>
                    <div class="cuadricula-grid-3-">
                        <a href="https://www.facebook.com/MagicPopOficial/" class=" icon-img-redes-">
                            <picture class="">
                                <img src="../img/Iconos-nosotros/facebook-magicpop.png" alt="face" />
                            </picture>
                        </a>
                        <a href="https://www.instagram.com/magicpopmxdigital" class=" icon-img-redes-">
                            <picture class="">
                                <img src="../img/Iconos-nosotros/instagram-magicpop.png" alt="insta" />
                            </picture>
                        </a>
                        <a href="" class=" icon-img-redes-">
                            <picture>
                                <img src="../img/Iconos-nosotros/tik-tok-magicpop.png" alt="tick" />
                            </picture>
                        </a>
                    </div>
                </section>
                <section class="div-Centrado"> 
                    <div class="position-buton-home">
                        <button class="form-button" type="button">
                            <a class="a" href="{{route('contacto')}}">¡Contactanos y hagamos algo juntos!</a>
                        </button>
                    </div>
                </section>
            </div>
            <div>
                @include('componentes.whatsButon')
                @include('componentes.foter')
            </div>
        </div>
    </body>
</html>