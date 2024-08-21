"use client";

import { router } from "@inertiajs/react";
import { Button, Label, Select, TextInput, ToggleSwitch } from "flowbite-react";
import { useState } from "react";
import { toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

const EditForm = (props) => {
    const { timer, dataDevice } = props;

    const [device, setDevice] = useState(timer.device.id);
    const [hari, setHari] = useState(timer.hari);
    const [noJadwal, setNoJadwal] = useState(timer.noJadwal);
    const [waktu, setWaktu] = useState(`${timer.jam}:${timer.menit}`);
    const [durasiJam, setDurasiJam] = useState(parseInt(timer.durasiJam));
    const [durasiMenit, setDurasiMenit] = useState(parseInt(timer.durasiMenit));
    const [durasiDetik, setDurasiDetik] = useState(parseInt(timer.durasiDetik));
    const [sol_1, setSol1] = useState(timer.sol_1 == 1 ? true : false);
    const [sol_2, setSol2] = useState(timer.sol_2 == 1 ? true : false);
    const [sol_3, setSol3] = useState(timer.sol_3 == 1 ? true : false);
    const [sol_4, setSol4] = useState(timer.sol_4 == 1 ? true : false);
    const [status, setStatus] = useState(timer.status == 1 ? true : false);

    const handleNotifUpdateTimer = () => toast.success("Data berhasil diupdate");

    const handleSubmit = () => {
        const data = {
            device,
            hari,
            noJadwal,
            waktu,
            durasiJam,
            durasiMenit,
            durasiDetik,
            sol_1,
            sol_2,
            sol_3,
            sol_4,
            status
        };
        router.put(route("update.timer", {id: timer.id}), data);
    };

    const handleDisabledButton = () => {
        if (
            durasiMenit === "" ||
            durasiDetik === "" ||
            waktu === ""
        ) {
            return true;
        }
    };

    return (
        <form className="flex flex-col space-y-3">
            <div>
                <div className="mb-2 block">
                    <Label htmlFor="device" value="Device" />
                </div>
                <Select
                    id="device"
                    required
                    onChange={(device) => setDevice(device.target.value)}
                    defaultValue={timer.device.name}
                    disabled
                >
                    <option value="disabled" disabled>
                        Pilih device yang diinginkan
                    </option>
                    {dataDevice && dataDevice.length > 0 ? (
                        dataDevice.map((device, id) => (
                            <option key={id} value={device.id}>
                                {device.name}
                            </option>
                        ))
                    ) : (
                        <option value="null">Device tidak ditemukan</option>
                    )}
                </Select>
            </div>
            <div>
                <div className="mb-2 block">
                    <Label htmlFor="hari" value="Hari" />
                </div>
                <Select
                    id="hari"
                    required
                    onChange={(hari) => setHari(hari.target.value)}
                    defaultValue={timer.hari}
                    disabled
                >
                    <option value="disabled" disabled>
                        Pilih hari yang diinginkan
                    </option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </Select>
            </div>
            <div>
                <div className="mb-2 block">
                    <Label htmlFor="noJadwal" value="No. Jadwal" />
                </div>
                <Select
                    id="noJadwal"
                    required
                    onChange={(noJadwal) => setNoJadwal(noJadwal.target.value)}
                    defaultValue={timer.noJadwal}
                    disabled
                >
                    <option value="disabled" disabled>
                        Pilih no jadwal yang diinginkan
                    </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </Select>
            </div>
            <div>
                <div className="mb-2 block">
                    <Label htmlFor="waktu" value="Waktu Mulai" />
                </div>
                <TextInput
                    id="waktu"
                    type="time"
                    value={`${timer.jam}:${timer.menit}`}
                    onChange={(waktu) => setWaktu(waktu.target.value)}
                    placeholder="Masukkan waktu mulai"
                    required
                />
            </div>
            <div>
                <div className="mb-2 block">
                    <Label htmlFor="durasiJam" value="Durasi dalam Jam" />
                </div>
                <TextInput
                    id="durasiJam"
                    type="number"
                    value={durasiJam}
                    onChange={(durasiJam) =>
                        setDurasiJam(durasiJam.target.value)
                    }
                    placeholder="0-24"
                    required
                />
            </div>
            <div>
                <div className="mb-2 block">
                    <Label htmlFor="durasiMenit" value="Durasi dalam Menit" />
                </div>
                <TextInput
                    id="durasiMenit"
                    type="number"
                    value={durasiMenit}
                    onChange={(durasiMenit) =>
                        setDurasiMenit(durasiMenit.target.value)
                    }
                    placeholder="0-60"
                    required
                />
            </div>
            <div>
                <div className="mb-2 block">
                    <Label htmlFor="durasiDetik" value="Durasi dalam Detik" />
                </div>
                <TextInput
                    id="durasiDetik"
                    type="number"
                    value={durasiDetik}
                    onChange={(durasiDetik) =>
                        setDurasiDetik(durasiDetik.target.value)
                    }
                    placeholder="0-60"
                    required
                />
            </div>
            <div className="flex flex-col gap-y-4">
                <ToggleSwitch
                    checked={sol_1}
                    label="Solenoid 1"
                    onChange={setSol1}
                />
                <ToggleSwitch
                    checked={sol_2}
                    label="Solenoid 2"
                    onChange={setSol2}
                />
                <ToggleSwitch
                    checked={sol_3}
                    label="Solenoid 3"
                    onChange={setSol3}
                />
                <ToggleSwitch
                    checked={sol_4}
                    label="Solenoid 4"
                    onChange={setSol4}
                />
                <ToggleSwitch
                    checked={status}
                    label="Status"
                    onChange={setStatus}
                />
            </div>
            <Button
                onClick={() => {
                    handleSubmit();
                    handleNotifUpdateTimer();
                }}
                disabled={handleDisabledButton()}
                className="w-full bg-primary hover:bg-primary-hover focus:ring-primary-hover enabled:hover:bg-primary-focus focus:bg-primary-focus"
            >
                Edit
            </Button>
        </form>
    );
};
export default EditForm;
