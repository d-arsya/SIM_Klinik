@extends('layout.app')

@section('content')
    <div class="flex-row px-6 py-3 m-4 border-2 rounded-xl">
        <div class="flex"><b>Tambah Users</b></div>
    </div>
    <div class="flex flex-col px-6 py-3 m-4 border-2 rounded-xl">

        <form action="{{ route('masterdata.users.store') }}" method="POST">
            @csrf

            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <label for="" class="text-sm font-medium leading-6 text-gray-700">Username</label>
                <input type="text" id="j" name="name"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <label for="role" class="text-sm font-medium leading-6 text-gray-700">Role</label>
                <select id="role" name="role"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="">Pilih Role</option>
                    <option value="owner">Owner</option>
                    <option value="superadmin">Superadmin</option>
                    <option value="admin">Admin</option>
                    <option value="dokter">Dokter</option>
                </select>
            </div>

            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <label for="email" class="text-sm font-medium leading-6 text-gray-700">Email</label>
                <input type="email" id="email" name="email"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <!-- Field Password -->
                <label for="password" class="text-sm font-medium leading-6 text-gray-700">Password</label>
                <div class="relative col-span-3">
                    <input type="password" id="password" name="password"
                        class="w-full py-2 pl-3 pr-10 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        required>
                    <!-- Ikon Mata -->
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                        onclick="togglePasswordVisibility('password', 'eyeIcon1')">
                        <svg id="eyeIcon1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-4 text-gray-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm3.988-2.53A8.966 8.966 0 0121 12c-1.05 2.72-4.22 5-9 5-4.78 0-7.95-2.28-9-5a8.965 8.965 0 012.012-2.53M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </span>
                </div>
            </div>

            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <!-- Field Konfirmasi Password -->
                <label for="confirm_password" class="text-sm font-medium leading-6 text-gray-700">Konfirmasi
                    Password</label>
                <div class="relative col-span-3">
                    <input type="password" id="confirm_password" name="confirm_password"
                        class="w-full py-2 pl-3 pr-10 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        required oninput="validatePassword()">
                    <!-- Ikon Mata -->
                    <span class="absolute inset-y-0 right-0 flex items-center p-3 cursor-pointer"
                        onclick="togglePasswordVisibility('confirm_password', 'eyeIcon2')">
                        <svg id="eyeIcon2" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-4 text-gray-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm3.988-2.53A8.966 8.966 0 0121 12c-1.05 2.72-4.22 5-9 5-4.78 0-7.95-2.28-9-5a8.965 8.965 0 012.012-2.53M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </span>
                    <!-- Pesan Error -->
                    <p id="error-message" class="hidden mt-1" style="font-size: 0.7rem; color: #FF0000">Password tidak cocok.</p>
                </div>
            </div>
            <div class="flex justify-end mt-4">
            <x-button color="blue" type="submit"
                class="font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Submit</x-button>
            </div>
    </div>
    </form>
    <script>
        function togglePasswordVisibility(fieldId, iconId) {
            const field = document.getElementById(fieldId);
            const icon = document.getElementById(iconId);

            if (field.type === "password") {
                field.type = "text";
                icon.classList.add("text-blue-500");
            } else {
                field.type = "password";
                icon.classList.remove("text-blue-500");
            }
        }

        function validatePassword() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            const errorMessage = document.getElementById('error-message');

            if (confirmPassword && password !== confirmPassword) {
                errorMessage.classList.remove("hidden");
            } else {
                errorMessage.classList.add("hidden");
            }
        }
    </script>
@endsection
