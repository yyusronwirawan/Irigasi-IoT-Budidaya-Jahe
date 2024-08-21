import Paginator from "@/Components/LogAlat/Paginator";
import TableData from "@/Components/LogAlat/TableData";
import MenuList from "@/Components/Sidebar/MenuList";
import SidebarNew from "@/Components/Sidebar/SidebarNew";
import { Head } from "@inertiajs/react";
import { ToastContainer } from "react-toastify";

export default function LogAlat(props) {
    const { title, dataPesan } = props;

    const myDate = (date) => {
        return new Date(date);
    };
    const formatterTime = new Intl.DateTimeFormat("en-US", {
        hour: "2-digit",
        minute: "2-digit",
        hour12: false,
    });

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
                url={props.ziggy.url}
                user={props.auth.user}
                location={props.ziggy.location}
            />
            <aside className="fixed top-0 left-0 z-0 pt-20 w-64 duration-500 hidden sm:block h-screen transition-all bg-primary">
                <MenuList
                    location={props.ziggy.location}
                    url={props.ziggy.url}
                    user={props.auth.user}
                />
            </aside>
            {/* Sidebar End */}

            {/* Device Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3">
                        <div className="flex items-center justify-between">
                            <div className="flex flex-col justify-center items-start">
                                <h1 className="text-lg md:text-2xl font-extrabold text-primary-text text-start">
                                    Log Alat
                                </h1>
                                <p className="text-start">
                                    <span className="text-sm font-bold text-primary-text">
                                        {dataPesan.data.length > 0
                                            ? dataPesan.meta.total
                                            : 0}{" "}
                                        pesan,
                                    </span>{" "}
                                    <small className="text-[#A3A4A8]">
                                        alat yang sedang digunakan
                                    </small>
                                </p>
                            </div>
                        </div>

                        <div className="my-5">
                            {/* Table md Breakpoint Start */}
                            <TableData>
                                <TableData.TableHead>
                                    <TableData.TableHeadTitle>
                                        Waktu
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Pesan
                                    </TableData.TableHeadTitle>
                                </TableData.TableHead>

                                <TableData.TableBody>
                                    {dataPesan.data &&
                                    dataPesan.data.length > 0 ? (
                                        dataPesan.data.map((pesan, id) => (
                                            <TableData.TableBodyRow key={id}>
                                                <TableData.TableBodyData>
                                                    {myDate(
                                                        pesan.created_at
                                                    ).getMonth() < 10
                                                        ? `0${
                                                              myDate(
                                                                  pesan.created_at
                                                              ).getMonth() + 1
                                                          }-`
                                                        : `${
                                                              myDate(
                                                                  pesan.created_at
                                                              ).getMonth() + 1
                                                          }`}
                                                    {myDate(
                                                        pesan.created_at
                                                    ).getDate() < 10
                                                        ? `0${myDate(
                                                              pesan.created_at
                                                          ).getDate()}-`
                                                        : `${myDate(
                                                              pesan.created_at
                                                          ).getDate()}-`}
                                                    {myDate(
                                                        pesan.created_at
                                                    ).getFullYear()}{" "}
                                                    {formatterTime.format(
                                                        myDate(pesan.created_at)
                                                    )}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {pesan.pesan}
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

                            <div className="flex justify-center items-center my-4">
                                <Paginator meta={dataPesan.meta} />
                            </div>
                            {/* Table md Breakpoint End */}
                        </div>
                    </div>
                </div>
            </div>
            {/* Device Content End */}
        </div>
    );
}
