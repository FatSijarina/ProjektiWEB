let mobiles = [
    {img: "11max.jpg" , comp: "Apple" , type: "Iphone 11 max", price: 900, capacity: 256, a: "Buy online"},
    {img: "iphone12.jpg" , comp: "Apple" , type: "Iphone 12" , price: 1000, capacity: 256, a: "Buy online"},
    {img: "iphone13pro.jpg" , comp: "Apple", type: "Iphone 13 pro" , price: 1200, capacity: 265, a: "Buy online"},
    {img: "s20.jpg" , comp: "Samsung", type: "Galaxy S20", price:650, capacity: 64, a: "Buy online" },
    {img: "s20ultra.jpg" , comp: "Samsung", type: "Galaxy S20 ultra" , price: 950, capacity: 128, a: "Buy online"},
    {img: "x.jpg" , comp: "Apple", type: "Iphone X" , price: 850, capacity: 128, a: "Buy online"},
    {img: "iphoneX.jpg" , comp: "Apple", type: "Iphone X" , price: 275, capacity: 128, a: "Buy online"},
    {img: "iphone8plus.jpg" , comp: "Apple", type: "Iphone 8 Plus" , price: 320, capacity: 256, a: "Buy online"},
    {img: "iphone8.jpg" , comp: "Apple", type: "Iphone 8" , price: 220, capacity: 128, a: "Buy online"},
    {img: "iphone7plus.jpg" , comp: "Apple", type: "Iphone 7 Plus" , price: 190, capacity: 128, a: "Buy online"},
    {img: "samsungA12.webp" , comp: "Samsung", type: "Samsung A12" , price: 320, capacity: 128, a: "Buy online"},
    {img: "samsungA32.webp" , comp: "Samsung", type: "Samsung A32" , price: 275, capacity: 128, a: "Buy online"},
    {img: "samsungA50.jpg" , comp: "Samsung", type: "Samsung A50" , price: 275, capacity: 128, a: "Buy online"},
    {img: "samsungA51.jpg" , comp: "Samsung", type: "Samsung A51" , price: 275, capacity: 128, a: "Buy online"},
    {img: "samsungA52.jpg" , comp: "Samsung", type: "Samsung A52" , price: 275, capacity: 128, a: "Buy online"},
    {img: "samsungS9.webp" , comp: "Samsung", type: "Samsung Galaxy S9" , price: 275, capacity: 128, a: "Buy online"},
    {img: "samsungS10.jpg" , comp: "Samsung", type: "Samsung Galaxy S10" , price: 275, capacity: 128, a: "Buy online"},
    {img: "samsungS20.webp" , comp: "Samsung", type: "Samsung Galaxy S20" , price: 275, capacity: 128, a: "Buy online"},
    {img: "samsungs21.webp" , comp: "Samsung", type: "Samsung Galaxy S21" , price: 275, capacity: 128, a: "Buy online"},
    {img: "samsungS21Ultra.jpg" , comp: "Samsung", type: "Samsung Galaxy S21 Ultra" , price: 275, capacity: 128, a: "Buy online"},
 ]

//    <div class="buy-phone">
//         <a href="buyonline.html">Buy online</a>
//     </div>
 let telCards = document.getElementById('tel-cards')
 
 filt = () => {
      telCards.innerHTML = ""
      let min = document.getElementById("min").value
      let max = document.getElementById("max").value
      let comp = document.getElementById("comp").value
      // let capacity = document.getElementById("capacity").value
 
    for(let mob of mobiles){
     if ((mob.price >= min || min == "Any") && (mob.price <= max || max == "Any") && (mob.comp == comp || comp == "All")) {
     let kolona = document.createElement('div')
     kolona.setAttribute("class" , "kolone")
     telCards.appendChild(kolona)
 
     let card = document.createElement('div')
     card.setAttribute("class", "card")
     card.style.border = "1px solid #316B83"
     card.style.margin = "12px"
     kolona.appendChild(card)
 
     let cardImg = document.createElement('img')
     let srcFoto = "img/" + mob.img
     cardImg.setAttribute("src" , srcFoto)
     cardImg.style.height = "200px"
     cardImg.style.objctFit = "cover"
     cardImg.style.margin = "35px"
     cardImg.style.width= "340px"
     cardImg.style.height = "290px"
     cardImg.setAttribute("class", "card-img-top")
     card.appendChild(cardImg)
 
     let data = document.createElement("ul")
     data.setAttribute("class", "list-group s")
     data.style.listStyleType = "none"
     card.appendChild(data)

     let buy = document.createElement("div")
     buy.setAttribute("class", "buy-phone")
     buy.style.borderTop = "1px solid black"
     buy.style.height = "30px"
     buy.style.textAlign = "center"
     buy.style.backgroundColor = "#316B83"
     card.appendChild(buy)

     let buyLink = document.createElement("a")
     buyLink.setAttribute("href","buyonline.html")
     buyLink.innerHTML = mob.a
     buyLink.style.textDecoration = "none"
     buyLink.style.color = "white"
     buy.appendChild(buyLink)
 
     let company = document.createElement("li")
     company.setAttribute("class" , "list-group-item")
     company.style.textAlign = "center"
     company.innerHTML = mob.comp
     company.style.borderTop = "1px solid #316B83"
     data.appendChild(company)
 
     let type = document.createElement("li")
     type.setAttribute("class" , "list-group-item")
     type.style.textAlign = "center"
     type.innerHTML = mob.type
     data.appendChild(type)
 
     let price = document.createElement("li")
     price.setAttribute("class" , "list-group-item")
     price.style.textAlign = "center"
     price.innerHTML = mob.price + " Euro"
     data.appendChild(price) 
     }
   }
 }
  
  
 

 