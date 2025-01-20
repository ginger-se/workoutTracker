import { PlanForm } from "@/Components/forms/PlanForm";

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { useForm, usePage } from "@inertiajs/react";

export default function Edit() {
    const {mezocycle, types} = usePage().props;
    const form = useForm({
        start_date: mezocycle.start_date,
        end_date: mezocycle.end_date,
        type: mezocycle.type.id,
    });

    

    function submit(e) {
        e.preventDefault();
        form.patch(route("plan/update", {mezocycle: mezocycle.id}));
    }


    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Edit Plan
                </h2>
            }
        >
            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="px-4 py-5 sm:px-6">
                        <PlanForm submit={submit} types={types} form={form} buttonMessage="Update" />
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

