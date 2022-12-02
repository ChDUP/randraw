<script>

    const shuffleElement = document.getElementById("shuffle");
    let figures = JSON.parse(shuffleElement.dataset.figures);
    let figure = shuffleElement.dataset.figure;

    console.log(figures[3].name);
    let selected = '<button>Lance le tirage</button>';

    let counter = 0;

    let delay = 100;

    const strings = ['Koopa Troopa', 'Mario', 'Luigi', 'Toad', 'Peach', 'Yoshi', 'Bowser', 'Wario', 'Donkey Kong', 'Goomba', 'Kamek', 'Boo', 'Daisy', 'Waluigi', 'Rosalina', 'Diddy Kong', 'Koopa'];

    const startRand = () => {
        const interval = setInterval(() => {
            counter += 1
            if (counter < 50) {
                selected = strings[(Math.floor(Math.random() * strings.length))];
                delay = 50 - counter;
            } else {
                clearInterval(interval)
                selected = strings[figure] + ' !';
            }
        } , delay)


    }

</script>

<p on:click={startRand}>
    {@html selected}
</p>
