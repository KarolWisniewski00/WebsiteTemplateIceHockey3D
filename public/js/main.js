document.getElementById("body").style.visibility = "hidden";
//3D
gsap.registerPlugin(PixiPlugin, ScrollTrigger);
let scene, camera, renderer;
let direction

var w = window.innerWidth;
if (w < 992) {
    scaleObject = 0.3;
    scaleObjectThird = 0.1;
    positionObjectZ = -0.4;
    positionSecondObjectZ = 0.3
    positionFourthObjectZ = -0.35
} else {
    scaleObject = 1;
    scaleObjectThird = 0.5;
    positionObjectZ = -1.2;
    positionSecondObjectZ = 0.5
    positionFourthObjectZ = -1.1
}
function init() {
    //SCENE
    scene = new THREE.Scene();

    //CAMERA
    camera = new THREE.PerspectiveCamera(15, window.innerWidth / window.innerHeight, 1, 5000);
    camera.rotation.y = 90 / 180 * Math.PI;
    camera.position.x = 10;
    camera.position.y = 0;
    camera.position.z = 0;

    //LIGHTS
    hlight = new THREE.AmbientLight(0x404040, 1.7);
    scene.add(hlight);
    const pointLight = new THREE.PointLight(0xffffff, 1, 28);
    pointLight.position.set(10, 10, 10);
    scene.add(pointLight);
    const pointLight2 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight2.position.set(10, 10, -10);
    scene.add(pointLight2);
    const pointLight3 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight3.position.set(10, 20, 0);
    scene.add(pointLight3);
    const pointLight4 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight4.position.set(10, 20, -10);
    scene.add(pointLight4);
    const pointLight5 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight5.position.set(10, 20, 10);
    scene.add(pointLight5);
    const pointLight6 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight6.position.set(10, -10, 10);
    scene.add(pointLight6);
    const pointLight7 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight7.position.set(10, -10, -10);
    scene.add(pointLight7);
    const pointLight8 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight8.position.set(-10, 10, -10);
    scene.add(pointLight8);
    const pointLight9 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight9.position.set(-10, 10, 10);
    scene.add(pointLight9);
    const pointLight10 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight10.position.set(-10, 10, 0);
    scene.add(pointLight10);
    scene.add(pointLight7);
    const pointLight11 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight11.position.set(-10, 20, -10);
    scene.add(pointLight11);
    const pointLight12 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight12.position.set(-10, 20, 10);
    scene.add(pointLight12);
    const pointLight13 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight13.position.set(-10, 20, 0);
    scene.add(pointLight13);
    const pointLight14 = new THREE.PointLight(0xffffff, 1, 28);
    pointLight14.position.set(0, 20, 0);
    scene.add(pointLight14);

    //RENDERER
    renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    //TEXTURES AND OBJECTS
    let loader = new THREE.GLTFLoader();
    loader.load('./assets/helmet/scene.gltf', function (gltf) {
        document.getElementById("body").style.visibility = "inherit";
        document.getElementById("loading").style.visibility = "hidden";
        helmet = gltf.scene.children[0];
        scene.add(gltf.scene);

        //start
        helmet.rotation.z = -25 / 180 * Math.PI;
        helmet.position.z = positionObjectZ;
        helmet.position.x = 0;
        helmet.position.y = 0;
        helmet.scale.x = scaleObject;
        helmet.scale.y = scaleObject;
        helmet.scale.z = scaleObject;

        //fourth
        gsap.fromTo(helmet.position, {
            z: -0.2,
            x: 1.9,
            y: -0.1
        }, {
            scrollTrigger: {
                scrub: true,
                ease: "slow(0.7, 0.7, false)",
                trigger: '#table',
                start: "-100em bottom",
                end: "top 500em"
            },
            z: positionFourthObjectZ,
        });
        var w = window.innerWidth;
        if (w < 992) {}else{
            gsap.fromTo(helmet.rotation, {
                z: 360 / 180 * Math.PI,
            }, {
                scrollTrigger: {
                    scrub: true,
                    ease: "slow(0.7, 0.7, false)",
                    trigger: '#table',
                    start: "-100em bottom",
                    end: "top 500em"
                },
                z : 745 / 180 * Math.PI
            });
        };

        //third
        gsap.fromTo(helmet.position, {
            z: positionSecondObjectZ,
            x: 1.9,
            y: -0.1
        }, {
            scrollTrigger: {
                scrub: true,
                ease: "slow(0.7, 0.7, false)",
                trigger: '#third-paragraf',
                start: "-100em bottom",
                end: "top 500em"
            },
            z: -0.2,
            x: 1.9,
            y: -0.1
        });
        gsap.to(helmet.scale, {
            scrollTrigger: {
                scrub: true,
                ease: "slow(0.7, 0.7, false)",
                trigger: '#third-paragraf',
                start: "-100em bottom",
                end: "top 500em"
            },
            x: scaleObjectThird,
            z: scaleObjectThird,
            y: scaleObjectThird,
        });
        gsap.fromTo(helmet.rotation, {
            z: 150 / 180 * Math.PI,
            y: 10 / 180 * Math.PI
        }, {
            scrollTrigger: {
                scrub: true,
                ease: "slow(0.7, 0.7, false)",
                trigger: '#third-paragraf',
                start: "-100em bottom",
                end: "top 500em"
            },
            z: 360 / 180 * Math.PI,
        });

        //second
        gsap.fromTo(helmet.position, {
            z: positionObjectZ,
            x: 0,
            y: 0
        }, {
            scrollTrigger: {
                scrub: true,
                ease: "slow(0.7, 0.7, false)",
                trigger: '#second-paragraf',
                start: "-100em bottom",
                end: "top 500em"
            },
            z: positionSecondObjectZ,
            x: 1.9,
            y: -0.1
        });
        gsap.fromTo(helmet.rotation, {
            z: -25 / 180 * Math.PI,
            y: 0
        }, {
            scrollTrigger: {
                scrub: true,
                ease: "slow(0.7, 0.7, false)",
                trigger: '#second-paragraf',
                start: "-100em bottom",
                end: "top 500em"
            },
            z: 150 / 180 * Math.PI,
            y: 10 / 180 * Math.PI
        });
        animation();
    });
    function animation() {
        requestAnimationFrame(animation);
        var w = window.innerWidth;
        if (w < 992) {} else{
            helmet.rotation.z += 0.001;
        }
        renderer.render(scene, camera);
    }
}
init();