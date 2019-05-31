import React from 'react';

import './index.css';

const List = ({ list }) => {

    console.log("list", list)

    if (list === undefined || (Object.entries(list).length === 0 && list.constructor === Object)) {
        return null;
    }

    return (
        <div className="RMDB-ListContainer">
            {list.results.map(item =>
                <div key={item.id} className="RMDB-ListContainer__item">
                    <div className="RMDB-List__MovieImage">
                        <span className="RMDB-List__MovieVoteAverage">{item.vote_average}</span>
                        <img src={`https://image.tmdb.org/t/p/w185_and_h278_bestv2${item.poster_path}`} alt={item.title} />
                    </div>
                    <div className="RMDB-List__MovieTitle">
                        {item.title ? item.title : item.original_name}
                    </div>
                </div>
            )}
        </div>
    );

}

export default List;