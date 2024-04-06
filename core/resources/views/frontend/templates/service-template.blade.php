<section class="relative bg-gray-50 py-16">
    <div class="container pb-16">
        <div class="grid grid-cols-1 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Our Best Services</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold bg-gradient-to-r from-red-600 to-indigo-600 text-transparent bg-clip-text">Need any others help for your business? We are here for you.</h3>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">
            <div class="p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 transition duration-500 rounded-2xl mt-6">
                <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-link-add"></i>
                </div>

                <div class="content mt-7">
                    <a href="{{ route('frontend/solutions',['slug'=>'#seo-and-digital-marketing']) }}" class="title h5 text-lg font-medium hover:text-indigo-600">SEO & Digital Marketing</a>
                    <p class="text-slate-400 mt-3">Unleashing the Power of Digital Marketing: Target Your Audience and Achieve Unprecedented Growth</p>

                    <div class="mt-5">
                        <a href="{{ route('frontend/solutions',['slug'=>'#seo-and-digital-marketing']) }}" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 transition duration-500 rounded-2xl mt-6">
                <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-globe"></i>
                </div>

                <div class="content mt-7">
                    <a href="{{ route('frontend/solutions',['slug'=>'#web-design-and-development']) }}" class="title h5 text-lg font-medium hover:text-indigo-600">Web Design & Development</a>
                    <p class="text-slate-400 mt-3">Crafting beautiful websites, building solid foundations</p>

                    <div class="mt-5">
                        <a href="{{ route('frontend/solutions',['slug'=>'#web-design-and-development']) }}" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 transition duration-500 rounded-2xl mt-6">
                <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800">
                    <i class="uil uil-arrow"></i>
                </div>

                <div class="content mt-7">
                    <a href="{{ route('frontend/solutions',['slug'=>'#software-development']) }}" class="title h5 text-lg font-medium hover:text-indigo-600">Software Development</a>
                    <p class="text-slate-400 mt-3">Streamline your operations and improve efficiency with our tailored software solutions</p>

                    <div class="mt-5">
                        <a href="{{ route('frontend/solutions',['slug'=>'#software-development']) }}" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
