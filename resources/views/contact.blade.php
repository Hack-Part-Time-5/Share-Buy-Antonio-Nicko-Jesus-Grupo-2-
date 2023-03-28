<x-layout>
    <div class="mt-4 container contact-page m-auto justify-content-center  d-flex">
        <div class="row1">
            <h2 class="title text-center">
                <img src="\img\icons\contacta_icon.svg" class="contacta_icon" alt="icono de contacto">
                {{ __('Contacta con nosotros') }}</h2>

            <form>
                <div class=" mt-4 form-contact  container d-flex justify-content-center m-auto">
                    <div class="row">
                        <div class="col  m-2 ">

                            <input type="text" name="name" placeholder="Nombre *"
                                class="placeholder_login form-control  p-2 my-3  ">

                            <input type="email" name="email" id="" placeholder="Correo electrónico *"
                                class="placeholder_login form-control  p-2 ">

                        </div>

                        <div class="col  m-2">

                            <input type="text" name="lastName" id="" placeholder="Apellidos *"
                                class="placeholder_login form-control p-2 my-3  ">

                            <input type="tel" name="phone" id="" placeholder="Teléfono *"
                                class="placeholder_login form-control  p-2  ">
                        </div>


                        <p class="text-required px-2">* Campos obligatorios</p>
                        <h5 class="p-2 mt-3">¿Cómo te podemos ayudar?</h5>
                        <textarea name="coments" id="" cols="16" rows="8" class="form-control mt-2"
                            placeholder="Escribe aquí..."></textarea>
                        <div class="g-recaptcha" data-sitekey="6Lep6I8aAAAAACa6dzwxa9Q8jS1ahsnFO-mVjSby">
                            <div>
                                <div><iframe title="reCAPTCHA"
                                        src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6Lep6I8aAAAAACa6dzwxa9Q8jS1ahsnFO-mVjSby&amp;co=aHR0cHM6Ly9pbnNweXJpYS5jb206NDQz&amp;hl=es&amp;v=Trd6gj1dhC_fx0ma_AWHc1me&amp;size=normal&amp;cb=2qgzz6mjs5k9"
                                        width="304" height="78" role="presentation" name="a-u4e7alit1url"
                                        frameborder="0" scrolling="no" class=" mt-4 mx-4"
                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                </div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response"
                                    class="g-recaptcha-response"
                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                            </div><iframe style="display: none;"></iframe>
                        </div>
                        <div>
                            <button type="submit"
                                class="navbar-register_button text-white mx-4 px-4 py-2 mt-3">Enviar</button>
                        </div>
                        <div class="contact-policy mt-3">
                            <p class="mx-3 mb-5 mt-2">Al hacer clic en Enviar, aceptas los <a target="_blank"
                                    href="{{ route('terminos') }}">Términos
                                    y condiciones</a> de Share&Buy y nuestra <a target="_blank"
                                    href="{{ route('politicaprivacidad') }}">Política de
                                    privacidad</a>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        {{-- <div class="container info-contact m-3 p-2 d-flex flex-wrap">
            <div>
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

        </div> --}}
    </div>
</x-layout>
