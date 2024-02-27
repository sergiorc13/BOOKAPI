<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>Listado libros</title>
</head>
<body>
    <h1>Consumir API de libros</h1><br>
    <div>
    <form id="formulario">
            <select name="parametroBusqueda" id="filtrar">
                <option value="id">ID</option>
                <option value="genero">Genero</option>
                <option value="autor">Autor</option>
            </select>
            <label for="valorBusqueda">Escribe el valor del parametro seleccionado</label>
            <input type="text" name="valorBusqueda" id="valor">
            <button type="submit">Buscar</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">AUTOR</th>
                    <th scope="col">TITULO</th>
                    <th scope="col">GENERO</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">AÑO DE PUBLICACIÓN</th>
                    <th scope="col">DESCRIPCIÓN</th>
                </tr>
            </thead>
            <tbody id="busqueda">
            </tbody>
        </table>
    </div>
    <script type="module" src="../Controlador/controladorFormulario.js"></script>
</body>
</html>