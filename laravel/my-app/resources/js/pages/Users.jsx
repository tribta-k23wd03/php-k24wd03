import { useForm, usePage } from '@inertiajs/react';
import { useEffect } from 'react';

function Users() {
    const { users, q } = usePage().props;

    const { data, setData, get } = useForm({ q: q || '' });

    const submit = (e) => {
        e.preventDefault();
        get('/users', { preserveState: true });
    };

    useEffect(() => {
        const timeOut = setTimeout(() => {
            get('/users', { preserveState: true, replace: true });
        }, 400);
        return () => clearTimeout(timeOut);
    }, [data.q]);

    return (
        <div>
            <h1>User List</h1>

            <form onSubmit={submit}>
                <input type="text" value={data.q} onChange={(e) => setData('q', e.target.value)} placeholder="search..." />
                <button type="submit">Search</button>
            </form>

            <ul>
                {users.length > 0 ? (
                    users.map((u) => (
                        <li key={u.id}>
                            {u.name} - {u.email}
                        </li>
                    ))
                ) : (
                    <li>Not Found Any Users.</li>
                )}
            </ul>
        </div>
    );
}

export default Users;
