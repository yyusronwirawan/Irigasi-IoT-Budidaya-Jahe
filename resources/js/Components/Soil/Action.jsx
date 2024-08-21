import { useState } from "react";
import { router } from "@inertiajs/react";

const Action = ({dataAction}) => {
    const [sensor1, setSensor1] = useState(dataAction[0].sensor1);
    const [sensor2, setSensor2] = useState(dataAction[0].sensor2);

    const handleSensor = () => {
        const data = {
            sensor1,
            sensor2
        };
        router.post(route("action.soil"), data);
    }

    return (
        <div>
            <div className="flex flex-wrap items-center gap-4 pb-4">
                <div className="flex flex-wrap items-center gap-2">
                    <h2 className="font-semibold">Sensor 1 : </h2>
                    <button
                        name="buttonSensor1"
                        onClick={() => handleSensor()}
                        onMouseDown={() => setSensor1("on")}
                        value={sensor1}
                        className="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                    >
                        ON
                    </button>

                    <button
                        name="buttonSensor1"
                        onClick={() => handleSensor()}
                        onMouseDown={() => setSensor1("off")}
                        value={sensor1}
                        className="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                    >
                        OFF
                    </button>
                </div>

                <div className="flex flex-wrap items-center gap-2">
                    <h2 className="font-semibold">Sensor 2 : </h2>
                    <button
                        name="buttonSensor2"
                        onClick={() => handleSensor()}
                        onMouseDown={() => setSensor2("on")}
                        value={sensor2}
                        className="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                    >
                        ON
                    </button>

                    <button
                        name="buttonSensor2"
                        onClick={() => handleSensor()}
                        onMouseDown={() => setSensor2("off")}
                        value={sensor2}
                        className="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                    >
                        OFF
                    </button>
                </div>
            </div>

            <div className="flex items-center flex-wrap gap-4 pb-4">
                <h3>
                    Status Sensor 1 : <span>{sensor1 == "on" ? "ON" : "OFF"}</span>
                </h3>
                <h3>
                    Status Sensor 2 : <span>{sensor2 == "on" ? "ON" : "OFF"}</span>
                </h3>
            </div>
        </div>
    );
};
export default Action;
