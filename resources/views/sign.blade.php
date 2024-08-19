<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Matemasie&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registro Aerolinea</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            /* font-family: 'Poppins', sans-serif; */
        }

        body {
            background-image: linear-gradient(135deg, #00B7D4, #505488, #2F3F80, #161569,
                    #5A4894, #A950A1, #FF7CAE);
            background-size: 500%;
            animation: fanimado 10s infinite;
        }

        .texto {
            /* color: white; */
            /* text-align: center; */
            margin: 40px 0;
            /* font-size: 28px; */
            font-family: "Matemasie", sans-serif;
            font-weight: 400;
            font-style: normal;
            display: flex;
            justify-content: space-evenly;
        }

        .div-formulario {
            padding-top: 10px;
            padding-bottom: 17px;
            border: black 1.5px solid;
            width: 420px;
            background-color: whitesmoke;
            border-radius: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }

        @keyframes fanimado {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>
    <div class="texto">
        <div class="div-formulario">
            <h3>You Are Welcome!!!</h3>
            <h1>SIGN UP</h1>
            <form action="{{route('cliente.registro.guardar')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="nombre">Nombre: </label>
                    <input class="form-control" type="text" name="nombre">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="apellido">Apellido: </label>
                    <input class="form-control" type="text" name="apellido">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="correo">Email: </label>
                    <input class="form-control" type="email" name="correo">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password: </label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="dni">DNI: </label>
                    <input class="form-control" type="text" name="dni" placeholder="Ejemplo: 0105-1977-22222">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="telefono">Telefono: </label>
                    <input class="form-control" type="text" name="telefono" placeholder="Ingrese asi: XXXX-XXXX">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">SIGN UP-></button>
                </div>

                Ya tienes una cuenta con nosotros? <a href="{{route('cliente.login')}}">Login</a>
            </form>
        </div>
        <box-icon style="font-size: 365px; display: flex; align-items: center;" type='solid' name='plane-alt'>
            <i style="font-size: 365px;" class='bx bxs-plane-alt'></i>
        </box-icon>
    </div>
</body>

</html>