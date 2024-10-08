<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Matemasie&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login Aerolinea</title>
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
            margin: 105px 0;
            /* font-size: 28px; */
            font-family: "Matemasie", sans-serif;
            font-weight: 400;
            font-style: normal;
            display: flex;
            justify-content: space-evenly;
        }

        .div-formulario {
            padding-top: 35px;
            padding-bottom: 70px;
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
            <h3>Welcome back!!!</h3>
            <h1>Log In</h1>
            <form action="{{route('vuelos.lista')}}">
                <div class="mb-3">
                    <label class="form-label" for="">Email: </label>
                    <input class="form-control" type="email">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Password: </label>
                    <input class="form-control" type="text">
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">LOGIN -></button>
                </div>

                Aun no tienes una cuenta con nosotros? <a href="{{route('cliente.registro')}}">Sing Up</a>
            </form>
        </div>
        <box-icon style="font-size: 365px; display: flex; align-items: center;" type='solid' name='plane-alt'>
    <i style="font-size: 365px;" class='bx bxs-plane-alt'></i>
    </box-icon>
    </div>
</body>

</html>