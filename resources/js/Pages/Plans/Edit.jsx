import { usePage } from "@inertiajs/react";

export default function Edit() {
    const mezocycle = usePage().props.mezocycle;
    console.log(mezocycle);
    return <div>Plan Edit</div>;
}
