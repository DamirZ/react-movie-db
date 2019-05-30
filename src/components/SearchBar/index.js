import React, { Component } from 'react';

import './index.css';

class SearchBar extends Component {

    constructor(props) {
        super(props);

        this.state = {
            searchTerm: '',
        };

    }

    handleSearchChange = (e) => {
        this.setState({
            searchTerm: e.target.value
        })
        if(e.target.value.length <= 2) {
            console.log("Need 2 or more letters")
        } else {
            console.log("Search term: ", e.target.value)
        }
    }

    render() {

        const { searchTerm } = this.state;

        return (
            <div className="RMDB-SearchBarWrapper">
                    <input
                    className="RMDB-SearchMovieInput"
                        type="text"
                        placeholder="Search database..."
                        onChange={this.handleSearchChange}
                        value={searchTerm}
                    />
            </div>
        );

    }
}

export default SearchBar;