<?php
    include './includes/templates/header.php'
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        <picture>
            <source srcset="build/img/full/destacada2.avif" type="image/avif">
            <source srcset="build/img/full/destacada2.webp" type="image/webp">
            <img loading="lazy" src="build/img/full/destacada2.jpg" alt="imagen de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/06/2024</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, dolor accusantium! Distinctio vel dolore qui minima corrupti impedit, reprehenderit nulla iure amet, molestias explicabo perferendis, tempora ea odit quia. Veritatis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, sed iste! Nemo dicta sequi a. Illum voluptatem quod quae blanditiis placeat aliquid repellendus architecto et praesentium, expedita soluta quos ab?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, dolor accusantium! Distinctio vel dolore qui minima corrupti impedit, reprehenderit nulla iure amet, molestias explicabo perferendis, tempora ea odit quia. Veritatis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, sed iste! Nemo dicta sequi a. Illum voluptatem quod quae blanditiis placeat aliquid repellendus architecto et praesentium, expedita soluta quos ab?
            </p>
        </div>
    </main>
<?php
    incluirTemplate('footer');
?>