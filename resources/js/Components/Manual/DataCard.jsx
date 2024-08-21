import ButtonDelete from "./ButtonDelete";
import ButtonEdit from "./ButtonEdit";

const DataCard = ({children}) => {
    return (
        <div>
            <div className="flex flex-col items-start md:hidden p-6 bg-white border border-gray-200 rounded-lg shadow mb-5">
                {children}
            </div>
        </div>
    );
};

const Header = ({ children }) => {
    return (
        <div>
            <h5 className="mb-2 text-2xl font-bold tracking-tight text-primary-text">
                {children}
            </h5>
        </div>
    );
};

const PompaBody = ({pompaText, children}) => {
    return (
        <div className="flex items-center mb-2 gap-x-2">
            <p className="font-normal text-start text-primary-text">
                {pompaText}
            </p>
            {children}
        </div>
    );
};

const SolenoidBody = ({solenoidText, children}) => {
    return (
        <div className="flex flex-col justify-center">
            <p className="font-normal text-start text-primary-text">
                {solenoidText}
            </p>
            <div className="flex items-center gap-x-2 mt-2">
                {children}
            </div>
        </div>
    );
};

const ActionManual = (props) => {
    const {
        editLink,
        deleteLink,
        as,
        methodEdit,
        methodDelete,
        data,
        handleDeleteNotif,
    } = props;
    return (
        <div className="w-full flex justify-end items-center gap-x-2 mt-5">
            {/* Update Button */}
            <ButtonEdit
                editLink={editLink}
                as={as}
                method={methodEdit}
                data={data}
            />

            {/* Delete Button */}
            <ButtonDelete
                deleteLink={deleteLink}
                as={as}
                method={methodDelete}
                data={data}
                handleClick={handleDeleteNotif}
            />
        </div>
    );
};

DataCard.Header = Header;
DataCard.PompaBody = PompaBody;
DataCard.SolenoidBody = SolenoidBody;
DataCard.ActionManual = ActionManual;

export default DataCard;