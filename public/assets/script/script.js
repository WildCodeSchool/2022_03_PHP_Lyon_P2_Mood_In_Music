let buttons = [
document.getElementById("pop"),
document.getElementById("cinematic"),
document.getElementById("electro"),
document.getElementById("world"),
document.getElementById("chillout"),
document.getElementById("ambient"),
document.getElementById("all")
]

let cards = [
document.querySelectorAll("#music-card-pop"),
document.querySelectorAll("#music-card-cinematic"),
document.querySelectorAll("#music-card-electro"),
document.querySelectorAll("#music-card-world"),
document.querySelectorAll("#music-card-chillout"),
document.querySelectorAll("#music-card-ambient")
]

for (let i = 0; i < buttons.length; i++) {
    const button = buttons[i];
    button.addEventListener('click', () => {
    if( button.id != 'all') {
        buttons[6].classList.remove('d-none');
    } else {
        buttons[6].classList.add('d-none');
    }
    for (let x = 0; x < cards.length; x++) {
        for (let y = 0; y < cards[x].length; y++) {
            const card = cards[x][y];
            console.log(card);
            card.classList.remove('d-none');
            if (i != 6 && card.id != cards[i][0].id) {
                card.classList.add('d-none');
            }
        }
    }
})
}
