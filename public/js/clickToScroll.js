document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const scrollToSection = urlParams.get('scroll_to');

    function scrollToAndRemoveURLParam(sectionId) {
        setTimeout(function() {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'center'
                });

                const newURL = window.location.href.split('?')[0]; 
                history.replaceState({}, document.title, newURL); 
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
        case 'lapangan':
            scrollToAndRemoveURLParam('lapangan');
            break;
        case 'perpus':
            scrollToAndRemoveURLParam('perpus');
            break;
        case 'lab':
            scrollToAndRemoveURLParam('lab');
            break;
        case 'aula':
            scrollToAndRemoveURLParam('aula');
            break;
        default:
            break;
    }
});