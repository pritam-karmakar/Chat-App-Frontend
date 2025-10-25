import React from "https://cdn.skypack.dev/react@17.0.1";
import ReactDOM from "https://cdn.skypack.dev/react-dom@17.0.0";
import toast, { Toaster } from "https://cdn.skypack.dev/react-hot-toast@2.2.0";

// You can create a simple App just to hold the Toaster
const App = () => {
    return React.createElement(Toaster, {
        timeout: 5000,
        position: "left-bottom"
    });
};

// Render the Toaster
ReactDOM.render(React.createElement(App), document.getElementById("toastr-root"));


// Listen for Livewire's browser event
Livewire.on('toast', ({ type, message }) => {
    // Check if the toast object has this method
    if (typeof toast[type] === "function") {
        toast[type](message); // dynamically call toasts
    } else {
        toast(message); // fallback if type is invalid
    }
});