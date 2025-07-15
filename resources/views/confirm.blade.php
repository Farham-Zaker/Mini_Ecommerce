<!-- resources/views/confirm.blade.php -->
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>تأیید خرید</title>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            background: #f9f9f9;
            padding: 2rem;
            text-align: center;
        }
        .box {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 0 10px #ccc;
            display: inline-block;
        }
        button {
            padding: 0.7rem 1.5rem;
            margin: 0.5rem;
            font-size: 1rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .pay-btn {
            background-color: green;
            color: white;
        }
        .cancel-btn {
            background-color: gray;
            color: white;
        }
    </style>
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
