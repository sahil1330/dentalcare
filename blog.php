<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - New Age Dental Clinic</title>

    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/x-icon" href="icons/logo.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/new-nav.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/footer.css">

    <style>
        /* Blog post card design */
        body {
            font-family: var(--main-font);
        }

        .blog-container {
            height: 140vh;
        }

        .blog-container h1 {
            margin: 10vh 0 4vh;
        }

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
            width: 95%;
            max-width: 150px;
            height: 120px;
            border-radius: 5px;
            object-fit: cover !important;
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
            font-family: var(--second-main-font);
            font-weight: var(--font-weight-bold);
        }

        .blog-post p {
            font-size: 0.875rem;
            color: #555;
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-family: var(--main-font);
        }

        .blog-post a {
            padding: 10px 25px;
            font-size: 1.2rem;
            border-radius: 30px;
            background-color: transparent;
            border: 2px solid rgb(0, 0, 0);
            color: rgb(0, 0, 0);
            margin-top: 20px;
            cursor: pointer;
            font-family: var(--second-main-font);
            width: 60%;
            text-decoration: none;
        }

        .blog-post a:hover {
            background-color: #000;
            color: #fff;
            border: 2px solid rgb(255, 255, 255);
        }

        /* Skeleton loader */
        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: wave 1.5s linear infinite;
        }

        @keyframes wave {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        .skeleton-text {
            height: 20px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .skeleton-image {
            width: 150px;
            height: 120px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        /* Responsive design for mobile */
        @media (max-width: 768px) {
            .blog-container {
                height: 350vh;
            }

            .blog-container h1 {
                margin: 12vh 0 4vh;
            }

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
    <nav style="z-index: 1002; 
           position: absolute;
            width: 100%;
            top: 0;">
        <?php include 'new-responsive-nav.php'; ?>
    </nav>
    <div class="container blog-container">
        <h1 class="text-center" style="margin-top: 150px;">Latest Blog Posts</h1>
        <div id="blog-feed" class="row">
            <!-- Skeleton loaders (6 placeholders) -->
            <div class="col-md-6 mb-4">
                <div class="blog-post">
                    <div class="skeleton skeleton-image"></div>
                    <div class="blog-post-content">
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-text"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="blog-post">
                    <div class="skeleton skeleton-image"></div>
                    <div class="blog-post-content">
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-text"></div>
                    </div>
                </div>
            </div>
            <!-- More skeletons can be added as needed -->
        </div>
    </div>
    <footer>
        <?php include "components/footer/index2.html"; ?>
    </footer>

    <script>
        const blogSection = document.querySelector('.blog-container');

        const feedUrl = 'https://izoog.blogspot.com/feeds/posts/default?alt=rss'; // Replace with your blog's RSS feed URL

        const fetchBlogData = () => {
            fetch(`https://api.rss2json.com/v1/api.json?rss_url=${feedUrl}`)
                .then(response => response.json())
                .then(data => {
                    const blogFeedDiv = document.getElementById('blog-feed');
                    blogFeedDiv.innerHTML = ''; // Clear the skeleton loaders
                    data.items.forEach(item => {
                        // Truncate content to 20-30 words
                        const truncatedContent = item.content.replace(/<\/?[^>]+(>|$)/g, "").split(' ').slice(1, 18).join(' ') + '...';

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
        };

        // Intersection Observer to trigger the data fetch when the section is in view
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    fetchBlogData();
                    observer.disconnect(); // Stop observing after fetching data
                }
            });
        }, { threshold: 0.1 });

        observer.observe(blogSection);
    </script>

    <!-- Bootstrap JS (optional, for better responsiveness) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4GLsN7sIVgI2myWURs1TX"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-QTXMUPI1xhZyBHh2OGbb1ROPKOBi7ZTqPHTVl9oPAxzuLd1NHtZT0NfkeJpAo9Xu"
        crossorigin="anonymous"></script>

</body>

</html>
