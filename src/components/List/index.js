import React from 'react';
// import * as MovieImages from '../../mockup/images/movies_02.jpg' ;
import './index.css';

import ListItem from '../ListItem';

class List extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            loadItems: 10
        }
    }

    componentDidUpdate(prevProps, nextProps) {
        
    }

    loadMore = () => {
        this.setState({
            loadItems: this.state.loadItems + 10
        })
    }

    render() {

        if (this.props.list === undefined || (Object.entries(this.props.list).length === 0 && this.props.list.constructor === Object)) {
            return null;
        }
        return(
            <div className="RMDB-ListContainer">
                {
                    this.props.list.map(
                        (item, index ) => this.state.loadItems > index && <ListItem key={index} item={item} />
                    )
                }
                {
                    !(this.state.loadItems >= this.props.list.length) && 
                    <div className="RMDB-LoadMore" onClick={this.loadMore}>
                        Load More
                    </div>
                }
            </div>
        )
    }
}
export default List;