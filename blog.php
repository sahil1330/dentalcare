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
        /* Global Styles */
        body {
            font-family: var(--main-font);
            margin: 0;
            padding: 0;
        }

        /* Blog Container */
        .blog-container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            height: auto;
            /* Set height to auto for responsiveness */
        }

        .blog-container h1 {
            margin: 20px 0;
            text-align: center;
        }

        /* Blog Post Card Design */
        .blog-post {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            /* Align items to start */
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
            font-size: 1rem;
            border-radius: 30px;
            background-color: transparent;
            border: 2px solid rgb(0, 0, 0);
            color: rgb(0, 0, 0);
            margin-top: 20px;
            cursor: pointer;
            font-family: var(--second-main-font);
            width: 60%;
            text-decoration: none;
            text-align: center;
        }

        .blog-post a:hover {
            background-color: #000;
            color: #fff;
            border: 2px solid rgb(255, 255, 255);
        }

        /* Skeleton Loader Styles */
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .blog-post {
                flex-direction: column;
                /* Stack content vertically */
                align-items: center;
                /* Center align items */
                text-align: center;
                /* Center text */
            }

            .blog-post img {
                margin-bottom: 1rem;
                /* Margin for spacing */
            }

            .blog-post-content {
                margin-left: 0;
                /* Remove left margin */
            }

            .blog-post a {
                width: 100%;
                /* Full width on smaller screens */
                padding: 10px;
                /* Adjust padding */
            }

            .blog-container {
                padding: 10px;
                /* Less padding on smaller screens */
            }
        }

        @media (max-width: 480px) {
            .blog-post h3 {
                font-size: 1.1rem;
                /* Adjust heading size */
            }

            .blog-post p {
                font-size: 0.8rem;
                /* Adjust paragraph size */
            }
        }
    </style>
</head>

<body>
    <nav style="z-index: 1002; position: absolute; width: 100%; top: 0; ">
        <?php include 'new-responsive-nav.php'; ?>
    </nav>
    <div class="container blog-container" style="margin-bottom: 100px;">
        <h1 class="text-center" style="margin-top:120px">Latest Blog Posts</h1>
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
        </div>
    </div>
    <footer>
        <?php include "components/footer.php"; ?>
    </footer>

    <script>
        const blogSection = document.querySelector('.blog-container');
        const apiKey = 'AIzaSyAxIIr8nHz98DrUZcq_fwoACmYoyQRWr1w'; // Replace with your actual Blogger API Key
        const blogId = '29731428650200613'; // Replace with your actual Blog ID

        const fetchBlogData = () => {
            fetch(`https://www.googleapis.com/blogger/v3/blogs/${blogId}/posts?key=${apiKey}`)
                .then(response => response.json())
                .then(data => {
                    const blogFeedDiv = document.getElementById('blog-feed');
                    blogFeedDiv.innerHTML = ''; // Clear the skeleton loaders
                    console.log(data);
                    data.items.forEach(item => {
                        // Truncate content to 20-30 words
                        const truncatedContent = item.content.replace(/<\/?[^>]+(>|$)/g, "").split(' ').slice(0, 18).join(' ') + '...';

                        // Extract image from content using a regex pattern
                        const imgMatch = item.content.match(/<img.*?src="(.*?)"/);
                        const imageUrl = imgMatch ? imgMatch[1] : 'https://via.placeholder.com/120';

                        const postElement = document.createElement('div');
                        postElement.classList.add('col-md-6', 'mb-4');
                        postElement.innerHTML = `
                            <div class="blog-post">
                                <img src="${imageUrl}" alt="Blog Image">
                                <div class="blog-post-content">
                                    <h3>${item.title}</h3>
                                    <p>${truncatedContent}</p>
                                    <a href="${item.url}" target="_blank">Read More</a>
                                </div>
                            </div>
                        `;
                        blogFeedDiv.appendChild(postElement);
                    });
                })
                .catch(err => console.log('Error fetching the blog posts', err));
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gyb3B4F5eLTfCrXAVg83d6SU9M59+OpHc9B0hxJm1p5F4r4xBz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-H8N9SvS2LnvRh0YtMSTlWqXcx6E/Ymb9l48EVHbBFSOnsb5mCR8cDZwxy8D/eM4C"
        crossorigin="anonymous"></script>
</body>

</html>