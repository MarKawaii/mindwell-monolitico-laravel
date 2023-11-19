@extends('client.layout.app')

@section('page-title')
@endsection

@section('content')
    <div class="container mt-5 mb-5">

        <div class="row justify-content-center">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Modificar Datos</h2>
                <div class="p-3 p-lg-5 border bg-white">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="nombre" class="text-black">Nombre Completo <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nombre" value="{{ $user['name'] }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="email" class="text-black">Correo </label>
                            <input type="email" class="form-control" value="{{ $user['email'] }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="direccion" class="text-black">Dirección <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="direccion" placeholder="Direccion 1212, Maipu" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="run" class="text-black">RUN </label>
                            <input type="text" class="form-control" value="{{ $user['run'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="edad" class="text-black">Edad <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="edad" required>
                        </div>
                    </div>

                    <div class="form-group row mb-5">
                        <div class="col-md-6">
                            <label for="celular" class="text-black">Celular <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="celular" placeholder="99999999" value="{{ $user['celular'] }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="text-black">Telefono Fijo</label>
                            <input type="text" class="form-control" name="telefono" placeholder="99999999" value="{{ $user['telefono'] }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-warning">Enviar</button>
                    </div>
                </div>
            </div>



        </div>
        <!-- </form> -->
    </div>
@endsection
