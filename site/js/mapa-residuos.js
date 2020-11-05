
const map = L.map('mapid').setView([-23.6151188,-46.589263], 15);


L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);


const icon = L.icon({
    iconUrl: "./img/loccal.svg",
    iconSize: [58,68],
    IconAnchor: [29, 68],
    popupAnchor: [170, 2]
})

const popup =L.popup({
    closeButton:false,
    className: 'map-poup',
    minWidth: 120,
    minHeight: 120
}).setContent('Rua Arqo. Emílio Tachibana <a href="local_residuos.php" class="choose-residuos"> <img src="./img/setadireita.svg"> </a>')



L.marker([-23.6151188,-46.589263], {icon} )
.addTo(map)
.bindPopup(popup)

 

 
