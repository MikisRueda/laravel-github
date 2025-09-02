<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Detalle del Producto</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Barra de navegación */
        nav {
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            padding: 10px;
        }

        nav ul li a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #3498db;
        }

        /* Sección de Detalles del Producto */
        .product-detail {
            display: flex;
            gap: 2rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 3rem;
        }

        .product-image {
            flex: 1;
            max-width: 500px;
        }

        .product-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .product-info {
            flex: 2;
        }

        .product-info h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .product-info .price {
            font-size: 2rem;
            color: #3498db;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .product-info p {
            font-size: 1.1rem;
            color: #7f8c8d;
            margin-bottom: 1.5rem;
        }

        .product-info .cta-button {
            padding: 15px 40px;
            background-color: #3498db;
            color: white;
            font-size: 1.2rem;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product-info .cta-button:hover {
            background-color: #2980b9;
        }

        /* Sección de Características */
        .product-features {
            margin-top: 2rem;
        }

        .product-features h2 {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .feature-list {
            list-style: none;
            padding-left: 0;
        }

        .feature-list li {
            font-size: 1.1rem;
            color: #7f8c8d;
            margin-bottom: 0.8rem;
        }

        /* Sección de Reseñas */
        .reviews {
            margin-top: 3rem;
        }

        .reviews h2 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }

        .review {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .review img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .review-content {
            flex: 1;
        }

        .review-content p {
            font-size: 1.1rem;
            color: #7f8c8d;
        }

        .review-content .reviewer-name {
            font-weight: bold;
            color: #2c3e50;
        }

        /* Sección de Productos Relacionados */
        .related-products {
            margin-top: 4rem;
            background-color: #ecf0f1;
            padding: 3rem 2rem;
            border-radius: 10px;
        }

        .related-products h2 {
            text-align: center;
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 2rem;
        }

        .related-products .product-card {
            display: inline-block;
            width: 250px;
            padding: 1rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 10px;
            text-align: center;
        }

        .related-products .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .related-products .product-card h3 {
            color: #2c3e50;
            font-size: 1.3rem;
            margin-top: 1rem;
        }

        .related-products .product-card .price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #3498db;
        }
    </style>
</head>

<body>

    <!-- Barra de Navegación -->
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Contactar</a></li>
        </ul>
    </nav>

    <!-- Detalle del Producto -->
    <div class="container">
        <section class="product-detail">
            <!-- Imagen del Producto -->
            <div class="product-image">
                <img src="https://via.placeholder.com/500" alt="Producto">
            </div>

            <!-- Información del Producto -->
            <div class="product-info">
                <h1>Nombre del Producto</h1>
                <div class="price">$49.99</div>
                <p>Descripción detallada del producto. Este es un producto de alta calidad que ofrece una excelente relación calidad-precio. Perfecto para todo tipo de necesidades.</p>
                <button class="cta-button">Comprar Ahora</button>

                <!-- Características del Producto -->
                <div class="product-features">
                    <h2>Características</h2>
                    <ul class="feature-list">
                        <li>Hecho con materiales premium.</li>
                        <li>Diseño elegante y moderno.</li>
                        <li>Garantía de 2 años.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Reseñas del Producto -->
        <section class="reviews">
            <h2>Reseñas de Clientes</h2>

            <div class="review">
                <img src="https://via.placeholder.com/50" alt="Usuario 1">
                <div class="review-content">
                    <p>"Excelente producto, superó mis expectativas. Lo recomiendo al 100%!"</p>
                    <div class="reviewer-name">Juan Pérez</div>
                </div>
            </div>

            <div class="review">
                <img src="https://via.placeholder.com/50" alt="Usuario 2">
                <div class="review-content">
                    <p>"Buen producto, aunque el envío tardó un poco. Aún así, muy contento con la compra."</p>
                    <div class="reviewer-name">María López</div>
                </div>
            </div>
        </section>

        <!-- Productos Relacionados -->
        <section class="related-products">
            <h2>Productos Relacionados</h2>

            <div class="product-card">
                <img src="https://via.placeholder.com/250" alt="Producto Relacionado 1">
                <h3>Producto Relacionado 1</h3>
                <div class="price">$39.99</div>
            </div>

            <div class="product-card">
                <img src="https://via.placeholder.com/250" alt="Producto Relacionado 2">
                <h3>Producto Relacionado 2</h3>
                <div class="price">$59.99</div>
            </div>

            <div class="product-card">
                <img src="https://via.placeholder.com/250" alt="Producto Relacionado 3">
                <h3>Producto Relacionado 3</h3>
                <div class="price">$44.99</div>
            </div>
        </section>
    </div>

</body>

</html>
