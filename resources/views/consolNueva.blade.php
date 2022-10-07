<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-white dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand">PARTESYS</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="../consol">Consolidaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../cuentas">Cuentas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contrato">Nuevo Contrato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../informe">Nuevo Infome</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Contador
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="../.." class="dropdown-item">Cerrar Sesión</a></li>
                            </ul>
                        </li>


                    </ul>

                </div>


            </div>
        </nav>


        <br/>
        <h1 class="text-center">Nueva Consolidación</h1>
        <br/>

        <div>
            <form id="idForm" action="" method="get">

                <form>
                    <h2><label for="selectCuad" class="label-default">Seleccione una Cuadrilla</label></h2>

                    <div class="input-group" style="max-width: 40%">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-success" type="button">Buscar</button>
                    </div>

                    <table class="table table-hover" id="tableCuad">
                        <thead>
                        <tr>
                            <th scope="col">Nro</th>
                            <th scope="col">Cant Empleados</th>
                            <th scope="col">Precio Hora</th>
                            <th scope="col">Contrato</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>8</td>
                            <td>1800</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>7</td>
                            <td>1300</td>
                            <td>Si</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>4</td>
                            <td>1500</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>12</td>
                            <td>900</td>
                            <td>No</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>


                    <a class="btn btn-primary" href="nueva/detalle" role="button">Siguiente</a>


                </form>


                </br>


            </form>
        </div>
    </div>

</div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>


<script>$(document).ready(function (){
        $('#tableCuad tbody tr').click(function() {
            $(this).addClass('table-info').siblings().removeClass('table-info');
            $('#detalleConsol').html(
                "<h2>Cuadrilla Nro: 1</h2><br>" +
                "<hr>"+
                "<h3><label>Compañía1</label></h3>" +
                "<hr>"+
                "<ul>" +
                "<li><h4><label class='dropdown-toggle' data-bs-toggle='collapse' data-bs-target='#cuenta1455' aria-expanded='false' aria-controls='cuenta1455'>Cuenta: 1455</label></h4></li>"+
                "<ul>" +
                "<div class='collapse' id='cuenta1455'>" +
                "<li><label>HsNormales: $324.000</label></li>" +
                "<li><label>Hs50%: $235.000</label></li>" +
                "<li><label>Hs100%: $375.000</label></li>" +
                "<li><label>Viandas: $140.000</label></li>" +
                "<hr>" +
                "<div id='conceptos' >" +
                "<div class='input-group'><select id='selectConcep' class='form-select' aria-label='Default select example' style='max-width: 40%'>" +
                "<option selected value='0'>---</option>" +
                "<option value='Gastos de Combustible'>Gastos de Combustible</option>" +
                "<option value='Otro Gastos'>Otro Gastos</option>" +
                "</select>" +
                "<input type='number' class='form-control' placeholder='Valor'>" +
                "<button type='button' class='btn btn-sm btn-info'>Agregar Concepto Ext</button></div>" +
                "<div class='input-group'><select id='selectDesc' class='form-select' aria-label='Default select example' style='max-width: 40%'>" +
                "<option selected value='0'>---</option>" +
                "<option value='Gastos de Combustible'>Compra de Materiales</option>" +
                "<option value='Otros Descuentos'>Otros Descuentos</option>" +
                "</select>" +
                "<input type='number' class='form-control' placeholder='Valor'>" +
                "<button type='button' class='btn btn-sm btn-warning'>Aplicar Descuento</button></div>" +
                "</div>" +
                "<hr>"+
                "</div>" +
                "<li><h5><label>Total Cuenta: $1.074.000</label></h5></li></ul>" +
                "<hr>"+
                "<li><h4><label class='dropdown-toggle' data-bs-toggle='collapse' data-bs-target='#cuenta4234' aria-expanded='false' aria-controls='cuenta4234'>Cuenta: 4234</label></h4></li>" +
                "<ul>" +
                "<div class='collapse' id='cuenta4234'>" +
                "<li><label>HsNormales: $350.000</label></li>" +
                "<li><label>Hs50%: $240.000</label></li>" +
                "<li><label>Hs100%: $355.000</label></li>" +
                "<li><label>Viandas: $180.000</label></li>" +
                "<hr>" +
                "<div id='conceptos' >" +
                "<div class='input-group'><select id='selectConcep' class='form-select' aria-label='Default select example' style='max-width: 40%'>" +
                "<option selected value='0'>---</option>" +
                "<option value='Gastos de Combustible'>Gastos de Combustible</option>" +
                "<option value='Otro Gastos'>Otro Gastos</option>" +
                "</select>" +
                "<input type='number' class='form-control' placeholder='Valor'>" +
                "<button type='button' class='btn btn-sm btn-info'>Agregar Concepto Ext</button></div>" +
                "<div class='input-group'><select id='selectDesc' class='form-select' aria-label='Default select example' style='max-width: 40%'>" +
                "<option selected value='0'>---</option>" +
                "<option value='Gastos de Combustible'>Compra de Materiales</option>" +
                "<option value='Otros Descuentos'>Otros Descuentos</option>" +
                "</select>" +
                "<input type='number' class='form-control' placeholder='Valor'>" +
                "<button type='button' class='btn btn-sm btn-warning'>Aplicar Descuento</button></div>" +
                "</div>" +
                "<hr>"+
                "</div>" +
                "<li><h5><label>Total Cuenta: $1.125.000</label></h5></li></ul>" +
                "<hr>"+
                "<li><h4><label>Total Compañía: $2.199.000</label></h4></li>" +
                "</ul>" +
                "<hr>" +
                "<hr>" +
                "<h3><label>Compañía2</label></h3>" +
                "<hr>"+
                "<ul>" +
                "<li><h4><label class='dropdown-toggle' data-bs-toggle='collapse' data-bs-target='#cuenta1565' aria-expanded='false' aria-controls='cuenta1565'>Cuenta: 1565</label></h4></li>" +
                "<ul>" +
                "<div class='collapse' id='cuenta1565'>" +
                "<li><label>HsNormales: $324.000</label></li>" +
                "<li><label>Hs50%: $235.000</label></li>" +
                "<li><label>Hs100%: $375.000</label></li>" +
                "<li><label>Viandas: $140.000</label></li>" +
                "<hr>" +
                "<div id='conceptos' >" +
                "<div class='input-group'><select id='selectConcep' class='form-select' aria-label='Default select example' style='max-width: 40%'>" +
                "<option selected value='0'>---</option>" +
                "<option value='Gastos de Combustible'>Gastos de Combustible</option>" +
                "<option value='Otro Gastos'>Otro Gastos</option>" +
                "</select>" +
                "<input type='number' class='form-control' placeholder='Valor'>" +
                "<button type='button' class='btn btn-sm btn-info'>Agregar Concepto Ext</button></div>" +
                "<div class='input-group'><select id='selectDesc' class='form-select' aria-label='Default select example' style='max-width: 40%'>" +
                "<option selected value='0'>---</option>" +
                "<option value='Gastos de Combustible'>Compra de Materiales</option>" +
                "<option value='Otros Descuentos'>Otros Descuentos</option>" +
                "</select>" +
                "<input type='number' class='form-control' placeholder='Valor'>" +
                "<button type='button' class='btn btn-sm btn-warning'>Aplicar Descuento</button></div>" +
                "</div>" +
                "<hr>"+
                "</div>" +
                "<li><h5><label>Total Cuenta: $1.074.000</label></h5></li></ul>" +
                "<hr>"+
                "<li><h4><label class='dropdown-toggle' data-bs-toggle='collapse' data-bs-target='#cuenta2546' aria-expanded='false' aria-controls='cuenta2546'>Cuenta: 2546</label></h4></li>" +
                "<ul>" +
                "<div class='collapse' id='cuenta2546'>" +
                "<li><label>HsNormales: $350.000</label></li>" +
                "<li><label>Hs50%: $240.000</label></li>" +
                "<li><label>Hs100%: $355.000</label></li>" +
                "<li><label>Viandas: $180.000</label></li>" +
                "<hr>" +
                "<div id='conceptos' >" +
                "<div class='input-group'><select id='selectConcep' class='form-select' aria-label='Default select example' style='max-width: 40%'>" +
                "<option selected value='0'>---</option>" +
                "<option value='Gastos de Combustible'>Gastos de Combustible</option>" +
                "<option value='Otro Gastos'>Otro Gastos</option>" +
                "</select>" +
                "<input type='number' class='form-control' placeholder='Valor'>" +
                "<button type='button' class='btn btn-sm btn-info'>Agregar Concepto Ext</button></div>" +
                "<div class='input-group'><select id='selectDesc' class='form-select' aria-label='Default select example' style='max-width: 40%'>" +
                "<option selected value='0'>---</option>" +
                "<option value='Gastos de Combustible'>Compra de Materiales</option>" +
                "<option value='Otros Descuentos'>Otros Descuentos</option>" +
                "</select>" +
                "<input type='number' class='form-control' placeholder='Valor'>" +
                "<button type='button' class='btn btn-sm btn-warning'>Aplicar Descuento</button></div>" +
                "</div>" +
                "<hr>"+
                "</div>" +
                "<li><h5><label>Total Cuenta: $1.125.000</label></h5></li></ul>" +

                "<hr>"+
                "<li><h4><label>Total Compañía: 2.199.000</label></h4></li>" +
                "<hr>"+
                "</ul>");

        });
        $('.btn-info').click(function (){

        });
    })</script>

</html>
