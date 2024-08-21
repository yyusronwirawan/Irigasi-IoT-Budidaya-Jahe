import MenuList from "@/Components/Sidebar/MenuList";
import SidebarNew from "@/Components/Sidebar/SidebarNew";
import DataCard from "@/Components/Timer/DataCard";
import ModalForm from "@/Components/Timer/ModalForm";
import TableData from "@/Components/Timer/TableData";
import { Head,  } from "@inertiajs/react";
import { ToastContainer, toast } from "react-toastify";

export default function Timer(props) {
    const { title, dataTimer, dataDevice } = props;
    const toastNotifDelete = new Promise((resolve) =>
        setTimeout(() => resolve("Pengaturan berhasil dihapus"), 2000)
    );

    const handleDeleteNotif = () => {
        toast.promise(toastNotifDelete, {
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
    };

    return (
        <div>
            <Head title={title} />
            <ToastContainer
                position="top-right"
                autoClose={3000}
                closeOnClick
                hideProgressBar={false}
                newestOnTop={false}
                rtl={false}
                pauseOnFocusLoss={false}
                draggable={false}
                pauseOnHover={false}
                theme="light"
            />

            {/* Sidebar Start */}
            <SidebarNew
                user={props.auth.user}
                location={props.ziggy.location}
                url={props.ziggy.url}
            />
            <aside className="fixed top-0 left-0 z-0 pt-20 w-64 duration-500 hidden sm:block h-screen transition-all bg-primary">
                <MenuList
                    user={props.auth.user}
                    location={props.ziggy.location}
                    url={props.ziggy.url}
                />
            </aside>
            {/* Sidebar End */}

            {/* Manual Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3">
                        <div className="flex items-center justify-between">
                            <div className="flex flex-col justify-center items-start">
                                <h1 className="text-lg md:text-2xl font-extrabold text-primary-text text-start">
                                    Daftar Pengaturan Timer
                                </h1>
                                <p className="text-start">
                                    <span className="text-sm font-bold text-primary-text">
                                        {dataTimer.length} data,
                                    </span>{" "}
                                    <small className="text-[#A3A4A8]">
                                        pengaturan timer yang digunakan
                                    </small>
                                </p>
                            </div>

                            {/* Tambah Data */}
                            {props.auth.user && (
                                <div className="mr-2">
                                    <ModalForm
                                        dataTimer={dataTimer}
                                        dataDevice={dataDevice}
                                    />
                                </div>
                            )}
                        </div>

                        <div className="my-5">
                            {/* Data Timer Mobile Start */}
                            {dataTimer && dataTimer.length > 0 ? (
                                dataTimer.map((timer, id) => (
                                    <DataCard key={id}>
                                        <DataCard.Header>
                                            {timer.device.name}
                                        </DataCard.Header>
                                        <DataCard.Body>
                                            <p className="font-normal text-start text-primary-text">
                                                Hari : {timer.hari}
                                            </p>
                                            <p className="font-normal text-start text-primary-text">
                                                No. Jadwal : {timer.noJadwal}
                                            </p>
                                            <p className="font-normal text-start text-primary-text">
                                                Waktu Mulai :{" "}
                                                {`${timer.jam}:${timer.menit}`}
                                            </p>
                                        </DataCard.Body>
                                        <DataCard.Action
                                            timer={timer}
                                            user={props.auth.user}
                                            handleDeleteNotif={() =>
                                                handleDeleteNotif()
                                            }
                                        />
                                    </DataCard>
                                ))
                            ) : (
                                <p className="text-red-primary md:hidden">
                                    Data tidak ditemukan
                                </p>
                            )}
                            {/* Data Timer Mobile End */}

                            {/* Table md Breakpoint Start */}
                            <TableData>
                                <TableData.TableHead>
                                    <TableData.TableHeadTitle>
                                        Device
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Hari
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        No. Jadwal
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Waktu Mulai
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Aksi
                                    </TableData.TableHeadTitle>
                                </TableData.TableHead>

                                <TableData.TableBody>
                                    {dataTimer && dataTimer.length > 0 ? (
                                        dataTimer.map((timer, id) => (
                                            <TableData.TableBodyRow key={id}>
                                                <TableData.TableBodyData>
                                                    {timer.device.name}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {timer.hari}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {timer.noJadwal}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${timer.jam}:${timer.menit}`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    <TableData.ActionTimer
                                                        timer={timer}
                                                        user={props.auth.user}
                                                        handleDeleteNotif={() =>
                                                            handleDeleteNotif()
                                                        }
                                                    />
                                                </TableData.TableBodyData>
                                            </TableData.TableBodyRow>
                                        ))
                                    ) : (
                                        <TableData.TableBodyRow>
                                            <TableData.TableBodyData>
                                                <p className="text-red-primary">
                                                    Data tidak ditemukan
                                                </p>
                                            </TableData.TableBodyData>
                                        </TableData.TableBodyRow>
                                    )}
                                </TableData.TableBody>
                            </TableData>
                            {/* Table md Breakpoint End */}
                        </div>
                    </div>
                </div>
            </div>
            {/* Manual Content End */}
        </div>
    );
}
