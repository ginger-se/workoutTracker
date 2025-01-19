import { Button } from "@/Components/ui/button";
import {
    Card,
    CardContent,
    CardDescription,
    CardHeader,
    CardTitle,
} from "@/Components/ui/card";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link, usePage } from "@inertiajs/react";

export default function Index() {
    const plans = usePage().props.plans;

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Plan
                </h2>
            }
        >
            <Head title="Plan" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="px-4 py-5 sm:px-6">
                        <div className="-ml-4 -mt-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
                            <div className="ml-4 mt-4">
                                <h3 className="text-base font-semibold text-gray-900">
                                    Plans
                                </h3>
                                <p className="mt-1 text-sm text-gray-500">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit quam corrupti consectetur.
                                </p>
                            </div>
                            <div className="ml-4 mt-4 shrink-0">
                                <Button asChild>
                                    <Link href="/plan/create">Create Plan</Link>
                                </Button>
                            </div>
                        </div>
                        <div className="py-10 space-y-4">
                            {plans.map((plan) => (
                                <Card key={plan.id}>
                                    <CardHeader>
                                        <div className="flex justify-between w--full">
                                            <div>
                                                <CardTitle>
                                                    {plan.type.name}
                                                </CardTitle>
                                                <CardDescription>
                                                    {new Date(
                                                        plan.start_date
                                                    ).toDateString()}{" "}
                                                    -{" "}
                                                    {new Date(
                                                        plan.end_date
                                                    ).toDateString()}
                                                </CardDescription>
                                            </div>
                                            <div>
                                                <Button asChild variant="ghost">
                                                    <Link href="/plan/edit/{plan.id}">
                                                        Edit
                                                    </Link>
                                                </Button>
                                            </div>
                                        </div>
                                    </CardHeader>
                                    <CardContent>
                                        <p>{plan.name}</p>
                                    </CardContent>
                                </Card>
                            ))}
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
