<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Define el conjunto de caracteres como UTF-8 -->
    <meta charset="UTF-8">
    <!-- Asegura que la página se vea correctamente en dispositivos móviles -->
    <meta name="viewport" content="width=device-width">
    <title>Practica 1</title>
</head>

<style>
    /* Estilo para el botón */
    button {
        display: block; /* Hace que el botón ocupe el ancho completo disponible */
        width: 100px; /* Ancho fijo del botón */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fuentes para el texto del botón */
        font-weight: 700; /* Peso de la fuente en negrita */
        border-radius: 10px; /* Bordes redondeados del botón */
        margin: 150px 130px; /* Espacio alrededor del botón */
        padding: 15px 30px; /* Espacio interno dentro del botón */
        background-color: #7a36da; /* Color de fondo del botón */
        color: #fff; /* Color del texto del botón */
        text-decoration: none; /* Elimina el subrayado del texto (por defecto en enlaces) */
    }

    /* Estilo para el botón cuando el usuario pasa el cursor sobre él */
    button:hover {
        background-color: transparent; /* Fondo transparente */
        border: 2px solid #7a36da; /* Borde con el mismo color que el fondo original */
        color: #7a36da; /* Cambia el color del texto al color del borde */
    }
</style>

<body>
    <!-- Título principal de la página -->
    <h1>Deseas saber mi nombre</h1>

    <!-- Botón que ejecuta la función 'ejecuta()' al hacer clic -->
    <button onclick="ejecuta()">
        Ejecutar
    </button>

    <script>
        // Función asíncrona que se ejecuta al hacer clic en el botón
        async function ejecuta() {
            try {
                // Realiza una solicitud al archivo 'nomre.php'
                const resp = await fetch("nomre.php");

                // Verifica si la respuesta es correcta (status 200)
                if (resp.ok) {
                    // Obtiene el texto de la respuesta
                    const texto = await resp.text();
                    // Muestra el texto en un cuadro de diálogo (alerta)
                    alert(texto);
                } else {
                    // Lanza un error si la respuesta no es correcta
                    throw new Error(resp.statusText);
                }
            } catch (error) {
                // Muestra el error en la consola y en un cuadro de diálogo (alerta)
                console.error(error);
                alert(error.message);
            }
        }
    </script>
</body>

</html>
