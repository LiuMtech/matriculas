<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registro de Estudiantes</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Registrados') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="mb-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Tipo de Documento</th>
                                        <th scope="col">Numero de Documento</th>
                                        <th scope="col">Nombre Completo</th>
                                        <th scope="col">Codigo Estudiantil</th>
                                        <th scope="col">Edad</th>
                                        <th scope="col">Género</th>
                                        <th scope="col">Fecha de Nacimiento</th>
                                        <th scope="col">Estado Civil</th>
                                        <th scope="col">Telefono Fijo</th>
                                        <th scope="col">Telefono Celular</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Ciudad</th>
                                        <th scope="col">Direccion de Residencia</th>
                                        <th scope="col">Detalles Extra</th>
                                        <th scope="col">Estrato</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registros as $estudiante)
                                        <tr>
                                            <td>{{ $estudiante->tipo_Documento }}</td>
                                            <td>{{ $estudiante->id_Usuario }}</td>
                                            <td>{{ $estudiante->nom_Usuario }}</td>
                                            <td>{{ $estudiante->id_Estudiante }}</td>
                                            <td>{{ $estudiante->edad_Usuario }}</td>
                                            <td>{{ $estudiante->genero_Usuario }}</td>
                                            <td>{{ $estudiante->fec_Nac_Usuario }}</td>
                                            <td>{{ $estudiante->est_Civil }}</td>
                                            <td>{{ $estudiante->tel_Usuario }}</td>
                                            <td>{{ $estudiante->cel_Usuario }}</td>
                                            <td>{{ $estudiante->email_Usuario }}</td>
                                            <td>{{ $estudiante->depto_Residencia }}</td>
                                            <td>{{ $estudiante->ciudad_Residencia }}</td>
                                            <td>{{ $estudiante->dir_Residencia }}</td>
                                            <td>{{ $estudiante->detalles_Residencia }}</td>
                                            <td>{{ $estudiante->estrato_Residencia }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
