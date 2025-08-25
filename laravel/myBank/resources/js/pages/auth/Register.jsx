import { Link, useForm } from '@inertiajs/react';
import MainLayout from '../../Layouts/MainLayout';

function Register() {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    const submit = (e) => {
        e.preventDefault();
        post('/register', { onFinish: () => reset('password', 'password_confirmation') });
    };
    return (
        <MainLayout>
            <div className="card" style={{ maxWidth: 420, margin: '0 auto' }}>
                <h2>Register</h2>
                <form onSubmit={submit}>
                    <div className="form-row" style={{ flexDirection: 'column' }}>
                        <label htmlFor="name">Fullname</label>
                        <input id="name" type="text" className="input" value={data.name} onChange={(e) => setData('name', e.target.value)} />
                        {errors.name && <div className="error">{errors.name}</div>}
                    </div>
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
                    <div className="form-row" style={{ flexDirection: 'column' }}>
                        <label htmlFor="password_confirmation">Re-Enter Your Password</label>
                        <input
                            id="password_confirmation"
                            type="password"
                            className="input"
                            value={data.password_confirmation}
                            onChange={(e) => setData('password_confirmation', e.target.value)}
                        />
                        {errors.password_confirmation && <div className="error">{errors.password_confirmation}</div>}
                    </div>

                    <button type="submit" className="btn" disabled={processing}>
                        {processing ? 'Register is processing...' : 'Register'}
                    </button>
                </form>
                <p>
                    Already have an account? <Link href={'/login'}>Process to Login</Link>
                </p>
            </div>
        </MainLayout>
    );
}

export default Register;
