@include('layaut.heat')
    <body>
        @include('componentes.menu')
        <header>
            <div class='sec-text-unifor'>
                <div class='sec-img-unifor-position'>
                    <img src="../img/Banners/Proyectos-especiales.png" alt="Banner textiles promocionales" />
                </div>
                <div class='sec-text-unifor-position'>
                    <h1 class='titulo-hs-tit colors-narj'>
                        <strong>PROYECTOS TEXTILES ESPECIALES B2B</strong>
                    </h1>
                    <p class='colors-blanc textShadow'>
                        Realizamos proyectos personalizados para adaptarnos a las necesidades específicas de 
                        tu empresa o negocio, siempre siguiendo. Nos enorgullecemos de ofrecer soluciones 
                        personalizadas que no solo cumplen, sino que superan las expectativas de nuestros 
                        clientes.
                    </p>
                </div>
            </div>
        </header>
        <div>
            <div>
                <div class="linea1 lin-r"><img src="../img/productos/Pagina-Proyectos-Especiales/Background-fundas-personalizadas.png" alt=""></div>
                <div class="linea2 lin-v"><img src="../img/productos/Pagina-Proyectos-Especiales/Background-botiquines-personalizados.png" alt=""></div>
                <div class="linea3 lin-n"><img src="../img/productos/Pagina-Proyectos-Especiales/Background-paraguas-personalizados.png" alt=""></div>
                <section class='seccion-text body-pag-proyectos-esp'>
                    <div class="tarjeta-rectangular-1 ">
                        <picture class="tarjeta-rectangular-tam-img">
                            <img src="../img/productos/Pagina-Proyectos-Especiales/Fundas-personalizadas-para-productos.png" alt="FUNDAS" id="Fundas-personalizadas" onmousemove="Mmovim('Fundas-personalizadas')" onmouseout="Rregres('Fundas-personalizadas')" class="mov-tarje"/>
                        </picture>
                        <div class="tarjeta-rectangular-tam-text-buton">
                            <h2 class="colors-blanc titulo-hs-tit textShadow">FUNDAS</h2>
                            <p  onmousemove="Mmovim('Fundas-personalizadas')" onmouseout="Rregres('Fundas-personalizadas')" class="textShadow">
                                Diseñamos fundas personalizadas para una amplia gama de productos. Ya sea para 
                                teléfonos, tablets, herramientas u otros objetos, podemos crear la funda ideal 
                                para tu proyecto.
                            </p>
                            <button class="form-button" type="button">
                                <a class="a" href="{{route('contacto')}}">¡Contactanos y hagamos algo juntos!</a>
                            </button>
                        </div>
                    </div>
                    <div class="tarjeta-rectangular-1">
                        <div class="tarjeta-rectangular-tam-text-buton">
                            <h2 class="colors-blanc titulo-hs-tit textShadow">BOTIQUINES</h2>
                            <p onmousemove="Mmovim1('img2')" onmouseout="Rregres1('img2')" class="textShadow">
                                Fabricamos botiquines personalizados, creando estuches de alta calidad y 
                                llenándolos con lo esencial para cualquier emergencia. Ideales para oficinas, 
                                vehículos y eventos, nuestros botiquines combinan durabilidad y funcionalidad.
                            </p>
                            <button class="form-button" type="button">
                                <a class="a" href="{{route('contacto')}}">¡Contactanos y hagamos algo juntos!</a>
                            </button>
                        </div>
                        <picture class="tarjeta-rectangular-tam-img">
                            <img src="../img/productos/Pagina-Proyectos-Especiales/Botiquines-personalizados.png" alt="BOTIQUINES" id='img2' class="mov-tarje botick" onmousemove="Mmovim1('img2')" onmouseout="Rregres1('img2')"/>
                        </picture>
                    </div>
                    <div class="tarjeta-rectangular-1 ">
                        <picture class="tarjeta-rectangular-tam-img">
                            <img src="../img/productos/Pagina-Proyectos-Especiales/Sombrillas-personaloizadas.png" alt='PARAGUAS' id="Sombrillas-personaloizadas" onmousemove="Mmovim('Sombrillas-personaloizadas')" onmouseout="Rregres('Sombrillas-personaloizadas')" class="mov-tarje"/>
                        </picture>
                        <div class="tarjeta-rectangular-tam-text-buton">
                            <h2 class="colors-blanc titulo-hs-tit textShadow">PARAGUAS</h2>
                            <p  onmousemove="Mmovim('Sombrillas-personaloizadas')" onmouseout="Rregres('Sombrillas-personaloizadas')" class="textShadow">
                                Fabricamos paraguas personalizados con textiles de alta calidad, 
                                diseñados para ofrecer protección y estilo en cualquier clima. 
                                Ideales para eventos corporativos y regalos promocionales, 
                                nuestros paraguas combinan elegancia y funcionalidad. También 
                                podemos personalizar los diseños con el logo o mensaje de tu 
                                empresa o negocio.
                            </p>
                            <button class="form-button" type="button">
                                <a class="a" href="{{route('contacto')}}">¡Contactanos y hagamos algo juntos!</a>
                            </button>
                        </div>
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