import { Link } from "@inertiajs/react";
import {
    Card,
    CardContent,
    CardDescription,
    CardHeader,
    CardTitle,
} from "./ui/card";
import { Button } from "./ui/button";
import { parse } from "date-fns";

export function PlanWorkoutList({ workouts }) {
    return (
        <div className="px-4 py-5 sm:px-6">
            <div className="-ml-4 -mt-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
                <div className="ml-4 mt-4">
                    <h3 className="text-base font-semibold text-gray-900">
                        Workouts
                    </h3>
                    <p className="mt-1 text-sm text-gray-500">
                        View, edit, and create new workouts for this mezocycle.
                    </p>
                </div>
                <div className="ml-4 mt-4 shrink-0">
                    <Button asChild>
                        <Link href="/plan/create">New</Link>
                    </Button>
                </div>
            </div>
            <div className="py-10 space-y-4">
                {workouts.map((workout) => (
                    <Card key={workout.id}>
                        <CardHeader>
                            <div className="flex justify-between w--full">
                                <div>
                                    <CardTitle>
                                        {workout.workout_type.name}
                                        {" - "}
                                        {parse(
                                            workout.date,
                                            "yyyy-MM-dd",
                                            new Date()
                                        ).toDateString()}
                                    </CardTitle>
                                    <CardDescription>
                                        {workout.status}
                                    </CardDescription>
                                </div>
                                <div>
                                    <Button asChild variant="ghost">
                                        <Link
                                            href={`/workout/${workout.id}/edit`}
                                        >
                                            Edit
                                        </Link>
                                    </Button>
                                </div>
                            </div>
                        </CardHeader>
                        <CardContent>
                            {workout.workout_exercises.length} exercises
                        </CardContent>
                    </Card>
                ))}
            </div>
        </div>
    );
}
