import doc2 from "../photos/doc1.png";
import axios from "axios";
import { AiOutlineSearch } from "react-icons/ai";
import {CiLocationOn} from "react-icons/ci";
import {TbCurrentLocation} from "react-icons/tb";
import React, { useState } from 'react';
import { useNavigate  } from "react-router-dom";
 
function Input() {
  const navigate = useNavigate ();
  const [name, setName] = useState('');
  const [address, setAddress] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();
    
    navigate('/doctorsearched');
  };
  return ( 
    //<AiOutlineSearch/>

    <div className="flex-container-input-comp">

      <div className="sapn-img-doc-accuil">
        <img className="img_doc_input_comp" src={doc2}  />
      </div>


      <div className="span-input-text-accuil">
        <div className="dynamic-text-span-text-accuil">
          <h1 className="text-decoraoin-h1">Trouver un rendez-vous avec
          <span className="text-animation-span-text-accuil">

            <span className="txt tx1">&nbsp;un generaliste</span>
            <span className="txt tx2">&nbsp;un radiologue</span>
            <span className="txt tx3">&nbsp;un dentiste</span>
            <span className="txt tx4">&nbsp;un psychologue</span>
            <span className="txt tx5">&nbsp;un dermatologue</span>

          </span>
        </h1>
        </div>

        <div className="input-searchbar-input-acciuil">
            <div class="container">
              <form class="form" onSubmit={handleSubmit}>
              
                <div class="form-input">
                  <span class="icon"><AiOutlineSearch/></span>
                  <input name="name" id="speciality_doc" className="input" type={"text"}  placeholder={ "     Nom,  Prenom,  spécialité,..."}
                          autoComplete="off" autoCorrect="off" autoCapitalize="off" onChange={(e) => setName(e.target.value)}/>
                </div>
                
                <div class="form-input">
                  <span class="icon"><CiLocationOn/></span>
                  <input name="address" className="input" type={"text"} placeholder="Où ?"autoComplete="off" autoCorrect="off" autoCapitalize="off"
                          onChange={(e) => setAddress(e.target.value)}/>
                </div>

                <div class="form-input1">
                  <input id="submit_for_loca_doc" className="input2" type={"submit"} value="envoyer"/>
                </div>

              </form>
            </div>
          </div>


      </div>
    </div>



  )
}
export default Input;
