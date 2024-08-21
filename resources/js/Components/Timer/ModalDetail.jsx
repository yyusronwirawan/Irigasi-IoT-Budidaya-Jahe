"use client";

import { Button, Modal } from "flowbite-react";
import { useState } from "react";
import IndicatorOn from "../Manual/IndicatorOn";
import IndicatorOff from "../Manual/IndicatorOff";

function ModalDetail(props) {
    const {timer} = props;
    const [openModal, setOpenModal] = useState(false);

    return (
        <>
            <button
                type="button"
                className="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-80 rounded-lg"
                onClick={() => setOpenModal(true)}
            >
                Detail
            </button>
            <Modal
                dismissible
                show={openModal}
                onClose={() => setOpenModal(false)}
            >
                <Modal.Header>Detail Jadwal</Modal.Header>
                <Modal.Body>
                    <div className="space-y-3">
                        <div className="space-y-1">
                            <div className="flex items-center">
                                <p className="font-semibold w-2/5 mr-4">
                                    Device :
                                </p>
                                <span className="font-normal">
                                    {timer.device.name}
                                </span>
                            </div>
                            <div className="flex items-center">
                                <p className="font-semibold w-2/5 mr-4">
                                    Hari :
                                </p>
                                <span className="font-normal">
                                    {timer.hari}
                                </span>
                            </div>
                            <div className="flex items-center">
                                <p className="font-semibold w-2/5 mr-4">
                                    No. Jadwal :
                                </p>
                                <span className="font-normal">
                                    {timer.noJadwal}
                                </span>
                            </div>
                            <div className="flex items-center">
                                <p className="font-semibold w-2/5 mr-4">
                                    Waktu Mulai :
                                </p>
                                <span className="font-normal">
                                    {`${timer.jam}:${timer.menit}`}
                                </span>
                            </div>
                            <div className="flex items-center">
                                <p className="font-semibold w-2/5 mr-4">
                                    Durasi :
                                </p>
                                <span className="font-normal">
                                    {`${timer.durasiJam ? timer.durasiJam : 0} jam ${timer.durasiMenit} menit ${timer.durasiDetik} detik`}
                                </span>
                            </div>
                        </div>
                        <div className="space-y-1">
                            <p className="font-semibold">Solenoid :</p>
                            <div className="flex items-center gap-x-2">
                                {timer.sol_1 === 1 ? (
                                    <IndicatorOn>1. ON</IndicatorOn>
                                ) : (
                                    <IndicatorOff>1. OFF</IndicatorOff>
                                )}
                                {timer.sol_2 === 1 ? (
                                    <IndicatorOn>2. ON</IndicatorOn>
                                ) : (
                                    <IndicatorOff>2. OFF</IndicatorOff>
                                )}
                                {timer.sol_3 === 1 ? (
                                    <IndicatorOn>3. ON</IndicatorOn>
                                ) : (
                                    <IndicatorOff>3. OFF</IndicatorOff>
                                )}
                                {timer.sol_4 === 1 ? (
                                    <IndicatorOn>4. ON</IndicatorOn>
                                ) : (
                                    <IndicatorOff>4. OFF</IndicatorOff>
                                )}
                            </div>
                        </div>
                        <div className="space-y-1">
                            <p className="font-semibold">Status :</p>
                            <div className="flex items-center gap-x-2">
                                {timer.status === 1 ? (
                                    <IndicatorOn>ON</IndicatorOn>
                                ) : (
                                    <IndicatorOff>OFF</IndicatorOff>
                                )}
                            </div>
                        </div>
                    </div>
                </Modal.Body>
                <Modal.Footer>
                    <Button color="gray" onClick={() => setOpenModal(false)}>
                        Tutup
                    </Button>
                </Modal.Footer>
            </Modal>
        </>
    );
}

export default ModalDetail;
