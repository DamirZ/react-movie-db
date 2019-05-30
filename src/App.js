import React from 'react';
import './App.css';
import Header from './components/Header';
import Main from './components/Main';


function App() {
  return (
    <div className="RMDB-App">
      <Header />
      <div className="RMDB-AppMain">
        <div className="RMDB-AppContentWrapper">
          <Main title="Popular" />
        </div>
      </div>
    </div>
  );
}

export default App;
