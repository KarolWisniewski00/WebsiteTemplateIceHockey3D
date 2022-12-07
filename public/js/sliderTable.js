//get slider
const carouselTable = document.getElementById('carouselTable');

//on event in slider
carouselTable.addEventListener('slide.bs.carousel', event => {
    records[event['to']]['teamRecords'].forEach(teamRecords => {
        dr = document.getElementById(teamRecords['divisionRank'] + "-dr");
        gp = document.getElementById(teamRecords['divisionRank'] + "-gp");
        w = document.getElementById(teamRecords['divisionRank'] + "-w");
        l = document.getElementById(teamRecords['divisionRank'] + "-l");
        ot = document.getElementById(teamRecords['divisionRank'] + "-ot");
        points = document.getElementById(teamRecords['divisionRank'] + "-points");
        dr.innerHTML = teamRecords['divisionRank'];
        teams.forEach(team => {
            if (team['id'] == teamRecords['team']['id']) {
                document.getElementById(teamRecords['divisionRank'] + "-img").src = "images/teams/" + team['abbreviation'] + ".png";
                document.getElementById(teamRecords['divisionRank'] + "-img").alt = team['abbreviation'];
            }
        })
        gp.innerHTML = teamRecords['leagueRecord']['wins'] + teamRecords['leagueRecord']['ot'] + teamRecords['leagueRecord']['losses'];
        w.innerHTML = teamRecords['leagueRecord']['wins'];
        l.innerHTML = teamRecords['leagueRecord']['losses'];
        ot.innerHTML = teamRecords['leagueRecord']['ot'];
        points.innerHTML = teamRecords['points'];
        var w = window.innerWidth;
        gsap.from(dr, {
            textContent: 0,
            duration: 1,
            ease: Power1.easeIn,
            snap: { textContent: 1 },
            stagger: 1,
        });
        gsap.from(gp, {
            textContent: 0,
            duration: 1,
            ease: Power1.easeIn,
            snap: { textContent: 1 },
            stagger: 1,
        });
        gsap.from(w, {
            textContent: 0,
            duration: 1,
            ease: Power1.easeIn,
            snap: { textContent: 1 },
            stagger: 1,
        });
        gsap.from(l, {
            textContent: 0,
            duration: 1,
            ease: Power1.easeIn,
            snap: { textContent: 1 },
            stagger: 1,
        });
        gsap.from(ot, {
            textContent: 0,
            duration: 1,
            ease: Power1.easeIn,
            snap: { textContent: 1 },
            stagger: 1,
        });
        gsap.from(points, {
            textContent: 0,
            duration: 1,
            ease: Power1.easeIn,
            snap: { textContent: 1 },
            stagger: 1,
        });
    });
})