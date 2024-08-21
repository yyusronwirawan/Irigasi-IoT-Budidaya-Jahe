import { Link } from "@inertiajs/react";

const ButtonDelete = ({ deleteLink, as, method, data, handleClick }) => {
    return (
        <div>
            <Link
                href={deleteLink}
                as={as}
                method={method}
                data={data}
                onClick={handleClick}
                className="px-3 py-2 text-sm font-medium text-center text-white bg-red-primary rounded-lg hover:bg-red-primary-hover"
            >
                Hapus
            </Link>
        </div>
    );
};

export default ButtonDelete;
