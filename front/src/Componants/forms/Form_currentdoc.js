import React, { useState, useEffect } from "react";
// import { Link, NavLink, Route, Routes } from "react-router-dom";
// import React from 'react';
import axios from 'axios';
import "./../../css/Form_newdoc.css";
import "./../../bootstrap/css/bootstrap.min.css"
import img1 from "./../photos/docfemme.png"
import { useNavigate  } from "react-router-dom";

function Form_newdoc() {

    const[email, setEmail]=useState();
    const[password, setPassword]=useState();
    const navigate = useNavigate ();


    const handleLoginRedirect = (role) => {
        if (role == "doctor") {
          navigate("/Cancer");
        } else if (role === "patient") {
          navigate("/Cancer");
        }
        // setLoggedIn(true);
        
      };
    const handleLogin = (e) => {
        e.preventDefault();
        axios
          .post("http://127.0.0.1:8000/api/login", {
            email: email,
            password: password
          })
          .then(response => {
            // If the authentication was successful, call the onLogin function with the appropriate role
            handleLoginRedirect(response.data.role);
          })
          .catch(error => {
            // Handle authentication errors here
            console.log(error);
          });
      };
      

    return (
        <main className="mainmain">
            <div className="Form-newdoc">
                <div className="near-to-form-newdoc2">
                    <div className="dynamic-text-span-text-doc">
                        <h1 className="text-decoraoin-h1-doc">Connectez vous et <br />
                            <span className="text-animation-span-text-doc">
                                <span className="text tx1">&nbsp;decouvrez nos services</span>
                                <span className="text tx2">&nbsp;gerez mieu vos render-vous</span>
                                <span className="text tx3">&nbsp;restez a la desponibilite<br />&nbsp; de vos patient</span>
                                <span className="text tx4">&nbsp;Anullez les salles d'attente</span>
                                <span className="text tx5">&nbsp;Protegez vos donnes</span>
                            </span>
                        </h1>
                    </div>
                </div>
                <div className="section">
                    <div className="container">
                        <div className="row aas full-height  justify-content-center">
                            <div className="col-12 aas text-center align-self-center py-5">
                                <div className="section2 pb-5 pt-2 pt-sm-2 text-center">
                                    <div>
                                        <label for="reg-log"></label>
                                        <div className="card-3d-wrap mx-auto">
                                            <div className="card-3d-wrapper">
                                                <div className="card-front">
                                                    <form method="POST" onSubmit={handleLogin}>
                                                        <div className="center-wrap">
                                                        <div className="section text-center">
                                                            <h4 className="mb-4 pb-3">Log In</h4>
                                                            <div className="form-group">
                                                                <input type="text" className="form-style" placeholder="Email" name="email"
                                                                    onChange={(e) =>{setEmail(e.target.value)}}
                                                                />
                                                                <i className="input-icon uil uil-at"></i>
                                                            </div>
                                                            <div className="form-group mt-2">
                                                                <input type="password" className="form-style" placeholder="Mot de pass" name="password"
                                                                     onChange={(e) =>{setPassword(e.target.value)}}
                                                                />
                                                                <i className="input-icon uil uil-lock-alt"></i>
                                                            </div>
                                                            <button className="btn mt-4 submit" type="submit" name="authan">SE CONNECTER</button>
                                                        </div>
                                                    </div>
                                                    </form>

                                                
                                                </div>
                                           

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="near-to-form-newdoc">
                    <img className="img1" src={img1} />
                </div>
            </div>
        </main>
    )
}
export default Form_newdoc;

