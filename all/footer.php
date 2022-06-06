<?php
function say_year(){
    return date('M Y' );
  }
?>

<footer>
    <section>
        <div class="column">
            <div class="item">
                <h3>Sobre Nosotros</h3>
                <span>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, officia!
                </span>
            </div>
            <div class="item">
                <h3>Contacto</h3>
                <span>Celular: (57) 320 3635745 / 302 5731981</span>
                <span>Lunes a Viernes</span>
                <span>8:00 a.m – 5:30 p.m</span>
                <span>Sabados y Domingos</span>
                <span>Dejar Mensaje en WhatsApp ó Email </span>
                <span>Nos ubicamos en la ciudad de bogota, pero trabajanos a nivel Nacional</span>
            </div>
            <div class="item">
                <h3>Servicios</h3>
                <span>Mantenimiento Preventivo</span>
                <span>Arreglos Locativos</span>
                <span>Servicio de Limpieza</span>
            </div>

        </div>
    </section>

    <section>
        <p>&copy; Copyright <?php echo say_year();?>.</p>
    </section>
    
</footer>