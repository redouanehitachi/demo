<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
    
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

    <ul>

<div class="min-h-full">
<?php require('partials/nav.php')?>
<?php require('partials/banner.php')?>

 
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    
<a href="/notes" class="text-blue-500 underline mb-6">Go Back..</a>

<p class="">

  <?=htmlspecialchars($note['body'])?>
</p>
 
</li>


</div>
  </main>
<?php require('partials/footer.php')?>