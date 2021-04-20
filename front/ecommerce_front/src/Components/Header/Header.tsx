import React from "react";
import "./Header.scss";
import cartImg from "../../Assets/images/shopping-cart.svg";
import { Link } from "react-router-dom";

const Header = () => {
    return (
        <div className="page-header">
            <Link to="/" className="header-logo">
                <h1 className="logo-title">E-commerce project</h1>
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/langfr-225px-Flag_of_France.svg.png"
                    alt="drapeau"
                    className="logo-image"
                />
            </Link>
            <div style={{ display: "flex" }}>
                <button className="cart-btn">
                    <img
                        // src="https://www.flaticon.com/svg/vstatic/svg/1170/1170678.svg?token=exp=1618232397~hmac=5806fe3efef51061f2b12c1609f55d22"
                        src={cartImg}
                        className="cart-image"
                        alt="cart"
                    />
                    <p>Panier</p>
                </button>
                <div className="header-account">
                    <img
                        src="https://visualpharm.com/assets/527/Person-595b40b85ba036ed117da7ec.svg"
                        className="header-pp"
                        alt="person pp"
                    />
                    <p>John Doe</p>
                </div>
            </div>
        </div>
    );
};

export default Header;
