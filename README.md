<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BurgerPizz | Carne Artesanal Sabor Pizza</title>
    <style>
        /* --- ESTILOS GENERALES --- */
        body { 
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #121212; 
            color: #fff; 
            scroll-behavior: smooth; /* Desplazamiento suave */
        }
        
        :root {
            --pizza-red: #D32F2F; 
            --cheese-yellow: #FBC02D;
            --dark-bg: #1a1a1a;
        }

        h1, h2, h3, h4 { margin: 0; font-weight: 700; }
        a { text-decoration: none; }

        /* --- NAVEGACIÓN --- */
        nav { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 15px 50px; 
            background-color: #000;
            border-bottom: 3px solid var(--pizza-red);
            position: sticky; /* Menú fijo arriba */
            top: 0;
            z-index: 1000;
        }
        
        .logo { display: flex; align-items: center; }
        .logo img { height: 70px; object-fit: contain; } 

        .nav-links a { margin-left: 20px; color: #ccc; transition: 0.3s; font-weight: bold; cursor: pointer;}
        .nav-links a:hover { color: var(--pizza-red); }

        /* --- PORTADA (HERO) --- */
        header { 
            height: 85vh; 
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1502&q=80');
            background-size: cover; 
            background-position: center;
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
            text-align: center;
            padding: 0 20px;
        }
        header h1 { 
            font-size: 4rem; 
            text-transform: uppercase; 
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px #000;
            line-height: 1.1;
        }
        header p { font-size: 1.3rem; max-width: 700px; margin-bottom: 30px; color: #ddd; }
        
        .cta-btn { 
            padding: 15px 40px; 
            background-color: var(--pizza-red); 
            color: white; 
            font-size: 1.2rem; 
            border-radius: 5px; 
            font-weight: bold; 
            transition: transform 0.2s;
            cursor: pointer;
            border: none;
        }
        .cta-btn:hover { transform: scale(1.05); background-color: #b71c1c; }

        /* --- CARACTERÍSTICAS --- */
        .features {
            padding: 50px 20px;
            background-color: #1f1f1f;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
        }
        .feature-item { max-width: 250px; }
        .feature-icon { font-size: 2.5rem; margin-bottom: 10px; display: block; }

        /* --- PRODUCTOS --- */
        .products { padding: 80px 20px; text-align: center; }
        .section-title { 
            font-size: 2.5rem; 
            margin-bottom: 50px; 
            color: var(--pizza-red); 
            display: inline-block; 
            border-bottom: 2px solid #fff;
        }

        .grid { display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; }
        
        .card { 
            background: #252525; 
            width: 320px; 
            border-radius: 10px; 
            overflow: hidden; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.5); 
            text-align: left;
            border: 1px solid #333;
            transition: 0.3s;
        }
        .card:hover { transform: translateY(-5px); border-color: var(--pizza-red); }
        
        .card-img { height: 250px; background-color: #444; background-size: cover; background-position: center; }
        
        /* Imágenes de Drive */
        .img-single { background-image: url('https://drive.google.com/thumbnail?id=1WTUavODMuiNLzIZ1YI7WRAJA6IC2to8W&sz=w1000'); }
        .img-pack { background-image: url('https://drive.google.com/thumbnail?id=16Sn8Z6u6jLe2kgC-eqcpA_yF4qHLlaR7&sz=w1000'); }

        .card-body { padding: 20px; }
        .card h3 { font-size: 1.4rem; margin-bottom: 10px; color: #fff; }
        .card p { font-size: 0.9rem; color: #bbb; line-height: 1.4; margin-bottom: 15px; }
        
        .price { 
            font-size: 1.6rem; 
            color: var(--cheese-yellow); 
            font-weight: bold; 
            display: block; 
            margin-bottom: 15px; 
        }
        
        /* Botón funcional de compra */
        .buy-btn { 
            display: block; 
            width: 100%; 
            padding: 12px; 
            background: white; 
            color: black; 
            text-align: center; 
            font-weight: bold; 
            border-radius: 5px; 
            transition: 0.3s;
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }
        .buy-btn:hover { background: var(--pizza-red); color: white; }

        /* Sellos */
        .sellos-container { display: flex; gap: 5px; margin-top: 15px; justify-content: flex-start; }
        .sello { 
            background: black; 
            color: white; 
            border: 1px solid white; 
            font-size: 0.55rem; 
            padding: 2px; 
            font-weight: 800; 
            text-transform: uppercase; 
            width: 48px; 
            height: 48px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            text-align: center;
            line-height: 1;
        }
        
        /* Equipo */
        .team-avatar { width: 80px; height: 80px; background: #333; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center; font-size: 2rem; border: 2px solid var(--pizza-red); }

        /* Footer */
        footer { 
            background: #000; 
            padding: 40px; 
            text-align: center; 
            color: #666; 
            border-top: 1px solid #333;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">
            <img src="https://drive.google.com/thumbnail?id=14DSQfqbim_3U-55MbCmbH5QCBnW3GVNX&sz=w1000" alt="Logo BurgerPizz">
        </div>
        
        <div class="nav-links">
            <a href="#productos">Productos</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#equipo">Equipo</a>
        </div>
    </nav>

    <header>
        <h1>BurgerPizz</h1>
        <p>Carne artesanal de cerdo con el auténtico sabor a pizza: Mozzarella, Parmesano y Tocino.</p>
        <button onclick="irAProductos()" class="cta-btn">Ver Catálogo</button>
    </header>

    <section class="features">
        <div class="feature-item">
            <span class="feature-icon">🥩</span>
            <h3>100% Cerdo & Tocino</h3>
            <p>Mezcla jugosa de carne molida de cerdo y tocino premium.</p>
        </div>
        <div class="feature-item">
            <span class="feature-icon">🧀</span>
            <h3>Quesos Reales</h3>
            <p>Con trozos reales de queso mozzarella y parmesano.</p>
        </div>
        <div class="feature-item">
            <span class="feature-icon">❄️</span>
            <h3>Empacado al Vacío</h3>
            <p>Conservación perfecta a -18°C sin perder frescura.</p>
        </div>
    </section>

    <section id="productos" class="products">
        <h2 class="section-title">Nuestros Productos</h2>
        
        <div class="grid">
            
            <div class="card">
                <div class="card-img img-single"></div>
                <div class="card-body">
                    <h3>Unidad Individual (152g)</h3>
                    <p>Carne molida sabor pizza lista para cocinar. Cruda y congelada al vacío.</p>
                    <span class="price">$35.00 MXN</span>
                    
                    <button class="buy-btn" onclick="agregarAlCarrito('BurgerPizz Individual', 35)">Agregar al Carrito</button>
                    
                    <div class="sellos-container">
                        <div class="sello">EXCESO CALORÍAS</div>
                        <div class="sello">EXCESO SODIO</div>
                        <div class="sello">EXCESO GRASAS SAT.</div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-img img-pack"></div>
                <div class="card-body">
                    <h3>Paquete Familiar (8 pzas)</h3>
                    <p>Bolsa con 8 unidades de 152g (aprox. 1.2kg). Empaque zipper con porciones individuales.</p>
                    <span class="price">$280.00 MXN</span>
                    
                    <button class="buy-btn" onclick="agregarAlCarrito('Paquete Familiar (8 pzas)', 280)">Agregar al Carrito</button>

                     <div class="sellos-container">
                        <div class="sello">EXCESO CALORÍAS</div>
                        <div class="sello">EXCESO SODIO</div>
                        <div class="sello">EXCESO GRASAS SAT.</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="nosotros" style="background-color: #1a1a1a; padding: 60px 20px; text-align: center;">
        <h2 class="section-title">Nuestra Filosofía</h2>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 30px;">
            <div style="background: #000; padding: 30px; border-left: 4px solid #D32F2F; width: 300px; text-align: left; border-radius: 5px;">
                <h3 style="color: #D32F2F; margin-bottom: 15px;">Misión</h3>
                <p style="color: #ccc; font-size: 0.9rem; line-height: 1.5;">Desarrollar productos cárnicos innovadores y de alta calidad que integren técnicas efectivas de conservación.</p>
            </div>
            <div style="background: #000; padding: 30px; border-left: 4px solid #FBC02D; width: 300px; text-align: left; border-radius: 5px;">
                <h3 style="color: #FBC02D; margin-bottom: 15px;">Visión</h3>
                <p style="color: #ccc; font-size: 0.9rem; line-height: 1.5;">Posicionarnos como una marca líder e innovadora en el mercado alimenticio, reconocida por revolucionar el consumo.</p>
            </div>
        </div>
    </section>

    <section id="equipo" style="padding: 60px 20px; text-align: center; background-color: #121212;">
        <h2 class="section-title" style="margin-bottom: 40px;">Nuestro Equipo</h2>
        <div class="grid" style="gap: 40px;">
            <div style="text-align: center; width: 200px;">
                <div class="team-avatar">👩🏻‍🍳</div>
                <h4 style="margin: 5px 0; color: white;">Andrea Cruz</h4>
                <p style="color: #666; font-size: 0.8rem;">Dirección General</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <div class="team-avatar">📊</div>
                <h4 style="margin: 5px 0; color: white;">Juan Ángel López</h4>
                <p style="color: #666; font-size: 0.8rem;">Finanzas & Legal</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <div class="team-avatar">🧪</div>
                <h4 style="margin: 5px 0; color: white;">Nayeli Olmedo</h4>
                <p style="color: #666; font-size: 0.8rem;">Jefa de Formulación</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <div class="team-avatar">🚀</div>
                <h4 style="margin: 5px 0; color: white;">Gabriel Montero</h4>
                <p style="color: #666; font-size: 0.8rem;">Marketing & Ventas</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <div class="team-avatar">🎨</div>
                <h4 style="margin: 5px 0; color: white;">Ángel Vázquez</h4>
                <p style="color: #666; font-size: 0.8rem;">Diseño & Formulación</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <div class="team-avatar">⚙️</div>
                <h4 style="margin: 5px 0; color: white;">Erick Santos</h4>
                <p style="color: #666; font-size: 0.8rem;">Producción & Envasado</p>
            </div>
        </div>
    </section>

    <footer>
        <p>© 2025 BurgerPizz - Proyecto Académico</p>
        <p>Ingredientes: Carne de cerdo, tocino, quesos, pasta de tomate, especias.</p>
        <p>Manténgase congelado a -18°C | Vida útil: 4 meses | Lote: 241001-A</p>
    </footer>

    <script>
        // Función para mover la pantalla al catálogo
        function irAProductos() {
            document.getElementById('productos').scrollIntoView();
        }

        // Función para simular la compra
        function agregarAlCarrito(producto, precio) {
            alert("✅ ¡PRODUCTO AGREGADO!\n\nHas seleccionado: " + producto + "\nPrecio: $" + precio + " MXN\n\n(Esta es una simulación de compra para fines académicos).");
        }
    </script>

</body>
</html>
