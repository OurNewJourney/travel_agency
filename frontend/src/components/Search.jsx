import React from "react";
import Input from "./FormElements/Input";
import { useForm } from "../hooks/useForm";

function Search() {
    const [formState, inputHandler] = useForm(
        {
            offer_name: {
                value: "",
                isValid: true,
            },
            city: {
                value: "",
                isValid: true,
            },
            country: {
                value: "",
                isValid: true,
            },
            continent: {
                value: "",
                isValid: true,
            },
            transport: {
                value: "",
                isValid: true,
            },

            departure_time: {
                value: "",
                isValid: true,
            },

            arrival_time: {
                value: "",
                isValid: true,
            },
        },
        false
    );

    return (
        <div className="pb-2">
            <form className="flex">
                <div className="max-w-[150px]">
                    <Input
                        id="name"
                        label="Offer name"
                        type="text"
                        initialValue={formState.inputs.offer_name.value}
                        initialValid={formState.inputs.offer_name.isValid}
                        validators={[]}
                        onInput={inputHandler}
                    />
                </div>
                <div className="max-w-[150px]">
                    <Input
                        id="continent"
                        label="Continent"
                        type="text"
                        initialValue={formState.inputs.continent.value}
                        initialValid={formState.inputs.continent.isValid}
                        validators={[]}
                        onInput={inputHandler}
                    />
                </div>
                <div className="max-w-[150px]">
                    <Input
                        id="country"
                        label="Country"
                        type="text"
                        initialValue={formState.inputs.country.value}
                        initialValid={formState.inputs.country.isValid}
                        validators={[]}
                        onInput={inputHandler}
                    />
                </div>
                <div className="max-w-[150px]">
                    <Input
                        id="city"
                        label="City"
                        type="text"
                        initialValue={formState.inputs.city.value}
                        initialValid={formState.inputs.city.isValid}
                        validators={[]}
                        onInput={inputHandler}
                    />
                </div>
                <div className="max-w-[150px]">
                    <Input
                        id="transport"
                        label="Transport"
                        type="text"
                        initialValue={formState.inputs.transport.value}
                        initialValid={formState.inputs.transport.isValid}
                        validators={[]}
                        onInput={inputHandler}
                    />
                </div>
                <div className="max-w-[150px]">
                    <Input
                        id="departure_time"
                        label="Departure Time"
                        type="date"
                        initialValue={formState.inputs.departure_time.value}
                        initialValid={formState.inputs.departure_time.isValid}
                        validators={[]}
                        onInput={inputHandler}
                    />
                </div>
                <div className="max-w-[150px]">
                    <Input
                        id="arrival_time"
                        label="Arrival Time"
                        type="date"
                        initialValue={formState.inputs.arrival_time.value}
                        initialValid={formState.inputs.arrival_time.isValid}
                        validators={[]}
                        onInput={inputHandler}
                    />
                </div>
            </form>
        </div>
    );
}

export default Search;
