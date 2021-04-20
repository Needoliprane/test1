import React, { useState } from "react";
// import axios from "axios";
// import { useHistory } from "react-router";
import { Link } from "react-router-dom";
import PageLayout from "../../Components/PageLayout/PageLayout";
import "./Login.scss";

const Login = () => {
    // const history = useHistory();
    const [errMessage, setErrMessage] = useState<string | undefined>();
    const [formState, setFormState] = useState({ email: "", password: "" });
    const handleSubmit = (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();

        // if (formState.email === '' || formState.password === '') {
        // 	setErrMessage('Veuillez rentrer tous les champs.');
        // 	return;
        // }

        // axios
        // 	.post(`${process.env.REACT_APP_API_URL}/auth/login`, formState)
        // 	.then((response) => {
        // 		const accessToken = response.data.accessToken;
        // 		localStorage.setItem('accessToken', accessToken);
        // 		history.push('/');
        // 	})
        // 	.catch((err) => {
        // 		console.log(err);
        // 		setErrMessage('Adresse email ou mot de passe incorrect.');
        // 	});
        alert("email: " + formState.email + " password: " + formState.password);
    };

    const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
        const key = e.target.name;
        const value = e.target.value;
        setFormState((prevState) => ({ ...prevState, [key]: value }));
    };

    return (
        <PageLayout>
            <div className="main-container">
                <div className="login-card">
                    <h3 className="login-card-name">E-Commerce project</h3>
                    <form onSubmit={handleSubmit}>
                        <div className="input-group">
                            <label
                                className="login-input-label"
                                htmlFor="email"
                            >
                                E-mail
                            </label>
                            <input
                                className="login-input-field"
                                id="email"
                                name="email"
                                onChange={handleChange}
                                required
                            />
                        </div>
                        <div className="input-group">
                            <label
                                className="login-input-label"
                                htmlFor="password"
                            >
                                Mot de passe
                            </label>
                            <input
                                className="login-input-field"
                                id="password"
                                type="password"
                                name="password"
                                onChange={handleChange}
                                required
                            />
                            <Link
                                className="forgot-password"
                                to="/reset-password"
                                style={{ alignSelf: "flex-end" }}
                            >
                                Mot de passe oublié
                            </Link>
                        </div>
                        {errMessage && (
                            <p style={{ color: "#ee0000" }}>{errMessage}</p>
                        )}
                        <button className="login-connect-button" type="submit">
                            Se connecter
                        </button>
                    </form>
                </div>
            </div>
        </PageLayout>
    );
};

export default Login;
