import MainLayout from '../Layouts/MainLayout';

function Welcome({ appName }) {
    return (
        <MainLayout>
            <div className="card">
                <h1>{appName}</h1>
                <p>Welcome to my Bank.</p>
                <a href="#">Login</a> | <a href="#">Register</a>
            </div>
        </MainLayout>
    );
}

export default Welcome;
