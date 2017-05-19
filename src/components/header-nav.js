import React, { Component } from 'react';

import HeaderNavItem from './header-nav-item';

const HeaderNav = () => {
	return(
		<div className="hero-foot">
			<div className="hero-foot">
			    <nav className="tabs is-boxed">
			    	<div className="container">
       					<ul>
       						<HeaderNavItem name="Home" isActive="is-active" />
       						<HeaderNavItem name="News" />
       						<HeaderNavItem name="Research" />
       						<HeaderNavItem name="Group" />
       					</ul>
       				</div>
       			</nav>
       		</div>
		</div>
	);
}

export default HeaderNav;