import React, { Component } from 'react';

const HeaderNavItem = (props) => {
	return(
		<li className={props.isActive}>
			<a>{props.name}</a>
		</li>
	);
}

export default HeaderNavItem;