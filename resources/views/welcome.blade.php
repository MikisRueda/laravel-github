<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Landing Page</title>
        <style>
        /* Estilos generales */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Barra de navegación */
        nav {
            background-color: #fff;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

        /* Sección Hero */
        .hero-section {
            padding: 8rem 2rem;
            background-color: #fff;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 70px; /* Para que no se tape con el navbar */
        }

        .hero-section h1 {
            color: #2c3e50;
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-section h2 {
            color: #7f8c8d;
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        /* Botón CTA */
        .cta-button {
            padding: 12px 30px;
            font-size: 1.2rem;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #2980b9;
        }

        /* Sección de Productos */
        .products-section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin: 4rem 2rem;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product-card h3 {
            color: #2c3e50;
            font-size: 1.5rem;
            margin-top: 1rem;
        }

        .product-card p {
            color: #7f8c8d;
            margin: 10px 0;
        }

        .product-card .price {
            font-size: 1.3rem;
            font-weight: bold;
            color: #3498db;
        }

        /* Sección de Testimonios */
        .testimonials-section {
            background-color: #ecf0f1;
            padding: 3rem 2rem;
            text-align: center;
        }

        .testimonial-card {
            display: inline-block;
            width: 250px;
            padding: 1.5rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 10px;
        }

        .testimonial-card p {
            font-style: italic;
            color: #7f8c8d;
            margin-bottom: 1rem;
        }

        .testimonial-card h4 {
            color: #2c3e50;
        }

        /* Footer */
        .footer {
            background-color: #fff;
            padding: 2rem;
            border-top: 1px solid #eee;
            text-align: center;
            font-size: 0.9rem;
            color: #7f8c8d;
        }

        .footer a {
            color: #3498db;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Barra de Navegación -->
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#productos">Productos</a></li>
            <li><a href="#testimonios">Testimonios</a></li>
            <li><a href="#sobre-nosotros">Sobre Nosotros</a></li>
        </ul>
    </nav>

    <!-- Sección Hero -->
    <section class="hero-section">
        <h1>Bienvenido a Tu Tienda</h1>
        <h2>Encuentra los mejores productos con envío rápido y seguro</h2>
        <button class="cta-button">Compra Ahora</button>
    </section>

    <!-- Sección de Productos -->
    <section id="productos" class="products-section">
        <div class="product-card">
            <img src="https://via.placeholder.com/300x200" alt="Producto 1">
            <h3>Producto 1</h3>
            <p>Descripción breve del producto.</p>
            <div class="price">$49.99</div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300x200" alt="Producto 2">
            <h3>Producto 2</h3>
            <p>Descripción breve del producto.</p>
            <div class="price">$79.99</div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300x200" alt="Producto 3">
            <h3>Producto 3</h3>
            <p>Descripción breve del producto.</p>
            <div class="price">$29.99</div>
        </div>
    </section>

    <!-- Sección de Testimonios -->
    <section id="testimonios" class="testimonials-section">
        <h2>Lo que dicen nuestros clientes</h2>
        <div class="testimonial-card">
            <p>"Excelente calidad y entrega rápida. ¡100% recomendado!"</p>
            <h4>Juan Pérez</h4>
        </div>
        <div class="testimonial-card">
            <p>"Me encanta comprar aquí, siempre encuentro lo que necesito."</p>
            <h4>Maria López</h4>
        </div>
        <div class="testimonial-card">
            <p>"Servicio al cliente excepcional, siempre atentos a mis dudas."</p>
            <h4>Pedro García</h4>
        </div>
    </section>

    <!-- Sección Sobre Nosotros -->
    <section id="sobre-nosotros" class="hero-section" style="background-color: #ecf0f1;">
        <h2>Sobre Nosotros</h2>
        <p>Somos una tienda en línea dedicada a ofrecer los mejores productos al mejor precio. Con un enfoque en la calidad y el servicio al cliente, trabajamos incansablemente para brindarte una experiencia de compra inigualable.</p>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Tu Tienda - Todos los derechos reservados</p>
        <p><a href="#">Términos y Condiciones</a> | <a href="#">Política de Privacidad</a></p>
    </footer>

</body>

</html>
