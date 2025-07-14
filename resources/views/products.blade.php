<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product List</title>
  @vite(['resources/css/products.css'])</head>

<body>

  <div class="container">
    <h1>   </h1>
    <h1>فهرست محصولات</h1>

    <div class="products">
        @foreach ($products as $product)
            <div class="product-card">
                <h2>{{ $product["name"] }}</h2>
                <p>{{ $product["description"] }}</p>
                <div class="price">قیمت: {{ $product["price"] }}</div>
                <form  method="POST">
                    @csrf
                    <button type="submit" class="btn">خرید</button>
                </form>
            </div>
        @endforeach
 
    </div>
</div>


</body>
</html>
