@include('layaut.heat')
<body>
    <div class="body-pag-nosotros">
        <div>
            @include('componentes.menu')
        </div>
        <div class='barra-hr-verde'></div>
        <div class='barra-hr-naranja'></div>
        <div>
            <section class="seccion-text">
                <h1 class="titulo-hs">
                    <strong>BLOGS</strong>
                </h1>
                <section class='seccion-title-text'>
                    <p>
                        En nuestro blog, encontrarás artículos informativos 
                        y consejos prácticos sobre la personalización de 
                        textiles y uniformes de alta calidad. Nuestro 
                        objetivo es proporcionar contenido valioso que te 
                        ayude a tomar decisiones informadas y a mantenerte 
                        al día con las últimas tendencias en diseño textil 
                        y uniformes corporativos.
                    </p>
                </section>
                <h2 class="titulo-hs">ESTAMOS TRABAJANDO PARA TI...</h2>
                <div class="div-tarjeta-blog">
                    <!-- {/* <TarjetaBlogs ruta={RutasDeBlog[0]} imag={"../img/img-blogs/Botiquines-personalizados.png"} title={'Papel tapiz'} >Este es el resumen del texto dentro de la tarjeta</TarjetaBlogs> */} -->
                </div>
            </section>
            <section class="div-Centrado"> 
                <div class="position-buton-home">
                    <button class="form-button" type="button">
                        <a class="a" href={{route('contacto')}}>¡Contactanos y hagamos algo juntos!</a>
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