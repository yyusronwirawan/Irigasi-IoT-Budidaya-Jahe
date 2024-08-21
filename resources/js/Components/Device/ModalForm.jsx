"use client";

import { toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import { router } from "@inertiajs/react";
import {
    Button,
    Label,
    Modal,
    TextInput,
} from "flowbite-react";
import { useState } from "react";

const ModalForm = (props) => {
    const {dataDevice} = props;
    const [openModal, setOpenModal] = useState(false);
    const [device, setDevice] = useState("");

    const toastNotifCreate = new Promise((resolve) =>
        setTimeout(() => resolve("Device berhasil ditambahkan"), 1000)
    );

    const handleSubmit = () => {
        const data = {device};
        router.post(route("device.store"), data);
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
        setDevice("");
    };

    const handleDisabledButton = () => {
        let sameDevice;

        dataDevice.map((data) => {
            if (data.name == device) {
                sameDevice = data.name;
            }
        });

        if (device === "") {
            return true;
        } else if (device === sameDevice) {
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
                    <div className="space-y-4">
                        <h3 className="text-xl font-medium text-gray-900 dark:text-white">
                            Tambah Device
                        </h3>
                        <div>
                            <div className="mb-2 block">
                                <Label htmlFor="device" value="Device" />
                            </div>
                            <TextInput
                                id="device"
                                placeholder="Masukkan nama device"
                                value={device}
                                onChange={(device) =>
                                    setDevice(device.target.value)
                                }
                                required
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
