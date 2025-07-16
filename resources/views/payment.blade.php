<!-- resources/views/payment-success.blade.php -->

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>پرداخت موفق</title>
    @vite(["resources/css/payment.css"])
</head>
<body>
    <div class="box">
        <h1>✅ پرداخت شما با موفقیت انجام شد</h1>
        <p>با تشکر از خرید شما 🌟</p>
        <a href="{{ url('/products') }}">بازگشت به صفحه محصولات</a>
    </div>
</body>
</html>
