@extends('layouts.master')

@section('title')
    Solutions
@endsection
@section('meta_description')
    Boost your online presence with our expert services in SEO, Digital Marketing, Web Design & Development, and Software Development. Grow your business with us!
@endsection

@section('body')
    <section class="relative table w-full py-16 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="text-3xl leading-normal font-semibold">Solutions</h3>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
            <ul class="breadcrumb tracking-[0.5px] mb-0 inline-block">
                <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ route('home') }}">#Hashtags Checker</a></li>
                <li class="inline breadcrumb-item uppercase text-[13px] font-bold text-indigo-600" aria-current="page">Solutions</li>
            </ul>
        </div>

    </section><!--end section-->
    <div class="relative">
        <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <!-- Start Section-->
    <section class="relative md:py-24 py-16" id="seo-and-digital-marketing">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-4 md:col-span-6">
                    <div class="grid grid-cols-12 gap-6 items-center">
                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="{{ asset('frontend/assets/images/seo-and-digital-marketing-1.jpg') }}" class="shadow rounded-md" alt="SEO & Digital Marketing">
                                <img src="{{ asset('frontend/assets/images/seo-and-digital-marketing-2.jpg') }}" class="shadow rounded-md" alt="SEO & Digital Marketing">
                            </div>
                        </div>

                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="{{ asset('frontend/assets/images/seo-and-digital-marketing-3.jpg') }}" class="shadow rounded-md" alt="SEO & Digital Marketing">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 md:col-span-6">
                    <div class="lg:ml-5">
                        <div class="flex mb-4">
                            <span class="text-indigo-600 text-2xl font-bold mb-0"><span class="text-4xl font-bold">SEO & Digital Marketing</span></span>
                        </div>
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Unleashing the Power of Digital Marketing: Target Your Audience and Achieve Unprecedented Growth</h3>
                        <p class="text-slate-400">We pride ourselves on providing the best digital marketing service in the industry. Our team of experts is dedicated to helping businesses increase their online visibility, reach more customers, and drive sales and revenue. We offer a comprehensive range of services, including search engine optimization (SEO), pay-per-click (PPC) advertising, social media marketing, email marketing, content marketing, and analytics. Our services are tailored to meet the specific needs of each individual client, and are designed to deliver measurable results.</p>

{{--                        <div class="mt-6">--}}
{{--                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white m-1 lightbox"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video h-4 w-4"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></a><span class="font-semibold align-middle mr-3">Watch Video</span>--}}
{{--                            <a href="#" class="btn bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full">Read More</a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="col-span-12">
                    <p class="text-slate-400">Our SEO services include keyword research, on-page optimization, and technical optimization to help improve your website's visibility in search engine results pages (SERPs). Our PPC services include ad campaign management and optimization to help drive targeted traffic to your website. Our social media marketing services include social media account management, content creation, and paid advertising to help build a strong online presence and increase engagement with your audience. Our email marketing services include email campaign management, design, and delivery to help you reach your target audience and drive sales. Our content marketing services include content creation, distribution and promotion to help you attract and retain customers.</p>
                    <br>
                    <p class="text-slate-400">Our team of analytics experts will help you measure the results of your marketing campaigns and make data-driven decisions to optimize your strategy and improve your ROI. With our digital marketing services, you can expect to see an increase in website traffic, engagement, and conversions, and ultimately, growth in your business. We offer transparent, cost-effective and flexible pricing options and we guarantee you the best return on your investment.</p>
                </div>

            </div><!--end grid-->
        </div>
    </section><!--end section-->
    <!-- End Section-->

    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="web-design-and-development">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-4 order-1 md:order-2">
                    <div class="lg:ml-8">
                        <img src="{{ asset('frontend/assets/images/illustrator/SEO_SVG.svg') }}" alt="">
                    </div>
                </div>

                <div class="md:col-span-8 mt-8 md:mt-0 order2 md:order-1">
                    <div>
                        <div class="flex mb-4">
                            <span class="text-indigo-600 text-2xl font-bold mb-0"><span class="text-4xl font-bold">Web Design & Development</span></span>
                        </div>
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Crafting beautiful websites, building solid foundations</h3>
                        <p class="text-slate-400 max-w-xl">We specialize in providing the best web design and development service in the industry. Our team of experts is dedicated to creating visually stunning websites that are not only easy on the eyes but also easy to navigate. We understand that a website is often the first point of contact between a business and its customers, and we strive to make that experience as seamless and positive as possible.</p>
{{--                        <div class="mt-6">--}}
{{--                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white m-1 lightbox"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video h-4 w-4"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></a><span class="font-semibold align-middle mr-3">Watch Video</span>--}}
{{--                            <a href="#" class="btn bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full">Read More</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-span-12">
                <p class="text-slate-400">Our web design services include user interface (UI) design, user experience (UX) design, and responsive design to ensure that your website is optimized for all devices. We use the latest design trends and technologies to create websites that are not only aesthetically pleasing but also highly functional.</p>
                <br>
                <p class="text-slate-400">Our web development services include front-end development, back-end development, and e-commerce development to ensure that your website not only looks good but also performs well. We use a variety of programming languages and frameworks to build websites that are fast, secure, and scalable. Our team of developers is well-versed in the latest technologies, and we can provide solutions that are tailored to your specific needs.</p>
                <br>
                <p class="text-slate-400">We understand that a website is a living entity that needs regular updates and maintenance, that's why we provide ongoing support and maintenance services to ensure that your website is always up-to-date and performing at its best.</p>
                <br>
                <p class="text-slate-400">We offer transparent, cost-effective and flexible pricing options and we guarantee you the best return on your investment. Trust us to build you a website that will help you stand out and achieve your business goals.</p>

                <ul class="list-none text-slate-400 my-6">
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Elevate your online presence with our visually stunning and highly functional web design</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Stand out from the competition with our cutting-edge web development solutions</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Experience seamless navigation and user-friendly interface with our expert UI/UX design</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Get a responsive website that looks great on any device with our responsive design services</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i> Ensure your website is always performing at its best with our ongoing support and maintenance services</li>
                </ul>
            </div>
        </div><!--end container-->
    </section>

    <section class="relative md:py-24 py-16" id="software-development">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-4">
                    <div class="grid grid-cols-12 gap-4 items-center">
                        <div class="col-span-7">
                            <div class="grid grid-cols-1 gap-4">
                                <img src="{{ asset('frontend/assets/images/software-development-1.jpg') }}" class="shadow rounded-lg" alt="software development">
                            </div>
                        </div>

                        <div class="col-span-5">
                            <div class="grid grid-cols-1 gap-4">
                                <img src="{{ asset('frontend/assets/images/software-development-2.jpg') }}" class="shadow rounded-lg" alt="software development">

                                <div class="w-28 h-28 bg-indigo-600/10 rounded-lg"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="md:col-span-8">
                    <div class="md:ml-6">
                        <div class="flex mb-4">
                            <span class="text-indigo-600 text-2xl font-bold mb-0"><span class="text-4xl font-bold">Software Development</span></span>
                        </div>
                        <h4 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Streamline your operations and improve efficiency with our tailored software solutions</h4>
                        <p class="text-slate-400 my-3">We are committed to providing the best software development services in the industry. Our team of experts is dedicated to delivering high-quality, reliable and scalable software solutions that meet the unique needs of your business. We use the latest technologies and industry best practices to create software that is not only functional but also user-friendly and visually pleasing.</p>
                        <p class="text-slate-400 my-3">Our software development services include custom software development, mobile app development, and web application development. We work closely with our clients to understand their specific needs and requirements, and we provide solutions that are tailored to their unique business objectives.</p>
{{--                        <div class="mt-6">--}}
{{--                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white m-1 lightbox"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video h-4 w-4"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></a><span class="font-semibold align-middle mr-3">Watch Video</span>--}}
{{--                            <a href="#" class="btn bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full">Read More</a>--}}
{{--                        </div>--}}
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
            <div class="col-span-12">
                <p class="text-slate-400 my-3">Our custom software development services include the design, development, and deployment of software that is unique to your business. We use a variety of programming languages and frameworks to create software that is fast, secure, and scalable.</p>
                <p class="text-slate-400 my-3">Our mobile app development services include the design, development, and deployment of mobile apps for iOS and Android platforms. We use the latest technologies to create mobile apps that are fast, responsive, and user-friendly.</p>
                <p class="text-slate-400 my-3">Our web application development services include the design, development, and deployment of web-based applications. We use the latest technologies to create web applications that are fast, secure, and scalable.</p>
                <p class="text-slate-400 my-3">We understand that software development is an ongoing process and that's why we provide ongoing support and maintenance services to ensure that your software is always up-to-date and performing at its best. We offer transparent, cost-effective and flexible pricing options and we guarantee you the best return on your investment. Trust us to build you software that will help you achieve your business goals.</p>
            </div>
        </div><!--end container-->
    </section>

    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid grid-cols-1 text-center">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Contact us</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Have a question? We're here to help. Get in touch with us today!</h3>
                <div class="mt-6">
                    <a href="{{ route('frontend/contact') }}" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mr-2 mt-2"><i class="uil uil-phone"></i> Contact Me</a>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>

@endsection
