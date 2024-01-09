<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://kit.fontawesome.com/7f653ca836.js"
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
  </head>
  <body class="bg-slate-50">
    <div class="container mx-auto my-5 flex flex-col space-y-4">
      <h1 class="text-center text-slate-400 text-6xl">Weather app</h1>
      <div class="mx-auto rounded-lg p-2 bg-white">
        <form action="">
            <i class="fas fa-search"></i>
            <input name="city" type="search" class="" />
            <button type="submit">Search</button>
        </form>
      </div>
      <div class="bg-white mx-auto flex items-center justify-center flex-col my-5 w-1/2 shadow-xl p-10 rounded-xl bg-opacity-90">
        <h2 class="text-5xl"><?php echo $name;?></h2>
        <p class="text-2xl"><?php echo $sys->country?></p>
        <p class="text-6xl"><?php echo $main->temp ?>°</p>
        <img class="w-48" src="https://openweathermap.org/img/wn/<?php echo $weather[0]->icon?>@2x.png"alt="img_temps"/>
        <p class="text-lg mb-2"><?php echo $weather[0]->description?></p>
        <div class="flex flex-row space-x-2">
          <i class="fa fa-solid fa-arrow-up"></i>
          <span><?php echo $main->temp_max;?>°</span>
          <i class="fa fa-solid fa-arrow-down"></i>
         
          <span><?php echo $main->temp_min;?>°</span>
        </div>
      </div>
    </div>
  </body>
  <script src="./script.js"></script>
</html>