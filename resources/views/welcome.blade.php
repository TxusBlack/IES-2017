@extends('layouts.app')

@section('content')

<!-- Banner -->
<div class="container-fluid" style="padding: 0px;">
    <div class="parallax" data-bs-parallax-bg="true">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                <img class="img-responsive" src="/img/logo_ies.png" alt="Logo IES" width="300px" height="100%" style="padding-top: 40px; margin-left: 20px;">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 img_banner">
                <img src="/img/Info.png" alt="IES" class="img-responsive img-fluid" width="762px" height="295px" style="padding-top: 40px;">
                <a href="https://play.google.com/store/apps/details?id=com.unisangil.ies" target="__blank"><img class="margin-playstore playstore" src="/img/playstore.png" alt="PlayStore" class="img-responsive" width="236px" height="100%" border="none"></a>
            </div>
        </div>
    </div>
</div>

<!-- Descripcion -->
<div class="container-fluid background-block">
    <div class="container margin-container">
        <div class="row">
            <div class="col-md-8">
                <h2>El seminario</h2>
                <p class="text-justify">Desde el año 2009, la Facultad de Ciencias Naturales e Ingeniería de UNISANGIL, ha organizado encuentros internacionales como parte de su misión académica, investigativa y de extensión, consciente de que la ingeniería es un área en constante evolución, y de que los crecientes avances tecnológicos que vive la humanidad, generan un sin número de posibilidades para dar valor agregado a los productos empresariales y para acrecentar la oportunidad de fomentar un desarrollo más solidario.</p>
                <p class="text-justify">Los seminarios internacionales de ingeniería, como se ha denominado a dichos encuentros desde el 2013, constituyen una respuesta a esta necesidad, y posibilitan apropiar y generar aportes a la misma, teniendo presente los entornos internacionales como medio de apoyo y evaluación.</p>
            </div>
            <div class="col-md-4">
                <h3>Objetivos</h3>
                <p class="text-justify">Propiciar un espacio de encuentro para la presentación, denotación, connotación y discusión de tecnologías y conocimientos científicos y matemáticos aplicados en ingeniería, para el fomento de la invención y la innovación, en relación con las necesidades del desarrollo social, económico y cultural en la región y el país.</p>
            </div>
        </div>
    </div>
</div>

<!-- Fotos ponentes -->
<div class="photo-gallery">
    <div class="container">
        <h2 class="text-center">Invitados</h2>
        <div class="row photos">
            <div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#José_Luis_Roca" data-lightbox="photos"><img src="{{ asset('/img/ponentes/jose1.jpg/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Lucas_Costa" data-lightbox="photos"><img src="{{ asset('/img/ponentes/lucas.jpg/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Andrés_Moltoni" data-lightbox="photos"><img src="{{ asset('/img/ponentes/andres1.jpg/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Henry_Reyes" data-lightbox="photos"><img src="{{ asset('/img/ponentes/henry1.jpg/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Milton_Quiroga_Becerra" data-lightbox="photos"><img src="{{ asset('/img/ponentes/milton1.jpg/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Alberto_Mora_Gutiérrez" data-lightbox="photos"><img src="{{ asset('/img/ponentes/alberto1.jpg/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Roberto_Alves_de_Oliveira" data-lightbox="photos"><img src="{{ asset('/img/ponentes/roberto1.jpg/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Manual_Fernando_Gonzalez" data-lightbox="photos"><img src="{{ asset('/img/ponentes/manual1.jpg/') }}" class="img-responsive" /></a>
            </div><div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Pablo_Ernesto_Montalvo" data-lightbox="photos"><img src="{{ asset('/img/ponentes/pablo1.jpg/') }}" class="img-responsive" /></a>
            </div>
            <div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Marcos_Algara_Siller" data-lightbox="photos"><img src="{{ asset('/img/ponentes/marcos1.jpg/') }}" class="img-responsive" /></a>
            </div>
            <div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Betsy_Chaparro_Rico" data-lightbox="photos"><img src="{{ asset('/img/ponentes/betsy1.jpg/') }}" class="img-responsive" /></a>
            </div>
            <div class="col-lg-2 col-lg-offset-0 col-md-4 col-sm-4 col-xs-6 item ponentes">
                <a data-toggle="modal" href="#Miguel_Ángel_Valencia" data-lightbox="photos"><img src="{{ asset('/img/ponentes/miguel1.jpg/') }}" class="img-responsive" /></a>
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
                                    Msc. Manuel Fernando Gonzalez Puente
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/manual1.jpg/') }}">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            Msc. Gestión de la Educación, Universidad Regional de los Andes, Ecuador.
                                        </p>
                                        <p>
                                            Especialista en Diseño Curricular, U. Regional de los Andes, Ecuador.
                                        </p>
                                        <p>
                                            <strong>
                                                Ingeniero de Mantenimiento, ESPOCH, Ecuador
                                            </strong>
                                        </p>
                                        <p>
                                            <strong>
                                                Escuela Superior Politécnica de Chimborazo, ESPOCH
                                            </strong>
                                        </p>
                                        <p><strong>País del ponente:</strong> Ecuador</p>
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
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/jose1.jpg/') }}">
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
                                        <p><strong>País del ponente:</strong> Argentina</p>
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
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/andres1.jpg/') }}">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Magíster en Ingeniería de las Telecomunicaciones, Instituto Tecnológico de Buenos Aires.
                                            </p>
                                            <p>
                                                Ingeniero Electrónico, Universidad Tecnológica Nacional
                                            </p>
                                            <p>
                                                Investigador a cargo del Laboratorio de Electrónica del Instituto de Ingeniería Rural
                                            </p>
                                            <p>
                                                Coordinador del Modulo de In Agro robótica y, Agro electrónica novaciones Agroelectrónicas para el Desarrollo Sustentable del Proyecto Nacional de Mecanización para el Desarrollo Territorial Sustentable.
                                            </p>
                                            <p>
                                                Director de grupo en el proyecto ENARSOL del Fondo de Innovación Tecnológica Sectorial de Energía (Fits Energía) financiado por el BID.
                                            </p>
                                            <p>
                                                Docente en la Universidad Nacional de Moreno Coordinador del Programa Especial para la Investigación y el Desarrollo de la Electrónica Aplicada al Agro, en la UNM.
                                            </p>
                                            <strong>
                                                Agro robótica
                                                <br>
                                                    Agro electrónica.
                                                </br>
                                            </strong>
                                            <p><strong>País del ponente:</strong> Argentina</p>
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
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/lucas.jpg/') }}">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Magister Internacionalización del Desarrollo Local Universidad de Bolognia, Italia
                                            </p>
                                            <p>
                                                MBA Gestión de Innovación en Ciencia y Tecnología Fundación Getulio Vargas, Brasil
                                            </p>
                                            <p>
                                                Especialización en Riego y Drenaje Universidad de Cuyo, Argentina
                                            </p>
                                            <p>
                                                Ingeniero Agrónomo Universidad de Buenos Aíres
                                            </p>
                                            <p>
                                                Coordinador sector Transferencia de Tecnología Programa de Servicios Agrícolas Provinciales - PROSAP Ministerio de Agroindustria - Argentina
                                            </p>
                                            <p>
                                                <strong>
                                                    Gestión de Innovación en Ciencia y Tecnología para el Agro
                                                </strong>
                                            </p>
                                            <strong>
                                                Experiencias del PROSAP en la Escuela y Laboratorio Móvil de irrigación
                                            </strong>
                                            <p><strong>País del ponente:</strong> Argentina</p>
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
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/henry1.jpg/') }}">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Doctor en Tecnologias de Membranas Eletroquímicas, Universidad Politécnica de Valencia, UPV, Tesis Sobresaliente, Distinción Cum Laudem.
                                            </p>
                                            <p>
                                                Magister y Especialista en Tecnologías de Membranas Electroquímicas, UPV Especialista en Educación Ambiental, UNIBOSQUE
                                            </p>
                                            <p>
                                                Decano Facultad de Ciencias Agroindustriales Universidad del Quindío
                                            </p>
                                            <p>
                                                <strong>
                                                    Diseño de una celda combustible de hidrógeno tipo PEM como estrategia de mejoramiento ambiental.
                                                </strong>
                                            </p>
                                            <strong>
                                                La seguridad agroalimentaria como alternativa de cambio.
                                            </strong>
                                            <p><strong>País del ponente:</strong> Colombia</p>
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
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/milton1.jpg/') }}">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                PhD and Master in Engineering, “with University Honors” – Carnegie Mellon University.
                                            </p>
                                            <p>
                                                Magister en Ingeniería de Sistemas, Universidad de Los Andes
                                            </p>
                                            <p>
                                                Ingeniero de Sistemas – Universidad Industrial de Santander
                                            </p>
                                            <p>
                                                Manager CyberTech de Colombia Ltd Professor at Universidad de los Andes
                                            </p>
                                            <p>
                                                <strong>
                                                    Ciberseguridad
                                                </strong>
                                            </p>
                                            <strong>
                                                Seguridad en Redes Industriales.
                                            </strong>
                                            <p><strong>País del ponente:</strong> Colombia</p>
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
                                    PhD. Luis Alberto Mora Gutiérrez
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/alberto1.jpg/') }}">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Doctor en Ingeniería Industrial - PhD. Gestión Empresarial, Universidad Politécnica de Valencia, UPV
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
                                                Magister en Administración de Negocios, Universidad de Carabobo
                                            </p>
                                            <p>
                                                Ingeniero en Ciencias Mecánicas, UPB CEO - Representante Legal – Fundador CIMPRO SAS
                                            </p>
                                            <p>
                                                Profesor Investigador, Director del Postgrado en Mantenimiento Industrial de la Escuela de Ingeniería, Universidad EAFIT
                                            </p>
                                            <p>
                                                Autor de los libros: Mantenimiento-Planeación Ejecución y Control, e Inventario Cero
                                            </p>
                                            <strong>
                                                Terotecnología
                                            </strong>
                                            <p><strong>País del ponente:</strong> Colombia</p>
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
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/roberto1.jpg/') }}">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Doctor en Ingeniería Hidráulica y Sanitaria, Escuela de Ingeniería de San Carlos Universidad de San Pablo, Brasil
                                            </p>
                                            <p>
                                                Coordinator Postgraduate Program in Agricultural Microbiology Director Environmental Sanitation Laboratory
                                            </p>
                                            <p>
                                                Department of Rural Engineering Universidade Estadual Paulista Campus Jaboticabal
                                            </p>
                                            <strong>
                                                Research experience in anaerobic treatment of wastewater and anaerobic digestion with and special emphasis in use of rural waste
                                            </strong>
                                            <p><strong>País del ponente:</strong> Brasil</p>
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
                                    Msc. Pablo Ernesto Montalvo Jaramillo
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-6">
                                    <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/pablo1.jpg/') }}">
                                    </img>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Msc. Sistemas de Control y Automatización Industrial, Escuela Superior Politécnica de Chimborazo, ESPOCH, Ecuador
                                            </p>
                                            <p>
                                                Msc. Educación Universitaria y Administración Educativa, Universidad Tecnológica Indoamérica Ambato, Ecuador
                                            </p>
                                            <p>
                                                Experto en Procesos Elearning, FATLA (Fundación para la Actualización Tecnológica de Latinoamérica)
                                            </p>
                                            <p>
                                                Ingeniero Industrial Universidad Tecnológica Indoamérica
                                            </p>
                                            <p>
                                                Ingeniero Electromecánico Escuela Superior Politécnica del Ejército
                                            </p>
                                            <p>
                                                Profesor Facultad de Mecánica, ESPOCH
                                            </p>
                                            <p>
                                                Profesor Escuela de Diseño Industrial Pontificia Universidad Católica del Ecuador, PUCE, Sede Ambato
                                            </p>
                                            <p>
                                                <strong>
                                                    La automatización industrial en el marco de la cuarta revolución industrial
                                                </strong>
                                            </p>
                                            <strong>
                                                Mantenimiento de sistemas Electroneumáticos y Olehidráulicos
                                            </strong>
                                            <p><strong>País del ponente:</strong> Ecuador</p>
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
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/marcos1.jpg/') }}">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Doctor en Ciencias Ambientales, Universidad Autónoma de San Luis Potosí (UASLP) Magister en ciencias de la ingeniería, Universidad de Western Ontario (Canadá) Miembro del Sistema Nacional de Investigadores (SNI), México.
                                            </p>
                                            <p>
                                                Profesor investigador del Área de Ciencias de la Tierra, y de la Maestría en Tecnología y Gestión del Agua, de la Facultad de Ingeniería de la UASLP, México.
                                            </p>
                                            <strong>
                                                Modelo de sostenibilidad para la soberanía de comunidades vulnerables.
                                            </strong>
                                            <p><strong>País del ponente:</strong> México</p>
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
                                    Msc, PhD E. Betsy Dayana Chaparro Rico
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/betsy1.jpg/') }}">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                PhD Student at INSTITUTO POLITECNICO NACIONAL, IPN, México
                                            </p>
                                            <p>
                                                PhD Student at University of Cassino And Southern Latium, Italia
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
                                                    El proceso de diseño mecatrónico en ingeniería
                                                </strong>
                                            </p>
                                            <strong>
                                                Diseño de sistemas de rehabilitación.
                                            </strong>
                                            <p><strong>País de la ponente:</strong> Colombia</p>
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
                                        <img alt="" class="img-responsive" src="{{ asset('/img/ponentes/miguel1.jpg/') }}">
                                        </img>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-center">
                                            <p>
                                                Ingeniero en Sistemas Computacionales Instituto, Tecnológico de Cuautla (ITC) en Morelos, México
                                            </p>
                                            <p> Maestría en Ciencias en Ciencias Computacionales en el Instituto Nacional de Astrofísica, Óptica y Electrónica (INAOE), México
                                            </p>
                                            <p> Investigador Laboratorio de Cómputo y Procesamiento Ubicuo del INAOE
                                            </p>
                                            Desarrollador-Innovador proyectos para
                                            <p> el monitoreo y control de transporte urbano
                                            </p>
                                            <strong> Emprendimiento e Innovación tecnológica para los Sistemas Inteligentes de Transporte.
                                            </strong>
                                            <p><strong>País del ponente:</strong> México</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Fin Modals -->

<!-- Cronograma -->
<div class="container-fluid background-block">
    <div class="container">
        <div class="margin-container">
            <div class="row">
                <h2 class="text-center">Cronograma</h2>
                <div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
                    <label class="btn btn-primary active sg">
                        <input type="radio" name="San Gil" autocomplete="off" checked> San Gil
                    </label>
                    <label class="btn btn-primary yp">
                        <input type="radio" name="Yopal" autocomplete="off"> Yopal
                    </label>
                </div>

                <br>

                <div class="collapse dsg">
                    <div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
                        <label class="btn btn-default btn-day d1-sg active">
                            <input type="radio" name="San GIl" autocomplete="off" checked>18 de septiembre
                        </label>
                        <label class="btn btn-default btn-day d2-sg">
                            <input type="radio" name="Yopal" autocomplete="off">19 de septiembre
                        </label>
                        <label class="btn btn-default btn-day d3-sg">
                            <input type="radio" name="Yopal" autocomplete="off">20 de septiembre
                        </label>
                        <label class="btn btn-default btn-day d4-sg">
                            <input type="radio" name="Yopal" autocomplete="off">21 de septiembre
                        </label>
                    </div>
                </div>
                <div class="collapse dyp">
                    <div class="btn-group btn-group-justified" role="group" data-toggle="buttons">
                        <label class="btn btn-default btn-day d1-yp active">
                            <input type="radio" name="San GIl" autocomplete="off" checked>18 de septiembre
                        </label>
                        <label class="btn btn-default btn-day d2-yp">
                            <input type="radio" name="Yopal" autocomplete="off">19 de septiembre
                        </label>
                        <label class="btn btn-default btn-day d3-yp">
                            <input type="radio" name="Yopal" autocomplete="off">20 de septiembre
                        </label>
                        <label class="btn btn-default btn-day d4-yp">
                            <input type="radio" name="Yopal" autocomplete="off">21 de septiembre
                        </label>
                        <label class="btn btn-default btn-day d5-yp">
                            <input type="radio" name="Yopal" autocomplete="off">22 de septiembre
                        </label>
                    </div>
                </div>
    
                <!-- Dias -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
                    <!-- Días de San Gil -->
                    <div class="collapse dia1-sg" id="agenda">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time>4:00 pm</time>
                                        <p>
                                            <small>LABORATORIO DE REDES Y TELECOMUNICACIONES</small>
                                        </p>
                                        <p>Taller: Seguridad en redes industriales</p>
                                        <p>
                                            <strong>Ph.D Milton Quiroga Becerra</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>6:00 pm</time>
                                        <p>
                                            <strong>APERTURA DEL EVENTO</strong>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:30 pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>Experiencias del PROSAP en la escuela y laboratorio móvil de irrigación</p>
                                        <p>
                                            <strong>Msc. Lucas Eduardo Costa</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:30 pm</time>
                                        <p>
                                            <small>AUDITORIO</small>
                                        </p>
                                        <p>Ciberseguridad</p>
                                        <p>
                                            <strong>Ph.D Milton Quiroga Becerra</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:30pm - 8:45pm</time>
                                        <p>
                                            <strong>RECESO</strong>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:45pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>Agroelectrónica</p>
                                        <p>
                                            <strong>Msc. Andrés Fernando Moltoni</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:45 pm</time>
                                        <p>
                                            <small>AUDITORIO</small>
                                        </p>
                                        <p>Medidas de complejidad en software</p>
                                        <p>
                                            <strong>Ph.D José Luis Roca</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse dia2-sg" id="agenda">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time>4:00 pm</time>
                                        <p>
                                            <small>AUDITORIO MENOR</small>
                                        </p>
                                        <p><strong>Conversatorio con investigadores</strong></p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>4:00 pm</time>
                                        <p>
                                            <small>Laboratorio</small>
                                        </p>
                                        <p>Taller: Sistemas inteligentes de transporte</p>
                                        <p>
                                            <strong>Miguel Ángel Valencia</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>6:30 pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>Research experience in anaerobic of wastewater and anaerobic digestion with and special emphasis in use of rural waste</p>
                                        <p>
                                            <strong>PhD. Roberto Alves de Olivera</strong> <small>BRA</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>6:30 pm</time>
                                        <p>
                                            <small>AUDITORIO</small>
                                        </p>
                                        <p>Emprendimiento e innovacion tecnologica para los sistemas inteligentes de transporte</p>
                                        <p>
                                            <strong>Miguel Ángel Valencia</strong> <small>MEX</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:30 pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>Modelo de sostenibilidad para la soberania de comunidades vulnerables</p>
                                        <p>
                                            <strong>PhD. Marcos Algara Siller</strong> <small>MEX</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:30 pm</time>
                                        <p>
                                            <small>AUDITORIO</small>
                                        </p>
                                        <p>Contabilidad en ingenieria</p>
                                        <p>
                                            <strong>Ph.D José Luis Roca</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:30pm - 8:45pm</time>
                                        <p>
                                            <strong>RECESO</strong>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:45pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>Gestión de innovacion en ciencia y tecnología para el agro</p>
                                        <p>
                                            <strong>Msc. Lucas Eduardo Costa</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:45 pm</time>
                                        <p>
                                            <small>AUDITORIO</small>
                                        </p>
                                        <p>Agrorobótica</p>
                                        <p>
                                            <strong>Andrés Fernando Moltoni</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse dia3-sg" id="agenda">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time>6:30 pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>La seguridad agroalimentaria como alternativa de cambio.</p>
                                        <p>
                                            <strong>Ph.D Henry Reyes Pineda</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:30 pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>El proceso de diseño mecatrónico en ingeniería</p>
                                        <p>
                                            <strong>Ph.D Betsy Chaparro Rico.</strong> <small>COL - MEX</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:30 pm</time>
                                        <p>
                                            <small>AUDITORIO</small>
                                        </p>
                                        <p>Contabilidad humana en las empresas</p>
                                        <p>
                                            <strong>Msc. Manuel Fernando Gonzales</strong> <small>ECU</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:30pm - 8:45pm</time>
                                        <p>
                                            <strong>RECESO</strong>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:45pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>Diseño de sistemas de rehabilitación</p>
                                        <p>
                                            <strong>Ph.D Betsy Chaparro Rico</strong> <small>COL - MEX</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:45 pm</time>
                                        <p>
                                            <small>AUDITORIO</small>
                                        </p>
                                        <p>Mantenimiento de sistemas electroneumáticos y olehidráulicos</p>
                                        <p>
                                            <strong>Msc. Pablo Ernesto Montalvo</strong> <small>ECU</small>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse dia4-sg" id="agenda">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time>4:00 pm</time>
                                        <p>
                                            <small>Auditorio Menor</small>
                                        </p>
                                        <p>Conversatorio con investigadores</p>
                                        <p>
                                            <strong>Ph.D Milton Quiroga Becerra</strong> <small></small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>6:30 pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>Diseño de una celda combustible de hidrógeno tipo PEM como estratégia de mejoramiento ambiental</p>
                                        <p>
                                            <strong>Ph.D Henry Reyes Pineda</strong> COL<small></small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>6:30 pm</time>
                                        <p>
                                            <small>AUDITORIO</small>
                                        </p>
                                        <p>Inventario cero</p>
                                        <p>
                                            <strong>Ph.D Alberto Mora Gutierrez </strong>COL<small></small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:30 pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>La automatización industrial en el marco de la cuarta revolución industrial.</p>
                                        <p>
                                            <strong>Msc. Pablo Ernesto Montalvo</strong> <small>ECU</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:30 pm</time>
                                        <p>
                                            <small>AUDITORIO</small>
                                        </p>
                                        <p>Terotecnología</p>
                                        <p>
                                            <strong>Ph.D Alberto Mora Gutierrez</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:30pm - 8:45pm</time>
                                        <p>
                                            <strong>RECESO</strong>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:45pm</time>
                                        <p>
                                            <small>COLISEO</small>
                                        </p>
                                        <p>Formación en ingeniería para el liderazgo</p>
                                        <p>
                                            <strong>Msc. Manuel Fernando Gonzales</strong> <small>ECU</small>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                        
                    <!-- Días de Yopal -->
                    <div class="collapse dia1-yp" id="agenda">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time>6:00 pm</time>
                                        <p>
                                            <small>AUDITORIOS</small>
                                        </p>
                                        <p>APERTURA</p>
                                        <p>
                                            <strong></strong> <small></small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Modelo de sostenibilidad para la soberanía de comunidades vulnerables.</p>
                                        <p>
                                            <strong>PhD.  MARCOS ALGARA SILLER</strong> <small>MEX</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>El proceso de diseño mecatrónico en ingeniería.</p>
                                        <p>
                                            <strong>Ph.D BETSY CHAPARRO RICO</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:00 - 8:15pm</time>
                                        <p>
                                            <strong>RECESO</strong>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Diseño de una celda combustible de hidrógeno tipo PEM como estratégia de mejoramiento ambiental.</p>
                                        <p>
                                            <strong>Ph.D HENRY REYES PINEDA</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>La automatización industrial en el marco de la cuarta revolución industrial.</p>
                                        <p>
                                            <strong>Msc. PABLO ERNESTO MONTALVO</strong> <small>ECU</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>9:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Confiabilidad humana en las empresas </p>
                                        <p>
                                            <strong>Msc. MANUEL FERNANDO GONZALES</strong> <small>ECU</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>9:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>Conversatorio</p>
                                        <p>
                                            <strong></strong> <small></small>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse dia2-yp" id="agenda">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time>4:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Conversatorio con investigadores</p>
                                        <p>
                                            <strong></strong> <small></small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>La seguridad agroalimentaria como alternativa de cambio.</p>
                                        <p>
                                            <strong>Ph.D HENRY REYES PINEDA</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>Mantenimiento de sistemas electroneumáticos y olehidráulicos</p>
                                        <p>
                                            <strong>Msc. PABLO ERNESTO MONTALVO</strong> <small>ECU</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:00 - 8:15pm</time>
                                        <p>
                                            <strong>RECESO</strong>
                                        </p>
                                    </div>
                                </li>
                                
                                <li>
                                    <div>
                                        <time>8:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Terotecnología</p>
                                        <p>
                                            <strong>PhD.  ALBERTO MORA GUTIERREZ</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>Diseño de sistemas de rehabilitación.</p>
                                        <p>
                                            <strong>Ph.D BETSY CHAPARRO RICO</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>9:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Formación en  ingeniería para el liderazgo</p>
                                        <p>
                                            <strong>Msc. MANUEL FERNANDO GONZALES</strong> <small>ECU</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>9:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>Conversatorio</p>
                                        <p>
                                            <strong></strong> <small></small>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse dia3-yp" id="agenda">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time>7:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Research experience in anaerobic of wastewater and anaerobic digestion with and special emphasis in use of rural waste</p>
                                        <p>
                                            <strong>D. ROBERTO ALVES DE OLIVEIRA</strong> <small>BRA</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>Taller  Sistemas inteligentes de transporte</p>
                                        <p>
                                            <strong>Msc. MIGUEL ÁNGEL VALENCIA</strong> <small>MEX</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:00 - 8:15pm</time>
                                        <p>
                                            <strong>RECESO</strong>
                                        </p>
                                    </div>
                                </li>
                                
                                <li>
                                    <div>
                                        <time>8:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Gestión de innovación en ciencia y tecnología para el agro.</p>
                                        <p>
                                            <strong>Msc. LUCAS EDUARDO COSTA</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>Medidas de control en software</p>
                                        <p>
                                            <strong>Ph.D JOSE LUIS ROCA</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>9:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Conversatorio</p>
                                        <p>
                                            <strong></strong> <small></small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>9:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>Agrorobotica</p>
                                        <p>
                                            <strong>Msc. ANDRÉS FERNANDO MOLTONI</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse dia4-yp" id="agenda">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time>4:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Conversatorio con investigadores</p>
                                        <p>
                                            <strong></strong> <small></small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Experiencias del PROSAP en la escuela y laboratorio móvil de irrigación.</p>
                                        <p>
                                            <strong>Msc. LUCAS EDUARDO COSTA</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>7:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>Emprendimiento e innovación tecnológica para los sistemas inteligentes de transporte</p>
                                        <p>
                                            <strong>Msc. MIGUEL ÁNGEL VALENCIA</strong> <small>MEX</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:00 - 8:15pm</time>
                                        <p>
                                            <strong>RECESO</strong>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Confiabilidad en Ingeniería</p>
                                        <p>
                                            <strong>Ph.D JOSE LUIS ROCA</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:15 pm</time>
                                        <p>
                                            <small>AUDITORIO 2</small>
                                        </p>
                                        <p>Agroelectrónica</p>
                                        <p>
                                            <strong>Msc. ANDRÉS FERNANDO MOLTONI</strong> <small>ARG</small>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse dia5-yp" id="agenda">
                        <div class="timeline">
                            <ul>
                                <li>
                                    <div>
                                        <time>7:00 pm</time>
                                        <p>
                                            <small>AUDITORIO 1</small>
                                        </p>
                                        <p>Seguridad en redes industriales</p>
                                        <p>
                                            <strong>Ph.D MILTON QUIROGA BECERRA</strong> <small>COL</small>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <time>8:00</time>
                                        <p>
                                            <strong>CLAUSURA</strong>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inversión -->
<div>
    <div class="container margin-container">
        <div class="row">
            <h2 class="text-center">Inversión</h3>
            <div class="col-lg-6 col-lg-offset-3">
                <div class="col-lg-12 inversion">
                    <h3 class="text-center">Estudiantes, Egresados, Docentes de UNISANGIL y Particulares</h3>
                    <div class="col-lg-10 col-lg-offset-1 linea-horizontal"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h4 class="text-center"><strong>Con descuento: $150.000</strong></h4>
                        {{-- <h4 class="text-center">
                            <strong>$150.000</strong>
                        </h4> --}}
                        <p class="text-center">Válido hasta el 9 de septiembre de 2017.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h4 class="text-center"><strong>Inscripción: $180.000</strong></h4>
                        {{-- <h4 class="text-center">
                            <strong>$180.000</strong>
                        </h4> --}}
                        <p class="text-center">Desde el 10 de septiembre de 2017 hasta el 18 de septiembre 12:00 m.</p>
                    </div>
                </div>
            <a class="btn btn-primary pull-right" style="margin-top: 20px" href="{{ route('register') }}">Registrate aquí</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row margin-footer">
            <div class="col-lg-1 col-md-2 col-sm-3 footerleft ">
                <div><a href="http://unisangil.edu.co/"><img src="/img/logo_Unisangil_color.png" alt="Logo Unisangil" width="70px" height="100%" class="img-responsive"></a></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 footerleft">
                <p><i class="fa fa-map-pin"></i> Km 2 via San Gil - Charalá</p>
                <p><i class="fa fa-phone"></i> Teléfonos (7) 7245757 - 7246565</p>
                <p><i class="fa fa-envelope"></i><a href="mailto:ies@unisangil.edu.co" style="text-decoration:none; color: #fff"> ies@unisangil.edu.co</a></p>
                <p><i class="fa fa-globe"></i> San Gil, Santander, Colombia</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 footerleft">
                <p><i class="fa fa-map-pin"></i> Calle 7 No. 20 – 63</p>
                <p><i class="fa fa-phone"></i> Teléfonos 6324178 - 6324526</p>
                <p><i class="fa fa-envelope"></i><a href="mailto:wgomez@unisangil.edu.co" style="text-decoration:none; color: #fff"> wgomez@unisangil.edu.co</a></p>
                <p><i class="fa fa-globe"></i> Yopal, Casanare, Colombia</p>
            </div>
            <div class="col-lg-4 col-md-4 hidden-sm hidden-xs footerleft frase">
                <p> Si buscas resultados diferentes, no hagas lo mismo.</p>
            </div>
        </div>
    </div>
</footer>

@endsection