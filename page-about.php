<?php
/**
* Template Name: About Us
*
*/
?>

<?php get_header(); ?>
  <div class="main-container page">
    <?php get_template_part('template-parts/page'); ?>

    <section class="services --sidebar">
      <h2 class="section-title --sidebar">Preguntanos por:</h2>
      <div class="home__intro-boxes --sidebar">
        <div class="home__intro-box">
          <div class="home__intro-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/analisis.png" alt="vulnerabilidad">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)"></path>
            </svg>
          </div>
          <h3 class="home__intro-box-title">Análisis de vulnerabilidad</h3>
          <p class="home__intro-box-text">Identificación, evaluación y validación de vulnerabilidades mediante herramientas y escaneos automatizados.</p>
        </div>
        <div class="home__intro-box">
          <div class="home__intro-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/consultoria.png" alt="Ciberseguridad">
          </div>
          <h3 class="home__intro-box-title">Consultoría en Ciberseguridad</h3>
          <p class="home__intro-box-text">Evaluación del nivel de seguridad y presentación de soluciones personalizadas para su negocio.</p>
        </div>
        <div class="home__intro-box">
          <div class="home__intro-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/test-social.png" alt="ingeniería social">
          </div>
          <h3 class="home__intro-box-title">Test de ingeniería social</h3>
          <p class="home__intro-box-text">Simulación de ataques psicológicos para evaluar la conciencia de los empleados sobre ciberamenazas.</p>
        </div>
        <div class="home__intro-box">
          <div class="home__intro-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/sistema-de-seguridad.png" alt="pentest">
          </div>
          <h3 class="home__intro-box-title">Test de penetración / pentest</h3>
          <p class="home__intro-box-text">Identificación y explotación de vulnerabilidades mediante técnicas y scripts que simulan ciberataques reales.</p>
        </div>
        <div class="home__intro-box">
          <div class="home__intro-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/proteccion-de-datos.png" alt="Capacitaciones">
          </div>
          <h3 class="home__intro-box-title">Capacitaciones y Concientización</h3>
          <p class="home__intro-box-text">Programas diseñados para concienciar a los equipos y responder adecuadamente a las amenazas de ciberseguridad.</p>
        </div>
        <div class="home__intro-box">
          <div class="home__intro-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/privacidad.png" alt="phishing">
          </div>
          <h3 class="home__intro-box-title">Test de phishing</h3>
          <p class="home__intro-box-text">Envío de comunicaciones falsas para evaluar la capacidad de los empleados para reconocer y responder a ataques de phishing.</p>
        </div>
      </div>
    </section>
  </div>

  <?php render_banner_cta(
    '¿Listo para <span>Fortalecer tu Seguridad?</span>', 
    'Contáctanos hoy para una consulta gratuita y descubre cómo podemos proteger tu empresa.',
    'banner-cta--last'); 
  ?>

  <section class="home__intro">
    <span class="home__intro-how">Somos Expertos en:</span>
    <h2 class="section-title">Soluciones de Seguridad</h2>
    <p class="home__intro-text">Explore nuestras principales áreas de especialización diseñadas para proteger cada aspecto de tu infraestructura digital.</p>
    <div class="services__content-boxes main-carousel">

      <div class="services__content-box">
        <a href="/ciberseguridad/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/n3.png" alt="logo ciberseguridad">
          </div>
          <h3 class="services__content-box-title">Ciberseguridad</h3>
          <p class="services__content-box-text">Soluciones para proteger tu empresa contra amenazas cibernéticas.</p>
        </a>
      </div>

      <div class="services__content-box">
        <a href="/proteccion-de-endpoints/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/n5.png" alt="logo endoints">
          </div>
          <h3 class="services__content-box-title">Protección de Endpoints</h3>
          <p class="services__content-box-text">Seguridad avanzada para todos tus dispositivos, desde computadoras hasta móviles.</p>
        </a>
      </div>

      <div class="services__content-box">
        <a href="/firewall/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/n6.png" alt="logo Firewall">
          </div>
          <h3 class="services__content-box-title">Firewall</h3>
          <p class="services__content-box-text">Defensa robusta para evitar accesos no autorizados y proteger tus redes.</p>
        </a>
      </div>

      <div class="services__content-box">
        <a href="/antivirus/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/s5.png" alt="logo antivirus">
          </div>
          <h3 class="services__content-box-title">Antivirus</h3>
          <p class="services__content-box-text">Protección eficaz contra malware, virus y otras amenazas digitales.</p>
        </a>
      </div>

      <div class="services__content-box">
        <a href="/seguridad-de-red/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/s2.png" alt="logo ciberseguridad">
          </div>
          <h3 class="services__content-box-title">Seguridad de Red</h3>
          <p class="services__content-box-text">Protección integral para mantener seguras tus redes empresariales.</p>
        </a>
      </div>

      <div class="services__content-box">
        <a href="/gestion-de-amenazas/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/s6.png" alt="logo ciberseguridad">
          </div>
          <h3 class="services__content-box-title">Gestión de Amenazas</h3>
          <p class="services__content-box-text">Monitoreo y respuesta a incidentes para proteger tu infraestructura.</p> 
        </a>
      </div>

      <div class="services__content-box">
        <a href="/seguridad-en-la-nube/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/n7.png" alt="logo ciberseguridad">
          </div>
          <h3 class="services__content-box-title">Seguridad en la Nube</h3>
          <p class="services__content-box-text">Protege tus aplicaciones y datos en entornos cloud.</p> 
        </a>
      </div>

      <div class="services__content-box">
        <a href="/seguridad-de-correo-electronico/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/correo.png" alt="logo ciberseguridad">
          </div>
          <h3 class="services__content-box-title">Seguridad de Correo Electrónico</h3>
          <p class="services__content-box-text">Protección contra phishing, spam y otras amenazas de correo electrónico.</p> 
        </a>
      </div>

      <div class="services__content-box">
        <a href="/seguridad-de-servidores/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/h3.png" alt="logo ciberseguridad">
          </div>
          <h3 class="services__content-box-title">Seguridad de Servidores</h3>
          <p class="services__content-box-text">Protección robusta para servidores críticos de tu empresa.</p> 
        </a>
      </div>

      <div class="services__content-box">
        <a href="/seguridad-de-redes-wi-fi/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/s4.png" alt="logo ciberseguridad">
          </div>
          <h3 class="services__content-box-title">Seguridad de Redes Wi-Fi</h3>
          <p class="services__content-box-text">Asegura tus redes Wi-Fi contra accesos no autorizados.</p> 
        </a>
      </div>

      <div class="services__content-box">
        <a href="/seguridad-de-acceso-remoto/">
          <div class="services__content-box-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/s3.png" alt="logo ciberseguridad">
          </div>
          <h3 class="services__content-box-title">Seguridad de Acceso Remoto</h3>
          <p class="services__content-box-text">Garantiza conexiones seguras para tus trabajadores remotos.</p>
        </a>
      </div>

    </div>
  </section>
  
<?php get_footer(); ?>