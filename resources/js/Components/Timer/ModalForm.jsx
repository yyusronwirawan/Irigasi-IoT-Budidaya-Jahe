"use client";

import { toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import { router } from "@inertiajs/react";
import { Button, Label, Select, Modal, TextInput, ToggleSwitch } from "flowbite-react";
import { useState } from "react";

const ModalForm = (props) => {
    const { dataDevice, dataTimer } = props;

    const toastNotifCreate = new Promise((resolve) =>
        setTimeout(() => resolve("Pengaturan berhasil ditambahkan"), 1000)
    );

    const [openModal, setOpenModal] = useState(false);
    const [device, setDevice] = useState("");
    const [hari, setHari] = useState("");
    const [noJadwal, setNoJadwal] = useState("");
    const [waktu, setWaktu] = useState("");
    const [durasiJam, setDurasiJam] = useState("");
    const [durasiMenit, setDurasiMenit] = useState("");
    const [durasiDetik, setDurasiDetik] = useState("");
    const [sol_1, setSol1] = useState(false);
    const [sol_2, setSol2] = useState(false);
    const [sol_3, setSol3] = useState(false);
    const [sol_4, setSol4] = useState(false);
    const [status, setStatus] = useState(false);

    const handleSubmit = () => {
        const data = { device, hari, noJadwal, waktu, durasiJam, durasiMenit, durasiDetik, sol_1, sol_2, sol_3, sol_4, status };
        router.post(route("store.timer"), data);
        toast.promise(toastNotifCreate, {
            pending: {
                render() {
                    return "Loading";
                },
                icon: "🚀",
            },
            success: {
                render({ data }) {
                    return data;
                },
                icon: "🟢",
            },
            error: {
                render({ data }) {
                    return <MyErrorComponent message={data.message} />;
                },
            },
        });
        setDevice(dataDevice[0].name);
        setHari("Senin");
        setNoJadwal("1");
        setWaktu("");
        setDurasiJam("");
        setDurasiMenit("");
        setDurasiDetik("");
        setSol1(false);
        setSol2(false);
        setSol3(false);
        setSol4(false);
        setStatus(false);
    };

    const handleDisabledButton = () => {
        let sameDevice, sameDay, sameNoJadwal;

        if (device === "" || hari === "" || noJadwal === "" || durasiJam === "" || durasiMenit === "" || durasiDetik === "" || waktu === "") {
            return true;
        }

        dataTimer.map((timer) => {
            if (
                timer.hari == hari &&
                timer.noJadwal == noJadwal &&
                timer.device.id == device
            ) {
                sameDay = timer.hari;
                sameDevice = timer.device.id;
                sameNoJadwal = timer.noJadwal;
            } else if (timer.device.id == device && timer.noJadwal == noJadwal) {
                sameNoJadwal = timer.noJadwal;
                sameDevice = timer.device.id;
            }
        });

        if (device == sameDevice && noJadwal == sameNoJadwal && hari == sameDay) {
            return true;
        } else if (device == sameDevice && noJadwal == sameNoJadwal) {
            return true;
        } else {
            return false;
        }
    };

    return (
        <>
            <Button
                className="bg-primary hover:bg-primary-hover focus:ring-primary-hover enabled:hover:bg-primary-focus"
                onClick={() => setOpenModal(true)}
            >
                Tambah
            </Button>

            <Modal
                dismissible
                show={openModal}
                onClose={() => setOpenModal(false)}
                popup
            >
                <Modal.Header />
                <Modal.Body>
                    <div className="space-y-3">
                        <h3 className="text-xl font-medium text-gray-900 dark:text-white">
                            Tambah Pengaturan Timer
                        </h3>
                        <div>
                            <div className="mb-2 block">
                                <Label htmlFor="device" value="Device" />
                            </div>
                            <Select
                                id="device"
                                required
                                onChange={(device) =>
                                    setDevice(device.target.value)
                                }
                                defaultValue="disabled"
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
                                    <option value="">
                                        Device tidak ditemukan
                                    </option>
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
                                defaultValue="disabled"
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
                                onChange={(noJadwal) =>
                                    setNoJadwal(noJadwal.target.value)
                                }
                                defaultValue="disabled"
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
                                value={waktu}
                                onChange={(waktu) =>
                                    setWaktu(waktu.target.value)
                                }
                                placeholder="Masukkan waktu mulai"
                                required
                            />
                        </div>
                        <div>
                            <div className="mb-2 block">
                                <Label
                                    htmlFor="durasiJam"
                                    value="Durasi dalam Jam"
                                />
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
                                <Label
                                    htmlFor="durasiMenit"
                                    value="Durasi dalam Menit"
                                />
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
                                <Label
                                    htmlFor="durasiDetik"
                                    value="Durasi dalam Detik"
                                />
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
                        <div className="w-full">
                            <Button
                                onClick={() => handleSubmit()}
                                disabled={handleDisabledButton()}
                                className="w-full bg-primary hover:bg-primary-hover focus:ring-primary-hover enabled:hover:bg-primary-focus focus:bg-primary-focus"
                            >
                                Tambah
                            </Button>
                        </div>
                    </div>
                </Modal.Body>
            </Modal>
        </>
    );
};
export default ModalForm;
