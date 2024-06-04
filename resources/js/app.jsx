// resources/js/app.jsx

import React from 'react';
import ReactDOM from 'react-dom';
import HomeComponent from './Pages/HomeComponent';

const homeElement = document.getElementById('home-component');
if (homeElement) {
    ReactDOM.render(<HomeComponent />, homeElement);
}