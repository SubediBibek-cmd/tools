<!DOCTYPE html>
<html>
<head>
    <title>GPT-3 Prompt Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Add custom styles here */
        /* This is to emulate the Google style */
        body {
            font-family: 'Roboto', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .prompt-form {
            background-color: #f6f6f6;
            padding: 30px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .prompt-form textarea {
            resize: none;
        }
        .output-container {
            background-color: #f6f6f6;
            padding: 30px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            min-height: 150px;
        }
        .output-container pre {
            font-size: 14px;
            line-height: 1.5;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="prompt-form" action="chatgpt3.php" method="post">
                    <div class="form-group">
                        <label for="prompt">Prompt</label>
                        <textarea class="form-control" name="prompt" id="prompt" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Generate</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="output-container">
                    <?php if (!empty($output)): ?>
                    <pre>
                        <?php echo $output; ?>
                    </pre>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
