import { router, usePage } from '@inertiajs/react';

function Counter() {
    const { count } = usePage().props;

    const act = (action) => router.post(route('counter.update'), { action }, { preserveScroll: true });

    return (
        <div>
            <h1>Counter App</h1>
            <p>{count}</p>
            <button onClick={() => act('inc')}>Increase</button>
            <button onClick={() => act('dec')}>Decrease</button>
            <button onClick={() => act('res')}>Reset</button>
        </div>
    );
}

export default Counter;
