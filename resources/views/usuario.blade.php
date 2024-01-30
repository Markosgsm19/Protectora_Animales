<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uiverse.css') }}">
    <script src="https://kit.fontawesome.com/9326c29cac.js" crossorigin="anonymous"></script>

    <title>Usuarios</title>

    <style>
        .form{
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;

            backdrop-filter: blur(10px);
            z-index: 5;
            width: 100vw;
            height: 100vh;

        }




        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="file"] {
            border: 2px solid #3498db;
            border-radius: 4px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 16px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        nav {
            background-color: #333;
            display: flex;
            justify-content: center;
            position: absolute;
            top: 0;
            width: 100%;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        li {
            margin: 0;
            padding: 15px 20px;
        }

        a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #ffd700; /* Cambia el color al pasar el ratón sobre el enlace */
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="/animal">Animal</a></li>
        <li><a href="/usuario">Usuario</a></li>
        <li><a href="/adopcion">Adopción</a></li>
    </ul>
</nav>
    <div class="table-container">
        <div class="row">
            <h1>Tabla usuarios</h1>


        </div>

        <table class="modern-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Sexo</th>
                <th>Direccion</th>
                <th>Telefono</th>
            </tr>
            </thead>
            <tbody>

            <!-- Agrega más filas según sea necesario -->
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido }}</td>
                    <td>{{ $usuario->sexo }}</td>
                    <td>{{ $usuario->direccion }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>
                        <form action="{{route('users.destroy', $usuario->id)}}" method="post">
                            @csrf
                            @method('post')

                            <button type="submit" class="button" id="add">
                                <span class="button__text">Borrar Usuario</span>
                                <span class="button__icon">
                                <i class="fa-solid fa-trash" style="color: red"></i>

                                </span>
                            </button>
                        </form>
                    </td>

                </tr>

            @endforeach
            <tr>
                <form action="{{route('users.add')}}" method="post">
                    @csrf
                    @method('post')
                    <td>
                        <input type="text" id="id" name="id" required>
                    </td>

                    <td>
                        <input type="text" id="nombre" name="nombre" required>
                    </td>

                    <td>
                        <input type="text" id="apellido" name="apellido" required>
                    </td>


                    <td>
                        <select id="sexo" name="sexo" required>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </td>



                    <td>
                        <input type="text" id="direccion" name="direccion" required>
                    </td>

                    <td>
                        <input type="tel" id="telefono" name="telefono" required>
                    </td>

                    <td>
                        <button type="submit" class="button" id="add" style="background-color: lightgreen; box-shadow: 4px 4px green;" >
                            <span class="button__text" style="color: black">Añadir Usuario</span>
                            <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
                        </button>
                    </td>
                </form>

            </tr>
            </tbody>
        </table>
    </div>





    <script src="{{ asset('js/index.js') }}"></script>

</body>
</html>
