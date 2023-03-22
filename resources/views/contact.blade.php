<x-layout>
    <div class="container">
        <div class="containerTitleContact">
            <img src="" alt="icono de contacto">
            <h2>{{__('Contacta con nosotros')}}</h2>
        </div>
        <div class="containerFormContact container">
            <div class="row">
                <div class="col6 divFormContact">
                    <form action="">
                        <input type="text" name="name" placeholder="Nombre *">
                        <input type="text" name="lastName" id="" placeholder="Apellidos *">
                        <input type="email" name="email" id="" placeholder="Correo electronico *">
                        <input type="tel" name="phone" id="" placeholder="Telefono *">

                        <p>*Campos obligatorios</p>

                        <h5>¿Como te podemos ayudar?</h5>

                        <textarea name="coments" id="" cols="30" rows="10"></textarea>
                        <input type="checkbox" name="recaptcha" id="">No soy un robot
                        <button type="submit" class="navbar-register_button text-white px-3">Enviar</button>
                    </form>
                    <h6>Al hacer clic en Enviar, aceptas los <SPan>Teminos y condiciones</SPan> de Share & Buy y nuestra <span>Politica de privacidad</span></h6>
                </div>
                <div class="col6 divContactInfo">
                    <div>
                        <img src="" alt="imagen del carrito">
                    </div>
                    <div class="cardInfo">
                        <h3><span>Share & Buy</span> cerca de ti</h3>
                        <div class="lineaRoja"></div>
                        <h5>Correo electronico</h5>
                        <p>info@shareandbuy.com</p>
                        <h5>Telefono</h5>
                        <p>+34 630 10 10 16</p>
                        <h5>Oficina</h5>
                        <p>Barcelona, España</p>
                        <div>
                            <img src="" alt="facebook">
                            <img src="" alt="instagram">
                            <img src="" alt="youtube">
                        </div>
                    </div>
                    

                </div>
            </div>

        </div>
    </div>
</x-layout>    