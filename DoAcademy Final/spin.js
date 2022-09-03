function shuffle(array) {
    var currentIndex = array.length,
      randomIndex;
  
    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
      // Pick a remaining element...
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex--;
  
      // And swap it with the current element.
      [array[currentIndex], array[randomIndex]] = [
        array[randomIndex],
        array[currentIndex],
      ];
    }
  
    return array;
  }
  
  function spin() {
    // Inisialisasi variabel
    const box = document.getElementById("box");
    const element = document.getElementById("mainbox");
    let SelectedItem = "";
    let fivepoints = shuffle([1890, 2250, 2610]);
    let tenpoints = shuffle([1850, 2210, 2570]); //Kemungkinan : 100%
    let fifteenpoints = shuffle([1810, 2170, 2530]);
    let twentypoints = shuffle([1770, 2130, 2490]);
    let twentyfivepoints = shuffle([1750, 2110, 2470]);
    let thirtypoints = shuffle([1630, 1990, 2350]);
    let thirtyfivepoints = shuffle([1570, 1930, 2290]);
    let fourtypoints = shuffle([1670, 1830, 2190]);
    let fourtyfivepoints = shuffle([1780, 1730, 2390]);
    let fiftypoints = shuffle([1870, 1650, 2280]);

  
    // Bentuk acak
    let Hasil = shuffle([
      fivepoints[0],
      tenpoints[0],
      fifteenpoints[0],
      twentypoints[0],
      twentyfivepoints[0],
      thirtypoints[0],
      thirtyfivepoints[0],
      fourtypoints[0],
      fourtyfivepoints[0],
      fiftypoints[0]
    ]);
    // console.log(Hasil[0]);
  
    // Ambil value item yang terpilih
    if (fivepoints.includes(Hasil[0])) SelectedItem = "5 POINTS";
    if (tenpoints.includes(Hasil[0])) SelectedItem = "10 POINTS";
    if (fifteenpoints.includes(Hasil[0])) SelectedItem = "15 POINTS";
    if (twentypoints.includes(Hasil[0])) SelectedItem = "20 POINTS";
    if (twentyfivepoints.includes(Hasil[0])) SelectedItem = "25 POINTS";
    if (thirtypoints.includes(Hasil[0])) SelectedItem = "30 POINTS";
    if (thirtyfivepoints.includes(Hasil[0])) SelectedItem = "35 POINTS";
    if (fourtypoints.includes(Hasil[0])) SelectedItem = "40 POINTS";
    if (fourtyfivepoints.includes(Hasil[0])) SelectedItem = "45 POINTS";
    if (fiftypoints.includes(Hasil[0])) SelectedItem = "50 POINTS";

    // Proses
    box.style.setProperty("transition", "all ease 5s");
    box.style.transform = "rotate(" + Hasil[0] + "deg)";
    element.classList.remove("animate");
    setTimeout(function () {
      element.classList.add("animate");
    }, 5000);
  
    // Munculkan Alert
    setTimeout(function () {
      swal(
        "Congratulations",
        "You Won The " + SelectedItem + ".",
        "success"
        );
        a.href = "https://www.geeksforgeeks.org"; 
    }, 5500);
  
    // Delay and set to normal state
    setTimeout(function () {
      box.style.setProperty("transition", "initial");
      box.style.transform = "rotate(90deg)";
    }, 6000);
  }
  