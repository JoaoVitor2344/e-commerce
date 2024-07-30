<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, uszer-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Material Icons -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Vite -->
    @vite(['resources/css/painel.css'])

    <!-- Custom CSS -->
    @stack('css')

    @livewireStyles

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="row" style="height: 100vh;">
        <x-painel.sidebar/>

        <div class="col-10 mt-5">
            <div class="row mb-3">
                <div class="col-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            @if(count($breadcrumb) > 0)
                                @foreach($breadcrumb as $item)
                                    <li class="breadcrumb-item active" aria-current="page">
                                        @if(isset($item['route']))
                                            <a href="{{ route($item['route']) }}">{{ $item['text'] }}</a>
                                        @else
                                            {{ $item['text'] }}
                                        @endif
                                    </li>
                                @endforeach
                            @endif
                        </ol>
                    </nav>
                </div>
                <div class="col-6 text-end">
                    @isset($btnText)
                        @if($btnText != '')
                            <a class="d-none d-sm-inline-block btn btn-sm btn-outline-primary"
                               @isset($btnRoute)
                                   href="{{ route($btnRoute[0], $btnRoute['id']) }}"
                               @endisset
                               @isset($btnModal)
                                   data-bs-toggle="modal"
                               data-bs-target="{{ $btnModal }}"
                                @endisset>

                                {{ $btnText }}</a>
                        @endif
                    @endisset
                </div>
            </div>

            <!-- Content -->
            @yield('content')
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Vite -->
@vite(['resources/js/painel.js'])

<!-- Custom JS -->
@stack('js')

@livewireScripts
</body>
</html>
