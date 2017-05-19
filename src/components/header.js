import React, { Component } from 'react';

import HeaderNav from './header-nav';

const Header = () => {
	return(
		<section className="hero is-primary is-medium is-bold">
			<div className="hero-body">
				<div className="container">
					<h1 className="title">Dr. Sudipta Seal</h1>
					<h2 className="subtitle">UCF Pegasus Professor</h2>
				</div>
			</div>
			<HeaderNav />
		</section>
	);
}

export default Header;