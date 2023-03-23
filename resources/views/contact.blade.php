<x-layout>
    <div class="mt-4 container contact-page m-auto  d-flex">
        <div class="row1">
            <h2 class="title text-center">
                <img src="\img\icons\contacta_icon.svg" class="contacta_icon"alt="icono de contacto">
                {{ __('Contacta con nosotros') }}</h2>

            <form>
            <div class=" mt-4 form-contact contact-page container d-flex justify-content-center m-auto">
                <div class="row justify-content-center">
                    <div class="col ">
                       
                            <input type="text" name="name" placeholder="Nombre *"
                                class="placeholder_login form-control  p-2  ">
                            </div>
                            <div class="col">
                            <input type="text" name="lastName" id="" placeholder="Apellidos *"
                                class="placeholder_login form-control p-2  ">
                            </div>
                            <div>
                            <div class="col">
                            <input type="email" name="email" id="" placeholder="Correo electrónico *"
                                class="placeholder_login form-control  p-2 ">
                            </div>
                                <div class="col">
                                <input type="tel" name="phone" id="" placeholder="Teléfono *"
                                class="placeholder_login form-control  p-2  ">
                            </div>
                        </div>

                            <p class="text-required">* Campos obligatorios</p>
                            <h5 >¿Cómo te podemos ayudar?</h5>
                            <textarea name="coments" id="" cols="16" rows="8" class="form-control mt-4"></textarea>
                            <div class="g-recaptcha" data-sitekey="6Lep6I8aAAAAACa6dzwxa9Q8jS1ahsnFO-mVjSby">
                                <div>
                                    <div><iframe title="reCAPTCHA"
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6Lep6I8aAAAAACa6dzwxa9Q8jS1ahsnFO-mVjSby&amp;co=aHR0cHM6Ly9pbnNweXJpYS5jb206NDQz&amp;hl=es&amp;v=Trd6gj1dhC_fx0ma_AWHc1me&amp;size=normal&amp;cb=2qgzz6mjs5k9"
                                            width="304" height="78" role="presentation" name="a-u4e7alit1url"
                                            frameborder="0" scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                    </div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response"
                                        class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div><iframe style="display: none;"></iframe>
                            </div>
                            <div>
                                <button type="submit" class="navbar-register_button text-white px-3 mt-3">Enviar</button>
                            </div>
                            <div class="contact-policy mt-3">
                                <p>Al hacer clic en Enviar, aceptas los <a target="_blank"
                                        href="{{route('terminos')}}">Términos
                                        y condiciones</a> de Share&Buy y nuestra <a target="_blank"
                                        href="{{route('politicaprivacidad')}}">Política de privacidad</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="info-contact m-3 p-2 ">

                    <img src="\img\contacto_img.png">

                    <div class="white-box">
                        <h4>Share&Buy cerca de ti</h4>

                        <div class="line"></div>

                        <div>
                            <p class="title_contact mt-3 ">Correo electrónico</p>
                            <p class="value mt-1">info@shareandbuy.com</p>

                            <p class="title_contact mt-2 ">Teléfono</p>
                            <p class="value mt-1">+34 630 10 10 16 <a rel="nofollow" target="_blank"
                                    href="https://wa.me/+34660101016?text=hola%2C+estoy+interesad%40+en..."><img
                                        alt="WhatsApp" title="WhatsApp" style="height: 19px;margin-bottom: -4px;"
                                        src="\img\icons\whatsapp.png"></a></p>

                            <p class="title_contact mt-2 ">Oficina</p>
                            <p class="value mt-1">Barcelona, España</p>
                        </div>

                        <div class="m-3">
                            
                                <img alt="Facebook" title="Facebook" class="social-media"
                                    src="\img\icons\icons_RRSS\fb_icon.svg">
                            
                            
                                <img alt="Instagram" title="Instagram" class="social-media"
                                    src="\img\icons\icons_RRSS\instagram_icon.svg">
                           
                           
                                <img alt="YouTube" title="YouTube" class="social-media"
                                    src="\img\icons\icons_RRSS\youtube_icon.svg">
                           
                        </div>


                    </div>

                </div>


                {{-- <div class="col6 divContactInfo">
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
                  </div>   --}}


            </div>

        </div>
    </div>
    </div>

</x-layout>
