const boton = document.querySelector('.heart-button');

boton.addEventListener('click',() => {
    const adivinar=Math.floor(Math.random()*10);
    let intento=prompt("Tienes este numero de aciertos");
    alert("Tienes  "+ intento +" intentos para adivinar el numero");
    let number;
    let contint=0;
    console.log(adivinar);
    while(contint<intento){
        number=prompt("Dame un numero");
    if (number==adivinar){
        alert("Enhorabuena has acertado el numero en "+contint+" intentos")
        return;
    }else if(number>adivinar){
        alert("Tu numero es menor que el que tienes que acertar")
    }else if(number<adivinar){
        alert("Tu numero es mayor que el que tienes que acertar")
    }
    contint++;

}
    alert("El numero era el "+ adivinar);
}
)