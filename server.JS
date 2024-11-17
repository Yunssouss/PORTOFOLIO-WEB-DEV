const express = require('express');
const path = require('path');
const app = express();

app.use(express.static(path.join(__dirname, 'public')));

app.listen(3000, () => {
  console.log('Server running on http://localhost:3000');
});

const mysql = require('mysql');

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'agency_db'
});

connection.connect((err) => {
  if (err) throw err;
  console.log('Connected to MySQL');
});

const compression = require('compression');
app.use(compression());







