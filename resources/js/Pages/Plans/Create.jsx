import { Button } from "@/Components/ui/button";
import { Input } from "@/Components/ui/input";
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
        post(route("plan.store"));
    }

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
                        <form onSubmit={form.submit}>
                            <div className="space-y-6">
                                <div>
                                    <label
                                        htmlFor="start_date"
                                        className="block text-sm font-medium text-gray-700"
                                    >
                                        Start Date
                                    </label>
                                    <div className="mt-1">
                                        <Input
                                            type="date"
                                            id="start_date"
                                            name="start_date"
                                            value={form.data.start_date}
                                            onChange={(e) =>
                                                form.setData(
                                                    "start_date",
                                                    e.target.value
                                                )
                                            }
                                            className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <label
                                        htmlFor="end_date"
                                        className="block text-sm font-medium text-gray-700"
                                    >
                                        End Date
                                    </label>
                                    <div className="mt-1">
                                        <Input
                                            type="date"
                                            id="end_date"
                                            name="end_date"
                                            value={form.data.end_date}
                                            onChange={(e) =>
                                                form.setData(
                                                    "end_date",
                                                    e.target.value
                                                )
                                            }
                                            className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <label
                                        htmlFor="type"
                                        className="block text-sm/6 font-medium text-gray-900"
                                    >
                                        Type
                                    </label>
                                    <div className="mt-2 grid grid-cols-1">
                                        <select
                                            id="type"
                                            name="type"
                                            value={form.data.type}
                                            onChange={(e) =>
                                                form.setData(
                                                    "type",
                                                    e.target.value
                                                )
                                            }
                                            className="flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-base shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                        >
                                            {types.map((type) => (
                                                <option
                                                    key={type.id}
                                                    value={type.id}
                                                >
                                                    {type.name}
                                                </option>
                                            ))}
                                        </select>
                                    </div>
                                </div>
                                <div className="flex justify-end">
                                    <Button type="submit">Create</Button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
