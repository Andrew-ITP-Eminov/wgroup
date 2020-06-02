

const playBtn = document.querySelector('.shipping-app_video .play');
const player = document.querySelector('.show-player');
const modal = document.getElementById("myModal");
const btn = document.getElementById("myBtn");
const span = document.getElementsByClassName("close")[0];

const handledPlay = (event) => {
    if (event.currentTarget){
        player.style.display = "block";
        modal.style.display = "block";

        player.getElementsByTagName('video')[0].play();
    }
}

if (span){
    span.onclick = function() {
        modal.style.display = "none";
        player.getElementsByTagName('video')[0].pause();
    }
}

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
        player.getElementsByTagName('video')[0].pause();

        console.log(player.getElementsByTagName('video')[0]);
    }
}
playBtn.addEventListener('click', handledPlay);
