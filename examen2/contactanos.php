<?php
  include "includes/headers.php"
?>

    <section>
        <h2>Llena el formulario de contactos</h2>
        <div>
            <form action="">
                <fieldset>
                    <legend>Informacion personal</legend>
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" name="name" id="email" placeholder="your@email.com">
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" placeholder="000 000 0000">
                    </div>
                    <div>
                        <label for="msg">Message</label>
                        <textarea name="msg" id="msg" placeholder="Your message"></textarea>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Informacion de la propiedad</legend>
                    <div>
                        <label for="vencom">Vende o compra</label>
                        <input type="select" name="vencom" id="vencom">
                    </div>
                    <div>
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" id="quantity">
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Contactanos</legend>

                    <div>
                        <label for="contactForm">Forma de contacto</label>

                        <label for="tel">Phone</label>
                        <input type="radio" name="tel" id="tel">
    
                        <label for="mail">Email</label>
                        <input type="radio" name="mail" id="mail">

                    </div>

                  <div>
                        <label for="date">Fecha</label>
                        <input type="date" name="date" id="date">
                  </div>

                  <div>
                        <label for="time">Hora</label>
                        <input type="time" name="time" id="time">
                  </div>


                </fieldset>
                <div>
                    <button>Contactame</button>
                </div>
            </form>
        </div>
    </section>

    <?php
  include "includes/footer.php"
?>