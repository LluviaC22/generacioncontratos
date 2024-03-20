@extends('layouts.app')
@section('content')
<div style="background-image: url('https://plataforma.unipolidgo.edu.mx/moodle/pluginfile.php/1/theme_moove/sliderimage1/1690820854/headerl_plataforma.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; height: 100vh; margin-top: -25px; margin-bottom: -25px;">    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"style="width:400px; margin-left:180px; margin-top: 80px;" style="border:solid blue">
                    <div class="container">
                        <img src="images/unipoli.png"class="img -fluid mx-auto d-block"alt="">
                    </div>
                    <div class="text-center">
                        <h3>Sistema de Generación de Contratos</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4 mr-6">
                                    <button type="submit" class="btn" style="background-color: #0F47AD; color: #fff;">Guardar
                                    </button>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection