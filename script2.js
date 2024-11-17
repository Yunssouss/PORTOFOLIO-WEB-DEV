
// عناصر HTML
const productTable = document.querySelector("#productTable tbody");
const addProductForm = document.querySelector("#addProductForm");
const lowStockAlert = document.querySelector("#lowStockAlert");

// المنتجات لي كاينين فالمخزون
let products = [];

// دالة لإضافة منتج
addProductForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const name = document.querySelector("#productName").value;
    const price = parseFloat(document.querySelector("#productPrice").value);
    const quantity = parseInt(document.querySelector("#productQuantity").value);

    const product = { name, price, quantity };
    products.push(product);

    displayProducts();
    checkLowStock();
});

// دالة لعرض المنتجات فالجدول
function displayProducts() {
    productTable.innerHTML = "";
    products.forEach((product, index) => {
        const row = document.createElement("tr");

        row.innerHTML = `
            <td>${product.name}</td>
            <td>${product.price}</td>
            <td>${product.quantity}</td>
        `;

        productTable.appendChild(row);
    });
}

// دالة تنبيه عند قرب انتهاء المخزون
function checkLowStock() {
    const lowStockProducts = products.filter(product => product.quantity < 3);

    if (lowStockProducts.length > 0) {
        lowStockAlert.style.display = "block";
    } else {
        lowStockAlert.style.display = "none";
    }
}


// دالة لإرسال البيانات باستعمال AJAX
function addProduct(name, price, quantity) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "add_product.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        if (this.status == 200) {
            console.log(this.responseText);
        }
    };
    xhr.send(`name=${name}&price=${price}&quantity=${quantity}`);
}

