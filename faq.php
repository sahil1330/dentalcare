<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - New Age Dental Clinic</title>
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
   
        <?php include 'new-responsive-nav.php'; ?>
    
    <h2 class="faq-heading">FAQ</h2>
    <section class="faq-main-section">
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
                            How often should I visit the dentist?
                        </span>
                    </div>
                </div>
                <div class="faq-answer">
                    It is generally recommended to visit the dentist every six months for a routine check-up and cleaning. However, your dentist may suggest a different schedule based on your individual needs.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <div class="icon-section">
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="text-section">
                        <span>
                            What should I do if I have a dental emergency?
                        </span>
                    </div>
                </div>
                <div class="faq-answer">
                    In case of a dental emergency, such as a knocked-out tooth or severe toothache, contact our office immediately. We will provide you with instructions and schedule an emergency appointment as soon as possible.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <div class="icon-section">
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="text-section">
                        <span>
                            Are dental X-rays safe?
                        </span>
                    </div>
                </div>
                <div class="faq-answer">
                    Yes, dental X-rays are safe. They use a very low level of radiation, and modern digital X-rays further reduce exposure. We take all necessary precautions to ensure your safety during the procedure.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <div class="icon-section">
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="text-section">
                        <span>
                            What are the signs of gum disease?
                        </span>
                    </div>
                </div>
                <div class="faq-answer">
                    Common signs of gum disease include red, swollen, or bleeding gums, persistent bad breath, and loose teeth. If you notice any of these symptoms, schedule an appointment with your dentist for an evaluation.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <div class="icon-section">
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="text-section">
                        <span>
                            How can I improve my oral hygiene at home?
                        </span>
                    </div>
                </div>
                <div class="faq-answer">
                    To improve your oral hygiene, brush your teeth at least twice a day with fluoride toothpaste, floss daily, and use an antiseptic mouthwash. Additionally, maintain a healthy diet and avoid sugary snacks and drinks.
                </div>
            </div>
    </div>
    </section>
    <footer>
    <?php include "components/footer.php"; ?>
    </footer>


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