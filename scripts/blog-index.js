const blogId = '997169524596486151'; // Your Blogger blog ID
const apiKey = 'AIzaSyDMMm33c2u2fZSZhgjU9jPKZJXvXSisVvE'; // Your API key
const apiUrl = `https://www.googleapis.com/blogger/v3/blogs/${blogId}/posts?key=${apiKey}`;

// Fetch the Blogger API and display the latest 3 posts
fetch(apiUrl)
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        if (!data.items || data.items.length === 0) {
            console.log('No posts found.');
            return;
        }
        const blogCardsContainer = document.getElementById('blog-cards-container');
        data.items.slice(0, 3).forEach(item => {
            const card = document.createElement('div');
            card.className = 'blog-card';

            // Check for images in the API response
            let imageUrl;
            if (item.images && item.images.length > 0) {
                imageUrl = item.images[0].url; // Use the first image in the images array
            } else {
                // Attempt to extract a higher resolution image from the content HTML
                const regex = /<img.*?src=["'](.*?)["']/;
                const result = regex.exec(item.content);
                if (result) {
                    imageUrl = result[1]; // Use the original full-size image URL from content
                } else {
                    // Fallback to a placeholder if no valid image is found
                    imageUrl = 'https://via.placeholder.com/600x400.png?text=No+Image+Available';
                }
            }

            const title = item.title;
            const description = item.content.replace(/<\/?[^>]+(>|$)/g, "").split(' ').slice(0, 12).join(' ') + '...';

            card.innerHTML = `
                <img src="${imageUrl}" alt="Blog Image">
                <div class="card-body">
                    <h5 class="card-title">${title}</h5>
                    <p class="card-text">${description}</p>
                    <a href="${item.url}" target="_blank" class="read-more-btn">Read More</a>
                </div>
            `;

            blogCardsContainer.appendChild(card);
        });
    })
    .catch(error => console.log('Error fetching the blog posts:', error));