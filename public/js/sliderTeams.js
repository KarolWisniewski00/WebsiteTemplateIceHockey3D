//get slider
const carouselTeams = document.getElementById('carouselTeams')

//on event in slider
carouselTeams.addEventListener('slide.bs.carousel', event => {
    wins = JSON.stringify(teams[event["to"]]['teamStats'][0]['splits'][0]['stat']['wins']);
    goalsPerGame = JSON.stringify(teams[event["to"]]['teamStats'][0]['splits'][0]['stat']['goalsPerGame']);
    gamesPlayed = JSON.stringify(teams[event["to"]]['teamStats'][0]['splits'][0]['stat']['gamesPlayed']);
    faceOffsWon = JSON.stringify(teams[event["to"]]['teamStats'][0]['splits'][0]['stat']['faceOffsWon']);
    document.getElementById('wins').innerHTML = wins;
    document.getElementById('goals').innerHTML = Math.round(goalsPerGame * gamesPlayed);
    document.getElementById('faceoff').innerHTML = faceOffsWon;
    gsap.from('#wins', {
        textContent: 0,
        duration: 1,
        ease: Power1.easeIn,
        snap: { textContent: 1 },
        stagger: 1,
    });
    gsap.from('#goals', {
        textContent: 0,
        duration: 1,
        ease: Power1.easeIn,
        snap: { textContent: 1 },
        stagger: 1,
    });
    gsap.from('#faceoff', {
        textContent: 0,
        duration: 1,
        ease: Power1.easeIn,
        snap: { textContent: 1 },
        stagger: 1,
    });
})
