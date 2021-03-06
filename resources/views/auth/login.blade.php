<x-guest-layout>
    
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="text-center">
            <img src="{{ URL::asset('img/TVETXRlogo.png') }}" alt="" style="width:30rem">
        </div>
    
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @if ($errors->any())
            <div class="mb-4">
                <div class="font-medium text-red-600">Whoops! Something went wrong.</div>

                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label class="block font-medium text-sm text-gray-700">
                    Email
                </label>
                <input class="block mt-1 w-full form-input rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autofocus >
            </div>

            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700">
                    Password
                </label>
                <input class="block mt-1 w-full form-input rounded-md shadow-sm" type="password" name="password" required autocomplete="current-password">
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>
            <br>
            <table style="border:none;width:100%">
                <tr>
                    <td style="border:none;">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                            Register
                        </a>
                    </td>
                    <td class="text-right" style="border:none;">
                        <button type = 'submit' class='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150'>
                            Login
                        </button>
                    </td>
                </tr>
            </table>
        </form>
        </div>
    </div>

</x-guest-layout>
