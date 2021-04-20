import React, { useState } from "react";
import PageLayout from "../../Components/PageLayout/PageLayout";
import "./ModifyUserInfo.scss";

const ModifyUserInfo = () => {
    const [errMessage, setErrMessage] = useState<string | undefined>();
    const [formState, setFormState] = useState({
        login: "",
        email: "",
        firstName: "",
        lastName: "",
        password: "",
    });

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
            <form onSubmit={handleSubmit} className="form-modify-user-info">
                <div className="modify-user-info-item">
                    <label className="login-input-label" htmlFor="login">
                        Login
                    </label>
                    <input className="login" onChange={handleChange} />
                </div>
                <div className="modify-user-info-item">
                    <label className="email-input-label" htmlFor="email">
                        E-mail
                    </label>
                    <input className="email" onChange={handleChange} />
                </div>
                <div className="modify-user-info-item">
                    <label
                        className="first-name-input-label"
                        htmlFor="first-name"
                    >
                        First name
                    </label>
                    <input className="first-name" onChange={handleChange} />
                </div>
                <div className="modify-user-info-item">
                    <label
                        className="last-name-input-label"
                        htmlFor="last-name"
                    >
                        Last name
                    </label>
                    <input className="last-name" onChange={handleChange} />
                </div>
                <div className="modify-user-info-item">
                    <label className="password-input-label" htmlFor="password">
                        Password
                    </label>
                    <input className="password" onChange={handleChange} />
                </div>

                {errMessage && <p style={{ color: "#ee0000" }}>{errMessage}</p>}
                <button className="btn edit save" type="submit">
                    Enregistrer
                </button>
            </form>
        </PageLayout>
    );
};

export default ModifyUserInfo;
