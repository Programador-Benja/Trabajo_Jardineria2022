<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio / Benja Lazarte</title>
    <link rel="icon" href="img/logo/lawn-mower-384589_640.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body class="bg-dark">

    <!-- Incluimos el header -->
    <?php include("includes/header.php");?>

    <section>
      <div class="titulo-seccion">
        <h1>Cultivando sueños en cada rincón verde</h1>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="img/clientes - trabajos/Trabajo 1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="section_carousel-p">Country "El venado I"</h5>
              <p class="section_carousel-p">Mantenimiento y embellecimiento de paisajes.</p>
            </div>
          </div>
          <div class="carousel-item active">
            <img src="img/clientes - trabajos/Trabajo 2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="section_carousel-p">Country "El venado I"</h5>
              <p class="section_carousel-p">Dale vida a tu entorno con nuestros servicios de cortes de césped y podas expertas.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/clientes - trabajos/Trabajo 3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="section_carousel-p">Country "El venado I"</h5>
              <p class="section_carousel-p">Especializados en diseño floral y mantenimiento profesional, creamos espacios que despiertan los sentidos.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/clientes - trabajos/Trabajo 4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="section_carousel-p">Municipalidad de Esteban Echeverria</h5>
              <p class="section_carousel-p">La Municipalidad de Esteban Echeverría se enorgullece de ofrecer servicios integrales de jardinería y mantenimiento, comprometidos con la preservación y embellecimiento de nuestros espacios verdes.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- Incluimos el wsp-fixed -->
    <?php include("includes/fixed-wsp.php");?>

    <aside class="columna">
      <div class="container-fluid container-services">
        <!-- TITULO Y ACCORDION -->
        <div class="columna__div--text  container">
          <div class="titulo-columna">
            <h1> Servicios que ofrecemos</h1>
          </div>
          
          <div class="accordion columna-acordion" id="accordionExample">
            <!-- ACCORDION 1 -->
            <div class="bg-success">
              <h2 class="accordion-header ">
                <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  🌳 Mantenimiento de Espacios Verdes.
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>El mantenimiento de espacios verdes</strong> requiere un enfoque integral para asegurar su vitalidad y estética. Desde la planificación estratégica hasta la poda experta y la gestión ecológica de plagas, cada paso contribuye a un entorno saludable y agradable. La eficiencia en el riego y la nutrición, junto con la participación comunitaria, potencian la sostenibilidad ambiental y el bienestar colectivo. Un compromiso breve, pero esencial, con la armonía entre la naturaleza y la comunidad.
                </div>
              </div>
            </div>

            <!-- ACCORDION 2 -->

            <div class="bg-success">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  🌿 Limpieza de Canteros.
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>La limpieza de canteros</strong> es esencial para mantener la belleza y la salud de los espacios ajardinados. Retirar detritos, malas hierbas y escombros no solo mejora la estética, sino que también promueve el crecimiento saludable de las plantas. Un enfoque eficiente en la limpieza de canteros asegura un mantenimiento impecable y resalta la elegancia natural de los jardines.
                </div>
              </div>
            </div>

            <!-- ACCORDION 3 -->

            <div class="bg-success">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  👨‍🌾 Jardineria y Mantenimientos de Binders.
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  En la intersección de la <strong>jardinería y el mantenimiento de binders</strong>, se encuentra un enfoque que combina la belleza natural con la organización funcional. La jardinería se convierte en un arte cuando se aplica a la creación de binders ordenados y estéticamente agradables. La atención cuidadosa a la presentación visual se une a la eficiencia en la organización, asegurando que los binders no solo sean funcionales sino también visualmente atractivos.
                </div>
              </div>
            </div>

            <!-- ACCORDION 4 -->

            <div class="bg-success">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                  🌲 Podas en altura.
                </button>
              </h2>
              <div id="collapseFor" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>La poda en altura </strong> es una disciplina especializada que requiere destreza técnica y un enfoque centrado en la seguridad. Este servicio, llevado a cabo por profesionales capacitados, aborda la necesidad de mantener y dar forma a árboles en ubicaciones elevadas. La combinación de técnicas avanzadas y el uso de equipos especializados garantiza resultados estéticos y la preservación de la salud de los árboles, manteniendo al mismo tiempo estándares rigurosos de seguridad.
                </div>
              </div>
            </div>

            <!-- ACCORDION 5 -->

            <div class="bg-success">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  🚿 Sistemas de riego (Manual y Automatico).
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Dos enfoques eficientes para el cuidado del agua en jardinería:</strong><br>
                  Riego Manual:
                  Control directo y personalizado mediante regaderas o mangueras, adecuado para ajustes específicos según las necesidades.<br>
                  Riego Automático:
                  Optimización y ahorro de tiempo a través de programación y sensores, garantizando un suministro preciso y eficiente de agua, favoreciendo la sostenibilidad ambiental.
                </div>
              </div>
            </div>

            <!-- ACCORDION 6 -->

            <div class="bg-success">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  🏡 Diseños de Jardines.
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Los diseños de jardines</strong>  son expresiones artísticas que combinan flora y estructuras para crear espacios estéticos y funcionales. Desde arreglos simétricos hasta paisajes naturales, cada diseño refleja la visión del creador, incorporando elementos que armonizan con el entorno. La clave reside en la fusión equilibrada entre la creatividad y la funcionalidad para transformar espacios exteriores en lugares visualmente atractivos y acogedores.
                </div>
              </div>
            </div>

            <!-- ACCORDION 7 -->

            <div class="bg-success">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                 🌱 Nivelación y Plantaciones.
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>La nivelación del terreno es el primer paso para crear un lienzo uniforme y receptivo.</strong>  Posteriormente, las plantaciones añaden vida y carácter al espacio. Este proceso de nivelación y plantación, esencial en el paisajismo, busca un equilibrio armonioso entre la topografía nivelada y la diversidad vegetal, dando lugar a entornos atractivos y bien estructurados.
                </div>
              </div>
            </div>

            <!-- ACCORDION 8 -->
            <div class="bg-success">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  🍀 Colocación de cesped.
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>La instalación de césped</strong>  es una intervención rápida y efectiva para modificar y embellecer entornos. Este proceso, esencial en paisajismo, implica la colocación cuidadosa de césped, creando instantáneamente áreas verdes que aportan frescura y elegancia al espacio. Un toque verde que redefine y revitaliza, mejorando la estética de cualquier lugar de manera simple y efectiva.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- SERVICE-IMG -->
        <div class="columna__div--text container">
          <div class="titulo-columna">
            <h1 class="text-center">Excelencia Profesional</h1>
          </div>
        </div>

        <div class="columna__div--img">
          <img src="img/section.jpeg" alt="Portada">
        </div>
      </div>
    </aside>

    <!-- Incluimos el footer -->
    <?php include("includes/footer.php");?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ffb39b6180.js" crossorigin="anonymous"></script>
  </body>
</html>