<header>
    <div class="py-5 mb-5 flex justify-end items-center">
        <!-- Foto Profil di Pojok Kanan Atas -->
        <nav class="navbar flex items-center space-x-4">
            <!-- Avatar Foto Profil -->
            <button type="button" class="flex items-center focus:outline-none" id="profile-menu-button" aria-expanded="false" data-dropdown-toggle="profile-menu">
                <img class="w-9 h-9 rounded-full border border-1 border-greenProfile" src="img/profile.png" alt="Foto Profil">
            </button>

            <!-- Dropdown Logout -->
            <div id="profile-menu" class="hidden z-10 w-20 border border-1 bg-white rounded divide-y divide-gray-100">
                <ul class="py-1 text-sm text-gray-700" aria-labelledby="profile-menu-button">
                    <li>
                        <a class="dropdown-item block px-4 py-2 hover:bg-gray-100" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>