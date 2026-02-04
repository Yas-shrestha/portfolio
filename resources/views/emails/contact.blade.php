<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>

<body style="margin:0; padding:0; background-color:#f4f4f4; font-family: Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding: 20px 0;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 0 10px rgba(0,0,0,0.05);">

                    <!-- Header -->
                    <tr>
                        <td style="background:#111827; color:#ffffff; padding:20px; text-align:center;">
                            <h2 style="margin:0;">📩 New Contact Message</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px; color:#333333;">
                            <p style="font-size:16px; margin-bottom:20px;">
                                You received a new message from your website contact form.
                            </p>

                            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse;">
                                <tr>
                                    <td style="background:#f9fafb; font-weight:bold; width:120px;">Name:</td>
                                    <td>{{ $contact->name }}</td>
                                </tr>
                                <tr>
                                    <td style="background:#f9fafb; font-weight:bold;">Email:</td>
                                    <td>{{ $contact->email }}</td>
                                </tr>
                                <tr>
                                    <td style="background:#f9fafb; font-weight:bold;">Subject:</td>
                                    <td>{{ $contact->subject }}</td>
                                </tr>
                                <tr>
                                    <td style="background:#f9fafb; font-weight:bold; vertical-align:top;">Message:</td>
                                    <td>{{ $contact->message }}</td>
                                </tr>
                            </table>

                            <p style="margin-top:30px; font-size:14px; color:#6b7280;">
                                This email was sent automatically from your portfolio website contact form.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f3f4f6; padding:15px; text-align:center; font-size:12px; color:#888;">
                            © {{ date('Y') }} <a href="https://yas.com.np">Website</a>. All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
