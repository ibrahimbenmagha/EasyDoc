import React from 'react';
import { Routes, Route, NavLink } from "react-router-dom";
import Accuille from './Componants/acceuil/Accuille';
import Navbar from './Componants/acceuil/Navbar';
import Cancer from './Componants/articles/Cancer';
import Form_currentdoc from './Componants/forms/Form_currentdoc';
import Form_newdoc from './Componants/forms/Form_newdoc';


function App() {
  return (
    <body >
      <header className="bg-info">
        <Navbar />
      </header>
      {/* <Form_newdoc/> */}
      <Routes>
        <Route path='/' element={<Accuille/>} />
        <Route path='Cancer' element={<Cancer/>} />
        <Route path='sgndoc' element={<Form_newdoc/>}/>
        <Route path='condoc' element={<Form_currentdoc/>}/>
      </Routes>
    </body>

  )
}

export default App;