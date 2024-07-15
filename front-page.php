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
      <div class="services__content">
        <h2 class="section-title">Protección Total para tu Empresa</h2>
        <p class="services__content-text">Ofrecemos servicios diseñados para mantener segura tu operación empresarial.</p>

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
      </div>
    </section>

    <section class="section-blog">
      <div class="main-container">
        <div class="section-blog__content">
          <h2 class="section-blog__content-title">Últimas <span>Noticias y Consejos</span></h2>
          <p class="section-blog__content-text">Mantente informado con nuestras últimas publicaciones sobre ciberseguridad.</p>

          <div class="section-blog__content-boxes">
            <?php list_Post(6) ?>
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
            <h2 class="section-title">Preguntas Frecuentes sobre Ciberseguridad</h2>
            <p class="faq__content-text">Encuentra respuestas a las dudas más comunes sobre cómo proteger tu empresa y mantener segura tu infraestructura digital.</p>
            <div class="faq__content-boxes" id="faq">
              
              <details class="faq-box" open>
                <summary class="faq-header">¿Qué es la ciberseguridad?</summary>
                <div class="faq-content">
                  <p>La ciberseguridad es la práctica de proteger sistemas, redes y programas contra ataques digitales que buscan acceder, alterar o destruir información sensible, extorsionar a los usuarios o interrumpir los procesos normales de negocio.</p>
                </div>
              </details>

              <details class="faq-box">
                <summary class="faq-header">¿Por qué es importante la ciberseguridad para mi empresa?</summary>
                <div class="faq-content">
                  <p>La ciberseguridad es crucial para proteger la información sensible, mantener la continuidad operativa y asegurar la confianza de los clientes. Además, ayuda a cumplir con las regulaciones y a prevenir pérdidas financieras.</p>
                </div>
              </details>
              
              <details class="faq-box">
                <summary class="faq-header">¿Cuáles son las amenazas cibernéticas más comunes?</summary>
                <div class="faq-content">
                  <p>Las amenazas cibernéticas más comunes incluyen malware, ransomware, phishing, ataques de denegación de servicio (DoS) y ataques de ingeniería social.</p>
                </div>
              </details>
              
              <details class="faq-box">
                <summary class="faq-header">¿Qué es un firewall y cómo protege mi red?</summary>
                <div class="faq-content">
                  <p>Un firewall es un sistema de seguridad que monitorea y controla el tráfico de red entrante y saliente basado en reglas de seguridad predeterminadas. Protege la red al bloquear el acceso no autorizado y prevenir ataques.</p>
                </div>
              </details>
              
              <details class="faq-box">
                <summary class="faq-header">¿Qué es el phishing y cómo puedo protegerme?</summary>
                <div class="faq-content">
                  <p>El phishing es un tipo de ciberataque en el que los atacantes se hacen pasar por entidades legítimas para robar información personal y financiera. Para protegerte, nunca hagas clic en enlaces sospechosos y verifica la autenticidad de los remitentes.</p>
                </div>
              </details>
              
              <details class="faq-box">
                <summary class="faq-header">¿Qué debo hacer si creo que mi dispositivo ha sido infectado por malware?</summary>
                <div class="faq-content">
                  <p>Si sospechas que tu dispositivo ha sido infectado por malware, desconéctalo de internet, ejecuta un análisis completo con un software antivirus actualizado y cambia todas tus contraseñas.</p>
                </div>
              </details>
              
              <details class="faq-box hidden">
                <summary class="faq-header">¿Cómo puedo proteger mis dispositivos móviles?</summary>
                <div class="faq-content">
                  <p>Para proteger tus dispositivos móviles, utiliza contraseñas fuertes, habilita la autenticación de dos factores, mantén el software actualizado y descarga aplicaciones solo de fuentes confiables.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Qué es la protección de endpoints?</summary>
                <div class="faq-content">
                  <p>La protección de endpoints se refiere a la seguridad de los dispositivos finales, como computadoras, laptops y móviles, contra amenazas cibernéticas mediante el uso de software de seguridad y medidas de protección.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Cómo puedo garantizar la seguridad en la nube?</summary>
                <div class="faq-content">
                  <p>Para garantizar la seguridad en la nube, utiliza cifrado de datos, implementa controles de acceso fuertes, realiza auditorías de seguridad regulares y sigue las mejores prácticas recomendadas por el proveedor de servicios en la nube.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Qué es un antivirus y cómo funciona?</summary>
                <div class="faq-content">
                  <p>Un antivirus es un software diseñado para detectar, prevenir y eliminar malware. Funciona escaneando archivos y programas en busca de patrones maliciosos conocidos y poniendo en cuarentena o eliminando las amenazas detectadas.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Qué medidas de seguridad debo implementar para el trabajo remoto?</summary>
                <div class="faq-content">
                  <p>Para el trabajo remoto, implementa una red privada virtual (VPN), utiliza autenticación de dos factores, asegura todos los dispositivos con software de seguridad y educa a los empleados sobre las mejores prácticas de seguridad.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Qué es el ransomware y cómo puedo protegerme?</summary>
                <div class="faq-content">
                  <p>El ransomware es un tipo de malware que encripta los datos del usuario y exige un rescate para desbloquearlos. Para protegerte, realiza copias de seguridad regulares, mantén el software actualizado y educa a los empleados sobre los riesgos del phishing.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Qué es la autenticación de dos factores (2FA)?</summary>
                <div class="faq-content">
                  <p>La autenticación de dos factores es un método de seguridad que requiere dos formas de verificación para acceder a una cuenta o sistema, generalmente una contraseña y un código enviado a un dispositivo móvil.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Cómo puedo proteger mis datos personales en línea?</summary>
                <div class="faq-content">
                  <p>Para proteger tus datos personales en línea, utiliza contraseñas fuertes, habilita la autenticación de dos factores, no compartas información sensible en redes públicas y mantén el software actualizado.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Qué debo hacer si he sido víctima de un ataque de phishing?</summary>
                <div class="faq-content">
                  <p>Si has sido víctima de un ataque de phishing, cambia tus contraseñas inmediatamente, notifica a las entidades afectadas, monitorea tus cuentas en busca de actividades sospechosas y considera informar el incidente a las autoridades.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Qué es un ataque de denegación de servicio (DoS)?</summary>
                <div class="faq-content">
                  <p>Un ataque de denegación de servicio (DoS) es un intento de hacer que un servicio o red sea inaccesible para los usuarios legítimos al abrumarlo con un flujo excesivo de tráfico malicioso.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Qué es la seguridad de red?</summary>
                <div class="faq-content">
                  <p>La seguridad de red implica la implementación de medidas para proteger la usabilidad, confiabilidad, integridad y seguridad de una red y sus datos, mediante el uso de firewalls, VPNs, sistemas de detección de intrusos y más.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Cómo puedo educar a mis empleados sobre ciberseguridad?</summary>
                <div class="faq-content">
                  <p>Puedes educar a tus empleados sobre ciberseguridad a través de programas de capacitación regulares, simulaciones de phishing, talleres interactivos y proporcionándoles recursos actualizados sobre las mejores prácticas de seguridad.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Qué es la ingeniería social y cómo puedo protegerme?</summary>
                <div class="faq-content">
                  <p>La ingeniería social es una táctica de manipulación utilizada por los atacantes para engañar a las personas y hacer que revelen información confidencial. Protégete siendo cauteloso con las solicitudes de información, verificando la autenticidad de las comunicaciones y educándote sobre las tácticas comunes.</p>
                </div>
              </details>

              <details class="faq-box hidden">
                <summary class="faq-header">¿Qué pasos debo seguir para implementar una política de ciberseguridad en mi empresa?</summary>
                <div class="faq-content">
                  <p>Para implementar una política de ciberseguridad en tu empresa, realiza una evaluación de riesgos, define roles y responsabilidades, establece procedimientos claros, proporciona capacitación continua y revisa y actualiza la política regularmente.</p>
                </div>
              </details>
              
            </div>

            <button class="button button--cta button--icon" id="faq-button">Ver más preguntas</button>
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
