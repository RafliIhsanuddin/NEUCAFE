<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-purple-600 ">
    <p class="text-9xl font-serif font-semibold">about page</p>
    </div>

    <h2>Top 3 Products</h2>

<p>1. Product: {{ $topProduct1 }}, Quantity: {{ $topQuantity1 }}</p>
<p>2. Product: {{ $topProduct2 }}, Quantity: {{ $topQuantity2 }}</p>
<p>3. Product: {{ $topProduct3 }}, Quantity: {{ $topQuantity3 }}</p>

</body>
</html>