<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/full/nosotros.avif" type="image/avif">
                    <source srcset="build/img/full/nosotros.webp" type="image/webp">
                    <img loading="lazy" src="build/img/full/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sunt libero culpa dolorem qui debitis! Reiciendis voluptas quisquam culpa aliquid. Vero repellat reiciendis quaerat, aliquid numquam ipsam velit ratione cupiditate.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis laboriosam dolore quae voluptatum, voluptas explicabo sapiente sint quibusdam dolorem nihil ducimus eum, dolores cum sunt omnis excepturi aliquid aspernatur voluptatibus?
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias quibusdam laboriosam, voluptatum voluptate ut deleniti eius architecto fuga veritatis. Autem corrupti tempore vel pariatur animi consequatur quibusdam odit ab eaque.
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>

<?php
    incluirTemplate('footer');
?>