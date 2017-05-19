### sudipta-seal.com Website redesign

Problems
- The current website design needs to be overhauled
- The current website is built on top of an old front-end web framework called Yahoo User Interface (YUI) which was discontinued in August of 2014
- YUI is deprecated and does not offer secure (https://) hosting for their legacy Content Deliver Networks
- YUI design is dated
- Most page templates are written in hybrid inline PHP, JavaScript, and HTML (bad practice)
- Most of the site's content is statically created versus dynamically generated

Roadmap
- Find a suitable design reference (Dr. Chanda and Dr. Rajaraman sites are a basis)
- Use a modern frontend framework to implement the design
	- React.js for a component-based front-end framework
	- Bulma.io for a modern style framework
- Use React.js to build a modular site with templating and reusible components
- Dynamically generate content like news and groups from the MySQL Database
	- News API and User API projects will be used for this