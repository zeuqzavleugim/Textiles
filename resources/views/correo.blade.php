<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Verdana';
            font-size: 15px;
        }
        h1{
            font-size: 20px;
            font-weight: bold;
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <h1>Saludos Magic Pop, Mi nombre es: {{$data['name']}}</h1>

    <p>
        Este formulario es enviado desde la pagina Magic Pop Textiles 
        ("magicpop.com.mx"), Estos son mis datos de contacto: <br>
        Correo: {{$data['email']}} <br>
        Telefono: {{$data['phone']}} <br>
        Ciudad: {{$data['city']}} <br>
        Mensaje: {{$data['message']}} <br>
        Por favor comuniquese conmigo
    </p>
</body>
</html>