import React, { useState, useEffect }  from "react";
// import { Link, NavLink, Route, Routes } from "react-router-dom";
import axios from 'axios';
import "./../../css/Form_newdoc.css";
import "./../../bootstrap/css/bootstrap.min.css"
import img1 from "./../photos/docfemme.png"
function Form_newdoc() {
    const [specialities, setSpecialities] = useState([]);
    const [name, setName] = useState('');
    const [surname, setSurname] = useState('');
    const [email, setEmail] = useState('');
    const[addressCabinet, setAddressCabinet] = useState('');
    const [phone, setphone] = useState('');
    const[password, setPassword] = useState('');
    const [specialite, setSpecialitie] = useState('');
    const[role, setRole] = useState('');


    useEffect(() => {
        axios.get('http://127.0.0.1:8000/api/specialties')
          .then(response => {
            setSpecialities(response.data);
          })
          .catch(error => {
            console.error('Error fetching specialities:', error);
          });
      }, []);

      const handleRegister = (e) => {
        e.preventDefault();
        axios.post('http://127.0.0.1:8000/api/register',{
            name:name,
            surname:surname,
            email:email,
            specialite:specialite,
            addressCabinet:addressCabinet,
            phone:phone,
            password:password,
            role:role,
        }
        )
      }

    return (
        <main className="mainmain">
            <div className="Form-newdoc">
                <div className="near-to-form-newdoc2">
                    <div className="dynamic-text-span-text-doc">
                        <h1 className="text-decoraoin-h1-doc">Creer votre compte et
                            <span className="text-animation-span-text-doc">
                                <span className="text tx1">&nbsp;decouvrez nos services</span>
                                <span className="text tx2">&nbsp;gerez mieu vos render-vous</span>
                                <span className="text tx3">&nbsp;restez a la desponibilite<br />&nbsp; de vos patient</span>
                                <span className="text tx4">&nbsp;Annulez les salles d'attente</span>
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
                                                    <form onSubmit={handleRegister}>
                                                        <div className="center-wrap">
                                                            <div className="section text-center">
                                                                <h4 className="mb-4 pb-3">Sign Up</h4>
                                                                <div className="form-group">
                                                                    <input type="text" className="form-style" placeholder="Nom" name="name"
                                                                        onChange={(e)=>setName(e.target.value)}
                                                                    />
                                                                    <i className="input-icon uil uil-user"></i>
                                                                </div>
                                                                <div className="form-group mt-2">
                                                                    <input type="text" className="form-style" placeholder="Prenom" name="surname"
                                                                        onChange={(e)=>{setSurname(e.target.value)}}
                                                                    />
                                                                    <i className="input-icon uil uil-user"></i>
                                                                </div>
                                                                <div className="form-group mt-2">
                                                                    <input type="email" className="form-style" placeholder="Email" name="email"
                                                                        onChange={(e)=>{setEmail(e.target.value)}}
                                                                    />
                                                                    <i className="input-icon uil uil-at"></i>
                                                                </div>
                                                                <div className="form-group mt-2">
                                                                    <input type="text" className="form-style" placeholder="Adress de cabinet" name="addressCabinet"
                                                                        onChange={(e) =>{setAddressCabinet(e.target.value)}}
                                                                    />
                                                                    <i className="input-icon uil uil-lock-alt"></i>
                                                                </div>
                                                                <div className="form-group mt-2">
                                                                <select className="form-style" name="role" onChange={(e)=>{setRole(e.target.value)}}>
                                                                    <option value={"doctor"}>Doctor</option>
                                                                </select>
                                                                </div>
                                                                {/* <input hidden type="text" value={"doctor"} name="role" onChange={(e)=>{setRole(e.target.value)}}/> */}
                                                                <div className="form-group mt-2">
                                                                    <input type="text" className="form-style" placeholder="Numero de portable" name="phone"
                                                                        onChange={(e) =>{setphone(e.target.value)}}
                                                                    />
                                                                    <i className="input-icon uil uil-lock-alt"></i>
                                                                </div>
                                                                <div className="form-group mt-2">
                                                                <select className="form-style" name="specialite" onChange={(e)=>{setSpecialitie(e.target.value)}}>
                                                                    <option>Select a Speciality</option>
                                                                    {specialities.map(speciality => (
                                                                    <option key={speciality.id} value={speciality.name_specialite}>
                                                                        {speciality.name_specialite}
                                                                    </option>
                                                                    ))}
                                                                </select>
                                                                </div>
                                                                <div className="form-group mt-2">
                                                                    <input type="text" className="form-style" placeholder="Mot de pass" name="password"
                                                                        onChange={(e) =>{setPassword(e.target.value)}}
                                                                    />
                                                                    <i className="input-icon uil uil-lock-alt"></i>
                                                                </div>
                                                                <button className="btn mt-4 submit" type="submit" name="Register">S'INSCRIRE</button>
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