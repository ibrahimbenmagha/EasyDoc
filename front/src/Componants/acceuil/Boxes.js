import { Routes, Route, NavLink, Link } from "react-router-dom";
import imgcancer from "../photos/80.jpg";
import imggrosses from "../photos/pregnant-woman.jpg";
import imgkito from "../photos/Keto-diet.png";
import imgpage from "../photos/1.png";
function Boxes() {
    return (
        <div className="componant-boxex-accueil">
            <div className="flex-container caroussel">

                <span className="box2">
                    <div className="div-text-button-accuil">
                        <div className="span-text-accuil">
                            <h4>Journee mondiale contre le concer 4Fevrier</h4>
                        </div>
                        <div className="div-link-span-accuil">
                            <div className="div-div-link-span-accuil">
                                <Link className="text-decoration-none" to="Cancer">En savoire plus </Link>
                            </div>
                        </div>
                    </div>
                    <div className="img-span-accuil">
                        <img className="img_box_flex_continer" src={imgcancer}  />
                    </div>
                </span>

                <span className="box2">
                    <div className="div-text-button-accuil">
                        <div className="span-text-accuil">
                            <h3>Des conseil pendant la grosses</h3>
                        </div>
                        <div className="div-link-span-accuil">
                            <div className="div-div-link-span-accuil">
                                <a className="text-decoration-none" href="#">En savoire plus </a>
                            </div>
                        </div>
                    </div>
                    <div className="img-span-accuil">
                        <img className="img_box_flex_continer" src={imggrosses} width={110} height={110} />
                    </div>
                </span>


                <span className="box2">
                    <div className="div-text-button-accuil">
                        <div className="span-text-accuil">
                            <h3>Des conseil pendant la grosses</h3>
                        </div>
                        <div className="div-link-span-accuil">
                            <div className="div-div-link-span-accuil">
                                <a className="text-decoration-none" href="#">En savoire plus </a>
                            </div>
                        </div>
                    </div>
                    <div className="img-span-accuil">
                        <img className="img_box_flex_continer" src={imggrosses} width={110} height={110} />
                    </div>
                </span>

            </div>



            <div className="flex-container">
                <div className="flexboxkito">
                    <div className="div-text-btn-accuil-kito">
                        <div className="span-text-accuil-kito">
                            <h3 className="Le-régime-cétogène">Le régime cétogène (Keto)  Un guide détaillé de l'alimentation cétogène</h3>
                        </div>
                        <div className="span-btn-accuil-kito">
                            <div className="btn-accuil-kito">
                                <a className="text-decoration-none" href="#">En savoire plus </a>
                            </div>
                        </div>
                    </div>
                    <div className="img-span-accuil-kito">
                        <img className="img-img-span-accuil-kito" src={imgkito}  />
                    </div>

                </div>
            </div>

            <div className="flex-container">
                <div className="box-info-accuil">
                    <div className="box">
                        <div className="img-resum">
                            <img src={imgpage} className="image-page-resum"  />
                        </div>
                        <div className="txt-resum" >
                            <h3 className="txttxt"> Accédez rapidement aux disponibilités de tous vos praticiens</h3>
                        </div>

                    </div>

                    <div className="box">
                        <div className="img-resum">
                            <img src={imgpage} className="image-page-resum"  />
                        </div>
                        <div className="txt-resum" >
                            <h3 className="txttxt"> Accédez rapidement aux disponibilités de tous vos praticiens</h3>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    )
}
export default Boxes;