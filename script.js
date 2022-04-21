
let Productarr = [];

class Product {

    constructor(brand,productName,color,price) {
        this.brand = brand;
        this.productName = productName;
        this.color = color;
        this.price = price;
    }

}

function insert(product) {


    let col6_div = document.createElement('div');
    let ul = document.createElement('ul');
    let li_brand = document.createElement('li');
    let li_name = document.createElement('li');
    let li_color = document.createElement('li');
    let li_price = document.createElement('li');

    col6_div.className="col-3 product";

     ul.appendChild(li_brand);
     ul.appendChild(li_name);
     ul.appendChild(li_color);
     ul.appendChild(li_price);
    col6_div.appendChild(ul);
    document.getElementById('products').appendChild(col6_div);

    Productarr.push(product);
    const myJSON = JSON.stringify(Productarr);
    localStorage.setItem("productsjson", myJSON);

// Retrieving data:
    let text = localStorage.getItem("productsjson");
    let obj = JSON.parse(text);
    for(let i=0; i<obj.length;i++){
        li_brand.innerHTML = obj[i]['brand'];
        li_name.innerHTML = obj[i]['productName'];
        li_color.innerHTML = obj[i]['color'];
        li_price.innerHTML = obj[i]['price'];
    }
    console.log(obj)
}




function  addproduct(){

    let brandName = document.getElementById('validationCustom01').value;
    let Product_Name = document.getElementById('validationCustom02').value;
    let colorProduct = document.getElementById('colorOfproduct').value;
    let priceProduct = document.getElementById('priceOfproduct').value;

    let product1 = new Product(brandName,Product_Name,colorProduct,priceProduct);
    insert(product1);
    //  console.log(Productarr);


}

