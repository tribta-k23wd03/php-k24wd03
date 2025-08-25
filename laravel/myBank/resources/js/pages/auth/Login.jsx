import { Link, useForm } from '@inertiajs/react';
import MainLayout from '../../Layouts/MainLayout';

function Login() {
    const { data, setData, post, processing, errors, reset } = useForm({ name: '', email: '', password: '', remember: false });

    const submit = (e) => {
        e.preventDefault();
        post('/login', { onFinish: () => reset('password') });
    };
    return (
        <MainLayout>
            <div className="card" style={{ maxWidth: 420, margin: '0 auto' }}>
                <h2>Login</h2>
                <form onSubmit={submit}>
                    <div className="form-row" style={{ flexDirection: 'column' }}>
                        <label htmlFor="email">Email</label>
                        <input id="email" type="email" className="input" value={data.email} onChange={(e) => setData('email', e.target.value)} />
                        {errors.email && <div className="error">{errors.email}</div>}
                    </div>
                    <div className="form-row" style={{ flexDirection: 'column' }}>
                        <label htmlFor="password">Password</label>
                        <input
                            id="password"
                            type="password"
                            className="input"
                            value={data.password}
                            onChange={(e) => setData('password', e.target.value)}
                        />
                        {errors.password && <div className="error">{errors.password}</div>}
                    </div>
                    <div className="form-row" style={{ display: 'flex', gap: 4 }}>
                        <label htmlFor="remember">Remember me</label>
                        <input type="checkbox" id="remember" checked={data.remember} onChange={(e) => setData(e.target.checked)} />
                    </div>
                    <button type="submit" className="btn" disabled={processing}>
                        {processing ? 'Login is processing...' : 'Login'}
                    </button>
                </form>
                <p>
                    Haven't Register Yet? <Link href={'/register'}>Create New Account</Link>
                </p>
            </div>
        </MainLayout>
    );
}

export default Login;
