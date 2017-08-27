@extends('layouts.app')

@section('content')

<div class="container-fluid" style="padding: 0px;">
    <div class="parallax" data-bs-parallax-bg="true">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                <img class="img-responsive" src="/img/logo_ies.png" alt="Logo IES" width="300px" height="100%" style="padding-top: 40px; margin-left: 20px;">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 img_banner">
                <img src="/img/Info.png" alt="IES" class="img-responsive" width="762px" height="295px" style="padding-top: 40px;">
                <a href="https://play.google.com/store/apps/details?id=com.unisangil.ies" target="__blank"><img class="margin-playstore playstore" src="/img/playstore.png" alt="PlayStore" class="img-responsive" width="236px" height="100%" border="none"></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid background-block">
    <div class="container margin-container">
        <div class="row">
            <div class="col-md-8">
                <h2>El seminario</h2>
                <p>Desde el año 2009, la Facultad de Ciencias Naturales e Ingeniería de UNISANGIL, ha organizado encuentros internacionales como parte de su misión académica, investigativa y de extensión, consciente de que la ingeniería es un área en constante evolución, y de que los crecientes avances tecnológicos que vive la humanidad, generan un sin número de posibilidades para dar valor agregado a los productos empresariales y para acrecentar la oportunidad de fomentar un desarrollo más solidario.</p>
                <p>Los seminarios internacionales de ingeniería, como se ha denominado a dichos encuentros desde el 2013, constituyen una respuesta a esta necesidad, y posibilitan apropiar y generar aportes a la misma, teniendo presente los entornos internacionales como medio de apoyo y evaluación.</p>
            </div>
            <div class="col-md-4">
                <h3>Objetivos</h3>
                <p>Propiciar un espacio de encuentro para la presentación, denotación, connotación y discusión de tecnologías y conocimientos científicos y matemáticos aplicados en ingeniería, para el fomento de la invención y la innovación, en relación con las necesidades del desarrollo social, económico y cultural en la región y el país.</p>
            </div>
        </div>
    </div>
</div>

<div class="photo-gallery">
    <div class="container">
        <h2 class="text-center">Invitados</h2>
        <div class="row photos">
            <div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/alberto1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/jose1.png/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/lucas.jpg/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/lucas.jpg/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/andres1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/andres1.png/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/henry1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/henry1.png/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/milton1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/milton1.png/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/alberto1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/alberto1.png/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-1 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/roberto1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/roberto1.png/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/manuel1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/manuel1.png/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/pablo1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/pablo1.png/') }}" class="img-responsive" /></a>
            </div>
            <div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/thompson1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/thompson1.png/') }}" class="img-responsive" /></a>
            </div>
            <div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/marcos1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/marcos1.png/') }}" class="img-responsive" /></a>
            </div>
            <div class="col-lg-2 col-lg-offset-4 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a href="{{ asset('/img/ponentes/betsy1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/betsy1.png/') }}" class="img-responsive" /></a>
            </div>
            <div class="col-lg-2 col-lg-offset-0 col-md-offset-4 col-md-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 item ponentes">
                <a href="{{ asset('/img/ponentes/miguel1.png/') }}" data-lightbox="photos"><img src="{{ asset('/img/ponentes/miguel1.png/') }}" class="img-responsive" /></a>
            </div>
        </div>
    </div>
</div>

<!--Modals -->
            <div>
                <div class="modal fade" id="Manual_Fernando_Gonzalez">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2>
                                    Msc. Manual Fernando Gonzalez
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/manuel1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            Msc. Gestión del Mantenimiento Industrial,
ESPOCH, Ecuador
Msc. Gestión de Educación, Universidad
Regional de los Andes, Ecuador.
Esp. Diseño Curricular, U. Regional de los
Andes, Ecuador.
Ingeniero de Mantenimiento, ESPOCH,
Ecuador
Director Escuela de Ingeniería de
Mantenimiento
Facultad de Mecánica
Escuela Superior Politécnica de Chimborazo,
ESPOCH
Confiabilidad Humana en las Empresas
Formación en la Ingeniería para el
Liderazgo
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="José_Luis_Roca">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    PhD. José Luis Roca
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/jose1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            Dr. Engineer, Software Complexity,
                                        Universidad de Buenos Aires
                                        </p>
                                        <p>
                                            Director del Programa de Ingeniería
                                        Electrónica de la Universidad Nacional
                                        de Rio Negro, UNRN, Argentina
                                        </p>
                                        <p>
                                            Miembro de la Comisión Nacional de
                                        Actividades Espaciales,Argentina.
                                        </p>
                                        <p>
                                            Autor del Libro “La Confiabilidad de
                                        los Sistemas Electrónicos” Edit. Nueva
                                        Librería SRL (2013)
                                        </p>
                                        <strong>
                                            Confiabilidad en Ingeniería
                                        Medidas de Complejidad en
                                        Software.
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Andrés_Moltoni">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    Msc. Andrés Fernando Moltoni
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/andres1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Magíster en Ingeniería de las Telecomunicaciones,
                                                                                                            Instituto Tecnológico de Buenos Aires.
                                            </p>
                                            <p>
                                                Ingeniero Electrónico, Universidad Tecnológica Nacional
                                            </p>
                                            <p>
                                                Investigador a cargo del Laboratorio de Electrónica del
                                                                    Instituto de Ingeniería Rural
                                            </p>
                                            <p>
                                                Coordinador del Modulo de In Agro robótica y, Agro electrónica
                                                                                                        novaciones Agroelectrónicas para el Desarrollo
                                                                                                        Sustentable del Proyecto Nacional de Mecanización para
                                                                                                        el Desarrollo Territorial Sustentable.
                                            </p>
                                            <p>
                                                Director de grupo en el proyecto ENARSOL del Fondo de
                                                                    Innovación Tecnológica Sectorial de Energía (Fits
                                                                    Energía) financiado por el BID.
                                            </p>
                                            <p>
                                                Docente en la Universidad Nacional de Moreno
                                                                                                            Coordinador del Programa Especial para la Investigación
                                                                                                            y el Desarrollo de la Electrónica Aplicada al Agro, en la
                                                                                                            UNM.
                                            </p>
                                            <strong>
                                                Agro robótica
                                                <br>
                                                    Agro electrónica.
                                                </br>
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Lucas_Costa">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    Msc. Lucas Eduardo Costa
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/lucas.jpg">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Magister Internacionalización del Desarrollo Local
                                                                                Universidad de Bolognia, Italia
                                            </p>
                                            <p>
                                                MBA Gestión de Innovación en Ciencia y Tecnología
                                        Fundación Getulio Vargas, Brasil
                                            </p>
                                            <p>
                                                Especialización en Riego y Drenaje
                                        Universidad de Cuyo, Argentina
                                            </p>
                                            <p>
                                                Ingeniero Agrónomo
                                        Universidad de Buenos Aíres
                                            </p>
                                            <p>
                                                Coordinador sector Transferencia de Tecnología
                                        Programa de Servicios Agrícolas Provinciales - PROSAP
                                        Ministerio de Agroindustria - Argentina
                                            </p>
                                            <p>
                                                <strong>
                                                    Gestión de Innovación en Ciencia y Tecnología para
                                                                                    el Agro
                                                </strong>
                                            </p>
                                            <strong>
                                                Experiencias del PROSAP en la Escuela y Laboratorio
                                        Móvil de irrigación
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Henry_Reyes">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    PhD. Henry Reyes Pineda
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/henry1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Doctor en Tecnologias de Membranas
                                            Eletroquímicas, Universidad Politécnica de
                                            Valencia, UPV, Tesis Sobresaliente, Distinción
                                            Cum Laudem.
                                            </p>
                                            <p>
                                                Magister y Especialista en Tecnologías de
                                        Membranas Electroquímicas, UPV
                                        Especialista en Educación Ambiental,
                                        UNIBOSQUE
                                            </p>
                                            <p>
                                                Decano Facultad de Ciencias Agroindustriales
                                        Universidad del Quindío
                                            </p>
                                            <p>
                                                <strong>
                                                    Diseño de una celda combustible de
                                            hidrógeno tipo PEM como estrategia de
                                            mejoramiento ambiental.
                                                </strong>
                                            </p>
                                            <strong>
                                                La seguridad agroalimentaria como
                                                                            alternativa de cambio.
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Milton_Quiroga_Becerra">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    PhD. Milton Quiroga Becerra
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/milton1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                PhD and Master in Engineering, “with
                                                                                University Honors” – Carnegie Mellon
                                                                                University.
                                            </p>
                                            <p>
                                                Magister en Ingeniería de Sistemas,
                                        Universidad de Los Andes
                                            </p>
                                            <p>
                                                Ingeniero de Sistemas – Universidad
                                        Industrial de Santander
                                            </p>
                                            <p>
                                                Manager CyberTech de Colombia Ltd
                                        Professor at Universidad de los Andes
                                            </p>
                                            <p>
                                                <strong>
                                                    Ciberseguridad
                                                </strong>
                                            </p>
                                            <strong>
                                                Seguridad en Redes Industriales.
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Alberto_Mora_Gutiérrez">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    PhD Alberto Mora Gutiérrez
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/alberto1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Doctor en Ingeniería Industrial - Ph.D. Gestión
                                        Empresarial, Universidad Politécnica de Valencia,
                                        UPV
                                            </p>
                                            <p>
                                                Especialista en Gestión Industrial, UPV
                                            </p>
                                            <p>
                                                Magister en Administración, EAFIT
                                            </p>
                                            <p>
                                                Especialista en Mercadeo, EAFIT
                                            </p>
                                            <p>
                                                Magister en Administración de Negocios,
                                        Universidad de Carabobo
                                            </p>
                                            <p>
                                                Ingeniero en Ciencias Mecánicas, UPB
                                        CEO - Representante Legal – Fundador CIMPRO
                                        SAS
                                            </p>
                                            <p>
                                                Profesor Investigador, Director del Postgrado en
                                        Mantenimiento Industrial de la Escuela de
                                        Ingeniería, Universidad EAFIT
                                            </p>
                                            <p>
                                                Autor de los libros: Mantenimiento-Planeación
                                        Ejecución y Control, e Inventario Cero
                                            </p>
                                            <strong>
                                                Terotecnología
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Roberto_Alves_de_Oliveira">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    PhD. Roberto Alves de Oliveira
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/roberto1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Doctor en Ingeniería Hidráulica y
                                                                                Sanitaria, Escuela de Ingeniería de San
                                                                                Carlos Universidad de San Pablo, Brasil
                                            </p>
                                            <p>
                                                Coordinator Postgraduate Program in
                                        Agricultural Microbiology
                                        Director Environmental Sanitation
                                        Laboratory
                                            </p>
                                            <p>
                                                Department of Rural Engineering
                                        Universidade Estadual Paulista
                                        Campus Jaboticabal
                                            </p>
                                            <strong>
                                                Research experience in anaerobic
                                        treatment of wastewater and
                                        anaerobic digestion with and special
                                        emphasis in use of rural waste
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Pablo_Ernesto_Montalvo">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    Msc. Pablo Ernesto Montalvo
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-6">
                                    <img alt="" class="img-responsive" src="imgs/invitados/pablo1.png">
                                    </img>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Msc. Sistemas de Control y Automatización Industrial,
                                        Escuela Superior Politécnica de Chimborazo, ESPOCH,
                                        Ecuador
                                            </p>
                                            <p>
                                                Msc. Educación Universitaria y Administración Educativa,
                                        Universidad Tecnológica Indoamérica
                                        Ambato, Ecuador
                                            </p>
                                            <p>
                                                Experto en Procesos Elearning, FATLA (Fundación para
                                        la Actualización Tecnológica de Latinoamérica)
                                            </p>
                                            <p>
                                                Ingeniero Industrial
                                        Universidad Tecnológica Indoamérica
                                            </p>
                                            <p>
                                                Ingeniero Electromecánico
                                        Escuela Superior Politécnica del Ejército
                                            </p>
                                            <p>
                                                Profesor Facultad de Mecánica, ESPOCH
                                            </p>
                                            <p>
                                                Profesor Escuela de Diseño Industrial
                                        Pontificia Universidad Católica del Ecuador, PUCE, Sede
                                        Ambato
                                            </p>
                                            <p>
                                                <strong>
                                                    La automatización industrial en el marco de la cuarta
                                                                                        revolución industrial
                                                </strong>
                                            </p>
                                            <strong>
                                                Mantenimiento de sistemas Electroneumáticos y
                                                                            Olehidráulicos
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Marcos_Algara_Siller">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    PhD. Marcos Algara Siller
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/marcos1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Doctor en Ciencias Ambientales, Universidad
                                                                        Autónoma de San Luis Potosí (UASLP)
                                                                        Magister en ciencias de la ingeniería,
                                                                        Universidad de Western Ontario (Canadá)
                                                                        Miembro del Sistema Nacional de
                                                                        Investigadores (SNI), México.
                                            </p>
                                            <p>
                                                Profesor investigador del Área de Ciencias de
                                        la Tierra, y de la Maestría en Tecnología y
                                        Gestión del Agua, de la Facultad de Ingeniería
                                        de la UASLP, México.
                                            </p>
                                            <strong>
                                                Modelo de sostenibilidad para la
                                                                            soberanía de comunidades
                                                                            vulnerables
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Betsy_Chaparro_Rico">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    PhD (C) Betsy Chaparro Rico
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/betsy1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                PhD Student at INSTITUTO POLITECNICO
                                                                        NACIONAL, IPN, México
                                            </p>
                                            <p>
                                                PhD Student at University of Cassino And
                                        Southern Latium, Italia
                                            </p>
                                            <p>
                                                Master in Advanced Technology, IPN, México
                                            </p>
                                            <p>
                                                <strong>
                                                    Ingeniera Electrónica, UNISANGIL, Colombia
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    El proceso de diseño
                                                                                mecatrónico en ingeniería
                                                </strong>
                                            </p>
                                            <strong>
                                                Diseño de sistemas de
                                                                            rehabilitación.
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Miguel_Ángel_Valencia">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    Msc. Miguel Ángel Valencia
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/miguel1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Ingeniero en Sistemas Computacionales
                                    Instituto, Tecnológico de Cuautla (ITC)
                                    en Morelos, México
                                            </p>
                                            <p>
                                                Maestría en Ciencias en Ciencias
                                    Computacionales en el Instituto Nacional
                                    de Astrofísica, Óptica y
                                    Electrónica (INAOE), México
                                            </p>
                                            <p>
                                                Investigador Laboratorio de Cómputo y
                                    Procesamiento Ubicuo del INAOE
                                            </p>
                                            Desarrollador-Innovador proyectos para
                                            <p>
                                                el monitoreo y control de transporte
    urbano
                                            </p>
                                            <strong>
                                                Emprendimiento e Innovación
                                    tecnológica para los Sistemas
                                    Inteligentes de Transporte.
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="modal fade" id="Thompson_Sarkodie-Gyan">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                    ×
                                </button>
                                <h2 class="text-center">
                                    PhD Thompson Sarkodie-Gyan
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="imgs/invitados/gyan1.png">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="text-center">
                                            <p>
                                                Doctor of Engineering Sciences in Measurement and
Control Engineering, Technical University Berlin
Master of Engineering Sciences (Dipl.Ing) in Electrical
Engineering and Cybernetics (Automatic Controls),
Technical University Otto-von-Guericke Magdeburg.
                                            </p>
                                            <p>
                                                Associate Professor of Electrical and Computer
Engineering at the University of Texas, College of
Engineering
                                            </p>
                                            <p>
                                                Founding Director of the University's Laboratory for
Industrial Metrology and Automation
                                            </p>
                                            <p>
                                                Founding Director of the University's Laboratory for
Human Motion Analysis and Neurorehabilitation
Member of the World Federation of Neurorehabilitation
Fellow of the Institute of Measurement and Control
(InstMC). Distinguished Member of the German Institution
of Engineers, VDI (Gesellschaft fuer Mess-und
Automatisierungstechnik, GMA).
Author of the Book: Neuro Rehabilitation Devices
                                            </p>
                                        </h5>
                                        <p>
                                            <strong>
                                                Machine Learning
                                            </strong>
                                        </p>
                                        <strong>
                                            Reasoning System with Fuzzy Logic
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Modals -->

@endsection