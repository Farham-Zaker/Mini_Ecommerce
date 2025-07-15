<!-- resources/views/confirm.blade.php -->
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>تأیید خرید</title>
    @vite(["resources/css/confirm.css"])
</head>
<body>

    <div class="box">
        <h2>تأیید خرید</h2>
        <p>شما در حال خرید محصول زیر هستید:</p>
        <h3>{{ $product->name }}</h3>
        <p>شرح: {{ $product->description }}</p>

        <p>قیمت: {{ $product->price }} تومان</p>

        <form  method="POST">
            @csrf
            <button type="submit" class="pay-btn">تأیید و پرداخت</button>
            <a href="{{ route('product.index') }}"><button type="button" class="cancel-btn">بازگشت</button></a>
        </form>
    </div>

</body>
</html>
