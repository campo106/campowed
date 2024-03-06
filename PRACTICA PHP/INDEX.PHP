<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuidadores</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body>

    <div class="container">
        <header><h1>Cuidadores</h1></header>
            <form action="procesar.php" method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="Nombre" class="form-label">Nombres y Apellido:</label>
                        <input type="text" placeholder="Ingrese Nombre:" class="form-control" name="Nombre" id="Nombre" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Fecha" class="form-label">Fecha:</label>
                        <input type="date" class="form-control" name="Fecha" id="Fecha" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Ciudad" class="form-label">Ciudad:</label>
                        <input type="text" placeholder="Direccíon:" class="form-control" name="Ciudad" id="Ciudad" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="aplicarRetencion" class="form-label">Contratada por el SRI:</label>
                        <select name="aplicarRetencion" class="form-select" required>
                            <option value="" disabled selected>Seleccione:</option>
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="ValorH" class="form-label">Valor por Hora:</label>
                        <input type="number" placeholder="Ingrese Valor por Hora:" class="form-control" name="ValorH" id="ValorH" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="HorasTrabajadas" class="form-label">Horas trabajadas:</label>
                        <input type="number" placeholder="Ingrese Horas trabajadas:" class="form-control" name="Horas" id="Horas" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-info">Calcular</button>
            </form>
        
    </div>

    <header><h5>Autores: Figueroa Victor / Castillo Abel </h5></header>
    
</body>
</html>