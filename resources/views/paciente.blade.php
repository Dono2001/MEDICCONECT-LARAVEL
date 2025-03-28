@extends('adminlte::page')

@section('title', 'Editar Paciente')

@section('content_header')
@stop

@section('content')
    <!-- Contenedor principal que cubre toda la página -->
    <div class="full-page-container">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary text-center mb-4" role="alert">
                        <h1 class="mb-0">Editar Paciente</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contenedor para el formulario de Paciente -->
        <div class="form-container">
            <div class="custom-form-box">
                <center><h4 class="mb-0">Formulario de Paciente</h4></center>
                <form action="{{ route('guardar.paciente') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $paciente->id }}">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="input" value="{{ $paciente->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="ApPat">Apellido Paterno:</label>
                        <input type="text" id="ApPat" name="ApPat" class="input" value="{{ $paciente->ApPat }}" required>
                    </div>
                    <div class="form-group">
                        <label for="ApMat">Apellido Materno:</label>
                        <input type="text" id="ApMat" name="ApMat" class="input" value="{{ $paciente->ApMat }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tele">Teléfono:</label>
                        <input type="text" id="tele" name="tele" class="input" value="{{ $paciente->tele }}" required>
                    </div>
                    @if(!$paciente->id)
                        <div class="form-group">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" id="email" name="email" class="input" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" class="input" required>
                        </div>
                    @else
                        <div class="form-group">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" id="email" name="email" class="input" value="{{ $paciente->usuario ? $paciente->usuario->email : '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" class="input">
                            <small class="form-text text-muted">Deja este campo vacío si no deseas cambiar la contraseña.</small>
                        </div>
                    @endif
                    <div class="text-center">
                        <button type="submit">Guardar</button>
                        <a href="{{ route('pacientes') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        body {
            background-color: #ffffff;
        }
        .alert-primary {
            background-color: #ffffff;
            color: black;
        }
        .full-page-container {
            display: flex;
            flex-direction: column; /* Dispone los elementos verticalmente */
            min-height: 100vh; /* Cubre toda la altura de la ventana */
            background: url('{{ asset('img/hospi.jpg') }}') no-repeat center center; /* Ruta a la imagen de fondo */
            background-size: cover; /* Asegura que la imagen cubra todo el contenedor */
            padding: 20px; /* Espacio alrededor del contenedor principal */
            box-shadow: 1px 3px 37px 18px rgba(116,219,214,1); /* Sombra */
            border-radius: 8px; /* Bordes redondeados */
        }
        .form-container {
            margin: 0 auto;
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .custom-form-box {
            background-color: #ffffff;
            color: black;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 1px 3px 37px -7px rgba(0,0,0,1);
            width: 100%;
            max-width: 600px;
        }
        .input {
            border-radius: 10px;
            outline: 2px solid #65F3E4;
            border: 0;
            background-color: #e2e2e2;
            outline-offset: 3px;
            padding: 10px 1rem;
            transition: 0.25s;
            width: 100%;
        }
        .input:focus {
            outline-offset: 5px;
            background-color: #fff;
        }
        button {
            width: 150px;
            height: 60px;
            border: 3px solid #65F3E4;
            border-radius: 45px;
            transition: all 0.3s;
            cursor: pointer;
            background: white;
            font-size: 1.2em;
            font-weight: 550;
            font-family: 'Montserrat', sans-serif;
        }
        button:hover {
            background: #65F3E4;
            color: black;
            font-size: 1.5em;
        }
        .btn-secondary {
            background: #6c757d;
            color: white;
            border: none;
        }
        .btn-secondary:hover {
            background: #5a6268;
            color: white;
        }
    </style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
