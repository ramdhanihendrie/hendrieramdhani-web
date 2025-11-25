<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $services;
    protected $portfolios;
    protected $specializations;

    public function __construct() 
    {
        $this->services = [
            [
                'name' => 'Full Stack Web Development',
                'icon' => 'fas fa-code',
                'short_description' => 'I build complete, scalable web applications from backend to polished frontend interfaces.',
                'long_description' => 'I develop end-to-end web applications built on clean architecture principles, ensuring each layer—from database design and API logic to the user interface—is efficiently structured and easy to maintain. My workflow focuses on scalability, security, performance, and user-centered design, allowing businesses to grow without technical limitations. Whether creating custom dashboards, automation systems, or full-featured platforms, I deliver solutions that are robust, reliable, and tailored to real-world needs.'
            ],
            [
                'name' => 'API Development & Integration',
                'icon' => 'fas fa-code-branch',
                'short_description' => 'I develop secure APIs and integrate third-party services to ensure seamless data communication.',
                'long_description' => 'I design and build secure, well-documented APIs that enable smooth communication between internal systems, mobile apps, and external services. My integration process emphasizes reliability, data accuracy, and long-term maintainability, ensuring that your application ecosystem works together seamlessly. From payment gateways and authentication systems to analytics, CRM, and cloud-based services, I handle integrations with careful planning and precise implementation to create a stable digital infrastructure.'
            ],
            [
                'name' => 'Landing Page Development',
                'icon' => 'fas fa-layer-group',
                'short_description' => 'I create visually engaging landing pages optimized for performance and conversion.',
                'long_description' => 'I craft high-quality landing pages designed to communicate your value clearly and convert visitors effectively. Each layout is built with strong UI/UX principles, fast-loading assets, SEO-friendly structure, and persuasive content placement to maximize engagement. Whether you need a product showcase, campaign page, or personal branding landing page, I ensure every element—from typography and spacing to animations and responsiveness—works cohesively to deliver a professional and impactful user experience.'
            ],
            [
                'name' => 'Performance Optimization',
                'icon' => 'fas fa-tachometer-alt',
                'short_description' => 'I improve website speed and efficiency using best-practice optimization techniques.',
                'long_description' => 'I enhance website performance through a combination of code improvements, asset compression, caching strategies, database tuning, and best-practice optimization methods. My goal is to reduce load times, minimize resource usage, and create a smooth user experience across all devices. By eliminating bottlenecks and improving overall efficiency, I help websites achieve higher SEO rankings, better conversion rates, and increased user satisfaction—ensuring that your platform performs at its best under any traffic conditions.'
            ]
        ];
        $this->portfolios = [
            [
                'name' => 'Laser Cutting Spesialis',
                'url' => 'https://lasercuttingspesialis.com/',
                'image' => 'LCS.png',
                'slug' => '#'
            ],
            [
                'name' => 'JAI Foundation',
                'url' => 'https://jaifoundation.or.id/',
                'image' => 'JAI.png',
                'slug' => '#'
            ],
            [
                'name' => 'GDSC UIN Jakarta',
                'url' => 'https://gdsc-uinjkt.github.io/',
                'image' => 'GDSC.png',
                'slug' => '#'
            ],
        ];
        $this->specializations = [
            'Full Stack Development',
            'API Development & Integration',
            'Landing Page Development',
            'Dashbord Development',
            'UI/UX Implementation',
            'Performance Optimization',
            'Website Search Engine Optimization (SEO)',
            'Web Deployment'
        ];
    }

    public function home()
    {
        $services = $this->services;
        $portfolios = $this->portfolios;
        $specializations = $this->specializations;
        return view('landing.home', compact('specializations', 'services', 'portfolios'));
    }

    public function about()
    {
        return view('landing.about');
    }

    public function service()
    {
        $services = $this->services;
        return view('landing.service', compact('services'));
    }
}
