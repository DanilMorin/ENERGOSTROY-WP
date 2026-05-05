document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.service-slider');

    if (slider) {
        new Splide(slider, {
            type: 'loop',
            speed: 1900,
            perPage: 1,
            focus: 'center',
            arrows: true,
            pagination: false,
            width: '1500px',
            padding: '20px',
            arrowPath: 'M10.3833 6.28337L13.3333 3.33337L30 20L13.3333 36.6667L10.3833 33.7167L24.1 20L10.3833 6.28337Z',
        }).mount();
    }
});
