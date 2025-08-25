import { Link, usePage } from '@inertiajs/react';

export default function MainLayout({ children }) {
    const { props } = usePage();
    const user = props.auth?.user;

    return (
        <div className="container">
            <nav className="nav">
                <Link href={'/'}>MyBank</Link>
                <div style={{ marginLeft: 'auto', display: 'flex', gap: 12 }}>
                    {user ? (
                        <>
                            <Link>Dashboard</Link>
                            <Link>Logout</Link>
                        </>
                    ) : (
                        <>
                            <Link>Login</Link>
                            <Link>Register</Link>
                        </>
                    )}
                </div>
            </nav>
            {children}
        </div>
    );
}
