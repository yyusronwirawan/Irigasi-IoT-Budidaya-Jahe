<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind Style --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>Bethaponik | {{ $title }}</title>
</head>

<body
    class="bg-login-balitro bg-cover bg-no-repeat relative font-sans before:absolute before:top-0 before:w-full before:h-full before:bg-black before:bg-opacity-40">
    <main class="text-center flex justify-center items-center w-full h-screen">
        <!-- card -->
        <div
            class="bg-white p-6 rounded-lg bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-30 border border-gray-100 border-opacity-20 block w-11/12 xl:w-2/5 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div>
                <h1 class="font-semibold text-3xl text-white">Register</h1>
            </div>

            <form class="mt-4" action="/register" method="post">
                @csrf
                <!--Username input-->
                <div class="relative" data-te-input-wrapper-init>
                    <input type="text" name="name" id="name" autocomplete="off" required
                        value="{{ old('name') }}"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.42rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-20 text-white focus:text-white data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        placeholder="Enter name" />
                    <label for="name"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-white text-opacity-60 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-white peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-white">Name</label>
                </div>
                @error('name')
                    <div class="flex">
                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                    </div>
                @enderror

                <!--Username input-->
                <div class="relative mt-6" data-te-input-wrapper-init>
                    <input type="text" name="username" id="username" autocomplete="off" required
                        value="{{ old('username') }}"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.42rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-20 text-white focus:text-white data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        placeholder="Enter username" />
                    <label for="username"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-white text-opacity-60 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-white peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-white">Username</label>
                </div>
                @error('username')
                    <div class="flex">
                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                    </div>
                @enderror

                <!--Password input-->
                <div class="relative mt-6" data-te-input-wrapper-init>
                    <input type="password" name="password" id="password" autocomplete="off" required
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.42rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-20 text-white focus:text-white data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        placeholder="Enter password" />
                    <label for="password"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-white text-opacity-60 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-white peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-white">Password</label>
                </div>
                @error('password')
                    <div class="flex">
                        <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                    </div>
                @enderror

                <!--Sign in button-->
                <button type="submit"
                    class="dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]] inline-block w-full rounded bg-primary mt-6 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init data-te-ripple-color="light">
                    Register
                </button>

                <!--Register link-->
                <p class="mt-6 text-center text-white dark:text-neutral-200">
                    Already registered?
                    <a href="/login"
                        class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600">Sign
                        In</a>
                </p>
            </form>
            <!-- end header -->
        </div>
    </main>
    <script src="{{ asset('../node_modules/tw-elements/dist/js/tw-elements.umd.min.js') }}"></script>
</body>

</html>
