const IndicatorOn = ({children}) => {
    return (
        <div>
            <span className="px-3 py-2 text-xs font-medium text-center text-white bg-button-on rounded-lg hover:bg-button-on-hover">
                {children}
            </span>
        </div>
    );
};

export default IndicatorOn;