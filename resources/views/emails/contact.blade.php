<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #fafafa; padding: 20px;">
    <div style="background:#fff; border-radius:8px; padding:20px; max-width:600px; margin:auto; box-shadow:0 0 10px rgba(0,0,0,0.08);">
        <h2 style="color:#333;">📩 New Contact Message Received</h2>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
        <p><strong>Message:</strong></p>
        <p style="background:#f8f8f8; padding:10px; border-radius:6px;">{{ $data['message'] }}</p>
        <br>
        <p style="color:#999; font-size:13px;">Sent from your website contact form 💬</p>
    </div>
</body>
</html>
