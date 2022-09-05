// import "./bootstrap";

// import Alpine from "alpinejs";

// window.Alpine = Alpine;

// Alpine.start();

$(document).ready(function () {
    var getStarted = $("#getStarted");
    getStarted.on("click", () => {
        getStarted[0].classList.toggle("scale-105");
        getStarted[0].classList.toggle("!bg-indigo-600");
    });

    var nav = $("#navbar")[0];
    var navHome = $("#navHome")[0];
    var navAbout = $("#navAbout")[0];
    window.onscroll = function () {
        if (window.scrollY >= 200) {
            nav.classList.add("bg-white/80", "shadow", "backdrop-blur-[1px]");
            nav.classList.remove("bg-transparent");
        } else {
            nav.classList.remove(
                "bg-white/80",
                "shadow",
                "backdrop-blur-[1px]"
            );
            nav.classList.add("bg-transparent");
        }

        if (window.scrollY >= 340) {
            navHome.classList.remove("active");
            navHome.classList.add("not-active");

            navAbout.classList.add("active");
            navAbout.classList.remove("not-active");
        } else {
            navHome.classList.add("active");
            navHome.classList.remove("not-active");

            navAbout.classList.remove("active");
            navAbout.classList.add("not-active");
        }
    };

    $(".navscroll").click(function (e) {
        var href = $(this).attr("href");
        var sectionTujuan = $(href)[0];
        var jarakTujuan = $(sectionTujuan).offset().top;
        $("html, body").animate({ scrollTop: jarakTujuan - 80 }, 40);

        e.preventDefault();
    });

    particlesJS("space", {
        fpsLimit: 120,
        particles: {
            number: {
                value: 10,
                density: {
                    enable: true,
                    value_area: 800,
                },
            },
            color: {
                value: "#93c5fd",
            },
            opacity: {
                value: 0.9,
                random: true,
                anim: {
                    enable: true,
                    speed: 1,
                    opacity_min: 0.1,
                    sync: false,
                },
            },
            collisions: {
                enable: true,
            },
            shape: {
                type: "circle",
            },
            size: {
                random: {
                    enable: true,
                    maximumValue: 7,
                },
                anim: {
                    enable: true,
                    speed: 8,
                    size_min: 8,
                    sync: false,
                },
            },
            polygon: {
                nb_sides: 3,
            },
            line_linked: {
                enable: false,
                distance: 200,
                color: "#ffffff",
                opacity: 1,
                width: 2,
            },
            move: {
                enable: true,
                speed: 2,
                direction: "top",
                straight: false,
                out_mode: "out",
                bounce: true,
                attract: {
                    enable: false,
                    rotateX: 600,
                    rotateY: 1200,
                },
            },
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: {
                    enable: false,
                },
                onclick: {
                    enable: false,
                },
                resize: true,
            },
            modes: {
                grab: {
                    distance: 400,
                    line_linked: {
                        opacity: 1,
                    },
                },
                bubble: {
                    distance: 400,
                    size: 10,
                    duration: 1,
                    opacity: 1,
                },
                repulse: {
                    distance: 200,
                    duration: 0.4,
                },
                push: {
                    particles_nb: 4,
                },
                remove: {
                    particles_nb: 2,
                },
            },
        },
        detectRetina: true,
    });
});
