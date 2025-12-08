<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $services;
    protected $portfolios;
    protected $specializations;
    protected $categories;
    protected $techs;

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
        $this->portfolios = collect([
            [
                'id' => 1,
                'title' => 'GDSC UIN Jakarta',
                'url' => 'https://gdsc-uinjkt.github.io/',
                'image' => 'GDSC.png',
                'slug' => 'gdsc-uin-jkt',
                'category' => [2, 3],
                'tech' => [7, 10],
                'repository' => 'https://github.com/gdsc-uinjkt/gdsc-uinjkt.github.io',
                'detail_content' => '
                    <h4>Project Overview</h4>
                    <p>
                        This project focuses on developing a modern, functional, and visually appealing website for the Google Developer Student Clubs (GDSC) UIN Jakarta. The platform is designed to serve as a hub for information, community activities, event announcements, and learning resources for students interested in technology and software development.
                    </p>
                    <h4>Purpose & User Experience</h4>
                    <p>
                        The website adopts a straightforward content structure that allows visitors to easily understand the purpose of GDSC, explore available learning opportunities, and get to know the team behind the community. With balanced typography, clean spacing, and a visually friendly layout, the platform prioritizes readability and smooth navigation across all devices.
                    </p>
                    <h4>Website Features</h4>
                    <p>
                        The website includes several essential features developed to support communication and engagement between GDSC and its members. The design prioritizes clarity, usability, and fast access to information that is frequently needed by students.
                    </p>
                    <ul>
                        <li>Team member directory with role descriptions</li>
                        <li>Mobile-responsive layout for cross-device accessibility</li>
                        <li>Smooth animations and interactive components</li>
                    </ul>
                    <h4>Results</h4>
                    <p>
                        Overall, the GDSC UIN Jakarta website reflects a simple yet effective approach to web development—combining clean code, responsive design principles, and efficient static deployment to deliver a smooth, accessible, and informative digital experience for its audience.
                    </p>
                '
            ],
            [
                'id' => 2,
                'title' => 'JAI Foundation',
                'url' => 'https://jaifoundation.or.id/',
                'image' => 'JAI.png',
                'slug' => 'jai-foundation',
                'category' => [2, 3, 6],
                'tech' => [4, 9],
                'repository' => '',
                'detail_content' => '
                    <h4>Project Overview</h4>
                    <p>
                        This project focuses on developing a clean, informative, and user-friendly website for JAI Foundation, a non-profit organization dedicated to supporting community welfare, education, and social empowerment. The platform is designed to present the foundation’s mission, highlight its ongoing programs, and provide a reliable source of information for donors, volunteers, and beneficiaries.
                    </p>

                    <h4>Purpose & User Experience</h4>
                    <p>
                        The website adopts a simple and structured layout to ensure visitors can easily discover what the foundation does, learn about its initiatives, and access key information without friction. With warm visuals, clear typography, and well-organized sections, the platform emphasizes readability, trustworthiness, and smooth navigation on any device.
                    </p>

                    <h4>Website Features</h4>
                    <p>
                        The website includes essential features tailored for non-profit communication and public outreach. Each component is designed to help the foundation present its work transparently and engage more effectively with its community.
                    </p>
                    <ul>
                        <li>Program overview section describing social and community initiatives</li>
                        <li>Organization profile with mission, values, and goals</li>
                        <li>Contact and outreach section for inquiries and support</li>
                        <li>Mobile-responsive layout for accessibility across all devices</li>
                    </ul>

                    <h4>Results</h4>
                    <p>
                        The JAI Foundation website successfully delivers a clear and accessible platform that enhances the organization’s public visibility and credibility. With a professional layout, responsive design, and straightforward content structure, the site helps the foundation communicate its mission, connect with supporters, and strengthen community engagement.
                    </p>
                '
            ],
            [
                'id' => 3,
                'title' => 'Laser Cutting Spesialis',
                'url' => 'https://lasercuttingspesialis.com/',
                'image' => 'LCS.png',
                'slug' => 'laser-cutting-spesialis',
                'category' => [1, 2, 3, 4, 5],
                'tech' => [1, 5, 7, 8, 9, 10],
                'repository' => '',
                'detail_content' => '
                    <h4>Project Overview</h4>
                    <p>
                        This project was built to provide a professional and accessible online presence for Laser Cutting Spesialis — a fabrication and laser-cutting service. The website is designed to showcase the company’s expertise, services, and past work, offering prospective clients a clear view of capabilities, service offerings, and contact information.
                    </p>

                    <h4>Purpose & User Experience</h4>
                    <p>
                        Our goal was to create a user-friendly platform where visitors can quickly understand the services offered, view sample projects or services, and reach out for inquiries or orders. The site emphasizes clarity, ease of navigation, and availability of essential information — from service descriptions to contact or order forms — to support conversion from visitor to customer.
                    </p>

                    <h4>Website Features & Service Showcase</h4>
                    <p>
                        To effectively represent the workshop’s services, the website includes straightforward features tailored for service-based businesses. It balances presentation, information clarity, and responsiveness to ensure that potential clients have a good experience regardless of device.
                    </p>
                    <ul>
                        <li>Service listing with detailed descriptions of laser cutting, metal fabrication, CNC routing, engraving, and other offerings.</li>
                        <li>Gallery or showcase of previous works — to demonstrate workmanship, material quality, and customization capabilities.</li>
                        <li>Contact and inquiry channels — facilitating easy communication for orders, custom quotes, or consultation.</li>
                        <li>Responsive layout to support desktop, tablet, and mobile users across various connection speeds.</li>
                        <li>Clear presentation of materials handled and service specifications (metal plates, acrylics, wood, etc.) to manage client expectations.</li>
                    </ul>

                    <h4>Estimated Workflow & Client Process</h4>
                    <p>
                        Visitors can browse services, view examples of past jobs, and submit inquiries or request quotations. The site serves as a bridge between clients and the workshop, simplifying the process of requesting custom fabrication, discussing materials, and starting projects with minimal friction.
                    </p>

                    <h4>Impact & Outcome</h4>
                    <p>
                        With this website, Laser Cutting Spesialis obtains a professional digital identity that helps build trust with potential clients, improves visibility online, and simplifies customer engagement. The platform supports transparent service offerings and provides a structured way for clients to explore possibilities and place orders — contributing to increased business credibility and outreach.
                    </p>
                '
            ],
        ]);
        $this->categories = collect([
            ['id' => 1, 'category' => 'Web Application'],
            ['id' => 2, 'category' => 'Company Profiles'],
            ['id' => 3, 'category' => 'Landing Pages'],
            ['id' => 4, 'category' => 'Dashboard Development'],
            ['id' => 5, 'category' => 'Search Engine Optimization'],
            ['id' => 6, 'category' => 'WordPress Development'],
        ]);
        $this->techs = collect([
            ['id' => 1, 'title' => 'Laravel', 'icon' => 'laravel.svg'],
            ['id' => 2, 'title' => 'Next JS', 'icon' => 'nextjs.svg'],
            ['id' => 3, 'title' => 'React JS', 'icon' => 'react.svg'],
            ['id' => 4, 'title' => 'WordPress', 'icon' => 'wordpress.svg'],
            ['id' => 5, 'title' => 'jQuery', 'icon' => 'jQuery.svg'],
            ['id' => 6, 'title' => 'TailwindCSS', 'icon' => 'tailwindcss.svg'],
            ['id' => 7, 'title' => 'Bootstrap', 'icon' => 'bootstrap.svg'],
            ['id' => 8, 'title' => 'SASS', 'icon' => 'sass.svg'],
            ['id' => 9, 'title' => 'PHP', 'icon' => 'php.svg'],
            ['id' => 10, 'title' => 'JavaScript', 'icon' => 'javascript.svg'],
            ['id' => 11, 'title' => 'TypeScript', 'icon' => 'typescript.svg'],
            ['id' => 12, 'title' => 'GIT', 'icon' => 'git.svg'],
        ]);
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
        $portfolios = $this->portfolios->sortByDesc('id')->take(3);
        $specializations = $this->specializations;
        $techs = $this->techs;
        return view('landing.home', compact('specializations', 'techs', 'services', 'portfolios'));
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

    public function portfolio()
    {
        $portfolios = $this->portfolios->sortByDesc('id');
        return view('landing.portfolio', compact('portfolios'));
    }

    public function portfolioDetail($slug)
    {
        $portfolio = $this->portfolios->where('slug', $slug)->first();
        $portfolio['category'] = $this->categories
        ->whereIn('id', $portfolio['category'])
        ->pluck('category')
        ->values();
        $portfolio['tech'] = $this->techs
        ->whereIn('id', $portfolio['tech'])
        ->select(['title', 'icon'])
        ->values();

        return view('landing.portfolioDetail', compact('portfolio'));
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
