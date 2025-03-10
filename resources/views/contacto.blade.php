@include('layaut.heat')
    <body>
        <div>
            <Head title="Contacto"></Head>
            @include('componentes.menu')
            <div class='barra-hr-verde'></div>
            <header class="div-tex-cotac">
                <h1 class=" colors-blanc titulo-hs">
                    <strong>Contacto</strong>
                </h1>
            </header>
            <section class="seccion-text">
                <p>
                    En Magic Pop, nos especializamos en crear uniformes y 
                    textiles personalizados de alta calidad para medianas y 
                    grandes empresas en México. Si tienes alguna pregunta, 
                    deseas una cotización o necesitas asistencia con tu pedido, 
                    estamos aquí para ayudarte.
                </p>
            </section>
            <div>
                <!--  -->
                @include('componentes.form')
            </div>
            <div>
                @include('componentes.whatsButon')
                @include('componentes.foter')
            </div>
        </div>
    </body>
</html>