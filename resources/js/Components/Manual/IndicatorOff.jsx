const IndicatorOff = ({ children }) => {
    return (
        <div>
            <span className="px-3 py-2 text-xs font-medium text-center text-white bg-button-off rounded-lg hover:bg-button-off-hover">
                {children}
            </span>
        </div>
    );
};

export default IndicatorOff;