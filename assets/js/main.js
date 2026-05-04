document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.service-slider');

    if (slider) {
        new Splide(slider, {
            type: 'loop',
            perPage: 1,
            gap: '24px',
            focus: 'center',
            arrows: true,
            pagination: false,
            width: '1500px',
        }).mount();
    }
});
