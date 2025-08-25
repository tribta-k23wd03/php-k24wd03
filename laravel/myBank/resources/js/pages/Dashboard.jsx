import { Link } from '@inertiajs/react';
import MainLayout from '../Layouts/MainLayout';

function Dashboard() {
    const { props } = usePage();
    const user = props.auth?.user;
    return (
        <MainLayout>
            <h1>Dashboard</h1>
            <p>
                Greeting, <strong>{user.name}</strong>
            </p>
            <ul>
                <li>
                    <Link href={'#'}>Manage Bank Account</Link>
                </li>
            </ul>
        </MainLayout>
    );
}

export default Dashboard;
