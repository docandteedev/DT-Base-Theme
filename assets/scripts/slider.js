import $ from 'jquery'

const initSlider = () => {
    $('.slider').click(function () {
        var video = $(this).find('video')[0];
        if (video.pause) {
            video.play();
        } else {
            video.pause();
        }
    });
}

export default initSlider