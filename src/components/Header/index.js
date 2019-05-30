import React from 'react';
import placeholderLogo from "../../images/placeholder_logo.png";

import './index.css';

const Header = () => {
    return (
        <div className="App-header">
            <div className="App-logo">
                <a className="App-header-title" href="/"><img src={placeholderLogo} alt="React Movie DB" /></a>
            </div>
        </div>
    );
}

export default Header;