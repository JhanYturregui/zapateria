<!-- Header Lat -->
<div class="lat-header">
    <div class="capitalLetter">
        <p id="capitalLetter"></p>
    </div>
    <p id="txtMessageName">Hola!</p>
</div>

<!-- Body lat -->
<div class="lat-body">

        <!-- Usuarios -->
        <div class="tabs">
            <a href="#" id="showUsers">
                <i class="fas fa-user-shield"></i>Usuarios<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideUsers">
                <i class="fas fa-user-shield"></i>Usuarios<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuUsers">
            <li><a href="{{ route('index_users') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li><a href="{{ route('create_user') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Tipos de Usuario -->
        <div class="tabs">
            <a href="#" id="showUserTypes">
                <i class="fas fa-key"></i>Tipos de Usuario<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideUserTypes">
                <i class="fas fa-key"></i>Tipos de Usuario<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuUserTypes">
            <li><a href="{{ route('index_user_types') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li><a href="{{ route('create_user_type') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Personas -->
        <div class="tabs">
            <a href="#" id="showPeople">
                <i class="fas fa-users"></i>Personas<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hidePeople">
                <i class="fas fa-users"></i>Personas<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuPeople">
            <li><a href="{{ route('index_person') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li><a href="{{ route('create_person') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Tipos de Roles -->
        <div class="tabs">
            <a href="#" id="showRoles">
                <i class="fas fa-key"></i>Roles<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideRoles">
                <i class="fas fa-key"></i>Roles<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuRoles">
            <li><a href="{{ route('index_roles') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li><a href="{{ route('create_role') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Proveedores -->
        <div class="tabs">
            <a href="#" id="showProviders">
                <i class="fas fa-address-book"></i>Proveedores<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideProviders">
                <i class="fas fa-address-book"></i>Proveedores<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuProviders">
            <li><a href="#"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li><a href="#"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>
    

</div>