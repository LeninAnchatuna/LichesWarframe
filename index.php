<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Liches de Warframe</title>
    <link rel="icon" type="image/x-icon" href="img/WarframeIcon.ico">
</head>

<body class="bg-gray-100 text-gray-900 text-lg leading-relaxed">

    <!-- ENCABEZADO -->
    <header class="bg-yellow-300 text-center py-6 shadow-md">
        <h1 class="text-4xl font-extrabold">Liches en Warframe</h1>
    </header>

    <!-- BARRA DE NAVEGACIÓN -->
    <nav class="bg-gray-400 shadow-md">
        <div class="container mx-auto grid grid-cols-5 text-center py-3 text-xl font-bold text-gray-900">
            <a href="#welcome" class="hover:text-gray-700">Bienvenido</a>
            <a href="#liches" class="hover:text-gray-700">Liches</a>
            <a href="#eliminarlos" class="hover:text-gray-700">Cómo eliminarlos</a>
            <a href="#cuestionario" class="hover:text-gray-700">Formulario</a>
            <a href="#contactos" class="hover:text-gray-700">Contactos</a>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-10">

        <!-- SECCIÓN BIENVENIDA -->
       <section id="welcome" class="text-left mb-16 w-full">
            <h2 class="text-3xl font-bold mb-6">Bienvenido a mi página</h2>

            <p class="max-w-full mb-4">
                En Warframe, los Liches representan un tipo de enemigo particularmente desafiante y único. 
                Son adversarios poderosos, que varían en sus orígenes, habilidades y tácticas de combate, creando una 
                experiencia dinámica para los jugadores. Los tres tipos principales de Liches en el juego son: Liches Kuva,
                Hermanas de Parvos y Liches Coda. Cada uno se distingue por sus propias mecánicas de creación y derrota, 
                presentando diferentes tipos de amenazas en combate y aportando un nivel adicional de dificultad y
                estrategia al juego.
            </p>
            <p class="max-w-full mb-4">
            Los Liches están vinculados a un sistema de venganza. En el caso de los Liches Kuva, los jugadores 
                pueden crear un Liche personal que los persigue a través de misiones y que se vuelve más fuerte conforme 
                pasa el tiempo. Las Hermanas de Parvos introducen una dinámica en la que las entidades de Parvos Granum se 
                convierten en formidables oponentes con un enfoque en la movilidad y evasión. Finalmente, los Liches Coda 
                representan una variante avanzada que se incluye en eventos especiales, añadiendo nuevas capas de dificultad.
            </p>
            <p class="max-w-full">
                En esta página, exploraremos en profundidad las características, fortalezas, debilidades y tácticas 
                necesarias para enfrentar y derrotar a cada uno de estos Liches, además de cómo obtener sus armas exclusivas 
                y recompensas.   
            </p>
        </section>

        <hr class="border-gray-400 my-12">

        <!-- SECCIÓN LICHES -->
        <section id="liches">

            <h2 class="text-4xl font-bold mb-10 text-center">Liches de Warframe</h2>

            <!-- LICHES KUVA -->
            <h3 class="text-3xl font-semibold mb-6">Liches Kuva</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div class="space-y-4">
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

                <div class="flex justify-center">
                    <img src="img/LichesKuva.jfif" alt="Liches Kuva" class="rounded-lg shadow-lg max-w-full">
                </div>
            </div>

            <!-- TABLA KUVA -->
            <h4 class="text-2xl font-bold mb-4">Datos importantes</h4>

            <table class="w-full border border-gray-500 text-lg mb-16">
                <thead class="bg-gray-300 font-bold">
                    <tr>
                        <th class="border p-3">Características</th>
                        <th class="border p-3">Descripción</th>
                        <th class="border p-3">Debilidad</th>
                        <th class="border p-3">Habilidades especiales</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Origen</td>
                        <td class="border p-3">Son soldados Grineer corrompidos por la Kuva, una sustancia misteriosa que les otorga grandes poderes.</td>
                        <td class="border p-3">Depende del tipo de Liche Kuva (puede ser fuego, electricidad, frío, etc.)</td>
                        <td class="border p-3">Crecen en poder con el tiempo, se hacen más fuertes con cada enfrentamiento.</td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Método de obtención</td>
                        <td class="border p-3">Se obtienen tras completar misiones específicas de Liches Kuva y luego enfrentarlos en combate.</td>
                        <td class="border p-3">Cada Liche tiene una debilidad única basada en el daño elemental o tipo de arma.</td>
                        <td class="border p-3">Ofrecen la opción de ser convertidos en aliados si el jugador decide hacer un trato.</td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Fortaleza</td>
                        <td class="border p-3">Son enemigos extremadamente poderosos, con resistencias altas y habilidades que les permiten adaptarse al combate.</td>
                        <td class="border p-3">Pueden tener una gran resistencia a daños físicos o específicos.</td>
                        <td class="border p-3">Resistencia a varios tipos de daño, como fuego, electricidad o frío.</td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Estilo de juego</td>
                        <td class="border p-3">La mejor estrategia es debilitar a los Liches en varias fases, descubrir su debilidad y luego enfrentarlos.</td>
                        <td class="border p-3">Usar las armas correctas y evitar las trampas que los Liches pueden poner.</td>
                        <td class="border p-3">Tienen un sistema de venganza que los hace más poderosos con cada enfrentamiento.</td>
                    </tr>
                </tbody>
            </table>

            <hr class="border-gray-400 my-12">

            <!-- HERMANAS DE PARVOS -->
            <h3 class="text-3xl font-semibold mb-6">Hermanas de Parvos</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div class="flex justify-center md:order-1 order-2">
                    <img src="img/HermanasParvos.jpg" alt="Hermanas de Parvos" class="rounded-lg shadow-lg">
                </div>

                <div class="space-y-4 md:order-2 order-1">
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

            <!-- TABLA PARVOS -->
            <h4 class="text-2xl font-bold mb-4">Datos importantes</h4>

            <table class="w-full border border-gray-500 text-lg mb-16">
                <thead class="bg-gray-300 font-bold">
                    <tr>
                        <th class="border p-3">Características</th>
                        <th class="border p-3">Descripción</th>
                        <th class="border p-3">Debilidad</th>
                        <th class="border p-3">Habilidades especiales</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Origen</td>
                        <td class="border p-3">Hijas del líder Corpus Parvos Granum, convertidas en guerreras poderosas con habilidades especiales.</td>
                        <td class="border p-3">Varía según la hermana; algunas son más vulnerables a armas de largo alcance, mientras que otras lo son a ataques de área.</td>
                        <td class="border p-3">Habilidad de cambiar su estilo de combate y adaptarse a las estrategias del jugador.</td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Método de obtención</td>
                        <td class="border p-3">Se obtienen a través de misiones especiales que requieren rastrear y eliminar a cada hermana.</td>
                        <td class="border p-3">Depende de la táctica de la hermana; algunas pueden tener inmunidades a ciertos tipos de daño.</td>
                        <td class="border p-3">Alta velocidad y evasión, habilidades de sigilo.</td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Fortaleza</td>
                        <td class="border p-3">Son extremadamente rápidas y evasivas, con alta resistencia a ciertos tipos de daño.</td>
                        <td class="border p-3">Muy difícil de derrotar sin una estrategia bien pensada.</td>
                        <td class="border p-3">Movilidad avanzada, con la habilidad de teleportarse y evadir ataques.</td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Estilo de juego</td>
                        <td class="border p-3">Las hermanas requieren tácticas de sigilo y evasión. Es recomendable utilizar armas de largo alcance o habilidades de control de masas.</td>
                        <td class="border p-3">Necesitarás adaptarte a sus cambios de estilo y patrones de combate</td>
                        <td class="border p-3">Tácticas de engaño, invisibilidad y ataques rápidos.</td>
                    </tr>
                </tbody>
            </table>

            <hr class="border-gray-400 my-12">

            <!-- LICHES CODA -->
            <h3 class="text-3xl font-semibold mb-6">Liches Coda</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div class="space-y-4">
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

                <div class="flex justify-center">
                    <img src="img/LichesCoda.jfif" alt="Liches Coda" class="rounded-lg shadow-lg">
                </div>
            </div>

            <!-- TABLA CODA -->
            <h4 class="text-2xl font-bold mb-8">Datos importantes</h4>

            <table class="w-full border border-gray-500 text-lg mb-16">
                <thead class="bg-gray-300 font-bold">
                    <tr>
                        <th class="border p-3">Características</th>
                        <th class="border p-3">Descripción</th>
                        <th class="border p-3">Debilidad</th>
                        <th class="border p-3">Habilidades especiales</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Origen</td>
                        <td class="border p-3">Introducidos a través de la Operación Coda, con una relación más profunda con la historia principal del juego.</td>
                        <td class="border p-3">Alta resistencia, pero vulnerable a ataques de alto impacto.</td>
                        <td class="border p-3">Capacidad de alterar el entorno y las condiciones de combate.</td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Método de obtención</td>
                        <td class="border p-3">Obtención a través de completar misiones de la Operación Coda y luego enfrentarse a estos liches.</td>
                        <td class="border p-3">Pueden tener una defensa muy fuerte contra ataques convencionales.</td>
                        <td class="border p-3">Invocan refuerzos y manipulan el terreno de combate.</td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Fortaleza</td>
                        <td class="border p-3">Son extremadamente poderosos, con habilidades que les permiten modificar el campo de batalla.</td>
                        <td class="border p-3">Requieren tácticas avanzadas y adaptabilidad.</td>
                        <td class="border p-3">Manipulación del entorno, invocación de otros enemigos.</td>
                    </tr>
                    <tr class="even:bg-gray-100">
                        <td class="border p-3 font-semibold">Estilo de juego</td>
                        <td class="border p-3">Se necesita una estrategia de equipo y habilidades avanzadas. Los jugadores deben adaptarse a las condiciones cambiantes de combate.</td>
                        <td class="border p-3">Usar armas de impacto y control de masas es esencial.</td>
                        <td class="border p-3">Grandes habilidades defensivas y ofensivas, capaces de invocar aliados.</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <hr class="border-gray-400 my-12">

        <!-- GUÍAS EN VIDEO -->
        <section id="eliminarlos" class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-10">Guías para eliminar a los Liches</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Cómo eliminar a Liches Kuva</h3>
                    <div class="aspect-video mb-3">
                        <iframe class="w-full h-full rounded"
                                src="https://www.youtube.com/embed/t0sTfuPO9_Q"
                                allowfullscreen>
                        </iframe>
                    </div>
                    <a href="https://www.youtube.com/watch?v=t0sTfuPO9_Q" class="text-blue-600 underline">Presionar si el video no funciona</a>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Cómo eliminar a Hermanas de Parvos</h3>
                    <div class="aspect-video mb-3">
                        <iframe class="w-full h-full rounded"
                                src="https://www.youtube.com/embed/9-bdCY-ENqw"
                                allowfullscreen>
                        </iframe>
                    </div>
                    <a href="https://www.youtube.com/watch?v=9-bdCY-ENqw" class="text-blue-600 underline">Presionar si el video no funciona</a>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Cómo eliminar a Liches Coda</h3>
                    <div class="aspect-video mb-3">
                        <iframe class="w-full h-full rounded"
                                src="https://www.youtube.com/embed/GGu1MUUJCQA"
                                allowfullscreen>
                        </iframe>
                    </div>
                    <a href="https://www.youtube.com/watch?v=GGu1MUUJCQA" class="text-blue-600 underline">Presionar si el video no funciona</a>
                </div>

            </div>
        </section>

        <hr class="border-gray-400 my-12">

        <!-- FORMULARIO -->
        <section id="cuestionario" class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-10">Cuéntanos tu experiencia con los Liches</h2>

            <div class="bg-orange-200 p-8 rounded-xl shadow-lg max-w-3xl mx-auto">

                <form id="form-cuestionario" method="post"
                      action="<?php echo $_SERVER['PHP_SELF']; ?>#cuestionario"
                      class="space-y-6">

                    <div>
                        <label class="block font-semibold mb-2">Nombre de Tenno</label>
                        <input type="text" name="tenno_name"
                               class="w-full p-3 bg-white border rounded">
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">Plataforma de juego</label>
                        <select name="plataforma"
                                class="w-full p-3 bg-white border rounded">
                            <option value="">-- Selecciona plataforma --</option>
                            <option>PC</option>
                            <option>PlayStation</option>
                            <option>Xbox</option>
                            <option>Nintendo Switch</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">¿Has enfrentado un Kuva Lich?</label>
                        <div class="flex gap-6">
                            <label><input type="radio" name="tuvo_kuva" value="si"> Sí</label>
                            <label><input type="radio" name="tuvo_kuva" value="no"> No</label>
                        </div>
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">¿Cuántos Liches o Hermanas has derrotado?</label>
                        <input type="number" name="liches_derrotados" min="0"
                               class="w-full p-3 bg-white border rounded">
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">Tipo de enemigo que prefieres enfrentar</label>

                        <div class="space-y-1">
                            <label class="block"><input type="checkbox" name="pref[]" value="kuva"> Kuva Liches</label>
                            <label class="block"><input type="checkbox" name="pref[]" value="parvos"> Hermanas de Parvos</label>
                            <label class="block"><input type="checkbox" name="pref[]" value="codas"> Códas (The Index)</label>
                            <label class="block"><input type="checkbox" name="pref[]" value="ninguno"> Ninguno en especial</label>
                        </div>
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">Arma más valiosa obtenida</label>
                        <textarea name="arma_valiosa" rows="4"
                                  class="w-full p-3 bg-white border rounded"></textarea>
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">Nivel promedio de rabia</label>
                        <input type="range" name="nivel_rabia" min="1" max="5" value="3"
                               class="w-full">
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">Fecha del primer Lich/Hermana</label>
                        <input type="date" name="fecha_primer"
                               class="w-full p-3 bg-white border rounded">
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">¿Qué mejorarías del sistema Coda?</label>
                        <textarea name="reliquia_sugerencia" rows="5"
                                  class="w-full p-3 bg-white border rounded"></textarea>
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">Satisfacción general (1 a 10)</label>
                        <input type="number" name="satisfaccion" min="1" max="10"
                               class="w-full p-3 bg-white border rounded">
                    </div>

                    <div class="flex justify-between mt-6">
                        <button type="reset" class="bg-gray-300 px-4 py-2 rounded">Deshacer</button>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Enviar</button>
                    </div>

                </form>
            </div>

            <!-- Procesamiento PHP -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo '<div class="bg-lime-300 p-6 mt-10 rounded-xl max-w-3xl mx-auto shadow-lg">';
                echo '<h3 class="text-2xl font-bold mb-4">Datos enviados:</h3>';
                echo '<ul class="space-y-2 text-lg">';

                echo '<li><strong>Nombre de Tenno:</strong> ' . htmlspecialchars($_POST['tenno_name']) . '</li>';
                echo '<li><strong>Plataforma:</strong> ' . htmlspecialchars($_POST['plataforma']) . '</li>';
                echo '<li><strong>¿Kuva Lich?:</strong> ' . htmlspecialchars($_POST['tuvo_kuva']) . '</li>';
                echo '<li><strong>Cantidad derrotados:</strong> ' . htmlspecialchars($_POST['liches_derrotados']) . '</li>';

                if (isset($_POST['pref'])) {
                    echo '<li><strong>Preferencias:</strong> ' . htmlspecialchars(implode(", ", $_POST['pref'])) . '</li>';
                }

                echo '<li><strong>Arma valiosa:</strong> ' . htmlspecialchars($_POST['arma_valiosa']) . '</li>';
                echo '<li><strong>Nivel de rabia:</strong> ' . htmlspecialchars($_POST['nivel_rabia']) . '</li>';
                echo '<li><strong>Fecha:</strong> ' . htmlspecialchars($_POST['fecha_primer']) . '</li>';
                echo '<li><strong>Sugerencias Coda:</strong> ' . htmlspecialchars($_POST['reliquia_sugerencia']) . '</li>';
                echo '<li><strong>Satisfacción:</strong> ' . htmlspecialchars($_POST['satisfaccion']) . '/10</li>';

                echo '</ul></div>';
            }
            ?>

        </section>

    </main>

    <!-- FOOTER -->
    <footer id="contactos" class="bg-yellow-300 py-6 text-center mt-20 shadow-inner">
        <h2 class="text-2xl font-bold mb-2">Contactos</h2>
        <p class="text-lg">Teléfono: +593 97 904 0773</p>
        <p class="text-lg">Email 1: ljanchatuna@espe.edu.ec</p>
        <p class="text-lg">Email 2: leninjosue2006@gmail.com</p>
    </footer>

</body>
</html>
