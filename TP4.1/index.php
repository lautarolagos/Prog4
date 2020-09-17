<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Special Greet</title>
</head>
<body>
    <form action="process-form.php" method="POST">
        <table align="center">
            <thead>Práctico N° 4.1</thead>
            <tr>
                <th>
                    <h3>Saludando</h3>
                </th>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione un idioma</b></p>
                    <input type="radio" name="language" value="arg"> Argentino
                    <input type="radio" name="language" value="eng"> Ingles
                    <input type="radio" name="language" value="por"> Portugues
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione una acción</b></p>
                    <input type="radio" name="action" value="sayHi"> Saludar
                    <input type="radio" name="action" value="sayGoodbye"> Despedirse
                    <input type="radio" name="action" value="sayAnother"> Otro Mensaje
                    <textarea name="message" value="msg" placeholder="Mensaje|Message|Mensagem"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Procesar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>