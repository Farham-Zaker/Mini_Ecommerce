<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>خطا</title>
    @vite(["resources/css/error.css"])

</head>
<body>
    <div class="box">
        <div class="status-code">خطا {{ $status_code ?? 500 }}</div>
        <div class="error-message">{{ $message ?? 'مشکلی پیش آمده است. لطفاً دوباره تلاش کنید.' }}</div>
        <div class="back-link">
            <a href="{{ $callback_url ?? url('/products') }}">بازگشت به صفحه محصولات</a>
        </div>
    </div>
</body>
</html>
