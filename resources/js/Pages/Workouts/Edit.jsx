export default function Edit({ workout }) {
    console.log(workout);
    return workout.workout_exercises.map((workoutExercise) => (
        <div key={workoutExercise.id}>Test</div>
    ));
}
