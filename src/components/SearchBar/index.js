import React, { Component } from 'react';
// import { API_KEY, PATH_BASE, PATH_TOP_RATED, PATH_MOVIE, PATH_SHOW, PATH_SEARCH } from '../../api';
import { API_KEY, PATH_BASE, PATH_MOVIE, PATH_SEARCH } from '../../api';

import './index.css';

class SearchBar extends Component {

    constructor(props) {
        super(props);

        this.state = {
            searchTerm: '',
            result: null,
            searchList: props.searchList,
            originalList: props.searchList
        };
        console.log("Search props ",props)
    }

    componentDidUpdate(prevProps) {
        if(this.props.searchList !== prevProps.searchList) {
            this.setState({
                searchList: this.props.searchList
            })
        }

        if(Object.entries(this.state.originalList).length === 0 && this.state.originalList.constructor === Object) {

            if (Object.entries(this.state.searchList).length !== 0) {
                this.setState({
                    originalList: JSON.parse(JSON.stringify(this.state.searchList))
                })
            }
        }
    }

    handleSearchChange = (e) => {
        this.props.updateList(this.state.originalList)
        if(e.target.value.length < this.state.searchTerm.length) {
        }
        this.setState({
            searchTerm: e.target.value
        })
        if(e.target.value.length < 2) {
            // this.props.updateList(this.state.originalList);
            console.log("Need 2 or more letters")
            this.props.updateList(this.state.originalList)
        } else {
            // delay
            setTimeout(() => this.getSearch(this.state.searchTerm), 400);
            this.props.updateList(this.state.originalList)
            this.getSearch(this.state.searchTerm)
            // console.log("Search term: ", e.target.value)
        }
    }

    getSearch = (searchTerm) => {
        // console.log("ST",searchTerm)
        let filteredList = [];
        // if(this.state.searchList.length > 0) {
            this.state.originalList.map(singleItem => {
                    // console.log("Current one; ", Object.values(singleItem))
                    Object.values(singleItem).map(singleProperty => {
                        if(singleProperty.toString().toLowerCase().includes(searchTerm.toLowerCase()) && filteredList.indexOf(singleItem) == -1) {
                            // console.log("Found one; ", singleProperty)
                                filteredList.push(singleItem);
    
                        }

                    })
            })
        // }

        filteredList.filter((item, index) =>  {return filteredList.indexOf(item) === index})
        this.props.updateList(filteredList);
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