const Hero = {
    nama: "Layla",
    level: 5,
    jenishero: "Marksman"
}

$.getJSON('apidasar/hero.json', function(response){
    console.log(response);
})



// let ajax = new XMLHttpRequest()

// ajax.onreadystatechange = function() {
//     if(ajax.readyState === 4 && ajax.status === 200){
//         let hero =JSON.parse(this.responseText) 
//         console.log(hero);
//     }
// }

// ajax.open('GET', 'apidasar/hero.json', true)
// ajax.send()

// console.log(JSON.stringify(Hero));