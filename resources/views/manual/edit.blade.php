@extends('layouts.main')

@section('container')
    <div class="flex flex-col text-start">
        <div class="w-full flex justify-center items-center mt-4 mb-5 md:mb-7">
            <div class="w-full flex justify-between items-center">
                <div class="flex justify-center items-center">
                    <!-- Toggler -->
                    <button data-te-sidenav-toggle-ref data-te-target="#sidenav-1"
                        class="block ds-btn ds-btn-sm ds-btn-accent border-none mr-4 px-2.5 text-gray-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 xl:hidden"
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
                    <h1 class="font-extrabold text-[#353535] text-lg lg:text-[32px]">Edit Manual Setting</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-white p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md">
        <form action="/admin/manual/{{ $setting->id }}" method="post">
            @method('put')
            @csrf
            <div>
                <div class="flex flex-col justify-center items-start">
                    <label for="device" class="text-[#353535] font-semibold">Device</label>
                    <input type="text" placeholder="Type device name" name="device" id="device"
                        oninput="myFunction()" value="{{ old('device', $setting->device) }}" autofocus required
                        class="ds-input ds-input-bordered bg-white w-full max-w-full block text-[#353535] mt-2" />
                    <input type="hidden" name="slug" id="slug" value="{{ old('slug', $setting->slug) }}"
                        class="border">
                </div>
                @error('device')
                    <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex">
                <div class="mt-4 flex flex-col justify-center items-center">
                    <label for="checkPompa" class="text-[#353535] font-semibold">Pompa</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkPompa" onclick="checkClick()"
                            {{ $setting->pompa == 1 ? 'checked' : '' }} class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="pompa" id="pompa" value="{{ $setting->pompa }}">
                    </label>
                </div>
                <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                    <label for="checkSol1" class="text-[#353535] font-semibold">Solenoid 1</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSol1" onclick="checkClick()"
                            {{ $setting->sol_1 == 1 ? 'checked' : '' }} class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_1" id="sol_1" value="{{ $setting->sol_1 }}">
                    </label>
                </div>
                <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                    <label for="checkSol2" class="text-[#353535] font-semibold">Solenoid 2</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSol2" onclick="checkClick()"
                            {{ $setting->sol_2 == 1 ? 'checked' : '' }} class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_2" id="sol_2" value="{{ $setting->sol_2 }}">
                    </label>
                </div>
                <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                    <label for="checkSol3" class="text-[#353535] font-semibold">Solenoid 3</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSol3" onclick="checkClick()"
                            {{ $setting->sol_3 == 1 ? 'checked' : '' }} class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_3" id="sol_3" value="{{ $setting->sol_3 }}">
                    </label>
                </div>
                <div class="mt-4 ml-6 flex flex-col justify-center items-center">
                    <label for="checkSol4" class="text-[#353535] font-semibold">Solenoid 4</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSol4" onclick="checkClick()"
                            {{ $setting->sol_4 == 1 ? 'checked' : '' }} class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_4" id="sol_4" value="{{ $setting->sol_4 }}">
                    </label>
                </div>
            </div>
            <button type="submit"
                class="ds-btn ds-btn-sm ds-btn-primary border-none bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE] mt-4 flex">Edit
                setting</button>
        </form>
    </div>

    <script>
        function myFunction() {
            let text = document.getElementById("device").value;
            document.getElementById("slug").value = text.toLowerCase();
        }
    </script>

    <script>
        function checkClick() {
            let checkBox = document.getElementById("checkPompa");
            let checkBox2 = document.getElementById("checkSol1");
            let checkBox3 = document.getElementById("checkSol2");
            let checkBox4 = document.getElementById("checkSol3");
            let checkBox5 = document.getElementById("checkSol4");

            if (checkBox.checked == true) {
                document.getElementById("pompa").value = 1;
            } else {
                document.getElementById("pompa").value = "0";
            }

            if (checkBox2.checked == true) {
                document.getElementById("sol_1").value = 1;
            } else {
                document.getElementById("sol_1").value = "0";
            }

            if (checkBox3.checked == true) {
                document.getElementById("sol_2").value = 1;
            } else {
                document.getElementById("sol_2").value = "0";
            }

            if (checkBox4.checked == true) {
                document.getElementById("sol_3").value = 1;
            } else {
                document.getElementById("sol_3").value = "0";
            }

            if (checkBox5.checked == true) {
                document.getElementById("sol_4").value = 1;
            } else {
                document.getElementById("sol_4").value = "0";
            }
        }
    </script>
@endsection
