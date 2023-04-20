import {  Link } from "react-router-dom";
import { BiHelpCircle } from "react-icons/bi";
import { MdPersonOutline } from "react-icons/md";
import monlogo from "../photos/monlogo.png";

function Navbar() {
    return (
        <>
            <div className="container-fluid py-3">
                <div className="navbar navbar-expand-lg">
                    <span className="d-flex align-items-center wo">
                        <Link to="/" className="d-flex align-items-center">
                            <span className="fs-4"><img className="logo_accuil" src={monlogo} /></span>
                        </Link>
                    </span>


                    <nav className="d-inline-flex mt-2 mt-md-0 ms-md-auto dropdown">
                        <span className="me-3 py-2 ">
                            <div className="rounded-pill span">
                                <span className="bg-white rounded-pill span2">
                                    <Link className="text-dark text-decoration-none" to={"sgndoc"} >Vous êtes praticien?</Link>
                                </span>
                            </div>
                        </span>
                        <span className="me-3 py-2">
                            <div className="rounded-pill span">
                                <span className="rounded-pill span2">
                                    <a className="text-dark text-decoration-none" href="#">
                                        <span className="link-seconecter">
                                            <span className="link-seconecter"><BiHelpCircle /></span>
                                            <span className="link-seconecter">Besoin d'aide? </span>
                                        </span>
                                    </a>
                                </span>
                            </div>
                        </span>
                        <Link className="me-3 py-2 text-dark text-decoration-none" to="condoc">
                            <span className="link-seconecter">
                                <span><MdPersonOutline /></span>
                                <span>Se connecter
                                    <div className="opacity-50 fs-6">&nbsp;&nbsp;&nbsp;Gerer les RDV</div>
                                </span>
                            </span>
                        </Link>
                    </nav>
                </div>
            </div>
        </>
    )
}
export default Navbar;