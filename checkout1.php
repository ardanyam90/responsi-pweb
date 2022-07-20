<?php
$Nama= $_POST['Nama'];
$Subject= $_POST['Subject'];
$Model= $_POST['Model'];
$Hari= $_POST['Hari'];
$Waktu= $_POST['Waktu'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Sucess Page</title>
</head>
<body>
  <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
    <div class="flex justify-center items-center h-full">
      <div class="text-dark">
        <h2 class="font-semibold text-4xl mb-4">Successfully</h2>
        <h4 class="font-semibold text-xl mb-6">Ordered</h4>
        <a class="inline-block px-7 py-3 mb-1 border-2 border-primary text-primary font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="index.html" role="button">Back To Home</a>
        <a class="inline-block px-7 py-3 mb-1 border-2 border-primary text-primary font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="struct.txt" role="button">Purchase History</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>