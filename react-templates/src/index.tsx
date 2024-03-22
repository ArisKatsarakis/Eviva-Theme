
import React from "react";
import ReactDOM from "react-dom";
import App from './App';
document.addEventListener('DOMContentLoaded', () => {
  const element = document.getElementById('react-slider') as HTMLElement;
  if (typeof element !== 'undefined' && element !== null) {
    ReactDOM.render(
      <React.StrictMode>
        <App />

      </React.StrictMode>
      , document.getElementById('react-slider'))
  }
})

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
