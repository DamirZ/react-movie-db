import React from 'react';
import placeholderLogo from "../../images/placeholder_logo.png";
import SearchBar from '../../components/SearchBar';

import './index.css';

const Header = () => {
    return (
        <div className="RMDB-AppHeader">
            <div className="RMDB-AppLogo">
                <a className="RMDB-AppHeaderTitle" href="/"><img src={placeholderLogo} alt="React Movie DB" /></a>
            </div>
            <SearchBar />
        </div>
    );
}

export default Header;