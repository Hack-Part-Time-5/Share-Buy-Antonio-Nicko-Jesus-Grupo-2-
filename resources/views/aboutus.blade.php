<x-layout>
    <x-slot name='title'>Share&Buy - {{__('Conócenos')}} ❤</x-slot>
    <div class="container m-auto">
        <div class="row p-4 pb-5 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis">{{__('Conócenos')}}</h1>
                <h6 class="lead mt-4">
                    <font color="#FF385C"> <strong>Share&Buy</strong></font> {{__('se ha convertido en una comunidad en la que cada día millones de personas compran y venden productos de segunda mano')}}
                </h6>
                <h4 class="mt-5" style="font-family:cursive">
                    {{__('Nuestra pasión, La programación')}}</h4>
            </div>
            <div class="video_aboutus col-lg-3 offset-lg-1 p-0 overflow-hidden ">
                <video loop width="100%" height="100%" autoplay class="">
                    <source src="\video\aboutus_2 .mp4" type="video/mp4">
                </video>
            </div>

        </div>
    </div>

    <div class="container m-auto ">
        <h1 class="mt-5 text-center">{{__('Nuestra Historia en')}}<font color="#FF385C"> Share&Buy</font>
        </h1>
        <section class="m-5">

            <p class="mb-5 ">{{__('"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. ')}}</p>

        </section>
        <div class="container auto mt-5">
            <h2 class="mb-4 mt-5 text-center ">{{('Nuestras fortalezas')}}</h2>
        </div>
        <section class="pre-footer mb-5 container-fluid d-flex m-auto justify-content-center">
            <div class="row1 ">
                <div class="pre-footer-row d-flex flex-wrap  justify-content-center ">
                    <div class="pre-footer-item m-2 ">
                        <div class="pre-footer-item-logo">
                            <img class="" alt="profesionalidad" title="profesionalidad" src="\img\icons\about_us\1.svg">
                        </div>
                        <div class="items_about_us mt-2">
                            <span style="">{{__('Profesionalidad')}}</span>
                        </div>
                        <div class="pre-footer-item-text">
                            <span style="">{{__('Máxima excelencia')}}</span>
                        </div>
                    </div>
                    <div class="pre-footer-item m-2">
                        <div class="pre-footer-item-logo">
                            <img class="" alt="Llama" title="Llama" src="\img\icons\about_us\2.svg">
                        </div>
                        <div class=" items_about_us  mt-2">
                            <span style="">{{__('Profesionalidad')}}</span>
                        </div>
                        <div class="pre-footer-item-text">
                            <span style="">{{__('Máxima excelencia')}}</span>
                            <br>
                        </div>
                    </div>
                    <div class="pre-footer-item m-2">
                        <div class="pre-footer-item-logo">
                            <img class="" alt="Mail" title="Mail" src="\img\icons\about_us\3.svg">
                        </div>
                        <div class=" items_about_us  mt-2">
                            <span style=" items_about_us">{{__('Profesionalidad')}}</span>
                        </div>
                        <div class="pre-footer-item-text">
                            <span style="">{{__('Máxima excelencia')}}</span></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container_conoce container ">
            <div class=" ">
                <div class=" mb-5 ">

                    <div class=" banner_conocenos pt-5 px-4 d-flex flex-column align-items-start">
                        <h2 class="text-white">{{ __('Estamos aquí') }} <br>
                            {{ __('para ti') }}</h2>

                        <div class="mt-5 mb-5">
                            <a href="{{ route('contact') }}"><button type="button"
                                    class=" ms-1 p-2 navbar-register_button text-white"><span
                                        class="nav__register--button d-flex justify-content-center align-items-center">{{ __('Contáctanos') }}</span></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container  ">
            <h2 class="mb-5 text-center">Conoce a los creadores de<font color="#FF385C"> Share&Buy</font>
            </h2>
        </div>
        <div class="row justify-content-center ">
            <div class=" card  img_team_team  col-lg-3 col-md-4 mt-1 mx-5 ">
                <div class="anima team-item item ">
                    <h5>Jesús Escalona</h5>
                    <p class="line_fotos "></p>
                    <p class="mb-4 mt-3">Desarrolador web</p>
                    <img class="img-fluid rounded-circle w-100 mb-4" src="\img\equipo\foto_jesus.png" alt="">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-danger m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-danger m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-danger  m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <p class="mb-5 ">Multifacético, inquieto y con gran habilidad para el aprendizaje hace que sienta muchas ganas de crecer en el ámbito de la programación para el desarrollo de aplicaciones profesionales. </p>
            </div>
            <div class="card border-1  img_team_team col-lg-3 col-md-4 mx-5 ">
                <div class="anima team-item item ">
                    <h5>Antonio Izquierdo</h5>
                    <p class="line_fotos"></p>
                    <p class="mb-4 mt-3">Desarrolador web</p>
                    <img class=" img-fluid rounded-circle w-100 mb-4" src="\img\equipo\foto_antonio.png" alt="">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-danger m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-danger m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-danger m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <p class="mb-5 ">Proactivo y con capacidad para desarrollar páginas web elegantes y pioneras y diseños de aplicaciones para cliente exigentes. Organizado y con capacidad de multitarea con experiencia en dirección de proyectos.  </p>
            </div>
            <div class="card  img_team_team col-lg-3 col-md-2 mx-5 ">
                <div class="anima  team-item item ">
                    <h5>Nicolás Agurto</h5>
                    <p class="line_fotos "></p>
                    <p class="mb-4 mt-3">Desarrolador web</p>
                    <img class=" img_desarrolladores img-fluid rounded-circle w-100 mb-4" src="\img\equipo\foto_nico.png" alt="">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-danger m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-danger m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-danger  m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <p class="mb-5 ">"Entusiasta y con ganas de aprendizaje, buscando un cambio de ruta desde la Economia y el turismo hacia el ámbito tech, llegando asi a aprender programación full stack en Aulab. </p>
            </div>

        </div>
    </div>
    <div class="container m-auto mb-5">
        <h2 class="mt-5 text-center">Lenguajes y Frameworks de<font color="#FF385C"> Programación</font>
        </h2>
        <section class="m-5">
            <div class="child-page-listing">

                <div class="grid-container">

                    <article id="3685" class="lenguaje-listing">

                        <p class="lenguaje-title" href="#">
                            HTML 5 </p>

                        <div class="lenguaje-image">
                            <a href="#">
                                <img width="300" height="169" class="img_x" src="\img\lenguajes\html.jpg"
                                    alt="san francisco"> </a>

                        </div>

                    </article>

                    <article id="3688" class="lenguaje-listing">

                        <p class="lenguaje-title" href="#">
                            CSS 3 </p>

                        <div class="lenguaje-image">
                            <a href="#">
                                <img width="300" height="169" class="img_x" src="\img\lenguajes\css.jpg" alt="london">
                            </a>

                        </div>

                    </article>

                    <article id="3691" class="lenguaje-listing">

                        <p class="lenguaje-title" href="#">
                            JAVASCRIPT </p>

                        <div class="lenguaje-image">
                            <a href="#">
                                <img width="300" height="169" class="img_x" src="\img\lenguajes\javascript.jpg"
                                    alt="new york"> </a>

                        </div>

                    </article>

                    <article id="3694" class="lenguaje-listing">

                        <p class="lenguaje-title" href="#">
                            LARAVEL 10 </p>

                        <div class="lenguaje-image">
                            <a href="#">
                                <img width="300" height="169" class="img_x" src="\img\lenguajes\laravel.png"
                                    alt="cape town"> </a>

                        </div>

                    </article>

                    <article class="lenguaje-listing">

                        <p class="lenguaje-title" href="#">
                            PHP </p>

                        <div class="lenguaje-image">
                            <a href="#">
                                <img width="300" height="169" class="img_x" src="\img\lenguajes\php.png" alt="beijing">
                            </a>

                        </div>

                    </article>

                    <article class="lenguaje-listing">

                        <p class="lenguaje-title" href="#">
                            MYSQL</p>

                        <div class="lenguaje-image">
                            <a href="#">
                                <img width="300" height="169" class="img_x" src="\img\lenguajes\mysql.png" alt="beijing">
                            </a>

                        </div>

                    </article>
                    <article class="lenguaje-listing">

                        <p class="lenguaje-title" href="#">
                            VUE.JS</p>

                        <div class="lenguaje-image">
                            <a href="#">
                                <img width="300" height="169" class="img_x" src="\img\lenguajes\vue.png" alt="beijing">
                            </a>

                        </div>

                    </article>

                    <article id="3700" class="lenguaje-listing">

                        <p class="lenguaje-title" href="#">
                            METODOLOGÍAS ÁGILES </p>

                        <div class="lenguaje-image">
                            <a href="#">
                                <img width="300" height="169" class="img_x" src="\img\lenguajes\scrump.jpg" alt="paris">
                            </a>
                        </div>

                    </article>

                </div>
                <!-- end grid container -->

            </div>

            <section class="">
                <h1 class="mt-5 text-center m-auto">Nuestro aprendizaje en<font color="#FF385C"></font><img class="logo_aulab" src="\img\logo-aulab-hackademy-horizontal.png" alt="" srcset=""></h1>
               
                <p class="mb-5 mt-5">El curso Hackademy se centra en el desarrollo web y la programación Object Oriented. Los lenguajes tratados durante el curso son HTML, CSS y Javascript para el desarrollo de frontend y PHP con Laravel Framework para el desarrollo de backend; aprendes a trabajar en equipo con Metodologías Ágiles, utilizando el framework SCRUM.

                    Cada semana se realiza un ejercicio sobre un proyecto práctico cada vez más complejo. Para el proyecto final se pone en práctica lo aprendido, desarrollando un portal de anuncios desde cero, trabajando en equipo con los compañeros.</p>
 
            </section>
    </div>
    </div>
</x-layout>
