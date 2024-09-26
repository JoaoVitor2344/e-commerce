<div class="col-2 ps-0 position-fixed top-0 left-0 h-100">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark h-100">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('painel.index') }}"
                   class="nav-link {{ \Request::route()->getName() === 'painel.index' ? 'active' : '' }}"
                   aria-current="page">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    {{ __('painel.index') }}
                </a>
            </li>
            @auth
                <li class="nav-item">
                    <a href="{{ route('painel.users.index') }}"
                       class="nav-link {{ \Request::route()->getName() === 'painel.users.index' ? 'active' : '' }}"
                       aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#users"></use>
                        </svg>
                        {{ __('users') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('painel.stores.index') }}"
                       class="nav-link {{ \Request::route()->getName() === 'painel.stores.index' ? 'active' : '' }}"
                       aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#users"></use>
                        </svg>
                        {{ __('stores') }}
                    </a>
                </li>
            @endauth
        </ul>
        <hr>
        @auth
            <a href="#"
               class="d-flex align-items-center text-white text-decoration-none">
                <img src="https://placehold.co/50x50" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>{{ auth()->user()->name }}</strong>
            </a>
        @endauth
        @guest
            @include('painel.login')
            <a href="#"
               class="d-flex align-items-center text-white text-decoration-none"
               data-bs-toggle="modal"
               data-bs-target="#modalLogin">
                <img src="https://placehold.co/50x50" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>Logar como</strong>
            </a>
        @endguest
    </div>
</div>
