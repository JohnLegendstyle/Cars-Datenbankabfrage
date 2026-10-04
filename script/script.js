const autos = [
  {
    name: "Hook",
    farbe: "Braun",
    fahrzeug: "Chevrolet 3800",
    bild: "./bilder/hook.png"
  },
  {
    name: "Lightning McQueen",
    farbe: "Rot",
    fahrzeug: "Custom Race Car",
    bild: "./bilder/mcqueen.jpg"
  },
  {
    name: "Doc Hudson",
    farbe: "Blau",
    fahrzeug: "1951 Hudson Hornet",
    bild: "./bilder/doc-hudson.jpg"
  },
  {
    name: "Sally Carrera",
    farbe: "Babyblau",
    fahrzeug: "Porsche 911 Carrera",
    bild: "./bilder/sally.jpg"
  },
  {
    name: "Mack",
    farbe: "Rot",
    fahrzeug: "American Truck",
    bild: "./bilder/mack.jpg"
  },
  {
    name: "Guido",
    farbe: "Babyblau",
    fahrzeug: "Gabelstapler",
    bild: "./bilder/guido.jpg"
  },
  {
    name: "Luigi",
    farbe: "Gelb",
    fahrzeug: "Fiat 500",
    bild: "./bilder/luigi.jpg"
  },
  {
    name: "King",
    farbe: "Blau",
    fahrzeug: "Plymoth Superbird",
    bild: "./bilder/king.jpg"
  },
  {
    name: "Chick Hicks",
    farbe: "Grün",
    fahrzeug: "Shyster Cremlin",
    bild: "./bilder/chick-hicks.jpg"
  },
  {
    name: "Fred",
    farbe: "Rost",
    fahrzeug: "Stodgey Suaver LT",
    bild: "./bilder/Fred.jpg"
  }
];

const search = document.getElementById("search");
const cards = document.getElementById("cards");

function zeigeAutos(liste) {
  cards.innerHTML = "";

  if (liste.length === 0) {
    cards.innerHTML = '<div class="error"><p>Wer das liest, ist dumm!</p></div>';
    return;
  }

  liste.forEach(auto => {
    const card = document.createElement("div");
    card.classList.add("card");

    card.innerHTML = `
  <div class="card-bild">
    <img src="${auto.bild}" alt="${auto.name}">
  </div>

  <div class="card-info">
    <h2>${auto.name}</h2>
    <p>Farbe: ${auto.farbe}</p>
    <p>Fahrzeug: ${auto.fahrzeug}</p>
  </div>
`;

    cards.appendChild(card);
  });
}

search.addEventListener("input", () => {
  const suchbegriff = search.value.toLowerCase().trim();

  if (suchbegriff === "") {
    cards.innerHTML = "";
    return;
  }

  const treffer = autos.filter(auto => {
    const suchtext = `
      ${auto.name}
      ${auto.farbe}
      ${auto.fahrzeug}
    `.toLowerCase();

    return suchtext.includes(suchbegriff);
  });

  zeigeAutos(treffer);
});