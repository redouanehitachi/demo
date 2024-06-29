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
    <ul>
       <?php foreach ($notes as $note):?>

        <li>
          <a href="/note?id=<?=$note['id']?>" class="text-blue-500 hover:underline">

            <?=$note['body']?>
          </a>
      </li>
        <?php endforeach ;?>
</ul>
<p class="mt-6">
  <a href="/notes/create" class="text-blue-500 over:underline">Create Note</a></p>

</div>
  </main>
<?php require('partials/footer.php')?>