@extends('index')

@section('title', 'tips')

@section('content')

    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5 text-center">
                <h1 class="display-5 fw-bold ">Tips de Viaje para tus proximas aventuras</h1>
                <p class="fs-4">Aqui te dejamos 10 tips de viaje, sobre seguridad, armado de itinerario, equipaje y más,
                    son esenciales para tener un buen viaje.</p>
            </div>
        </div>
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        1. ¿Mochila o valija?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        Esta suele ser la primera pregunta que surge al armar el equipaje. Por experiencia personal, creo
                        que <b>lo más cómodo para viajes largo</b>s, en los que te estarás moviendo frecuentemente, <b>es la
                            mochila</b>.
                        Claro que si tu físico lo permite.
                        La valija tiene la gran ventaja de que no tenés que cargar todo el peso en tu espalda, pero solo es
                        cómoda cuando nos movemos por terrenos lisos, como aeropuertos o veredas en muy buen estado, pero al
                        más mínimo desnivel u obstáculo, las ruedas se traban y pueden romperse. Y cargar una valija es
                        mucho más incómodo que una mochila.
                        Más sobre este tema en el artículo sobre Cómo elegir una mochila de viaje. Y también te recomiendo
                        los consejos sobre el equipaje de mano.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        2. Qué llevar en la mochila
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Lo primero que tenés que recordar es que <b>todo lo que pongas en la mochila tendrás que
                            cargarlo</b>, así
                        que antes de agregar cosas “por las dudas”, primero pensá en tu salud física.

                        Qué llevar en la mochila dependerá mucho del tipo de viaje que harás. Por ejemplo, si te conviene
                        llevar equipamiento de camping porque pasarás bastante tiempo haciendo trekkings, el tipo de ropa,
                        etc.

                        A medida que pasen los días irás viendo qué es mejor dejar en el camino porque no lo usas y qué
                        agregar. Un botiquín con lo básico es importante, pero tampoco exageres, porque cualquier cosa que
                        te falte seguramente podrás conseguirla en alguno de los destinos a los que vayas.

                        No dejes de leer estos consejos para viajar ligero y sobre cómo hacer la mochila para un viaje.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        3. Qué documentos llevar a un viaje
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Esto es lo más importante a saber antes de salir de viaje. Averiguá bien <b>qué requisitos de
                            ingreso
                            te pide cada uno de los países</b> a los que pretendés viajar, ya que varían de país a país y
                        dependiendo de tu nacionalidad.

                        Además del pasaporte -que es lo que más debés cuidar-, es posible que necesites un visado, alguna
                        vacuna obligatoria, seguro de viaje, y también deberás saber el tiempo máximo de estadía que te
                        permiten.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        4. Sobre tu pasaporte
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Como dije, <b>el pasaporte es el documento de viaje más importante</b> que tenés, por eso nunca,
                        NUNCA, lo
                        pierdas de vista.

                        Una de las cosas a tener en cuenta es la vigencia que tiene: generalmente los países piden que a tu
                        pasaporte le queden al menos 6 meses antes de vencer al momento de ingresar a su territorio, así que
                        antes de salir de viaje fijate si no te conviene renovarlo ya que hacerlo en otro país no siempre es
                        posible, o resulta mucho más costoso que en el tuyo.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        5. Llevá una mochila chica
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Además de la mochila que lleves en la espalda, siempre recomiendo <b>
                            llevar como equipaje de mano una
                            mochila pequeña
                        </b> (de unos 25 – 35 litros).

                        Esta mochila es en la que <b>llevarás tus cosas más valiosas</b> (documentos) y costosas
                        (tecnología), ya
                        que la tendrás siempre encima. Al despachar tu mochila grande cuando viajes en avión/bus/tren, no
                        dejes nada de valor ya que los robos son bastante comunes en varias partes del mundo.

                        También es la que irá siempre con vos al salir a recorrer, cuando dejes la mochila grande en tu
                        alojamiento.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        6. También llevá un candado
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Alugnos de los alojamiento baratos muchas veces las puertas de las habitaciones no tienen llave.

                        Además, también es útil tener un candado para utilizar los lockers de los hostels, o si acampás para
                        dejar cerrada tu carpa cuando no estás en ella.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        7. Confiá, pero con precaución
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Después de un tiempo viajando te darás cuenta de que los mejores recuerdos de cada lugar no te los
                        dejan los atractivos turísticos, sino la gente que vas conociendo. Estar abierto a conocer gente,
                        compartiendo tu cultura y aprendiendo de la de ellos, es lo que hace enriquecedor a un viaje.

                        Pero también es importante estar <b>atento para no caer en las típicas estafas</b> que suelen
                        suceder en
                        los lugares más turísticos.

                        Básicamente, en los destinos más populares hay mucha gente queriendo aprovecharse de quien está
                        relajado paseando.

                        No desconfíes de todos porque te cerrarás en tu propia burbuja, pero <b>
                            utiliza tu intuición para
                            distinguir entre quienes tienen intenciones sinceras y quienes quieren sacar ventaja.
                        </b>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        8. Viaja asegurado
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        En algunos casos, el seguro de viaje es un requisito de entrada a ciertos países, pero aunque no lo
                        sea, es importantísimo estar asegurado al viajar, tanto por tu seguridad física como por tu
                        tranquilidad mental.

                        Es muy probable que no lo utilices, pero en caso de que tengas un accidente o te pierdan el equipaje
                        en un vuelo, tendrás a alguien para contactarte y te ayude en ese momento.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        9. La importancia de ser flexible
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Aprovechar al máximo el tiempo que estaba en cada destino, pensando que eso significaba ir a
                        la mayor cantidad de lugares posibles en el tiempo que tenía. Pero los viajes están llenos de
                        situaciones imprevistas, en especial cuando lo hacemos por lugares donde la vida transcurre a un
                        ritmo más relajado.

                        Ya sea porque el bus no salió en el horario que esperabas y perdiste una conexión, porque el clima
                        te impidió hacer lo que imaginabas, porque te enfermaste, o por la situación que sea, no todo saldrá
                        como lo planificaste cuando estabas sentado en tu casa, por eso es esencial ser flexibles, dejando
                        días libres para permitirte cambios de planes.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        10. No necesitar ir a donde van todos
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Este tip de viaje, es para entender que no hay destinos
                        “imperdibles”, esos que hay que ver sí o sí, porque no son nesesariamente los que mas disfrutaras.

                        Por un lado, porque suelen estar muy masificados turísticamente, con todos los perjuicios que esto
                        trae; y por el otro, porque los lugares que el turismo ignora son los más auténticos, donde la gente
                        tiende a ser más abierta y hospitalaria.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
