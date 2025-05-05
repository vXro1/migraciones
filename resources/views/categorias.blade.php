<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categorías - Estilo Neón</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #0f0f0f;
            color: #f0f0f0;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.2);
            animation: fadeIn 0.8s ease-in-out;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #00ffff;
            text-shadow: 0 0 10px #00ffff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #00ffff;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 16px;
            text-align: left;
        }

        thead {
            background-color: #0ff;
            color: #000;
            text-shadow: 0 0 5px #0ff;
        }

        tbody tr {
            background-color: #121212;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        tbody tr:hover {
            background-color: #222;
            transform: scale(1.01);
            box-shadow: 0 0 10px #0ff;
        }

        td, th {
            border-bottom: 1px solid #333;
        }

        tr:nth-child(even) {
            background-color: #191919;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Categorías</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $index => $categoria)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>{{ $categoria->descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
