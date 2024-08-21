import { Link } from "@inertiajs/react";

const ButtonEdit = (props) => {
    const {editLink, as, method, data} = props;
    
    return (
        <div>
            <Link
                href={editLink} as={as} method={method} data={data}
                className="px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-primary-hover"
            >
                Edit
            </Link>
        </div>
    );
};

export default ButtonEdit;
