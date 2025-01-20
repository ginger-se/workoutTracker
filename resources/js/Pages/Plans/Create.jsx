import { PlanForm } from "@/Components/forms/PlanForm";

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { useForm, usePage } from "@inertiajs/react";

export default function Create() {
    const types = usePage().props.types;

    const form = useForm({
        start_date: "",
        end_date: "",
        type: "",
    });

    function submit(e) {
        e.preventDefault();
        form.post(route("plan/store"));
    }
    console.log(form);

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Create Plan
                </h2>
            }
        >
            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="px-4 py-5 sm:px-6">
                        <PlanForm submit={submit} types={types} form={form} />
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
