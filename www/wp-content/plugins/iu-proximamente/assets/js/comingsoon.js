const countDownDate = new Date("December 25, 2022 00:00:00").getTime();

const interval = setInterval(function() {
    const now = new Date().getTime();

    const distance = countDownDate - now;

    const days = Math.floor(distance / (100 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) ;
    const minutes = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60 * 60 * 24)) / 1000);

    counter = document.getElementById("launch");

    if (distance > 0) {
        counter.innerHTML = `${days} días, ${hours} horas, ${minutes} minutos, ${seconds} segundos`;
    }
    else {
        clearInterval(interval);
        counter.innerHTML = "Volvemos pronto";
    }
}, 1000);

