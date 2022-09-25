<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PARTESYS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-white dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <?php if(Route::has('login')): ?>
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-ligh bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">PARTESYS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Supervisor
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="../../" class="dropdown-item">Cerrar Sesión</a></li>
                            </ul>
                        </li>


                    </ul>

                </div>



            </div>
        </nav>

        <br/>
        <h1 class="text-center">Ingresar Parte de Trabajo</h1>
        <br/>


        <form style="max-width: 50%">
            <div id="cuadr" class="mb-3">
                <h3>Cuadrilla 1 - Precio Hora: $1600 - Contrato: No</h3>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlDate1">Fecha Inicio</label>
                <input type="date" class="form-control" id="exampleFormControlDate1" max="2022-09-30" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlHora1">Hora Inicio</label>
                <input type="time" class="form-control" id="exampleFormControlHora1" min="08:00" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlDate2" id="fechaFin">Fecha Fin</label>
                <input type="date" class="form-control" id="exampleFormControlDate2" max="2022-10-01" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlHora2">Hora Fin</label>
                <input type="time" class="form-control" id="exampleFormControlHora2" required>
            </div>
            <div class="mb-3">
                <h4><label>Total Parte </label></h4>
                <label id="totalParte"> $25600</label>
            </div>
            <div class="mb-3">
            <h3><label for="exampleFormControlSelect2" class="col-form-label">Elija una Cuenta</label></h3>
                <div class="input-group" style="max-width: 40%">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
                <table class="table table-hover" id="tableCuad">
                    <thead>
                    <tr>
                        <th scope="col">NroCuenta</th>
                        <th scope="col">Sector</th>
                        <th scope="col">Presupuesto</th>
                        <th scope="col">Disponible</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1253</th>
                        <td>Mantenimiento Edilicio</td>
                        <td>18000000</td>
                        <td>18000000</td>
                    </tr>
                    <tr>
                        <th scope="row">1467</th>
                        <td>Limpieza</td>
                        <td>2500000</td>
                        <td>2500000</td>
                    </tr>
                    <tr>
                        <th scope="row">18124</th>
                        <td>Mecánica Automotriz</td>
                        <td>12000000</td>
                        <td>12000000</td>
                    </tr>
                    <tr>
                        <th scope="row">2351</th>
                        <td>Comunicaciones</td>
                        <td>7000000</td>
                        <td>7000000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="mb-3">
                <h4><label class="col-form-label">TAREAS</label></h4>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="col-form-label" >Descripción</label>
                <input class="form-control" id="descTarea">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="col-form-label" >Duración Aproximada (HS)</label>
                <input type="number" class="form-control" id="durTarea">

            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-primary" id="agregarTarea">Agregar Tarea</button>
            </div>

            <div >
                <h4><label class="col-form-label">Tareas Agregadas</label></h4>
            </div>
            <div class="mb-3">
                <ul class="list-group" id="tareasAgregadas">

                </ul>
            </div>

            <br><br>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Observación</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-success" id="agregarTarea">Confirmar Parte</button>
                <button type="button" class="btn btn-danger" id="agregarTarea">Cancelar Parte</button>
            </div>


        </form>

    </div>

</div>
</div>
</div>

</div>
</div>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/es.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script type="text/javascript">


    $(document).ready(function (){

        //AGREGA TAREAS A LA LISTA
       $('#agregarTarea').click(function (){
           /* console.log($('#descTarea').val()+"-"+ $('#durTarea').val());*/
            $('#tareasAgregadas').append('<div class="input-group" id="'+$('#durTarea').val()+'"><li class="list-group-item">'+$('#descTarea').val()+" - "+ $('#durTarea').val()+'HS</li><button type="button" class="btn btn-outline-danger" id="borrarTarea">X</button></div>')

       });
       //BORRA TAREAS DE LA LISTA
        $('#tareasAgregadas').on('click','#borrarTarea', function (){
           //console.log($(this).parent());
           $(this).parent().remove();
       });

        //SELECCIONA CUADRILLA
        $('#tableCuad tbody tr').click(function() {
            $(this).addClass('bg-info').siblings().removeClass('bg-info');
        });



    });



    //
</script>


</html>
<?php /**PATH C:\xampp\htdocs\Proyectos\partesys\resources\views/parteForm.blade.php ENDPATH**/ ?>