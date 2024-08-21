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
                    <h1 class="font-extrabold text-[#353535] text-lg lg:text-[32px]">Edit Timer Setting</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md">
        <form action="/admin/timer/edit/{{ $device->id }}/{{ $schedule->id }}" method="post">
            {{-- @method('put') --}}
            @csrf
            <div class="mb-4">
                <div class="flex flex-col justify-center items-start">
                    <label for="device_id" class="text-[#353535] font-semibold">Device</label>
                    <div class="flex flex-col justify-center items-start w-full">
                        <select name="device_id" id="device_id"
                            class="ds-select ds-select-bordered bg-white text-[#353535] w-full max-w-full block mt-1">
                            <option disabled selected>Select the device</option>
                            @foreach ($devices as $device)
                                <option value="{{ $device->id }}" {{ $device->id == $device_id ? 'selected' : '' }}>
                                    {{ $device->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @error('device_id')
                    <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex flex-col justify-center items-start">
                    <label for="hari" class="text-[#353535] font-semibold">Hari</label>
                    <select name="hari" id="hari"
                        class="ds-select ds-select-bordered bg-white text-[#353535] w-full max-w-full block mt-1"
                        id="hariSelect">
                        <option disabled selected>Select the day</option>
                        <option value="Senin" id="senin" {{ $schedule->hari == 'Senin' ? 'selected' : '' }}>Senin
                        </option>
                        <option value="Selasa" id="selasa" {{ $schedule->hari == 'Selasa' ? 'selected' : '' }}>Selasa
                        </option>
                        <option value="Rabu" id="rabu" {{ $schedule->hari == 'Rabu' ? 'selected' : '' }}>Rabu
                        </option>
                        <option value="Kamis" id="kamis" {{ $schedule->hari == 'Kamis' ? 'selected' : '' }}>Kamis
                        </option>
                        <option value="Jumat" id="jumat" {{ $schedule->hari == 'Jumat' ? 'selected' : '' }}>Jumat
                        </option>
                        <option value="Sabtu" id="sabtu" {{ $schedule->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu
                        </option>
                        <option value="Minggu" id="minggu" {{ $schedule->hari == 'Minggu' ? 'selected' : '' }}>
                            Minggu</option>
                    </select>
                </div>
                @error('hari')
                    <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex flex-col justify-center items-start">
                    <label for="noJadwal" class="text-[#353535] font-semibold">No. Jadwal</label>
                    <select name="noJadwal" id="noJadwal"
                        class="ds-select ds-select-bordered bg-white text-[#353535] w-full max-w-full block mt-1">
                        <option disabled selected>Select the number of schedule</option>
                        <option value="1" {{ $schedule->noJadwal == '1' ? 'selected' : '' }}>1
                        </option>
                        <option value="2" {{ $schedule->noJadwal == '2' ? 'selected' : '' }}>2
                        </option>
                        <option value="3" {{ $schedule->noJadwal == '3' ? 'selected' : '' }}>3
                        </option>
                        <option value="4" {{ $schedule->noJadwal == '4' ? 'selected' : '' }}>4
                        </option>
                        <option value="5" {{ $schedule->noJadwal == '5' ? 'selected' : '' }}>5
                        </option>
                        <option value="6" {{ $schedule->noJadwal == '6' ? 'selected' : '' }}>6
                        </option>
                        <option value="7" {{ $schedule->noJadwal == '7' ? 'selected' : '' }}>7
                        </option>
                    </select>
                </div>
                @error('noJadwal')
                    <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex mb-4">
                <div class="flex flex-col justify-center">
                    <label for="checkSolTimUp1" class="text-[#353535] font-semibold">Solenoid 1</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSolTimUp1" class="ds-toggle ds-toggle-success"
                            onclick="checkClick3()" {{ $schedule->sol_1 == 1 ? 'checked' : '' }}>
                        <input type="hidden" name="sol_1" id="timSolUp1" value="{{ $schedule->sol_1 }}">
                    </label>
                </div>
                <div class="ml-6 flex flex-col justify-center">
                    <label for="checkSolTimUp2" class="text-[#353535] font-semibold">Solenoid 2</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSolTimUp2" class="ds-toggle ds-toggle-success"
                            onclick="checkClick3()" {{ $schedule->sol_2 == 1 ? 'checked' : '' }} />
                        <input type="hidden" name="sol_2" id="timSolUp2" value="{{ $schedule->sol_2 }}">
                    </label>
                </div>
                <div class="ml-6 flex flex-col justify-center">
                    <label for="checkSolTimUp3" class="text-[#353535] font-semibold">Solenoid
                        3</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSolTimUp3" class="ds-toggle ds-toggle-success"
                            onclick="checkClick3()" {{ $schedule->sol_3 == 1 ? 'checked' : '' }} />
                        <input type="hidden" name="sol_3" id="timSolUp3"value="{{ $schedule->sol_3 }}">
                    </label>
                </div>
                <div class="ml-6 flex flex-col justify-center">
                    <label for="checkSolTimUp4" class="text-[#353535] font-semibold">Solenoid
                        4</label>
                    <label class="mt-2">
                        <input type="checkbox" id="checkSolTimUp4" class="ds-toggle ds-toggle-success"
                            onclick="checkClick3()" {{ $schedule->sol_4 == 1 ? 'checked' : '' }} />
                        <input type="hidden" name="sol_4" id="timSolUp4" value="{{ $schedule->sol_4 }}">
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <div class="flex flex-col justify-center items-start">
                    <label for="waktuMulai" class="text-[#353535] font-semibold">Waktu Mulai</label>
                    <input type="time" name="waktuMulai" id="waktuMulai"
                        class="ds-input ds-input-bordered w-full max-w-full block text-[#353535] mt-1"
                        value="{{ old('waktuMulai', "$schedule->jam:$schedule->menit") }}" required>
                </div>
                @error('waktuMulai')
                    <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4">
                <div class="flex flex-col justify-center items-start">
                    <label for="durasi" class="text-[#353535] font-semibold">Durasi</label>
                    <input type="time" name="durasi" id="durasi"
                        class="ds-input ds-input-bordered w-full max-w-full block text-[#353535] mt-1"
                        value="{{ old('durasi', "$schedule->durasiMenit:$schedule->durasiDetik") }}" required>
                </div>
                @error('durasi')
                    <small class="text-[#FF5789] mt-2">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex flex-col justify-center items-start">
                <label for="checkStatusUp" class="text-[#353535] font-semibold">Status</label>
                <label class="mt-2">
                    <input type="checkbox" id="checkStatusUp" onclick="checkClick3()"
                        class="ds-toggle ds-toggle-success" {{ $schedule->status == 1 ? 'checked' : '' }} />
                    <input type="hidden" name="status" id="statusUp" value="{{ $schedule->status }}">
                </label>
            </div>

            <button type="submit"
                class="ds-btn ds-btn-sm ds-btn-primary flex border-none bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE] mt-4">Edit
                setting</button>
        </form>
    </div>

    <script>
        function myFunction3() {
            let text = document.getElementById("device").value;
            document.getElementById("slug").value = text.toLowerCase();
        }
    </script>

    <script>
        function checkClick3() {
            let checkBoxTimUp = document.getElementById("checkSolTimUp1");
            let checkBoxTimUp2 = document.getElementById("checkSolTimUp2");
            let checkBoxTimUp3 = document.getElementById("checkSolTimUp3");
            let checkBoxTimUp4 = document.getElementById("checkSolTimUp4");
            let checkBoxStatusUp = document.getElementById("checkStatusUp");

            if (checkBoxTimUp.checked == true) {
                document.getElementById("timSolUp1").value = 1;
            } else {
                document.getElementById("timSolUp1").value = "0";
            }

            if (checkBoxTimUp2.checked == true) {
                document.getElementById("timSolUp2").value = 1;
            } else {
                document.getElementById("timSolUp2").value = "0";
            }

            if (checkBoxTimUp3.checked == true) {
                document.getElementById("timSolUp3").value = 1;
            } else {
                document.getElementById("timSolUp3").value = "0";
            }

            if (checkBoxTimUp4.checked == true) {
                document.getElementById("timSolUp4").value = 1;
            } else {
                document.getElementById("timSolUp4").value = "0";
            }

            if (checkBoxStatusUp.checked == true) {
                document.getElementById("statusUp").value = 1;
            } else {
                document.getElementById("statusUp").value = "0";
            }
        }
    </script>
@endsection
