  </main>
  <footer class="footer">
    <div class="main-container">

      <div class="footer__column">
        <div class="footer__logo">
          <div class="logo logo--footer">
            <?php echo get_template_part('template-parts/logo'); ?>
          </div>
          <p>Protección Total  para tu Mundo Digital</p>
        </div>

        <div class="footer__social">
          <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-facebook" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path></svg>
          </a>
          <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-instagram" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"></path></svg>
          </a>
        </div>
      </div>

      <span class="footer__disclaimer">En ciberblog.net ofrecemos información precisa y actualizada sobre ciberseguridad, protección digital y las últimas noticias del sector. Si bien nuestro blog y nuestras noticias proporcionan información general valiosa, también brindamos asesoría profesional a interesados en nuestros servicios. Para obtener asesoramiento específico y personalizado, por favor, ponte en contacto con nuestros expertos a través de las opciones de contacto disponibles en nuestro sitio. defender.com no se responsabiliza por errores u omisiones en el contenido ni por cualquier pérdida o daño resultante del uso de la información aquí proporcionada.</span>

      <p class="footer__copyright">
        <span class="page-legal"><a href="<?php echo site_url('/politica-de-cookies/'); ?>" target="_blank">Política de Cookies</a></span>
        <span class="page-legal"><a href="<?php echo site_url('/politica-privacidad/'); ?>" target="_blank">Política de Privacidad</a></span>
        <span>©<?php echo date('Y'); ?> Todos los derechos reservados</span>
      </p>

    </div>
  </footer>
  <div class="goto-top"><i class="icon-chevron-up"></i></div>
  <?php wp_footer(); ?>
  <div class="backdrop"></div>

  <div class="popup">
    <div class="popup__inner">
      <div class="popup__content">
        <?php echo do_shortcode('[contact-form-7 id="78f6dac" title="Contacto"]'); ?>
        <p class="form__disclaimer">Estamos comprometidos con tu privacidad. CIBERBLOG utiliza la información que usted nos proporciona para contactarlo sobre nuestro contenido, productos y servicios relevantes. Podrá darse de baja de estas comunicaciones en cualquier momento. Para obtener más información, consulta nuestra <a href="https://ciberblog.net/politica-privacidad/" target="_blank">Política de Privacidad</a>.</p>
      </div>
      <span class="popup__close">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
        </svg>
      </span>
    </div>
    <div class="popup__overlay"></div>
  </div>

</body>
</html>
