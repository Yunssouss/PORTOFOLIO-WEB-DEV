const express = require('express');
const mongoose = require('mongoose');
const cors = require('cors');

const app = express();
app.use(cors());
app.use(express.json());

// الاتصال بقاعدة البيانات MongoDB
mongoose.connect('mongodb://localhost:27017/online_store', {
    useNewUrlParser: true,
    useUnifiedTopology: true
});

// نموذج المنتج
const Product = mongoose.model('Product', new mongoose.Schema({
    name: String,
    price: Number,
    image: String,
    description: String
}));

// نموذج التقييم
const Review = mongoose.model('Review', new mongoose.Schema({
    product_id: mongoose.Schema.Types.ObjectId,
    user_id: mongoose.Schema.Types.ObjectId,
    rating: Number,
    comment: String
}));

// نموذج المستخدم
const User = mongoose.model('User', new mongoose.Schema({
    username: String,
    password: String
}));

// API لجلب المنتجات
app.get('/api/products', async (req, res) => {
    const products = await Product.find();
    res.json(products);
});

// API للبحث في المنتجات
app.get('/api/search', async (req, res) => {
    const query = req.query.query;
    const products = await Product.find({ name: new RegExp(query, 'i') });
    res.json(products);
});

// بدء الخادم
const PORT = process.env.PORT || 5000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
