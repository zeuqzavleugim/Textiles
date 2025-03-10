<section class="seccion-text">
    <form id="contact" action="contact" method="post" autocomplete="off">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}" />
        <div class="contac-formul">
            <div class="contac-formul-div">
                <input
                    type="text"
                    name="name"
                    placeholder="Nombre *"
                    id="name"
                    class="form-control"
                />
                <span id="error-name"></span>
            </div>
            <div class="contac-formul-div">
                <input
                    type="email"
                    name="email"
                    placeholder="Correo *"
                    id="email"
                    class="form-control"
                />
                <span id="error-email"></span>
            </div>
            <div class="contac-formul-div">
                <input
                    type="text"
                    name="city"
                    placeholder="Ciudad *"
                    id="city"
                    class="form-control"
                />
                <span id="error-city"></span>
            </div>
            <div class="contac-formul-div">
                <input
                    type="tel"
                    name="phone"
                    placeholder="Teléfono *"
                    id="phone"
                    class="form-control"
                />
                <span id="error-phone"></span>
            </div>
        </div>
        <div class="contac-formul">
            <div class="contac-formul-div">
                <input
                    type="text"
                    name="asunto"
                    placeholder="Asunto *"
                    id="asunto"
                    class="form-control"
                />
                <span id="error-asunto"></span>
            </div>
            <div class="contac-formul-div">
                <textarea
                    name="message"
                    id="mensaje"
                    cols="70"
                    rows="5"
                    placeholder="Mensaje * Estimado proveedor este 'FORMULARIO' es para uso exclusivo del área de ventas y servicio a clientes. En caso de que usted esté interesado en hacernos llegar información sobre sus promociones, productos o servicios, hágalo por favor al siguiente correo: compras@magicpop.com.mx y evite que su correo sea reportado como SPAM. Gracias."
                    class="form-control"
                ></textarea>
                <span id="error-message"></span>
            </div>
            <div class="contac-formul-div">
                <button type="submit" id="submit-button" class="form-control form-button" disabled>Enviar</button>
            </div>
            <div class="contac-formul-div">
                <label class="contac-formul-div-politics">
                    <input
                        type="checkbox"
                        name="checked"
                        id="checked"
                        class="" 
                    /> 
                    <!-- form-control -->
                    Políticas de Privacidad
                    <br />
                    <small>
                        El Aviso de Privacidad es un documento que informa a
                        los usuarios sobre el manejo de sus datos personales.
                        Existen tres tipos de Avisos de Privacidad: Integral,
                        Simplificado y Corto, cada uno adaptado a distintas
                        necesidades y situaciones. El Aviso de Privacidad
                        establece las prácticas y condiciones que los usuarios
                        deben conocer y aceptar al interactuar con diversos
                        contenidos, productos o servicios.
                    </small>
                </label>
                <span id="error-checked"></span>
            </div>
        </div>
    </form>
</section>
<script>
    const formData = {
        name: '',
        email: '',
        city: '',
        phone: '',
        asunto: '',
        message: '',
        checked: false
    };
    const errors = {
        name: '',
        email: '',
        city: '',
        phone: '',
        asunto: '',
        message: '',
        checked: ''
    };
    const regexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    const regexPhone = /^[0-9]{10}$/;
    const submitButton = document.getElementById('submit-button');
    function validateForm() {
        const allFieldsFilled = Object.values(formData).every(value => value !== '' && (value !== false));
        const noErrors = Object.values(errors).every(error => error === '');
        submitButton.disabled = !(allFieldsFilled && noErrors);
    }
    function handleChange(event) {
        const { name, value, type, checked } = event.target;
        formData[name] = type === 'checkbox' ? checked : value;
        let error = '';
        if (type === 'text' || type === 'textarea') {
            if (value === '' || value.length <= 2) {
                error = 'Este campo es obligatorio y debe tener más de dos caracteres.';
            }
        } else if (type === 'email') {
            if (!regexEmail.test(value)) {
                error = 'El correo electrónico no es válido.';
            }
        } else if (type === 'tel') {
            if (!regexPhone.test(value)) {
                error = 'El número de teléfono debe tener 10 dígitos.';
            }
        } else if (type === 'checkbox') {
            error = !checked ? 'Debe aceptar las políticas de privacidad.' : '';
        }
        errors[name] = error;
        document.getElementById(`error-${name}`).textContent = error;
        validateForm();
    }
    document.getElementById('contact').addEventListener('input', handleChange);
    document.getElementById('contact').addEventListener('submit', function (e) {
        e.preventDefault();
        if (!submitButton.disabled) {
            const formElement = document.getElementById('contact');
            const formDataObj = new FormData(formElement);
            fetch('/contact', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.getElementById('token').value,
                },
                body: formDataObj
            })
                .then(response => {
                    if (response.ok) {
                        window.location.href = '/';
                    } else {
                        alert('Hubo un error al enviar el formulario.');
                    }
                })
                .catch(error => {
                    console.error('Error al enviar el formulario:', error);
                    alert('Hubo un error al enviar el formulario.');
                });
        }
    });
</script>

