<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div> -->

            <label for="name" class="block text-sm font-medium text-gray-700 pt-4 pb-1">Nombre

            <input type="text" name="name" id="name" minlength="3" maxlength="30" required
            title="Ingresar nombre"
            value="{{old('name')}}"
            placeholder="Ingresar nombre de usuario"
            class="relative outline-none rounded py-3 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline mt-4">

            <!-- Email Address
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>-->

            <label for="email" class="block text-sm font-medium text-gray-700 pt-4 pb-1">Email

                <input type="email" name="email" id="email" required
                title="Ingresar email"
                value="{{old('email')}}"
                placeholder="Ingresar email"
                class="relative outline-none rounded py-3 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline mt-4">



                <!-- Telefono -->

                <label for="telefono" class="block text-sm font-medium text-gray-700 pt-4 pb-1">Teléfono

                    <input type="text" name="telefono" id="telefono" required
                    title="Ingresar telefono"
                    value="{{old('telefono')}}"
                    placeholder="Ingresar teléfono"
                    class="relative outline-none rounded py-3 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline mt-4">



             <!-- ROL -->


                <label for="rol" class="block text-sm font-medium text-gray-700 pt-4 pb-1">Roles

                <select name="rol_id"
                value="{{old('rol_id')}}"
                 class="relative outline-none rounded py-3 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline mt-4">
                @foreach($roles as $rol)
                    <option value="{{$rol->id}}"> {{ucwords($rol->nombre)}}</option>
                @endforeach

                </select>





            <!-- Password
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>-->


            <label for="password" class="block text-sm font-medium text-gray-700 pt-4 pb-1">Contraseña

                <input type="password" name="password" id="password" minlength="3" maxlength="30" required
                title="Ingresar contraseña"
                value="{{old('password')}}"
                placeholder="Ingresar contraseña"
                class="relative outline-none rounded py-3 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline mt-4">



            <!-- Confirm Password
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>-->


            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 pt-4 pb-1">Contraseña

                <input type="password" name="password_confirmation" id="password_confirmation" minlength="3" maxlength="30" required
                title="Ingresar contraseña"
                value="{{old('password_confirmation')}}"
                placeholder="Confirmar contraseña"
                class="relative outline-none rounded py-3 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline mt-4">


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4 bg-blue-700">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
