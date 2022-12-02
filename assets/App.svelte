<script>

    const shuffleElement = document.getElementById("shuffle");
    let figures = JSON.parse(shuffleElement.dataset.figures);
    let figure = shuffleElement.dataset.figure;

    console.log(figures);
    let selected = '<button>Lance le tirage</button>';

    let counter = 0;

    let delay = 100;

    const strings = ['Mario', 'Duke Nukem', 'Zelda'];

    const startRand = () => {
        const interval = setInterval(() => {
            counter += 1
            if (counter < 50) {
                selected = strings[(Math.floor(Math.random() * strings.length))];
                delay = 50 - counter;
            } else {
                clearInterval(interval)
                selected = figure + ' !';
            }
        } , delay)


    }

</script>

<p on:click={startRand}>
    {@html selected}
</p>
