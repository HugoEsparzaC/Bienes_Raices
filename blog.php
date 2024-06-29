<?php
    include './includes/templates/header.php'
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/full/blog1.avif" type="image/avif">
                    <source srcset="build/img/full/blog1.webp" type="image/webp">
                    <img loading="lazy" src="build/img/full/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el <span>25/06/2021</span> por: <span>Admin</span></p>
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
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p>Escrito el <span>25/06/2021</span> por: <span>Admin</span></p>
                    <p>
                        Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores
                        para darle vida a tu espacio.
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/full/blog3.avif" type="image/avif">
                    <source srcset="build/img/full/blog3.webp" type="image/webp">
                    <img loading="lazy" src="build/img/full/blog3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el <span>25/06/2021</span> por: <span>Admin</span></p>
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
                    <source srcset="build/img/full/blog4.avif" type="image/avif">
                    <source srcset="build/img/full/blog4.webp" type="image/webp">
                    <img loading="lazy" src="build/img/full/blog4.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p>Escrito el <span>25/06/2021</span> por: <span>Admin</span></p>
                    <p>
                        Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores
                        para darle vida a tu espacio.
                    </p>
                </a>
            </div>
        </article>
    </main>
<?php
    incluirTemplate('footer');
?>