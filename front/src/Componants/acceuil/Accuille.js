import React from 'react';
import { Routes, Route, NavLink } from "react-router-dom";
import "./../../css/navbar.css";
import "./../../css/Boxes.css"
import "./../../css/input.css"
import Input from './Input';
import Boxes from "./Boxes";
// import Navbar from "./Navbar"

function Accuille() {
    return (
        
        <body>
            <header className="bg-info">
                {/* <Navbar /> */}
                <Input />
            </header>
            <article>
                <Boxes />
            </article>
        </body>

    )
}

export default Accuille;