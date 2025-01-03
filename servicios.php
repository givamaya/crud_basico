<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel magna - Servicios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-image">
            <h1>Servicios</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="quienes_somos.php">Quiénes Somos</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="contactenos.php">Contáctenos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section>
            <h2>Nuestros Servicios</h2>
            <div class="cards">
                <div class="card">
                    <img src="hotel/hab-1.png" alt="Habitación Simple">
                    <div class="card-content">
                        <h3>Habitación Simple</h3>
                        <p>Desde $50 por noche.</p>
                        <a href="#">Ver más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="hotel/hab-2.png" alt="Habitación Doble">
                    <div class="card-content">
                        <h3>Habitación Doble</h3>
                        <p>Desde $80 por noche.</p>
                        <a href="#">Ver más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="hotel/hab-3.png" alt="Paquete Todo Incluido">
                    <div class="card-content">
                        <h3>Paquete Todo Incluido</h3>
                        <p>Desde $200 por noche.</p>
                        <a href="#">Ver más</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2>Registrar Cliente</h2>
            <form action="php/registrar_cliente.php" method="POST" id="formRegistro">
                <label for="tipoDocumento">Tipo de Documento:</label>
                <select name="tipoDocumento" id="tipoDocumento" required>
                    <option value="CC">Cédula</option>
                    <option value="TI">Tarjeta de Identidad</option>
                    <option value="PP">Pasaporte</option>
                </select>
                <label for="numeroDocumento">Número de Documento:</label>
                <input type="text" name="numeroDocumento" id="numeroDocumento" required>
                <label for="nombre">Nombre Completo:</label>
                <input type="text" name="nombre" id="nombre" required>
                <label for="celular">Número de Celular:</label>
                <input type="text" name="celular" id="celular" required>
                <label for="correo">Correo Electrónico:</label>
                <input type="email" name="correo" id="correo" required>
                <label for="paquete">Paquete:</label>
                <select name="paquete" id="paquete" required>
                    <option value="simple">Habitación Simple</option>
                    <option value="doble">Habitación Doble</option>
                    <option value="todoIncluido">Paquete Todo Incluido</option>
                </select>
                <button type="submit">Registrar</button>
            </form>
        </section>
    </main>
    <footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="hotel/logo.png" alt="Hotel Logo">
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="quienes_somos.php">Quiénes Somos</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contactenos.php">Contáctenos</a></li>
            </ul>
        </div>
        <div class="footer-info">
            <p>&copy; 2024 Hotel XYZ. Todos los derechos reservados.</p>
            <p>Dirección: Calle 123, Bogotá, Colombia</p>
            <p>Teléfono: (1) 234-5678</p>
        </div>
    </div>
</footer>
</body>
</html>
