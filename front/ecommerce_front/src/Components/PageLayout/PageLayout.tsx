import React from 'react';
import './PageLayout.scss';
import Header from '../Header/Header';

type Props = {
	className?: string;
	children: React.ReactNode;
};

const PageLayout: React.FC<Props> = ({ children, className }) => {
	return (
		<div className={`page-layout-container ${className || ''}`.trim()}>
			<Header />
			<main className="page-layout">
				{children}
			</main>
		</div>
	);
};

export default PageLayout;
