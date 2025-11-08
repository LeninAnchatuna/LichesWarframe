<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liches de Warframe</title>
    <link rel="icon" type="image/x-icon" href="img/WarframeIcon.ico">
    <style>
        .top-header {
            background: #e6dede; /* color gris */
            height: 50px;        /* grosor de 50px */
            width: 100%;
            display: flex;
            align-items: center; /* centra verticalmente */
            justify-content: center; /* centra horizontalmente */
            padding: 75px;
            box-sizing: border-box;
        }
        .top-header h1 {
            margin: 0;
            color: #333;         /* mejor contraste sobre gris claro */
            font-size: 50px;
            font-weight: 600;
        }

        /* Barra de navegación*/
        .sub-nav {
            background: #b8afaf; /* mismo color que el header */
            width: 100%;
            display: grid;
            grid-template-columns: repeat(5, 1fr); /* una columna por enlace */
            align-items: stretch;
            box-sizing: border-box;
            border-top: 1px solid rgba(0,0,0,0.06);
            border-bottom: 1px solid rgba(0,0,0,0.06);
            height: 56px;
        }
        .sub-nav a {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000000;
            text-decoration: none;
            font-weight: 500;
            padding: 15px;
            border-right: 1px solid rgba(0,0,0,0.06); /* separador entre secciones */
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            font-size: 22px; /* Incrementar tamaño de links */
        }
        .sub-nav a:last-child {
            border-right: none;
        }
        .sub-nav a:hover {
            background: rgba(0,0,0,0.03);
            text-decoration: underline;
        }

        /* En pantallas pequeñas distribuir en filas */
        @media (max-width: 600px) {
            .sub-nav {
                grid-template-columns: repeat(2, 1fr);
                grid-auto-rows: 48px;
                gap: 0;
            }
            .sub-nav a {
                border-right: 1px solid rgba(0,0,0,0.06);
            }
            .sub-nav a:nth-child(2n) { border-right: none; } 
        }

         main { 
            padding: 24px;            
            font-family:'Times New Roman';
            max-width: 90%; /* Limitar ancho máximo */
            margin: 0 auto; /* Centrar contenido */
        }

        section { 
            margin: 60px 0; /* Más espacio entre secciones */
            text-align: center; /* Centrar títulos y contenido */
        }

        section h1 {
            font-size: 2.5em;
            margin-bottom: 30px;
            font-family:'Times New Roman';
        }

        section h2 {
            font-size: 2em;
            margin: 0px;
            font-family:'Times New Roman';
        }

         section h3 {
            font-size: 1.75em;
            margin: 0px;
            font-family:'Times New Roman';
        }

        /* Ajustar el layout de los liches */
        .lichen-row {
            display: flex;
            align-items: stretch; /* Estirar para igual altura */
            gap: 40px; /* Más espacio entre columnas */
            margin: 24px 0 40px;
            text-align: left; /* Texto alineado a la izquierda */
        }

        .lichen-row .col {
            width: 50%; /* Dividir en dos columnas iguales */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .lichen-row .col img {
            width: 100%;
            height: 300px; /* Altura fija para todas las imágenes */
            object-fit: cover; /* Mantener proporción */
            border-radius: 8px; /* Bordes redondeados */
        }

        .lichen-row .col p {
            margin: 0 0 15px;
            line-height: 1.6;
            font-size: 18px; /* Tamaño base para todos los párrafos */
        }

        /* Tabla simple */
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 70%;
            margin: 30px auto; /* Centrar tablas */
        }
        table th, table td {
            border: 1px solid #999;
            padding: 8px 12px;
            text-align: left;
            font-size: 16px; /* Tamaño para el contenido de las tablas */
        }
        table th {
            background: #bbb7b7;
            font-size: 18px; /* Tamaño para los encabezados de tabla */
            font-weight: bold;
        }

        /*Estilo para la sección de guías en video */
        .guides-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin: 30px 0;
        }

        .guide-section {
            flex: 1;
            padding: 15px;
            background: #f5f5f5;
            border-radius: 8px;
        }

        .guide-section h2 {
            margin-bottom: 15px;
            font-size: 1.5em;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* Aspect ratio 16:9 */
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Estilos para el pie de página (contactos) */
        footer#contactos {
            text-align: center;
            padding: 24px;
            background: #e6dede;
            margin-top: 40px;
            box-sizing: border-box;
            font-size: 18px;
        }
        footer#contactos h1 { margin: 0 0 12px 0; font-size: 20px; }
        footer#contactos p { margin: 6px 0; font-size: 18px; }
        
        /* Ajustar tamaño en el formulario */
        form label, 
        form input, 
        form select, 
        form textarea {
            font-size: 18px;
        }
        #form-cuestionario {
            background-color: #FFE4D4; /* Color piel claro */
            border-radius: 15px; /* Bordes redondeados */
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1); /* Sombra suave */
            max-width: 700px;
            margin: 0 auto;
            box-sizing: border-box;
        }

        #form-cuestionario h2 {
            margin-top: 25px;
            margin-bottom: 15px;
            color: #333;
        }

        #form-cuestionario input[type="text"],
        #form-cuestionario select,
        #form-cuestionario textarea {
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: white;
        }

        #form-cuestionario button {
            margin: 8px;
            border-radius: 5px;
            border: none;
            background-color: #b8afaf;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #form-cuestionario button:hover {
            background-color: #9e9595;
        }

        /* Ajustar tamaño de botones */
        button {
            font-size: 16px;
            padding: 8px 16px;
        }
         #cuestionario p {
            font-size: 18px; 
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* Modificar en la sección <style> */
        #welcome {
            text-align: left; /* Alinear todo el contenido a la izquierda */
        }

        #welcome p {
            font-size: 18px; /* Tamaño de fuente igual que los demás párrafos */
            line-height: 1.6;
            margin-bottom: 15px;
        }        
    </style>
</head>
<body>
    <header class="top-header">
        <h1>Liches en Warframe</h1>
    </header>

    <nav class="sub-nav">
        <a href="#welcome"><strong>Bienvenido</strong></a>
        <a href="#liches"><strong>Liches</strong></a>
        <a href="#eliminarlos"><strong>Cómo eliminarlos</strong></a>
        <a href="#cuestionario"><strong>Formulario</strong></a> 
        <a href="#contactos"><strong>Contactos</strong></a>         
    </nav>

    <main>
        <!-- Sección para Bienvenida -->
        <section id="welcome">
            <h1>Bienvenido a mi pagina</h1>
            <p>
                En Warframe, los Liches representan un tipo de enemigo particularmente desafiante y único. 
                Son adversarios poderosos, que varían en sus orígenes, habilidades y tácticas de combate, creando una 
                experiencia dinámica para los jugadores. Los tres tipos principales de Liches en el juego son: Liches Kuva,
                 Hermanas de Parvos y Liches Coda. Cada uno se distingue por sus propias mecánicas de creación y derrota, 
                 presentando diferentes tipos de amenazas en combate y aportando un nivel adicional de dificultad y
                  estrategia al juego.
            </p>
            <p>
                Los Liches están vinculados a un sistema de venganza. En el caso de los Liches Kuva, los jugadores 
                pueden crear un Liche personal que los persigue a través de misiones y que se vuelve más fuerte conforme 
                pasa el tiempo. Las Hermanas de Parvos introducen una dinámica en la que las entidades de Parvos Granum se 
                convierten en formidables oponentes con un enfoque en la movilidad y evasión. Finalmente, los Liches Coda 
                representan una variante avanzada que se incluye en eventos especiales, añadiendo nuevas capas de dificultad.  
            </p>
            <p>
                En esta página, exploraremos en profundidad las características, fortalezas, debilidades y tácticas 
                necesarias para enfrentar y derrotar a cada uno de estos Liches, además de cómo obtener sus armas exclusivas 
                y recompensas.   
            </p>
        </section>
        <hr>

        <!-- Sección para liches -->
        <section id="liches">
            <h1>Liches de warframe</h1>
            <!-- Liches Kuva -->
            <h2>Liches kuva</h2>
            <div class="lichen-row">
                <div class="col">
                    <p>
                        Los Liches Kuva son una de las amenazas más icónicas de Warframe. Estos seres son antiguos soldados de los Grineer, 
                        pero han sido corrompidos por la Kuva, un líquido oscuro con grandes poderes. La Kuva es utilizada por los Grineer para 
                        hacer crecer su ejército, y al infectar a los soldados, los transforma en Liches con habilidades mejoradas y una sed de 
                        venganza. Los jugadores se encuentran con estos Liches a través de un sistema específico en el juego, conocido como 
                        Sistema de Liches Kuva, en el que el jugador es "marcado" por un Liche.
                    </p>
                    <p>
                       El proceso de obtener un Liche Kuva es un poco más complejo que otros enemigos. Primero, el jugador debe completar una 
                       misión relacionada con los Liches Kuva y eliminar a un enemigo corrupto, para luego obtener un Liche que lo perseguirá 
                       en futuras misiones. Estos Liches se hacen más fuertes conforme más misiones completes, y tienen una serie de 
                       características y poderes específicos que deben ser contrarrestados. Para derrotar a un Liche Kuva, el jugador debe 
                       conocer su debilidad, la cual varía dependiendo del Liche, ya sea un elemento o un tipo de daño específico. Si el 
                       jugador no derrota al Liche en un tiempo determinado, este puede volver con nuevas habilidades, armas y una mayor 
                       dificultad.
                    </p>
                    <p> 
                        A medida que un jugador interactúa con su Liche Kuva, este puede ofrecer la oportunidad de hacer un trato con él, 
                        incluso llegando a convertirlo en un aliado en lugar de un enemigo, lo que le permitirá obtener nuevas armas únicas y 
                        poderosas como recompensa. 
                    </p>
                </div>
                <div class="col">
                    <img src="img/LichesKuva.jfif" alt="Liches Kuva" style="max-width:100%; height:auto; display:block;">
                </div>
            </div>

            <h3>Datos importantes</h3>
            <table>
                <tr>
                    <th>Características</th>
                    <th>Descripción</th>
                    <th>Debilidad</th>
                    <th>Habilidades especiales</th>
                </tr>
                <tr>
                    <th>Origen</th>
                    <td>Son soldados Grineer corrompidos por la Kuva, una sustancia misteriosa que les otorga grandes poderes.</td>
                    <td>Depende del tipo de Liche Kuva (puede ser fuego, electricidad, frío, etc.)</td>
                    <td>Crecen en poder con el tiempo, se hacen más fuertes con cada enfrentamiento.</td>
                </tr>
                <tr>
                    <th>Método de obtención</th>
                    <td>Se obtienen tras completar misiones específicas de Liches Kuva y luego enfrentarlos en combate.</td>
                    <td>Cada Liche tiene una debilidad única basada en el daño elemental o tipo de arma.</td>
                    <td>Ofrecen la opción de ser convertidos en aliados si el jugador decide hacer un trato.</td>
                </tr>
                <tr>
                    <th>Fortaleza</th>
                    <td>Son enemigos extremadamente poderosos, con resistencias altas y habilidades que les permiten adaptarse al combate..</td>
                    <td>Pueden tener una gran resistencia a daños físicos o específicos.</td>
                    <td>Resistencia a varios tipos de daño, como fuego, electricidad o frío.</td>
                </tr>
                <tr>
                    <th>Estilo de juego</th>
                    <td>La mejor estrategia es debilitar a los Liches en varias fases, descubrir su debilidad y luego enfrentarlos.</td>
                    <td>Usar las armas correctas y evitar las trampas que los Liches pueden poner.</td>
                    <td>Tienen un sistema de venganza que los hace más poderosos con cada enfrentamiento.</td>
                </tr>
            </table>
            <hr>
            
            <!-- Hermanas de Parvos -->
            <h2>Hermanas de Parvos</h2>
            <div class="lichen-row">
                <div class="col">
                    <img src="img/HermanasParvos.jpg" alt="Hermanas de Parvos" style="max-width:100%; height:auto; display:block;">

                </div>
                <div class="col">
                    <p>
                        Las Hermanas de Parvos son una de las adiciones más recientes y complejas en Warframe. Estas entidades son creadas 
                        a partir del poder oscuro de Parvos Granum, un personaje clave dentro del lore del juego. Parvos Granum fue el líder 
                        de la facción Corpus, y sus hijas, conocidas como Hermanas de Parvos, se han convertido en formidables oponentes de 
                        alto nivel. A diferencia de los Liches Kuva, las Hermanas son más ágiles y menos predecibles en sus tácticas.
                    </p>
                    <p>
                       El sistema detrás de las Hermanas de Parvos es más dinámico, ya que cada hermana tiene su propio conjunto de 
                       habilidades, armas y resistencias. Pueden adaptarse a las tácticas del jugador, lo que las convierte en enemigos muy
                        difíciles de derrotar sin una planificación cuidadosa. Estas hermanas se presentan en una serie de misiones y deben 
                        ser cazadas en un proceso que involucra rastrearlas, enfrentarlas y finalmente derrotarlas para obtener sus poderosas armas.
                    </p>
                    <p> 
                       La principal mecánica que diferencia a las Hermanas de Parvos de otros liches es que cada una posee un conjunto de
                        habilidades especializadas que reflejan la influencia de Parvos Granum. Al derrotarlas, los jugadores pueden obtener 
                        nuevas armas y recursos exclusivos. Sin embargo, la complejidad de la batalla varía dependiendo de la hermana a la que 
                        te enfrentes, lo que requiere una estrategia adaptativa.
                    </p>
                </div>
            </div>

            <h3>Datos importantes</h3>
            <table>
                <tr>
                    <th>Características</th>
                    <th>Descripción</th>
                    <th>Debilidad</th>
                    <th>Habilidades especiales</th>
                </tr>
                <tr>
                    <th>Origen</th>
                    <td>Hijas del líder Corpus Parvos Granum, convertidas en guerreras poderosas con habilidades especiales.</td>
                    <td>Varía según la hermana; algunas son más vulnerables a armas de largo alcance, mientras que otras lo son a ataques de área.</td>
                    <td>Habilidad de cambiar su estilo de combate y adaptarse a las estrategias del jugador.</td>
                </tr>
                <tr>
                    <th>Método de obtención</th>
                    <td>Se obtienen a través de misiones especiales que requieren rastrear y eliminar a cada hermana.</td>
                    <td>Depende de la táctica de la hermana; algunas pueden tener inmunidades a ciertos tipos de daño.</td>
                    <td>Alta velocidad y evasión, habilidades de sigilo.</td>
                </tr>
                <tr>
                    <th>Fortaleza</th>
                    <td>Son extremadamente rápidas y evasivas, con alta resistencia a ciertos tipos de daño.</td>
                    <td>Muy difícil de derrotar sin una estrategia bien pensada.</td>
                    <td>Movilidad avanzada, con la habilidad de teleportarse y evadir ataques.</td>
                </tr>
                <tr>
                    <th>Estilo de juego</th>
                    <td>Las hermanas requieren tácticas de sigilo y evasión. Es recomendable utilizar armas de largo alcance o habilidades de control de masas.</td>
                    <td>Necesitarás adaptarte a sus cambios de estilo y patrones de combate.</td>
                    <td>Tácticas de engaño, invisibilidad y ataques rápidos.</td>
                </tr>
            </table>
            <hr>

            <!-- Liches Coda -->
             <h2>Liches Coda</h2>
            <div class="lichen-row">
                <div class="col">
                    <p>
                       Los Liches Coda son la variante más avanzada y desafiante de los Liches disponibles en Warframe. 
                       Introducidos en la Operación Coda, estos liches tienen una relación más directa con la narrativa central del juego, 
                       lo que les otorga una profundidad adicional tanto en términos de historia como de mecánicas de combate. Estos Liches 
                       son conocidos por su capacidad para alterar el campo de batalla, invocar refuerzos y manipular el entorno de maneras 
                       que otros liches no pueden.
                    </p>
                    <p>
                        A diferencia de los Liches Kuva o las Hermanas de Parvos, los Liches Coda tienen habilidades únicas que les permiten
                         alterar la dinámica de combate. Pueden invocar a otros enemigos, crear barreras que bloquean el movimiento del 
                         jugador o cambiar el terreno para dificultar la derrota. Este tipo de Liche representa un reto final para los 
                         jugadores más experimentados, ya que requieren una buena combinación de trabajo en equipo y estrategia avanzada para
                          ser derrotados.
                    </p>
                    <p>
                        Una de las características más temidas de los Liches Coda es su capacidad para invocar aliados poderosos, como Grineer 
                        reforzados o Corpus mecánicos, lo que eleva considerablemente el nivel de dificultad durante las confrontaciones. A                         
                        medida que los jugadores progresan en la Operación Coda, se enfrentan a Liches que no solo son difíciles de vencer, 
                        sino que también tienen un impacto profundo en el entorno del mapa, lo que obliga a los jugadores a tener un control 
                        perfecto de sus movimientos, habilidades y recursos.
                    </p>
                </div>
                <div class="col">
                    <img src="img/LichesCoda.jfif" alt="Liches Coda" style="max-width:100%; height:auto; display:block;">
                </div>
            </div>

            <h3>Datos importantes</h3>
            <table>
                <tr>
                    <th>Características</th>
                    <th>Descripción</th>
                    <th>Debilidad</th>
                    <th>Habilidades especiales</th>
                </tr>
                <tr>
                    <th>Origen</th>
                    <td>Introducidos a través de la Operación Coda, con una relación más profunda con la historia principal del juego.</td>
                    <td>Alta resistencia, pero vulnerable a ataques de alto impacto.</td>
                    <td>Capacidad de alterar el entorno y las condiciones de combate.</td>
                </tr>
                <tr>
                    <th>Método de obtención</th>
                    <td>Obtención a través de completar misiones de la Operación Coda y luego enfrentarse a estos liches.</td>
                    <td>Pueden tener una defensa muy fuerte contra ataques convencionales.</td>
                    <td>Invocan refuerzos y manipulan el terreno de combate.</td>
                </tr>
                <tr>
                    <th>Fortaleza</th>
                    <td>Son extremadamente poderosos, con habilidades que les permiten modificar el campo de batalla.</td>
                    <td>Requieren tácticas avanzadas y adaptabilidad.</td>
                    <td>Manipulación del entorno, invocación de otros enemigos.</td>
                </tr>
                <tr>
                    <th>Estilo de juego</th>
                    <td>Se necesita una estrategia de equipo y habilidades avanzadas. Los jugadores deben adaptarse a las condiciones cambiantes de combate.</td>
                    <td>Usar armas de impacto y control de masas es esencial.</td>
                    <td>Grandes habilidades defensivas y ofensivas, capaces de invocar aliados.</td>
                </tr>
            </table>
        </section>
        <hr>

        <!-- Sección para Guías en video -->
        <section id="eliminarlos">
            <h1>Guías para eliminar a los liches</h1>
            <p>Descubre las estrategias más efectivas para derrotar a cada tipo de liche con los siguientes videos.</p>

            <div class="guides-container">
                <div class="guide-section">
                    <h2>Cómo eliminar a Liches Kuva</h2>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/watch?v=t0sTfuPO9_Q" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <a href="https://www.youtube.com/watch?v=t0sTfuPO9_Q">Presionar si el video no funciona</a>
                </div>

                <div class="guide-section">
                    <h2>Cómo eliminar a Hermanas de Parvos</h2>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/watch?v=9-bdCY-ENqw" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <a href="https://www.youtube.com/watch?v=9-bdCY-ENqw">Preisonar si el video no funciona</a>
                </div>

                <div class="guide-section">
                    <h2>Cómo eliminar a Liches Coda</h2>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/watch?v=GGu1MUUJCQA" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <a href="https://www.youtube.com/watch?v=GGu1MUUJCQA">Presionar si el video no funciona</a>
                </div>
            </div>
        </section>
        <hr>
        
         <!-- Sección para cuestionario -->
        <section id="cuestionario">
            <h1>Cuentanos sobre tu experiencia con los liches</h1>
            <p>Comparte brevemente tu experiencia enfrentando a un liche: contexto, dificultad y resultados.</p>

            <form id="form-cuestionario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>#cuestionario" style="text-align:left;">
                <!-- 1. Nombre de Tenno -->
                <h2>Nombre de Tenno</h2>
                <input type="text" name="tenno_name" placeholder="Escribe tu nombre o alias en el juego." style="width:100%; max-width:640px; padding:8px;">

                <!-- 2. Plataforma de juego -->
                <h2>Plataforma de juego</h2>
                <select name="plataforma" style="width:100%; max-width:420px; padding:8px;">
                    <option value="">-- Selecciona plataforma --</option>
                    <option>PC</option>
                    <option>PlayStation</option>
                    <option>Xbox</option>
                    <option>Nintendo Switch</option>
                </select><br>
                <small>Selecciona la plataforma en la que juegas Warframe.</small>

                <!-- 3. ¿Has enfrentado a un Kuva Lich? -->
                <h2>¿Has enfrentado a un Kuva Lich?</h2>
                <label><input type="radio" name="tuvo_kuva" value="si"> Sí</label>
                <label style="margin-left:12px;"><input type="radio" name="tuvo_kuva" value="no"> No</label>
                <br><small>Indica si ya has tenido tu primer encuentro con un Kuva Lich.</small>

                <!-- 4. ¿Cuántos Liches o Hermanas has derrotado? -->
                <h2>¿Cuántos Liches o Hermanas has derrotado?</h2>
                <input type="number" name="liches_derrotados" min="0" placeholder="Ej: 12" style="width:160px; padding:6px;">
                <br><small>Escribe el número total de enemigos convertidos o vencidos.</small>

                <!-- 5. Tipo de enemigo que prefieres enfrentar -->
                <h2>Tipo de enemigo que prefieres enfrentar</h2>
                <label><input type="checkbox" name="pref[]" value="kuva"> Kuva Liches</label><br>
                <label><input type="checkbox" name="pref[]" value="parvos"> Hermanas de Parvos</label><br>
                <label><input type="checkbox" name="pref[]" value="codas"> Códas (en el modo The Index)</label><br>
                <label><input type="checkbox" name="pref[]" value="ninguno"> Ninguno en especial</label><br>
                <small>Marca todos los que te resulten más interesantes.</small>

                <!-- 6. Arma más valiosa obtenida de un Lich o Hermana -->
                <h2>Arma más valiosa obtenida de un Lich o Hermana</h2>
                <textarea name="arma_valiosa" rows="4" style="width:100%; max-width:640px; padding:8px;" placeholder="Describe cuál fue tu mejor recompensa y por qué te gusta."></textarea>

                <!-- 7. Nivel promedio de rabia de tus Liches antes de vencerlos -->
                <h2>Nivel promedio de rabia de tus Liches antes de vencerlos</h2>
                <label style="display:block; margin-bottom:6px;">1️⃣ Calmo — 2️⃣ Irritado — 3️⃣ Furioso — 4️⃣ Enloquecido — 5️⃣ Imparable</label>
                <input type="range" name="nivel_rabia" min="1" max="5" value="3" step="1" style="width:100%; max-width:575px;">
                <br><small>Mueve el control para indicar la dificultad promedio que sueles enfrentar.</small>

                <!-- 8. Fecha en que obtuviste tu primer Lich o Hermana -->
                <h2>Fecha en que obtuviste tu primer Lich o Hermana</h2>
                <input type="date" name="fecha_primer" style="padding:6px;">
                <br><small>Indica aproximadamente cuándo comenzaste a enfrentarlos.</small>

                <!-- 9. ¿Qué te gustaría que añadieran para mejorar el sistema Coda? -->
                <h2>¿Qué te gustaría que añadieran para mejorar el sistema Coda?</h2>
                <textarea name="reliquia_sugerencia" rows="5" style="width:100%; max-width:640px; padding:8px;" placeholder="Da tu opinión o sugiere ideas para nuevas mecánicas o recompensas."></textarea>

                <!-- 10. Califica tu satisfacción general con el sistema de Liches (1 a 10) -->
                <h2>Califica tu satisfacción general con el sistema de Liches (1 a 10)</h2>
                <input type="number" name="satisfaccion" min="1" max="10" placeholder="Ej: 8" style="width:120px; padding:6px;">
                <br><small>Del 1 (muy insatisfecho) al 10 (muy satisfecho).</small>

                <div style="margin-top:12px;">
                    <button type="reset">Deshacer</button>
                    <button type="submit">Enviar</button>
                </div>
            </form>

            <!-- Procesar y mostrar los datos enviados -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo '<div style="background-color: lime; padding: 20px; border-radius: 10px; margin-top: 20px; max-width: 700px; margin-left: auto; margin-right: auto;">';
                echo '<h3 style="color: #333; margin-top: 0;">Datos enviados:</h3>';
                echo '<ul style="list-style-type: none; padding: 0; margin: 0;">';
                
                // Nombre de Tenno
                echo '<li><strong>Nombre de Tenno:</strong> ' . htmlspecialchars($_POST['tenno_name']) . '</li>';
                
                // Plataforma
                echo '<li><strong>Plataforma:</strong> ' . htmlspecialchars($_POST['plataforma']) . '</li>';
                
                // Enfrentó Kuva Lich
                echo '<li><strong>¿Has enfrentado a un Kuva Lich?:</strong> ' . htmlspecialchars($_POST['tuvo_kuva']) . '</li>';
                
                // Número de Liches derrotados
                echo '<li><strong>Liches derrotados:</strong> ' . htmlspecialchars($_POST['liches_derrotados']) . '</li>';
                
                // Tipos preferidos
                if(isset($_POST['pref']) && is_array($_POST['pref'])) {
                    echo '<li><strong>Tipos preferidos:</strong> ' . htmlspecialchars(implode(', ', $_POST['pref'])) . '</li>';
                }
                
                // Arma más valiosa
                echo '<li><strong>Arma más valiosa:</strong> ' . htmlspecialchars($_POST['arma_valiosa']) . '</li>';
                
                // Nivel de rabia
                echo '<li><strong>Nivel de rabia:</strong> ' . htmlspecialchars($_POST['nivel_rabia']) . '</li>';
                
                // Fecha primer Lich
                echo '<li><strong>Fecha primer Lich:</strong> ' . htmlspecialchars($_POST['fecha_primer']) . '</li>';
                
                // Sugerencia para sistema Coda
                echo '<li><strong>Sugerencia sistema Coda:</strong> ' . htmlspecialchars($_POST['reliquia_sugerencia']) . '</li>';
                
                // Satisfacción general
                echo '<li><strong>Satisfacción general:</strong> ' . htmlspecialchars($_POST['satisfaccion']) . '/10</li>';
                
                echo '</ul>';
                echo '</div>';
            }
            ?>
        </section>
    </main>

    <!-- Pie de página: Contactos -->
    <footer id="contactos">
        <h1>Contactos</h1>
        <p>Teléfono: +593 97 904 0773</p>
        <p>Email 1: ljanchatuna@espe.edu.ec</p>
        <p>Email 2: leninjosue2006@gmail.com</p>
    </footer>

</body>
</html>