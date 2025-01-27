import { WorkoutForm } from "@/Components/forms/WorkoutForm";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { useForm, usePage } from "@inertiajs/react";

export default function Edit({  }) {
    const { workout, types } = usePage().props;
        const form = useForm({
            date: workout.date,
            type: workout.workout_type.id,
            status: workout.status,
        });
    
        function submit(e) {
            e.preventDefault();
            form.patch(route("workout/update", { workout: workout.id }));
        }
    return (
            <AuthenticatedLayout
                header={
                    <h2 className="text-xl font-semibold leading-tight text-gray-800">
                        Edit Workout
                    </h2>
                }>
                <div className="py-12">
                    <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div className="px-4 py-5 sm:px-6">
                            <WorkoutForm
                                submit={submit}
                                types={types}
                                form={form}
                                buttonMessage="Update"
                                existingId={workout.id}
                            />
                        </div>
                        
                    </div>
                </div>
            </AuthenticatedLayout>
    );
}
