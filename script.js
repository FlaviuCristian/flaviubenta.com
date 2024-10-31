document.addEventListener('DOMContentLoaded', function() {
    const filter = document.getElementById('categoryFilter');
    const articleList = document.getElementById('article-list');

    filter.addEventListener('change', function() {
        updateArticles();
    });

    function updateArticles() {
        const selectedCategory = filter.value;

        articleList.querySelectorAll('div').forEach(article => {
            const categories = article.getAttribute('data-categories').split(' ');

            if (selectedCategory === 'all' || categories.includes(selectedCategory)) {
                article.style.display = 'block';
            } else {
                article.style.display = 'none';
            }
        });
    }
});