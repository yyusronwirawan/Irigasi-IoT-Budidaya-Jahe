@extends('layouts.main')

@section('container')
    <div class="flex flex-col text-start">
        <div class="w-full flex justify-center items-center mt-4 mb-4">
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
                    <h1 class="font-extrabold text-[#353535] text-lg lg:text-[32px]">Create New Timer
                        Setting</h1>
                </div>
            </div>
        </div>

        @include('partials.alert')
    </div>

    <div class="w-full bg-white p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md">
        <form action="/admin/timer" method="post">
            @csrf
            <div class="mb-4">
                <div class="flex justify-start items-center">
                    <div class="flex flex-col justify-center items-start w-full">
                        <label for="device_id" class="text-[#353535] font-semibold">Device</label>
                        <div class="flex justify-start items-center w-full">
                            <select name="device_id" id="device_id"
                                class="ds-select ds-select-bordered bg-white text-[#353535] w-full max-w-full block mt-1">
                                <option disabled selected>Select the device</option>
                                @foreach ($devices as $device)
                                    <option value="{{ $device->id }}">{{ $device->name }}</option>
                                @endforeach
                            </select>

                            <div class="flex justify-center items-center p-1 border-none rounded-md bg-[#b2ede5] ml-4">
                                <a href="/admin/timer/create/create-device" class="stroke-current text-[#01875d]">
                                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="M4.75 12C4.75 7.99594 7.99594 4.75 12 4.75V4.75C16.0041 4.75 19.25 7.99594 19.25 12V12C19.25 16.0041 16.0041 19.25 12 19.25V19.25C7.99594 19.25 4.75 16.0041 4.75 12V12Z">
                                        </path>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M12 8.75003V15.25"></path>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" d="M15.25 12L8.75 12"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @error('device_id')
                    <small class="text-[#FF5789] mt-2 flex">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex flex-col justify-center items-start">
                    <label for="hari" class="text-[#353535] font-semibold">Hari</label>
                    <select name="hari" id="hari"
                        class="ds-select ds-select-bordered bg-white text-[#353535] w-full max-w-full block mt-1">
                        <option disabled selected>Select the day</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>
                @error('hari')
                    <small class="text-[#FF5789] mt-2 flex">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex flex-col justify-center items-start">
                    <label for="noJadwal" class="text-[#353535] font-semibold">No. Jadwal</label>
                    <select name="noJadwal" id="noJadwal"
                        class="ds-select ds-select-bordered bg-white text-[#353535] w-full max-w-full block mt-1">
                        <option disabled selected>Select the number of schedule</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
                @error('noJadwal')
                    <small class="text-[#FF5789] mt-2 flex">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex mb-4">
                <div class="flex flex-col justify-center">
                    <label for="checkSolTim1" class="text-[#353535] font-semibold">Solenoid 1</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSolTim1" onclick="checkTim()" class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_1" id="timerSol_1">
                    </label>
                </div>
                <div class="ml-6 flex flex-col justify-center">
                    <label for="checkSolTim2" class="text-[#353535] font-semibold">Solenoid 2</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSolTim2" onclick="checkTim()" class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_2" id="timerSol_2">
                    </label>
                </div>
                <div class="ml-6 flex flex-col justify-center">
                    <label for="checkSolTim3" class="text-[#353535] font-semibold">Solenoid 3</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSolTim3" onclick="checkTim()"
                            class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_3" id="timerSol_3">
                    </label>
                </div>
                <div class="ml-6 flex flex-col justify-center">
                    <label for="checkSolTim4" class="text-[#353535] font-semibold">Solenoid 4</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSolTim4" onclick="checkTim()"
                            class="ds-toggle ds-toggle-success" />
                        <input type="hidden" name="sol_4" id="timerSol_4">
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <div class="flex flex-col justify-center items-start">
                    <label for="waktuMulai" class="text-[#353535] font-semibold">Waktu Mulai</label>
                    <input type="time" name="waktuMulai" id="waktuMulai"
                        class="ds-input ds-input-bordered w-full max-w-full block text-[#353535] mt-1"
                        value="{{ old('waktuMulai') }}" required>
                </div>
                @error('waktuMulai')
                    <small class="text-[#FF5789] mt-2 flex">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex flex-col justify-center items-start">
                    <label for="durasi" class="text-[#353535] font-semibold">Durasi</label>
                    <input type="time" name="durasi" id="durasi"
                        class="ds-input ds-input-bordered w-full max-w-full block text-[#353535] mt-1"
                        value="{{ old('durasi') }}" required>
                </div>
                @error('durasi')
                    <small class="text-[#FF5789] mt-2 flex">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex flex-col justify-center items-start">
                <label for="checkStatus" class="text-[#353535] font-semibold">Status</label>
                <label class="mt-2">
                    <input type="checkbox" id="checkStatus" onclick="checkTim()" class="ds-toggle ds-toggle-success" />
                    <input type="hidden" name="status" id="status">
                </label>
            </div>
            <button type="submit"
                class="ds-btn ds-btn-sm ds-btn-primary flex border-none bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE] mt-4">Create
                setting</button>
        </form>
    </div>

    <script>
        function checkTim() {
            let checkBoxSol = document.getElementById("checkSolTim1");
            let checkBoxSol2 = document.getElementById("checkSolTim2");
            let checkBoxSol3 = document.getElementById("checkSolTim3");
            let checkBoxSol4 = document.getElementById("checkSolTim4");
            let checkBoxStatus = document.getElementById("checkStatus");

            if (checkBoxSol.checked == true) {
                document.getElementById("timerSol_1").value = 1;
            } else {
                document.getElementById("timerSol_1").value = "0";
            }

            if (checkBoxSol2.checked == true) {
                document.getElementById("timerSol_2").value = 1;
            } else {
                document.getElementById("timerSol_2").value = "0";
            }

            if (checkBoxSol3.checked == true) {
                document.getElementById("timerSol_3").value = 1;
            } else {
                document.getElementById("timerSol_3").value = "0";
            }

            if (checkBoxSol4.checked == true) {
                document.getElementById("timerSol_4").value = 1;
            } else {
                document.getElementById("timerSol_4").value = "0";
            }

            if (checkBoxStatus.checked == true) {
                document.getElementById("status").value = 1;
            } else {
                document.getElementById("status").value = "0";
            }
        }
    </script>
@endsection
