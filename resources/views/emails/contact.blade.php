<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni İletişim Mesajı</title>
</head>
<body>
    <h1>Yeni İletişim Mesajı</h1>
    <p><strong>Ad Soyad:</strong> {{ $fullname ?? '' }}</p>
    <p><strong>Email:</strong> {{ $email ?? ''}}</p>
    <p><strong>Konu Başlığı:</strong> {{ $title ?? ''}}</p>
    <p><strong>Mesaj:</strong></p>
    <p>{{ is_string($message_content) ? $message_content : 'Geçersiz mesaj içeriği' }}</p>
</body>
</html>
