document.addEventListener("DOMContentLoaded", function() {
    // 1. التحقق من الفورم قبل الإرسال
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        const productName = document.getElementById('product_name').value.trim();
        const productPrice = document.getElementById('product_price').value.trim();
        const productQuantity = document.getElementById('product_quantity').value.trim();

        if (productName === '' || productPrice === '' || productQuantity === '') {
            event.preventDefault(); // منع إرسال الفورم
            alert('من فضلك، عبي جميع المعلومات!');
        } else if (productPrice <= 0 || productQuantity <= 0) {
            event.preventDefault();
            alert('الثمن والكمية خاصهم يكونوا قيم موجبة!');
        }
    });

    // 2. إنذار إذا كانت الكمية قليلة (أقل من 3)
    const inventoryTable = document.querySelector('table tbody');
    const rows = inventoryTable.querySelectorAll('tr');

    rows.forEach(function(row) {
        const quantityCell = row.querySelector('td:nth-child(4)');
        const quantity = parseInt(quantityCell.textContent);

        if (quantity < 3) {
            quantityCell.style.backgroundColor = 'red';
            quantityCell.style.color = 'white';
            alert('الكمية ديال المنتج ' + row.querySelector('td:nth-child(2)').textContent + ' قليلة!');
        }
    });
});
