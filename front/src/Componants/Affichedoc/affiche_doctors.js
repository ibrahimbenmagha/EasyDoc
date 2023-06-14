import Navbar from "../acceuil/Navbar"
import '../../css/navbar.css';
import axios from "axios";
import React from "react";
import { Route, Routes, Link, NavLink } from "react-router";



function AffichDoc() {
    return (
        <>
            <header className="bg-info">
                <Navbar/>
            </header>
            <article className="article-cancer-all">
                <div>
                    
                </div>
            </article>
        </>
    )
}

export default AffichDoc;