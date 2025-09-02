<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Carrito de Compras - MiTienda</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        *, *::before, *::after {
            box-sizing: border-box; margin: 0; padding: 0;
        }
        body, html {
            font-family: 'Poppins', sans-serif;
            background: #f0f4f8; color: #333;
            scroll-behavior: smooth;
        }
        nav {
            position: fixed; width: 100%; top: 0; left: 0;
            background: #0d1a40;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            z-index: 1000;
        }
        nav .container {
            max-width: 1200px; margin: 0 auto; padding: 1rem 2rem;
            display: flex; justify-content: space-between; align-items: center;
        }
        nav .logo a {
            text-decoration: none;
            font-size: 1.5rem; font-weight: 700;
            color: #ffcc00; letter-spacing: 1px;
        }
        nav a {
            color: white; text-decoration: none; font-weight: 600;
            margin-left: 2rem; transition: color 0.25s ease; font-size: 1rem;
        }
        nav a:hover { color: #ffcc00; }
        main {
            max-width: 1000px;
            margin: 100px auto 3rem;
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 6px 20px rgba(13, 26, 64, 0.1);
        }
        h1 {
            color: #0d1a40; font-size: 2.5rem;
            font-weight: 700; margin-bottom: 2rem;
            text-align: center;
        }
        table {
            width: 100%; border-collapse: collapse; margin-bottom: 2rem;
        }
        thead {
            background: #0d1a40; color: #ffcc00;
        }
        th, td {
            padding: 1rem; text-align: center; border-bottom: 1px solid #ccc;
            font-weight: 500;
        }
        tbody tr:hover { background: #f9f9f9; }
        .product-info {
            display: flex; align-items: center; gap: 1rem;
        }
        .product-info img {
            width: 80px; height: 80px; object-fit: cover;
            border-radius: 12px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .product-name a {
            color: #0d1a40;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        .product-name a:hover { color: #ffcc00; }
        input[type="number"] {
            width: 60px;
            padding: 0.5rem;
            font-size: 1rem;
            border-radius: 8px;
            border: 1.5px solid #ccc;
            text-align: center;
            transition: border-color 0.3s ease;
        }
        input[type="number"]:focus {
            border-color: #ffcc00;
            outline: none;
        }
        .total {
            text-align: right;
            font-size: 1.5rem;
            font-weight: 700;
            color: #0d1a40;
            margin-bottom: 2rem;
        }
        .actions {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }
        a.btn-link {
            background: #ffcc00;
            color: #0d1a40;
            padding: 1rem 3rem;
            font-weight: 700;
            border-radius: 50px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(255, 204, 0, 0.5);
            transition: background 0.25s ease, color 0.25s ease;
            flex: 1 1 200px;
        }
        a.btn-link:hover {
            background: #e6b800;
            color: #0a1330;
        }
        @media(max-width: 600px) {
            .product-info {
                flex-direction: column;
                gap: 0.5rem;
            }
            input[type="number"] {
                width: 100%;
            }
            .actions {
                flex-direction: column;
            }
            a.btn-link {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>

<nav>
    <div class="container">
        <div class="logo"><a href="{{ url('/') }}">MiTienda</a></div>
        <div>
            <a href="{{ url('/productos') }}">Productos</a>
            <a href="index.html#contacto">Contacto</a>
            <a href="#">Carrito</a>
        </div>
    </div>
</nav>

<main>
    <h1>Tu Carrito de Compras</h1>
    <table aria-label="Tabla de productos en el carrito">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="https://images.unsplash.com/photo-1606813909027-2f292f55b6cb?auto=format&fit=crop&w=80&q=80" alt="Producto Estrella" />
                        <div class="product-name">
                            <a href="detalle.html?id=1">Producto Estrella</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" min="1" max="10" value="2" aria-label="Cantidad del Producto Estrella" /></td>
                <td>$199.99</td>
                <td>$399.98</td>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="https://images.unsplash.com/photo-1512499617640-c2f99912f526?auto=format&fit=crop&w=80&q=80" alt="Producto Dos" />
                        <div class="product-name">
                            <a href="detalle.html?id=2">Producto Dos</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" min="1" max="10" value="1" aria-label="Cantidad del Producto Dos" /></td>
                <td>$99.99</td>
                <td>$99.99</td>
            </tr>
        </tbody>
    </table>

    <div class="total" aria-live="polite">
        Total: $499.97
    </div>

    <div class="actions">
        <a href="index.html#productos" class="btn-link">Seguir comprando</a>
        <a href="checkout.html" class="btn-link">Finalizar compra</a>
    </div>
</main>

<footer>
    &copy; 2025 MiTienda - Todos los derechos reservados.
</footer>

</body>
</html>
