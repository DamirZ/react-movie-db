import React from 'react';
import placeholderLogo from "../../images/placeholder_logo.png";
import SearchBar from '../../components/SearchBar';

import './index.css';

const Header = ( props ) => {
    const {searchList, updateList } = props;
    const originalList = props.originalList
    return (
        <div className="RMDB-AppHeader">
            <div className="RMDB-AppLogo">
                {/* <a className="RMDB-AppHeaderTitle" href="/"><img src={placeholderLogo} alt="React Movie DB" /></a> */}
                <a className="RMDB-AppHeaderTitle" href="/">RMDB</a>
            </div>
            <SearchBar searchList={ searchList } updateList={ updateList } originalList={ originalList } />
        </div>
    );
}

export default Header;