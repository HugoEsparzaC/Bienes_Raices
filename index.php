<?php
    require 'includes/funciones.php';
    incluirTemplate('header', true);
?>
    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse ullam magni architecto sunt! Ratione, velit, aliquid, labore quam cumque dolores saepe expedita quasi nostrum repudiandae minus! Eos est doloribus suscipit?
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse ullam magni architecto sunt! Ratione, velit, aliquid, labore quam cumque dolores saepe expedita quasi nostrum repudiandae minus! Eos est doloribus suscipit?
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse ullam magni architecto sunt! Ratione, velit, aliquid, labore quam cumque dolores saepe expedita quasi nostrum repudiandae minus! Eos est doloribus suscipit?
                </p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/full/anuncio1.avif" type="image/avif">
                    <source srcset="build/img/full/anuncio1.webp" type="image/webp">
                    <img loading="lazy" src="build/img/full/anuncio1.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton boton-amarillo">
                        Ver Propiedad
                    </a>
                </div><!-- .contenido-anuncio -->
            </div><!-- anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/full/anuncio2.avif" type="image/avif">
                    <source srcset="build/img/full/anuncio2.webp" type="image/webp">
                    <img loading="lazy" src="build/img/full/anuncio2.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa Terminados de Lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton boton-amarillo">
                        Ver Propiedad
                    </a>
                </div><!-- .contenido-anuncio -->
            </div><!-- anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/full/anuncio3.avif" type="image/avif">
                    <source srcset="build/img/full/anuncio3.webp" type="image/webp">
                    <img loading="lazy" src="build/img/full/anuncio3.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con Alberca</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton boton-amarillo">
                        Ver Propiedad
                    </a>
                </div><!-- .contenido-anuncio -->
            </div><!-- anuncio -->

        </div><!-- .contenedor-nuncios -->
        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.html" class="boton-amarillo-small">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/full/blog1.avif" type="image/avif">
                        <source srcset="build/img/full/blog1.webp" type="image/webp">
                        <img loading="lazy" src="build/img/full/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el <span>25/06/2021</span> por: <span>Admin</span></p>
                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales
                            y ahorrandpo dinero.
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/full/blog2.avif" type="image/avif">
                        <source srcset="build/img/full/blog2.webp" type="image/webp">
                        <img loading="lazy" src="build/img/full/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el <span>25/06/2021</span> por: <span>Admin</span></p>
                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores
                            para darle vida a tu espacio.
                        </p>
                    </a>
                </div>
            </article>
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención
                    y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Hugo Esparza</p>
            </div>
        </section>
    </div>
<?php
    incluirTemplate('footer');
?>