<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/full/destacada.avif" type="image/avif">
            <source srcset="build/img/full/destacada.webp" type="image/webp">
            <img loading="lazy" src="build/img/full/destacada.jpg" alt="imagen de la propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000.00</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
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