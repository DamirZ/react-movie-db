import React, { Component } from 'react';
import { API_KEY, PATH_BASE, PATH_TOP_RATED, PATH_MOVIE, PATH_SHOW } from '../../api';
import List from '../List';
import Loading from '../Loading'

import './index.css';

class Main extends Component {

    constructor(props) {
        super(props);

        this.state = {
            topRated: {},
            activeTopRated: PATH_MOVIE,
            isLoading: false,
            error: null,
        };
    }

    componentDidMount = () => {
        console.log("Active on mount", this.state.activeTopRated)
        this.getTopRated(this.state.activeTopRated)
    }

    getTopRated = (active) => {
        console.log("active",active);
        // if(this.state.activeTopRated === active) return;
        this.setState({activeTopRated: active, isLoading: true})
        fetch(`${PATH_BASE}${active}${PATH_TOP_RATED}?language=en-US&api_key=${API_KEY}`)
            .then(response => response.json())
            .then(topRated => {
                console.log("Top rated: ", topRated)
                this.setTopRated(topRated)
            })
            .catch(error => this.setState({ error: error, isLoading: false }))
    }

    setTopRated = (topRated) => {
        this.setState({
            isLoading: false,
            topRated: topRated
        })

        console.log("State after setting top rated: ",this.state);
    }
    render() {

        const { topRated } = this.state;
        // const { results } = topRated;

        return (
            <React.Fragment>
                {this.state.isLoading && <Loading />}
                <div className="RMDB-AppMain">
                    <h1 className={this.state.activeTopRated === PATH_MOVIE ? "RMDB-AppMainTitle-movie RMDB-AppMainTitle-active" : "RMDB-AppMainTitle-movie"} onClick={() => this.getTopRated(PATH_MOVIE)}>Popular movies</h1>
                    <h1 className={this.state.activeTopRated === PATH_SHOW ? "RMDB-AppMainTitle-show RMDB-AppMainTitle-active" : "RMDB-AppMainTitle-show"} onClick={() => this.getTopRated(PATH_SHOW)}>Popular shows</h1>
                </div>
                {topRated && <List list={topRated} />}
            </React.Fragment>
        );

    }
}

export default Main;