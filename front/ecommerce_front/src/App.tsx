import { BrowserRouter, Switch, Route } from "react-router-dom";
import ProtectedRoute from "./Components/AuthenticationCheck/AuthenticationCheck";
import "./App.scss";
import Shop from "./Pages/Shop/Shop";
import Login from "./Pages/Login/Login";
import ProductPage from "./Pages/ProductPage/ProductPage";
import ModifyUserInfo from "./Pages/ModifyUserInfo/ModifyUserInfo";

function App() {
    return (
        <BrowserRouter>
            <Switch>
                <ProtectedRoute
                    isAdminRoute={false}
                    path="/f"
                    exact
                ></ProtectedRoute>
                <Route path="/" exact>
                    <Shop />
                </Route>
                <Route path="/login" exact>
                    <Login />
                </Route>
                <Route path="/product/:id" exact>
                    <ProductPage />
                </Route>
                <Route path="/user/edit" exact>
                    <ModifyUserInfo />
                </Route>
            </Switch>
        </BrowserRouter>
    );
}

export default App;
