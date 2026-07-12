<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'meta' => [
                'title'       => 'Sakshi Infonet | CCTV, IT Hardware & Networking Solutions in Faridabad, Delhi NCR',
                'description' => 'Sakshi Infonet offers CCTV camera installation, biometric & face recognition, computer hardware, printers, intercom, telecom and networking solutions in Faridabad and across Delhi NCR. Call +91 99104 16354.',
                'keywords'    => 'CCTV installation Faridabad, security systems Delhi NCR, biometric attendance Faridabad, face recognition system, computer hardware Faridabad, printer scanner dealer, intercom EPABX Faridabad, networking solutions Delhi NCR, IT hardware NIT Faridabad, Sakshi Infonet',
                'og_type'     => 'website',
            ],
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'meta' => [
                'title'       => 'About Us | Sakshi Infonet - Trusted IT & Security Partner in Faridabad',
                'description' => 'Learn about Sakshi Infonet, a trusted name in CCTV security, IT hardware, communication and networking solutions in Faridabad, Delhi NCR. Quality products, expert installation and reliable support.',
                'keywords'    => 'about Sakshi Infonet, CCTV company Faridabad, IT solutions company Delhi NCR, security systems provider Faridabad, networking company NIT Faridabad',
                'og_type'     => 'website',
            ],
        ]);
    }

    public function services()
    {
        return view('pages.services', [
            'meta' => [
                'title'       => 'Our Services | CCTV, IT Hardware, Communication & Networking - Sakshi Infonet',
                'description' => 'Explore Sakshi Infonet services: CCTV & biometric security systems, computer hardware & printers, intercom & telecom communication, and internet & networking solutions in Faridabad, Delhi NCR.',
                'keywords'    => 'CCTV services Faridabad, biometric installation, computer repair Faridabad, printer scanner services, intercom telecom Faridabad, LAN WiFi networking Delhi NCR, IT hardware services',
                'og_type'     => 'website',
            ],
        ]);
    }

    public function serviceShow(string $slug)
    {
        $services = collect(config('site.services'));
        $service = $services->firstWhere('slug', $slug);

        abort_if($service === null, 404);

        // Each service has its own uniquely designed page; fall back to the shared template.
        $view = 'pages.services.' . $slug;
        if (! view()->exists($view)) {
            $view = 'pages.service-single';
        }

        return view($view, [
            'service' => $service,
            'others'  => $services->where('slug', '!=', $slug)->values(),
            'meta' => [
                'title'       => $service['title'] . ' in Faridabad & Delhi NCR | Sakshi Infonet',
                'description' => \Illuminate\Support\Str::limit(strip_tags($service['long']), 155),
                'keywords'    => $service['title'] . ' Faridabad, ' . $service['title'] . ' Delhi NCR, ' . $service['short'],
                'og_type'     => 'website',
            ],
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'meta' => [
                'title'       => 'Contact Us | Sakshi Infonet - CCTV & IT Solutions in Faridabad',
                'description' => 'Contact Sakshi Infonet for CCTV, IT hardware, communication and networking solutions in Faridabad, Delhi NCR. Call +91 99104 16354 or email sakshiinfonet@gmail.com for a free quote.',
                'keywords'    => 'contact Sakshi Infonet, CCTV dealer Faridabad contact, IT hardware shop Faridabad, security system quote Delhi NCR, Sakshi Infonet phone number',
                'og_type'     => 'website',
            ],
        ]);
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'phone'   => 'required|string|max:20',
            'service' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ], [
            'name.required'    => 'Please enter your name.',
            'email.required'   => 'Please enter your email address.',
            'email.email'      => 'Please enter a valid email address.',
            'phone.required'   => 'Please enter your mobile number.',
            'message.required' => 'Please tell us how we can help you.',
        ]);

        // Record the enquiry. In production, hook this up to email/CRM.
        Log::channel('single')->info('New enquiry from website', $validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you, ' . $validated['name'] . '! Your enquiry has been received. Our team will contact you soon.')
            ->withInput([]);
    }
}
