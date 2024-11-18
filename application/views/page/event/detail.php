<div class="event-card p-6 bg-white rounded-lg shadow-md">
    <img src="<?= base_url('assets/img/event/' . $event->event_poster); ?>" alt="<?= $event->event_name; ?>"
        class="w-full h-auto rounded-lg mb-4">
    <h1 class="text-2xl font-bold text-gray-800"><?= $event->event_name; ?></h1>
    <p class="text-gray-600"><strong><i class="fa-solid fa-calendar-days"></i> </strong>
        <?= date('d F Y', strtotime($event->event_date)); ?></p>
    <p class="text-gray-600"><strong><i class="fa-solid fa-location-dot"></i> </strong>
        <?= htmlspecialchars($event->venue); ?></p>
    <p class="text-gray-600"><strong><i class="fa-solid fa-clock"></i> </strong>
        <?= date('H:i', strtotime($event->event_time)); ?></p>
    <p class="text-gray-600"> <strong>Max Ticket:</strong>
        <?= $event->max_participants; ?> <i class="fa-solid fa-ticket"></i> </p>
    <p class="text-gray-600"><strong>Deskripsi:</strong> <?= nl2br(htmlspecialchars($event->description)); ?></p>
    <?php if (strtotime($event->event_date) > time()): ?>
        <a href="<?= base_url('event/register/' . $event->event_id); ?>"
            class="mt-4 inline-block bg-blue-400 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600">Buy
            Ticket</a>
        <a href="<?= base_url(); ?>"
            class="mt-4 inline-block bg-gray-300 text-white font-semibold py-2 px-4 rounded hover:bg-gray-600"><i
                class="fa-solid fa-chevron-left"></i> Back</a>
    <?php else: ?>
        <button class="mt-4 inline-block bg-gray-300 text-white font-semibold py-2 px-4 rounded cursor-not-allowed"
            disabled>Ticket Unavailable</button>
        <a href="<?= base_url(); ?>"
            class="mt-4 inline-block bg-blue-300 text-white font-semibold py-2 px-4 rounded hover:bg-blue-500"><i
                class="fa-solid fa-chevron-left"></i> Back</a>
    <?php endif; ?>
</div>