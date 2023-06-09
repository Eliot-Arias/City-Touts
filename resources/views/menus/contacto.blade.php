@extends('index')

@section('title', 'contacto')

@section('content')


    <div class="container-lg">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-center">Contactanos</h1>
            </div>
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-6 p-2" id="formulario">
                        <div class="container">
                            <h3 class="text-center mb-5 fw-semibold pb-2" id="subtitle">Enviamos tu consulta</h3>
                            <form>
                                <div class="mb-3 row">
                                    <label for="inputName" class="col-4 col-form-label">Nombres y Apellidos</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="inputName" id="inputName"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputName" class="col-4 col-form-label">E-mail</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="inputName" id="inputName"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputName" class="col-4 col-form-label">Telefono</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="inputName" id="inputName"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputName" class="col-4 col-form-label">Motivo</label>
                                    <div class="col-8">
                                        <select class="form-select form-select-lg" name="" id="">
                                            <option selected>Precios</option>
                                            <option>Paquetes</option>
                                            <option>Descuentos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputName" class="col-4 col-form-label">Mensaje</label>
                                    <div class="col-8">
                                        <textarea class="form-control" name="" id="" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="container">
                            <h3 class="text-center mb-5 fw-semibold pb-2" id="subtitle">Detalles de contacto</h3>
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                    </svg>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="fw-semibold">CORREO ELECTRONICO</h4>
                                    <p class="fs-5">rampagecopilation@gmail.com</p>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="fw-semibold">LLAMANOS</h4>
                                    <p class="fs-5">959596552</p>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="fw-semibold">WHATS APP</h4>
                                    <p class="fs-5">959596552</p>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="fw-semibold">DIRECCION</h4>
                                    <p class="fs-5">54567 Starling Pass</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
