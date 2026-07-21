<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Website Enquiry</title>
</head>
<body style="margin:0;padding:24px;background:#f2f4f8;font-family:Arial,Helvetica,sans-serif;color:#1a2340;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:560px;margin:0 auto;background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 6px 20px rgba(10,20,50,.08);">
        <tr>
            <td style="background:#14245f;padding:22px 28px;">
                <h1 style="margin:0;color:#ffffff;font-size:19px;">New Website Enquiry</h1>
                <p style="margin:6px 0 0;color:#c9d2ec;font-size:13px;">{{ config('site.name') }} &middot; sakshiinfonet.com</p>
            </td>
        </tr>
        <tr>
            <td style="padding:26px 28px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:15px;line-height:1.6;">
                    <tr><td style="padding:6px 0;color:#6a7590;width:120px;">Name</td><td style="padding:6px 0;font-weight:bold;">{{ $enquiry->name }}</td></tr>
                    <tr><td style="padding:6px 0;color:#6a7590;">Mobile</td><td style="padding:6px 0;"><a href="tel:{{ $enquiry->phone }}" style="color:#14245f;">{{ $enquiry->phone }}</a></td></tr>
                    <tr><td style="padding:6px 0;color:#6a7590;">Email</td><td style="padding:6px 0;"><a href="mailto:{{ $enquiry->email }}" style="color:#14245f;">{{ $enquiry->email }}</a></td></tr>
                    <tr><td style="padding:6px 0;color:#6a7590;">Service</td><td style="padding:6px 0;">{{ $enquiry->service ?: 'Not specified' }}</td></tr>
                </table>
                <div style="margin-top:18px;padding:16px 18px;background:#f6f8fc;border-left:3px solid #e01a22;border-radius:6px;">
                    <p style="margin:0 0 6px;color:#6a7590;font-size:13px;">Message</p>
                    <p style="margin:0;white-space:pre-wrap;">{{ $enquiry->message }}</p>
                </div>
                <p style="margin:22px 0 0;color:#98a1b8;font-size:12px;">
                    Received {{ $enquiry->created_at?->format('d M Y, g:i A') }}@if($enquiry->ip) &middot; IP {{ $enquiry->ip }}@endif<br>
                    Reply to this email to respond directly to the customer.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
