<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/x-icon" href="icons/logo.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/new-nav.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/faq.css">
    <style>
       
    </style>
</head>

<body>
    <div class="">
        <?php include 'new-responsive-nav.php'; ?>
    </div>
    <h2 class="faq-heading">FAQ</h2>
    <div class="faq-container">
        <div class="faq-section">


            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <div class="icon-section">
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="text-section">
                        <span>
                            What basic dental services do you offer?</span>
                    </div>
                </div>

                <div class="faq-answer">
                    We offer a range of basic dental services including cleanings, fillings, extractions, and X-rays.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <div class="icon-section">
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="text-section">
                        <span>
                            Question 2 will be here
                        </span>
                    </div>
                </div>
                <div class="faq-answer">
                    Answer 2 will be here. Answer will be here Answer will be here Answer will be here.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <div class="icon-section">
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="text-section">
                        <span>
                            Question 3 will be here
                        </span>
                    </div>
                </div>
                <div class="faq-answer">
                    Answer 3 will be here. Answer will be here Answer will be here Answer will be here.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <div class="icon-section">
                        <span class="faq-icon">+</span>
                    </div>

                    <div class="text-section">
                        <span>
                            Question 4 will be here
                        </span>
                    </div>
                </div>
                <div class="faq-answer">
                    Answer 4 will be here. Answer will be here Answer will be here Answer will be here.
                </div>
            </div>
        </div>
    </div>
    <?php include "components/footer/index2.html"; ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleFAQ(element) {
            // Close any open FAQ answer
            const allAnswers = document.querySelectorAll('.faq-answer');
            allAnswers.forEach((answer) => {
                if (answer !== element.nextElementSibling) {
                    answer.classList.remove('open');
                    answer.previousElementSibling.querySelector('.faq-icon').textContent = '+';
                }
            });

            // Toggle the clicked FAQ answer
            const answer = element.nextElementSibling;
            if (answer.classList.contains('open')) {
                answer.classList.remove('open');
                element.querySelector('.faq-icon').textContent = '+';
            } else {
                answer.classList.add('open');
                element.querySelector('.faq-icon').textContent = '-';
            }
        }
    </script>
</body>

</html>