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
        case 'tk-akademik':
            scrollToAndRemoveURLParam('tk-akademik');
            break;
        case 'sd-akademik':
            scrollToAndRemoveURLParam('sd-akademik');
            break;
        case 'smp-akademik':
            scrollToAndRemoveURLParam('smp-akademik');
            break;
        case 'sma-akademik':
            scrollToAndRemoveURLParam('sma-akademik');
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
        case 'basket':
            scrollToAndRemoveURLParam('basket');
            break;
        case 'sepakbola':
            scrollToAndRemoveURLParam('sepakbola');
            break;
        case 'bulutangkis':
            scrollToAndRemoveURLParam('bulutangkis');
            break;
        case 'voli':
            scrollToAndRemoveURLParam('voli');
            break;
        case 'tk-struktur':
            scrollToAndRemoveURLParam('tk-struktur');
            break;
        case 'sd-struktur':
            scrollToAndRemoveURLParam('sd-struktur');
            break;
        case 'smp-struktur':
            scrollToAndRemoveURLParam('smp-struktur');
            break;
        case 'sma-struktur':
            scrollToAndRemoveURLParam('sma-struktur');
            break;
        default:
            break;
    }
});