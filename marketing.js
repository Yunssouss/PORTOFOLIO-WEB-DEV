const express = require('express');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));

// Connect to MongoDB
mongoose.connect('mongodb://localhost/marketing_agency', { useNewUrlParser: true, useUnifiedTopology: true });

// Testimonial Schema
const testimonialSchema = new mongoose.Schema({
  name: String,
  message: String
});

const Testimonial = mongoose.model('Testimonial', testimonialSchema);

// Contact Route
app.post('/contact', (req, res) => {
  const { name, email, message } = req.body;
  // Handle contact form submission (e.g., send an email or store in DB)
  res.send('Contact form submitted successfully');
});

// Testimonial Route
app.post('/testimonial', (req, res) => {
  const newTestimonial = new Testimonial({
    name: req.body.name,
    message: req.body.message
  });
  newTestimonial.save((err) => {
    if (!err) {
      res.send('Testimonial submitted successfully');
    } else {
      res.send('Failed to submit testimonial');
    }
  });
});

app.listen(3000, () => {
  console.log('Server is running on http://localhost:3000');
});
