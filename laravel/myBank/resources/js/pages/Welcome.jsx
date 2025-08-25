function Welcome({ appName }) {
    return (
        <div className="container">
            <div className="card">
                <h1>{appName}</h1>
                <p>Welcome to my Bank.</p>
                <a href="#">Login</a> | <a href="#">Register</a>
            </div>
        </div>
    );
}

export default Welcome;
