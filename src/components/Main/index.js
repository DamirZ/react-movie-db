import React, { Component } from 'react';
import { API_KEY, PATH_BASE, PATH_POPULAR, PATH_MOVIE } from '../../api';

import './index.css';
import Loading from '../Loading'

class Main extends Component {

    constructor(props) {
        super(props);

        this.state = {
            popularMovies: {}, 
            isLoading: false,
            error: null
        };

    }

    componentDidMount = () => {
        this.getPopularMovies()
    }

    getPopularMovies = () => {
        this.setState({isLoading: true})
        fetch(`${PATH_BASE}${PATH_MOVIE}${PATH_POPULAR}?language=en-US&api_key=${API_KEY}`)
            .then(response => response.json())
            .then(popularMovies => this.setPopularMovies(popularMovies))
            .catch(error => this.setState({error: error, isLoading: false}))
    }

    setPopularMovies = (popularMovies) => {
        this.setState({
            isLoading: false,
            popularMovies: popularMovies
        })

        console.log("State after setting movies: ",this.state);
    }

    render() {

        if(this.state.isLoading) {
            return <Loading />
        }

        return (
            <div>
                <h1 className="RMDB-AppMainTitle">{this.props.title}</h1>
            </div>
        );

    }
}

export default Main;