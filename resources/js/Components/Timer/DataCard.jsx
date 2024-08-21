import { Link } from "@inertiajs/react";
import ModalDetail from "./ModalDetail";

const DataCard = (props) => {
    const {children} = props;
    
    return (
        <div>
            <div className="flex flex-col items-start md:hidden p-6 bg-white border border-gray-200 rounded-lg shadow mb-5">
                {children}
            </div>
        </div>
    );
};

const Header = ({children}) => {
    return (
        <div>
            <h5 className="mb-2 text-2xl font-bold tracking-tight text-primary-text">
                {children}
            </h5>
        </div>
    );
};

const Body = ({children}) => {
    return (
        <div className="mb-2">
            {children}
        </div>
    );
};

const Action = ({ timer, handleDeleteNotif, user }) => {
    return (
        <div className="w-full flex justify-end items-center gap-x-2 mt-2">
            <ModalDetail timer={timer} />

            {user && (
                <>
                    <Link
                        href={route("edit.timer", { id: timer.id })}
                        as="button"
                        method="get"
                        data={{ id: timer.id }}
                        className="px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-primary-hover"
                    >
                        Edit
                    </Link>
                    <Link
                        href={route("delete.timer")}
                        as="button"
                        method="post"
                        data={{ id: timer.id }}
                        onClick={handleDeleteNotif}
                        className="px-3 py-2 text-sm font-medium text-center text-white bg-red-primary rounded-lg hover:bg-red-primary-hover"
                    >
                        Hapus
                    </Link>
                </>
            )}
        </div>
    );
};

DataCard.Header = Header;
DataCard.Body = Body;
DataCard.Action = Action;

export default DataCard;
