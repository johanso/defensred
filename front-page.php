<?php get_header(); ?>

  <div class="home__main">

    <section class="home__intro">
      <div class="main-container">
        <span class="home__intro-how">Somos Expertos en:</span>
        <h2 class="section-title">Soluciones de Seguridad</h2>
        <p class="home__intro-text">Explore nuestras principales áreas de especialización diseñadas para proteger cada aspecto de tu infraestructura digital.</p>
        <div class="home__intro-boxes">
          <div class="home__intro-box">
            <div class="home__intro-box-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/n3.png" alt="logo ciberseguridad">
            </div>
            <h3 class="home__intro-box-title">Ciberseguridad</h3>
            <p class="home__intro-box-text">Soluciones para proteger tu empresa contra amenazas cibernéticas.</p>
          </div>
          <div class="home__intro-box">
            <div class="home__intro-box-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/n5.png" alt="logo endoints">
            </div>
            <h3 class="home__intro-box-title">Protección de Endpoints</h3>
            <p class="home__intro-box-text">Seguridad avanzada para todos tus dispositivos.</p>
          </div>
          <div class="home__intro-box">
            <div class="home__intro-box-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/n6.png" alt="logo antivirus">
            </div>
            <h3 class="home__intro-box-title">Firewall y Antivirus</h3>
            <p class="home__intro-box-text">Defensa robusta contra malware y accesos no autorizados</p>
          </div>
          <div class="home__intro-box">
            <div class="home__intro-box-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/n7.png" alt="logo antivirus">
            </div>
            <h3 class="home__intro-box-title">Seguridad de Red y  Nube</h3>
            <p class="home__intro-box-text">Protección integral para redes empresariales.</p>
          </div>
        </div>
      </div>
    </section>

    <?php render_banner_cta(
      '¿Tu Empresa <span>Está Segura?</span>', 
      'No dejes que las amenazas digitales te tomen por sorpresa. Nuestro equipo puede ayudarte a proteger tu infraestructura con soluciones personalizadas. ¡Descubre cómo hoy mismo!'); 
    ?>

    <section class="services" id="services">
      <div class="main-container">
        <div class="services__content">
          <h2 class="section-title">Protección Total para tu Empresa</h2>
          <p class="services__content-text">Ofrecemos servicios diseñados para mantener segura tu operación empresarial.</p>

          <div class="services__content-boxes">

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
              <a href="/seguridad-en-la-nube/">
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

            <!-- <div class="services__content-box">
              <a href="/seguridad-sincronizada/">
                <div class="services__content-box-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/n7.png" alt="logo ciberseguridad">
                </div>
                <h3 class="services__content-box-title">Seguridad Sincronizada</h3>
                <p class="services__content-box-text">Integración de soluciones para una protección coherente y eficaz.</p> 
              </a>
            </div> -->

            <div class="services__content-box">
              <a href="/proteccion-de-datos/">
                <div class="services__content-box-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/s1.png" alt="logo ciberseguridad">
                </div>
                <h3 class="services__content-box-title">Protección de Datos</h3>
                <p class="services__content-box-text">Salvaguarda tus datos sensibles con nuestras soluciones de protección de datos.</p> 
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

            <!-- <div class="services__content-box">
              <a href="/prevencion-de-intrusiones/">
                <div class="services__content-box-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/h1.png" alt="logo ciberseguridad">
                </div>
                <h3 class="services__content-box-title">Prevención de Intrusiones</h3>
                <p class="services__content-box-text">Evita intrusiones con nuestras avanzadas técnicas de seguridad.</p> 
              </a>
            </div> -->

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
              <a href="/seguridad-de-aplicaciones/">
                <div class="services__content-box-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/n2.png" alt="logo ciberseguridad">
                </div>
                <h3 class="services__content-box-title">Seguridad de Aplicaciones</h3>
                <p class="services__content-box-text">Asegura tus aplicaciones web y móviles contra vulnerabilidades.</p> 
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

            <!-- <div class="services__content-box">
              <a href="/seguridad-de-redes-wi-fi/">
                <div class="services__content-box-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/s4.png" alt="logo ciberseguridad">
                </div>
                <h3 class="services__content-box-title">Seguridad de Redes Wi-Fi</h3>
                <p class="services__content-box-text">Asegura tus redes Wi-Fi contra accesos no autorizados.</p> 
              </a>
            </div> -->

            <!-- <div class="services__content-box">
              <a href="/seguridad-de-endpoints-moviles/">
                <div class="services__content-box-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/conexion-segura.png" alt="logo ciberseguridad">
                </div>
                <h3 class="services__content-box-title">Seguridad de Endpoints Móviles</h3>
                <p class="services__content-box-text">Extiende la seguridad de endpoints a todos tus dispositivos móviles.</p> 
              </a>
            </div> -->

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
        </div>
      </div>
    </section>

    <section class="section-blog">
      <div class="main-container">
        <div class="section-blog__content">
          <h2 class="section-blog__content-title">Últimas <span>Noticias y Consejos</span></h2>
          <p class="section-blog__content-text">Mantente informado con nuestras últimas publicaciones sobre ciberseguridad.</p>

          <div class="section-blog__content-boxes">
            <?php list_Post(3) ?>
          </div>

          <div class="section-blog__content-button">
            <a class="button button--cta-outline button--icon" href="/blog">Ver todas las publicaciones</a>
          </div>

        </div>
      </div>
    </section>

    <section class="faq">
      <div class="main-container">
        <div class="faq__content">
          <div class="faq__info">
            <h2 class="section-title">Preguntas Frecuentes</h2>
            <p class="faq__content-text">Resolvemos tus dudas más comunes sobre nuestras soluciones y servicios de ciberseguridad.</p>
            <div class="faq__content-boxes" id="faq">
              
              <details class="faq-box" open>
                <summary class="faq-header">¿Qué es la ciberseguridad y por qué es importante?</summary>
                <div class="faq-content">
                  <p>La ciberseguridad consiste en proteger sistemas, redes y programas de ataques digitales. Es crucial para prevenir el robo de datos, fraudes y otros daños a tu empresa.</p>
                </div>
              </details>

              <details class="faq-box">
                <summary class="faq-header">¿Cómo protegen los endpoints sus soluciones?</summary>
                <div class="faq-content">
                  <p>Utilizamos tecnologías avanzadas de detección y respuesta para proteger todos los dispositivos conectados a tu red, asegurando que estén a salvo de amenazas.</p>
                </div>
              </details>

              <details class="faq-box">
                <summary class="faq-header">¿Qué diferencia a un firewall de un antivirus?</summary>
                <div class="faq-content">
                  <p>Un firewall controla el tráfico de red para bloquear accesos no autorizados, mientras que un antivirus detecta y elimina malware de tus dispositivos.</p>
                </div>
              </details>
              
              <details class="faq-box">
                <summary class="faq-header">¿Qué es la gestión de amenazas?</summary>
                <div class="faq-content">
                  <p>Es el proceso de monitoreo continuo y respuesta a incidentes para identificar y mitigar amenazas antes de que causen daños significativos.</p>
                </div>
              </details>
              
              <details class="faq-box">
                <summary class="faq-header">¿Cómo funciona la seguridad en la nube?</summary>
                <div class="faq-content">
                  <p>La seguridad en la nube protege tus datos y aplicaciones alojados en servicios cloud mediante medidas como cifrado, autenticación y monitoreo constante.</p>
                </div>
              </details>
              
              <details class="faq-box">
                <summary class="faq-header">¿Qué incluye la protección de datos?</summary>
                <div class="faq-content">
                  <p>Ofrecemos soluciones de cifrado, respaldo y recuperación de datos para asegurar que tu información crítica esté siempre protegida y disponible.</p>
                </div>
              </details>
              
              <details class="faq-box">
                <summary class="faq-header">¿Qué es la prevención de intrusiones?</summary>
                <div class="faq-content">
                  <p>Es un conjunto de prácticas y tecnologías diseñadas para detectar y detener actividades sospechosas o maliciosas antes de que puedan infiltrarse en tu sistema.</p>
                </div>
              </details>
              
              <details class="faq-box">
                <summary class="faq-header">¿Cómo puedo asegurar mi red Wi-Fi?</summary>
                <div class="faq-content">
                  <p>Implementamos medidas como autenticación segura, cifrado WPA3 y segmentación de red para proteger tus redes Wi-Fi contra accesos no autorizados.</p>
                </div>
              </details>
              
              <details class="faq-box">
                <summary class="faq-header">¿Qué es la seguridad sincronizada?</summary>
                <div class="faq-content">
                  <p>La seguridad sincronizada integra varias soluciones de seguridad para que trabajen juntas, ofreciendo una protección más coherente y efectiva.</p>
                </div>
              </details>
            
              <details class="faq-box">
                <summary class="faq-header">¿Ofrecen soporte en caso de un incidente de seguridad?</summary>
                <div class="faq-content">
                  <p>Sí, nuestro equipo de expertos está disponible 24/7 para asistirte en la resolución de incidentes y recuperación de tu sistema.</p>
                </div>
              </details>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php render_banner_cta(
      '¿Listo para <span>Fortalecer tu Seguridad?</span>', 
      'Contáctanos hoy para una consulta gratuita y descubre cómo podemos proteger tu empresa.',
      'banner-cta--last'); 
    ?>

  </div>

<?php get_footer(); ?>
