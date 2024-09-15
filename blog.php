<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Blog Feed</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Blog post card design */
        .blog-post {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .blog-post:hover {
            transform: scale(1.02);
        }

        .blog-post img {
            width: 120px;
            height: 120px;
            border-radius: 5px;
            object-fit: cover;
        }

        .blog-post-content {
            flex: 1;
            margin-left: 1rem;
        }

        .blog-post h3 {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.5rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .blog-post p {
            font-size: 0.875rem;
            color: #555;
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .blog-post a {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 8px 16px;
            border-radius: 25px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .blog-post a:hover {
            background-color: #ccc;
        }

        /* Responsive design for mobile */
        @media (max-width: 768px) {
            .blog-post {
                flex-direction: column;
                text-align: center;
                align-items: center;
            }

            .blog-post img {
                margin-bottom: 1rem;
            }

            .blog-post-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
<div class="navbar">
        <?php include 'new-responsive-nav.php'; ?>
    </div>   
    <div class="container">
        <h1 class="text-center my-5">Latest Blog Posts</h1>
        <div id="blog-feed" class="row"></div>
    </div>

    <script>
        const feedUrl = 'https://izoog.blogspot.com/feeds/posts/default?alt=rss'; // Replace with your blog's RSS feed URL

        fetch(`https://api.rss2json.com/v1/api.json?rss_url=${feedUrl}`)
            .then(response => response.json())
            .then(data => {
                const blogFeedDiv = document.getElementById('blog-feed');
                data.items.forEach(item => {
                    // Truncate content to 20-30 words
                    const truncatedContent = item.content.replace(/<\/?[^>]+(>|$)/g, "").split(' ').slice(1, 20).join(' ') + '...';

                    // Use image from the feed if available, otherwise use a placeholder
                    const imageUrl = item.thumbnail || 'https://via.placeholder.com/120';

                    const postElement = document.createElement('div');
                    postElement.classList.add('col-md-6', 'mb-4'); // Adjust to have 2 cards per row (6 columns each)
                    postElement.innerHTML = `
                        <div class="blog-post">
                            <img src="${imageUrl}" alt="Blog Image">
                            <div class="blog-post-content">
                                <h3>${item.title}</h3>
                                <p>${truncatedContent}</p>
                                <a href="${item.link}" target="_blank">Read More</a>
                            </div>
                        </div>
                    `;
                    blogFeedDiv.appendChild(postElement);
                });
            })
            .catch(err => console.log('Error fetching the feed', err));
    </script>

    <!-- Bootstrap JS (optional, for better responsiveness) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
