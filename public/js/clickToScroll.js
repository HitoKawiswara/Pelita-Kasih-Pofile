document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const scrollToSection = urlParams.get('scroll_to');

    // Function to scroll to a section and remove the scroll_to parameter from the URL
    function scrollToAndRemoveURLParam(sectionId) {
        setTimeout(function() {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'center'
                });

                // Remove 'scroll_to' parameter from the URL
                const newURL = window.location.href.split('?')[0]; // Remove existing query parameters
                history.replaceState({}, document.title, newURL); // Replace URL without 'scroll_to' parameter
            }
        }, 500);
    }

    switch (scrollToSection) {
        case 'tentang-kami':
            scrollToAndRemoveURLParam('tentang-kami');
            break;
        case 'visi-misi':
            scrollToAndRemoveURLParam('visi-misi');
            break;
        case 'tk':
            scrollToAndRemoveURLParam('tk');
            break;
        case 'sd':
            scrollToAndRemoveURLParam('sd');
            break;
        case 'smp':
            scrollToAndRemoveURLParam('smp');
            break;
        case 'sma':
            scrollToAndRemoveURLParam('sma');
            break;
        default:
            break;
    }
});