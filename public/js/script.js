// toggle article visibility on research page
const articles = document.querySelectorAll('.research-article');
articles.forEach(function(article) {
	const toggle = article.querySelector('.toggle');
	const hide = article.querySelector('.hide');

	toggle.addEventListener('click', function(event) {
		const body = article.querySelector('.message-body');
		const hideButton = article.querySelector('.hide');

		hideButton.classList.toggle('hidden');
		body.classList.toggle('hidden');
	});

	hide.addEventListener('click', function(event) {
		const body = article.querySelector('.message-body');

		body.classList.toggle('hidden');
		this.classList.add('hidden');
	});
});