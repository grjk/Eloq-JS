function heeHaw(number) {

    for (let i = 1; i != number; i++) {
        if (i % 3 == 0 && i % 5 == 0) {
            console.log("Hee Haw!");
        }
        else if (i % 3 == 0) {
            console.log("Hee!");
        }
        else if (i % 5 == 0) {
            console.log("Haw!");
        }
        else {
            console.log(i);
        }
    }
}

heeHaw(20);