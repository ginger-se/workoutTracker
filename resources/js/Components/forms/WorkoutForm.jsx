import { Link } from "@inertiajs/react";
import { Button } from "../ui/button";
import { Input } from "../ui/input";

export function WorkoutForm({ submit, types, form, buttonMessage, existingId }) {
    return (
        <form onSubmit={submit}>
            <div className="space-y-6">
                <div>
                    <label
                        htmlFor="date"
                        className="block text-sm font-medium text-gray-700"
                    >
                        Date
                    </label>
                    <div className="mt-1">
                        <Input
                            type="date"
                            id="date"
                            name="date"
                            value={form.data.date}
                            onChange={(e) => {
                                form.setData("date", e.target.value);
                            }}
                            className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                    </div>
                    {form.errors.date && (
                        <p className="text-sm text-destructive">
                            {form.errors.date}
                        </p>
                    )}
                </div>
                <div>
                    <label
                        htmlFor="status"
                        className="block text-sm font-medium text-gray-700"
                    >
                        Status
                    </label>
                    <div className="mt-1">
                        <Input
                            type="text"
                            id="status"
                            name="status"
                            value={form.data.status}
                            onChange={(e) =>
                                form.setData("status", e.target.value)
                            }
                            className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                    </div>
                    {form.errors.status && (
                        <p className="text-sm text-destructive">
                            {form.errors.status}
                        </p>
                    )}
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
                                form.setData("type", e.target.value)
                            }
                            className="flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-base shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                        >
                            <option value="" disabled>
                                Choose...
                            </option>
                            {types.map((type) => (
                                <option key={type.id} value={type.id}>
                                    {type.name}
                                </option>
                            ))}
                        </select>
                    </div>
                    {form.errors.type && (
                        <p className="text-sm text-destructive">
                            {form.errors.type}
                        </p>
                    )}
                </div>
                <div className="flex justify-between">
                    {existingId && (
                        <Button variant={"destructive"} asChild>
                            <Link
                                href={route("workout/destroy", {
                                    workout: existingId,
                                })}
                                method="delete"
                            >
                                Delete
                            </Link>
                        </Button>
                    )}
                    <Button type="submit">{buttonMessage}</Button>
                </div>
            </div>
        </form>
    );
}
