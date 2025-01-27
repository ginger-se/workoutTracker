export default function Edit({ workout }) {
    console.log(workout);
    return workout.workoutExercises.map((workoutExercise) => (
        <div key={workoutExercise.id}>{workoutExercise.exercise.name}</div>
    ));
}
