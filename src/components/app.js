import React, { Component } from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';

import Header from './Header/header';
import Home from './home';
import News from './news';

export default class App extends Component {
	render() {
		return (
			<Router>
				<div>
					<Header />

					<Route exact path="/" component={Home} />
					<Route path="/news" component={News} />
				</div>
			</Router>
		);
	}
}