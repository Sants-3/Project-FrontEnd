<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aerolinea</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body{
            background-image: linear-gradient(135deg, #00B7D4, #505488, #2F3F80, #161569,
            #5A4894, #A950A1, #FF7CAE);
            background-size: 500%;
            animation: fanimado 10s infinite;
        }
        .texto{
            color: white;
            text-align: center;
            margin: 300px 0;
            font-size: 28px;
        }

        .div-formulario{
            border: black 1.5px solid;
            width: 500px;
        }

        @keyframes fanimado{
            0%{
                background-position: 0% 50%;
            }
            50%{
                background-position: 100% 50%;
            }
            100%{
                background-position: 0% 50%;
            }
        }
    </style>
</head>
<body>
    <div class="texto">
        <div class="div-formulario">
        <form action="">
            <div>
                <label class="form-label" for="">Email</label>
                <input class="form-input" type="text">
            </div>
            <div>
                <label class="form-label" for="">Password: </label>
                <input class="form-input" type="text">
            </div>
        </form>
        </div>
    </div>
</body>
</html>