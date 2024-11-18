<style>
    .swiper-container {
        max-width: 100%;
        width: 100%;
    }

    .swiper-slide img {
        width: 100%;
        height: 195px;
        object-fit: cover;
        border-radius: 3px;
    }

    .swiper-pagination {
        position: static;
    }
</style>
<section id="events" class="container mx-auto py-16">
    <h2 class="text-3xl font-bold text-center mb-8">Upcoming Events</h2>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Event Slide 1 -->
            <?php //foreach ($event as $i => $event): ?>
            <div class="swiper-slide max-w-7xl mx-auto px-4">
                <!-- <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Event 1"> -->

                <div role="status"
                    class="space-y-8 animate-pulse md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center">
                    <div class="relative w-full h-48 bg-blue-300 rounded dark:bg-blue-400">
                        <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-10 h-10 text-gray-200 dark:text-blue-300"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                        </svg>
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-blue-300 bg-opacity-10 backdrop-blur-sm p-4 rounded">
                            <h3 class="text-2xl text-white font-semibold"> EVENT TYPE</h3>
                            <p class="mt-2 text-white">EVENT NAME</p>
                        </div>
                    </div>
                    <span class="sr-only">Loading...</span>
                </div>


                <div class="p-4 bg-white shadow-lg rounded-lg mt-4">
                    <p class="text-black-400">EVENT DESC</p>
                    <p class="mt-2 text-black-400"><i class="fa-solid fa-location-dot"></i>VENUE</p>
                    <p class="text-black-400"><i class="fa-solid fa-calendar-days"></i>EVENT DATE</p>
                    <a href="#" class="mt-6 inline-block bg-yellow-300 text-white py-2 px-6 rounded-lg btn_gettiket">Get
                        Ticket</a>
                </div>
            </div>
            <?php //endforeach; ?>
        </div>
    </div>
    <div class="swiper-pagination"></div>


    <!-- Swiper JS Initialization -->
    <script src="<?= base_url() ?>assets/src/vendor/jquery/3.7.1/jquery-3.7.1.min.js"></script>
    <script src="<?= base_url() ?>assets/src/vendor/sweetalert2/sweetalert2.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                url: '<?= base_url() ?>Event/get_upcoming_event',
                type: 'POST',
                serverSide: true,
                dataType: 'json',
                success: function (response) {
                    // console.log(response)
                    let html = ``;
                    $.each(response.data, function (i, event) {
                        let url_poster = `<?= base_url('assets/img/event/') ?>` + event.event_poster;
                        html += `<div class="swiper-slide max-w-7xl mx-auto px-4">
                        <div role="status" class="space-y-8 animate-pulse md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center">
                        <div class="relative w-full h-48 bg-blue-200 rounded dark:bg-blue-400">
                            <!-- <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-10 h-10 text-gray-200 dark:text-blue-300"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 18">
                                <path
                                    d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                            </svg> -->
                            <img src="${url_poster}" alt="Event 1">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-black-600 bg-opacity-30 backdrop-blur-sm p-4 rounded">
                                <h3 class="text-2xl text-white font-semibold"> ${event.event_name}</h3>
                                <h4 class="text-1xl text-white font-semibold mt-4">${event.event_type}</h4>
                            </div>
                        </div>
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="p-4 bg-white shadow-lg rounded-lg mt-4">
                        <!-- <p class="text-black-400 text-justify">${event.description}</p> -->
                        <p class="mt-2 text-black-400"><i class="fa-solid fa-location-dot"></i> ${event.venue}</p>
                        <p class="text-black-400"><i class="fa-solid fa-calendar-days"></i> ${event.event_date}</p>
                        <a href="#" class="btn mt-6 inline-block bg-yellow-300 text-white py-2 px-6 rounded-lg btn_gettiket" data-eventid="${event.event_id}" data-eventname="${event.event_name}">Get Ticket</a>
                    </div></div>`;
                    })
                    $('.swiper-wrapper').html(html)

                    const swiper = new Swiper('.swiper-container', {
                        loop: true,
                        spaceBetween: 10,
                        slidesPerView: 1,
                        autoplay: {
                            delay: 3000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });

                    $('.btn_gettiket').on('click', function () {
                        let event_id = $(this).data('eventid');
                        let event_name = $(this).data('eventname');
                        Swal.fire({
                            title: `Kamu ingin membeli tiket, ${event_name}?`,
                            showDenyButton: false,
                            showCancelButton: true,
                            confirmButtonText: "Ya",
                            // denyButtonText: `Don't save`
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                Swal.fire("Saved!", "", "success");
                            } else if (result.isCancle) {
                                Swal.fire("Changes are not saved", "", "info");
                            }
                        });
                        // alert(event_id)
                    });
                }
            });
        })
    </script>
</section>