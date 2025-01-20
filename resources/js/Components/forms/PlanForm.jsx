import { Button } from "../ui/button";
import { Input } from "../ui/input";

export function PlanForm({submit, types, form}) {
    return (
        <form onSubmit={submit}>
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
                                            className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                                    </div>
                                    {form.errors.start_date && (
                                        <p className="text-sm text-destructive">
                                            {form.errors.start_date}
                                        </p>
                                    )}
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
                                    {form.errors.end_date && (
                                        <p className="text-sm text-destructive">
                                            {form.errors.end_date}
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
                                                form.setData(
                                                    "type",
                                                    e.target.value
                                                )
                                            }
                                            className="flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-base shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                        >
                                            <option value="" disabled>
                                                Choose...
                                            </option>
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
                                    {form.errors.type && (
                                        <p className="text-sm text-destructive">
                                            {form.errors.type}
                                        </p>
                                    )}
                                </div>
                                <div className="flex justify-end">
                                    <Button type="submit">Create</Button>
                                </div>
                            </div>
                        </form>
    );
}