<div class="position-sticky pt-3">
    <div style="padding-left: 10px;">
        <small><strong>Usuario: </strong>{{Auth::user()->name}}</small>
        <br>
        <small><strong>Rol: </strong>{{Auth::user()->rol}}</small>
    </div>
    @if (Auth::user()->rol == 'Administrador')
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('dashboard')}}">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('categories.index')}}">
                <span data-feather="file" class="align-text-bottom"></span>
                Categorías
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('posts.index')}}">
                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                Posts
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="users" class="align-text-bottom"></span>
                Usuarios
            </a>
        </li>
    </ul>
    @else
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{route('posts.index')}}">
                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                Posts
            </a>
        </li>
    </ul>
    @endif
</div>