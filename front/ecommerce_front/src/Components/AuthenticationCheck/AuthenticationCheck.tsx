import React from 'react';
import jsonwebtoken from 'jsonwebtoken';
import { Route, Redirect, RouteProps } from 'react-router-dom';
import ForbidenPage from '../../Pages/ForbidenPage/ForbidenPage';

type Props = RouteProps & {
	redirectUri?: string;
	isAdminRoute: boolean;
};

type TokenInfo = {
	id: number;
	role: string;
	iat: number;
	exp: number;
};

const ProtectedRoute: React.FC<Props> = ({ redirectUri, isAdminRoute, ...props }) => {
	try {
		const accessToken = localStorage.getItem('accessToken');
		const decodedToken = jsonwebtoken.verify(
			accessToken || '',
			`${process.env.REACT_APP_TOKEN_SECRET}`
		) as TokenInfo;
		if (isAdminRoute) {
			return decodedToken.role === 'Admin' ? <Route {...props} /> : <ForbidenPage />;
		} else {
			return <Route {...props} />;
		}
	} catch (error) {
		return <Redirect to={redirectUri || '/login'} />;
	}
};

export default ProtectedRoute;
