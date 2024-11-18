<section id="events" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">List Event</h2>
        <div class="event_list_show grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Event Card 1 -->
            <div class="bg-gray-200 rounded-lg shadow-lg overflow-hidden">
                <!-- <img src="https://source.unsplash.com/600x400/?event,concert" alt="Event 1" class="w-full h-48 object-cover"> -->
                <div class="flex items-center justify-center w-full h-48 bg-gray-300 rounded dark:bg-gray-700">
                    <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Event Type 1</h3>
                    <p class="text-gray-600 mt-2">Nikmati konser musik rock yang menggelegar di kota ini. Jangan
                        lewatkan pengalaman seru ini!</p>
                    <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Pelajari lebih lanjut</a>
                </div>
            </div>
            <!-- Event Card 2 -->
            <div class="bg-gray-200 rounded-lg shadow-lg overflow-hidden">
                <!-- <img src="https://source.unsplash.com/600x400/?event,concert" alt="Event 1" class="w-full h-48 object-cover"> -->
                <div class="flex items-center justify-center w-full h-48 bg-gray-300 rounded dark:bg-gray-700">
                    <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Event Type 2</h3>
                    <p class="text-gray-600 mt-2">Nikmati konser musik rock yang menggelegar di kota ini. Jangan
                        lewatkan pengalaman seru ini!</p>
                    <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Pelajari lebih lanjut</a>
                </div>
            </div>
            <!-- Event Card 3 -->
            <div class="bg-gray-200 rounded-lg shadow-lg overflow-hidden">
                <!-- <img src="https://source.unsplash.com/600x400/?event,concert" alt="Event 1" class="w-full h-48 object-cover"> -->
                <div class="flex items-center justify-center w-full h-48 bg-gray-300 rounded dark:bg-gray-700">
                    <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Event Type 3</h3>
                    <p class="text-gray-600 mt-2">Nikmati konser musik rock yang menggelegar di kota ini. Jangan
                        lewatkan pengalaman seru ini!</p>
                    <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Pelajari lebih lanjut</a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/src/vendor/jquery/3.7.1/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                url: '<?= base_url() ?>Event/get_list_event',
                type: 'POST',
                serverSide: true,
                dataType: 'json',
                success: function (response) {
                    console.log(response)
                    let html = ``;
                    $.each(response.data, function (i, event) {
                        let url_poster = `<?= base_url('assets/img/event/') ?>` + event.event_poster;
                        html += `<div class="bg-gray-200 rounded-lg shadow-lg overflow-hidden">
                <img src="${url_poster}" alt="Event 1" class="w-full h-48 object-cover">
                <!-- <div class="flex items-center justify-center w-full h-48 bg-blue-200 rounded dark:bg-blue-400">
                    <svg class="w-10 h-10 text-gray-200 dark:text-blue-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                    </svg>
                </div> -->
                <div class="p-6">
                    <h3 class="text-1xl font-semibold text-gray-800">${event.event_name}</h3>
                    <p class="font-semibold text-gray-800">${event.event_type}</p>
                    <p class="text-gray-600 mt-2 text-justify">${event.description}</p>
                    <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Lihat detail</a>
                </div>
            </div>`;
                    })
                    $('.event_list_show').html(html)
                }
            })
        })
    </script>
</section>