<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Matricula Estudiantil</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Registrarse') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container">
                        <form action="{{ route('registros.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Numero de Cedula</label>
                                <input type="number" class="form-control" id="id_Usuario" ria-describedby="id_Usuario"
                                    name="id_Usuario" placeholder="Ingrese su Numero de Documento">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="nom_Usuario"
                                    ria-describedby="nom_Usuario" name="nom_Usuario"
                                    placeholder="Ingrese su Nombre Completo">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Codigo Estudiantil</label>
                                <input type="number" class="form-control" id="cod_Estudiantil"
                                    ria-describedby="cod_Estudiantil" name="cod_Estudiantil"
                                    placeholder="Ingrese su Numero Estudiantil">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="carrera_id" class="form-label">Carrera</label>
                                <select class="form-select" id="id_Carrera" name="id_Carrera" aria-label="Default select example">
                                    <option selected>Selecciona la carrera</option>
                                    @foreach ($carreras as $id => $nombre)
                                        <option value="{{ $id }}">{{ $nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="name" class="form-label">Fecha de Registro</label>
                                <input type="date" class="form-control" id="fec_Registro"
                                    ria-describedby="fec_Registro" name="fec_Registro"
                                    placeholder="Seleccione la Fecha Actual de Registro">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
