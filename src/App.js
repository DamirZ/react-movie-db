import React from 'react';
import './App.css';
import Main from './components/Main';

import { PATH_TOP_RATED } from './api';

import { BrowserRouter, Route } from 'react-router-dom';


function App() {
  return (
    <BrowserRouter>
      <div className="RMDB-App">
        <div className="RMDB-AppMain">
          <div className="RMDB-AppContentWrapper">
            <Route exact path="/" render={() => <Main title="Popular" section={PATH_TOP_RATED} />} />
            <Route exact path="/all" render={() => <Main title="Top Rated" section={PATH_TOP_RATED} />} />
          </div>
        </div>
      </div>
    </BrowserRouter>
  );
}

export default App;
