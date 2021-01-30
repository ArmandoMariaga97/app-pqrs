<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    
    <div style="background: #16AEF8; width: 100%; border-radius: 15px;">
        <h1 align="center" style="padding: 30px; color:white;">NUEVO PQRS EN (ACTIVE PQRS)</h1>
    </div>
    <div style="background: gray; width: 100%; border-radius: 15px;">
        <div style="padding:20px; color: white;">
            <h2 align="center">DATOS INGRESADOS POR EL CLIENTE</h2>
            <hr>
            <h3> <b>Nombre:</b> {{ $info['nombre'] }}</h3>
            <h3> <b>Correo:</b> {{ $info['correo'] }} </h3>
            <h3> <b>Dirección:</b> {{ $info['direccion'] }} </h3>
            <h3> <b>Teléfono:</b> {{ $info['telefono'] }} </h3>
            <h3> <b>Ciudad:</b> {{ $info['ciudad'] }} </h3>
            @if($info['t_pqrs'] == 1)
            <h3> <b>Tipo de PQRS:</b> Derecho de petición </h3>
            @endif
            @if($info['t_pqrs'] == 2)
            <h3> <b>Tipo de PQRS:</b> Felicitación </h3>
            @endif
            @if($info['t_pqrs'] == 3)
            <h3> <b>Tipo de PQRS:</b> Petición </h3>
            @endif
            @if($info['t_pqrs'] == 4)
            <h3> <b>Tipo de PQRS:</b> Queja </h3>
            @endif
            @if($info['t_pqrs'] == 5)
            <h3> <b>Tipo de PQRS:</b> Reclamo </h3>
            @endif
            @if($info['t_pqrs'] == 6)
            <h3> <b>Tipo de PQRS:</b> Sugerencia </h3>
            @endif
            <h3> <b>Descripción PQRS:</b> {{ $info['descripcion_pqrs'] }} </h3>
        </div>
    </div>

</body>
</html>