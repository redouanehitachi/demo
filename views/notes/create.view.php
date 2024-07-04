
<?php require(__DIR__.'/../partials/head.php')?>
<?php require(__DIR__.'/../partials/nav.php')?>
<?php require(__DIR__.'/../partials/banner.php')?>

 

<form method="POST" action="">
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
     

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
     
          
          </div>
        </div>

        <div class="col-span-full">
          <label for="body" class="block text-sm font-medium leading-6 text-gray-900">body</label>
          <div class="mt-2">
            <textarea  
            id="body" 
            name="body" 
            rows="3" 
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 :text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            placeholder="Here's an idea for a note..."
            <?=$_POST['body']??''?>
            ></textarea>
       <?php if (isset($errors['body'])) : ?>
        <p><?=$errors['body'] ?></p>
        <?php endif?>
      
       
          </div>
        </div>

       <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center rounded-md bg-blue-500 text-white py-2 px-4">Create</button></div>

       
      </div>
    </div>

  

  
  </div>


</form>

</div>
  </main>
<?php require(__DIR__.'/../partials/footer.php')?>