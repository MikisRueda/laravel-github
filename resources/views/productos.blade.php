<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Todos los Productos - MiTienda</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body, html {
            font-family: 'Poppins', sans-serif;
            background: #f0f4f8;
            color: #333;
            scroll-behavior: smooth;
        }

        nav {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background: #0d1a40;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            z-index: 1000;
        }
        nav .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .logo a {
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffcc00;
            letter-spacing: 1px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            margin-left: 2rem;
            transition: color 0.25s ease;
            font-size: 1rem;
        }
        nav a:hover {
            color: #ffcc00;
        }

        main {
            max-width: 1200px;
            margin: 100px auto 3rem;
            padding: 0 1rem;
        }

        h1 {
            text-align: center;
            color: #0d1a40;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .grid-products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(13, 26, 64, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(13, 26, 64, 0.2);
        }

        .product-card a {
            color: #0d1a40;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 4px solid #ffcc00;
            transition: transform 0.3s ease;
        }
        .product-card:hover img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 1rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-info h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .product-info p {
            flex-grow: 1;
            font-size: 1rem;
            color: #555;
            margin-bottom: 1rem;
        }

        .product-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: #ffcc00;
        }

        footer {
            text-align: center;
            padding: 2rem 1rem;
            background: #0d1a40;
            color: #ffcc00;
            font-weight: 600;
            letter-spacing: 0.05em;
            margin-top: 3rem;
        }

    </style>
</head>
<body>

<nav>
    <div class="container">
        <div class="logo"><a href="index.html">MiTienda</a></div>
        <div>
            <a href="index.html#productos">Inicio</a>
            <a href="carrito.html">Carrito</a>
            <a href="#contacto">Contacto</a>
        </div>
    </div>
</nav>

<main>
    <h1>Todos los Productos</h1>

    <div class="grid-products">
        <div class="product-card">
            <a href="detalle.html?id=1">
                <img src="https://images.unsplash.com/photo-1606813909027-2f292f55b6cb?auto=format&fit=crop&w=600&q=80" alt="Producto Estrella" />
                <div class="product-info">
                    <h3>Producto Estrella</h3>
                    <p>El producto perfecto para quienes buscan calidad premium y durabilidad.</p>
                    <div class="product-price">$199.99</div>
                </div>
            </a>
        </div>
        <div class="product-card">
            <a href="detalle.html?id=2">
                <img src="https://images.unsplash.com/photo-1512499617640-c2f99912f526?auto=format&fit=crop&w=600&q=80" alt="Producto Dos" />
                <div class="product-info">
                    <h3>Producto Dos</h3>
                    <p>Una opción económica y confiable, ideal para uso diario.</p>
                    <div class="product-price">$99.99</div>
                </div>
            </a>
        </div>
        <div class="product-card">
            <a href="detalle.html?id=3">
                <img src="https://images.unsplash.com/photo-1503602642458-232111445657?auto=format&fit=crop&w=600&q=80" alt="Producto Tres" />
                <div class="product-info">
                    <h3>Producto Tres</h3>
                    <p>Diseñado para ofrecer funcionalidad y estilo en cada uso.</p>
                    <div class="product-price">$149.99</div>
                </div>
            </a>
        </div>
        <!-- Puedes agregar más productos aquí siguiendo el mismo formato -->
    </div>

</main>

<footer>
    &copy; 2025 MiTienda - Todos los derechos reservados.
</footer>

</body>
</html>
