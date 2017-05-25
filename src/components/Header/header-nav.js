import React, { Component } from 'react';

import HeaderNavItem from './header-nav-item';
import Home from '../home';
import News from '../news';
import Research from '../research';

const HeaderNav = () => {
	return(
		<div className="hero-foot">
			<div className="hero-foot">
			    <nav className="tabs is-boxed">
			    	<div className="container">
       					<ul>
       						<HeaderNavItem name="Home" path="/"/>
       						<HeaderNavItem name="News" path="/news" />
       						<HeaderNavItem name="Research" path="/research" />
       						<HeaderNavItem name="Group" path="/group" />
       						<HeaderNavItem name="Labs" path="/labs" />
       						<HeaderNavItem name="Positions" path="/positions" />
       					</ul>
       				</div>

       			</nav>
	       	</div>
		</div>
	);
}

export default HeaderNav;