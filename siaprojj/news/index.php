<body>
    <header>
        <h1>News Search</h1>
        <input type="text" id="searchInput" placeholder="Enter your search">
        <button onclick="searchNews()">Search</button>
    </header>

    <div id="news-container"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("searchInput").addEventListener("keyup", function (event) {
                if (event.key === "Enter") {
                    searchNews();
                }
            });
        });

        function searchNews() {
            const searchQuery = document.getElementById("searchInput").value.trim();
            if (searchQuery !== "") {
                const apiKey = 'db04cf6ea01b430ea3b60607bce76c5b'; // Replace with your actual NewsAPI key
                const pageSize = 5; // Limit results
                const apiUrl = `https://newsapi.org/v2/everything?q=${searchQuery}&pageSize=${pageSize}&apiKey=${apiKey}`;

                fetch(apiUrl)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`Network response was not ok: ${response.statusText}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        displayNews(data.articles);
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });
            }
        }

        function displayNews(articles) {
            const newsContainer = document.getElementById('news-container');
            newsContainer.innerHTML = ""; // Clear previous news articles

            // Iterate through the first 10 articles and create HTML elements to display them
            for (let i = 0; i < Math.min(articles.length, 10); i++) {
                const article = articles[i];
                const articleElement = document.createElement('div');
                articleElement.innerHTML = `
                    <h2>${article.title}</h2>
                    <p>${article.description}</p>
                    <a href="${article.url}" target="_blank">Read more</a>
                    <hr>
                `;

                newsContainer.appendChild(articleElement);
            }
        }
    </script>
</body>