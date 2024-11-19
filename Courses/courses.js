
    const hideBtn = document.getElementById('hideBtn');
const container1 = document.getElementById('container1');
const container2 = document.getElementById('container2');
const container2Span = document.getElementById('container2Span');

    window.addEventListener('DOMContentLoaded', function() {
        // Check the value of the level variable
        if (level >= 0) {


            container1.style.display = 'none';
            container2.classList.remove('hidden');
            container2Span.classList.remove('hidden');
        }
        else{
            level++;

            containerSpan.textContent = ((level*100)/20)+"%";

        }

    });
hideBtn.addEventListener('click', function() {
    container1.style.display = 'none';
    container2.classList.remove('hidden');
    container2Span.classList.remove('hidden');
});
var currentSlide = 0; // Variable to track the current active slide

function showSlide(index) {
    var slides = document.getElementsByClassName('sidebar')[0].getElementsByTagName('li');
    slides[currentSlide].classList.remove('active');
    currentSlide = index;
    slides[currentSlide].classList.add('active');
}



function generateCertificate(cName) {


    const canvas = document.getElementById("certificateCanvas");
    const context = canvas.getContext("2d");

    // Load background image or draw custom background
    const backgroundImage = new Image();
    backgroundImage.src = "cee.png";
    backgroundImage.onload = function() {
        context.drawImage(backgroundImage, 0, 0, canvas.width, canvas.height);

        // Set font styles
        context.font = " 44pt Mono-type-Corsica";

        context.fillStyle = "black";
        context.textAlign = "center";

        // Draw student name
        context.fillText(Name, canvas.width / 2, 370);
        context.font = " bold 16.5px Mono-type-Corsica";
        context.fillStyle = "black";
        // Draw course name
        context.fillText(cName+" Course", (canvas.width / 2)+40, 420);

        // Draw date
        context.font = " 15pt Mono-type-Corsica";
        context.fillStyle = "black";
        const currentDate = new Date();
        context.fillText( currentDate.toDateString(), (canvas.width / 4)+10,530 );
        context.fillText("Trevor Payne", (canvas.width *3 / 4)-10,530 );
        // Ask user to save or display the certificate

            // Save the certificate as an image
            const link = document.createElement("a");
            link.href = canvas.toDataURL("image/png");
            link.download = "certificate.png";
            link.click();

    };
}
function showNextSlide() {
    var slides = document.getElementsByClassName('sidebar')[0].getElementsByTagName('li');
    var nextSlide = (currentSlide + 1) % slides.length; // Calculate the next slide index

    showSlide(nextSlide);
    handleSlideChange(nextSlide);
}

function showPrevSlide() {
    var slides = document.getElementsByClassName('sidebar')[0].getElementsByTagName('li');
    var prevSlide = (currentSlide - 1 + slides.length) % slides.length; // Calculate the previous slide index

    showSlide(prevSlide);
    handleSlideChange(prevSlide);
}

// Attach click event listeners to the image/button
window.addEventListener('load', function() {
    var nextImage = document.getElementById('nextImage');
    nextImage.addEventListener('click', showNextSlide);

    var prevImage = document.getElementById('prevImage');
    prevImage.addEventListener('click', showPrevSlide);
});

document.addEventListener('DOMContentLoaded', function() {
    var slides = document.getElementsByClassName('sidebar')[0].getElementsByTagName('li');
    var links = document.getElementsByClassName('sidebar')[0].getElementsByTagName('a');

    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function(e) {
            e.preventDefault();
            showSlide(Array.from(links).indexOf(this));
        });
    }
});

    //html course

    var count = 0; // Variable to increment


    var player;
    var count = 0;
    var isAPIReady = false;

    function onYouTubeIframeAPIReady() {
        isAPIReady = true;
        player = new YT.Player('player', {
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerStateChange(event) {
        if (event.data === YT.PlayerState.ENDED) {
            incrementCount();
        }
    }


    function setVideo(videoId, title, description) {
        if (isAPIReady) {
            let id = document.getElementById("videosp");
            id.querySelector("h2").textContent = title;
            id.querySelector("#vp").innerHTML = description;
            player.loadVideoById(videoId);
        } else {
            setTimeout(function() {
                setVideo(videoId, title, description);
            }, 500);
        }
    }


    function handleSlideChange(index) {
        switch (index) {
            case 0:
                // Logic for the first slide
                setV1();
                break;
            case 1:
                setV2();
                break;
            case 2:
                // Logic for the third slide
                setV3();
                break;
            case 3:
                // Logic for the third slide
                setV4();
                break;
            case 4:
                // Logic for the third slide
                setV5();
                break;
            case 5:
                // Logic for the third slide
                setV6();
                break;
            case 6:
                // Logic for the third slide
                setV7();
                break;
            case 7:
                // Logic for the third slide
                setV8();
                break;
                case 8:
                // Logic for the third slide
                setV9();
                break;
                case 9:
                // Logic for the third slide
                setV10();
                break;
            case 10:
                // Logic for the third slide
                setV11();
                break;
            case 11:
                // Logic for the third slide
                setV12();
                break;
            case 12:
                // Logic for the third slide
                setV13();
                break;
            case 13:
                // Logic for the third slide
                setV14();
                break;

            case 14:
                // Logic for the third slide
                setV15();
                break;
            case 15:
                // Logic for the third slide
                setV16();
                break;
            case 16:
                // Logic for the third slide
                setV17();
                break;
            case 17:
                // Logic for the third slide
                setV18();
                break;



            // Add more cases for each slide
            default:
                // Default logic if index doesn't match any case
                console.log('Slide not found');
                break;
        }
    }