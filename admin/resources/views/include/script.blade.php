<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.getElementById('menu-button');
        const closeButton = document.getElementById('close-button');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        if (menuButton) {
            menuButton.addEventListener('click', function() {
                console.log('Menu button clicked');
                sidebar.classList.toggle('-translate-x-full');
                sidebar.classList.toggle('xl:-translate-x-full');
                mainContent.classList.toggle('shifted');
            });
        } else {
            console.error('Menu button not found');
        }

        if (closeButton) {
            closeButton.addEventListener('click', function() {
                console.log('Close button clicked');
                sidebar.classList.toggle('-translate-x-full');
                sidebar.classList.toggle('xl:-translate-x-full');
                mainContent.classList.toggle('shifted');
            });
        } else {
            console.error('Close button not found');
        }

        const currentLocation = window.location.href;
        const sidebarLinks = document.querySelectorAll('#sidebar a');

        sidebarLinks.forEach(link => {
            if (link.href === currentLocation) {
                link.classList.add('bg-[#FFE4CD]', '');
                link.closest('div').classList.remove('hidden');
            }
        });
    });
</script>

<script>
    function toggleMenu() {
        var menu = document.getElementById('menu');

        menu.classList.toggle('hidden');

    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const arrow = item.querySelector('.faq-arrow');

            question.addEventListener('click', () => {
                answer.classList.toggle('hidden');
                arrow.classList.toggle('rotate-90');
            });
        });
    });
</script>
<script>
    function toggleMenu() {
        var menu = document.getElementById('menu');

        menu.classList.toggle('hidden');

    }
</script>
