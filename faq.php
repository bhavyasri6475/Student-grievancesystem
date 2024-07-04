<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            background-color: #f2f2f2;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            text-align: center;
        }

        .faq-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }

        .faq-question {
            font-weight: bold;
            color: #007bff;
            cursor: pointer;
            margin-bottom: 5px;
        }

        .faq-answer {
            margin-top: 10px;
        }

        .faq-actions button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .faq-actions button:hover {
            background-color: #0056b3;
        }

        .faq-search input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            resize: vertical;
        }
    </style>
</head>
<body>

<?php include "../inc/header.php" ?>
<h1 class="py-3">FAQ</h1>

<div class="container">
    <div class="faq-search">
        <input type="text" id="searchInput" placeholder="Search for a question..." onkeyup="suggest()">
        <div id="suggestions"></div>
    </div>

    <?php
    // Sample FAQ questions
    $faqQuestions = [
        "How to get mess rebate?",
        "How to pay semester fee?",
        "How to submit a complaint?",
        "How to change password?",
        "How to contact customer support?",
        "What are the library hours?",
        "How to access online resources?",
        "How to register for courses?",
        // Add more questions here as needed
    ];

    foreach ($faqQuestions as $question) {
        echo '<div class="faq-item">';
        echo '<div class="faq-question">' . $question . '</div>';
        echo '<div class="faq-answer" style="display:none;"></div>'; // Initially hide the answer section
        echo '<div class="faq-actions">';
        echo '<button onclick="showAnswerForm(this)">Answer</button>';
        echo '</div>';
        echo '</div>';
    }
    ?>

    <div id="postQuestion" style="display:none;">
        <div class="faq-item">
            <input type="text" id="newQuestionInput" placeholder="Enter your question...">
            <div class="faq-actions">
                <button onclick="postQuestion()">Post Question</button>
            </div>
        </div>
    </div>

</div>

<script>
    function suggest() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const suggestionsDiv = document.getElementById('suggestions');
        suggestionsDiv.innerHTML = '';

        <?php
        // PHP code to provide suggestions based on input value
        foreach ($faqQuestions as $question) {
            echo "if ('$input' !== '' && '$question'.toLowerCase().includes('$input')) {";
            echo "const suggestion = document.createElement('div');";
            echo "suggestion.innerHTML = '<a href=\"#\">$question</a>';";
            echo "suggestion.onclick = function() { document.getElementById('searchInput').value = '$question'; suggestionsDiv.innerHTML = ''; };";
            echo "suggestionsDiv.appendChild(suggestion);";
            echo "}";
        }
        ?>
    }

    function showAnswerForm(button) {
        const faqItem = button.closest('.faq-item');
        const answerDiv = faqItem.querySelector('.faq-answer');
        if (answerDiv.style.display === 'none') {
            const answerTextArea = document.createElement('textarea');
            const postButton = document.createElement('button');
            postButton.innerText = 'Post';
            postButton.style.backgroundColor = '#28a745'; // Green color for post button
            postButton.style.marginLeft = '10px';
            postButton.onclick = function () {
                const answer = answerTextArea.value;
                const answerContent = document.createElement('div');
                answerContent.classList.add('faq-answer');
                answerContent.innerText = answer;
                faqItem.insertBefore(answerContent, answerTextArea);
                answerTextArea.style.display = 'none';
                postButton.style.display = 'none';
            };
            faqItem.insertBefore(answerTextArea, button);
            faqItem.insertBefore(postButton, button);
            answerDiv.style.display = 'block';
        } else {
            answerDiv.style.display = 'none';
        }
    }

    function postQuestion() {
        const newQuestion = document.getElementById('newQuestionInput').value;
        const container = document.querySelector('.container');
        const postQuestionDiv = document.getElementById('postQuestion');
        container.removeChild(postQuestionDiv);

        const faqItem = document.createElement('div');
        faqItem.classList.add('faq-item');
        faqItem.innerHTML = `
            <div class="faq-question">${newQuestion}</div>
            <div class="faq-answer"></div>
            <div class="faq-actions">
                <button onclick="showAnswerForm(this)">Answer</button>
            </div>
        `;
        container.appendChild(faqItem);
    }
</script>

</body>
</html>