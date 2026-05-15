<?php get_header(); ?>

<div class="contenedor-principal">

  <section class="hero">

    <div class="overlay-hero"></div>

    <img
      class="nube-izquierda mover-nube"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/nube-izquierda.png"
      alt="nube izquierda">

    <img
      class="nube-derecha mover-nube"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/nube-derecha.png"
      alt="nube derecha">

    <div class="contenido-hero">

      <?php
      $hero_image = get_field('hero_image', get_option('page_on_front'));
      ?>

      <img
        class="imagen-takeoff"
        src="<?php echo esc_url($hero_image ? $hero_image['url'] : get_template_directory_uri() . '/assets/img/take-off.png'); ?>"
        alt="take off">
    </div>

  </section>

  <section class="seccion-b2b">

    <div class="intro-b2b">

      <p class="descripcion-hero">
        <?php
        $descripcion_hero = get_field('descripcion_hero', get_option('page_on_front'));
        echo esc_html($descripcion_hero ? $descripcion_hero : 'Avoid turbulence. Arrive at your destination sooner. And enjoy the ascent');
        ?>
      </p>


      <?php
      $boton_hero = get_field('boton_hero', get_option('page_on_front'));
      ?>

      <img
        class="boton"
        src="<?php echo esc_url($boton_hero ? $boton_hero['url'] : get_template_directory_uri() . '/assets/img/boton1.png'); ?>"
        alt="boton">

    </div>

    <div class="contenido-b2b">

      <h2 class="titulo-b2b">
        <?php
        $titulo_b2b = get_field('titulo_b2b', get_option('page_on_front'));
        echo esc_html($titulo_b2b ? $titulo_b2b : 'B2B SUCCESS IS IN THE AIR');
        ?>
      </h2>

      <p class="texto-b2b">
        JumpSeat exists for the sole purpose to help you create momentum.
      </p>

      <p class="texto-b2b">
        <?php
        $texto_b2b_2 = get_field('texto_b2b_2', get_option('page_on_front'));
        echo esc_html($texto_b2b_2 ? $texto_b2b_2 : 'Momentum is the unmistakable energy on a winning B2B revenue team. It gives everyone the confidence to push themselves further, faster and to greater heights.');
        ?>
      </p>

      <?php
      $boton_b2b = get_field('boton_b2b', get_option('page_on_front'));
      ?>

      <img
        class="boton-b2b"
        src="<?php echo esc_url($boton_b2b ? $boton_b2b['url'] : get_template_directory_uri() . '/assets/img/boton1.png'); ?>"
        alt="boton">

    </div>

    <div class="airplane-section">

      <?php
      $imagen_airplane = get_field('imagen_airplane', get_option('page_on_front'));
      ?>

      <img
        class="airplane-board"
        src="<?php echo esc_url($imagen_airplane ? $imagen_airplane['url'] : get_template_directory_uri() . '/assets/img/airplane.png'); ?>"
        alt="airplane board">


    </div>

  </section>
</div>

<!-- -------------------------------------TESTIMONIO---------------------------------------------seccion 3  -->
<section class="seccion-testimonio">
  <div class="testimonio-inner">
    <?php
    $logo_testimonio = get_field('logo_testimonio', get_option('page_on_front'));
    ?>

    <img
      class="logo-testimonio"
      src="<?php echo esc_url($logo_testimonio ? $logo_testimonio['url'] : get_template_directory_uri() . '/assets/img/isco.png'); ?>"
      alt="ISCO">

    <div class="contenido-testimonio">
      <span class="comillas">“</span>
      <h2 class="texto-testimonio">
        <h2 class="texto-testimonio">

          <span>
            <?php
            $texto_testimonio_1 = get_field('texto_testimonio_1', get_option('page_on_front'));

            echo esc_html(
              $texto_testimonio_1
                ? $texto_testimonio_1
                : "We’re really impressed with their"
            );
            ?>
          </span>

          <span>
            <?php
            $texto_testimonio_2 = get_field('texto_testimonio_2', get_option('page_on_front'));

            echo esc_html(
              $texto_testimonio_2
                ? $texto_testimonio_2
                : "expertise in B2B – in our opinion, there’s"
            );
            ?>
          </span>

          <span class="resaltado">
            <?php
            $texto_testimonio_3 = get_field('texto_testimonio_3', get_option('page_on_front'));

            echo esc_html(
              $texto_testimonio_3
                ? $texto_testimonio_3
                : "no one close to their level"
            );
            ?>
          </span>
        </h2>
    </div>s

    <div class="autor-testimonio">
      <div>
        <h3><?php
            $autor_testimonio = get_field('autor_testimonio', get_option('page_on_front'));

            echo esc_html($autor_testimonio ? $autor_testimonio : 'Joe Doe');
            ?></h3>
        <p> <?php
            $cargo_testimonio = get_field('cargo_testimonio', get_option('page_on_front'));

            echo esc_html($cargo_testimonio ? $cargo_testimonio : 'CEO, ISCO Industry');
            ?></p>
      </div>
    </div>
</section>

<!-- --------------------------------------------CAMPANIA----------------------------------Sección 4 -->
<section class="seccion-campania">
  <div class="seccion-campania__contenedor">

    <div class="seccion-campania__encabezado">
      <div class="seccion-campania__titulos">
        <h2 class="seccion-campania__titulo titulo-blanco">
          <?php
          $titulo_blanco = get_field('titulo_blanco', get_option('page_on_front'));
          echo esc_html($titulo_blanco ? $titulo_blanco : 'SHOW UP BOLDLY');
          ?>
        </h2>
        <h2 class="seccion-campania__titulo titulo-rosado">
          <?php
          $titulo_rosado = get_field('titulo_rosado', get_option('page_on_front'));
          echo esc_html($titulo_rosado ? $titulo_rosado : 'SHOW UP CONFIDENTLY');
          ?></h2>
      </div>

      <a href="#" class="seccion-campania__flecha" aria-label="Siguiente">
        <svg width="54" height="54" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
          <path d="M13 6l6 6-6 6"></path>
        </svg>
      </a>
    </div>


    <div class="seccion-campania__imagen-completa seccion-campania__slider">
      <?php
      $campania_slide_1 = get_field('campania_slide_1', get_option('page_on_front'));
      ?>
      <div class="seccion-campania__slide activo">

        <img
          src="<?php echo esc_url($campania_slide_1 ? $campania_slide_1['url'] : get_template_directory_uri() . '/assets/img/img-campaña.png'); ?>"
          alt="Campaña 1">
      </div>

      <?php
      $campania_slide_2 = get_field('campania_slide_2', get_option('page_on_front'));
      ?>

      <div class="seccion-campania__slide">
        <img
          class="imagen-ajustada2"
          src="<?php echo esc_url($campania_slide_2 ? $campania_slide_2['url'] : get_template_directory_uri() . '/assets/img/campania-2.png'); ?>"
          alt="Campaña 2">

      </div>
      <?php
      $campania_slide_3 = get_field('campania_slide_3', get_option('page_on_front'));
      ?>
      <div class="seccion-campania__slide">
        <img
          src="<?php echo esc_url($campania_slide_3 ? $campania_slide_3['url'] : get_template_directory_uri() . '/assets/img/campania-3.png'); ?>"
          alt="Campaña 3">
      </div>
    </div>

    <div class="seccion-campania__puntos">
      <span class="punto activo"></span>
      <span class="punto"></span>
      <span class="punto"></span>
      <span class="punto"></span>
    </div>

  </div>
</section>
<!---------------------------------------SERVICIOS-------------------------------------- Sección 5 -->
<section class="seccion-servicios">
  <div class="seccion-servicios__contenedor">

    <div class="seccion-servicios__hero">
      <?php
      $servicios_bgtext = get_field('servicios_bgtext', get_option('page_on_front'));
      ?>
      <img
        class="seccion-servicios__bgtext mover-texto-scroll"
        src="<?php echo esc_url($servicios_bgtext ? $servicios_bgtext['url'] : get_template_directory_uri() . '/assets/img/ency.png'); ?>"
        alt="<?php echo esc_attr($servicios_bgtext ? $servicios_bgtext['alt'] : 'ENCY & ADVISORY'); ?>">
    </div>

    <div class="seccion-servicios__contenido">

      <div class="seccion-servicios__intro">
        <h2 class="seccion-servicios__titulo">
          <span class="titulo-blanco-servicios">
            <?php
            $titulo_blanco_servicios = get_field('titulo_blanco_servicios', get_option('page_on_front'));
            echo esc_html($titulo_blanco_servicios ? $titulo_blanco_servicios : 'B2B AGENCY');
            ?>
          </span>
          <span class="titulo-rosado-servicios">
            <?php
            $titulo_rosado_servicios = get_field('titulo_rosado_servicios', get_option('page_on_front'));
            echo esc_html($titulo_rosado_servicios ? $titulo_rosado_servicios : '&amp; ADVISORY');
            ?>
          </span>
        </h2>
      </div>

      <div class="seccion-servicios__bloque">
        <div class="seccion-servicios__texto">
          <p>
            <?php
            $texto_intro_servicios = get_field('texto_intro_servicios', get_option('page_on_front'));
            echo nl2br(
              esc_html(
                $texto_intro_servicios ? $texto_intro_servicios :
                  "If a management consultancy
                    and indie agency came
                    together, JumpSeat would be
                    the result. We’re unique blend
                    of left and right brain thinking.
                    Strategy and creativity. Deep
                    thinking and get it done."
              )
            );
            ?>
          </p>
        </div>

        <div class="seccion-servicios__lista">

          <article class="servicio-card servicio-card--activo">
            <div class="servicio-card__fila">
              <h3 class="servicio-card__titulo">
                <?php
                $card_1_titulo = get_field('card_1_titulo', get_option('page_on_front'));
                echo nl2br(
                  esc_html(
                    $card_1_titulo ? $card_1_titulo :
                      "STRATEGIC
                    REVENUE
                    GENERATION
                    ADVISORY"
                  )
                );
                ?>
              </h3>

              <button class="servicio-card__flecha" type="button" aria-label="Abrir servicio">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M13 6l6 6-6 6"></path>
                </svg>
              </button>
            </div>
            <p class="servicio-card__descripcion">
              <?php
              $card_1_descripcion = get_field('card_1_descripcion', get_option('page_on_front'));
              echo esc_html($card_1_descripcion ? $card_1_descripcion : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
              ?>
            </p>
          </article>

          <article class="servicio-card">
            <div class="servicio-card__fila">
              <h3 class="servicio-card__titulo">
                <?php
                $card_2_titulo = get_field('card_2_titulo', get_option('page_on_front'));
                echo nl2br(
                  esc_html(
                    $card_2_titulo ? $card_2_titulo :
                      "BRAND
                     DEVELOPMENT"
                  )
                );
                ?>
              </h3>

              <button class="servicio-card__flecha" type="button" aria-label="Abrir servicio">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M13 6l6 6-6 6"></path>
                </svg>
              </button>
            </div>
            <p class="servicio-card__descripcion">
              <?php
              $card_2_descripcion = get_field('card_2_descripcion', get_option('page_on_front'));
              echo esc_html($card_2_descripcion ? $card_2_descripcion : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
              ?>
            </p>
          </article>

          <article class="servicio-card">
            <div class="servicio-card__fila">
              <h3 class="servicio-card__titulo">
                <?php
                $card_3_titulo = get_field('card_3_titulo', get_option('page_on_front'));
                echo nl2br(
                  esc_html(
                    $card_3_titulo ? $card_3_titulo :
                      "DEMAND 
                     GEN
                     CAMPAIGN
                     STRATEGY 
                     AND
                     EXECUTION"
                  )
                );
                ?>
              </h3>

              <button class="servicio-card__flecha" type="button" aria-label="Abrir servicio">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M13 6l6 6-6 6"></path>
                </svg>
              </button>
            </div>
            <p class="servicio-card__descripcion">
              <?php
              $card_3_descripcion = get_field('card_3_descripcion', get_option('page_on_front'));
              echo esc_html(
                $card_3_descripcion ? $card_3_descripcion : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
              );
              ?>
            </p>
          </article>

          <article class="servicio-card">
            <div class="servicio-card__fila">
              <h3 class="servicio-card__titulo">
                <?php
                $card_4_titulo = get_field('card_4_titulo', get_option('page_on_front'));
                echo nl2br(
                  esc_html(
                    $card_4_titulo ? $card_4_titulo :
                      "RECRUITMENT,<br>
                      ONBOARDING<br>
                      AND<br>
                      COACHING"
                  )
                );
                ?>
              </h3>

              <button class="servicio-card__flecha" type="button" aria-label="Abrir servicio">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M13 6l6 6-6 6"></path>
                </svg>
              </button>
            </div>
            <p class="servicio-card__descripcion">
              <?php
              $card_4_descripcion = get_field('card_4_descripcion', get_option('page_on_front'));
              echo esc_html(
                $card_4_descripcion ? $card_4_descripcion : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
              );
              ?>
            </p>
            </p>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------------------------WITH----------------------------------------------------seccion 6 -->

<section class="seccion-with">
  <div class="seccion-with__contenedor">

    <div class="seccion-with__decoracion">
      <?php
      $imagen_with = get_field('imagen_with', get_option('page_on_front'));
      $imagen_you = get_field('imagen_you', get_option('page_on_front'));
      ?>

      <img
        class="seccion-with__letra seccion-with__letra--with"
        src="<?php echo esc_url($imagen_with ? $imagen_with['url'] : get_template_directory_uri() . '/assets/img/WITH.png'); ?>"
        alt="<?php echo esc_attr($imagen_with ? $imagen_with['alt'] : 'WITH'); ?>">
      <img
        class="seccion-with__letra seccion-with__letra--you"
        src="<?php echo esc_url($imagen_you ? $imagen_you['url'] : get_template_directory_uri() . '/assets/img/YOU.png'); ?>"
        alt="<?php echo esc_attr($imagen_you ? $imagen_you['alt'] : 'YOU'); ?>">
    </div>

    <div class="seccion-with__contenido">
      <h2 class="seccion-with__titulo">
        <?php
        $with_titulo = get_field('with_titulo', get_option('page_on_front'));
        echo esc_html($with_titulo ? $with_titulo : 'WITH YOU EVERY MILE');
        ?>
      </h2>

      <p class="seccion-with__texto">
        <?php
        $with_texto = get_field('with_texto', get_option('page_on_front'));
        echo nl2br(
          esc_html(
            $with_texto ? $with_texto :
              "Some firms don’t “do” at all. Others “do” it if you, negating
            the benefit of your team’s learning and improving
            We’re in it with you every step of the way to ensure you
            became the best possible version of yourself."
          )
        );
        ?>
      </p>
    </div>

    <div class="seccion-with__timeline">

      <div class="seccion-timeline">
        <h3 class="timeline-item__titulo">
          <?php
          $comparacion_1_titulo = get_field('comparacion_1_titulo', get_option('page_on_front'));
          echo esc_html($comparacion_1_titulo ? $comparacion_1_titulo : 'ADVISORY FIRMS');
          ?>
        </h3>

        <p class="timeline-item__subtitulo">
          <span class="color-sapote">
            <?php
            $comparacion_1_resaltado = get_field('comparacion_1_resaltado', get_option('page_on_front'));
            echo esc_html($comparacion_1_resaltado ? $comparacion_1_resaltado : "Don’t");
            ?>
          </span>

          <?php
          $comparacion_1_texto = get_field('comparacion_1_texto', get_option('page_on_front'));
          echo esc_html($comparacion_1_texto ? $comparacion_1_texto : 'do');
          ?>
        </p>
      </div>

      <div class="timeline-item">
        <h3 class="timeline-item__titulo">
          <?php
          $comparacion_2_titulo = get_field('comparacion_2_titulo', get_option('page_on_front'));
          echo esc_html($comparacion_2_titulo ? $comparacion_2_titulo : 'AGENCIES');
          ?>
        </h3>

        <p class="timeline-item__subtitulo">
          <span class="color-sapote">
            <?php
            $comparacion_2_resaltado = get_field('comparacion_2_resaltado', get_option('page_on_front'));
            echo esc_html($comparacion_2_resaltado ? $comparacion_2_resaltado : 'For');
            ?>
          </span>

          <?php
          $comparacion_2_texto = get_field('comparacion_2_texto', get_option('page_on_front'));
          echo esc_html($comparacion_2_texto ? $comparacion_2_texto : 'you');
          ?>
        </p>
      </div>

      <div class="timeline-item">
        <h3 class="timeline-item__titulo timeline-item__titulo-mixto">
          <?php
          $comparacion_3_titulo = get_field('comparacion_3_titulo', get_option('page_on_front'));
          echo esc_html($comparacion_3_titulo ? $comparacion_3_titulo : 'JUMPSEAT');
          ?>
        </h3>

        <p class="timeline-item__subtitulo">
          <span class="color-mixto">
            <?php
            $comparacion_3_resaltado = get_field('comparacion_3_resaltado', get_option('page_on_front'));
            echo esc_html($comparacion_3_resaltado ? $comparacion_3_resaltado : 'With');
            ?>
          </span>
          <?php
          $comparacion_3_texto = get_field('comparacion_3_texto', get_option('page_on_front'));
          echo esc_html($comparacion_3_texto ? $comparacion_3_texto : 'you');
          ?>
        </p>
      </div>

      <div class="timeline-linea">
        <span class="timeline-punto"></span>
        <span class="timeline-punto"></span>
        <span class="timeline-punto"></span>
      </div>

    </div>
  </div>
</section>
<!-- --------------------------VENTAS-------------------------------------------seccion 7 -->

<section class="seccion-sales">
  <div class="seccion-sales__contenedor">
    <div class="seccion-sales__contenido">
      <h2 class="seccion-sales__titulo">
        <?php
        $titulo_ventas = get_field('titulo_ventas', get_option('page_on_front'));
        echo nl2br(
          esc_html(
            $titulo_ventas ? $titulo_ventas :
              "ELIMINATE RANDOM ACTS OF
            SALES &amp; MARKETING FOREVER"
          )
        );
        ?>
      </h2>

      <p class="seccion-sales__intro">
        <?php
        $intro_ventas = get_field('intro_ventas', get_option('page_on_front'));
        echo esc_html(
          $intro_ventas ? $intro_ventas :
            "This is the hill we’re willing to die on."
        );
        ?>
      </p>

      <div class="seccion-sales__texto">
        <p>
          <?php
          $texto_ventas = get_field('texto_ventas', get_option('page_on_front'));
          echo nl2br(
            esc_html(
              $texto_ventas ? $texto_ventas :
                "We exist to stop all the random acts of content.
               Half baked webinars an uninspired emails. One-
               off tweets and abandoned social channels.
               Leadership meetings that start with, “I just heard
               this on a podcast...”"
            )
          );
          ?>
        </p>

        <p>
          <?php
          $texto_ventas_2 = get_field('texto_ventas_2', get_option('page_on_front'));
          echo nl2br(
            esc_html(
              $texto_ventas_2 ? $texto_ventas_2 :
                "You get in. RAofS&M produce chaos but not
               consistent results."
            )
          );
          ?>
        </p>
      </div>

      <?php
      $boton_ventas = get_field('boton_ventas', get_option('page_on_front'));
      ?>

      <a href="#" class="seccion-sales__boton" aria-label="Get to know us">
        <img
          src="<?php echo esc_url($boton_ventas ? $boton_ventas['url'] : get_template_directory_uri() . '/assets/img/botton-sale.png'); ?>"
          alt="<?php echo esc_attr($boton_ventas ? $boton_ventas['alt'] : 'Get to know us'); ?>">
      </a>
    </div>
  </div>
</section>

<!-- -------------------------------START---------------------------------------------------seccion 8 -->

<section class="seccion-start">
  <div class="seccion-start__bg">
    <?php
    $imagen_fondo_inicio = get_field('imagen_fondo_inicio', get_option('page_on_front'));
    ?>
    <img
      src="<?php echo esc_url($imagen_fondo_inicio ? $imagen_fondo_inicio['url'] : get_template_directory_uri() . '/assets/img/start-here.png'); ?>"
      alt="<?php echo esc_attr($imagen_fondo_inicio ? $imagen_fondo_inicio['alt'] : 'Start Here'); ?>"
      class="seccion-start__bgimg mover-texto-scroll">
    >
  </div>
  <div class="seccion-start__contenido">
    <h2 class="seccion-start__titulo">
      <?php
      $titulo_inicio = get_field('titulo_inicio', get_option('page_on_front'));
      echo esc_html($titulo_inicio ? $titulo_inicio : 'FEELING LOST?');
      ?>
    </h2>
    <p class="seccion-start__subtitulo">
      <?php
      $subtitulo_inicio = get_field('subtitulo_inicio', get_option('page_on_front'));
      echo esc_html($subtitulo_inicio ? $subtitulo_inicio : 'START HERE.');
      ?>
    </p>
  </div>
</section>

<!-- ------------------------------START CARD-----------------------------------------------------> 
<div class="seccion-start__card">
  <div class="seccion-start__imagen">
    <?php
    $imagen_card_inicio = get_field('imagen_card_inicio', get_option('page_on_front'));
    ?>
    <img src="<?php echo esc_url($imagen_card_inicio ? $imagen_card_inicio['url'] : get_template_directory_uri() . '/assets/img/img-avion.jpg'); ?>"
      alt="<?php echo esc_attr($imagen_card_inicio ? $imagen_card_inicio['alt'] : 'Airplane'); ?>">
  </div>
  <div class="seccion-start__info">
    <h3 class="seccion-start__cardtitulo">
      <?php
      $titulo_card_inicio = get_field('titulo_card_inicio', get_option('page_on_front'));
      echo nl2br(
        esc_html(
          $titulo_card_inicio ? $titulo_card_inicio :
            "Ideal client profiles and the
          JumpSeat $5,000 FedEx rule."
        )
      );
      ?>
    </h3>

    <p class="seccion-start__descripcion">
      <?php
      $descripcion_card_inicio = get_field('descripcion_card_inicio', get_option('page_on_front'));
      echo nl2br(
        esc_html(
          $descripcion_card_inicio ? $descripcion_card_inicio :
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamed do eiusmod
          tempor incididunt consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua."
        )
      );
      ?>
    </p>

    <?php
    $boton_card_inicio = get_field('boton_card_inicio', get_option('page_on_front'));
    ?>

    <a href="#" class="seccion-start__boton">
      <img
        src="<?php echo esc_url($boton_card_inicio ? $boton_card_inicio['url'] : get_template_directory_uri() . '/assets/img/botton-start.png'); ?>"
        alt="<?php echo esc_attr($boton_card_inicio ? $boton_card_inicio['alt'] : 'Start Here'); ?>">
    </a>
  </div>
</div>

<!-- ---------------------FORMULARIO-------------------------------------------------------------------------------------------------->

<section class="seccion-formulario">
  <div class="seccion-formulario__contenedor">
    <div class="seccion-formulario__tarjeta">

     <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
        <?php wp_nonce_field( 'mythemesone_save_lead', 'mythemesone_nonce' ); ?>
        <input type="hidden" name="action" value="mythemesone_save_lead">

      
        <div class="formulario__encabezado">
          <h2 class="formulario__titulo">
            <?php
            $titulo_formulario_1 = get_field('titulo_formulario_1', get_option('page_on_front'));
            $titulo_formulario_2 = get_field('titulo_formulario_2', get_option('page_on_front'));
            ?>

            <?php echo esc_html($titulo_formulario_1 ? $titulo_formulario_1 : 'GET IN TOUCH WITH'); ?>
            <span>
              <?php echo esc_html($titulo_formulario_2 ? $titulo_formulario_2 : 'OUR TEAM'); ?>
            </span>
          </h2>
        </div>

        <div class="formulario__fila">
          <div class="formulario__campo">
            <label for="name">
              <?php
              $label_nombre = get_field('label_nombre', get_option('page_on_front'));
              echo esc_html($label_nombre ? $label_nombre : 'Name');
              ?>
            </label>
            <input type="text" id="name" name="name">
          </div>

          <div class="formulario__campo">
            <label for="last-name">
              <?php
              $label_apellido = get_field('label_apellido', get_option('page_on_front'));
              echo esc_html($label_apellido ? $label_apellido : 'Last Name');
              ?>
            </label>
            <input type="text" id="last-name" name="last-name">
          </div>
        </div>

        <div class="formulario__campo formulario__campo--full">
          <label for="title">
            <?php
            $label_titulo = get_field('label_titulo', get_option('page_on_front'));
            echo esc_html($label_titulo ? $label_titulo : 'Title');
            ?>
          </label>
          <input type="text" id="title" name="title">
        </div>

        <div class="formulario__campo formulario__campo--full">
          <label for="company">
            <?php
            $label_empresa = get_field('label_empresa', get_option('page_on_front'));
            echo esc_html($label_empresa ? $label_empresa : 'Company');
            ?>
          </label>
          <input type="text" id="company" name="company">
        </div>

        <div class="formulario__mensaje">
          <label for="message">
            <?php
            $label_mensaje = get_field('label_mensaje', get_option('page_on_front'));
            echo esc_html($label_mensaje ? $label_mensaje : 'Message');
            ?>
          </label>
          <textarea id="message" name="message"></textarea>
        </div>

        <button type="submit" class="formulario__send">
          <span>
            <?php
            $texto_boton_enviar = get_field('texto_boton_enviar', get_option('page_on_front'));
            echo esc_html($texto_boton_enviar ? $texto_boton_enviar : 'SEND');
            ?>
          </span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="M13 6l6 6-6 6"></path>
          </svg>
        </button>
      </form>
      <!-- - -------------------------TARGETA CONTACTO -->

      <div class="tarjeta-contacto">
        <div class="tarjeta-contacto__raya"></div>

        <div class="tarjeta-contacto__contenido">
          <div class="tarjeta-contacto__imagen">
            <?php
            $imagen_contacto = get_field('imagen_contacto', get_option('page_on_front'));
            ?>
            <img
              src="<?php echo esc_url($imagen_contacto ? $imagen_contacto['url'] : get_template_directory_uri() . '/assets/img/dan-persona.png'); ?>"
              alt="<?php echo esc_attr($imagen_contacto ? $imagen_contacto['alt'] : 'CEO'); ?>">
          </div>

          <div class="tarjeta-contacto__info">
            <p class="tarjeta-contacto__texto">
              <?php
              $texto_contacto_1 = get_field('texto_contacto_1', get_option('page_on_front'));
              echo esc_html($texto_contacto_1 ? $texto_contacto_1 : 'Email our CEO directly,');
              ?>

              <span class="correo">
                <?php
                $correo_contacto = get_field('correo_contacto', get_option('page_on_front'));
                echo esc_html($correo_contacto ? $correo_contacto : 'dan@domain.co');
                ?>
              </span>
              or<br>
              <?php
              $texto_contacto_2 = get_field('texto_contacto_2', get_option('page_on_front'));
              echo esc_html($texto_contacto_2 ? $texto_contacto_2 : 'drop a line to our team.');
              ?>
            </p>

            <p class="tarjeta-contacto__frase">
              <span class="frase-azul">
                <?php
                $frase_1 = get_field('frase_1', get_option('page_on_front'));
                echo esc_html($frase_1 ? $frase_1 : 'PILOTS');
                ?>
              </span>

              <span class="frase-mezcla-1">
                <?php
                $frase_2 = get_field('frase_2', get_option('page_on_front'));
                echo esc_html($frase_2 ? $frase_2 : 'PREVIOUSLY.');
                ?>
              </span>

              <span class="frase-mezcla-2">
                <?php
                $frase_3 = get_field('frase_3', get_option('page_on_front'));
                echo esc_html($frase_3 ? $frase_3 : 'TAKEOF');
                ?>
              </span>

              <span class="frase-salmon">
                <?php
                $frase_4 = get_field('frase_4', get_option('page_on_front'));
                echo esc_html($frase_4 ? $frase_4 : 'TODAY.');
                ?>
              </span>
            </p>
          </div>
        </div>

        <?php
        $boton_contacto = get_field('boton_contacto', get_option('page_on_front'));
        ?>
        <a class="tarjeta-contacto__boton" href="#">
          <img
            src="<?php echo esc_url($boton_contacto ? $boton_contacto['url'] : get_template_directory_uri() . '/assets/img/botton-meet.png'); ?>"
            alt="<?php echo esc_attr($boton_contacto ? $boton_contacto['alt'] : 'Meet the team'); ?>">
        </a>
      </div>
    </div>
</section>

<?php get_footer(); ?>