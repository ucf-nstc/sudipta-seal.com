import React, { Component } from 'react';
import { Link } from 'react-router-dom';

const HeaderNavItem = (props) => {
	return(
		<li className="">
			<Link to={props.path}>{props.name}</Link>
		</li>
	);
}

export default HeaderNavItem;