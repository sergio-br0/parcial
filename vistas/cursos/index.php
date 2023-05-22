<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Info_cursos</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Registro de cursos inpartidos <br> II Curso de Informatica y Ciberdefensa</h1>
        <div class="row justify-content-center">
            <form action="/crud/controladores/cursos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_nombre">Nombre del cursos</label>
                        <input type="text" name="cursos_nombre" id="cursos_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_cantidad_per">cantidad de periodos </label>
                        <input type="number" name="cursos_cantidad_per" id="cursos_cantidad_per" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_fase">Fase en la que se impartio</label>
                        <input type="text" name="cursos_fase" id="cursos_fase" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_instructor">Nombre del instructor</label>
                        <input type="text" name="cursos_instructor" id="cursos_instructor" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cursos_creditos">Creditos correspondientes al curso</label>
                        <input type="number" name="cursos_creditos" id="cursos_creditos" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>