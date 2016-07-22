import $ from 'jquery'
import background from '../../bower_components/formstone/dist/js/background'

const initVideoBg = () => {
    $('.background').each(function() { // using function for $(this) object
        console.log($(this).data('video'))
        $(this).background({
            source: {
                video: $(this).data('video')
            }
        })
    })

    $('.mute-slider-icon').hide();
    $('.mute-slider-icon').click(() => {
        if ($('video').prop('muted')) {
            $('.mute-slider-icon').show();
            $('.unmute-slider-icon').hide();
        } else {
            $('.mute-slider-icon').hide();
            $('.unmute-slider-icon').show();
        }
    });

    $('.background').background('unmute')
    $('.mute-slider-icon').hide()
    $('.unmute-slider-icon').click(() => {
        $('.background').background('mute')
        $('.unmute-slider-icon').hide()
        $('.mute-slider-icon').show()
    })

    $('.mute-slider-icon').click(() => {
        $('.background').background('unmute')
        $('.mute-slider-icon').hide()
        $('.unmute-slider-icon').show()
    })

    $('.background').background('play')
    $('.play-video').hide()
    $('.pause-video').click(() => {
        $('.background').background('pause')
        $('.pause-video').hide()
        $('.play-video').show()
    })

    $('.play-video').click(() => {
        $('.background').background('play')
        $('.play-video').hide()
        $('.pause-video').show()
    })

}

export default initVideoBg
