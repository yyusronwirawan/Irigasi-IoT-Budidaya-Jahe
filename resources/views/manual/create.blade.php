@extends('layouts.main')

@section('container')
    <div class="flex flex-col text-start">
        <div class="w-full flex justify-center items-center mt-4 mb-5 md:mb-7">
            <div class="w-full flex justify-between items-center">
                <div class="flex justify-center items-center">
                    <!-- Toggler -->
                    <button data-te-sidenav-toggle-ref data-te-target="#sidenav-1"
                        class="block ds-btn ds-btn-sm ds-btn-accent bg-primary hover:bg-hover-primary border-none mr-4 px-2.5 text-gray-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 xl:hidden"
                        aria-controls="#sidenav-1" aria-haspopup="true">
                        <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>

                    <!-- Judul Section -->
                    <h1 class="font-extrabold text-primary-text text-xl lg:text-[32px]">Create New Manual
                        Setting</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-white p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md">
        <form action="/admin/manual" method="post">
            @csrf
            <div>
                <div class="mb-2 text-start">
                    <label for="device" class="block mb-2 font-semibold text-primary-text">Nama Device</label>
                    <input type="text" id="device" name="device"
                        class="bg-gray-50 border border-gray-300 text-primary-text text-sm rounded-lg focus:ring-hover-primary focus:border-hover-primary block w-full p-2.5"
                        placeholder="Masukkan nama device" oninput="myFunction()" value="{{ old('device') }}" autofocus
                        required>
                    <input type="hidden" name="slug" id="slug">
                </div>
                @error('device')
                    <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                @enderror
            </div>

            <ul
                class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <label>
                            <input type="checkbox" id="checkPompa" onclick="check()" class="ds-toggle ds-toggle-success" />
                            <input type="hidden" name="pompa" id="pompa">
                        </label>
                        <label for="checkPompa"
                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pompa</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <label>
                            <input type="checkbox" id="checkSol1" onclick="check2()" class="ds-toggle ds-toggle-success" />
                            <input type="hidden" name="sol_1" id="sol_1">
                        </label>
                        <label for="checkSol1"
                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Solenoid 1</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <label>
                            <input type="checkbox" id="checkSol2" onclick="check3()" class="ds-toggle ds-toggle-success" />
                            <input type="hidden" name="sol_2" id="sol_2">
                        </label>
                        <label for="checkSol2"
                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Solenoid 2</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <label>
                            <input type="checkbox" id="checkSol3" onclick="check4()" class="ds-toggle ds-toggle-success" />
                            <input type="hidden" name="sol_3" id="sol_3">
                        </label>
                        <label for="checkSol3"
                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Solenoid 3</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <label>
                            <input type="checkbox" id="checkSol4" onclick="check5()" class="ds-toggle ds-toggle-success" />
                            <input type="hidden" name="sol_4" id="sol_4">
                        </label>
                        <label for="checkSol4"
                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Solenoid 4</label>
                    </div>
                </li>
            </ul>

            {{-- <div class="flex flex-wrap gap-x-6 gap-y-2">
                <div class="flex flex-col justify-center items-start">
                    <label for="checkPompa" class="text-[#353535] font-semibold">Pompa</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkPompa" onclick="check()" class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="pompa" id="pompa">
                    </label>
                </div>
                <div class="flex flex-col justify-center items-start">
                    <label for="checkSol1" class="text-[#353535] font-semibold">Solenoid 1</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSol1" onclick="check2()" class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_1" id="sol_1">
                    </label>
                </div>
                <div class="flex flex-col justify-center items-start">
                    <label for="checkSol2" class="text-[#353535] font-semibold">Solenoid 2</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSol2" onclick="check3()" class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_2" id="sol_2">
                    </label>
                </div>
                <div class="flex flex-col justify-center items-start">
                    <label for="checkSol3" class="text-[#353535] font-semibold">Solenoid 3</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSol3" onclick="check4()" class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_3" id="sol_3">
                    </label>
                </div>
                <div class="flex flex-col justify-center items-start">
                    <label for="checkSol4" class="text-[#353535] font-semibold">Solenoid 4</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSol4" onclick="check5()" class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_4" id="sol_4">
                    </label>
                </div>
            </div> --}}

            <button type="submit"
                class="w-full px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-hover-primary mt-2">Buat</button>
        </form>
    </div>

    <script>
        function myFunction() {
            let text = document.getElementById("device").value;
            document.getElementById("slug").value = text.toLowerCase();
        }
    </script>

    <script>
        function check() {
            let checkBox = document.getElementById("checkPompa");

            if (checkBox.checked == true) {
                document.getElementById("pompa").value = 1;
            } else {
                document.getElementById("pompa").value = "0";
            }
        }

        function check2() {
            let checkBox2 = document.getElementById("checkSol1");

            if (checkBox2.checked == true) {
                document.getElementById("sol_1").value = 1;
            } else {
                document.getElementById("sol_1").value = "0";
            }
        }

        function check3() {
            let checkBox3 = document.getElementById("checkSol2");

            if (checkBox3.checked == true) {
                document.getElementById("sol_2").value = 1;
            } else {
                document.getElementById("sol_2").value = "0";
            }
        }

        function check4() {
            let checkBox4 = document.getElementById("checkSol3");

            if (checkBox4.checked == true) {
                document.getElementById("sol_3").value = 1;
            } else {
                document.getElementById("sol_3").value = "0";
            }
        }

        function check5() {
            let checkBox5 = document.getElementById("checkSol4");

            if (checkBox5.checked == true) {
                document.getElementById("sol_4").value = 1;
            } else {
                document.getElementById("sol_4").value = "0";
            }
        }
    </script>
@endsection
