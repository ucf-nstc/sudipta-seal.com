import React, { Component } from 'react';

import HeaderNav from './header-nav';
import HeaderBody from './header-body';

const Header = (props) => {
	return(
		<section className="hero is-primary is-medium is-bold">
			<HeaderBody />
			<HeaderNav />
		</section>
	);
}

export default Header;