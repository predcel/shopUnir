$(function () {
    const url = `${$('#urlAsset').val()}videos/`;

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    const reproductor = $("#videoPlayer").get(0);
    const playList = ['Casco Alpinestars SUPERTECH R10.mp4',
        'AGV_k1.mp4',
        'ARAIRX-7V.mp4',
        'cascoRedBull.mp4'
    ];
    let videoPlaying = 0;

    $("#videoPlayer").on('play', function () {
        $(".bi-play-fill").hide();
        $(".bi-pause-fill").show();
    });

    $("#videoPlayer").on('pause', function () {
        $(".bi-play-fill").show();
        $(".bi-pause-fill").hide();
    });

    $(".border").click(function (e) {
        e.preventDefault();
        videoPlaying = $(this).children('input[type=hidden]').val()
        reproductor.pause();
        $("#sourceVideo").attr('src', `${url}${playList[videoPlaying]}`);
        reproductor.load();
        reproductor.play()
        bordeAzul();
        // $.each($("#colVideos").children(), function (indexInArray, valueOfElement) {
        //     if ($(valueOfElement).children().hasClass('border-danger')) {
        //         $(valueOfElement).children().addClass('border-primary border-1').removeClass('border-danger border-3');
        //     }
        // });
        $(this).addClass('border-danger border-3').removeClass('border-primary border-1');
    });

    $("#backwardBtn").click(function (e) {
        e.preventDefault();
        videoPlaying--;
        if (videoPlaying < 0) {
            videoPlaying = playList.length - 1;
        }
        reproductor.pause();
        $("#sourceVideo").attr('src', `${url}${playList[videoPlaying]}`);
        reproductor.load();
        reproductor.play();
        bordeAzul();
        $(`#divVideo${videoPlaying}`).addClass('border-danger border-3').removeClass('border-primary border-1');
    });

    $("#forwardBtn").click(function (e) {
        e.preventDefault();
        videoPlaying++;
        if (videoPlaying == playList.length) {
            videoPlaying = 0;
        }
        reproductor.pause();
        $("#sourceVideo").attr('src', `${url}${playList[videoPlaying]}`);
        reproductor.load();
        reproductor.play();
        bordeAzul();
        $(`#divVideo${videoPlaying}`).addClass('border-danger border-3').removeClass('border-primary border-1');
    });

    $(".bi-pause-fill").hide();
    $("#playPause").click(function (e) {
        e.preventDefault();
        if (reproductor.paused) {
            reproductor.play();
            $(".bi-play-fill").hide();
            $(".bi-pause-fill").show();
        }
        else {
            reproductor.pause();
            $(".bi-play-fill").show();
            $(".bi-pause-fill").hide();
        }
    });
    $("#reload").click(function (e) {
        e.preventDefault();
        reproductor.load();
        reproductor.play();
        $(".bi-play-fill").hide();
        $(".bi-pause-fill").show();
    });

    $("#muting").click(function (e) {
        e.preventDefault();
        if ($("#videoPlayer").prop('muted')) {
            $("#videoPlayer").prop('muted', false)
            $(this).addClass('btn-secondary').removeClass('btn-danger');
        } else {
            $("#videoPlayer").prop('muted', true)
            $(this).addClass('btn-danger').removeClass('btn-secondary');
        }

    });

    $("#volLess").click(function (e) {
        e.preventDefault();
        let vol = reproductor.volume;
        if (vol > 0) {
            vol = (vol * 10 - 1) / 10;
        }
        reproductor.volume = vol;
    });

    $("#volMore").click(function (e) {
        e.preventDefault();
        let vol = reproductor.volume;
        if (vol < 1) {
            vol = (vol * 10 + 1) / 10;

        }
        reproductor.volume = vol;
    });

    $(".bi-aspect-ratio").hide();
    $("#screenMode").click(function (e) {
        e.preventDefault();
        if ($(this).parent().hasClass('col-lg-8')) {
            $(this).parent().addClass('col-lg-12').removeClass('col-lg-8');
            $(".bi-aspect-ratio").show();
            $(".bi-aspect-ratio-fill").hide();
        } else {
            $(this).parent().addClass('col-lg-8').removeClass('col-lg-12');
            $(".bi-aspect-ratio").hide();
            $(".bi-aspect-ratio-fill").show();
        }
    });

    $("#fullScreen").click(function (e) {
        e.preventDefault();
        if (reproductor.requestFullscreen) {
            reproductor.requestFullscreen();
        } else if (reproductor.webkitRequestFullscreen) { /* Safari */
            reproductor.webkitRequestFullscreen();
        } else if (reproductor.msRequestFullscreen) { /* IE11 */
            reproductor.msRequestFullscreen();
        }
    });

    $("#screenShot").click(function (e) {
        e.preventDefault();
        const w = reproductor.videoWidth * .5;
        const h = reproductor.videoHeight * .5;
        $("#frame").attr('width', w);
        $("#frame").attr('height', h);
        canvasContext = frame.getContext("2d");
        canvasContext.drawImage(reproductor, 0, 0, w, h);
    });

    $("#slowBtn").click(function (e) {
        e.preventDefault();
        let velocidad = reproductor.playbackRate;
        if (velocidad > 0) {
            velocidad = (velocidad * 100 - 25) / 100;
        }
        reproductor.playbackRate = velocidad;
    });

    $("#fastBtn").click(function (e) {
        e.preventDefault();
        let velocidad = reproductor.playbackRate;
        if (velocidad < 2) {
            velocidad = (velocidad * 100 + 25) / 100;

        }
        reproductor.playbackRate = velocidad;
    });
});

const bordeAzul = () => {
    $.each($("#colVideos").children(), function (indexInArray, valueOfElement) {
        if ($(valueOfElement).children().hasClass('border-danger')) {
            $(valueOfElement).children().addClass('border-primary border-1').removeClass('border-danger border-3');
        }
    });
}
