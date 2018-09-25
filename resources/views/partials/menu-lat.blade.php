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
        <div class="tabs" id="tabUsers">
            <a href="#" id="showUsers">
                <i class="fas fa-user-shield"></i>Usuarios<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideUsers">
                <i class="fas fa-user-shield"></i>Usuarios<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuUsers">
            <li class="options" id="indexUser"><a href="{{ route('index_users') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li class="options" id="createUser"><a href="{{ route('create_user') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Tipos de Usuario -->
        <div class="tabs" id="tabUserTypes">
            <a href="#" id="showUserTypes">
                <i class="fas fa-key"></i>Tipos de Usuario<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideUserTypes">
                <i class="fas fa-key"></i>Tipos de Usuario<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuUserTypes">
            <li class="options" id="indexUserType"><a href="{{ route('index_user_types') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li class="options" id="createUserType"><a href="{{ route('create_user_type') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Personas -->
        <div class="tabs" id="tabPeople">
            <a href="#" id="showPeople">
                <i class="fas fa-users"></i>Personas<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hidePeople">
                <i class="fas fa-users"></i>Personas<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuPeople">
            <li class="options" id="indexPerson"><a href="{{ route('index_person') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li class="options" id="createPerson"><a href="{{ route('create_person') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Roles -->
        <div class="tabs" id="tabRoles">
            <a href="#" id="showRoles">
                <i class="fas fa-registered"></i>Roles<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideRoles">
                <i class="fas fa-registered"></i>Roles<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuRoles">
            <li class="options" id="indexRole"><a href="{{ route('index_roles') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li class="options" id="createRole"><a href="{{ route('create_role') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Tallas -->
        <div class="tabs" id="tabSizes">
            <a href="#" id="showSizes">
                <i class="fas fa-ruler-horizontal"></i>Tallas<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideSizes">
                <i class="fas fa-ruler-horizontal"></i>Tallas<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuSizes">
            <li class="options" id="indexSize"><a href="{{ route('index_sizes') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li class="options" id="createSize"><a href="{{ route('create_size') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Marcas -->
        <div class="tabs" id="tabBrands">
            <a href="#" id="showBrands">
                <i class="fab fa-bandcamp"></i>Marcas<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideBrands">
                <i class="fab fa-bandcamp"></i>Marcas<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuBrands">
            <li class="options" id="indexBrand"><a href="{{ route('index_brands') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li class="options" id="createBrand"><a href="{{ route('create_brand') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Modelos -->
        <div class="tabs" id="tabModels">
            <a href="#" id="showModels">
                <i class="fab fa-bandcamp"></i>Modelos<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideModels">
                <i class="fab fa-bandcamp"></i>Modelos<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuModels">
            <li class="options" id="indexModel"><a href="{{ route('index_models') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li class="options" id="createModel"><a href="{{ route('create_model') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Colores -->
        <div class="tabs" id="tabColors">
            <a href="#" id="showColors">
                <i class="fab fa-bandcamp"></i>Colores<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideColors">
                <i class="fab fa-bandcamp"></i>Colores<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuColors">
            <li class="options" id="indexColor"><a href="{{ route('index_colors') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li class="options" id="createColor"><a href="{{ route('create_color') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Lineas -->
        <div class="tabs" id="tabLines">
            <a href="#" id="showLines">
                <i class="fab fa-bandcamp"></i>Líneas<i class="fas fa-sort-down"></i>
            </a>
            <a href="#" id="hideLines">
                <i class="fab fa-bandcamp"></i>Líneas<i class="fas fa-sort-up"></i>
            </a>
        </div>
        <ul id="menuLines">
            <li class="options" id="indexLine"><a href="{{ route('index_lines') }}"><i class="fas fa-list-ol"></i>Lista</a></li>
            <li class="options" id="createLine"><a href="{{ route('create_line') }}"><i class="fas fa-plus-circle"></i>Crear</a></li>
        </ul>

        <!-- Proveedores -->
        <!--<div class="tabs">
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
        </ul>-->
    

</div>