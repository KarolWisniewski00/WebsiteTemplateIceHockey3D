var w = window.innerWidth;
if (w < 992) {
} else {
    //SECOND
    gsap.fromTo("#second", {
        x: 200,
        opacity: 0
    }, {
        scrollTrigger: {
            scrub: true,
            ease: "slow(0.7, 0.7, false)",
            trigger: '#second-header',
            start: "bottom bottom",
            end: "200em 500em"
        },
        x: 0,
        opacity: 1
    });

    //THIRD
    gsap.fromTo("#third-text", {
        x: -200,
        opacity: 0
    }, {
        scrollTrigger: {
            scrub: true,
            ease: "slow(0.7, 0.7, false)",
            trigger: '#third-paragraf',
            start: "bottom bottom",
            end: "200em 500em"
        },
        x: 0,
        opacity: 1
    });
    gsap.fromTo("#third-images", {
        x: 200,
        opacity: 0
    }, {
        scrollTrigger: {
            scrub: true,
            ease: "slow(0.7, 0.7, false)",
            trigger: '#third-paragraf',
            start: "bottom bottom",
            end: "200em 500em"
        },
        x: 0,
        opacity: 1
    });

    //FOURTH
    gsap.fromTo("#table-gsap", {
        x: -200,
        opacity: 0
    }, {
        scrollTrigger: {
            scrub: true,
            ease: "slow(0.7, 0.7, false)",
            trigger: '#table',
            start: "bottom bottom",
            end: "200em 500em"
        },
        x: 0,
        opacity: 1
    });

    //timeline on start - FIRST
    var timeline = new TimelineMax();
    timeline.from("header", 1, { y: -100, opacity: 0 }, 0)
        .from("#first", 1, { y: 100, opacity: 0 }, 0)
        .from('canvas', 1, { x: 200, opacity: 0 })
        .from('#number-1', 3, { y: 100, opacity: 0 })
        .from('.puck', 3, { x: -200, opacity: 0 });
}