<?php
// Define website details
$title = "Welcome to My GitHub Website";
$subtitle = "Aesthetic PHP Landing Page";
$description = "This is a beautifully designed index page for a GitHub-hosted website. Feel free to customize it to your liking.";
$button_text = "Explore More";
$button_link = "#about"; // Change this to a relevant section or page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen text-white text-center">
    <div class="p-10 bg-white bg-opacity-10 backdrop-blur-md rounded-2xl shadow-lg w-96">
        <h1 class="text-3xl font-bold"> <?php echo $title; ?> </h1>
        <p class="text-lg mt-2"> <?php echo $subtitle; ?> </p>
        <p class="mt-4 text-sm opacity-75"> <?php echo $description; ?> </p>
        <a href="<?php echo $button_link; ?>" class="inline-block mt-6 px-6 py-2 bg-indigo-500 hover:bg-indigo-600 text-white font-semibold rounded-lg transition"> <?php echo $button_text; ?> </a>
    </div>
</body>
</html>
