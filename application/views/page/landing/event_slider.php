<section id="events" class="container mx-auto py-16">
    <h2 class="text-3xl font-bold text-center mb-8">Upcoming Events</h2>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Event Slide 1 -->
            <?php foreach ($event as $i => $event): ?>
                <div class="swiper-slide">
                    <!-- <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Event 1"> -->

                    <div role="status" class="space-y-8 animate-pulse md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center">
                        <div class="flex items-center justify-center w-full h-48 bg-gray-300 rounded sm:w-96 dark:bg-gray-700">
                            <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                            </svg>
                        </div>
                        <div class="w-full bg-blue">
                            <!-- <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
                            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[480px] mb-2.5"></div>
                            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
                            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[440px] mb-2.5"></div>
                            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div>
                            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]"></div> -->

                            <p class="mt-2"><?= $event->event_name; ?></p>
                        </div>
                        <span class="sr-only">Loading...</span>
                    </div>


                    <div class="p-4 bg-white shadow-lg rounded-lg mt-4">
                        <h3 class="text-2xl font-semibold"><?= $event->event_type; ?></h3>
                        <p class="mt-2"><?= $event->event_name; ?></p>
                        <p class="mt-2"><?= $event->event_date; ?></p>
                        <p class="mt-2"><i class="fa fa-map"></i><?= $event->venue; ?></p>
                        <a href="#" class="mt-6 inline-block bg-yellow-300 text-white py-2 px-6 rounded-lg">Get Ticket</a>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Event Slide 2 -->
            <!-- <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fFRlY2glMjBDb25mZXJlbmNlfGVufDB8fDB8fHww" alt="Event 2">
                <div class="p-4 bg-white shadow-lg rounded-lg mt-4">
                    <h3 class="text-2xl font-semibold">Tech Conference</h3>
                    <p class="mt-2">Explore the latest in technology and innovation.</p>
                    <a href="#" class="mt-6 inline-block bg-yellow-300 text-white py-2 px-6 rounded-lg">Get Ticket</a>
                </div>
            </div> -->

            <!-- Event Slide 3 -->
            <!-- <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1486892539609-d5322f938c50?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Event 3">
                <div class="p-4 bg-white shadow-lg rounded-lg mt-4">
                    <h3 class="text-2xl font-semibold">Photography Workshop</h3>
                    <p class="mt-2">Sharpen your skills with hands-on sessions and expert guidance.</p>
                    <a href="#" class="mt-6 inline-block bg-yellow-300 text-white py-2 px-6 rounded-lg">Get Ticket</a>
                </div>
            </div> -->

            <!-- Event Slide 4 -->
            <!-- <div class="swiper-slide">
                <img src="https://media.istockphoto.com/id/517345964/photo/crowd-of-people-at-an-outdoor-festival.webp?a=1&b=1&s=612x612&w=0&k=20&c=4K0GY4jC-UQlOryI1GN0VWFbruWv9FIlGT9eWURfHUE=" alt="Event 4">
                <div class="p-4 bg-white shadow-lg rounded-lg mt-4">
                    <h3 class="text-2xl font-semibold">Food Festival</h3>
                    <p class="mt-2">Taste the best local cuisines from around the world.</p>
                    <a href="#" class="mt-6 inline-block bg-yellow-300 text-white py-2 px-6 rounded-lg">Get Ticket</a>
                </div>
            </div> -->
        </div>
    </div>
    <div class="swiper-pagination"></div>
</section>