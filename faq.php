<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/new-nav.css">
    <link rel="stylesheet" href="styles/fonts.css">

    <style>
        

        .faq-section {
            max-width: 80%;
            margin: auto;
            background-color: #fff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .faq-heading {
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            margin-top: 30px;
            font-family: var(--second-main-font);

        }

        .faq-item {
            background-color: #87CEEB;
            margin-bottom: 10px;
            border-radius: 10px;
            overflow: hidden;
        }

        .faq-question {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(
                291deg,
                rgba(97, 171, 215, 0.7) 13%,
                rgba(86.47, 129.54, 191.31, 0.7) 39%,
                rgba(86.93, 131.33, 192.33, 0.7) 58%,
                rgba(81, 108, 179, 0.7) 78%
            );
            border-radius: 10px 10px 0 0;
        }

        .faq-question .icon-section {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            padding: 10px;
            padding-bottom: ;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 15px;
            color: #000;
        }

        .faq-question .text-section {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .faq-question .text-section .divider {
            border-left: 2px solid white;
            height: 24px;
            margin: 0 15px;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height 0.5s ease, opacity 0.5s ease;
            padding: 0 15px;
            background: linear-gradient(
            291deg,
            rgba(97, 171, 215, 0.7) 13%,
            rgba(86.47, 129.54, 191.31, 0.7) 39%,
            rgba(86.93, 131.33, 192.33, 0.7) 58%,
            rgba(81, 108, 179, 0.7) 78%
        );
            color: #fff;
            font-size: 16px;
        }

        .faq-answer.open {
            max-height: 300px;
            opacity: 1;
            padding: 15px;
        }
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
                            Question 1 will be here</span> 
                    </div>
                </div>
                
                <div class="faq-answer">
                    Answer 1 will be here. Answer will be here Answer will be here Answer will be here.
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
