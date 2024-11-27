import React from 'react';



import './App.css';



import Clients from './components/Clients';
import Header from './components/Header';
import Services from './components/services';






function MainApp() {
  return (
    <div className="MainApp">
      <Header />
      <Services />
      <p>Welcome To OUr Marketing Agency</p>
      </div>
  );
}

export default MainApp;
